<header class="text-white standard" style="background-image:url('{{ asset('/img/home-banner.jpg') }}');">
    <h1 class="fw-bold">
        @section('header_title')
            404
        @show
    </h1>
    <h3>
        @yield('header_subtitle')
    </h3>
</header>
