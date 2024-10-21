<?php

namespace App\Livewire\Vendor\Product;


use App\Models\Product;
use Livewire\Component;

class ListProduct extends Component
{
    public function render()
    {
        $data['productList']=Product::all();
        return view('livewire.vendor.product.list-product',$data);
    }
}
