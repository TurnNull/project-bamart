<nav class="bg-transparent top-0 left-0 w-full z-50">
    <div class="container mx-auto px-4 py-3">
        <div class="flex items-center justify-between">
            <div class="flex w-lg justify-between">
                {{-- Logo --}}
                <a href="#" class="hidden md:flex mr-5 items-center shrink-0">
                    <img src="img/logo/bamart-logo.svg" alt="logo" class="w-[110px] md:w-[140px] h-auto shrink-0" />
                </a>
                {{-- Search --}}
                <div class="flex items-center w-full">
                    <input type="text" placeholder="Cari produk anda..." class="flex-grow px-4 py-3 border border-r-0 rounded-l-[5px] focus:outline-none">
                    <button class="px-4 py-3 bg-[#ECE5EF] text-black rounded-r-[5px] border-t border-b border-r hover:bg-[#D9D9D9]">
                        <x-icon name="magnifying-glass" />
                    </button>
                </div>
            </div>

            <div class="flex items-center">
                <a href="#" class="px-4 py-2">
                    <x-icon name="shopping-cart" />
                </a>

                <div class="hidden sm:flex border-l h-full pl-10">
                    <a href="#" class="py-2 px-4 mr-3 border border-[#7D1972] rounded-[10px] hover:bg-[#7D1972] hover:text-white">Masuk</a>
                    <a href="#" class="py-2 px-4 border bg-[#7D1972] rounded-[10px] text-white hover:bg-white hover:text-black">Daftar</a>
                </div>
            </div>
        </div>
    </div>
</nav>