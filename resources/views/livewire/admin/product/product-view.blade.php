<div>
    <div>
        <form wire:submit.prevent="update" method="post">

            <div class="card">
                {{-- <div class="card-header">
                            <h4 class="card-title">Product Edit</h4>
                        </div> --}}
                <div class="card-body" style="background-color: #f7f7f7">
                    <div class="row">
                        <livewire:admin.product.edit-product-title :product="$product" />
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="" class="form-label ">Product Slug</label>
                                <input type="text" id="product-name" wire:model="slug" disabled class="form-control"
                                    style="background-color: rgb(214, 214, 214)" placeholder="Items Name">
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <livewire:admin.product.edit-product-brand :product="$product" :brands="$brands" />

                        <livewire:admin.product.edit-product-category :product="$product" :categories="$categories" />

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
                        <livewire:admin.product.edit-product-description :product="$product" />
                    </div>
                    <div class="row">
                        <livewire:admin.product.edit-product-sku :product="$product" />
                        <livewire:admin.product.edit-product-quantity :product="$product" />

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pricing Details</h4>
                </div>
                <div class="card-body" style="background-color: #f7f7f7">
                    <div class="row">
                        <livewire:admin.product.edit-product-price :product="$product" />
                        <livewire:admin.product.edit-product-discount :product="$product" />
                    </div>
                </div>
            </div>
        </form>
    </div>






    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
</div>
