@extends('layouts.main')

@section('title','Бесплатный онлайн-курс маникюра — Indigo')
@section('meta_description', 'Пройдите бесплатный онлайн-курс маникюра от Indigo. Научитесь основам техники, сервису и работе с клиентами. Бесплатный старт для начинающих мастеров.')
@section('meta_keywords', 'бесплатный курс маникюра, онлайн курс маникюр бесплатно, бесплатное обучение маникюру, Indigo маникюр онлайн')

@section('jsonld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Бесплатный онлайн-курс маникюра",
  "description": "Демо-курс для начинающих мастеров маникюра. Научитесь базовым техникам, упаковке услуги и работе с клиентами бесплатно.",
  "provider": {
    "@type": "Organization",
    "name": "Indigo",
    "url": "{{ url('/') }}"
  }
}
</script>
@endsection

@section('content')

<x-hero-section
    title="БЕСПЛАТНЫЙ ОНЛАЙН-КУРС МАНИКЮРА"
    subtitle="Научитесь техникам и сервису с нуля бесплатно — получите доступ к демо-урокам прямо сейчас!"
/>

@include('partials.guarantee', ['showFirstVideo' => true])
<div class="max-w-5xl px-4 py-12 mx-auto">
    <h2 class="mb-4 text-4xl font-bold text-gray-900">Демо-версия онлайн-курса «Мастер маникюра»</h2>
    <p class="mb-10 text-lg text-gray-700">
        Получите бесплатный доступ к первым 7 урокам: теория, техника и практика — попробуйте обучение бесплатно перед полным курсом!
    </p>

    <div class="space-y-12">
        <!-- Урок 1 -->
        <div>
            <h2 class="mb-4 text-2xl font-semibold text-indigo-600">Урок 1: Введение, противопоказания, причины отслоек</h2>
            <div class="aspect-w-16 aspect-h-9">
                <iframe src="https://www.youtube.com/embed/pafrlqoDotc" class="w-full h-full rounded-lg"
                        title="Урок 1: Введение, противопоказания, причины отслоек" frameborder="0"
                        allowfullscreen></iframe>
            </div>
        </div>

        <!-- Урок 2 -->
        <div>
            <h2 class="mb-4 text-2xl font-semibold text-indigo-600">Урок 2: Теория — Инструменты и материалы</h2>
            <div class="aspect-w-16 aspect-h-9">
                <iframe src="https://www.youtube.com/embed/ВСТАВЬ_ID_УРОК2" class="w-full h-full rounded-lg"
                        title="Урок 2: Теория — Инструменты и материалы" frameborder="0"
                        allowfullscreen></iframe>
            </div>
        </div>

        <!-- Урок 3 -->
        <div>
            <h2 class="mb-4 text-2xl font-semibold text-indigo-600">Урок 3: Дезинфекция — важный этап в маникюре</h2>
            <div class="aspect-w-16 aspect-h-9">
                <iframe src="https://www.youtube.com/embed/ВСТАВЬ_ID_УРОК3" class="w-full h-full rounded-lg"
                        title="Урок 3: Дезинфекция — важный этап в маникюре" frameborder="0"
                        allowfullscreen></iframe>
            </div>
        </div>

        <!-- Остальные уроки — аналогично -->

        <!-- CTA блок -->
        <div class="py-12 text-center">
            <a href="{{ route('courses.online') }}"
               class="inline-block px-6 py-4 text-lg font-semibold text-white uppercase bg-indigo-600 rounded-md hover:bg-indigo-700">
                Перейти к полному курсу
            </a>
        </div>
    </div>
</div>
@include('partials.coursesingup', [
    'title' => 'Что вы получите после приобретения платного офлайн курса:',
    'count' => '5',
])

@include('partials.reviews', ['video' => 'true', 'content' => 'onlinemanicure'])

@include('partials.portfolio-manicure')

@include('partials.team', ['title' => 'Кураторы курса', 'persons' => ['olya', 'veronika']])

@endsection
