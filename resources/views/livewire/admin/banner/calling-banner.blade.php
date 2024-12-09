<div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center gap-1">
            <h4 class="card-title flex-grow-1">All Banner List</h4>

        </div>
        <div>
            <div class="table-responsive">
                <table class="table align-middle mb-0 table-hover table-centered">
                    <thead class="bg-light-subtle">
                        <tr>
                            {{-- <th style="width: 20px;">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                    <label class="form-check-label" for="customCheck1"></label>
                                </div>
                            </th> --}}
                            <th>Id</th>
                            <th>Image</th>
                            <th>title</th>
                            <th>Alt</th>
                            <th>Active/Inactive</th>

                            <th>Expiry Date</th>
                            <th>Status</th>
                            <th>Action</th>


                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($banners as $key => $banner)
                            <tr>

                                <td>{{ $key + 1 }}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div
                                            class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('image/banner/' . $banner->image_path) }}"
                                                alt="" class="avatar-md">

                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <p class="text-dark fw-medium fs-15 mb-0">{{ $banner->title }}</p>
                                </td>
                                <td>{{ $banner->alt }}</td>
                                <td>{!! $banner->status ? '<span class="text-success">Active</span>' : '<span class="text-primary">Inactive</span>' !!}</td>
                                <td>{{ \Carbon\Carbon::parse($banner->expiry_date)->diffForHumans() }}</td>
                                <td>
                                    <div class="d-inline-flex align-items-center">
                                        <button wire:click="toggleStatus({{ $banner->id }})"
                                            class=" btn-toggle {{ $banner->status ? 'active' : '' }}"
                                            aria-pressed="{{ $banner->status ? 'true' : 'false' }}">
                                            {{-- <span class="sr-only">{{ $banner->status ? 'Deactivate' : 'Activate' }}</span> --}}
                                        </button>
                                    </div>
                                    <!--


                                    <td>
                                        <div class="d-inline-flex align-items-center">
                                            <button wire:click="toggleStatus({{ $banner->id }})"
                                                class=" btn-toggle {{ $banner->status ? 'active' : '' }}"
                                                aria-pressed="{{ $banner->status ? 'true' : 'false' }}">
                                                {{-- <span class="sr-only">{{ $banner->status ? 'Deactivate' : 'Activate' }}</span> --}}
                                            </button>
                                        </div>



                                    </td> -->


                                <td>
                                    <div class="d-flex gap-2">

                                        <button wire:click="openModal({{ $banner->id }})"
                                            class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken"
                                                class="align-middle fs-18"></iconify-icon></button>


                                        <button wire:confirm="Are you want to delete this Banner ? "
                                            wire:click="deleteBanner({{ $banner->id }})" type="button"
                                            class="btn btn-soft-danger btn-sm"><iconify-icon
                                                icon="solar:trash-bin-minimalistic-2-broken"
                                                class="align-middle fs-18"></iconify-icon></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- end table-responsive -->
        </div>
        <!-- Pagination -->
        <div class="card-footer border-top">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end mb-0">
                    {{-- <li class="page-item {{ $banners->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" wire:click="previousPage" wire:loading.attr="disabled"
                            tabindex="-1">Previous</a>
                    </li> --}}
                    <div class="card-footer border-top">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item {{ $banners->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link" wire:click="previousPage" wire:loading.attr="disabled"
                                        tabindex="-1">Previous</a>
                                </li>

                                @php
                                    $currentPage = $banners->currentPage();
                                    $lastPage = $banners->lastPage();
                                @endphp
                               

                                @for ($i = max(1, $currentPage - 1); $i <= min($currentPage + 1, $lastPage); $i++)
                                    <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                                        <a class="page-link"
                                            wire:click="gotoPage({{ $i }})">{{ $i }}</a>
                                    </li>
                                @endfor
                               

                                <!-- Next Page Link -->
                                <li class="page-item {{ $banners->hasMorePages() ? '' : 'disabled' }}">
                                    <a class="page-link" wire:click="nextPage" wire:loading.attr="disabled">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Next Page Link -->
                    {{-- <li class="page-item {{ $banners->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" wire:click="nextPage" wire:loading.attr="disabled">Next</a>
                    </li> --}}
                </ul>
            </nav>
        </div>
    </div>


    @if($isModalOpen)
    <div class="modal fade show d-block" tabindex="-1" style="background-color: rgba(0, 0, 0, 0.5);">

        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Banner</h5>
                    <button type="button" class="btn-close" aria-label="Close" wire:click="closeModal"></button>
                </div>


                <div class="modal-body">
                    <form wire:submit.prevent="updateBanner" method="POST">

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title"
                                        value="{{ $banner->title }}" wire:model="title" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="alt" class="form-label">Alt Text</label>
                                    <input type="text" class="form-control" id="alt" wire:model="alt"
                                        placeholder="Enter alt text" value="{{ old('alt') }}">
                                </div>
                            </div>

                        </div>
                        <div class="mb-3">
                            <div class="row">
                              
                                <div class="col-lg-6">
                                    <label for="expiry_date" class="form-label">Expiry
                                        Date</label>
                                    <input type="date" class="form-control" id="expiry_date"
                                        wire:model="expiry_date" value="">
                                </div>
                            </div>

                        </div>

                        <div class="mb-3">
                            <div class="row">
                                
                                <div class="col-lg-6">
                                    <div class="dropzone" id="myAwesomeDropzone" style="height: 0px"
                                        data-plugin="dropzone" data-previews-container="#file-previews"
                                        data-upload-preview-template="#uploadPreviewTemplate">
                                        <label for="dropzone-file" class="form-label">

                                            <div class="dz-message needsclick">
                                                <i class="bx bx-cloud-upload fs-49 text-primary"></i>
                                                <h3 class="mt-2 fs-13">Drop
                                                    your images here, or
                                                    <span class="text-primary">click
                                                        to
                                                        browse</span>
                                                </h3>

                                            </div>

                                            <input id="dropzone-file" wire:model="image_path" type="file"
                                                class="d-none" />
                                        </label>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="dropzone">
                                        <!-- Loading spinner when uploading -->
                                        <div wire:loading wire:target="image_path" class="text-center">
                                            <div class="spinner-border text-muted" role="status"></div>
                                            <p class="mt-2">Uploading...
                                            </p>
                                        </div>

                                        <!-- Image preview once uploaded -->
                                        <div wire:loading.remove wire:target="image_path"
                                            class="w-100 h-100 d-flex align-items-center justify-content-center">
                                            @if ($image_path)
                                                <img src="{{ $image_path->temporaryUrl() }}" class="img-fluid"
                                                    alt="path Preview" />
                                            @else
                                                <p>path Preview</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" wire:click="closeModal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>

               

            </div>
        </div>
    </div>
    @endif
</div>
