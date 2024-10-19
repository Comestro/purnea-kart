<div class="w-full md:w-5/12 mx-auto mt-24 p-4 bg-white overflow-hidden ">

    <div class="px-3 py-4">
        <div class="flex items-center justify-between mb-6">
            @if ($step == 1)
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
            @elseif($step == 2)
            <div class="flex items-center gap-1 ">
                <div class="ml-6 text-gray-500 flex items-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <p class="text-gray-500">EMAIL & GST</p>
                </div>
                <div class="ml-6 text-yellow-600 flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
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
            @else
            <div class="flex items-center gap-1 ">
                <div class="ml-6 text-gray-500 flex items-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <p class="text-gray-500">EMAIL & GST</p>
                </div>
                <div class="ml-6  text-gray-500  flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <p> PASSWORD CREATION</p>
                </div>
                <div class="ml-6 text-yellow-600 gap-1 flex items-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <p>ONBOARDING DASHBOARD</p>
                </div>
            </div>

            @endif
        </div>


        <!-- Form Fields -->
        <form wire:submit.prevent="store">
            @if ($step == 1)
            <div class="mb-4">
                <input type="text" id="email" wire:model="name" class="w-full px-3 py-3 border border-gray-300 rounded-lg  shadow-sm focus:outline-none focus:ring focus:ring-blue-200" placeholder="Enter Your Name">
                @error('name')
                <p class="text-black text-xs">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-4">

                <div class="flex flex-col md:flex-row">
                    <input type="number" id="mobile" wire:model="mobile" class="w-full px-3 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-200" placeholder="Enter Mobile Number">
                    <!-- <button class="mt-2 md:mt-0 md:ml-2 px-4 py-2 bg-blue-500 text-white font-medium rounded-md hover:bg-blue-600">Send OTP</button> -->

                </div>
                @error('mobile')
                <p class="text-black text-xs">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-4">
                <input type="email" id="email" wire:model="email" class="w-full px-3 py-3 border border-gray-300 rounded-lg  shadow-sm focus:outline-none focus:ring focus:ring-blue-200" placeholder="Email ID" >
                @error('email')
                <p class="text-black text-xs mb-2">{{$message}}</p>
                @enderror
            </div>


            <div class="mb-4">

                <input type="text" id="gstin" wire:model="gst" class="w-full px-3 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-200" placeholder="Enter GSTIN Number" required>
                @error('gst')
                <p class="text-black text-xs">{{$message}}</p>
                @enderror
            </div>

            <div class="flex flex-col space-y-3 mb-4">

                <label for="terms" class="text-sm  font-semibold text-zinc-700">GSTIN is required to sell products on Purneakart. You can also share it in the final step. </label>
                <label for="terms" class="text-sm text-zinc-600">By continuing, I agree to Purneakart. <a href="#" class="text-blue-500">Terms of Use & Privacy Policy</a></label>
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
            <div class="flex flex-col gap-2 ">
                <input type="password" id="password" wire:model.live="password" class="w-full px-3 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-200" placeholder="Password">
                @error('password')
                <p class="text-black text-xs mb-2 ">{{$message}}</p>
                @enderror
                <input type="password" id="confirmPassword" wire:model.live="confirmPassword" class="w-full px-3 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-200" placeholder="Confirm Password">
                @error('confirmPassword')
                <p class="text-black text-xs mb-2">{{$message}}</p>
                @enderror
                <div class="flex gap-2 items-center  w-full ">
                    <button wire:click="previouStep" class="flex gap-1 justify-between p-2.5 mt-3 bg-slate-200 rounded-xl">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <p class="text-lg">Back</p>

                    </button>
                    <button type="submit" wire:click="Onboard" class=" bg-blue-700 mt-4 flex items-center gap-1 text-white py-3 px-4 rounded-xl hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200">
                        <p class="font-semibold">Resgister & Continue</p>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
            @endif
            @if ($step == 3)
            <div class="mt-4 flex items-center justify-center px-4">
                <div class="bg-white shadow-lg rounded-lg p-4 max-w-lg w-full text-center">
                    <!-- Icon or Image -->
                    <div class="mb-6">
                       
                        <svg class="mx-auto h-16 w-16 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                        </svg>

                    </div>

                    <!-- Thank You Message -->
                    <h1 class="text-3xl font-bold text-gray-800">Thank You!</h1>
                    <p class="mt-4 text-lg text-gray-600">Thank you for being part of our family <strong>PurneaKart</strong>. We will contact you shortly.</p>

                    <!-- Additional Message or CTA -->
                    <p class="mt-6 text-gray-500 text-sm">We appreciate your trust and look forward to serving you!</p>

                    <!-- Home Button -->
                    <div class="mt-8">
                        <a href="/" class="inline-block bg-indigo-600 text-white px-6 py-2 rounded-md text-sm font-medium shadow-md hover:bg-indigo-700 transition duration-200">
                            Go Back to Home
                        </a>
                    </div>
                </div>
            </div>
            @endif

        </form>




    </div>
</div>