<?php 

use App\Controllers\CategoryController;
use App\Routes\Route;

Route::get("/", [CategoryController::class,"index"]);
Route::get("/test", [CategoryController::class,"index"]);
Route::get("/about", [CategoryController::class,"index"]);
Route::get("/about", [CategoryController::class,"index"]);