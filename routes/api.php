<?php

use App\Http\Controllers\BrandApiController;
use App\Http\Controllers\CategoryApiController;
use App\Http\Controllers\MultipleImageController;
use App\Http\Controllers\ProductApiController;
use Illuminate\Support\Facades\Route;

// POST request to create a category
Route::apiResource('/categories', CategoryApiController::class);

// Route::post('categories/category-add', [CategoryApiController::class, 'store']);
// Route::get('/categories/{category}', [CategoryApiController::class, 'show']);
// Route::put('/categories/{category}', [CategoryApiController::class, 'update']);
// Route::delete('/categories/{category}', [CategoryApiController::class, 'destroy']);

// Brnad api
Route::apiResource("brands",BrandApiController::class);

// Product api
Route::apiResource("/products", ProductApiController::class);

// product images (multipleImage)
Route::apiResource('multipleImage', MultipleImageController::class);
