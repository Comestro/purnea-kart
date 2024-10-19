<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductReq;
use App\Models\Product;
use Str;

class ProductApiController extends Controller
{

    public function index()
    {
        $products = Product::with(["category", "brand","images"])->get();
        return response()->json([
            'message' => 'Product Fetched successfully',
            'products' => $products
        ], 200);
    }
    public function store(StoreProductReq $request)
    {
        $productSlug = Str::slug($request->name);
        $product = new Product();
        $product->name = $request->name;
        $product->slug = $productSlug;
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
            'message' => 'Product created successfully',
            'product' => $product
        ], 200);
    }

    public function show(Product $product)
    {
        //
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
        //
    }
}
