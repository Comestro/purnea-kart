<?php

namespace App\Livewire\Admin\Category;

use Livewire\Component;

class EditTitleSlug extends Component
{

    public $category;
    public $cat_slug;
    public $isEdit = false;
    public function toggle()
    {
        $this->isEdit = !$this->isEdit;
        $this->cat_slug = $this->cat_slug ? $this->cat_slug : $this->cat_slug;
    }
    public function update()
    {

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
                <div class="card-header py-2 d-flex justify-content-between align-items-center">
                    <h5 class="m-0 fw-normal">Category Slug</h5>
                    <button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">
                        {{ $isEdit ? 'Cancel' : 'Edit' }}
                    </button>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        @if ($isEdit)
                            <input wire:model="cat_slug" type="text" id="meta-name" class="form-control rounded-0" placeholder="Enter category slug">
                            <button wire:click="update" class="btn btn-primary ms-2 rounded-0">Save</button>
                        @else
                            <div class="mx-auto text-center">
                                @if (!empty($cat_slug))
                                    <div wire:loading wire:target="toggle" class="p-3">
                                        <div class="spinner-border text-muted" role="status"></div>
                                        <p class="mt-2 mb-0">Loading...</p>
                                    </div>
                                    <p class="lead text-capitalize font-medium text-dark mb-0">{{ $cat_slug }}</p>
                                @else
                                    <div wire:loading wire:target="toggle" class="p-3">
                                        <div class="spinner-border text-muted" role="status"></div>
                                        <p class="mt-2 mb-0">Loading...</p>
                                    </div>
                                    <p class="lead text-capitalize font-medium text-dark mb-0">
                                    <i class="text-muted">{{$this->category->cat_slug}}</i>
                                    </p>
                                @endif
                            </div>
                        @endif
                    </div>
                    @error('cat_slug')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        HTML;
    }
}
