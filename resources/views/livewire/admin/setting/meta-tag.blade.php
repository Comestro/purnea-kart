<div class="col-lg-6">

    @if ($isEdit)
        <div class="mb-3">
            <label for="meta-tag" class="form-label">Meta Tag
                Keyword</label>
            <input wire:model="meta_tag" type="text" id="meta-tag" class="form-control" placeholder="Enter word">
        </div>
        <div class="mb-3">
            <button wire:click="update" type="submit" id="saveButton2" class="  btn btn-primary">save</button>
        </div>
    @else
        <div class="card shadow-lg">
            <div class="card-body">
                <div class="mb-3 d-flex justify-content-between align-items-center">
                    <div>
                        <label for="meta-tag" class="form-label">Meta Tag</label>
                        <p class="text-lg font-medium">{{ $meta_tag }}</p>
                    </div>
                    <button wire:click="toggle" class="btn btn-outline-primary ">Edit</button>
                </div>
            </div>
        </div>
    @endif


</div>
