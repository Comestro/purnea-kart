<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandApiController;
use App\Http\Controllers\CartControllerApi;
use App\Http\Controllers\CategoryApiController;
use App\Http\Controllers\Vendor\BrandController;
use App\Http\Controllers\Vendor\CategoryController;
use App\Http\Controllers\Vendor\MultipleImageController;
use App\Http\Controllers\ProductApiController;
use App\Http\Controllers\ProductVariantApiController;
use App\Http\Controllers\ReviewApiController;
use App\Http\Controllers\Vendor\ProductController;
use App\Http\Controllers\WishListApiController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// Fallback route for handling undefined routes
Route::fallback(function () {
    return response()->json(['error' => 'Method not allowed'], status: 405);
});

// Authentication routes

Route::group(['prefix' => 'auth'], function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login'])->name('account.login.data');
});

Route::prefix('otp')->group(function () {
    Route::post('login', [AuthController::class, 'otpLogin']);
    Route::post('verify', [AuthController::class, 'verifyOtp'])->middleware('throttle:5,1');
});

Route::delete('categories/{category}', [AuthController::class, 'destroy']);
// Authenticated user route

// Grouped authenticated routes
Route::middleware(['auth:api'])->group(function () {
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user', [AuthController::class, 'user']);
    Route::apiResource('/reviews', ReviewApiController::class);


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
        Route::apiResource('/categories', CategoryController::class);
        Route::apiResource('/products', ProductController::class);
        Route::apiResource('/multipleImages', MultipleImageController::class);
        Route::apiResource('/brands', BrandController::class);

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
Route::apiResource('/productVariants', ProductVariantApiController::class);
Route::apiResource('/wishlists', WishListApiController::class);

// Route::post('/account/login', [PublicController::class, 'Login'])->name('account.login.data');
// add To cart
// Route::get('/cart', [CartControllerApi::class, 'viewCart']);
Route::post('/cart/add/{product_slug}', [CartControllerApi::class, 'addToCart']);
// Route::delete('/cart/{product_slug}', [CartControllerApi::class, 'removeFromCart']);
// Route::post('/cart/increment/{product_slug}', [CartControllerApi::class, 'incrementQuantity']);
// Route::post('/cart/decrement/{product_slug}', [CartControllerApi::class, 'decrementQuantity']);
