<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// homepage
Route::get('/', [PublicController::class, "home"])->name("home");
