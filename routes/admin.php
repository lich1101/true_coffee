<?php

use App\Http\Controllers\BillController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('layout.master');
});

Route::group([
    'as' => 'products.',
    'prefix' => 'products',
], static function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::get('/{product}', [ProductController::class, 'show'])->name('show');
    Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('edit');
    Route::post('/store', [ProductController::class, 'store'])->name('store');
    Route::put('/update/{product}', [ProductController::class, 'update'])->name('update');
    Route::delete('/delete/{product}', [ProductController::class, 'destroy'])->name('destroy');
});

Route::group([
    'as' => 'bills.',
    'prefix' => 'bills',
], static function () {
    Route::get('/', [BillController::class, 'index'])->name('index');
    Route::get('/{bill}', [BillController::class, 'show'])->name('show');
    Route::get('/edit/{bill}', [BillController::class, 'edit'])->name('edit');
});



