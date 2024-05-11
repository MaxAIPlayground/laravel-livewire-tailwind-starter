<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen text-center">

            <header>
                This be the header
            </header>

            <main>
                @yield('content')
            </main>

            <footer>
                This be the footer
            </footer>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
