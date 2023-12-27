<?php

use App\Http\Controllers\Client\Auth\LoginAuthController;
use App\Http\Controllers\Client\Auth\RegisterAuthController;
use App\Http\Controllers\Client\Bill\BillController;
use App\Http\Controllers\Client\CreditCard\AddMoney\AddMoneyController;
use App\Http\Controllers\Client\CreditCard\CreditCardController;
use App\Http\Controllers\Client\HistoryPlus\HistoryPlusMoneyController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\Ticket\Order\OrderController;
use App\Http\Controllers\Client\Ticket\TicketController;
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
            Route::delete('/{cards}', [CreditCardController::class, 'destroy'])->name('card.delete');
            Route::prefix('add-money')->name('money.')->group(function () {
                Route::get('/', [AddMoneyController::class, 'index'])->name('money');
                Route::post('/', [AddMoneyController::class, 'store'])->name('money.store');
            });
        });
        Route::prefix('ticket')->name('ticket.')->group(function () {
            Route::get('/', [TicketController::class, 'index'])->name('ticket');
            Route::get('/create', [TicketController::class, 'create'])->name('ticket.cteate');
            Route::post('/', [TicketController::class, 'store'])->name('ticket.store');
            Route::post('/post', [TicketController::class, 'post'])->name('ticket.post');
        });
        Route::prefix('history-plus')->name('plus.')->group(function () {
            Route::get('/', [HistoryPlusMoneyController::class, 'index'])->name('plus');
        });
        Route::prefix('bill')->name('bill.')->group(function () {
            Route::get('/', [BillController::class, 'index'])->name('bill');
            Route::get('/{bill}', [BillController::class, 'show'])->name('bill.show');
        });
    });


});
