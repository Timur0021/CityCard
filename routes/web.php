<?php

use App\Http\Controllers\Admin\City\CityController;
use App\Http\Controllers\Admin\Transport\IndexController;
use App\Http\Controllers\Admin\TypeTicket\TypeTicketController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('home')->name('home.')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::middleware(['auth'])->group(function () {
        /**
         * Routes CRUD for Admin to creating Transport
         */
        Route::prefix('transport')->name('trantsport.')->group(function () {
            Route::get('/', [IndexController::class, 'index'])->name('transport');
            Route::get('/create', [IndexController::class, 'create'])->name('transport.create');
            Route::post('/', [IndexController::class, 'store'])->name('transport.store');
            Route::get('/{transport}', [IndexController::class, 'show'])->name('transport.show');
            Route::get('/{transport}/edit', [IndexController::class, 'edit'])->name('transport.edit');
            Route::patch('/{transport}', [IndexController::class, 'update'])->name('transport.update');
            Route::delete('/{transport}', [IndexController::class, 'destroy'])->name('transport.delete');
        });
        /**
         * Routes CRUD for Admin to creating City
         */
        Route::prefix('city')->name('city.')->group(function () {
            Route::get('/', [CityController::class, 'index'])->name('city');
            Route::get('/create', [CityController::class, 'create'])->name('city.cteate');
            Route::post('/', [CityController::class, 'store'])->name('city.store');
            Route::get('/{city}', [CityController::class, 'show'])->name('city.show');
            Route::get('/{city}/edit', [CityController::class, 'edit'])->name('city.edit');
            Route::patch('/{city}', [CityController::class, 'update'])->name('city.update');
            Route::delete('/{city}', [CityController::class, 'destroy'])->name('city.delete');
        });
        /**
         * Routes CRUD for Admin to creating Type ticket
         */
        Route::prefix('type-ticket')->name('type.')->group(function () {
            Route::get('/', [TypeTicketController::class, 'index'])->name('type');
            Route::get('/create', [TypeTicketController::class, 'create'])->name('type.cteate');
            Route::post('/', [TypeTicketController::class, 'store'])->name('type.store');
            Route::get('/{type}', [TypeTicketController::class, 'show'])->name('type.show');
            Route::get('/{type}/edit', [TypeTicketController::class, 'edit'])->name('type.edit');
            Route::patch('/{type}', [TypeTicketController::class, 'update'])->name('type.update');
            Route::delete('/{type}', [TypeTicketController::class, 'destroy'])->name('type.delete');
        });
    });
});

