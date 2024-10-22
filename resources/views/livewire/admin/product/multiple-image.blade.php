 <!-- Flash message display -->

 <div class="container mt-4">
    <div class="card ">
        @if(session()->has('message'))
        <div class="alert alert-success mt-4">
            {{ session('message') }}
        </div>
       @endif
        {{-- <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">Add Product Photo</h4>
                <a href="{{ route('product.index') }}" class="btn btn-primary">Back</a>
            </div>
            
        </div> --}}
        <div class="container">
            <form wire:submit.prevent="update" method="POST" enctype="multipart/form-data">
                <div class="p-4 bg-light rounded shadow mb-4">
                    <label class="form-label fw-bold">Product Images</label>
        
                   <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="dropzone-file" class="w-100">
                                    <div class="border border-secondary border-dashed rounded d-flex align-items-center justify-content-center"
                                         style="height: 200px; cursor: pointer;">
                                        <div class="text-center px-4">
                                            <i class="bx bx-cloud-upload fs-48 text-primary"></i>

                                            <h3 class="mt-2 fs-5">Drop your images here, or <span class="text-primary">click to browse</span></h3>
                                            <span class="text-muted fs-6">
                                                1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed
                                                </span>
                                        </div>
                                    </div>
                                    <input id="dropzone-file" wire:model="path" type="file" class="d-none" />
                                </label>
                                @error('path')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
            
                            <!-- Preview Area -->
                            <div class="col-md-6">
                                <div class="border border-secondary border-dashed rounded d-flex align-items-center justify-content-center"
                                     style="height: 200px;">
                                    <!-- Loading spinner when uploading -->
                                    <div wire:loading wire:target="path" class="text-center">
                                        <div class="spinner-border text-muted" role="status"></div>
                                        <p class="mt-2">Uploading...</p>
                                    </div>
            
                                    <!-- Image preview once uploaded -->
                                    <div wire:loading.remove wire:target="path" class="w-100 h-100 d-flex align-items-center justify-content-center">
                                        @if ($path)
                                            <img src="{{ $path->temporaryUrl() }}" class="img-fluid" alt="path Preview" />
                                        @else
                                            <p>path Preview</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <!-- Submit Button -->
                        <div class="d-grid mt-3">
                            <button type="submit" class="btn btn-primary ">Save</button>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="">
                            <label class="form-label fw-bold">Existing Product Images</label>
                            @if($productImages && count($productImages) > 0)
                                <div class="row">
                                    @foreach($productImages as $image)
                                        <div class="col-md-4 mb-3 ">
                                            <div class="">
                                                <!-- Show product image -->
                                                <img src="{{ asset('https://ronilaravel.s3.amazonaws.com/public/image/product/' . $image->path) }}" class="img-fluid rounded shadow">
                
                                                <!-- Delete button for image -->
                                                <button type="button" wire:click="deleteImage({{ $image->id }})"
                                                        class="btn btn-danger btn-sm position-absolute top-0 end-0 ">
                                                        <i class="bi bi-x"></i>
                                                </button>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                               <br> <span class="text-primary">No images available.</span>
                            @endif
                        </div>
                    
                       
                    </div>
                   </div>
                </div>
            </form>
        
         
        </div>
        
        
    </div>

    <!-- Display existing product images -->
   
</div>
