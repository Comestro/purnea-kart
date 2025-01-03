
<div class="container">
    <div class="row">
        <!-- Brand Preview Section -->
        <div class="col-lg-3">
         
        <div class="card">
            <div class="card-body">
                <div class="bg-light text-center rounded bg-light">
                    <div class="dropzone">
                        <div wire:loading wire:target="logo" class="text-center">
                            <div class="spinner-border text-muted" role="status"></div>
                            <p class="mt-2">Uploading...</p>
                        </div>

                        <div wire:loading.remove wire:target="logo"
                            class="w-100 h-100 d-flex align-items-center justify-content-center">
                            @if ($logo)
                                <img src="{{ $logo->temporaryUrl() }}" class="img-fluid" alt="Image Preview" />
                            @else
                                <img src="{{ asset('assets_admin/images/brands/ups.png') }}" alt="Static Preview"
                                    class="avatar-xxl">
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Name, Slug, Description -->
                <div class="mt-3">
                    <div class="text-start">
                        <!-- Static Preview before form submission -->
                        
                        @if (!$brand_name && !$brand_slug)
                            <h4>Luxury Fashion </h4> 
                        @else
                        <h4>{{ $brand_name }}<span>/</span>{{ $brand_slug }}</h4>
                        @endif
                       
                        @if (!$brand_description)
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus provident, rem omnis
                                exercitationem odio voluptate consequatur dolorem? Quo, nisi numquam, saepe voluptatem
                                modi voluptatibus neque vero, dolorem assumenda dolore perspiciatis.</p>
                        @else
                            <p>{{ $brand_description }}</p>
                        @endif

                    </div>
                </div>
            </div>

            <!-- Footer buttons -->
            <div class="card-footer border-top">
                <div class="row g-2">
                    <div class="col-lg-7">
                        <a href="" class="btn btn-outline-secondary w-100">view Brand</a>
                    </div>
                    <div class="col-lg-5">
                        <a href="#!" class="btn btn-primary w-100">Cancel</a>
                    </div>
                </div>
            </div>
        </div>

        </div>

        <!-- Brand Insertion Form Section -->
        <div class="col-lg-9 bg-white rounded p-4">
            <div class="card-header">
                <h2 class="card-title">Insert Brand</h2>
            </div>
            <hr>
            
            <div class="card-body">
                <form wire:submit.prevent="store">
                    <!-- Brand Name and Slug Fields -->
                    <div class="mb-4 row g-3">
                        <div class="col-xl-6">
                            <label class="form-label">Brand Name</label>
                            <input type="text" wire:model.live="brand_name" placeholder="Enter your Brand name"
                                class="form-control" />
                            @error('brand_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-xl-6">
                            <label for="slug" class="form-label">Brand Slug</label>
                            <input type="text" wire:model.live="brand_slug" class="form-control bg-light" readonly />
                            @error('brand_slug') 
                            <span class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>
                    </div>

                    <!-- Logo Upload Section -->
                    <div class="mb-4">
                        <label class="form-label">Brand Logo</label>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="dropzone-file" class="w-100">
                                    <div class="border border-secondary border-dashed rounded d-flex align-items-center justify-content-center"
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
                                    </div>
                                    <input id="dropzone-file" wire:model="logo" type="file" class="d-none" />
                                </label>
                                @error('logo') 
                                <span class="text-danger">{{ $message }}</span> 
                                @enderror
                            </div>

                            <!-- Logo Preview and Crop Modal Trigger -->
                            {{-- <div class="col-md-6">
                                <div class="border border-secondary border-dashed rounded d-flex align-items-center justify-content-center"
                                    style="height: 200px;">
                                    <div wire:loading wire:target="logo" class="text-center">
                                        <div class="spinner-border text-muted" role="status"></div>
                                        <p class="mt-2">Uploading...</p>
                                    </div>

                                    <div wire:loading.remove wire:target="logo"
                                        class="w-100 h-100 d-flex align-items-center justify-content-center">
                                        @if ($logo)
                                            <img id="preview-image" src="{{ $logo }}" class="img-fluid"
                                                style="height: 180px; cursor: pointer;" data-bs-toggle="modal"
                                                data-bs-target="#cropModal" />
                                        @else
                                            <p>Logo Preview</p>
                                        @endif
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label class="form-label">Brand Description</label>
                                    <textarea rows="6" placeholder="Type your message" class="form-control"
                                        wire:model.live="brand_description"></textarea>
                                    @error('brand_description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
            
                            </div>
                        </div>
                    </div>

                    <!-- Brand Description -->
                   
                    <button type="submit" class="btn btn-success w-100">Create</button>
                    @if (session()->has('message'))
                        <div class="mt-4 p-2 bg-success text-white rounded">{{ session('message') }}</div>
                    @endif
                </form>
            </div>
        </div>
    </div>

    <!-- Modal for Image Cropping -->
    <div class="modal fade" id="cropModal" tabindex="-1" role="dialog" aria-labelledby="cropModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cropModalLabel">Crop Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <div class="row">
                            <div class="col-md-8">
                                <img id="image-to-crop" src="" alt="Image to crop" />
                            </div>
                            <div class="col-md-4">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="crop-button">Crop</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.2/cropper.min.js"
    integrity="sha512-JyCZjCOZoyeQZSd5+YEAcFgz2fowJ1F1hyJOXgtKu4llIa0KneLcidn5bwfutiehUTiOuK87A986BZJMko0eWQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let cropper;
        let logo = document.getElementById('image-to-crop');

        // When the user selects an image
        $("input[type='file'][wire\\:model='logo']").on("change", function (e) {
            var files = e.target.files;
            if (files && files.length > 0) {
                var reader = new FileReader();
                reader.onload = function (event) {
                    logo.src = event.target.result;
                    $('#cropModal').modal('show');
                };
                reader.readAsDataURL(files[0]);
            }
        });

        // Initialize the cropper when modal is shown
        $('#cropModal').on('shown.bs.modal', function () {
            cropper = new Cropper(logo, {
                aspectRatio: 16 / 9,
                preview: '.preview',
                viewMode: 3,
                responsive: true,
            });
        });

        // Clean up when modal is hidden
        $('#cropModal').on('hidden.bs.modal', function () {
            cropper.destroy();
            cropper = null;
        });

        // Crop and send cropped image to Livewire
        $("#crop-button").on('click', function () {
            var canvas = cropper.getCroppedCanvas({
                width: 800,
                height: 400
            });

            canvas.toBlob(function (blob) {
                // Upload to Livewire
                @this.upload('logo', blob);
                $('#cropModal').modal('hide');
            });
        });
    });
</script> -->