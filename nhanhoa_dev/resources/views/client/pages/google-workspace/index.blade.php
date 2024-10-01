@extends('client.layouts.master')

@section('content')
    <div class="section-banner-google-wp">
        <div class="container">
            <div class="content">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="info">
                            <h1 class="title">
                                Nhân Hoà Là Đối Tác Premier
                                <span>
                                    Hàng Đầu Của Google Tại Việt Nam
                                </span>
                            </h1>
                            <div class="description">
                                Hiện nay, bộ công cụ Google Workspace chính là chìa khóa giúp doanh nghiệp
                                tìm ra giải pháp vượt trội hơn mọi đối thủ cạnh tranh và mở ra nhiều cơ hội
                                bước tiến mới phát triển hơn trong kỷ nguyên chuyển đổi số.
                            </div>
                            <div class="logo-google">
                                <a href="https://cloud.withgoogle.com/partners/detail/?id=ACkb94aonElWsteBUQmLWRQaWBOkSRKhJb3tnmQ_gSYX2CwxpSlNlEaToKBP0YHFUJJJdf7lHiLl&amp;hl=en"
                                    target="_blank">
                                    <img src="https://nhanhoa.com/templates/images/v2/google/partner.png"
                                        alt="Nhân Hoà Là ĐỐI TÁC UỶ QUYỀN HÀNG ĐẦU CỦA GOOGLE TẠI VIỆT NAM">
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="img-banner">
                            <img src="https://nhanhoa.com/templates/images/v2/google/google_slider_01.png"
                                alt="ĐỐI TÁC UỶ QUYỀN HÀNG ĐẦU CỦA GOOGLE TẠI VIỆT NAM .">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-google-box-02">
        <div class="container">
            <div class="content">
                <div class="row align-items-center">
                    <div class="col-md-6 col-12">
                        <div class="img-banner">
                            <img src="https://nhanhoa.com/templates/images/v2/google/google-wp23.png"
                                alt="ĐỐI TÁC UỶ QUYỀN HÀNG ĐẦU CỦA GOOGLE TẠI VIỆT NAM">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="info">
                            <h2 class="title">
                                Google Workspace là gì?
                            </h2>
                            <div class="dsc">
                                Là bộ ứng dụng thông minh dựa trên nền tảng điện toán đám mây với nhiều ứng dụng
                                cộng tác hữu ích như: Gmail, Drive, Docs, Sheets,… Bộ công cụ này mang đến sự
                                thuậntiện cho người dùng trong suốt quá trình làm việc cũng như kết nối với khách
                                hàng và tổ chức cho dù họ đang ở bất cứ đâu.

                            </div>
                            <h3 class="dsc-02">
                                Email theo tên miền công ty của bạn
                            </h3>
                            <div class="img-icon text-center">
                                <img src="https://nhanhoa.com/templates/images/v2/google/google-wp21.png"
                                    alt="Google Workspace là gì?">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-table-price-wp section-tab-price-service section-tab-price-has-slide" id="price_table">
        <div class="container">
            <div class="content">
                <h2 class="title-section">
                    Bảng giá Google Workspace
                </h2>
                <ul class="nav nav-pills nav-tab-pricing">
                    <li class="nav-item">
                        <a class="nav-link active" id="business-tab" data-toggle="pill" href="#business">
                            Business
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="edu-tab" data-toggle="pill" href="#edu">Education</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="business" role="tabpanel" aria-labelledby="business-tab">
                        <div class="list-sevice">
                            <div class="swiper swiper_pricing_general">
                                <div class="swiper-wrapper">
                                    @forelse ( $googleWorkspaceBusiness as $item )
                                    <div class="swiper-slide">
                                        <div class="item ">
                                            <div class="bgr-top">
                                                <img src="https://nhanhoa.com/templates/images/v2/subtract.png"
                                                    alt="Bảng giá">
                                            </div>

                                            <div class="icon-name">
                                                <div class="icon">
                                                    <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png"
                                                        alt="Business Starter">
                                                </div>
                                                <div class="name-price">
                                                    <div class="name">
                                                       {{ $item->name }}
                                                    </div>
                                                    <div class="price">
                                                        {{ number_format($item->price_per_month, 0, ',', '.') }} đ/Tháng
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <ul class="pl-0">
                                                    <li><i class="fas fa-check-circle" style="color: #74C0FC;"></i> Dung
                                                        lượng lưu trữ: {{ $item->storage_capacity }}</li>
                                                    <li><i class="fas fa-check-circle" style="color: #74C0FC;"></i> 20 user
                                                        đầu tiên:  {{ number_format($item->price_first_20_users, 0, ',', '.') }}đ/user/tháng</li>
                                                    <li><i class="fas fa-check-circle" style="color: #74C0FC;"></i> 21 user
                                                        trở lên:  {{ number_format($item->price_after_20_users, 0, ',', '.') }}đ/user/tháng</li>
                                                    <li><i class="fas fa-check-circle" style="color: #74C0FC;"></i> Gia hạn:
                                                        {{ number_format($item->renewal_price, 0, ',', '.') }}đ/user/tháng</li>
                                                    <li><i class="fas fa-check-circle" style="color: #74C0FC;"></i> Số lượng
                                                        user giới hạn: {{ $item->user_limit }}</li>
                                                    <li class="hot-highlight"><i class="fas fa-gift"
                                                            style="color: #ee2b2b;"></i>{{ isset($item->promotion) ? $item->promotion->name : '' }}</li>
                                                </ul>


                                            </div>
                                            {{-- <div class="account-qty">
                                                <div class="account-qty-item">
                                                    Số lượng user:
                                                </div>
                                                <div class="account-qty-item">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <a class="btn btn-outline-secondary minusBtn"
                                                                href="javascript:;">-</a>
                                                        </div>
                                                        <input type="number" class="form-control account_input"
                                                            value="1" />
                                                        <div class="input-group-append">
                                                            <a class="btn btn-outline-secondary plusBtn"
                                                                href="javascript:;">+</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="link-add-cart">
                                                <a class="btn-add-cart btn-service add_service_cart"
                                                onclick="openPopup({{ $item->id }}, '{{ $item->name }}')">

                                                    <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                        <div class="rect1"></div>
                                                        <div class="rect2"></div>
                                                        <div class="rect3"></div>
                                                        <div class="rect4"></div>
                                                        <div class="rect5"></div>
                                                    </div>
                                                    <span class="btn_text">Liên hệ</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @empty

                                    @endforelse


                                </div>

                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
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
                                                <p class="conten-sub">Vui lòng nhập thông tin để chúng tôi liên hệ lại với bạn.</p>
                                            </div>
                                        </div>
                                        <form action="{{ route('page.google-workspace-business-pay') }}" method="POST" id="lienhe">
                                            @csrf
                                            <input type="hidden" id="cloud_id_input" name="googleworkspace_id">
                                            <input class="form-control" type="text" placeholder="Họ và tên" name="name">
                                            <input class="form-control" type="text" placeholder="Số điện thoại"
                                                name="phone">
                                            <input class="form-control" type="text" placeholder="Email" name="email">
                                            <div class="product-info">
                                                <p>Gói Google Workspace : </p>
                                                <span class="product-name">
                                                    Business - <span id="product_name"></span>
                                                </span>
                                            </div>

                                            <div class="submit-content">
                                                <button class="btn btn-submit">Gửi Đi</button>
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
                    <div class="tab-pane fade" id="edu" role="tabpanel" aria-labelledby="edu-tab">
                        <div class="info-emty">
                            <div class="row">
                              @forelse ($googleWorkspaceEducation as $item )
                              <div class="col-lg-4 col-md-6 col-12">
                                <div class="item">
                                    <div class="bgr-top">
                                        <img src="https://nhanhoa.com/templates/images/v2/subtract.png"
                                            alt="Bảng giá">
                                    </div>

                                    <div class="icon-name">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png"
                                                alt="Business Starter">
                                        </div>
                                        <div class="name-price">
                                            <div class="name">
                                                {{ $item->name }}
                                            </div>
                                            <div class="price">
                                                {{ number_format($item->price, 0, ',', '.') }} đ/Tháng
                                            </div>
                                        </div>
                                    </div>

                                    <div class="info">
                                        <ul class="pl-0">
                                            <li style="flex-wrap:nowrap;"><i class="fas fa-check-circle"
                                                    style="color: #74C0FC;"></i> {{ $item->describe }}. </li>
                                            <li style="flex-wrap:nowrap;"><i class="fas fa-check-circle"
                                                    style="color: #74C0FC;"></i> Dung lượng lưu trữ: {{ $item->storage }}</li>

                                        </ul>


                                    </div>

                                    {{-- <div class="account-qty d-none">
                                        <div class="account-qty-item">
                                            Số lượng user:
                                        </div>
                                        <div class="account-qty-item">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <a class="btn btn-outline-secondary minusBtn"
                                                        href="javascript:;">-</a>
                                                </div>
                                                <input type="number" class="form-control account_input"
                                                    value="1" />
                                                <div class="input-group-append">
                                                    <a class="btn btn-outline-secondary plusBtn"
                                                        href="javascript:;">+</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="link-add-cart">
                                        <a class="btn-add-cart btn_show_popup btn-service" style="display: none"
                                            data-title="Tư vấn gói Google Workspace {{ $item->name }}"
                                            href="#tuvanngay">
                                            Liên hệ tư vấn
                                        </a>

                                        <a class="btn-add-cart btn-service add_service_cart"
                                            onclick="openPopup1({{ $item->id }}, '{{ $item->name }}')">
                                            <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                <div class="rect1"></div>
                                                <div class="rect2"></div>
                                                <div class="rect3"></div>
                                                <div class="rect4"></div>
                                                <div class="rect5"></div>
                                            </div>
                                            <span class="btn_text">Liên hệ</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="popup-cart" id="popup1">
                                <div class="content_popup">
                                    <a href="javascript:void(0)" class="re-close-popup close" onclick="closePopup1()"
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
                                        <form action="{{ route('page.google-workspace-education-pay') }}" method="POST" id="lienhe">
                                            @csrf
                                            <input type="hidden" id="cloud_id_input1" name="googleworkspace_id">
                                            <input class="form-control" type="text" placeholder="Họ và tên" name="name">
                                            <input class="form-control" type="text" placeholder="Số điện thoại"
                                                name="phone">
                                            <input class="form-control" type="text" placeholder="Email" name="email">
                                            <div class="product-info">
                                                <p>Gói Google Workspace : </p>
                                                <span class="product-name">
                                                    Education - <span id="product_name1"></span>
                                                </span>
                                            </div>

                                            <div class="submit-content">
                                                <button class="btn btn-submit">Gửi Đi</button>
                                                <div class="go-hotline">Gọi hotline <span>(024) 7308 6680</span>
                                                    (24/7)
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                              @empty

                              @endforelse

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- <div class="section-instruct-wp"
        style="background-image: url(https://nhanhoa.com/templates/images/v2/google/banner_huong_dan.jpg);">
        <div class="container">
            <div class="content">
                <h2 class="title-section">
                    Hướng dẫn chọn gói Google Workspace phù hợp
                </h2>
                <div class="content-table">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">

                                </th>
                                <th scope="col">
                                    Business Starter
                                </th>
                                <th scope="col">
                                    Business Standard
                                </th>
                                <th scope="col">
                                    Business Plus
                                </th>
                                <th scope="col">
                                    Enterprise Plus
                                </th>
                                <th scope="col">
                                    Enterprise Standard
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Số lượng User
                                </td>
                                <td>
                                    &lt;300
                                </td>
                                <td>
                                    &lt;300
                                </td>

                                <td>
                                    &lt;300
                                </td>
                                <td>
                                    &lt;300
                                </td>
                                <td>
                                    &gt;300
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    Chỉ cần gửi/ nhận email
                                </td>
                                <td>
                                    <i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                </td>
                                <td rowspan="2">
                                    <i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                </td>
                                <td rowspan="3">
                                    <i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                </td>
                                <td rowspan="4">
                                    <i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                </td>
                                <td rowspan="5">
                                    <i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    Cần share driver
                                </td>
                                <td>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Cần dung lượng lưu trữ đám mây cho mỗi user 2 TB là đủ
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Cần các tính năng kiểm soát an ninh cao
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Cần quản lý tuân thủ và chi tiết công việc
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>

                            </tr>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div> --}}

    {{-- <section class="section-table-compare">
        <div class="container">
            <div class="content">
                <h2 class="title-section">
                    Bảng so sánh tính năng
                </h2>
                <div class="div-responsive">

                    <table class="table table-hover table-responsive features_table" id="features_table">
                        <thead>
                            <tr>
                                <th width=""></th>
                                <th width="">
                                    <div class="header_features_table">
                                        <div class="header_name">Business Starter</div>
                                        <div class="header_price header_price_old">151.000 đ</div>
                                        <div class="header_price">
                                            76.000 đ
                                            <label class="tips" data-placement="top" data-html="true"
                                                data-toggle="tooltip" title=""
                                                data-original-title="Chương trình 76.000 đ/tháng<br>
                                                - Ưu đãi này chỉ dành cho khách hàng sử dụng Google Workspace mới. <br>
                                                - Giá chỉ áp dụng cho 20 người dùng đầu tiên và áp dụng cho 12 tháng đầu tiên, người dùng thứ 21 trở đi áp dụng giá 151.000 đ/tháng.<br>
                                                - Chương trình trên tương đương với ưu đãi 50% khi đăng ký 12 tháng. ">
                                                <i class="fas fa-question-circle fa-sm" style="color: #8d929a;"></i>
                                            </label>
                                            <span>/người dùng/tháng</span>
                                        </div>
                                        <a href="javascript:;" class="btn-header-price btn-add-to-cart-table">Đặt Mua</a>
                                    </div>

                                </th>
                                <th width="">
                                    <div class="header_features_table">
                                        <div class="header_name">Business Standard</div>
                                        <div class="header_price header_price_old">301.000 đ</div>
                                        <div class="header_price">181.000 đ
                                            <label class="tips" data-placement="top" data-html="true"
                                                data-toggle="tooltip" title=""
                                                data-original-title="Chương trình ưu đãi đăng ký 12 tháng <br>
                                                - Ưu đãi này chỉ dành cho khách hàng sử dụng Google Workspace mới.<br>
                                                - Giá chỉ áp dụng cho 20 người dùng đầu tiên và áp dụng cho 12 tháng đầu tiên.<br>
                                                - Giá tiêu chuẩn sẽ được áp dụng cho tất cả người dùng sau 12 tháng.">
                                                <i class="fas fa-question-circle fa-sm" style="color: #8d929a;"></i>
                                            </label>
                                            <span>/người dùng/tháng</span>
                                        </div>
                                        <a href="javascript:;" class="btn-header-price btn-add-to-cart-table">Đặt Mua</a>
                                    </div>
                                </th>
                                <th width="">
                                    <div class="header_features_table">
                                        <div class="header_name">Business Plus</div>
                                        <div class="header_price header_price_old"></div>
                                        <div class="header_price">456.000 đ <span>/người dùng/tháng</span></div>
                                        <a href="javascript:;" class="btn-header-price btn-add-to-cart-table">Đặt Mua</a>
                                    </div>


                                </th>
                                <th width="">

                                    <div class="header_features_table">
                                        <div class="header_name">Enterprise</div>
                                        <div class="header_price header_price_old"></div>
                                        <div class="header_price_note">
                                            <span>Liên hệ bộ phận tư vấn để biết thông tin gói</span>
                                            <a href="#tuvanngay" class="btn-header-price btn_show_popup"
                                                data-title="Tư vấn gói Google Workspace EnterPrise">Liên hệ tư vấn</a>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>

                                    <div class="detail-headline">
                                        <img
                                            src="https://nhanhoa.com/khuyenmai/google-workspace/assets/images/gmail-icon.png">
                                        <div class="detail-text">
                                            <strong>Gmail</strong> Email doanh nghiệp
                                        </div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="detail-item">
                                        <div class="detail-text">
                                            Email tùy chỉnh cho doanh nghiệp
                                        </div>

                                    </div>
                                </td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="detail-item">
                                        <div class="detail-text">
                                            Ngăn chặn hành vi gian lận và nội dung không mong muốn giúp chặn hơn 99,9% số vụ
                                            tấn công
                                        </div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="detail-item">
                                        Dùng email không có quảng cáo
                                    </div>
                                </td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr>
                                <td>

                                    <div class="detail-headline">
                                        <img
                                            src="https://nhanhoa.com/khuyenmai/google-workspace/assets/images/meet-icon.png">
                                        <div class="detail-text">
                                            <strong>Meet</strong> Hội nghị truyền hình và hội nghị truyền thanh
                                        </div>
                                    </div>
                                </td>
                                <td><strong>100 người tham dự</strong></td>
                                <td><strong>150 người tham dự</strong></td>
                                <td><strong>500 người tham dự</strong></td>
                                <td><strong>500 người tham dự</strong></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="detail-item">
                                        <div class="detail-text">
                                            Thời lượng cuộc họp (tối đa)
                                        </div>

                                    </div>
                                </td>
                                <td><strong>24 giờ</strong></td>
                                <td><strong>24 giờ</strong></td>
                                <td><strong>24 giờ</strong></td>
                                <td><strong>24 giờ</strong></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="detail-item">
                                        <div class="detail-text">
                                            Số điện thoại của Hoa Kỳ hoặc quốc tế
                                        </div>
                                    </div>
                                </td>
                                <td><i class="fas fa-times-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-times-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="detail-item">
                                        Bảng trắng kỹ thuật số
                                    </div>
                                </td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="detail-item">
                                        Khử tiếng ồn
                                    </div>
                                </td>
                                <td><i class="fas fa-times-circle" style="color: red;"></i></td>
                                <td><i class="fas fa-times-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="detail-item">
                                        Bản ghi âm cuộc họp đã lưu vào Google Drive
                                    </div>
                                </td>
                                <td><i class="fas fa-times-circle" style="color: red;"></i></td>
                                <td><i class="fas fa-times-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr class="tr_1" style="display:none;">
                                <td>
                                    <div class="detail-item">
                                        Thăm dò ý kiến và Hỏi đáp
                                    </div>
                                </td>
                                <td><i class="fas fa-times-circle" style="color: red;"></i></td>
                                <td><i class="fas fa-times-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr class="tr_1" style="display:none;">
                                <td>
                                    <div class="detail-item">
                                        Các biện pháp kiểm duyệt
                                    </div>
                                </td>
                                <td><i class="fas fa-times-circle" style="color: red;"></i></td>
                                <td><i class="fas fa-times-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr class="tr_1" style="display:none;">
                                <td>
                                    <div class="detail-item">
                                        Nhận xét
                                    </div>
                                </td>
                                <td><i class="fas fa-times-circle" style="color: red;"></i></td>
                                <td><i class="fas fa-times-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr class="tr_1" style="display:none;">
                                <td>
                                    <div class="detail-item">
                                        Phòng họp nhóm
                                    </div>
                                </td>
                                <td><i class="fas fa-times-circle" style="color: red;"></i></td>
                                <td><i class="fas fa-times-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr class="tr_1" style="display:none;">
                                <td>
                                    <div class="detail-item">
                                        Theo dõi tình hình tham dự
                                    </div>
                                </td>
                                <td><i class="fas fa-times-circle" style="color: red;"></i></td>
                                <td><i class="fas fa-times-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr class="tr_1" style="display:none;">
                                <td>
                                    <div class="detail-item">
                                        Phát trực tiếp trong miền
                                    </div>
                                </td>
                                <td><i class="fas fa-times-circle" style="color: red;"></i></td>
                                <td><i class="fas fa-times-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr>
                                <td class="view-more-td" colspan="5">
                                    <a href="javascript:;" class="btn-view-more-td" data-tr="tr_1">
                                        <span>Xem thêm tính năng</span> <i class="fas fa-angle-down fa-sm"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <div class="detail-headline">
                                        <img
                                            src="https://nhanhoa.com/khuyenmai/google-workspace/assets/images/drive-icon.png">
                                        <div class="detail-text">
                                            <strong>Drive</strong> Bộ nhớ an toàn trên đám mây
                                        </div>
                                    </div>
                                </td>
                                <td><strong>30 GB/người dùng</strong></td>
                                <td><strong>2 TB/người dùng</strong></td>
                                <td><strong>5 TB/người dùng</strong></td>
                                <td><strong>Dung lượng tùy ý</strong></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="detail-item">
                                        Drive cho máy tính
                                    </div>
                                </td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="detail-item">
                                        Hỗ trợ hơn 100 loại tệp
                                    </div>
                                </td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="detail-item">
                                        Bộ nhớ gộp
                                    </div>
                                </td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr class="tr_2" style="display:none;">
                                <td>
                                    <div class="detail-item">
                                        Bộ nhớ dùng chung cho nhóm
                                    </div>
                                </td>
                                <td><i class="fas fa-times-circle" style="color: red;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr class="tr_2" style="display:none;">
                                <td>
                                    <div class="detail-item">
                                        Chia sẻ với đối tượng mục tiêu
                                    </div>
                                </td>
                                <td><i class="fas fa-times-circle" style="color: red;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>

                            <tr>
                                <td class="view-more-td" colspan="5">
                                    <a href="javascript:;" class="btn-view-more-td" data-tr="tr_2">
                                        <span>Xem thêm tính năng</span> <i class="fas fa-angle-down fa-sm"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <div class="detail-headline">
                                        <img
                                            src="https://nhanhoa.com/khuyenmai/google-workspace/assets/images/gg-chat-icon.png">
                                        <div class="detail-text">
                                            <strong>Chat</strong> Nhắn tin cho nhóm
                                        </div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="detail-item">
                                        Bật hoặc tắt lịch sử trò chuyện theo mặc định
                                    </div>
                                </td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="detail-item">
                                        Tự động chấp nhận lời mời
                                    </div>
                                </td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="detail-item">
                                        Trò chuyện riêng bên ngoài
                                    </div>
                                </td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr class="tr_3" style="display:none;">
                                <td>
                                    <div class="detail-item">
                                        Phòng trò chuyện nâng cao, trong đó có phòng theo chuỗi và phòng dành cho khách sử
                                        dụng
                                    </div>
                                </td>
                                <td><i class="fas fa-times-circle" style="color: red;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>


                            <tr>
                                <td class="view-more-td" colspan="5">
                                    <a href="javascript:;" class="btn-view-more-td" data-tr="tr_3">
                                        <span>Xem thêm tính năng</span> <i class="fas fa-angle-down fa-sm"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <div class="detail-headline">
                                        <img
                                            src="https://nhanhoa.com/khuyenmai/google-workspace/assets/images/gg-calendar-icon.png">
                                        <div class="detail-text">
                                            <strong>Lịch</strong> Lịch chia sẻ
                                        </div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="detail-item">
                                        Trang đặt lịch cuộc hẹn
                                    </div>
                                </td>
                                <td><i class="fas fa-times-circle" style="color: red;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="detail-item">
                                        Duyệt tìm và đặt trước phòng họp
                                    </div>
                                </td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr>
                                <td>

                                    <div class="detail-headline">
                                        <img
                                            src="https://nhanhoa.com/khuyenmai/google-workspace/assets/images/gg-docs-icon.png">
                                        <div class="detail-text">
                                            <strong>Tài liệu, Trang tính, Trang trình bày</strong> Tạo nội dung cộng tác
                                        </div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="detail-item">
                                        Ghi chú được chia sẻ trong Keep
                                    </div>
                                </td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="detail-item">
                                        Trình tạo trang web trong Sites
                                    </div>
                                </td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="detail-item">
                                        Trình tạo khảo sát trong Biểu mẫu
                                    </div>
                                </td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="detail-item">
                                        Khả năng tương tác với các tệp Office
                                    </div>
                                </td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr class="tr_4" style="display:none;">
                                <td>
                                    <div class="detail-item">
                                        Dễ phân tích hơn nhờ các tính năng Điền thông minh, Xóa thông minh và Trả lời
                                    </div>
                                </td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr class="tr_4" style="display:none;">
                                <td>
                                    <div class="detail-item">
                                        Hỗ trợ thao tác nhập bằng tính năng Soạn thư thông minh, đề xuất ngữ pháp và tự động
                                        sửa lỗi chính tả
                                    </div>
                                </td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr class="tr_4" style="display:none;">
                                <td>
                                    <div class="detail-item">
                                        Các trang tính liên kết
                                    </div>
                                </td>
                                <td><strong>Cơ bản</strong></td>
                                <td><strong>Cơ bản</strong></td>
                                <td><strong>Nâng cao</strong></td>
                                <td><strong>Doanh nghiệp</strong></td>
                            </tr>
                            <tr class="tr_4" style="display:none;">
                                <td>
                                    <div class="detail-item">
                                        Trang đặt lịch cuộc hẹn
                                    </div>
                                </td>
                                <td><i class="fas fa-times-circle" style="color: red;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr>
                                <td class="view-more-td" colspan="5">
                                    <a href="javascript:;" class="btn-view-more-td" data-tr="tr_4">
                                        <span>Xem thêm tính năng</span> <i class="fas fa-angle-down fa-sm"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>

                                    <div class="detail-headline">
                                        <img
                                            src="https://nhanhoa.com/khuyenmai/google-workspace/assets/images/appsheet.svg">
                                        <div class="detail-text">
                                            <strong>AppSheet</strong> Tạo ứng dụng mà không cần mã
                                        </div>
                                    </div>
                                </td>
                                <td><i class="fas fa-times-circle" style="color: red;"></i></td>
                                <td><i class="fas fa-times-circle" style="color: red;"></i></td>
                                <td><i class="fas fa-times-circle" style="color: red;"></i></td>
                                <td><i class="fas fa-check-circle" style="color: #74C0FC;"></i></td>
                            </tr>
                            <tr>
                                <td>

                                    <div class="detail-headline">
                                        <img
                                            src="https://nhanhoa.com/khuyenmai/google-workspace/assets/images/google-cloud-search.png">
                                        <div class="detail-text">
                                            <strong>Cloud Search</strong> Tìm kiếm thông minh
                                        </div>
                                    </div>
                                </td>
                                <td><i class="fas fa-times-circle" style="color: red;"></i></td>
                                <td><strong>Dữ liệu bên thứ nhất</strong></td>
                                <td><strong>Dữ liệu bên thứ nhất</strong></td>
                                <td><strong>Dữ liệu bên thứ nhất và bên thứ ba</strong></td>
                            </tr>





                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section> --}}

    <div class="section-diem-noi-troi">
        <div class="container">
            <div class="content">
                <h2 class="title-section">
                    Điểm nổi trội khi mua Google Workspace
                    <span>
                        tại Nhân Hoà
                    </span>
                </h2>

                <div class="info">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">

                                </th>
                                <th scope="col">
                                    Mua tại Nhân Hoà
                                </th>
                                <th scope="col">
                                    Mua trực tiếp tại Google
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Hướng dẫn
                                </td>
                                <td>
                                    - Hướng dẫn bằng tiếng Việt
                                    <br>
                                    - Hiểu rõ những khó khăn của người
                                </td>
                                <td>
                                    - Hướng dẫn tự động, tự xem tài liệu hoặc video
                                    <br>
                                    - Call center đa số là người nước ngoài
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Hỗ trợ kỹ thuật
                                </td>
                                <td>
                                    - SLA 99.9%, thường trực 24/7/365
                                    <br>
                                    - Thời gian triển khai ngay.
                                </td>
                                <td>
                                    - Hỗ trợ kỹ thuật 24/7
                                    <br>
                                    - Phân theo gói Google Workspace để hỗ trợ khách
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Giá
                                </td>
                                <td>
                                    - Giá ưu đãi độc quyền tại Nhân Hoà.
                                    <br>
                                    - Nhận ưu đãi từ các dịch vụ khác của Nhân Hoà giúp
                                    bạn kinh doanh online hiệu quả hơn, tiết kiệm hơn
                                    <br>
                                    - Dễ dàng kiểm soát, nắm bắt chi phí, xuất hoá đơn
                                </td>
                                <td>
                                    - Giá theo chính sách Google
                                    <br>
                                    - Chỉ xuất thông tin chi phí theo bản kê, không phải
                                    hoá đơn VAT
                                    <br>
                                    - Khó kiểm soát chi phí phát sinh license, hoá đơn
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Cài đặt
                                </td>
                                <td>
                                    - Hệ sinh thái Nhân Hoà giúp quản lý đồng bộ dịch vụ khác dễ dàng
                                </td>
                                <td>
                                    - Khó quản lý tập trung
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="section-cong-viec">
        <div class="container">
            <div class="content">
                <div class="row align-items-center">
                    <div class="col-md-6 col-12">
                        <div class="info-left">
                            <div class="row">
                                <div class="col-6">
                                    <div class="item">
                                        <div class="img">
                                            <img src="https://nhanhoa.com/templates/images/v2/google/gogobc_1.png"
                                                alt="Email bảo mật dành cho doanh nghiệp
                                            và nhiều tính năng khác, dễ dàng sử
                                            dụng">
                                        </div>
                                        <h3 class="title">
                                            Gmail
                                        </h3>
                                        <div class="dsc">
                                            Email bảo mật dành cho doanh nghiệp
                                            và nhiều tính năng khác, dễ dàng sử
                                            dụng
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img">
                                            <img src="https://nhanhoa.com/templates/images/v2/google/gogobc_2.png"
                                                alt="Tích hợp liền mạch với Gmail, Drive,  Danh bạ, Sites và Meet ">
                                        </div>
                                        <h3 class="title">
                                            Lịch
                                        </h3>
                                        <div class="dsc">
                                            Tích hợp liền mạch với Gmail, Drive, Danh bạ, Sites và Meet
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img">
                                            <img src="https://nhanhoa.com/templates/images/v2/google/gogobc_3.png"
                                                alt="Dễ dàng và hiệu quả ở bất cứ đâu qua
                                            tin nhắn trực tiếp và cuộc trò chuyện
                                            nhóm">
                                        </div>
                                        <h3 class="title">
                                            Chat
                                        </h3>
                                        <div class="dsc">
                                            Dễ dàng và hiệu quả ở bất cứ đâu qua
                                            tin nhắn trực tiếp và cuộc trò chuyện
                                            nhóm
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="item">
                                        <div class="img">
                                            <img src="https://nhanhoa.com/templates/images/v2/google/gogobc_4.png"
                                                alt="Lưu trữ, truy cập và chia sẻ tệp của bạn
                                            ở một nơi an toàn">
                                        </div>
                                        <h3 class="title">
                                            Tài liệu
                                        </h3>
                                        <div class="dsc">
                                            Lưu trữ, truy cập và chia sẻ tệp của bạn
                                            ở một nơi an toàn
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img">
                                            <img src="https://nhanhoa.com/templates/images/v2/google/gogobc_5.png"
                                                alt="Kết nối mọi người trong nhóm của bạn
                                            nhờ tính năng hội nghị truyền hình
                                            cho doanh nghiệp">
                                        </div>
                                        <h3 class="title">
                                            Google Meet
                                        </h3>
                                        <div class="dsc">
                                            Kết nối mọi người trong nhóm của bạn
                                            nhờ tính năng hội nghị truyền hình
                                            cho doanh nghiệp
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img">
                                            <img src="https://nhanhoa.com/templates/images/v2/google/gogobc_6.png"
                                                alt="Lưu trữ, truy cập và chia sẻ tệp của bạn
                                            ở một nơi an toàn.">
                                        </div>
                                        <h3 class="title">
                                            Driver
                                        </h3>
                                        <div class="dsc">
                                            Lưu trữ, truy cập và chia sẻ tệp của bạn
                                            ở một nơi an toàn.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="info-right">
                            <div class="img">
                                <img src="https://nhanhoa.com/templates/images/v2/google/gogobc_7.png" alt="">
                            </div>
                            <h2 class="title-section text-left">
                                Tất cả những gì bạn cần
                                <span>cho công việc</span>
                            </h2>
                            <div class="dsc">
                                Một giải pháp linh hoạt, sáng tạo để mọi người và tổ chức đạt được
                                nhiều thành quả hơn.
                            </div>
                            <div class="btn-cv">
                                {{-- <a class="btn btn-main btn_show_popup" href="#tuvanngay" title="">
                                    Liên hệ tư vấn
                                </a> --}}
                                <a class="btn btn-gp" href="" title="">
                                    Tìm hiểu giải pháp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="box-section bg-ask-questions">
        <div class="container">
            <div class="ask-questions">
                <h2 class="title-section">
                    Một số câu hỏi thường gặp
                </h2>

                <div id="accordion" class="row">
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header" id="ask_1">
                                <button class="btn" data-toggle="collapse" data-target="#collapse_1"
                                    aria-expanded="true" aria-controls="collapse_1">
                                    1. Google Workspace (trước đây là G Suite) gồm có những công cụ nào? <span
                                        class="transition"></span>
                                </button>
                            </div>
                            <div id="collapse_1" class="collapse" aria-labelledby="article_1" data-parent="#accordion"
                                style="">
                                <div class="card-body mb-30">
                                    Giống như G Suite, tất cả gói của Google Workspace đều cung cấp email tùy chỉnh cho
                                    doanh nghiệp và gồm có các công cụ cộng tác như Gmail, Lịch, Meet, Chat, Drive, Tài
                                    liệu, Trang tính, Trang trình bày, Biểu mẫu, Sites và nhiều công cụ khác.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header" id="ask_2">
                                <button class="btn" data-toggle="collapse" data-target="#collapse_2"
                                    aria-expanded="true" aria-controls="collapse_2">
                                    2. Gói Google Workspace nào phù hợp với doanh nghiệp của tôi?
                                    <span class="transition"></span></button>
                            </div>
                            <div id="collapse_2" class="collapse" aria-labelledby="article_2" data-parent="#accordion"
                                style="">
                                <div class="card-body mb-30">
                                    Chúng Tôi thiết kế nhiều gói nhằm đáp ứng nhu cầu kinh doanh của riêng bạn. Để được tư
                                    vấn chi tiết, vui lòng liên hệ đến hotline 1900 6680.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header" id="ask_3">
                                <button class="btn" data-toggle="collapse" data-target="#collapse_3"
                                    aria-expanded="true" aria-controls="collapse_3">
                                    3. Gmail trong Google Workspace khác với Gmail miễn phí như thế nào?
                                    <span class="transition"></span></button>
                            </div>
                            <div id="collapse_3" class="collapse" aria-labelledby="article_3" data-parent="#accordion"
                                style="">
                                <div class="card-body mb-30">
                                    Các tính năng trong Gmail của Google Workspace bao gồm: email doanh nghiệp tùy chỉnh
                                    @yourcompany, địa chỉ email nhóm không giới hạn, đảm bảo thời gian hoạt động 99,9%, gấp
                                    đôi bộ nhớ của Gmail miễn phí, không có quảng cáo,....
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header" id="ask_4">
                                <button class="btn" data-toggle="collapse" data-target="#collapse_4"
                                    aria-expanded="true" aria-controls="collapse_4">4. Tôi muốn mua riêng dịch vụ email
                                    trong bộ Google Workspace được không? <span class="transition"></span></button>
                            </div>
                            <div id="collapse_4" class="collapse" aria-labelledby="article_4" data-parent="#accordion"
                                style="">
                                <div class="card-body mb-30">
                                    Chúng Tôi rất tiếc, Google Workspace là bộ công cụ hoàn chỉnh tuyệt vời liên kết với nhau
                                    để cùng làm việc. Bạn không thể mua từng dịch vụ riêng lẻ trong bộ Google Workspace của
                                    Google được.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header" id="ask_5">
                                <button class="btn" data-toggle="collapse" data-target="#collapse_5"
                                    aria-expanded="true" aria-controls="collapse_5">
                                    5. Với Google Meet, người tham gia bên ngoài có thể tham gia cuộc gọi không? <span
                                        class="transition"></span>
                                </button>
                            </div>
                            <div id="collapse_5" class="collapse" aria-labelledby="article_5" data-parent="#accordion"
                                style="">
                                <div class="card-body mb-30">
                                    Được nhé! Bạn có thể chia sẻ liên kết (URL) với những người bạn muốn cho tham gia vào
                                    cuộc họp.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header" id="ask_6">
                                <button class="btn" data-toggle="collapse" data-target="#collapse_6"
                                    aria-expanded="true" aria-controls="collapse_6">
                                    6. Tôi có thể dùng thử Google Workspace không?
                                    <span class="transition"></span></button>
                            </div>
                            <div id="collapse_6" class="collapse" aria-labelledby="article_6"
                                data-parent="#accordion" style="">
                                <div class="card-body mb-30">
                                    Có! Google Workspace cho phép bạn dùng thử và trải nghiệm những tính năng tuyệt vời mà
                                    bộ công cụ mang lại. Google cho bạn đăng ký dùng thử 14 ngày để trải nghiệm trước khi
                                    đăng ký.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-doi-tac-kv">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="item">
                            <div class="img">
                                <img src="https://nhanhoa.com/templates/images/v2/google/gogobc_8.png"
                                    alt="Đối tác Google Cloud tại Việt Nam ">
                            </div>
                            <h3 class="name">
                                <span>
                                    Đối tác
                                </span>
                                Google Cloud tại Việt Nam
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="item">
                            <div class="text">
                                5000
                            </div>
                            <h3 class="name">
                                <span>
                                    Khách hàng
                                </span>
                                Sử Dụng Dịch Vụ
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="item">
                            <div class="text">
                                22+
                            </div>
                            <h3 class="name">
                                <span>
                                    Năm kinh nghiệm
                                </span>
                                Dịch Vụ Doanh Nghiệp
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-ban-trai-nghiem">
        <div class="container">
            <div class="content"
                style="background-image: url(https://nhanhoa.com/templates/images/v2/google/gogobc_9.png);">
                <h2 class="title-section">
                    Bạn đã sẵn sàng trải nghiệm Google Workspace chưa?
                </h2>
                <div class="dsc">
                    Đăng ký ngay Google Workspace có thể giúp bạn làm được nhiều việc hơn nhờ các công cụ cộng tác và
                    <span>
                        cải thiện hiệu suất dành cho doanh nghiệp được hơn 3 tỷ người dùng yêu thích.
                    </span>
                </div>

                {{-- <div class="text-center">
                    <a href="#tuvanngay" class="btn btn-dt btn_show_popup">
                        Liên hệ tư vấn
                    </a>
                </div> --}}
            </div>
        </div>
    </div>

    @include('client.include.section-connect-office')
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('client/assets/css/google_wp.css') }}">
@endsection

