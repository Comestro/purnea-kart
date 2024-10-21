<?php

namespace App\Livewire\Vendor\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Categorylist extends Component
{
    use WithPagination;
    public function render()
    {
        $data['categories']=Category::paginate(3);
        return view('livewire.vendor.category.categorylist',$data);
    }
}
