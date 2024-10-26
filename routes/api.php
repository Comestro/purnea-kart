<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandApiController;
use App\Http\Controllers\CategoryApiController;
use App\Http\Controllers\MultipleImageController;
use App\Http\Controllers\ProductApiController;
use Illuminate\Support\Facades\Route;

// Fallback route for handling undefined routes
Route::fallback(function () {
    return response()->json(['error' => 'Method not allowed'], 405);
});

// Authentication routes
Route::group(['prefix' => 'auth'], function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});


Route::prefix('otp')->group(function () {
    Route::post('login', [AuthController::class, 'otpLogin']);
    Route::post('verify', [AuthController::class, 'verifyOtp'])->middleware('throttle:5,1');
});
  
Route::delete('categories/{category}', [AuthController::class,'destroy']);
// Authenticated user route
Route::get('/user', [AuthController::class, 'user'])->middleware('auth:api');

// Grouped authenticated routes
Route::middleware(['auth:api'])->group(function () {
    Route::post('/refresh', [AuthController::class, 'refresh']);

    // Admin-specific routes
    Route::middleware('admin.auth')->group(function () {
        // Uncomment and add actual functionality
        // Route::put('/products/{product}', [ProductApiController::class, 'update']);
        // Route::delete('/products/{product}', [ProductApiController::class, 'destroy']);
    });
    Route::middleware('not.admin')->group(function () {
        // Uncomment and add actual functionality
        // Route::put('/products/{product}', [ProductApiController::class, 'update']);
        // Route::delete('/products/{product}', [ProductApiController::class, 'destroy']);
    });

    // Vendor-specific routes
    Route::middleware('vendor.auth')->group(function () {
        // Uncomment and add actual functionality
        // Route::post('/products', [ProductApiController::class, 'store']);
    });

    // Non-vendor specific routes
    Route::middleware('not.vendor')->group(function () {
        // Uncomment and add actual functionality
        // Route::post('/products', [ProductApiController::class, 'store']);
    });
});

// Resource routes
Route::apiResource('/products', ProductApiController::class);
Route::apiResource('/brands', BrandApiController::class);
Route::apiResource('/multipleImage', MultipleImageController::class);
Route::apiResource('categories', CategoryApiController::class);
