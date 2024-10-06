<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditCategoryImage extends Component
{
    use WithFileUploads;
    public $category;
    public $image;
    public $categoryImage;
    public $isEdit = false;


    public function mount(Category $category)
    {
        $this->category = $category;
    }

    public function toggle()
    {
        $this->isEdit = !$this->isEdit;
    }

    public function update()
    {
        $data = $this->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:200|',
        ]);

        // image work
        $image = $this->image;
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs("public/image/category", $imageName, "public");
        $data['image'] = $imageName;


        $this->category->update(attributes: $data);
        $this->toggle();
        $this->image = $this->category->image;
        return redirect()->back()->with('success', 'image updated successfully');
    }
    public function render()
    {
        return <<<'HTML'
        <div class="col-lg-12">
            <div class="card border h-auto">             
                <div class="card-header py-2 d-flex justify-content-between align-items-center">
                    <h5 class="m-0 fw-normal">Category Image</h5>
                    <button wire:click="toggle" class="btn-link text-primary btn p-0">
                        {{ !$isEdit ? 'Edit' : 'Cancel' }}
                    </button>
                </div>
                
                <div class="card-body">
                    <div class="d-flex flex-column">
                        @if ($isEdit)
                            <div class="row mb-3">
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
                                        <input id="dropzone-file" wire:model="image" type="file" class="d-none" />
                                    </label>
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
        
                                <div class="col-md-6">
                                    <div class="border border-secondary border-dashed rounded d-flex align-items-center justify-content-center" style="height: 200px;">
                                        <div wire:loading wire:target="image" class="text-center">
                                            <div class="spinner-border text-muted" role="status"></div>
                                            <p class="mt-2">Uploading...</p>
                                        </div>
        
                                        <div wire:loading.remove wire:target="image" class="w-100 h-100 d-flex align-items-center justify-content-center">
                                            @if ($image)
                                                <img src="{{ $image->temporaryUrl() }}" class="img-fluid" alt="Image Preview" />4
                                            @else
                                                <p>Image Preview</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button wire:click="update" class="btn btn-primary">Save</button>
                        @else
                            <div class="text-center">
                                @if (!empty($category->image))
                                    <!-- <div wire:loading wire:target="toggle" class="p-3">
                                        <div class="spinner-border text-muted" role="status"></div>
                                        <p class="mt-2 mb-0">Loading...</p>
                                    </div> -->
                                    <img src="{{ asset('storage/public/image/category/'. $category->image) }}" alt="Category Image" class="img-thumbnail w-25 h-25" />
                                @else
                                    <p>No image uploaded</p>
                                @endif
                            </div>
                        @endif
                    </div>
                    @error('image')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        HTML;

    }
}
