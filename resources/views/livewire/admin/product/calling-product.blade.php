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

            @foreach ($callingProduct as $key=>$product)
                <tr>
                    <td>
                        <div class="form-check ms-1">
                            <input type="checkbox" class="form-check-input" id="customCheck2">
                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                        </div>
                    </td>
                   <td>{{ $key+1}}</td>
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
                            <a href="{{ route('product.show',$product->id)}}" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken"
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

</div>