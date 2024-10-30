<?php

namespace App\Livewire\Vendor\Product;

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
        return view('livewire.vendor.product.calling-variant');
    }
}
