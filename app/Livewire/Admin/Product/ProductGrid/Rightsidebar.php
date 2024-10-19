<?php

namespace App\Livewire\Admin\Product\ProductGrid;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Rightsidebar extends Component
{
    use WithPagination;
    public function render()

    {
        $data['products']=Product::paginate(10);
        return view('livewire.admin.product.product-grid.rightsidebar',$data);
    }
}
