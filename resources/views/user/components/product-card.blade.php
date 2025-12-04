<div class="card lg:w-[270px] w-[220px]">
    <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
        <!-- Image (fixed height) -->
        <a href="{{ route('user.items.show', $item->slug) }}">
            <div class="h-48 w-full bg-gray-200 rounded-md flex items-center justify-center">
                @if (!$item->img_url)
                    <img src="{{ asset('img/background/missing-image.jpg') }}"
                        class="h-full object-fit" alt="{{ $item->img_url }}">
                    @else
                        <img src="{{ asset('storage/'.$item->img_url) }}"
                            class="h-full object-cover" alt="{{ $item->img_url }}">
                @endif
            </div>
        </a>
        <!-- Badge -->
        <div class="mt-4">
            <span class="inline-block rounded bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800">
                Potongan harga 35%
            </span>
        </div>
    
        <!-- Title -->
        <a href="{{ route('user.items.show', $item->slug) }}">
            <h3 class="mt-3 text-base font-semibold text-gray-900 line-clamp-2">
                {{ $item->nama }}
            </h3>
        <a/>
        <!-- Rating -->
        <div class="mt-2 flex items-center gap-2">
            <div class="flex items-center text-yellow-400">
                @for ($i = 0; $i < 5; $i++)
                    <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.178c.969
                            0 1.371 1.24.588 1.81l-3.385 2.46a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755
                            1.688-1.54 1.118l-3.385-2.46a1 1 0 00-1.176 0l-3.385 2.46c-.784.57-1.838-.196-1.539-1.118l1.286-3.966a1
                            1 0 00-.364-1.118L2.045 9.394c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.287-3.967z" />
                    </svg>
                @endfor
            </div>
    
            <p class="text-sm font-medium text-gray-900">5.0</p>
            <p class="text-sm text-gray-500">(455)</p>
        </div>
    
        <!-- Price & Button (fixed layout) -->
        <div class="mt-5 hidden lg:flex items-center justify-between">
            <p class="text-  font-bold text-gray-900 whitespace-nowrap">Rp{{ number_format($item->harga, 0, ',', '.')  }}</p>
    
            <a href="{{ route('user.items.show', $item->slug) }}" class="px-4 py-2">
                <x-icon name="shopping-bag" />
            </a>
        </div>
    </div>
</div>
