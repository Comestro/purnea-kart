<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class OrderController extends Controller
{

    public function addToCart(Request $req, $product_slug)
    {
        $product = Product::where('slug', $product_slug)->first();
        if (!$product) {
            abort(404);
        } else {
            $size_variant_id = $req->input('size_variant_id');
            $color_variant_id = $req->input('color_variant_id');
                
            $size_variant = $size_variant_id ? ProductVariant::find($size_variant_id) : null;
            $color_variant = $color_variant_id ? ProductVariant::find($color_variant_id) : null;
    
            $exist_order = Order::where([
                ['user_id', Auth::id()],
                ['isOrdered', false]
            ])->first();
    
            if ($exist_order) {
                $exist_order_item = OrderItem::where([
                    ['user_id', Auth::id()],
                    ['order_id', $exist_order->id],
                    ['product_id', $product->id],
                    ['size_variant_id', $size_variant_id],
                    ['color_variant_id', $color_variant_id]
                ])->first();
    
                if ($exist_order_item) {                    
                    $exist_order_item->quantity += 1;
                    $exist_order_item->save();
                } else {                    
                    $order_item = new OrderItem();
                    $order_item->user_id = Auth::id();
                    $order_item->order_id = $exist_order->id;
                    $order_item->product_id = $product->id;
                    $order_item->size_variant_id = $size_variant_id;
                    $order_item->color_variant_id = $color_variant_id;
                    $order_item->quantity = 1;
                    $order_item->save();
                }
            } else {                
                $order = new Order();
                $order->user_id = Auth::id();
                $order->isOrdered = false;
                $order->order_number = 'ORD-' . strtoupper(Str::random(8));
                $order->save();
                    
                $order_item = new OrderItem();
                $order_item->user_id = Auth::id();
                $order_item->order_id = $order->id;
                $order_item->product_id = $product->id;
                $order_item->size_variant_id = $size_variant_id;
                $order_item->color_variant_id = $color_variant_id;
                $order_item->quantity = 1;
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
