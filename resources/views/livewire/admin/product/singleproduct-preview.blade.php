<div>
    <div class="card">
        <div class="card-body">
            @if ($products->images->count() > 0)
                <img src="{{ asset('https://ronilaravel.s3.amazonaws.com/public/image/product/' . $products->images->first()->path) }}"
                    alt="cf" class="img-fluid rounded bg-light">
            @else
                <img src="{{ asset('assets_admin/images/product/p-1.png') }}" alt="gfv"
                    class="img-fluid rounded bg-light">
            @endif
            <div class="mt-3">
                <h4>{{ $products->name }} <span
                        class="fs-14 text-muted ms-1">({{ $products->category->cat_title }})</span></h4>
                <h5 class="text-dark fw-medium mt-3">Price :</h5>
                <h4 class="fw-semibold text-dark mt-2 d-flex align-items-center gap-2">
                    <span class="text-muted text-decoration-line-through">${{ $products->price }}</span>
                    ${{ $products->discount_price }} <small class="text-muted"> (30% Off)</small>
                </h4>
                <div class="mt-3">
                    <h5 class="text-dark fw-medium">Size :</h5>
                    <div class="d-flex flex-wrap gap-2" role="group" aria-label="Basic checkbox toggle button group">
                        @php
                            $sizeVariants = $products->variants->filter(function ($variant) {
                                return $variant->variant_type == 'size';
                            });

                            $colorVariants = $products->variants->filter(function ($variant) {
                                return $variant->variant_type == 'color';
                            });
                        @endphp

                        @if ($sizeVariants->isNotEmpty())
                            <p class="text-muted mb-0 mt-1 fs-13">
                            <div class="d-flex flex-wrap gap-2">
                                @foreach ($sizeVariants as $size)
                                    <!-- Checkbox for each size variant -->
                                    <input type="checkbox" class="btn-check" id="size-{{ $loop->index }}">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="size-{{ $loop->index }}">
                                        <span>{{ $size->variant_name }}</span>
                                    </label>
                                @endforeach
                            </div>
                            </p>
                        @endif





                    </div>
                </div>
                <div class="mt-3">
                    @if ($colorVariants->isNotEmpty())
                        <span>Color :</span>

                        @foreach ($colorVariants as $color)
                            <h5 class="text-dark fw-medium"></h5>
                            <div class="d-flex flex-wrap gap-2" role="group"
                                aria-label="Basic checkbox toggle button group">
                                <input type="checkbox" class="btn-check" id="color-dark">
                                <button style="background-color: {{ $color->variant_name }}; width:20px; height:20px; border-radius:50%" for="color-dark">
                                    {{-- {{ $color->variant_name }}@if (!$loop->last) --}}
                                    {{-- @endif --}}
                                </button>
                        @endforeach


                    @endif


                </div>
            </div>
        </div>
    </div>
    {{-- <div class="card-footer bg-light-subtle">
             <div class="row g-2">
                  <div class="col-lg-6">
                       <a href="#!" class="btn btn-outline-secondary w-100">Create Product</a>
                  </div>
                  <div class="col-lg-6">
                       <a href="#!" class="btn btn-primary w-100">Cancel</a>
                  </div>
             </div>
        </div> --}}
</div>
</div>
