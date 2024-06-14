<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
#[Layout('components.layouts.app', ['includeGoogleOneTap' => true])]
class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    public bool $newsletter = false;

    public function register(): void
    {
        $validated = $this->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        Auth::login($user);

        $this->redirect(route('verification.notice'));
    }
}; ?>

<div class="prose mx-auto mt-10 mb-20">

    <form wire:submit="register">

        <h2 class="mb-4 text-center">Register Now</h2>
        <p class="text-center">Create an account to use the feature 🚀</p>

        <!-- Log in with Google -->
        <div class="mb-7 text-center">
            <a
                class="btn mt-4 inline-flex items-center justify-center rounded-md border px-4 py-1 outline-none ring-gray-400 ring-offset-2 transition focus:ring-2 hover:border-transparent hover:bg-black hover:text-white"
                href="{{ route('auth.google.login') }}"
                title="Einloggen mit deinem Google-Account">
                <img class="my-0 mr-2 h-5" src="https://static.cdnlogo.com/logos/g/35/google-icon.svg" alt="Bild Logo Log in mit Google" /> Register with Google (in 3 seconds)
            </a>
            <div class="relative mt-14 flex h-px place-items-center bg-gray-200">
                <div class="absolute left-1/2 h-6 w-64 -translate-x-1/2 bg-white text-center text-sm text-gray-500">or with your email address</div>
            </div>
        </div>

        <!-- Email Address -->
        <div class="mb-7">
            <label for="email" class="block text-sm mb-0.5 font-medium text-gray-700">Your email address *</label>
            <input
                wire:model.blur="email"
                type="email"
                id="email"
                placeholder="max.mustermann@gmail.com"
                autocomplete="email"
                autofocus
                class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
              />
            @error('email')
                <div role="alert" class="text-sm text-red-500 mt-2">
                    <span>{{ $message }}</span>
                </div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-7">
            <label for="password" class="block text-sm mb-0.5 font-medium text-gray-700">Password *</label>
            <input
                wire:model="password"
                type="password"
                id="password"
                autocomplete="current-password"
                class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
              />
            @error('password')
                <div role="alert" class="text-sm text-red-500 mt-2">
                    <span>{{ $message }}</span>
                </div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-7">
            <label for="password_confirmation" class="block text-sm mb-0.5 font-medium text-gray-700">Confirm Password *</label>
            <input
                wire:model="password_confirmation"
                type="password"
                id="password_confirmation"
                class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
              />
            @error('password_confirmation')
                <div role="alert" class="text-sm text-red-500 mt-2">
                    <span>{{ $message }}</span>
                </div>
            @enderror
        </div>

        <!-- Newsletter -->
        <div class="flex items-center mb-2">
            <div class="flex">
                <input
                    wire:model="newsletter"
                    value="1"
                    id="newsletter"
                    type="checkbox"
                    class="shrink-0 mt-0.5 border-gray-200 rounded focus:ring-0">
            </div>
            <div class="ms-3">
                <label for="newsletter" class="text-sm">Sign up for the newsletter</label>
            </div>
        </div>
        <p class="text-sm text-base-content/60 ml-7 mb-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, id consectetur veritatis velit illum molestias, consequatur assumenda vitae! Iste, quasi eveniet, perferendis deserunt hic nisi ipsa omnis eum provident suscipit. *
        </p>
        <p class="mb-12 text-sm">
            * Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic consequuntur enim.
        </p>

        <div class="flex items-center">
            <a class="flex-1" href="{{ route('login') }}" wire:navigate>
                Already have an account?
            </a>

            <button class="btn btn-primary ms-3" type="submit">
                {{ __('Register Now') }}
            </button>
        </div>
    </form>
</div>
