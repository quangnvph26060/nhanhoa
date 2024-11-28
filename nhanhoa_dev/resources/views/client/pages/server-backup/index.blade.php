<!DOCTYPE html>
<html lang="vi">

<head>

    <title>Trang chủ</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{ asset('client/assets/css/bootstrap/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/assets/css/swiper/swiper.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="{{ asset('client/assets/css/lightgallery.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/assets/css/compare.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/assets/css/page.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/assets/css/utilities.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('client/assets/css/popup.css') }}" type="text/css">

</head>

<body class=" home">
    <header style="position: fixed; z-index: 9999; width: 100%;">
        <div nh-row="6uqv1wl" id="webHeader" class="row-align-center setting-menu header-menu py-2">
            <div class="container">
                <!-- Row cho màn hình lớn (desktop) -->
                @include('client/pages/server-backup/breadcrumbs/header-web')

                <!-- Row cho màn hình nhỏ (mobile) -->
                @include('client/pages/server-backup/breadcrumbs/header-mobile')

            </div>
        </div>
    </header>
    @include('client/pages/server-backup/breadcrumbs/i3zmkdh')

    @include('client/pages/server-backup/breadcrumbs/5p90ibo')

    @include('client/pages/server-backup/breadcrumbs/o0zlwe1')

    @include('client/pages/server-backup/breadcrumbs/txjuimo')

    @include('client/pages/server-backup/breadcrumbs/pvm08s7')

    @include('client/pages/server-backup/breadcrumbs/8m4jchl')

    @include('client/pages/server-backup/breadcrumbs/2y0hnom')

    @include('client/pages/server-backup/breadcrumbs/epyskqg')


    <footer>
        @include('client.pages.server-backup.breadcrumbs.footer')
    </footer>

    <div id="toasts" class="position-fixed p-3" style="z-index: 100000; right: 0; top: 0;"></div>


    <script src="{{ asset('client/assets/js/jquery/jquery-3.6.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/assets/js/jquery/jquery.lazy.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/assets/js/jquery/jquery.lazy.plugins.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/assets/js/jquery/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/assets/js/jquery/jquery.cookie.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/assets/js/bootstrap/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/assets/js/bootstrap/util.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/assets/js/bootstrap/dropdown.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/assets/js/bootstrap/collapse.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/assets/js/bootstrap/modal.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/assets/js/bootstrap/toast.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/assets/js/bootstrap/tab.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/assets/js/swiper/swiper-bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/assets/js/constants.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/assets/js/vi.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/assets/js/lazy.js') }}" type="text/javascript"></script>



    <script src="{{ asset('client/assets/js/main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/assets/js/contact.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/assets/js/custom2.js') }}" type="text/javascript"></script>


    @include('client.include.section-vfone')
</body>

</html>
