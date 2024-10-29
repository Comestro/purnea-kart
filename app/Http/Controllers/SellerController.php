<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index(){
        return view('become-sellerform');
        
    }
    public function show(){
        return view('become-seller');
    }
    public function edit($ven_id)
    {
        return view("vendor.product.editProduct",["ven_id"=>$ven_id]);
    }
    public function status(){
        return view('seller-status');
    }
    public function login(){
        return view('seller-login');
    }
}
