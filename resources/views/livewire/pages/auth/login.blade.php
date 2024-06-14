<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use function Livewire\Volt\{form, layout};

form(LoginForm::class, 'form');

$login = function () {
    $this->validate();

    $this->form->authenticate();

    Session::regenerate();

    $this->redirect(route('loi.show', absolute: false));
};
?>

<div class="prose mx-auto mt-10 mb-20">

    <form wire:submit="login">

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Log in with Google -->
        <div class="mb-7 text-center">
            <a
                class="btn mt-4 inline-flex items-center justify-center rounded-md border px-4 py-1 outline-none ring-gray-400 ring-offset-2 transition focus:ring-2 hover:border-transparent hover:bg-black hover:text-white"
                href="{{ route('auth.google.login') }}"
                title="Einloggen mit deinem Google-Account">
                <img class="my-0 mr-2 h-5" src="https://static.cdnlogo.com/logos/g/35/google-icon.svg" alt="Bild Logo Log in mit Google" /> 1-Click Google-Login
            </a>
            <div class="relative mt-8 flex h-px place-items-center bg-gray-200">
                <div class="absolute left-1/2 h-6 w-14 -translate-x-1/2 bg-white text-center text-sm text-gray-500">oder</div>
            </div>
        </div>

        <h2 class="mb-8 text-center">Login with email address</h2>

        <!-- Email Address -->
        <div class="mb-7">
            <label for="email" class="block text-sm mb-0.5 font-medium text-gray-700">Deine E-Mail-Adresse *</label>
            <input
                wire:model="form.email"
                type="email"
                id="email"
                placeholder="max.mustermann@gmail.com"
                required
                autofocus
                class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
              />
            @error('form.email')
                <div role="alert" class="text-sm text-red-500 mt-2">
                    <span>{{ $message }}</span>
                </div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-7">
            <label for="password" class="block text-sm mb-0.5 font-medium text-gray-700">Password *</label>
            <input
                wire:model="form.password"
                type="password"
                id="password"
                autocomplete="current-password"
                required
                class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
              />
            @error('form.password')
                <div role="alert" class="text-sm text-red-500 mt-2">
                    <span>{{ $message }}</span>
                </div>
            @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="" href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button class="btn btn-primary ms-3" type="submit">
                {{ __('Log in') }}
            </button>
        </div>
    </form>
</div>
