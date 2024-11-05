<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrandReq;
use App\Models\Brand;
use Illuminate\Http\Request;
use Str;

class BrandApiController extends Controller
{

    public function index()
    {
        $brands = Brand::all();
        return response()->json([
            'message' => 'Product created successfully',
            'brands' => $brands
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand_name' => 'required|string|max:255',
            'brand_slug' => 'required|string|max:255|unique:brands,brand_slug',
            'brand_description' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $brandDescriptionExists = Brand::where('brand_description', $request->brand_description)->exists();
        if (!$brandDescriptionExists) {
            return response()->json([
                'error' => 'Brand description does not exist'
            ], 400);
        }

        $brandNameExists = Brand::where('brand_name', $request->brand_name)->exists();
        if (!$brandNameExists) {
            return response()->json([
                'error' => 'Brand name does not exist'
            ], 400);
        }
        $brandLogoExists = Brand::where('brand_slug', $request->brand_slug)->exists();
        if (!$brandLogoExists) {
            return response()->json([
                'error' => 'Brand slug does not exist'
            ], 400);
        }
        $brandNameExists = Brand::where('logo', $request->logo)->exists();
        if (!$brandNameExists) {
            return response()->json([
                'error' => 'Brand image does not exist'
            ], 400);
        }
        try {
            $imageName = null;
            if ($request->hasFile('logo')) {
                $imageName = time() . '.' . $request->logo->extension();
                $request->logo->storeAs('logo/brand', $imageName, 's3');
            }

            $brandSlug = Str::slug($request->brand_name);

            $brand = Brand::create([
                'brand_name' => $request->brand_name,
                'brand_slug' => $brandSlug,
                'brand_description' => $request->brand_description,
                'logo' => $imageName,
            ]);

            return response()->json([
                'message' => 'Brand created successfully',
                'brand' => $brand,
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
        $brand = Brand::where('slug', $slug)->firstOrFail();
        return response()->json([
            'message' => 'Brand show successfully',
            'brand' => $brand,
        ], 200);
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
    public function status($id)
    {
        $brand = Brand::find($id);
        if (!$brand) {
            return response()->json(['message' => 'Brand not found'], 404);
        }

        $brand->update(['status' => !$brand->status]);
        return redirect()->route('manage_brand')->with('message', 'Brand status updated successfully');
    }
}
