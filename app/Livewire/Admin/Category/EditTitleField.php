<?php

namespace App\Livewire\Admin\Category;

use Livewire\Component;

class EditTitleField extends Component
{
    public function render()
    {
        return <<<'HTML'
            <div class="col-lg-6 mb-3">
                    <label for="title" class="form-label">Category Title</label>
                    <input type="text" wire:model.live="cat_title" class="form-control" placeholder="Title">
                    @error('cat_title')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
        HTML;
    }
}
