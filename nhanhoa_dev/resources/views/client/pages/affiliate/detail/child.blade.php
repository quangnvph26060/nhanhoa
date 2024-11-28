@extends('client.layouts.master')

@section('content')
<div class="section-article-hot section-list-article-page page-has-sidebar page-view-group">
    <div class="container begin-sticky ">
        <div class="row row-small ">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('page.home') }}"><img
                                    src="https://nhanhoa.com/templates/images/v2/mobile/icon_home.png"
                                    alt="Trang chủ"></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('page.news') }}">Tin tức</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            @if ($id == 1)
                            Tin tức
                            @elseif ($id == 2)
                            Thông báo
                            @elseif ($id == 3)
                            Tuyển dụng
                            @elseif ($id == 4)
                            Công nghệ
                            @elseif ($id == 5)
                            Ưu đãi
                            @elseif ($id == 6)
                            Trợ giúp
                            @endif
                        </li>


                    </ol>
                </nav>
            </div>
            <div class="col-md-9">
                <div class="row row-small ">
                    <div class="heading d-none">
                        <i class="fa fa-list-alt pull-left"></i>
                        <h1 class="pull-left">Tin tức </h1>
                    </div>
                    @forelse ($news as $item)
                    <div class="col-md-4 col-lg-4 col-12">
                        <div class="item-article">
                            <div class="img">
                                <a href="{{ route('page.news-detail', ['slug'=>$item->slug, 'id'=>$item->id]) }}">
                                    <img class='rtbs' align='left' src='{{ asset($item->logo) }}' width='130'
                                        height='100' border='0'>
                                </a>
                                <span class="news-view-thumb"> <i class="far fa-eye"></i> {{ $item->views }}</span>
                            </div>
                            <div class="inner-content">

                                <div class="name">
                                    <a style=" display: -webkit-box;
                                            -webkit-box-orient: vertical;
                                            -webkit-line-clamp: 2;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            line-height: 1.5em;
                                            max-height: 3em; "
                                        href="{{ route('page.news-detail', ['slug'=>$item->slug, 'id'=>$item->id]) }}">
                                        {{ $item->title }}
                                    </a>
                                </div>
                                <div class="description d-none">
                                    Email doanh nghiệp không chỉ là công cụ giao tiếp mà còn là một phần quan trọng
                                    trong việc xây dựng hình ảnh chuyên nghiệp...
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new">
                                            <a href="javascript:void(0)" tabindex="0">
                                                <img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png" /> {{
                                                $item->user->name }}
                                            </a>
                                            <span class="seperate">|</span>{{ $item->created_at->format('d-m-Y') }}
                                        </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4493" href="" class="ml-auto bookmark"
                                        tabindex="0"><i class="far fa-bookmark"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty

                    @endforelse


                </div>
                @if ($news->lastPage() > 1)
                <div style="display: flex !important; margin-left: 30px">
                    <section id="pagenavi_new" class="pagenavi_new">
                        <article class="pagenavi">
                            <div id='block_page'>
                                <ul class='pagination pull-right'>
                                    <!-- Link to Previous Page -->
                                    @if ($news->onFirstPage())
                                    <li class="disabled"><span>&laquo; Trang trước</span></li>
                                    @else
                                    <li><a href="{{ $news->previousPageUrl() }}" title="Trang trước">&laquo; Trang
                                            trước</a></li>
                                    @endif

                                    <!-- Pagination Links: Show 4 pages before and after current page -->
                                    @for ($page = max(1, $news->currentPage() - 4); $page <= min($news->lastPage(),
                                        $news->currentPage() + 4); $page++)
                                        @if ($page == $news->currentPage())
                                        <li class="active"><a>{{ $page }}<span class="sr-only">(current)</span></a></li>
                                        @else
                                        <li><a href="{{ $news->url($page) }}" title="Trang: {{ $page }}">{{ $page }}</a>
                                        </li>
                                        @endif
                                        @endfor

                                        <!-- Link to Next Page -->
                                        @if ($news->hasMorePages())
                                        <li><a href="{{ $news->nextPageUrl() }}" title="Trang kế tiếp">Trang kế tiếp
                                                &raquo;</a></li>
                                        @else
                                        <li class="disabled"><span>Trang kế tiếp &raquo;</span></li>
                                        @endif
                                </ul>
                            </div>
                        </article>
                    </section>
                </div>
                @endif


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

            $(document).ready(function() {
                var block_page = "";
                $('#block_page li span').remove();
                $("#block_page li a").each(function(index) {
                    if ($(this).is("[href]")) {
                        block_page += "<li><a href='" + $(this).attr("href") + "'>" + $(this)
                            .text() +
                            "</a></li>";
                    } else {
                        block_page += "<li class='active'>" + $(this).text() + "</li>";
                    }
                });
                $(".pagenavi").html("<ul>" + block_page + "</ul>");
            })
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
        /* .header-top>.container>.row>div:nth-child(2) {
                        justify-content: center;
                    } */

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
