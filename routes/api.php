<?php

use App\Http\Controllers\CategoryApiController;
use Illuminate\Support\Facades\Route;

// POST request to create a category
Route::post('admin/categories/category-add', [CategoryApiController::class, 'store']);
// routes/api.php
Route::get('admin/categories/{category}', [CategoryApiController::class, 'show']);
Route::put('admin/categories/{category}', [CategoryApiController::class, 'update']);
Route::delete('admin/categories/{category}', [CategoryApiController::class, 'destroy']);
