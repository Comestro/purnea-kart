<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductReq;
use App\Models\Product;
use Illuminate\Http\Request;
use Response;
use Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::where("brand", "category");
        return response()->json([
            'message' => 'Product Fetched successfully',
            'product' => $product
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductReq $request)
    {
        $proSlug = Str::slug($request->name);
        $product = new Product();
        $product->name = $request->name;
        $product->slug = $proSlug;
        $product->price = $request->price;
        $product->sku = $request->sku;        
        $product->discount_price = $request->discount_price;
        $product->quantity = $request->quantity;
        $product->brand_id = $request->brand_id;
        $product->vendor_id = $request->vendor_id;
        $product->category_id = $request->category_id;        
        $product->save();
        return response()->json(['message'=>'Product inserted successfully','product'=>$product],200);
    } 

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
