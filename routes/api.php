<?php

use App\Http\Controllers\CategoryApiController;
use Illuminate\Support\Facades\Route;

// POST request to create a category
Route::get('/categories', [CategoryApiController::class, 'index']);

Route::post('categories/category-add', [CategoryApiController::class, 'store']);
Route::get('/categories/{category}', [CategoryApiController::class, 'show']);
Route::put('/categories/{category}', [CategoryApiController::class, 'update']);
Route::delete('/categories/{category}', [CategoryApiController::class, 'destroy']);
