@extends('user.layouts.app')

@section('content')
    <div class="w-full flex flex-wrap justify-center md:justify-around gap-4 ">
        @foreach ($items as $item)
            @include('user.components.product-card')
        @endforeach
    </div>
@endsection
