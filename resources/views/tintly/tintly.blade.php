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
            <a href="/products" class="hover:text-sky-500 transition">
                О приложении
            </a>
            <a href="/stories" class="hover:text-sky-500 transition">
                Цены
            </a>
            <a href="/pricing" class="hover:text-sky-500 transition">
                Скачать
            </a>
        </div>

        <button
            class="hidden md:block px-6 py-2.5 bg-sky-600 hover:bg-sky-700 active:scale-95 transition-all rounded-full">
            скачать бесплатно
        </button>
        <button id="open-menu" class="md:hidden active:scale-90 transition">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-menu-icon lucide-menu">
                <path d="M4 5h16" />
                <path d="M4 12h16" />
                <path d="M4 19h16" />
            </svg>
        </button>
    </nav>
    <div id="mobile-navlinks"
        class="fixed inset-0 z-[100] bg-black/40 text-white backdrop-blur flex flex-col items-center justify-center text-lg gap-8 md:hidden transition-transform duration-300 -translate-x-full">
        <a href="/">
            Главная
        </a>
        <a href="/products">
            О приложении
        </a>
        <a href="/stories">
            Скачать
        </a>
        <a href="/pricing">
            Оплата
        </a>
        <button id="close-menu"
            class="active:ring-3 active:ring-white aspect-square size-10 p-1 items-center justify-center bg-sky-600 hover:bg-sky-700 transition text-white rounded-md flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-x-icon lucide-x">
                <path d="M18 6 6 18" />
                <path d="m6 6 12 12" />
            </svg>
        </button>
    </div>

    <div
        class="min-h-screen relative flex flex-col    justify-end items-center  text-sm px-4 md:px-16 lg:px-24 xl:px-32 bg-black text-white">
        <div class="absolute top-28 -z-1 left-1/2 transform -translate-x-1/2 size-72 bg-sky-600 blur-[300px]"></div>
        <a href="#" class="group flex items-center gap-2 rounded-full  p-1 pr-3 mt-18 text-sky-100 bg-sky-200/15">
            <span class="bg-sky-800 text-white text-xs px-3.5 py-1 rounded-full">
                Новинка
            </span>
            <p class="flex items-center gap-1">
                <span>попробуй 14 дней бесплатно</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevron-right-icon lucide-chevron-right group-hover:translate-x-0.5 transition duration-300">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </p>
        </a>
        <h1 class=" uppercase text-4xl leading-[60px] md:text-6xl md:leading-[88px] font-medium max-w-2xl text-center">
            Хватит терять деньги на ошибках
            <span class="bg-gradient-to-r from-sky-500 to-sky-300 px-3 rounded-xl text-nowrap"> скачай Tintly
            </span>

        </h1>
        <p class="text-base text-center text-slate-200 max-w-lg mt-6">
            Введи количество материала — получи итоговую цену услуги.
            Приложение сохраняет расчёт, клиента и услугу.
        <div class="flex items-center gap-4 mt-8">
            <button class="bg-sky-600 hover:bg-sky-700 text-white rounded-full px-7 h-11">
                Попробовать
            </button>
            <button
                class="flex items-center gap-2 border border-sky-900 hover:bg-sky-950/50 transition rounded-full px-6 h-11">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-video-icon lucide-video">
                    <path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5" />
                    <rect x="2" y="6" width="14" height="12" rx="2" />
                </svg>
                <span>посмотреть демо</span>
            </button>
        </div>
        <div class="flex flex-wrap justify-center items-center gap-4 md:gap-14 mt-12">
            <p class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-check-icon lucide-check size-5 text-sky-600">
                    <path d="M20 6 9 17l-5-5" />
                </svg>
                <span class="text-slate-400">больше никаких "бумажек"</span>
            </p>
            <p class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-check-icon lucide-check size-5 text-sky-600">
                    <path d="M20 6 9 17l-5-5" />
                </svg>
                <span class="text-slate-400">14 дней бесплатно</span>
            </p>
            <p class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-check-icon lucide-check size-5 text-sky-600">
                    <path d="M20 6 9 17l-5-5" />
                </svg>
                <span class="text-slate-400">Учет услуг и клиентов</span>
            </p>
        </div>
        <img src="https://raw.githubusercontent.com/prebuiltui/prebuiltui/main/assets/hero/hero-section-showcase.png"
            class=" w-full rounded-[15px] max-w-4xl mt-30" alt="hero section showcase" />
    </div>

    <script>
        const openMenu = document.getElementById("open-menu");
        const closeMenu = document.getElementById("close-menu");
        const navlinks = document.getElementById("mobile-navlinks");

        const openMenuHandler = () => {
            navlinks.classList.remove("-translate-x-full")
            navlinks.classList.add("translate-x-0")
        }

        const closeMenuHandler = () => {
            navlinks.classList.remove("translate-x-0")
            navlinks.classList.add("-translate-x-full")
        }

        openMenu.addEventListener("click", openMenuHandler);
        closeMenu.addEventListener("click", closeMenuHandler);
    </script>






    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Заголовок -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Без бумажек и хаоса: весь учет клиентов и
                    расходов в одном приложении</h2>
                <p class="mt-4 text-gray-600 text-lg">Точно рассчитай расход красителя и стоимость окрашивания с нашим
                    приложением</p>
            </div>

            <!-- Сетка с проблемами и решениями -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <!-- Проблемы -->
                <div class="space-y-6">
                    <h3 class="text-xl font-semibold text-red-600">Проблемы без приложения</h3>
                    <ul class="space-y-4 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-red-500 mr-3 text-xl">❌</span>
                            <span>Трата времени на ручные расчёты и бумажные заметки</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-3 text-xl">❌</span>
                            <span>Ошибки в подсчёте стоимости для клиента</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-3 text-xl">❌</span>
                            <span>Сложно вести точный учет количества материалов</span>
                        </li>


                    </ul>
                </div>

                <!-- Решения -->
                <div class="space-y-6">
                    <h3 class="text-xl font-semibold text-green-600">Как наше приложение помогает</h3>
                    <ul class="space-y-4 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-3 text-xl">✅</span>
                            <span>Автоматический расчёт расхода материалов — просто вводишь количество</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-3 text-xl">✅</span>
                            <span>Экономия времени — расчёт мгновенный, без бумаги</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-3 text-xl">✅</span>
                            <span>Точная стоимость для клиента — точный рассход для салона</span>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </section>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base/7 font-semibold text-indigo-600">Убираем бумагу из рук</h2>
                <p
                    class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl lg:text-balance">
                    Экономьте деньги и время: все расчеты и учет клиентов в одном приложении
                </p>
                <p class="mt-6 text-lg/8 text-gray-700">
                    Быстро рассчитай расход красителя и оксиданта и расходиников, посчитай стоимость окрашивания без
                    ошибок. Сохрани услугу и клиента.
                </p>
            </div>

            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">

                    <!-- Функция 1 -->
                    <div class="relative pl-16">
                        <dt class="text-base/7 font-semibold text-gray-900">
                            <div
                                class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-sky-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                                </svg>

                            </div>
                            Автоматический расчёт красителя
                        </dt>
                        <dd class="mt-2 text-base/7 text-gray-600">
                            Вводишь количество, а приложение считает точную оплату.
                        </dd>
                    </div>

                    <!-- Функция 2 -->
                    <div class="relative pl-16">
                        <dt class="text-base/7 font-semibold text-gray-900">
                            <div
                                class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-sky-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>

                            </div>
                            Экономия времени
                        </dt>
                        <dd class="mt-2 text-base/7 text-gray-600">
                            Мгновенные расчёты без ручных формул и бумажных заметок.
                        </dd>
                    </div>

                    <!-- Функция 3 -->
                    <div class="relative pl-16">
                        <dt class="text-base/7 font-semibold text-gray-900">
                            <div
                                class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-sky-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>

                            </div>
                            Точная стоимость
                        </dt>
                        <dd class="mt-2 text-base/7 text-gray-600">
                            Учитываются цены красителя и оксиданта, чтобы клиент видел реальную сумму.
                        </dd>
                    </div>

                    <!-- Функция 4 -->
                    <div class="relative pl-16">
                        <dt class="text-base/7 font-semibold text-gray-900">
                            <div
                                class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-sky-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                </svg>

                            </div>
                            История расчётов
                        </dt>
                        <dd class="mt-2 text-base/7 text-gray-600">
                            Сохраняй предыдущие расчёты и используй.
                        </dd>
                    </div>

                    <div class="relative pl-16">
                        <dt class="text-base/7 font-semibold text-gray-900">
                            <div
                                class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-sky-600">
                                <!-- Иконка: учет клиентов (например, UserIcon из Heroicons) -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>

                            </div>
                            Учёт клиентов
                        </dt>
                        <dd class="mt-2 text-base/7 text-gray-600">
                            Сохраняйте информацию о клиентах, истории окрашиваний и предпочтения для удобного повторного
                            обслуживания.
                        </dd>
                    </div>


                    <!-- Функция 6 -->
                    <div class="relative pl-16">
                        <dt class="text-base/7 font-semibold text-gray-900">
                            <div
                                class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-sky-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                </svg>

                            </div>
                            Удобный интерфейс
                        </dt>
                        <dd class="mt-2 text-base/7 text-gray-600">
                            Интуитивно понятный дизайн и мобильная версия для работы прямо с телефона.
                        </dd>
                    </div>

                </dl>
            </div>
        </div>
    </div>
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
                <a href="#download"
                    class="inline-block rounded-lg bg-white px-6 py-3 text-base font-semibold text-sky-600 shadow hover:bg-gray-100">
                    Скачать приложение
                </a>
                <a href="#demo"
                    class="inline-block rounded-lg px-6 py-3 text-base font-semibold text-white ring-1 ring-white hover:bg-sky-500">
                    оставить сообщение
                </a>
            </div>
        </div>
    </section>
    <footer class="bg-white rounded-lg shadow-sm m-4 ">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center ">© 2025 <a href=""
                    class="hover:underline">Tintly</a>. Все
                права защищены.
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500  sm:mt-0">
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
