<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect(route('home', absolute: false));
    }
}; ?>

<div class="relative z-30 flex max-lg:justify-center sm:items-center w-full">
    <div class="dropdown max-lg:absolute top-1.5 left-2">
        <div tabindex="0" role="button" aria-label="" class="btn btn-ghost btn-tight lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-60">
            @auth
                <li>
                    <a class="font-semibold text-accent hover:text-gray-900" href="#" title="">Your stuff</a>
                </li>
            @endauth
            <li>
                <a>Content-Area</a>
                    <ul class="p-2">
                    <li>
                        <a class="" href="#">Primary Action</a>
                    </li>
                    <li>
                        <a class="" href="{{ route('cms.example') }}" title="">The main article</a>
                    </li>
                    <li>
                        <a class="" href="#">Some cool page</a>
                    </li>
                    <li>
                        <a class="" href="#">Another page</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('about') }}" title="">About</a>
            </li>
        </ul>
    </div>
    <div class="inline-flex flex-col items-center lg:mr-8">
        <a class="inline-flex items-center text-gray-900" href="{{ route('home') }}">
            <span class="w-10 h-10 mr-4 fill-secondary leading-5">
                <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="">
            </span>
            <span class="relative top-0.5 min-[460px]:top-1.5 lg:top-0.5 font-semibold tracking-tight lg:text-md xl:text-lg">
                <span class="block min-[460px]:inline-block lg:block">My amazing</span><span>app.com</span>
            </span>
        </a>
        @guest
            <a
                class="lg:hidden btn btn-ghost btn-tight max-w-72 inline-flex items-center min-[360px]:ml-16 max-lg:min-w-0"
                href="#"
                title="">Secondary action
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </a>
        @endguest
    </div>
    <div class="hidden lg:flex lg:flex-1">
        <ul class="menu menu-horizontal px-1 mx-auto">
            @auth
                <li>
                    <a class="mr-4 bg-accent btn-primary-alt btn-tight text-primary-content/90 hover:text-gray-900" href="#" title="">Your stuff</a>
                </li>
            @endauth
            <li>
                <details>
                    <summary>Content-Area</summary>
                    <ul class="p-2 lg:w-[calc(100%+25%)]">
                        <li>
                            <a class="text-primary" href="#" title="">Primary Action</a>
                        </li>
                        <li>
                            <a class="" href="{{ route('cms.example') }}" title="">The main article</a>
                        </li>
                        <li>
                            <a class="" href="#">Some cool page</a>
                        </li>
                        <li>
                            <a class="" href="#">Another page</a>
                        </li>
                    </ul>
                </details>
            </li>
            <li>
                <a href="#" title="">
                    Supported languages
                    <x-lucide-globe class="w-5 h-5 fill-neutral"/>
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}" title="">About</a>
            </li>
        </ul>
    </div>
    <div class="_navbar-end">
        @auth
            <button
                type="button"
                class="max-lg:hidden inline-flex items-center bg-none hover:bg-none border-0 py-1 px-3 focus:outline-none mt-4 md:mt-0"
                wire:click="logout">
                <span class="text-sm mr-1">Log out</span>
            </button>
        @endauth
        @guest
            <a
                class="max-lg:hidden btn btn-ghost btn-tight max-w-72 inline-flex items-center"
                href="#"
                title="">Primary action
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </a>
        @endguest
    </div>
</div>
