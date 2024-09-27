<div class="section-table-price-server section-tab-price-service" id="price_table">
    <div class="container">
        <div class="content-table-price">
            <h2 class="title-section">
                Cloud365 - Bảng Giá Mua Cloud VPS Giá Rẻ
            </h2>

            <ul class="nav nav-tabs list-tab-main-service" role="tablist">
                <li class="nav-item active">
                    <a class="nav-link active" id="sever-tab" href="{{ route('page.cloud-server') }}"
                        role="tab" aria-controls="sever" aria-selected="false">
                        SSD Cloud Server
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " id="international-tab" href="{{ route('page.cloud-international') }}"
                        role="tab" aria-controls="international" aria-selected="international">
                        Cloud VPS Quốc tế
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " id="storage-tab" href="{{ route('page.cloud-storage') }}"
                        role="tab" aria-controls="storage" aria-selected="false">
                        SSD Cloud Storage
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " id="storage-tab" href="{{ route('page.cloud-backup') }}"
                        role="tab" aria-controls="storage" aria-selected="false">
                        SSD Cloud Backup
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="vps" role="tabpanel" aria-labelledby="vps-tab">
                    <div class="info-table-price">
                        <div class="info-emty">
                            <div class="row">
                                @forelse ($cloud as $item )
                                <div class="col-lg-4 col-md-6 col-12 mb-3 0 pricing-item-order-2">
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
                                                    {{ $item->name }}
                                                </div>
                                                <div class="price">
                                                    <span>{{ number_format($item->price, 0, '', '.') }} đ/</span>Tháng
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> CPU:
                                                    <strong> {{ $item->cpu }}</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> CORE:
                                                    <strong> {{ $item->core }}</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> SSD:
                                                    <strong>{{ $item->ssd }}</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> RAM:
                                                    <strong> {{ $item->ram }}</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> IP:
                                                    <strong> {{ $item->ip }}</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    Bandwidth : <strong>
                                                        {{ $item->bandwidth }}</strong></li>
                                                        @forelse ($item->promotion as $key => $promotion )
                                                        <li class="promotion-pricing-table"> <i class="fas fa-check-circle"
                                                            style="color: #red;"></i> {{ $promotion->promotion->name }}</li>
                                                        @empty

                                                        @endforelse
                                            </ul>

                                        </div>
                                        <div class="link-add-cart add_to_cart that_data_service_1969">
                                            <a class="btn-add-cart btn-service add_service_cart"  onclick="openPopup({{ $item->id }}, '{{ $item->name }}')"

                                                data-service_id="{{ $item->id }}" data-service_name="{{ $item->name }}"
                                                href="javascript:;">
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
                                            <form action="{{ route('page.cloud.pay') }}" method="POST">
                                                @csrf
                                                <input type="hidden" id="cloud_id_input" name="cloud_id">
                                                <input class="form-control" type="text" placeholder="Họ và tên" name="name" id="name">
                                            <span class="invalid-feedback d-block" style="text-align: left; margin-bottom: 20px" id="name_error"></span>

                                            <input class="form-control" type="text" placeholder="Số điện thoại" name="phone" id="phone">
                                            <span class="invalid-feedback d-block" style="text-align: left; margin-bottom: 20px" id="phone_error"></span>

                                            <input class="form-control" type="text" placeholder="Email" name="email" id="email">
                                            <span class="invalid-feedback d-block" style="text-align: left; margin-bottom: 20px" id="email_error"></span>
                                                    <div class="product-info">
                                                        <p>Gói Cloud : </p>
                                                        <span class="product-name" >
                                                            {{ $item->cloudtypes_id == 1 ? "Cloud Server - " : "Cloud Quốc Tế - " }} <span id="product_name"></span>
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
                        <div class="link-dktv-price cta-tu-van">
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

@section('script')
    <script>
        $(document).ready(function() {
            if ($(window).width() <= 767) {
                let offset_active = $(".list-tab-main-service li.active").offset();
                console.log(offset_active);
                setTimeout(function() {
                    let to_active = offset_active.left - 100;
                    // $( ".list-tab-main-service" ).scrollLeft( to_active );
                    if (to_active) {
                        $(".list-tab-main-service").animate({
                            scrollLeft: to_active
                        }, 1000);
                    }
                }, 1000);
            }

        });
    </script>
@endsection

<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

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
