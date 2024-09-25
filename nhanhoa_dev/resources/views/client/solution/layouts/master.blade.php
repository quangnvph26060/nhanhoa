<!DOCTYPE html>
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="favicon.ico" />

    <title>CÔNG TY CỔ PHẦN CÔNG NGHỆ 1 GIÂY ONLINE</title>

    <link href="{{ asset('client/solution/themes/fonts/cloudicon/cloudicon.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/solution/themes/fonts/fontawesome/css/all.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/solution/themes/fonts/opensans/opensans.css') }}" rel="stylesheet" type="text/css" />
    <!-- CSS styles -->
    <link href="{{ asset('client/solution/themes/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/solution/themes/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/solution/themes/css/filter.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('client/solution/themes/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/solution/themes/css/swiper.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/solution/themes/css/animate.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/solution/themes/css/slick.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/solution/themes/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- Custom color styles -->
    <link href="{{ asset('client/solution/themes/css/colors/pink.css') }}" rel="stylesheet" type="text/css"
        title="pink" media="none" onload="if(media!='all')media='all'" />
    <link href="{{ asset('client/solution/themes/css/colors/blue.css') }}" rel="stylesheet" type="text/css"
        title="blue" media="none" onload="if(media!='all')media='all'" />
    <link href="{{ asset('client/solution/themes/css/colors/green.css') }}" rel="stylesheet" type="text/css"
        title="green" media="none" onload="if(media!='all')media='all'" />
</head>

<body>
    @include('client/solution/layouts/partials/header')

    <!-- ***** BANNER ***** -->

    @php
       $boolean = request()->routeIs('ddos-protection') ?  false :  true
    @endphp

  @include('client/solution/layouts/partials/banner', ['useBanner' => $boolean])

    @yield('content')

   @include('client/solution/layouts/partials/footer')
</body>

<script src="{{ asset('client/solution/themes/js/jquery.min.js') }}"></script>
<script src="{{ asset('client/solution/themes/js/typed.js') }}"></script>
<script src="{{ asset('client/solution/themes/js/popper.min.js') }}"></script>
<script src="{{ asset('client/solution/themes/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('client/solution/themes/js/jquery.countdown.js') }}"></script>
<script src="{{ asset('client/solution/themes/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('client/solution/themes/js/slick.min.js') }}"></script>
<script src="{{ asset('client/solution/themes/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('client/solution/themes/js/isotope.min.js') }}"></script>
<script src="{{ asset('client/solution/themes/js/jquery.scrollme.min.js') }}"></script>
<script src="{{ asset('client/solution/themes/js/swiper.min.js') }}"></script>
<script>
    $("#nav-toggle").click(function() {
        // $(".menu-wrap.mobile, .menu-toggle").toggleClass("active");
        $(".menu-wrap.mobile").toggleClass("active");
        $(".menu-toggle").toggleClass("active");
    });
</script>
<script async src="{{ asset('client/solution/themes/js/lazysizes.min.js') }}"></script>
<script src="{{ asset('client/solution/themes/js/wow.min.js') }}"></script>
<script>
    new WOW().init();
</script>
<script defer src="{{ asset('client/solution/themes/js/scripts.js') }}"></script>

</html>
