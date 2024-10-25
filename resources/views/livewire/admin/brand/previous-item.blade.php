<div>
    @php
        $latestItem = $previous->isNotEmpty() ? $previous->last() : null;
    @endphp
    
    @if($latestItem)

        {{-- {{ $latestItem->brand_description }} --}}
        <div class="card">
            <div class="card-header">
                <h4>Recent Inserted Data</h4>
            </div>
            <div class="card-body">
                <div class="bg-light text-center rounded bg-light">
                    <img src="{{ $latestItem->logo ? asset('storage/public/logo/brand/' . $latestItem->logo) : asset('public/logo/brand/default.png') }}"
                     alt="{{ $latestItem->brand_name }} Logo" style="max-width: 100px; max-height: 300px;">
                </div>
                <div class="mt-3">

                    <h4>{{ $latestItem->brand_name }}</h4>
                    <p>{{ $latestItem->brand_description }}</p>
                </div>
                {{-- <div class="mt-3">
                 @if
                    ({{$latestItem->brand_name }})
                @else
                    <h4>({{!$latestItem->brand_name }})<span>
                @endif
                @if ($latestItem->brand_description)
                @else
                <p>{{!$latestItem->brand_description }}</p>
                @endif
                </div> --}}

            </div>
            <div class="card-footer border-top">
                <div class="row g-2">
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-outline-secondary w-100">Create Category</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-primary w-100">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <p>No items available.</p>
    @endif

    
    
</div>
