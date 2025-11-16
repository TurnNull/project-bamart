<!DOCTYPE html>
<html lang="en">
{{-- header-start --}}
@include('user.layouts.partials.header')
{{-- header-end --}}
<body>
    {{-- navbar-start --}}
    @include('user.layouts.partials.navbar')
    {{-- navbar-end --}}

    {{-- content-start --}}
    @yield('content')
    {{-- content-end --}}
    
    {{-- javascript-end --}}
    @include('user.layouts.partials.javascript')
    {{-- javascript-end --}}
</body>
</html>