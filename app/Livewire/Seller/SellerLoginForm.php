<?php

namespace App\Livewire\Seller;

use App\Models\Seller;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SellerLoginForm extends Component
{
    public $email;
    public $password;

    public function rules(){
       return[
        'email'=>'required|email',
        'password'=>'required|min:8'  // should have at least 8 characters and contain at least one uppercase letter, one lowercase letter, one number, and one special character.
       ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function login(){
        // Authenticate the seller
        $this->validate();

        // Redirect to the dashboard

        $credentialWithStatus = ['email'=>$this->email,'password'=>$this->password,'status'=>1];
        $credentialWithoutStatus=['email'=>$this->email,'password'=>$this->password];
        
        if(Auth::guard('seller')->attempt($credentialWithoutStatus) ){
            if($credentialWithStatus){
                return redirect()->route('vendor.index');
            }else{
                return redirect()->route('vendor.pending');
            }
            

        }    
        else{
            $this->addError('email', 'Invalid credentials');
        }
        
    }

    public function render()
    {
        return view('livewire.seller.seller-login-form');
    }
}
