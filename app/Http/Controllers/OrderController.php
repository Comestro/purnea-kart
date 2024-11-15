<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class OrderController extends Controller
{

    public function addToCart(Request $req, $product_slug) {
        $product = Product::where('slug', $product_slug)->first();
        if (!$product) {
            abort(404);
        } else {
            // Check if an order exists for the current user and is not ordered
            $exist_order = Order::where([
                ['user_id', Auth::id()],
                ['isOrdered', false] 
            ])->first();
    
            if ($exist_order) {
                // Check if the order item exists in the existing order
                $exist_order_item = OrderItem::where([
                    ['user_id', Auth::id()],
                    ['order_id', $exist_order->id],
                    ['product_id', $product->id]
                ])->first();
    
                if ($exist_order_item) {
                    // Increment quantity if item already exists in cart
                    $exist_order_item->quantity += 1;
                    $exist_order_item->save();
                } else {
                    // Add new item to the existing order if item does not exist
                    $order_item = new OrderItem();
                    $order_item->user_id = Auth::id();
                    $order_item->order_id = $exist_order->id;
                    $order_item->product_id = $product->id;
                    $order_item->quantity = 1; // Initialize quantity to 1
                    $order_item->save();
                }
            } else {
                // If no existing order, create a new order and add the item
                $order = new Order();
                $order->user_id = Auth::id();
                $order->isOrdered = false;
                $order->order_number = 'ORD-' . strtoupper(Str::random(8));

                $order->save();
    
                // Insert new order item with the newly created order ID
                $order_item = new OrderItem();
                $order_item->user_id = Auth::id();
                $order_item->order_id = $order->id;
                $order_item->product_id = $product->id;
                $order_item->quantity = 1; // Initialize quantity to 1
                $order_item->save();
            }
        }
    
        
         return redirect()->route('Cart');
    }
    
    public function showCart(){
        $data['order'] = Order::where('user_id',Auth::id())->where('isOrdered',false)->first();
        return view ("cart",$data);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
