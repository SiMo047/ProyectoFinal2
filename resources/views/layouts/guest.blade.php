<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Log Alma Book') }}</title>
        <link rel="icon" href="{{ asset('img/link.png') }}">

        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])


                <!-- Incluir CSS -->
                 <link href="{{ asset('css/app.css') }}" rel="stylesheet">

                <!-- Incluir JS -->
                <script src="{{ asset('js/app.js') }}"></script>

    </head>
    <body class="font-sans text-white antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-black dark:bg-black" >
            <div>
                <a href="/">
                    <img src="{{ asset('img/link2.png') }}" style="max-width: 140px; max-height: 140px;" alt="">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
