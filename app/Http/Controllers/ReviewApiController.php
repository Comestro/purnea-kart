<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewReq;
use App\Models\Product;
use App\Models\ProductReviews;
use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

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
        $product = Product::find($request->product_id);
        if (!$product) {
            return response()->json(['error' => 'Product Invalid'], 404);
        }

        $user = User::find($request->user_id);
        if (!$user) {
            return response()->json(['error' => 'User ID Invalid'], 404);
        }

        if (!$request->has('rating')) {
            return response()->json(['error' => 'Rating Invalid'], 400);
        }
        if (!$request->has('review')) {
            return response()->json(['error' => 'Review Invalid'], 400);
        }

        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(['error' => 'Token is invalid or expired'], 401);
        }

        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'review' => 'required|string|max:1000',
            'rating' => 'required|integer|between:1,5',
        ]);

        try {
            $data = ProductReviews::create([
                'product_id' => $request->product_id,
                'review' => $request->review,
                'rating' => $request->rating,
                'user_id' => $user->id,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to create review', 'message' => $e->getMessage()], 500);
        }

        return response()->json([
            'message' => 'Review created successfully',
            'data' => $data
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $review = ProductReviews::find($id);
        if (!$review) {
            return response()->json(['error' => 'Review not found'], 404);
        }

        return response()->json([
            'message' => 'Review fetched successfully',
            'review' => $review
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'product_id' => 'required',
            'exists:products,id',
            'review' => 'required|string|max:1000',
            'rating' => 'required|integer|between:1,5',
        ]);
        $review = ProductReviews::find($id);
        if (!$review) {
            return response()->json(['error' => 'Review not found for id ' . $id], 404);
        }
        $review->update($request->only(['product_id', 'review', 'rating']));

        $review->save();
        return response()->json([
            'message' => 'Review updated successfully',
            'data' => $review
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $review = ProductReviews::find($id);
        if (!$review) {
            return response()->json(['error' => 'Review not found'], 404);
        }

        $review->delete();

        return response()->json([
            'message' => 'Review deleted successfully'
        ], 200);
    }
}
