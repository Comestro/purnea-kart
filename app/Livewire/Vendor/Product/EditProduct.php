<?php

namespace App\Livewire\Vendor\Product;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;

use Livewire\Component;

class EditProduct extends Component
{
    public $product_id;
    public $product;

    public $step = 1;

    public function nextStep(){
        $this->step++;
    }  
    public function prevStep(){
        $this->step--;
    }

    public function mount($ven_id){

        $this->product_id=$ven_id;
        $this->product = Product::findOrFail($this->product_id);
    }
    
    
    // Mount method to initialize component with product data
    public function render()
    {
       
        return view('livewire.vendor.product.edit-product');
    }
}
