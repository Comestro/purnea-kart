<div class="col-lg-6">
    <div class="card border">
        <div class="card-header py-2 align-items-center d-flex justify-content-between">
            <h5 class="m-0 fw-normal">Meta Copyright</h5>
            {!! !$isEdit ? '<button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">Edit</button>' :  '<button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">Cancel</button>'!!}
        </div>
        <div class="card-body">
            <div class="d-flex">
                @if ($isEdit)
                    <input wire:model="copyright" type="text" id="copyright" class="form-control"
                        placeholder="copyright Section Footer Text">
                    <button wire:click="update" type="submit" class="rounded-0 btn btn-primary">save</button>
                @else
                    <p class="lead  text-capitalize font-medium text-dark mb-0">
                        @if (!empty($copyright))
                            <div class="mx-auto">
                                <div wire:loading wire:target="toggle" class="p-3">
                                    <div class="spinner-border text-muted" role="status"></div>
                                    <p class="mt-2 mb-0">Loading...</p>
                                </div>
                                <div wire:loading.remove wire:target="toggle"
                                    class="lead text-capitalize font-medium text-dark mb-0"> {{ $copyright }}
                                </div>
                            </div>
                        @else
                            <i class="text-muted">Meta Copyright is Empty</i>
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
