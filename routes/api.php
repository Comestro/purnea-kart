<?php

use App\Http\Controllers\CategoryApiController;
use Illuminate\Support\Facades\Route;

// POST request to create a category
Route::post('admin/categories/category-add', [CategoryApiController::class, 'store']);