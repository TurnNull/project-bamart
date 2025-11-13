<!DOCTYPE html>
<html lang="en">
{{-- header-start --}}
@include('user.layouts.header')
{{-- header-end --}}
<body>
    {{-- content-start --}}
    @yield('content')
    {{-- content-end --}}
    
    {{-- javascript-end --}}
    @include('user.layouts.javascript')
    {{-- javascript-end --}}
</body>
</html>