@extends('layout')

@section('title')
    Account | Sign Up
@endsection

<br>
<br>
<br>
<br>
@section('content')
    <div class="flex justify-center items-center bg-gray-100 px-4 py-10">
        <div class="flex bg-white rounded-lg shadow-lg p-8 text-gray-800 flex-col w-full max-w-xl">
            <h2 class="text-3xl font-bold mb-2 text-center">Create Account</h2>
            <p class="text-md text-gray-600 mb-4 text-center">Join us and access your Orders, Wishlist, and Recommendations
            </p>

            <!-- Google Authentication Button with Logo -->
            <div class="flex flex-col items-center mb-4">
                <a href=""
                    class="bg-blue-600 text-white rounded p-2 w-full text-center hover:bg-blue-500 transition duration-200 flex justify-center gap-10 items-center">
                    <img class="h-8 w-8 rounded-full" src="{{ asset('account/download.jpeg') }}" alt="">
                    Join with Google
                </a>
            </div>

            <form method="POST" action="{{ route('account.register') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name:</label>
                    <input type="text" id="name" name="name" required
                        class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Enter your name">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email:</label>
                    <input type="email" id="email" name="email" required
                        class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Enter your email">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password:</label>
                    <input type="password" id="password" name="password" required
                        class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Enter your password">
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700">Confirm Password:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required
                        class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Confirm your password">
                </div>
                <button type="submit"
                    class="bg-blue-600 text-white rounded p-3 hover:bg-blue-500 transition duration-200">Sign Up</button>
            </form>
            <div class="mt-4 text-center">
                <p class="text-gray-700">Already have an account?</p>
                <a href="{{ route('account.login') }}"
                    class="inline-block mt-2 bg-gray-200 text-gray-700 rounded p-2 hover:bg-gray-300 transition duration-200">Login</a>
            </div>
        </div>
    </div>
@endsection
