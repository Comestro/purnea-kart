<?php

namespace App\Livewire\Admin\Category;

use Livewire\Component;

class EditTitleSlug extends Component
{
    public function render()
    {
        return <<<'HTML'
         <div class="col-lg-6 mb-3">
                    <label for="product-stock" class="form-label">Category Slug</label>
                    <input type="text" id="product-stock" wire:model="cat_slug" class="form-control" readonly>
                    @error('cat_slug')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
        HTML;
    }
}
