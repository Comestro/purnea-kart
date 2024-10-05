<div class="col-lg-6">

    @if ($isEdit)
        <div class="mb-3">
            <div class="mb-3">
                <label for="copyright" class="form-label">Copyright</label>
                <input wire:model="copyright" type="text" id="copyright" class="form-control" placeholder="copyright....">
            </div>
            <div class="mb-3">
                <button wire:click="update" type="submit" id="saveButton5" class=" btn btn-primary">save</button>
            </div>
        </div>
    @else
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <div>
                <label for="meta-copyright" class="form-label">Meta Copyright</label>
                <p>{{ $copyright }}</p>
            </div>
            <button wire:click="toggle"
                class="btn btn-outline-primary ">Edit</button>
        </div>
    @endif

</div>
