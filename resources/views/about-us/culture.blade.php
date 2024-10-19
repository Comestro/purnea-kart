@extends('about-us.components.layout')

@section('title')
    PurneaKart Corporate Website
@endsection

@section('content')
    <br>
    <br>
    <br>
    <br>
    {{-- first section --}}
    <div class="flex flex-col lg:flex-row  p-8 items-center justify-center py-10">
        <div class="flex px-[10%]">
            <!-- Left Side (Image) -->
            <p class="text-4xl font-bold italic">“Studies indicate that happy employees are more productive, more creative,
                and provide better client service. They’re less likely to quit or call in sick. What’s more, they act as
                brand ambassadors outside the office, spreading positive impressions of their company and attracting star
                performers to their team.”
                ― Ron Friedman, The Best Place to Work: The Art and Science of Creating an Extraordinary Workplace</p>
        </div>
    </div>

    {{-- second section goes here --}}
    <div class="flex flex-col mb-5">
        <div class="flex px-[20%] flex-col gap-10">

            <h2 class="text-4xl font-black text-center flex-1">PurneaKart Culture</h2>
            <p class="text-xl">At PurneaKart, we are dedicated to the cause of maximising for our customers, stakeholders and
                the planet. We
                achieve this when Flipsters maximise themselves on the dimensions of their own choice — be it their
                potential, impact, voice, ideas, influence, well-being, and more.</p>

            <img src="{{ asset('about-us-images/together.png') }}" alt="">
            <p class="text-xl">We deliver this experience through our unique people-centric culture that’s based on our core
                values of Audacity, Bias for Action, Customer-First, Integrity and Inclusion and our 4 promises — Leave a
                Mark through working on audacious challenges, Experiment Learn Grow through a self-owned career trajectories
                and continuous growth, Work With The Best in our inclusive high-performing teams, and Be Cared For through
                our employee-focused customisable benefits policies.</p>
            <p class="text-xl">In 2020, PurneaKart was recognized as one of India’s Top Companies to Work For by Great Place
                to Work® Institute (India). PurneaKart has been recognised among LinkedIn’s Top Companies in 2021, 2019,
                2016
                and also among Working Mother and Avatar’s 100 Best Companies for Women in India for the third year in a
                row.</p>
        </div>
    </div>

    {{-- third section for marquee tag --}}
    <div class="overflow-hidden py-10">
        <marquee behavior="scroll" direction="right" scrollamount="6">
            <div class="flex space-x-5">
                <img src="{{ asset('about-us-images/sadique-sir.png') }}" alt="Image 1" class="h-48">
                <img src="{{ asset('about-us-images/OIP.jpeg') }}" alt="Image 2" class="h-48">
                <img src="{{ asset('about-us-images/IT2.png') }}" alt="Image 3" class="h-48">
                <img src="{{ asset('about-us-images/bg-group.jpeg') }}" alt="Image 2" class="h-48">
                <img src="{{ asset('about-us-images/sadique-sir.png') }}" alt="Image 3" class="h-48">
            </div>
        </marquee>
    </div>

    {{-- fourth section goes here --}}
    <div class="flex h-[600px]">
        <div class="flex w-8/12 bg-blue-600">
            <div class="flex flex-col p-20 gap-2">
                <h2 class="text-yellow-300 text-4xl font-bold">Inclusion & Diversity</h2>
                <p class="text-slate-100 text-xl">PurneaKart’s Workplace Equality charter is built on the pillars of trust,
                    inclusion, support, recognition and genuine care. Our emphasis on seeing every employee as a unique
                    individual with unique needs, and supporting them in the best possible way allows them to set their own
                    benchmarks and bring their best selves to work. We ensure that everyone, irrespective of their gender,
                    faith, belief, ethnicity, caste or sexual orientation, gets an equally powerful seat on the table.</p>
                    <img class="size-28 mt-44 ml-8 animate-spin" style="animation-duration:5000ms" src="{{ asset('about-us-images/openings-down-illustration.png') }}" alt="">
            </div>
        </div>
        <div class="flex w-4/12">
            <img class="" src="{{ asset('about-us-images/we-belong.png') }}" alt="">
        </div>
    </div>

    {{-- last section goes here --}}
    <div class="flex text-slate-700 flex-col px-[10%] py-10 gap-6">
        <h2 class="text-4xl font-semibold text-center">Employee Policies</h2>
        <p class="text-xl">At PurneaKart, employee policies extend beyond just taking care of Flipsters, we ensure that they
            can take care of their families too. From comprehensive family support, extended medical coverage, and flexible
            insurance plans, the newly introduced employee policies for Flipsters focus on health and wellbeing first and
            foremost. From vaccination drives to healthcare initiatives, physical and mental health check-ins to financial
            aid amid emergencies, the PurneaKart Group is working to solve for our employees’ current needs with urgency and
            empathy.</p>
    </div>
@endsection
