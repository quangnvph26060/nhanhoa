@extends('client.layouts.master')

@section('content')
<div class="section-list-link-article">
    <div class="container">
        <!--Begin list link-->

        <!--Begin list link-->
        <div class="list-link">
            <div class="row">
                <div class="col-md-3">
                    <div class="category-item">
                        <div class="category-img">
                            <a href="https://nhanhoa.com/tin-tuc/thong-bao_3.html">
                                <img src="https://nhanhoa.com/templates/images/v2/icon-news-thong-bao.png">
                            </a>
                        </div>
                        <div class="category-text">
                            <a href="https://nhanhoa.com/tin-tuc/thong-bao_3.html">
                                Thông báo
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-item">
                        <div class="category-img">
                            <a href="https://nhanhoa.com/uu-dai-nhan-hoa.html">
                                <img src="https://nhanhoa.com/templates/images/v2/icon-news-uu-dai.png">
                            </a>
                        </div>
                        <div class="category-text">
                            <a href="https://nhanhoa.com/uu-dai-nhan-hoa.html">
                                Ưu đãi
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-item">
                        <div class="category-img">
                            <a href="https://nhanhoa.com/tin-tuc.html">
                                <img src="https://nhanhoa.com/templates/images/v2/icon-news-tin-tuc.png">
                            </a>
                        </div>
                        <div class="category-text">
                            <a href="https://nhanhoa.com/tin-tuc.html">
                                Tin tức
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-item">
                        <div class="category-img">
                            <a href="https://wiki.nhanhoa.com/" target="_blank">
                                <img src="https://nhanhoa.com/templates/images/v2/icon-news-ky-thuat.png">
                            </a>
                        </div>
                        <div class="category-text">
                            <a href="https://wiki.nhanhoa.com/" target="_blank">
                                Kỹ thuật
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End list link-->

        <!--End list link-->
    </div>
</div>

