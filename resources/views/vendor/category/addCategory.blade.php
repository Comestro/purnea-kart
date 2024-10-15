@extends('vendor.include.vendorBase')

@section('content')
    <!-- content -->
    <div class="container mx-auto p-6">
        <form class="row g-3 needs-validation p-12 mx-4 my-4" novalidate>
            <!-- Parent Category -->
            <div class="col-md-6">
                <label for="parentCategory" class="form-label">Parent Category (optional)</label>
                <select class="form-select" id="parentCategory" name="parent_category_id">
                    <option value="">No Parent</option>
                    <option value="1">Category 1</option>
                    <option value="2">Category 2</option>
                </select>
            </div>

            <!-- Category Title -->
            <div class="col-md-6">
                <label for="catTitle" class="form-label">Category Title</label>
                <input type="text" class="form-control" id="catTitle" name="cat_title" required>
                <div class="invalid-feedback">
                    Please provide a category title.
                </div>
            </div>

            <!-- Category Image -->
           
            <!-- Category Slug -->
            <div class="col-md-6">
                <label for="catSlug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="catSlug" name="cat_slug" placeholder="Auto-generated slug"
                    readonly>
            </div>

            <!-- Category Description -->
            <div class="col-md-12 mb-4">
                <label for="catDescription" class="form-label">Category Description</label>
                <div class="card">
                    <div class="card-body">
                        <textarea id="editor" name="cat_description" rows="4" required></textarea>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
        <div class="card">
            <div class="card-body">
                <form action="/file-upload" class="dropzone">
                    <input type="file" name="file" />
                </form>
            </div>
            <div class="demo-code-preview">

            </div>
        </div>
    </div>
    <!-- ./ content -->
@endsection
