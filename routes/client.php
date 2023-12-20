<?php

use App\Http\Controllers\Client\Auth\LoginAuthController;
use App\Http\Controllers\Client\Auth\RegisterAuthController;
use App\Http\Controllers\Client\CreditCard\CreditCardController;
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


    Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth_buyer:client');


    Route::middleware(['auth_buyer:client'])->group(function () {
        Route::prefix('credit-card')->name('card.')->group(function () {
            Route::get('/', [CreditCardController::class, 'index'])->name('card');
            Route::get('/create', [CreditCardController::class, 'create'])->name('card.cteate');
            Route::post('/', [CreditCardController::class, 'store'])->name('card.store');
            Route::delete('/{card}', [CreditCardController::class, 'destroy'])->name('card.delete');
        });
    });


});
