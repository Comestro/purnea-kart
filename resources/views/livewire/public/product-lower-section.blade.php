<div>
    <div class="mt-12" x-data="{ activeTab: 2 }">
        <!-- Tab Navigation -->
        <div class="border-b">
            <nav class="flex justify-around mr-12">
                <a href="#" :class="{'border-b-2 border-black font-semibold text-gray-700': activeTab === 1, 'text-gray-600 hover:text-black': activeTab !== 1}"
                   class="py-2 px-5"
                   @click.prevent="activeTab = 1">
                    Product Details
                </a>
                <a href="#" :class="{'border-b-2 border-black font-semibold text-gray-700': activeTab === 2, 'text-gray-600 hover:text-black': activeTab !== 2}"
                   class="py-2 px-5"
                   @click.prevent="activeTab = 2">
                    Rating & Reviews
                </a>
                <a href="#" :class="{'border-b-2 border-black font-semibold text-gray-700': activeTab === 3, 'text-gray-600 hover:text-black': activeTab !== 3}"
                   class="py-2 px-5"
                   @click.prevent="activeTab = 3">
                    FAQs
                </a>
            </nav>
        </div>

        <!-- Content Sections -->
        <div x-show="activeTab === 1" class="tab-content mt-8 transition-transform duration-500" x-transition>
            {{-- <livewire:product.product-details :product="$product" /> --}}
            <h1>Product Details</h1>
        </div>

        <div x-show="activeTab === 2" class="tab-content mt-8 transition-transform duration-500" x-transition>
            <h2>Rating & Reviews</h2>
            <livewire:product.product-review :product="$productId">
            
        </div>

        <div x-show="activeTab === 3" class="tab-content mt-8 transition-transform duration-500" x-transition>
            <h2 class="text-2xl font-semibold mb-6">FAQs</h2>
            <p class="text-gray-700">Here are the frequently asked questions...</p>
        </div>
    </div>
</div>
