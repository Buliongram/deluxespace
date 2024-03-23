<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>DeluxeSpace</title>
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">
    <script src="/icon/all.js"></script>
    <script defer src="/js/app.js"></script>
    @vite('resources/css/app.css')
</head>

<body>
    <header class="text-white bg-primary h-[150px] flex flex-col items-center justify-center gap-2">
        <div class="flex items-center gap-3 font-bold text-2xl">
            <span><img class="w-[50px]" src="/img/logoWhite.png" alt="icon"></span><span><a href="">{{config('app.name')}}</a></span>
        </div>
        <div class="font-semibold text-lg">Welcome Back!</div>
    </header>

    
    <section>
        @yield('content')
    </section>
</body>

</html>