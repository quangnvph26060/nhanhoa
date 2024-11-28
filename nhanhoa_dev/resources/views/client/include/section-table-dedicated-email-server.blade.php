<div class="section-tab-price-service section-tab-price-has-slide section-table-dedicated-server" id="price_table">
    <div class="container">
        <div class="content-table-price">
            <h2 class="title-section">
                Lựa chọn gói dịch vụ phù hợp với doanh nghiệp của bạn
            </h2>

            <div class="info-table-price table_price_colo">
                <div class="list-sevice">
                    <div class="swiper swiper_email_server">
                        <div class="swiper-wrapper">

                            @forelse ( $emailServer as $item )
                            <div class="swiper-slide 0 pricing-item-order-2">
                                <div class="item ">
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
                                                <span> {{ number_format($item->price) }}đ/</span>Tháng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <ul class="pl-0">
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Tỷ lệ gửi mail vào inbox: </span><strong> {{
                                                    $item->inbox_rate }}% </strong></li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Dung lượng lưu trữ: </span><strong> {{
                                                    $item->storage_capacity }} </strong></li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Địa chỉ email: </span><strong> {{
                                                    $item->unlimited_email_addresses }} </strong></li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Email forwarder: </span><strong> {{
                                                    $item->unlimited_email_forwarder }} </strong>
                                            </li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Danh sách email: </span><strong> {{
                                                    $item->unlimited_email_list }} </strong>
                                            </li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Tên miền email: </span><strong> {{
                                                    $item->unlimited_email_domain }}
                                                </strong></li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Địa chỉ IP riêng: </span><strong> {{
                                                    $item->ip_address }} </strong>
                                            </li>

                                            <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                    style="color: #4ABAB9;"></i>
                                                {{ $item->promotion->name }} </li>
                                        </ul>
                                    </div>
                                    <div class="link-add-cart add_to_cart that_data_service_1462">
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
                                        <p class="conten-sub">Vui lòng nhập thông tin để chúng tôi liên hệ
                                            lại
                                            với bạn.</p>
                                    </div>
                                </div>
                                <form action="{{ route('page.email-server-pay') }}" method="POST">
                                    @csrf
                                    <input type="hidden" id="cloud_id_input" name="emailServer_id">
                                    <input class="form-control" type="text" placeholder="Họ và tên" name="name" id="name">
                                    <span class="invalid-feedback d-block" style="text-align: left; margin-bottom: 20px" id="name_error"></span>

                                    <input class="form-control" type="text" placeholder="Số điện thoại" name="phone" id="phone">
                                    <span class="invalid-feedback d-block" style="text-align: left; margin-bottom: 20px" id="phone_error"></span>

                                    <input class="form-control" type="text" placeholder="Email" name="email" id="email">
                                    <span class="invalid-feedback d-block" style="text-align: left; margin-bottom: 20px" id="email_error"></span>
                                    <div class="product-info">
                                        <p>Gói Email Server : </p>
                                        <span class="product-name">
                                            <span id="product_name"></span>
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
                </div>
                {{-- <div class="link-dktv-price cta-tu-van">
                    <a href="#tuvanngay" class="btn_show_popup">
                        Đăng ký tư vấn
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</div>

@section('script')
<script>
    const swiperEmailServer = new Swiper('.swiper_email_server', {
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 3,
                }
            }
        })
</script>
@endsection

<script src="{{ asset('validator/client.js') }}"></script>
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
