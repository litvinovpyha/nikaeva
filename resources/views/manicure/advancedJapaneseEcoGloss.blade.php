@extends('layouts.main')

@section('title','Повышающий курс Японский маникюр и экоглянцевание в Алматы | Академия NikaEva')
@section('meta_description', 'Обучение японскому маникюру и экоглянцеванию в Алматы. Повышающий курс для мастеров, диплом NikaEva, сертификат, практика, скидка до 30%.')
@section('meta_keywords', 'японский маникюр Алматы, экоглянцевание, курс японского маникюра, повышение квалификации маникюр, NikaEva маникюр')

@section('jsonld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Повышающий курс Японский маникюр и экоглянцевание в Алматы",
  "description": "Повышающий курс для мастеров. Обучение японскому маникюру и экоглянцеванию в Алматы. Диплом NikaEva, практика и скидка до 30%.",
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
        title="Повышающий курс — Японский маникюр и экоглянцевание"
        subtitle="Современные техники ухода за ногтями. Диплом NikaEva, сертификат и практика"
        subsubtitle="— Повышай квалификацию вместе с NikaEva!"
    />
    @include('partials.guarantee', ['showFirstVideo' => false])

    {{--     повышающий курс "Японский маникюр, экоглянцевание" --}}
    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">
                    повышающий курс "Японский маникюр, экоглянцевание"
                </h2>
                <p class="mt-4 text-center text-gray-500">Для действующих мастеров, которые хотят выйти на новый уровень
                </p>

                <ul class="grid grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-dl">
                        <div class="pt-4">
                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                    src="{{ asset('images/manicure/japan-manicure.webp') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-dl">

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Этот курс — идеальное решение, если вы уже работаете в сфере ногтевого сервиса и хотите:</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>расширить список услуг</li>
                                <li>освоить премиальную технику для клиентов, которые не носят гель</li>
                                <li>научиться работать быстро, чисто и безопасно</li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900"></p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Аппаратный маникюр по-мокрому</li>
                                <li>Деликатная техника, подходящая даже для чувствительной кожи. Повышенная безопасность,
                                    минимальный риск травматизации</li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900"></p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li> Комбинированный маникюр одной фрезой</li>
                                <li>Узнаете, как выполнять чистую обработку одной фрезой + ножнички/щипчики. Ускорение времени
                                    работы до 30%</li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Японский
                                маникюр (экоглянцевание) </p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Натуральная техника ухода — без покрытия</li>
                                <li>Подходит для беременных, аллергиков и поклонников естественного образа</li>
                                <li>Освоите поэтапную процедуру восстановления, шлифовки и полировки ногтевой пластины с
                                    применением паст и пудр на основе природных компонентов</li>


                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Формат:</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Только практика</li>
                                <li>Индивидуальный подход</li>
                                <li>Все материалы включены</li>
                                <li>Диплом повышения квалификации</li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">После курса вы:</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Вы сможете предлагать премиальные услуги в
                                    прайсе</li>
                                <li>Привлечёте новую аудиторию — включая клиентов,
                                    отказавшихся от геля</li>
                                <li>Получите уверенность и отточенную технику</li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="grid grid-cols-1 div lg:grid-cols-2 ">
                    <div class="flex items-center justify-center px-0 py-4">
                        <div
                            class="relative w-full max-w-2xl px-3 py-6 text-white shadow-xl bg-gray-900/90 backdrop-blur-lg rounded-2xl sm:p-12 ring-1 ring-white/10">
                            <!-- Метка скидки -->
                            <div
                                class="absolute top-0 right-0 px-3 py-1 font-bold text-white uppercase bg-red-700 shadow-md text-1xl rounded-xl">
                                -30% До 15 ноября
                            </div>

                            <!-- Заголовок -->
                            <h3
                                class="pt-2 mb-4 text-sm font-semibold tracking-wide text-center text-white uppercase">
                                Цена
                                Повышающего Курса "ЯПОНСКИЙ МАНИКЮР"
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">45 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">30 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">2 500 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    1 занятие — 8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    3 отработки на моделях
                                </li>


                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    БОНУС: чек листы по личному бренду, общению с клиентами, ценнобразованию и инстаграм
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    РАССРОЧКА , KASPI RED
                                </li>
                            </ul>
                            <!-- Кнопка записи -->
                            <a href="{{ route('callback') }}"
                               class="block w-full px-5 py-3 mt-8 text-sm font-semibold text-center text-white bg-indigo-700 rounded-md shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                ЗАПИСАТЬСЯ
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('partials.coursesingup', [
        'title' => 'Почему вам стоит записаться на Повышающий курс Японский маникюр и экоглянцевание в академии NikaEva:',
        'count' => '5',
    ])
    @include('partials.reviews', ['video' => 'false', 'content' => 'manicure'])
    @include('partials.portfolio-manicure')
    @include('partials.team', ['title' => 'Тренер Курса', 'persons' => ['olya', 'veronika', 'vika']])
@endsection
