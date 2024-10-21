<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageReq;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class MultipleImageController extends Controller
{

    public function index()
    {
        $images = ProductImage::all();
    }
    public function store(StoreImageReq $request)
    {
        if ($request->hasFile('path')) {
            $imageName = time() . '.' . $request->path->extension();
            $request->path->storeAs('image/product', $imageName, 'public');
        }
        $multipleImage = new ProductImage();
        $multipleImage->product_id = $request->product_id;
        $multipleImage->path = $imageName;
        $multipleImage->status = 1;
        $multipleImage->save();

        return response()->json([
            'message' => 'Product Multiple Image created successfully',
            'multipleImage' => $multipleImage
        ], 200);
    }

    public function show(ProductImage $productImage)
    {
        //
    }

    public function update(Request $request, ProductImage $productImage)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
