<div class="section-table-price-hosting section-table-price-sll section-tab-price-service" id="price_table">
    <div class="tab-hosting">
        <div class="container">
            <ul class="nav nav-tabs list-tab-main-service" role="tablist">
                <li class="nav-item active">
                    <a class="nav-link {{ Request::routeIs('page.ssl-comodo')  ? 'active' : ''}}" id="comodo-tab"
                        href="{{route('page.ssl-comodo')}}" role="tab" aria-controls="comodo" aria-selected="true">
                        <img src="https://nhanhoa.com/templates/images/v2/ssl/icon_ssl_01.png "
                            alt="Bảng giá Comodo SSL">
                        Bảng giá Comodo SSL
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Request::routeIs('page.ssl-geotrust')  ? 'active' : ''}}" id="geotrust-tab"
                        href="{{route('page.ssl-geotrust')}}" role="tab" aria-controls="geotrust" aria-selected="false">
                        <img src="https://nhanhoa.com/templates/images/v2/ssl/icon_ssl_02.png"
                            alt="Bảng giá Geotrust SSL">
                        Bảng giá Geotrust SSL
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Request::routeIs('page.ssl-symantec')  ? 'active' : ''}}" id="digicert-tab"
                        href="{{route('page.ssl-symantec')}}" role="tab" aria-controls="digicert" aria-selected="false">
                        <img src="https://nhanhoa.com/templates/images/v2/ssl/icon_ssl_03.png"
                            alt="Bảng giá Digicert SSL">
                        Bảng giá Digicert SSL
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="content-table-price">
        <div class="container">
            <div class="tab-content">
                <div class="tab-pane active" id="comodo" role="tabpanel" aria-labelledby="comodo-tab">
                    <div class="info-table-price">
                        <h2 class="title-section">
                            {{ $title }}
                        </h2>
                        <div class="info-emty">
                            <div class="row">
                                @forelse ($ssls as $ssl )
                                <div class="col-lg-4 col-md-6 col-12 mb-3 pricing-item-order-2">
                                    <div class="item">
                                        <div class="bgr-top">
                                            <img src="https://nhanhoa.com/templates/images/v2/subtract.png"
                                                alt="Bảng giá">
                                        </div>

                                        <div class="icon-name">
                                            <div class="icon">
                                                <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png"
                                                    alt="Bảng giá">
                                            </div>
                                            <div class="name-price">
                                                <div class="name">
                                                    {{ $ssl->name }}
                                                </div>
                                                <div class="price">
                                                    <span>
                                                        {{ number_format($ssl->price, 0, '', '.') }} đ/
                                                    </span>
                                                    Năm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                        style="color: red;"></i> Phí cài đặt: Miễn phí</li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Phí duy trì: </span><strong> {{
                                                        number_format($ssl->maintainfee, 0, '', '.') }}đ</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Mã hóa: </span><strong> {{ $ssl->encoding
                                                        }}</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Chứng thực: </span><strong> {{
                                                        $ssl->certification }}</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Số domain được bảo mật: </span><strong> {{
                                                        $ssl->numberdomain }}</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Hỗ trợ SAN: </span><strong>{{
                                                        $ssl->sansupport }}</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Thanh địa chỉ màu xanh: </span><strong>{{
                                                        $ssl->addressbar }}</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Chính sách bảo hiểm: </span><strong>${{
                                                        number_format($ssl->insurance, 0, '', '.') }}</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Trust level : </span><strong>{{
                                                        $ssl->level }}</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Thời hạn đăng ký: </span><strong> {{
                                                        $ssl->time }} năm</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Hỗ trợ khách hàng: </span><strong>
                                                        24/7</strong></li>
                                            </ul>

                                        </div>
                                        <div class="link-add-cart">
                                            <a class="btn-add-cart btn-service add_service_cart"
                                                onclick="openPopup({{ $ssl->id }}, '{{ $ssl->name }}')"
                                                data-service_id="{{ $ssl->id }}" data-service_name="{{ $ssl->name }}">
                                                <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <span class="btn_text">Mua</span>
                                            </a>
                                        </div>
                                    </div>
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
                                                    <p class="conten-sub">Vui lòng nhập thông tin để chúng tôi liên hệ
                                                        lại
                                                        với bạn.</p>
                                                </div>
                                            </div>
                                            <form action="{{ route('page.ssl-pay') }}" method="POST">
                                                @csrf
                                                <input type="hidden" id="cloud_id_input" name="sslid">
                                                <input class="form-control" type="text" placeholder="Họ và tên"
                                                    name="name" id="name">
                                                <span class="invalid-feedback d-block"
                                                    style="text-align: left; margin-bottom: 20px"
                                                    id="name_error"></span>

                                                <input class="form-control" type="text" placeholder="Số điện thoại"
                                                    name="phone" id="phone">
                                                <span class="invalid-feedback d-block"
                                                    style="text-align: left; margin-bottom: 20px"
                                                    id="phone_error"></span>

                                                <input class="form-control" type="text" placeholder="Email" name="email"
                                                    id="email">
                                                <span class="invalid-feedback d-block"
                                                    style="text-align: left; margin-bottom: 20px"
                                                    id="email_error"></span>
                                                <div class="product-info">
                                                    <p>Sản phẩm: </p>
                                                    <span class="product-name">
                                                        @if ($ssl->ssltype == 1)
                                                        Comodo SSL - <span id="sslname"></span>
                                                        @elseif ($ssl->ssltype == 2)
                                                        Geotrust SSL - <span id="sslname"></span>
                                                        @elseif ($ssl->ssltype == 3)
                                                        Digicert SSL - <span id="sslname"></span>
                                                        @endif
                                                    </span>
                                                </div>

                                                <div class="submit-content">
                                                    <button type="button" class="btn btn-submit" onclick="submitlienhe(event)">Gửi Đi</button>
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
                        <div class="link-dktv-price">
                            <a href="#tuvanngay" class="btn_show_popup">
                                Đăng ký tư vấn
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="geotrust" role="tabpanel" aria-labelledby="geotrust-tab">
                    <div class="info-table-price">
                        <h2 class="title-section">
                            Lựa chọn gói dịch vụ Geotrust SSL cho bạn
                        </h2>


                        <div class="info-emty">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mb-3 pricing-item-order-2">
                                    <div class="item">
                                        <div class="bgr-top">
                                            <img src="https://nhanhoa.com/templates/images/v2/subtract.png"
                                                alt="Bảng giá">
                                        </div>

                                        <div class="icon-name">
                                            <div class="icon">
                                                <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png"
                                                    alt="Bảng giá">
                                            </div>
                                            <div class="name-price">
                                                <div class="name">
                                                    Positive SSL
                                                </div>
                                                <div class="price">
                                                    <span>
                                                        198.000 đ/
                                                    </span>
                                                    Năm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                        style="color: red;"></i> Phí cài đặt: Miễn phí
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Phí duy trì: </span><strong> 198.000
                                                        đ</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Chứng thực: </span><strong> Tên miền
                                                        (DV)</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Số domain được bảo mật: </span><strong>
                                                        1</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Hỗ trợ SAN: </span><strong> -</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Thanh địa chỉ màu xanh: </span><strong>
                                                        -</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Chính sách bảo hiểm: </span><strong>
                                                        $10.000</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Trust level : </span><strong>
                                                        Standard</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Thời hạn đăng ký: </span><strong> 1
                                                        năm</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Hỗ trợ khách hàng: </span><strong>
                                                        24/7</strong></li>
                                            </ul>

                                        </div>
                                        <div class="link-add-cart">
                                            <a class="btn-add-cart btn-service add_service_cart" data-service_id="1938"
                                                href="javascript:;">
                                                <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <span class="btn_text">Mua</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mb-3 pricing-item-order-1">
                                    <div class="item active">
                                        <div class="bgr-top">
                                            <img src="https://nhanhoa.com/templates/images/v2/subtract_hover.png"
                                                alt="Bảng giá">
                                        </div>
                                        <span class="hot">Phổ biến</span>
                                        <div class="icon-name">
                                            <div class="icon">
                                                <img src="https://nhanhoa.com/templates/images/v2/kim_cuong_hover.png"
                                                    alt="Bảng giá">
                                            </div>
                                            <div class="name-price">
                                                <div class="name">
                                                    Positive SSL Multi-domain
                                                </div>
                                                <div class="price">
                                                    <span>
                                                        1.329.000 đ/
                                                    </span>
                                                    Năm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                        style="color: red;"></i> Phí cài đặt: Miễn phí
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Phí duy trì: </span><strong> 1.329.000
                                                        đ</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Chứng thực: </span><strong> Tên miền
                                                        (DV)</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Số domain được bảo mật : </span><strong>
                                                        3-100 </strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Hỗ trợ SAN: </span><strong>
                                                        259.000đ/domain/năm</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Thanh địa chỉ màu xanh: </span><strong>
                                                        -</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Chính sách bảo hiểm: </span><strong>
                                                        $10.000</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Trust level : </span><strong>
                                                        Standard</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Thời hạn đăng ký: </span><strong> 1
                                                        năm</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Hỗ trợ khách hàng: </span><strong>
                                                        24/7</strong></li>
                                            </ul>

                                        </div>
                                        <div class="link-add-cart">
                                            <a class="btn-add-cart btn-service add_service_cart" data-service_id="2063"
                                                href="javascript:;">
                                                <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <span class="btn_text">Mua</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mb-3 pricing-item-order-2">
                                    <div class="item">
                                        <div class="bgr-top">
                                            <img src="https://nhanhoa.com/templates/images/v2/subtract.png"
                                                alt="Bảng giá">
                                        </div>

                                        <div class="icon-name">
                                            <div class="icon">
                                                <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png"
                                                    alt="Bảng giá">
                                            </div>
                                            <div class="name-price">
                                                <div class="name">
                                                    InstantSSL Pro
                                                </div>
                                                <div class="price">
                                                    <span>
                                                        1.620.000 đ/
                                                    </span>
                                                    Năm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                        style="color: red;"></i> Phí cài đặt: Miễn phí
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Phí duy trì: </span><strong> 1.620.000
                                                        đ</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Chứng thực: </span><strong> Tổ chức
                                                        (OV)</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Số domain được bảo mật : </span><strong>
                                                        1</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Tích hợp tùy chọn (SAN/UC):
                                                    </span><strong> -</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Thanh địa chỉ màu xanh: </span><strong>
                                                        -</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Chính sách bảo hiểm: </span><strong>
                                                        $10.000</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Trust level : </span><strong>
                                                        High</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Cho phép đăng ký: </span><strong> 1
                                                        năm</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Hỗ trợ khách hàng: </span><strong>
                                                        24/7</strong></li>
                                            </ul>

                                        </div>
                                        <div class="link-add-cart">
                                            <a class="btn-add-cart btn-service add_service_cart" data-service_id="2009"
                                                href="javascript:;">
                                                <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <span class="btn_text">Mua</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mb-3 pricing-item-order-2">
                                    <div class="item">
                                        <div class="bgr-top">
                                            <img src="https://nhanhoa.com/templates/images/v2/subtract.png"
                                                alt="Bảng giá">
                                        </div>

                                        <div class="icon-name">
                                            <div class="icon">
                                                <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png"
                                                    alt="Bảng giá">
                                            </div>
                                            <div class="name-price">
                                                <div class="name">
                                                    Positive SSL Wildcard
                                                </div>
                                                <div class="price">
                                                    <span>
                                                        1.998.000 đ/
                                                    </span>
                                                    Năm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                        style="color: red;"></i> Phí cài đặt: Miễn phí
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Phí duy trì: </span><strong> 1.998.000
                                                        đ</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Chứng thực: </span><strong> Tên miền
                                                        (DV)</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Số domain được bảo mật: </span><strong> 1
                                                        + All Subdomain</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Hỗ trợ SAN: </span><strong> -</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Thanh địa chỉ màu xanh: </span><strong>
                                                        -</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Chính sách bảo hiểm: </span><strong>
                                                        $10.000</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Trust level : </span><strong>
                                                        Standard</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Thời hạn đăng ký: </span><strong> 1
                                                        năm</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Hỗ trợ khách hàng: </span><strong>
                                                        24/7</strong></li>
                                            </ul>

                                        </div>
                                        <div class="link-add-cart">
                                            <a class="btn-add-cart btn-service add_service_cart" data-service_id="1939"
                                                href="javascript:;">
                                                <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <span class="btn_text">Mua</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mb-3 pricing-item-order-2">
                                    <div class="item">
                                        <div class="bgr-top">
                                            <img src="https://nhanhoa.com/templates/images/v2/subtract.png"
                                                alt="Bảng giá">
                                        </div>

                                        <div class="icon-name">
                                            <div class="icon">
                                                <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png"
                                                    alt="Bảng giá">
                                            </div>
                                            <div class="name-price">
                                                <div class="name">
                                                    Comodo SSL UCC OV
                                                </div>
                                                <div class="price">
                                                    <span>
                                                        2.250.000 đ/
                                                    </span>
                                                    Năm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                        style="color: red;"></i> Phí cài đặt: Miễn phí
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Phí duy trì: </span><strong> 2.250.000
                                                        đ</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Chứng thực: </span><strong> Tổ chức
                                                        (OV)</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Số domain được bảo mật : </span><strong>
                                                        3</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Tích hợp tùy chọn (SAN/UC):
                                                    </span><strong> Có</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Thanh địa chỉ màu xanh: </span><strong>
                                                        -</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Chính sách bảo hiểm: </span><strong>
                                                        $250.000</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Trust level : </span><strong>
                                                        High</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Cho phép đăng ký: </span><strong> 1
                                                        năm</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Hỗ trợ khách hàng: </span><strong>
                                                        24/7</strong></li>
                                            </ul>

                                        </div>
                                        <div class="link-add-cart">
                                            <a class="btn-add-cart btn-service add_service_cart" data-service_id="2011"
                                                href="javascript:;">
                                                <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <span class="btn_text">Mua</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mb-3 pricing-item-order-2">
                                    <div class="item">
                                        <div class="bgr-top">
                                            <img src="https://nhanhoa.com/templates/images/v2/subtract.png"
                                                alt="Bảng giá">
                                        </div>

                                        <div class="icon-name">
                                            <div class="icon">
                                                <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png"
                                                    alt="Bảng giá">
                                            </div>
                                            <div class="name-price">
                                                <div class="name">
                                                    Comodo Multi-domain SSL
                                                </div>
                                                <div class="price">
                                                    <span>
                                                        3.250.000 đ/
                                                    </span>
                                                    Năm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                        style="color: red;"></i> Phí cài đặt: Miễn phí
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Phí duy trì: </span><strong> 3.250.000
                                                        đ</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Chứng thực: </span><strong> Tổ chức
                                                        (OV)</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Số domain được bảo mật: </span><strong>
                                                        3-100</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Hỗ trợ SAN: </span><strong> 925.000
                                                        đ/domain/năm</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Thanh địa chỉ màu xanh: </span><strong>
                                                        -</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Chính sách bảo hiểm: </span><strong>
                                                        $250.000</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Trust level: </span><strong>
                                                        High</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Thời hạn đăng ký: </span><strong> 1
                                                        năm</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Hỗ trợ khách hàng: </span><strong>
                                                        24/7</strong></li>
                                            </ul>

                                        </div>
                                        <div class="link-add-cart">
                                            <a class="btn-add-cart btn-service add_service_cart" data-service_id="2064"
                                                href="javascript:;">
                                                <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <span class="btn_text">Mua</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mb-3 pricing-item-order-2">
                                    <div class="item">
                                        <div class="bgr-top">
                                            <img src="https://nhanhoa.com/templates/images/v2/subtract.png"
                                                alt="Bảng giá">
                                        </div>

                                        <div class="icon-name">
                                            <div class="icon">
                                                <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png"
                                                    alt="Bảng giá">
                                            </div>
                                            <div class="name-price">
                                                <div class="name">
                                                    Comodo EV SSL
                                                </div>
                                                <div class="price">
                                                    <span>
                                                        3.458.000 đ/
                                                    </span>
                                                    Năm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                        style="color: red;"></i> Phí cài đặt: Miễn phí
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Phí duy trì: </span><strong> 3.458.000
                                                        đ</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Chứng thực: </span><strong> Tổ chức+
                                                        (EV)</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Số domain được bảo mật: </span><strong>
                                                        1</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Hỗ trợ SAN: </span><strong> -</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Thanh địa chỉ màu xanh: </span><strong>
                                                        Có</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Chính sách bảo hiểm: </span><strong>
                                                        $1.750.000</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Trust level : </span><strong>
                                                        Highest</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Thời hạn đăng ký: </span><strong> 1
                                                        năm</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Hỗ trợ khách hàng: </span><strong>
                                                        24/7</strong></li>
                                            </ul>

                                        </div>
                                        <div class="link-add-cart">
                                            <a class="btn-add-cart btn-service add_service_cart" data-service_id="1942"
                                                href="javascript:;">
                                                <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <span class="btn_text">Mua</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mb-3 pricing-item-order-2">
                                    <div class="item">
                                        <div class="bgr-top">
                                            <img src="https://nhanhoa.com/templates/images/v2/subtract.png"
                                                alt="Bảng giá">
                                        </div>

                                        <div class="icon-name">
                                            <div class="icon">
                                                <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png"
                                                    alt="Bảng giá">
                                            </div>
                                            <div class="name-price">
                                                <div class="name">
                                                    Premium SSL Wildcard
                                                </div>
                                                <div class="price">
                                                    <span>
                                                        5.088.000 đ/
                                                    </span>
                                                    Năm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                        style="color: red;"></i> Phí cài đặt: Miễn phí
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Phí duy trì: </span><strong> 5.088.000
                                                        đ</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Chứng thực: </span><strong> Tổ chức
                                                        (OV)</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Số domain được bảo mật : </span><strong>
                                                        1 + All Subdomain</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Hỗ trợ SAN: </span><strong> -</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Thanh địa chỉ màu xanh: </span><strong>
                                                        -</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Chính sách bảo hiểm: </span><strong>
                                                        $250.000</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Trust level : </span><strong>
                                                        High</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Thời hạn đăng ký: </span><strong> 1
                                                        năm</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                        class="package-title">Hỗ trợ khách hàng: </span><strong>
                                                        24/7</strong></li>
                                            </ul>

                                        </div>
                                        <div class="link-add-cart">
                                            <a class="btn-add-cart btn-service add_service_cart" data-service_id="1941"
                                                href="javascript:;">
                                                <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <span class="btn_text">Mua</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mb-3 pricing-item-order-2">
                                    <div class="item">
                                        <div class="bgr-top">
                                            <img src="https://nhanhoa.com/templates/images/v2/subtract.png"
                                                alt="Bảng giá">
                                        </div>

                                        <div class="icon-name">
                                            <div class="icon">
                                                <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png"
                                                    alt="Bảng giá">
                                            </div>
                                            <div class="name-price">
                                                <div class="name">
                                                    Comodo EV Multi Domain SSL
                                                </div>
                                                <div class="price">
                                                    <span>
                                                        7.199.000 đ/
                                                    </span>
                                                    Năm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                        style="color: red;"></i> Phí cài đặt: Miễn phí
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Phí duy trì: </span><strong> 7.199.000
                                                        đ</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Chứng thực: </span><strong> Tổ chức+
                                                        (EV)</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Số domain được bảo mật :
                                                    </span><strong>
                                                        3-100</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Hỗ trợ SAN: </span><strong>
                                                        2.160.000đ/domain/năm</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Thanh địa chỉ màu xanh:
                                                    </span><strong>
                                                        Có</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Chính sách bảo hiểm: </span><strong>
                                                        $1.750.000</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Trust level : </span><strong>
                                                        Highest</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Thời hạn đăng ký: </span><strong> 1
                                                        năm</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Hỗ trợ khách hàng: </span><strong>
                                                        24/7</strong>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="link-add-cart">
                                            <a class="btn-add-cart btn-service add_service_cart" data-service_id="1943"
                                                href="javascript:;">
                                                <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <span class="btn_text">Mua</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="link-dktv-price">
                            <a href="#tuvanngay">
                                Đăng ký tư vấn
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="digicert" role="tabpanel" aria-labelledby="digicert-tab">
                    <div class="info-table-price">
                        <h2 class="title-section">
                            Lựa chọn gói dịch vụ Digicert SSL cho bạn
                        </h2>


                        <div class="info-emty">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mb-3 pricing-item-order-2">
                                    <div class="item">
                                        <div class="bgr-top">
                                            <img src="https://nhanhoa.com/templates/images/v2/subtract.png"
                                                alt="Bảng giá">
                                        </div>

                                        <div class="icon-name">
                                            <div class="icon">
                                                <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png"
                                                    alt="Bảng giá">
                                            </div>
                                            <div class="name-price">
                                                <div class="name">
                                                    Positive SSL
                                                </div>
                                                <div class="price">
                                                    <span>
                                                        198.000 đ/
                                                    </span>
                                                    Năm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                        style="color: red;"></i> Phí cài đặt: Miễn phí
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Phí duy trì: </span><strong> 198.000
                                                        đ</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Chứng thực: </span><strong> Tên miền
                                                        (DV)</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Số domain được bảo mật:
                                                    </span><strong>
                                                        1</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Hỗ trợ SAN: </span><strong> -</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Thanh địa chỉ màu xanh:
                                                    </span><strong>
                                                        -</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Chính sách bảo hiểm: </span><strong>
                                                        $10.000</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Trust level : </span><strong>
                                                        Standard</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Thời hạn đăng ký: </span><strong> 1
                                                        năm</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Hỗ trợ khách hàng: </span><strong>
                                                        24/7</strong>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="link-add-cart">
                                            <a class="btn-add-cart btn-service add_service_cart" data-service_id="1938"
                                                href="javascript:;">
                                                <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <span class="btn_text">Mua</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mb-3 pricing-item-order-1">
                                    <div class="item active">
                                        <div class="bgr-top">
                                            <img src="https://nhanhoa.com/templates/images/v2/subtract_hover.png"
                                                alt="Bảng giá">
                                        </div>
                                        <span class="hot">Phổ biến</span>
                                        <div class="icon-name">
                                            <div class="icon">
                                                <img src="https://nhanhoa.com/templates/images/v2/kim_cuong_hover.png"
                                                    alt="Bảng giá">
                                            </div>
                                            <div class="name-price">
                                                <div class="name">
                                                    Positive SSL Multi-domain
                                                </div>
                                                <div class="price">
                                                    <span>
                                                        1.329.000 đ/
                                                    </span>
                                                    Năm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                        style="color: red;"></i> Phí cài đặt: Miễn phí
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Phí duy trì: </span><strong> 1.329.000
                                                        đ</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Chứng thực: </span><strong> Tên miền
                                                        (DV)</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Số domain được bảo mật :
                                                    </span><strong>
                                                        3-100 </strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Hỗ trợ SAN: </span><strong>
                                                        259.000đ/domain/năm</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Thanh địa chỉ màu xanh:
                                                    </span><strong>
                                                        -</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Chính sách bảo hiểm: </span><strong>
                                                        $10.000</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Trust level : </span><strong>
                                                        Standard</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Thời hạn đăng ký: </span><strong> 1
                                                        năm</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Hỗ trợ khách hàng: </span><strong>
                                                        24/7</strong>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="link-add-cart">
                                            <a class="btn-add-cart btn-service add_service_cart" data-service_id="2063"
                                                href="javascript:;">
                                                <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <span class="btn_text">Mua</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mb-3 pricing-item-order-2">
                                    <div class="item">
                                        <div class="bgr-top">
                                            <img src="https://nhanhoa.com/templates/images/v2/subtract.png"
                                                alt="Bảng giá">
                                        </div>

                                        <div class="icon-name">
                                            <div class="icon">
                                                <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png"
                                                    alt="Bảng giá">
                                            </div>
                                            <div class="name-price">
                                                <div class="name">
                                                    InstantSSL Pro
                                                </div>
                                                <div class="price">
                                                    <span>
                                                        1.620.000 đ/
                                                    </span>
                                                    Năm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                        style="color: red;"></i> Phí cài đặt: Miễn phí
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Phí duy trì: </span><strong> 1.620.000
                                                        đ</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Chứng thực: </span><strong> Tổ chức
                                                        (OV)</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Số domain được bảo mật :
                                                    </span><strong>
                                                        1</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Tích hợp tùy chọn (SAN/UC):
                                                    </span><strong> -</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Thanh địa chỉ màu xanh:
                                                    </span><strong>
                                                        -</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Chính sách bảo hiểm: </span><strong>
                                                        $10.000</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Trust level : </span><strong>
                                                        High</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Cho phép đăng ký: </span><strong> 1
                                                        năm</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Hỗ trợ khách hàng: </span><strong>
                                                        24/7</strong>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="link-add-cart">
                                            <a class="btn-add-cart btn-service add_service_cart" data-service_id="2009"
                                                href="javascript:;">
                                                <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <span class="btn_text">Mua</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mb-3 pricing-item-order-2">
                                    <div class="item">
                                        <div class="bgr-top">
                                            <img src="https://nhanhoa.com/templates/images/v2/subtract.png"
                                                alt="Bảng giá">
                                        </div>

                                        <div class="icon-name">
                                            <div class="icon">
                                                <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png"
                                                    alt="Bảng giá">
                                            </div>
                                            <div class="name-price">
                                                <div class="name">
                                                    Positive SSL Wildcard
                                                </div>
                                                <div class="price">
                                                    <span>
                                                        1.998.000 đ/
                                                    </span>
                                                    Năm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                        style="color: red;"></i> Phí cài đặt: Miễn phí
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Phí duy trì: </span><strong> 1.998.000
                                                        đ</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Chứng thực: </span><strong> Tên miền
                                                        (DV)</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Số domain được bảo mật:
                                                    </span><strong>
                                                        1 + All Subdomain</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Hỗ trợ SAN: </span><strong> -</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Thanh địa chỉ màu xanh:
                                                    </span><strong>
                                                        -</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Chính sách bảo hiểm: </span><strong>
                                                        $10.000</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Trust level : </span><strong>
                                                        Standard</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Thời hạn đăng ký: </span><strong> 1
                                                        năm</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Hỗ trợ khách hàng: </span><strong>
                                                        24/7</strong>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="link-add-cart">
                                            <a class="btn-add-cart btn-service add_service_cart" data-service_id="1939"
                                                href="javascript:;">
                                                <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <span class="btn_text">Mua</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mb-3 pricing-item-order-2">
                                    <div class="item">
                                        <div class="bgr-top">
                                            <img src="https://nhanhoa.com/templates/images/v2/subtract.png"
                                                alt="Bảng giá">
                                        </div>

                                        <div class="icon-name">
                                            <div class="icon">
                                                <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png"
                                                    alt="Bảng giá">
                                            </div>
                                            <div class="name-price">
                                                <div class="name">
                                                    Comodo SSL UCC OV
                                                </div>
                                                <div class="price">
                                                    <span>
                                                        2.250.000 đ/
                                                    </span>
                                                    Năm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                        style="color: red;"></i> Phí cài đặt: Miễn phí
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Phí duy trì: </span><strong> 2.250.000
                                                        đ</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Chứng thực: </span><strong> Tổ chức
                                                        (OV)</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Số domain được bảo mật :
                                                    </span><strong>
                                                        3</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Tích hợp tùy chọn (SAN/UC):
                                                    </span><strong> Có</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Thanh địa chỉ màu xanh:
                                                    </span><strong>
                                                        -</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Chính sách bảo hiểm: </span><strong>
                                                        $250.000</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Trust level : </span><strong>
                                                        High</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Cho phép đăng ký: </span><strong> 1
                                                        năm</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Hỗ trợ khách hàng: </span><strong>
                                                        24/7</strong>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="link-add-cart">
                                            <a class="btn-add-cart btn-service add_service_cart" data-service_id="2011"
                                                href="javascript:;">
                                                <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <span class="btn_text">Mua</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mb-3 pricing-item-order-2">
                                    <div class="item">
                                        <div class="bgr-top">
                                            <img src="https://nhanhoa.com/templates/images/v2/subtract.png"
                                                alt="Bảng giá">
                                        </div>

                                        <div class="icon-name">
                                            <div class="icon">
                                                <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png"
                                                    alt="Bảng giá">
                                            </div>
                                            <div class="name-price">
                                                <div class="name">
                                                    Comodo Multi-domain SSL
                                                </div>
                                                <div class="price">
                                                    <span>
                                                        3.250.000 đ/
                                                    </span>
                                                    Năm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                        style="color: red;"></i> Phí cài đặt: Miễn phí
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Phí duy trì: </span><strong> 3.250.000
                                                        đ</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Chứng thực: </span><strong> Tổ chức
                                                        (OV)</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Số domain được bảo mật:
                                                    </span><strong>
                                                        3-100</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Hỗ trợ SAN: </span><strong> 925.000
                                                        đ/domain/năm</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Thanh địa chỉ màu xanh:
                                                    </span><strong>
                                                        -</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Chính sách bảo hiểm: </span><strong>
                                                        $250.000</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Trust level: </span><strong>
                                                        High</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Thời hạn đăng ký: </span><strong> 1
                                                        năm</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Hỗ trợ khách hàng: </span><strong>
                                                        24/7</strong>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="link-add-cart">
                                            <a class="btn-add-cart btn-service add_service_cart" data-service_id="2064"
                                                href="javascript:;">
                                                <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <span class="btn_text">Mua</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mb-3 pricing-item-order-2">
                                    <div class="item">
                                        <div class="bgr-top">
                                            <img src="https://nhanhoa.com/templates/images/v2/subtract.png"
                                                alt="Bảng giá">
                                        </div>

                                        <div class="icon-name">
                                            <div class="icon">
                                                <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png"
                                                    alt="Bảng giá">
                                            </div>
                                            <div class="name-price">
                                                <div class="name">
                                                    Comodo EV SSL
                                                </div>
                                                <div class="price">
                                                    <span>
                                                        3.458.000 đ/
                                                    </span>
                                                    Năm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                        style="color: red;"></i> Phí cài đặt: Miễn phí
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Phí duy trì: </span><strong> 3.458.000
                                                        đ</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Chứng thực: </span><strong> Tổ chức+
                                                        (EV)</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Số domain được bảo mật:
                                                    </span><strong>
                                                        1</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Hỗ trợ SAN: </span><strong> -</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Thanh địa chỉ màu xanh:
                                                    </span><strong>
                                                        Có</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Chính sách bảo hiểm: </span><strong>
                                                        $1.750.000</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Trust level : </span><strong>
                                                        Highest</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Thời hạn đăng ký: </span><strong> 1
                                                        năm</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Hỗ trợ khách hàng: </span><strong>
                                                        24/7</strong>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="link-add-cart">
                                            <a class="btn-add-cart btn-service add_service_cart" data-service_id="1942"
                                                href="javascript:;">
                                                <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <span class="btn_text">Mua</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mb-3 pricing-item-order-2">
                                    <div class="item">
                                        <div class="bgr-top">
                                            <img src="https://nhanhoa.com/templates/images/v2/subtract.png"
                                                alt="Bảng giá">
                                        </div>

                                        <div class="icon-name">
                                            <div class="icon">
                                                <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png"
                                                    alt="Bảng giá">
                                            </div>
                                            <div class="name-price">
                                                <div class="name">
                                                    Premium SSL Wildcard
                                                </div>
                                                <div class="price">
                                                    <span>
                                                        5.088.000 đ/
                                                    </span>
                                                    Năm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                        style="color: red;"></i> Phí cài đặt: Miễn phí
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Phí duy trì: </span><strong> 5.088.000
                                                        đ</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Chứng thực: </span><strong> Tổ chức
                                                        (OV)</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Số domain được bảo mật :
                                                    </span><strong>
                                                        1 + All Subdomain</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Hỗ trợ SAN: </span><strong> -</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Thanh địa chỉ màu xanh:
                                                    </span><strong>
                                                        -</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Chính sách bảo hiểm: </span><strong>
                                                        $250.000</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Trust level : </span><strong>
                                                        High</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Thời hạn đăng ký: </span><strong> 1
                                                        năm</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Hỗ trợ khách hàng: </span><strong>
                                                        24/7</strong>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="link-add-cart">
                                            <a class="btn-add-cart btn-service add_service_cart" data-service_id="1941"
                                                href="javascript:;">
                                                <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <span class="btn_text">Mua</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mb-3 pricing-item-order-2">
                                    <div class="item">
                                        <div class="bgr-top">
                                            <img src="https://nhanhoa.com/templates/images/v2/subtract.png"
                                                alt="Bảng giá">
                                        </div>

                                        <div class="icon-name">
                                            <div class="icon">
                                                <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png"
                                                    alt="Bảng giá">
                                            </div>
                                            <div class="name-price">
                                                <div class="name">
                                                    Comodo EV Multi Domain SSL
                                                </div>
                                                <div class="price">
                                                    <span>
                                                        7.199.000 đ/
                                                    </span>
                                                    Năm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                        style="color: red;"></i> Phí cài đặt: Miễn phí
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Phí duy trì: </span><strong> 7.199.000
                                                        đ</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Chứng thực: </span><strong> Tổ chức+
                                                        (EV)</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Số domain được bảo mật :
                                                    </span><strong>
                                                        3-100</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Hỗ trợ SAN: </span><strong>
                                                        2.160.000đ/domain/năm</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Thanh địa chỉ màu xanh:
                                                    </span><strong>
                                                        Có</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Chính sách bảo hiểm: </span><strong>
                                                        $1.750.000</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Trust level : </span><strong>
                                                        Highest</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Thời hạn đăng ký: </span><strong> 1
                                                        năm</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    <span class="package-title">Hỗ trợ khách hàng: </span><strong>
                                                        24/7</strong>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="link-add-cart">
                                            <a class="btn-add-cart btn-service add_service_cart" data-service_id="1943"
                                                href="javascript:;">
                                                <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <span class="btn_text">Mua</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="link-dktv-price">
                            <a href="#tuvanngay" class="btn_show_popup">
                                Đăng ký tư vấn
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="{{ asset('validator/client.js') }}"></script>

<script>
    function openPopup(cloudId, productName ) {
  document.getElementById('popup').style.display = 'block';
  document.getElementById('cloud_id_input').value = cloudId;
    document.getElementById('sslname').textContent = productName;
}

function closePopup() {
  document.getElementById('popup').style.display = 'none';
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
