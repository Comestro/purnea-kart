<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreReviewReq;
use App\Models\ProductReviews;
use Illuminate\Support\Facades\Request;

class ReviewApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = ProductReviews::all();
        return response()->json([
            'message' => 'Reviews fetched successfully',
            'reviews' => $reviews
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = [
            'product_id' => Request::input('product_id'),
           'review' => Request::input('review'),
            'rating' => Request::input('rating'),
            "user_id" => Request::input('user_id')
              // assuming rating is a numeric field in your database table. If it's a string, you need to cast it as integer. For example, 'rating' => (int) Request::input('rating')  // Casting string to integer in PHP.
        ];
     

        $review = ProductReviews::create($data);

        return response()->json([
            'message' => 'Review created successfully',
            'review' => $review 
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
    public function update(ProductReviews $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductReviews $productReviews)
    {
        //
    }
}
