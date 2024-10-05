<div>
    @if ($previous->isNotEmpty())
        @php
            $latestItem = $previous->last();
        @endphp
        <div class="bg-light text-center rounded">
            <img src="{{ $latestItem->logo ? asset('storage/public/logo/brand/' . $latestItem->logo) : asset('public/logo/brand/default.png') }}"
                alt="{{ $latestItem->brand_name }} Logo" style="max-width: 100px; max-height: 100px;">
        </div>
        <div class="mt-3">
            <h4>{{ $latestItem->brand_name }}</h4>
            <div class="row">
                <div class="col-lg-4 col-4">
                    <p class="mb-1 mt-2">Created By:</p>
                    <h5 class="mb-0">Seller</h5>
                </div>
                <div class="col-lg-4 col-4">
                    <p class="mb-1 mt-2">Stock:</p>
                    <h5 class="mb-0"></h5>
                </div>
                <div class="col-lg-4 col-4">
                    <p class="mb-1 mt-2">ID:</p>
                    <h5 class="mb-0"></h5> 
                </div>
            </div>
        </div>
    @else
        <p>No items available.</p>
    @endif
</div>
