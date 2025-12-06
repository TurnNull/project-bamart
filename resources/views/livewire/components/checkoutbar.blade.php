<!-- Bottom Bar -->
<div class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-300 z-50">

    <div class="container mx-auto px-3 py-3 
                flex flex-col gap-3
                sm:flex-row sm:items-center sm:justify-between">

        <!-- Kiri: Gambar + Nama Barang -->
        <div class="flex items-center gap-3 min-w-0 shrink sm:hidden md:flex">
            <div class="w-12 h-12 bg-gray-300 rounded-md shrink-0">
                @if (!$item->img_url)
                    <img src="{{ asset('img/background/missing-image.jpg') }}"
                        class="h-full object-fit" alt="{{ $item->img_url }}">
                @else
                    <img src="{{ asset('storage/'.$item->img_url) }}"
                        class="h-full object-fit" alt="{{ $item->img_url }}">
                @endif
            </div>

            <div class="text-sm text-black leading-tight truncate 
                        max-w-[140px] sm:max-w-[200px]">
                {{ $item->nama }}
            </div>
        </div>

        <!-- Tengah: Qty + Total Harga -->
        <div class="flex items-center justify-start gap-4 shrink-0 sm:w-auto">

            <!-- Qty Counter -->
            <div class="flex items-center bg-gray-100 rounded-lg px-3 py-2">
                <button class="px-2 text-xl text-gray-600 font-bold" onclick="updateQty(-1)">−</button>
                <span id="qty" class="px-3 text-lg text-black">1</span>
                <button class="px-2 text-xl text-gray-600 font-bold" onclick="updateQty(1)">+</button>
            </div>

            <!-- Harga -->
            <div class="flex flex-col text-right leading-tight">
                <span class="text-xs text-gray-700">Total Harga</span>
                <span id="totalHarga" class="text-lg sm:text-xl font-semibold text-fuchsia-900">
                    Rp{{ number_format($item->harga, 0 , ',', '.') }}
                </span>
            </div>
        </div>

        <!-- Kanan: Tombol -->
        <div class="flex items-center justify-end gap-3 shrink-0">

            <!-- Beli Sekarang -->
            <a href="#"
               class="flex-1 text-center sm:flex-none py-2 px-4 border-2 border-[#7D1972] text-[#7D1972] 
                      rounded-2xl font-medium hover:bg-[#F7F0F6] hover:text-[#5B1154] hover:border-[#5B1154]">
                Beli Sekarang
            </a>

            <!-- Tambah ke Cart -->
            <button wire:click="addToCart({{ $item->slug }})" 
               class="flex-1 text-center sm:flex-none py-2 px-4 border-2 border-[#7D1972] 
                      text-white bg-[#7D1972] rounded-2xl font-medium 
                      hover:bg-[#9E1E93] hover:border-[#9E1E93]">
                Tambah Ke Cart
            </button>

            <!-- Favorite -->
            <button class="w-12 h-12 flex items-center justify-center rounded-full shadow bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                     class="w-6 h-6 text-gray-500 hover:text-red-500 transition">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 
                             2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 
                             14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 
                             6.86-8.55 11.54L12 21.35z" />
                </svg>
            </button>
        </div>
    </div>
</div>

@section('checkout-product')
<script>
    let qty = 1;
    const harga = {{ $item->harga }};
    function updateQty(val) {
        qty += val;
        if (qty < 1) qty = 1;

        document.getElementById('qty').innerText = qty;
        document.getElementById('totalHarga').innerText =
            'Rp' + (qty * harga).toLocaleString('id-ID');
    }
</script>
@endsection
