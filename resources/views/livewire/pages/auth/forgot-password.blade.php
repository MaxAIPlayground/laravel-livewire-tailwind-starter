<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new class extends Component
{
    public string $email = '';

    /**
     * Send a password reset link to the provided email address.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ],[
            'email.*' => 'Bitte gib deine E-Mail-Adresse an',
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $this->only('email')
        );

        if ($status != Password::RESET_LINK_SENT) {
            $this->addError('email', __($status));

            return;
        }

        $this->reset('email');

        session()->flash('status', __($status));
    }
}; ?>

<div class="prose w-full sm:max-w-lg mx-auto mt-6 px-6 py-4 overflow-hidden sm:rounded-lg">

    <x-callout-info class="mb-10">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </x-callout-info>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="sendPasswordResetLink">

        <!-- Email  -->
        <div class="mb-7">
            <label for="email" class="block text-sm mb-0.5 font-medium text-gray-700">Deine E-Mail-Adresse *</label>
            <input
                wire:model="email"
                type="email"
                id="email"
                placeholder="max.mustermann@gmail.com"
                autofocus
                autocomplete="username"
                class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
              />
            @error('email')
                <div role="alert" class="text-sm text-red-500 mt-2">
                    <span>{{ $message }}</span>
                </div>
            @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <button class="btn btn-primary ms-3 w-50" type="submit">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </form>
</div>
