@extends('client.layouts.master')

<style>
    #lienhe input,
    #lienhe p,
    #lienhe span {
        font-size: 15px !important;
    }
</style>
@section('content')
<main style="padding-top: 0">
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
                            <form action="{{ route('page.pay-server-administration') }}" method="POST" id="lienhe">
                                @csrf
                                <input class="form-control" type="hidden" name="service_id" id="cloud_id_input">
                                <input class="form-control" type="text" placeholder="Họ và tên" name="name" id="name">
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
                                    <p>Gói quản trị máy chủ : </p>
                                    <span class="product-name" id="product_name">

                                    </span>
                                </div>

                                <div class="submit-content">
                                    <button type="button" class="btn btn-submit btn-primary"
                                        onclick="submitlienhe(event)">Gửi Đi</button>
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
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    Apache Configuration
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    Dovecot
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    Nginx Configuration
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    Mail server troubleshooting (Exim, Postfix, Sendmail, Smartermail)
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    R1soft
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    WordPress
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="item-text">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    Softaculous Installation
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    EasyApache
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    Exim
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    MySQL Setup
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    Best effort support for 3rd Party Applications not listed
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    Server Density Installation and Troubleshooting
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
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
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    Cron/ Anacron Configuration
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    CentOS
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    Fedora
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    RedHat Enterprise Linux
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    File permissions Troubleshooting
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
                                                    Kernel Upgrades
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle fa-lg" style="color: #74C0FC;"></i>
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
                                <img src="https://nhanhoa.com/manager-service/image/hm-04.png" alt="Networking & DNS">
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
                    Tại sao nên lựa chọn Chúng tôi
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
                                        Với bề dày kinh nghiệm và giải pháp dịch vụ uy tín, chuyên nghiệp, Chúng tôi
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
                                        Chúng tôi cung cấp đa dạng gói quản trị máy chủ, đáp ứng mọi nhu cầu của
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
                                        Đội ngũ kỹ thuật Chúng tôi và các chuyên gia dày dạn kinh nghiệm luôn sẵn
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
                                    <div class="tab-pane fade show active" id="ha_noi" role="tabpanel"
                                        aria-labelledby="ha_noi-tab">
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
                                    <div class="tab-pane fade" id="hcm" role="tabpanel" aria-labelledby="hcm-tab">
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
                                    <div class="tab-pane fade" id="vinh" role="tabpanel" aria-labelledby="vinh-tab">
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 d-none d-lg-inline">
                        <div class="img-office position-relative"><img alt="{{ $config->store_name }}"
                                src="{{ asset($config->logo) }}" class="rtbs" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" media="screen"
    href="{{ asset('client/assets/css/bootstrap/jquery-confirm.min.css') }}" />

<link rel="stylesheet" href="{{ asset('client/assets/css/style.css') }}">


<link href="{{ asset('client/assets/css/bootstrap/bootstrap.css') }}" rel="stylesheet" type="text/css">

<style>
    .main-menu ul.navbar-nav>li.nav-item>ul.entry-menu>li>a>.item-menu>.icon img {
        max-width: 25px !important;
        margin-top: 8px !important;
    }
    .main-menu ul.navbar-nav>li.nav-item>ul.entry-menu>li>a{
        font-weight: 300px !important;
    }
    .main-menu ul.navbar-nav>li.nav-item{
        font-weight: 500px !important;
    }
    .description{
        line-height: 18px !important;
    }
</style>
@endsection
<script src="{{ asset('validator/client.js') }}"></script>
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
