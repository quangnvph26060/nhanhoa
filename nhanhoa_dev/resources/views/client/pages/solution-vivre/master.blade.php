<!DOCTYPE html>
<html lang="vi">

<head>

    <base href="https://vfone.vn/">
    <meta charset="UTF-8">
    <title>
        Tổng đài điện thoại ảo Voip Cloud VFone Nhân Hòa #1 Việt Nam </title>

    <!-- <meta name='revisit-after' content='1 days' /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="{{ asset('client/assets/css/bootstrap/bootstrap2.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/assets/css/easy-responsive-tabs.css') }}" />

    <link type="text/css" rel="stylesheet" href="{{ asset('client/assets/css/jquery/jquery.mmenu.all.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('client/assets/css/animate.css') }}" />
    <link href="{{ asset('client/assets/css/solution-vfone.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('client/assets/css/jquery/jquery.datetimepicker.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,bold&subset=all" rel="stylesheet">

    <style>
        #vfone_call {
            bottom: 55% !important;
        }

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
    <script src="{{ asset('client/assets/js/jquery/jquery-1.9.1.min.js') }}"></script>
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="{{ asset('client/assets/css/carousel/owl.carousel-1.3.3.css') }}">
    <!-- Default Theme -->
    <link rel="stylesheet" href="{{ asset('client/assets/css/carousel/owl.theme.css') }}">
    <!-- Include js plugin -->
    <script src="{{ asset('client/assets/js/carousel/owl.carousel.js') }}"></script>
    <!-- Add mousewheel plugin (this is optional) -->
    <script src="{{ asset('client/assets/js/jquery/mousewheel-3.0.6.pack.js') }}"></script>
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="{{ asset('client/assets/css/jquery/fancybox.css') }}" type="text/css"
        media="screen" />
    <script src="{{ asset('client/assets/js/jquery/fancybox.pack.js') }}"></script>
    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="{{ asset('client/assets/css/jquery/fancybox-buttons.css') }}" type="text/css"
        media="screen" />
    <script src="{{ asset('client/assets/js/jquery/fancybox-buttons.js') }}"></script>
    <script src="{{ asset('client/assets/js/jquery/fancybox-media.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('client/assets/css/jquery/fancybox-thumbs.css') }}" type="text/css"
        media="screen" />
    <script src="{{ asset('client/assets/js/jquery/fancybox-thumbs.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox();
        });
    </script>
    <script src="{{ asset('client/assets/js/jquery/datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('client/assets/js/easyResponsiveTabs.js') }}"></script>
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
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P5HJHZF');
    </script>
    <!-- End Google Tag Manager -->

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
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141020426-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-141020426-1');
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WLQRBZW');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1790398581171976');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" alt="facebook"
            src="https://www.facebook.com/tr?id=1790398581171976&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <div id="header">
        <!-- <div class="blocklinetop">
<div class="container padding0">
  <ul class="listsocialtop">
           <li><a href="https://www.facebook.com/nhanhoacom/"><img src="upload/hinhanh/9705228270569570.png"></a></li>
      </ul>
 <ul class="linehotline">
  <li>   Email:contact@vfone.vn</li>
  <li>  Hotline:1900 6680</li>
