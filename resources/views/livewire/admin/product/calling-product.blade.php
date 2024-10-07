<div class="table-responsive">
    <table class="table align-middle mb-0 table-hover table-centered">
        <thead class="bg-light-subtle">
            <tr>
                <th style="width: 20px;">
                    <div class="form-check ms-1">
                        <input type="checkbox" class="form-check-input" id="customCheck1">
                        <label class="form-check-label" for="customCheck1"></label>
                    </div>
                </th>
                <th>Id</th>
                <th>Product Name & Size</th>
                <th>Description</th>
                <th>Price</th>
                <th>Discount_price</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($products as $product)
                <tr>
                    <td>
                        <div class="form-check ms-1">
                            <input type="checkbox" class="form-check-input" id="customCheck2">
                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                        </div>
                    </td>
                    <td>{{ $product->id }}</td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            {{-- <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                   <img src="{{asset('assets_admin/images/product/p-1.png')}}" alt="" class="avatar-md">
                              </div> --}}
                            <div>
                                <a href="#!" class="text-dark fw-medium fs-15">{{ $product->name }}</a>
                                {{-- <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>S , M , L , Xl </p> --}}
                            </div>
                        </div>

                    </td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->discount_price }}</td>
                    <td>
                        <p class="mb-1 text-muted"><span class="text-dark fw-medium">{{ $product->quantity }}</span>
                            Left</p>
                    </td>
                    <td>{{ $product->category->cat_title }}</td>
                    <td>{{ $product->brand ? $product->brand->brand_name : '' }}</td>
                    {{-- <td> <span class="badge p-1 bg-light text-dark fs-12 me-1"><i class="bx bxs-star align-text-top fs-14 text-warning me-1"></i> 4.5</span> 55 Review</td>
                   --}}
                    <td>
                        <div class="d-flex gap-2">
                            <a href="" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken"
                                    class="align-middle fs-18"></iconify-icon></a>
                            <a href="{{ route('product.edit', $product->slug) }}"
                                class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken"
                                    class="align-middle fs-18"></iconify-icon></a>
                            <button wire:confirm="Are you want to delete this Product?"
                                wire:click="delete({{ $product->id }})" type="button"
                                class="btn btn-soft-danger btn-sm"><iconify-icon
                                    icon="solar:trash-bin-minimalistic-2-broken"
                                    class="align-middle fs-18"></iconify-icon></button>

                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
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
    </div>
</div>
