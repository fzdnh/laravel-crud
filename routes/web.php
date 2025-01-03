<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Redirect root ('/') to the products index
Route::get('/', function () {
    return redirect()->route('products.index');
});

// CRUD routes for the Product resource
Route::resource('products', ProductController::class);
