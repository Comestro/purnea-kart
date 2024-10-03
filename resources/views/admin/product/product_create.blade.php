
@extends('admin.include.adminBase')
@section('title', 'Create Product ||')

@section('content')


          <!-- ========== App Menu Start ========== -->
       @include('admin.include.sidebar')
          <!-- ========== App Menu End ========== -->

          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

               <!-- Start Container Fluid -->
            
    <div class=" mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6">Create New Product</h1>

        <form action="{{route('products.store')}}" method="post" class="bg-light p-4 rounded" enctype="multipart/form-data">
    @csrf
    <div class="row g-3">
        <!-- Product Name -->
        <div class="col-md-6 mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <p class="text-danger small">{{$message}}</p>
            @enderror
        </div>

        <!-- Product Slug -->
        <div class="col-md-6 mb-3">
            <label for="slug" class="form-label">Product Slug</label>
            <input type="text" id="slug" name="slug" value="{{old('slug')}}" class="form-control">
            @error('slug')
                <p class="text-danger small">{{$message}}</p>
            @enderror
        </div>

        <!-- Product Price -->
        <div class="col-md-6 mb-3">
            <label for="price" class="form-label">Product Price</label>
            <input type="number" id="price" name="price" value="{{old('price')}}" class="form-control">
            @error('price')
                <p class="text-danger small">{{$message}}</p>
            @enderror
        </div>

        <!-- Product Offer Price -->
        <div class="col-md-6 mb-3">
            <label for="discount_price" class="form-label">Product Offer Price</label>
            <input type="number" id="discount_price" name="discount_price" value="{{old('discount_price')}}" class="form-control">
            @error('discount_price')
                <p class="text-danger small">{{$message}}</p>
            @enderror
        </div>

        <!-- Product Image -->
        <div class="col-md-6 mb-3">
            <label for="image" class="form-label">Product Image</label>
            <input type="file" id="image" name="featured_image" class="form-control">
            @error('featured_image')
                <p class="text-danger small">{{$message}}</p>
            @enderror
        </div>

        <!-- Product Description -->
        <div class="col-md-12 mb-3">
            <label for="description" class="form-label">Product Description</label>
            <textarea rows="4" id="description" name="description" class="form-control">{{old('description')}}</textarea>
            @error('description')
                <p class="text-danger small">{{$message}}</p>
            @enderror
        </div>

        <!-- Product Quantity -->
        <div class="col-md-6 mb-3">
            <label for="quantity" class="form-label">Product Quantity</label>
            <input type="number" id="quantity" name="quantity" value="{{old('quantity')}}" class="form-control">
            @error('quantity')
                <p class="text-danger small">{{$message}}</p>
            @enderror
        </div>

        <!-- Product SKU -->
        <div class="col-md-6 mb-3">
            <label for="sku" class="form-label">Product SKU</label>
            <input type="text" id="sku" name="sku" value="{{old('sku')}}" class="form-control">
            @error('sku')
                <p class="text-danger small">{{$message}}</p>
            @enderror
        </div>

        <!-- Category -->
        <div class="col-md-6 mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select id="category_id" name="category_id" class="form-control">
                <option value="">Select Category</option>
            </select>
            @error('category_id')
                <p class="text-danger small">{{$message}}</p>
            @enderror
        </div>

        <!-- Brand -->
        <div class="col-md-6 mb-3">
            <label for="brand_id" class="form-label">Product Brand</label>
            <select id="brand_id" name="brand_id" class="form-control">
                <option value="">Select Brand</option>
            </select>
            @error('brand_id')
                <p class="text-danger small">{{$message}}</p>
            @enderror
        </div>

        <!-- Vendor -->
        <div class="col-md-6 mb-3">
            <label for="vender_id" class="form-label">Product Vendor</label>
            <select id="vender_id" name="vender_id" class="form-control">
                <option value="">Select Vendor</option>
            </select>
            @error('vender_id')
                <p class="text-danger small">{{$message}}</p>
            @enderror
        </div>
    </div>

    <!-- Submit Button -->
    <div class="mb-3">
        <input type="submit" value="Insert Product" class="btn btn-primary w-100">
    </div>
</form>

    </div>
               <!-- End Container Fluid -->

               <!-- ========== Footer Start ========== -->
               <footer class="footer">
                    <div class="container-fluid">
                         <div class="row">
                              <div class="col-12 text-center">
                                   <script>document.write(new Date().getFullYear())</script> &copy; Larkon. Crafted by <iconify-icon icon="iconamoon:heart-duotone" class="fs-18 align-middle text-danger"></iconify-icon> <a href="" class="fw-bold footer-text" target="_blank">Techzaa</a>
                              </div>
                         </div>
                    </div>
               </footer>
               <!-- ========== Footer End ========== -->

          </div>
          <!-- ==================================================== -->
          <!-- End Page Content -->
          <!-- ==================================================== -->

@endsection          

