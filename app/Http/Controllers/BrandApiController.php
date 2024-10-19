<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrandReq;
use App\Models\Brand;
use Illuminate\Http\Request;
use Storage;
use Str;

class BrandApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return response()->json([
            'message' => 'Product created successfully',
            'brands' => $brands
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandReq $request)
    {

        $validatedData = $request->validated();

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $imagePath = $logo->store('public/logo/brand');
            $validatedData['logo'] = $imagePath;
        } else {
            return response()->json([
                'message' => 'No valid image file uploaded.',
            ], 400);
        }
        $brandSlug = Str::slug($request->brand_slug);
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->brand_slug = $brandSlug;
        $brand->logo = $imagePath;
        $brand->save();
        return response()->json([
            'message' => 'Brand created successfully',
            'brand' => $brand
        ], 200);
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
