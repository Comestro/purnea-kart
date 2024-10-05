<?php

namespace App\Livewire\Admin\Category;

use Livewire\Component;
use Livewire\WithFileUploads;

class EditCategoryImage extends Component
{
    use WithFileUploads;
    public $category;
    public $cat_image;
    public $isEdit = false;

   
    public function mount()
    {
        $categoryImage = $this->category;
        $this->cat_image = ($categoryImage->cat_image) ? $categoryImage->cat_image : null;
    }

    public function toggle()
    {
        $this->isEdit = !$this->isEdit;
    }

    public function update()
    {
        $data = $this->validate([
            'cat_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:200|',
        ]);

        // image work
        $image = $this->cat_image;
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs("'public/image/category", $imageName, "public");
        $data['cat_image'] = $imageName;

       
        $this->category->update($data);
        $this->toggle();
        $this->cat_image = $this->category->cat_image;
        return redirect()->back()->with('success', 'logo updated successfully');
    }
    public function render()
    {
        return <<<'HTML'
        <div class="col-lg-6">

            <div class="card border h-auto">
                {{-- this is the card header --}}
                <div class="card-header py-2 align-items-center d-flex justify-content-between">
                    <h5 class="m-0 fw-normal">Category Image </h5>
                    {!! !$isEdit
                        ? '<button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">Edit</button>'
                        : '<button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">Cancel</button>' !!}
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        @if ($isEdit)
                            <input wire:model="cat_image" type="file" class="form-control" id="cat_image"
                                placeholder="meta logo section">
                            <button wire:click="update" type="submit" class="rounded-0 btn btn-primary">save</button>
                        @else
                            <p class="lead text-capitalize font-medium text-dark mb-0">
                            @if (!empty($cat_image))
                                <div class="mx-auto">
                                    <div wire:loading wire:target="toggle" class="p-3">
                                        <div class="spinner-border text-muted" role="status"></div>
                                        <p class="mt-2 mb-0">Loading...</p>
                                    </div>
                                    <div wire:loading.remove wire:target="toggle"
                                        class="lead text-capitalize font-medium text-dark mb-0">
                                        <img src="{{ asset('storage/images/setting/' . $cat_image) }}" alt="meta logo"
                                            class="img-thumbnail w-25 h-25">
                                    </div>
                                </div>
                            @else
                                <div class="mx-auto">
                                    <div wire:loading wire:target="toggle" class="p-3">
                                        <div class="progress-bar progress-bar-striped text-muted " style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" role="status"></div>
                                        <p class="mt-2 mb-0">Loading...</p>
                                    </div>
                                @endif
                            </p>
                        @endif
                    </div>
                        @error('cat_image')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

                    
    
               
        HTML;
    }
}
