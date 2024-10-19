<header class="bg-white shadow fixed w-full">
    <div class="container mx-auto px-4  flex justify-between items-center">
        <div class="flex items-center">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex w-48">
                <img src="{{ asset('purneakart.png') }}" alt="Logo" class="h-10">
            </a>

            <!-- Navigation -->
            <nav class=" text-gray-600">
                <!-- Dropdown hover here for the links -->

                {{-- first dropdown goes here --}}
                <div class="relative inline-block">
                    <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-gray-600 hover:text-blue-600 font-thin rounded-lg text-lg px-5 py-2text-center inline-flex items-center" type="button">
                        Online Selling
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sell Online</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Fees and Commission</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grow</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Learn</a>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- second dropdown goes here --}}
                <div class="relative inline-block">
                    <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover2" data-dropdown-trigger="hover" class="text-gray-600 hover:text-blue-600 font-thin rounded-lg text-lg px-5 py-2text-center inline-flex items-center" type="button">
                        Fees and Commission
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownHover2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sell Online</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Fees and Commission</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grow</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Learn</a>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- third dropdown goes here --}}
                <div class="relative inline-block">
                    <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover3" data-dropdown-trigger="hover" class="text-gray-600 hover:text-blue-600 font-thin rounded-lg text-lg px-5 py-2text-center inline-flex items-center" type="button">
                        Grow
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownHover3" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sell Online</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Fees and Commission</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grow</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Learn</a>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- fourth dropdown goes here --}}
                <div class="relative inline-block">
                    <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover4" data-dropdown-trigger="hover" class="text-gray-600 hover:text-blue-600 font-thin rounded-lg text-lg px-5 py-2text-center inline-flex items-center" type="button">
                        Learn
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownHover4" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sell Online</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Fees and Commission</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grow</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Learn</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Fifth link without dropdown -->
                <a href="#" class="hover:text-blue-600 text-xl font-thin">Shopsy</a>
            </nav>
        </div>

        <div class="flex items-center gap-3">
            <a href="#" class="hover:text-blue-600 text-xl">Login</a>
            <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-none hover:bg-blue-500 text-xl">Start Selling</a>
        </div>
    </div>
</header>
