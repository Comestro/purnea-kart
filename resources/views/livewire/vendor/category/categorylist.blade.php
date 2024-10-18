<div>
    <div class="content ">

        <div class="mb-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <i class="bi bi-globe2 small me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Category</li>
                    <li class="breadcrumb-item active" aria-current="page">List</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex gap-4 align-items-center">
                            <div class="d-none d-md-flex">All category</div>
                            <div class="d-md-flex gap-4 align-items-center">
                                <form class="mb-3 mb-md-0">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <select class="form-select">
                                                <option>Sort by</option>
                                                <option value="desc">Desc</option>
                                                <option value="asc">Asc</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select class="form-select">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                                <option value="50">50</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"
                                    aria-haspopup="true" aria-expanded="false">Actions</a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">Action</a>
                                    <a href="#" class="dropdown-item">Another action</a>
                                    <a href="#" class="dropdown-item">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-custom table-lg mb-0" id="category">
                        <thead>
                            <tr>
                                <th>
                                    <input class="form-check-input select-all" type="checkbox"
                                        data-select-all-target="#category" id="defaultCheck1">
                                </th>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Category </th>
                                <th>Category slug</th>
                                <th>Description</th>
                                {{-- <th>Created At</th> --}}
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key=>$cat)
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <a href="#">{{$cat->id}}</a>
                                </td>
                                <td>
                                    <a href="#">
                                        <img src="{{ asset('https://purneakart.s3.ap-south-1.amazonaws.com/public/image/category/' . $cat->image) }}" class="rounded"
                                            width="40" alt="...">
                                    </a>
                                </td>
                                <td>{{ $cat->cat_title }}</td>
                                <td>
                                    <span class="text-success">{{ $cat->cat_slug }}</span>
                                </td>
                                <td>{{ $cat->cat_description }}</td>
                                {{-- <td>02/03/2021</td> --}}
                                <td class="text-end">
                                    <div class="d-flex">
                                        <div class="dropdown ms-auto">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-floating"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">Action</a>
                                                <a href="#" class="dropdown-item">Another action</a>
                                                <a href="#" class="dropdown-item">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                           
                           
                        </tbody>
                    </table>
                </div>
               <!-- Pagination -->
<div class="card-footer border-top">
    <nav class="mt-4" aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <!-- Previous Page Link -->
            <li class="page-item {{ $categories->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link" wire:click="previousPage" wire:loading.attr="disabled" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>

            @php
                $currentPage = $categories->currentPage();
                $lastPage = $categories->lastPage();
            @endphp

            <!-- Page Number Links -->
            @for ($i = 1; $i <= $lastPage; $i++)
                <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                    <a class="page-link" wire:click="gotoPage({{ $i }})">{{ $i }}</a>
                </li>
            @endfor

            <!-- Next Page Link -->
            <li class="page-item {{ $categories->hasMorePages() ? '' : 'disabled' }}">
                <a class="page-link" wire:click="nextPage" wire:loading.attr="disabled" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>

            </div>
            <div class="col-md-4">
                <h5 class="mb-4">Filter category</h5>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                            aria-expanded="true" data-bs-target="#keywordsCollapseExample" role="button">
                            <div>Keywords</div>
                            <div class="bi bi-chevron-down"></div>
                        </div>
                        <div class="collapse show mt-4" id="keywordsCollapseExample">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Phone, Headphone, Shoe ...">
                                <button class="btn btn-outline-light" type="button">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                            aria-expanded="true" data-bs-target="#categoriesCollapseExample" role="button">
                            <div>Categories</div>
                            <div class="bi bi-chevron-down"></div>
                        </div>
                        <div class="collapse show mt-4" id="categoriesCollapseExample">
                            <div class="d-flex flex-column gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <label class="form-check-label" for="categoryCheck1">
                                        All
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck2">
                                    <label class="form-check-label" for="categoryCheck2">
                                        Accessories
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck3">
                                    <label class="form-check-label" for="categoryCheck3">
                                        Phone
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck4">
                                    <label class="form-check-label" for="categoryCheck4">
                                        Headphone
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck5">
                                    <label class="form-check-label" for="categoryCheck5">
                                        Camera
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                            aria-expanded="true" data-bs-target="#priceCollapseExample" role="button">
                            <div>Price</div>
                            <div class="bi bi-chevron-down"></div>
                        </div>
                        <div class="collapse show mt-4" id="priceCollapseExample">
                            <input id="price-filter">
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                            aria-expanded="true" data-bs-target="#colorsCollapseExample" role="button">
                            <div>Colors</div>
                            <div class="bi bi-chevron-down"></div>
                        </div>
                        <div class="collapse show mt-4" id="colorsCollapseExample">
                            <div class="color-filter-group d-flex gap-3">
                                <input class="form-check-input" type="checkbox" value="#1fa0c6" aria-label="...">
                                <input class="form-check-input" type="checkbox" checked="" value="green"
                                    aria-label="...">
                                <input class="form-check-input" type="checkbox" checked="" value="#c61faa"
                                    aria-label="...">
                                <input class="form-check-input" type="checkbox" value="#1fc662" aria-label="...">
                                <input class="form-check-input" type="checkbox" value="#9dc61f" aria-label="...">
                                <input class="form-check-input" type="checkbox" checked="" value="#c67b1f"
                                    aria-label="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>