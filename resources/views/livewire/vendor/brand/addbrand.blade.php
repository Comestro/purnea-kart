<div>
    <div class="container mx-auto p-6">
        <form wire:submit.prevent="store" class="row g-3 needs-validation p-12 mx-4 my-4" novalidate>
          

            <!-- brand Title -->
            <div class="col-md-6">
                <label for="brandTitle" class="form-label">brand Name</label>
                <input type="text" class="form-control" id="brandTitle" wire:model.live="brand_name" required>
                <div class="invalid-feedback">
                    Please provide a brand title.
                </div>
            </div>

           
            <!-- brand Slug -->
            <div class="col-md-6">
                <label for="brandSlug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="brandSlug" wire:model="brand_slug" placeholder="Auto-generated slug"
                    readonly>
            </div>
                      <!-- brand logo -->

        {{-- <div class=" col-md-6 mb-4">
            <label for="logo" class="form-label">Brand logo</label>

            <div class="card-body">

                <div action="/file-upload" class="dropzone">
                    <input type="file" wire:model="path" hidden />
                </div>
            </div>
            <div class="demo-code-preview">

            </div>
        </div> --}}

            <div class="row">
                <label class="form-label">Brand Logo</label>

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
                            <input id="dropzone-file" wire:model="logo" type="file" class="d-none" />
                        </label>
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

                        <div wire:loading.remove wire:target="logo"
                            class="w-100 h-100 d-flex align-items-center justify-content-center">
                            @if ($logo)
                            <img src="{{ $logo->temporaryUrl() }}" class="img-fluid" style="height:95%; width:97%;" />
                            @else
                            <p>logo Preview</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @error('logo')
            <p class="text-black small">{{$message}}</p>
            @enderror

            <!-- brand Description -->
            <div class="mb-4">
                <label class="form-label">Brand Description</label>
                <textarea rows="6" placeholder="Type your message" class="form-control"
                    wire:model.live="brand_description"></textarea>
                @error('brand_description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            {{-- <div class="col-md-6 mb-4">
                <label for="brandDescription" class="form-label">brand Description</label>
                <div class="card">
                    <div class="card-body">
                        <textarea id="editor" name="brand_description" rows="4" required></textarea>
                    </div>
                </div>
            </div> --}}



            <!-- Submit Button -->
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
          
    </div></div>
