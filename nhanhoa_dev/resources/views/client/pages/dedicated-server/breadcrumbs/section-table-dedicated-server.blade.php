<div class="section-table-dedicated-server section-tab-price-service" id="price_table">
    <div class="container">
        <div class="content-table-price">
            <h2 class="title-section">
                Bảng Giá Dịch Vụ Thuê Server - Máy Chủ Riêng Nhân Hòa
            </h2>
            <div class="slogan-section text-center">

            </div>
            <div class="info-table-price">
                <div class="info-emty">
                    <div class="row">

                        @forelse ($servers as $item )
                        <div class="col-lg-4 col-md-6 col-12 mb-3 0 pricing-item-order-2">
                            <div class="item">
                                <div class="bgr-top">
                                    <img src="https://nhanhoa.com/templates/images/v2/subtract.png" alt="Bảng giá">
                                </div>

                                <div class="icon-name">
                                    <div class="icon">
                                        <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png" alt="Bảng giá">
                                    </div>
                                    <div class="name-price">
                                        <div class="name">
                                            {{ $item->name }}
                                        </div>
                                        <div class="price">
                                            <span>{{ number_format($item->price, 0, '', '.') }} đ/</span>Tháng
                                        </div>
                                    </div>
                                </div>
                                <div class="info">
                                    <ul class="pl-0">
                                        <li style="flex-wrap:nowrap;"><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                class="package-title"> CPU: {{ $item->cpu }}</span></li>
                                        <li style="flex-wrap:nowrap;"><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                class="package-title"> SSD: {{ $item->ssd }}</span></li>
                                        <li style="flex-wrap:nowrap;"><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                class="package-title"> RAM: {{ $item->ram }}</span></li>
                                        <li style="flex-wrap:nowrap;"><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                class="package-title"> Dữ liệu truyền: {{ $item->data }}</span></li>
                                        <li style="flex-wrap:nowrap;"><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                class="package-title"> IP: {{ $item->ip }}</span></li>
                                        <li style="flex-wrap:nowrap;"><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                class="package-title"> Băng thông trong nước: {{ $item->domestic }}</span></li>
                                        <li style="flex-wrap:nowrap;"><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                class="package-title"> Băng thông quốc tế: {{ $item->international }}</span></li>
                                        @forelse ($item->promotion as $key => $promotion )
                                        <li style="flex-wrap:nowrap;" class="promotion-pricing-table"><i class="fas fa-check-circle" style="color: red;"></i>
                                            KM {{ $key + 1 }}: {{ $promotion->promotion->name }}</li>
                                        @empty

                                        @endforelse
                                        {{-- <li style="flex-wrap:nowrap;" class="promotion-pricing-table"><i class="fas fa-check-circle" style="color: red;"></i> KM 1: Tặng gói Part Manage khi
                                            thanh toán 12 tháng</li>
                                        <li style="flex-wrap:nowrap;" class="promotion-pricing-table"><i class="fas fa-check-circle" style="color: red;"></i> KM 2: Tặng Server khi thanh toán
                                            24 tháng </li> --}}
                                    </ul>

                                </div>
                                <div class="link-add-cart add_to_cart that_data_service_2245">
                                    <a  class="btn-add-cart btn-service add_service_cart" onclick="openPopup({{ $item->id }}, '{{ $item->name }}')" data-service_id="{{ $item->id }}"
                                        data-service_name="{{ $item->name }}"                                    >
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
                                            <p class="conten-sub">Vui lòng nhập thông tin để chúng tôi liên hệ
                                                lại
                                                với bạn.</p>
                                        </div>
                                    </div>
                                    <form action="{{ route('page.server.pay') }}" method="POST">
                                        @csrf
                                        <input type="hidden" id="cloud_id_input" name="server_id">
                                        <input class="form-control" type="text" placeholder="Họ và tên"
                                            name="name">
                                        <input class="form-control" type="text" placeholder="Số điện thoại"
                                            name="phone">
                                        <input class="form-control" type="text" placeholder="Email"
                                            name="email">
                                            <div class="product-info">
                                                <p>Gói Server : </p>
                                                <span class="product-name" id="product_name">
                                                    <!-- Tên sản phẩm sẽ được cập nhật bằng JavaScript -->
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
                <div class="link-dktv-price cta-tu-van">
                    <a href="#tuvanngay" class="btn_show_popup">
                        Đăng ký tư vấn
                    </a>
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
