<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// homepage
Route::get('/', [PublicController::class, "home"])->name("home");

// Prodotti
Route::get("/products/index", [PublicController::class, "products_index"])->name("products_index");
Route::get("/products/create", [PublicController::class, "products_create"])->name("products_create");
Route::post("/product/submit", [PublicController::class, "product_submit"])->name("product_submit");
