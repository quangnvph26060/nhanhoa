@extends('client.layouts.master')

@section('content')
<div class="section-detail-article ">
    <div class="container ">
        <div class="row row-small begin-sticky">

            <div class="col-md-9 col-12">

                <div class="content-detail-article " id="main-article">
                    <nav aria-label="breadcrumb" class="main-news-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('page.home') }}"><img
                                        src="https://nhanhoa.com/templates/images/v2/mobile/icon_home.png"
                                        alt="Trang chủ"></a></li>
                            <li class="breadcrumb-item" aria-current="page"><a
                                    href="{{ route('page.news') }}">Tin tức</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $new->title }}</li>
                        </ol>
                    </nav>
                    <h1 class="name">
                        <a
                            href='https://nhanhoa.com/tin-tuc/custom-domain-la-gi-top-5-loi-ich-quan-trong-nhat-cua-custom-domain.html'>Custom
                            {{ $new->title }}</a>
                    </h1>
                    <div class="category-date news-meta">
                        <div class="category-name">
                            @if ($new->type == 1)
                            <a href="{{ route('page.news-child', ['id' => 1]) }}">
                                Tin tức
                            </a>
                        @elseif ($new->type == 2)
                            <a href="{{ route('page.news-child', ['id' => 2]) }}">
                                Thông báo
                            </a>
                        @elseif ($new->type == 3)
                            <a href="{{ route('page.news-child', ['id' => 3]) }}">
                                Tuyển dụng
                            </a>
                        @elseif ($new->type == 4)
                            <a href="{{ route('page.news-child', ['id' => 4]) }}">
                                Công nghệ
                            </a>
                        @elseif ($new->type == 5)
                            <a href="{{ route('page.news-child', ['id' => 3]) }}">
                                Ưu đãi
                            </a>
                        @elseif ($new->type == 5)
                            <a href="{{ route('page.news-child', ['id' => 4]) }}">
                                Trợ giúp
                            </a>
                        @endif


                        </div>
                        <div class="date news-meta-item">
                            <i class="fas fa-clock "></i> {{ $new->created_at->format('d/m/Y, h:i a') }}
                        </div>
                        <div class="author news-meta-item">
                            <i class="fas fa-user"></i> {{ $new->user->name }}
                        </div>
                        <div class="views news-meta-item">
                            <i class="fas fa-eye"></i> {{ $new->views }}
                        </div>
                    </div>
                    <div class="content-article ">
                        {!! $new->content !!}
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12 ">
                @include('client.pages.affiliate.sidebar-right')
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://nhanhoa.com/templates/plugin/sticky-sidebar/sticky-sidebar.min.js"></script>
<script>
    $(window).on("load", function() {

            if ($("#right-sidebar").length > 0) {
                if ($(window).width() > 992) {
                    var topSpacing = $(".header-top").innerHeight();
                    console.log(topSpacing, "topSpacing");
                    var sidebar = new StickySidebar('#right-sidebar', {
                        topSpacing: 10,
                        bottomSpacing: 50,
                        containerSelector: '.row-small',
                        innerWrapperSelector: '.nh-sidebar',
                        resizeSensor: true
                    });
                    // $(window).scroll(function () {
                    //     let position = $(this).scrollTop();
                    //     let innerH = $("#right-sidebar").innerHeight();
                    //     let check_stop = position + innerH;
                    //     let targetElement  = $(".section-online-support").offset();
                    //     console.log(innerH,targetElement.top );

                    //     if (position > 100 ) {
                    //         $(".nh-sidebar").css({"position":"fixed", "top":"0px", "width":"284px", "transform":"translate3d(0px, 120px, 0px)"});
                    //     }
                    //     else if(check_stop == targetElement.top){
                    //         $(".nh-sidebar").css({"position":"relative", "top":"100%", "width":"284px", "transform":"translate3d(0px, 120px, 0px)"});
                    //     }
                    //     else {
                    //         $(".nh-sidebar").css({"position":"relative", "top":"auto","transform":"translate3d(0px, 0px, 0px)"});
                    //     }
                    // });
                }

            }
        })
</script>
@endsection

@section('style')
<style>
    @media (min-width: 1366px) and (max-width: 1650px) {
        .main-menu>ul.navbar-nav>li>a.nav-link {
            padding-left: 8px;
            padding-right: 8px;
        }
    }

    @media (min-width: 1280px) and (max-width: 1365px) {
        .main-menu.navbar>.navbar-nav {
            gap: 8px;
        }

    }

    @media(max-width: 1240px) {
        .header-top>.container>.row>div:nth-child(2) {
            justify-content: center;
        }

        .btn-action-header>a {

            height: 30px;
            line-height: 30px;

            font-size: 14px;

        }
    }

    .content-detail-article .main-article-content h2>span>div {
        font-size: 1.2rem !important;
    }

    table tbody tr td,
    table thead th td,
    table thead th {
        border-color: #ccc !important
    }

    @media (min-width:991px) {
        .section-detail-article h1 a {
            font-size: 22px !important;
            line-height: 20px;
        }
    }
</style>
@endsection
