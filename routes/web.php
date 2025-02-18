<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

// Halaman Home
Route::get('/', [HomeController::class, 'index']);

// Halaman Products (route prefix)
Route::prefix('category')->group(function () {
    Route::get('/{category}', [ProductController::class, 'showCategory']);
});

// Halaman User (route param)
Route::get('/user/{id}/name/{name}', [UserController::class, 'showProfile']);

// Halaman Penjualan
Route::get('/sales', [SalesController::class, 'index']);
