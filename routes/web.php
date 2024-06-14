<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('cart', 'CartController');
Route::get('/admin', function () {
    return view('admin.index');
});