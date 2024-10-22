<?php

namespace App\Livewire\Admin\Product;
use App\Models\Product;

use Livewire\Component;

class CallingSinglePage extends Component   
{
    public $products;

    public function mount()
    {
        $this->products = Product::all();
    }
    public function render()
    {
        return view('livewire.admin.product.calling-single-page');
    }
}
