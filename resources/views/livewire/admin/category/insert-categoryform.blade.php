<div class="row">
    <div class="col-lg-4">

        <div class="card">
            <div class="card-body">
                <div class="bg-light text-center rounded bg-light">
                    <div class="dropzone">
                        <div wire:loading wire:target="image" class="text-center">
                            <div class="spinner-border text-muted" role="status"></div>
                            <p class="mt-2">Uploading...</p>
                        </div>

                        <div wire:loading.remove wire:target="image"
                            class="w-100 h-100 d-flex align-items-center justify-content-center">
                            @if ($image)
                                <img src="{{ $image->temporaryUrl()}}" class="img-fluid" alt="Image Preview" />
                            @else
                                <img src="{{ asset('assets_admin/images/product/p-1.png') }}" alt="Static Preview"
                                    class="avatar-xxl">
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Name, Slug, Description -->
                <div class="mt-3">
                    <div class="text-start">
                        <!-- Static Preview before form submission -->
                        
                        @if (!$cat_title && !$cat_slug)
                            <h4>Fashion Men, Women & Kid's</h4> 
                        @else
                        <h4>{{ $cat_title }}<span>/</span>{{ $cat_slug }}</h4>
                        @endif
                       
                        @if (!$cat_description)
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus provident, rem omnis
                                exercitationem odio voluptate consequatur dolorem? Quo, nisi numquam, saepe voluptatem
                                modi voluptatibus neque vero, dolorem assumenda dolore perspiciatis.</p>
                        @else
                            <p>{{ $cat_description }}</p>
                        @endif

                    </div>
                </div>
            </div>

            <!-- Footer buttons -->
            <div class="card-footer border-top">
                <div class="row g-2">
                    <div class="col-lg-6">
                        <a href="{{url('admin/categories/category-list')}}" class="btn btn-outline-secondary w-100">view Category</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-primary w-100">Cancel</a>
                    </div>
                </div>
            </div>
        </div>




    </div>
    <div class="col-lg-8">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Insert Category</h4>
            </div>

            <form wire:submit.prevent="store">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <label for="category-title" class="form-label">Main Category</label>
                            <select name="parent_category_id" wire:model.live="parent_category_id" class="form-control">
                                <option value="NULL">Select Main Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->cat_title }}</option>
                                @endforeach
                                <form>

                                </form>
                            </select>
                            @error('parent_category_id')
                                <p class="text-danger text-xs">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="title" class="form-label">Category Title</label>
                            <input type="text" wire:model.live="cat_title" class="form-control" placeholder="Title">
                            @error('cat_title')
                                <p class="text-danger text-xs">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="product-stock" class="form-label">Category Slug</label>
                            <input type="text" id="product-stock" wire:model="cat_slug" class="form-control"
                                readonly>
                            @error('cat_slug')
                                <p class="text-danger text-xs">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-12 mb-4">
                            <label class="form-label">Category Image</label>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="dropzone-file" class="w-100">
                                        <div class="border border-secondary border-dashed rounded d-flex align-items-center justify-content-center"
                                            style="height: 200px; cursor: pointer;">
                                            <div class="text-center">
                                                <svg class="mb-3" style="width: 2rem; height: 2rem;"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                                </svg>
                                                <p>Click to upload or drag and drop</p>
                                                <p class="text-muted">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                            </div>
                                        </div>
                                        <input id="dropzone-file" wire:model.live="image" type="file" class="d-none" />
                                    </label>
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- <div class="col-md-6">
                                    <div class="border border-secondary border-dashed rounded d-flex align-items-center justify-content-center"
                                        style="height: 200px;">
                                        <div wire:loading wire:target="image" class="text-center">
                                            <div class="spinner-border text-muted" role="status"></div>
                                            <p class="mt-2">Uploading...</p>
                                        </div>

                                        <div wire:loading.remove wire:target="image"
                                            class=" d-flex align-items-center justify-content-center">
                                            @if ($image)
                                                <img src="{{ $image->temporaryUrl() }}" class="img-fluid " style="height:160px" />
                                            @else
                                                <p>Image Preview</p>
                                            @endif
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-lg-6 mb-32">
                                    <label for="description" class="form-label">Category Description</label>
                                    <textarea class="form-control bg-light-subtle" wire:model.live="cat_description" id="description" rows="7"
                                        placeholder="Type description"></textarea>
                                    @error('cat_description')
                                        <p class="text-danger text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                      
                    </div>

                    @if (session()->has('message'))
                        <div class="text-black">
                            {{ session('message') }}
                        </div>
                    @endif

                    <div class="row p-3 justify-content-end g-2">
                        <div class="col-lg-3">
                            <button type="submit" class="btn btn-outline-secondary bg-orange text-white w-100">Save
                                Change</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
