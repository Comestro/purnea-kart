<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class VendorCategory extends Component
{
    public $catId;
    public $isActive = false;
  
   
    public function status($id){
        $this->catId=$id;
     
        Category::where('id',$this->catId)->where('status', 0)->update(['status' => 1]);
        return redirect()->route('manage_category');
    }
    public function render()
    {
        $data['vendorCat']= Category::where('status', 0)->get();
        return view('livewire.admin.category.vendor-category',$data);
    }
}
