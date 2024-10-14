<div>

    <div x-data="{ showAlert: true }" x-show="showAlert">
        @if ($errors->any())
            <div class="alert alert-danger relative p-4 border border-red-400 bg-red-100 text-red-700 rounded">
                <button @click="showAlert = false"
                    class="absolute top-0 right-0 mt-2 mr-2 text-red-700 font-bold">&times;</button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Banner Information</h4>
                </div>

                <div class="container">


                    <form action="" wire:submit.prevent="store" enctype="multipart/form-data">

                        
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" wire:model="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="alt" class="form-label">Alt Text</label>
                                <input type="text" class="form-control" id="alt" wire:model="alt"
                                    placeholder="Enter alt text" value="{{ old('alt') }}">
                            </div>
                       
                        
                            <div class=" mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" wire:model="status">
                                    <option value="1" {{ old('status') == 1 ? 'Active' : '' }}>Active</option>
                                    <option value="0" {{ old('status') == 0 ? 'Inactive' : '' }}>Inactive</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="expiry_date" class="form-label">Expiry Date</label>
                                <input type="date" class="form-control" id="expiry_date" wire:model="expiry_date"
                                    value="{{ old('expiry_date') }}">
                            </div>
                        
                        <div class="mb-3">
                            <div class="row">
                                
                                <div class="col-lg-12">
                                    <div class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone"
                                        data-previews-container="#file-previews"
                                        data-upload-preview-template="#uploadPreviewTemplate">
                                        <label for="dropzone-file" class="form-label">

                                            <div class="dz-message needsclick">
                                                <i class="bx bx-cloud-upload fs-48 text-primary"></i>
                                                <h3 class="mt-2 fs-5">Drop your images here, or <span
                                                        class="text-primary">click to
                                                        browse</span></h3>
                                                <span class="text-muted fs-13">
                                                    1600 x 1200 (4:3) recommended. PNG, JPG, and GIF files are allowed
                                                </span>
                                            </div>

                                            <input id="dropzone-file" wire:model="image_path" type="file"
                                                class="d-none" />
                                        </label>

                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <div class="dropzone">
                                        <!-- Loading spinner when uploading -->
                                        <div wire:loading wire:target="image_path" class="text-center">
                                            <div class="spinner-border text-muted" role="status"></div>
                                            <p class="mt-2">Uploading...</p>
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

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Create</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">

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
                                @foreach ($banners as $key=>$banner)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div
                                                    class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                    <img src="{{ asset('storage/public/image/banner/' . $banner->image_path) }}"
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
                                        <td><div class="d-inline-flex align-items-center">
                                            <button 
                                                wire:click="toggleStatus({{ $banner->id }})"
                                                class=" btn-toggle {{ $banner->status ? 'active' : '' }}" 
                                                aria-pressed="{{ $banner->status ? 'true' : 'false' }}">
                                                {{-- <span class="sr-only">{{ $banner->status ? 'Deactivate' : 'Activate' }}</span> --}}
                                            </button>
                                        </div>
                                        
                                       
                                        </td>


                                        <td>
                                            <div class="d-flex gap-2">
                                                
                                                <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon
                                                        icon="solar:pen-2-broken"
                                                        class="align-middle fs-18"></iconify-icon></a>
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
                                <a class="page-link" wire:click="gotoPage({{ $i }})">{{ $i }}</a>
                            </li>
                        @endfor

                        <!-- Next Page Link -->
                        <li class="page-item {{ $banners->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" wire:click="nextPage" wire:loading.attr="disabled">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            </div>
        </div>
    </div>
</div>
 <!-- Optional CSS to style toggle -->
