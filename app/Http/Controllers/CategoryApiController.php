<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryReq;
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
    public function store(StoreCategoryReq $request)
    {

        $imageName = $request->hasFile('image')
            ? time() . '.' . $request->image->extension()
            : null;
     if($imageName) $request->image->storeAs('storage/public/image/category', $imageName,'public');
        



        $category = new Category();
        $category->cat_title = $request->cat_title;
        $category->parent_category_id = $request->parent_category_id;
        $category->cat_slug = $request->cat_slug;
        $category->cat_description = $request->cat_description;
        $category->image = $imageName;

        return response()->json(['message' => 'Category created successfully', 'category' => $category], 200);
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
