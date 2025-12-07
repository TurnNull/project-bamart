<section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        
        <!-- HEADER -->
        <div class="mx-auto max-w-5xl">
            <div class="gap-4 sm:flex sm:items-center sm:justify-between">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Detail Pesanan #{{ $order->order_id }}</h2>

                <div class="mt-6 gap-4 space-y-4 sm:mt-0 sm:flex sm:items-center sm:justify-end sm:space-y-0">
                    <a href="{{ route('orders.history') }}"
                       class="w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-[#7D1972] focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
                        Kembali ke Riwayat
                    </a>
                </div>
            </div>

            <!-- ORDER INFO -->
            <div class="mt-6 space-y-4 border-b border-t border-gray-200 py-8 dark:border-gray-700 sm:mt-8">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    
                    <div>
                        <h4 class="text-gray-500 dark:text-gray-400 text-sm mb-1">Tanggal Pesanan</h4>
                        <p class="text-base font-medium text-gray-900 dark:text-white">{{ $order->created_at->format('d M Y, H:i') }}</p>
                    </div>

                    <div>
                        <h4 class="text-gray-500 dark:text-gray-400 text-sm mb-1">Status</h4>
                        <p class="text-base font-medium">
                            @php
                                $statusColors = [
                                    'pending' => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300',
                                    'processing' => 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300',
                                    'shipped' => 'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-300',
                                    'delivered' => 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300',
                                    'cancelled' => 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300'
                                ];
                                $statusLabels = [
                                    'pending' => 'Menunggu',
                                    'processing' => 'Diproses',
                                    'shipped' => 'Dikirim',
                                    'delivered' => 'Selesai',
                                    'cancelled' => 'Dibatalkan'
                                ];
                            @endphp
                            <span class="inline-flex items-center rounded px-2.5 py-0.5 text-xs font-medium {{ $statusColors[$order->status] ?? 'bg-gray-100 text-gray-800' }}">
                                {{ $statusLabels[$order->status] ?? ucfirst($order->status) }}
                            </span>
                        </p>
                    </div>

                    <div>
                        <h4 class="text-gray-500 dark:text-gray-400 text-sm mb-1">Total Item</h4>
                        <p class="text-base font-medium text-gray-900 dark:text-white">{{ $order->orderItems->count() }} item</p>
                    </div>

                    <div>
                        <h4 class="text-gray-500 dark:text-gray-400 text-sm mb-1">Total Pembayaran</h4>
                        <p class="text-base font-semibold text-gray-900 dark:text-white">Rp {{ number_format($order->total_price, 0, ',', '.') }}</p>
                    </div>

                </div>
            </div>

            <!-- CUSTOMER INFO -->
            @if($order->nama_lengkap || $order->email || $order->telepon || $order->alamat_pengiriman)
            <div class="mt-6 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                <h3 class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">Informasi Pengiriman</h3>
                
                <div class="space-y-3">
                    @if($order->nama_lengkap)
                    <div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Nama:</span>
                        <span class="ml-2 text-sm font-medium text-gray-900 dark:text-white">{{ $order->nama_lengkap }}</span>
                    </div>
                    @endif

                    @if($order->email)
                    <div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Email:</span>
                        <span class="ml-2 text-sm font-medium text-gray-900 dark:text-white">{{ $order->email }}</span>
                    </div>
                    @endif

                    @if($order->telepon)
                    <div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Telepon:</span>
                        <span class="ml-2 text-sm font-medium text-gray-900 dark:text-white">{{ $order->telepon }}</span>
                    </div>
                    @endif

                    @if($order->alamat_pengiriman)
                    <div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Alamat:</span>
                        <p class="mt-1 text-sm font-medium text-gray-900 dark:text-white">{{ $order->alamat_pengiriman }}</p>
                    </div>
                    @endif
                </div>
            </div>
            @endif

            <!-- ORDER ITEMS -->
            <div class="mt-6 flow-root sm:mt-8">
                <div class="divide-y divide-gray-200 dark:divide-gray-700">
                    
                    @foreach($order->orderItems as $orderItem)
                    <div class="flex flex-wrap items-center gap-y-4 py-6">
                        
                        <!-- IMAGE -->
                        <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                            <dt class="text-base font-medium text-gray-900 dark:text-white">
                                <img class="h-20 w-20 rounded object-cover" 
                                     src="{{ asset('storage/' . $orderItem->item->gambar) }}" 
                                     alt="{{ $orderItem->item->nama_item }}" />
                            </dt>
                        </dl>

                        <!-- ITEM NAME -->
                        <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                            <dt class="text-base font-medium text-gray-900 dark:text-white">
                                {{ $orderItem->item->nama_item }}
                            </dt>
                            <dd class="mt-1.5 text-sm text-gray-500 dark:text-gray-400">
                                {{ Str::limit($orderItem->item->deskripsi, 50) }}
                            </dd>
                        </dl>

                        <!-- QUANTITY -->
                        <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                            <dt class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-1">Jumlah:</dt>
                            <dd class="text-base font-medium text-gray-900 dark:text-white">{{ $orderItem->quantity }}</dd>
                        </dl>

                        <!-- UNIT PRICE -->
                        <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                            <dt class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-1">Harga Satuan:</dt>
                            <dd class="text-base font-medium text-gray-900 dark:text-white">Rp {{ number_format($orderItem->unit_harga, 0, ',', '.') }}</dd>
                        </dl>

                        <!-- SUBTOTAL -->
                        <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                            <dt class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-1">Subtotal:</dt>
                            <dd class="text-base font-semibold text-gray-900 dark:text-white">Rp {{ number_format($orderItem->subtotal, 0, ',', '.') }}</dd>
                        </dl>

                    </div>
                    @endforeach

                </div>
            </div>

            <!-- TOTAL SUMMARY -->
            <div class="mt-6 space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                <div class="space-y-4">
                    <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                        <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                        <dd class="text-base font-bold text-gray-900 dark:text-white">Rp {{ number_format($order->total_price, 0, ',', '.') }}</dd>
                    </dl>
                </div>
            </div>

        </div>
    </div>
</section>
