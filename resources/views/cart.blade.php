{{-- @extends('layout')
@section('content')
  
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @include('desktop.components.header')

    <div class="flex flex-col lg:flex-row gap-6 mt-16 p-8">
        <div class="flex-1 w-3/4 bg-white p-4 rounded shadow-lg">
            <h2 class="text-xl font-semibold mb-4">My Cart</h2>

            <div class="flex items-center border-b py-4">
                <img src="product-image.jpg" alt="Product Image" class="w-24 h-24 object-cover rounded mr-4">

                <div class="flex flex-col flex-1">
                    <h3 class="font-medium text-lg">Product Name</h3>
                    <p class="text-gray-600 text-sm">Brand, Size</p>
                    <div class="flex items-center space-x-4 mt-2">
                        <span class="text-lg font-semibold">₹999</span>
                        <span class="text-sm text-gray-500 line-through">₹1,299</span>
                        <span class="text-sm text-green-500">23% off</span>
                    </div>
                    <div class="flex items-center mt-4">
                        <button class="bg-gray-200 px-2 py-1 rounded">-</button>
                        <span class="mx-2 text-lg">1</span>
                        <button class="bg-gray-200 px-2 py-1 rounded">+</button>
                    </div>
                </div>

                <button class="text-red-500 hover:text-red-600 ml-auto">Remove</button>
            </div>
            <button class="bg-yellow-500 text-white w-full mt-4 py-2 rounded shadow hover:bg-yellow-600">Place
                Order</button>

        </div>

        <div class="w-1/4 bg-white p-4 rounded shadow-lg">
            <h1 class="text-gray-300 font-black border-b capitalize">PRICE DETAILS</h1>
            <div class="flex justify-between my-2 ">
                <span>Price (2 items)</span>
                <span>₹2,000</span>
            </div>
            <div class="flex justify-between my-2">
                <span>Discount</span>
                <span class="text-green-500">-₹500</span>
            </div>
            <div class="flex justify-between my-2">
                <span>Delivery Charges</span>
                <div class="flex">
                    <span class="gap-2"><del>₹20</del></span>
                    <span class="text-green-500">Fee</span>
                </div>
            </div>
            <div class="flex justify-between my-2 mt-6 ">
                <span>Secured Packaging Fee</span>
                <span>₹2,000</span>
            </div>
            <div class="border-t mt-2 pt-2 flex justify-between font-semibold">
                <span>Total Amount</span>
                <span>₹1,500</span>
            </div>
            
            
        </div>
    </div>


</body>

</html>
