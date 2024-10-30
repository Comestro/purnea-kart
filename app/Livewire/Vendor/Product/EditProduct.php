<?php

namespace App\Livewire\Vendor\Product;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;

use Livewire\Component;

class EditProduct extends Component
{
    public $product_id;

    public function mount(Product $ven_id){

        $this->product_id=$ven_id;
    }
    
    public function render()
    {
       
        return view('livewire.vendor.product.edit-product');
    }
}
