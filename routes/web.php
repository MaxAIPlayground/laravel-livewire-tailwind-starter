<?php

use App\Http\Controllers\Auth\GoogleLoginController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Middleware\EnsureEmailIsVerified;

require __DIR__.'/auth.php';

// Socialite Google
Route::get('/auth/google/login', [GoogleLoginController::class, 'redirectToGoogle'])->name('auth.google.login');
Route::get('/auth/google/callback', [GoogleLoginController::class, 'handleGoogleCallback'])->name('auth.google.callback');

// Newsletter (if Google auth)
Volt::route('/newsletter', 'pages.newsletter')
    ->name('newsletter');

Route::post('/auth/google/one-tap', [GoogleLoginController::class, 'loginOneTap'])->name('auth.google.one-tap');

Volt::route('/', 'pages.home')
    ->name('home');

Volt::route('about', 'pages.about')
    ->name('about');

Volt::route('contact', 'pages.contact')
    ->name('contact');

Volt::route('imprint', 'pages.imprint')
    ->name('imprint');

Volt::route('legal', 'pages.legal')
    ->name('legal');

Volt::route('example', 'pages.cms_example')
    ->name('cms.example');

// Important feature that is only
// accessible for a verified user
Route::middleware(EnsureEmailIsVerified::class)->group(function () {

    Route::get('feature', function () {
        return view('feature');
    })->name('feature.show');

});

// Testing
// Route::get('/mailable', function () {

//     // Example, returns mail output
//     $user = User::find(1);
//     $model = $user->model->first();

//     return new MyMail($model);
// });
