<form class="row  g-3 needs-validation p-12 mx-4 my-4" wire:submit.prevent="store">
    <div class="col-md-6">
        <label for="productName" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="productName" model:wire.live="product_name">
        <div class="invalid-feedback">
            Please provide a product name.
        </div>
        @error('name')
        <p class="text-black small">{{$message}}</p>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="productSlug" class="form-label">Slug</label>
        <input class="form-control" type="text" model:wire.live="product_slug" placeholder="slug here..." aria-label="readonly input example" readonly>
        <div class="invalid-feedback">
            Please provide a unique slug.
        </div>
        @error('slug')
        <p class="text-black small">{{$message}}</p>
        @enderror
    </div>
    <div class="col-md-12 mb-4">
        <label for="productDescription" class="form-label">Description</label>
        <div class="card">
            <div class="card-body">
                <textarea class="form-control bg-light-subtle" wire:model.live="description"
                    id="description" rows="7" placeholder="Type description"></textarea>
            </div>
            @error('description')
        <p class="text-black small">{{$message}}</p>
        @enderror

        </div>
    </div>



    <div class="col-md-4">
        <label for="productPrice" class="form-label">Price</label>
        <input type="number" class="form-control" id="productPrice" wire:model.live="price" step="0.01">
        <div class="invalid-feedback">
            Please provide a valid price.
        </div>
        @error('price')
        <p class="text-black small">{{$message}}</p>
        @enderror
    </div>
    <div class="col-md-4">
        <label for="productDiscountPrice" class="form-label">Discount Price</label>
        <input type="number" class="form-control" id="productDiscountPrice" name="discount_price" step="0.01">
    </div>
    @error('discount_price')
        <p class="text-black small">{{$message}}</p>
        @enderror
    <div class="col-md-4">
        <label for="productQuantity" class="form-label">Quantity</label>
        <input type="number" class="form-control" id="productQuantity" wire:model.live="quantity" required>
        <div class="invalid-feedback">
            Please provide the quantity.
        </div>
        @error('quantity')
        <p class="text-black small">{{$message}}</p>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="productSku" class="form-label">SKU</label>
        <input type="text" class="form-control" id="productSku" wire:model.live="sku">
    </div>
    @error('sku')
        <p class="text-black small">{{$message}}</p>
        @enderror
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
        <label for="productCategory" class="form-label">Category</label>
        <select class="form-select" id="productCategory" wire:model="category_id">
            <option value="null">Choose a category</option>
            @foreach ($category as $cat )
            <option value="{{$cat->id}}">{{$cat->cat_title}}</option>
            @endforeach

        </select>
        @error('category_id')
        <p class="text-black small">{{$message}}</p>
        @enderror
        <div class="invalid-feedback">
            Please select a valid category.
        </div>

    </div>
    <div class="col-md-6">
        <label for="productBrand" class="form-label">Brand</label>
        <select class="form-select" id="productBrand" wire:model="brand_id">
            <option selected disabled value="null">Choose abrand</option>
            <!-- Add brand options here -->
            @foreach ($brand as $bra )
            <option value="{{$bra->id}}">{{$bra->brand_name}}</option>
            @endforeach
        </select>
        @error('brand_id')
        <p class="text-black small">{{$message}}</p>
        @enderror
        <div class="invalid-feedback">
            Please select a valid brand.
        </div>
    </div>
    <div class="col-md-12">
        <!-- <div class="form-check">
                <input class="form-check-input" type="checkbox" id="productStatus" name="status">
                <label class="form-check-label" for="productStatus">
                    Is Active
                </label>
            </div> -->
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</form>