<div class="col-lg-6">
    <div class="card border">
        <div class="card-header py-2 align-items-center d-flex justify-content-between">
            <h5 class="m-0 fw-normal">Meta Title</h5>
            <button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">Edit</button>
        </div>
        <div class="card-body">
            <div class="d-flex">
                @if ($isEdit)
                    <input wire:model="meta_title" type="text" id="meta-name" class="form-control rounded-0"
                        placeholder="Title">
                    <button wire:click="update" type="submit" id="saveButton1"
                        class="rounded-0 btn btn-primary">save</button>
                @else
                    <p class="lead  text-capitalize font-medium text-dark mb-0">
                        @if (!empty($meta_title))
                            {{ $meta_title }}
                        @else
                            <i class="text-muted">Meta Title is Empty</i>
                        @endif

                    </p>
                @endif
            </div>
            @error('meta_title')
                <p class="text-danger small">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>
