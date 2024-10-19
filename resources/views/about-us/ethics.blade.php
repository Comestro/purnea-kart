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
                    class="rounded-full w-72 h-72 object-cover mx-auto shadow-lg">
            </div>

            <!-- Right Side (Content) -->
            <div class="lg:w-2/3 lg:pl-12 p-8 rounded">
                <h1 class="mb-6 font-bold text-lg flex">
                    Gorav Soni , <a href="" class="text-blue-600">&nbsp;Chief Ethics & Compliance Officer, PurneaKart
                        Group</a>
                    <div class="border-b-2 w-32 border-black"></div>
                </h1>

                <p class="font-bold text-lg">Integrity builds trust, and the trust that our customers and stakeholder place
                    in us is paramount. To become the trusted e-commerce platform in India, we must commit to transparency
                    and accountability, and always act with integrity and do the right thing - even when no one's watching.
                </p>


            </div>
        </div>
    </div>

    {{-- second section --}}
    <div class="flex justify-between px-[10%] gap-5">
        <div class="flex flex-col w-8/12">
            <h2 class="text-5xl font-black mb-10">Overview</h2>
            <div class="flex flex-col text-lg">
                <p class="text-gray-700 mb-4">
                    At the PurneaKart Group, solving e-commerce for India is an objective that we take very seriously. At
                    the same time, we must remind ourselves constantly that our work is not just about what we achieve, but
                    how we achieve it.
                </p>
                <p class="text-gray-700 mb-4">
                    Success is only meaningful if it is achieved the right way. So while we continue to grow and achieve
                    greater milestones, we are committed to acting with integrity and ensuring that every decision we make
                    is based on ethical and moral principles.
                </p>
                <p class="text-gray-700 mb-4">
                    Our Code of Conduct is built on the theme ‘Integrity Builds Trust’ which aligns with our enterprise
                    objective - of establishing ‘Trust as a Competitive Advantage’. Our Code clearly reflects how our
                    commitment to integrity helps us build trust with our employees, customers, communities, and other
                    stakeholders. At its core is a simple guideline: do the right thing and speak up freely whenever you
                    have a concern or see something out of place.
                </p>
                <p class="text-gray-700 mb-4">
                    Our culture of integrity is what makes us stand out as an organization and defines who we are as a
                    company. Our values are embedded in our vision and it helps us make a difference – to ourselves and to
                    everyone we interact with.
                </p>
            </div>
        </div>
        <div class="flex w-4/12 p-10">
            <img src="{{ asset('about-us-images/sadique-sir.png') }}" alt="">
        </div>
    </div>

    {{-- code of conduct section --}}
    <div class="flex items-center justify-center h-[300px] bg-center"
        style="background-image: url('{{ asset('about-us-images/bg-group.jpeg') }}');">
        <div
            class="bg-[#5b87ffe8] h-full rounded flex text-white text-center justify-center items-center flex-col gap-3">

            <p class="text-yellow-400 text-4xl font-bold flex justify-center items-center">Code of Conduct</p>
            <p class="px-[20%] font-semibold text-lg">With a multitude of care and wellness initiatives being rolled out, PurneaKart’s Culture is all about
                prioritizing the well being of all its employees, from supply chain staff to Flipsters working from home.
                Read more about how we’re achieving this:</p>
            <a href="#" class="uppercase font-thin text-md bg-blue-500 px-10 py-3 rounded border-white border-2">Know
                more</a>

        </div>
    </div>
@endsection
