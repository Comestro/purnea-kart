<div class="col-lg-6">
    {{-- display the existing meta title if it exists --}}
    @if ($isEdit)
        <div class="mb-3">
            <label for="meta-name" class="form-label">Meta Title</label>
            <input wire:model="meta_title" type="text" id="meta-name" class="form-control" placeholder="Title">
        </div>
        <div class="mb-3">
            <button wire:click="update" type="submit" id="saveButton1" class="  btn btn-primary">save</button>
        </div>
    @else
        <div class="mb-3">
            <label for="meta-name" class="form-label">Meta Title</label>
            <p class="text-lg font-medium">{{ $meta_title }}</p>
        </div>
        <button wire:click="toggle">edit</button>
    @endif


</div>
