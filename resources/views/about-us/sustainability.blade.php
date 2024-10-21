@extends('about-us.components.layout')

@section('title')
    PurneaKart Corporate Website
@endsection

@section('content')
    {{-- first section --}}
    <div class="flex flex-col lg:flex-row  p-8 items-center justify-center min-h-screen">
        <div class="flex px-[10%]">
            <!-- Left Side (Image) -->
            <div class="lg:w-1/3 mb-8 lg:mb-0">
                <img src="{{ asset('about-us-images/sadique-sir.png') }}" alt="About Us Image"
                    class="rounded-full w-80 h-80 object-cover mx-auto shadow-lg">
            </div>

            <!-- Right Side (Content) -->
            <div class="lg:w-2/3 lg:pl-12 p-8 rounded">
                <h1 class="mb-6 font-bold text-lg flex">
                    Rajnish Kumar , <a href="" class="text-blue-600">&nbsp;Chief Corporate Affairs Officer -
                        PurneaKart</a>
                    <div class="border-b-2 w-32 border-black"></div>
                </h1>
                <p class="font-bold text-2xl">Everyone plays a key role in the roadmap to a sustainable future for the planet. #Ecommerce is a force for good, and Flipkart is on a mission to do better - for people, for communities and our world</p>
            </div>
        </div>
    </div>
@endsection
