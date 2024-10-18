<div class="w-full md:w-5/12 mx-auto mt-24 p-4 bg-white overflow-hidden shadow-md">
    
    <div class="px-6 py-4">
       

        <!-- Form Fields -->
        <form>
            <div class="mb-4">
                <label for="mobile" class="block text-sm font-medium text-gray-700">Enter Mobile Number</label>
                <div class="flex flex-col md:flex-row">
                    <input type="text" id="mobile" name="mobile" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-200" required>
                    <button class="mt-2 md:mt-0 md:ml-2 px-4 py-2 bg-blue-500 text-white font-medium rounded-md hover:bg-blue-600">Send OTP</button>
                </div>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email ID</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-200" required>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">What are you looking to sell on Flipkart?</label>
                <div class="flex w-full space-x-4 items-center mt-2">
                   <div class="flex items-center">
                   <div class="flex-grow">
                        <input type="radio" id="allCategories" name="category" class="hidden" value="All Categories" checked>
                        <label for="allCategories" class="flex items-center p-7 border border-gray-300 rounded-md cursor-pointer">
                            <span class="text-sm">All Categories</span>
                        </label>
                    </div>
                    <div class="flex-grow mt-2 space-x-4 ">
                        <input type="radio" id="onlyBooks" name="category" class="hidden" value="Only Books">
                        <label for="onlyBooks" class="flex items-center p-7 border border-gray-300 rounded-md cursor-pointer">
                            <span class="text-sm">Only Books (PAN is mandatory)</span>
                        </label>
                    </div>
                   </div>
                </div>
            </div>

            <div class="mb-4">
                <label for="pan" class="block text-sm font-medium text-gray-700">Enter PAN Number</label>
                <input type="text" id="pan" name="pan" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-200" required>
            </div>

            <div class="mb-4 text-sm text-gray-600">
                PAN is required to sell books on Flipkart. You can also share it in the final step.
            </div>

            <div class="flex items-center mb-4">
                <input type="checkbox" id="terms" name="terms" class="mr-2" required>
                <label for="terms" class="text-sm text-gray-600">I agree to Flipkart's <a href="#" class="text-blue-500">Terms of Use & Privacy Policy</a></label>
            </div>

            <div class="mt-6">
                <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200">Register & Continue</button>
            </div>
        </form>
    </div>
</div>
