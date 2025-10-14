<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Академия красоты NikaEva Курсы парикмахеров, маникюра в Алматы')</title>
    <meta name="description" content="@yield('meta_description', 'Обучение парикмахеров, мастеров маникюра, колористов с нуля. Сертификаты, практика, поддержка. Старт карьеры с NikaEva!')">
    <meta name="keywords" content="@yield('meta_keywords', 'курсы парикмахеров, курсы маникюра, обучение парикмахеров Алматы, академия маникюра')">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Академия красоты NikaEva Курсы парикмахеров, маникюра в Алматы')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:image" content="{{ asset('images/share.webp') }}">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:site_name" content="Академия NikaEva">
    <meta property="og:url" content="{{ url()->current() }}">

    @yield('jsonld')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="canonical" href="{{ url()->current() }}" />
</head>

<body class="font-sans">
    @include('layouts.header')
    <main class="min-h-screen pt-20">
        @yield('content')
    </main>
    @include('layouts.footer')
    @include('partials.whatsappjoin')
</body>

</html>
