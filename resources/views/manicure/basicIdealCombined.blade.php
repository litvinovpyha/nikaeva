@extends('layouts.main')

@section('title','Базовый курс маникюра "Идеальный комбинированный" в Алматы | Академия NikaEva')
@section('meta_description', 'Базовый курс маникюра "Идеальный комбинированный" в Алматы. Освойте коммерческие техники маникюра с нуля, получите диплом и практику на моделях. Начало карьеры с NikaEva!')
@section('meta_keywords', 'базовый курс маникюра Алматы, идеальный комбинированный маникюр обучение, курсы маникюра с дипломом, маникюр с нуля NikaEva, обучение ногтевому сервису')

@section('jsonld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Базовый курс маникюра Идеальный комбинированный в Алматы",
  "description": "Обучение идеальному комбинированному маникюру. 2 ключевые техники для начинающих, диплом NikaEva и практика на моделях. Идеальное начало карьеры мастера.",
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
        title="БАЗОВЫЙ КУРС МАНИКЮРА В АЛМАТЫ"
        subtitle="Идеальный комбинированный маникюр с дипломом и практикой"
        subsubtitle="Сертификат • Практика • Скидка до -30%"
    />
    @include('partials.guarantee', ['showFirstVideo' => false])

    {{--                     Базовый курс маникюра "идеальный комбинированный" --}}
    <div class="p-4 bg-white border-t border-gray-200">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">
                    Базовый курс маникюра "идеальный комбинированный"
                </h2>
                <p class="mt-4 text-center text-gray-500">Программа курса включает:</p>

                <ul class="grid grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-dl">
                        <div class="pt-4">
                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                    src="{{ asset('images/manicure/manicure-pedicure-intensiv.webp') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-dl">

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Две коммерческие техники маникюра</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Комбинированный маникюр одной фрезой + работа ножничками или щипчиками
                                    Идеальная техника, востребованная в салонах — быстро, безопасно и качественно
                                </li>
                                <li>Японский маникюр (экоглянцевание)
                                    Эко уход без геля, идеально подходит для клиентов с чувствительными ногтями
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Гель-покрытие под кутикулу с идеальными бликами</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Вы отработаете две техники, чтобы добиться идеального покрытия и зеркального блика
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Формы ногтей: от овала до миндаля</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Пошаговая техника правильного опила и подбора формы под руку клиента</li>

                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Работа с фрезами без пропилов</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Научитесь работать быстро, уверенно и без риска травм</li>

                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Архитектура ногтей и реставрация</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Построение чёткой формы, восстановление углов, создание идеального квадрата, ровного
                                    френча и ремонт сломанных ногтей
                                </li>

                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Экспресс-дизайны, которые продаются</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Вы узнаете, как быстро и просто делать трендовые
                                    дизайны:
                                </li>
                                <li>Френч • Стемпинг • Пигменты • Стразы • Слайдеры • Кошачий глаз • Фольга • Поталь •
                                    Сухоцветы • Втирка
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">SPA-уход для рук и ногтей</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Дополнительная услуга в прайсе, повышающая чек и лояльность клиента</li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Мобильная фотосъёмка ваших работ</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Научитесь снимать свои работы красиво — даже на телефон</li>
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
                                -30% до 30 декабря
                            </div>

                            <!-- Заголовок -->
                            <h3 class="pt-2 mb-4 text-sm font-semibold tracking-wide text-center text-white uppercase">
                                цена Базового курса маникюра
                                "ИДЕАЛЬНЫЙ комбинированный"
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">143 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">99 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">8 333 ₸/мес.</span>
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
                                    5 занятий по 6-8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    7 отработок на моделях + урок по базовым дизайнам
                                </li>

                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Обратная связь с тренером
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
                                    Рассрочка, Kaspi Red
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
        'title' => 'Почему вам стоит записаться на базовый курс маникюра и педикюра идеальный комбинированныйв академии NikaEva:',
        'count' => '5',
    ])
    @include('partials.reviews', ['video' => 'false', 'content' => 'manicure'])
    @include('partials.portfolio-manicure')
    @include('partials.team', ['title' => 'Тренер Курса', 'persons' => ['olya', 'veronika', 'vika']])
@endsection
