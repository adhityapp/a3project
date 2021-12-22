<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Product;
use App\Http\Livewire\Cart;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Logout;
use App\Http\Livewire\Transaction;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
    Route::get('/', Login::class);
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/transaction', Transaction::class);
    Route::delete('/trasaction/{id}', [Transaction::class, 'delete']);
    Route::get('/trasaction/{request}', [Transaction::class, 'create']);
    // Route::get('/print', [Transaction::class, 'create'])->name('print');

    Route::get('/products', Product::class);
    // Route::post('/products', [Product::class, 'update']);
    Route::get('products/{id}', [Product::class, 'getid'])->name('updateproducts');
    Route::delete('/products/{id}', [Product::class, 'delete']);
    Route::put('products/{id}', [Product::class, 'update'])->name('putproducts');

    Route::get('/cart', Cart::class);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/logout', Logout::class)->name('logout');
});
