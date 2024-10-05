<?php

namespace App\Livewire\Admin\Product;
use App\Models\Product;
use Livewire\WithPagination;

use Livewire\Component;

class CallingProduct extends Component
{
    
    use WithPagination;
    public $itemsPerPage = 1;
    


    public function render()
    {
        $data['products']=Product::paginate(1);
        return view('livewire.admin.product.calling-product',$data);
    }


    public function delete($id)
    {
            Product::findOrFail($id)->delete();

            session()->flash('message', 'Product deleted successfully.');
    }
}

