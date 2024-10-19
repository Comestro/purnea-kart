<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function aboutHome(){
        return view('about-us.about');
    }

    public function Ethics(){
        return view('about-us.ethics');
    }

    public function Culture(){
        return view('about-us.culture');
    }
}
