<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\GeneralSettingController;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SellerController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\Setting;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Seller;

use function Livewire\store;

Route::get('/', function () {

    $data['categories'] = Category::all();
    $data['products'] = Product::all();
    $data['brands'] = Brand::all();
    return view('home', $data);
})->name('home');

Route::get('/becomeSeller', [SellerController::class, 'show'])->name('sellershow');
Route::get('/become-seller/create', [SellerController::class, 'index'])->name('seller.register');
Route::get('/become-seller/login', [SellerController::class, 'login'])->name('seller.login');
Route::get('/become-seller/create/status', [SellerController::class, 'status'])->name('seller.status');

Route::get('/view/{product_slug}', function($product_slug){
    $data['product'] = Product::where('slug',$product_slug)->first();
    $data['relatedProducts'] = Product::where('category_id', $data['product']->category_id)->where('id', '!=', $data['product']->id)->take(5) ->get();
    return view('single-view',$data);
})->name('viewpage');

Route::get('/filter', function () {
    return view('filter-page');
})->name('filter');

Route::view('dashboard', 'dashboard') 
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    // ->middleware(['auth'])
    ->name('profile');


require __DIR__ . '/auth.php';

Route::get('/admin', function () {
    return view('admin.index');
});

// products
Route::prefix('admin')->group(function () {
    Route::resource('product', ProductController::class);
});

Route::get('/admin/product-grid', function () {
    return view('admin.product.product_grid');
});

Route::get('/admin/product-details/{id}', function ($id) {
    return view('admin.product.product_details',['id' => $id]);
})->name('adminProductView');



//brand
Route::get('admin/brands/brand-add', function () {
    return view('admin.brands.brand_add');
});

Route::get('admin/brands/manage-brand', function () {
    return view('admin.brands.manage_brand');
})->name('manage_brand');

Route::get('admin/brands/brand-edit/{brand_id}', function ($brand_id) {
    return view('admin.brands.brand_edit', ['brand_id' => $brand_id]);
})->name('edit_brand');


//Banner
Route::get('admin/banner/banner_create', function () {
    return view('admin.banner.banner_create');
});
// Banner::truncate();

Route::get('admin/banner/calling-banner', function () {
    return view('admin.banner.calling-banner');
});


//Caregory
Route::get('admin/categories/category-list', function () {
    return view('admin.categories.category_list');
})->name('manage_category');

Route::get('admin/categories/category-edit/{cat_id}', function ($cat_id) {
    $categoryItem = Category::find($cat_id);
    return view('admin.categories.category_edit', ['cat_id' => $cat_id], ['categoryItems' => $categoryItem]);
})->name('edit.category');

Route::get('admin/categories/category-add', function () {
    return view('admin.categories.category_add');
})->name('create.category');

//Coupon
Route::get('admin/coupon/coupon-add', function () {
    return view('admin.coupons.coupon-add');
})->name('coupon_add');

Route::get('admin/coupon/coupon-list', function () {
    return view('admin.coupons.coupon-list');
})->name('coupon_list');


//INVENTORY
Route::get('admin/inventory/inventory_receivedOrder', function () {
    return view('admin.inventory.inventory_receivedOrder');
});
Route::get('admin/inventory/inventory_warehouse', function () {
    return view('admin.inventory.inventory_warehouse');
});


Route::get('auth/google', [SocialiteController ::class, 'redirectToGoogle'])->name('google.login');

Route::get('auth/google/callback', [SocialiteController::class, 'handleGoogleCallback'])->name('google.callback');


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

    if ($setting == 0) {
        Setting::create();
    }
    return view('admin.settings', ['setting' => Setting::first()]);
});

//seller
Route::get('admin/seller/seller-list', function () {
    return view('admin.seller.seller_list');
})->name('seller_list');

Route::get('admin/seller/seller-add', function () {
    return view('admin.seller.seller_add');
})->name('seller_add');
Route::get('admin/seller/seller-details/{id}',function($id){
    return view('admin.seller.seller-details',["seller_id" => $id]);
})->name('seller_details');




//vendor
Route::get('/vendor', function () {
    return view('vendor.index');
})->name('vendor.index');

// pending:
Route::get('/vendor/pending',function(){
    return view('vendor.pending');
})->name('vendor.pending');

//Product

Route::get('/vendor/addproduct', function () {
    return view('vendor.product.addProduct');
})->name('vendor.addproduct');
Route::get('/vendor/product-list', function () {
    return view('vendor.product.productList');
})->name('vendor.product-list');

Route::get('/vendor/editProduct', function () {
    return view('vendor.product.editProduct');
})->name('vendor.editProduct');


//Category
Route::get('/vendor/addCategory', function () {
    return view('vendor.category.addCategory');
})->name('vendor.addcategory');
Route::get('/vendor/category-list', function () {
    return view('vendor.category.categoryList');
})->name('vendor.category-list');


//Brand
Route::get('/vendor/addBrand', function () {
    return view('vendor.brand.addBrand');
})->name('vendor.addbrand');
Route::get('/vendor/brand-list', function () {
    return view('vendor.brand.brandList');
})->name('vendor.brand-list');


// public controller grouping here:

Route::controller(PublicController::class)->group(function () {
    Route::get('/about-us', 'aboutHome')->name('about.home');
    Route::get('/ethics', 'Ethics')->name('about.ethics');
    Route::get('/culture', 'Culture')->name('about.culture');
    Route::get('/technology', 'Technology')->name('about.technology');
    Route::get('/sustainability', 'SustainAbility')->name('about.sustainability');
});


// login and signup work here:
Route::prefix('account')->group(function () {
    Route::get('/register', [PublicController::class, 'showRegisterForm'])->name('account.register.form');
    Route::post('/register', [PublicController::class, 'register'])->name('account.register');

    Route::get('/login', [PublicController::class, 'showLoginForm'])->name('account.login.form');
    Route::post('/login', [PublicController::class, 'Login'])->name('account.login');
});

