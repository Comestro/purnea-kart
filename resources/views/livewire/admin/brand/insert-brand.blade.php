<div>
    <div class="card border-0 shadow-sm bg-white">
        <form action="#" wire:submit.prevent="store" method="post">
            <div class="card-body">              
                <div class="mb-4 row g-3">
                    <div class="col-xl-6">
                        <label class="form-label">
                            Brand Name
                        </label>
                        <input type="text" wire:model.live="brand_name" placeholder="Enter your Brand name"
                            class="form-control" />
                        @error('brand_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-xl-6">
                        <label for="slug" class="form-label">
                            Brand Slug
                        </label>
                        <input type="text" id="brand_slug" wire:model="brand_slug" class="form-control bg-light" readonly />
                        @error('brand_slug')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">
                        Brand Logo
                    </label>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="dropzone-file" class="w-100">
                                <div class="border border-secondary border-dashed rounded d-flex align-items-center justify-content-center"
                                    style="height: 200px; cursor: pointer;">
                                    <div class="text-center">
                                        <svg class="mb-3" style="width: 2rem; height: 2rem;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                        </svg>
                                        <p>Click to upload or drag and drop</p>
                                        <p class="text-muted">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                    </div>
                                </div>
                                <input id="dropzone-file" wire:model="logo" type="file" class="d-none" />
                            </label>
                            @error('logo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="border border-secondary border-dashed rounded d-flex align-items-center justify-content-center"
                                style="height: 200px;">
                                <div wire:loading wire:target="logo" class="text-center">
                                    <div class="spinner-border text-muted" role="status"></div>
                                    <p class="mt-2">Uploading...</p>
                                </div>

                                <div wire:loading.remove wire:target="logo" class="w-100 h-100 d-flex align-items-center justify-content-center">
                                    @if ($logo)
                                        <img src="{{ $logo->temporaryUrl() }}" class="img-fluid" />
                                    @else
                                        <p>Logo Preview</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">
                        Brand Description
                    </label>
                    <textarea rows="6" placeholder="Type your message" class="form-control" wire:model="brand_description"></textarea>
                    @error('brand_description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success w-100">
                    Create
                </button>                
                @if (session()->has('message'))
                    <div class="mt-4 p-2 bg-success text-white rounded">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </form>
    </div>
</div>
