<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\ProductVariant;
use App\Models\Product;

class CallingVariant extends Component
{      
    public $variants;

    public function mount(Product $product)
    {
        $this->variants = $product->variants;
    }

    public function render()
    {
        return view('livewire.admin.product.calling-variant');
    }
}
