<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreReviewReq;
use App\Models\ProductReviews;

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
    public function store(StoreReviewReq $request)
    {
        $existingReview = ProductReviews::where('product_id', $request->product_id)
            ->where('user_id', auth()->id())
            ->first();

        if ($existingReview) {
            return response()->json([
                'message' => 'You have already reviewed this product.',
            ], 409); 
        }

        $review = ProductReviews::create([
            'product_id' => $request->product_id,
            'review' => $request->review,
            'rating' => $request->rating,
            'user_id' => auth()->id(),
        ]);

        return response()->json([
            'message' => 'Review created successfully',
            'review' => $review 
        ], 20);
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
