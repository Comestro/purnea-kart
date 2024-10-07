<div>
<div class="mb-3 position-relative">
    <div class="input-group">
        <input type="search"
               class="form-control rounded-pill ps-5"
               placeholder="Search here.."
               wire:model.live="search">
        <svg xmlns="http://www.w3.org/2000/svg"
             class="position-absolute top-50 translate-middle-y text-muted"
             style="left: 15px;"
             width="20"
             height="20"
             viewBox="0 0 48 48">
            <path d="M 20.5 6 C 12.509634 6 6 12.50964 6 20.5 C 6 28.49036 12.509634 35 20.5 35 C 23.956359 35 27.133709 33.779044 29.628906 31.75 L 39.439453 41.560547 A 1.50015 1.50015 0 1 0 41.560547 39.439453 L 31.75 29.628906 C 33.779044 27.133709 35 23.956357 35 20.5 C 35 12.50964 28.490366 6 20.5 6 z M 20.5 9 C 26.869047 9 32 14.130957 32 20.5 C 32 23.602612 30.776198 26.405717 28.791016 28.470703 A 1.50015 1.50015 0 0 0 28.470703 28.791016 C 26.405717 30.776199 23.602614 32 20.5 32 C 14.130953 32 9 26.869043 9 20.5 C 9 14.130957 14.130953 9 20.5 9 z"></path>
        </svg>
    </div>
</div>
    <div class="table-responsive">
        <table class="table align-middle mb-0 table-hover table-centered">
            <thead class="bg-light-subtle">
                <tr>
                    <th style="width: 20px;">
                        <div class="form-check ms-1">
                            <input type="checkbox" class="form-check-input" id="selectAll">
                            <label class="form-check-label" for="selectAll"></label>
                        </div>
                    </th>
                    <th scope="col">Id</th>
                    <th scope="col">Brand Name</th>
                    <th scope="col">Brand Slug</th>
                    <th scope="col">Brand Description</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brands as $item)
                    <tr>
                        <td>
                            <div class="form-check ms-1">
                                <input type="checkbox" class="form-check-input" id="customCheck{{ $item->id }}">
                                <label class="form-check-label" for="customCheck{{ $item->id }}">&nbsp;</label>
                            </div>
                        </td>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->brand_name }}</td>
                        <td>{{ $item->brand_slug }}</td>
                        <td>{{ $item->brand_description }}</td>
                        <td>
                            <img src="{{ $item->logo ? asset('storage/public/logo/brand/' . $item->logo) : asset('storage/logo/brand/default.png') }}"
                                alt="Logo" style="max-width: 100px; max-height: 100px;">
                        </td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="" class="btn btn-light btn-sm">
                                    <iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                                </a>
                                <a href="{{ route('edit_brand',$item->id) }}" class="btn btn-soft-primary btn-sm"  wire:click="editBrand({{ $item->id }})">
                                    <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon>
                                </a>
                                <button wire:click="confirmDelete({{ $item->id }})"
                                    class="btn btn-soft-danger btn-sm"
                                    aria-label="Delete brand {{ $item->brand_name }}">
                                    <iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- <div class="modal fade" id="brandModal" tabindex="-1" role="dialog" aria-labelledby="brandModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div>
                <div class="card border-0 shadow-sm bg-white">
                    <form wire:submit.prevent="saveBrand">
                        <div class="card-body">
                            <div class="mb-4 row g-3">
                                <div class="col-xl-6">
                                    <label class="form-label">Brand Name</label>
                                    <input type="text" placeholder="Enter your Brand name" class="form-control" wire:model="brand_name" />
                                    @error('brand_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-xl-6">
                                    <label for="slug" class="form-label">Brand Slug</label>
                                    <input type="text" id="brand_slug" class="form-control bg-light" wire:model="brand_slug" readonly />
                                    @error('brand_slug')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Brand Logo</label>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="dropzone-file" class="w-100">
                                            <div class="border border-secondary border-dashed rounded d-flex align-items-center justify-content-center" style="height: 200px; cursor: pointer;">
                                                <div class="text-center">
                                                    <svg class="mb-3" style="width: 2rem; height: 2rem;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                                    </svg>
                                                    <p>Click to upload or drag and drop</p>
                                                    <p class="text-muted">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                                </div>
                                            </div>
                                            <input id="dropzone-file" type="file" class="d-none" wire:model="logo" />
                                        </label>
                                        @error('logo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <div class="border flex border-secondary border-dashed rounded d-flex align-items-center justify-content-center" style="height: 200px;">
                                            <div wire:loading class="text-center">
                                                <div class="spinner-border text-muted" role="status"></div>
                                                <p class="mt-2">Uploading...</p>
                                            </div>
                                            <div wire:loading.remove class="w-100 h-100 d-flex align-items-center justify-content-center">
                                                @if ($logo)
                                                    <img src="{{ $logo->temporaryUrl() }}" class="img-fluid" />
                                                @else
                                                    <p>Logo Preview</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Brand Description</label>
                                <textarea rows="6" placeholder="Type your message" class="form-control" wire:model="brand_description"></textarea>
                                @error('brand_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-success w-100">Create</button>
                            @if (session()->has('message'))
                                <div class="mt-4 p-2 bg-success text-white rounded">{{ session('message') }}</div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Pagination -->
    <div class="card-footer border-top">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end mb-0">
                <li class="page-item {{ $brands->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" wire:click="previousPage" wire:loading.attr="disabled" tabindex="-1">Previous</a>
                </li>

                @php
                    $currentPage = $brands->currentPage();
                    $lastPage = $brands->lastPage();
                @endphp

                @for ($i = max(1, $currentPage - 1); $i <= min($currentPage + 1, $lastPage); $i++)
                    <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                        <a class="page-link" wire:click="gotoPage({{ $i }})">{{ $i }}</a>
                    </li>
                @endfor

                <li class="page-item {{ $brands->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link" wire:click="nextPage" wire:loading.attr="disabled">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
