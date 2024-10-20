<?php

namespace App\Livewire\Seller;

use App\Models\Seller;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class SellerForm extends Component
{
    public $mobile;
    public $name;
    public $email;
    public $gst;
    public $password;
    public $confirmPassword;

    public $step = 1;



    public function rules()
    {
        return [
            'name' => 'required',
            'mobile' => 'required|min:10', //todo-error handling
            'email' => 'required|email', //todo-error handling
            'gst' => 'required|', // todo//todo-error handling
            'password' => 'required | min:8'
        ];
    }
    public function store()
    {



        $this->validate();

        $seller = new Seller();
        $seller->name = $this->name;
        $seller->mobile = $this->mobile;
        $seller->email = $this->email;
        $seller->gst = $this->gst;

        if ($this->password == $this->confirmPassword) {

            $seller->password = Hash::make($this->password);
        } else {
            return session('error', 'password not matched');
        }

        $seller->save();

        // redirect()->route(route: 'seller.status');


    }
    public  function nextStep()
    {
        if ($this->mobile && $this->name && $this->email && $this->gst) {
            $this->step++;
        }
    }
    public function previouStep()
    {
        $this->step--;
    }
    public function Onboard()
    {
        if ($this->password) {
            $this->step++;
        }
    }
    public function render()
    {


        return view('livewire.seller.seller-form');
    }
}
