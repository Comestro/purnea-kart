@extends('layout')


@section('content')

<!-- Product Container -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mt-[70px] ">
        
    <!-- Product Details Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        
        <!-- Product Image -->
        <div class="p-5">
            <img src="https://picsum.photos/600" alt="Product Image" class="w-full h-96 object-cover rounded-lg shadow-md">
        </div>

        <!-- Product Information -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold text-gray-800">Product Name</h1>
            <p class="text-xl text-gray-600 mt-4">$299.99</p>
            
            <!-- Ratings -->
            <div class="flex items-center mt-4">
                <span class="text-yellow-500 text-xl">&#9733;</span>
                <span class="text-yellow-500 text-xl">&#9733;</span>
                <span class="text-yellow-500 text-xl">&#9733;</span>
                <span class="text-yellow-500 text-xl">&#9733;</span>
                <span class="text-gray-300 text-xl">&#9733;</span>
                <span class="ml-2 text-gray-600">(120 reviews)</span>
            </div>
            
            <!-- Description -->
            <p class="text-gray-700 mt-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies ligula eget urna fermentum, nec aliquet nibh venenatis. Suspendisse eget odio eget mi ornare tincidunt.</p>

            <!-- Color Options -->
            <div class="mt-6">
                <h3 class="text-lg font-medium text-gray-800">Choose Color</h3>
                <div class="flex space-x-4 mt-2">
                    <button class="w-8 h-8 rounded-full bg-red-500 border-2 border-gray-300"></button>
                    <button class="w-8 h-8 rounded-full bg-blue-500 border-2 border-gray-300"></button>
                    <button class="w-8 h-8 rounded-full bg-green-500 border-2 border-gray-300"></button>
                </div>
            </div>

            <!-- Size Options -->
            <div class="mt-6">
                <h3 class="text-lg font-medium text-gray-800">Choose Size</h3>
                <div class="flex space-x-4 mt-2">
                    <button class="px-4 py-2 bg-gray-100 text-gray-800 rounded-md border border-gray-300">S</button>
                    <button class="px-4 py-2 bg-gray-100 text-gray-800 rounded-md border border-gray-300">M</button>
                    <button class="px-4 py-2 bg-gray-100 text-gray-800 rounded-md border border-gray-300">L</button>
                    <button class="px-4 py-2 bg-gray-100 text-gray-800 rounded-md border border-gray-300">XL</button>
                </div>
            </div>

            <!-- Add to Cart Button -->
            <div class="mt-8">
                <button class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-500 transition duration-200">
                    Add to Cart
                </button>
            </div>

            <!-- Buy Now Button -->
            <div class="mt-4">
                <button class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-500 transition duration-200">
                    Buy Now
                </button>
            </div>
        </div>
    </div>

    <!-- Related Products Section -->
    
</div>


@endsection