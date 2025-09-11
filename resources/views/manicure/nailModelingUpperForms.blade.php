@extends('layouts.main')

@section('title','Курс моделирования ногтей на верхние формы в Алматы | Школа Indigo')
@section('meta_description', "Повышающий курс моделирования ногтей на верхние формы. Научись создавать идеальные ногти, отработай практику и получи диплом Indigo в Алматы.")
@section('meta_keywords', 'курсы моделирования ногтей Алматы, обучение верхние формы, курс наращивания ногтей, диплом ногтевого сервиса, Indigo курсы ногтей')

@section('jsonld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Course",
      "name": "Курс моделирования ногтей на верхние формы в Алматы",
      "description": "Практический курс по моделированию ногтей на верхние формы. Идеален для мастеров, которые хотят повысить квалификацию и расширить свои навыки.",
      "provider": {
        "@type": "Organization",
        "name": "Школа Indigo",
        "url": "{{ url('/') }}"
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Что я узнаю на курсе моделирования ногтей на верхние формы?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Вы освоите технику работы с верхними формами, научитесь быстро и качественно моделировать ногти, получите диплом Indigo."
          }
        },
        {
          "@type": "Question",
          "name": "Нужен ли опыт для прохождения курса?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Курс подходит для мастеров с базовыми навыками маникюра, которые хотят повысить квалификацию и освоить новые техники."
          }
        },
        {
          "@type": "Question",
          "name": "Выдают ли диплом после завершения курса?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Да, вы получаете диплом Indigo, который подтверждает вашу квалификацию и даёт возможность работать в салонах или на себя."
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
        title="КУРС МОДЕЛИРОВАНИЯ НОГТЕЙ НА ВЕРХНИЕ ФОРМЫ"
        subtitle="ПОВЫШЕНИЕ КВАЛИФИКАЦИИ ДЛЯ МАСТЕРОВ С ДИПЛОМОМ INDIGO"
        subsubtitle="— ОСВОЙ НОВУЮ ТЕХНИКУ И СТАНЬ ВОСТРЕБОВАННЫМ МАСТЕРОМ В АЛМАТЫ"
    />
    @include('partials.guarantee', ['showFirstVideo' => false])

    <!-- Контент курса -->


    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">Повышающий
                    курс
                    Моделирование ногтей на верхние формы
                </h2>
                <p class="mt-4 text-center text-gray-500">Для практикующих мастеров, готовых выйти на новый уровень!
                </p>

                <ul class="grid grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-dl">
                        <div class="pt-4">
                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                    src="{{ asset('images/manicure/manicure-modeling-course.webp') }}"
                                    alt="Блок по коммерческим стрижкам"
                                    class="object-cover w-full max-w-xs rounded-lg shadow-md"></span>
                        </div>
                    </li>
                    <li class="right-dl">
                        <div class="pt-4 border-t border-gray-200">
                            <p class="font-medium text-gray-900">
                                Курс создан для опытных специалистов, желающих освоить современную и быструю технику
                                моделирования без классических бумажных форм. Минимальный опил, высокая прочность и эстетика
                                результата — всё это вы освоите под руководством профессионального тренера.
                            </p>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Блок безопасности
                            </p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Обновлённые санитарные нормы
                                </li>
                                <li>Пошаговая стерилизация и дезинфекция инструментов
                                </li>
                                <li>Организация безопасного и эргономичного рабочего пространства
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Подготовка к моделированию
                            </p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Правильный маникюр перед наращиванием
                                </li>
                                <li>Удаление старого материала фрезой без повреждения ногтевой пластины
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Техника салонного моделирования
                            </p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Моделирование на верхние формы: пошаговый алгоритм
                                </li>
                                <li>Минимальный опил — больше времени на качество и дизайн
                                </li>
                                <li>Отрисовка френча: эстетика и точность линий
                                </li>
                                <li>Баланс толщины и прочности: как делать лёгкие, но надёжные ногти
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">После прохождения курса вы:
                            </p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Освоите актуальную технику моделирования
                                </li>
                                <li>Сократите время на процедуру без потери качества
                                </li>
                                <li>Улучшите эстетику и стойкость результата
                                </li>
                                <li>Получите сертификат повышения квалификации
                                </li>
                                <li>Получите обратную связь от тренера по вашим работам</li>
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
                                Цена Курса моделирования ногтей -
                                верхние формы
                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">115 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">80 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">6 666 ₸/мес.</span>
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
                                    3 занятия по 6-8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
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
        'title' => 'Почему вам стоит записаться на курс моделирования ногтей на верхние формы в школе indigo:',
        'count' => '5',
    ])
    @include('partials.reviews', ['video' => 'false', 'content' => 'manicure'])
    @include('partials.portfolio-manicure')
    @include('partials.team', ['title' => 'Тренер Курса', 'persons' => ['olya', 'veronika', 'vika']])
@endsection
