<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecureHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Clickjacking защита
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');

        // CSP: базовая защита + разрешение для Vite сервера
        $csp = $this->buildCSP($request);
        
        $response->headers->set('Content-Security-Policy', $csp);

        return $response;
    }

    /**
     * Построение CSP в зависимости от окружения
     */
    private function buildCSP($request)
    {
        $isLocal = app()->environment(['local', 'development']) || 
                   $request->getHost() === 'localhost' ||
                   $request->getHost() === '127.0.0.1' ||
                   str_starts_with($request->getHost(), '192.168.') ||
                   str_starts_with($request->getHost(), '10.') ||
                   str_starts_with($request->getHost(), '172.');

        if ($isLocal) {
            // Для локальной разработки - разрешаем Vite сервер
            $currentHost = $request->getHost();
            $viteHosts = [
                'http://127.0.0.1:5173',
                'https://127.0.0.1:5173',
                'http://localhost:5173',
                'https://localhost:5173',
                "http://{$currentHost}:5173",
                "https://{$currentHost}:5173"
            ];
            
            $viteHostsStr = implode(' ', $viteHosts);
            
            return "default-src 'self' https://cdn-icons-png.flaticon.com https://www.youtube-nocookie.com; " .
                   "script-src 'self' 'unsafe-inline' 'unsafe-eval' {$viteHostsStr}; " .
                   "style-src 'self' 'unsafe-inline' {$viteHostsStr}; " .
                   "font-src 'self' {$viteHostsStr}; " .
                   "img-src 'self' data: https://cdn-icons-png.flaticon.com; " .
                   "frame-src 'self' https://www.youtube-nocookie.com; " .
                   "frame-ancestors 'self';";
        } else {
            // Для продакшена - стандартная безопасная CSP
            return "default-src 'self' https://cdn-icons-png.flaticon.com https://www.youtube-nocookie.com; " .
                   "script-src 'self' 'unsafe-inline' 'unsafe-eval'; " .
                   "style-src 'self' 'unsafe-inline'; " .
                   "font-src 'self'; " .
                   "img-src 'self' data: https://cdn-icons-png.flaticon.com; " .
                   "frame-src 'self' https://www.youtube-nocookie.com; " .
                   "frame-ancestors 'self';";
        }
    }
}
