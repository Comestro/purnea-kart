<div class="row">
    <div class="col-lg-4">
        <!-- preview -->
        <div class="card shadow-lg rounded-lg">
            <div class="card-body">
                <!-- Product Image -->
                <img src="{{ asset('assets_admin/images/product/p-1.png') }}" alt=""
                    class="img-fluid rounded bg-light">

                <!-- Product Information -->
                <div class="mt-3">
                    <!-- Product Name and Category -->
                    <h4 class="text-lg font-semibold text-gray-800">
                        {{ $name ?? 'Men Black Slim Fit T-shirt' }}
                        <span class="fs-14 text-muted ms-1">({{ $cat_title ?? 'Fashion' }})</span>
                    </h4>

                    <!-- Price Section -->
                    <h5 class="text-dark fw-medium mt-3">Price :</h5>
                    <h4 class="fw-semibold text-dark mt-2 d-flex align-items-center gap-2">
                        <span class="text-muted text-decoration-line-through">${{ $price ?? 100 }}</span>
                        ${{ $discount_price ?? 80 }}
                        <small class="text-muted"> 30%off</small>
                    </h4>

                    <!-- Size Section -->
                    <div class="mt-3">
                        <h5 class="text-dark fw-medium">Size :</h5>
                        <div class="d-flex flex-wrap gap-2" role="group"
                            aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="size-s">
                            <label
                                class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                for="size-s">S</label>

                            <input type="checkbox" class="btn-check" id="size-m" checked>
                            <label
                                class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                for="size-m">M</label>

                            <input type="checkbox" class="btn-check" id="size-xl">
                            <label
                                class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                for="size-xl">XL</label>

                            <input type="checkbox" class="btn-check" id="size-xxl">
                            <label
                                class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                for="size-xxl">XXL</label>
                        </div>
                    </div>

                    <div class="mt-3">
                        <h5 class="text-dark fw-medium">Colors :</h5>
                        <div class="d-flex flex-wrap gap-2" role="group"
                            aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="color-dark">
                            <label
                                class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                for="color-dark">
                                <i class="bx bxs-circle fs-18 text-dark"></i>
                            </label>

                            <input type="checkbox" class="btn-check" id="color-yellow">
                            <label
                                class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                for="color-yellow">
                                <i class="bx bxs-circle fs-18 text-warning"></i>
                            </label>

                            <input type="checkbox" class="btn-check" id="color-white">
                            <label
                                class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                for="color-white">
                                <i class="bx bxs-circle fs-18 text-white"></i>
                            </label>

                            <input type="checkbox" class="btn-check" id="color-red">
                            <label
                                class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                for="color-red">
                                <i class="bx bxs-circle fs-18 text-danger"></i>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="card-footer bg-light-subtle">
                <div class="row g-2">
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-outline-secondary w-100">view Product</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-primary w-100">Cancel</a>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <div class="col-lg-8">

        <div>


            <form action="#" wire:submit.prevent="store" method="post">


                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Product Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Product Name</label>
                                    <input type="text" id="product-name" wire:model.live="name" class="form-control"
                                        placeholder="Items Name">
                                    @error('name')
                                        <p class="text-danger text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="" class="form-label ">Product Slug</label>
                                    <input type="text" id="product-name" wire:model.live="slug" disabled
                                        class="form-control" style="background-color: rgb(214, 214, 214)"
                                        placeholder="Items Name">
                                    @error('slug')
                                        <p class="text-danger text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Product Brand</label>
                                    <select id="brand_id" name="brand_id" wire:model.live="brand_id"
                                        class="form-control">
                                        <option value="">Select Brand</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('brand_name')
                                        <p class="text-danger text-xs">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                            {{-- <div class="col-lg-4">
                        <form>
                            <div class="mb-3">
                                <label for="product-weight" class="form-label">Weight</label>
                                <input type="text" id="product-weight" class="form-control" placeholder="In gm & kg">
                            </div>
                        </form>
                    </div> --}}
                            <div class="col-lg-4">
                                <label for="product-categories" class="form-label">Product Categories</label>
                                <select class="form-control" id="product-categories" wire:model.live='category_id'
                                    name="category_id">
                                    <option value="">Choose a category</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->cat_title }}</option>
                                    @endforeach
                                    @error('category_id')
                                        <p class="text-danger text-xs">{{ $message }}</p>
                                    @enderror
                                </select>
                            </div>
                            {{-- <div class="col-lg-4">
                        <form>
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-control" id="gender" data-choices data-choices-groups
                                data-placeholder="Select Gender">
                                <option value="">Select Gender</option>
                                <option value="Men">Men</option>
                                <option value="Women">Women</option>
                                <option value="Other">Other</option>
                            </select>
                        </form>
                    </div> --}}
                            <div class="col-lg-4">
                                <label for="vendor" class="form-label">Vendor</label>
                                <select class="form-control" id="gender" data-choices data-choices-groups
                                    data-placeholder="Select Gender">
                                    <option value="">Select vendor</option>
                                    <option value="">Select vendor</option>
                                    <option value="">Select vendor</option>
                                    <option value="">Select vendor</option>

                                </select>
                                @error('vendor')
                                    <p class="text-danger text-xs">{{ $message }}</p>
                                @enderror

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control bg-light-subtle" wire:model.live='description' id="description" rows="7"
                                        placeholder="Short description about the product"></textarea>
                                    @error('description')
                                        <p class="text-danger text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- <div class="col-lg-4">
                        <form>
                            <div class="mb-3">
                                <label for="product-id" class="form-label">Tag Number</label>
                                <input type="number" id="product-id" class="form-control" placeholder="#******">
                            </div>

                        </form>
                    </div> --}}

                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="product-quantity" class="form-label">Stock</label>
                                    <input type="number" id="product-quantity" wire:model.live='quantity'
                                        class="form-control" placeholder="Quantity">
                                    @error('quantity')
                                        <p class="text-danger text-xs">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="product-stock" class="form-label">SKU</label>
                                    <input type="number" id="product-sku" wire:model.live="sku"
                                        class="form-control" placeholder="Sku">
                                    @error('sku')
                                        <p class="text-danger text-xs">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                            {{-- <div class="col-lg-4">
                        <label for="product-stock" class="form-label">Tag</label>
                        <select class="form-control" id="choices-multiple-remove-button" data-choices
                            data-choices-removeItem name="choices-multiple-remove-button" multiple>
                            <option value="Fashion" selected>Fashion</option>
                            <option value="Electronics">Electronics</option>
                            <option value="Watches">Watches</option>
                            <option value="Headphones">Headphones</option>
                        </select>
                    </div> --}}

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pricing Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="product-price" class="form-label">Price</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text fs-20"><i class="bi bi-currency-rupee"></i></span>
                                    <input type="number" id="product-price" wire:model.live='price'
                                        class="form-control" placeholder="000">
                                    @error('price')
                                        <p class="text-danger text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">

                                <label for="product-discount" class="form-label">Discount Price</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text fs-20"><i class="bi bi-currency-rupee"></i></span>
                                    <input type="number" id="product-discount" class="form-control"
                                        wire:model.live='discount_price' placeholder="000">
                                    @error('discount_price')
                                        <p class="text-danger text-xs">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                            {{-- <div class="col-lg-4">
                        <form>
                            <label for="product-tex" class="form-label">Tex</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text fs-20"><i class='bx bxs-file-txt'></i></span>
                                <input type="number" id="product-tex" class="form-control" placeholder="000">
                            </div>
                        </form>
                    </div> --}}
                        </div>
                    </div>
                </div>
                <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-end g-2">
                        <div class="col-lg-3"><button type="submit" class="btn btn-outline-secondary w-100">
                                Create Product
                            </button>
                        </div>
                        <div class="col-lg-2">
                            <a href="#!" class="btn btn-primary w-100">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
