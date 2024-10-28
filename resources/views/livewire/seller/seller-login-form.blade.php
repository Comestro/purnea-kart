<div class="flex h-screen items-center justify-center shadow-lg  bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Login</h2>

        <form wire:submit.prevent="login">
            <div class="mb-4">
                <input type="text" wire:model.lazy="email" placeholder="Username or phone number or email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" />
                    @error('email')
                    <p class="text-xs ">{{$message}}</p>
                    @enderror
            </div>
            <div class="mb-4">
                <input type="password" wire:model.lazy="password" placeholder="Enter password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" />
                    @error('password')
                    <p class="text-xs ">{{$message}}</p>
                    @enderror
            </div>

            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 rounded-lg focus:outline-none hover:bg-blue-600 transition-colors">
                Next
            </button>

        </form>
        <div class="text-center mt-4">
            <p class="text-gray-500 mb-1">Don't have an account?</p>
            <a href="{{ route('seller.register') }}"
                class="text-blue-600 font-semibold border border-blue-600 py-2 px-4 inline-block rounded-lg hover:bg-blue-50 transition-colors">Register
                for new account</a>
        </div>

        <div class="mt-6 text-xs text-gray-500 text-center">
            By continuing, you agree to Flipkart's <a href="#" class="text-blue-500">Terms of Use</a> & <a
                href="#" class="text-blue-500">Privacy Policy</a>. <br /> Site protected by reCAPTCHA & Google <a
                href="#" class="text-blue-500">Privacy Policy</a> and <a href="#"
                class="text-blue-500">Terms</a> apply.
        </div>
    </div>
</div>