<div>
    <div class="card bg-light-subtle">
        <div class="card-header border-0">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item fw-medium"><a href="javascript: void(0);"
                                class="text-dark">Categories</a></li>
                        <li class="breadcrumb-item active">All Product</li>
                    </ol>
                    <p class="mb-0 text-muted">Showing all <span class="text-dark fw-semibold">5,786</span> items results
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="text-md-end mt-3 mt-md-0">
                        <button type="button" class="btn btn-outline-secondary me-1"><i class="bx bx-cog me-1"></i>More
                            Setting</button>
                        <button type="button" class="btn btn-outline-secondary me-1"><i
                                class="bx bx-filter-alt me-1"></i> Filters</button>
                        <a href="{{ route('product.create') }}" class="btn btn-success me-1"><i class="bx bx-plus"></i> New
                            Product</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    @if ($product->images->count() > 0)
                        <img src="{{ asset('storage/public/image/product/' . $product->images->first()->path) }}"
                            alt="" class="img-fluid">
                    @else
                        <img src="{{ asset('assets_admin/images/product/p-1.png') }}" alt="" class="img-fluid ">
                    @endif
                    <div class="card-body bg-light-subtle rounded-bottom">
                        <a href="product-details.html" class="text-dark fw-medium fs-16">{{ $product->name }}</a>
                        <div class="my-1">
                            <div class="d-flex gap-2 align-items-center">
                                <ul class="d-flex text-warning m-0 fs-18  list-unstyled">
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star-half"></i>
                                    </li>
                                </ul>
                                <p class="mb-0 fw-medium fs-15 text-dark">4.5 <span class="text-muted fs-13">(55
                                        Review)</span></p>
                            </div>
                        </div>
                        <h4 class="fw-semibold text-dark mt-2 d-flex align-items-center gap-2">
                            <span class="text-muted text-decoration-line-through">₹{{ $product->price }}</span>
                            ₹{{ $product->discount_price }} <small class="text-muted"> (30% Off)</small>
                        </h4>
                        <div class="mt-3">
                            <div class="d-flex gap-2">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-soft-primary border border-primary-subtle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class='bx bx-dots-horizontal-rounded'></i></a>
                                    <div class="dropdown-menu">
                                        <!-- item-->
                                        <a href="#!" class="dropdown-item">Edit</a>
                                        <!-- item-->
                                        <a href="#!" class="dropdown-item">Overview</a>
                                        <!-- item-->
                                        <a href="#!" class="dropdown-item">Delete</a>
                                    </div>
                                </div>
                                <a href="order-cart.html"
                                    class="btn btn-outline-dark border border-secondary-subtle d-flex align-items-center justify-content-center gap-1 w-100"><i
                                        class='bx bx-cart align-middle'></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <span class="position-absolute top-0 end-0 p-3">
                        <button type="button"
                            class="btn btn-soft-danger avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded-circle"><iconify-icon
                                icon="solar:heart-broken"></iconify-icon></button>
                    </span>
                </div>
            </div>
        @endforeach



    </div>

   <!-- Pagination -->
   <div class="card-footer border-top">
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
</div></div>
