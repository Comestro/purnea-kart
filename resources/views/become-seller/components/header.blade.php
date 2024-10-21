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
                    <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
                        class="text-gray-600 hover:text-blue-600 font-thin rounded-lg text-lg px-5 py-2text-center inline-flex items-center"
                        type="button">
                        Online Selling
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownHover"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sell
                                    Online</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Fees
                                    and Commission</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grow</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Learn</a>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- second dropdown goes here --}}
                <div class="relative inline-block">
                    <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover2" data-dropdown-trigger="hover"
                        class="text-gray-600 hover:text-blue-600 font-thin rounded-lg text-lg px-5 py-2text-center inline-flex items-center"
                        type="button">
                        Fees and Commission
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownHover2"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sell
                                    Online</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Fees
                                    and Commission</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grow</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Learn</a>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- third dropdown goes here --}}
                <div class="relative inline-block">
                    <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover3" data-dropdown-trigger="hover"
                        class="text-gray-600 hover:text-blue-600 font-thin rounded-lg text-lg px-5 py-2text-center inline-flex items-center"
                        type="button">
                        Grow
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownHover3"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sell
                                    Online</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Fees
                                    and Commission</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grow</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Learn</a>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- fourth dropdown goes here --}}
                <div class="relative inline-block">
                    <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover4" data-dropdown-trigger="hover"
                        class="text-gray-600 hover:text-blue-600 font-thin rounded-lg text-lg px-5 py-2text-center inline-flex items-center"
                        type="button">
                        Learn
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownHover4"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownHoverButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sell
                                    Online</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Fees
                                    and Commission</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grow</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Learn</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Fifth link without dropdown -->
                <a href="#" class="hover:text-blue-600 text-xl font-thin">Shopsy</a>
            </nav>
        </div>

        <div class="flex items-center gap-3">
            <!-- Modal toggle -->
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                Login
            </button>
            <a href="{{ route('seller.register') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded-none hover:bg-blue-500 text-xl">Start Selling</a>
        </div>
    </div>
</header>

<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto fixed inset-0 z-50 flex items-center justify-center bg-opacity-75">
    <div class="relative p-6 w-full max-w-lg max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-lg dark:bg-gray-800">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-5 bg-blue-600 rounded-t-lg">
                <h3 class="text-2xl font-bold text-white">
                    Sign in to Purnea Kart
                </h3>
                <button type="button" class="text-white bg-transparent hover:bg-blue-700 rounded-lg p-2 transition-colors" data-modal-hide="authentication-modal">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="px-8 py-6 bg-gray-100 dark:bg-gray-900 rounded-b-lg">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4 text-center">Login</h2>
                
                <div class="mb-5">
                    <input type="text" placeholder="Username, phone number, or email"
                        class="w-full px-4 py-3 border border-gray-300 rounded-full focus:outline-none focus:border-blue-500 transition-colors" />
                </div>

                <button
                    class="w-full bg-blue-500 text-white py-3 rounded-full focus:outline-none hover:bg-blue-600 transition-colors">
                    Next
                </button>

                <div class="text-center mt-5">
                    <p class="text-gray-500 dark:text-gray-400">Don't have an account?</p>
                    <a href="#"
                        class="text-blue-600 dark:text-white font-semibold border border-blue-600 py-2 px-6 rounded-full hover:bg-blue-50  transition-colors inline-block">Register</a>
                </div>

                <div class="mt-8 text-xs text-gray-500 dark:text-gray-400 text-center">
                    By continuing, you agree to our <a href="#" class="text-blue-500">Terms of Use</a> & <a href="#"
                        class="text-blue-500">Privacy Policy</a>.
                </div>

                <div class="mt-4 text-xs text-gray-500 dark:text-gray-400 text-center">
                    Protected by reCAPTCHA & Google <a href="#" class="text-blue-500">Privacy Policy</a> and <a href="#" class="text-blue-500">Terms</a>.
                </div>
            </div>
        </div>
    </div>
</div>


