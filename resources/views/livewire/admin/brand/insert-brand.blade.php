<div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Brand Information</h4>
        </div>
        <form action="#" wire:submit.prevent="store" method="post">
            <div class="card-body">
                <div class="row">                    
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="brand-title" wire:model.live="brand_name" class="form-label">Brand Title</label>
                            <input type="text" id="brand-title" name="brand_name" class="form-control"
                                placeholder="Enter Title">
                            @error('brand_name')
                                <span class="text-red h5">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>                    
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="brand-slug" wire:model="brand_slug" class="form-label">Brand Slug</label>
                            <input type="text" id="brand-slug" name="brand_slug" class="form-control"
                                placeholder="Enter slug" readonly>
                            @error('brand_slug')
                                <span class="text-red h5">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="brand-description" wire:model="brand_description" class="form-label">Brand
                                Description</label>
                            <textarea class="form-control bg-light-subtle" id="brand-description" rows="5" placeholder="Type description"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-3 bg-light mb-3 rounded">
                <div class="row justify-content-end g-2">
                    <div class="col-lg-2">
                        <button type="submit"
                            class="btn btn-outline-secondary bg-orange text-white w-100">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
