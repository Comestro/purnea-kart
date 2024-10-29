<div>
    <form class="row  g-3 needs-validation p-12 mx-4 my-4" wire:submit.prevent="update" method="post">
        <div class="col-md-6">
            <livewire:vendor.product.edit-product-title :product="$product" />
        </div>
        <div class="col-md-6">
            <label for="productSlug" class="form-label">Slug</label>
            <input class="form-control" type="text" wire:model.live="slug" placeholder="slug here..."
                aria-label="readonly input example" readonly>
            <div class="invalid-feedback">
                Please provide a unique slug.
            </div>
            @error('slug')
                <p class="text-black small">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-md-12 mb-4">
            <livewire:vendor.product.edit-product-description :product="$product" />

        </div>
        <div class="col-md-4">
            <livewire:vendor.product.edit-product-price :product="$product" />

        </div>
        <div class="col-md-4">
            <livewire:vendor.product.edit-product-discount :product="$product" />
        </div>

        <div class="col-md-4">
            <livewire:vendor.product.edit-product-quantity :product="$product" />

        </div>
        <div class="col-md-6">
            <livewire:vendor.product.edit-product-sku :product="$product" />

        </div>
        <div class="col-md-6">
            <label for="productVendor" class="form-label">Vendor</label>
            <select class="form-select" id="productVendor" name="vendor_id">
                <option selected disabled value="">Choose a vendor</option>
                <!-- Add vendor options here -->
            </select>
            <div class="invalid-feedback">
                Please select a valid vendor.
            </div>
        </div>
        <div class="col-md-6">
            <livewire:vendor.product.edit-product-category :product="$product" :categories="$categories" />

        </div>
        <div class="col-md-6">
            <livewire:vendor.product.edit-product-brand :product="$product" :brands="$brands" />
        </div>
        {{-- <div class="col-md-12">
            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="productStatus" name="status">
                            <label class="form-check-label" for="productStatus">
                                Is Active
                            </label>
                        </div>
        </div> --}}
        
    </form>
</div>
