<section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
    <div class="mx-auto max-w-2xl px-4 2xl:px-0">
        <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl mb-2">Terima kasih atas pesanan Anda!</h2>

        <p class="text-gray-500 dark:text-gray-400 mb-6 md:mb-8">
            Pesanan Anda 
            <a href="#" class="font-medium text-gray-900 dark:text-white hover:underline">#{{ $order->order_id }}</a> 
            akan diproses dalam 24 jam selama hari kerja. Kami akan memberitahu Anda melalui email setelah pesanan Anda dikirim.
        </p>

        <div class="space-y-4 sm:space-y-2 rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800 mb-6 md:mb-8">

            <dl class="sm:flex items-center justify-between gap-4">
                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Tanggal</dt>
                <dd class="font-medium text-gray-900 dark:text-white sm:text-end">{{ $order->created_at->format('d M Y') }}</dd>
            </dl>

            <dl class="sm:flex items-center justify-between gap-4">
                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Status Pembayaran</dt>
                <dd class="font-medium text-gray-900 dark:text-white sm:text-end">
                    <span class="inline-flex items-center rounded bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">
                        {{ $order->status === 'processing' ? 'Dibayar' : ucfirst($order->status) }}
                    </span>
                </dd>
            </dl>

            <dl class="sm:flex items-center justify-between gap-4">
                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Total Pembayaran</dt>
                <dd class="font-medium text-gray-900 dark:text-white sm:text-end">Rp {{ number_format($order->total_price, 0, ',', '.') }}</dd>
            </dl>

            <dl class="sm:flex items-center justify-between gap-4">
                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Jumlah Item</dt>
                <dd class="font-medium text-gray-900 dark:text-white sm:text-end">{{ $order->orderItems->count() }} item</dd>
            </dl>

        </div>

        <!-- CUSTOMER INFO -->
        @if($order->nama_lengkap || $order->email || $order->telepon || $order->alamat_pengiriman)
        <div class="space-y-4 rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800 mb-6 md:mb-8">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Informasi Pengiriman</h3>

            @if($order->nama_lengkap)
            <dl class="sm:flex items-start justify-between gap-4">
                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Nama</dt>
                <dd class="font-medium text-gray-900 dark:text-white sm:text-end">{{ $order->nama_lengkap }}</dd>
            </dl>
            @endif

            @if($order->email)
            <dl class="sm:flex items-start justify-between gap-4">
                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Email</dt>
                <dd class="font-medium text-gray-900 dark:text-white sm:text-end">{{ $order->email }}</dd>
            </dl>
            @endif

            @if($order->telepon)
            <dl class="sm:flex items-start justify-between gap-4">
                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Telepon</dt>
                <dd class="font-medium text-gray-900 dark:text-white sm:text-end">{{ $order->telepon }}</dd>
            </dl>
            @endif

            @if($order->alamat_pengiriman)
            <dl class="sm:flex items-start justify-between gap-4">
                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Alamat</dt>
                <dd class="font-medium text-gray-900 dark:text-white sm:text-end text-left">{{ $order->alamat_pengiriman }}</dd>
            </dl>
            @endif

        </div>
        @endif

        <div class="flex items-center space-x-4">

            <!-- BUTTON 1 — Track your order -->
            @auth
                <a href="{{ route('orders.history') }}"
                   class="text-white bg-[#7D1972] hover:bg-[#9E1E93] focus:ring-4 focus:ring-[#7D1972]/30 font-medium rounded-lg text-sm px-5 py-2.5 
                   dark:bg-[#7D1972] dark:hover:bg-[#9E1E93] focus:outline-none dark:focus:ring-[#7D1972]/30">
                   Lacak Pesanan Anda
                </a>
            @endauth

            <!-- BUTTON 2 — Return to shopping -->
            <button wire:click="continueShopping"
               class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 
               hover:bg-gray-100 hover:text-[#7D1972] focus:z-10 focus:ring-4 focus:ring-gray-100 
               dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 
               dark:hover:text-white dark:hover:bg-gray-700">
               Lanjut Belanja
            </button>

        </div>
    </div>
</section>
