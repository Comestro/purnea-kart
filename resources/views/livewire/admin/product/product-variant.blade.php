<div>
   
    <form wire:submit.prevent="store" method="POST" class="p-2   position-relative">
        @csrf
        <div class="p-2">
            <!-- Loop through variants and render form fields -->
            <div class="col-md-12">
                <div class="row gap-4 mb-4">
                    <div class="col-md-3">
                        <label class="form-label fw-semibold">Variant Type</label>
                        <select class="form-select" wire:model="variant_type">
                            <option value="">Select Variant Type</option>
                            <option value="size">Size</option>
                            <option value="color">Color</option>
                            <option value="material">Material</option>
                        </select>
                        @error('varient_type')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-semibold">Variant Name</label>
                        <input type="text" wire:model="variant_name" class="form-control"
                            placeholder="e.g., Red, XL" />
                        @error('varient_name')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-3">
                        <label class="form-label fw-semibold">Variant Sku</label>
                        <input type="text" wire:model="sku" class="form-control" placeholder="Enter Variant Sku" />
                        @error('sku')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row gap-4 mb-3">
                        <div class="col-md-3">
                            <label class="form-label fw-semibold">Variant Price</label>
                            <input class="form-control" wire:model="price" placeholder="Enter Variant Price" />
                            @error('price')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-3">
                            <label class="form-label fw-semibold">Variant Stock</label>
                            <input type="text" wire:model="stock" class="form-control"
                                placeholder="Enter Variant Stock" />
                            @error('stock')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class=" col-md-3">
                            <label class="form-label fw-semibold">Variant Image</label>
                            <input type="file" wire:model="variant_image" name="variant_image" class="form-control">
                            @error('variant_image')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-4 d-flex gap-4 justify-content-end">
                            <button type="submit" class="btn btn-success">
                                Add Variant
                            </button>
                            <button type="button" wire:click="" class="btn btn-primary">
                                Update Product
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif

        <!-- Submit Button -->


        <!-- Loading Spinner -->
        {{-- <div wire:loading wire:target="update" class="position-absolute top-50 start-50 bg-white bg-opacity-75 d-flex flex-column align-items-center justify-content-center">
            <div class="spinner-border text-primary" role="status"></div>
            <span class="mt-2 text-primary fw-semibold">Processing...</span>
        </div> --}}
    </form>
</div>
