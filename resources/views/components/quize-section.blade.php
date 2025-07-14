@props(['quiz', 'lesson', 'course'])

<h1>{{ $quiz->title }}</h1>
    <form action="{{ route('quiz.submit', [$course->id, $lesson->id]) }}" method="POST">
        @csrf
        @foreach ($quiz->questions as $question)
            <div>
                <p>{{ $question->question }}</p>
                @foreach ($question->answers as $answer)
                    <label>
                        <input type="radio" name="answers[{{ $question->id }}]" value="{{ $answer->id }}">
                        {{ $answer->answer }}
                    </label>
                @endforeach
            </div>
        @endforeach
        <button type="submit">Отправить</button>
    </form>

