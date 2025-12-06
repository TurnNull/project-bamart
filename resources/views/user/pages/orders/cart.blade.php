@extends('user.layouts.orders')

@section('title')
    <title>Bamart</title>
@endsection

@section('content')
    <section class="bg-white py-6 antialiased dark:bg-gray-900">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- BREADCRUMB -->
            <ol
                class="flex items-center w-full max-w-2xl text-center text-sm font-medium text-gray-500 dark:text-gray-400 sm:text-base">

                <!-- STEP 1 -->
                <li
                    class="flex items-center text-[#7D1972] dark:text-[#7D1972] after:hidden after:mx-6 after:h-1 after:w-full after:border-b after:border-gray-200 dark:after:border-gray-700 sm:after:inline-block sm:after:content-[''] md:w-full xl:after:mx-10">
                    <span
                        class="flex items-center after:mx-2 after:text-gray-200 after:content-['/'] dark:after:text-gray-500 sm:after:hidden">
                        <svg class="me-2 h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        Keranjang
                    </span>
                </li>
                <!-- STEP 2 -->
                <li
                    class="flex items-center after:hidden after:mx-6 after:h-1 after:w-full after:border-b after:border-gray-200 dark:after:border-gray-700 sm:after:inline-block sm:after:content-[''] md:w-full xl:after:mx-10">
                    <span
                        class="flex items-center after:mx-2 after:text-gray-200 after:content-['/'] dark:after:text-gray-500 sm:after:hidden">
                        <svg class="me-2 h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        Proses Pembayaran
                    </span>
                </li>

                <!-- STEP 3 -->
                <li class="flex items-center shrink-0">
                    <svg class="me-2 h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    Pembayaran
                </li>
            </ol>
            

            <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                    <div class="space-y-6">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Keranjang Belanja</h2>
                        <div
                            class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 md:p-6">
                            <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0" data-cart-item>
                                <a href="#" class="shrink-0 md:order-1">
                                @if (!$item->img_url)
                                    <img class="h-20 w-20 dark:hidden"
                                        src="{{ asset('img/background/missing-image.jpg') }}"
                                        alt="{{ "image-missing.jpg" }}" />
                                    <img class="hidden h-20 w-20 dark:block"
                                        src="{{ asset('img/background/missing-image.jpg') }}"
                                        alt="{{ "image-missing.jpg" }}" />
                                @else
                                    <img class="h-20 w-20 dark:hidden"
                                        src="{{ asset('storage/'.$item->img_url) }}"
                                        alt="{{ $item->img_url }}" />
                                    <img class="hidden h-20 w-20 dark:block"
                                        src="{{ asset('storage/'.$item->img_url) }}"
                                        alt="{{ $item->img_url }}" />
                                @endif
                                </a>

                                <label for="counter-input" class="sr-only">Choose quantity:</label>
                                <div class="flex items-center justify-between md:order-3 md:justify-end">
                                    <div class="flex items-center">
                                        <button type="button" id="decrement-button"
                                            data-input-counter-decrement="counter-input"
                                            class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                            <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M1 1h16" />
                                            </svg>
                                        </button>
                                        <input type="text" id="counter-input" data-input-counter
                                            class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0 dark:text-white"
                                            placeholder="" value="1" required />
                                        <button type="button" id="increment-button"
                                            data-input-counter-increment="counter-input"
                                            class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                            <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M9 1v16M1 9h16" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="text-end md:order-4 md:w-32">
                                        <p class="text-base font-bold text-gray-900 dark:text-white" data-price-el data-unit-price="{{ $item->harga }}">Rp {{ number_format($item->harga, 0 , ',', '.') }}</p>
                                    </div>
                                </div>

                                <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                    <a href="#"
                                        class="text-base font-medium text-gray-900 hover:underline dark:text-white">{{ $item->nama }}</a>

                                    <div class="flex items-center gap-4">
                                        <button type="button"
                                            class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-900 hover:underline dark:text-gray-400 dark:hover:text-white">
                                            <svg class="me-1.5 h-5 w-5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                                            </svg>
                                            Tambah ke favorit
                                        </button>

                                        <button type="button"
                                            class="inline-flex items-center text-sm font-medium text-red-600 hover:underline dark:text-red-500">
                                            <svg class="me-1.5 h-5 w-5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18 17.94 6M18 18 6.06 6" />
                                            </svg>
                                            Hapus
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                    <div
                        class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                        <p class="text-xl font-semibold text-gray-900 dark:text-white">Ringkasan Pesanan</p>

                        <div class="space-y-4">
                            <div class="space-y-2">
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Subtotal</dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white" data-summary-subtotal>Rp 0</dd>
                                </dl>

                                {{-- <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Savings</dt>
                                    <dd class="text-base font-medium text-green-600">-$299.00</dd>
                                </dl> --}}

                                {{-- <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Store Pickup</dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white">$99</dd>
                                </dl> --}}

                                {{-- <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Tax</dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white">$799</dd>
                                </dl> --}}
                            </div>

                            <dl
                                class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                                <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                                <dd class="text-base font-bold text-gray-900 dark:text-white" data-summary-total>Rp 0</dd>
                            </dl>
                        </div>

                        <a href="/order/checkout"
                            class="flex w-full items-center justify-center rounded-lg bg-[#7D1972] px-5 py-2.5 text-sm font-medium text-white hover:bg-[#7D1972] focus:outline-none focus:ring-4 focus:ring-[#7D1972]/30 dark:bg-[#7D1972] dark:hover:bg-[#7D1972] dark:focus:ring-[#7D1972]/30 hover:bg-[#9E1E93]">Proceed
                            to Checkout</a>

                        <div class="flex items-center justify-center gap-2">
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400"> or </span>
                            <a href="/" title=""
                                class="inline-flex items-center gap-2 text-sm font-medium text-[#7D1972] underline hover:no-underline dark:text-[#7D1972]">
                                Continue Shopping
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('cart-product')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Helpers
        const formatIDR = (num) => 'Rp ' + Number(num).toLocaleString('id-ID');
        const parseVal = (val) => {
            const n = parseInt(String(val).replace(/[^0-9-]/g, ''), 10);
            return Number.isFinite(n) ? n : 1;
        };
        const clamp = (val, min, max) => Math.min(Math.max(val, min), max);

        // Collect cart items
        const items = Array.from(document.querySelectorAll('[data-cart-item]')).map((row) => {
            const input = row.querySelector('input[data-input-counter]');
            if (!input) return null;
            const id = input.id;
            const priceEl = row.querySelector('[data-price-el]');
            const unit = parseFloat(priceEl?.dataset.unitPrice || '0') || 0;
            const decBtns = row.querySelectorAll(`[data-input-counter-decrement="${id}"]`);
            const incBtns = row.querySelectorAll(`[data-input-counter-increment="${id}"]`);
            const min = parseInt(input.getAttribute('min')) || parseInt(input.dataset.min) || 1;
            const max = parseInt(input.getAttribute('max')) || parseInt(input.dataset.max) || Number.POSITIVE_INFINITY;
            const step = parseInt(input.getAttribute('step')) || parseInt(input.dataset.step) || 1;
            return { row, input, priceEl, unit, decBtns, incBtns, min, max, step };
        }).filter(Boolean);

        // Summary targets
        const summarySubtotalEl = document.querySelector('[data-summary-subtotal]');
        const summaryTotalEl = document.querySelector('[data-summary-total]');

        const updateLinePrice = (item, qty) => {
            if (!item.priceEl) return;
            item.priceEl.textContent = formatIDR(item.unit * qty);
        };

        const computeSubtotal = () => items.reduce((sum, it) => {
            const qty = clamp(parseVal(it.input.value), it.min, it.max);
            return sum + (it.unit * qty);
        }, 0);

        const renderSummary = () => {
            const subtotal = computeSubtotal();
            if (summarySubtotalEl) summarySubtotalEl.textContent = formatIDR(subtotal);
            if (summaryTotalEl) summaryTotalEl.textContent = formatIDR(subtotal);
        };

        const setQty = (item, val) => {
            const next = clamp(parseVal(val), item.min, item.max);
            item.input.value = String(next);
            updateLinePrice(item, next);
            item.input.dispatchEvent(new Event('change', { bubbles: true }));
            renderSummary();
        };

        // Bind events
        items.forEach((it) => {
            it.decBtns.forEach((btn) => btn.addEventListener('click', () => setQty(it, parseVal(it.input.value) - it.step)));
            it.incBtns.forEach((btn) => btn.addEventListener('click', () => setQty(it, parseVal(it.input.value) + it.step)));
            it.input.addEventListener('input', () => setQty(it, it.input.value));
            it.input.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowUp') { e.preventDefault(); setQty(it, parseVal(it.input.value) + it.step); }
                else if (e.key === 'ArrowDown') { e.preventDefault(); setQty(it, parseVal(it.input.value) - it.step); }
            });
        });

        // Initial render
        items.forEach((it) => setQty(it, it.input.value));
        renderSummary();
    });
</script>
@endsection
