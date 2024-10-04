<div class="container mt-4">
    <form wire:submit.prevent="update" method="POST" enctype="multipart/form-data">
        <div class="p-4 bg-light rounded shadow mb-4">
            <label class="form-label fw-bold">Product Images</label>

            <div class="mb-3">
                <!-- Always show a single file input for uploading images one by one -->
                <div class="input-group">
                    <input type="file" wire:model="path" class="form-control">
                    <button type="submit" class="btn btn-dark">SAVE</button>
                </div>
                <div wire:loading wire:target="path" class="mt-2 text-muted">Uploading...</div>

                <!-- Display the preview of the uploaded image -->
                @if ($path)
                    <div class="mt-4">
                        <img src="{{ $path->temporaryUrl() }}" class="img-thumbnail" style="width: 100px; height: 100px;">
                    </div>
                @endif
            </div>

            <!-- Show existing product images with delete option -->
            <div class="mt-4">
                @if($productImages && count($productImages) > 0)
                    <div class="row">
                        @foreach($productImages as $image)
                            <div class="col-md-4 mb-3">
                                <div class="position-relative">
                                    <!-- Product image -->
                                    <img src="{{ asset('storage/public/image/product/' . $image->path) }}" class="img-fluid rounded shadow">
                                    
                                    <!-- Delete button -->
                                    <button type="button" wire:click="deleteImage({{ $image->id }})"
                                            class="btn btn-danger btn-sm position-absolute top-0 end-0 m-1">
                                       delete
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else 
                    <span>No Images</span>
                @endif
            </div>
        </div>
    </form>

    <!-- Display flash message -->
    @if(session()->has('message'))
        <div class="mt-4 alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>
