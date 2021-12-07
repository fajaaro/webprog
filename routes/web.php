<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'games'], function() {
    Route::get('/', [GameController::class, 'index'])->name('games.index');
});
Route::group(['prefix' => 'transactions'], function() {
    Route::get('/{id}', [TransactionController::class, 'checkout'])->name('transactions.checkout');
});