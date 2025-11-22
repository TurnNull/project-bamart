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

        {{-- === SIDEBAR (Conditional) === --}}
        @hasSection('no-sidebar-content')
            {{-- kosong = sidebar tidak tampil --}}
        @else
            @include('user.layouts.partials.sidebar')
        @endif

        {{-- === CONTENT ALWAYS SHOWS === --}}
        <div class="flex-1">
            @yield('content')
        </div>

    </div>

    {{-- javascript-start --}}
    @include('user.layouts.partials.javascript')
    {{-- javascript-end --}}
</body>

</html>
