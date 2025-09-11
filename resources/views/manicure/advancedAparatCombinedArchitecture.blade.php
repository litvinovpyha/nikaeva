@extends('layouts.main')

@section('title', 'Повышающий курс Аппаратный и комбинированный маникюр + Архитектура ногтей в Алматы | Школа Indigo')
@section('meta_description', 'Обучение аппаратному и комбинированному маникюру с архитектурой ногтей. Диплом, практика,
    скидка до 30% в Алматы.')
@section('meta_keywords', 'повышающий курс маникюра Алматы, аппаратный маникюр, комбинированный маникюр, архитектура
    ногтей, Indigo')
@section('jsonld')
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@graph": [
                                 {
         "@type": "Course",
      "name": "Повышающий курс Аппаратный и комбинированный маникюр + Архитектура ногтей в Алматы",
      "description": "Обучение Аппаратный и комбинированный маникюр + Архитектура ногтей. Идеальное решение, если вы уже действующий мастер, С Дипломом, старт карьеры с Indigo.",
      "provider": {
        "@type": "Organization",
        "name": "Indigo",
        "url": "{{ url('/') }}"
      },
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
    <x-hero-section title="Повышающий курс Аппаратный и комбинированный маникюр + Архитектура ногтей"
        subtitle="Обучение для действующих мастеров. Диплом Indigo, практика и скидка до -30%"
        subsubtitle="— Повышай квалификацию вместе с Indigo!" />
    @include('partials.guarantee', ['showFirstVideo' => false])
    {{--                     Повышающий курс Аппаратный и комбинированный маникюр + Архитектура ногтей --}}
    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">
                    Повышающий курс Аппаратный и комбинированный маникюр + Архитектура ногтей
                </h2>
                <p class="mt-4 text-center text-gray-500">Для действующих мастеров, которые хотят устранить пробелы в
                    знаниях, улучшить технику и повысить качество своих работ.</p>
                <p class="mt-4 text-center text-gray-500">Если после предыдущего обучения у вас остались вопросы —
                    этот
                    курс поможет закрыть все «белые пятна» и выйти на новый профессиональный уровень.</p>

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
                            <p class="font-medium text-gray-900">Санитарные нормы и стерилизация</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Как обеспечить полную безопасность для клиента</li>
                                <li>Все этапы дезинфекции и стерилизации инструмента</li>
                                <li>Работа с одноразовыми материалами</li>
                            </ul>
                        </div>


                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Правильный опил формы
                                Овальная, мягкий квадрат, четкий квадрат, миндаль</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Как избежать ошибок в симметрии и длине</li>
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
                                <li>Узнаете, как выполнять чистую обработку одной фрезой + ножнички/щипчики. Ускорение
                                    времени
                                    работы до 30%</li>
                            </ul>
                        </div>


                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Архитектура ногтей
                                Восстановление углов</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Создание чёткой формы — особенно квадрата</li>
                                <li>Реставрация и коррекция формы</li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Выравнивание ногтевой пластины
                                Идеальные блики с минимальным количеством материала</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Экспресс-выравнивание без переворота</li>
                                <li>Выравнивание топом — когда и как применять</li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Покрытие под кутикулу</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Две техники с идеальным бликом</li>
                                <li>Как избежать затеков и «отслоек»</li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Дизайн
                            </p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Быстрый классический френч
                                </li>
                                <li>Стем пинг: техника и особенности нанесения
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">В завершении:
                            </p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Разбор ошибок учеников
                                </li>
                                <li>Индивидуальные рекомендации от тренера
                                </li>
                                <li>Ответы на вопросы по сложным случаям из практики
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Что вы получите:
                            </p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Прокачанную технику
                                </li>
                                <li>Уверенность в работе
                                </li>
                                <li>Повышение качества сервиса и среднего чека
                                </li>
                                <li>Сертификат повышения квалификации
                                </li>
                                <li>Поддержку тренера после курса</li>
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
                            <h3 class="pt-2 mb-4 text-sm font-semibold tracking-wide text-center text-white uppercase">
                                Цена
                                Повышающего Курса Аппаратного и комбинированного маникюра. АРХИТЕКТУРА
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">86 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">59 990 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">4 999 ₸/мес.</span>
                                </p>

                            </div>
                            <!-- Список преимуществ -->
                            <ul role="list" class="mt-8 space-y-3 text-sm text-gray-200">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    2 занятия по 8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    3 отработки на моделях
                                </li>


                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    БОНУС: чек листы по личному бренду, общению с клиентами, ценнобразованию и инстаграм
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
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
        'title' =>
            'Почему вам стоит записаться на курс повышающий Аппаратный и комбинированный маникюр в школе indigo:',
        'count' => '5',
    ])
    @include('partials.reviews', ['video' => 'false', 'content' => 'manicure'])
    @include('partials.portfolio-manicure')
    @include('partials.team', ['title' => 'Тренер Курса', 'persons' => ['olya', 'veronika', 'vika']])
@endsection
