<div>

    <div x-data="{ showAlert: true }" x-show="showAlert">
        @if ($errors->any())
            <div class="alert alert-danger relative p-4 border border-red-400 bg-red-100 text-red-700 rounded">
                <button @click="showAlert = false"
                    class="absolute top-0 right-0 mt-2 mr-2 text-red-700 font-bold">&times;</button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

   
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Banner Information</h4>
                </div>

                <div class="container">


                    <form action="" wire:submit.prevent="store" enctype="multipart/form-data">


                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" wire:model="title" required>
                            @error('discount_price')
                                <p class="text-danger text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alt" class="form-label">Alt Text</label>
                            <input type="text" class="form-control" id="alt" wire:model="alt"
                                placeholder="Enter alt text" value="{{ old('alt') }}">
                            @error('discount_price')
                                <p class="text-danger text-xs">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class=" mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" wire:model="status">
                                <option value="1" {{ old('status') == 1 ? 'Active' : '' }}>Active</option>
                                <option value="0" {{ old('status') == 0 ? 'Inactive' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="expiry_date" class="form-label">Expiry Date</label>
                            <input type="date" class="form-control" id="expiry_date" wire:model="expiry_date"
                                value="{{ old('expiry_date') }}">
                            @error('discount_price')
                                <p class="text-danger text-xs">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="row">


                                <div class="col-lg-12">
                                    <div class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone"
                                        data-previews-container="#file-previews"
                                        data-upload-preview-template="#uploadPreviewTemplate">
                                        <label for="dropzone-file" class="form-label">

                                            <div class="dz-message needsclick">
                                                <i class="bx bx-cloud-upload fs-48 text-primary"></i>
                                                <h3 class="mt-2 fs-5">Drop your images here, or <span
                                                        class="text-primary">click to
                                                        browse</span></h3>
                                                <span class="text-muted fs-13">
                                                    1600 x 1200 (4:3) recommended. PNG, JPG, and GIF files are allowed
                                                </span>
                                            </div>

                                            <input id="dropzone-file" wire:model="image_path" type="file"
                                                class="d-none" />
                                        </label>

                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <div class="dropzone">
                                        <!-- Loading spinner when uploading -->
                                        <div wire:loading wire:target="image_path" class="text-center">
                                            <div class="spinner-border text-muted" role="status"></div>
                                            <p class="mt-2">Uploading...</p>
                                        </div>

                                        <!-- Image preview once uploaded -->
                                        <div wire:loading.remove wire:target="image_path"
                                            class="w-100 h-100 d-flex align-items-center justify-content-center">
                                            @if ($image_path)
                                                <img src="{{ $image_path->temporaryUrl() }}" class="img-fluid"
                                                    alt="path Preview" />
                                            @else
                                                <p>path Preview</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Create</button>

                        </div>
                    </form>
                </div>
            </div>
     


   

</div>
<!-- Optional CSS to style toggle -->
<!-- Optional CSS to style toggle -->