@section('script')
    <script src="{{ asset('client/assets/js/cloud-vps.js') }}"></script>
    <script src="{{ asset('client/assets/js/js_service_2023.js') }}"></script>
    <script type="text/javascript">
        System_js.init();
        $(document).ready(function() {
            var tableOffset = $(".section-table-compare").offset().top;
            var tableSectionHeight = $("#features_table").height() - 120;

            if ($(window).width() > 992) {
                $(window).scroll(function() {
                    var scroll = $(window).scrollTop();
                    if (scroll >= tableOffset && scroll <= tableOffset + tableSectionHeight) {
                        $(".features_table thead").addClass("fixed-thead");
                    } else {
                        $(".features_table thead").removeClass("fixed-thead");
                    }
                });
            }
        });

        $(document).on("click", ".btn-add-to-cart-table", function() {
            $('html, body').animate({
                scrollTop: $('.section-table-price-wp').offset().top - 110
            }, 1000);
        });

        const swiper_pricing_general = new Swiper(".swiper.swiper_pricing_general", {
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 3,
                },
            },
        })

    </script>
@endsection

<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script>
    function openPopup(cloudId, productName) {
    document.getElementById('popup').style.display = 'block';
    document.getElementById('cloud_id_input').value = cloudId; // Cập nhật giá trị cloud_id
    document.getElementById('product_name').textContent = productName; // Cập nhật tên sản phẩm
}

function closePopup() {
    document.getElementById('popup').style.display = 'none';
}

function openPopup1(cloudId, productName) {
    document.getElementById('popup1').style.display = 'block';
    document.getElementById('cloud_id_input1').value = cloudId; // Cập nhật giá trị cloud_id
    document.getElementById('product_name1').textContent = productName; // Cập nhật tên sản phẩm
}

function closePopup1() {
    document.getElementById('popup1').style.display = 'none';
}


$(document).ready(function() {
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
</script>
