<div class="col-lg-6">

    <div class="card border h-auto">
        {{-- this is the card header --}}
        <div class="card-header py-2 align-items-center d-flex justify-content-between">
            <h5 class="m-0 fw-normal">Meta Logo</h5>
                <button wire:click="toggle" class="btn-link text-primary btn align-items-center p-0">{{!$isEdit? 'Edit':'Cancel'}}</button>
        </div>

        {{-- this is the card body --}}
        <div class="card-body">
            <div class="d-flex">
                @if ($isEdit)
                    <input wire:model="meta_logo" type="file" class="form-control" id="meta_logo"
                        placeholder="meta logo section">
                    <button wire:click="update" type="submit" class="rounded-0 btn btn-primary">save</button>
                @else
                    <p class="lead text-capitalize font-medium text-dark mb-0">
                        @if (!empty($meta_logo))
                            <div class="mx-auto">
                                <div wire:loading wire:target="toggle" class="p-3">
                                    <div class="spinner-border text-muted" role="status"></div>
                                    <p class="mt-2 mb-0">Loading...</p>
                                </div>
                                <div wire:loading.remove wire:target="toggle"
                                    class="lead text-capitalize font-medium text-dark mb-0">

                                    <img src="{{ asset('storage/images/setting/' . $meta_logo) }}" alt="meta logo"
                                    class="img-thumbnail w-50 h-25">
                                   </div>
                            </div>
                        @else
                        <div class="mx-auto">
                            <div wire:loading wire:target="toggle" class="p-3">
                                <div class="progress-bar progress-bar-striped text-muted " style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" role="status"></div>
                                <p class="mt-2 mb-0">Loading...</p>
                            </div>
                                <h1 class="text-5xl text-slate-100">Logo Upload Here</h1>
                        @endif
                    </p>
                @endif
            </div>
            @error('meta_logo')
                <p class=" small">{{ "Meta logo should be Of dimension 300 X 100" }}</p>
            @enderror
        </div>
    </div>
</div>
