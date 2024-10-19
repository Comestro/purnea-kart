<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageReq;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class MultipleImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = ProductImage::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreImageReq $request)
    {
        $validatedData = $request->validated();

        $imagePath = $request->hasFile('image')
            ? $request->image->store('public/image/product')
            : null;

        if ($imagePath) {
            $validatedData['image'] = $imagePath;
        } else {
            return response()->json([
                'message' => 'No valid image file uploaded.',
            ], 400);
        }

        $multipleImage = new ProductImage();
        $multipleImage->name = $imagePath; 
        $multipleImage->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductImage $productImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductImage $productImage)
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
