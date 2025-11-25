@extends('user.layouts.orders')

@section('title')
    <title>Bamart</title>
@endsection

@section('content')
    <section class="bg-white py-6 antialiased dark:bg-gray-900">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">

        <!-- BREADCRUMB -->
        <ol class="flex items-center w-full max-w-2xl text-center text-sm font-medium text-gray-500 dark:text-gray-400 sm:text-base">
            
            <!-- Step 1 -->
            <li class="flex items-center text-[#7D1972] dark:text-[#7D1972] sm:after:inline-block after:hidden after:mx-6 after:h-1 after:w-full after:border-b after:border-gray-200 dark:after:border-gray-700 md:w-full xl:after:mx-10">
                <span class="flex items-center after:mx-2 after:text-gray-200 after:content-['/'] dark:after:text-gray-500 sm:after:hidden">
                    <svg class="me-2 h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    Cart
                </span>
            </li>

            <!-- Step 2 -->
            <li class="flex items-center text-[#7D1972] dark:text-[#7D1972] sm:after:inline-block after:hidden after:mx-6 after:h-1 after:w-full after:border-b after:border-gray-200 dark:after:border-gray-700 md:w-full xl:after:mx-10">
                <span class="flex items-center after:mx-2 after:text-gray-200 after:content-['/'] dark:after:text-gray-500 sm:after:hidden">
                    <svg class="me-2 h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    Checkout
                </span>
            </li>

            <!-- Step 3 -->
            <li class="flex items-center shrink-0 text-[#7D1972] dark:text-[#7D1972]">
                <svg class="me-2 h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                Payment
            </li>
        </ol>

        <!-- MAIN CONTENT -->
        <div class="max-w-7xl mt-6">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Payment</h2>

            <div class="mt-6 sm:mt-8 lg:flex lg:items-start lg:gap-12">

                <!-- LEFT FORM -->
                <form action="/order/confirmation" class="w-full rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6 lg:max-w-xl lg:p-8">

                    <!-- FORM GRID -->
                    <div class="mb-6 grid grid-cols-1 sm:grid-cols-2 gap-4">

                        <!-- Full Name -->
                        <div>
                            <label for="full_name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                                Full name (as displayed on card)*
                            </label>
                            <input type="text" id="full_name"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 
                                focus:border-[#7D1972] focus:ring-[#7D1972]
                                dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                                placeholder="Bonnie Green" required />
                        </div>

                        <!-- Card Number -->
                        <div>
                            <label for="card-number-input" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                                Card number*
                            </label>
                            <input type="text" id="card-number-input"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 
                                focus:border-[#7D1972] focus:ring-[#7D1972]
                                dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                                placeholder="xxxx-xxxx-xxxx-xxxx" required />
                        </div>

                        <!-- Card Expiration -->
                        <div>
                            <label for="card-expiration-input" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                                Card expiration*
                            </label>

                            <div class="relative">
                                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M6 2a1 1 0 000 2h.01a1 1 0 100-2H6zM14 2a1 1 0 000 2h.01a1 1 0 100-2H14z" />
                                        <path fill-rule="evenodd"
                                            d="M3 6a2 2 0 012-2h10a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V6zm3 3a1 1 0 000 2h.01a1 1 0 100-2H6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>

                                <input type="month" id="card-expiration-input"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pl-10 text-sm text-gray-900 
                                    focus:border-[#7D1972] focus:ring-[#7D1972]
                                    dark:border-gray-600 dark:bg-gray-700 dark:text-white" 
                                    required />
                            </div>
                        </div>

                        <!-- CVV -->
                        <div>
                            <label for="cvv-input" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white flex items-center gap-1">
                                CVV*
                            </label>

                            <input type="number" id="cvv-input"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 
                                focus:border-[#7D1972] focus:ring-[#7D1972]
                                dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                                placeholder="•••" required />
                        </div>

                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full rounded-lg bg-[#7D1972] px-5 py-3 text-sm font-medium text-white 
                        hover:bg-[#9E1E93] focus:outline-none focus:ring-4 focus:ring-[#7D1972]/30 
                        dark:bg-[#7D1972] dark:hover:bg-[#9E1E93] dark:focus:ring-[#7D1972]/30">
                        Pay now
                    </button>
                </form>

                <!-- RIGHT SUMMARY -->
                <div class="mt-8 grow lg:mt-0">
                    <div class="space-y-4 rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800">

                        <div class="space-y-2">
                            <dl class="flex items-center justify-between gap-4">
                                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Original price</dt>
                                <dd class="text-base font-medium text-gray-900 dark:text-white">$6,592.00</dd>
                            </dl>

                            <dl class="flex items-center justify-between gap-4">
                                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Savings</dt>
                                <dd class="text-base font-medium text-green-500">-$299.00</dd>
                            </dl>

                            <dl class="flex items-center justify-between gap-4">
                                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Store Pickup</dt>
                                <dd class="text-base font-medium text-gray-900 dark:text-white">$99</dd>
                            </dl>

                            <dl class="flex items-center justify-between gap-4">
                                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Tax</dt>
                                <dd class="text-base font-medium text-gray-900 dark:text-white">$799</dd>
                            </dl>
                        </div>

                        <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                            <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                            <dd class="text-base font-bold text-gray-900 dark:text-white">$7,191.00</dd>
                        </dl>
                    </div>

                    <!-- Logos -->
                    <div class="mt-6 flex items-center justify-center gap-8">
                        <img class="h-8 w-auto dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/paypal.svg" alt="" />
                        <img class="hidden h-8 w-auto dark:flex" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/paypal-dark.svg" alt="" />

                        <img class="h-8 w-auto dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/visa.svg" alt="" />
                        <img class="hidden h-8 w-auto dark:flex" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/visa-dark.svg" alt="" />

                        <img class="h-8 w-auto dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/mastercard.svg" alt="" />
                        <img class="hidden h-8 w-auto dark:flex" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/mastercard-dark.svg" alt="" />
                    </div>
                </div>
            </div>

            <!-- FOOT NOTE -->
            <p class="mt-6 text-center text-gray-500 dark:text-gray-400 sm:mt-8 lg:text-left">
                Payment processed by
                <a href="#" class="font-medium text-[#7D1972] underline hover:no-underline">Paddle</a> for
                <a href="#" class="font-medium text-[#7D1972] underline hover:no-underline">Flowbite LLC</a>
                - United States Of America
            </p>
        </div>
    </div>
</section>

@endsection
