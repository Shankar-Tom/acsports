<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::get('admin/login', \App\Livewire\Admin\Login::class)->name('login')->middleware('guest');
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', \App\Livewire\Admin\Dashboard::class)->name('dashboard');
        Route::get('/news', \App\Livewire\Admin\News::class)->name('news');
        Route::get('/users', \App\Livewire\Admin\Users::class)->name('users');
        Route::get('/plans', \App\Livewire\Admin\Plans::class)->name('plans');
        Route::get('/subscriptions', \App\Livewire\Admin\Subscriptions::class)->name('subscriptions');
        Route::get('/profile', \App\Livewire\Admin\Profile::class)->name('profile');

        Route::get('/logout', function () {
            auth()->logout();
            return redirect()->route('admin.login');
        })->name('logout');
    });
});
