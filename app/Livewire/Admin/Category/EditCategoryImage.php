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
                        <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="dropzone-file" class="w-100">
                                <div class="border border-secondary border-dashed rounded d-flex align-items-center justify-content-center" style="height: 200px; cursor: pointer;">
                                    <div class="text-center">
                                        <svg class="mb-3" style="width: 2rem; height: 2rem;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                        </svg>
                                        <p>Click to upload or drag and drop</p>
                                        <p class="text-muted">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                    </div>
                                </div>
                                <input id="dropzone-file" wire:model="cat_image" type="file" class="d-none" />
                            </label>
                            @error('cat_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="border border-secondary border-dashed rounded d-flex align-items-center justify-content-center" style="height: 200px;">
                                <div wire:loading wire:target="image" class="text-center">
                                    <div class="spinner-border text-muted" role="status"></div>
                                    <p class="mt-2">Uploading...</p>
                                </div>

                                <div wire:loading.remove wire:target="cat_image" class="w-100 h-100 d-flex align-items-center justify-content-center">
                                    @if ($cat_image)
                                        <img src="{{ $cat_image->temporaryUrl() }}" class="img-fluid" />
                                    @else
                                        <p>Image Preview</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        <img src="{{ asset('storage/public/image/category/'. $cat_image) }}" alt="meta logo"
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
