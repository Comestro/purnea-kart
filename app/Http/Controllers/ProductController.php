<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return view("home",["Product" => Product::all()]);
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
        $req->validate([
            "id"=>"required",
            "name"=> "required",
            "slug" => "required",
            "description"=> "required",
            "price"=> "required",
            "discount_price"=>"required",
            "quantity"=> "required",
            "sku"=>"required",
            "image"=>"required",
            "vender_id"=> "required",
            "category_id"=> "required",
            "brand_id"=>"required",
            "status"=>"required",
         ]);
      $pro = new Product(); 
      $pro->name = $req->name;
      $pro->slug = $req->slug;
      $pro->description = $req->description;
      $pro->price = $req->price;
      $pro->discount_price = $req->discount_price;
      $pro->quantity = $req->quantity;
      $pro->sku = $req->sku;
      $pro->image = $req->image;
      $pro->vender_id = $req->vender_id;
      $pro->category_id = $req->category_id;
      $pro->brand_id = $req->brand_id;
      $pro->save();

      return redirect()->route("")->with("msg","Data inserted successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $pro_id)
    {
        //
        $product = Product::find($pro_id);
        return show("show",["product"=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //$data = Student::find($std_id);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $pro_id)
    {
        //
        $data = Producet::find($pro_id);
        $data->delete();

        return redirect()->route("")->with("error","Data  deleted successfully");
    }
}
