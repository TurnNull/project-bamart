@extends('user.layouts.app')

@section('no-sidebar-content', true)

@section('title')
    <title>Bamart</title>
@endsection

@section('content')
    {{-- CONTAINER HALAMAN --}}
<div class="w-full px-5 sm:px-10 pt-6 pb-50 sm:pb-20">
    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6">
        {{-- === GALERI FOTO === --}}
        <div class="flex justify-center gap-4">
            {{-- Thumbnail --}}
            <div class="hidden sm:flex flex-col gap-4">
                @foreach (range(1, 4) as $i)
                    <div class="w-14 h-14 sm:w-16 sm:h-16 bg-gray-300 rounded-md"></div>
                @endforeach
            </div>

            {{-- Foto Utama --}}
            <div class="h-[260px] sm:h-[320px] md:h-[360px] lg:h-[400px] bg-gray-300 rounded-xl">
                @if (!$item->img_url)
                    <img src="{{ asset('img/background/missing-image.jpg') }}"
                        class="h-full object-fit" alt="{{ $item->img_url }}">
                @else
                    <img src="{{ asset('storage/'.$item->img_url) }}"
                        class="h-full object-fit" alt="{{ $item->img_url }}">
                @endif
            </div>
        </div>

        {{-- === DETAIL PRODUK === --}}
        <div class="w-full">
            <h2 class="text-[#7D1972] font-bold text-2xl sm:text-3xl mb-2">
                Rp{{ number_format($item->harga, 0 , ',', '.') }}
            </h2>

            <h1 class="text-lg sm:text-xl font-semibold">{{ $item->nama }}</h1>

            <div class="flex items-center gap-2 text-sm mt-1">
                <span class="text-yellow-500">★ ★ ★ ★ ★</span>
                <span class="text-gray-600">4.9</span>
                <span class="text-gray-500">Terjual 505</span>
            </div>

            <div class="border-t mt-4 pt-4 text-sm">
                <p class="font-semibold">Tipe Barang:</p>
                <p class="text-gray-700 mb-4">Tipe A</p>
                <p class="font-semibold">Deskripsi:</p>
                <p class="text-gray-600 leading-relaxed text-sm">
                    {{ $item->deskripsi }}
                </p>
            </div>
        </div>

        {{-- === TOKO === --}}
        <div class="w-full lg:col-span-1 md:col-span-2 
                border rounded-xl p-5 shadow-sm h-fit mx-auto lg:mx-0">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-full bg-gray-200"></div>
                <div>
                    <h3 class="font-semibold">Toko Pinggai Blukutuk</h3>
                    <p class="text-yellow-500 text-sm">★ 4.9 (66 rb)</p>
                </div>
            </div>

            <div class="mt-3 text-sm text-gray-700">
                <p>📍 Lokasi Toko</p>
                <a href="" class="font-semibold">Gudang BaMart ></a>
                <p class="text-xs text-gray-500">Kab. Banjarmasin & 1 kota lainnya</p>
            </div>
        </div>
    </div>


    {{-- === PRODUK SERUPA === --}}
    <h2 class="text-lg font-semibold mt-10 mb-3">
        Pelanggan lain juga telah melihat barang serupa
    </h2>

    <div class="relative w-full">

        {{-- Tombol kiri --}}
        <button id="btn-left"
            class="absolute -left-2 sm:left-0 top-1/2 -translate-y-1/2 z-10 
                   w-8 h-8 sm:w-10 sm:h-10 bg-white border rounded-full shadow 
                   flex items-center justify-center hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 sm:size-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
        </button>

        {{-- SLIDER PRODUK --}}
        <div id="slider"
            class="flex gap-4 sm:gap-5 overflow-x-scroll scroll-smooth no-scrollbar pr-8 sm:pr-10">

            @foreach (range(1, 10) as $i)
                <div class="min-w-[150px] sm:min-w-[180px] md:min-w-[200px] rounded-xl overflow-hidden 
                            border shadow-sm bg-white flex-shrink-0">
                    <div class="h-28 sm:h-32 md:h-36 bg-gray-300"></div>

                    <div class="bg-[#7D1972] p-3 text-white">
                        <p class="text-sm font-semibold">Nama Barang</p>
                        <p class="text-sm mt-1">Rp. 20.000</p>
                        <p class="text-xs mt-1">50 terjual</p>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Tombol kanan --}}
        <button id="btn-right"
            class="absolute -right-2 sm:right-0 top-1/2 -translate-y-1/2 z-10 
                   w-8 h-8 sm:w-10 sm:h-10 bg-white border rounded-full shadow 
                   flex items-center justify-center hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 sm:size-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
        </button>
    </div>
</div>
@endsection

@livewire('components.checkoutbar', ['slug' => $item->slug])