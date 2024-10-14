<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Str;

class CategoryApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $validatedData = $request->validate([
            'cat_title' => 'required|string|max:255',
            'cat_slug' => 'required|string|max:255|unique:categories,cat_slug',
            'cat_description' => 'required|string',
            'parent_category_id' => 'nullable|exists:categories,id',
            'image' => 'nullable|image|max:2048',
        ]);

       
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images/categories', $imageName);
        } else {
            $imageName = null;
        }

        $category = Category::create([
            'parent_category_id' => $request->parent_category_id,
            'cat_title' => $request->cat_title,
            'cat_slug' => $request->cat_slug,
            'cat_description' => $request->cat_description,
            'image' => $imageName,
        ]);

        return response()->json(['message' => 'Category created successfully', 'category' => $category], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
