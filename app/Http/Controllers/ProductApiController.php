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
