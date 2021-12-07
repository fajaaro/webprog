<?php

use App\Http\Controllers\Admin\GameController as AdminGameController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'games'], function() {
    Route::get('/', [GameController::class, 'index'])->name('games.index');
    Route::get('/check-age', [GameController::class, 'checkAge'])->name('games.check-age');
    Route::post('/process-check-age', [GameController::class, 'processCheckAge'])->name('games.process-check-age');
    Route::get('/{id}', [GameController::class, 'show'])->name('games.show');
});

Route::group(['prefix' => 'transactions'], function() {
    Route::get('/carts', [TransactionController::class, 'carts'])->name('transactions.carts');
    Route::get('/informations', [TransactionController::class, 'informations'])->name('transactions.informations');
    Route::post('/checkout', [TransactionController::class, 'checkout'])->name('transactions.checkout');
    Route::get('/receipt/{id}', [TransactionController::class, 'receipt'])->name('transactions.receipt');
});

Route::group(['prefix' => 'admin'], function() {
    Route::group(['prefix' => 'games'], function() {
        Route::get('/', [AdminGameController::class, 'index'])->name('admin.games.index');
        Route::get('/create', [AdminGameController::class, 'create'])->name('admin.games.create');
        Route::post('/', [AdminGameController::class, 'store'])->name('admin.games.store');
        Route::get('/{id}/edit', [AdminGameController::class, 'edit'])->name('admin.games.edit');
        Route::put('/{id}', [AdminGameController::class, 'update'])->name('admin.games.update');
        Route::delete('/{id}', [AdminGameController::class, 'delete'])->name('admin.games.delete');
    });
});

Route::group(['prefix' => 'profiles'], function() {
    Route::get('/', [ProfileController::class, 'index'])->name('profiles.index');
    Route::get('/friends', [ProfileController::class, 'friends'])->name('profiles.friends');
    Route::get('/transactions', [ProfileController::class, 'transactions'])->name('profiles.transactions');
});
