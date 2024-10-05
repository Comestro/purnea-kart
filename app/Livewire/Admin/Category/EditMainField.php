<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class EditMainField extends Component
{
    public $category;
    public $categories;
    public function mount($category)
    {
        $this->category=$category;
    }
    public function render()
    {
        $this->categories = Category::where('parent_id',null)->get();
        return <<<'HTML'
          <div class="col-lg-12 mb-3">
                   <form wire.submit.prevent="updateMainCategory">
                    <label for="category-title" class="form-label">Main Category</label>
                        <select name="parent_category_id" wire:model.live="parent_category_id" class="form-control">
                            <option value="NULL">Select Main Category</option>
                            @foreach ($this->categories as $category)
                                <option value="{{ $category->id }}">{{ $category->cat_title }}</option>
                            @endforeach
                        </select>
                        @error('parent_category_id')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </form>  
                </div>
        HTML;
    }
}
