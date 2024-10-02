<div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add Thumbnail Photo</h4>
        </div>
        <form wire:submit.prevent="store">
            <div class="card-body">
                <!-- File Upload -->
                <div class="dropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                    <div class="fallback">
                        <input name="file" wire:model="image" type="file" />
                        @error('image')
                        <p class="text-red-500 text-xs">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="dz-message needsclick">
                        <i class="bx bx-cloud-upload fs-48 text-primary"></i>
                        <h3 class="mt-4">Drop your images here, or <span class="text-primary">click to browse</span></h3>
                        <span class="text-muted fs-13">
                            1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed
                        </span>
                    </div>
                </div>
            </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">General Information</h4>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <div class="mb-3">
                            <label for="category-title" class="form-label">Main Category</label>
                            <select name="parent_category_id" value="" wire:model.live="parent_category_id" class="form-control">
                                <option value="NULL">Select Main Category</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('parent_category_id')
                            <p class="text-red-500 text-xs">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div>
                        <label for="title" class="form-label">category title</label>
                        <input type="text" wire:model.live="cat_title" class="form-control" placeholder="title">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                        <div class="mb-3">
                            <label for="product-stock" class="form-label">category slug</label>
                            <input type="text" id="product-stock" wire:model="cat_slug" class="form-control" readonly>
                            @error('cat_slug')
                            <p class="text-red-500 text-xs">{{$message}}</p>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="mb-0">
                        <label for="description" class="form-label">Category Description</label>
                        <textarea class="form-control bg-light-subtle" wire:model.live="cat_description" id="description" rows="7" placeholder="Type description"></textarea>
                        @error('cat_description')
                        <p class="text-red-500 text-xs">{{$message}}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        @if (session()->has('message'))
        <div class="mt-4 p-2 bg-green-500 text-white rounded-md">
            {{ session('message') }}
        </div>
        @endif
        <div class="row p-3 justify-content-end g-2">
            <div class="col-lg-2">
                <button type="submit" class="btn btn-outline-secondary bg-orange text-white w-100">Save Change</button>
            </div>
        </div>
        </form>

    </div>
</div>