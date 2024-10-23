<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class EditMainField extends Component
{
    public $parent_category_id;
    public $isEdit = false;
    public $category;
    public $categories;

    public function mount($category)
    {
        $this->category = $category;
        $this->parent_category_id = $category->parent_category_id;
    }

    public function toggle()
    {
        $this->isEdit = !$this->isEdit;
    }

    public function update()
    {
        $data = $this->validate([
            'parent_category_id' => 'required|integer|exists:categories,id',
        ]);

        $this->category->update($data);

        $this->toggle();
        return redirect()->back()->with('success', 'Main category updated successfully!');
    }

    public function render()
    {
        $this->categories = Category::where('parent_category_id', null)->get();
        return <<<'HTML'
    <div class="col-lg-6">
        <div class="card border">
            <div class="card-header py-2 d-flex justify-content-between align-items-center">
                <h5 class="m-0 fw-normal">Main Category</h5>
                <button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">
                    {{ $isEdit ? 'Cancel' : 'Edit' }}
                </button>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-center">
                    @if ($isEdit)
                        <select wire:model="parent_category_id" class="form-control rounded-0">
                            <option value="">Select Main Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->cat_title }}</option>
                            @endforeach
                        </select>
                        <button wire:click="update" class="btn btn-primary ms-2 rounded-0">Save</button>
                    @else
                        <div class="mx-auto text-center">
                            @if (!is_null($parent_category_id))
                                <p class="lead text-capitalize font-medium text-dark mb-0">{{ optional($categories->find($parent_category_id))->cat_title }}</p>
                            @else
                                <p class="lead text-capitalize font-medium text-dark mb-0">
                                    <i class="text-muted">No Main Category Selected</i>
                                </p>
                            @endif
                        </div>
                    @endif
                </div>
                @error('parent_category_id')
                    <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>
    HTML;
    }
}
