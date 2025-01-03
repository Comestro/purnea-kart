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
        $products = Product::with(["category", "brand", "images"])->get();
        return response()->json([
            'message' => 'Product Fetched successfully',
            'products' => $products
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {        
        if (!$request->has('name')) {
            return response()->json(['error' => 'Product name is required, please insert this field.'], 400);
        }
    
        if (!$request->has('price')) {
            return response()->json(['error' => 'Price is required, please insert this field.'], 400);
        }
    
        if (!$request->has('sku')) {
            return response()->json(['error' => 'SKU is required, please insert this field.'], 400);
        }
    
        if (!$request->has('vendor_id')) {
            return response()->json(['error' => 'Vendor ID is required, please insert this field.'], 400);
        }
    
        if (!$request->has('category_id')) {
            return response()->json(['error' => 'Category ID is required, please insert this field.'], 400);
        }
    
        if (!$request->has('brand_id')) {
            return response()->json(['error' => 'Brand ID is required, please insert this field.'], 400);
        }
    
        
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0',
            'description' => 'nullable|string',
            'quantity' => 'required|integer|min:1',
            'sku' => 'required|string|max:255|unique:products,sku',
            'vendor_id' => 'required|exists:vendors,id',
            'category_id' => 'required|exists:categories,id', 
            'brand_id' => 'required|exists:brands,id',
        ]);
    
        try {
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
    
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something went wrong.',
                'error' => $e->getMessage()
            ], 500);
        }
    } 

    /**
     * Display the specified resource.
     */
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

    /**
     * Update the specified resource in storage.
     */
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        if(!$product){
            return response()->json(['Product delete fail']);
        }
        return response()->json([
            'message' => 'Product deleted successfully'
        ], 200);
    }
}
