<header class="fixed top-0 left-0 z-50 w-full bg-black shadow">
    <nav class="flex items-center justify-between p-3 lg:px-8" aria-label="Global">
        <div class="lg:hidden flex items-center">
            <a href="https://www.instagram.com/pokhlebaeva.pro/?igshid=174ro53kwcgg1"
                class="flex items-center justify-center p-3 text-sm/6 font-semibold text-gray-900">
                <span class="sr-only">Наш инстаграм</span>
                <svg class="flex-none text-white size-5 lucide lucide-instagram-icon lucide-instagram"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                </svg>
            </a>
            <a href="tel:+77089727646"
                class="flex items-center justify-center p-3 text-sm/6 font-semibold text-gray-90">
                <span class="sr-only">Позвонить нам</span>
                <svg class="flex-none text-white size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                    data-slot="icon">
                    <path fill-rule="evenodd"
                        d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>

        <!-- Логотип по центру -->
        <div class="flex-1 flex justify-center">
            <a href="{{ route('home') }}">
                <span class="sr-only">Академия красоты NikaEva Курсы парикмахеров, маникюра в Алматы</span>
                <img class="w-auto no-modal" src="{{ asset(path: 'images/logo.svg') }}" alt="school logotyle">
            </a>
        </div>

        <!-- Меню справа (только для мобильных) -->
        <div class="lg:hidden flex items-center">
            {{-- TikTok иконка --}}
            <a href="https://www.tiktok.com/@nikaevabeautyacademy?_t=ZM-90XNMDWXu7Y&_r"
                class="flex items-center justify-center p-3 text-sm/6 font-semibold text-gray-90">
                <span class="sr-only">Наш тикток</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 25 42"
                    class="w-7 h-7 text-white" <!-- 👈 Делаем ту же высоту, что и у Instagram -->
                    aria-label="TikTok">
                    <g clip-path="url(#a)">
                        <path fill="#25F4EE"
                            d="M9.875 16.842v-1.119A9 9 0 0 0 8.7 15.64c-4.797-.006-8.7 3.9-8.7 8.708a8.7 8.7 0 0 0 3.718 7.134A8.68 8.68 0 0 1 1.38 25.55c0-4.737 3.794-8.598 8.495-8.707">
                        </path>
                        <path fill="#25F4EE"
                            d="M10.087 29.526c2.14 0 3.89-1.707 3.966-3.83l.007-18.968h3.462a7 7 0 0 1-.109-1.202h-4.727l-.006 18.969a3.98 3.98 0 0 1-3.967 3.829 3.9 3.9 0 0 1-1.846-.46 3.95 3.95 0 0 0 3.22 1.662m13.905-16.36v-1.055a6.5 6.5 0 0 1-3.584-1.068 6.57 6.57 0 0 0 3.584 2.123">
                        </path>
                        <path fill="#FE2C55"
                            d="M20.408 11.043a6.54 6.54 0 0 1-1.616-4.315h-1.265a6.56 6.56 0 0 0 2.881 4.315M8.707 20.365a3.98 3.98 0 0 0-3.974 3.976c0 1.528.87 2.858 2.134 3.523a3.94 3.94 0 0 1-.754-2.32 3.98 3.98 0 0 1 3.973-3.977c.41 0 .805.07 1.176.185V16.92a9 9 0 0 0-1.176-.083c-.07 0-.134.006-.204.006v3.708a4 4 0 0 0-1.175-.185">
                        </path>
                        <path fill="#FE2C55"
                            d="M23.992 13.166v3.676a11.25 11.25 0 0 1-6.579-2.116v9.622c0 4.8-3.903 8.713-8.706 8.713a8.67 8.67 0 0 1-4.99-1.579 8.7 8.7 0 0 0 6.37 2.781c4.797 0 8.706-3.906 8.706-8.714v-9.621a11.25 11.25 0 0 0 6.579 2.116v-4.73a6.5 6.5 0 0 1-1.38-.148">
                        </path>
                        <path fill="#fff"
                            d="M17.413 24.347v-9.621a11.25 11.25 0 0 0 6.58 2.116v-3.676a6.57 6.57 0 0 1-3.584-2.123 6.6 6.6 0 0 1-2.887-4.315h-3.463l-.006 18.968a3.98 3.98 0 0 1-3.967 3.83 3.99 3.99 0 0 1-3.225-1.656 3.99 3.99 0 0 1-2.134-3.523A3.98 3.98 0 0 1 8.7 20.371c.409 0 .805.07 1.176.185v-3.708c-4.702.103-8.496 3.964-8.496 8.701 0 2.289.888 4.373 2.338 5.933a8.67 8.67 0 0 0 4.989 1.58c4.797 0 8.706-3.913 8.706-8.715">
                        </path>
                    </g>
                    <defs>
                        <clipPath id="a">
                            <path fill="#000" d="M0 0h25v42H0z"></path>
                        </clipPath>
                    </defs>
                </svg>
            </a>

            </a>
            @auth
                <div class="relative">
                    <button id="userMenuButton" type="button" aria-label="Open user menu" role="button"
                        class="flex items-center font-semibold text-gray-900 gap-x-1 text-sm/6" onclick="toggleUserMenu()">
                        <span class="sr-only">Open user menu</span>
                        <svg class="size-6 bg-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                    <!-- Выпадающее меню -->
                    <div id="userDropdown"
                        class="absolute z-50 hidden w-screen max-w-md mt-5 overflow-y-auto bg-white shadow-lg top-7 -right-3 lg:-right-8">
                        <div role="menu">
                            <div class="relative flex items-center p-4 rounded-lg group gap-x-6 text-sm/6 hover:bg-gray-50">
                                <div
                                    class="flex items-center justify-center flex-none rounded-lg size-11 bg-gray-50 group-hover:bg-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="text-gray-600 size-6 group-hover:text-indigo-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="{{ route('mycourses.index') }}" class="block font-semibold text-gray-900">
                                        Мои курсы
                                        <span class="absolute inset-0"></span>
                                    </a>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="relative flex items-center w-full p-4 text-left rounded-lg group gap-x-6 text-sm/6 hover:bg-gray-50">
                                    <div
                                        class="flex items-center justify-center flex-none rounded-lg size-11 bg-gray-50 group-hover:bg-white">
                                        <svg class="text-gray-600 size-6 group-hover:text-indigo-600"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                            <polyline points="16 17 21 12 16 7" />
                                            <line x1="21" y1="12" x2="9" y2="12" />
                                        </svg>
                                    </div>
                                    <span class="flex-auto font-semibold text-gray-900">Выйти</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div class="relative">
                    <button id="userMenuButton" type="button" aria-label="Open user menu" role="button"
                        class="flex items-center font-semibold text-gray-900 gap-x-1 text-sm/6"
                        onclick="toggleUserMenu()">
                        <span class="sr-only">Open user menu</span>
                        <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                    <!-- Выпадающее меню -->
                    <div id="userDropdown"
                        class="absolute z-50 hidden w-screen max-w-md mt-2 overflow-y-auto bg-white shadow-lg top-10 -right-3 lg:-right-8">
                        <div role="menu">
                            <div
                                class="relative flex items-center p-4 rounded-lg group gap-x-6 text-sm/6 hover:bg-gray-50">
                                <div
                                    class="flex items-center justify-center flex-none rounded-lg size-11 bg-gray-50 group-hover:bg-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="text-gray-600 size-6 group-hover:text-indigo-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12" />
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="{{ route('courses.online') }}" class="block font-semibold text-gray-900">
                                        Онлайн обучение
                                        <span class="absolute inset-0"></span>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="relative flex items-center p-4 rounded-lg group gap-x-6 text-sm/6 hover:bg-gray-50">
                                <div
                                    class="flex items-center justify-center flex-none rounded-lg size-11 bg-gray-50 group-hover:bg-white">
                                    <svg class="text-gray-600 size-6 group-hover:text-indigo-600"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                        <polyline points="16 17 21 12 16 7" />
                                        <line x1="21" y1="12" x2="9" y2="12" />
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="{{ route('login') }}" class="block font-semibold text-gray-900">
                                        Войти
                                        <span class="absolute inset-0"></span>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="relative flex items-center p-4 rounded-lg group gap-x-6 text-sm/6 hover:bg-gray-50">
                                <div
                                    class="flex items-center justify-center flex-none rounded-lg size-11 bg-gray-50 group-hover:bg-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="text-gray-600 size-6 group-hover:text-indigo-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="{{ route('register') }}" class="block font-semibold text-gray-900">
                                        Регистрация
                                        <span class="absolute inset-0"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endauth
        </div>

        <div class="hidden lg:flex items-center lg:gap-x-12">
            <a href="{{ route('home') }}" class="hidden font-semibold text-white lg:flex text-sm/6">Главная</a>
            <a href="{{ route('courses.online') }}"
                class="hidden font-semibold text-white lg:flex text-sm/6">Онлайн-обучение</a>
            <!-- Кнопки Instagram и телефона справа для десктопа -->
            <div class="hidden lg:grid grid-cols-2 divide-gray-900/5">
                <a href="https://www.instagram.com/pokhlebaeva.pro/?igshid=174ro53kwcgg1"
                    class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 font-semibold text-gray-900">
                    <span class="sr-only">Наш инстаграм</span>
                    <svg class="flex-none text-white size-5 lucide lucide-instagram-icon lucide-instagram"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                    </svg>
                </a>
                <a href="tel:+77089727646"
                    class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 font-semibold text-gray-90">
                    <span class="sr-only">Позвонить нам</span>
                    <svg class="flex-none text-white size-5" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd"
                            d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="hidden lg:flex text-white">+7 (708) 97-27-646</span>
                </a>
            </div>
        </div>
    </nav>
</header>

<script>
    function toggleUserMenu() {
        const dropdown = document.getElementById('userDropdown');
        if (dropdown) {
            dropdown.classList.toggle('hidden');
        }
    }

    // Закрытие меню при клике вне его
    document.addEventListener('click', function(event) {
        const userMenuButton = document.getElementById('userMenuButton');
        const userDropdown = document.getElementById('userDropdown');

        if (userMenuButton && userDropdown && !userMenuButton.contains(event.target) && !userDropdown.contains(
                event.target)) {
            userDropdown.classList.add('hidden');
        }
    });
</script>
