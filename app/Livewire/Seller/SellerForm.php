<?php

namespace App\Livewire\Seller;

use App\Models\Seller;
use Livewire\Component;

class SellerForm extends Component
{
    public $mobile;
    public $name;
    public $email;
    public $gst;

    public function rules()
    {
        return [
            'name'=>'required',
            'mobile' => 'required|min:10',
            'email' => 'required|email',
            'gst' => 'required|',
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
    $seller->save();

        


    }
    public function render()
    {
        return view('livewire.seller.seller-form');
    }
}
