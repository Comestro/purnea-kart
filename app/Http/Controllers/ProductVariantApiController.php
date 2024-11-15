<?php

namespace App\Http\Controllers;

use App\Models\ProductVariant;
use Illuminate\Http\Request;

class ProductVariantApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productVariants = ProductVariant::all();
        return response()->json([
            'message' => 'Product Variant Fetched successfully ',
            'productVariant' => $productVariants,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {        
        $reqFeild = ['variant_type', 'variant_name', 'sku', 'price', 'stock', 'variant_image', 'product_id'];
    
        foreach ($reqFeild as $field) {
            if (!$request->has($field)) {
                return response()->json(['error' => ucfirst(str_replace('_', ' ', $field)) . " is required, please insert this field"], 400);
            }
        }
    
        $request->validate([
            'variant_type' => 'required|string',
            'variant_name' => 'required|string|max:255',
            'sku' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'variant_image' => 'nullable|image|max:1024',
            'product_id' => 'required|exists:products,id', 
        ]);
    
        $imageName = null;
        if ($request->hasFile('variant_image')) {
            $image = $request->file('variant_image');
    
            if (!$image->isValid()) {
                return response()->json(['error' => 'Variant image is not valid.'], 400);
            }
            $imageName = time() . '.' . $image->extension();
            $image->storeAs('image/product', $imageName, 's3');
        }
    
        try {
            $productVariant = ProductVariant::create([
                'variant_type' => $request->variant_type,
                'variant_name' => $request->variant_name,
                'sku' => $request->sku,
                'price' => $request->price,
                'stock' => $request->stock,
                'variant_image' => $imageName,
                'product_id' => $request->product_id,
            ]);
    
            return response()->json([
                'message' => 'Product Variant Created Successfully',
                'product_variant' => $productVariant,
            ], 200);
    
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something went wrong.',
                'error' => $e->getMessage(),
            ], 500);
        }
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
        $productVariant = ProductVariant::find($id);

        if (!$productVariant) {
            return response()->json([
                'message' => 'Product Variant not found',
            ], 404);
        }

        $request->validate([
            'variant_type' => 'required|string',
            'variant_name' => 'required|string|max:255',
            'sku' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'variant_image' => 'nullable|image|max:1024',
        ]);

        $productVariant->update([
            'variant_type' => $request->variant_type,
            'variant_name' => $request->variant_name,
            'sku' => $request->sku,
            'price' => $request->price,
            'stock' => $request->stock,
            'variant_image' => $request->hasFile('variant_image') ? $request->variant_image->storeAs('image/product', time() . '.' . $request->variant_image->extension(), 's3') : $productVariant->variant_image,

        ]);

        return response()->json([
            'message' => 'Product Variant Updated Successfully',
            'product_variant' => $productVariant,
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $productVariant = ProductVariant::find($id);

        if (!$productVariant) {
            return response()->json([
                'message' => 'Product Variant not found',
            ], 404);
        }
        $productVariant->delete();

        return response()->json([
            'message' => 'Product Variant Deleted Successfully',
        ], 200);

    }
}
