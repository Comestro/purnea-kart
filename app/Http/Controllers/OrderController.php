<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function addToCart(Request $req,$product_slug){
       //dd($product_slug);
       $product = Product::where('slug',$product_slug)->first();
       if(!$product){
        abort(404);
       }
       else{
          $exist_order = Order::where([
            ['user_id', Auth::id()],
            ['isOredered',false]
            ])->first();
            if($exist_order){
                $exist_order_item = OrderItem::where([
                    ['user_id' ,Auth::id()],
                    ['isOrdered',false],
                    ['order_id',$exist_order->id],
                    ['product_id',$product->id]
                ])->first();
                if($exist_order_item){
                    $exist_order_item->quantity +=1;
                    $exist_order_item->save();
                }
                else{
                    $order_item = new OrderItems();
                    $order_item->user_id = Auth::id();
                    $order_item->order_id = $exist_order->id;
                    $order_item->product_id = $product->id;
                    $order_item->save();
                }
            }
          else{
            $order = new Order();
             $order->user_id = Auth::id();
            $order->save();
            //inserting  new order items
            $order_item = new OrderItems();
            $order_item->user_id = Auth::id();
            $order_item->order_id = $order->id;
            $order_item->product_id = $product->id;
            $order_item->quantity = $req->quantity;
            $order_item->save();
            
          }
       }
    //   return redirect()->route('cart');
    }
    public function showCart(){
        //$data['order'] = Order::where('user_id',Auth::id())->where('isOrdered',false)->first();
        return view ("cart");
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
