<?php

namespace App\Livewire\Admin\Product;
use App\Models\Product;

use Livewire\Component;

class CallingSinglePage extends Component   
{
    public $products;

    public function mount(Product $product)
    {
        $this->products = $product;
      
        
    }
    public function render()
    {
        return view('livewire.admin.product.calling-single-page' 
          
        );
    }
}
