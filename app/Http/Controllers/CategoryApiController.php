<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryReq;
use App\Models\Category;
use Illuminate\Http\Request;
use Storage;
use Str;
use Image;

class CategoryApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::where('parent_category_id', NULL)->get();
        return response()->json([
            'message' => 'Categories fetched successfully',
            'categories' => $categories
        ], 200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryReq $request)
    {
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('image/category', $imageName,'public');         
        }

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
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        if (!$category) {
            return response()->json([
                'message' => 'Category not found'
            ], 404);
        }

        return response()->json([
            'message' => 'Category fetched successfully',
            'category' => $category
        ], 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCategoryReq $request, Category $category)
    {

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/image/category', $imageName);
            $category->image = $imageName;
        }

        $category->cat_title = $request->cat_title;
        $category->parent_category_id = $request->parent_category_id;
        $category->cat_slug = $request->cat_slug;
        $category->cat_description = $request->cat_description;
        $category->save();

        return response()->json([
            'message' => 'Category updated successfully',
            'category' => $category
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
      
      $imagePath = $category->image ? 'public/image/category/' . $category->image : null;
        if ($imagePath && Storage::exists($imagePath)) {
            Storage::delete($imagePath);
        }
        $deleted = $category->delete();

        return $deleted ?
            response()->json(['message' => 'Category deleted successfully'], 200) :
            response()->json(['message' => 'Category could not be deleted'], 500);
    }


}
