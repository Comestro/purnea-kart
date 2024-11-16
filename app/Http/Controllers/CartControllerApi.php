<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CartControllerApi extends Controller
{
    public function addToCart(Request $request, $product_slug)
    {
        try {
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
    
        $orderExist = Order::where([
            ['user_id', '=', $user->id],
            ['isOrdered', '=', false]
        ])->first();
    
        if ($orderExist) {
            $orderItem = $orderExist->items()->where('product_id', $product->id)->first();
    
            if ($orderItem) {        
                $orderItem->quantity += 1;
                $orderItem->save();
            } else {
                // Add a new order item
                $orderItem = new OrderItem();
                $orderItem->product_id = $product->id;
                $orderItem->order_id = $orderExist->id;
                $orderItem->quantity = 1;
                $orderItem->user_id = $user->id;
                $orderItem->save();
            }
        } else {
            // Create a new order
            $order = new Order();
            $order->user_id = $user->id;
            $order->isOrdered = false;
            $order->order_number = 'ORD-' . strtoupper(Str::random(8));
            $order->save();
    
            // Add product to the newly created order
            $orderItem = new OrderItem();
            $orderItem->product_id = $product->id;
            $orderItem->order_id = $order->id;
            $orderItem->quantity = 1;
            $orderItem->user_id = $user->id;
            $orderItem->save();
        }
    
        return response()->json([
            'orderItem' => $orderItem,
            'data' => ['message' => 'Product added to cart'],
            'status'=>true
        ], 200);
    }
}
