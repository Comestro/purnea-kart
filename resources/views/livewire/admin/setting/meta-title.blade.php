<div class="col-lg-6">
    <div class="card border">
        <div class="card-header py-2 align-items-center d-flex justify-content-between">
            <h5 class="m-0 fw-normal">Meta Title</h5>
            {!! !$isEdit
                ? '<button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">Edit</button>'
                : '<button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">Cancel</button>' !!}

        </div>
        <div class="card-body">
            <div class="d-flex align-items-center">
                @if ($isEdit)
                    <input wire:model="meta_title" type="text" id="meta-name" class="form-control rounded-0"
                        placeholder="Title">
                    <button wire:click="update" type="submit" id="saveButton1"
                        class="rounded-0 btn btn-primary ms-2">Save</button>
                @else
                    <p class="lead text-capitalize font-medium text-dark mb-0">
                        @if (!empty($meta_title))
                            <div class="mx-auto">
                                <div wire:loading wire:target="toggle" class="p-3">
                                    <div class="spinner-border text-muted" role="status"></div>
                                    <p class="mt-2 mb-0">Loading...</p>
                                </div>
                                <div wire:loading.remove wire:target="toggle"
                                    class="lead text-capitalize font-medium text-dark mb-0"> {{ $meta_title }}
                                </div>
                            </div>
                        @else
                            <div class="mx-auto">
                                <div wire:loading wire:target="toggle" class="p-3">
                                    <div class="spinner-border text-muted" role="status"></div>
                                    <p class="mt-2 mb-0">Loading...</p>
                                </div>
                                <div wire:loading.remove wire:target="toggle"
                                    class="lead text-capitalize font-medium text-dark mb-0">
                                    <i class="text-muted">Meta Title is Empty</i>
                                </div>
                            </div>
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
