<div>
    <form wire:submit.prevent="store" method="POST" class="p-6   position-relative">
        @csrf
        <div class="p-6">
    <!-- Loop through variants and render form fields -->
            <div class="col-md-12">
                <div class="row gap-4 mb-4">
                <div class="col-md-3">
                    <label wire:model.live="variant_type" class="form-label fw-semibold">Variant Type</label>
                    <select class="form-select">
                        <option value="">Select Variant Type</option>
                        <option value="size">Size</option>
                        <option value="color">Color</option>
                        <option value="material">Material</option>
                    </select>
                    {{-- @error('variants.' . $index . '.type')
                    <div class="text-danger small">{{$message}}</div>
                    @enderror --}}
                </div>
                <div class="col-md-3">
                    <label wire:model.live="" class="form-label fw-semibold">Variant Value</label>
                    <input type="text" class="form-control" placeholder="e.g., Red, XL" />
                    @error('varient_value')
                    <div class="text-danger small">{{$message}}</div>
                    @enderror
                </div>
                <div class="row gap-4 mb-3">
                    <div class="col-md-3">
                        <label class="form-label fw-semibold">Variant Price</label>
                        <input class="form-control" placeholder="Enter Variant Price" />
                        {{-- @error('variants.' . $index . '.price')
                        <div class="text-danger small">{{$message}}</div>
                        @enderror --}}
                    </div>
    
                    <div class="col-md-3">
                        <label class="form-label fw-semibold">Variant Stock</label>
                        <input type="text" class="form-control" placeholder="Enter Variant Stock" />
                        {{-- @error('variants.' . $index . '.stock')
                        <div class="text-danger small">{{$message}}</div>
                        @enderror --}}
                    </div>
                </div>
            </div>
            
            </div>
            <div class="col-md-112">
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Variant Image</label>
                    <label for="dropzone-file" class="w-100">
                        <div class="border border-secondary border-dashed rounded d-flex p-1"
                            style="height: 120px; cursor: pointer;">
                            <div class="text-center">
                                <svg class="" style="width: 1rem; height: 1rem;"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
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
            </div>
            <div class="row g-4 mb-4">
               
                
              
                <!-- Remove Variant Button -->
                <div class="col-md-1 d-flex align-items-end">
                    <button type="button" wire:click="removeVariant()" class="btn btn-danger">Remove</button>
                </div>
            </div>

        </div>

        <!-- Submit Button -->
        <div class="mt-4 d-flex gap-4 justify-content-end">

            <button type="button" wire:click="" class="btn btn-success">
                Add Variant
            </button>

            <button type="button" wire:click="" class="btn btn-primary">
                Update Product
            </button>

           

        </div>

        <!-- Loading Spinner -->
        <div wire:loading wire:target="update" class="position-absolute top-50 start-50 bg-white bg-opacity-75 d-flex flex-column align-items-center justify-content-center">
            <div class="spinner-border text-primary" role="status"></div>
            <span class="mt-2 text-primary fw-semibold">Processing...</span>
        </div>
    </form>
</div>

