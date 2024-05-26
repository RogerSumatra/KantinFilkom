<?php

use App\Http\Controllers\WebController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'index'])->name('homepage');

Route::get('/menu/{id}', [WebController::class, 'get_seller'])->name('seller');


Route::get('/pembayaran', [WebController::class, 'konfirmasiPembayaran'])->name('konfirmasiPembayaran');

Route::get('/done', [WebController::class, 'selesaiBayar'])->name('selesaiBayar');

// Route::get('/pesanan', [WebController::class, 'pesanan'])->name('pesanan');

//Route::get('/', [SellerController::class, 'index'])->name('sellers.index');
//Route::get('/sellers/{seller}', [SellerController::class, 'show'])->name('sellers.show');

Route::get('/search', [MenuController::class, 'search'])->name('menus.search');

// Route::post('/cart/{menu}', [CartController::class, 'add'])->name('cart.add');
// Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::get('/dashboard', [WebController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/history', [HistoryController::class, 'index'])->name('history')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart/items', [CartController::class, 'getCartItems'])->name('cart.items');
    Route::put('/cart/items/{id}', [CartController::class, 'updateCartItem'])->name('cart.update');
    Route::delete('/cart/items/{id}', [CartController::class, 'removeCartItem'])->name('cart.remove');
});

require __DIR__.'/auth.php';
