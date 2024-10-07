<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center gap-1">
                <h4 class="card-title flex-grow-1">All Categories List</h4>
                <a href="{{ route('create.category') }}" class="btn btn-sm btn-primary">
                    Add Category
                </a>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        This Month
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="#!" class="dropdown-item">Download</a>
                        <!-- item-->
                        <a href="#!" class="dropdown-item">Export</a>
                        <!-- item-->
                        <a href="#!" class="dropdown-item">Import</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-hover table-centered">
                        <thead class="bg-light-subtle">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                        <label class="form-check-label" for="customCheck1"></label>
                                    </div>
                                </th>
                                <th>Category Name</th>
                                <th>Category slug</th>
                                <th>Category Description</th>
                                <th>Category Logo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $cat)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2"></label>
                                        </div>
                                    </td>
                                    <td>{{ $cat->cat_title }}</td>
                                    <td>{{ $cat->cat_slug }}</td>
                                    <td>{{ $cat->cat_description }}</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div
                                                class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                <img src="{{ asset('storage/public/image/category/' . $cat->image) }}"
                                                    alt="" class="avatar-md">
                                            </div>
                                            <p class="text-dark fw-medium fs-15 mb-0">{{ $cat->name }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="#!" class="btn btn-light btn-sm"><iconify-icon
                                                    icon="solar:eye-broken"
                                                    class="align-middle fs-18"></iconify-icon></a>
                                            <a href="{{ route('edit.category', $cat->id) }}"
                                                class="btn btn-soft-primary btn-sm"><iconify-icon
                                                    icon="solar:pen-2-broken"
                                                    class="align-middle fs-18"></iconify-icon></a>
                                            <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon
                                                    icon="solar:trash-bin-minimalistic-2-broken"
                                                    class="align-middle fs-18"></iconify-icon></a>
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
                        <li class="page-item {{ $category->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link" wire:click="previousPage" wire:loading.attr="disabled"
                                tabindex="-1">Previous</a>
                        </li>

                        @php
                            $currentPage = $category->currentPage();
                            $lastPage = $category->lastPage();
                        @endphp

                        @for ($i = max(1, $currentPage - 1); $i <= min($currentPage + 1, $lastPage); $i++)
                            <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                                <a class="page-link" wire:click="gotoPage({{ $i }})">{{ $i }}</a>
                            </li>
                        @endfor

                        <!-- Next Page Link -->
                        <li class="page-item {{ $category->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" wire:click="nextPage" wire:loading.attr="disabled">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
