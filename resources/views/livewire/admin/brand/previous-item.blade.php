<div>
    {{-- @php
        $latestItem = $previous->isNotEmpty() ? $previous->last() : null;
    @endphp
    
    @if($latestItem)
        <div>
            <h4>Recent Inserted Data</h4>
            <div class="bg-light text-center rounded">
                <img src="{{ $latestItem->logo ? asset('storage/public/logo/brand/' . $latestItem->logo) : asset('public/logo/brand/default.png') }}"
                     alt="{{ $latestItem->brand_name }} Logo" style="max-width: 100px; max-height: 300px;">
            </div>
        </div>
        <div class="mt-3">
            <h4>{{ $latestItem->brand_name }}</h4>
            <div class="row">
                <p class="mb-1 mt-2">Description:</p>
                <div class="col-lg-12">
                    <h5 class="mb-0">{{ $latestItem->brand_description }}</h5>
                </div>             
            </div>
        </div>
    @else
        <p>No items available.</p>
    @endif --}}
</div>
