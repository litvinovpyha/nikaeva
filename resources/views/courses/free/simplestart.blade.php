@extends('layouts.main')

@section('title', 'Бесплатный курс «Лёгкий старт» — Как найти своё предназначение, личный бренд, сервис | Indigo')
@section('meta_description', 'Откройте бесплатный демо-курс «Лёгкий старт» от Indigo: уроки о том, как найти своё предназначение, ставить цели, строить личный бренд и работать с клиентами.')
@section('meta_keywords', 'бесплатный курс предназначение, курс постановка целей, курс личный бренд, сервис и продажи обучение, Indigo бесплатно')

@section('jsonld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Бесплатный демо-курс «Лёгкий старт»",
  "description": "Бесплатный демо-курс Indigo: как найти своё предназначение, постановка целей, продажи и сервис, личный бренд.",
  "provider": {
    "@type": "Organization",
    "name": "Indigo",
    "url": "{{ url('/') }}"
  }
}
</script>
@endsection

@section('content')

<x-hero-section
    title="Бесплатный курс «Лёгкий старт»"
    subtitle="Откройте доступ к урокам: как найти своё предназначение, поставить цели, выстроить личный бренд и сервис."
/>

<div class="max-w-5xl px-4 py-12 mx-auto">
    <div class="space-y-12">

        <!-- Раздел 1 -->
        <div>
            <h2 class="mb-2 text-2xl font-semibold text-center text-indigo-600">Как найти своё предназначение. Постановка целей</h2>
            <div class="aspect-w-16 aspect-h-9">
                <iframe src="https://www.youtube.com/embed/LG8946MOp9I"
                        class="w-full h-full rounded-lg"
                        title="Как найти своё предназначение. Постановка целей демо"
                        frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <!-- Раздел 2 -->
        <div>
            <h2 class="mb-2 text-2xl font-semibold text-center text-indigo-600">Продажи и сервис</h2>
            <div class="aspect-w-16 aspect-h-9">
                <iframe src="https://www.youtube.com/embed/O65y0icyUzM"
                        class="w-full h-full rounded-lg"
                        title="Сервис и общение с клиентами демо "
                        frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

     <div class="relative py-16 overflow-hidden bg-gray-900 isolate sm:py-24 lg:py-32">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div class="grid max-w-2xl grid-cols-1 mx-auto gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
                <!-- Левая часть: Текст и форма -->
                <div class="max-w-xl lg:max-w-lg">
                    <h2 class="text-4xl font-semibold tracking-tight text-center text-white sm:text-5xl">Хотите
                        записаться
                        на обучение
                        и получить скидку до <span class="text-indigo-400">-30%</span>?</h2>
                    <p class="mt-4 text-lg text-gray-300">
                        Оставьте заявку, чтобы забронировать курс со скидкой. Мы свяжемся с вами и поможем подобрать
                        подходящую программу обучения.
                    </p>
                    <div class="flex flex-col max-w-md gap-4 mt-6 sm:flex-row">

                        <a href="{{ route('callback') }}"
                            class="rounded-md bg-indigo-700 px-4 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            ОСТАВИТЬ ЗАЯВКУ НА ОБРАТНЫЙ ЗВОНОК
                        </a>
                    
                    </div>
                </div>

                <ul class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
                    <li class="flex flex-col items-start">
                        <div class="p-2 rounded-md bg-white/5 ring-1 ring-white/10">
                            <svg class="text-white size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                            </svg>
                        </div>
                        <span class="mt-4 text-base font-semibold text-white">Оперативный звонок</span>
                        <p class="mt-2 text-base text-gray-400">Мы свяжемся с вами в удобное для вас время — просто
                            укажите контакт.</p>
                    </li>
                    <li class="flex flex-col items-start">
                        <div class="p-2 rounded-md bg-white/5 ring-1 ring-white/10">
                            <svg class="text-white size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.05 4.575a1.575 1.575 0 1 0-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 0 1 3.15 0v1.5m-3.15 0 .075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 0 1 3.15 0V15M6.9 7.575a1.575 1.575 0 1 0-3.15 0v8.175a6.75 6.75 0 0 0 6.75 6.75h2.018a5.25 5.25 0 0 0 3.712-1.538l1.732-1.732a5.25 5.25 0 0 0 1.538-3.712l.003-2.024a.668.668 0 0 1 .198-.471 1.575 1.575 0 1 0-2.228-2.228 3.818 3.818 0 0 0-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0 1 16.35 15m.002 0h-.002" />
                            </svg>
                        </div>
                        <span class="mt-4 text-base font-semibold text-white">Никакого спама</span>
                        <p class="mt-2 text-base text-gray-400">Мы ценим ваше время. Никаких лишних писем — только
                            важная
                            информация о курсе и вашей записи.</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="absolute top-0 -translate-x-1/2 left-1/2 -z-10 blur-3xl xl:-top-6" aria-hidden="true">
            <div class="aspect-1155/678 w-288.75 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>
@endsection
