@extends('layouts.main')
@section('title', 'Курс колориста в Алматы — обучение колористике с нуля до профи | Школа Indigo')

@section('meta_description','Обучение колористике в Алматы: база + повышение. Секреты идеального цвета, практика, диплом и поддержка мастеров. Запишитесь сейчас и получите скидку до 30%!')



@section('meta_keywords','курс колориста Алматы, обучение колористике, курсы колористики, школа парикмахеров, колористика база и повышение, обучение парикмахеров Алматы
')


@section('jsonld')
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@graph": [
            {
               "@type": "Course",
      "name": "Курс колористика база и повышение секреты идеального цвета",
      "description": "Обучение колористика база и повышение, секрет идеального цвета. Практика, диплом и поддержка.",
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
          "name": "Сколько длится курс парикмахера?",
          "acceptedAnswer": {
            "@type": "Answer",
  "text": "Продолжительность обучения зависит от выбранного курса: 4 месяца — полная программа, 3 месяца — женский мастер, 2 месяца — полная программа-экспресс, 1.5 месяца — экспресс-курс. Все программы включают практику и выдачу диплома."
          }
        },
        {
          "@type": "Question",
          "name": "Выдают ли сертификат после окончания курса?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Да, вы получите диплом и именной сертификат Indigo."
          }
        },
        {
          "@type": "Question",
          "name": "Подходит ли курс новичкам без опыта?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Да, курсы подходят для обучения с нуля."
          }
        }
      ]
    }
  ]
}
    </script>
