<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;

class ProductEdit extends Component
{
    public $pro_id;
    public $product;

    public $step = 1;

    public function  nextStep(){{
    $this->step++;
    }}
    public function mount($pro_id)
    {
        $this->pro_id = $pro_id;
        $this->product = Product::findOrFail($this->pro_id);
    }
    public function render()
    {
        return view('livewire.admin.product.product-edit');
    }
}
