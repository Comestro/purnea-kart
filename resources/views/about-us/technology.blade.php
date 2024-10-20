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
                <img src="{{ asset('about-us-images/IT2.png') }}" alt="About Us Image"
                    class="rounded-full w-72 h-72 object-cover mx-auto shadow-lg">
            </div>

            <!-- Right Side (Content) -->
            <div class="lg:w-2/3 lg:pl-12 p-8 rounded">
                <h1 class="mb-6 font-bold text-lg flex">
                    Roni Saha , <a href="" class="text-blue-600">&nbsp;Chief Product Technology Officer -
                        PurneaKart</a>
                    <div class="border-b-2 w-32 border-black"></div>
                </h1>
                <p class="font-bold text-lg">Every step of the way in our history as a homegrown e-commerce platform,
                    technology has played a crucial role in problem solving for the unique needs of Indian shoppers.
                    Investing in the right technology and building for the future with our deep rooted understanding of the
                    Indian market, we continue to scale our tech capabilities and enhancing customers' shopping
                    experience on PurneaKart</p>
            </div>
        </div>
    </div>

    {{-- second section goes here --}}
    <div class="flex flex-col mb-5">
        <div class="flex px-[20%] flex-col gap-10">
            <h2 class="text-4xl font-black text-center flex-1">Innovation at PurneaKart Group</h2>
            <div class="bg-blue-500 p-10 flex flex-col justify-center items-center">
                <img class="border-[20px] border-white" src="{{ asset('about-us-images/technology.png') }}" alt="">
                <p class="text-white font-semibold text-2xl text-center p-[10%]">Embracing Innovation and Employment:
                    PurneaKart's journey in 2024 and the Road Ahead</p>
                <a href="" class="bg-blue-600 text-center text-white px-10 py-2 rounded">Read More</a>
            </div>
        </div>
    </div>

    {{-- third section --}}
    <div class="flex flex-col justify-center items-center p-10 gap-5">
        <h2 class="text-5xl font-bold text-slate-800">Innovation</h2>
        <p class="px-[20%] text-center text-xl font-semibold text-gray-600">Discover the trailblazing technology that is
            shaping e-commerce in India with insights from PurneaKart’s sharpest tech minds</p>
    </div>

@endsection
