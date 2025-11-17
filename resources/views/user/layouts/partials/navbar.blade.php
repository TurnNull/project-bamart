<nav class="bg-white top-0 left-0 w-full shadow-sm sticky z-50">
    <div class="container mx-auto px-4 py-3">
        <div class="flex items-center justify-between">
            <div class="flex w-full justify-between">
                {{-- Logo --}}
                <a href="#" class="hidden md:flex mr-5 items-center shrink-0">
                    <img src="img/logo/bamart-logo.svg" alt="logo" class="w-[110px] md:w-[140px] h-auto shrink-0" />
                </a>
                {{-- Search --}}
                <div class="flex items-center w-full">
                    <form class="flex flex-1 mx-6 relative">
                        <!-- Input -->
                        <input type="text" placeholder="Cari produk..."
                            class="w-full border border-gray-300 rounded-full py-2 pl-4 pr-12
                                    focus:outline-none focus:ring-1 focus:ring-[#7D1972]">
                        <button type="submit"
                            class="absolute right-0 top-1/2 -translate-y-1/2 
                                    h-full px-4 bg-gray-200 border-l border-gray-300 
                                    flex items-center justify-center 
                                    hover:bg-gray-300 rounded-r-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-4.35-4.35m0 0A7.5 7.5 0 1 0 5.65 5.65a7.5 7.5 0 0 0 10.6 10.6Z" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

                    <div class="flex items-center">
                        <a href="#" class="px-4 py-2">
                            <x-icon name="shopping-cart" />
                        </a>

                        <div class="hidden sm:flex border-l h-full pl-10">
                            <a href="#"
                                class="py-2 px-4 mr-3 border-2 border-[#7D1972] font-medium text-[#7D1972] rounded-xl hover:underline">Masuk</a>
                            <a href="#"
                                class="py-2 px-4 border-2 border-[#7D1972] bg-[#7D1972] rounded-xl font-medium text-white hover:underline">Daftar</a>
                        </div>
                    </div>
            </div>
        </div>
</nav>
