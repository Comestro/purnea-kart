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

        $reqField = ['brand_name', 'brand_slug', 'brand_description', 'logo'];
        foreach ($reqField as $field) {
            if (!$request->has($field)) {
                return response()->json(['error' => ucfirst(str_replace('_', ' ', $field)) . " is requrird, please insert this field"], 400);
            }
        }

        // if ($request->hasFile('logo')) {
        //     $logo = $request->file('logo');
        //     if (!$logo->isValid()) {
        //         return response()->json(['error' => 'Logo file is not a valid image.'], 400);
        //     }

        //     if (!in_array($logo->getClientMimeType(), ['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/svg+xml'])) {
        //         return response()->json(['error' => 'Logo must be an image file (jpeg, png, jpg, gif, svg).'], 400);
        //     }

        //     if ($logo->getSize() > 2048 * 1024) {
        //         return response()->json(['error' => 'Logo image may not be greater than 2MB.'], 400);
        //     }
        // }


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
        try {
            $brand = Brand::where('slug', $slug)->firstOrFail();

            return response()->json([
                'message' => 'Brand retrieved successfully',
                'brand' => $brand,
            ], 200);

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Brand not found with the given slug',
            ], 404);
        }
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
