<!DOCTYPE html>
<html>

{{-- header-start --}}
@include('user.layouts.partials.header')
{{-- header-end --}}

<body class="min-h-screen flex flex-col">  <!-- PENTING -->

    {{-- navbar-start --}}
    @include('user.layouts.partials.navbar')
    {{-- navbar-end --}}

    {{-- MAIN WRAPPER (flex-1 = dorong footer ke bawah) --}}
    <div class="flex-1 flex mt-20">

        {{-- === SIDEBAR (Conditional) === --}}
        @hasSection('no-sidebar-content')
            {{-- sidebar mati --}}
        @else
            @include('user.layouts.partials.sidebar')
        @endif

        {{-- === CONTENT === --}}
        @yield('content')
        {{ $slot ?? '' }}
    </div>

    {{-- FOOTER
    @include('user.layouts.partials.footer') --}}

    {{-- javascript --}}
    @include('user.layouts.partials.javascript')

</body>
</html>
