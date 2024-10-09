<div class="row">
    <div class="col-lg-4">
        <!-- preview -->
        <div class="card">
    <div class="card-body">
        <img src="assets/images/product/p-1.png" alt="" class="img-fluid rounded bg-light">
        <div class="mt-3">
            <h4>Product name: <span class="fs-14 text-muted ms-1">{{ $name }}</span></h4>
            <h4>Product description: <span class="fs-14 text-muted ms-1">{{ $description }}</span></h4>
           
            <h4 class="text-dark fw-medium mt-3">Price : 
                <span class="text-muted text-decoration-line-through">${{ $price }}</span> 
                ${{ $discount_price }} 
            </h4>  
            <h4 class="text-dark fw-medium mt-3">Brand: 
                <span class="text-muted">{{ $brand_name }}</span>
            </h4>
             <h4 class="text-dark fw-medium mt-3">Category: 
                <span class="text-muted">{{ $cat_title }}</span>
            </h4>
            <h4>Product quantity: <span class="fs-14 text-muted ms-1">{{ $quantity }}</span></h4>
            <h4>Product sku: <span class="fs-14 text-muted ms-1">{{ $sku }}</span></h4>
        </div>
    </div>
</div>

    </div>
    <div class="col-lg-8">

        <div>
            <div x-data="{ showAlert: true }" x-show="showAlert">
                @if($errors->any())
                <div class="alert alert-danger relative p-4 border border-red-400 bg-red-100 text-red-700 rounded">
                    <button @click="showAlert = false"
                        class="absolute top-0 right-0 mt-2 mr-2 text-red-700 font-bold">&times;</button>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>

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
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="" class="form-label ">Product Slug</label>
                                    <input type="text" id="product-name" wire:model="slug" disabled class="form-control"
                                        style="background-color: rgb(214, 214, 214)" placeholder="Items Name">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Product Brand</label>
                                    <select id="brand_id" name="brand_id" wire:model.live="brand_id" class="form-control">
                                        <option value="">Select Brand</option>
                                        @foreach ($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                        @endforeach
                                    </select>
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

                            </div>
                        </div>
                        {{-- <div class="row mb-4">
                    <div class="col-lg-4">
                        <div class="mt-3">
                            <h5 class="text-dark fw-medium">Size :</h5>
                            <div class="d-flex flex-wrap gap-2" role="group"
                                aria-label="Basic checkbox toggle button group">
                                <input type="checkbox" class="btn-check" id="size-xs1">
                                <label
                                    class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                    for="size-xs1">XS</label>

                                <input type="checkbox" class="btn-check" id="size-s1">
                                <label
                                    class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                    for="size-s1">S</label>

                                <input type="checkbox" class="btn-check" id="size-m1">
                                <label
                                    class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                    for="size-m1">M</label>

                                <input type="checkbox" class="btn-check" id="size-xl1">
                                <label
                                    class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                    for="size-xl1">Xl</label>

                                <input type="checkbox" class="btn-check" id="size-xxl1">
                                <label
                                    class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                    for="size-xxl1">XXL</label>
                                <input type="checkbox" class="btn-check" id="size-3xl1">
                                <label
                                    class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                    for="size-3xl1">3XL</label>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="mt-3">
                            <h5 class="text-dark fw-medium">Colors :</h5>
                            <div class="d-flex flex-wrap gap-2" role="group"
                                aria-label="Basic checkbox toggle button group">
                                <input type="checkbox" class="btn-check" id="color-dark1">
                                <label
                                    class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                    for="color-dark1"> <i class="bx bxs-circle fs-18 text-dark"></i></label>

                                <input type="checkbox" class="btn-check" id="color-yellow1">
                                <label
                                    class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                    for="color-yellow1"> <i class="bx bxs-circle fs-18 text-warning"></i></label>

                                <input type="checkbox" class="btn-check" id="color-white1">
                                <label
                                    class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                    for="color-white1"> <i class="bx bxs-circle fs-18 text-white"></i></label>

                                <input type="checkbox" class="btn-check" id="color-red1">
                                <label
                                    class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                    for="color-red1"> <i class="bx bxs-circle fs-18 text-primary"></i></label>

                                <input type="checkbox" class="btn-check" id="color-green1">
                                <label
                                    class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                    for="color-green1"> <i class="bx bxs-circle fs-18 text-success"></i></label>

                                <input type="checkbox" class="btn-check" id="color-blue1">
                                <label
                                    class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                    for="color-blue1"> <i class="bx bxs-circle fs-18 text-danger"></i></label>

                                <input type="checkbox" class="btn-check" id="color-sky1">
                                <label
                                    class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                    for="color-sky1"> <i class="bx bxs-circle fs-18 text-info"></i></label>

                                <input type="checkbox" class="btn-check" id="color-gray1">
                                <label
                                    class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                    for="color-gray1"> <i class="bx bxs-circle fs-18 text-secondary"></i></label>

                            </div>
                        </div>
                    </div>
                </div> --}}
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control bg-light-subtle" wire:model.live='description'
                                        id="description" rows="7"
                                        placeholder="Short description about the product"></textarea>
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
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="product-stock" class="form-label">SKU</label>
                                    <input type="number" id="product-sku" wire:model.live="sku" class="form-control"
                                        placeholder="Sku">
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
                                    <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                                    <input type="number" id="product-price" wire:model='price' class="form-control"
                                        placeholder="000">
                                </div>
                            </div>
                            <div class="col-lg-4">

                                <label for="product-discount" class="form-label">Discount</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text fs-20"><i class='bx bxs-discount'></i></span>
                                    <input type="number" id="product-discount" class="form-control"
                                        wire:model='discount_price' placeholder="000">
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
                        <div class="col-lg-2"><button type="submit" class="btn btn-outline-secondary w-100">
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