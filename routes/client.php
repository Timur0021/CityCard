<?php

use App\Http\Controllers\Client\Auth\LoginAuthController;
use App\Http\Controllers\Client\Auth\RegisterAuthController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Client Routes
|--------------------------------------------------------------------------
|
*/

Route::prefix('client')->name('client.')->group(function () {

    Route::middleware(['guest_buyer:client'])->group(function () {
        Route::get('/login', [LoginAuthController::class, 'create'])->name('login');
        Route::post('/store', [LoginAuthController::class, 'login'])->name('login.post');
        Route::get('/register', [RegisterAuthController::class, 'index'])->name('register');
        Route::post('/', [RegisterAuthController::class, 'register'])->name('register.post');
    });

    // Route::middleware(['auth_buyer'])->group(function () {
    //     Route::get('/logout', [LogoutBuyerController::class, 'logout'])->name('logout');
    // });
    Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth_buyer:client');





});
