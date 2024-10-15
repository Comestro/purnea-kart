@extends('vendor.include.vendorBase')

@section('content')
    <!-- content -->
    <div class="container mx-auto p-6">
        <form class="row g-3 needs-validation p-12 mx-4 my-4" novalidate>
          

            <!-- brand Title -->
            <div class="col-md-6">
                <label for="brandTitle" class="form-label">brand Name</label>
                <input type="text" class="form-control" id="brandTitle" name="brand_title" required>
                <div class="invalid-feedback">
                    Please provide a brand title.
                </div>
            </div>

           
            <!-- brand Slug -->
            <div class="col-md-6">
                <label for="brandSlug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="brandSlug" name="brand_slug" placeholder="Auto-generated slug"
                    readonly>
            </div>
                      <!-- brand Image -->

        <div class=" col-md-6 mb-4">
            <label for="image" class="form-label">Brand logo</label>

            <div class="card-body">

                <div action="/file-upload" class="dropzone">
                    <input type="file" name="file" hidden />
                </div>
            </div>
            <div class="demo-code-preview">

            </div>
        </div>

            <!-- brand Description -->
            <div class="col-md-6 mb-4">
                <label for="brandDescription" class="form-label">brand Description</label>
                <div class="card">
                    <div class="card-body">
                        <textarea id="editor" name="brand_description" rows="4" required></textarea>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
          
    </div>
    <!-- ./ content -->
@endsection
