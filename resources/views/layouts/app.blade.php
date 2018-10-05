@include('parts.head')
@include('parts.nav')
    <div class="container mb-5">
        @yield('content')
    </div>
@include('parts.footer')
@yield('template_scripts')