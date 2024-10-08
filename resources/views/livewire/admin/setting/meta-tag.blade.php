<div class="col-lg-4">
    <div class="card border">
        <div class="card-header py-2 align-items-center d-flex justify-content-between">
            <h5 class="m-0 fw-normal">Meta Tag Keyword</h5>            
            <button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">{{!$isEdit? 'Edit':'Cancel'}}</button>            
        </div>
        <div class="card-body">
            <div class="d-flex">
                @if ($isEdit)
                    <input wire:model="meta_tag" type="text" id="meta-tag" class="form-control rounded-0"
                        placeholder="Enter word seprate with comma (,)">
                    <button wire:click="update" type="submit" class="rounded-0 btn btn-primary">save</button>
                @else
                    <p class="lead  text-capitalize font-medium text-dark mb-0">
                        @if (!empty($meta_tag))
                            <div class="mx-auto">
                                <div wire:loading wire:target="toggle" class="p-3">
                                    <div class="spinner-border text-muted" role="status"></div>
                                    <p class="mt-2 mb-0">Loading...</p>
                                </div>
                                <div wire:loading.remove wire:target="toggle"
                                    class="lead text-capitalize font-medium text-dark mb-0"> {{ $meta_tag }}
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
                                    <i class="text-muted">Meta Tags is Empty</i>
                                </div>
                            </div>
                        @endif

                    </p>
                @endif
            </div>
            @error('meta_title')
                <p class=" small">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>
