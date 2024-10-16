<div class="container mx-auto p-6">
    <form class="row g-3 needs-validation p-12 mx-4 my-4 "  wire:submit.prevent="store">
        <!-- Parent Category -->
        <div class="col-md-4">
            <label for="parentCategory" class="form-label">Parent Category (optional)</label>
            <select class="form-select" wire:model="parent_category_id">
                <option value="NULL">Select Main Category</option>
                @foreach ($parent as $pat )
                <option value="{{$pat->id}}">{{$pat->cat_title}}</option>
                @endforeach
            </select>
        </div>

        <!-- Category Title -->
        <div class="col-md-4">
            <label for="catTitle" class="form-label">Category Title</label>
            <input type="text" class="form-control" id="catTitle" wire:model.live="cat_title">
            <div class="invalid-feedback">
                Please provide a category title.
            </div>
            @error('cat_title')
            <p class="text-black small">{{$message}}</p>
            @enderror
        </div>


        <!-- Category Slug -->
        <div class="col-md-4">
            <label for="catSlug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="catSlug" wire:model.live="cat_slug" placeholder="Auto-generated slug"
                readonly>
        </div>
        @error('slug')
        <p class="text-black small">{{$message}}</p>
        @enderror
        <!-- Category Image -->
        <label for="dropzone-file" class="w-100">Image</label>

        <div class="card col-md-12 mb-4">

            <div class="row">
                <div class="col-md-6 mb-3">
                    
                        <label class="border border-secondary border-dashed rounded d-flex align-items-center justify-content-center"
                            style="height: 200px; cursor: pointer;">
                            <div class="text-center">
                                <svg class="mb-3" style="width: 2rem; height: 2rem;"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p>Click to upload or drag and drop</p>
                                <p class="text-muted">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" wire:model="image" type="file" class="d-none" />
                        </label>
                    </label>
                    @error('image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <div class="border border-secondary border-dashed rounded d-flex align-items-center justify-content-center"
                        style="height: 200px;">
                        <div wire:loading wire:target="image" class="text-center">
                            <div class="spinner-border text-muted" role="status"></div>
                            <p class="mt-2">Uploading...</p>
                        </div>

                        <div wire:loading.remove wire:target="image"
                            class="w-100 h-100 d-flex align-items-center justify-content-center">
                            @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" class="img-fluid" style="height:95%; width:97%;" />
                            @else
                            <p>Image Preview</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @error('image')
            <p class="text-black small">{{$message}}</p>
            @enderror
        </div>

        <!-- Category Description -->
        <div class="col-md-12 mb-4">
            <label for="catDescription" class="form-label">Category Description</label>
            <div class="card">
                <div class="card-body">
                    <textarea class="form-control bg-light-subtle" wire:model.live="cat_description"
                        id="description" rows="7" placeholder="Type description"></textarea>
                    @error('cat_description')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                @error('cat_title')
                <p class="text-black small">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- Submit Button -->
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>

</div>