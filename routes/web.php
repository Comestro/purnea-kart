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

//product
Route::get('/admin/products/product_list',function(){
    return view('admin.product.product_list');
});
Route::get('/admin/products/product_create',function(){
    return view('admin.product.product_create');
});
Route::get('/admin/products/product_edit',function(){
    return view('admin.product.product_edit');
});
Route::get('/admin/products/product_details',function(){
    return view('admin.product.product_details');
});

//categories
Route::get('admin/categories/category-add',function(){
    return view('admin.categories.category_add');
});
Route::get('admin/categories/category-list',function(){
    return view('admin.categories.category_list');
});
Route::get('admin/categories/category-edit',function(){
    return view('admin.categories.category_edit');
});
