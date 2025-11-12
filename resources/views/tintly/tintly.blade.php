<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>

<body>
    <header class="absolute inset-x-0 top-0 z-50">
        <nav aria-label="Global" class="flex items-center justify-between p-6 lg:px-8">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5 font-bold text-2xl tracking-tight text-sky-600">
                    <span class="sr-only">Tintly</span>
                    Tintly
                </a>

            </div>
            <div class="flex lg:hidden">
                <button type="button" command="show-modal" commandfor="mobile-menu"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                        aria-hidden="true" class="size-6">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="#" class="text-sm/6 font-semibold text-gray-900">Основное</a>
                <a href="#" class="text-sm/6 font-semibold text-gray-900">О приложении</a>
                <a href="#" class="text-sm/6 font-semibold text-gray-900">Как пользоваться</a>
                <a href="#" class="text-sm/6 font-semibold text-gray-900">Скачать</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">

            </div>
        </nav>
        <el-dialog>
            <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
                <div tabindex="0" class="fixed inset-0 focus:outline-none">
                    <el-dialog-panel
                        class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                        <div class="flex items-center justify-between">
                            <a href="#" class="-m-1.5 p-1.5 font-bold text-2xl tracking-tight text-[#006FFD]">
                                <span class="sr-only">Tintly</span>
                                Tintly
                            </a>

                            <button type="button" command="close" commandfor="mobile-menu"
                                class="-m-2.5 rounded-md p-2.5 text-gray-700">
                                <span class="sr-only">Close menu</span>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    data-slot="icon" aria-hidden="true" class="size-6">
                                    <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-6 flow-root">
                            <div class="-my-6 divide-y divide-gray-500/10">
                                <div class="space-y-2 py-6">
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Основное</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">О
                                        приложении</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Как
                                        пользоваться</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Скачать</a>
                                </div>
                                <div class="py-6">

                                </div>
                            </div>
                        </div>
                    </el-dialog-panel>
                </div>
            </dialog>
        </el-dialog>
    </header>


    <div class="bg-white">
        <div class="relative isolate px-6 pt-14 lg:px-8">
            <!-- Верхняя декоративная форма -->
            <div aria-hidden="true"
                class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
                <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                    class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 
                        bg-linear-to-tr from-[#006FFD] to-[#C2E0FF] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75">
                </div>
            </div>

            <!-- Контент hero с изображением -->
            <div
                class="mx-auto max-w-7xl py-32 sm:py-48 lg:py-56 flex flex-col lg:flex-row items-center lg:items-start gap-10 lg:gap-20">
                <!-- Текст -->
                <div class="max-w-2xl text-center lg:text-left">
                    <h1 class="text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">
                        Умный калькулятор для окрашивания волос
                    </h1>
                    <p class="mt-8 text-lg font-medium text-gray-500 sm:text-xl/8">
                        Введи количество красителя, оксида и шампуня — и получи итоговую цену услуги.
                        Приложение автоматически сохраняет расчёт, клиента и услугу, чтобы всё было под контролем
                        мастера.
                    </p>
                    <div class="mt-10 flex items-center justify-center lg:justify-start gap-x-6">
                        <a href="#"
                            class="rounded-md bg-sky-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-sky-500">
                            Получить доступ
                        </a>
                        <a href="#" class="text-sm/6 font-semibold text-gray-900">Узнать больше →</a>
                    </div>
                </div>
                {{-- 
            <div class="flex justify-center lg:justify-end">
                <img src="{{ asset('images/phone-mockup.png') }}" alt="Phone Mockup" class="w-72 sm:w-96 lg:w-auto">
            </div> --}}
            </div>
        </div>
    </div>
    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Заголовок -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Хватит считать вручную!</h2>
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
                    Всё, что нужно для точного окрашивания
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
