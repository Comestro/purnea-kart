<?php

use App\Http\Controllers\BrandApiController;
use App\Http\Controllers\CategoryApiController;
use App\Http\Controllers\MultipleImageController;
use App\Http\Controllers\ProductApiController;
use Illuminate\Support\Facades\Route;

// POST request to create a category
Route::get('/categories', [CategoryApiController::class, 'index']);

Route::post('categories/category-add', [CategoryApiController::class, 'store']);
Route::get('/categories/{category}', [CategoryApiController::class, 'show']);
Route::put('/categories/{category}', [CategoryApiController::class, 'update']);
Route::delete('/categories/{category}', [CategoryApiController::class, 'destroy']);

// Brnad api

Route::get("/brands",[BrandApiController::class,"index"]);
Route::post("/brands/brand-add",[BrandApiController::class,"store"]);

// Product api
Route::get("/products", [ProductApiController::class,"index"]);
Route::post("/products/create", [ProductApiController::class,"store"]);


// product images (multipleImage)
Route::apiResource('multipleImage',MultipleImageController::class);