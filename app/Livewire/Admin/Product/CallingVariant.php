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
        $this->variants = ProductVariant::where('product_id', $product->id)->get();
    }

    public function render()
    {
        return view('livewire.admin.product.calling-variant', [
            'variants' => $this->variants
        ]);
    }
}
