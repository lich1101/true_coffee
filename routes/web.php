<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('cart', CartController::class);
Route::get('cart/list_products',[CartController::class, 'list_products']) -> name('list_products');

Route::get('/admin', function () {
    return view('admin.index');
});