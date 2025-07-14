@extends('layouts.main')

@section('content')
    <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Создать тест для: {{ $lesson->title }}</h1>

        <form action="{{ route('quiz.store', [$course->id, $lesson->id]) }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block font-medium mb-1">Название теста</label>
                <input type="text" name="title" class="w-full border rounded px-3 py-2" required>
            </div>

            <h2 class="text-xl font-semibold mb-2">Вопросы</h2>

            <div id="questions">
                <!-- Первый вопрос по умолчанию -->
                <div class="question mb-8 border p-4 rounded">
                    <label class="block mb-1">Вопрос</label>
                    <input type="text" name="questions[0][question]" class="w-full border rounded px-3 py-2 mb-4" required>

                    <label class="block mb-1">Варианты ответа</label>
                    @for ($i = 0; $i < 3; $i++)
                        <div class="flex mb-2">
                            <input type="text" name="questions[0][options][{{ $i }}][text]" class="flex-1 border rounded px-3 py-2" placeholder="Вариант {{ $i + 1 }}" required>
                            <label class="ml-2 flex items-center">
                                <input type="checkbox" name="questions[0][options][{{ $i }}][is_correct]" value="1">
                                <span class="ml-1 text-sm">Правильный</span>
                            </label>
                        </div>
                    @endfor
                </div>
            </div>

            <button type="button" onclick="addQuestion()" class="bg-green-600 text-white px-4 py-2 rounded mb-4">
                + Добавить вопрос
            </button>

            <br>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                Сохранить тест
            </button>
        </form>
    </div>

    <script>
        let questionIndex = 1;

        function addQuestion() {
            const questionsDiv = document.getElementById('questions');

            const questionHTML = `
                <div class="question mb-8 border p-4 rounded">
                    <label class="block mb-1">Вопрос</label>
                    <input type="text" name="questions[${questionIndex}][question]" class="w-full border rounded px-3 py-2 mb-4" required>

                    <label class="block mb-1">Варианты ответа</label>
                    ${[0,1,2].map(i => `
                        <div class="flex mb-2">
                            <input type="text" name="questions[${questionIndex}][options][${i}][text]" class="flex-1 border rounded px-3 py-2" placeholder="Вариант ${i + 1}" required>
                            <label class="ml-2 flex items-center">
                                <input type="checkbox" name="questions[${questionIndex}][options][${i}][is_correct]" value="1">
                                <span class="ml-1 text-sm">Правильный</span>
                            </label>
                        </div>
                    `).join('')}
                </div>
            `;

            questionsDiv.insertAdjacentHTML('beforeend', questionHTML);
            questionIndex++;
        }
    </script>
@endsection
