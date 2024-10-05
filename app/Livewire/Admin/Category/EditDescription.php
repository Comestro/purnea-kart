<?php

namespace App\Livewire\Admin\Category;

use Livewire\Component;

class EditDescription extends Component
{
    public function render()
    {
        return <<<'HTML'
         <div class="col-lg-12 mb-3">
                    <label for="description" class="form-label">Category Description</label>
                    <textarea class="form-control bg-light-subtle" wire:model.live="cat_description" id="description" rows="7" placeholder="Type description"></textarea>
                    @error('cat_description')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
        HTML;
    }
}
