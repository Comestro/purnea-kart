@extends('vendor.include.vendorBase')
@section('content')
    <!-- content -->

    <form class="row  g-3 needs-validation p-12 mx-4 my-4" novalidate>
        <div class="col-md-6">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="productName" name="name" required>
            <div class="invalid-feedback">
                Please provide a product name.
            </div>
        </div>
        <div class="col-md-6">
            <label for="productSlug" class="form-label">Slug</label>
            <input class="form-control" type="text" placeholder="slug here..." aria-label="readonly input example" readonly>
            <div class="invalid-feedback">
                Please provide a unique slug.
            </div>
        </div>
        <div class="col-md-12 mb-4">
            <label for="productDescription" class="form-label">Description</label>
            <div class="card">
                <div class="card-body">
                    <textarea id="editor" name="description">
                        <p>Here goes the initial content of the editor.</p>
                    </textarea>
                </div>
                
            </div>
        </div>
        
       
        
        <div class="col-md-4">
            <label for="productPrice" class="form-label">Price</label>
            <input type="number" class="form-control" id="productPrice" name="price" step="0.01">
            <div class="invalid-feedback">
                Please provide a valid price.
            </div>
        </div>
        <div class="col-md-4">
            <label for="productDiscountPrice" class="form-label">Discount Price</label>
            <input type="number" class="form-control" id="productDiscountPrice" name="discount_price" step="0.01">
        </div>
        <div class="col-md-4">
            <label for="productQuantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="productQuantity" name="quantity" required>
            <div class="invalid-feedback">
                Please provide the quantity.
            </div>
        </div>
        <div class="col-md-6">
            <label for="productSku" class="form-label">SKU</label>
            <input type="text" class="form-control" id="productSku" name="sku">
        </div>
        <div class="col-md-6">
            <label for="productVendor" class="form-label">Vendor</label>
            <select class="form-select" id="productVendor" name="vendor_id" required>
                <option selected disabled value="">Choose a vendor</option>
                <!-- Add vendor options here -->
            </select>
            <div class="invalid-feedback">
                Please select a valid vendor.
            </div>
        </div>
        <div class="col-md-6">
            <label for="productCategory" class="form-label">Category</label>
            <select class="form-select" id="productCategory" name="category_id" required>
                <option selected disabled value="">Choose a category</option>
                <!-- Add category options here -->
            </select>
            <div class="invalid-feedback">
                Please select a valid category.
            </div>
        </div>
        <div class="col-md-6">
            <label for="productBrand" class="form-label">Brand</label>
            <select class="form-select" id="productBrand" name="brand_id" required>
                <option selected disabled value="">Choose a brand</option>
                <!-- Add brand options here -->
            </select>
            <div class="invalid-feedback">
                Please select a valid brand.
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="productStatus" name="status">
                <label class="form-check-label" for="productStatus">
                    Is Active
                </label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
    
   

    <!-- ./ content -->
@endsection
