<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <title>Cloud Storage</title>
    <meta http-equiv="Cache-Control" content="no-cache" />
    <meta http-equiv="Expires" content="-1" />
    <meta name="keywords" content="Nhân Hoà Cloud Storage - Giải pháp lưu trữ dữ liệu đám mây hiệu quả" />
    <meta name="description"
        content="Với Nhân Hoà Cloud Storage dữ liệu được lưu trữ tại 12 quốc gia, kết nối tới 350 đối tác công nghệ toàn cầu giúp các tổ chức và cá nhân dễ dàng quản lý và truy cập vào dữ liệu mọi lúc mọi nơi, đảm bảo hiệu năng cao và an toàn bảo mật." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <link rel="stylesheet" type="text/css" media="screen"
        href="{{ asset('client/assets/css/jquery/jquery-confirm.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('client/assets/css/style.css') }}">

</head>

<body class="lazyload">
    <div class="ladi-wraper">
        @include('client.pages.cloud-storage.breadcrumbs.SECTION1')
        @include('client.pages.cloud-storage.breadcrumbs.SECTION2')
        @include('client.pages.cloud-storage.breadcrumbs.SECTION7')
        @include('client.pages.cloud-storage.breadcrumbs.SECTION8')
        @include('client.pages.cloud-storage.breadcrumbs.SECTION9')
        @include('client.pages.cloud-storage.breadcrumbs.SECTION10')
        @include('client.pages.cloud-storage.breadcrumbs.SECTION11')
    </div>
    <div id="backdrop-popup" class="backdrop-popup"></div>
    <div id="backdrop-dropbox" class="backdrop-dropbox"></div>
    <div id="lightbox-screen" class="lightbox-screen"></div>

    @include('client.include.section-vfone')

    <script type="text/javascript" src="{{ asset('client/assets/js/jquery/jquery-3.6.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('client/assets/js/jquery/jquery-confirm.min.js') }}"></script>
    <script src="{{ asset('client/assets/js/cloud-storage.js') }}"></script>



</body>

</html>