</ul>
</div>
</div>
-->
        <div class="main_header">
            <div style="clear:both"></div>
            <div class="padding0 container " style="max-width:1300px;">
                <a class="btn_m" href="#menu"><i class="glyphicon glyphicon-align-justify"></i></a>
                <script>
                    $().ready(function(e) {
                        $('.btn_search1').click(function() {
                            if ($('.block_search input').hasClass('active_input')) {
                                //  $('.block_search').submit();
                                return true;
                            }
                            $('.block_search input').addClass('active_input');
                            $(this).removeClass('btn_search1');
                            $('.block_search').css('border-color', '#ccc')
                            //  return false;
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
        <a class="btn_m" href="#menu"><i class="glyphicon glyphicon-align-justify"></i></a>
        <div class="block-slider">


            <div class="blockrightSlider  ">
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
                    //return false;
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

        </div>
        <!-- Move bảng giá -->
        @yield('content')

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
                                <li><input type="text" required="required" name="hoten" placeholder="Họ tên">
                                </li>
                                <li><input type="email" required="required" name="email" placeholder="Email">
                                </li>
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
                                    <div class="g-recaptcha" data-sitekey="6LcrovUhAAAAAPcyBQpZvDIwqgYIsZtQJn-8_2jd">
                                    </div>
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


                            <li class="  wow fadeInUp" data-wow-delay="0.4s"> <strong> <i class=" fa fa-angle-right"
                                        aria-hidden="true"></i> Hỏi: Đầu số 1900/1800
                                    là gì?</strong>
                                <span>1800 là đầu số miễn cước người gọi. Mức cước của đầu số 1800 là cố định và
                                    không đổi và được Bộ thông tin và truyền thông quy định. Trung tâm CSKH và hỗ
                                    trợ miễn phí khách hàng thường sử dụng tổng đài 1800 để khuyến khích người gọi
                                    vào.

                                    1900 là đầu số tính cước người gọi, khi khách hàng gọi vào tổng đài thì khách
                                    hàng sẽ là người chịu phí cước. Được ứng dụng hiệu quả tại các phòng chăm sóc
                                    khách hàng, chuỗi cửa hàng, giao hàng nhanh, phòng vé.</span>
                            </li>


                            <li class="  wow fadeInUp" data-wow-delay="0.6s"> <strong> <i class=" fa fa-angle-right"
                                        aria-hidden="true"></i> Hỏi: Sử dụng tổng đài
                                    VFone có mất phí gọi nội bộ giữa các chi nhánh không?</strong>
                                <span>Không, VFone triển khai theo mô hình điện toán đám mây có đầy đủ các tính năng
                                    của tổng đài nội bộ nên cho phép thực hiện cuộc gọi giữa các phòng ban/ chi
                                    nhánh trên toàn quốc hoàn toàn miễn phí</span>
                            </li>


                            <li class="  wow fadeInUp" data-wow-delay="0.8s"> <strong> <i class=" fa fa-angle-right"
                                        aria-hidden="true"></i> Hỏi: Có thể tích hợp
                                    phần mềm quản lý doanh nghiệp (CRM) vào VFone không?</strong>
                                <span>Có. VFone có thể tích hợp hầu hết với các phần mềm CRM trong nước và quốc tế:
                                    Zendesk, Bitrix24, Vtiger, SugarCRM, Salesforce, GetFly,….</span>
                            </li>


                            <li class="  wow fadeInUp" data-wow-delay="0.10s"> <strong> <i class=" fa fa-angle-right"
                                        aria-hidden="true"></i> Hỏi: Có thể nâng cấp
                                    thêm số máy nhánh không?</strong>
                                <span>Được. VFone dễ dàng nâng cấp gói dịch vụ theo nhu cầu mở rộng mô hình số lượng
                                    nhân viên của doanh nghiệp bạn</span>
                            </li>


                            <li class="  wow fadeInUp" data-wow-delay="0.12s"> <strong> <i class=" fa fa-angle-right"
                                        aria-hidden="true"></i> Hỏi: Đổi văn phòng thì
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
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P5HJHZF" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
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
                                    <span>Youtube</span>
                                </li>
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
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WLQRBZW" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
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
                    // console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
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

        <!-- Latest compiled and minified JavaScript -->
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
        <button class="hidden" id="show_recall">show_recall</button>
        <div class="popup-re-call" id="popup-re-call" style="display: none">
            <div class="content_popup">
                <a href="#" class="re-close-popup close" data-dismiss="alert" title="close">×</a>
                <div class="input-content">
                    <img src="https://nhanhoa.com/templates/images/calendar.png">

                    <div class="text-hello"> Xin chào,</div>

                    <p class="conten-sub">Vui lòng nhập thông tin để chúng tôi liên hệ lại với bạn theo lịch hẹn.
                    </p>
                    <form action="{{ route('page.register.consultation') }}" method="post">
                        @csrf
                        <input class="request_fullnamex form-control" style="margin-bottom: 0.5rem;" type="text"
                            name="request_fullname" id="request_fullnamex" value="" placeholder="Họ và tên">
                        <div class="fullnamex_error alert-danger"></div>
                        <input class="request_phone form-control" style="margin-bottom: 0.5rem;" type="text"
                            name="request_phone" id="request_phonex" value="" placeholder="Số điện thoại">
                        <div class="phone_error alert-danger"></div>
                        <input class="request_emailx form-control" type="text" name="request_email" id="request_emailx" value=""
                            placeholder="Email">
                        <div class="emailx_error alert-danger"></div>
                        <textarea class="request_content form-control" rows="5" name="request_content"
                            style="margin-top: 0.5rem;" id="request_contentx" placeholder="Nội dung tư vấn"></textarea>
                        <div class="content_error alert-danger"></div>
                        <input type="hidden" id="request_callback_title" value="">
                        <div>
                            <p class="conten-sub">Bạn Ở Khu Vực Nào?</p>

                            <input type="radio" name="request_locationx" id="request_location1" value="Hà Nội"
                                class="css-checkbox-x2 request_location" checked="checked">
                            <label for="request_location1" class="css-label-x2">HN</label>

                            <input type="radio" name="request_locationx" id="request_location2" value="Hồ Chí Minh"
                                class="css-checkbox-x2 request_location">
                            <label for="request_location2" class="css-label-x2">HCM</label>
                        </div>


                        <div class="submit-content error_send" style="display:none;text-align: center;"></div>
                        <div class="submit-content js_submit">
                            <button type="submit" class="btn btn-primary">Gửi đi</button>
                            <div class="go-hotline"> Gọi hotline <span>(024) 7308 6680</span> (24/7)</div>
                        </div>
                    </form>
                </div>
                <div class="success-conten" style="display:none">
                    <img src="https://nhanhoa.com/templates/images/success.png">
                    <div class="text-hello"> Thành công,</div>
                    <p class="conten-sub">Cảm ơn bạn đã đăng ký thông tin! Chúng tôi sẽ liên hệ lại với bạn trong
                        thời gian sớm nhất.</p>
                    <p class="conten-warning">Rất lấy làm xin lỗi nếu như vấn đề này làm bạn khó chịu!</p>
                    <div class="submit-content">
                        <div class="go-hotline">Thông báo sẽ tự động tắt trong 5 giây</div>
                    </div>
                </div>
            </div>
        </div>
        <link rel="stylesheet" href="https://vfone.vn/css/contactus.css?v=1726582478">
        <script type="text/javascript" src="https://vfone.vn/js/contactus.js?v=1726582478"></script>
        <script type="text/javascript" src="https://vfone.vn/js/custom.js?v=1726582478"></script>
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
    </div>
</body>

</html>
