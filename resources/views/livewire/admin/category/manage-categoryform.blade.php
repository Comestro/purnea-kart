<div>
    <div class="mb-3 position-relative">
        <div class="input-group">
            <input type="search" class="form-control rounded-pill ps-5" placeholder="Search here.."
                wire:model.live="search">
            <svg xmlns="http://www.w3.org/2000/svg" class="position-absolute top-50 translate-middle-y text-muted"
                style="left: 15px;" width="20" height="20" viewBox="0 0 48 48">
                <path
                    d="M 20.5 6 C 12.509634 6 6 12.50964 6 20.5 C 6 28.49036 12.509634 35 20.5 35 C 23.956359 35 27.133709 33.779044 29.628906 31.75 L 39.439453 41.560547 A 1.50015 1.50015 0 1 0 41.560547 39.439453 L 31.75 29.628906 C 33.779044 27.133709 35 23.956357 35 20.5 C 35 12.50964 28.490366 6 20.5 6 z M 20.5 9 C 26.869047 9 32 14.130957 32 20.5 C 32 23.602612 30.776198 26.405717 28.791016 28.470703 A 1.50015 1.50015 0 0 0 28.470703 28.791016 C 26.405717 30.776199 23.602614 32 20.5 32 C 14.130953 32 9 26.869043 9 20.5 C 9 14.130957 14.130953 9 20.5 9 z">
                </path>
            </svg>
        </div>
    </div>

    {{-- <div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center gap-1">
                <h4 class="card-title flex-grow-1">All Categories List</h4>
                <a href="product-add.html" class="btn btn-sm btn-primary">
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
                                <th>Id</th>
                                <th>Category Name</th>
                                <th>Category slug</th>
                                <th>Category Description</th>
                                <th>Category Logo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $key => $cat)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2"></label>
                                        </div>
                                    </td>
                                    <td>{{$key+1}}</td>
                                    <td>{{ $cat->cat_title }}</td>
                                    <td>{{ $cat->cat_slug }}</td>
                                    <td class="text-truncate" style="width: 50px;">{{ $cat->cat_description }}</td>

                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div
                                                class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                <img src="{{ asset('https://purneakart.s3.ap-south-1.amazonaws.com/public/image/category/' . $cat->image) }}"
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
                                            <a href="#" class="btn btn-soft-danger btn-sm"><iconify-icon
                                                    icon="solar:trash-bin-minimalistic-2-broken"
                                                    class="align-middle fs-18"></iconify-icon></a>

                                             <form wire:submit="status({{$cat->id}})">
                                                
                                              @if ($isActive)
                                              <button type="submit" class="btn  btn-soft-sucess btn-sm" wire:loading.attr="disabled">Active</button>

                                             
                                                @else
                                                <button type="submit" class="btn  btn-soft-red btn-sm" wire:loading.attr="disabled">
                                                    Inactive
                                                </button>
                                               
                                              @endif
                                             </form>       
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
</div> --}}

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center gap-1">
                    <h4 class="card-title flex-grow-1">All Categories List</h4>

                    <a href="{{url ('admin/categories/category-add')}}" class="btn btn-sm btn-primary">
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
                                <tr class="text-center">
                                    <th style="width: 20px;">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1"></label>
                                        </div>
                                    </th>
                                    <th>Categories</th>
                                    <th>Starting Price</th>
                                    <th>Create by</th>
                                    <th>ID</th>
                                    <th>Product Stock</th>
                                    <th>Active</th>
                                    <th>Publish</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $cat)
                                    <tr class="text-center">
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div
                                                    class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                    <img src="{{ asset('https://ronilaravel.s3.amazonaws.com/public/image/category/' . $cat->image) }}"
                                                        alt="" class="avatar-md">
                                                </div>
                                                <div>
                                                    <p class="text-dark fw-medium fs-15 mb-0">{{ $cat->cat_title }}</p>
                                                </div>
                                            </div>

                                        </td>
                                        <td>$70 to $500</td>
                                        <td>Admin</td>
                                        <td>EG37878</td>
                                        <td>1900</td>
                                        <td>
                                                <span class="btn btn-sm {{ $cat->status ? 'btn-soft-success' : 'btn-soft-red' }}">
                                                    {{ $cat->status ? 'Active' : 'Pending' }}
                                                </span>
                                            
                                        </td>
                                        <td>
                                            <form wire:submit.prevent="status({{ $cat->id }})">
                                                <button 
                                                    type="submit" 
                                                    class="btn-toggle {{ $cat->status ? 'active' : 'inactive' }}"
                                                    wire:loading.attr="disabled" 
                                                    aria-pressed="{{ $cat->status ? 'true' : 'false' }}">
                                                </button>
                                            </form>
                                        </td>
                                        
                                        <td>
                                            <div class="d-flex gap-2">
                                                {{-- <a href="#!" class="btn btn-light btn-sm"><iconify-icon
                                                        icon="solar:eye-broken"
                                                        class="align-middle fs-18"></iconify-icon></a> --}}
                                                <a href="{{ route('edit.category', $cat->id) }}"
                                                    class="btn btn-soft-primary btn-sm"><iconify-icon
                                                        icon="solar:pen-2-broken"
                                                        class="align-middle fs-18"></iconify-icon></a>
                                                <a href="#" class="btn btn-soft-danger btn-sm"><iconify-icon
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
                                    <a class="page-link"
                                        wire:click="gotoPage({{ $i }})">{{ $i }}</a>
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

</div>
