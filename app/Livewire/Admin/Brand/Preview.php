<?php

namespace App\Livewire\Admin\Brand;

use Livewire\Component;

class Preview extends Component
{
    public $brand_name;
    public $brand_description;

    public function updateBrandDescription($value){
        $this->brand_description = $value;
    }
    public function render()
    {
        return view('livewire.admin.brand.preview');
    }
}
