<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('client/assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/swiper/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/solution-invoice.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />



</head>

<body>
    <header class="header sticky-top">
        <nav b-sg71mgo1ai="" class="navbar navbar-expand-lg">
            <div b-sg71mgo1ai="" class="container-xl">
                <button b-sg71mgo1ai="" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-menu" aria-expanded="false">
                    <i class="fas fa-bars" style="color: #74C0FC;"></i>
                    <i b-sg71mgo1ai="" class="bx bx-x d-none"></i>
                </button>

                <!-- logo -->
                <a b-sg71mgo1ai="" class="navbar-brand" href="/">
                    <img class="img-fluid" src="http://interface.test/assets/image/tải xuống (1).png" alt="Logo">
                </a>
                <!-- btn đăng nhập -->
                <div b-sg71mgo1ai="" class="navbar-nav order-lg-last flex-row">
                    <a b-sg71mgo1ai="" class="btn-action-header d-none d-md-inline-block btn-login"
                        href="https://login.e-hoadon.cloud">
                        <i class="fas fa-sign-in-alt fa-sm" style="color: #ffffff;"></i>
                        Đăng nhập
                    </a>
                    <a b-sg71mgo1ai="" class="btn-action-header d-md-none btn-login" href="https://login.hoadon.biz/">
                        <i class="fas fa-sign-in-alt" style="color: #ffffff;"></i>
                    </a>
                </div>
                <div b-sg71mgo1ai="" class="collapse navbar-collapse" id="navbar-menu">
                    <ul b-sg71mgo1ai="" class="navbar-nav ms-md-3">
                        <li b-sg71mgo1ai="" class="nav-item home-page">
                            <a b-sg71mgo1ai="" class="nav-link" href="/"><span b-sg71mgo1ai="">Trang
                                    chủ</span></a>
                        </li>
                        <li b-sg71mgo1ai="" class="nav-item about-page">
                            <a b-sg71mgo1ai="" class="nav-link" href="/tinh-nang">Tính năng</a>
                        </li>
                        <li b-sg71mgo1ai="" class="nav-item feature-page">
                            <a b-sg71mgo1ai="" class="nav-link" href="/bang-gia">Bảng giá</a>
                        </li>
                        <li b-sg71mgo1ai="" class="nav-item post-page">
                            <a b-sg71mgo1ai="" class="nav-link" href="/tin-tuc">Tin tức</a>
                        </li>
                        <li b-sg71mgo1ai="" class="nav-item post-page">
                            <a b-sg71mgo1ai="" class="nav-link" href="https://tracuu.e-hoadon.cloud/"
                                target="_blank">Tra cứu</a>
                        </li>
                        <li b-sg71mgo1ai="" class="nav-item contact-page">
                            <a b-sg71mgo1ai="" class="nav-link " href="/lien-he">Liên hệ</a>
                        </li>
                    </ul>

                    <div b-sg71mgo1ai="" class="header-phone d-none">
                        <i b-sg71mgo1ai="" class="fa fa-phone"></i>
                        1900 6680
                    </div>

                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="footer">
        <div class="section-footer-top">
            <div class="container">
                <div class="item-list-footer">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="item-menu-footer">
                                <div class="title-footer">
                                    Công ty
                                </div>
                                <ul>
                                    <li>
                                        <a href="https://nhanhoa.com/ve-nhan-hoa.html">
                                            Giới thiệu về Công ty
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://nhanhoa.com/tuyen-dung.html">
                                            Tuyển dụng
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://nhanhoa.com/lien-he.html">
                                            Liên hệ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://nhanhoa.com/trang/cau-hoi-thuong-gap.html">
                                            Câu hỏi thường gặp
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://nhanhoa.com/trang/tro-giup-khach-hang.html">
                                            Trợ giúp khách hàng
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="item-menu-footer">
                                <div class="title-footer">
                                    Dịch vụ
                                </div>
                                <ul>
                                    <li><a href="https://nhanhoa.com/ten-mien/dang-ky-moi-ten-mien.html"
                                            title="">Đăng ký Tên miền</a></li>
                                    <li><a href="https://nhanhoa.com/email/email-hosting.html"
                                            title="Bảng giá Email hosting">Bảng giá Email hosting</a></li>
                                    <li><a href="https://nhanhoa.com/hosting/windows-hosting.html"
                                            title="">Unlimited Hosting</a></li>
                                    <li><a href="https://nhanhoa.com/may-chu/may-chu-ao-vps.html" title="">Máy
                                            chủ ảo Cloud VPS</a></li>
                                    <li><a href="https://nhanhoa.com/dich-vu/thiet-ke-website.html"
                                            title="">Thiết kế website Web4s</a></li>
                                    <li><a href="https://vfone.vn/" title="">Tổng đài điện thoại Vfone</a>
                                    </li>
                                    <li><a href="https://nhanhoa.com/email/gioi-thieu-dich-vu-email.html"
                                            title="">Dịch vụ Email</a></li>
                                    <li><a href="https://nhanhoa.com/ssl-bao-mat/gioi-thieu-ssl.html"
                                            title="">SSL &amp; Bảo mật</a></li>
                                    <li><a href="https://nhanhoa.com/tin-tuc/v-v-tiep-nhan-y-kien-dong-gop-cua-khach-hang-dich-vu-ten-mien-vn.html"
                                            title="">Góp ý dịch vụ tên miền .VN</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="item-menu-footer">
                                <div class="title-footer">
                                    Trợ giúp
                                </div>
                                <ul>
                                    <li>
                                        <a href="https://nhanhoa.com/trang/huong-dan-thanh-toan.html"
                                            title=""><span>Hướng dẫn thanh toán</span></a>
                                    </li>
                                    <li>
                                        <a href="https://nhanhoa.com/trang/quy-dinh-su-dung-ten-mien.html"
                                            title=""><span>Quy định sử dụng tên miền</span></a>
                                    </li>
                                    <li>
                                        <a href="https://nhanhoa.com/trang/quy-dinh-su-dung-dich-vu.html"
                                            title=""><span>Quy định sử dụng dịch vụ</span></a>
                                    </li>
                                    <li>
                                        <a href="https://nhanhoa.com/trang/quy-dinh-doi-tra-va-hoan-tra-tien.html"
                                            title=""><span>Quy định đổi trả và hoàn trả tiền</span></a>
                                    </li>
                                    <li>
                                        <a href="https://nhanhoa.com/trang/download-van-ban.html"
                                            title=""><span>Download văn bản</span></a>
                                    </li>
                                    <li>
                                        <a href="https://nhanhoa.com/trang/cau-hoi-thuong-gap-onepay.html"
                                            title=""><span>Câu hỏi thường gặp (Onepay)</span></a>
                                    </li>
                                    <li>
                                        <a href="https://nhanhoa.com/trang/chinh-sach-bao-mat-thong-tin.html"
                                            title=""><span>Chính sách bảo mật thông tin</span></a>
                                    </li>
                                    <li>
                                        <a href="https://nhanhoa.com/trang/legal-agreements.html"
                                            title=""><span>Legal Agreements</span></a>
                                    </li>
                                    <li>
                                        <a href="https://nhanhoa.com/trang/quy-trinh-giai-quyet-khieu-nai-khach-hang.html"
                                            title=""><span>Quy trình giải quyết khiếu nại khách
                                                hàng</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="item-menu-footer">
                                <div class="title-footer">
                                    Tin tức
                                </div>
                                <ul>
                                    <li>
                                        <a target="_blank" href="https://wiki.nhanhoa.com/">
                                            Tin công nghệ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://nhanhoa.com/tin-tuc/thong-bao_3.html">
                                            Tin nội bộ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://nhanhoa.com/khuyen-mai.html">
                                            Tin khuyến mãi
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-list-footer">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="item-menu-footer">
                                <div class="title-footer">
                                    Điều khoản
                                </div>
                                <ul>
                                    <li>
                                        <a href="/">
                                            Chính sách bảo mật
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/">
                                            Điều khoản dịch vụ
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="item-menu-footer">
                                <div class="title-footer">
                                    Đại lý
                                </div>
                                <ul>
                                    <li>
                                        <a href="/">
                                            Chính sách Đại lý
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/">
                                            Đăng ký Đại lý
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/">
                                            Hỏi đáp về Đại lý
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="item-menu-footer">
                                <div class="title-footer">
                                    Tải Về App
                                </div>
                                <ul>
                                    <li>
                                        <a href="/">
                                            Tải Về Android
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/">
                                            Tải Về IOS
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="item-menu-footer">
                                <div class="title-footer">
                                    Cộng Đồng
                                </div>
                                <ul class="list-img-fanpage">
                                    <li>
                                        <a href="https://www.facebook.com/nhanhoacom" target="_blank">
                                            <img src="https://esoc.vn/Assets/Images/footer/icon_facebook.png"
                                                alt="facebook">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/nhanhoagroup" target="_blank">
                                            <img src="https://esoc.vn/Assets/Images/footer/icon_twitter.png"
                                                alt="twitter">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCB_gZGsKMNdPCkDyu-mEsAQ"
                                            target="_blank">
                                            <img src="https://esoc.vn/Assets/Images/footer/icon_youtube.png"
                                                alt="Youtube">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/nhan-hoa-software-company"
                                            target="_blank">
                                            <img src="https://esoc.vn/Assets/Images/footer/icon_in.png"
                                                alt="In">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://zalo.me/220654257120240702" target="_blank">
                                            <img src="https://esoc.vn/Assets/Images/footer/icon_in.png"
                                                alt="zalo">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://t.me/nhanhoacom" target="_blank">
                                            <img src="https://esoc.vn/Assets/Images/footer/icon_telegram.png"
                                                alt="telegram">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/" target="_blank">
                                            <img src="https://esoc.vn/Assets/Images/footer/icon_skype.png"
                                                alt="skype">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/nhanhoa.official/" target="_blank">
                                            <img src="https://esoc.vn/Assets/Images/footer/icon_instagram.png"
                                                alt="instagram">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.tiktok.com/@nhanhoa_official" target="_blank">
                                            <img src="https://esoc.vn/Assets/Images/footer/icon_tiktok.png"
                                                alt="tiktok">
                                        </a>
                                    </li>
                                </ul>
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
                                    <a href="/">
                                        <img src="https://esoc.vn/Assets/Images/footer/logo.png" alt="Logo">
                                    </a>
                                </div>
                                <div class="info">
                                    <p>
                                        {{ $config->footer }}
                                    </p>
                                    <p>
                                        {{ $config->store_name }}. Đại diện: {{ $config->store_name }}
                                    </p>
                                    <p>
                                        {{ $config->giayphep }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-lg-5 col-md-5 col-12">
                            <div class="item-logo-bmtt float-right">
                                <div class="logo-bottom logo-ican">
                                    <a href="javascript:;">
                                        <img src="https://esoc.vn/Assets/Images/footer/ICANN-Primary-Logo.png"
                                            alt="">
                                    </a>
                                </div>
                                <div class="logo-bottom logo-vnnic">
                                    <a href="javascript:;">
                                        <img src="https://esoc.vn/Assets/Images/footer/vnnic_logo-01_0.png"
                                            alt="">
                                    </a>
                                </div>
                                <div class="logo-bottom logo-google">
                                    <a href="https://cloud.google.com/find-a-partner/partner/nhan-hoa-software-company-ltd?redirect="
                                        target="_blank">
                                        <img src="https://esoc.vn/Assets/Images/footer/Google_Cloud_logo.svg.png"
                                            alt="">
                                    </a>
                                </div>
                                <div class="logo-bottom logo-gov">
                                    <a href="http://online.gov.vn/Home/WebDetails/7714?AspxAutoDetectCookieSupport=1"
                                        target="_blank">
                                        <img src="https://esoc.vn/Assets/Images/footer/logoSaleNoti.png"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a b-sg71mgo1ai="" id="back-to-top" style="display: inline;">
        <i class="fas fa-chevron-circle-up" style="color: #74C0FC;"></i>
    </a>



    <script src="{{ asset('client/assets/js/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('client/assets/js/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('client/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('client/assets/js/bootstrap/bootstrap.min.js') }}"></script>


    @include('client.include.section-vfone')

    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
                $('header').addClass('shadow');
            } else {
                $('#back-to-top').fadeOut();
                $('header').removeClass('shadow');
            }
        });

        $("#back-to-top").on('click', function(event) {
            $('html, body').scrollTop(0);
        });

        $(".re-close-popup").on('click', function() {
            $(".popup-re-call").css('display', 'none');
        })
    </script>
</body>

</html>
