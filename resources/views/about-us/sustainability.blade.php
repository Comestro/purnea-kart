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
                <p class="font-bold text-2xl">Everyone plays a key role in the roadmap to a sustainable future for the
                    planet. #Ecommerce is a force for good, and PurneaKart is on a mission to do better - for people, for
                    communities and our world</p>
            </div>
        </div>
    </div>

    {{-- second section --}}
    <div class="flex px-[10%] gap-5">
        <div class="flex w-8/12 flex-col text-slate-800 gap-8">
            <p class="text-4xl">Sustainability</p>
            <p class="text-xl">
                At PurneaKart, our goal is to use the power of our platform for the good of people and our planet. We are
                driven by a mission to fulfil our responsibility to the planet and the society as we maximise our efforts to
                build value for the Indian consumer.
            </p>
            <p class="text-xl">
                As an early adopter of sustainability in the e-commerce space in India, our endeavour has been to embed
                sustainability across business strategies and functions. In these past couple of years, we have focused on
                creating a systems change through thought leadership and effective partnerships to create long term and
                sustained impact.
            </p>
            <p class="text-xl">
                We are investing in continued efforts towards developing a responsible value chain with a focus on
                mitigating our climate change impact through various supply chain initiatives including adoption of
                renewable energy, sustainable packaging, electric mobility, waste management, water stewardship and supplier
                engagement. As e-commerce disrupts the way people shop, our ambition is to involve all our brands and
                businesses in building a sustainable platform that provides our consumers with trusted ways to shop more
                sustainably.
            </p>
            <p class="text-xl">
                Through our powerful partnerships with communities, civil society organisations, and coalitions, we seek to
                drive positive impact with ecosystem conversations, enable cross learning and contribute to building a
                sustainable future for all. As we start our journey, we know that it would not be easy. We believe that it
                is important to develop a culture of sustainability where we can bring everyone together through our
                journey.
            </p>
        </div>
        <div class="flex w-4/12">
            <img src="{{ asset('about-us-images/about-office-image.png') }}" class="h-[480px] w-[400px]" alt="">
        </div>
    </div>

    {{-- third section --}}
    <div class="flex bg-orange-600 px-[20%] py-20 justify-center items-center">
        <div class="flex flex-col gap-20 justify-center items-center">
            <h2 class="text-center text-4xl font-semibold text-white">Key Milestones in our Journey</h2>
            <div class="flex p-10">
                {{-- left side content --}}
                <div class="flex flex-col border-r-4 border-dashed border-white">
                    <div class="flex flex-col p-10">
                        <div class="bg-white p-5 rounded">
                            <h2 class="text-4xl font-semibold text-slate-900">In March 2024</h2>
                            <p>
                                PurneaKart Group Achieves New Milestone in Water Conservation; Recycles over 67 Million
                                Liters
                                of Wastewater in One Year.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- right side content --}}
                <div class="flex flex-col">
                    <div class="flex flex-col p-10">
                        <div class="bg-white p-5 rounded">
                            <h2 class="text-4xl font-semibold text-slate-900">In March 2024</h2>
                            <p>
                                PurneaKart Group Achieves New Milestone in Water Conservation; Recycles over 67 Million
                                Liters
                                of Wastewater in One Year.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
