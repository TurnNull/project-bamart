<nav class="bg-white top-0 left-0 w-full fixed z-50 shadow">
    <div class="container mx-auto px-4 py-3">
        <div class="flex items-center justify-between">
            <div class="flex w-full justify-between">
                {{-- Logo --}}
                <a href="{{ route('home-page') }}" class="hidden md:flex mr-5 items-center shrink-0">
                    <img src="{{ asset('img/logo/bamart-logo.svg') }}" alt="logo" class="w-[110px] md:w-[140px] h-auto shrink-0" />
                </a>
                {{-- Search --}}
                <div class="flex items-center w-full">
                    <form class="flex flex-1  relative">
                        <!-- Input -->
                        <input type="text" placeholder="Cari produk..."
                            class="w-full border border-gray-300 rounded-md py-2 pl-4 pr-12
                                    focus:outline-none focus:ring-0">
                        <button type="submit"
                            class="absolute right-0 top-1/2 -translate-y-1/2 
                                    h-full px-4 bg-gray-200 border-l border-gray-300 
                                    flex items-center justify-center 
                                    hover:bg-gray-300 rounded-r-md">
                            <x-icon name="magnifying-glass" />
                        </button>
                    </form>
                </div>
            </div>

                    <div class="flex items-center">
                        <a href="/order/cart" class="px-4 py-2">
                            <x-icon name="shopping-cart" />
                        </a>
                        @auth
                            <div class="relative">
                                <button class="w-10 h-10 rounded-full overflow-hidden border-2 border-gray-300 peer">
                                    <img src="https://ui-avatars.com/api/?background=random" alt="Profile" class="w-full h-full object-cover">
                                </button>

                                <!-- Dropdown -->
                                <div class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-md opacity-0 pointer-events-none peer-focus:opacity-100 peer-focus:pointer-events-auto transition">
                                    <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100">
                                        Profile
                                    </a>

                                    <form id="logout-form" method="POST" action="">
                                        @csrf
                                        <button type="submit"
                                            class="w-full text-left px-4 py-2 hover:bg-gray-100">
                                            Logout
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endauth

                        @guest
                            <div class="hidden sm:flex border-l h-full pl-10">
                                <a href="#"
                                    class="py-2 px-4 mr-3 border-2 border-[#7D1972] font-medium text-[#7D1972] rounded-xl hover:bg-[#F7F0F6] hover:text-[#5B1154] hover:border-[#5B1154]">Masuk</a>
                                <a href="admin/register"
                                    class="py-2 px-4 border-2 border-[#7D1972] bg-[#7D1972] rounded-xl font-medium text-white hover:bg-[#9E1E93] hover:border-[#9E1E93]">Daftar</a>
                            </div>
                        @endguest
                    </div>
            </div>
        </div>
</nav>