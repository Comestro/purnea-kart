<div class="col-lg-12">
    <div class="card border">
        <div class="card-header py-2 align-items-center d-flex justify-content-between">
            <h5 class="m-0 fw-normal">Meta Description</h5>
            {!! !$isEdit ? '<button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">Edit</button>' :  '<button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">Cancel</button>'!!}
        </div>
        <div class="card-body">
            <div class="d-flex flex-column gap-2">
                @if ($isEdit)
                    <textarea wire:model="meta_description" class="form-control bg-light-subtle" id="meta-description" rows="4"
                        placeholder="Type description" maxlength="155"></textarea>
                    <div class="d-flex justify-content-between align-items-center">
                        <p>Write 1 to 155 characters</p>
                        <button wire:click="update" type="submit" class="btn btn-primary align-self-end">save</button>
                    </div>
                @else
                    <p class="lead text-capitalize font-medium text-dark mb-0">
                        @if (!empty($meta_description))
                        <div class="mx-auto">
                            <div wire:loading wire:target="toggle" class="p-3">
                                <div class="spinner-border text-muted" role="status"></div>
                                <p class="mt-2 mb-0">Loading...</p>
                            </div>
                            <div wire:loading.remove wire:target="toggle"
                                class="lead text-capitalize font-medium text-dark mb-0"> {{ $meta_description }}
                            </div>
                        </div>
                        @else                            
                        <i class="text-muted">Meta Description is Empty</i>
                            
                        @endif

                    </p>
                @endif
            </div>
            @error('meta_description')
                <p class="text-danger small">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>
