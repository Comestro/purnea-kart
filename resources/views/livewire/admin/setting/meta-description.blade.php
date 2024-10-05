<div class="col-lg-12">
    @if ($isEdit)
        <div class="mb-3">
            <label for="meta-description" class="form-label">Description</label>
            <textarea wire:model="meta_description" class="form-control bg-light-subtle" id="meta-description" rows="4"
                placeholder="Type description"></textarea>
        </div>
        <div class="mb-3">
            <button wire:click="update" type="submit" id="saveButton6" class="btn btn-primary">save</button>
        </div>
    @else
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <div>
                <label for="meta-description" class="form-label">Meta Description</label>
                <p class="text-lg font-medium">{{ $meta_description }}</p>
            </div>
            <button wire:click="toggle"
            class="btn btn-outline-primary">Edit</button>
        </div>
    @endif

</div>