<div class="section-article-hot">
    <div class="container">
        <div class="content-article-hot">
            <div class="row row-small">
                <div class="col-md-12 col-12">
                    <h2 class="title-section home_blog_title" style="display:none;">Tin tức - Sự kiện</h2>
                </div>
                <div class="col-lg-7 col-md-7 col-12">
                    @forelse ($news as $index => $item)
                    @if ($index < 1) <div class="item-article-hot item-article-hot-left">
                        <div class="img position-relative">
                            <a href="{{ route('page.news-detail', ['slug' => $item->slug, 'id' => $item->id]) }}">
                                <img class="rtbs" align="left"
                                    src="{{ asset($item->logo) }}" width="130"
                                    height="100" border="0">
                            </a>
                        </div>
                        <div class="inner-content">
                            <div class="name">
                                <a href="{{ route('page.news-detail', ['slug' => $item->slug, 'id' => $item->id]) }}"
                                    title="{{ $item->title }}">
                                    {{ $item->title }}
                                </a>
                            </div>
                            <div class="description">

                                Kính gửi Quý khách hàng,
                                Cảm ơn Quý khách đã tin tưởng và ủng hộ Nhân Hòa trong suốt thời gian qua.
                                Do hệ thống tên...
                            </div>
                            <div class="d-flex align-items-center justify-content-between meta--wrap">
                                <div class="meta">
                                    <span class="meta--author meta--author-new"><a href="javascript:void(0)"
                                            tabindex="0"><img class="author-avatar"
                                                src="https://uploads.nhanhoa.com/news/no-avatar.png"> {{ $item->user->name }} </a><span
                                            class="seperate">|</span>{{ $item->created_at->format('d-m-Y') }} <ins><span class="seperate">|</span>
                                            {{ $item->views }}&nbsp;Lượt xem</ins> </span>
                                </div>
                                <a nh-btn-action="bookmark" bookmark-id="4480" href="javascript:;"
                                    class="ml-auto bookmark" tabindex="0"><i class="far fa-bookmark"></i></a>
                            </div>

                        </div>
                </div>
                @endif
                @empty

                @endforelse
            </div>
            <div class="col-lg-5 col-md-5 col-12">
                <div class="row">

                    @forelse ($news as $index => $item)
                    @if($index >= 1 && $index <= 4)
                    <div class="col-md-6 col-6">
                        <div class="item-article-hot item-article-hot-right">
                            <div class="img position-relative">
                                <a href="{{ route('page.news-detail', ['slug' => $item->slug, 'id' => $item->id]) }}">
                                    <img class="rtbs" align="left"
                                        src="{{ asset($item->logo) }}"
                                        width="130" height="100" border="0">
                                </a>
                            </div>
                            <div class="inner-content">
                                <div class="name">
                                    <a href="{{ route('page.news-detail', ['slug' => $item->slug, 'id' => $item->id]) }}" style="display: inline-block;
                                    max-width: 200px;
                                    white-space: nowrap;
                                    overflow: hidden;
                                    text-overflow: ellipsis;"
                                        title=" {{ $item->title }}">
                                        {{ $item->title }}
                                    </a>
                                </div>
                                <div
                                    class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <img class="author-avatar"
                                            src="https://uploads.nhanhoa.com/news/no-avatar.png"
                                            alt="Author Avatar">
                                        <span class="meta--author meta--author-new">
                                            <a href="javascript:void(0)" tabindex="0">{{$item->user->name}}</a>
                                            <span class="seperate">|</span>{{ $item->created_at->format('d-m-Y') }}
                                        </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4473"
                                        href="javascript:;" class="ml-auto bookmark" tabindex="0">
                                        <i class="far fa-bookmark fs-20"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @empty

                @endforelse
                    {{-- <div class="col-md-6 col-6">
                        <div class="item-article-hot item-article-hot-right">
                            <div class="img position-relative">
                                <a href="https://nhanhoa.com/tin-tuc/nvme-cloud-vps-nhan-hoa.html">
                                    <img class="rtbs" align="left"
                                        src="https://uploads.nhanhoa.com/news/1725010086_nvme-vps-thumb.jpg" width="130"
                                        height="100" border="0">
                                </a>
                            </div>
                            <div class="inner-content">
                                <div class="name">
                                    <a href="https://nhanhoa.com/tin-tuc/nvme-cloud-vps-nhan-hoa.html"
                                        title="NVMe Cloud VPS Nhân Hòa - Giải pháp lưu trữ website “siêu tốc”">
                                        NVMe Cloud VPS Nhân Hòa - Giải pháp lưu trữ...
                                    </a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new"><a href="javascript:void(0)"
                                                tabindex="0"><img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png"> Elly
                                                Duong</a><span class="seperate">|</span>30/08/2024 </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4479" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i class="far fa-bookmark"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-6">
                        <div class="item-article-hot item-article-hot-right">
                            <div class="img position-relative">
                                <a
                                    href="https://nhanhoa.com/tin-tuc/nhan-hoa-thong-bao-lich-nghi-le-quoc-khanh-nam-2024.html">
                                    <img class="rtbs" align="left"
                                        src="https://uploads.nhanhoa.com/news/1725002122_tbnl-640360.jpg" width="130"
                                        height="100" border="0">
                                </a>
                            </div>
                            <div class="inner-content">
                                <div class="name">
                                    <a href="https://nhanhoa.com/tin-tuc/nhan-hoa-thong-bao-lich-nghi-le-quoc-khanh-nam-2024.html"
                                        title="Nhân Hòa thông báo Lịch nghỉ lễ Quốc Khánh năm 2024">
                                        Nhân Hòa thông báo Lịch nghỉ lễ Quốc Khánh...
                                    </a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new"><a href="javascript:void(0)"
                                                tabindex="0"><img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png"> Elly
                                                Duong</a><span class="seperate">|</span>30/08/2024 </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4478" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i class="far fa-bookmark"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-6">
                        <div class="item-article-hot item-article-hot-right">
                            <div class="img position-relative">
                                <a href="https://nhanhoa.com/tin-tuc/nhan-hoa-dong-hanh-cung-tan-sinh-vien-2024.html">
                                    <img class="rtbs" align="left"
                                        src="https://uploads.nhanhoa.com/news/1724733398_quay-so-web.jpg" width="130"
                                        height="100" border="0">
                                </a>
                            </div>
                            <div class="inner-content">
                                <div class="name">
                                    <a href="https://nhanhoa.com/tin-tuc/nhan-hoa-dong-hanh-cung-tan-sinh-vien-2024.html"
                                        title="NHÂN HÒA ĐỒNG HÀNH CÙNG TÂN SINH VIÊN 2024 - TỪ ƯỚC MƠ BAY CAO - TỚI TƯƠNG LAI HUY HOÀNG">
                                        NHÂN HÒA ĐỒNG HÀNH CÙNG TÂN SINH VIÊN 2024...
                                    </a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new"><a href="javascript:void(0)"
                                                tabindex="0"><img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png"> Elly
                                                Duong</a><span class="seperate">|</span>27/08/2024 </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4477" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i class="far fa-bookmark"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-6">
                        <div class="item-article-hot item-article-hot-right">
                            <div class="img position-relative">
                                <a href="https://nhanhoa.com/tin-tuc/nhan-hoa-cloud-storage.html">
                                    <img class="rtbs" align="left"
                                        src="https://uploads.nhanhoa.com/news/1724494946_cloud-storage-thumb.png"
                                        width="130" height="100" border="0">
                                </a>
                            </div>
                            <div class="inner-content">
                                <div class="name">
                                    <a href="https://nhanhoa.com/tin-tuc/nhan-hoa-cloud-storage.html"
                                        title="Nhân Hòa Cloud Storage - Lưu trữ thông minh, An tâm vận hành">
                                        Nhân Hòa Cloud Storage - Lưu trữ thông minh,...
                                    </a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new"><a href="javascript:void(0)"
                                                tabindex="0"><img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png"> Elly
                                                Duong</a><span class="seperate">|</span>24/08/2024 </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4476" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i class="far fa-bookmark"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="section-list-article-page bg-light has-decor-ele">
    <img class="decor-element decor-ele-2" src="https://nhanhoa.com/templates/images/v2/element_2.png">
    <img class="decor-element decor-ele-3" src="https://nhanhoa.com/templates/images/v2/element_3.png">
    <img class="decor-element decor-ele-4" src="https://nhanhoa.com/templates/images/v2/element_4.png">
    <div class="container">
        <div class="content">
            <div class="section-title">
                <h2 class="related-title">Tin tức<span class="titledot"></span>
                    <span class="titleline"></span>
                </h2>
                <div class="rt-post-tab link-article">
                    <div class="post-cat-tab">
                        <a class="btn-news-common" href="{{ route('page.news-child', ['id' => 1]) }}">
                            Xem tất cả <i class="fas fa-long-arrow-alt-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="slogan text-left">
                Tìm tất cả các thông tin mới nhất của chúng tôi tại đây!
            </div>
            <div class="row row-small">
               @forelse ($new1 as $index => $item)
                    @if ($index <=7)
                    <div class="col-md-3 col-6">
                        <div class="item-article">
                            <div class="img">
                                <a href="{{ route('page.news-detail', ['slug'=>$item->slug, 'id'=>$item->id]) }}">
                                    <img class="rtbs" align="left"
                                        src="{{ asset($item->logo) }}" width="130"
                                        height="100" border="0">
                                </a>
                                <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 61</span>
                            </div>
                            <div class="inner-content">

                                <div class="name">
                                    <a href="{{ route('page.news-detail', ['slug'=>$item->slug, 'id'=>$item->id]) }}" style="display: -webkit-box;        /* Để sử dụng với thuộc tính line-clamp */
                                    -webkit-line-clamp: 2;       /* Hiển thị tối đa 2 dòng */
                                    -webkit-box-orient: vertical;/* Đặt hướng hộp hiển thị theo chiều dọc */
                                    overflow: hidden;            /* Ẩn nội dung tràn */
                                    text-overflow: ellipsis; "
                                        title="  {{ $item->title }}">
                                        {{ $item->title }}
                                    </a>
                                </div>
                                <div class="description d-none">
                                    {{ $item->title }}
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new"><a href="javascript:void(0)"
                                                tabindex="0"><img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png">
                                                {{ $item->user->name }}</a><span class="seperate">|</span>{{ $item->created_at->format('d-m-Y') }} </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="{{ $item->id }}" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i class="far fa-bookmark"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
               @empty

               @endforelse
                {{-- <div class="col-md-3 col-6">
                    <div class="item-article">
                        <div class="img">
                            <a href="https://nhanhoa.com/tin-tuc/nhan-hoa-dong-hanh-cung-tan-sinh-vien-2024.html">
                                <img class="rtbs" align="left"
                                    src="https://uploads.nhanhoa.com/news/1724733398_quay-so-web.jpg" width="130"
                                    height="100" border="0">
                            </a>
                            <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 59</span>
                        </div>
                        <div class="inner-content">

                            <div class="name">
                                <a href="https://nhanhoa.com/tin-tuc/nhan-hoa-dong-hanh-cung-tan-sinh-vien-2024.html"
                                    title="NHÂN HÒA ĐỒNG HÀNH CÙNG TÂN SINH VIÊN 2024 - TỪ ƯỚC MƠ BAY CAO - TỚI TƯƠNG LAI HUY HOÀNG">
                                    NHÂN HÒA ĐỒNG HÀNH CÙNG TÂN SINH VIÊN 2024...
                                </a>
                            </div>
                            <div class="description d-none">
                                Xin chúc mừng các bạn tân sinh viên đã vượt qua kỳ thi đại học đầy cam go và thử thách
                                để bước chân vào cánh cổng...
                            </div>
                            <div class="d-flex align-items-center justify-content-between meta--wrap">
                                <div class="meta">
                                    <span class="meta--author meta--author-new"><a href="javascript:void(0)"
                                            tabindex="0"><img class="author-avatar"
                                                src="https://uploads.nhanhoa.com/news/no-avatar.png"> Elly
                                            Duong</a><span class="seperate">|</span>27/08/2024 </span>
                                </div>
                                <a nh-btn-action="bookmark" bookmark-id="4477" href="javascript:;"
                                    class="ml-auto bookmark" tabindex="0"><i class="far fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="item-article">
                        <div class="img">
                            <a href="https://nhanhoa.com/tin-tuc/nhan-hoa-cloud-storage.html">
                                <img class="rtbs" align="left"
                                    src="https://uploads.nhanhoa.com/news/1724494946_cloud-storage-thumb.png"
                                    width="130" height="100" border="0">
                            </a>
                            <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 317</span>
                        </div>
                        <div class="inner-content">

                            <div class="name">
                                <a href="https://nhanhoa.com/tin-tuc/nhan-hoa-cloud-storage.html"
                                    title="Nhân Hòa Cloud Storage - Lưu trữ thông minh, An tâm vận hành">
                                    Nhân Hòa Cloud Storage - Lưu trữ thông minh,...
                                </a>
                            </div>
                            <div class="description d-none">
                                Trong kỷ nguyên số, Cloud Storage không chỉ là công cụ hỗ trợ mà còn là chìa khóa giúp
                                doanh nghiệp bứt phá hiệu quả công...
                            </div>
                            <div class="d-flex align-items-center justify-content-between meta--wrap">
                                <div class="meta">
                                    <span class="meta--author meta--author-new"><a href="javascript:void(0)"
                                            tabindex="0"><img class="author-avatar"
                                                src="https://uploads.nhanhoa.com/news/no-avatar.png"> Elly
                                            Duong</a><span class="seperate">|</span>24/08/2024 </span>
                                </div>
                                <a nh-btn-action="bookmark" bookmark-id="4476" href="javascript:;"
                                    class="ml-auto bookmark" tabindex="0"><i class="far fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="item-article">
                        <div class="img">
                            <a href="https://nhanhoa.com/tin-tuc/thue-website.html">
                                <img class="rtbs" align="left"
                                    src="https://uploads.nhanhoa.com/news/1724408937_thue-website-thumb.jpg" width="130"
                                    height="100" border="0">
                            </a>
                            <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 264</span>
                        </div>
                        <div class="inner-content">

                            <div class="name">
                                <a href="https://nhanhoa.com/tin-tuc/thue-website.html"
                                    title="Thuê website: Sở hữu trang web TOP 1 chỉ sau vài phút với giá hời?">
                                    Thuê website: Sở hữu trang web TOP 1 chỉ sau...
                                </a>
                            </div>
                            <div class="description d-none">
                                Để thiết kế và SEO web lên TOP cần có thời gian và một khoản phí nhất định. Vì vậy, nếu
                                bạn muốn tìm kiếm khách...
                            </div>
                            <div class="d-flex align-items-center justify-content-between meta--wrap">
                                <div class="meta">
                                    <span class="meta--author meta--author-new"><a href="javascript:void(0)"
                                            tabindex="0"><img class="author-avatar"
                                                src="https://uploads.nhanhoa.com/news/no-avatar.png"> Elly
                                            Duong</a><span class="seperate">|</span>23/08/2024 </span>
                                </div>
                                <a nh-btn-action="bookmark" bookmark-id="4475" href="javascript:;"
                                    class="ml-auto bookmark" tabindex="0"><i class="far fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="item-article">
                        <div class="img">
                            <a
                                href="https://nhanhoa.com/tin-tuc/nhan-hoa-dong-hanh-cung-doanh-nghiep-ho-kinh-doanh-trong-cac-dich-vu-so-su-dung-ten-mien-vn-tai-hai-duong.html">
                                <img class="rtbs" align="left"
                                    src="https://uploads.nhanhoa.com/news/1724299331_su-kien-hai-duong-thumb.png"
                                    width="130" height="100" border="0">
                            </a>
                            <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 90</span>
                        </div>
                        <div class="inner-content">

                            <div class="name">
                                <a href="https://nhanhoa.com/tin-tuc/nhan-hoa-dong-hanh-cung-doanh-nghiep-ho-kinh-doanh-trong-cac-dich-vu-so-su-dung-ten-mien-vn-tai-hai-duong.html"
                                    title="Nhân Hòa đồng hành cùng doanh nghiệp, hộ kinh doanh trong các dịch vụ số sử dụng tên miền “.VN” tại Hải Dương">
                                    Nhân Hòa đồng hành cùng doanh nghiệp, hộ...
                                </a>
                            </div>
                            <div class="description d-none">
                                Ngày 20/08/2024, tại huyện Cẩm Giàng, tỉnh Hải Dương diễn ra Chương trình Thúc đẩy, hỗ
                                trợ người dân, doanh nghiệp, hộ...
                            </div>
                            <div class="d-flex align-items-center justify-content-between meta--wrap">
                                <div class="meta">
                                    <span class="meta--author meta--author-new"><a href="javascript:void(0)"
                                            tabindex="0"><img class="author-avatar"
                                                src="https://uploads.nhanhoa.com/news/no-avatar.png"> Elly
                                            Duong</a><span class="seperate">|</span>22/08/2024 </span>
                                </div>
                                <a nh-btn-action="bookmark" bookmark-id="4473" href="javascript:;"
                                    class="ml-auto bookmark" tabindex="0"><i class="far fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="item-article">
                        <div class="img">
                            <a
                                href="https://nhanhoa.com/tin-tuc/esim-singapore-toc-do-sieu-nhanh-cho-du-lich-singapore.html">
                                <img class="rtbs" align="left"
                                    src="https://uploads.nhanhoa.com/news/1723804044_esim-singapore-1.webp" width="130"
                                    height="100" border="0">
                            </a>
                            <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 113</span>
                        </div>
                        <div class="inner-content">

                            <div class="name">
                                <a href="https://nhanhoa.com/tin-tuc/esim-singapore-toc-do-sieu-nhanh-cho-du-lich-singapore.html"
                                    title="eSIM Singapore tốc độ siêu nhanh cho du lịch Singapore">
                                    eSIM Singapore tốc độ siêu nhanh cho du lịch...
                                </a>
                            </div>
                            <div class="description d-none">
                                Singapore – đảo quốc sư tử với nhịp sống hiện đại, những tòa nhà chọc trời và những khu
                                vườn tuyệt đẹp. Đây...
                            </div>
                            <div class="d-flex align-items-center justify-content-between meta--wrap">
                                <div class="meta">
                                    <span class="meta--author meta--author-new"><a href="javascript:void(0)"
                                            tabindex="0"><img class="author-avatar"
                                                src="https://uploads.nhanhoa.com/news/no-avatar.png"> LeThiMai</a><span
                                            class="seperate">|</span>16/08/2024 </span>
                                </div>
                                <a nh-btn-action="bookmark" bookmark-id="4472" href="javascript:;"
                                    class="ml-auto bookmark" tabindex="0"><i class="far fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="item-article">
                        <div class="img">
                            <a
                                href="https://nhanhoa.com/tin-tuc/esim-han-quoc-bi-kip-ket-noi-khi-toi-xu-so-kimchi.html">
                                <img class="rtbs" align="left"
                                    src="https://uploads.nhanhoa.com/news/1723801897_esim-han-quoc-1.webp" width="130"
                                    height="100" border="0">
                            </a>
                            <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 83</span>
                        </div>
                        <div class="inner-content">

                            <div class="name">
                                <a href="https://nhanhoa.com/tin-tuc/esim-han-quoc-bi-kip-ket-noi-khi-toi-xu-so-kimchi.html"
                                    title="eSIM Hàn Quốc: Bí kíp kết nối khi tới “Xứ sở Kimchi”">
                                    eSIM Hàn Quốc: Bí kíp kết nối khi tới “Xứ...
                                </a>
                            </div>
                            <div class="description d-none">
                                eSIM, viết tắt của Embedded Subscriber Identity Module, là một công nghệ mới cho phép
                                người dùng kết nối với các mạng di động...
                            </div>
                            <div class="d-flex align-items-center justify-content-between meta--wrap">
                                <div class="meta">
                                    <span class="meta--author meta--author-new"><a href="javascript:void(0)"
                                            tabindex="0"><img class="author-avatar"
                                                src="https://uploads.nhanhoa.com/news/no-avatar.png"> LeThiMai</a><span
                                            class="seperate">|</span>16/08/2024 </span>
                                </div>
                                <a nh-btn-action="bookmark" bookmark-id="4471" href="javascript:;"
                                    class="ml-auto bookmark" tabindex="0"><i class="far fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="item-article">
                        <div class="img">
                            <a
                                href="https://nhanhoa.com/tin-tuc/esim-du-lich-thai-lan-chi-5-phut-kich-hoat-su-dung-ngay33.html">
                                <img class="rtbs" align="left"
                                    src="https://uploads.nhanhoa.com/news/1723799508_esim-du-lich-thai-lan-1.webp"
                                    width="130" height="100" border="0">
                            </a>
                            <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 83</span>
                        </div>
                        <div class="inner-content">

                            <div class="name">
                                <a href="https://nhanhoa.com/tin-tuc/esim-du-lich-thai-lan-chi-5-phut-kich-hoat-su-dung-ngay33.html"
                                    title="eSIM du lịch Thái Lan chỉ 5 phút kích hoạt, sử dụng ngay!">
                                    eSIM du lịch Thái Lan chỉ 5 phút kích hoạt,...
                                </a>
                            </div>
                            <div class="description d-none">
                                Khi đặt chân đến xứ sở chùa vàng, Thái Lan, bạn không chỉ bị cuốn hút bởi vẻ đẹp của
                                những ngôi đền lấp lánh,...
                            </div>
                            <div class="d-flex align-items-center justify-content-between meta--wrap">
                                <div class="meta">
                                    <span class="meta--author meta--author-new"><a href="javascript:void(0)"
                                            tabindex="0"><img class="author-avatar"
                                                src="https://uploads.nhanhoa.com/news/no-avatar.png"> LeThiMai</a><span
                                            class="seperate">|</span>16/08/2024 </span>
                                </div>
                                <a nh-btn-action="bookmark" bookmark-id="4470" href="javascript:;"
                                    class="ml-auto bookmark" tabindex="0"><i class="far fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!--end row-->


        </div>
    </div>
</div>

<div class="section-list-article-page">
    <img class="decor-element decor-ele-2" src="https://nhanhoa.com/templates/images/v2/element_2.png">
    <img class="decor-element decor-ele-3" src="https://nhanhoa.com/templates/images/v2/element_3.png">
    <img class="decor-element decor-ele-4" src="https://nhanhoa.com/templates/images/v2/element_4.png">
    <div class="container">
        <div class="content">
            <div class="section-title">
                <h2 class="related-title">Thông báo<span class="titledot"></span>
                    <span class="titleline"></span>
                </h2>
                <div class="rt-post-tab link-article">
                    <div class="post-cat-tab">
                        <a class="btn-news-common"href="{{ route('page.news-child', ['id' => 2]) }}">
                            Xem tất cả <i class="fas fa-long-arrow-alt-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="slogan text-left">
                Tìm tất cả các thông tin mới nhất của chúng tôi tại đây!
            </div>
            <div class="row row-small">
                @forelse ($new2 as $index => $item)
                @if ($index <=7)
                <div class="col-md-3 col-6">
                    <div class="item-article">
                        <div class="img">
                            <a href="{{ route('page.news-detail', ['slug'=>$item->slug, 'id'=>$item->id]) }}">
                                <img class="rtbs" align="left"
                                    src="{{ asset($item->logo) }}" width="130"
                                    height="100" border="0">
                            </a>
                            <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 61</span>
                        </div>
                        <div class="inner-content">

                            <div class="name">
                                <a href="{{ route('page.news-detail', ['slug'=>$item->slug, 'id'=>$item->id]) }}" style="display: -webkit-box;        /* Để sử dụng với thuộc tính line-clamp */
                                -webkit-line-clamp: 2;       /* Hiển thị tối đa 2 dòng */
                                -webkit-box-orient: vertical;/* Đặt hướng hộp hiển thị theo chiều dọc */
                                overflow: hidden;            /* Ẩn nội dung tràn */
                                text-overflow: ellipsis; "
                                    title="  {{ $item->title }}">
                                    {{ $item->title }}
                                </a>
                            </div>
                            <div class="description d-none">
                                {{ $item->title }}
                            </div>
                            <div class="d-flex align-items-center justify-content-between meta--wrap">
                                <div class="meta">
                                    <span class="meta--author meta--author-new"><a href="javascript:void(0)"
                                            tabindex="0"><img class="author-avatar"
                                                src="https://uploads.nhanhoa.com/news/no-avatar.png">
                                            {{ $item->user->name }}</a><span class="seperate">|</span>{{ $item->created_at->format('d-m-Y') }} </span>
                                </div>
                                <a nh-btn-action="bookmark" bookmark-id="{{ $item->id }}" href="javascript:;"
                                    class="ml-auto bookmark" tabindex="0"><i class="far fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
           @empty

           @endforelse
            </div>
            <!--end row-->
            {{-- <div class="row mt-5">
                <div class="col-12"><a class="news-promotion-banner" href="https://web4s.vn/" target="_blank"><img
                            src="https://nhanhoa.com/public/banner-web4s-trang-chu.jpg"></a> </div>
            </div> --}}

        </div>
    </div>
</div>

<div class="section-list-article-page bg-light has-decor-ele">
    <img class="decor-element decor-ele-2" src="https://nhanhoa.com/templates/images/v2/element_2.png">
    <img class="decor-element decor-ele-3" src="https://nhanhoa.com/templates/images/v2/element_3.png">
    <img class="decor-element decor-ele-4" src="https://nhanhoa.com/templates/images/v2/element_4.png">
    <div class="container">
        <div class="content">
            <div class="section-title">
                <h2 class="related-title">Tuyển dụng<span class="titledot"></span>
                    <span class="titleline"></span>
                </h2>
                <div class="rt-post-tab link-article">
                    <div class="post-cat-tab">
                        <a class="btn-news-common" href="{{ route('page.news-child', ['id' => 3]) }}">
                            Xem tất cả <i class="fas fa-long-arrow-alt-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="slogan text-left">
                Tuyển dụng
            </div>
            <div class="row row-small">
                @forelse ($new3 as $index => $item)
                @if ($index <=7)
                <div class="col-md-3 col-6">
                    <div class="item-article">
                        <div class="img">
                            <a href="{{ route('page.news-detail', ['slug'=>$item->slug, 'id'=>$item->id]) }}">
                                <img class="rtbs" align="left"
                                    src="{{ asset($item->logo) }}" width="130"
                                    height="100" border="0">
                            </a>
                            <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 61</span>
                        </div>
                        <div class="inner-content">

                            <div class="name">
                                <a href="{{ route('page.news-detail', ['slug'=>$item->slug, 'id'=>$item->id]) }}" style="display: -webkit-box;        /* Để sử dụng với thuộc tính line-clamp */
                                -webkit-line-clamp: 2;       /* Hiển thị tối đa 2 dòng */
                                -webkit-box-orient: vertical;/* Đặt hướng hộp hiển thị theo chiều dọc */
                                overflow: hidden;            /* Ẩn nội dung tràn */
                                text-overflow: ellipsis; "
                                    title="  {{ $item->title }}">
                                    {{ $item->title }}
                                </a>
                            </div>
                            <div class="description d-none">
                                {{ $item->title }}
                            </div>
                            <div class="d-flex align-items-center justify-content-between meta--wrap">
                                <div class="meta">
                                    <span class="meta--author meta--author-new"><a href="javascript:void(0)"
                                            tabindex="0"><img class="author-avatar"
                                                src="https://uploads.nhanhoa.com/news/no-avatar.png">
                                            {{ $item->user->name }}</a><span class="seperate">|</span>{{ $item->created_at->format('d-m-Y') }} </span>
                                </div>
                                <a nh-btn-action="bookmark" bookmark-id="{{ $item->id }}" href="javascript:;"
                                    class="ml-auto bookmark" tabindex="0"><i class="far fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
           @empty

           @endforelse
            </div>
            <!--end row-->


        </div>
    </div>
</div>

<div class="section-list-article-page">
    <img class="decor-element decor-ele-2" src="https://nhanhoa.com/templates/images/v2/element_2.png">
    <img class="decor-element decor-ele-3" src="https://nhanhoa.com/templates/images/v2/element_3.png">
    <img class="decor-element decor-ele-4" src="https://nhanhoa.com/templates/images/v2/element_4.png">
    <div class="container">
        <div class="content">
            <div class="section-title">
                <h2 class="related-title">Công nghệ<span class="titledot"></span>
                    <span class="titleline"></span>
                </h2>
                <div class="rt-post-tab link-article">
                    <div class="post-cat-tab">
                        <a class="btn-news-common" href="{{ route('page.news-child', ['id' => 4]) }}">
                            Xem tất cả <i class="fas fa-long-arrow-alt-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="slogan text-left">
                {{ config('app.url') }}
            </div>
            <div class="row row-small">
                @forelse ($new4 as $index => $item)
                    @if ($index <=7)
                    <div class="col-md-3 col-6">
                        <div class="item-article">
                            <div class="img">
                                <a href="{{ route('page.news-detail', ['slug'=>$item->slug, 'id'=>$item->id]) }}">
                                    <img class="rtbs" align="left"
                                        src="{{ asset($item->logo) }}" width="130"
                                        height="100" border="0">
                                </a>
                                <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 61</span>
                            </div>
                            <div class="inner-content">

                                <div class="name">
                                    <a href="{{ route('page.news-detail', ['slug'=>$item->slug, 'id'=>$item->id]) }}" style="display: -webkit-box;        /* Để sử dụng với thuộc tính line-clamp */
                                    -webkit-line-clamp: 2;       /* Hiển thị tối đa 2 dòng */
                                    -webkit-box-orient: vertical;/* Đặt hướng hộp hiển thị theo chiều dọc */
                                    overflow: hidden;            /* Ẩn nội dung tràn */
                                    text-overflow: ellipsis; "
                                        title="  {{ $item->title }}">
                                        {{ $item->title }}
                                    </a>
                                </div>
                                <div class="description d-none">
                                    {{ $item->title }}
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new"><a href="javascript:void(0)"
                                                tabindex="0"><img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png">
                                                {{ $item->user->name }}</a><span class="seperate">|</span>{{ $item->created_at->format('d-m-Y') }} </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="{{ $item->id }}" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i class="far fa-bookmark"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
               @empty

               @endforelse
            </div>
            <!--end row-->


        </div>
    </div>
</div>

@include('client.include.section-connect-office')
@endsection
