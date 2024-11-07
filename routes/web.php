<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('products', [productController::class, 'index']);
Route::post('products/Store', [productController::class, 'store']);
Route::get('products/Edit/{id}/', [productController::class, 'edit']);
Route::get('products/Delete/{id}', [productController::class, 'destroy']);