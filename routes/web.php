<?php

use App\Http\Controllers\SellerController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SellerOrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'index'])->name('homepage');

Route::get('/menu/{id}', [WebController::class, 'get_seller'])->name('seller');

Route::get('/pembayaran{item}', [WebController::class, 'pembayaran'])->name('konfirmasipembayaran');

//Route::get('/', [SellerController::class, 'index'])->name('sellers.index');
//Route::get('/sellers/{seller}', [SellerController::class, 'show'])->name('sellers.show');

Route::get('/search', [MenuController::class, 'search'])->name('menus.search');

Route::post('/cart/{menu}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::get('/dashboard', [WebController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/cart/{menu}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');      
});

require __DIR__.'/auth.php';
