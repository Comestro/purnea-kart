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
        if(empty($request->brand_name)) {
            return response()->json([
                'error' => 'Brand Name is empty',                
            ], 400);
        }
        if(empty($request->logo)) {
            return response()->json([
                'error' => 'Brand Image is empty',                
            ], 400);
        }
        if(empty($request->brand_description)) {
            return response()->json([
                'error' => 'Brand Description is empty',                
            ], 400);
        }
        if ($request->hasFile('logo')) {
            $imageName = time() . '.' . $request->logo->extension();
            $request->logo->storeAs('logo/brand', $imageName, 's3');
        }
        $brandSlug = Str::slug($request->brand_name);
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->brand_slug = $brandSlug;
        $brand->logo = $imageName;
        $brand->status = 1;
        $brand->save();
        
        return response()->json([
            'message' => 'Brand created successfully',
            'brand' => $brand
        ], 200);
    }


    public function show(string $id)
    {
        //
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
