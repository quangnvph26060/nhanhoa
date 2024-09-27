<div class="section-table-price-hosting section-tab-price-service" id="price_table">
    <div class="breadcrumbs service-breadcrumbs">
        <div class="container">
            <nav class="breadcrumbs-section">
                <a href="https://nhanhoa.com">
                    <img src="https://nhanhoa.com/templates/images/v2/mobile/icon_home.png" alt="Trang chủ">
                </a>
                <a href="javascript:void(0)">Dịch vụ Hosting</a>
            </nav>
        </div>
    </div>
    <div class="title-section title-tab-hosting-mobile">
        Các gói hosting tại Nhân Hòa
    </div>
    <div class="tab-hosting">
        <div class="container">
            <ul class="list-tab-main-service">
                <li class="nav-item ">
                    <a class="nav-link {{ Request::routeIs('page.windows-hosting') ? 'active' : '' }}"
                        href="{{ route('page.windows-hosting') }}">
                        <img src="https://nhanhoa.com/templates/images/v2/hosting/icon_window.png" alt="Window Hosting">
                        Windows Hosting
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link {{ Request::routeIs('page.linux-hosting') ? 'active' : '' }}"
                        href="{{ route('page.linux-hosting') }}">
                        <img src="https://nhanhoa.com/templates/images/v2/hosting/icon_linux.png" alt="Linux Hosting">
                        Linux Hosting
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="content-table-price">
        <div class="container">
            <div class="info-table-price">
                <h2 class="title-section">
                    {{$titleSection}}
                </h2>
                <div class="sologan-section"></div>
                <div class="item-table">
                    <div class="list-sevice">
                        <div class="row">
                            @forelse ($hosting as $item)
                            <div class="col-lg-4 col-md-6 col-12 mb-3 pricing-item-order-2">
                                <div class="item">
                                    <div class="bgr-top">
                                        <img src="https://nhanhoa.com/templates/images/v2/subtract.png" alt="Bảng giá">
                                    </div>

                                    <div class="icon-name">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png"
                                                alt="Bảng giá">
                                        </div>
                                        <div class="name-price">
                                            <div class="name">
                                                {{ $item->name }}
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    <span class="new hevb"> <strong> {{ number_format($item->price, 0,
                                                            '', '.') }} đ</strong></span>/Tháng
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <ul class="pl-0">
                                            <li> <i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">
                                                    Dung lượng lưu trữ: </span><strong> {{ $item->storage }}</strong>
                                            </li>
                                            <li> <i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">
                                                    Băng thông/tháng: </span><strong> {{ $item->bandwidth }}</strong>
                                            </li>
                                            <li> <i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">
                                                    CPU: </span><strong> {{ $item->cpu }} core</strong></li>
                                            <li> <i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">
                                                    RAM: </span><strong> {{ $item->ram }} MB</strong></li>
                                            <li> <i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">
                                                    FTP Account: </span><strong> {{ $item->ftp_account }}</strong></li>
                                            <li> <i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">
                                                    MySQL/MariaDB: </span><strong> {{ $item->mysql }}</strong></li>
                                            <li> <i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">
                                                    Domain: </span><strong> {{ $item->domain }}</strong></li>
                                            <li> <i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">
                                                    Subdomain: </span><strong>&nbsp;{{ $item->subdomain }}</strong></li>
                                            <li> <i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">
                                                    Alias/Parked Domain: </span><strong> {{ $item->alias_parked_domain
                                                    }}</strong></li>
                                            <li> <i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">
                                                    Email Account: </span><strong> {{ $item->email_account }}</strong>
                                            </li>


                                            @forelse ($item->promotion as $key => $promotion )
                                            <li class="promotion-pricing-table"> <i class="fas fa-check-circle"
                                                    style="color: #red;"></i> {{ $promotion->promotion->name }}</li>
                                            @empty

                                            @endforelse
                                        </ul>

                                    </div>
                                    <div class="link-add-cart">
                                        <a class=" btn-add-cart btn-service add_service_cart" onclick="openPopup({{ $item->id }}, '{{ $item->name }}')"
                                            data-service_id="{{ $item->id }}" data-service_name="{{ $item->name }}">
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
                                                <p class="conten-sub">Vui lòng nhập thông tin để chúng tôi liên hệ lại
                                                    với bạn.</p>
                                            </div>
                                        </div>
                                        <form action="{{ route('page.hosting-pay') }}" method="POST" id="lienhe">
                                            @csrf
                                            <input type="hidden" id="cloud_id_input" name="hostingid">
                                            <input class="form-control" type="text" placeholder="Họ và tên" name="name" id="name">
                                            <span class="invalid-feedback d-block" style="text-align: left; margin-bottom: 20px" id="name_error"></span>

                                            <input class="form-control" type="text" placeholder="Số điện thoại" name="phone" id="phone">
                                            <span class="invalid-feedback d-block" style="text-align: left; margin-bottom: 20px" id="phone_error"></span>

                                            <input class="form-control" type="text" placeholder="Email" name="email" id="email">
                                            <span class="invalid-feedback d-block" style="text-align: left; margin-bottom: 20px" id="email_error"></span>
                                            <div class="product-info">
                                                <p>Gói Hosting : </p>
                                                <span class="product-name" >
                                                    {{ $item->hostingtype_id == 1 ? "Windows Hosting - " :  "Linux Hosting - " }} <span id="product_name"></span>
                                                </span>
                                            </div>


                                            <div class="submit-content">
                                                <button type="button" class="btn btn-submit" onclick="submitlienhe(event)">Gửi Đi</button>
                                                <div class="go-hotline">Gọi hotline <span>(024) 7308 6680</span> (24/7)
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
                <div class="link-dktv-price">
                    <a href="#tuvanngay" class="btn_show_popup">
                        Đăng ký tư vấn
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Toastr CSS -->
<!-- Toastr CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('validator/client.js') }}"></script>

<script>
function openPopup(cloudId, productName) {
    document.getElementById('popup').style.display = 'block';
    document.getElementById('cloud_id_input').value = cloudId; // Cập nhật giá trị cloud_id
    document.getElementById('product_name').textContent = productName; // Cập nhật tên sản phẩm
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

