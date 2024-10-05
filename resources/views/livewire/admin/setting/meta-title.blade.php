<div class="col-lg-6">
    {{-- Display the existing meta title if it exists --}}
    @if ($isEdit)
        <div class="mb-4">
            <label for="meta-name" class="form-label fw-bold">Meta Title</label>
            <input wire:model="meta_title" type="text" id="meta-name" class="form-control border-primary" placeholder="Enter Title">
        </div>
        <div class="d-flex justify-content-end mb-4">
            <button wire:click="update" type="submit" id="saveButton1" class="btn btn-primary me-2">Save</button>            
        </div>
    @else
        <div class="card rounded-3 shadow">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <label class="form-label fw-bold">Meta Title</label>
                        <p class="text-lg mb-0">{{ $meta_title }}</p>
                    </div>
                    <button wire:click="toggle" class="btn btn-outline-primary">Edit</button>
                </div>
            </div>
        </div>
    @endif
</div>
