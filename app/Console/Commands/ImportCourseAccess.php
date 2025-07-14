<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ImportCourseAccess extends Command
{
    protected $signature = 'import:course-access {file}';
    protected $description = 'Импортирует доступ к курсам для пользователей из файла';

    public function handle()
    {
        $filePath = $this->argument('file');

        if (!file_exists($filePath)) {
            $this->error("Файл не найден: $filePath");
            return;
        }

        $content = file_get_contents($filePath);

        // Парсим все строки вида: (id, 'email', 'name', course_id, ?);
        preg_match_all("/\(\s*\d+,\s*'([^']+)',\s*'([^']+)',\s*(\d+)[^)]*\)/u", $content, $matches, PREG_SET_ORDER);

        $this->info("Найдено записей: " . count($matches));

        foreach ($matches as $match) {
            $email = $match[1];
            $name = $match[2];
            $courseId = $match[3];

            $user = User::where('email', $email)->first();

            if ($user) {
                // Проверим, есть ли уже запись
                $exists = DB::table('course_user')
                    ->where('user_id', $user->id)
                    ->where('course_id', $courseId)
                    ->exists();

                if (!$exists) {
                    DB::table('course_user')->insert([
                        'user_id' => $user->id,
                        'course_id' => $courseId,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                    $this->info("Доступ выдан: {$email} => курс {$courseId}");
                } else {
                    $this->line("Пропущено (уже есть): {$email} => курс {$courseId}");
                }
            } else {
                $this->warn("Пользователь не найден: {$email}");
            }
        }

        $this->info("Импорт завершён.");
    }
}
