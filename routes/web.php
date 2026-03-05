<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('products.index');
});

// Route::get('/', [ProductController::class, 'index']);
// Route::post('/products', [ProductController::class, 'store']);
// Route::delete('/products/{id}', [ProductController::class, 'destroy']);
// Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
// Route::put('/products/{id}', [ProductController::class, 'update']);
Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']); // create
Route::delete('/products/{product}', [ProductController::class, 'destroy']); // delete
Route::get('/products/{product}/edit', [ProductController::class, 'edit']); // edit form
Route::put('/products/{product}', [ProductController::class, 'update']); // update