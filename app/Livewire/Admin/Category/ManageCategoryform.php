<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;


class ManageCategoryform extends Component
{
    use WithPagination;

    public function render()
    {
        $data['category']=Category::paginate(3);

        return view('livewire.admin.category.manage-categoryform', $data);
    }
    
}
