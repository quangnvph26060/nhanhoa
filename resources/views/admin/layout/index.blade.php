<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{ asset('assets/img/kaiadmin/favicon.ico') }}" type="image/x-icon" />

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery và Bootstrap JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.min.js"></script>

    <!-- Fonts and icons -->
    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
      google: { families: ["Public Sans:300,400,500,600,700"] },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["{{ asset('assets/css/fonts.min.css') }}"],
      },
      active: function () {
        sessionStorage.fonts = true;
      },
    });
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css.map') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.css.map') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css.map') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.css">
    <script src="{{ asset('validator/validator.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title : 'document' }}</title>
</head>
<style>
    .collapse {
        display: none;
    }

    .collapse.show {
        display: block;
    }
</style>

<body>
    <div id="wrapper">
        @include('admin.layout.sidebar')

        <div class="main-panel">

            @include('admin.layout.header');
            <div class="container">
                @yield('content')
            </div>


            @include('admin.layout.footer')

        </div>

    </div>

    <script src="{{ asset('assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jsvectormap/world.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script src="{{ asset('assets/js/kaiadmin.min.js') }}"></script>
    <script src="{{ asset('assets/js/kaiadmin.js') }}"></script>
    <script src="{{ asset('assets/js/setting-demo.js') }}"></script>
    <script src="{{ asset('assets/js/setting-demo2.js') }}"></script>
    <script src="{{ asset('assets/js/demo.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>


    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{ asset('assets/css/fonts.min.css') }}"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <script>
        $(document).ready(function() {

        @if (session('successlogin'))
            $.notify({
                icon: 'icon-bell',
                title: 'Đăng nhập',
                message: '{{ session('successlogin') }}',
            }, {
                type: 'secondary',
                placement: {
                    from: "bottom",
                    align: "right"
                },
                time: 1000,
            });
        @endif
    });
    </script>
</body>

</html>
