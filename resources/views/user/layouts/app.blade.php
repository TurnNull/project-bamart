<!DOCTYPE html>
<html>
{{-- header-start --}}
@include('user.layouts.partials.header')
{{-- header-end --}}
<body>
    {{-- navbar-start --}}
    @include('user.layouts.partials.navbar')
    {{-- navbar-end --}}

    <div class="w-full flex mt-20">
        {{-- sidebar-start --}}
        @include('user.layouts.partials.sidebar')
        {{-- sidebar-end --}}
    
        {{-- content-start --}}
        @yield('content')
        {{-- content-end --}}
    </div>
    
    {{-- javascript-end --}}
    @include('user.layouts.partials.javascript')
    {{-- javascript-end --}}
</body>
</html>