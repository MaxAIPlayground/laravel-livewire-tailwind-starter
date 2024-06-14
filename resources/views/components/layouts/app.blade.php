<!DOCTYPE html>
<html class="{{ auth()->check() ? 'is-user' : 'is-guest' }}" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="mytheme">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @include('fonts')

        {!! SEOMeta::generate() !!}

        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @if (!App::isLocal() && isset($includeGoogleOneTap) && $includeGoogleOneTap)
            <script src="https://accounts.google.com/gsi/client" async></script>
        @endif

        @if (App::isProduction() && $gid = config('services.google.analytics_property_id'))
            <!-- Google tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id={{ $gid }}"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());
              gtag('config', {{ $gid }});
            </script>
        @endif
    </head>
    <body class="min-h-screen w-full font-sans antialiased flex flex-col">

        @if (!App::isLocal())
            <div id="g_id_onload"
                data-auto_prompt="true"
                data-client_id="{{ config('services.google.client_id') }}"
                data-login_uri="{{ route('auth.google.one-tap') }}">
            </div>
        @endif

        <header class="w-full mb-6 lg:mb-10">
            <div class="lg:flex lg:items-center max-w-7xl mx-auto px-2 lg:px-8 pt-4 lg:pt-6 pb-4">
                <livewire:nav />
            </div>
        </header>

        <main class="grow pb-10 px-4">
            @yield('content', $slot ?? '')
        </main>

        <footer class="footer footer-center p-10 bg-base-200">
            <nav class="gap-4">
                <div class="footer-title text-black/100 font-bold">{{ config('app.name') }}</div>
                <a class="link link-hover font-semibold" href="{{ route('about') }}" title="About {{ config('app.name') }}">About</a>
                <a class="link link-hover font-semibold" href="{{ route('contact') }}" title="Contact and help for {{ config('app.name') }}" rel="nofollow">Contact & Help</a>
                <a class="link link-hover font-semibold" href="{{ route('imprint') }}" title="Imprint" rel="nofollow">Imprint</a>
                <a class="link link-hover font-semibold" href="{{ route('legal') }}" title="Privacy Policy" rel="nofollow">Privacy Policy</a>
            </nav>
            <p class="my-0 text-sm bg-base-200 text-base-content text-center">
                {{ config('app.tagline') }}<br>
                Copyright © 2024 - All rights reserved
            </p>
        </footer>

        <x-toaster-hub />

        @include('cookie-consent::index')

        @livewireScriptConfig
    </body>
</html>
