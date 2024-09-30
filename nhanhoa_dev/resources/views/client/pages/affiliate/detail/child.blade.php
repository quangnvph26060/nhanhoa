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
                    {{-- <div class="col-md-4 col-lg-4 col-12">
                        <div class="item-article">
                            <div class="img">
                                <a
                                    href="https://nhanhoa.com/tin-tuc/custom-domain-la-gi-top-5-loi-ich-quan-trong-nhat-cua-custom-domain.html">
                                    <img class='rtbs' align='left'
                                        src='https://uploads.nhanhoa.com/news/1726888223_custom-domain-1.webp'
                                        width='130' height='100' border='0'>
                                </a>
                                <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 4909</span>
                            </div>
                            <div class="inner-content">

                                <div class="name">
                                    <a
                                        href="https://nhanhoa.com/tin-tuc/custom-domain-la-gi-top-5-loi-ich-quan-trong-nhat-cua-custom-domain.html">
                                        Custom Domain là gì? Top 5 lợi ích [QUAN TRỌNG]...
                                    </a>
                                </div>
                                <div class="description d-none">
                                    Custom domain là thuật ngữ dùng để chỉ tên miền tùy chỉnh mà doanh nghiệp có thể sử
                                    dụng thay vì tên miền mặc định...
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new">
                                            <a href="javascript:void(0)" tabindex="0">
                                                <img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png" /> LeThiMai
                                            </a>
                                            <span class="seperate">|</span>21/09/2024
                                        </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4492" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i
                                            class="fa-light fa-bookmark fs-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-12">
                        <div class="item-article">
                            <div class="img">
                                <a
                                    href="https://nhanhoa.com/tin-tuc/cap-nhat-5-dia-chi-thue-vps-nuoc-ngoai-gia-re-chat-luong-tot-nhat-hien-nay.html">
                                    <img class='rtbs' align='left'
                                        src='https://uploads.nhanhoa.com/news/1726802422_vps-nuoc-ngoai-1.webp'
                                        width='130' height='100' border='0'>
                                </a>
                                <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 458</span>
                            </div>
                            <div class="inner-content">

                                <div class="name">
                                    <a
                                        href="https://nhanhoa.com/tin-tuc/cap-nhat-5-dia-chi-thue-vps-nuoc-ngoai-gia-re-chat-luong-tot-nhat-hien-nay.html">
                                        [CẬP NHẬT] 5 địa chỉ thuê VPS nước ngoài...
                                    </a>
                                </div>
                                <div class="description d-none">
                                    Cùng với sự phát triển của công nghệ, nhu cầu về các giải pháp VPS linh hoạt và hiệu
                                    quả ngày càng tăng. VPS nước...
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new">
                                            <a href="javascript:void(0)" tabindex="0">
                                                <img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png" /> LeThiMai
                                            </a>
                                            <span class="seperate">|</span>20/09/2024
                                        </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4491" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i
                                            class="fa-light fa-bookmark fs-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-12">
                        <div class="item-article">
                            <div class="img">
                                <a
                                    href="https://nhanhoa.com/tin-tuc/tai-sao-doanh-nghiep-can-bao-tri-website-loi-ich-ban-can-biet.html">
                                    <img class='rtbs' align='left'
                                        src='https://uploads.nhanhoa.com/news/1726797554_bao-tri-website-1.webp'
                                        width='130' height='100' border='0'>
                                </a>
                                <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 443</span>
                            </div>
                            <div class="inner-content">

                                <div class="name">
                                    <a
                                        href="https://nhanhoa.com/tin-tuc/tai-sao-doanh-nghiep-can-bao-tri-website-loi-ich-ban-can-biet.html">
                                        Tại sao doanh nghiệp cần bảo trì Website?...
                                    </a>
                                </div>
                                <div class="description d-none">
                                    Bảo trì website là quá trình duy trì và cập nhật website để đảm bảo hoạt động ổn
                                    định, hiệu quả và an toàn. Việc...
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new">
                                            <a href="javascript:void(0)" tabindex="0">
                                                <img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png" /> LeThiMai
                                            </a>
                                            <span class="seperate">|</span>20/09/2024
                                        </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4490" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i
                                            class="fa-light fa-bookmark fs-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-12">
                        <div class="item-article">
                            <div class="img">
                                <a
                                    href="https://nhanhoa.com/tin-tuc/kham-pha-ten-mien-iovn-bung-no-suc-nong-ten-mien-danh-cho-website-cong-nghe.html">
                                    <img class='rtbs' align='left'
                                        src='https://uploads.nhanhoa.com/news/1726716711_ten-mien-io-vn-1.webp'
                                        width='130' height='100' border='0'>
                                </a>
                                <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 496</span>
                            </div>
                            <div class="inner-content">

                                <div class="name">
                                    <a
                                        href="https://nhanhoa.com/tin-tuc/kham-pha-ten-mien-iovn-bung-no-suc-nong-ten-mien-danh-cho-website-cong-nghe.html">
                                        Khám phá tên miền .io.vn: Bùng nổ sức nóng...
                                    </a>
                                </div>
                                <div class="description d-none">
                                    Khác biệt hoàn toàn với các tên miền truyền thống, .io.vn đang nổi lên như một lựa
                                    chọn thú vị và độc đáo trong thế...
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new">
                                            <a href="javascript:void(0)" tabindex="0">
                                                <img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png" /> LeThiMai
                                            </a>
                                            <span class="seperate">|</span>19/09/2024
                                        </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4489" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i
                                            class="fa-light fa-bookmark fs-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-12">
                        <div class="item-article">
                            <div class="img">
                                <a
                                    href="https://nhanhoa.com/tin-tuc/top-3-san-dau-gia-ten-mien-uy-tin-nhat-hien-nay.html">
                                    <img class='rtbs' align='left'
                                        src='https://uploads.nhanhoa.com/news/1726717966_san-dau-gia-ten-mien-1.webp'
                                        width='130' height='100' border='0'>
                                </a>
                                <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 403</span>
                            </div>
                            <div class="inner-content">

                                <div class="name">
                                    <a
                                        href="https://nhanhoa.com/tin-tuc/top-3-san-dau-gia-ten-mien-uy-tin-nhat-hien-nay.html">
                                        Top 3+ sàn đấu giá tên miền uy tín nhất...
                                    </a>
                                </div>
                                <div class="description d-none">
                                    Bạn có biết rằng việc sở hữu một tên miền độc đáo có thể mang lại lợi ích kinh doanh
                                    bất ngờ? Đấu giá tên miền...
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new">
                                            <a href="javascript:void(0)" tabindex="0">
                                                <img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png" /> LeThiMai
                                            </a>
                                            <span class="seperate">|</span>19/09/2024
                                        </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4488" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i
                                            class="fa-light fa-bookmark fs-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-12">
                        <div class="item-article">
                            <div class="img">
                                <a
                                    href="https://nhanhoa.com/tin-tuc/bi-quyet-dau-gia-ten-mien-thanh-cong-huong-dan-chi-tiet-tung-buoc.html">
                                    <img class='rtbs' align='left'
                                        src='https://uploads.nhanhoa.com/news/1726626740_dau-gia-ten-mien-1.webp'
                                        width='130' height='100' border='0'>
                                </a>
                                <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 450</span>
                            </div>
                            <div class="inner-content">

                                <div class="name">
                                    <a
                                        href="https://nhanhoa.com/tin-tuc/bi-quyet-dau-gia-ten-mien-thanh-cong-huong-dan-chi-tiet-tung-buoc.html">
                                        Bí quyết đấu giá tên miền thành công:...
                                    </a>
                                </div>
                                <div class="description d-none">
                                    Bạn có biết rằng một tên miền ngắn gọn có thể giúp doanh nghiệp của bạn tăng trưởng
                                    vượt bậc? Đấu giá tên miền...
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new">
                                            <a href="javascript:void(0)" tabindex="0">
                                                <img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png" /> LeThiMai
                                            </a>
                                            <span class="seperate">|</span>18/09/2024
                                        </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4487" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i
                                            class="fa-light fa-bookmark fs-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-12">
                        <div class="item-article">
                            <div class="img">
                                <a
                                    href="https://nhanhoa.com/tin-tuc/7-cach-dinh-gia-ten-mien-chuan-xac-hieu-qua-nhanh-nhat.html">
                                    <img class='rtbs' align='left'
                                        src='https://uploads.nhanhoa.com/news/1726624030_dinh-gia-ten-mien-1.webp'
                                        width='130' height='100' border='0'>
                                </a>
                                <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 442</span>
                            </div>
                            <div class="inner-content">

                                <div class="name">
                                    <a
                                        href="https://nhanhoa.com/tin-tuc/7-cach-dinh-gia-ten-mien-chuan-xac-hieu-qua-nhanh-nhat.html">
                                        7 cách định giá tên miền [CHUẨN XÁC - HIỆU...
                                    </a>
                                </div>
                                <div class="description d-none">
                                    Định giá tên miền là một quá trình phức tạp, đòi hỏi sự kết hợp của nhiều yếu tố
                                    khác nhau, từ các yếu tố khách...
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new">
                                            <a href="javascript:void(0)" tabindex="0">
                                                <img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png" /> LeThiMai
                                            </a>
                                            <span class="seperate">|</span>18/09/2024
                                        </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4486" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i
                                            class="fa-light fa-bookmark fs-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-12">
                        <div class="item-article">
                            <div class="img">
                                <a
                                    href="https://nhanhoa.com/tin-tuc/buoc-dot-pha-voi-ten-mien-aivn-tao-nen-uu-the-vuot-troi-trong-ky-nguyen-tri-tue-nhan-tao.html">
                                    <img class='rtbs' align='left'
                                        src='https://uploads.nhanhoa.com/news/1726539786_ten-mien-ai-vn-1.webp'
                                        width='130' height='100' border='0'>
                                </a>
                                <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 456</span>
                            </div>
                            <div class="inner-content">

                                <div class="name">
                                    <a
                                        href="https://nhanhoa.com/tin-tuc/buoc-dot-pha-voi-ten-mien-aivn-tao-nen-uu-the-vuot-troi-trong-ky-nguyen-tri-tue-nhan-tao.html">
                                        Bước đột phá với tên miền .ai.vn: Tạo...
                                    </a>
                                </div>
                                <div class="description d-none">
                                    Từ ngày 01/06/2023, tên miền .ai.vn chính thức được mở rộng, tạo ra một không gian
                                    trực tuyến chuyên biệt cho các doanh...
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new">
                                            <a href="javascript:void(0)" tabindex="0">
                                                <img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png" /> LeThiMai
                                            </a>
                                            <span class="seperate">|</span>17/09/2024
                                        </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4485" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i
                                            class="fa-light fa-bookmark fs-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-12">
                        <div class="item-article">
                            <div class="img">
                                <a href="https://nhanhoa.com/tin-tuc/email-marketing-sendnow.html">
                                    <img class='rtbs' align='left'
                                        src='https://uploads.nhanhoa.com/news/1726130354_email-sendnow-thumb.jpg'
                                        width='130' height='100' border='0'>
                                </a>
                                <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 527</span>
                            </div>
                            <div class="inner-content">

                                <div class="name">
                                    <a href="https://nhanhoa.com/tin-tuc/email-marketing-sendnow.html">
                                        Sendnow - Giải pháp đột phá chiến lược...
                                    </a>
                                </div>
                                <div class="description d-none">
                                    Email Marketing không chỉ là công cụ tiếp thị mà còn là cầu nối giúp doanh nghiệp
                                    xây dựng mối quan hệ bền vững với...
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new">
                                            <a href="javascript:void(0)" tabindex="0">
                                                <img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png" /> Elly Duong
                                            </a>
                                            <span class="seperate">|</span>12/09/2024
                                        </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4484" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i
                                            class="fa-light fa-bookmark fs-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-12">
                        <div class="item-article">
                            <div class="img">
                                <a href="https://nhanhoa.com/tin-tuc/cong-ty-cho-thue-hosting.html">
                                    <img class='rtbs' align='left'
                                        src='https://uploads.nhanhoa.com/news/1725934363_hosting-gia-re-2.png'
                                        width='130' height='100' border='0'>
                                </a>
                                <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 645</span>
                            </div>
                            <div class="inner-content">

                                <div class="name">
                                    <a href="https://nhanhoa.com/tin-tuc/cong-ty-cho-thue-hosting.html">
                                        [MỚI NHẤT] 11+ Công ty cho thuê Hosting giá...
                                    </a>
                                </div>
                                <div class="description d-none">
                                    Trong thời đại bùng nổ của các sàn thương mại điện tử, nhu cầu thuê hosting chất
                                    lượng đang ngày càng tăng cao để...
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new">
                                            <a href="javascript:void(0)" tabindex="0">
                                                <img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png" /> Elly Duong
                                            </a>
                                            <span class="seperate">|</span>10/09/2024
                                        </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4483" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i
                                            class="fa-light fa-bookmark fs-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-12">
                        <div class="item-article">
                            <div class="img">
                                <a href="https://nhanhoa.com/tin-tuc/thue-website-ban-hang.html">
                                    <img class='rtbs' align='left'
                                        src='https://uploads.nhanhoa.com/news/1725851309_thue-website-ban-hang-2.jpg'
                                        width='130' height='100' border='0'>
                                </a>
                                <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 520</span>
                            </div>
                            <div class="inner-content">

                                <div class="name">
                                    <a href="https://nhanhoa.com/tin-tuc/thue-website-ban-hang.html">
                                        Thuê website bán hàng đã làm SEO và lên TOP...
                                    </a>
                                </div>
                                <div class="description d-none">
                                    Trong bối cảnh kinh doanh online bùng nổ, doanh nghiệp cần nhanh chóng chuyển đổi để
                                    không bị tụt hậu. Tuy nhiên, quá trình...
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new">
                                            <a href="javascript:void(0)" tabindex="0">
                                                <img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png" /> Elly Duong
                                            </a>
                                            <span class="seperate">|</span>09/09/2024
                                        </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4482" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i
                                            class="fa-light fa-bookmark fs-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-12">
                        <div class="item-article">
                            <div class="img">
                                <a href="https://nhanhoa.com/tin-tuc/nvme-cloud-vps-nhan-hoa.html">
                                    <img class='rtbs' align='left'
                                        src='https://uploads.nhanhoa.com/news/1725010086_nvme-vps-thumb.jpg' width='130'
                                        height='100' border='0'>
                                </a>
                                <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 581</span>
                            </div>
                            <div class="inner-content">

                                <div class="name">
                                    <a href="https://nhanhoa.com/tin-tuc/nvme-cloud-vps-nhan-hoa.html">
                                        NVMe Cloud VPS - Giải pháp lưu trữ website “siêu...
                                    </a>
                                </div>
                                <div class="description d-none">
                                    Để chiếm được ưu thế trong thời đại công nghệ, hiệu suất và tốc độ là hai yếu tố
                                    quyết định then chốt. NVMe...
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new">
                                            <a href="javascript:void(0)" tabindex="0">
                                                <img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png" /> Elly Duong
                                            </a>
                                            <span class="seperate">|</span>30/08/2024
                                        </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4479" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i
                                            class="fa-light fa-bookmark fs-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-12">
                        <div class="item-article">
                            <div class="img">
                                <a href="https://nhanhoa.com/tin-tuc/nhan-hoa-dong-hanh-cung-tan-sinh-vien-2024.html">
                                    <img class='rtbs' align='left'
                                        src='https://uploads.nhanhoa.com/news/1724733398_quay-so-web.jpg' width='130'
                                        height='100' border='0'>
                                </a>
                                <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 542</span>
                            </div>
                            <div class="inner-content">

                                <div class="name">
                                    <a
                                        href="https://nhanhoa.com/tin-tuc/nhan-hoa-dong-hanh-cung-tan-sinh-vien-2024.html">
                                        Chúng Tôi ĐỒNG HÀNH CÙNG TÂN SINH VIÊN 2024...
                                    </a>
                                </div>
                                <div class="description d-none">
                                    Xin chúc mừng các bạn tân sinh viên đã vượt qua kỳ thi đại học đầy cam go và thử
                                    thách để bước chân vào cánh cổng...
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new">
                                            <a href="javascript:void(0)" tabindex="0">
                                                <img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png" /> Elly Duong
                                            </a>
                                            <span class="seperate">|</span>27/08/2024
                                        </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4477" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i
                                            class="fa-light fa-bookmark fs-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-12">
                        <div class="item-article">
                            <div class="img">
                                <a href="https://nhanhoa.com/tin-tuc/nhan-hoa-cloud-storage.html">
                                    <img class='rtbs' align='left'
                                        src='https://uploads.nhanhoa.com/news/1724494946_cloud-storage-thumb.png'
                                        width='130' height='100' border='0'>
                                </a>
                                <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 810</span>
                            </div>
                            <div class="inner-content">

                                <div class="name">
                                    <a href="https://nhanhoa.com/tin-tuc/nhan-hoa-cloud-storage.html">
                                        Chúng Tôi Cloud Storage - Lưu trữ thông minh,...
                                    </a>
                                </div>
                                <div class="description d-none">
                                    Trong kỷ nguyên số, Cloud Storage không chỉ là công cụ hỗ trợ mà còn là chìa khóa
                                    giúp doanh nghiệp bứt phá hiệu quả công...
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new">
                                            <a href="javascript:void(0)" tabindex="0">
                                                <img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png" /> Elly Duong
                                            </a>
                                            <span class="seperate">|</span>24/08/2024
                                        </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4476" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i
                                            class="fa-light fa-bookmark fs-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-12">
                        <div class="item-article">
                            <div class="img">
                                <a href="https://nhanhoa.com/tin-tuc/thue-website.html">
                                    <img class='rtbs' align='left'
                                        src='https://uploads.nhanhoa.com/news/1724408937_thue-website-thumb.jpg'
                                        width='130' height='100' border='0'>
                                </a>
                                <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 731</span>
                            </div>
                            <div class="inner-content">

                                <div class="name">
                                    <a href="https://nhanhoa.com/tin-tuc/thue-website.html">
                                        Thuê website: Sở hữu trang web TOP 1 chỉ sau...
                                    </a>
                                </div>
                                <div class="description d-none">
                                    Để thiết kế và SEO web lên TOP cần có thời gian và một khoản phí nhất định. Vì vậy,
                                    nếu bạn muốn tìm kiếm khách...
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new">
                                            <a href="javascript:void(0)" tabindex="0">
                                                <img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png" /> Elly Duong
                                            </a>
                                            <span class="seperate">|</span>23/08/2024
                                        </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4475" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i
                                            class="fa-light fa-bookmark fs-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-12">
                        <div class="item-article">
                            <div class="img">
                                <a
                                    href="https://nhanhoa.com/tin-tuc/nhan-hoa-dong-hanh-cung-doanh-nghiep-ho-kinh-doanh-trong-cac-dich-vu-so-su-dung-ten-mien-vn-tai-hai-duong.html">
                                    <img class='rtbs' align='left'
                                        src='https://uploads.nhanhoa.com/news/1724299331_su-kien-hai-duong-thumb.png'
                                        width='130' height='100' border='0'>
                                </a>
                                <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 556</span>
                            </div>
                            <div class="inner-content">

                                <div class="name">
                                    <a
                                        href="https://nhanhoa.com/tin-tuc/nhan-hoa-dong-hanh-cung-doanh-nghiep-ho-kinh-doanh-trong-cac-dich-vu-so-su-dung-ten-mien-vn-tai-hai-duong.html">
                                        Chúng Tôi đồng hành cùng doanh nghiệp, hộ...
                                    </a>
                                </div>
                                <div class="description d-none">
                                    Ngày 20/08/2024, tại huyện Cẩm Giàng, tỉnh Hải Dương diễn ra Chương trình Thúc đẩy,
                                    hỗ trợ người dân, doanh nghiệp, hộ...
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new">
                                            <a href="javascript:void(0)" tabindex="0">
                                                <img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png" /> Elly Duong
                                            </a>
                                            <span class="seperate">|</span>22/08/2024
                                        </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4473" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i
                                            class="fa-light fa-bookmark fs-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-12">
                        <div class="item-article">
                            <div class="img">
                                <a
                                    href="https://nhanhoa.com/tin-tuc/esim-singapore-toc-do-sieu-nhanh-cho-du-lich-singapore.html">
                                    <img class='rtbs' align='left'
                                        src='https://uploads.nhanhoa.com/news/1723804044_esim-singapore-1.webp'
                                        width='130' height='100' border='0'>
                                </a>
                                <span class="news-view-thumb"> <i class="fa-regular fa-eye"></i> 601</span>
                            </div>
                            <div class="inner-content">

                                <div class="name">
                                    <a
                                        href="https://nhanhoa.com/tin-tuc/esim-singapore-toc-do-sieu-nhanh-cho-du-lich-singapore.html">
                                        eSIM Singapore tốc độ siêu nhanh cho du lịch...
                                    </a>
                                </div>
                                <div class="description d-none">
                                    Singapore – đảo quốc sư tử với nhịp sống hiện đại, những tòa nhà chọc trời và những
                                    khu vườn tuyệt đẹp. Đây...
                                </div>
                                <div class="d-flex align-items-center justify-content-between meta--wrap">
                                    <div class="meta">
                                        <span class="meta--author meta--author-new">
                                            <a href="javascript:void(0)" tabindex="0">
                                                <img class="author-avatar"
                                                    src="https://uploads.nhanhoa.com/news/no-avatar.png" /> LeThiMai
                                            </a>
                                            <span class="seperate">|</span>16/08/2024
                                        </span>
                                    </div>
                                    <a nh-btn-action="bookmark" bookmark-id="4472" href="javascript:;"
                                        class="ml-auto bookmark" tabindex="0"><i
                                            class="fa-light fa-bookmark fs-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <section id="pagenavi_new" class="pagenavi_new">
                        <article class="pagenavi ">
                            <div id='block_page'>
                                <ul class='pagination pull-right'>
                                    <li class="active"><a>1<span class="sr-only">(current)</span></a></li>
                                    <li><a href="https://nhanhoa.com/tin-tuc/tin-tuc_2/2.html" title='Trang: 2'>2</a>
                                    </li>
                                    <li><a href="https://nhanhoa.com/tin-tuc/tin-tuc_2/3.html" title='Trang: 3'>3</a>
                                    </li>
                                    <li><a href="https://nhanhoa.com/tin-tuc/tin-tuc_2/4.html" title='Trang: 4'>4</a>
                                    </li>
                                    <li><a href="https://nhanhoa.com/tin-tuc/tin-tuc_2/5.html" title='Trang: 5'>5</a>
                                    </li>
                                    <li><a href="https://nhanhoa.com/tin-tuc/tin-tuc_2/175.html"
                                            title='Trang: 175'>Trang cuối &raquo;</a></li>
                                </ul>
                            </div>
                        </article>
                    </section> --}}


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
