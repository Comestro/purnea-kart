<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class WishListApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $token = JWTAuth::getToken();
        if (!$token) {
            return response()->json(['error' => 'Token is required'], 401);
        }
        try {            
            $user = JWTAuth::bearerToken()->authenticate();
            $wishlists = Wishlist::where('user_id', $user->id)->get();
            
            return response()->json([
                'status' => true,
                'message' => 'User wishlist fetched successfully',
                'wishlists' => $wishlists
            ]);
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(['error' => 'Token is invalid or expired'], 401);
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productId = $request->input('product_id');
        if (!$productId) {
            return response()->json([
                'status' => false,
                'message' => 'Product ID is required'
            ], 400);
        }
        $token = $request->bearerToken();
        if (!$token) {
            return response()->json(['error' => 'Token is required'], 401);
        }        
        try {
            $user = JWTAuth::setToken($token)->authenticate();
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(['error' => 'Token is invalid or expired'], 401);
        }
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }
        $wishlistItem = Wishlist::where('user_id', $user->id)
                                ->where('product_id', $productId)
                                ->first();

        if ($wishlistItem) {
            $wishlistItem->delete();
            return response()->json([
                'status' => true,
                'message' => 'Product removed from wishlist successfully'
            ]);
        } else {
            Wishlist::create([
                'user_id' => $user->id,
                'product_id' => $productId,
            ]);
            return response()->json([
                'status' => true,
                'message' => 'Product added to wishlist successfully'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // You can implement this if you want to show a specific wishlist item by its ID
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // You can implement this if you want to update a wishlist item
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $wishlistItem = Wishlist::find($id);

        if (!$wishlistItem) {
            return response()->json([
                'status' => false,
                'message' => 'Wishlist item not found'
            ], 404);
        }

        // Delete the wishlist item
        $wishlistItem->delete();

        return response()->json([
            'status' => true,
            'message' => 'Wishlist item removed successfully'
        ]);
    }
}
