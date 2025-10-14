@extends('layouts.main')

@section('title', 'Заказать обратный звонок — Академия NikaEva')
@section('meta_description', 'Оставьте заявку на обратный звонок от академии NikaEva. Мы свяжемся с вами в ближайшее время и
    ответим на все вопросы об обучении.')
@section('meta_keywords', 'обратный звонок NikaEva, связаться, консультация, парикмахерские курсы, курсы маникюра')
@section('jsonld')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Обратный звонок — Академия NikaEva",
  "url": "{{ url('/obratnyi-zvonok') }}",
  "mainEntity": {
    "@type": "Organization",
    "name": "Академия-студия NikaEva",
    "url": "{{ url('/') }}",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+7 777 777 77 77",
      "contactType": "customer support",
      "areaServed": "KZ",
      "availableLanguage": ["ru"]
    }
  }
}
</script>
@endsection
@section('content')
    <div class="flex flex-col justify-center min-h-full p-4">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="font-bold tracking-tight text-center text-gray-900 text-2xl/9">Оставить заявку!
            </h2>
            {{-- Успешный алерт --}}
            @if (session('success'))
                <div class="px-4 py-3 mt-4 text-teal-900 bg-teal-100 border-t-4 border-teal-500 rounded-b shadow-md"
                    role="alert">
                    <div class="flex">
                        <div class="py-1">
                            <svg class="w-6 h-6 mr-4 text-teal-500 fill-current" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path
                                    d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold">Заявка успешно отправлена!</p>
                            <p class="text-sm">Мы свяжемся с вами в ближайшее время.</p>
                        </div>
                    </div>
                </div>
            @endif

        </div>
        <div class=" sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="{{ route('callback.submit') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <label for="text" class="block font-medium text-gray-900 text-sm/6">Ваше ФИО</label>
                    <div class="mt-2">
                        <input type="text" name="name" id="name" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-NikaEva-600 sm:text-sm/6">
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="phone" class="block text-sm font-medium text-gray-900">Ваш номер</label>
                    </div>
                    <div class="mt-2">
                        <input type="tel" name="phone" id="phone" autocomplete="tel" required
                            placeholder="+7 (7__) ___-__-__"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-NikaEva-600 sm:text-sm">
                        @error('phone')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="about" class="block font-medium text-gray-900 text-sm/6">Напишите когда вам удобно
                            ответить (не обязательно)</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500"></a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <textarea name="about" id="about" rows="3"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-NikaEva-600 sm:text-sm/6">
                                                                        </textarea>
                    </div>
                    <p class="mt-3 text-gray-600 text-sm/6">Или напишите вопрос который вас интересует</p>
                </div>
                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-NikaEva-600">Отправить</button>
                </div>
            </form>
        </div>
    </div>


@endsection
