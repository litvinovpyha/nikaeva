@extends('layouts.main')

@section('title', 'Курс эстетического педикюра в аппаратной технике в Алматы | Академия NikaEva')
@section('meta_description', 'Обучение эстетическому педикюру в аппаратной технике. Диплом, сертификат, практика, скидка
    до 30% в Алматы.')
@section('meta_keywords', 'курс педикюра Алматы, эстетический педикюр, аппаратный педикюр, курсы педикюра NikaEva,
    обучение педикюру')

@section('jsonld')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Курс эстетического педикюра в аппаратной технике в Алматы",
  "description": "Обучение эстетического педикюра в аппаратной технике. Идеальное решение для действующих мастеров. Диплом NikaEva, практика и скидка до 30%.",
  "provider": {
    "@type": "Organization",
    "name": "NikaEva",
    "url": "{{ url('/') }}"
  }
}
</script>
@endsection

@section('content')
    <x-hero-section title="Курс эстетического педикюра в аппаратной технике"
        subtitle="Обучение для мастеров, желающих повысить квалификацию. Диплом NikaEva, практика и скидка до -30%"
        subsubtitle="— Освой новые техники вместе с NikaEva!" />
    @include('partials.guarantee', ['showFirstVideo' => false])
    {{--                     курс эстетического педикюра в аппаратной технике --}}
    <div class="p-4 bg-white">
        <div class="grid items-center max-w-2xl mx-auto gap-x-8 gap-y-16 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 uppercase sm:text-4xl">
                    курс эстетического педикюра в аппаратной технике

                </h2>
                <p class="mt-4 text-center text-gray-500">Премиальная услуга, которую клиенты ценят за безопасность,
                    комфорт и идеальный результат
                </p>

                <ul class="grid grid-cols-1 mt-3 lg:grid-cols-2 gap-x-6 gap-y-3 lg:gap-x-8 ">
                    <li class="left-dl">
                        <div class="pt-4">
                            <span class="flex justify-center mt-2 text-sm text-gray-500"><img
                                    src="{{ asset('images/manicure/pedicure.webp') }}" alt="Блок по коммерческим стрижкам"
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
                            <p class="font-medium text-gray-900">Правильная форма ногтей</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Опил с учётом анатомии</li>
                                <li>Как создавать эстетичную и стойкую форму</li>
                            </ul>
                        </div>

                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Аппаратная обработка стоп</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Шлифовка стоп и пяток дисками разной
                                    абразивности</li>
                                <li>Безопасная техника без риска ожогов и порезов</li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Комбинированная техника для пальчиков
                                Совмещение фрезы и щипчиков</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Чистая обработка кутикулы и боковых валиков</li>
                                <li>Минимум травматизации — максимум эстетики</li>
                            </ul>
                        </div>
                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Покрытие гель-лаком
                                Техника «под кутикулу»</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Работа с плотными пигментами и нюдовыми
                                    оттенками</li>
                            </ul>
                        </div>


                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">Мобильная фотосъёмка ваших работ</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>Научитесь снимать свои работы красиво — даже на телефон</li>
                            </ul>
                        </div>


                        <div class="pt-4 border-gray-200">
                            <p class="font-medium text-gray-900">В результате:</p>
                            <ul class="pt-4 pl-5 text-sm text-gray-500 list-disc">
                                <li>У вас будет чёткая техника + понимание
                                    анатомии
                                    стоп</li>
                                <li>Научитесь работать быстро и безопасно</li>
                                <li>Расширите перечень услуг и поднимете средний
                                    чек</li>
                                <li>Получите сертификат и поддержку
                                    тренера после курса</li>
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
                            <h3 class="pt-2 mb-4 text-sm font-semibold tracking-wide text-center text-white uppercase">
                                цена курса эстетического педикюра аппаратом

                            </h3>
                            <div class="space-y-2 gap sm:space-y-1 sm:flex sm:flex-wrap sm:items-baseline sm:gap-x-10">

                                <!-- Старая цена + новая -->
                                <p class="flex items-baseline text-sm gap-x-2">
                                    <span class="text-base text-gray-400 line-through sm:text-sm">58 000 ₸</span>
                                    <span class="text-2xl font-bold text-green-400 sm:text-xl">40 000 ₸</span>
                                </p>

                                <!-- Рассрочка -->
                                <p class="text-sm text-gray-300">
                                    В рассрочку на <span class="font-medium text-white">12 месяцев</span> по
                                    <span class="font-medium text-white">3 333 ₸/мес.</span>
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
                                    1 занятие — 8 часов (с 10-00 до 18-00 в зависимости от скорости отработки)
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    2 отработки на моделях
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
        'title' => 'Почему вам стоит записаться на курс эстетического педикюра в аппаратной технике  в академии NikaEva:',
        'count' => '5',
    ])
    @include('partials.reviews', ['video' => 'false', 'content' => 'manicure'])
    @include('partials.portfolio-manicure')
    @include('partials.team', ['title' => 'Тренер Курса', 'persons' => ['olya', 'veronika', 'vika']])
@endsection
