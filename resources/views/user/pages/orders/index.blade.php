@extends('user.layouts.app')

@section('no-sidebar-content', true)

@section('title')
    <title>Bamart</title>
@endsection

@section('content')
    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
        <form action="#" class="mx-auto max-w-screen-xl px-4 2xl:px-0">

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
                        Cart
                    </span>
                </li>

                <!-- STEP 2 -->
                <li
                    class="flex items-center text-[#7D1972] dark:text-[#7D1972] after:hidden after:mx-6 after:h-1 after:w-full after:border-b after:border-gray-200 dark:after:border-gray-700 sm:after:inline-block sm:after:content-[''] md:w-full xl:after:mx-10">
                    <span
                        class="flex items-center after:mx-2 after:text-gray-200 after:content-['/'] dark:after:text-gray-500 sm:after:hidden">
                        <svg class="me-2 h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        Checkout
                    </span>
                </li>

                <!-- STEP 3 -->
                <li class="flex items-center shrink-0">
                    <svg class="me-2 h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    Order summary
                </li>
            </ol>

            <!-- CONTENT WRAPPER -->
            <div class="mt-6 sm:mt-8 lg:flex lg:items-start lg:gap-12 xl:gap-16">
                <div class="min-w-0 flex-1 space-y-8">

                    <!-- DELIVERY DETAILS -->
                    <div class="space-y-4">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Delivery Details</h2>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                            <!-- NAME -->
                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Your
                                    name</label>
                                <input type="text" placeholder="Bonnie Green"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 
                                            focus:border-[#7D1972] focus:ring-[#7D1972] dark:border-gray-600 dark:bg-gray-700 
                                            dark:text-white dark:placeholder:text-gray-400 dark:focus:border-[#7D1972]"
                                    required>
                            </div>

                            <!-- EMAIL -->
                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Your
                                    email*</label>
                                <input type="email" placeholder="name@email.com"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 
                                            focus:border-[#7D1972] focus:ring-[#7D1972] dark:border-gray-600 dark:bg-gray-700 
                                            dark:text-white dark:placeholder:text-gray-400 dark:focus:border-[#7D1972]"
                                    required>
                            </div>

                            <!-- COUNTRY -->
                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Country*</label>
                                <select
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 
                focus:border-[#7D1972] focus:ring-[#7D1972] dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                                    <option selected>United States</option>
                                    <option>Australia</option>
                                    <option>France</option>
                                    <option>Spain</option>
                                    <option>United Kingdom</option>
                                </select>
                            </div>

                            <!-- CITY -->
                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">City*</label>
                                <select
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 
                focus:border-[#7D1972] focus:ring-[#7D1972] dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                                    <option>San Francisco</option>
                                    <option>New York</option>
                                    <option>Los Angeles</option>
                                    <option>Chicago</option>
                                    <option>Houston</option>
                                </select>
                            </div>

                            <!-- PHONE -->
                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Phone
                                    Number*</label>

                                <div class="flex items-center">

                                    <!-- COUNTRY BUTTON -->
                                    <button type="button"
                                        class="inline-flex items-center gap-2 rounded-s-lg border border-gray-300 bg-gray-100 
                  px-4 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-200 dark:border-gray-600 
                  dark:bg-gray-700 dark:text-white">
                                        +1
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                                d="m19 9-7 7-7-7" />
                                        </svg>
                                    </button>

                                    <!-- PHONE INPUT -->
                                    <input type="text" placeholder="123-456-7890"
                                        class="block w-full rounded-e-lg border border-gray-300 bg-gray-50 p-2.5 text-sm 
                  text-gray-900 focus:border-[#7D1972] focus:ring-[#7D1972] 
                  dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                                        required>
                                </div>
                            </div>

                            <!-- EMAIL 2 -->
                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email" placeholder="name@email.com"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 
                focus:border-[#7D1972] focus:ring-[#7D1972] dark:border-gray-600 dark:bg-gray-700 
                dark:text-white dark:placeholder:text-gray-400">
                            </div>

                            <!-- COMPANY -->
                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Company
                                    name</label>
                                <input type="text" placeholder="Flowbite LLC"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 
                                            focus:border-[#7D1972] focus:ring-[#7D1972] dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                            </div>

                            <!-- VAT -->
                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">VAT
                                    number</label>
                                <input type="text" placeholder="DE42313253"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 
                                            focus:border-[#7D1972] focus:ring-[#7D1972] dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                            </div>

                            <!-- ADD NEW ADDRESS -->
                            <div class="sm:col-span-2">
                                <button type="submit"
                                    class="flex w-full items-center justify-center gap-2 rounded-lg border border-[#7D1972] bg-white px-5 py-2.5 
                                            text-sm font-medium text-[#7D1972] hover:bg-[#7D1972] hover:text-white 
                                            focus:outline-none focus:ring-4 focus:ring-[#7D1972]/30">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 12h14m-7 7V5" />
                                    </svg>
                                    Add new address
                                </button>
                            </div>

                        </div>
                    </div>
                    <!-- PAYMENT -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Payment</h3>

                        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">

                            <!-- CREDIT CARD -->
                            <div
                                class="rounded-lg border border-gray-200 bg-gray-50 p-4 pl-4 dark:border-gray-700 dark:bg-gray-800">
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input checked type="radio" name="payment-method"
                                            class="h-4 w-4 border-gray-300 bg-white text-[#7D1972] focus:ring-[#7D1972] dark:border-gray-600 dark:bg-gray-700">
                                    </div>

                                    <div class="ml-4 text-sm">
                                        <label class="font-medium leading-none text-gray-900 dark:text-white">Credit
                                            Card</label>
                                        <p class="mt-1 text-xs font-normal text-gray-500 dark:text-gray-400">
                                            Pay with your credit card
                                        </p>
                                    </div>
                                </div>

                                <!-- EDIT & DELETE -->
                                <div class="mt-4 flex items-center gap-2">
                                    <button type="button"
                                        class="text-sm font-medium text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                        Delete
                                    </button>

                                    <div class="h-3 w-px bg-gray-300 dark:bg-gray-700"></div>

                                    <button type="button"
                                        class="text-sm font-medium text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                        Edit
                                    </button>
                                </div>
                            </div>

                            <!-- PAYMENT ON DELIVERY -->
                            <div
                                class="rounded-lg border border-gray-200 bg-gray-50 p-4 pl-4 dark:border-gray-700 dark:bg-gray-800">
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input type="radio" name="payment-method"
                                            class="h-4 w-4 border-gray-300 bg-white text-[#7D1972] focus:ring-[#7D1972] dark:border-gray-600 dark:bg-gray-700">
                                    </div>

                                    <div class="ml-4 text-sm">
                                        <label class="font-medium leading-none text-gray-900 dark:text-white">Payment on
                                            delivery</label>
                                        <p class="mt-1 text-xs font-normal text-gray-500 dark:text-gray-400">+$15
                                            processing fee</p>
                                    </div>
                                </div>

                                <div class="mt-4 flex items-center gap-2">
                                    <button
                                        class="text-sm font-medium text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                        Delete
                                    </button>

                                    <div class="h-3 w-px bg-gray-300 dark:bg-gray-700"></div>

                                    <button
                                        class="text-sm font-medium text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                        Edit
                                    </button>
                                </div>
                            </div>

                            <!-- PAYPAL -->
                            <div
                                class="rounded-lg border border-gray-200 bg-gray-50 p-4 pl-4 dark:border-gray-700 dark:bg-gray-800">
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input type="radio" name="payment-method"
                                            class="h-4 w-4 border-gray-300 bg-white text-[#7D1972] focus:ring-[#7D1972] dark:border-gray-600 dark:bg-gray-700">
                                    </div>

                                    <div class="ml-4 text-sm">
                                        <label
                                            class="font-medium leading-none text-gray-900 dark:text-white">Paypal</label>
                                        <p class="mt-1 text-xs font-normal text-gray-500 dark:text-gray-400">Connect your
                                            account</p>
                                    </div>
                                </div>

                                <div class="mt-4 flex items-center gap-2">
                                    <button
                                        class="text-sm font-medium text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                        Delete
                                    </button>

                                    <div class="h-3 w-px bg-gray-300 dark:bg-gray-700"></div>

                                    <button
                                        class="text-sm font-medium text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                        Edit
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- DELIVERY METHODS -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Delivery Methods</h3>

                        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">

                            <!-- DHL -->
                            <div
                                class="rounded-lg border border-gray-200 bg-gray-50 p-4 pl-4 dark:border-gray-700 dark:bg-gray-800">
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input checked type="radio" name="delivery-method"
                                            class="h-4 w-4 border-gray-300 bg-white text-[#7D1972] focus:ring-[#7D1972] dark:border-gray-600 dark:bg-gray-700">
                                    </div>

                                    <div class="ml-4 text-sm">
                                        <label class="font-medium leading-none text-gray-900 dark:text-white">$15 - DHL
                                            Fast Delivery</label>
                                        <p class="mt-1 text-xs font-normal text-gray-500 dark:text-gray-400">
                                            Get it by tomorrow
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FEDEX -->
                            <div
                                class="rounded-lg border border-gray-200 bg-gray-50 p-4 pl-4 dark:border-gray-700 dark:bg-gray-800">
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input type="radio" name="delivery-method"
                                            class="h-4 w-4 border-gray-300 bg-white text-[#7D1972] focus:ring-[#7D1972] dark:border-gray-600 dark:bg-gray-700">
                                    </div>

                                    <div class="ml-4 text-sm">
                                        <label class="font-medium leading-none text-gray-900 dark:text-white">Free Delivery
                                            - FedEx</label>
                                        <p class="mt-1 text-xs font-normal text-gray-500 dark:text-gray-400">
                                            Get it by Friday
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- EXPRESS -->
                            <div
                                class="rounded-lg border border-gray-200 bg-gray-50 p-4 pl-4 dark:border-gray-700 dark:bg-gray-800">
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input type="radio" name="delivery-method"
                                            class="h-4 w-4 border-gray-300 bg-white text-[#7D1972] focus:ring-[#7D1972] dark:border-gray-600 dark:bg-gray-700">
                                    </div>

                                    <div class="ml-4 text-sm">
                                        <label class="font-medium leading-none text-gray-900 dark:text-white">$49 - Express
                                            Delivery</label>
                                        <p class="mt-1 text-xs font-normal text-gray-500 dark:text-gray-400">
                                            Get it today
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- VOUCHER -->
                    <div>
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                            Enter gift card, voucher, or promo code
                        </label>

                        <div class="flex max-w-md items-center gap-4">
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm 
                                        text-gray-900 focus:border-[#7D1972] focus:ring-[#7D1972] dark:border-gray-600 
                                        dark:bg-gray-700 dark:text-white"
                                placeholder="" required>

                            <button
                                class="flex items-center justify-center rounded-lg bg-[#7D1972] px-5 py-2.5 text-sm 
                                        font-medium text-white hover:bg-[#9E1E93] focus:outline-none focus:ring-4 focus:ring-[#7D1972]/30">
                                Apply
                            </button>
                        </div>
                    </div>

                </div>

                <!-- SUMMARY SIDEBAR -->
                <div class="mt-6 w-full space-y-6 sm:mt-8 lg:mt-0 lg:max-w-xs xl:max-w-md">
                    <div class="flow-root">
                        <div class="-my-3 divide-y divide-gray-200 dark:divide-gray-800">

                            <dl class="flex items-center justify-between gap-4 py-3">
                                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Subtotal</dt>
                                <dd class="text-base font-medium text-gray-900 dark:text-white">$8,094.00</dd>
                            </dl>

                            <dl class="flex items-center justify-between gap-4 py-3">
                                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Savings</dt>
                                <dd class="text-base font-medium text-green-500">0</dd>
                            </dl>

                            <dl class="flex items-center justify-between gap-4 py-3">
                                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Store Pickup</dt>
                                <dd class="text-base font-medium text-gray-900 dark:text-white">$99</dd>
                            </dl>

                            <dl class="flex items-center justify-between gap-4 py-3">
                                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Tax</dt>
                                <dd class="text-base font-medium text-gray-900 dark:text-white">$199</dd>
                            </dl>

                            <dl class="flex items-center justify-between gap-4 py-3">
                                <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                                <dd class="text-base font-bold text-gray-900 dark:text-white">$8,392.00</dd>
                            </dl>

                        </div>
                    </div>

                    <!-- PROCEED BUTTON -->
                    <div class="space-y-3">
                        <button
                            class="flex w-full items-center justify-center rounded-lg bg-[#7D1972] px-5 py-2.5 text-sm 
                                    font-medium text-white hover:bg-[#9E1E93] focus:outline-none focus:ring-4 focus:ring-[#7D1972]/30">
                            Proceed to Payment
                        </button>

                        <p class="text-sm font-normal text-gray-500 dark:text-gray-400">
                            One or more items require an account.
                            <a href="#" class="font-medium text-[#7D1972] underline hover:no-underline">Sign in or
                                create an account now.</a>
                        </p>
                    </div>

                </div>
            </div>

        </form>
    </section>

@endsection
