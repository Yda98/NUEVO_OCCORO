<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        @isset($header)
        <header class="shadow navegacion-yda">
            <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endisset

        <main>
            {{ $slot }}
        </main>
        <footer class="footer">
            <div class="max-w-12xl mx-auto py-2 px-4 sm:px-6 lg:px-8 footer-yda">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quos modi eos, dicta, assumenda ullam dolorem cum illo ea sit, maiores incidunt impedit inventore repudiandae tempore laboriosam neque cupiditate. Iusto?</p>
            </div>
        </footer>
    </div>
</body>

</html>

<style>
    .navegacion-yda {
        background-color: rgba(142, 88, 192, 0.73);
    }
    .footer-yda{
        background-color: rgb(0, 200, 255);
        color: rgb(0, 0, 0);
    }
</style>
