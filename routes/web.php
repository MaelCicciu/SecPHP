<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('products/index', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/create', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/products/edit', [ProductController::class, 'update'])->name('products.update');