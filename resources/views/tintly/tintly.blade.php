<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Умное приложение для hair стилиста</title>
    @vite('resources/css/app.css')

</head>

<body>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
    <nav
        class="fixed top-0 z-50 flex items-center justify-between w-full py-4 px-6 md:px-16 lg:px-24 xl:px-32 text-white text-sm">
        <a href="/"
            class="text-2xl sm:text-3xl font-bold tracking-tight text-sky-500 hover:text-sky-700 transition">
            Tintly
        </a>

        <div class="hidden md:flex items-center gap-8 transition duration-500">
            <a href="/" class="hover:text-sky-500 transition">
                Главная
            </a>
            <a href="/" class="hover:text-sky-500 transition">
                О приложении
            </a>
            <a href="#prising" class="hover:text-sky-500 transition">
                Цены
            </a>
            <a href="#prising" class="hover:text-sky-500 transition">
                Скачать
            </a>
        </div>

        <button
            class="hidden md:block px-6 py-2.5 bg-sky-600 hover:bg-sky-700 active:scale-95 transition-all rounded-full">
            скачать бесплатно
        </button>
        {{-- <button id="open-menu" class="md:hidden active:scale-90 transition">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-menu-icon lucide-menu">
                <path d="M4 5h16" />
                <path d="M4 12h16" />
                <path d="M4 19h16" />
            </svg>
        </button> --}}
    </nav>

    <div class=" absolute left-1/2 transform -translate-x-1/2 size-72 bg-sky-600 blur-[300px]"></div>

    <section
        class="bg-black text-white min-h-screen flex flex-col justify-center items-center px-6 lg:px-8 text-center">
        <a href="#prising"
            class="group flex items-center gap-2 rounded-full mb-20  p-1 pr-3 text-sky-100 bg-sky-200/15">
            <span class="bg-sky-800 text-white text-xs px-3.5 py-1 rounded-full">
                Новинка
            </span>
            <p class="flex items-center gap-1">
                <span class="block lg:hidden">попробуй бесплатно</span>

                <span class="hidden lg:block">попробуй 14 дней бесплатно</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevron-right-icon lucide-chevron-right group-hover:translate-x-0.5 transition duration-300">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </p>
        </a>
        <h1 class="font-medium  text-3xl  text-center uppercase md:text-5xl max-w-3xl  mb-8">
            без бумажек и хаоса: весь учет клиентов и расходов материалов в одном приложении для
            <span
                class="bg-gradient-to-r leading-[60px]  font-medium  text-3xl  text-center uppercase md:text-5xl max-w-3xl from-sky-500 to-sky-300 px-3 rounded-xl text-nowrap">
                hair стилистов
            </span>
        </h1>

        <a href="#prising" class="bg-sky-600 hover:bg-sky-700 text-white font-semibold py-4 px-8 rounded-lg transition">
            Начать использовать
        </a>
    </section>


    <section class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-black mb-12">Какие проблемы решает приложение</h2>

            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="flex flex-col items-center p-6 rounded-lg  hover:shadow-lg transition">
                    <div class="bg-sky-600 text-white rounded-md p-4 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                        </svg>

                    </div>
                    <h3 class="text-xl font-semibold text-black mb-2">Точные расчёты без ошибок</h3>
                    <p class="text-gray-700 text-center">Автоматически рассчитывайте нужное количество материалов —
                        быстро, точно и без ручных просчётов.</p>
                </div>

                <div class="flex flex-col items-center p-6 rounded-lg  hover:shadow-lg transition">
                    <div class="bg-sky-600 text-white rounded-md p-4 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>


                    </div>
                    <h3 class="text-xl font-semibold text-black mb-2">Удобный учёт клиентов</h3>
                    <p class="text-gray-700 text-center">Сохраняйте информацию о клиентах: фото, формулы окрашивания,
                        предпочтения и историю услуг — всё под рукой.</p>
                </div>

                <div class="flex flex-col items-center p-6 rounded-lg  hover:shadow-lg transition">
                    <div class="bg-sky-600 text-white rounded-md p-4 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                        </svg>

                    </div>
                    <h3 class="text-xl font-semibold text-black mb-2">История и аналитика</h3>
                    <p class="text-gray-700 text-center">Просматривайте историю услуг, клиентов, затраченых материалов,
                        за определенный период.
                    </p>
                </div>

                <div class="flex flex-col items-center p-6 rounded-lg  hover:shadow-lg transition">
                    <div class="bg-sky-600 text-white rounded-md p-4 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                        </svg>

                    </div>
                    <h3 class="text-xl font-semibold text-black mb-2">Быстрый доступ к истории услуг</h3>
                    <p class="text-gray-700 text-center">
                        Все предыдущие услуги клиента всегда под рукой — ничего не теряется.
                    </p>
                </div>

                <div class="flex flex-col items-center p-6 rounded-lg  hover:shadow-lg transition">
                    <div class="bg-sky-600 text-white rounded-md p-4 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m6.75 12H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>

                    </div>
                    <h3 class="text-xl font-semibold text-black mb-2">Без бумажек и блокнотов</h3>
                    <p class="text-gray-700 text-center">
                        Все записи в цифровом виде — просто откройте приложение и работайте без хаоса и тетрадей.
                    </p>
                </div>

                <div class="flex flex-col items-center p-6 rounded-lg  hover:shadow-lg transition">
                    <div class="bg-sky-600 text-white rounded-md p-4 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                    </div>
                    <h3 class="text-xl font-semibold text-black mb-2">Экономия времени</h3>
                    <p class="text-gray-700 ztext-center">Больше не нужно искать формулы, прошлые записи или фото
                        клиентов — всё хранится в одном месте и открывается за секунды.</p>
                </div>
            </div>

        </div>
    </section>

    <section class=" bg-gray-900" id="prising">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold  text-white">Разработано специально для вашей
                    команды hair стилистов</h2>
                <p class="mb-5 font-light  sm:text-xl text-gray-400">В Tintly от NikaEva
                    мы сосредоточены на создании
                    технологий, которые помогают heir-мастерам экономить время и ресурсы, повышая
                    ценность их бизнеса и способствуя развитию индустрии красоты.</p>
            </div>
            <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
                <div
                    class="flex flex-col p-6 mx-auto max-w-lg text-center  rounded-lg border  shadow border-gray-600 xl:p-8 bg-gray-800 text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Индивидуальный</h3>
                    <p class="font-light  sm:text-lg text-gray-400">Лучший вариант для личного пользования.</p>
                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold"> 990</span>
                        <span class=" text-gray-400">/месяц</span>
                    </div>
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5  text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Персональная настройка под мастера</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5  text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Без скрытых платежей</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5  text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Команда: <span class="font-semibold">1 мастер</span></span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5  text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Premium-поддержка: <span class="font-semibold">6 месяцев</span></span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5  text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Первые 14 дней — <span class="font-semibold">БЕСПЛАТНО</span></span>
                        </li>
                    </ul>
                    <a href="#"
                        class=" bg-sky-600 hover:bg-sky-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center text-white  focus:ring-primary-900">
                        Начать</a>
                </div>
                <div
                    class="flex flex-col p-6 mx-auto max-w-lg text-center   rounded-lg border shadow border-gray-600 xl:p-8 bg-gray-800 text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Салон</h3>
                    <p class="font-light  sm:text-lg text-gray-400">Идеально для салонов с несколькими специалистами,
                        расширенная и премиум-поддержка.</p>
                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">1 990</span>
                        <span class=" text-gray-400">/месяц</span>
                    </div>
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5  text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Всё из тарифа «Индивидуальный»</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Команда до 5 мастеров</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5  text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Расширенная Premium-поддержка<span class="font-semibold">24 месяца</span></span>
                        </li>
                        {{-- <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5  text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Автоматическая запись клиентов<span class="font-semibold"></span></span>
                        </li> --}}

                    </ul>
                    <a href="#"
                        class="bg-sky-600 hover:bg-sky-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center text-white  focus:ring-primary-900">
                        Начать</a>
                </div>
                <div
                    class="flex flex-col p-6 mx-auto max-w-lg text-center rounded-lg border  shadow border-gray-600 xl:p-8 bg-gray-800 text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Энтерпрайс</h3>
                    <p class="font-light  sm:text-lg text-gray-400">Подписка без ограничений. Все включено</p>
                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">2 990</span>
                        <span class=" text-gray-400">/месяц</span>
                    </div>
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5  text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Всё из тарифов «Индивидуальный» и «Салон»</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5  text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Неограниченное количество мастеров</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5  text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Расширенная Premium+ поддержка <span class="font-semibold">36 месяцев</span></span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5  text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Индивидуальные решения под нужды вашего бизнеса<span
                                    class="font-semibold"></span></span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5  text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span><span class="font-semibold">Расширенные инструменты аналитики и
                                    управления</span></span>
                        </li>
                    </ul>
                    <a href="#"
                        class=" bg-sky-600 hover:bg-sky-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center text-white  focus:ring-primary-900">
                        Начать</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-sky-600 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                Попробуй наше приложение!
            </h2>
            <p class="mt-4 text-lg text-indigo-200 max-w-2xl mx-auto">
                Быстро рассчитывай расход красителя и оксиданта, веди учет клиентов — всё в одном
                приложении.
            </p>
            <div class="mt-8 flex justify-center gap-x-4">
                <a href="#prising"
                    class="inline-block rounded-lg bg-white px-6 py-3 text-base font-semibold text-sky-600 shadow hover:bg-gray-100">
                    Скачать приложение
                </a>
                <a href="#prising"
                    class="inline-block rounded-lg px-6 py-3 text-base font-semibold text-white ring-1 ring-white hover:bg-sky-500">
                    оставить сообщение
                </a>
            </div>
        </div>
    </section>
    <footer class="bg-white rounded-lg shadow-sm m-4 ">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm  sm:text-center ">© 2025 <a href="" class="hover:underline">Tintly</a>. Все
                права защищены.
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium   sm:mt-0">
                <li>
                    <a href="" class="hover:underline me-4 md:me-6">Основное</a>
                </li>
                <li>
                    <a href="" class="hover:underline me-4 md:me-6">О приложении</a>
                </li>
                <li>
                    <a href="" class="hover:underline me-4 md:me-6">Как пользоваться</a>
                </li>
                <li>
                    <a href="" class="hover:underline">Скачать</a>
                </li>
            </ul>
        </div>
    </footer>

</body>

</html>
