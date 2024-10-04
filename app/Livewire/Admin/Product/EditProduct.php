<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Product;
class EditProduct extends Component
{

    public $product;

    public function mount(Product $product){
        $this->product = $product;
    }
    public function render()
    {

        if (!$this->product) {
            return redirect()->route('product.index')->with('error', 'No Product Found');
        }
        return view('livewire.admin.product.edit-product');
    }

}
