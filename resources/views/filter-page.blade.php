@extends('layout')



@section('content')
    @include('desktop.components.sub-header')
    <div class="max-w-7xl w-full">
        <div class=" p-2 w-full">
            <!-- Main Layout with Sidebar and Product Grid -->
            <div class="flex flex-1">

                <!-- Filter Section -->
                <aside class="w-[22%] bg-white p-4 shadow-md">
                    <h2 class="text-xl font-bold mb-4">Filters</h2>

                    <!-- Categories Filter -->
                    <div class="mb-4">
                        <h3 class="font-semibold text-gray-700 mb-2">Category</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-600 hover:text-indigo-600">Electronics</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-indigo-600">Fashion</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-indigo-600">Home & Kitchen</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-indigo-600">Beauty</a></li>
                        </ul>
                    </div>

                    <!-- Price Filter -->
                    <div class="mb-4">
                        <h3 class="font-semibold text-gray-700 mb-2">Price Range</h3>
                        <input type="range" class="w-full">
                    </div>

                    <!-- Rating Filter -->
                    <div>
                        <h3 class="font-semibold text-gray-700 mb-2">Rating</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-600 hover:text-indigo-600">4 Stars & Up</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-indigo-600">3 Stars & Up</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-indigo-600">2 Stars & Up</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-indigo-600">1 Star & Up</a></li>
                        </ul>
                    </div>
                </aside>

                <!-- Product Section -->
                <section class="w-4/5 px-5 py-2">
                    <h2 class="text-2xl font-bold mb-4">Search by {{ $categories->cat_title }}</h2>

                    @forelse ($categories->products as $item)
                        <div class="flex items-center bg-slate-50 overflow-hidden px-5 border-b ">

                            <div class="w-1/3 ">
                                <img src="{{ asset('https://ronilaravel.s3.amazonaws.com/public/image/product/'.$item->image) }}" alt="Motorola Edge 50 Pro"
                                    class="rounded-lg object-cover">
                            </div>


                            <div class="w-2/3 p-4">


                                <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $item->name }}
                                </h2>


                                <div class="flex items-center mb-4">
                                    <span class="bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded">4.4</span>
                                    <span class="text-gray-600 ml-2">30,194 Ratings & 1,710 Reviews</span>
                                </div>

                                <ul class="list-disc ml-5 text-gray-700 mb-4 space-y-1">
                                    <li>12 GB RAM | 256 GB ROM</li>
                                    <li>17.02 cm (6.7 inch) Display</li>
                                    <li>50MP + 13MP + 10MP | 50MP Front Camera</li>
                                    <li>4500 mAh Battery</li>
                                </ul>
                            </div>

                            <div class="flex flex-col items-center mb-2 mr-5">
                                <span class="text-2xl font-bold text-gray-800">₹{{ $item->discount_price }}</span>
                                <span class="text-gray-500 line-through ml-3">₹{{ $item->price }}</span>
                                <span class="text-green-600 font-semibold ml-2">28% off</span>
                            </div>
                        </div>
                    @empty
                        <h2>Products not found...</h2>
                    @endforelse
                </section>
            </div>
        </div>

    </div>
@endsection
