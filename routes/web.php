<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// homepage
Route::get('/', [PublicController::class, "home"])->name("home");

// Prodotti
Route::get("/products/index", [ProductController::class, "products_index"])->name("products_index");
Route::get("/products/create", [ProductController::class, "products_create"])->name("products_create");
Route::post("/product/submit", [ProductController::class, "product_submit"])->name("product_submit");
