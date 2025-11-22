<div class="card lg:w-[270px] w-[220px]">
    <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
        <!-- Image (fixed height) -->
        <div class="h-48 w-full bg-gray-200 rounded-md flex items-center justify-center">
            <img src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg"
                class="h-full object-contain" alt="Product Image">
        </div>
    
        <!-- Badge -->
        <div class="mt-4">
            <span class="inline-block rounded bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800">
                Up to 35% off
            </span>
        </div>
    
        <!-- Title -->
        <h3 class="mt-3 text-base font-semibold text-gray-900 line-clamp-2">
            Apple iMac 27", 1TB HDD, Retina 5K Display, M3 Max
        </h3>
    
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
            <p class="text-2xl font-bold text-gray-900 whitespace-nowrap">Rp10.000</p>
    
            <button class="rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-700">
                Add to cart
            </button>
        </div>
    </div>
</div>
