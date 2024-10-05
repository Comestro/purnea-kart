<div class="col-lg-6">
    <div class="card border">
        <div class="card-header py-2 align-items-center d-flex justify-content-between">
            <h5 class="m-0 fw-normal">Meta Copyright</h5>
            <button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">Edit</button>
        </div>
        <div class="card-body">
            <div class="d-flex">
                @if ($isEdit)
                <input wire:model="copyright" type="text" id="copyright" class="form-control" placeholder="copyright Section Footer Text">
                    <button wire:click="update" type="submit" class="rounded-0 btn btn-primary">save</button>
                @else
                    <p class="lead  text-capitalize font-medium text-dark mb-0">
                        @if (!empty($copyright))
                            {{ $copyright }}
                        @else
                            <i class="text-muted">Meta Copyright Text is Empty</i>
                        @endif

                    </p>
                @endif
            </div>
            @error('copyright')
                <p class="text-danger small">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>
