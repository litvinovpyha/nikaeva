<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Quiz;
use App\Models\QuizAttempt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function create(Course $course, Lesson $lesson)
    {

        return view('admin.quiz.create', compact('lesson', 'course'));
    }

    public function store(Request $request, Course $course, Lesson $lesson)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'questions' => 'required|array',
            'questions.*.question' => 'required|string',
            'questions.*.options' => 'required|array|min:2',
            'questions.*.options.*.text' => 'required|string',
        ]);

        DB::transaction(function () use ($request, $lesson) {
            $quiz = Quiz::create([
                'lesson_id' => $lesson->id,
                'title' => $request->input('title'),
            ]);

            foreach ($request->input('questions') as $q) {
                $options = [];
                foreach ($q['options'] as $option) {
                    $options[] = [
                        'text' => $option['text'],
                        'is_correct' => isset($option['is_correct']) ? true : false,
                    ];
                }

                $quiz->questions()->create([
                    'question' => $q['question'],
                    'options' => $options,
                ]);
            }
        });

        return redirect()->route('lesson.show', [$lesson->course_id, $lesson->id])
            ->with('status', 'Тест и вопросы сохранены!');
    }

    public function show($courseId, $lessonId)
    {
        $course = Course::findOrFail($courseId);
        $lesson = Lesson::findOrFail($lessonId);

        $quiz = Quiz::with('questions')->where('lesson_id', $lessonId)->firstOrFail();
        return view('components.quize-section', compact('quiz', 'course', 'lesson'));
    }

    public function submit(Request $request, $lessonId)
    {
        $quiz = Quiz::with('questions')->where('lesson_id', $lessonId)->firstOrFail();
        $correct = 0;

        foreach ($quiz->questions as $question) {
            $answer = $request->input("question_{$question->id}");
            foreach ($question->options as $option) {
                if ($option['is_correct'] && $option['text'] === $answer) {
                    $correct++;
                }
            }
        }

        $score = ($correct / $quiz->questions->count()) * 100;
        $passed = $score >= 80;

        QuizAttempt::create([
            'quiz_id' => $quiz->id,
            'user_id' => auth()->id(),
            'score' => $score,
            'passed' => $passed,
        ]);

        // Если прошёл — ставим lesson_user.completed_at
        if ($passed) {
            DB::table('lesson_user')->updateOrInsert(
                ['user_id' => auth()->id(), 'lesson_id' => $lessonId],
                ['completed_at' => now(), 'created_at' => now(), 'updated_at' => now()]
            );
        }

        return redirect()->route('mycourses.show', $lessonId)->with('status', $passed ? 'Вы прошли тест!' : 'Вы не прошли тест.');
    }
}
