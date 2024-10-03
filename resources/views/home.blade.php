@extends('layout')


@section('content')

<div class="mt-[70px] px-[2%] bg-slate-100">
    <div class="flex w-full flex-1 py-3">
        @include('desktop.components.category')
    </div> 
    <div class="flex">
        <img src="{{ asset('banner.webp') }}" alt="">
    </div>
    <div class="container mx-auto py-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Our Products</h2>
        
        <!-- Product Cards Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Product Card 1 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Product 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Product Name</h3>
                    <p class="mt-2 text-gray-600">120.00</p>
                    <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition-colors w-full">Buy Now</button>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Product 2" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Product Name</h3>
                    <p class="mt-2 text-gray-600">85.00</p>
                    <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition-colors w-full">Buy Now</button>
                </div>
            </div>  

            <!-- Product Card 3 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Product 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Product Name</h3>
                    <p class="mt-2 text-gray-600">99.00</p>
                    <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition-colors w-full">Buy Now</button>
                </div>
            </div>
        </div>
    </div>  
</div>

@endsection