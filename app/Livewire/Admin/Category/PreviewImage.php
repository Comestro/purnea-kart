<?php

namespace App\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;

class PreviewImage extends Component
{
    public $previewimage;

    public function mount()
    {
        // Fetch all variants from the database
        $this->previewimage = Category::limit(4)->get();


        
    }

    public function render()
    {
        return view('livewire.admin.category.preview-image',[
            'previewimage' => $this->previewimage
        ]);
    }
}
