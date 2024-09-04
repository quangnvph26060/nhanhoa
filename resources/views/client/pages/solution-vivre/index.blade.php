<!DOCTYPE html>
<html lang="vi">

<head>

    <base href="https://vfone.vn/">
    <meta charset="UTF-8">
    <title>
        Tổng đài điện thoại ảo Voip Cloud VFone Nhân Hòa #1 Việt Nam </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="js/easy-responsive-tabs.css " />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,bold&subset=all" rel="stylesheet">

    <link rel='canonical' href='https://vfone.vn:443/' />
    <link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
    <link type="text/css" rel="stylesheet" href="css/animate.css" />
    <link href="css/style.css?v=1725414693" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css" />


    <style>
        @media(max-width: 414px) {
            #vfone_call {

                left: 0 !important;
                bottom: 40% !important;
                left: auto;

                width: auto;
                height: auto;
            }
        }

        .image-footer {
            width: 140px;
        }
    </style>
    <script src="{{asset('client/assets/js/jquery/jquery-3.6.0.min.js')}}"></script>
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <!-- Default Theme -->
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <!-- Include js plugin -->
    <script src="owl-carousel/owl.carousel.js"></script>
    <!-- Add mousewheel plugin (this is optional) -->
    <script src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css"
        media="screen" />
    <script src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css"
        media="screen" />
    <script src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox();
        });
    </script>
    <script src="js/jquery.datetimepicker.full.min.js"></script>
    <script src="js/easyResponsiveTabs.js"></script>
    <script>
        $().ready(function(e) {

            jQuery.datetimepicker.setLocale('vi');

            jQuery('.datetimepicker').datetimepicker({
                i18n: {
                    de: {
                        months: [
                            'Januar', 'Februar', 'März', 'April',
                            'Mai', 'Juni', 'Juli', 'August',
                            'September', 'Oktober', 'November', 'Dezember',
                        ],
                        dayOfWeek: [
                            "CN", "T2", "T3", "T4",
                            "T5", "T6", "T7",
                        ]
                    }
                },
                timepicker: false,
                format: 'd-m-Y'
            });
        });
    </script>


    <!-- JS for menu.php -->
    <script src="js/jquery.mmenu.min.all.js"></script>
    <script>
        $(function() {
            $('nav#menu').mmenu({
                extensions: ['effect-slide-menu', 'pageshadow'],
                searchfield: false,
                counters: true,
                navbar: {
                    title: 'Menu'
                },
                navbars: [{
                    position: 'top',
                    content: ['searchfield']
                }, {
                    position: 'top',
                    content: [
                        'prev',
                        'title',
                        'close'
                    ]
                }, {
                    position: 'bottom',
                    content: []
                }]
            });
        });
    </script>
    <script>
        $().ready(function(e) {
            setTimeout(function() {
                $('#menu').css({
                    'opacity': '1',
                    'height': 'auto'
                });
            }, 2000);
        });
    </script>
    <!-- End JS for menu.php -->
</head>

