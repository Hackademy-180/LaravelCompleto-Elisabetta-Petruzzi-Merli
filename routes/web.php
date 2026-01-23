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
Route::get("/product/show/{product}", [ProductController::class, "show"])->name("product_show");
Route::get("/product/edit/{product}", [ProductController::class, "edit"])->name("product_edit");
Route::put("/product/update/{product}", [ProductController::class, "update"])->name("product_update");
Route::delete("/product/destroy/{product}", [ProductController::class, "destroy"])->name("product_destroy");
