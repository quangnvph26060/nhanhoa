<div class="section-table-price-server section-table-price-hosting section-tab-price-service"
    style="padding-top: 50px; padding-bottom:50px;" id="price_table">
    <div class="container">
        <div class="content-table-price">
            <h2 class="title-section">
                Bảng giá Cloud Backup
            </h2>
            <div class="sologan-section text-center">
                Dịch vụ Cloud Backup áp dụng với khách hàng sử dụng Cloud VPS/ Cloud Server tại Nhân Hòa
            </div>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="startup-tab" data-toggle="tab" href="#startup_price_package"
                        role="tab" aria-controls="startup_price_package" aria-selected="true">
                        Cloud Backup - Cloud VPS
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="business-tab" data-toggle="tab" href="#business_price_package"
                        role="tab" aria-controls="business_price_package" aria-selected="false">
                        Cloud Backup - Cloud Server
                    </a>
                </li>


            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="startup_price_package" role="tabpanel" aria-labelledby="vps-tab">
                    <div class="info-table-price">
                        <div class="info-emty">
                            <div class="row">
                                @forelse ($cloudvps as $item )
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
                                            <div class="name-price" style="text-align:left;">
                                                <div class="name">
                                                    Cloud Backup - {{ $item->name }}
                                                </div>
                                                <div class="price">
                                                    <div class="price">
                                                        <span class="new hevb"> <strong> {{ number_format($item->price, 0, ',', '.') }} đ</strong></span>/Tháng
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> Gói áp dụng: <strong
                                                        class="black"> {{  $item->package_applied }} </strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> Dung lượng tối đa: <strong
                                                        class="black"> {{ $item->max_storage }}GB</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> Thời gian sao lưu: <strong
                                                        class="black"> {{ $item->backup_time }}</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> Số bản sao lưu: <strong
                                                        class="black"> {{ $item->backup_count }} bản gần nhất</strong></li>
                                            </ul>

                                        </div>
                                        <div class="link-add-cart">
                                            <a class="btn-add-cart btn-service cart add_service_vps_to_cart " onclick="openPopup({{ $item->id }}, '{{ $item->name }}')"
                                                data-service_id="{{ $item->id }}" data-service_name="ĐK Cloud Backup - {{ $item->name }}"
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
                                            <form action="{{ route('page.cloudbackup.pay') }}" method="POST">
                                                @csrf
                                                <input type="hidden" id="cloud_id_input" name="cloudbackup_id">
                                                <input class="form-control" type="text" placeholder="Họ và tên" name="name">
                                                <input class="form-control" type="text" placeholder="Số điện thoại"
                                                    name="phone">
                                                <input class="form-control" type="text" placeholder="Email" name="email">
                                                <div class="product-info">
                                                    <p>Gói Cloud Backup : </p>
                                                    <span class="product-name">
                                                         Cloud VPS -  <span id="product_name"></span>
                                                    </span>
                                                </div>


                                                <div class="submit-content">
                                                    <button class="btn btn-submit">Gửi Đi</button>
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
                        <div class="link-dktv-price">
                            <a href="#tuvanngay" class="btn_show_popup">
                                Đăng ký tư vấn
                            </a>
                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="business_price_package" role="tabpanel" aria-labelledby="sever-tab">
                    <div class="info-table-price">
                        <div class="info-emty">
                            <div class="row">
                                @forelse ($cloudserver as $item )
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
                                            <div class="name-price" style="text-align:left;">
                                                <div class="name">
                                                    Cloud Backup - {{ $item->name }}
                                                </div>
                                                <div class="price">
                                                    <div class="price">
                                                        <span class="new hevb"> <strong> {{ number_format($item->price, 0, ',', '.') }} đ</strong></span>/Tháng
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> Gói áp dụng: <strong
                                                        class="black"> {{  $item->package_applied }} </strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> Dung lượng tối đa: <strong
                                                        class="black"> {{ $item->max_storage }}GB</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> Thời gian sao lưu: <strong
                                                        class="black"> {{ $item->backup_time }}</strong></li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> Số bản sao lưu: <strong
                                                        class="black"> {{ $item->backup_count }} bản gần nhất</strong></li>
                                            </ul>

                                        </div>
                                        <div class="link-add-cart">
                                            <a class="btn-add-cart btn-service cart add_service_vps_to_cart " onclick="openPopup1({{ $item->id }}, '{{ $item->name }}')"
                                                data-service_id="{{ $item->id }}" data-service_name="ĐK Cloud Backup - {{ $item->name }}"
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
                                                    <p class="conten-sub">Vui lòng nhập thông tin để chúng tôi liên hệ lại
                                                        với bạn.</p>
                                                </div>
                                            </div>
                                            <form action="{{ route('page.cloudbackup.pay') }}" method="POST">
                                                @csrf
                                                <input type="hidden" id="cloud_id_input1" name="cloudbackup_id">
                                                <input class="form-control" type="text" placeholder="Họ và tên" name="name">
                                                <input class="form-control" type="text" placeholder="Số điện thoại"
                                                    name="phone">
                                                <input class="form-control" type="text" placeholder="Email" name="email">
                                                <div class="product-info">
                                                    <p>Gói Cloud Backup : </p>
                                                    <span class="product-name">
                                                        Cloud Server - <span id="product_name1"></span>
                                                    </span>
                                                </div>


                                                <div class="submit-content">
                                                    <button class="btn btn-submit">Gửi Đi</button>
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
<script>
    function openPopup(cloudId, productName) {
        document.getElementById('popup').style.display = 'block';
        document.getElementById('cloud_id_input').value = cloudId;
        document.getElementById('product_name').textContent = productName;
    }

    function closePopup() {
      document.getElementById('popup').style.display = 'none';
    }

    function openPopup1(cloudId, productName) {
        document.getElementById('popup1').style.display = 'block';
        document.getElementById('cloud_id_input1').value = cloudId;
        document.getElementById('product_name1').textContent = productName;
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
