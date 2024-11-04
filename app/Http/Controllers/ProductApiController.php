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
        if (empty($request->name)) {
            return response()->json([
                'error' => 'Product name is required',
            ], 400);
        }
        if(empty($request->price)) {
            return response()->json([
                'error' => 'Product price is required',
            ], 400);
        }

        if(empty($request->slug)) {
            return response()->json([
                'error' => 'Product slug is required',
            ], 400);
        }
        if(empty($request->discount_price)) {
            return response()->json([
                'error' => 'Product Discount Price is required',
            ], 400);
        }

        if (empty($request->description)) {
            return response()->json([
                'error' => 'Product Description is required',
            ], 400);
        }
        if(empty($request->quantity)) {
            return response()->json([
                'error' => 'Product Quantity is required',
            ], 400);
        }
        if(empty($request->category_id)) {
            return response()->json([
                'error' => 'Product Category_id is required',
            ], 400);
        }

        if(empty($request->vendor_id)) {
            return response()->json([
                'error' => 'Product Vendor_id is required',
            ], 400);
        }
        if(empty($request->brand_id)) {
            return response()->json([
                'error' => 'Product Brand_id is required',
            ], 400);
        }

        if(empty($request->sku)) {
            return response()->json([
                'error' => 'Product Sku is required',
            ], 400);
        }
        
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

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->with(['category','brand','images'])->firstOrFail();
        if (!$product) {
            return response()->json([
                'message' => 'Product not found'
            ], 404);
        }
        return response()->json([
            "message"=>'Product show successfully',
            'product'=> $product
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
