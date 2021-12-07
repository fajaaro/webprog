<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'games'], function() {

});
Route::group(['prefix' => 'transactions'], function() {
    Route::get('/{id}', [TransactionController::class, 'checkout'])->name('transactions.checkout');
});