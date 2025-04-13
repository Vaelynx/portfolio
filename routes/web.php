<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/trade1', [HomeController::class, 'trade1'])->name('trade1');
Route::get('/', [HomeController::class, 'index']);
Route::get('/', function () {
    return view('home');
Route::get('/produk/{slug}', [ProductController::class, 'show'])->name('produk.show');

});
