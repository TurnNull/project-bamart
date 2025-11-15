<div class="w-80 bg-white border-r border-gray-300 p-5 mt-0.5 lg:pl-10 space-y-6">
    {{-- Jelajahi Produk --}}
    <div>
        <h2 class="font-bold text-gray-900 text-sm mb-2">
            Jelajahi Produk UMKM Banjarmasin
        </h2>

        <div class="space-y-1 text-sm text-gray-700">

            <a href="#" class="block hover:underline">Makanan & Minuman Khas</a>
            <a href="#" class="block hover:underline">Kerajinan Tangan</a>
            <a href="#" class="block hover:underline">Fashion Lokal</a>
            <a href="#" class="block hover:underline">Aksesoris & Souvenir</a>

            {{-- Expandable --}}
            <button onclick="toggleMore()" class="flex items-center gap-1 text-green-600 hover:underline">
                <span>Lainnya</span>
                <svg id="iconMore" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <div id="moreList" class="hidden pl-2 space-y-1">
                <a href="#" class="block hover:underline">Perhiasan</a>
                <a href="#" class="block hover:underline">Kain Tenun</a>
                <a href="#" class="block hover:underline">Batik Lokal</a>
            </div>
        </div>

        <hr class="mt-4 border-gray-300">
    </div>

    {{-- Pengiriman --}}
    <div>
        <h3 class="font-bold text-gray-900 mb-2 text-sm">Pengiriman</h3>

        <label class="flex items-center gap-2 text-sm">
            <input type="checkbox" class="w-4 h-4">
            Tersedia Pengiriman Dalam Kota
        </label>

        <label class="flex items-center gap-2 text-sm mt-1">
            <input type="checkbox" class="w-4 h-4">
            Bisa Ambil di Toko
        </label>
    </div>

    {{-- Harga --}}
    <div>
        <h3 class="font-bold text-gray-900 mb-2 text-sm">Harga</h3>
        <p id="priceLabel" class="font-bold text-black mb-3">
            Rp0 – Rp5.000.000+
        </p>

        <!-- Slider wrapper dengan padding-right yang cukup -->
        <div class="relative w-full pt-6 pb-10">

            <!-- TRACK - dikurangi lebarnya agar tidak sampai ke button -->
            <div class="absolute top-1/2 left-0 h-1 bg-gray-300 rounded-full -translate-y-1/2"
                style="width: calc(100% - 60px);"></div>

            <!-- ACTIVE TRACK -->
            <div id="activeTrack" class="absolute top-1/2 h-1 bg-[#0A9A4C] rounded-full -translate-y-1/2"></div>

            <!-- LEFT HANDLE -->
            <input type="range" id="minRange" min="0" max="5000000" value="0" step="10000"
                oninput="updateSlider()" style="width: calc(100% - 60px);"
                class="absolute appearance-none bg-transparent pointer-events-none 
            [&::-webkit-slider-thumb]:pointer-events-auto
            [&::-webkit-slider-thumb]:w-7
            [&::-webkit-slider-thumb]:h-7
            [&::-webkit-slider-thumb]:bg-white
            [&::-webkit-slider-thumb]:rounded-full
            [&::-webkit-slider-thumb]:border-8
            [&::-webkit-slider-thumb]:border-[#0A9A4C]
            [&::-webkit-slider-thumb]:shadow
            [&::-webkit-slider-thumb]:cursor-pointer
            [&::-moz-range-thumb]:w-7
            [&::-moz-range-thumb]:h-7
            [&::-moz-range-thumb]:bg-white
            [&::-moz-range-thumb]:rounded-full
            [&::-moz-range-thumb]:border-8
            [&::-moz-range-thumb]:border-[#0A9A4C]
            [&::-moz-range-thumb]:shadow
            [&::-moz-range-thumb]:cursor-pointer">

            <!-- RIGHT HANDLE -->
            <input type="range" id="maxRange" min="0" max="5000000" value="5000000" step="10000"
                oninput="updateSlider()" style="width: calc(100% - 60px);"
                class="absolute appearance-none bg-transparent pointer-events-none
            [&::-webkit-slider-thumb]:pointer-events-auto
            [&::-webkit-slider-thumb]:w-7
            [&::-webkit-slider-thumb]:h-7
            [&::-webkit-slider-thumb]:bg-white
            [&::-webkit-slider-thumb]:rounded-full
            [&::-webkit-slider-thumb]:border-8
            [&::-webkit-slider-thumb]:border-[#0A9A4C]
            [&::-webkit-slider-thumb]:shadow
            [&::-webkit-slider-thumb]:cursor-pointer
            [&::-moz-range-thumb]:w-7
            [&::-moz-range-thumb]:h-7
            [&::-moz-range-thumb]:bg-white
            [&::-moz-range-thumb]:rounded-full
            [&::-moz-range-thumb]:border-8
            [&::-moz-range-thumb]:border-[#0A9A4C]
            [&::-moz-range-thumb]:shadow
            [&::-moz-range-thumb]:cursor-pointer">

            <!-- GO BUTTON - posisi di kanan dengan jarak yang pas -->
            <button
                class="absolute right-0 top-1/2 -translate-y-1/2 px-3 py-1 text-sm border border-gray-400 rounded-full bg-white hover:bg-gray-100">
                Go
            </button>

        </div>
    </div>

    {{-- Promo --}}
    <div>
        <h3 class="font-bold text-gray-900 mb-2 text-sm">Promo & Diskon</h3>
        <a href="#" class="block hover:underline text-sm">Semua Promo</a>
        <a href="#" class="block hover:underline text-sm">Produk Diskon Hari Ini</a>
        <a href="#" class="block hover:underline text-sm">Gratis Ongkir</a>
    </div>

    {{-- Ulasan --}}
    <div>
        <h3 class="font-bold text-gray-900 mb-1 text-sm">Ulasan Pelanggan</h3>
        <div class="flex items-center gap-1 text-orange-500 text-sm">
            ⭐⭐⭐⭐⭐ <span class="text-gray-700">& Up</span>
        </div>
    </div>

    {{-- Kategori --}}
    <div>
        <h3 class="font-bold text-gray-900 mb-2 text-sm">Kategori UMKM</h3>

        <a href="#" class="block text-sm hover:underline">Sasirangan</a>
        <a href="#" class="block text-sm hover:underline">Kosmetik Alami</a>
        <a href="#" class="block text-sm hover:underline">Makanan & Minuman</a>
    </div>

    {{-- Brand Lokal --}}
    <div>
        <h3 class="font-bold text-gray-900 mb-2 text-sm">Brand Lokal Populer</h3>

        <label class="flex items-center gap-2 text-sm">
            <input type="checkbox" class="h-4 w-4">
            Sasirangan Banjarmasin
        </label>

        <label class="flex items-center gap-2 text-sm">
            <input type="checkbox" class="h-4 w-4">
            Barasih Beauty
        </label>

        <label class="flex items-center gap-2 text-sm">
            <input type="checkbox" class="h-4 w-4">
            Wadai Khas Banjar
        </label>

        <label class="flex items-center gap-2 text-sm">
            <input type="checkbox" class="h-4 w-4">
            Kayuh Baimbai Craft
        </label>
    </div>

</div>

<script>
    function toggleMore() {
        let list = document.getElementById('moreList');
        let icon = document.getElementById('iconMore');
        list.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    }

    function updateSlider() {
        const minRange = document.getElementById("minRange");
        const maxRange = document.getElementById("maxRange");
        const track = document.getElementById("activeTrack");
        const label = document.getElementById("priceLabel");

        let minVal = parseInt(minRange.value);
        let maxVal = parseInt(maxRange.value);

        // Prevent handles from crossing
        if (minVal > maxVal - 10000) {
            minRange.value = maxVal - 10000;
            minVal = maxVal - 10000;
        }

        const max = parseInt(minRange.max);

        // Calculate percentages
        const leftPercent = (minVal / max) * 100;
        const rightPercent = (maxVal / max) * 100;

        // Hitung lebar slider sebenarnya (dikurangi 60px untuk button)
        const sliderWidth = minRange.offsetWidth; // sudah otomatis calc(100% - 60px)
        const containerWidth = minRange.parentElement.offsetWidth;
        const widthRatio = sliderWidth / containerWidth * 100;

        // Apply ke active track dengan penyesuaian
        track.style.left = (leftPercent * widthRatio / 100) + "%";
        track.style.width = ((rightPercent - leftPercent) * widthRatio / 100) + "%";

        // Update label
        label.innerText =
            "Rp" + minVal.toLocaleString("id-ID") +
            " – Rp" + maxVal.toLocaleString("id-ID") + "+";
    }

    // Initialize on load
    updateSlider();
</script>
