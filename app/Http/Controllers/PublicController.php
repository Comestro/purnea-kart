<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function Technology(){
        return view('about-us.technology');
    }

    public function SustainAbility(){
        return view('about-us.sustainability');
    }

    // showing signup form here:
    public function ShowRegisterForm(){
        return view('account.signup');
    }

    // signup logics here:
    public function register(Request $request){
        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','unique:users,email'],
            'password' => ['required','string','min:8','confirmed'],
        ]);

        $data['password'] = ($data['password']);
        
        $user = User::create($data);

        Auth::login($user);

        return redirect()->intended('/')->with('success','Registration successfull');
    }

    // showing login form here:
    public function ShowLoginForm(){
        return view('account.login');
    }

    // login logics here:
    public function Login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){ 
          

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    
}
