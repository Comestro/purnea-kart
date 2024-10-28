<div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <!-- Crossfade -->
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                @if ($products->images->count() > 0)
                                    <img src="{{ asset('https://ronilaravel.s3.amazonaws.com/public/image/product/' . $products->images->first()->path) }}"
                                        alt="" class="img-fluid bg-light rounded">
                                @else
                                    <img src="{{ asset('assets_admin/images/product/p-1.png') }}" alt=""
                                        class="img-fluid bg-light rounded">
                                @endif

                            </div>

                        </div>
                        <div class="carousel-indicators m-0 mt-2 d-lg-flex d-none position-static h-100">
                            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0"
                                aria-current="true" aria-label="Slide 1" class="w-auto h-auto rounded bg-light active">
                                @if ($products->images->count() > 0)
                                    @foreach ($products->images as $image)
                                        <button type="button" data-bs-target="#carouselExampleFade"
                                            class="w-auto h-auto rounded bg-light">
                                            <img src="{{ asset('https://ronilaravel.s3.amazonaws.com/public/image/product/' . $image->path) }}"
                                                class="d-block avatar-xl" alt="swiper-indicator-img">
                                        </button>
                                    @endforeach
                                @else
                                    <img src="{{ asset('assets_admin/images/product/p-1.png') }}"
                                        class="d-block avatar-xl" alt="swiper-indicator-img">
                            </button>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer border-top">
                    <div class="row g-2">
                        <div class="col-lg-4">
                            <a href="#!"
                                class="btn btn-primary d-flex align-items-center justify-content-center gap-2 w-100"><i
                                    class="bx bx-cart fs-18"></i>
                                {{-- Add To Cart --}}
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#!"
                                class="btn btn-light d-flex align-items-center justify-content-center gap-2 w-100"><i
                                    class="bx bx-shopping-bag fs-18"></i>
                                {{-- Buy Now --}}
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <button type="button"
                                class="btn btn-soft-danger d-inline-flex align-items-center justify-content-center fs-20 rounded w-100"><iconify-icon
                                    icon="solar:heart-broken"></iconify-icon></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">

                <div class="card-body">
                    <h4 class="badge bg-success text-light fs-14 py-1 px-2">New Arrival</h4>
                    <p class="mb-1">
                        <a href="#!" class="fs-24 text-dark fw-medium">{{ $products->name }}</a>
                    </p>
                    <div class="d-flex gap-2 align-items-center">
                        <ul class="d-flex text-warning m-0 fs-20  list-unstyled">
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
                        <p class="mb-0 fw-medium fs-18 text-dark">4.5 <span class="text-muted fs-13">(55
                                Review)</span></p>
                    </div>
                    <h2 class="fw-medium my-3">₹{{ $products->discount_price }}<span
                            class="fs-16 text-decoration-line-through">₹{{ $products->price }}</span><small
                            class="text-danger ms-2">(30%Off)</small></h2>

                    <div class="row align-items-center g-2 mt-3">
                        @php
                        $size = $products->variants->filter(function ($variant) {
                            return $variant->variant_type == 'size';
                        });

                        $color = $products->variants->filter(function ($variant) {
                            return $variant->variant_type == 'color';
                        });
                    @endphp
                        <div class="col-lg-3">
                            @if ($size->isNotEmpty())

                            <div class="">
                              
                                <h5 class="text-dark fw-medium">Colors > </h5>

                                    <div class="d-flex flex-wrap gap-2" role="group"
                                        aria-label="Basic checkbox toggle button group">
                                        <input type="checkbox" class="btn-check" id="color-dark2" checked>
                                        <label
                                            class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                            for="color-dark2">
                                            @foreach ($color as $variant)
                                                <button
                                                    style="background-color: {{ $variant->variant_name }}; width:20px; height:20px; border-radius:50%;"></button>
                                            @endforeach
                                        </label>
                                    </div>



                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-3">
                        @if ($size->isNotEmpty())

                        <div class="">
                            <h5 class="text-dark fw-medium">Size >
                            </h5>
                            <div class="d-flex flex-wrap gap-2" role="group"
                                aria-label="Basic checkbox toggle button group">
                                <input type="checkbox" class="btn-check" id="size-s2">
                                <label
                                    class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                    for="size-s2">
                                    @foreach ($size as $variant)
                                        {{ $variant->variant_name }}@if (!$loop->last)
                                            ,
                                        @endif
                                    @endforeach
                                </label>


                            </div>
                        </div>
                        @endif

                    </div>
                </div>
                <div class="quantity mt-4">
                    <h4 class="text-dark fw-medium mt-3">Quantity </h4>
                    <div class="input-step border bg-body-secondary p-1 mt-1 rounded d-inline-flex overflow-visible">
                        <button type="button"
                            class="minus bg-light text-dark border-0 rounded-1 fs-20 lh-1 h-100">-</button>
                        <input type="number" class="text-dark text-center border-0 bg-body-secondary rounded h-100"
                            value="{{ $products->quantity }}" min="0" max="100" readonly="">
                        <button type="button"
                            class="plus bg-light text-dark border-0 rounded-1 fs-20 lh-1 h-100">+</button>
                    </div>
                </div>
                <ul class="d-flex flex-column gap-2 list-unstyled fs-15 my-3">
                    <li>
                        <i class='bx bx-check text-success'></i> In Stock
                    </li>
                    <li>
                        <i class='bx bx-check text-success'></i> Free delivery available
                    </li>
                    <li>
                        <i class='bx bx-check text-success'></i> Sales 10% Off Use Code: <span
                            class="text-dark fw-medium">CODE123</span>
                    </li>
                </ul>
                <h4 class="text-dark fw-medium">Description :</h4>
                <p class="text-muted">{{ $products->description }} <a href="#!" class="link-primary">Read
                        more</a></p>
                <h4 class="text-dark fw-medium mt-3">Available offers :</h4>
                <div class="d-flex align-items-center mt-2">
                    <i class="bx bxs-bookmarks text-success me-3 fs-20 mt-1"></i>
                    <p class="mb-0"><span class="fw-medium text-dark">Bank Offer</span> 10% instant
                        discount on Bank Debit Cards, up to $30 on orders of $50 and above</p>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <i class="bx bxs-bookmarks text-success me-3 fs-20 mt-1"></i>
                    <p class="mb-0"><span class="fw-medium text-dark">Bank Offer</span> Grab our
                        exclusive offer now and save 20% on your next purchase! Don't miss out, shop
                        today!</p>
                </div>
            </div>


        </div>
    </div>
</div>
