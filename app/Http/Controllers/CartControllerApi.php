<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Validator;

class CartControllerApi extends Controller
{
    public function addToCart(Request $request, $product_slug)
    {
        // Validate request data, allowing null for color_variant_id and size_variant_id
        $validator = Validator::make($request->all(), [
            'color_variant_id' => 'nullable|exists:color_variants,id',
            'size_variant_id' => 'nullable|exists:size_variants,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => 'Validation failed',
                'messages' => $validator->errors()
            ], 422);
        }

        try {
            // Get the product details or throw a 404 exception if not found
            $product = Product::where('slug', $product_slug)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Check if JWT token exists
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

        // Check if there's an existing order that hasn't been placed
        $orderExist = Order::where([
            ['user_id', '=', $user->id],
            ['isOrdered', '=', false]
        ])->first();

        if ($orderExist) {
            // Check if product already exists in order items with optional color and size variants
            $query = $orderExist->items();
            
            // If the color variant is provided, filter by color_variant_id
            if ($request->has('color_variant_id') && $request->color_variant_id !== null) {
                $query->where('color_variant_id', $request->color_variant_id);
            }

            // If the size variant is provided, filter by size_variant_id
            if ($request->has('size_variant_id') && $request->size_variant_id !== null) {
                $query->where('size_variant_id', $request->size_variant_id);
            }

            // Check if order item already exists
            $orderItem = $query->first();

            if ($orderItem) {
                // If product exists in cart, update quantity
                $orderItem->quantity += 1;
                $orderItem->save();
            } else {
                // Add a new order item with the selected color and size variants
                $orderItem = new OrderItem();
                $orderItem->product_id = $product->id;
                $orderItem->order_id = $orderExist->id;
                
                // Assign variants if provided
                if ($request->has('color_variant_id') && $request->color_variant_id !== null) {
                    $orderItem->color_variant_id = $request->color_variant_id;
                }

                if ($request->has('size_variant_id') && $request->size_variant_id !== null) {
                    $orderItem->size_variant_id = $request->size_variant_id;
                }

                $orderItem->quantity = 1;
                $orderItem->save();
            }
        } else {
            // Create a new order
            $order = new Order();
            $order->user_id = $user->id;
            $order->isOrdered = false;
            $order->order_number = 'ORD-' . strtoupper(Str::random(8)); // Or use uuid()
            $order->save();

            // Add product to the newly created order with optional variants
            $orderItem = new OrderItem();
            $orderItem->product_id = $product->id;
            $orderItem->order_id = $order->id;

            // Assign variants if provided
            if ($request->has('color_variant_id') && $request->color_variant_id !== null) {
                $orderItem->color_variant_id = $request->color_variant_id;
            }

            if ($request->has('size_variant_id') && $request->size_variant_id !== null) {
                $orderItem->size_variant_id = $request->size_variant_id;
            }

            $orderItem->quantity = 1;
            $orderItem->save();
        }

        return response()->json([
            'data' => ['message' => 'Product added to cart'],
            'meta' => ['status' => 'success']
        ], 200);
    }
}
