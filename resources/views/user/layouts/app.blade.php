<!DOCTYPE html>
<html lang="en">
{{-- header-start --}}
@include('user.layouts.partials.header')
{{-- header-end --}}
<body>
    {{-- content-start --}}
    @yield('content')
    {{-- content-end --}}
    
    {{-- javascript-end --}}
    @include('user.layouts.partials.javascript')
    {{-- javascript-end --}}
</body>
</html>