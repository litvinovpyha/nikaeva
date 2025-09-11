@extends('layouts.main')
@section('title','Все курсы маникюра и дизайна ногтей в Алматы | Школа Indigo')
@section('meta_description', "Обучение маникюру, педикюру и дизайну ногтей с нуля до топ-мастера за 2 месяца. Диплом, сертификат, практика, скидка до 30%. Начни карьеру уже сегодня в Алматы!")
@section('meta_keywords', 'курс маникюра Алматы, обучение педикюру, дизайн ногтей, курсы ногтевого сервиса, диплом маникюра, курсы маникюра с нуля, Indigo маникюр')
@section('jsonld')
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@graph": [
            {
              "@type": "Course",
              "name": "Базовый курс Идеальный комбинированный маникюр в Алматы",
              "description": "Обучение идеального комбинированного маникюра. 2 коммерческие техники маникюра, С Дипломом, старт карьеры с Indigo.",
              "provider": {
                "@type": "Organization",
                "name": "Indigo",
                "url": "{{ url('/') }}"
      }
    },
    {
         "@type": "Course",
      "name": "Интенсивный курс Идеального комбинированного и аппаратного маникюра в Алматы",
      "description": "Интенсивное обучение идеального комбинированного и аппаратного маникюра. 3 ключевые техники, С Дипломом, старт карьеры с Indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
     {
         "@type": "Course",
      "name": "Базовый курс маникюра и педикюра в Алматы",
      "description": "Обучение маникюра и педикюра. 3 ключевые техники + педикюр, С Дипломом, старт карьеры с Indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
         {
         "@type": "Course",
      "name": "Интерсивный курс маникюра и педикюра в Алматы",
      "description": "Интенсивный обучение маникюра и педикюра. 3 ключевые техники + педикюр, С Дипломом, старт карьеры с Indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
             {
         "@type": "Course",
      "name": "Курс 3 в 1 NAIL STYLIST Маникюр, Педикюр, Моделирование ногтей в Алматы",
      "description": "Обучение 3 в 1 NAIL STYLIST Маникюр, Педикюр, Моделирование ногтей. 3 ключевые техники + педикюр, С Дипломом, старт карьеры с Indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
                 {
         "@type": "Course",
      "name": "Повышающий курс Японский маникюр, экоглянцевание в Алматы",
      "description": "Обучение Японский маникюр, экоглянцевание. Идеальное решение, если вы уже делаете маникюр, С Дипломом, старт карьеры с Indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
                     {
         "@type": "Course",
      "name": "Курс эстетического педикюра в аппаратной технике в Алматы",
      "description": "Обучение эстетического педикюра в аппаратной технике . Идеальное решение, если вы уже делаете педикюр, С Дипломом, старт карьеры с Indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
                     {
         "@type": "Course",
      "name": "Повышающий курс Аппаратный и комбинированный маникюр + Архитектура ногтей в Алматы",
      "description": "Обучение Аппаратный и комбинированный маникюр + Архитектура ногтей. Идеальное решение, если вы уже действующий мастер, С Дипломом, старт карьеры с Indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
                         {
         "@type": "Course",
      "name": "Повышающий курс Моделирование ногтей на верхние формы в Алматы",
      "description": "Обучение Моделирование ногтей на верхние формы. Идеальное решение, если вы уже опытный мастер, С Дипломом, старт карьеры с Indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      }
    },
    {
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Кому подойдут курсы маникюра и педикюра в Indigo?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Курсы подойдут как начинающим мастерам без опыта, так и профессионалам, желающим повысить квалификацию."
      }
    },
    {
      "@type": "Question",
      "name": "Выдают ли сертификат после курса?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Да, после завершения курса вы получаете диплом Indigo, подтверждающий вашу квалификацию."
      }
    }
  ]
}
  ]
}
</script>
@endsection
@section('content')
    <x-hero-section
        title="ОБУЧЕНИЕ МАНИКЮРУ, ПЕДИКЮРУ И ДИЗАЙНУ НОГТЕЙ НА КУРСАХ С ДИПЛОМОМ В АЛМАТЫ"
        subtitle="ОБУЧАЕМ С НУЛЯ ДО ТОП-МАСТЕРА ЗА 2 МЕСЯЦА. СЕРТИФИКАТ, ПРАКТИКА И СКИДКА ДО -30%"
        subsubtitle="— НАЧНИ КАРЬЕРУ УЖЕ СЕГОДНЯ!"
    />
    @include('partials.guarantee', ['showFirstVideo' => false])
    {{-- интенсивный курс маникюра "идеальный комбинированный+ аппаратный" --}}
    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">
                    интенсивный курс маникюра "идеальный комбинированный+ аппаратный"
                </h2>
                <p class="mt-4 text-center text-gray-500">Программа курса включает:</p>

                <ul class="grid grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-dl">
                        <div class="pt-4">
                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                    src="{{ asset('images/manicure/manicure-couse.webp') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-dl">
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Маникюр — 3 ключевые техники, которые приносят
                                доход:</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Аппаратный маникюр — современная и быстрая техника</li>
                                <li>Комбинированный одной фрезой + щипчики / ножнички — для плотной и чистой обработки
                                </li>
                                <li>Японский маникюр (эко глянцевание) — уход без покрытия, подходит даже беременным и
                                    аллергикам
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
                                -30% До 25 сентября
                            </div>

                            <!-- Заголовок -->
                            <h3
                                class="pt-2 mb-4 text-sm font-semibold tracking-wide text-center text-white uppercase">
                                цена интенсивного курса маникюра
                                "ИДЕАЛЬНЫЙ комбинированный+аппаратный"
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">200 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">139 990 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">11 666 ₸/мес.</span>
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
                                    7 занятий по 6- 8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    11 отработок на моделях + урок по базовым дизайнам
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
        'title' => 'Почему вам стоит записаться на курс маникюра и педикюра в школе indigo:',
        'count' => '5',
    ])
    @include('partials.reviews', ['video' => 'false', 'content' => 'manicure'])
    @include('partials.portfolio-manicure')
    @include('partials.team', ['title' => 'Тренер Курса', 'persons' => ['olya', 'veronika', 'vika']])
@endsection
