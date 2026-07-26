<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

// Part D: a custom page protected by the "auth" middleware — only logged-in users may see it.
Route::view('secret', 'secret')->middleware('auth');

require __DIR__.'/settings.php';
