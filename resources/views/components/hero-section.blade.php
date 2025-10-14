<div class="relative flex items-center justify-center py-24 bg-gray-900 sm:py-32 isolate">
    <div aria-hidden="true"
         class="absolute inset-0 -z-20 bg-gradient-to-tr from-gray-800 to-black opacity-60"></div>

    <div class="max-w-2xl px-4 mx-auto text-center sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-white sm:text-6xl">
            {{ $title }}
        </h1>
        <p class="mt-6 text-lg text-gray-300 sm:text-xl">
            {{ $subtitle }} <br>   {{ $subsubtitle }}
        </p>
      
        <div class="flex items-center justify-center mt-10 gap-x-6">
            <a href="{{ route('callback') }}"
               class="px-5 py-3 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow hover:bg-indigo-500 focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-NikaEva-600">
                Заказать звонок
            </a>
            <a href="{{ route('courses.online')}}" class="text-sm font-semibold text-white hover:text-gray-300">
                Онлайн курсы <span aria-hidden="true">→</span>
            </a>
        </div>
    </div>
</div>
