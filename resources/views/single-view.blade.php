@extends('layout')

@section('content')
    <!-- Product Container -->
    <div class="max-w-7xl mx-auto px-6 sm:px-6 lg:px-12 py-8 mt-[70px] ">

        <!-- Product Details Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            <!-- Product Image -->
            <div class="px-7  h-[500px]">
                <img src="{{ asset('https://ronilaravel.s3.amazonaws.com/public/image/product/' . $product->images->first()->path) }}"
                    alt="Product Image" class="w-full h-[370px] object-contain rounded-lg shadow-md">

                <div class="flex mt-2 gap-3 items-center">
                    @foreach ($product->images->skip(1) as $image)
                        <img
                            src="{{ asset('https://ronilaravel.s3.amazonaws.com/public/image/product/' . $image->path) }}" class="w-45">
                    @endforeach
                </div>
            </div>

            <!-- Product Information -->
            {{-- <div class="bg-white px-5 rounded-lg ">
            <h1 class="text-2xl font-semibold text-gray-800">{{ $product->name }}</h1>
            <p class="text-2xl text-gray-800 mt-4 font-bold">₹{{ $product->price }}</p>

            <!-- Ratings -->
            <div class="flex items-center mt-4">
                <span class="text-yellow-500 text-xl">&#9733;</span>
                <span class="text-yellow-500 text-xl">&#9733;</span>
                <span class="text-yellow-500 text-xl">&#9733;</span>
                <span class="text-yellow-500 text-xl">&#9733;</span>
                <span class="text-gray-300 text-xl">&#9733;</span>
                <span class="ml-2 text-gray-600">(120 reviews)</span>
            </div>
            <h2><span class="font-semibold text-gray-600">Cateogory: </span>{{ $product->category->cat_title }}</h2>

            <!-- Description -->
            <p class="text-gray-700 mt-4">{{ $product->description }}</p>

            <!-- Color Options -->
            <div class="mt-6">
                <h3 class="text-lg font-medium text-gray-800">Choose Color</h3>
                <div class="flex space-x-4 mt-2">
                    @foreach ($product->variants as $item)
                        @if ($item->variant_type === 'color')
                            <button class="w-8 h-8 rounded-full border-2 border-gray-300 "
                                style="background-color: {{ $item->variant_name }};" value="{{ $item->variant_name }}">
                            </button>
                        @endif
                    @endforeach

                </div>
            </div>

            <!-- Size Options -->
            <div class="mt-6">
                <h3 class="text-lg font-medium text-gray-800">Choose Size</h3>
                <div class="flex space-x-4 mt-2">

                    @foreach ($product->variants as $item)
                        @if ($item->variant_type === 'size')
                            <button class="px-4 py-2 bg-gray-100 text-gray-800 rounded-md border border-gray-300"
                                value="{{ $item->variant_type }}">
                                {{ $item->variant_name }}
                            </button>
                        @endif
                    @endforeach
                </div>
            </div>

            <!-- Add to Cart Button -->
            <div class="mt-8">
                <button
                    class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-500 transition duration-200">
                    Add to Cart
                </button>
            </div>

            <!-- Buy Now Button -->
            <div class="mt-4">
                <button class="w-full bg-orange-600 text-white py-3 rounded-lg hover:bg-orange-500 transition duration-200">
                    Buy Now
                </button>
            </div>
        </div> --}}
            <div class="flex flex-col justify-start gap-4 h-full">
                <!-- Product Title and Price -->
                <div class="p-2">
                    <div class="flex flex-col justify-between items-start">
                        <div class="flex w-full flex-col gap-2">
                            <h1 class="text-2xl font-semibold mb-1">{{ $product->name }}</h1>
                            <p class="text-2xl text-gray-800 font-bold">₹{{ $product->price }}</p>
                        </div>
                        <div class="flex w-full items-center justify-between mt-2">
                            <div class="flex">
                                <div class="text-yellow-500">
                                    <span class="text-xl">&#9733;</span>
                                    <span class="text-xl">&#9733;</span>
                                    <span class="text-xl">&#9733;</span>
                                    <span class="text-xl">&#9733;</span>
                                    <span class="text-gray-300 text-xl">&#9733;</span>
                                </div>
                                <span class="ml-2 text-gray-600">(120 reviews)</span>
                            </div>
                            <div class="mr-5">
                                <livewire:wishlist-toggle :productId="$product->id" />
                            </div>
                        </div>
                        {{-- wishlist --}}
                    </div>
                    <h2 class="mt-2"><span class="font-semibold text-gray-600">Category:
                        </span>{{ $product->category->cat_title }}</h2>
                    <p class="text-gray-700 mt-4">{{ $product->description }}</p>

                    <!-- Color Options -->
                    <div class="mt-6">
                        <h3 class="text-lg font-medium text-gray-800">Choose Color</h3>
                        <div class="flex space-x-4 mt-2">
                            @foreach ($product->variants as $item)
                                @if ($item->variant_type === 'color')
                                    <button
                                        class="w-8 h-8 rounded-full border-2 border-gray-300 focus:outline-none transition-transform transform hover:scale-105"
                                        style="background-color: {{ $item->variant_name }};"
                                        aria-label="Choose color {{ $item->variant_name }}"
                                        value="{{ $item->variant_name }}">
                                    </button>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <!-- Size Options -->
                    <div class="mt-6">
                        <h3 class="text-lg font-medium text-gray-800">Choose Size</h3>
                        <div class="flex space-x-4 mt-2">
                            @foreach ($product->variants as $item)
                                @if ($item->variant_type === 'size')
                                    <button
                                        class="px-4 py-2 bg-gray-100 text-gray-800 rounded-md border border-gray-300 focus:outline-none transition duration-200 hover:bg-gray-200"
                                        aria-label="Choose size {{ $item->variant_name }}"
                                        value="{{ $item->variant_type }}">
                                        {{ $item->variant_name }}
                                    </button>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <!-- Add to Cart Button -->
                    <div class="mt-8">
                        <a href="{{ route('addToCart', $product->slug) }}"><button
                                class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-500 transition duration-200">
                                Add to Cart
                            </button></a>
                    </div>

                    <!-- Buy Now Button -->
                    <div class="mt-4">
                        <button
                            class="w-full bg-orange-600 text-white py-3 rounded-lg hover:bg-orange-500 transition duration-200">
                            Buy Now
                        </button>
                    </div>
                </div>
            </div>

        </div>
        {{-- Tabs for Description, Reviewa, FAQs --}}
        <livewire:public.product-lower-section :productId="$product->id" />

        <!-- Related Products Section -->
        <div class="flex flex-1 flex-col px-5 py-4 bg-orange-50 mt-10 ">
            <h2 class="text-2xl font-bold text-gray-700 mb-4 ">Related Products</h2>

            <!-- Product Cards Section -->
            <div class="grid grid-cols-2 sm:grid-cols-5 lg:grid-cols-5 gap-6">
                {{-- card --}}
                @foreach ($relatedProducts as $relatedProduct)
                    <a href="{{ route('viewpage', ['product_slug' => $relatedProduct->slug]) }}"
                        class="max-w-[208px] bg-white p-2 rounded-lg shadow-lg">
                        <img class="w-full h-36 object-cover rounded-md"
                            src="{{ $relatedProduct->images->isNotEmpty() ? asset('https://ronilaravel.s3.amazonaws.com/public/image/product/' . $relatedProduct->images->first()->path) : asset('path/to/default-image.jpg') }}"
                            alt="{{ $relatedProduct->name }}">
                        <div class="mt-2 flex justify-between items-center">
                            <span
                                class="bg-red-600 text-white text-xs font-semibold px-2 py-1 rounded">{{ $relatedProduct->discount_percentage }}%
                                off</span>
                            <span class="text-red-600 font-medium text-xs">Great Indian Festival</span>
                        </div>

                        <div class="mt-2 flex items-center">
                            <span class="text-2xl font-semibold text-gray-800">₹{{ $relatedProduct->price }}</span>
                            <span class="text-xs text-gray-600 ml-2">M.R.P:
                                <del>₹{{ $relatedProduct->original_price }}</del></span>
                        </div>

                        <p class="text-sm font-medium text-gray-700 mt-2 line-clamp-2">{{ $relatedProduct->description }}
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
