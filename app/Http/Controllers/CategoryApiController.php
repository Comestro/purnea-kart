<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryReq;
use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use Str;
use Validator;

class CategoryApiController extends Controller
{

    public function index()
    {
        $categories = Category::where('parent_category_id', NULL)->get();
        return response()->json([
            'message' => 'Categories fetched successfully',
            'categories' => $categories
        ], 200);

    }

    public function store(Request $request)
    {
        // Custom validation for missing fields
        $reqField = ['cat_title', 'cat_description', 'image'];
        foreach ($reqField as $field) {
            if (!$request->has($field)) {
                return response()->json(['error' => ucfirst(str_replace('_', ' ', $field)) . " is requrird, please insert this field"],400);
            }
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
        $categorySlug = Category::where('cat_slug',$slug)->exists();
        if(!$categorySlug){
            return response()->json([
                'message' => 'Category slug not exist'
            ], 404);
        }
        $category = Category::with('products')->where('cat_slug', $slug)->firstOrFail();
        
        if ($category->products->isEmpty()) {
            return response()->json([
                'message' => 'Category wise products not found',
            ], 404);
        }
        if (!$category) {
            return response()->json([
                'message' => 'Category not found'
            ], 404);
        }

        return response()->json([
            'message' => 'Category fetched successfully',
            // 'category' => $category,
            'products' => $category->products
        ], 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCategoryReq $request, Category $category)
    {

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('image/category', $imageName, 'public');
        }

        $category->cat_title = $request->cat_title;
        $category->parent_category_id = $request->parent_category_id;
        $category->cat_slug = $request->cat_slug;
        $category->image = $imageName;
        $category->cat_description = $request->cat_description;
        $category->save();

        return response()->json([
            'message' => 'Category updated successfully',
            'category' => $category
        ], 200);
    }

    public function destroy(Category $category)
    {
        // if ($category->image) {
        //     Storage::disk('s3')->delete('image/category/' . $category->image);
        // }
        dd($category->id);
        try {
            $category->delete();
            return response()->json(['message' => 'Category deleted successfully.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Category could not be deleted.'], 500);
        }
    }

}
