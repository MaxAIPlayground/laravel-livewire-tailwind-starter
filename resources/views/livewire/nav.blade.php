<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect(route('home', absolute: false), navigate: true);
    }
}; ?>

<div class="navbar relative bg-base-100">
    <div class="flex-1 md:flex-none">
        <a class="pl-4" href="{{ route('home') }}" title="{{ config('app.name') }}">
            <x-logo />
        </a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal md:ml-16 md:gap-6 px-1 md:mt-2.5 relative md:static {{ auth()->user() ? 'top-5' : 'top-2.5' }}">
            <li>
                <a class="btn btn-sm md:btn-md md:btn-outline md:text-primary" href="#">
                    <span class="md:hidden text-primary">Start here</span>
                    <span class="hidden md:block">Primary Nav item</span>
                </a>
            </li>
            @auth
                <li>
                    <a class="btn btn-sm md:btn-md md:btn-outline" href="#" title="Your Goals">Another nav item</a>
                </li>
            @endauth
        </ul>
    </div>

    @auth
        <a class="absolute md:relative top-2 right-7 md:right-12 items-center ml-auto cursor-pointer" wire:click="logout">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" x2="9" y1="12" y2="12"/></svg>
            <span class="text-sm md:text-md">Sign out</span>
        </a>
    @endauth
</div>
