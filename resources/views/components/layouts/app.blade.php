<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="halloween">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @env('production')
            <!-- Google tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('GOOGLE_ANALYTICS_PROPERY_ID') }}"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());
              gtag('config', {{ config('GOOGLE_ANALYTICS_PROPERY_ID') }});
            </script>
        @endenv
    </head>
    <body class="min-h-screen w-full font-sans antialiased flex flex-col">

        <header class="w-full">
            <div class="max-w-7xl mx-auto px-2 md:px-8 pt-2 md:pt-6 pb-2 md:pb-4 md:flex md:items-center">
                <livewire:nav />
            </div>
        </header>

        <main class="grow">
            @yield('content', $slot ?? '')
        </main>

        <footer class="footer footer-center p-10 bg-base-300 text-base-content">
            <nav>
                <h6 class="footer-title">{{ config('app.name') }}</h6>
                <a class="link link-hover font-bold" href="{{ route('about') }}" title="The Idea behind {{ config('app.name') }}">The Idea behind {{ config('app.name') }}</a>
                <p class="mt-10">
                    Follow me on X<a class="no-underline font-bold" href="https://twitter.com/MaxAIPlayground" target="_blank" title="MaxAIPlayground on X"> @MaxAIPlayground</a><br>
                    where I build tiny projects like this in public.
                </p>
            </nav>
        </footer>
        <p class="pb-10 text-sm bg-base-300 text-base-content text-center">
            {{ config('app.tagline') }}<br>
            Copyright © 2024 - All rights reserved
        </p>
    </body>
</html>
