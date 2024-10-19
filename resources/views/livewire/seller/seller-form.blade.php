<div class="w-full md:w-5/12 mx-auto mt-24 p-4 bg-white overflow-hidden ">

    <div class="px-3 py-4">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-1 ">
                <div class="ml-6 text-gray-500 flex items-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <p class="text-yellow-600">EMAIL & GST</p>
                </div>
                <div class="ml-6 text-gray-500 flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <p> PASSWORD CREATION</p>
                </div>
                <div class="ml-6 text-gray-500 gap-1 flex items-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <p>ONBOARDING DASHBOARD</p>
                </div>
            </div>
        </div>


        <!-- Form Fields -->
        <form wire:submit.prevent="store">
            @if ($step == 1)
            <div class="mb-4">
                <input type="text" id="email" wire:model="name" class="w-full px-3 py-3 border border-gray-300 rounded-lg  shadow-sm focus:outline-none focus:ring focus:ring-blue-200" placeholder="Enter Your Name">
            </div>
            <div class="mb-4">

                <div class="flex flex-col md:flex-row">
                    <input type="number" id="mobile" wire:model="mobile" class="w-full px-3 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-200" placeholder="Enter Mobile Number">

                    <!-- <button class="mt-2 md:mt-0 md:ml-2 px-4 py-2 bg-blue-500 text-white font-medium rounded-md hover:bg-blue-600">Send OTP</button> -->
                </div>
            </div>

            <div class="mb-4">

                <input type="email" id="email" wire:model="email" class="w-full px-3 py-3 border border-gray-300 rounded-lg  shadow-sm focus:outline-none focus:ring focus:ring-blue-200" placeholder="Email ID" required>
            </div>

            <div class="mb-4">

                <input type="text" id="gstin" wire:model="gst" class="w-full px-3 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-200" placeholder="Enter GSTIN Number" required>
            </div>
            <div class="flex flex-col space-y-3 mb-4">

                <label for="terms" class="text-sm  font-semibold text-zinc-700">GSTIN is required to sell products on Flipkart. You can also share it in the final step. </label>
                <label for="terms" class="text-sm text-zinc-600">By continuing, I agree to purneacart. <a href="#" class="text-blue-500">Terms of Use & Privacy Policy</a></label>
            </div>


            <button wire:click="nextStep" class=" bg-blue-700 mt-4 flex items-center gap-1 text-white py-3 px-4 rounded-xl hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200">
                <p class="font-semibold">Continue</p>
                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                </span>
            </button>
            @endif

            @if($step == 2)
            <div class="flex flex-col gap-2 items-center">
                <input type="password" id="password" wire:model="password" class="w-full px-3 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-200" placeholder="Password" required>
                <input type="password" id="confirmPassword" wire:model="confirmPassword" class="w-full px-3 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-200" placeholder="Confirm Password" required>
                <button type="submit" class=" bg-blue-700 mt-4 flex items-center gap-1 text-white py-3 px-4 rounded-xl hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200">
                    <p class="font-semibold">Resgister & Continue</p>
                    <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </span>
                </button>
            </div>
            @endif

        </form>
    </div>
</div>