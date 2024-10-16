<?php

namespace App\Livewire\Vendor\Brand;

use App\Models\Brand;
use Livewire\Component;

class Brandlist extends Component
{
    public function render()
    {
        $data['brands']=Brand::all();
        return view('livewire.vendor.brand.brandlist',$data);
    }
}
