<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

require __DIR__.'/auth.php';

Volt::route('/', 'pages.home')
    ->name('home');

Route::middleware('auth')->group(function () {

    // Example routes
    // Volt::route('create', 'pages.create')->name('create');
    // Volt::route('list', 'pages.list')->name('list');

});

Volt::route('about', 'pages.about')
    ->name('about');


// Testing
// Route::get('/mailable', function () {

//     // Example, returns mail output
//     $user = User::find(1);
//     $model = $user->model->first();

//     return new MyMail($model);
// });