@endsection
@section('content')
    <x-hero-section title="КУРС КОЛОРИСТА В АЛМАТЫ - ОБУЧЕНИЕ С НУЛЯ И ПОВЫШЕНИЕ КВАЛИФИКАЦИИ"
        subtitle="ОБУЧАЕМ С НУЛЯ ДО
                    ТОП-МАСТЕРА ЗА 2 МЕСЯЦА
                   "
        subsubtitle=" СКИДКА ДО -30% НА ОБУЧЕНИЕ
                    УСПЕЙ ЗАПИСАТЬСЯ!" />




    @include('partials.guarantee', ['showSecondVideo' => false])

    <!-- КУРС "Колористика база + повышение. Секреты идеального цвета" -->
    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">КУРС
                    "Колористика база + повышение. Секреты идеального цвета"</h2>
                <p class="mt-4 text-center text-gray-500">Программа курса подойдёт как начинающим, так и действующим
                    мастерам. Вы освоите 10+ востребованных техник окрашивания, разберёте сложные ситуации и научитесь
                    создавать идеальный цвет без страха.
                </p>
                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-li">
                        <div class="pt-4">
                            <p class="font-medium text-center text-gray-900 uppercase">БЛОК 1. Углублённая
                                колористика
                            </p>

                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                    src="{{ asset('images/hairstylist/uglublennaya-koloristika.webp') }}"
                                    alt="Блок по углубленной колористике" width="320" height="320"
                                    class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-li sm:p-2">
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Углублённая колористика: от основ до продвинутого
                                уровня

                            </p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">Углубленная колористика БАЗА+ ПОВЫШЕНИЕ</span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">10 коммерческих техник окрашивания волос</p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">   ТОП-10 коммерческих техник окрашивания, включая:
                                Рельефное окрашивание: Highlights , Babylights,
                                Airtouch, Бразильское окрашивание, Шатуш, Контуринг, прошивку седины, матирование седины.
                            </span>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Работа с корректорами и составление формул
                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Глубокое понимание % оксиданта — как выбрать и
                                применять
                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Нейтрализация нежелательного фона:
                            </p>
                            <span class="pb-2 mt-2 text-sm text-gray-500">▪ воздушные бани <br>
                                ▪ цветовые бани <br>
                                ▪ американский шампунь <br>

                            </span>
                        </div>
                    </li>
                </ul>
                <ul class="grid items-center grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-li">
                        <div class="pt-4">
                            <p class="font-medium text-center text-gray-900 uppercase">БЛОК 2. Коммерческие укладки

                            </p>

                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                    src="{{ asset('images/hairstylist/kommercheskie-ukladki.webp') }}"
                                    alt="Блок по коммерческим укладкам" width="320" height="320"
                                    class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-li sm:p-2">
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Вы научитесь создавать укладки, которые отлично
                                дополняют окрашивание и повышают чек за услугу.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Быстрые и стойкие укладки
                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Под разные типы волос и длину

                            </p>

                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">Брашинг, щипцы, стайлеры
                            </p>

                        </div>

                    </li>
                </ul>

                @include('partials.accordion', ['id' => 3, 'content' => 'colorist'])
                <div class="grid grid-cols-1 div lg:grid-cols-2 ">
                    <div class="flex items-center justify-center px-0 py-4">
                        <div
                            class="relative w-full max-w-2xl px-3 py-6 text-white shadow-xl bg-gray-900/90 backdrop-blur-lg rounded-2xl sm:p-12 ring-1 ring-white/10">
                            <!-- Метка скидки -->
                            <div
                                class="absolute top-0 right-0 px-3 py-1 font-bold text-white uppercase bg-red-700 shadow-md text-1xl rounded-xl">
                                -30% До 25 октября

                            </div>

                            <!-- Заголовок -->
                            <h3 class="pt-2 mb-4 text-sm font-semibold tracking-wide text-center text-white uppercase">
                                Цена Курса колористики база + повышение. секреты идеального цвета

                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">460 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">320 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 мес.</span> по
                                    <span class="font-medium text-white">26 666 ₸/мес.</span>
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
                                    Блок по колористике более 10 техник: база + повышение

                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    реконструкция волоса
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    чек-листы по инстаграм и личному бренду
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    длительность -18 занятий по 8 часов
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    график-3 раза в неделю по 8 часов
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
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    есть возможность ускоренного курса-занятия каждый день
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
        'title' => 'Почему вам стоит записаться на курс колориста в школе indigo:',
        'count' => '8',
    ])
    @include('partials.reviews', ['video' => 'true', 'content' => 'hairstylist'])
    @include('partials.portfolio-hair')

    @include('partials.team', ['title' => 'Тренер Курса', 'persons' => ['karina', 'veronika', 'vika']])
    <div class="relative p-4 overflow-hidden bg-white">
        <div class="relative mx-auto max-w-7xl">
            <div class="grid items-center lg:grid-cols-2 lg:gap-16">
                <!-- Фото слева на ПК -->
                <div class="flex flex-col items-center gap-6 lg:gap-10">
                    <h3 class="text-3xl font-bold tracking-tight text-center text-gray-900 lg:text-3xl lg:text-left">

                        Участие в BEAUBY EXPO 2024 ALMATY </h3>
                    <!-- Видео -->
                    <div class="w-full max-w-2xl overflow-hidden shadow-lg aspect-video rounded-xl">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/Gxg9fuGWhoY"
                            title="Видеоотзыв 2" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <!-- Фото -->
                    <div class="overflow-hidden shadow-xl h-96 w-72 rounded-2xl">
                        <img src="{{ asset('images/team/karina.webp') }}"
                            alt="Карина тренер курса парикмахерского мастерства" class="object-cover w-full h-full">
                    </div>
                </div>


                <!-- Текст -->
                <div class="sm:max-w-lg">
                    <h3 class="text-3xl font-bold tracking-tight text-center text-gray-900 lg:text-4xl lg:text-left">

                        Хотите стать парикмахером в Алматы , но все еще выбираете школу? Боитесь, что не научат? </h3>

                    <p class="mt-6 text-lg text-gray-600">Ждем вас на курсе парикмахера-колориста и мы гарантируем, что
                        вы 100% научитесь или мы предоставим повторный курс за свой счет!</p>

                    <p class="mt-4 text-lg text-gray-600">Программа курса по стрижкам и колористике разработана таким
                        образом, чтобы вы сразу смогли трудоустроиться в салоны города. Наш тренер курса по
                        парикмахерскому искусству Карина Ургалиева с удовольствием поделится своим опытом и знаниями
                        наработанными в течение 22 лет.</p>

                    <p class="mt-4 text-lg text-gray-600">Базовое обучение по парикмахерскому искусству и колористике
                        рассчитано для тех, кто обучается с нуля, а также есть повышающие курсы для тех, кто хочет
                        повысить свои знания или поработать над ошибками. Стоимость курса зависит от выбранного курса.
                        Обучение можно оплатить в рассрочку без %.</p>

                    <p class="mt-4 text-lg text-gray-600">Занятия проходят в оборудованных кабинетах, с предоставлением
                        материалов и инструментов на время обучения. В школе также есть зона кухни, чай, кофе. Добраться
                        до школы можно любым удобным способом: есть рядом станция метро «Алатау», собственная парковка
                        для автомобилей, большое количество общественного транспорта.</p>

                    <p class="mt-4 text-lg text-gray-600">Стать мастером парикмахером в школе Индиго возможно за
                        короткий период: от 1 месяца до 4 месяцев, в зависимости от графика посещения. В программу курса
                        входит:</p>

                    <ul class="mt-4 space-y-2 text-lg text-gray-600 list-disc list-inside">
                        <li>Блок по коммерческим женским стрижкам: формы стрижек по технике английской классики</li>
                        <li>Блок по мужским стрижкам</li>
                        <li>Блок по колористике от базы до повышения</li>
                        <li>Химическая завивка и спа уходы</li>
                        <li>Укладки</li>
                    </ul>

                    <p class="mt-6 text-lg font-semibold text-gray-600">На занятиях изучите теорию и закрепите знания на
                        практике на моделях!</p>
                    <p class="mt-6 text-lg font-semibold text-gray-600">Позвольте себе стать парикмахером и будьте на
                        шаг впереди конкурентов!</p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
