<?php

namespace App\Livewire\Admin\Category;

use Livewire\Component;

class EditTitleSlug extends Component
{
    
    public $cat_slug;
    public $isEdit = false;
    public function toggle(){
        $this->isEdit = !$this->isEdit;
        $this->cat_slug = $this->cat_slug ? $this->cat_slug : $this->cat_slug;
    }
    public function update(){
        
        $data = $this->validate([
            'cat_slug' => 'required|string|max:255',
        ]);

        $this->category->update($data);
        
        $this->toggle();
        return redirect()->back()->with('success', 'title updated successfully!');
    }
    public function render()
    {
        
        return <<<'HTML'
         <div class="col-lg-6">
            <div class="card border">
                <div class="card-header py-2 align-items-center d-flex justify-content-between">
                 <h5 class="m-0 fw-normal">Category Title</h5>
            {!! !$isEdit
                ? '<button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">Edit</button>'
                : '<button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">Cancel</button>' !!}

            </div>
            <div class="card-body">
            <div class="d-flex align-items-center">
                @if ($isEdit)
                   <input wire:model="cat_slug" type="text" id="meta-name" class="form-control rounded-0">
                    <button wire:click="update" type="submit" id="saveButton1"
                        class="rounded-0 btn btn-primary ms-2">Save</button>
                @else
                    <p class="lead text-capitalize font-medium text-dark mb-0">
                        @if (!empty($cat_slug))
                            <div class="mx-auto">
                                <div wire:loading wire:target="toggle" class="p-3">
                                    <div class="spinner-border text-muted" role="status"></div>
                                    <p class="mt-2 mb-0">Loading...</p>
                                </div>
                                <div wire:loading.remove wire:target="toggle"
                                    class="lead text-capitalize font-medium text-dark mb-0"> {{ $cat_slug }}
                                </div>
                            </div>
                        @else
                            <div class="mx-auto">
                                <div wire:loading wire:target="toggle" class="p-3">
                                    <div class="spinner-border text-muted" role="status"></div>
                                    <p class="mt-2 mb-0">Loading...</p>
                                </div>
                                <div wire:loading.remove wire:target="toggle"
                                    class="lead text-capitalize font-medium text-dark mb-0">
                                    <i class="text-muted">  category title</i>
                                </div>
                            </div>
                        @endif
                    </p>
                @endif


            </div>
            @error('$cat_slug')
                <p class="text-danger small">{{ $message }}</p>
            @enderror
        </div>
        </div>
        HTML;
    }
}