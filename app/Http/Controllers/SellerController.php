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
    public function status(){
        return view('seller-status');
    }
}
