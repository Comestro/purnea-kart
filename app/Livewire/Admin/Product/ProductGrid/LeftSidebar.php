<?php

namespace App\Livewire\Admin\Product\ProductGrid;

use App\Models\Category;
use Livewire\Component;

class LeftSidebar extends Component
{
    public function render()
    {
        $data['categories']=Category::all();
        return view('livewire.admin.product.product-grid.left-sidebar',$data);
    }
}
