<?php

namespace App\Livewire\Admin\Product;
use App\Models\Product;
use Livewire\WithPagination;

use Livewire\Component;

class CallingProduct extends Component
{
    
    use WithPagination;
    public $search="";
    


    public function render()
    {
        

        $data['products'] = Product::join('categories', 'categories.id', '=', 'products.category_id')
        ->join('brands','brands.id','=','products.brand_id')
        ->where('name', 'LIKE', "%".$this->search."%")
        ->orWhere('cat_title', 'LIKE', "%".$this->search."%")
        ->orWhere('brand_name', 'LIKE', "%".$this->search."%")
        ->paginate(5);

        return view('livewire.admin.product.calling-product', $data);
    }


    public function delete($id)
    {
            Product::findOrFail($id)->delete();

            session()->flash('message', 'Product deleted successfully.');
    }
}

