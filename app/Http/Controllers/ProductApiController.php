<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductReq;
use App\Models\Product;
use Request;
use Str;

class ProductApiController extends Controller
{


    public function index()
    {
        $products = Product::with(["category", "brand", "images"])->get();
        return response()->json([
            'message' => 'Product Fetched successfully',
            'products' => $products
        ], 200);
    }
    public function store(Request $request)
    {
        $productNameExist = Product::where('name', $request->name)->exists();
        if(!$productNameExist){
            return response()->json([
                'error' => 'Product name does not exist',
            ],400);
        }

        $productSlugExist = Product::where('slug', $request->slug)->exists();
        if(!$productSlugExist){
            return response()->json([
                'error' => 'Product slug does not exist',
            ],400);
        }

        
        $productDescriptionExist = Product::where('description', $request->description)->exists();
        if(!$productDescriptionExist){
            return response()->json([
                'error' => 'Product description does not exist',
            ],400);
        }
        
        $productPriceExist = Product::where('price', $request->price)->exists();
        if(!$productPriceExist){
            return response()->json([
                'error' => 'Product price does not exist',
            ],400);
        }
                
        $productDiscountPriceExist = Product::where('discount_price', $request->description)->exists();
        if(!$productDiscountPriceExist){
            return response()->json([
                'error' => 'Product Discount price does not exist',
            ],400);
        }
        $productskuExist = Product::where('sku', $request->sku)->exists();
        if(!$productskuExist){
            return response()->json([
                'error' => 'Product sku does not exist',
            ],400);
        } 
        $productvendorExist = Product::where('vendor_id', $request->vendor_id)->exists();
        if(!$productvendorExist){
            return response()->json([
                'error' => 'Product vendor id does not exist',
            ],400);
        }
        $productcategoryExist = Product::where('category_id', $request->category_id)->exists();
        if(!$productcategoryExist){
            return response()->json([
                'error' => 'Product category id does not exist',
            ],400);
        }

        $productbrandExist = Product::where('brand_id', $request->brnad_id)->exists();
        if(!$productbrandExist){
            return response()->json([
                'error' => 'Product brand id does not exist',
            ],400);
        }
        $productSlug = Str::slug($request->name);

        $product = Product::create([
            'name' => $request->name,
            'slug' => $productSlug,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'sku' => $request->sku,
            'vendor_id' => $request->vendor_id,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
        ]);
        return response()->json([
            'message' => 'Product created successfully',
            'product' => $product
        ], 200);
    }


    
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->with(['category', 'brand', 'images'])->firstOrFail();
        if (!$product) {
            return response()->json([
                'message' => 'Product not found'
            ], 404);
        }
        return response()->json([
            "message" => 'Product show successfully',
            'product' => $product
        ]);
    }

    public function update(StoreProductReq $request, Product $product)
    {
        $product->name = $request->name;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->sku = $request->sku;
        $product->vendor_id = $request->vendor_id;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->save();

        return response()->json([
            'message' => 'Product update successfully',
            'product' => $product
        ], 200);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'message' => 'Product deleted successfully'
        ], 200);
    }
}
