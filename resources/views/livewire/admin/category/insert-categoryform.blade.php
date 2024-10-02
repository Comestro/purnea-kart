<div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">General Information</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <div class="mb-3">
                            <label for="category-title" class="form-label">Category Title</label>
                            <input type="text" id="category-title" class="form-control" placeholder="Enter Title">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div>
                        <label for="crater" class="form-label">Created By</label>
                        <select class="form-control" id="crater" data-choices data-choices-groups data-placeholder="Select Crater">
                            <option value="">Select Crater</option>
                            <option value="Seller">Seller</option>
                            <option value="Admin">Admin</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form>
                        <div class="mb-3">
                            <label for="product-stock" class="form-label">Stock</label>
                            <input type="number" id="product-stock" class="form-control" placeholder="Quantity">
                        </div>

                    </form>
                </div>
                <div class="col-lg-6">
                    <div>
                        <div class="mb-3">
                            <label for="product-id" class="form-label">Tag ID</label>
                            <input type="number" id="product-id" class="form-control" placeholder="#******">
                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="mb-0">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control bg-light-subtle" id="description" rows="7" placeholder="Type description"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-3 bg-light mb-3 rounded">
        <div class="row justify-content-end g-2">
            <div class="col-lg-2">
                <button type="submit" class="btn btn-outline-secondary bg-orange text-white w-100">Save Change</button>
            </div>
          
        </div>
    </div>
</div>