<body>
    <nav id="menu">
        <ul>
            <li><a href="" title="">Trang chủ</a></li>
            <li><a href="bang-gia.html">Bảng giá </a>
            </li>
            <li><a href="goi-tu-dong.html" title="">Gọi tự động</a>
            </li>
            <li><a href="dau-so.html" title="">Đầu số </a>
                <ul>
                    <li><a href="dau-so/so-co-dinh.html">Số cố định</a></li>
                    <li><a href="dau-so/so-1900-1800.html">Số 1900/ 1800</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)" title="">Brandname</a>
                <ul>
                    <li>
                        <a href="https://vfone.vn/sms-brandname.html">SMS Brandname</a>
                    </li>
                    <li>
                        <a href="https://vfone.vn/voice-brandname.html">Voice Brandname</a>
                    </li>


                </ul>
            </li>
            <li><a href="tich-hop/website" title="">Tích hợp</a>
                <ul>
                    <li><a href="tich-hop/website">WEBSITE</a></li>
                    <li><a href="tich-hop/crm">CRM</a></li>
                </ul>
            </li>
            <li><a href="nganh-nghe.html" title="">Ngành nghề</a>
            </li>
            <li>
                <a href="javascript:void(0)" title="">Meeting</a>
                <ul>
                    <li>
                        <a href="https://vfone.vn/zoom-meeting.html">Zoom Meeting</a>
                    </li>
                    <li>
                        <a href="https://vfone.vn/google-meet.html">Google Meeting</a>
                    </li>
                    <li>
                        <a target="_blank" href="https://meetnow.vn/">nMeeting</a>
                    </li>

                </ul>
            </li>
            <li><a href="thiet-bi.html" title="">Thiết bị</a>
            </li>
            <li><a href="tin-tuc.html" title="">Tin tức</a></li>
            <li><a href="https://support.vfone.vn/" title="">Hỗ trợ</a></li>
            <li><a href="lien-he.html" title="">Liên hệ</a></li>
        </ul>
    </nav> <!-- Global site tag (gtag.js) - Google Analytics -->

    <div id="header">
        <div class="main_header">
            <div style="clear:both"></div>
            <div class="padding0 container " style="max-width:1300px;">
                <a class="btn_m" href="#menu"><i class="fas fa-bars"></i></a>
                <script>
                    $().ready(function(e) {
                        $('.btn_search1').click(function() {
                            if ($('.block_search input').hasClass('active_input')) {
                                return true;
                            }
                            $('.block_search input').addClass('active_input');
                            $(this).removeClass('btn_search1');
                            $('.block_search').css('border-color', '#ccc')

                        })
                    });
                </script>
                <div class="padding0 col-md-2 col-sm-4 col-xsm-4 col-xs-12">
                    <div class="logo_home"> <a href="./"><img src="upload/hinhanh/logovfone2023-4209.png"
                                alt="logo" class="logo-top" /></a>
                    </div>
                    <div class="block_logo_m"> <a href="./"><img src="upload/hinhanh/logovfone2023-4926.png"
                                alt="logo" class="logo-top-m" /></a> </div>
                </div>
                <div class="col-md-10 col-sm-8 col-xsm-8 col-xs-12 padding0 main_uninit ">
                    <div class="menutop">
                        <ul class="listmenutop">
                            <li><a href="" title="">Trang chủ</a></li>
                            <li><a href="bang-gia.html">Bảng giá </a>
                            </li>
                            <li><a href="goi-tu-dong.html" title="">Gọi tự động</a>
                            </li>

                            <li><a href="dau-so/so-co-dinh.html" title="">Đầu số </a>
                                <ul>
                                    <li><a href="dau-so/so-co-dinh.html">Số cố định</a></li>
                                    <li><a href="dau-so/so-1900-1800.html">Số 1900/ 1800</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;" title="">Brandname</a>
                                <ul>
                                    <li><a href="https://vfone.vn/sms-brandname.html">SMS BRANDNAME</a></li>
                                    <li><a href="https://vfone.vn/voice-brandname.html">Voice BRANDNAME</a></li>

                                </ul>
                            </li>
                            <li><a href="tich-hop/website" title="">Tích hợp</a>
                                <ul>
                                    <li><a href="tich-hop/website">WEBSITE</a></li>
                                    <li><a href="tich-hop/crm">CRM</a></li>
                                </ul>
                            </li>
                            <li><a href="nganh-nghe.html" title="Ngành nghề">Ngành nghề</a>
                            </li>
                            <li><a href="javascript:;" title="">Meeting</a>
                                <ul>
                                    <li><a href="https://vfone.vn/zoom-meeting.html">ZOOM MEETING</a></li>
                                    <li><a href="https://vfone.vn/google-meet.html">GOOGLE MEETING</a></li>
                                    <li><a target="_blank" href="https://meetnow.vn/">nMEETING</a></li>
                                </ul>
                            </li>
                            <li><a href="thiet-bi.html" title="Thiết bị">Thiết bị</a>
                                <ul>
                                    <li><a href="thiet-bi/thiet-bi-hoi-nghi-truyen-hinh.html">THIẾT BỊ HỘI NGHỊ TRUYỀN
                                            HÌNH</a></li>
                                    <li><a href="thiet-bi/dien-thoai-ban-internet.html">ĐIỆN THOẠI BÀN INTERNET</a>
                                    </li>
                                    <li><a href="thiet-bi/tai-nghe-dien-thoai.html">TAI NGHE ĐIỆN THOẠI</a></li>
                                </ul>
                            </li>
                            <li><a href="tin-tuc.html" title="Video">Tin tức</a></li>
                            <li><a href="https://vfone.vn/lien-he.html" title="Hỗ trợ">Liên hệ</a></li>
                            <li class="hidden"><a target="_blank" style="color: #f36f2b;" href="khuyen-mai.html"
                                    title="Khuyến mãi">Khuyến mãi</a></li>
                        </ul>
                    </div>
                </div>
                <div style=" clear:both"></div>
            </div>
        </div>
        <script>
            $().ready(function(e) {
                $('.sub_menu').click(function() {
                    $(this).find('ul').slideDown();
                })
                $('.btn_list_menu').click(function() {
                    $('.menu_m').slideDown();
                })
            });
        </script>
        <script>
            $(function() {
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 90) {
                        $('.main_header').addClass('menu-fix');
                        $('.block_logo_m').addClass('menu-fix');
                    } else {
                        $('.main_header').removeClass('menu-fix');
                        $('.block_logo_m').removeClass('menu-fix');
                    }
                });
            });
        </script>
        <div style="clear:both"></div>
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>
        <div style=" clear:both"></div>
    </div>
    <div class="section ">
        <script src="css/jquery.bxslider.js"></script>
        <link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" />
        <a class="btn_m" href="#menu"><i class="fas fa-bars"></i></a>
        <div class="block-slider">
            <div class="blockrightSlider">
                <ul id="slider">
                    <li class="btn_show_popup"><a btn_show_popup="" href="https://vfone.vn/lien-he.html"
                            btn_text="Tư vấn miễn phí" title="">
                            <img data-caption="<h3  class='title_slider'></h3> <span class='content_slider'>  </span>"
                                src="upload/hinhanh/218997467512182.png" alt="" /></a></li>
                </ul>
            </div>

            <script>
                $('#slider').bxSlider({
                    mode: 'fade',
                    auto: true,
                    autoControls: true,
                    pause: 7000,
                    adaptiveHeight: true,
                    captions: true,
                    touchEnabled: false
                });
            </script>
        </div>
        <script>
            $(document).ready(function($) {
                $('li.li_listmenu').click(function(event) {
                    $('li.li_listmenu ul').slideUp();
                    $(this).find('ul').fadeIn('slow/400/fast', function() {});
                });

            });

            $(document).on("click", ".btn_show_popup", function() {
                $("#msg-item-1").trigger("click");
            });
        </script>
        <div class="clear"></div>
        <div class="contentpage" style="background: #fff;">
            <div class="container-fluid home_video_container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="homepage_video wow fadeInUp" data-wow-delay="0.1s">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/JW9w-cdGgMo"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container padding0">

                <h3 class="titlePage wow fadeInUp" data-wow-delay="0.2s">
                    <span>VFONE MANG ĐẾN LỢI ÍCH GÌ CHO BẠN?</span>

                </h3>

                <ul class="listoptionservice">
                    <li class=" wow fadeInUp" data-wow-delay="0.2s">

                        <div class="blockItemservice">
                            <img alt="Tiết kiệm chi phí"
                                src="thumb/80x80/1/upload/baiviet/tietkiemchiphi9751-41891679392246.png"
                                class="logohover">
                            <img alt="Tiết kiệm chi phí"
                                src="thumb/80x80/1/upload/baiviet/tietkiemchiphi9751-4189.png">
                            <span>Tiết kiệm chi phí</span>
                            <div class="listoption">
                                <ul>
                                    <li>Không tốn phí đầu tư hệ thống</li>
                                    <li>Không cần điện thoại bàn</li>
                                    <li>Tiết kiệm chi phí hàng tháng</li>
                                </ul>
                            </div>


                        </div>
                    </li>

                    <li class=" wow fadeInUp" data-wow-delay="0.4s">

                        <div class="blockItemservice">
                            <img alt="Dễ dàng sử dụng"
                                src="thumb/80x80/1/upload/baiviet/dedangsudung921-68241679392236.png"
                                class="logohover">
                            <img alt="Dễ dàng sử dụng" src="thumb/80x80/1/upload/baiviet/dedangsudung921-6824.png">
                            <span>Dễ dàng sử dụng</span>
                            <div class="listoption">
                                <ul>
                                    <li>Kích hoạt nhanh chóng</li>
                                    <li>Quản lý đơn giản</li>
                                    <li>Trang quản trị tiếng Việt</li>
                                </ul>
                            </div>


                        </div>
                    </li>

                    <li class=" wow fadeInUp" data-wow-delay="0.6s">

                        <div class="blockItemservice">
                            <img alt="Tính năng hữu ích"
                                src="thumb/80x80/1/upload/baiviet/tinhnanghuuich3335-76311679392227.png"
                                class="logohover">
                            <img alt="Tính năng hữu ích"
                                src="thumb/80x80/1/upload/baiviet/tinhnanghuuich3335-7631.png">
                            <span>Tính năng hữu ích</span>
                            <div class="listoption">
                                <ul>
                                    <li>Gọi trực tiếp từ Website</li>
                                    <li>Giám sát tất cả máy nhánh</li>
                                    <li>Tự động gọi Telesales/ CSKH</li>
                                </ul>
                            </div>


                        </div>
                    </li>

                    <li class=" wow fadeInUp" data-wow-delay="0.8s">

                        <div class="blockItemservice">
                            <img alt="Mở rộng không giới hạn"
                                src="thumb/80x80/1/upload/baiviet/morong9566-25621679392216.png" class="logohover">
                            <img alt="Mở rộng không giới hạn" src="thumb/80x80/1/upload/baiviet/morong9566-2562.png">
                            <span>Mở rộng không giới hạn</span>
                            <div class="listoption">
                                <ul>
                                    <li>Phù hợp tất cả doanh nghiệp</li>
                                    <li>Mở rộng/ di chuyển không giới hạn</li>
                                    <li>Bảo mật cao, toàn quyền quản lý </li>
                                </ul>
                            </div>


                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <!-- Move bảng giá -->
        <div class="blockFulldichvutongdai">
            <div class="container padding0">
                <div class="titlePage wow fadeInUp" data-wow-delay="0.2s">
                    <span>Bảng giá dịch vụ tổng đài VFONE</span>
                </div>

                <div class="timepay wow fadeInUp " data-wow-delay="0.2s">
                    <div class="col-md-3 col-sm-12 col-xsm-12 col-xs-12  padding0">

                        <span class="nameViewYearpay">Thời gian thanh toán</span>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xsm-12 col-xs-12 padding0">
                        <ul class="listYear">
                            <li data-index="3" class="activeyear"> <b></b><span>3 Năm</span></li>
                            <li data-index="2"> <b></b><span>2 Năm</span></li>
                            <li data-index="1"><b></b><span>1 Năm</span></li>
                        </ul>
                    </div>

                </div>

                <div class="contentPagelistPrice linefixrow">
                    <div>
                        <div class="item col-md-3 col-sm-6 col-xsm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blockConentPricey ">
                                <h3 class="nameB">BASIC</h3>
                                <ul class="optionPrice">
                                    <li class=" liprice  priceOldY1"><strong></strong></li>
                                    <li class=" liprice  priceOldY2"><strong></strong></li>
                                    <li class=" liprice activeprice priceOldY3"><strong></strong></li>
                                    <li class=" liprice   price1y1"><b>350,000<span> đ/ tháng</span> </b></li>
                                    <li class=" liprice   price1y2"><b>350,000<span> đ/ tháng</span> </b></li>
                                    <li class=" liprice  activeprice price1y3"><b>350,000<span> đ/ tháng</span> </b>
                                    </li>
                                </ul>
                                <a href="#dangkygoidichvu" class="fancybox btnViewopop" title="">
                                    <div data-textid="BASIC" class="btnLinereegister">
                                        <span><b>Đăng ký ngay</b></span>
                                    </div>
                                </a>
                                <div class="cotentOptionserviceY">
                                    <ul>
                                        <li>Phí khởi tạo: <span style="color:#eb4762;"><strong>500.000đ</strong></span>
                                        </li>
                                        <li><strong style="color: rgb(235, 71, 98);">10</strong> máy nhánh</li>
                                        <li>Không giới hạn cuộc gọi đồng thời</li>
                                        <li>Kết nối 2 đầu số </li>
                                        <li><strong style="color: rgb(235, 71, 98);">10GB</strong> dung lượng ghi âm
                                        </li>
                                        <li>Ứng dụng trên iOS/ Android</li>
                                        <li>Thống kê lịch sử cuộc gọi</li>
                                        <li>Trang quản trị chuyên nghiệp</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 col-xsm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="blockConentPricey  activeContent">
                                <h3 class="nameB">PRO</h3>
                                <ul class="optionPrice">
                                    <li class=" liprice  priceOldY1"><strong></strong></li>
                                    <li class=" liprice  priceOldY2"><strong></strong></li>
                                    <li class=" liprice activeprice priceOldY3"><strong></strong></li>
                                    <li class=" liprice   price1y1"><b>500,000<span> đ/ tháng</span> </b></li>
                                    <li class=" liprice   price1y2"><b>500,000<span> đ/ tháng</span> </b></li>
                                    <li class=" liprice  activeprice price1y3"><b>500,000<span> đ/ tháng</span> </b>
                                    </li>
                                </ul>
                                <a href="#dangkygoidichvu" class="fancybox " title="">
                                    <div data-textid="PRO" class="btnLinereegister">
                                        <span><b>Đăng ký ngay</b></span>
                                    </div>
                                </a>
                                <div class="cotentOptionserviceY">
                                    <ul>
                                        <li>Phí khởi tạo: <strong>500.000đ</strong></li>
                                        <li><strong>25</strong> máy nhánh</li>
                                        <li>Không giới hạn cuộc gọi đồng thời</li>
                                        <li>Không giới hạn kết nối đầu số</li>
                                        <li><strong>20GB</strong> dung lượng ghi âm</li>
                                        <li>Ứng dụng trên iOS/ Android</li>
                                        <li>Thống kê lịch sử cuộc gọi</li>
                                        <li>Trang quản trị chuyên nghiệp</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 col-xsm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="blockConentPricey ">
                                <h3 class="nameB">VIP</h3>
                                <ul class="optionPrice">
                                    <li class=" liprice  priceOldY1"><strong></strong></li>
                                    <li class=" liprice  priceOldY2"><strong></strong></li>
                                    <li class=" liprice activeprice priceOldY3"><strong></strong></li>
                                    <li class=" liprice   price1y1"><b>650,000<span> đ/ tháng</span> </b></li>
                                    <li class=" liprice   price1y2"><b>650,000<span> đ/ tháng</span> </b></li>
                                    <li class=" liprice  activeprice price1y3"><b>650,000<span> đ/ tháng</span> </b>
                                    </li>
                                </ul>
                                <a href="#dangkygoidichvu" class="fancybox " title="">
                                    <div data-textid="VIP" class="btnLinereegister">
                                        <span><b>Đăng ký ngay</b></span>
                                    </div>
                                </a>
                                <div class="cotentOptionserviceY">
                                    <ul>
                                        <li>Phí khởi tạo: <span style="color:#eb4762;"><strong>500.000đ</strong></span>
                                        </li>
                                        <li><span style="color:#eb4762;"><strong>50</strong></span> máy nhánh</li>
                                        <li>Không giới hạn cuộc gọi đồng thời</li>
                                        <li>Không giới hạn kết nối đầu số</li>
                                        <li><span style="color:#eb4762;"><strong>30GB</strong></span> dung lượng ghi âm
                                        </li>
                                        <li>Ứng dụng trên iOS/ Android</li>
                                        <li>Thống kê lịch sử cuộc gọi</li>
                                        <li>Trang quản trị chuyên nghiệp</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 col-xsm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.8s">
                            <div class="blockConentPricey ">
                                <h3 class="nameB">ENTERPRISE</h3>
                                <ul class="optionPrice">
                                    <li class=" liprice  priceOldY1"><strong></strong></li>
                                    <li class=" liprice  priceOldY2"><strong></strong></li>
                                    <li class=" liprice activeprice priceOldY3"><strong></strong></li>
                                    <li class=" liprice   price1y1"><b>Liên hệ </b></li>
                                    <li class=" liprice   price1y2"><b>Liên hệ </b></li>
                                    <li class=" liprice  activeprice price1y3"><b>Liên hệ </b></li>
                                </ul>
                                <a href="#dangkygoidichvu" class="fancybox " title="">
                                    <div data-textid="ENTERPRISE" class="btnLinereegister">
                                        <span><b>Đăng ký ngay</b></span>
                                    </div>
                                </a>
                                <div class="cotentOptionserviceY">
                                    <ul>
                                        <li>Phí khởi tạo: <span style="color:#eb4762;"><strong>500.000đ</strong></span>
                                        </li>
                                        <li><span style="color:#eb4762;"><strong>>50</strong></span> máy nhánh</li>
                                        <li>Không giới hạn cuộc gọi đồng thời</li>
                                        <li>Không giới hạn kết nối đầu số</li>
                                        <li><span style="color:#eb4762;"><strong>>30GB</strong></span> dung lượng ghi
                                            âm</li>
                                        <li>Ứng dụng trên iOS/ Android</li>
                                        <li>Thống kê lịch sử cuộc gọi</li>
                                        <li>Trang quản trị chuyên nghiệp</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="clear"></div>
                    <div class="section_cta text-center">
                        <a href="https://vfone.vn/bang-gia.html" class="btn_cta_price">Xem bảng giá chi tiết</a>
                    </div>

                </div>
                <script>
                    $().ready(function() {
                        $('.listYear li').click(function() {
                            indexY = $(this).attr('data-index');
                            $('.listYear li').removeClass('activeyear')
                            $(this).addClass('activeyear');
                            $('.liprice').removeClass('activeprice');
                            $('.price1y' + indexY).addClass('activeprice');

                            $('.priceOldY' + indexY).addClass('activeprice');

                        });

                    })
                </script>

                <div id="dangkygoidichvu" style="display:none;">
                    <h3>Thông tin đăng ký</h3>
                    <form action="thong-bao.html" method="post" accept-charset="utf-8">
                        <ul class="listinforegiste">
                            <li>

                                <select name="goidichvu" required="required" class="goidichvu sldichvu">
                                    <option value="0" disabled="disabled" selected="selected">Chọn gói dịch vụ
                                        vfone(*)</option>
                                    <option data-id="337" value="BASIC">BASIC</option>
                                    <option data-id="350" value="PRO">PRO</option>
                                    <option data-id="351" value="VIP">VIP</option>
                                    <option data-id="352" value="ENTERPRISE">ENTERPRISE</option>


                                </select>
                            </li>
                            <li>

                                <select name="giagoidichvu" required="required" class="giagoidichvu">
                                    <option value="0" disabled="disabled" selected="selected">Chọn thời gian
                                        thanh toán (*)</option>

                                </select>
                            </li>
                            <li>
                                <select name="autocall" class="autocall">
                                    <option value="0" disabled="disabled" selected="selected">Chọn gói dịch vụ
                                        gọi tự động (Telesale)</option>
                                    <option value="V1">Gói V1: 10.000 cuộc/ tháng - 319.000đ</option>
                                    <option value="V2">Gói V2: 20.000 cuộc/ tháng - 590.000đ</option>
                                    <option value="V3">Gói V3: 40.000 cuộc/ tháng - 1.090.000đ</option>
                                    <option value="V4">Gói V4: 60.000 cuộc/ tháng - 1.590.000đ</option>
                                    <option value="V5">Gói V5: 100.000 cuộc/ tháng - 2.690.000đ</option>
                                    <option value="V6">Gói V6: 150.000 cuộc/ tháng - 3.900.000đ</option>
                                </select>
                            </li>
                            <li>
                                <input type="text" required="required" name="hoten" placeholder="Họ tên">
                            </li>
                            <li>
                                <input type="text" required="required" name="email" placeholder="Email">
                            </li>
                            <li>
                                <input type="text" required="required" name="dienthoai"
                                    placeholder="Số điện thoại">
                            </li>
                            <li>
                                <select name="khuvuc">
                                    <option value="HN">Khu vực phía Bắc</option>
                                    <option value="HCM">Khu vực phía Nam</option>
                                </select>
                            </li>
                            <li>
                                <input type="text" name="noidung" placeholder="Ghi chú">
                            </li>
                            <li>
                                <strong class="titleVande">Vấn đề mà bạn đang quan tâm</strong>
                                <ul class="listvande">
                                    <li><input id="input425" type="checkbox" name="vande"
                                            value="Giám sát hoạt động của máy nhánh theo thời gian thực"> <label
                                            for="input425">Giám sát hoạt động của máy nhánh theo thời gian thực</label>
                                    </li>
                                    <li><input id="input424" type="checkbox" name="vande"
                                            value="Gọi miễn phí ngay trên Website"> <label for="input424">Gọi miễn phí
                                            ngay trên Website</label>
                                    </li>
                                    <li><input id="input532" type="checkbox" name="vande"
                                            value="Kết nối không giới hạn đầu số cố định, 1900/ 1800"> <label
                                            for="input532">Kết nối không giới hạn đầu số cố định, 1900/ 1800</label>
                                    </li>
                                    <li><input id="input533" type="checkbox" name="vande"
                                            value="Gọi tự động thông báo, CSKH/ Telesale"> <label for="input533">Gọi
                                            tự động thông báo, CSKH/ Telesale</label>
                                    </li>
                                    <li><input id="input534" type="checkbox" name="vande"
                                            value="Một số máy nhánh sử dụng đồng thời trên 2 thiết bị"> <label
                                            for="input534">Một số máy nhánh sử dụng đồng thời trên 2 thiết bị</label>
                                    </li>
                                    <li><input id="input535" type="checkbox" name="vande"
                                            value="Gọi vào/ ra trực tiếp từ trình duyệt Web"> <label
                                            for="input535">Gọi vào/ ra trực tiếp từ trình duyệt Web</label>
                                    </li>
                                    <li><input id="input536" type="checkbox" name="vande" value="Ứng dụng "VFone"
                                            trên iOS/ Android"> <label for="input536">Ứng dụng "VFone" trên iOS/
                                            Android</label>
                                    </li>
                                    <li><input id="input537" type="checkbox" name="vande"
                                            value="Cài đặt máy nhánh đơn giản với mã QR Code"> <label
                                            for="input537">Cài đặt máy nhánh đơn giản với mã QR Code</label>
                                    </li>
                                    <li><input id="input538" type="checkbox" name="vande"
                                            value="Những vấn đề khác (trao đổi trong quá trình tư vấn)"> <label
                                            for="input538">Những vấn đề khác (trao đổi trong quá trình tư vấn)</label>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="g-recaptcha" data-sitekey="6LcrovUhAAAAAPcyBQpZvDIwqgYIsZtQJn-8_2jd">
                                </div>
                            </li>
                            <li class="linebtnr"><input type="hidden" name="trff"
                                    value="VFONE_nhanhoa.com"><button><span>Đăng ký</span></button></li>

                        </ul>
                    </form>
                </div>

                <!-- Move bảng giá -->
                <!-- Banner KM -->
                <div class="clear"></div>
                <div class="banner_middle hidden">
                    <a href="https://vfone.vn/tin-tuc/khuyen-mai-cuc-soc-gia-tri-len-den-10-ty-dong-tron-bo-giai-phap-so-hoa-doanh-nghiep-cua-nhan-hoa"
                        class="banner_middle_url">
                        <img src="images/banner-chuyen-doi-so-02-2023.jpg" alt="Khuyến mãi vfone">
                    </a>
                </div>
                <!-- Banner KM -->
                <div class="blockpricHome">
                    <div class="container padding0">
                        <h3 class="titlePage wow fadeInUp" data-wow-delay="0.2s">
                            <span>TÍNH NĂNG NỔI BẬT CỦA TỔNG ĐÀI VFONE</span>

                        </h3>


                        <div class="clear"></div>
                        <div class="conentenPri wow fadeInUp" data-wow-delay="0.2s">

                            <ul class="listPrce  ">

                                <li>
                                    <div class="priLi wow fadeInUp" data-wow-delay="0.3s">

                                        <a href="javascript:void(0)">
                                            <img alt="Gọi trực tiếp  từ trình duyệt Web" class="imghv"
                                                src="upload/hinhanh/0388461455723851679390701.png">
                                            <img alt="Gọi trực tiếp  từ trình duyệt Web"
                                                src="upload/hinhanh/038846145572385.png"> <span>Gọi trực tiếp từ trình
                                                duyệt Web</span> </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="priLi wow fadeInUp" data-wow-delay="0.6s">

                                        <a href="javascript:void(0)">
                                            <img alt="Mở rộng máy nhánh  không giới hạn" class="imghv"
                                                src="upload/hinhanh/5046411621669511679390713.png">
                                            <img alt="Mở rộng máy nhánh  không giới hạn"
                                                src="upload/hinhanh/504641162166951.png"> <span>Mở rộng máy nhánh không
                                                giới hạn</span> </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="priLi wow fadeInUp" data-wow-delay="0.9s">

                                        <a href="javascript:void(0)">
                                            <img alt="Giám sát máy nhánh theo thời gian thực" class="imghv"
                                                src="upload/hinhanh/9410053628336901679391069.png">
                                            <img alt="Giám sát máy nhánh theo thời gian thực"
                                                src="upload/hinhanh/941005362833690.png"> <span>Giám sát máy nhánh theo
                                                thời gian thực</span> </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="priLi wow fadeInUp" data-wow-delay="0.12s">

                                        <a href="javascript:void(0)">
                                            <img alt="Ứng dụng di động  trên iOS/ Android" class="imghv"
                                                src="upload/hinhanh/2575912010061071679391080.png">
                                            <img alt="Ứng dụng di động  trên iOS/ Android"
                                                src="upload/hinhanh/257591201006107.png"> <span>Ứng dụng di động trên
                                                iOS/ Android</span> </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="priLi wow fadeInUp" data-wow-delay="0.15s">

                                        <a href="javascript:void(0)">
                                            <img alt="Kết nối  không giới hạn đầu số" class="imghv"
                                                src="upload/hinhanh/3054841725973461679391090.png">
                                            <img alt="Kết nối  không giới hạn đầu số"
                                                src="upload/hinhanh/305484172597346.png"> <span>Kết nối không giới hạn
                                                đầu số</span> </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="priLi wow fadeInUp" data-wow-delay="0.18s">

                                        <a href="javascript:void(0)">
                                            <img alt="Chặn cuộc gọi vào/ra theo ý muốn" class="imghv"
                                                src="upload/hinhanh/2879522568864251679391102.png">
                                            <img alt="Chặn cuộc gọi vào/ra theo ý muốn"
                                                src="upload/hinhanh/287952256886425.png"> <span>Chặn cuộc gọi vào/ra
                                                theo ý muốn</span> </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="priLi wow fadeInUp" data-wow-delay="0.21s">

                                        <a href="javascript:void(0)">
                                            <img alt="Gọi tự động  CSKH/ bán hàng" class="imghv"
                                                src="upload/hinhanh/9376743310608561679391112.png">
                                            <img alt="Gọi tự động  CSKH/ bán hàng"
                                                src="upload/hinhanh/937674331060856.png"> <span>Gọi tự động CSKH/ bán
                                                hàng</span> </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="priLi wow fadeInUp" data-wow-delay="0.24s">

                                        <a href="javascript:void(0)">
                                            <img alt="Không giới hạn  cuộc gọi đồng thời" class="imghv"
                                                src="upload/hinhanh/4230272375302981679391123.png">
                                            <img alt="Không giới hạn  cuộc gọi đồng thời"
                                                src="upload/hinhanh/423027237530298.png"> <span>Không giới hạn cuộc gọi
                                                đồng thời</span> </a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="listPrce1 wow fadeInUp" data-wow-delay="0.24s">

                                <li>
                                    <div class=" "><a href="javascript:void(0)"><img
                                                alt="Gọi trực tiếp  từ trình duyệt Web"
                                                src="upload/hinhanh/038846145572385.png"> <span>Gọi trực tiếp từ trình
                                                duyệt Web</span> </a></div>
                                </li>
                                <li>
                                    <div class=" "><a href="javascript:void(0)"><img
                                                alt="Mở rộng máy nhánh  không giới hạn"
                                                src="upload/hinhanh/504641162166951.png"> <span>Mở rộng máy nhánh không
                                                giới hạn</span> </a></div>
                                </li>
                                <li>
                                    <div class=" "><a href="javascript:void(0)"><img
                                                alt="Giám sát máy nhánh theo thời gian thực"
                                                src="upload/hinhanh/941005362833690.png"> <span>Giám sát máy nhánh theo
                                                thời gian thực</span> </a></div>
                                </li>
                                <li>
                                    <div class=" "><a href="javascript:void(0)"><img
                                                alt="Ứng dụng di động  trên iOS/ Android"
                                                src="upload/hinhanh/257591201006107.png"> <span>Ứng dụng di động trên
                                                iOS/ Android</span> </a></div>
                                </li>
                                <li>
                                    <div class=" "><a href="javascript:void(0)"><img
                                                alt="Kết nối  không giới hạn đầu số"
                                                src="upload/hinhanh/305484172597346.png"> <span>Kết nối không giới hạn
                                                đầu số</span> </a></div>
                                </li>
                                <li>
                                    <div class=" "><a href="javascript:void(0)"><img
                                                alt="Chặn cuộc gọi vào/ra theo ý muốn"
                                                src="upload/hinhanh/287952256886425.png"> <span>Chặn cuộc gọi vào/ra
                                                theo ý muốn</span> </a></div>
                                </li>
                                <li>
                                    <div class=" "><a href="javascript:void(0)"><img
                                                alt="Gọi tự động  CSKH/ bán hàng"
                                                src="upload/hinhanh/937674331060856.png"> <span>Gọi tự động CSKH/ bán
                                                hàng</span> </a></div>
                                </li>
                                <li>
                                    <div class=" "><a href="javascript:void(0)"><img
                                                alt="Không giới hạn  cuộc gọi đồng thời"
                                                src="upload/hinhanh/423027237530298.png"> <span>Không giới hạn cuộc gọi
                                                đồng thời</span> </a></div>
                                </li>

                            </ul>

                        </div>



                    </div>
                </div>

                <script></script>
                <div style="clear:both" class="rr"></div>
            </div>
            <div class="blockdoitacfull">
                <div class="container padding0">

                    <span class="title_doitac wow fadeInUp" data-wow-delay="0.2s">
                        ĐỐI TÁC CỦA VFONE</span>

                    <div class="row10">
                        <div id="owl-demo-doitac" class="owl-carousel owl-theme">
                            <div class="item wow fadeInUp" data-wow-delay="0.2s">
                                <a href="#" target="_blank"><img alt="VTC"
                                        src="thumb/145x80/2/upload/hinhanh/2290112671000510.png"
                                        class="icon-home"></a>
                            </div>
                            <div class="item wow fadeInUp" data-wow-delay="0.4s">
                                <a href="javasctript:void(0)"><img alt="VNPT"
                                        src="thumb/145x80/2/upload/hinhanh/3838980828945100.png"
                                        class="icon-home"></a>
                            </div>
                            <div class="item wow fadeInUp" data-wow-delay="0.6s">
                                <a href="javasctript:void(0)"><img alt="Viettel"
                                        src="thumb/145x80/2/upload/hinhanh/4837561742001570.png"
                                        class="icon-home"></a>
                            </div>
                            <div class="item wow fadeInUp" data-wow-delay="0.8s">
                                <a href="https://getfly.vn/" target="_blank"><img alt="getfly"
                                        src="thumb/145x80/2/upload/hinhanh/1323751415839850.png"
                                        class="icon-home"></a>
                            </div>
                            <div class="item wow fadeInUp" data-wow-delay="0.10s">
                                <a href="javasctript:void(0)"><img alt="Vietnammobile"
                                        src="thumb/145x80/2/upload/hinhanh/0145587157336190.png"
                                        class="icon-home"></a>
                            </div>
                            <div class="item wow fadeInUp" data-wow-delay="0.12s">
                                <a href="javasctript:void(0)"><img alt="ITEL"
                                        src="thumb/145x80/2/upload/hinhanh/630133282604231.png" class="icon-home"></a>
                            </div>
                            <div class="item wow fadeInUp" data-wow-delay="0.14s">
                                <a href="javasctript:void(0)"><img alt="VNPT"
                                        src="thumb/145x80/2/upload/hinhanh/4729821178149400.png"
                                        class="icon-home"></a>
                            </div>
                            <div class="item wow fadeInUp" data-wow-delay="0.16s">
                                <a href="javasctript:void(0)"><img alt="SPT"
                                        src="thumb/145x80/2/upload/hinhanh/8440778388039930.png"
                                        class="icon-home"></a>
                            </div>
                            <div class="item wow fadeInUp" data-wow-delay="0.18s">
                                <a href="javasctript:void(0)"><img alt="Vinaphone"
                                        src="thumb/145x80/2/upload/hinhanh/9110466065154030.png"
                                        class="icon-home"></a>
                            </div>
                            <div class="item wow fadeInUp" data-wow-delay="0.20s">
                                <a href="javasctript:void(0)"><img alt="VTC"
                                        src="thumb/145x80/2/upload/hinhanh/1916246464951770.png"
                                        class="icon-home"></a>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
            <script>
                $(document).ready(function() {
                    var owl = $("#owl-demo-doitac");
                    owl.owlCarousel({
                        itemsCustom: [
                            [0, 2],
                            [450, 3],
                            [600, 4],
                            [700, 4],
                            [1000, 6],
                            [1200, 6],
                            [1400, 6],
                            [1600, 6]
                        ],
                        navigation: true,
                        autoPlay: 3000,
                        pagination: false
                    });
                });
            </script>

            <div class="blockykienkhachhang">
                <div class="container padding0">
                    <h3 class="titlePage wow fadeInUp" data-wow-delay="0.2s">
                        <span>CẢM NHẬN CỦA KHÁCH HÀNG</span>

                    </h3>
                    <div class="clear"></div>
                    <div id="khachhangnoi" class="owl-carousel owl-theme">
                        <div class="item wow fadeInUp" data-wow-delay="0.3s">
                            <div class="blockKhachhangnoi">
                                <div class="mainsaycustomer">
                                    <img class="logoavatar"
                                        src="thumb/86x86/1/upload/baiviet/1122891214453630724432714900474544346335579n-721.png"
                                        alt="">

                                    <strong>Nguyen Hai Son</strong>
                                    <b class="chucvu">Director</b>
                                    <span>"Giao diện quản lý dễ dàng điều khiển, thiết bị gọn nhẹ dễ lắp ráp, dễ sử
                                        dụng. Hỗ trợ kỹ thuật nhanh chóng , nhiệt tình và hiệu quả"</span>

                                </div>


                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="blockKhachhangnoi">
                                <div class="mainsaycustomer">
                                    <img class="logoavatar" src="thumb/86x86/1/upload/baiviet/termissnal04-9414.png"
                                        alt="">

                                    <strong>Truong Yen Nhi</strong>
                                    <b class="chucvu">Founder</b>
                                    <span>"Quá tiện lợi! Chỉ cần 1 click trên website là khách hàng có thể gọi trực tiếp
                                        đến cửa hàng của mình, và quan trọng là hoàn toàn miễn phí"</span>

                                </div>


                            </div>
                        </div>

                        <div class="item wow fadeInUp" data-wow-delay="0.9s">
                            <div class="blockKhachhangnoi">
                                <div class="mainsaycustomer">
                                    <img class="logoavatar" src="thumb/86x86/1/upload/baiviet/img3730-4026.JPG"
                                        alt="">

                                    <strong>Tran Ngoc Binh</strong>
                                    <b class="chucvu">CEO & Founder</b>
                                    <span>"Từ khi sử dụng VFone, tôi có thể thống kê và quản lý đội ngũ của mình ở bất
                                        kể nơi đâu, không cần ngồi tại văn phòng như trước."</span>

                                </div>


                            </div>
                        </div>


                    </div>

                    <script>
                        $(document).ready(function() {
                            var owl = $("#khachhangnoi");
                            owl.owlCarousel({
                                itemsCustom: [
                                    [0, 1],
                                    [450, 1],
                                    [600, 2],
                                    [700, 2],
                                    [1000, 3],
                                    [1200, 3],
                                    [1400, 3],
                                    [1600, 3]
                                ],
                                navigation: true,
                                autoPlay: 3000,
                                pagination: false
                            });
                        });
                    </script>
                </div>
            </div>

            <div class="blockKhoitaotongdai">

                <div class="container padding0">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="titlcreate wow fadeInUp" data-wow-delay="0.2s">

                                <span>KHỞI TẠO TỔNG ĐÀI <br>
                                    CHO DOANH NGHIỆP NGAY BÂY GIỜ </span>
                            </div>

                            <div class="solocreate wow fadeInUp" data-wow-delay="0.2s"> <span>Tổng đài VFone giúp
                                    doanh nghiệp tiết kiệm 50% tiền điện thoại hàng tháng
                                    so với tổng đài bạn đang dùng.</span></div>
                            <div class="blockHotlineCreate wow fadeInUp" data-wow-delay="0.2s">
                                <p>Hotline</p> <strong>1900 6680</strong>
                            </div>
                        </div>
                        <div class="col-md-6 lineDesctripCreate wow fadeInUp" data-wow-delay="0.2s">
                            <form action="thong-bao.html" method="post" accept-charset="utf-8">
                                <ul class="listCreate">
                                    <li><input type="text" required="required" name="hoten"
                                            placeholder="Họ tên"></li>
                                    <li><input type="email" required="required" name="email"
                                            placeholder="Email"></li>
                                    <li><input type="text" required="required" name="dienthoai"
                                            placeholder="Số điện thoại"></li>
                                    <li>
                                        <select name="khuvuc">
                                            <option value="HN">Khu vực phía Bắc</option>
                                            <option value="HCM">Khu vực phía Nam</option>
                                        </select>
                                    </li>
                                    <li> <select name="soluongnhanvien">
                                            <option value="">Số lượng nhân viên</option>

                                            <option value="0-5">0-5</option>
                                            <option value="5-10">5-10</option>
                                            <option value="10-20">10-20</option>
                                            <option value="20-50">20-50</option>
                                            <option value="50-100">50-100</option>


                                        </select></li>


                                    <li><input type="text" name="noidung" placeholder="Ghi chú"></li>
                                    <li>
                                        <div class="g-recaptcha"
                                            data-sitekey="6LcrovUhAAAAAPcyBQpZvDIwqgYIsZtQJn-8_2jd"></div>
                                    </li>
                                    <li> <input type="hidden" name="trff" value="VFONE_nhanhoa.com"><button
                                            class="btn_block_bottom"><img
                                                src="https://vfone.vn/images/iconpointer.png"><span>Tư vấn cho
                                                tôi</span></button></li>

                                </ul>
                            </form>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="blockcauhoithuonggap">
                <div class="container padding0">
                    <h3 class="titlePage wow fadeInUp" data-wow-delay="0.2s">
                        <span>CÓ THỂ BẠN CẦN BIẾT</span>

                    </h3>


                    <div class="row">
                        <div class="col-md-6">
                            <ul class="listfaq">


                                <li class="activeRow  wow fadeInUp" data-wow-delay="0.2s"> <strong> <i
                                            class=" fa fa-angle-down" aria-hidden="true"></i> Hỏi: Tổng đài VFone là
                                        gì?</strong>
                                    <span>VFone là tổng đài điện thoại ứng dụng công nghệ VoIP trên nền tảng Internet
                                        giúp doanh nghiệp có thể triển khai nhanh chóng, không phải đầu tư cơ sở hạ
                                        tầng, tiết kiệm đến hơn 50% chi phí hàng tháng so với tổng đài truyền thống
                                    </span>
                                </li>


                                <li class="  wow fadeInUp" data-wow-delay="0.4s"> <strong> <i
                                            class=" fa fa-angle-right" aria-hidden="true"></i> Hỏi: Đầu số 1900/1800
                                        là gì?</strong>
                                    <span>1800 là đầu số miễn cước người gọi. Mức cước của đầu số 1800 là cố định và
                                        không đổi và được Bộ thông tin và truyền thông quy định. Trung tâm CSKH và hỗ
                                        trợ miễn phí khách hàng thường sử dụng tổng đài 1800 để khuyến khích người gọi
                                        vào.

                                        1900 là đầu số tính cước người gọi, khi khách hàng gọi vào tổng đài thì khách
                                        hàng sẽ là người chịu phí cước. Được ứng dụng hiệu quả tại các phòng chăm sóc
                                        khách hàng, chuỗi cửa hàng, giao hàng nhanh, phòng vé.</span>
                                </li>


                                <li class="  wow fadeInUp" data-wow-delay="0.6s"> <strong> <i
                                            class=" fa fa-angle-right" aria-hidden="true"></i> Hỏi: Sử dụng tổng đài
                                        VFone có mất phí gọi nội bộ giữa các chi nhánh không?</strong>
                                    <span>Không, VFone triển khai theo mô hình điện toán đám mây có đầy đủ các tính năng
                                        của tổng đài nội bộ nên cho phép thực hiện cuộc gọi giữa các phòng ban/ chi
                                        nhánh trên toàn quốc hoàn toàn miễn phí</span>
                                </li>


                                <li class="  wow fadeInUp" data-wow-delay="0.8s"> <strong> <i
                                            class=" fa fa-angle-right" aria-hidden="true"></i> Hỏi: Có thể tích hợp
                                        phần mềm quản lý doanh nghiệp (CRM) vào VFone không?</strong>
                                    <span>Có. VFone có thể tích hợp hầu hết với các phần mềm CRM trong nước và quốc tế:
                                        Zendesk, Bitrix24, Vtiger, SugarCRM, Salesforce, GetFly,….</span>
                                </li>


                                <li class="  wow fadeInUp" data-wow-delay="0.10s"> <strong> <i
                                            class=" fa fa-angle-right" aria-hidden="true"></i> Hỏi: Có thể nâng cấp
                                        thêm số máy nhánh không?</strong>
                                    <span>Được. VFone dễ dàng nâng cấp gói dịch vụ theo nhu cầu mở rộng mô hình số lượng
                                        nhân viên của doanh nghiệp bạn</span>
                                </li>


                                <li class="  wow fadeInUp" data-wow-delay="0.12s"> <strong> <i
                                            class=" fa fa-angle-right" aria-hidden="true"></i> Hỏi: Đổi văn phòng thì
                                        thủ tục làm lại tổng đài/ đầu số có phức tạp không?</strong>
                                    <span>Không. VFone là tổng đài trên Cloud nên doanh nghiệp có thể mang theo bất kỳ
                                        nơi đâu và đầu số điện thoại cũng sẽ được giữ nguyên, không thay đổi.</span>
                                </li>
                            </ul>

                            <div class="lineviewmore wow fadeInUp" data-wow-delay="0.9s">
                                <a><span>Xem thêm</span> <i class="fa fa-chevron-down" aria-hidden="true"></i> </a>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="contenthoidap wow fadeInUp" data-wow-delay="0.2s">
                                <img alt="Gửi câu hỏi" src="thumb/572x320/1/upload/baiviet/faq-2497.png">
                                <span>Những câu hỏi kế bên chưa giải đáp hết thắc mắc của bạn? Vui lòng đặt câu hỏi cho
                                    VFone tại đây.
                                </span>
                                <a class="btnsendfaq" href="lien-he.html"><span>Gửi câu hỏi</span></a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <script>
                $().ready(function() {
                    $('.listfaq li').click(function(event) {
                        /* Act on the event */
                        $('.listfaq li').removeClass('activeRow');
                        $('.listfaq li i').removeClass('fa-angle-down')
                        $('.listfaq li i').addClass('fa-angle-right')
                        $(this).addClass('activeRow');
                        $(this).find('i').addClass('fa-angle-down')
                    });

                    $('.lineviewmore span').click(function() {
                        $('.listfaq').css({
                            height: 'auto',

                        });
                    })

                })
            </script>
            <div style="clear:both"></div>

            <div id="footer">



                <div class="container padding0">

                    <div class="content-footer">
                        <div class="row">

                            <div class="col-md-3 block_itemfooter col-sm-12 col-xsm-12 col-xs-12">
                                <h3 class="title_footerbottom1">Vfone </h3>
                                <ul class="list_connect">
                                    <li><a href="https://vfone.vn/tin-tuc.html" title="Tin tức">Tin tức</a></li>
                                    <li><a href="" title="Tuyển dụng">Tuyển dụng</a></li>
                                    <li><a href="https://vfone.vn/post-page/chinh-sach-bao-mat/438.html"
                                            title="Chính sách bảo mật">Chính sách bảo mật</a></li>
                                    <li><a href="https://vfone.vn/post-page/cam-ket-hoan-tien/524.html"
                                            title="Cam kết hoàn tiền">Cam kết hoàn tiền</a></li>
                                    <li><a href="https://vfone.vn/post-page/thoa-thuan-su-dung/523.html"
                                            title="Thỏa thuận sử dụng">Thỏa thuận sử dụng</a></li>


                                </ul>

                            </div>
                            <div class="col-md-3 block_itemfooter col-sm-4 col-xsm-6 col-xs-12">
                                <h3 class="title_footerbottom">KẾT NỐI VỚI VFONE</h3>
                                <ul class="listsocial">
                                    <li><a href="https://www.facebook.com/nhanhoacom"><img alt="social"
                                                src="upload/hinhanh/3712486031769710.png"></a> <span>Facebook</span>
                                    </li>
                                    <li><a href="https://www.youtube.com/channel/UCB_gZGsKMNdPCkDyu-mEsAQ"><img
                                                alt="social" src="upload/hinhanh/6986745118944140.png"></a>
                                        <span>Youtube</span></li>
                                </ul>
                                <div class="clear"></div>
                                <h3 class="title_footerbottom">Ứng dụng VFone</h3>

                                <ul class="listsocial">
                                    <li> <a href="https://itunes.apple.com/vn/app/vfone-vn/id1457664126?mt=8"
                                            target="_blank" title="Appstore"><img class="image-footer"
                                                src="images/app-store.png" alt="appstore"></a></li>
                                    <li><a href="https://play.google.com/store/apps/details?id=com.nh.cloudcall"
                                            target="_blank"><img class="image-footer" src="images/googleplay.png"
                                                alt="googleplay"></a></li>


                                </ul>
                            </div>


                            <div class="col-md-2 block_itemfooter col-sm-4 col-xsm-6 col-xs-12">
                                <h3 class="title_footerbottom">Danh mục</h3>
                                <ul class="list_connect">
                                    <li><a href="https://support.vfone.vn/" target="_blank" title="Hỗ trợ">Hỗ trợ</a>
                                    </li>

                                    <li><a href="https://vfone.vn/bang-gia.html" title="Bảng giá">Bảng giá</a></li>
                                    <li><a href="https://vfone.vn/dau-so/so-co-dinh.html" title="Số cố định">Số cố
                                            định</a></li>
                                    <li><a href="https://vfone.vn/dau-so/so-1900-1800.html" title="Số 1900/ 1800">Số
                                            1900/ 1800</a></li>
                                    <li><a href="https://vfone.vn/thiet-bi.html" title="Thiết bị">Thiết bị</a></li>


                                </ul>
                            </div>

                            <div class="col-md-4 block_itemfooter col-sm-4 col-xsm-6 col-xs-12">
                                <h3 class="title_footerbottom">Liên hệ </h3>
                                <ul class="list_contactfooter">

                                    <li><img src="images/iconmap.png" alt="địa chỉ"><span>Hà Nội: Tầng 4 - Toà nhà 97
                                            - 99 Láng Hạ, Đống Đa, Hà Nội <br> Tel: (024) 7308 6680 <br> Tp.HCM: 927/1
                                            CMT8, Phường 7, Quận Tân Bình, TP.HCM <br> Tel: (028) 7308 6680</span></li>
                                    <li><img src="images/iconhotline.png" alt="hotline"><span>1900 6680</span></li>
                                    <li><img src="images/iconemail.png" alt="email"><span>contact@vfone.vn</span>
                                    </li>


                                </ul>
                                <h3 class="title_footerbottom">Nhập email nhận khuyến mãi</h3>
                                <div class="blockregisterNewsleter">
                                    <input type="text" name="email" placeholder="Email của bạn">
                                    <button><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                </div>
                            </div>




                        </div>
                    </div>
                    <div style=" clear:both"></div>
                </div>
                <div class="copyright">
                    <div class="container padding0">
                        <span>
                            ©Copyright 2019 <a style="color: #fff;" rel="nofollow"
                                href="https://nhanhoa.com/?utm_source=VFONE_nhanhoa.com&utm_medium=VFONE_nhanhoa.com">CÔNG
                                TY TNHH PHẦN MỀM NHÂN HÒA</a>. All Rights Reserved. </span>
                    </div>
                </div>
                <script>
                    $(function() {
                        $(window).scroll(function() {
                            if ($(this).scrollTop() != 0) {
                                $('.back-top').fadeIn();
                            } else {
                                $('.back-top').fadeOut();
                            }
                        });
                        $('.back-top').click(function() {
                            $('body,html').animate({
                                scrollTop: 0
                            }, 800);
                        });
                    });
                </script>
                <div class="back-top"><i class="fas fa-angle-double-up"></i></div>


                <div class="blockfixbottom hidden">
                    <ul>
                        <!-- <li><a href=""><span>Dùng thử</span></a></li> -->
                        <li><a href="bang-gia.html"><span>Bảng giá</span></a></li>
                        <li><a href="lien-he.html"><span>Liên hệ</span></a></li>
                    </ul>
                </div>

                <div class="block-about block_loginpage" id="dangnhap">
                    <form method="post" name="frm" action="dang-nhap.html" class="frm_register"
                        enctype="multipart/form-data">
                        <ul class="list-register">

                            <li><label>Email đăng nhập:</label>
                                <input type="email" name="email" required="required" class="input_data1"
                                    placeholder="Nhập địa chỉ email" />
                            </li>

                            <li><label>Mật khẩu:</label>
                                <input type="password" name="password" required="required" data-pass="1"
                                    class="input_data1" placeholder="Nhập mật khẩu" />
                            </li>


                            <li><label>&nbsp;</label>
                                <button class="btn_submit1">Đăng nhập thành viên </button>
                            </li>

                        </ul>

                    </form>
                </div>



                <script>
                    $().ready(function(e) {
                        $('.btn_submit').click(function() {

                            $("body input.input_data").each(function() {
                                $(this).parent().find('.data_err').remove();
                                if ($(this).val() == '') {
                                    data_err = $(this).attr('placeholder');
                                    $(this).parent().append('<span class="data_err">Vui lòng ' + data_err +
                                        '</span>');
                                    //alert(data_err);
                                    $(this).focus();
                                    return false;
                                } else {
                                    if ($(this).attr('type') == 'email') {
                                        emailRegExp =
                                            /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.([a-z]){2,4})$/;
                                        if (!emailRegExp.test($(this).val())) {

                                            data_err = $(this).attr('placeholder');
                                            $(this).parent().append('<span class="data_err">Vui lòng ' +
                                                data_err + '</span>');
                                            return false;
                                        }

                                    }

                                    // xu lay passs


                                    if ($(this).attr('type') == 'password' && $(this).attr('data-pass') == 1) {
                                        $pass1 = $(this).val();
                                    }

                                    if ($(this).attr('type') == 'password' && $(this).attr('data-pass') == 2) {


                                        $pass2 = $(this).val();

                                        if ($pass1 != $pass2) {
                                            $(this).parent().append(
                                                '<span class="data_err">Mật khẩu không khớp !</span>');
                                            return false;

                                        } else {
                                            $('.frm_register').submit();
                                        }

                                    }
                                }
                            });
                        })
                    });
                </script>
                <div class="block-about block_loginpage" id="register">
                    <form method="post" name="frm" action="dang-ky.html" class="frm_register"
                        enctype="multipart/form-data">
                        <ul class="list-register">


                            <li><label>Họ tên: <span>*</span></label>
                                <input class="input_data" name="hoten" required="required"
                                    placeholder="Nhập họ tên" />
                            </li>
                            <li><label>Điện thoại: <span>*</span></label>
                                <input type="tel" name="dienthoai" required="required" class="input_data"
                                    placeholder="Nhập  số điện thoại" />
                            </li>
                            <li><label>Email đăng nhập: <span>*</span></label>
                                <input type="email" name="email" required="required" class="input_data"
                                    placeholder="Nhập địa chỉ email" />
                            </li>
                            <li><label>Mật khẩu: <span>*</span></label>
                                <input type="password" name="password" required="required" data-pass="1"
                                    class="input_data" placeholder="Nhập mật khẩu" />
                            </li>
                            <li><label>Nhập lại mật khẩu: <span>*</span></label>
                                <input type="password" name="password1" required="required" data-pass="2"
                                    class="input_data" placeholder="Xác nhận lại mật khẩu" />
                            </li>

                            <li><label>Địa chỉ:</label>
                                <input name="diachi" class="input_data" placeholder="Nhập địa chỉ" />
                            </li>

                            <li><label>&nbsp;</label>
                                <button type="button" class="btn_submit">Đăng ký thành viên </button>
                            </li>

                        </ul>

                    </form>
                </div>

                <div style="clear:both"></div>
            </div>
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WLQRBZW" height="0"
                    width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
            <script>
                $().ready(function() {
                    $('.iconheart, .btn_addheart').click(function() {
                        idproduct = $(this).attr('data-id')
                        $.ajax({
                            type: "POST",
                            url: "ajax/addcheck.php",
                            data: {
                                idProduct: idproduct
                            },
                            success: function(result) {
                                alert(result);
                            }
                        });
                    })
                })
            </script>
            <script src="js/wow.js"></script>
            <script>
                wow = new WOW({
                    animateClass: 'animated',
                    offset: 100,
                    callback: function(box) {
                        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                    }
                });
                wow.init();
            </script>

            <script>
                $().ready(function() {
                    $('.btnaddtocart, .iconcart , .btn_addcart ').click(function() {
                        idproduct = $(this).attr('data-id')
                        $.ajax({
                            type: "POST",
                            url: "ajax/add_giohang.php",
                            data: {
                                pid: idproduct
                            },
                            success: function(string) {
                                setTimeout(function() {
                                    window.location.href = "thanh-toan.html";
                                }, 500);
                            }
                        })
                    })
                })
            </script>
            <!-- Ads Banner -->
            <div id="adsModal" class="modal fade in" role="dialog">
                <div class="modal-dialog modal-dialog-centered">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-body" style="padding:0;">
                            <div class="ads_inner">
                                <a style="position: absolute; right: 0; top: 0; color: red;" id="closeAdsModal"
                                    data-dismiss="modal"><i style="font-size: 2em;" class="fa fa-times"></i></a>
                                <a style="cursor: pointer;" class="show_form_dangky"
                                    href="https://vfone.vn/tin-tuc/sieu-sale-cuoi-nam-gia-tot-chua-tung-co-tai-vfone">
                                    <img src="https://vfone.vn/images/2023/popup-vfone-thang-11.jpg"
                                        alt="Chương trình khuyến mãi Vfone">
                                </a>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Ads Banner -->



            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
            <script>
                $(document).on("click", "#closeAdsModal", function() {
                    $("#adsModal").modal("hide");
                });

                $(document).ready(function() {
                    var isShowAds = 'displayed';
                });
            </script>
            <!-- Resend call bottom -->
            <!-- IMG BLACK FRIDAY -->
            <div id="img_bf12" class="shake_image_promotion hidden">
                <span class="shake_img_close ">
                    <i class="fa fa-times"></i>
                </span>
                <a href="https://nhanhoa.com/tin-tuc/thu-sau-gio-vang-muon-van-qua-tang-tai-nhan-hoa.html"
                    id="click_download_app">
                    <img id="img_bf12_22" class=" ring_ring_img"
                        src="https://nhanhoa.com/templates/images/v2/icon-gio-vang.png" alt="">
                </a>
            </div>
            <style>
                #img_bf12 img {
                    position: fixed;
                    max-height: 143px;
                    bottom: 40%;
                    right: 0;
                    z-index: 99999;
                    max-width: 100% !important;
                }

                .ring_ring_img {
                    -webkit-animation: ring 6s 2s ease-in-out infinite;
                    -webkit-transform-origin: 50% 4px;
                    -moz-animation: ring 4s 2s ease-in-out infinite;
                    -moz-transform-origin: 50% 4px;
                    animation: ring 4s 2s ease-in-out infinite;
                    transform-origin: 50% 4px;
                    margin-right: 5px;
                    color: #fff;
                }

                @-webkit-keyframes ring {
                    0% {
                        -webkit-transform: rotateZ(0);
                    }

                    1% {
                        -webkit-transform: rotateZ(30deg);
                    }


                    27% {
                        -webkit-transform: rotateZ(-12deg);
                    }

                    29% {
                        -webkit-transform: rotateZ(10deg);
                    }

                    31% {
                        -webkit-transform: rotateZ(-8deg);
                    }

                    33% {
                        -webkit-transform: rotateZ(6deg);
                    }

                    35% {
                        -webkit-transform: rotateZ(-4deg);
                    }

                    37% {
                        -webkit-transform: rotateZ(2deg);
                    }

                    39% {
                        -webkit-transform: rotateZ(-1deg);
                    }

                    41% {
                        -webkit-transform: rotateZ(1deg);
                    }

                    43% {
                        -webkit-transform: rotateZ(0);
                    }

                    100% {
                        -webkit-transform: rotateZ(0);
                    }
                }

                @-moz-keyframes ring {
                    0% {
                        -moz-transform: rotate(0);
                    }

                    1% {
                        -moz-transform: rotate(30deg);
                    }


                    27% {
                        -moz-transform: rotate(-12deg);
                    }

                    31% {
                        -moz-transform: rotate(-8deg);
                    }

                    33% {
                        -moz-transform: rotate(6deg);
                    }

                    35% {
                        -moz-transform: rotate(-4deg);
                    }

                    37% {
                        -moz-transform: rotate(2deg);
                    }

                    39% {
                        -moz-transform: rotate(-1deg);
                    }

                    41% {
                        -moz-transform: rotate(1deg);
                    }

                    43% {
                        -moz-transform: rotate(0);
                    }

                    100% {
                        -moz-transform: rotate(0);
                    }
                }

                @keyframes ring {
                    0% {
                        transform: rotate(0);
                    }

                    1% {
                        transform: rotate(30deg);
                    }

                    27% {
                        transform: rotate(-12deg);
                    }

                    31% {
                        transform: rotate(-8deg);
                    }

                    33% {
                        transform: rotate(6deg);
                    }

                    35% {
                        transform: rotate(-4deg);
                    }

                    37% {
                        transform: rotate(2deg);
                    }

                    39% {
                        transform: rotate(-1deg);
                    }

                    41% {
                        transform: rotate(1deg);
                    }

                    43% {
                        transform: rotate(0);
                    }

                    100% {
                        transform: rotate(0);
                    }
                }

                @media (max-width: 768px) {
                    #img_bf12 img {
                        max-width: 100px !important;
                    }

                    #img_bf12 img {
                        bottom: 21%;
                    }
                }

                #img_bf12 img {
                    bottom: 45%;
                    max-width: 220px !important;
                }

                .shake_image_promotion {
                    position: relative;
                }

                span.shake_img_close {
                    font-size: 18px;
                    color: #e30808;
                    position: fixed;
                    bottom: calc(60%);
                    right: 1%;
                    z-index: 999999999;
                    font-weight: normal;
                    cursor: pointer;
                    display: block;
                }

                @media (max-width: 768px) {
                    #img_bf12 img {
                        max-width: 150px !important;
                    }

                    #img_bf12 img {
                        bottom: 26%;
                    }

                    span.shake_img_close {
                        bottom: calc(21% + 120px);
                    }
                }
            </style>
            <!-- IMG BLACK FRIDAY -->
            <script type="text/javascript">
                $(document).on("click", ".shake_img_close", function() {
                    $("#click_download_app").hide();
                    $(this).hide();
                });
                $(document).ready(function() {
                    const bf12_now = new Date();
                    let bf12_date = bf12_now.getDate();
                });
            </script>
</body>

</html>
