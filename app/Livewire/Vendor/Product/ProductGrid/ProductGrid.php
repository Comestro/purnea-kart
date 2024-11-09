<?php

namespace App\Livewire\Vendor\Product\ProductGrid;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductGrid extends Component
{
    use WithPagination;

    public function render()
    {
        $data['products']=Product::paginate(10);
        return view('livewire.vendor.product.product-grid.product-grid',$data);
    }
}
