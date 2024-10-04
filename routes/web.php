<?php

use App\Http\Controllers\GeneralSettingController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Setting;

Route::view('/', 'home')->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


require __DIR__ . '/auth.php';

Route::get('/admin', function () {
    return view('admin.index');
});

// products
Route::prefix('admin')->group(function () {
    Route::resource('product', ProductController::class);

});


//categories
Route::get('admin/categories/category-add', function () {
    return view('admin.categories.category_add');
});



Route::get('admin/brands/brand-add', function () {
    return view('admin.brands.brand_add');
});

Route::get('admin/brands/manage-brand',function(){
    return view('admin.brands.manage_brand');
});

Route::get('admin/categories/category-list',function(){
    return view('admin.categories.category_list');
})->name('manage_category');

Route::get('admin/categories/category-edit', function () {
    return view('admin.categories.category_edit');
});

//INVENTORY
Route::get('admin/inventory/inventory_receivedOrder', function () {
    return view('admin.inventory.inventory_receivedOrder');
});
Route::get('admin/inventory/inventory_warehouse', function () {
    return view('admin.inventory.inventory_warehouse');
});

//order
Route::get('admin/orders/order-cart', function () {
    return view('admin.orders.order_cart');
});
Route::get('admin/orders/order-checkout', function () {
    return view('admin.orders.order_checkout');
});
Route::get('admin/orders/order-detail', function () {
    return view('admin.orders.order_detail');
});
Route::get('admin/orders/order-list', function () {
    return view('admin.orders.order_list');
});

// SETTINGS
Route::get('admin/settings', function () {
    // Setting::truncate();
    // dd('testing');
    $setting = Setting::all()->count();

    if($setting == 0){
        Setting::create();
    }
    return view('admin.settings');
});

Route::prefix('settings')->controller(GeneralSettingController::class)->group(function () {
    Route::post('/meta-title', 'updateMetaTitle')->name('settings.updateMetaTitle');
    Route::post('/meta-tag', 'updateMetaTag')->name('settings.updateMetaTag');
    Route::post('/meta-description', 'updateMetaDescription')->name('settings.updateMetaDescription');
    Route::post('/meta-logo', 'updateMetaLogo')->name('settings.updateMetaLogo');
    Route::post('/copyright', 'updateMetaCopyright')->name('settings.updateMetaCopyright');
});
