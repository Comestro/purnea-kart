<div class="w-full md:w-5/12 mx-auto mt-24 p-4 bg-white overflow-hidden ">

    <div class="px-6 py-4">
    <div class="flex items-center justify-between mb-6">
            <div class="flex items-center ">
                <div class="ml-6 text-gray-500">EMAIL & GST</div> 
                <div class="ml-6 text-gray-500">PASSWORD CREATION</div>
                <div class="ml-6 text-gray-500">ONBOARDING DASHBOARD</div>
            </div>
        </div>


        <!-- Form Fields -->
        <form>
            <div class="mb-4">

                <div class="flex flex-col md:flex-row">
                    <input type="text" id="mobile" name="mobile" class="w-full px-3 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-200" placeholder="Enter Mobile Number">
                    <!-- <button class="mt-2 md:mt-0 md:ml-2 px-4 py-2 bg-blue-500 text-white font-medium rounded-md hover:bg-blue-600">Send OTP</button> -->
                </div>
            </div>

            <div class="mb-4">

                <input type="email" id="email" name="email" class="w-full px-3 py-3 border border-gray-300 rounded-lg  shadow-sm focus:outline-none focus:ring focus:ring-blue-200" placeholder="Email ID" required>
            </div>



            <div class="mb-4">

                <input type="text" id="gstin" name="gstin" class="w-full px-3 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-200" placeholder="Enter GSTIN Number" required>
            </div>



            <div class="flex flex-col space-y-3 mb-4">

                <label for="terms" class="text-sm  font-semibold text-zinc-700">GSTIN is required to sell products on Flipkart. You can also share it in the final step. </label>
                <label for="terms" class="text-sm text-zinc-600">By continuing, I agree to purneacart. <a href="#" class="text-blue-500">Terms of Use & Privacy Policy</a></label>
            </div>


            <button type="submit" class=" bg-blue-700 mt-4 flex items-center gap-1 text-white py-3 px-4 rounded-xl hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200">
                <p class="font-semibold">Register & Continue</p>
                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                </span>
            </button>

        </form>
    </div>
</div>