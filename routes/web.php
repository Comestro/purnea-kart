<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


require __DIR__.'/auth.php';

Route::get('/admin',function(){
    return view('admin.index');
});
Route::get('/admin/product_list',function(){
    return view('admin.product.product_list');
});

Route::get('admin/categories/category-add',function(){
    return view('admin.categories.category_add');
});



Route::get('admin/brands/brand-add',function(){
    return view('admin.brands.brand_add');
});