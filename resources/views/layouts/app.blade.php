<!DOCTYPE html>
<html lang="{{ Lang::locale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="icon" type="image/png" href="/images/logo/logo48.png" sizes="48x48">
    <link rel="icon" type="image/png" href="/images/logo/logo64.png" sizes="64x64">
    <link rel="icon" type="image/png" href="/images/logo/logo128.png" sizes="128x128">
    <link rel="icon" type="image/png" href="/images/logo/logo500.png" sizes="500x500">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <meta name='csrf-token' content={{ csrf_token() }}>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" data-turbolinks-track="reload">
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    @yield('seo')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HWQE41ZMC0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HWQE41ZMC0');
    </script>
</head>

<body>
    <!-- preloader -->
    {{-- <div id="preloader">
        <div id="loading-center">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
            </div>
        </div>
    </div> --}}
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    @include('layouts/header')

    <!-- main-area -->
    <main>
        @yield('content')

        @yield('footer_form')
    </main>
    <!-- main-area-end -->

    @include('layouts/footer')
    <script src="{{ mix('js/app.js') }}" data-turbolinks-track="reload"></script>
</body>

</html>
