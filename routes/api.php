<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandApiController;
use App\Http\Controllers\CategoryApiController;
use App\Http\Controllers\MultipleImageController;
use App\Http\Controllers\ProductApiController;
use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return response()->json(['error' => 'Method not allowed'], 405);
});
Route::group(["prefix" => "auth"], function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});
Route::get('/user', [AuthController::class, 'user'])->middleware('auth:api');

Route::middleware(['auth:api'])->group(function () {
    Route::post('/refresh', [AuthController::class, 'refresh']);

    Route::middleware('is_admin')->group(function () {
        // // dummmy data
       
        // Route::put('/products/{product}', [ProductApiController::class, 'update']);
        // Route::delete('/products/{product}', [ProductApiController::class, 'destroy']);
    });

    Route::middleware('is_vendor')->group(function () {
        // Vendor-specific routes can go here
        // Route::post('/products', [ProductApiController::class, 'store']);  
    });

});

// Unauthenticated Routes (Public Access)
// Route::middleware(['auth:api'])->group(function () {

Route::apiResource('/products', ProductApiController::class);
Route::apiResource('brands', BrandApiController::class);
Route::apiResource('multipleImage', MultipleImageController::class);
Route::apiResource('/categories', CategoryApiController::class);
// });
