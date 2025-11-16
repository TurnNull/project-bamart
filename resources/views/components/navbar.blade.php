<nav class="w-full bg-white shadow-sm py-3">
    <div class="max-w-7xl mx-auto px-4 flex items-center justify-between">

        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <img src="/images/logo.png" alt="Logo" class="h-10">
            <!-- Jika ingin teks -->
            {{-- <span class="text-xl font-bold text-[#7D1972]-700">BaMart</span> --}}
        </div>

        <!-- Search Bar -->
        <form class="flex flex-1 mx-6 max-w-2xl relative">

            <!-- Input -->
            <input type="text" placeholder="Sasirangan Cuy"
                class="w-full border border-gray-300 rounded-full py-2 pl-4 pr-12
               focus:outline-none focus:ring-1 focus:ring-[#7D1972]">

            <!-- Tombol search di dalam input (berbentuk kotak) -->
            <button type="submit"
                class="absolute right-0 top-1/2 -translate-y-1/2 
               h-full px-4 bg-gray-200 border-l border-gray-300 
               flex items-center justify-center 
               hover:bg-gray-300 rounded-r-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 text-gray-700">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-4.35-4.35m0 0A7.5 7.5 0 1 0 5.65 5.65a7.5 7.5 0 0 0 10.6 10.6Z" />
                </svg>
            </button>
        </form>

        <!-- Cart -->
        <div class="mr-4 ">
            <a href="#" class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                    stroke="currentColor" class="w-9 h-9">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l1 4h13l-2 8H7L5 7" />
                    <circle cx="9" cy="19" r="1.8" />
                    <circle cx="17" cy="19" r="1.8" />
                </svg>

            </a>
        </div>

        <div class="h-8 w-px bg-gray-400 mx-4"></div>

        <!-- Auth Buttons -->
        <div class="flex items-center space-x-3">
            <a href="#"
                class="px-5 py-1 border border-[#7D1972] text-[#7D1972] rounded-lg hover:bg-[#7D1972] hover:text-white transition">
                Masuk
            </a>
            <a href="#"
                class="px-5 py-1 border border-[#7D1972] bg-[#7D1972] text-white rounded-lg hover:bg-[#7D1972] transition">
                Daftar
            </a>
        </div>
    </div>
</nav>
