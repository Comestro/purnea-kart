<?php

namespace App\Livewire\Vendor\Product;

use App\Models\Product;
use Livewire\Component;

class ProductGrid extends Component
{
    public function render()

    {
        $data['products']=Product::all();
        return view('livewire.vendor.product.product-grid',$data);
    }
}
