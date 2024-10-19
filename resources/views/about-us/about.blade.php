@extends('about-us.components.layout')

@section('title')
    PurneaKart Corporate Website
@endsection

@section('content')
    {{-- first section --}}
    <div class="flex flex-col lg:flex-row p-8 items-center justify-center min-h-screen">
        <div class="flex px-[10%]">
            <!-- Left Side (Image) -->
            <div class="lg:w-1/3 mb-8 lg:mb-0">
                <img src="{{ asset('about-us-images/sadique-sir.png') }}" alt="About Us Image"
                    class="rounded-full w-72 h-72 object-cover mx-auto shadow-lg">
            </div>

            <!-- Right Side (Content) -->
            <div class="lg:w-2/3 lg:pl-12 p-8 rounded">
                <h1 class="mb-6 font-bold text-lg flex">
                    Syed Sadique Hussain, <a href="" class="text-blue-600">Chief Excutive Officer - PurneaKart</a>
                    <div class="border-b-2 w-32 border-black"></div>
                </h1>

                <p class="font-bold text-lg">As a homegrown e-commerce organization, we direct our efforts towards building
                    a
                    sustainable
                    business while creating inclusive and impactful growth for all our stakeholders. We believe in
                    transformative innovation and risk-taking. We don't shy away from failure. We learn from our experiences
                    and
                    strive towards enhanced customer experiences while bridging the gap between bharat and India with
                    digital
                    commerce.</p>


            </div>
        </div>
    </div>

    {{-- second section --}}
    <div class="flex justify-between px-[10%] gap-5">
        <div class="flex flex-col w-8/12">
            <h2 class="text-5xl font-black mb-10">About PurneaKart Group Companies</h2>
            <div class="flex flex-col text-lg">
                <p class="text-gray-700 mb-4">
                    The PurneaKart Group is one of India’s leading digital commerce entities and includes group companies
                    PurneaKart, Myntra, PurneaKart Wholesale, PurneaKart Health+, and Cleartrip.
                </p>
                <p class="text-gray-700">
                    Started in 2007, PurneaKart has enabled millions of sellers, merchants, and small businesses to
                    participate in India's digital commerce revolution. With a registered customer base of more than 500
                    million, PurneaKart's marketplace offers over 150 million products across 80+ categories. Today, there
                    are
                    over 14 lakh sellers on the platform, including Shopsy sellers. With a focus on empowering and
                    delighting every Indian by delivering value through technology and innovation, PurneaKart has created
                    lakhs of jobs in the ecosystem while empowering generations of entrepreneurs and MSMEs. PurneaKart is
                    known for pioneering services such as Cash on Delivery, No Cost EMI and easy returns, which are
                    customer-centric innovations that have made online shopping more accessible and affordable for millions
                    of Indians. In 2024, PurneaKart also introduced the PurneaKart UPI handle to further enhance its digital
                    payment offerings for all customers and further India’s digital economy vision.
                </p>
            </div>
        </div>
        <div class="flex w-4/12">
            <img src="{{ asset('about-us-images/sadique-sir.png') }}" alt="">
        </div>
    </div>

    {{-- third section --}}
    <div class="flex flex-col px-[10%] py-5">
        {{-- team leader's section goes here --}}
        <h2 class="text-4xl flex-1 text-center mb-5">Meet Our Leaders</h2>
        {{-- image's grid goes here --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            {{-- single image --}}
            <div class="overflow-hidden">
                <img src="{{ asset('about-us-images/sadique-sir.png') }}" alt="Image 1" class="w-full h-64 object-cover rounded-2xl">
                <div class="flex flex-col text-center text-lg font-medium py-2">
                    <span>sadiq sir</span>
                    <span>chief Excustive officer, myntra</span>
                </div>
            </div>
            {{-- single image --}}
            <div class="overflow-hidden">
                <img src="{{ asset('about-us-images/sadique-sir.png') }}" alt="Image 1" class="w-full h-64 object-cover rounded-2xl">
                <div class="flex flex-col text-center text-lg font-medium py-2">
                    <span>sadiq sir</span>
                    <span>chief Excustive officer, myntra</span>
                </div>
            </div>
            {{-- single image --}}
            <div class="overflow-hidden">
                <img src="{{ asset('about-us-images/sadique-sir.png') }}" alt="Image 1" class="w-full h-64 object-cover rounded-2xl">
                <div class="flex flex-col text-center text-lg font-medium py-2">
                    <span>sadiq sir</span>
                    <span>chief Excustive officer, myntra</span>
                </div>
            </div>
            {{-- single image --}}
            <div class="overflow-hidden">
                <img src="{{ asset('about-us-images/sadique-sir.png') }}" alt="Image 1" class="w-full h-64 object-cover rounded-2xl">
                <div class="flex flex-col text-center text-lg font-medium py-2">
                    <span>sadiq sir</span>
                    <span>chief Excustive officer, myntra</span>
                </div>
            </div>
            {{-- single image --}}
            <div class="overflow-hidden">
                <img src="{{ asset('about-us-images/sadique-sir.png') }}" alt="Image 1" class="w-full h-64 object-cover rounded-2xl">
                <div class="flex flex-col text-center text-lg font-medium py-2">
                    <span>sadiq sir</span>
                    <span>chief Excustive officer, myntra</span>
                </div>
            </div>
            {{-- single image --}}
            <div class="overflow-hidden">
                <img src="{{ asset('about-us-images/sadique-sir.png') }}" alt="Image 1" class="w-full h-64 object-cover rounded-2xl">
                <div class="flex flex-col text-center text-lg font-medium py-2">
                    <span>sadiq sir</span>
                    <span>chief Excustive officer, myntra</span>
                </div>
            </div>
            {{-- single image --}}
            <div class="overflow-hidden">
                <img src="{{ asset('about-us-images/sadique-sir.png') }}" alt="Image 1" class="w-full h-64 object-cover rounded-2xl">
                <div class="flex flex-col text-center text-lg font-medium py-2">
                    <span>sadiq sir</span>
                    <span>chief Excustive officer, myntra</span>
                </div>
            </div>
            {{-- single image --}}
            <div class="overflow-hidden">
                <img src="{{ asset('about-us-images/sadique-sir.png') }}" alt="Image 1" class="w-full h-64 object-cover rounded-2xl">
                <div class="flex flex-col text-center text-lg font-medium py-2">
                    <span>sadiq sir</span>
                    <span>chief Excustive officer, myntra</span>
                </div>
            </div>
            {{-- single image --}}
            <div class="overflow-hidden">
                <img src="{{ asset('about-us-images/sadique-sir.png') }}" alt="Image 1" class="w-full h-64 object-cover rounded-2xl">
                <div class="flex flex-col text-center text-lg font-medium py-2">
                    <span>sadiq sir</span>
                    <span>chief Excustive officer, myntra</span>
                </div>
            </div>
            {{-- single image --}}
            <div class="overflow-hidden">
                <img src="{{ asset('about-us-images/sadique-sir.png') }}" alt="Image 1" class="w-full h-64 object-cover rounded-2xl">
                <div class="flex flex-col text-center text-lg font-medium py-2">
                    <span>sadiq sir</span>
                    <span>chief Excustive officer, myntra</span>
                </div>
            </div>


        </div>

    </div>
@endsection
