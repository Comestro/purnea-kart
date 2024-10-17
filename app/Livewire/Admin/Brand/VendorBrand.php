<?php

namespace App\Livewire\Admin\Brand;

use App\Models\Brand;
use Livewire\Component;

class VendorBrand extends Component
{
    public $brandId;
    public $isActive = false;
  
   
    public function status($id){
        $this->brandId=$id;
     
        Brand::where('id',$this->brandId)->where('status', 0)->update(['status' => 1]);
        return redirect()->route('manage_brand');
    }
    public function render()
    {
        $data['vendorBrand']= Brand::where('status', 0)->get();
        return view('livewire.admin.brand.vendor-brand',$data);
    }
}
