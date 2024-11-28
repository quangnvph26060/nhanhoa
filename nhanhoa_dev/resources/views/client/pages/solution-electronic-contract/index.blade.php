@extends('client/pages/solution-electronic-contract/master')

@section('content')
<section id="hero">
    <div class="d-sm-none">
        <div class="frame" style="padding-top:71.4%">
            <img src="/Assets/Images/Index/bannerMobile.png">
        </div>
        <div class="text-center mt-2 d-flex justify-content-center">
            <a href="{{ route('page.electronic-contract-registration') }}"
                class="default-btn text-uppercase default-btn-animation lineargradient-btn mb-3">Trải nghiệm
                ngay</a>
        </div>
    </div>
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <a href="{{ route('page.electronic-contract-registration') }}">
                    <img src="https://esoc.vn/Upload/SlideShow/153511-banner-moi.png" alt="Banner mới">
                </a>
            </div>
            <div class="carousel-item">
                <a href="{{ route('page.electronic-contract-registration') }}">
                    <img src="https://esoc.vn/Upload/SlideShow/153520-banner-2.png" alt="Banner 2">
                </a>
            </div>
        </div>

        <ol class="carousel-indicators" id="hero-carousel-indicators">
            <li data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#heroCarousel" data-bs-slide-to="1" class=""></li>
        </ol>
    </div>
</section>

