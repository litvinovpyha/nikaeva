@extends('layouts.main')
@section('title', 'Privacy Policy — Академия NikaEva')
@section('meta_description', 'Privacy Policy от академии NikaEva.')


@section('content')
<div class="flex items-center justify-center px-4">
    <div class=" max-w-5xl bg-white rounded-3xl shadow-xl overflow-hidden">

        {{-- Header --}}
        <div class="bg-gradient-to-r from-indigo-500 to-purple-500 px-8 py-10 text-white">
            <h1 class="text-3xl font-bold">Подписка Tintly</h1>
            <p class="mt-2 text-white/80">
                Получите полный доступ к профессиональным инструментам
            </p>
        </div>

        {{-- Content --}}
        <div class="p-8 grid grid-cols-1 lg:grid-cols-2 gap-8">

            {{-- Info --}}
            <div>
                <h2 class="text-2xl font-semibold mb-4">
                    Что входит в подписку
                </h2>

                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <span class="text-primary text-xl">✔</span>
                        <span>Точные расчёты формул и сессий</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-primary text-xl">✔</span>
                        <span>Сохранение истории клиентов</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-primary text-xl">✔</span>
                        <span>Неограниченное количество расчётов</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-primary text-xl">✔</span>
                        <span>Регулярные обновления функционала</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-primary text-xl">✔</span>
                        <span>Доступ с любого устройства</span>
                    </li>
                </ul>

                <p class="mt-6 text-sm text-gray-500">
                    Оплата производится через защищённую платёжную систему Kassa24.
                    Подписка продлевается автоматически, отмена возможна в любое время.
                </p>
            </div>

            {{-- Pricing Card --}}
            <div class="bg-gray-100 rounded-2xl p-6 flex flex-col justify-between">
                <div>
                    <span class="inline-block bg-primary/10 text-primary text-sm px-4 py-1 rounded-full mb-4">
                        Рекомендуемый тариф
                    </span>

                    <h3 class="text-2xl font-bold">Pro</h3>
                    <p class="text-gray-600 mt-1">Для Индивидульного использования</p>

                    <div class="mt-6 flex items-end gap-2">
                        <span class="text-4xl font-bold"> 990 ₸</span>
                        <span class="text-gray-500">/ месяц</span>
                    </div>

                    <div class="mt-4 text-sm text-gray-600">
                        • Автоматическое продление<br>
                        • Без скрытых платежей
                    </div>
                </div>

                {{-- Pay button --}}
                <form method="POST" action="" class="mt-8">
                    @csrf

                    <button
                        type="submit"
                        class="w-full  bg-indigo-700 text-white py-4 rounded-xl font-semibold text-lg transition">
                        Оплатить через Kassa24
                    </button>
                </form>

                <p class="mt-4 text-xs text-gray-500 text-center">
                    Нажимая кнопку, вы соглашаетесь с условиями публичной оферты
                </p>
            </div>

        </div>
    </div>
</div>
@endsection