<?php

namespace App\Livewire\Admin\Product\ProductGrid;

use App\Models\Category;
use Livewire\Component;

class LeftSidebar extends Component
{
    public $category;
    public $moreCategories=[];
    public function render()
    {
        $data['categories']=Category::all();
        return view('livewire.admin.product.product-grid.left-sidebar',$data);
    }
}
