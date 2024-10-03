<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::view('/', 'welcome')->name('home');

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
Route::get('/admin/product/product_list',function(){
    return view('admin.product.product_list');
});
Route::get('/admin/products/product_create',function(){
    return view('admin.product.product_create');
});

Route::resource('products',ProductController::class);

Route::get('/admin/product/product_edit',function(){
    return view('admin.product.product_edit');
});
Route::get('/admin/product/product_details',function(){
    return view('admin.product.product_details');
});

//categories
Route::get('admin/categories/category-add',function(){
    return view('admin.categories.category_add');
});



Route::get('admin/brands/brand-add',function(){
    return view('admin.brands.brand_add');
});
Route::get('admin/categories/category-list',function(){
    return view('admin.categories.category_list');
});
Route::get('admin/categories/category-edit',function(){
    return view('admin.categories.category_edit');
});

//INVENTORY
Route::get('admin/inventory/inventory_receivedOrder',function(){
    return view('admin.inventory.inventory_receivedOrder');
});
Route::get('admin/inventory/inventory_warehouse',function(){
    return view('admin.inventory.inventory_warehouse');
});

//order
Route::get('admin/orders/order-cart',function(){
    return view('admin.orders.order_cart');
});
Route::get('admin/orders/order-checkout',function(){
    return view('admin.orders.order_checkout');
});
Route::get('admin/orders/order-detail',function(){
    return view('admin.orders.order_detail');
});Route::get('admin/orders/order-list',function(){
    return view('admin.orders.order_list');
});

