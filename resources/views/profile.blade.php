@extends('layout')

@section('content')

<div class="px-36 mt-16" style="background-color: #fafafa">
    <div class="flex p-4">
        <!-- Sidebar -->
        <div class="w-1/6">
            <div class="bg-white shadow p-4">
                <div class="flex items-center mb-6">
                    <img src="https://th.bing.com/th?id=OIP.0_INywwz74o8LLO4Lz7vCAHaEo&w=316&h=197&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2" class="rounded-full mr-3" width="40px" height="50px" alt="User Avatar">
                    <div>
                        <p class="text-gray-500">Hello,</p>
                        <h5 class="">Sarita Yadav</h5>
                    </div>
                </div>
                <nav class="space-y-2">
                    <a href="#" class="block text-gray-700 font-semibold">MY ORDERS</a>
                    <div>
                        <p class="text-gray-700 font-semibold">ACCOUNT SETTINGS</p>
                        <ul class="pl-4 space-y-1 text-gray-600">
                            <li><a href="#">Profile Information</a></li>
                            <li><a href="#" >Manage Addresses</a></li>
                            <li><a href="#">PAN Card Information</a></li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-gray-700 font-semibold">PAYMENTS</p>
                        <ul class="pl-4 space-y-1 text-gray-600">
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Saved UPI</a></li>
                            <li><a href="#">Saved Cards</a></li>
                        </ul>
                    </div>
                    <a href="#" class="block text-gray-700 font-semibold">MY STUFF</a>
                </nav>
            </div>
        </div>

        <div class="w-5/6 p-7 bg-white mx-6">
            <h2 class="text-xl font-semibold p-2">
                Personal Information 
                <a href="#" class="text-blue-600 text-sm">Edit</a>
            </h2>
            <div class="bg-white shadow rounded-lg p-6 mb-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <input type="text" value="first name" class=" w-full py-3 border-gray-300 rounded-md bg-slate-300" disabled>
                    </div>
                    <div>
                        <input type="text" value="last name" class="w-full py-3 border-gray-300 rounded-md shadow-sm" disabled>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="text-gray-700 ">Your Gender</label>
                    <div class="mt-1 flex items-center">
                        <label class="flex items-center">
                            <input type="radio" name="gender" value="male" class="text-blue-600" disabled>
                            <span class="">Male</span>
                        </label>
                        <label class="flex items-center ml-5">
                            <input type="radio" name="gender" value="female" checked class="text-blue-600" disabled>
                            <span class="">Female</span>
                        </label>
                    </div>
                </div>
                <h4 class="text-lg font-semibold mt-6 mb-2">
                    Email Address 
                    <a href="#" class= "text-sm text-blue-600">Edit</a>
                </h4>
                <input type="email" value="demo@demo.com" class="block  border-gray-300 rounded-md shadow-sm mb-4" disabled>

                <h4 class="text-lg font-semibold mb-2">
                    Mobile Number 
                    <a href="#" class="text-sm text-blue-600">Edit</a>
                </h4>
                <input type="tel" value="+00000000000" class=" border-gray-300 rounded-md shadow-sm focus:border-blue-500" disabled>
            </div>

        </div>
    </div>
</div>




@endsection