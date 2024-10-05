<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class EditCategory extends Component
{
    public $category;
    public function mount(Category $cat)
    {
        $this->category = $cat;
    }
    public function render()
    {  
        return view('livewire.admin.category.edit-category');
    }
}
