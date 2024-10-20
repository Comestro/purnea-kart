<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\ProductVariant as ProductVariantModel;

class CallingVariant extends Component
{      
    public $variants;

    public function mount()
    {
        // Fetch all variants from the database
        $this->variants = ProductVariantModel::all();
    }

    public function render()
    {
        return view('livewire.admin.product.calling-variant',);
    }
}
