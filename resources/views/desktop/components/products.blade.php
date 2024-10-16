<div class="flex flex-1 flex-col px-5 py-4 bg-orange-200 mt-5 ">
    <h2 class="text-2xl font-bold text-gray-700 mb-4 ">Best of Electronics</h2>

    <!-- Product Cards Section -->
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6">
        {{-- card --}}
        
        @foreach($products as $product)
        <a href="{{ route('viewpage', ['product_slug' => $product->slug]) }}" class=" max-w-xs bg-white p-2 rounded-lg shadow-lg">
            <img class="w-full h-36 object-cover rounded-md" src="{{ asset('storage/public/image/product/'.$product->images->first()->path) }}"
                alt="">

            <div class="mt-2 flex justify-between items-center">
                <span class="bg-red-600 text-white text-xs font-semibold px-2 py-1 rounded">36% off</span>
                <span class="text-red-600 font-medium text-xs">Great Indian Festival</span>
            </div>

            <div class="mt-2 flex items-center">
                <span class="text-2xl font-semibold text-gray-800">₹{{ $product->discount_price }}</span>
                <span class="text-xs text-gray-600 ml-2">M.R.P: <del>₹{{ $product->price }}</del></span>
            </div>

            <p class="text-sm font-medium text-gray-700 mt-2 line-clamp-2">{{ $product->name }}</p>
        </a>
        @endforeach
    </div>
</div>