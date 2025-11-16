@extends('user.layouts.app')

@section('content')
    {{-- LAYOUT WRAPPER --}}
    <div class="flex">

        {{-- SIDEBAR (width fix + tidak shrink) --}}
        <x-sidebar class="w-80 shrink-0 sticky top-0 h-screen overflow-y-auto bg-white border-r border-gray-300" />

        {{-- CONTENT --}}
        <div class="flex-1 p-6">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
                {{-- CONTOH PRODUK --}}
                <x-product-card />
            </div>
        </div>
    </div>
@endsection
