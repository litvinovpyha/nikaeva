@extends('layouts.main')

@section('title','Бесплатный онлайн-курс маникюра — NikaEva')
@section('meta_description', 'Пройдите бесплатный онлайн-курс маникюра от NikaEva. Научитесь основам техники, сервису и работе с клиентами. Бесплатный старт для начинающих мастеров.')
@section('meta_keywords', 'бесплатный курс маникюра, онлайн курс маникюр бесплатно, бесплатное обучение маникюру, NikaEva маникюр онлайн')

@section('jsonld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Бесплатный онлайн-курс маникюра",
  "description": "Демо-курс для начинающих мастеров маникюра. Научитесь базовым техникам, упаковке услуги и работе с клиентами бесплатно.",
  "provider": {
    "@type": "Organization",
    "name": "NikaEva",
    "url": "{{ url('/') }}"
  }
}
</script>
@endsection

@section('content')

<x-hero-section
    title="БЕСПЛАТНЫЙ ОНЛАЙН-КУРС МАНИКЮРА"
    subtitle="Научитесь техникам и сервису с нуля бесплатно"
     subsubtitle="— получите доступ к демо-урокам прямо сейчас!"
/>

@include('partials.guarantee', ['showFirstVideo' => true])
<div class="max-w-5xl px-4 py-12 mx-auto">
        <div class="space-y-12">
            <!-- Урок 1 -->
            <div>
                <h2 class="mb-4 text-2xl font-semibold text-center text-indigo-600">Урок 1: Введение, противопоказания, причины отслоек</h2>
                <div class="aspect-w-16 aspect-h-9">
                    <iframe src="https://www.youtube.com/embed/pafrlqoDotc" class="w-full h-full rounded-lg"
                        title="Урок 1: Введение, противопоказания, причины отслоек демо" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <!-- Урок 2 -->
            <div>
                <h2 class="mb-4 text-2xl font-semibold text-center text-indigo-600">Урок 2: Теория-Инструменты и материалы</h2>
                <div class="aspect-w-16 aspect-h-9">
                    <iframe src="https://www.youtube.com/embed/78rP2DsMKVk" class="w-full h-full rounded-lg"
                        title="Урок 2: Теория-Инструменты и материалы демо" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <!-- Урок 3 -->
            <div>
                <h2 class="mb-4 text-2xl font-semibold text-center text-indigo-600">Урок 3: Дезинфекция, важный этап в маникюре
                </h2>
                <div class="aspect-w-16 aspect-h-9">
                    <iframe src="https://www.youtube.com/embed/27D8eslnLWI" class="w-full h-full rounded-lg"
                        title="Урок 3: Дезинфекция, важный этап в маникюре  демо" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <!-- Урок 4 -->
            <div>
                <h2 class="mb-4 text-2xl font-semibold text-center text-indigo-600">Урок 4: Теория. Строение ногтя, техника снятия, опил формы
                </h2>
                <div class="aspect-w-16 aspect-h-9">
                    <iframe src="https://www.youtube.com/embed/rtW86-5dZqc" class="w-full h-full rounded-lg"
                        title="Урок 4: Теория. Строение ногтя, техника снятия, опил формы демо" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <!-- Урок 5 -->
            <div>
                <h2 class="mb-4 text-2xl font-semibold text-center text-indigo-600">Урок 5: Техника опила</h2>
                <div class="aspect-w-16 aspect-h-9">
                    <iframe src="https://www.youtube.com/embed/CVkqDt4HaHY" class="w-full h-full rounded-lg"
                        title="Урок 5: Техника опила демо" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <!-- Урок 6 -->
            <div>
                <h2 class="mb-4 text-2xl font-semibold text-center text-indigo-600">Урок 6: Техника классического маникюра</h2>
                <div class="aspect-w-16 aspect-h-9">
                    <iframe src="https://www.youtube.com/embed/j7KCgXfSvfY" class="w-full h-full rounded-lg"
                        title="Урок 6: ТЕХНИКА КЛАССИЧЕСКОГО МАНИКЮРа  демо" frameborder="0" allowfullscreen></iframe>

                </div> <iframe src="https://www.youtube.com/embed/2OmvPsxuN6M" class="w-full h-full rounded-lg"
                        title="Урок 6: ТЕХНИКА КЛАССИЧЕСКОГО МАНИКЮРа  демо" frameborder="0" allowfullscreen></iframe>
            </div>
            <!-- Урок 7 -->
            <div>
                <h2 class="mb-4 text-2xl font-semibold text-center text-indigo-600">Урок 7: Техника комбинированного маникюра ножничками
                </h2>
                <div class="aspect-w-16 aspect-h-9">
                    <iframe src="https://www.youtube.com/embed/TsqFwLePsVY" class="w-full h-full rounded-lg"
                        title="Урок 7: ТЕХНИКА КОМБИНИРОВАННОГО МАНИКЮРА НОЖНИЧКАМИ демо" frameborder="0" allowfullscreen></iframe>
                    <iframe src="https://www.youtube.com/embed/gf7DBXCuxZw" class="w-full h-full rounded-lg"
                        title="Урок 7: ТЕХНИКА КОМБИНИРОВАННОГО МАНИКЮРА НОЖНИЧКАМИ демо" frameborder="0" allowfullscreen></iframe>
                </div>
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
