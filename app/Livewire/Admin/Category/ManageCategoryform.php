<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class ManageCategoryform extends Component
{
    public function render()
    {
        $data['category']=Category::all();
        return view('livewire.admin.category.manage-categoryform',$data);
    }
}
