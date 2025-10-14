import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0', // Позволяет подключение с любых IP
        port: 5173,
        cors: true, // Включает CORS
        hmr: {
            host: '192.168.0.16', // Указываем IP для HMR
        },
    },
});
