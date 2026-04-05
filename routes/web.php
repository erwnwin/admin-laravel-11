<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function () {
    // Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/', 'dashboard')->name('dashboard');
    Route::get('/table', 'table')->name('table');
    Route::get('/forms', 'forms')->name('forms');
    Route::get('/ui', 'ui')->name('ui');
    Route::get('/icons', 'icons')->name('icons');
    Route::get('/documentation', 'documentation')->name('documentation');
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/settings', 'settings')->name('settings');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/forgot-password', 'forgotPassword')->name('password.request');
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
});
