<?php

namespace App\Livewire\Vendor\Product;

use Livewire\Component;

class EditProductCategory extends Component
{
    public $product;
    public $categories;
    public $category_id;
    public $isEdit = false;

    public function mount($product, $categories)
    {
        $this->product = $product;
        $this->cat_title = $product->cat_title; 

        $this->categories = $categories;
        $this->category_id = $product->category_id;
    }

    // Toggle the edit state
    public function toggle()
    {
        $this->isEdit = !$this->isEdit;
    }

    public function update()
    {
        // Validate the brand_id field
        $data = $this->validate([
            'category_id' => 'required|integer',
        ]);

        $this->product->update([
            'category_id' => $data['category_id'],
        ]);

        $this->product->cat_title = $this->categories->firstWhere('id', $data['category_id'])->cat_title;

        $this->toggle();
        return redirect()->back()->with('success', 'Category updated successfully!');
    }

    public function render()
    {
        return <<<'HTML'
        <div>
            <div class="card border">
                <div class="card-header py-2 d-flex justify-content-between align-items-center">
                    <h5 class="m-0 fw-normal">Product Category Name</h5>
                    <button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">
                        {{ $isEdit ? 'Cancel' : 'Edit' }}
                    </button>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        @if ($isEdit)
                        <select id="category_id" name="category_id" wire:model="category_id" class="form-control">
                            <option value="">Select Category</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->cat_title }}</option>
                            @endforeach
                        </select>
                        <button wire:click="update" class="btn btn-primary ms-2 rounded-0 d-flex">Save</button>
                        @else
                            <div class="mx-auto text-center">

                                @if (!empty($product->category->cat_title))
                                    <p class="lead text-capitalize font-medium text-dark mb-0">{{ $product->category->cat_title }}</p>
                                @else
                                    <p class="lead text-capitalize font-medium text-dark mb-0">
                                    <i class="text-muted">No brand selected</i>
                                </p>
                                @endif
                              
                            </div>
                        @endif
                    </div>
                    @error('category_id')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        HTML;
    }
}
