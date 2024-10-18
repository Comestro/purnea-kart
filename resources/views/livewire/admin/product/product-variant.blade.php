<div>
    <form wire:submit.prevent="update" method="POST" class="p-6   position-relative">
        @csrf
        <div class="p-10">
    <!-- Loop through variants and render form fields -->
            <div class="row g-4 mb-4">
                <div class="col-md-2">
                    <label class="form-label fw-semibold">Variant Type</label>
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

                <div class="col-md-2">
                    <label class="form-label fw-semibold">Variant Value</label>
                    <input type="text" class="form-control" placeholder="e.g., Red, XL" />
                    {{-- @error('variants.' . $index . '.value')
                    <div class="text-danger small">{{$message}}</div>
                    @enderror --}}
                </div>

                <div class="col-md-2">
                    <label class="form-label fw-semibold">Variant Price</label>
                    <input class="form-control" placeholder="Enter Variant Price" />
                    {{-- @error('variants.' . $index . '.price')
                    <div class="text-danger small">{{$message}}</div>
                    @enderror --}}
                </div>

                <div class="col-md-2">
                    <label class="form-label fw-semibold">Variant Stock</label>
                    <input type="text" class="form-control" placeholder="Enter Variant Stock" />
                    {{-- @error('variants.' . $index . '.stock')
                    <div class="text-danger small">{{$message}}</div>
                    @enderror --}}
                </div>

                <!-- Remove Variant Button -->
                <div class="col-md-2 d-flex align-items-end">
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

            {{-- <button type="submit" class="btn btn-primary">
                Update Product
            </button> --}}

        </div>

        <!-- Loading Spinner -->
        {{-- <div wire:loading wire:target="update" class="position-absolute top-50 start-50 bg-white bg-opacity-75 d-flex flex-column align-items-center justify-content-center">
            <div class="spinner-border text-primary" role="status"></div>
            <span class="mt-2 text-primary fw-semibold">Processing...</span>
        </div> --}}
    </form>
</div>

