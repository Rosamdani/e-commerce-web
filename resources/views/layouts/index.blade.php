@include('layouts.head')
@yield('css')
</head>

<body class="common-home res layout-home1">



    <div id="wrapper" class="wrapper-full banners-effect-7">
        @include('layouts.nav')
        @yield('content')
        @include('layouts.footer')
    </div>

    @include('layouts.vendor')

    @yield('scripts')
</body>
<html>
