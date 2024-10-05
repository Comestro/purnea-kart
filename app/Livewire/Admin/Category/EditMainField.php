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
    public function toggle(){
        $this->isEdit = !$this->isEdit;
        $this->main_category = $this->main_category ? $this->main_category : $this->main_category;
    }
    public function update(){
        
        $data = $this->validate([
            'main_category' => 'required|string|max:255',
        ]);

        $this->category->update($data);
        
        $this->toggle();
        return redirect()->back()->with('success', 'title updated successfully!');
    }

    public function render()
    {
        $this->categories = Category::where('parent_id', null)->get();
        return <<<'HTML'
         <div class="col-lg-6">
            <div class="card border">
                <div class="card-header py-2 align-items-center d-flex justify-content-between">
                 <h5 class="m-0 fw-normal">Main Category</h5>
            {!! !$isEdit
                ? '<button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">Edit</button>'
                : '<button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">Cancel</button>' !!}

            </div>
            <div class="card-body">
            <div class="d-flex align-items-center">
                @if ($isEdit)
                    <select wire:model="main_category" type="text" id="meta-name" class="form-control rounded-0"
                        placeholder="Main Category">
                        <option value="NULL">Select Main Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->main_category }}</option>
                        @endforeach
                    </select>
                    <button wire:click="update" type="submit" id="saveButton1"
                        class="rounded-0 btn btn-primary ms-2">Save</button>
                @else
                    <p class="lead text-capitalize font-medium text-dark mb-0">
                        @if (!empty($main_category))
                            <div class="mx-auto">
                                <div wire:loading wire:target="toggle" class="p-3">
                                    <div class="spinner-border text-muted" role="status"></div>
                                    <p class="mt-2 mb-0">Loading...</p>
                                </div>
                                <div wire:loading.remove wire:target="toggle"
                                    class="lead text-capitalize font-medium text-dark mb-0"> {{ $main_category }}
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
                                    <i class="text-muted"> Main category</i>
                                </div>
                            </div>
                        @endif
                    </p>
                @endif


            </div>
            @error('main_category')
                <p class="text-danger small">{{ $message }}</p>
            @enderror
        </div>
        </div>
        HTML;
    }
}
