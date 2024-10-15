<div>
    <div class="row">
        <div class="col-lg-12">
            <div>
                <form  wire:submit.prevent="update" method="post">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Product View</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                              <livewire:admin.product.edit-product-title :product="$product"/>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Product Slug</label>
                                        <input type="text" id="product-name" wire:model="slug" disabled
                                            class="form-control" style="background-color: rgb(214, 214, 214)"
                                            placeholder="Items Name">
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
                                    </div>

                                </div>
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
                          
                            <div class="row">
                                <livewire:admin.product.edit-product-description :product="$product"/>
                            </div>
                            <div class="row">
                            
                                
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Pricing Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <livewire:admin.product.edit-product-price :product="$product"/>
                                <livewire:admin.product.edit-product-discount :product="$product"/>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 bg-light mb-3 rounded">
                        <div class="row justify-content-end g-2">
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-outline-secondary w-100">
                                    Submit Product
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>


    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
</div>
