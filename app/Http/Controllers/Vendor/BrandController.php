<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrandReq;
use App\Models\Brand;
use Illuminate\Http\Request;
use Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brand = Brand::all();
        return response()->json(['message' => 'Brand Fetched successfully', 'brand' => $brand], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandReq $request)
    {
        if ($request->hasFile('logo')) {
            $logo = time() . '.' . $request->image->extension();
            $request->logo->storeAs('logo/brand', $logo, 's3');
        }
        $brandSlug = Str::slug($request->brand_name);
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_slug = $brandSlug;
        $brand->brand_description = $request->brand_description;
        $brand->logo = $logo;
        $brand->save();
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
