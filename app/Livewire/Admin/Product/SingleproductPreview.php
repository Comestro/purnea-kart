<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;

class SingleproductPreview extends Component
{
    public $p_id;

    public function mount(Product $product){
        $this->p_id = $product->id;
    }


    public function render()
    {
        $data['products']=Product::find($this->p_id);
        
        return view('livewire.admin.product.singleproduct-preview',$data);
    }
}
