<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index(){
        return view('become-sellerform');
        
    }
    public function show(){
        view('seller-password');
    }
}
