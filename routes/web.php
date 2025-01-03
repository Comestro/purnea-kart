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
use App\Http\Controllers\OrderController;

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

//add-to-cart
Route::get('/add-to-cart/{product_slug}', [OrderController::class, 'addToCart'])->name('addToCart')->middleware('auth');
Route::get('/cart', [OrderController::class, 'showCart'])->name('Cart');



Route::get('/becomeSeller', [SellerController::class, 'show'])->name('sellershow');
Route::get('/become-seller/create', [SellerController::class, 'index'])->name('seller.register');
Route::get('/become-seller/login', [SellerController::class, 'login'])->name('seller.login');
Route::get('/become-seller/create/status', [SellerController::class, 'status'])->name('seller.status');

Route::get('/view/{product_slug}', function($product_slug){
    $data['product'] = Product::where('slug',$product_slug)->first();
    $data['relatedProducts'] = Product::where('category_id', $data['product']->category_id)->where('id', '!=', $data['product']->id)->take(5) ->get();
    return view('single-view',$data);
})->name('viewpage');

Route::get('/filter/{cat_slug}', function($cat_slug) {
    $data['category'] = Category::where('cat_slug', $cat_slug)->firstOrFail();
    return view('filter-page', $data);
})->name('filter');


Route::view('dashboard', 'dashboard') 
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    // ->middleware(['auth'])
    ->name('profile');


require __DIR__ . '/auth.php';

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.dashboard');

    // Products
    Route::resource('product', ProductController::class);
    Route::get('/product-grid', function () {
        return view('admin.product.product_grid');
    });
    Route::get('/product-details/{id}', function ($id) {
        return view('admin.product.product_details',['id' => $id]);
    })->name('adminProductView');

    // Brands
    Route::get('brands/brand-add', function () {
        return view('admin.brands.brand_add');
    });
    Route::get('brands/manage-brand', function () {
        return view('admin.brands.manage_brand');
    })->name('manage_brand');
    Route::get('brands/brand-edit/{brand_id}', function ($brand_id) {
        return view('admin.brands.brand_edit', ['brand_id' => $brand_id]);
    })->name('edit_brand');

    // Banner
    Route::get('banner/banner_create', function () {
        return view('admin.banner.banner_create');
    });
    Route::get('banner/calling-banner', function () {
        return view('admin.banner.calling-banner');
    });

    // Categories
    Route::get('categories/category-list', function () {
        return view('admin.categories.category_list');
    })->name('manage_category');
    Route::get('categories/category-edit/{cat_id}', function ($cat_id) {
        $categoryItem = Category::find($cat_id);
        return view('admin.categories.category_edit', ['cat_id' => $cat_id], ['categoryItems' => $categoryItem]);
    })->name('edit.category');
    Route::get('categories/category-add', function () {
        return view('admin.categories.category_add');
    })->name('create.category');

    // Coupons
    Route::get('coupon/coupon-add', function () {
        return view('admin.coupons.coupon-add');
    })->name('coupon_add');
    Route::get('coupon/coupon-list', function () {
        return view('admin.coupons.coupon-list');
    })->name('coupon_list');

    // Inventory
    Route::get('inventory/inventory_receivedOrder', function () {
        return view('admin.inventory.inventory_receivedOrder');
    });
    Route::get('inventory/inventory_warehouse', function () {
        return view('admin.inventory.inventory_warehouse');
    });

    // Orders
    Route::get('orders/order-cart', function () {
        return view('admin.orders.order_cart');
    });
    Route::get('orders/order-checkout', function () {
        return view('admin.orders.order_checkout');
    });
    Route::get('orders/order-detail', function () {
        return view('admin.orders.order_detail');
    });
    Route::get('orders/order-list', function () {
        return view('admin.orders.order_list');
    });

    // Settings
    Route::get('settings', function () {
        $setting = Setting::all()->count();
        if ($setting == 0) {
            Setting::create();
        }
        return view('admin.settings', ['setting' => Setting::first()]);
    });

    // Sellers
    Route::get('seller/seller-list', function () {
        return view('admin.seller.seller_list');
    })->name('seller_list');
    Route::get('seller/seller-add', function () {
        return view('admin.seller.seller_add');
    })->name('seller_add');
    Route::get('seller/seller-details/{id}', function ($id) {
        $seller = Seller::findOrFail($id);
        return view('admin.seller.seller-details', compact('seller'));
    })->name('seller_details');
});



Route::get('auth/google', [SocialiteController ::class, 'redirectToGoogle'])->name('google.login');

Route::get('auth/google/callback', [SocialiteController::class, 'handleGoogleCallback'])->name('google.callback');


//order



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
Route::get('/vendor/gridProduct', function () {
    return view('vendor.product.product-grid');
})->name('vendor.gridProduct');

Route::get('/vendor/product/{pro_id}', [SellerController::class, 'edit'])->name('product.edit');




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
    Route::get('/wishlist','viewUserWishlist')->name('wishlist.view');
        
});


// login and signup work here:
Route::prefix('account')->group(function () {
    Route::get('/register', [PublicController::class, 'showRegisterForm'])->name('account.register.form');
    Route::post('/register', [PublicController::class, 'register'])->name('account.register');

    Route::get('/login', [PublicController::class, 'showLoginForm'])->name('account.login.form');
    Route::post('/login', [PublicController::class, 'Login'])->name('account.login');
    Route::get('/logout',[PublicController::class, 'logout'])->name('account.logout');
});

