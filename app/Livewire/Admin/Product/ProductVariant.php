<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Product_Variant;
class ProductVariant extends Component
{
    public function render()
    {
        return view('livewire.admin.product.product-variant');
    }
}
