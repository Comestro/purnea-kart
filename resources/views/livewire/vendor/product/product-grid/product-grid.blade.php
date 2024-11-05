<div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-md-flex gap-4 align-items-center">
                <div class="d-none d-md-flex">All Products</div>
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
    <div class="row g-4">
        @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card card-hover">
                    <a href="#">

                        @if ($product->images)
                            <img src="{{ asset('https://ronilaravel.s3.amazonaws.com/public/image/product/') }}"
                                class="card-img-top" alt="...">
                        @else
                            <img src="{{ asset('assets_vendor/images/products/1.jpg') }}" class="card-img-top"
                                alt="...">
                        @endif

                    </a>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title mb-3">{{ $product->name }}</h5>
                        </a>
                        <div class="d-flex gap-3 mb-3 align-items-center">
                            <del class="text-muted">₹{{ $product->price }}</del>
                            <h4 class="mb-0">₹{{ $product->discount_price }}</h4>
                        </div>
                        <div class="d-flex gap-2 mb-3">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-muted"></i>
                            <span>(25)</span>
                        </div>
                        <div class="d-flex">
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                            <a href="#" class="btn ms-auto">
                                <i class="bi bi-heart"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end mb-0">
            <!-- Previous Page Link -->
            <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link" wire:click="previousPage" wire:loading.attr="disabled" tabindex="-1">Previous</a>
            </li>

            <!-- Display Only Two Page Numbers -->
            @php
                $currentPage = $products->currentPage();
                $lastPage = $products->lastPage();
            @endphp

            @for ($i = max(1, $currentPage - 1); $i <= min($currentPage + 1, $lastPage); $i++)
                <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                    <a class="page-link" wire:click="gotoPage({{ $i }})">{{ $i }}</a>
                </li>
            @endfor

            <!-- Next Page Link -->
            <li class="page-item {{ $products->hasMorePages() ? '' : 'disabled' }}">
                <a class="page-link" wire:click="nextPage" wire:loading.attr="disabled">Next</a>
            </li>
        </ul>
    </nav>
</div>
