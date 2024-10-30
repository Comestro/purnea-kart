@extends('layout')

@section('title')
    My wishlist
@endsection

@section('content')
<br>
<br>
<br>
    <div class="flex">
        {{-- side-bar --}}
        <div class="w-4/12">
            <div class="w-full lg:w-64 xl:w-1/4 mb-4 sm:mt-0 mt-10">
                <aside class="bg-white shadow-md rounded-lg p-6 lg:p-8 flex flex-col">
                    <!-- User Profile Section -->
                    <div class="flex flex-col items-center border-b pb-6 mb-6">
                        <!-- Avatar -->
                        <div class="w-24 h-24 rounded-full overflow-hidden bg-gray-200">
                            <img src="https://cdn-icons-png.flaticon.com/128/3135/3135715.png" alt="User Avatar"
                                class="w-full h-full object-cover">
                        </div>
                        <!-- User Info -->
                        <div class="mt-4 text-center">
                            <h2 class="text-2xl font-semibold text-gray-800">John Doe</h2>
                            <p class="text-gray-500 text-sm">Hello!</p>
                        </div>
                        <button type="button"
                            class="w-full bg-red-500 text-white px-4 rounded mt-2 py-1 flex text-center font-bold text-lg md:hidden">Logout</button>
                    </div>

                    <!-- Navigation Buttons -->
                    <nav class="grid grid-cols-2 gap-2 sm:grid-cols-2 sm:gap-4 sm:flex lg:flex-col">
                        <a href="#"
                            class="hidden sm: py-3 px-4 rounded-md text-center bg-blue-600 text-white font-semibold hover:bg-blue-700 border border-gray-300">
                            Personal Information
                        </a>
                        <a href="#"
                            class=" sm:hidden py-3 px-4 rounded-md text-center text-gray-700 hover:bg-gray-100 border border-gray-300 flex gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 12l3-3m-3 3-3-3m-12 3l3 3m-3-3-3 3" />
                            </svg>
                            Orders
                        </a>
                        <a href="#"
                            class="hidden sm: py-3 px-4 rounded-md text-center text-gray-700 hover:bg-gray-100 border-none sm:border-none">
                            Orders
                        </a>
                        <a href="#"
                            class=" sm:hidden py-3 px-4 rounded-md text-center text-gray-700 hover:bg-gray-100 border border-gray-300 flex gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd"
                                    d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                    clip-rule="evenodd" />
                            </svg>
                            Address
                        </a>
                        <a href="#"
                            class="hidden sm: py-3 px-4 rounded-md text-center text-gray-700 hover:bg-gray-100 border-none sm:border-none">
                            Address
                        </a>
                        <a href="#"
                            class="hidden sm: py-3 px-4 rounded-md text-center text-gray-700 hover:bg-gray-100 border-none sm:border-none">
                            Gift-Card
                        </a>
                        <a href="#"
                            class=" sm:hidden py-3 px-4 rounded-md text-center text-gray-700 hover:bg-gray-100 border border-gray-300 flex gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd"
                                    d="M5.625 1.5H9a3.75 3.75 0 0 1 3.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 0 1 3.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 0 1-1.875-1.875V3.375c0-1.036.84-1.875 1.875-1.875Z"
                                    clip-rule="evenodd" />
                            </svg>
                            Coupons
                        </a>
                        <a href="#"
                            class="hidden sm: py-3 px-4 rounded-md text-center text-gray-700 hover:bg-gray-100 border-none sm:border-none">
                            Coupons
                        </a>
                        <a href="#"
                            class=" sm:hidden py-3 px-4 rounded-md text-center text-gray-700 hover:bg-gray-100 border border-gray-300 flex gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path
                                    d="M11.645 20.91a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219Z" />
                            </svg>
                            Wishlist
                        </a>
                        <a href="#"
                            class="hidden sm: py-3 px-4 rounded-md text-center text-gray-700 hover:bg-gray-100 border-none sm:border-none">
                            Wishlist
                        </a>
                        <a href="#"
                            class="hidden sm: py-3 px-4 rounded-md text-center text-red-600 hover:bg-gray-100 border-none sm:border-none">
                            Logout
                        </a>
                    </nav>
                </aside>
            </div>
        </div>

        {{-- wishlist contents here --}}
        <div class="w-8/12">
            <div class="flex-1 sm:px-4">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="w-full">
                        <!-- Wishlist Header -->
                        <div class="flex justify-between items-center mb-6 border-b border-gray-200 pb-2">
                            <span class="text-2xl font-bold text-gray-800">My Wishlist (2)</span>
                        </div>

                        <!-- Sample Wishlist Item -->
                        <div class="relative bg-white shadow-sm rounded-lg p-4 mb-2">
                            <div class="w-full flex flex-col sm:flex-row items-center gap-4">
                                <!-- Product Image -->
                                <img class="w-24 h-24 object-cover" src="{{ asset('about-us-images/OIP.jpeg') }}"
                                    alt="Sample Product Image">

                                <!-- Product Details -->
                                <div class="flex-1">
                                    <div class="text-lg font-semibold text-gray-800 mb-1">Sample Product Name</div>
                                    <div class="flex items-center gap-4 mb-2">
                                        <div class="text-lg font-bold text-gray-900">
                                            ₹99.99
                                            <del class="text-gray-500 text-sm ml-2">₹129.99</del>
                                        </div>
                                        <span class="text-green-600 font-medium">20% off</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Delete Button -->
                            <button class="absolute top-2 right-2 text-gray-500 hover:text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                                    class="w-6 h-6">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816...">
                                    </path>
                                </svg>
                            </button>
                        </div>

                        <!-- Another Sample Wishlist Item -->
                        <div class="relative bg-white shadow-sm rounded-lg p-4 mb-2">
                            <div class="w-full flex flex-col sm:flex-row items-center gap-4">
                                <!-- Product Image -->
                                <img class="w-24 h-24 object-cover" src="{{ asset('about-us-images/IT2.png') }}"
                                    alt="Sample Product Image 2">

                                <!-- Product Details -->
                                <div class="flex-1">
                                    <div class="text-lg font-semibold text-gray-800 mb-1">Another Product Name</div>
                                    <div class="flex items-center gap-4 mb-2">
                                        <div class="text-lg font-bold text-gray-900">
                                            ₹79.99
                                            <del class="text-gray-500 text-sm ml-2">₹99.99</del>
                                        </div>
                                        <span class="text-green-600 font-medium">15% off</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Delete Button -->
                            <button class="absolute top-2 right-2 text-gray-500 hover:text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                                    class="w-6 h-6">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816...">
                                    </path>
                                </svg>
                            </button>
                        </div>

                        <!-- Empty Wishlist Message (as an example) -->
                        <section class="flex items-center justify-center min-h-screen bg-gray-100 p-6">
                            <div class="max-w-md w-full bg-white shadow-md rounded-lg p-8 text-center">
                                <!-- Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 20l-5.447-2.724A2 2 0 013 15.382V6.618a2 2 0 01.553-1.404L9 2m6 0l5.447 2.724A2 2 0 0121 6.618v8.764a2 2 0 01-.553 1.404L15 20M9 12l6 0" />
                                </svg>
                                <!-- Message -->
                                <h2 class="text-2xl font-semibold text-gray-800 mb-2">Your Wishlist is Empty</h2>
                                <p class="text-gray-600 mb-6">Looks like you haven't added anything to your wishlist yet.
                                </p>
                                <!-- Button -->
                                <button
                                    class="inline-block px-6 py-3 bg-slate-100 text-zinc-800 rounded-lg transition-colors">
                                    Browse Products
                                </button>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
