<?php

namespace App\Livewire\Admin\Brand;

use App\Models\Brand;
use Livewire\Component;

class EditBrand extends Component
{
    public $brandId;

    public function mount(Brand $brand )
    {
        $this->brandId=$brand;

    }
    public function render()
    {
        return view('livewire.admin.brand.edit-brand');
    }
}
