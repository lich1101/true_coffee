<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('welcome');
});
Route::resource('cart', CartController::class);
Route::resource('product', ProductController::class);
Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/productsearch', function () {
    return view('productsearch.menu');
});