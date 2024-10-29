<?php

namespace App\Livewire\Vendor\Product;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;

use Livewire\Component;

class EditProduct extends Component
{

    
    public function render()
    {
       
        return view('livewire.vendor.product.edit-product');
    }
}
