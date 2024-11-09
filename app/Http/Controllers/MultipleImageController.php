<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MultipleImageController extends Controller
{
    // Helper method to handle image storage
    private function storeImage($imageFile)
    {
        if ($imageFile && $imageFile->isValid()) {
            $imageName = time() . '.' . $imageFile->extension();
            $imageFile->storeAs('image/product', $imageName, 's3');
            return $imageName;
        }
        return null;
    }

    public function index()
    {
        $images = ProductImage::all();
        return response()->json([
            'status' => true,
            'message' => 'Product Image Fecthed successfully',
            'images' => $images,
        ], 200);
    }

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
        $multipleImage->status = 1;
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

    public function update(Request $request, $id)
    {
        $productImage = ProductImage::find($id);
        if (!$productImage) {
            return response()->json(['error' => 'Image not found.'], 404);
        }

        $request->validate([
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('path')) {
            $imageName = $this->storeImage($request->file('path'));
            if ($imageName) {
                Storage::disk('s3')->delete('image/product/' . $productImage->path);
                $productImage->path = $imageName;
            }
        }
        $productImage->status = $request->get('status', $productImage->status);

        $productImage->save();

        return response()->json([
            'status' => true,
            'message' => 'Product Image updated successfully.',
            'productImage' => $productImage,
        ], 200);
    }

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
