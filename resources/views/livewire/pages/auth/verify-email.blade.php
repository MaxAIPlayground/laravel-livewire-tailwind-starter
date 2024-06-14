<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Send an email verification notification to the user.
     */
    public function sendVerification(): void
    {
        if (Auth::user()->hasVerifiedEmail()) {
            $this->redirect(route('feature'));
            // $this->redirectIntended(default: route('home', absolute: false), navigate: true);

            return;
        }

        Auth::user()->sendEmailVerificationNotification();

        Session::flash('status', 'verification-link-sent');
    }

    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/');
    }
}; ?>

<div class="prose mx-auto mt-10 mb-20">
    <div class="mb-8 text-sm">

        <h1 class="text-lg">Confirm your email address</h1>

        <p class="mt-0 mb-6 bg-info text-white rounded-md px-5 py-4 leading-normal">
            Check your inbox and click the button <span class="font-semibold">Verify email address</span>.
        </p>

        <x-callout-info>
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </x-callout-info>
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-14 flex items-center justify-between">
        <button class="btn" type="button" wire:click="sendVerification">
            {{ __('Resend Verification Email') }}
        </button>
    </div>
</div>
