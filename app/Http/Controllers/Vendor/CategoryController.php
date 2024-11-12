<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categores = Category::all();
        return response()->json([
            'status' => true,
            'message'=>'category Fetech Successfully',
            'categories'=>$categores
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Custom validation for missing fields
        if (!$request->has('cat_title')) {
            return response()->json(['error' => 'Category title is required, please insert this field.'], 400);
        }

        if (!$request->has('cat_description')) {
            return response()->json(['error' => 'Category description is required, please insert this field.'], 400);
        }
        if (!$request->has('image')) {
            return response()->json(['error' => 'Category image is required, please insert this field.'], 400);
        }
        
        $request->validate([
            'cat_title' => 'required|string|max:255',
            'cat_slug' => 'required|string|max:255|unique:categories,cat_slug',
            'cat_description' => 'required|string',
            'parent_category_id' => 'nullable|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            if (!$image->isValid()) {
                return response()->json(['error' => 'Uploaded image is not valid.'], 400);
            }

            $imageName = time() . '.' . $image->extension();
            $image->storeAs('image/category', $imageName, 's3');
        }

        try {
            $catSlug = Str::slug($request->cat_title);

            $category = new Category();
            $category->cat_title = $request->cat_title;
            $category->parent_category_id = $request->parent_category_id;
            $category->cat_slug = $catSlug;
            $category->cat_description = $request->cat_description;
            $category->image = $imageName;
            $category->save();


            return response()->json([
                'message' => 'Category created successfully',
                'category' => $category
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something went wrong.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        try {
            $brand = Category::where('slug', $slug)->firstOrFail();
            
            return response()->json([
                'message' => 'Category retrieved successfully',
                'brand' => $brand,
            ], 200);
            
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Category not found with the given slug',
            ], 404);
        }
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
