@extends('become-seller.components.seller-layout')

@section('title')
    Become a seller
@endsection

@section('content')

    <br>
    <br>

    <body class="bg-gray-50">
        <!-- Main Banner Section -->
        <section class="bg-blue-50 py-16">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-4xl font-bold text-gray-800">Sell Online with Purnia Kart</h1>
                <p class="mt-4 text-lg text-gray-600">Reach 45 Crore+ Customers and Grow Your Business</p>
                <a href="#"
                    class="mt-6 inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-500">Start Selling
                    Now</a>

                <!-- Banner Image -->
                <img src="{{ asset('become-seller/become-seller.jpg') }}" alt="Seller Banner"
                    class="mt-8 mx-auto rounded-md shadow-lg" />
            </div>
        </section>

        <!-- Key Features Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">

                    <!-- Feature 1 -->
                    <div class="bg-gray-100 p-6 rounded-md shadow-md">
                        <img src="{{ asset("become-seller/customers.jpeg") }}" alt="Customers Icon" class="mx-auto" />
                        <h3 class="text-xl font-bold mt-4">45 Crore+ Customers</h3>
                        <p class="text-gray-600 mt-2">Join a large and active marketplace with millions of buyers.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-gray-100 p-6 rounded-md shadow-md">
                        <img src="{{ asset("become-seller/customers.jpeg") }}" alt="Secure Payments Icon" class="mx-auto" />
                        <h3 class="text-xl font-bold mt-4">7 Days Secure Payments</h3>
                        <p class="text-gray-600 mt-2">Get regular and secure payments directly into your bank account.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-gray-100 p-6 rounded-md shadow-md">
                        <img src="{{ asset("become-seller/customers.jpeg") }}" alt="Low Cost Icon" class="mx-auto" />
                        <h3 class="text-xl font-bold mt-4">Low Cost of Doing Business</h3>
                        <p class="text-gray-600 mt-2">Start selling at a low cost with high profit margins.</p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="bg-gray-100 p-6 rounded-md shadow-md">
                        <img src="{{ asset("become-seller/customers.jpeg") }}" alt="Seller Support Icon" class="mx-auto" />
                        <h3 class="text-xl font-bold mt-4">One Click Seller Support</h3>
                        <p class="text-gray-600 mt-2">Access dedicated support for all your selling needs.</p>
                    </div>

                    <!-- Feature 5 -->
                    <div class="bg-gray-100 p-6 rounded-md shadow-md">
                        <img src="{{ asset("become-seller/customers.jpeg") }}" alt="Big Billion Days Icon" class="mx-auto" />
                        <h3 class="text-xl font-bold mt-4">Access Big Billion Days</h3>
                        <p class="text-gray-600 mt-2">Be a part of the biggest sales events and increase your sales.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seller Success Stories Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold text-gray-800">Seller Success Stories</h2>
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Story 1 -->
                    <div class="bg-white p-6 rounded-md shadow-md">
                        <p class="text-gray-600">"Selling on Flipkart has transformed my business. I've reached more
                            customers than I ever thought possible!"</p>
                        <p class="mt-4 font-bold text-gray-800">- Amit, Electronics Seller</p>
                    </div>

                    <!-- Story 2 -->
                    <div class="bg-white p-6 rounded-md shadow-md">
                        <p class="text-gray-600">"Thanks to Flipkart, my business has grown beyond my expectations. The
                            platform makes selling so easy."</p>
                        <p class="mt-4 font-bold text-gray-800">- Priya, Fashion Seller</p>
                    </div>
                </div>
                <a href="#" class="mt-6 inline-block text-blue-600 font-bold hover:underline">Read More Success
                    Stories</a>
            </div>
        </section>
    </body>
@endsection
