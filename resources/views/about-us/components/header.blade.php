<header class="bg-white shadow-xl fixed w-full">
    <div class="container mx-auto px-20 py-3 flex justify-between items-center">

        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex w-48">
            <img src="{{ asset('purneakart.png') }}" alt="Logo" class="h-10">
        </a>

        <!-- Navigation -->
        <nav class=" text-gray-600 flex gap-10">
            <a href="{{ route('about.home') }}" class="hover:text-blue-600 text-xl font-thin">About</a>
            <a href="{{ route('about.ethics') }}" class="hover:text-blue-600 text-xl font-thin">Ethics</a>
            <a href="{{ route('about.culture') }}" class="hover:text-blue-600 text-xl font-thin">Culture</a>
            <a href="#" class="hover:text-blue-600 text-xl font-thin">Technology</a>
            <a href="#" class="hover:text-blue-600 text-xl font-thin">Sustainability</a>
            <a href="#" class="hover:text-blue-600 text-xl font-thin">Stories</a>
        </nav>

    </div>
</header>
