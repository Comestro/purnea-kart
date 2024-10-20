<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandApiController;
use App\Http\Controllers\CategoryApiController;
use App\Http\Controllers\MultipleImageController;
use App\Http\Controllers\ProductApiController;
use Illuminate\Support\Facades\Route;


Route::group(["prefix" => "auth"], function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware(['auth:api'])->group(function () {
    Route::post('/refresh', [AuthController::class, 'refresh']);
});

// Category
Route::apiResource('/categories', CategoryApiController::class);

// Brnad api
Route::apiResource("brands", BrandApiController::class);

// Product api
Route::apiResource("/products", ProductApiController::class);

// product images (multipleImage)
Route::apiResource('multipleImage', MultipleImageController::class);
