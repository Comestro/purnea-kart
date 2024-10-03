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
    public function store(Request $req)
    {
        
        $req->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'discount_price' => 'nullable|numeric',
            'quantity' => 'required|integer',
            'sku' => 'required|string|max:100',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
            'vender_id' => 'required|integer',
            'category_id' => 'required|integer',
            'brand_id' => 'required|integer',
            "status"=>"nullable",
        ]);

        //dd($req);
        //$filename = $request->image->getClientOriginalName();
        //$request->image->move(public_path("images/"),$filename);
        //$data['image'] = $filename;

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
        dd($pro);
        $pro->save();

      return redirect()->route("home")->with("msg","Data inserted successfully");
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
