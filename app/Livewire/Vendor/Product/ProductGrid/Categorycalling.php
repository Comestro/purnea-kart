<?php

namespace App\Livewire\Vendor\Product\ProductGrid;
use App\Models\Category;
use Livewire\Component;

class Categorycalling extends Component
{
    public $category;
    public $moreCategories=[];
    public function render()
    {
        $data['categories']=Category::all();
        return view('livewire.vendor.product.product-grid.categorycalling',$data);
    }
}
