<?php

namespace App\Livewire\Admin\Product;
use App\Models\Product;

use Livewire\Component;

class CallingSinglePage extends Component   
{
    public $products;

    // public function mount($product_id)
    public function mount(Product $product)
    {
        // $this->product = Product::find($product->id);
        $this->products = $product;
      
        
    }
    public function render()
    {
        return view('livewire.admin.product.calling-single-page' 
          
        );
    }
}
