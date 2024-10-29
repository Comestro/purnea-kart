@extends('layout')

@section('content')
    <div class="px-[5%] mt-20 bg-gray-100">
        <div class="flex p-4 gap-4">
            <!-- Sidebar -->
            <div class="w-3/12">
                <div class="flex items-center px-4 py-3 bg-white shadow">
                    <div class="w-12 h-12 rounded-full bg-yellow-500 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-500">Hello,</p>
                        <p class="text-xl font-semibold text-gray-700">Rahul Kumar</p>
                    </div>
                </div>

                <div class="p-4 bg-white shadow-md mt-3">
                    <!-- My Orders Section -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="font-bold text-gray-500">MY ORDERS</span>
                        </div>
                    </div>
                    <hr class="mt-3">

                    <!-- Account Settings Section -->
                    <div class="mt-3">
                        <div class="flex items-center space-x-2 mb-3">
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                            </svg>
                            <span class="font-semibold text-gray-500">ACCOUNT SETTINGS</span>
                        </div>
                        <ul class="space-y-4 ml-6">
                            <li class="text-blue-500 font-medium">Profile Information</li>
                            <li class="text-gray-600">Manage Addresses</li>
                            <li class="text-gray-600">PAN Card Information</li>
                        </ul>
                    </div>
                    <hr class="mt-3">
                    <!-- Payments Section -->
                    <div class="mt-4">
                        <div class="flex items-center space-x-2 mb-3">
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm1-13h-2v6h6v-2h-4z" />
                            </svg>
                            <span class="font-bold text-gray-500">PAYMENTS</span>
                        </div>
                        <ul class="space-y-3 ml-6">
                            <li class="flex justify-between text-gray-600">
                                Gift Cards <span class="text-green-500 font-medium">₹0</span>
                            </li>
                            <li class="text-gray-600">Saved UPI</li>
                            <li class="text-gray-600">Saved Cards</li>
                        </ul>
                    </div>
                    <hr class="mt-3">
                    <div class="mt-4">
                        <div class="flex items-center space-x-2 mb-3">
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm1-13h-2v6h6v-2h-4z" />
                            </svg>
                            <span class="font-bold text-gray-500">MY STUFF</span>
                        </div>
                        <ul class="space-y-3 ml-6">
                            <li class="flex justify-between text-gray-600">
                                My Coupons <span class="text-green-500 font-medium">₹0</span>
                            </li>
                            <li class="text-gray-600">My Review & Rating</li>
                            <li class="text-gray-600">All Notification</li>
                            <li class="text-gray-600">My Wishlist</li>
                        </ul>
                    </div>
                    <hr class="mt-3">
                    <div class="flex items-center space-x-2 mb-3 mt-3">
                        <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm1-13h-2v6h6v-2h-4z" />
                        </svg>
                        <span class="font-bold text-gray-500">Logout</span>
                    </div>
                </div>
            </div>

            <div class="w-9/12 p-4 bg-white">
                <h2 class="text-xl font-semibold p-2">
                    Personal Information
                    <a href="#" class="text-blue-600 text-sm">Edit</a>
                </h2>
                <div class="bg-white p-6 mb-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <input type="text" value="first name"
                                class=" w-full py-3 border-gray-300 rounded-md bg-slate-300" disabled>
                        </div>
                        <div>
                            <input type="text" value="last name" class="w-full py-3 border-gray-300 rounded-md shadow-sm"
                                disabled>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="text-gray-500 font-semibold">Your Gender</label>
                        <div class="mt-1 flex items-center">
                            <label class="flex items-center gap-2 justify-center">
                                <input type="radio" name="gender" value="male" class="text-blue-600" disabled>
                                <span class="">Male</span>
                            </label>
                            <label class="flex items-center ml-7 gap-2">
                                <input type="radio" name="gender" value="female" checked class="text-blue-600" disabled>
                                <span class="">Female</span>
                            </label>
                        </div>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-600 mt-6 mb-2">
                        Email Address
                        <a href="#" class= "text-sm text-blue-600 ml-3">Edit</a>
                    </h4>
                    <input type="email" value="demo@demo.com" class="mt-2 border-gray-300 rounded-md shadow-sm mb-4 w-[50%]"
                        disabled>

                    <h4 class="text-lg text-gray-600 font-semibold mb-2">
                        Mobile Number
                        <a href="#" class="text-sm text-blue-600 ml-3">Edit</a>
                    </h4>
                    <input type="tel" value="+00000000000"
                        class=" border-gray-300 rounded-md shadow-sm focus:border-blue-500 w-[50%]" disabled>
                </div>

            </div>
        </div>


    </div>
    </div>
@endsection
