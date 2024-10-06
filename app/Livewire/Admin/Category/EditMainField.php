<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class EditMainField extends Component
{
    public $main_category;
    public $isEdit = false;
    public $category;
    public $categories;
    public function mount($category)
    {
        $this->category = $category;
    }
    public function toggle()
    {
        $this->isEdit = !$this->isEdit;
        $this->main_category = $this->main_category ? $this->main_category : $this->main_category;
    }
    public function update()
    {

        $data = $this->validate([
            'main_category' => 'required|string|max:255',
        ]);

        $this->category->update($data);

        $this->toggle();
        return redirect()->back()->with('success', 'Main title updated successfully!');
    }

    public function render()
    {
        $this->categories = Category::where('parent_id', null)->get();
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
                        <select wire:model="main_category" class="form-control rounded-0" placeholder="Main Category">
                            <option value="NULL">Select Main Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->main_category }}</option>
                            @endforeach
                        </select>
                        <button wire:click="update" class="btn btn-primary ms-2 rounded-0">Save</button>
                    @else
                        <div class="mx-auto text-center">
                            @if (!empty($main_category))
                                <div wire:loading wire:target="toggle" class="p-3">
                                    <div class="spinner-border text-muted" role="status"></div>
                                    <p class="mt-2 mb-0">Loading...</p>
                                </div>
                                <p class="lead text-capitalize font-medium text-dark mb-0">{{ $main_category }}</p>
                            @else
                                <div wire:loading wire:target="toggle" class="p-3">
                                    <div class="spinner-border text-muted" role="status"></div>
                                    <p class="mt-2 mb-0">Loading...</p>
                                </div>
                                <p class="lead text-capitalize font-medium text-dark mb-0">
                                <i class="text-muted">{{$this->category->parent_category_id}}</i>
                                </p>
                            @endif
                        </div>
                    @endif
                </div>
                @error('main_category')
                    <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>
    HTML;
    }
}
