<?php

namespace App\Livewire\Admin\Product;
use App\Models\Product;
use Livewire\Component;

class CallingProduct extends Component
{
    public function render()
    {
        $data['products']=Product::all();
        return view('livewire.admin.product.calling-product',$data);
    }


    public function delete($id)
    {
            Product::findOrFail($id)->delete();

            session()->flash('message', 'Product deleted successfully.');
    }
}
