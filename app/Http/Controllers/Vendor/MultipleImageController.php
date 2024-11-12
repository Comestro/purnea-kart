<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Storage;

class MultipleImageController extends Controller
{
    private function storeImage($imageFile)
    {
        if ($imageFile && $imageFile->isValid()) {
            $imageName = time() . '.' . $imageFile->extension();
            $imageFile->storeAs('image/product', $imageName, 's3');
            return $imageName;
        }
        return null;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $multipleImages = ProductImage::all();
        return response()->json([
            'status' => true,
            'message' => 'Multiple Image Insert successfully',
            'multipleImages' => $multipleImages
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::find($request->product_id);
        if (!$product) {
            return response()->json([
                'status' => false,
                'error' => 'Product Id is invalid.',
            ], 404);
        }

        if (!$request->has('path')) {
            return response()->json(['error' => 'Image path is required.'], 400);
        }

        $request->validate([
            'product_id' => 'required|exists:products,id',
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $imageName = $this->storeImage($request->file('path'));
        if (!$imageName) {
            return response()->json(['error' => 'Failed to upload image.'], 400);
        }

        $multipleImage = new ProductImage();
        $multipleImage->product_id = $request->product_id;
        $multipleImage->path = $imageName;        
        $multipleImage->save();

        return response()->json([
            'status' => true,
            'message' => 'Product Image created successfully.',
            'multipleImage' => $multipleImage,
        ], 200);
    }

    public function show(Request $request, $id)
    {
        $productImage = ProductImage::find($id);
        if (!$productImage) {
            return response()->json(['error' => 'Image not found.'], 404);
        }

        return response()->json([
            'status' => true,
            'productImage' => $productImage,
        ], 200);
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
    public function destroy($id)
    {
        $productImage = ProductImage::find($id);
        if (!$productImage) {
            return response()->json(['error' => 'Image not found.'], 404);
        }
        Storage::disk('s3')->delete('image/product/' . $productImage->path);

        $productImage->delete();

        return response()->json([
            'status' => true,
            'message' => 'Product Image deleted successfully.',
        ], 200);
    }
}
