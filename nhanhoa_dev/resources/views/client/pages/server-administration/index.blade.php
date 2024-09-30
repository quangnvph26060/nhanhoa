<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dịch vụ quản lý máy chủ</title>

    <link rel="stylesheet" type="text/css" media="screen"
        href="{{ asset('client/assets/css/bootstrap/jquery-confirm.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('client/assets/css/style.css') }}">

    <link href="{{ asset('client/assets/css/bootstrap/bootstrap.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('client/assets/css/popup.css') }}">
    <!-- Toastr CSS -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


</head>

<body>

    <header>
        <div class="header-top header-top-home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="logo">
                            <a href="#intro" title="trang chủ">
                                <img style="height: 50px;"
                                    src="https://nhanhoa.com/manager-service/image/mobile/logo.png" alt="Logo Chúng Tôi"
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-6">

                        <div class="menu-container">
                            <a class="btn-menu-mobile" nh-menu="btn-open" menu-type="main" href="javascript:;">
                                <img src="https://nhanhoa.com/manager-service/image/mobile/menu.png" alt="Menu"
                                    class="img-fluid">
                            </a>
                            <div class="back-drop"></div>
                            <nav id="main_menu_mobile" class="menu-section" nh-menu="sidebar" menu-type="main">
                                <div class="menu-info">
                                    <div class="menu-top d-xl-none">
                                        <div class="title-menu">
                                            Menu
                                        </div>
                                        <div class="btn-close-menu">
                                            <a href="javascript:;" nh-menu="btn-close"
                                                class="close-sidebar effect-rotate icon-close">
                                                <i class="far fa-times-circle" style="color: #74C0FC;"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content-menu">
                                        <ul>
                                            <li class="position-relative has-child">
                                                <a href="#intro" title="Giới thiệu">
                                                    Trang chủ
                                                </a>
                                            </li>
                                            <li class="position-relative has-child">
                                                <a href="#bang-gia" title="Bảng giá">
                                                    Bảng giá
                                                </a>
                                            </li>
                                            <li class="position-relative has-child">
                                                <a href="#ho-tro" title="Hỗ trợ">
                                                    Hỗ trợ
                                                </a>
                                            </li>

                                            <li class="position-relative has-child">
                                                <a href="#tai-sao" title="Tại sao lựa chọn Nhân Hoà">
                                                    Tại sao lựa chọn Nhân Hoà
                                                </a>
                                            </li>

                                            <li class="position-relative has-child">
                                                <a href="#lien-he" title="Liên hệ">
                                                    Liên hệ
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="section-box-slider" id="intro">
            <div class="img">
                <img src="https://nhanhoa.com/manager-service/image/banner-slider.jpg" alt="banner">
            </div>
            <div class="content">

                <div class="container">

                    <div class="info">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="info-left">

                                    <h1 class="title-slider">
                                        <div class="title-section">
                                            Thuận tiện và nhanh chóng
                                        </div>
                                        Quản trị máy chủ
                                    </h1>
                                    <div class="dsc">
                                        Dịch vụ của chúng tôi không đơn thuần chỉ dừng lại
                                        ở việc hỗ trợ công nghệ, chúng tôi luôn sẵn sàng
                                        lắng nghe nhu cầu của khách hàng để mang lại
                                        giải pháp tốt nhất.
                                    </div>
                                    <div class="btn-btn-all btn_show_popup">
                                        <a href="javascript:void(0)">
                                            Liên hệ ngay
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-box-server"
            style="background-image: url(https://nhanhoa.com/manager-service/image/banner-02.jpg);">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="img ratio-16-9">
                                <img src="https://nhanhoa.com/manager-service/image/box-img-02.png"
                                    alt="GIÁM SÁT VÀ HỖ TRỢ SERVER">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="info">
                                <h2 class="name" style="color: #fff;">
                                    Giám sát và hỗ trợ server
                                </h2>
                                <div class="dsc">
                                    Dịch vụ quản trị máy chủ là hình thức cung cấp dịch vụ quản lý kỹ thuật
                                    thực hiện tất cả các thao tác quản lý thuộc trách nhiệm của bộ phận tương
                                    đương vị trí Quản trị hệ thống của khách hàng. Khi thuê dịch vụ quản lý
                                    máy chủ, khách hàng sẽ được cài đặt, cấu hình, tối ưu, theo dõi và xử lý các
                                    vấn đề kỹ thuật và lỗi phát sinh trên máy chủ nhằm đảm bảo máy chủ hoạt
                                    động trong trạng thái ổn định và hiệu suất cao nhất.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-table-price-mc" id="bang-gia">
            <div class="container">
                <h2 class="title-section text-center">
                    Bảng giá dịch vụ quản trị máy chủ
                </h2>
                <div class="info">
                    <div class="list">
                        <div class="row">
                            <div class="col-4">
                                <div class="item">
                                    <div class="item-col item-col-top">
                                        Hạng mục thực hiện
                                    </div>
                                    <div class="item-col">
                                        <div class="name">
                                            Hạng mục thực hiện
                                        </div>
                                        <div class="dsc">
                                            Thời gian tối đa từ lúc nhận yêu cầu hỗ trợ
                                            đến khi phản hồi lại cho khách hàng
                                        </div>
                                    </div>
                                    <div class="item-col">
                                        <div class="name">
                                            Tối ưu server
                                        </div>
                                        <div class="dsc">
                                            Hỗ trợ tối ưu các ứng dụng như Web Server,
                                            Mail Server…, các service: Apache,
                                            MySQL, PHP…
                                        </div>
                                    </div>
                                    <div class="item-col">
                                        <div class="name">
                                            Bảo mật server
                                        </div>
                                        <div class="dsc">
                                            Update lỗ hổng bảo mật trên OS và các
                                            ứng dụng trên nền tảng server, cài đặt,
                                            cấu hình firewall như iptables, csf, apf;
                                            secure tmp, change port server.

                                        </div>
                                    </div>
                                    <div class="item-col">
                                        <div class="name">
                                            Cấu hình backup
                                        </div>
                                        <div class="dsc">
                                            Hỗ trợ cấu hình backup trên server
                                            của khách hàng
                                        </div>
                                    </div>
                                    <div class="item-col">
                                        <div class="name">
                                            Chuyển dữ liệu website
                                        </div>
                                        <div class="dsc">
                                            Chuyển dữ liệu website về server
                                            khách hàng
                                        </div>
                                    </div>
                                    <div class="item-col">
                                        <div class="name">
                                            Giám sát cơ bản
                                        </div>
                                        <div class="dsc">
                                            Hỗ trợ giám sát mức agent: Ping, tài nguyên
                                            RAM, CPU, Load, status ổ cứng với
                                            server vật lý; Monitor website down với
                                            các server chạy website
                                        </div>
                                    </div>
                                    <div class="item-col">
                                        <div class="name">
                                            Giám sát chuyên sâu
                                        </div>
                                        <div class="dsc">
                                            Giám sát các ứng dụng đặc thù
                                            cần trao đổi trước với kỹ thuật
                                        </div>
                                    </div>
                                    <div class="item-col">
                                        <div class="name">
                                            Báo cáo sự cố
                                        </div>
                                        <div class="dsc">
                                            Báo cáo khi xảy ra các sự cố dịch vụ
                                        </div>
                                    </div>
                                    <div class="item-col">
                                        <div class="name">
                                            Báo cáo định kỳ
                                        </div>
                                        <div class="dsc">
                                            Báo cáo tổng hợp về dịch vụ vào
                                            ngày 15 và 30 hàng tháng

                                        </div>
                                    </div>
                                    <div class="item-col item-col-bottom">
                                        Đơn giá/tháng
                                    </div>
                                </div>
                            </div>
                            @forelse ($servicePricing as $index => $item )
                            @if ($index <2) <div class="col-4">
                                <div class="item">
                                    <div class="item-col item-col-top">
                                        {{ $item->name }} <br>
                                        {{-- (Part Managed) --}}
                                    </div>
                                    <div class="item-col">
                                        {{ $item->category_implementation }}
                                    </div>
                                    <div class="item-col">
                                        <i class="fas fa-times-circle fa-lg"
                                            style="color: {{ $item->server_optimization == 1 ? '#74C0FC':'#c81e1e' }};"></i>
                                    </div>
                                    <div class="item-col">
                                        <i class="fas fa-times-circle fa-lg"
                                            style="color:{{ $item->server_security == 1 ? '#74C0FC':'#c81e1e' }};"></i>
                                    </div>
                                    <div class="item-col">
                                        <i class="fas fa-check-circle fa-lg"
                                            style="color: {{ $item->server_security == 1 ? '#74C0FC':'#c81e1e' }};"></i>
                                    </div>
                                    <div class="item-col">
                                        {{ $item->website_data_migration }}
                                    </div>
                                    <div class="item-col">
                                        <i class="fas fa-check-circle fa-lg"
                                            style="color: {{ $item->basic_monitoring == 1 ? '#74C0FC':'#c81e1e' }};"></i>
                                    </div>
                                    <div class="item-col">
                                        <i class="fas fa-check-circle fa-lg"
                                            style="color:{{ $item->advanced_monitoring == 1 ? '#74C0FC':'#c81e1e' }};"></i>
                                    </div>
                                    <div class="item-col">
                                        <i class="fas fa-times-circle fa-lg"
                                            style="color:{{ $item->incident_reporting == 1 ? '#74C0FC':'#c81e1e' }};"></i>
                                    </div>
                                    <div class="item-col">
                                        <i class="fas fa-check-circle fa-lg"
                                            style="color: {{ $item->periodic_reporting_by_email == 1 ? '#74C0FC':'#c81e1e' }};"></i>
                                    </div>
                                    <div class="item-col item-col-bottom">
                                        {{ number_format($item->price, '0', ',', '.') }}đ
                                    </div>
                                </div>
                                <div class="btn-price">
                                    <a class="btn-add-cart btn-service add_service_cart"
                                        onclick="openPopup({{ $item->id }}, '{{ $item->name }}')"
                                        data-service_id="{{ $item->id }}">
                                        <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                            <div class="rect1"></div>
                                            <div class="rect2"></div>
                                            <div class="rect3"></div>
                                            <div class="rect4"></div>
                                            <div class="rect5"></div>
                                        </div>
                                        <span class="btn_text">Mua</span>

                                    </a>
                                </div>


                        </div>

                        @endif
                        @empty

                        @endforelse
                    </div>
                    <div class="popup-cart" id="popup">
                        <div class="content_popup">
                            <a href="javascript:void(0)" class="re-close-popup close" onclick="closePopup()"
                                title="close">×</a>
                            <div class="input-content">
                                <div class="input-content-intro">
                                    <div class="input-content-intro-icon">
                                        <i class="fas fa-calendar-week" style="color: #4ABAB9;"></i>
                                    </div>
                                    <div class="input-content-intro-des">
                                        <div class="text-hello">Xin chào,</div>
                                        <p class="conten-sub">Vui lòng nhập thông tin để chúng tôi liên hệ
                                            lại
                                            với bạn.</p>
                                    </div>
                                </div>
                                <form action="{{ route('page.pay-server-administration') }}" method="POST">
                                    @csrf
                                    <input class="form-control" type="text" placeholder="Họ và tên" name="name"
                                        id="name">
                                    <span class="invalid-feedback d-block" style="text-align: left; margin-bottom: 20px"
                                        id="name_error"></span>

                                    <input class="form-control" type="text" placeholder="Số điện thoại" name="phone"
                                        id="phone">
                                    <span class="invalid-feedback d-block" style="text-align: left; margin-bottom: 20px"
                                        id="phone_error"></span>

                                    <input class="form-control" type="text" placeholder="Email" name="email" id="email">
                                    <span class="invalid-feedback d-block" style="text-align: left; margin-bottom: 20px"
                                        id="email_error"></span>
                                    <div class="product-info">
                                        <p>Gói dịch vụ quản trị máy chủ : </p>
                                        <span class="product-name" id="product_name">

                                        </span>
                                    </div>

                                    <div class="submit-content">
                                        <button type="button" class="btn btn-submit" onclick="submitlienhe(event)">Gửi Đi</button>
                                        <div class="go-hotline">Gọi hotline <span>(024) 7308 6680</span>
                                            (24/7)
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="section-box-hmht" id="ho-tro">
            <div class="img-before">
                <img src="https://nhanhoa.com/manager-service/image/banner-before-hm.png">
            </div>
            <div class="img-after">
                <img src="https://nhanhoa.com/manager-service/image/banner-after-hm.png">
            </div>
            <div class="container">
                <div class="content">
                    <h2 class="title-section text-center mb-4">
                        Hạng mục hỗ trợ
                    </h2>
                    <div class="item-row">
                        <div class="row align-items-center">
                            <div class="col-md-4 col-12">
                                <div class="img">
                                    <img src="https://nhanhoa.com/manager-service/image/hm-01.png"
                                        alt="Software/Application Assistance">
                                </div>
                            </div>
                            <div class="col-md-8 col-12 col-text">
                                <h3 class="title">
                                    Software/Application Assistance
                                </h3>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="item-text">
                                                <ul>
                                                    <li>
                                                        <i class="fas fa-check-circle fa-lg"
                                                            style="color: #74C0FC;"></i>
                                                        Apache Configuration
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle fa-lg"
                                                            style="color: #74C0FC;"></i>
                                                        Dovecot
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle fa-lg"
                                                            style="color: #74C0FC;"></i>
                                                        Nginx Configuration
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle fa-lg"
                                                            style="color: #74C0FC;"></i>
                                                        Mail server troubleshooting (Exim, Postfix, Sendmail,
                                                        Smartermail)
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle fa-lg"
                                                            style="color: #74C0FC;"></i>
                                                        R1soft
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle fa-lg"
                                                            style="color: #74C0FC;"></i>
                                                        WordPress
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="item-text">
                                                <ul>
                                                    <li>
                                                        <i class="fas fa-check-circle fa-lg"
                                                            style="color: #74C0FC;"></i>
                                                        Softaculous Installation
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle fa-lg"
                                                            style="color: #74C0FC;"></i>
                                                        EasyApache
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle fa-lg"
                                                            style="color: #74C0FC;"></i>
                                                        Exim
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle fa-lg"
                                                            style="color: #74C0FC;"></i>
                                                        MySQL Setup
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle fa-lg"
                                                            style="color: #74C0FC;"></i>
                                                        Best effort support for 3rd Party Applications not listed
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle fa-lg"
                                                            style="color: #74C0FC;"></i>
                                                        Server Density Installation and Troubleshooting
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle fa-lg"
                                                            style="color: #74C0FC;"></i>
                                                        Webmail (Horde/Squirrelmail/Roundcube)
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-row">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-12  col-text">
                                <h3 class="title">
                                    cPanel
                                </h3>
                                <div class="container">
                                    <div class="item-text">
                                        <ul>
                                            <li>
                                                <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                cPanel Configuration
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                cPanel to cPanel Migration
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                DNS Clustering Configuration
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                Database Restoration ( from local DB or with .sql file)
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                cPanel Installation
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                PHP Modules in EasyApache
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                cPanel Backup Configuration
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-12">
                                <div class="img">
                                    <img src="https://nhanhoa.com/manager-service/image/hm-02.png" alt="cPanel">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="item-row">
                        <div class="row align-items-center">
                            <div class="col-md-4 col-12">
                                <div class="img">
                                    <img src="https://nhanhoa.com/manager-service/image/hm-03.png" alt="Linux">
                                </div>
                            </div>
                            <div class="col-md-8 col-12  col-text">
                                <h3 class="title">
                                    Linux
                                </h3>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="container">
                                            <div class="item-text">
                                                <ul>
                                                    <li>
                                                        <i class="fas fa-check-circle fa-lg"
                                                            style="color: #74C0FC;"></i>
                                                        Cron/ Anacron Configuration
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle fa-lg"
                                                            style="color: #74C0FC;"></i>
                                                        CentOS
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle fa-lg"
                                                            style="color: #74C0FC;"></i>
                                                        Fedora
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle fa-lg"
                                                            style="color: #74C0FC;"></i>
                                                        RedHat Enterprise Linux
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle fa-lg"
                                                            style="color: #74C0FC;"></i>
                                                        File permissions Troubleshooting
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle fa-lg"
                                                            style="color: #74C0FC;"></i>
                                                        Kernel Upgrades
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle fa-lg"
                                                            style="color: #74C0FC;"></i>
                                                        Linux Kernel Modules
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="item-text">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    Data Mirroring: scp, rsync, lsftp, dd
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    Debian
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    Ubuntu
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    File System Management
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    High Load Management
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    LAMP Install & Configuration
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-row">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-12  col-text">
                                <h3 class="title">
                                    Networking & DNS
                                </h3>
                                <div class="container">
                                    <div class="item-text">
                                        <ul>
                                            <li>
                                                <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                Custom Nameserver
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                Spam Filtering (Spam Assassin)
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                DNS Zone File and Record Management
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                Basic Network Configuration
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-12">
                                <div class="img ">
                                    <img src="https://nhanhoa.com/manager-service/image/hm-04.png"
                                        alt="Networking & DNS">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="item-row">
                        <div class="row align-items-center">

                            <div class="col-md-4 col-12">
                                <div class="img">
                                    <img src="https://nhanhoa.com/manager-service/image/hm-05.png"
                                        alt="Security configuration">
                                </div>
                            </div>
                            <div class="col-md-2 col-12">

                            </div>
                            <div class="col-md-6 col-12  col-text">
                                <h3 class="title">
                                    Security configuration
                                </h3>
                                <div class="item-text">
                                    <ul>
                                        <li>
                                            <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                            ModSecurity
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                            Rkhunter (Scan)
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                            SHH Lockdown
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                            SSL Installation and Troubleshooting
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                            ClamAV (Linux) (Scan)
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                            Maldet(Scan)
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                            Firewall (CSF+LFD, APF, PFsense)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-row">
                        <div class="row align-items-center">

                            <div class="col-md-6 col-12  col-text">
                                <h3 class="title">
                                    Protocols and Ports
                                </h3>
                                <div class="item-text">
                                    <ul>
                                        <li>
                                            <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                            ModSecurity
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                            Rkhunter (Scan))
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                            SHH Lockdown
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                            SSL Installation and Troubleshooting
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                            ClamAV (Linux) (Scan)
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                            Maldet(Scan)
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                            Firewall (CSF+LFD, APF, PFsense)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="img">
                                    <img src="https://nhanhoa.com/manager-service/image/hm-06.png"
                                        alt="Protocols and Ports">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-box-ts" id="tai-sao">
            <div class="container">
                <div class="content">
                    <h2 class="title-section text-center">
                        Tại sao nên lựa chọn Chúng Tôi
                    </h2>
                    <div class="list-ts">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="item">
                                    <div class="icon">
                                        <img alt="Hơn 22 năm kinh nghiệm"
                                            src="https://nhanhoa.com/manager-service/image/22-nam-kinh-nghiem.svg">
                                    </div>
                                    <div class="info">
                                        <h3 class="name">
                                            Hơn 22 năm kinh nghiệm
                                        </h3>
                                        <div class="dsc">
                                            Với bề dày kinh nghiệm và giải pháp dịch vụ uy tín, chuyên nghiệp, Chúng Tôi
                                            luôn nằm trong top đầu các đơn vị cùng lĩnh vực.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="item">
                                    <div class="icon">
                                        <img alt="Tiết kiệm chi phí"
                                            src="https://nhanhoa.com/manager-service/image/tiet-kiem-chi-phi.svg">
                                    </div>
                                    <div class="info">
                                        <h3 class="name">
                                            Tiết kiệm chi phí
                                        </h3>
                                        <div class="dsc">
                                            Tối ưu chi phí thuê nhân sự trình độ cao quản trị máy chủ, đảm bảo được việc
                                            theo dõi quản trị hàng ngày.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="item">
                                    <div class="icon">
                                        <img alt="Đa dạng dịch vụ"
                                            src="https://nhanhoa.com/manager-service/image/da-dang-dich-vu.svg">
                                    </div>
                                    <div class="info">
                                        <h3 class="name">
                                            Đa dạng dịch vụ
                                        </h3>
                                        <div class="dsc">
                                            Chúng Tôi cung cấp đa dạng gói quản trị máy chủ, đáp ứng mọi nhu cầu của
                                            khách hàng.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="item">
                                    <div class="icon">
                                        <img alt="Hỗ trợ kỹ thuật 24/7/365 "
                                            src="https://nhanhoa.com/manager-service/image/ho-tro-ky-thuat.svg">
                                    </div>
                                    <div class="info">
                                        <h3 class="name">
                                            Hỗ trợ kỹ thuật 24/7/365
                                        </h3>
                                        <div class="dsc">
                                            Đội ngũ kỹ thuật Chúng Tôi và các chuyên gia dày dạn kinh nghiệm luôn sẵn
                                            sàng hỗ trợ khách hàng 24/7 trong suốt quá trình sử dụng.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-box-up-umail" id="lien-he">
            <div class="container">
                <div class="content text-center">
                    <h3 class="title-section">
                        Bạn cần được tư vấn cụ thể?
                    </h3>
                    <div class="dsc">
                        Dịch vụ quản trị máy chủ giúp bạn tiết kiệm thời gian và nhân sự, hơn 60.000+ khách hàng đã lựa
                        chọn Chúng Tôi.
                    </div>
                    {{-- <div class="link text-center">
                        <a href="#tuvanngay" title="Liên hệ tư vấn" class="btn_show_popup">
                            Liên hệ tư vấn
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>

        <div class="section-connect-office" id="lien-he">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="tab-office">
                                <div class="title-section text-left">Kết nối với Chúng tôi</div>
                                <div class="tab-content-office">
                                    <ul role="tablist" class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a aria-selected="true" aria-controls="ha_noi" role="tab" href="#ha_noi"
                                                data-toggle="tab" id="ha_noi-tab" class="nav-link active show">
                                                Văn phòng Hà Nội
                                            </a>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a aria-selected="false" aria-controls="hcm" role="tab" href="#hcm"
                                                data-toggle="tab" id="hcm-tab" class="nav-link">
                                                Văn phòng TP. HCM
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a aria-selected="false" aria-controls="vinh" role="tab" href="#vinh"
                                                data-toggle="tab" id="vinh-tab" class="nav-link">
                                                Văn phòng Vinh
                                            </a>
                                        </li> --}}
                                    </ul>
                                    <div class="tab-content">
                                        <div aria-labelledby="ha_noi-tab" role="tabpanel" id="ha_noi"
                                            class="tab-pane active show">
                                            <div class="info-office">
                                                <p class="address"><img
                                                        src="https://nhanhoa.com/templates/images/v2/home/icon_map.svg"
                                                        alt="Map"> {{ $config->address }}</p>
                                                <p><img src="https://nhanhoa.com/templates/images/v2/home/icon_dien_thoai.svg"
                                                        alt="Phone"> Điện thoại: {{ $config->phone }}
                                                </p>
                                                <p><img src="https://nhanhoa.com/templates/images/v2/home/icon_fax.svg"
                                                        alt="Mail"> Mail: {{ $config->email }}</p>
                                                <p><img src="https://nhanhoa.com/templates/images/v2/home/smartphone.svg"
                                                        alt="Hotline"> Phản ánh chất lượng dịch vụ: {{ $config->phone }}
                                                </p>
                                            </div>
                                        </div>
                                        <div aria-labelledby="hcm-tab" role="tabpanel" id="hcm" class="tab-pane">
                                            <div class="info-office">
                                                <p class="address">
                                                    <img alt="Map"
                                                        src="https://nhanhoa.com/manager-service/image/icon_map.svg" />
                                                    927/1 CMT8, Phường 7, Quận Tân Bình, Thành phố Hồ Chí Minh
                                                </p>
                                                <p>
                                                    <img alt="Phone"
                                                        src="https://nhanhoa.com/manager-service/image/icon_dien_thoai.svg" />
                                                    Điện thoại: (028) 7308 6680
                                                </p>
                                                <p>
                                                    <img alt="Mail"
                                                        src="https://nhanhoa.com/manager-service/image/icon_fax.svg" />
                                                    Mail: hcmsales@nhanhoa.com
                                                </p>
                                                <p>
                                                    <img alt="Hotline"
                                                        src="https://nhanhoa.com/manager-service/image/smartphone.svg" />
                                                    Hotline: 091 285 1416
                                                </p>
                                            </div>
                                        </div>
                                        <div aria-labelledby="vinh-tab" role="tabpanel" id="vinh" class="tab-pane">
                                            <div class="info-office">
                                                <p class="address">
                                                    <img alt="Map"
                                                        src="https://nhanhoa.com/manager-service/image/icon_map.svg" />
                                                    Tầng 2 Tòa nhà Sài Gòn Sky, ngõ 26 Nguyễn Thái Học, phường Đội Cung,
                                                    TP. Vinh, Nghệ An
                                                </p>
                                                <p>
                                                    <img alt="Phone"
                                                        src="https://nhanhoa.com/manager-service/image/icon_dien_thoai.svg" />
                                                    Điện thoại: (024) 7308 6680 - nhánh 6
                                                </p>
                                                <p><img alt="Mail"
                                                        src="https://nhanhoa.com/manager-service/image/icon_fax.svg" />
                                                    Mail: contact@nhanhoa.com
                                                </p>
                                                <p>
                                                    <img alt="Hotline"
                                                        src="https://nhanhoa.com/manager-service/image/smartphone.svg" />
                                                    Hotline : 091 522 1384
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 d-none d-lg-inline">
                            <div class="img-office position-relative"><img alt="Kết nối với Nhân Hoà"
                                    src="https://nhanhoa.com/manager-service/image/1702538643_ket-noi-nhan-hoa.png"
                                    class="rtbs" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer class="footer-idx">
        <div class="section-footer-top">
            <div class="container">
                <div class="item-list-footer item-list-footer-one">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="item-menu-footer">
                                <div class="title-footer">
                                    Công ty
                                </div>
                                <ul>
                                    <li>
                                        <a target="_blank" title="Giới thiệu về Công ty"
                                            href="https://nhanhoa.com/gioi-thieu.html">
                                            Giới thiệu về Công ty
                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank" title="Liên hệ" href="https://nhanhoa.com/lien-he.html">
                                            Liên hệ
                                        </a>
                                    </li>

                                    <li>
                                        <a target="_blank" title="Chính sách Đại lý"
                                            href="https://nhanhoa.com/trang/chinh-sach-dai-ly.html">
                                            Chính sách Đại lý
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item-menu-footer">
                                <div class="title-footer">
                                    Tin tức
                                </div>
                                <ul>
                                    <li>
                                        <a target="_blank" title="Chương trình ưu đãi"
                                            href="https://nhanhoa.com/uu-dai-nhan-hoa.html">
                                            Chương trình ưu đãi
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" title="Tin công nghệ" target="_blank"
                                            href="https://wiki.nhanhoa.com/">
                                            Tin công nghệ
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" title="Tin tức" href="https://nhanhoa.com/tin-tuc.html">
                                            Tin tức
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="item-menu-footer">
                                <div class="title-footer">
                                    Trợ giúp
                                </div>
                                <ul>
                                    <li>
                                        <a href="https://nhanhoa.com/tin-tuc/huong-dan-thanh-toan.html" target="_blank"
                                            title="Hướng dẫn thanh toán"><span>Hướng dẫn thanh
                                                toán</span></a>
                                    </li>
                                    <li>
                                        <a href="https://nhanhoa.com/tin-tuc/huong-dan-thu-tuc-bo-sung-ban-khai-dang-ky-ten-mien-qua-ho-so-dien-tu.html"
                                            target="_blank" title="Hướng dẫn hoàn thiện hồ sơ tên miền .VN"><span>Hướng
                                                dẫn hoàn thiện
                                                hồ sơ tên miền .VN</span></a>
                                    </li>
                                    <li>
                                        <a href="https://nhanhoa.com/tin-tuc/quy-trinh-giai-quyet-khieu-nai-khach-hang.html"
                                            target="_blank" title="Quy trình giải quyết khiếu nại"><span>Quy trình
                                                giải quyết khiếu nại</span></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="item-menu-footer">
                                <div class="title-footer">
                                    Quy định &amp; Chính sách
                                </div>
                                <ul>
                                    <li>
                                        <a href="https://nhanhoa.com/tin-tuc/quy-dinh-su-dung-dich-vu.html"
                                            target="_blank" title="Quy định sử dụng dịch vụ"><span>Quy định sử dụng
                                                dịch vụ</span></a>
                                    </li>
                                    <li>
                                        <a href="https://nhanhoa.com/tin-tuc/quy-dinh-su-dung-ten-mien.html"
                                            target="_blank" title="Quy định sử dụng tên miền"><span>Quy định sử dụng
                                                tên miền</span></a>
                                    </li>
                                    <li>
                                        <a href="https://nhanhoa.com/tin-tuc/quy-dinh-doi-tra-va-hoan-tien.html"
                                            target="_blank" title="Quy định đổi trả &amp; hoàn trả tiền"><span>Quy
                                                định đổi trả &amp; hoàn trả tiền</span></a>
                                    </li>

                                    <li>
                                        <a href="https://nhanhoa.com/tin-tuc/chinh-sach-bao-mat-thong-tin-information-privacy-policy.html"
                                            target="_blank" title="Chính sách bảo mật thông tin"><span>Chính sách bảo
                                                mật thông tin</span></a>
                                    </li>
                                    <li>
                                        <a href="https://nhanhoa.com/tin-tuc/legal-agreements.html" target="_blank"
                                            title="Legal Agreements"><span>Legal Agreements</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="item-menu-footer">
                                <div class="title-footer">
                                    Ứng dụng
                                </div>
                                <ul class="logo-app-footer">
                                    <li>
                                        <a target="_blank" title="Giới thiệu Chúng Tôi App"
                                            href="https://nhanhoa.com/nhan-hoa-app.html">
                                            Giới thiệu Chúng Tôi App
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Giới thiệu Chúng Tôi App"
                                            href="https://apps.apple.com/vn/app/nh%C3%A2n-ho%C3%A0/id1469246570"
                                            target="_blank">
                                            <img src="https://nhanhoa.com/manager-service/image/app_store.png" />
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Giới thiệu Chúng Tôi App"
                                            href="https://play.google.com/store/apps/details?id=com.nh.domain&amp;hl=vi"
                                            target="_blank">
                                            <img src="https://nhanhoa.com/manager-service/image/google_play.png" />
                                        </a>
                                    </li>
                                </ul>
                                <ul class="logo-app-footer">
                                    <li>
                                        <a target="_blank" href="https://muabandomain.com/">
                                            Giới thiệu Sàn tên miền
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://apps.apple.com/vn/app/s%C3%A0n-domain/id6446716327"
                                            target="_blank">
                                            <img src="https://nhanhoa.com/manager-service/image/app_store.png" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://play.google.com/store/apps/details?id=com.nhanhoa.muabandomain"
                                            target="_blank">
                                            <img src="https://nhanhoa.com/manager-service/image/google_play.png" />
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-list-footer mb-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="item-menu-footer">
                                <div class="footer-inline-icon">
                                    <span>Kết nối mạng xã hội cùng Chúng Tôi</span>
                                    <ul class="list-img-fanpage">
                                        <li>
                                            <a href="https://www.facebook.com/nhanhoacom" target="_blank">
                                                <img src="https://nhanhoa.com/manager-service/image/icon_facebook.png"
                                                    alt="facebook" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/nhanhoagroup" target="_blank">
                                                <img src="https://nhanhoa.com/manager-service/image/icon_twitter.png"
                                                    alt="twitter" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/channel/UCB_gZGsKMNdPCkDyu-mEsAQ"
                                                target="_blank">
                                                <img src="https://nhanhoa.com/manager-service/image/icon_youtube.png"
                                                    alt="Youtube" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/company/nhan-hoa-software-company"
                                                target="_blank">
                                                <img src="https://nhanhoa.com/manager-service/image/icon_in.png"
                                                    alt="In" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://zalo.me/220654257120240702" target="_blank">
                                                <img src="https://nhanhoa.com/manager-service/image/icon_zalo.png"
                                                    alt="zalo" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://t.me/nhanhoacom" target="_blank">
                                                <img src="https://nhanhoa.com/manager-service/image/icon_telegram.png"
                                                    alt="telegram" />
                                            </a>
                                        </li>
                                        <li class="d-none">
                                            <a href="/" target="_blank">
                                                <img src="https://nhanhoa.com/manager-service/image/icon_skype.png"
                                                    alt="skype" />
                                            </a>
                                        </li>
                                        <li class="d-none">
                                            <a href="https://www.instagram.com/nhanhoa.official/" target="_blank">
                                                <img src="https://nhanhoa.com/manager-service/image/icon_instagram.png"
                                                    alt="instagram" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.tiktok.com/@nhanhoa_official" target="_blank">
                                                <img src="https://nhanhoa.com/manager-service/image/icon_tiktok.png"
                                                    alt="tiktok" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-footer-bottom">
            <div class="container">
                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-7 col-12">
                            <div class="info-contact-website">
                                <div class="logo-footer">
                                    <a href="https://nhanhoa.com">
                                        <img src="https://nhanhoa.com/manager-service/image/logo_nhan_hoa.png"
                                            alt="Logo" />
                                    </a>
                                </div>
                                <div class="info">
                                    <p>
                                        Copyright © 2002 – 2024 Nhan Hoa Software Company. All Rights Reserved.
                                    </p>
                                    <p class="d-none d-md-block">
                                        {{ $config->store_name }}. Đại diện: {{ $config->store_name }}
                                    </p>
                                    <p class="d-none d-md-block">
                                        Giấy phép kinh doanh số: 0101289966 do Sở kế hoạch và Đầu tư Hà nội cấp ngày
                                        19/09/2002
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-lg-5 col-md-5 col-12">
                            <div class="nhanhoa_group">
                                <a class="group_name group-logo-home-nh" href="javascript:void(0);">
                                    <img class="logo_name_1"
                                        src="https://nhanhoa.com/manager-service/image/nhanhoa-group-white.png" />
                                    <img class="logo_name_2"
                                        src="https://nhanhoa.com/manager-service/image/nhanhoa-group.png" />
                                </a>
                                <a class="group_child group-logo-home-nh" href="javascript:void(0);">
                                    <img class="logo_name_1"
                                        src="https://nhanhoa.com/manager-service/image/logo_nhan_hoa.png" />
                                    <img class="logo_name_2"
                                        src="https://nhanhoa.com/manager-service/image/logo_nhan_hoa.png" />
                                </a>
                                <a class="group_child" href="https://web4s.vn/" target="_blank">
                                    <img class="logo_name_1"
                                        src="https://nhanhoa.com/manager-service/image/web4s-white.png" />
                                    <img class="logo_name_2"
                                        src="https://nhanhoa.com/manager-service/image/web4s.png" />
                                </a>
                                <a class="group_child" href="https://vfone.vn/" target="_blank">
                                    <img class="logo_name_1"
                                        src="https://nhanhoa.com/manager-service/image/vfone-white.png" />
                                    <img class="logo_name_2"
                                        src="https://nhanhoa.com/manager-service/image/vfone.png" />
                                </a>
                                <a class="group_child" href="https://esoc.vn/" target="_blank">
                                    <img class="logo_name_1"
                                        src="https://nhanhoa.com/manager-service/image/esoc-white.png" />
                                    <img class="logo_name_2" src="https://nhanhoa.com/manager-service/image/esoc.png" />
                                </a>
                                <a class="group_child" href="https://cloud365.vn/" target="_blank">
                                    <img class="logo_name_1"
                                        src="https://nhanhoa.com/manager-service/image/cloud365-white.png" />
                                    <img class="logo_name_2"
                                        src="https://nhanhoa.com/manager-service/image/cloud365.png" />
                                </a>
                                <a class="group_child" href="https://hoadon.biz/" target="_blank">
                                    <img class="logo_name_1"
                                        src="https://nhanhoa.com/manager-service/image/hoadon-white.png" />
                                    <img class="logo_name_2"
                                        src="https://nhanhoa.com/manager-service/image/hoadon.png" />
                                </a>
                                <a class="group_child" href="https://echungtu.com/" target="_blank">
                                    <img class="logo_name_1"
                                        src="https://nhanhoa.com/manager-service/image/echungtu-white.png" />
                                    <img class="logo_name_2"
                                        src="https://nhanhoa.com/manager-service/image/echungtu.png" />
                                </a>
                                <a class="group_child" href="https://umail.vn/" target="_blank">
                                    <img class="logo_name_1"
                                        src="https://nhanhoa.com/manager-service/image/umail-white.png" />
                                    <img class="logo_name_2"
                                        src="https://nhanhoa.com/manager-service/image/umail.png" />
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('client/assets/js/jquery/jquery-3.6.0.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('client/assets/js/jquery/jquery-confirm.min.js') }}"></script>

    <script src="{{ asset('client/assets/js/bootstrap/bootstrap.min.js') }}"></script>

    <script src="{{ asset('client/assets/js/bootstrap/popper.min.js') }}"></script>

    <script src="{{ asset('client/assets/js/swiper/swiper-bundle.min.js') }}"></script>

    <script src="{{ asset('validator/client.js') }}"></script>

    @include('client.include.section-vfone')
    <script>
        $(document).ready(function() {

            $(".btn_show_popup").click(function() {
                $(".popup-re-call").css("display", "block");
            });

            $(".re-close-popup").click(function() {
                $(".popup-re-call").css("display", "none");
            });
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll > 100) {
                    $(".header-top").addClass("fix");
                } else {
                    $(".header-top").removeClass("fix");
                }
            });

             @if (session('success'))
             toastr.success("{{ session('success') }}", "Thông báo:", {
                positionClass: "toast-bottom-right",
                timeOut: 3000,
                closeButton: true,
                progressBar: true,
                preventDuplicates: true,
            });
            @endif
        });

        const menuButton = document.querySelector(".btn-menu-mobile");
        const menu = document.querySelector("#main_menu_mobile");
        const backDrop = document.querySelector(".back-drop");
        const closeButton = document.querySelector(".btn-close-menu a");

        // Toggle khi nháº¥n nĂºt menu
        menuButton.addEventListener("click", function() {
            menu.classList.toggle("open"); // Toggle hiá»ƒn thá»‹ menu
            backDrop.classList.toggle("open"); // Toggle backdrop
        });

        // ÄĂ³ng menu khi nháº¥n nĂºt close
        closeButton.addEventListener("click", function() {
            menu.classList.remove("open");
            backDrop.classList.remove("open");
        });

        // ÄĂ³ng menu khi nháº¥n vĂ o backdrop
        backDrop.addEventListener("click", function() {
            menu.classList.remove("open");
            backDrop.classList.remove("open");
        });

        function openPopup(cloudId, productName) {
            document.getElementById('popup').style.display = 'block';
            document.getElementById('cloud_id_input').value = cloudId; // Cập nhật giá trị cloud_id
            document.getElementById('product_name').textContent = productName; // Cập nhật tên sản phẩm
        }

        function closePopup() {
            document.getElementById('popup').style.display = 'none';
        }


    </script>

</html>
