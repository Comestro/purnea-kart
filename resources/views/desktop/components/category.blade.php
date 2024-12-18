<div class="flex w-full items-center bg-white gap-5 shadow-md px-4 py-2 overflow-hidden">
    @foreach ($categories as $cat)
        <a href="{{ route('filter', $cat->cat_slug) }}" class="text-center p-1 rounded-md" style="min-width: 100px; min-height: 85px;">
            <img src="{{ asset('storage/public/image/category/'.$cat->image) }}" alt="Top Offers" class="mx-auto h-[55px]">
            <p class="mt-2 text-gray-700 font-semibold truncate">{{ $cat->cat_title }}</p>
        </a>
    @endforeach
</div>
