<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductReq;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $reqField = ['name', 'price', 'discount_price', 'description', 'quantity', 'sku', 'category_id', 'brand_id'];
        foreach($reqField as $field){
            if (!$request->has($field)) {
                return response()->json(['error' => ucfirst(str_replace('_', ' ', $field)) . " is required, please insert this field"],400);
            }
        }
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'discount_price' => ['nullable', 'numeric', 'lt:price'],
            'slug' => ['required', 'string', 'max:255', 'unique:products,slug'],
            'quantity' => ['required', 'integer', 'min:0'],
            'sku' => ['required', 'string', 'max:255'],
            'vendor_id' => 'nullable', 'exists:vendors,id',
            'category_id' => 'nullable|exists:categories,id',
            'brand_id' => 'nullable', 'exists:brands,id',
        ]);
    

        try {
            // $productSlug = Str::slug($request->name);

            // $product = Product::create([
            //     'name' => $request->name,
            //     'slug' => $productSlug,
            //     'price' => $request->price,
            //     'discount_price' => $request->discount_price,
            //     'description' => $request->description,
            //     'quantity' => $request->quantity,
            //     'sku' => $request->sku,
            //     'category_id' => $request->category_id,
            //     'brand_id' => $request->brand_id,
            // ]);
            $prodSlug = Str::slug($request->name);
            $product = new Product();
            $product->name = $request->name;
            $product->slug=$prodSlug;
            $product->price = $request->price;
            $product->discount_price = $request->discount_price;
            $product->description = $request->description;
            $product->quantity = $request->quantity;
            $product->sku = $request->sku;
            $product->category_id = $request->category_id;
            $product->brand_id = $request->brand_id;
            $product->vendor_id = $request->vendor_id;
            $product->save();

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


    public function show($slug)
    {
        $product = Product::where("slug", $slug)->with(["category", "brand", "images"])->first();
        return response()->json([
            'message' => 'Product Fetched successfully',
            'product' => $product
        ], 200);
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
        if (!$product) {
            return response()->json(['Product delete fail']);
        }
        return response()->json([
            'message' => 'Product deleted successfully'
        ], 200);
    }
}
