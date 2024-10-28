<?php

namespace App\Livewire\Public;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductLowerSection extends Component
{
    public $productId;
    public function mount(Product $productId){
        $this->productId = $productId;
       

    }
    public function render()
    {
        return view('livewire.public.product-lower-section');
    }
}
