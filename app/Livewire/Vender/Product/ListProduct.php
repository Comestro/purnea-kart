<?php

namespace App\Livewire\Vender\Product;

use App\Models\Product;
use Livewire\Component;

class ListProduct extends Component
{
    public function render()
    {
        $data['productList']=Product::all();
        return view('livewire.vender.product.list-product',$data);
    }
}