<div class="content bg-light">
    <div class="container-xl">
        <div class="row row-cards">

            <div class="col-lg-6 about-video d-flex align-items-center">
                <div style="width: 100%;padding: 1em;background: #fff;border-radius: 1em;">
                    <div class="shadow rounded-2 p-2 w-100" style="background-color: var(--first-color);">
                        <div class="frame about-thumnail" style="padding-top:56.25%">
                            <img src="https://esoc.vn/Assets/Images/Index/hop-dong-dien-tu-esoc.png">
                            <div class="about-playicon">
                                <i class="bi bi-play-circle-fill"></i>
                            </div>
                            <iframe class="video-play d-none" src="" frameborder="0" allow="autoplay; encrypted-media"
                                allowfullscreen=""></iframe>
                        </div>
                        <p class="pt-1 text-center mb-0 text-white fw-semibold fs-4">Phần mềm ESOC</p>


                    </div>
                </div>

            </div><!-- .col -->
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <h1>Giải pháp hợp đồng điện tử ESOC</h1>
                    </div>
                    <div class="col-12">
                        <div class="row align-items-center mb-0 pb-0">
                            <div class="col-auto">
                                <span class="bg-cyan-lt avatar avatar-rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2">
                                        </path>
                                        <rect x="9" y="3" width="6" height="4" rx="2"></rect>
                                        <path d="M9 14l2 2l4 -4"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="col">
                                <h3 class="mb-0 text-h2">
                                    Tiêu chuẩn pháp lý
                                </h3>
                                <p>
                                    Đáp ứng đầy đủ tính pháp lý về giao dịch điện tử xác thực điện tử trong nhiều
                                    lĩnh vực như: Dân sự, Thương mại, ...
                                </p>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-cyan-lt avatar avatar-rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M9 12l2 2l4 -4"></path>
                                        <path
                                            d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                            <div class="col">
                                <h3 class="mb-0 text-h2">
                                    Tiêu chuẩn kỹ thuật
                                </h3>
                                <p>
                                    Giải pháp bảo mật chống tấn công từ bên ngoài 24/7, hệ thống đáp ứng mọi thiết
                                    bị USB Token, HSM, ...
                                </p>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-cyan-lt avatar avatar-rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M5 6h10a1 1 0 0 1 1 1v8a4 4 0 0 1 -4 4h-4a4 4 0 0 1 -4 -4v-8a1 1 0 0 1 1 -1">
                                        </path>
                                        <path d="M16 9h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="col">
                                <h3 class="mb-0 text-h2">
                                    Dễ dàng thực hiện
                                </h3>
                                <p>
                                    Người dùng dễ dàng thực hiện ký kết các hợp đồng giữa doanh nghiệp với doanh
                                    nghiệp, doanh nghiệp với đối tác, doanh nghiệp với cá nhân.
                                </p>
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div class="col-auto">
                                <span class="bg-cyan-lt avatar avatar-rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2">
                                        </path>
                                        <path d="M12 3v3m0 12v3"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="col">
                                <h3 class="mb-0 text-h2">
                                    Tiết kiệm chi phí
                                </h3>
                                <p>
                                    Tiết kiệm tối ưu lến đến 90% thời gian và chi phí so với phương thức ký kết hợp
                                    đồng giấy truyền thống tại doanh nghiệp.
                                </p>
                            </div>
                        </div>
                        <div class="row row-cards">
                            <div class="col-md-auto ms-auto mb-2">
                                <a href="/gioi-thieu-hop-dong-dien-tu" class="default-btn lineargradient-btn w-100 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="2"></circle>
                                        <path
                                            d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7">
                                        </path>
                                    </svg>
                                    Giới thiệu
                                </a>
                            </div>
                            <div class="col-md-auto mb-2">
                                <a href="/tinh-nang-hop-dong-dien-tu" class="default-btn lineargradient-btn  w-100 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                                        <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                                        <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                                        <path d="M14 17h6"></path>
                                        <path d="M17 14v6"></path>
                                    </svg>
                                    Tính năng
                                </a>
                            </div>
                            <div class="col-md-auto">
                                <a href="{{ route('page.electronic-contract-registration') }}" class="default-btn lineargradient-btn w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="13" rx="2" width="4" height="6"></rect>
                                        <rect x="16" y="13" rx="2" width="4" height="6"></rect>
                                        <path d="M4 15v-3a8 8 0 0 1 16 0v3"></path>
                                        <path d="M18 19a6 3 0 0 1 -6 3"></path>
                                    </svg>
                                    <span class="">Đăng ký nhận tư vấn</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="content section-top-border">
    <div class="container-xl">
        <div class="row mb-3">
            <div class="col-12 text-center">
                <h2 class="text-h1">Lợi ích khi sử dụng phần mềm ESOC</h2>
                <p>Cùng ESOC thay đổi phương thức ký kết truyền thống, xây dựng doanh nghiệp chuyển đổi số không
                    giấy tờ</p>
            </div>
            <div class="col-12 text-center">
                <img src="https://esoc.vn/Assets/Images/Index/loi_ich.png" class="img-fluid" style="width:40%;"
                    alt="Lợi ích">
            </div>
        </div>
        <div class="row row-cards">
            <div class="col-sm-6">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="bg-firstColor avatar avatar-rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-white" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="9"></circle>
                                <polyline points="12 7 12 12 15 15"></polyline>
                            </svg>
                        </span>
                    </div>
                    <div class="col">
                        <h3 class="text-h2 mb-1">
                            Tối ưu thời gian triển khai phần mềm
                        </h3>
                        <p>
                            ESOC giúp Doanh nghiệp tiếp cận, vận hành chuyển đổi số một cách dễ dàng và nhanh chóng.
                            Ngoài ra doanh nghiệp được tư vấn, xây dựng giải pháp phù hợp, tiết kiệm thời gian triển
                            khai
                        </p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="bg-firstColor avatar avatar-rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-white" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="3" y1="21" x2="21" y2="21"></line>
                                <path d="M5 21v-14l8 -4v18"></path>
                                <path d="M19 21v-10l-6 -4"></path>
                                <line x1="9" y1="9" x2="9" y2="9.01"></line>
                                <line x1="9" y1="12" x2="9" y2="12.01"></line>
                                <line x1="9" y1="15" x2="9" y2="15.01"></line>
                                <line x1="9" y1="18" x2="9" y2="18.01"></line>
                            </svg>
                        </span>
                    </div>
                    <div class="col">
                        <h3 class="text-h2 mb-1">
                            Phù hợp với mọi loại hình doanh nghiệp
                        </h3>
                        <p>
                            Phần mềm ESOC quản lý theo mô hình tập trung hoặc phân tán phù hợp với đa dạng mô hình
                            doanh nghiệp tại Việt Nam: Doanh nghiệp SME, FDI, Doanh nghiệp có nhiều chi nhánh
                        </p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="bg-firstColor avatar avatar-rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-white" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"></polyline>
                                <line x1="12" y1="12" x2="20" y2="7.5"></line>
                                <line x1="12" y1="12" x2="12" y2="21"></line>
                                <line x1="12" y1="12" x2="4" y2="7.5"></line>
                                <line x1="16" y1="5.25" x2="8" y2="9.75"></line>
                            </svg>
                        </span>
                    </div>
                    <div class="col">
                        <h3 class="text-h2 mb-1">
                            Dễ dàng tích hợp với các phần mềm có sẵn
                        </h3>
                        <p>
                            Hỗ trợ tích hợp truyền nhận dữ liệu từ các hệ thống SAP, ERP, CRM, HR, phần mềm kế toán,
                            ...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="bg-firstColor avatar avatar-rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-white" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2">
                                </path>
                                <path d="M12 3v3m0 12v3"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="col">
                        <h3 class="text-h2 mb-1">
                            Tiết kiệm chi phí tối đa
                        </h3>
                        <p>
                            ESOC giúp doanh nghiệp: Không chi phí in ấn, lưu trữ; Không cần đầu tư phần cứng, phần
                            mềm; Tiện lợi quản lý, lưu trữ và tìm kiếm; Vượt trội so với đối thủ cạnh tranh, nâng
                            cao sự chuyên nghiệp với khách hàng.
                        </p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="bg-firstColor avatar avatar-rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-white" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="15" cy="15" r="3"></circle>
                                <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                <path
                                    d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                </path>
                                <line x1="6" y1="9" x2="18" y2="9"></line>
                                <line x1="6" y1="12" x2="9" y2="12"></line>
                                <line x1="6" y1="15" x2="8" y2="15"></line>
                            </svg>
                        </span>
                    </div>
                    <div class="col">
                        <h3 class="text-h2 mb-1">
                            Tuân thủ Pháp lý, Bảo mật và an toàn
                        </h3>
                        <p>
                            Đáp ứng đầy đủ tính pháp lý về giao dịch điện tử xác thực điện tử. Áp dụng công nghệ
                            Blockchain nâng cao bảo mật chống làm giả hợp đồng, đáp ứng mọi thiết bị USB Token
                        </p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="bg-firstColor avatar avatar-rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-white" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <rect x="4" y="13" rx="2" width="4" height="6"></rect>
                                <rect x="16" y="13" rx="2" width="4" height="6"></rect>
                                <path d="M4 15v-3a8 8 0 0 1 16 0v3"></path>
                                <path d="M18 19a6 3 0 0 1 -6 3"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="col">
                        <h3 class="text-h2 mb-1">
                            Hỗ trợ chuyên nghiệp, tận tình 24/7/365
                        </h3>
                        <p>
                            Với đội ngũ chuyên gia giàu kinh nghiệm, sẵn sàng tư vấn, hỗ trợ doanh nghiệp 24/7/365
                            trong quá trình triển khai chuyển đổi số
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content section-top-border">
    <div class="container-xl">
        <div class="row mb-3">
            <div class="col-12 text-center">
                <h2 class="text-h1">Bảng giá hợp đồng điện tử ESOC</h2>
                <p>Lựa chọn gói dịch vụ phù hợp với doanh nghiệp của bạn</p>
            </div>
        </div>
        <div class="row row-cards row-deck">
            @forelse ($esocs as $index => $item )
            <div class="col-sm-4 p-3">
                <div class="card secondColor shadow">
                    <div class="card-body py-3 px-3">
                        <div class="row align-items-center border-bottom mb-3">
                            <div class="col-12 text-center">
                                <div class="font-weight-bold">
                                    ESOC-{{ $item->contract_number }}
                                </div>
                                <div class="text-muted mb-1">
                                    Gói {{ $item->contract_number }} hợp đồng
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-12 text-center">
                                <div class="font-weight-bold" style="font-size:1.85em">
                                    {{ number_format($item->price, 0, ',', '.') }}
                                </div>
                                <div class="text-muted">
                                    VNĐ/Gói
                                </div>
                            </div>
                        </div>
                        <a href="dang-ky-nhan-tu-van" class="default-btn lineargradient-btn w-100 d-block text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="7 10 12 4 17 10"></polyline>
                                <path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path>
                                <circle cx="12" cy="15" r="2"></circle>
                            </svg>
                            Đăng ký sử dụng
                        </a>
                    </div>
                </div>
            </div>
            @empty

            @endforelse
            {{-- <div class="col-sm-4 p-3">
                <div class="card shadow"
                    style="border: 1px solid #e52e56; color: #e52e56; background: rgb(229 46 86 / 8%); ">
                    <div class="card-body py-3 px-3">
                        <div class="row align-items-center border-bottom mb-3">
                            <div class="col-12 text-center">
                                <div class="font-weight-bold" style="color: #e52e56;">
                                    ESOC-500
                                </div>
                                <div class="text-muted mb-1">
                                    Gói 500 hợp đồng
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-12 text-center">
                                <div class="font-weight-bold" style="font-size:1.85em">
                                    4.300.000
                                </div>
                                <div class="text-muted">
                                    VNĐ/Gói
                                </div>
                            </div>
                        </div>
                        <a href="dang-ky-nhan-tu-van" class="default-btn w-100 d-block text-center"
                            style="background-color: #e52e56;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="7 10 12 4 17 10"></polyline>
                                <path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path>
                                <circle cx="12" cy="15" r="2"></circle>
                            </svg>
                            Đăng ký sử dụng
                        </a>
                    </div>
                    <div class="ribbon" style="background: #e52e56; border-color: #e52e56;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6">
                            </path>
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                            <path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727"></path>
                            <path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 p-3">
                <div class="card secondColor shadow">
                    <div class="card-body py-3 px-3">
                        <div class="row align-items-center border-bottom mb-3">
                            <div class="col-12 text-center">
                                <div class="font-weight-bold">
                                    ESOC-1.000
                                </div>
                                <div class="text-muted mb-1">
                                    Gói 1.000 hợp đồng
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-12 text-center">
                                <div class="font-weight-bold" style="font-size:1.85em">
                                    6.800.000
                                </div>
                                <div class="text-muted">
                                    VNĐ/Gói
                                </div>
                            </div>
                        </div>
                        <a href="dang-ky-nhan-tu-van" class="default-btn lineargradient-btn w-100 d-block text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="7 10 12 4 17 10"></polyline>
                                <path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path>
                                <circle cx="12" cy="15" r="2"></circle>
                            </svg>
                            Đăng ký sử dụng
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="text-center mt-4">
            <a class="btn-more" href="{{route('page.price-list-electronic-contract')}}">Xem thêm<i
                    class="bi bi-arrow-right ms-1"></i></a>
        </div>
    </div>
</div>

<section id="cta" class="cta">
    <div class="container">
        <div class="row row-cards">
            <div class="col">
                <h3 class="text-h1">ESOC giúp doanh nghiệp chuyển đổi số thành công</h3>
                <p class="mb-3">Nền tảng giúp Doanh nghiệp số hóa quy trình quản lý và ký kết tài liệu thay thế
                    cho phương pháp truyền thống.<br>Tính năng dễ sử dụng, ký hợp đồng từ xa, mọi lúc, mọi nơi</p>
            </div>
            <div class="col-auto align-self-center btn-dkynhantuvan">
                <a href="{{ route('page.electronic-contract-registration') }}" class="default-btn bg-firstColor py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <rect x="4" y="13" rx="2" width="4" height="6"></rect>
                        <rect x="16" y="13" rx="2" width="4" height="6"></rect>
                        <path d="M4 15v-3a8 8 0 0 1 16 0v3"></path>
                        <path d="M18 19a6 3 0 0 1 -6 3"></path>
                    </svg>
                    Đăng ký nhận tư vấn
                </a>
            </div>
        </div>
    </div>
</section>

<div class="content bg-white bg-firstColor-lt-customize">
    <div class="container-xl">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="text-h1">Quy trình giao kết hợp đồng điện tử trên ESOC</h2>
                <p>Khởi tạo và giao kết hợp đồng thông minh, không chạm. Giúp doanh nghiệp vượt trội so với đối thủ
                    cạnh tranh</p>
            </div>
        </div>
        <div class="row row-cards row-deck">
            <div class="col-sm-3">
                <div class="card hover-shadow">
                    <div class="card-body">
                        <h2 class="text-center">1. Tạo hợp đồng</h2>
                        <div class="mb-3 text-center">
                            <img src="https://esoc.vn/Assets/Images/Index/tao_hop_dong.png" class="img-fluid"
                                alt="Tạo hợp đồng">
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1">
                                    </path>
                                    <polyline points="9 15 12 12 15 15"></polyline>
                                    <line x1="12" y1="12" x2="12" y2="21"></line>
                                </svg>
                            </div>
                            <div class="col">
                                Upload file hợp đồng
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div class="col-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M19 11v-2a2 2 0 0 0 -2 -2h-8a2 2 0 0 0 -2 2v8a2 2 0 0 0 2 2h2"></path>
                                    <path d="M13 13l9 3l-4 2l-2 4l-3 -9"></path>
                                    <line x1="3" y1="3" x2="3" y2="3.01"></line>
                                    <line x1="7" y1="3" x2="7" y2="3.01"></line>
                                    <line x1="11" y1="3" x2="11" y2="3.01"></line>
                                    <line x1="15" y1="3" x2="15" y2="3.01"></line>
                                    <line x1="3" y1="7" x2="3" y2="7.01"></line>
                                    <line x1="3" y1="11" x2="3" y2="11.01"></line>
                                    <line x1="3" y1="15" x2="3" y2="15.01"></line>
                                </svg>
                            </div>
                            <div class="col">
                                Thiết kế thông tin hợp đồng
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div class="col-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    <path d="M16 11h6m-3 -3v6"></path>
                                </svg>
                            </div>
                            <div class="col">
                                Thiết kế các bên tham gia
                            </div>
                        </div>
                    </div>
                    <div class="progress progress-sm card-progress">
                        <div class="progress-bar" style="width: 0%" role="progressbar" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <span class="visually-hidden">0% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card hover-shadow">
                    <div class="card-body">
                        <h2 class="text-center">2. Phê duyệt</h2>
                        <div class="mb-3 text-center">
                            <img src="https://esoc.vn/Assets/Images/Index/phe_duyet.png" class="img-fluid"
                                alt="Tạo hợp đồng">
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto mt-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <polyline points="3 9 12 15 21 9 12 3 3 9"></polyline>
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10"></path>
                                    <line x1="3" y1="19" x2="9" y2="13"></line>
                                    <line x1="15" y1="13" x2="21" y2="19"></line>
                                </svg>
                            </div>
                            <div class="col">
                                Gửi Email/Sms cho các bên phê duyệt
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto mt-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <polyline points="9 11 12 14 20 6"></polyline>
                                    <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9">
                                    </path>
                                </svg>
                            </div>
                            <div class="col">
                                Các bên tham gia thực hiện phê duyệt hợp đồng
                            </div>
                        </div>
                    </div>
                    <div class="progress progress-sm card-progress">
                        <div class="progress-bar" style="width: 0%" role="progressbar" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <span class="visually-hidden">0% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card hover-shadow">
                    <div class="card-body">
                        <h2 class="text-center">3. Ký số hợp đồng</h2>
                        <div class="mb-3 text-center">
                            <img src="https://esoc.vn/Assets/Images/Index/ky_so_hop_dong.png" class="img-fluid"
                                alt="Tạo hợp đồng">
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <polyline points="3 9 12 15 21 9 12 3 3 9"></polyline>
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10"></path>
                                    <line x1="3" y1="19" x2="9" y2="13"></line>
                                    <line x1="15" y1="13" x2="21" y2="19"></line>
                                </svg>
                            </div>
                            <div class="col">
                                Gửi Email/SMS cho các bên tham gia ký
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3"></path>
                                    <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3"></path>
                                    <line x1="16" y1="5" x2="19" y2="8"></line>
                                </svg>
                            </div>
                            <div class="col">
                                Các bên tham gia thực hiện ký hợp đồng bằng: USB Token, HSM, Remote Server Sign,
                                Mobile MSSP, OTP
                            </div>
                        </div>
                    </div>
                    <div class="progress progress-sm card-progress">
                        <div class="progress-bar" style="width: 0%" role="progressbar" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <span class="visually-hidden">0% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card hover-shadow">
                    <div class="card-body">
                        <h2 class="text-center">4. Lưu trữ và quản lý hợp đồng</h2>
                        <div class="mb-3 text-center">
                            <img src="https://esoc.vn/Assets/Images/Index/quan_ly_va_luu_tru.png" class="img-fluid"
                                alt="Tạo hợp đồng">
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <polyline points="3 9 12 15 21 9 12 3 3 9"></polyline>
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10"></path>
                                    <line x1="3" y1="19" x2="9" y2="13"></line>
                                    <line x1="15" y1="13" x2="21" y2="19"></line>
                                </svg>
                            </div>
                            <div class="col">
                                Gửi Email/SMS báo hoàn thành giao kết và thông tin hợp đồng
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="3" y="4" width="18" height="8" rx="3"></rect>
                                    <rect x="3" y="12" width="18" height="8" rx="3"></rect>
                                    <line x1="7" y1="8" x2="7" y2="8.01"></line>
                                    <line x1="7" y1="16" x2="7" y2="16.01"></line>
                                </svg>
                            </div>
                            <div class="col">
                                Lưu trữ hợp đồng
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <polyline points="4 19 8 13 12 15 16 10 20 14 20 19 4 19"></polyline>
                                    <polyline points="4 12 7 8 11 10 16 4 20 8"></polyline>
                                </svg>
                            </div>
                            <div class="col">
                                Thống kê, báo cáo
                            </div>
                        </div>
                    </div>
                    <div class="progress progress-sm card-progress">
                        <div class="progress-bar" style="width: 0%" role="progressbar" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <span class="visually-hidden">0% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="bg-light">
    <div class="container">
        <div class="row row-cards">
            <div class="col-lg-9 text-left">
                <h3 class="text-h1">Pháp lý hợp đồng điện tử</h3>
                <div class="row mb-2">
                    <div class="col-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-helpdesk text-firstColor" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="12" r="9"></circle>
                            <path d="M9 12l2 2l4 -4"></path>
                        </svg>
                    </div>
                    <div class="col">
                        Luật giao dịch điện tử số 51/2005/QH11 ngày 29/11/2005 quy định về giao dịch điện tử trong
                        lĩnh vực dân sự, kinh doanh, thương mại và các lĩnh vực khác.
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-helpdesk text-firstColor" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="12" r="9"></circle>
                            <path d="M9 12l2 2l4 -4"></path>
                        </svg>
                    </div>
                    <div class="col">
                        Bộ Luật Lao động 2019 ghi nhận hình thức hợp đồng lao động điện tử
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-helpdesk text-firstColor" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="12" r="9"></circle>
                            <path d="M9 12l2 2l4 -4"></path>
                        </svg>
                    </div>
                    <div class="col">
                        Đáp ứng mọi thiết bị USB Token
                    </div>
                </div>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
                <img src="https://esoc.vn/Assets/Images/Index/co-so-phap-ly.png" class="w-100"
                    alt="Pháp lý hợp đồng điện tử">
            </div>
        </div>

    </div>
</section>

<div class="content section-top-border">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-lg-12 text-center">
                <h2 class="text-h1">Áp dụng ngay với mọi loại hợp đồng/ tài liệu/chứng nhận điện tử</h2>
                <p>ESOC cho phép ký hợp đồng mọi lúc, mọi nơi, mọi thiết bị. Phê duyệt và ký nhiều hợp đồng cùng một
                    thời điểm, không lo gián đoạn kinh doanh tại doanh nghiệp.</p>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <img src="https://esoc.vn/Assets/Images/Index/ap-dung-hop-dong-dien-tu.png" class="w-75"
                    alt="Áp dụng ngay với mọi loại hợp đồng">
            </div>
            <div class="col-lg-5">
                <div class="row align-items-center mb-2">
                    <div class="col-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-inline icon-helpdesk text-firstColor"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="9 11 12 14 20 6"></polyline>
                            <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path>
                        </svg>
                    </div>
                    <div class="col">
                        <span style="font-size:15px; font-weight:600">
                            Hợp đồng lao động
                        </span>
                    </div>
                </div>
                <div class="row align-items-center mb-2">
                    <div class="col-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-inline icon-helpdesk text-firstColor"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="9 11 12 14 20 6"></polyline>
                            <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path>
                        </svg>
                    </div>
                    <div class="col">
                        <span style="font-size:15px; font-weight:600">
                            Hợp đồng cung cấp dịch vụ
                        </span>
                    </div>
                </div>
                <div class="row align-items-center mb-2">
                    <div class="col-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-inline icon-helpdesk text-firstColor"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="9 11 12 14 20 6"></polyline>
                            <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path>
                        </svg>
                    </div>
                    <div class="col">
                        <span style="font-size:15px; font-weight:600">
                            Hợp đồng thuê khoán
                        </span>
                    </div>
                </div>
                <div class="row align-items-center mb-2">
                    <div class="col-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-inline icon-helpdesk text-firstColor"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="9 11 12 14 20 6"></polyline>
                            <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path>
                        </svg>
                    </div>
                    <div class="col">
                        <span style="font-size:15px; font-weight:600">
                            Hợp đồng vay vốn
                        </span>
                    </div>
                </div>
                <div class="row align-items-center mb-2">
                    <div class="col-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-inline icon-helpdesk text-firstColor"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="9 11 12 14 20 6"></polyline>
                            <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path>
                        </svg>
                    </div>
                    <div class="col">
                        <span style="font-size:15px; font-weight:600">
                            Hợp đồng mua bán
                        </span>
                    </div>
                </div>
                <div class="row align-items-center mb-2">
                    <div class="col-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-inline icon-helpdesk text-firstColor"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="9 11 12 14 20 6"></polyline>
                            <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path>
                        </svg>
                    </div>
                    <div class="col">
                        <span style="font-size:15px; font-weight:600">
                            Hợp đồng dịch vụ, thương mại
                        </span>
                    </div>
                </div>
                <div class="row align-items-center mb-2">
                    <div class="col-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-inline icon-helpdesk text-firstColor"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="9 11 12 14 20 6"></polyline>
                            <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path>
                        </svg>
                    </div>
                    <div class="col">
                        <span style="font-size:15px; font-weight:600">
                            Hợp đồng đại lý
                        </span>
                    </div>
                </div>
                <div class="row align-items-center mb-2">
                    <div class="col-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-inline icon-helpdesk text-firstColor"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="9 11 12 14 20 6"></polyline>
                            <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path>
                        </svg>
                    </div>
                    <div class="col">
                        <span style="font-size:15px; font-weight:600">
                            Đơn đặt hàng
                        </span>
                    </div>
                </div>
                <div class="row align-items-center mb-2">
                    <div class="col-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-inline icon-helpdesk text-firstColor"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="9 11 12 14 20 6"></polyline>
                            <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path>
                        </svg>
                    </div>
                    <div class="col">
                        <span style="font-size:15px; font-weight:600">
                            Bảo lãnh ngân hàng
                        </span>
                    </div>
                </div>
                <div class="row align-items-center mb-2">
                    <div class="col-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-inline icon-helpdesk text-firstColor"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="9 11 12 14 20 6"></polyline>
                            <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path>
                        </svg>
                    </div>
                    <div class="col">
                        <span style="font-size:15px; font-weight:600">
                            Hợp đồng bảo hiểm
                        </span>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-inline icon-helpdesk text-firstColor"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="9 11 12 14 20 6"></polyline>
                            <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path>
                        </svg>
                    </div>
                    <div class="col">
                        <span style="font-size:15px; font-weight:600">
                            Hợp đồng vận chuyển tài sản, hành khách
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section question-section bg-light py-4">
    <div class="container">
        <div class="section-header">
            <h3 class="text-h1 text-center m-0 mb-4">Câu hỏi thường gặp</h3>
        </div>
        <div class="section-body d-flex row justify-content-between">
            <div class="col-lg-7 col-md-12 mt-4">
                <div class="accordion" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header mt-1" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                <i class="bi bi-question-diamond me-2"></i>Hợp đồng điện tử là gì?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    - Hợp đồng điện tử là một dạng hợp đồng mà các bên thực hiện thông qua việc sử
                                    dụng các phương tiện điện tử như Internet, email, máy tính hay thiết bị di động.
                                    Trong hợp đồng điện tử, các thông tin và tài liệu được trao đổi, lưu trữ và xử
                                    lý bằng các phương tiện điện tử thay vì các giấy tờ truyền thống.<br>
                                    - Hợp đồng điện tử được coi là phương tiện kinh doanh hiệu quả và tiết kiệm thời
                                    gian, chi phí so với hợp đồng truyền thống. Tuy nhiên, để đảm bảo tính pháp lý
                                    của hợp đồng điện tử, cần tuân thủ các quy định pháp luật liên quan đến việc sử
                                    dụng và xác thực thông tin điện tử.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header mt-1" id="flush-headinTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                <i class="bi bi-question-diamond me-2"></i>Giá trị pháp lý của Hợp đồng điện tử?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    Hợp đồng điện tử có giá trị pháp lý như hợp đồng truyền thống nếu được thực hiện
                                    đầy đủ các yêu cầu và điều kiện theo quy định của pháp luật. Theo Luật Công nghệ
                                    thông tin số 51/2005/QH11, để hợp đồng điện tử có giá trị pháp lý, các bên cần
                                    tuân thủ các điều kiện sau:<br>

                                    -Điều kiện về thỏa thuận: Các bên cần đạt được thỏa thuận về nội dung hợp
                                    đồng.<br>

                                    -Điều kiện về phương tiện ghi nhớ thông tin: Hợp đồng điện tử cần được ghi nhớ
                                    thông tin bằng phương tiện điện tử có tính bảo mật và khả năng lưu trữ thông tin
                                    đầy đủ, chính xác.<br>

                                    -Điều kiện về xác thực chữ ký điện tử: Các bên cần xác thực chữ ký điện tử của
                                    mình để đảm bảo tính toàn vẹn và uy tín của thông tin trong hợp đồng.<br>

                                    -Điều kiện về bảo mật thông tin: Các bên cần đảm bảo an toàn, bảo mật và không
                                    lộ thông tin của hợp đồng cho bên thứ ba.<br>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header mt-1" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                <i class="bi bi-question-diamond me-2"></i>Các bước ký kết hợp đồng điện tử Esoc?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    <strong>- Bước 01: </strong>Thông báo mời đề nghị giao kết
                                    Đàm phán và thống nhất nội dung tài liệu ngay trên ESOC
                                    (theo quy định tại Điều 12, Nghị định 52/2013/NĐ-CP về thương mại điện tử)<br>
                                    <strong>- Bước 02: </strong> Đề nghị giao kết:
                                    Tạo lập tài liệu và thứ tự tham gia giao kết theo nhiều mô hình.
                                    Gửi thông tin yêu cầu giao kết thông qua: Email, SMS.<br>
                                    <strong>- Bước 03: </strong> Thực hiện đề nghị giao kết:
                                    Điều phối vai trò tham giao kết từ bên được đề nghị.
                                    Các bên thực hiện giao kết bằng ký số USB Token, ký số từ xa, ký điện tử.
                                    Được phép ủy quyền giao kết theo vai trò tham gia.<br>
                                    <strong>- Bước 04: </strong> Hoàn tất giao kết:
                                    Hệ thống gửi thông báo hoàn tất ký kết cho các bên tham gia.
                                    Đồng thời thực hiện lưu trữ và quản lý tài liệu.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header mt-1" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                <i class="bi bi-question-diamond me-2"></i>Dùng chữ ký gì để ký hợp đồng điện tử?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    - Để ký hợp đồng điện tử, các bên có thể sử dụng chữ ký điện tử để xác nhận tính
                                    toàn vẹn của thông tin và chịu trách nhiệm về nội dung hợp đồng. Chữ ký điện tử
                                    được xem là một hình thức chứng thực pháp lý của các thông tin điện tử và có giá
                                    trị pháp lý tương đương với chữ ký tay truyền thống.<br>

                                    - Để tạo chữ ký điện tử, các bên có thể sử dụng các phần mềm hoặc dịch vụ xác
                                    thực chữ ký điện tử được cung cấp bởi các nhà cung cấp dịch vụ chứng thực uy
                                    tín. Các bên cần đảm bảo rằng chữ ký điện tử được sử dụng đáp ứng các yêu cầu về
                                    xác thực và tính bảo mật của thông tin, nhằm đảm bảo tính pháp lý của hợp đồng
                                    điện tử.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-5 col-md-12 d-flex flex-column">
                <div>
                    <div class="frame" style="padding-top:60%; border-radius:2em;">
                        <img class="img-fluid" src="https://esoc.vn/Upload/cau-hoi-thuong-gap/question.png"
                            alt="Đặt câu hỏi">

                    </div>
                </div>
                <div class="mt-3 text-center">
                    <a href="/dang-ky-nhan-tu-van" class="default-btn lineargradient-btn">Đặt câu hỏi</a>
                </div>
            </div>


        </div>

    </div>
</div>

<section id="testimonials" class="testimonials">
    <div class="container">
        <div class="owl-carousel testimonials-carousel">
            <div class="testimonial-item">
                <img src="https://esoc.vn/Upload/y-kien-khach-hang/DangManhTruong.jpg" class="testimonial-img"
                    alt="Ông Đặng Mạnh Trường">
                <h3>Ông Đặng Mạnh Trường</h3>
                <h4>website: suaxedapdientainha.com</h4>
                <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Sản phẩm ESOC có quy trình thực hiện hợp đồng điện tử chi tiết và rõ ràng, mình có thể nắm rõ
                    các bước để tránh những sai lầm đáng tiếc.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
            </div>
            <div class="testimonial-item">
                <img src="https://esoc.vn/Upload/y-kien-khach-hang/VuThiKimPhuong.jpg" class="testimonial-img"
                    alt="Bà Vũ Thị Kim Phương">
                <h3>Bà Vũ Thị Kim Phương</h3>
                <h4>website: sieuthiav.net</h4>
                <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    ESOC cung cấp cho mình khả năng tạo và quản lý hợp đồng điện tử một cách nhanh chóng và tiện
                    lợi.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
            </div>
            <div class="testimonial-item">
                <img src="https://esoc.vn/Upload/y-kien-khach-hang/NguyenVuThanh.jpg" class="testimonial-img"
                    alt="Anh Nguyễn Vũ Thành">
                <h3>Anh Nguyễn Vũ Thành</h3>
                <h4>Học viện Anh ngữ EQuest</h4>
                <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Với sự phát triển của công nghệ thông tin, việc sử dụng sản phẩm ESOC để tạo và quản lý hợp đồng
                    điện tử trở nên cần thiết và hữu ích hơn bao giờ hết.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
            </div>
            <div class="testimonial-item">
                <img src="https://esoc.vn/Upload/y-kien-khach-hang/Tranvanthuong.jpg" class="testimonial-img"
                    alt="Ông Trần Văn Thưởng">
                <h3>Ông Trần Văn Thưởng</h3>
                <h4>CEO Công ty TNHH phần mềm Tâm Phát</h4>
                <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Nhờ tính năng tiện lợi và linh hoạt của sản phẩm ESOC, mình có thể thực hiện quy trình ký kết và
                    quản lý hợp đồng điện tử dễ dàng.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
            </div>
        </div>
    </div>
</section>

<div class="content bg-light section-top-border">
    <div class="container-xl">
        <h2 class="text-h1 text-center">Tin tức nổi bật</h2>
        <div class="row row-cards row-deck">
            <div class="col-sm-12 col-lg-4">
                <div class="card">
                    <a
                        href="/tin-tuc/phai-biet-top-5-tieu-chi-lua-chon-giai-phap-hop-dong-dien-tu-phu-hop-cho-doanh-nghiep">
                        <img src="https://esoc.vn/Upload/tin-tuc/164007-phai-biet-top-5-tieu-chi-lua-chon-giai-phap-hop-dong-dien-tu-phu-hop-cho-doanh-nghiep.png"
                            alt="[PHẢI BIẾT] Top 5+ tiêu chí lựa chọn giải pháp hợp đồng điện tử phù hợp cho doanh nghiệp"
                            class="card-img-top img-responsive-16by9">
                    </a>
                    <div class="card-body">
                        <a
                            href="/tin-tuc/phai-biet-top-5-tieu-chi-lua-chon-giai-phap-hop-dong-dien-tu-phu-hop-cho-doanh-nghiep">
                            <div class="truncate-customize-title">
                                <strong>[PHẢI BIẾT] Top 5+ tiêu chí lựa chọn giải pháp hợp đồng điện tử phù hợp cho
                                    doanh nghiệp</strong>
                            </div>
                        </a>
                        <div class="text-muted details-list mt-2 mb-2">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-calendar2-check"></i> <a
                                        href="/tin-tuc/phai-biet-top-5-tieu-chi-lua-chon-giai-phap-hop-dong-dien-tu-phu-hop-cho-doanh-nghiep">26/07/2023</a>
                                </li>
                                <li class="d-flex align-items-center"><i class="bi bi-eye"></i> <a
                                        href="/tin-tuc/phai-biet-top-5-tieu-chi-lua-chon-giai-phap-hop-dong-dien-tu-phu-hop-cho-doanh-nghiep">1.151
                                        lượt xem</a></li>
                            </ul>
                        </div>
                        <p class="truncate-customize-content">
                            Là giải pháp ký kết ứng dụng công nghệ tiên tiến, hiện đại, giải pháp hợp đồng điện tử
                            ngày càng được lựa chọn và ứng dụng rộng rãi thay thế cho phương thức ký kết truyền
                            thống đã có phần lạc hậu. Trong bài viết này, chúng ta sẽ tìm hiểu về top 5+ tiêu chí để
                            doanh nghiệp lựa chọn được giải pháp phù hợp.

                        </p>
                        <div class="text-end m2">
                            <a href="/tin-tuc/phai-biet-top-5-tieu-chi-lua-chon-giai-phap-hop-dong-dien-tu-phu-hop-cho-doanh-nghiep"
                                class="btn btn-link link-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="2"></circle>
                                    <path
                                        d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7">
                                    </path>
                                </svg>
                                Chi tiết
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="card">
                    <a href="/tin-tuc/tong-quan-cac-kien-thuc-lien-quan-den-hop-dong-dan-su">
                        <img src="https://esoc.vn/Upload/tin-tuc/162651-tong-quan-cac-kien-thuc-lien-quan-den-hop-dong-dan-su.png"
                            alt="Tổng quan các kiến thức liên quan đến hợp đồng dân sự"
                            class="card-img-top img-responsive-16by9">
                    </a>
                    <div class="card-body">
                        <a href="/tin-tuc/tong-quan-cac-kien-thuc-lien-quan-den-hop-dong-dan-su">
                            <div class="truncate-customize-title">
                                <strong>Tổng quan các kiến thức liên quan đến hợp đồng dân sự</strong>
                            </div>
                        </a>
                        <div class="text-muted details-list mt-2 mb-2">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-calendar2-check"></i> <a
                                        href="/tin-tuc/tong-quan-cac-kien-thuc-lien-quan-den-hop-dong-dan-su">27/05/2023</a>
                                </li>
                                <li class="d-flex align-items-center"><i class="bi bi-eye"></i> <a
                                        href="/tin-tuc/tong-quan-cac-kien-thuc-lien-quan-den-hop-dong-dan-su">5.851
                                        lượt xem</a></li>
                            </ul>
                        </div>
                        <p class="truncate-customize-content">
                            Hợp đồng dân sự là sự thoả thuận giữa các bên về việc xác lập, thay đổi hoặc chấm dứt
                            quyền, nghĩa vụ dân sự. Hợp đồng dân sự là một dạng của giao dịch dân sự. Bài viết phân
                            tích, làm sáng tỏ khái niệm, cách hiểu về hợp đồng dân sự.
                        </p>
                        <div class="text-end m2">
                            <a href="/tin-tuc/tong-quan-cac-kien-thuc-lien-quan-den-hop-dong-dan-su"
                                class="btn btn-link link-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="2"></circle>
                                    <path
                                        d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7">
                                    </path>
                                </svg>
                                Chi tiết
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="card">
                    <a href="/tin-tuc/quy-trinh-ky-ket-hop-dong-dien-tu-qua-email-nhu-the-nao">
                        <img src="https://esoc.vn/Upload/tin-tuc/112602-quy-trinh-ky-ket-hop-dong-dien-tu-qua-email-nhu-the-nao.png"
                            alt="Quy trình ký kết hợp đồng điện tử qua email như thế nào?"
                            class="card-img-top img-responsive-16by9">
                    </a>
                    <div class="card-body">
                        <a href="/tin-tuc/quy-trinh-ky-ket-hop-dong-dien-tu-qua-email-nhu-the-nao">
                            <div class="truncate-customize-title">
                                <strong>Quy trình ký kết hợp đồng điện tử qua email như thế nào?</strong>
                            </div>
                        </a>
                        <div class="text-muted details-list mt-2 mb-2">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-calendar2-check"></i> <a
                                        href="/tin-tuc/quy-trinh-ky-ket-hop-dong-dien-tu-qua-email-nhu-the-nao">19/05/2023</a>
                                </li>
                                <li class="d-flex align-items-center"><i class="bi bi-eye"></i> <a
                                        href="/tin-tuc/quy-trinh-ky-ket-hop-dong-dien-tu-qua-email-nhu-the-nao">2.219
                                        lượt xem</a></li>
                            </ul>
                        </div>
                        <p class="truncate-customize-content">
                            Trong thời đại công nghệ thông tin hiện nay, việc ký kết hợp đồng điện tử qua email đã
                            trở nên phổ biến và tiện lợi hơn nhiều so với việc ký kết hợp đồng truyền thống trên
                            giấy tờ. Tuy nhiên, để đảm bảo tính chính xác và giá trị pháp lý của hợp đồng, quy trình
                            ký kết hợp đồng điện tử qua email cần tuân thủ một số bước nhất định. Hãy cùng Chúng Tôi
                            tìm hiểu ngay trong bài viết dưới đây!

                        </p>
                        <div class="text-end m2">
                            <a href="/tin-tuc/quy-trinh-ky-ket-hop-dong-dien-tu-qua-email-nhu-the-nao"
                                class="btn btn-link link-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="2"></circle>
                                    <path
                                        d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7">
                                    </path>
                                </svg>
                                Chi tiết
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-connect-office">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-12">
                <div class="tab-office">
                    <div class="title-section text-left">
                        Kết nối với Chúng Tôi
                    </div>
                    <div class="tab-content-office">
                        <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="ha_noi-tab" data-bs-toggle="tab" data-bs-target="#ha_noi"
                                    role="tab" aria-controls="ha_noi" aria-selected="true">
                                    Văn phòng Hà Nội
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="hcm-tab" data-bs-toggle="tab" data-bs-target="#hcm" role="tab"
                                    aria-controls="hcm" aria-selected="false">
                                    Văn phòng TP. HCM
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vinh-tab" data-bs-toggle="tab" data-bs-target="#vinh" role="tab"
                                    aria-controls="vinh" aria-selected="false">
                                    Văn phòng Vinh
                                </a>
                            </li>

                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="ha_noi" role="tabpanel"
                                aria-labelledby="ha_noi-tab">
                                <div class="info-office">
                                    <p class="address">
                                        <img src="https://esoc.vn/Assets/Images/Index/icon_map.svg" alt="Map">
                                        Tầng 4 - Toà nhà 97 - 99 Láng Hạ, Quận Đống Đa, Thành Phố Hà Nội
                                    </p>
                                    <p>
                                        <img src="https://esoc.vn/Assets/Images/Index/icon_dien_thoai.svg" alt="Phone">
                                        Điện thoại: (024) 7308 6680
                                    </p>
                                    <p>
                                        <img src="https://esoc.vn/Assets/Images/Index/icon_fax.svg" alt="Mail">
                                        Mail: sales@nhanhoa.com
                                    </p>
                                    <p>
                                        <img src="https://esoc.vn/Assets/Images/Index/smartphone.svg" alt="Hotline">
                                        Hotline: 1900 6680
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="hcm" role="tabpanel" aria-labelledby="hcm-tab">
                                <div class="info-office">
                                    <p class="address">
                                        <img src="https://esoc.vn/Assets/Images/Index/icon_map.svg" alt="Map">
                                        927/1 CMT8, Phường 7, Quận Tân Bình, Thành phố Hồ Chí Minh
                                    </p>
                                    <p>
                                        <img src="https://esoc.vn/Assets/Images/Index/icon_dien_thoai.svg" alt="Phone">
                                        Điện thoại: (024) 7308 6680
                                    </p>
                                    <p>
                                        <img src="https://esoc.vn/Assets/Images/Index/icon_fax.svg" alt="Mail">
                                        Mail: hcmsales@nhanhoa.com
                                    </p>
                                    <p>
                                        <img src="https://esoc.vn/Assets/Images/Index/smartphone.svg" alt="Hotline">
                                        Hotline: 1900 6680
                                    </p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="vinh" role="tabpanel" aria-labelledby="vinh-tab">
                                <div class="info-office">
                                    <p class="address">
                                        <img src="https://esoc.vn/Assets/Images/Index/icon_map.svg" alt="Map">
                                        Tầng 2 Tòa nhà Sài Gòn Sky, ngõ 26 Nguyễn Thái Học, phường Đội Cung, TP.
                                        Vinh, Nghệ An
                                    </p>
                                    <p>
                                        <img src="https://esoc.vn/Assets/Images/Index/icon_dien_thoai.svg" alt="Phone">
                                        Điện thoại: (024) 7308 6680 - nhánh 6
                                    </p>
                                    <p>
                                        <img src="https://esoc.vn/Assets/Images/Index/icon_fax.svg" alt="Mail">
                                        Mail: contact@nhanhoa.com
                                    </p>
                                    <p>
                                        <img src="https://esoc.vn/Assets/Images/Index/smartphone.svg" alt="Hotline">
                                        Hotline: 1900 6680
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="download-app">
                        <div>
                            Tải App Nhân Hoà trên ứng dụng di động
                        </div>
                        <div class="app-store-google">
                            <a href="https://apps.apple.com/vn/app/nh%C3%A2n-ho%C3%A0/id1469246570" title="App Store"
                                target="_blank">
                                <img src="https://esoc.vn/Assets/Images/Index/apple_appstore.png" alt="App Store">
                                App Store
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=com.nh.domain&amp;hl=vi&amp;pli=1"
                                title="App Store" target="_blank">
                                <img src="https://esoc.vn/Assets/Images/Index/android_appstore.png" alt="Google Play">
                                Google Play
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
