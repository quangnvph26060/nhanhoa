<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('client/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/carousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/solution-esoc.css') }}">
</head>

<body>
    <header class="navbar navbar-expand-md  navbar-light d-print-none sticky-top">
        <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-lg-2">
                <a href="/">
                    <img src="https://esoc.vn/Assets/images/Logo/esoc-svg-2.png" alt="Hợp đồng điện tử "
                        class="navbar-brand-image">
                </a>
            </h1>
            <div class="navbar-nav order-lg-last flex-row ">
                {{-- <a class="default-btn lineargradient-btn d-none btn-login-full" href="https://login.esoc.vn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        stroke-width="2" class="icon bi bi-box-arrow-in-right svg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z">
                        </path>
                        <path fill-rule="evenodd"
                            d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z">
                        </path>
                    </svg>
                    Đăng nhập
                </a> --}}
                <a class="default-btn lineargradient-btn btn-login" href="https://login.echungtu.com">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        stroke-width="2" class="icon bi bi-box-arrow-in-right svg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z">
                        </path>
                        <path fill-rule="evenodd"
                            d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z">
                        </path>
                    </svg>
                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-center" id="navbar-menu">
                <div class="d-flex flex-column flex-md-row align-items-stretch align-items-md-center ">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown" id="header_GiaoDich">
                            <a class="nav-link" href="/gioi-thieu-hop-dong-dien-tu">
                                <span class="nav-link-title">
                                    Giới thiệu
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tinh-nang-hop-dong-dien-tu" role="button">
                                <span class="nav-link-title">
                                    Tính năng
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/bang-gia-hop-dong-dien-tu" role="button">
                                <span class="nav-link-title">
                                    Bảng giá
                                </span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link active" href="/" role="button">
                                <span class="nav-link-title">
                                    Hợp tác
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tin-tuc" role="button">
                                <span class="nav-link-title">
                                    Tin tức
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/van-ban-hop-dong-dien-tu" role="button">
                                <span class="nav-link-title">
                                    Văn bản
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tra-cuu-hop-dong-dien-tu" role="button">
                                <span class="nav-link-title">
                                    Tra cứu
                                </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/dang-ky-nhan-tu-van" role="button">
                                <span class="nav-link-title">
                                    Liên hệ
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
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

    <script src="{{ asset('client/assets/js/jquery/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('client/assets/js/carousel/owl.carousel.js') }}"></script>

    <script src="{{ asset('client/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('client/assets/js/bootstrap/bootstrap.min.js') }}"></script>

    @include('client.include.section-vfone')

    <script>
        $('.about-playicon').on('click', function() {
            $('.video-play').removeClass('d-none');
            $('.video-play').attr('src', 'https://www.youtube.com/embed/z8e1scquaF0?autoplay=1');
        });

        const select = (el, all = false) => {
            el = el.trim()
            if (all) {
                return [...document.querySelectorAll(el)]
            } else {
                return document.querySelector(el)
            }
        }
        let heroCarouselIndicators = select("#hero-carousel-indicators")
        let heroCarouselItems = select('#heroCarousel .carousel-item', true)

        heroCarouselItems.forEach((item, index) => {
            (index === 0) ?
            heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index +
                "' class='active'></li>":
                heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" +
                index + "'></li>"
        });

        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav: true,
            navText: ["<", ">"]
        });

        $(".re-close-popup").on('click', function() {
            $(".popup-re-call").css('display', 'none');
        })
    </script>


</body>

</html>
