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
                            @forelse ($serverloactions as $item )
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
                                                <span>{{ number_format($item->price) }} đ/</span>Tháng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <ul class="pl-0">
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span class="package-title">BW
                                                    trong nước: </span><strong> {{ $item->bw_in_country	 }} </strong></li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span class="package-title">BW
                                                    quốc tế (up/down): </span><strong> {{ $item->bw_international	 }}</strong></li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span class="package-title">Dữ
                                                    liệu truyền: </span><strong> {{ $item->data_transfer	 }}</strong></li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Không gian rack: </span><strong> {{ $item->rack_space	 }}</strong>
                                            </li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Công suất nguồn: </span><strong> {{ $item->power_capacity	 }}</strong>
                                            </li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">UPS/Máy điện dự phòng: </span><strong> {{ $item->bw_in_country	 }}
                                                </strong></li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Điều hoà nhiệt độ: </span><strong> {{ $item->air_conditioning	 }}</strong>
                                            </li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span class="package-title">Ổ
                                                    cắm mạng: </span><strong> {{ $item->network_socket	 }}</strong></li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span class="package-title">Địa
                                                    chỉ IP: </span><strong> {{ $item->ip_address	 }}</strong></li>
                                            <li class="promotion-pricing-table"><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                {{ $item->promotion->name }}</li>
                                        </ul>
                                    </div>
                                    <div class="link-add-cart add_to_cart that_data_service_1462">
                                        <a class="btn-add-cart btn-service cart add_service_to_cart add_service_colo"
                                            data-service_id="1462" data-service_name="Colo A - 100"
                                            href="https://nhanhoa.com/?site=cart&act=cart_add&id=1462&cycle=12">
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
                            @empty

                            @endforelse


                            {{-- <div class="swiper-slide 1 pricing-item-order-1">
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
                                                Starter
                                            </div>
                                            <div class="price">
                                                <span>1.500.000 đ/</span>Tháng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <ul class="pl-0">
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Tỷ lệ gửi mail vào inbox: </span><strong> 100
                                                    Mbps </strong></li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Dung lượng lưu trữ: </span><strong> 5
                                                    Mbps</strong></li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Địa chỉ email: </span><strong> Không giới
                                                    hạn</strong></li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Email forwarder: </span><strong> 1U</strong>
                                            </li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Danh sách email: </span><strong> 400W</strong>
                                            </li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Tên mienf email: </span><strong> Có
                                                </strong></li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Địa chỉ IP riêng: </span><strong> Có</strong>
                                            </li>

                                            <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                    style="color: #4ABAB9;"></i>
                                                Tặng gói 200 hóa đơn điện tử</li>
                                        </ul>
                                    </div>
                                    <div class="link-add-cart add_to_cart that_data_service_1465">
                                        <a class="btn-add-cart btn-service cart add_service_to_cart add_service_colo"
                                            data-service_id="1465" data-service_name="Colo A - 200"
                                            href="https://nhanhoa.com/?site=cart&act=cart_add&id=1465&cycle=12">
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

                            <div class="swiper-slide 2 pricing-item-order-2">
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
                                                Advanced
                                            </div>
                                            <div class="price">
                                                <span>2.100.000 đ/</span>Tháng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <ul class="pl-0">
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Tỷ lệ gửi mail vào inbox: </span><strong> 100
                                                    Mbps </strong></li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Dung lượng lưu trữ: </span><strong> 5
                                                    Mbps</strong></li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Địa chỉ email: </span><strong> Không giới
                                                    hạn</strong></li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Email forwarder: </span><strong> 1U</strong>
                                            </li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Danh sách email: </span><strong> 400W</strong>
                                            </li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Tên mienf email: </span><strong> Có
                                                </strong></li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Địa chỉ IP riêng: </span><strong> Có</strong>
                                            </li>

                                            <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                    style="color: #4ABAB9;"></i>
                                                Tặng gói 200 hóa đơn điện tử</li>
                                        </ul>
                                    </div>
                                    <div class="link-add-cart add_to_cart that_data_service_1469">
                                        <a class="btn-add-cart btn-service cart add_service_to_cart add_service_colo"
                                            data-service_id="1469" data-service_name="Colo A - 300"
                                            href="https://nhanhoa.com/?site=cart&act=cart_add&id=1469&cycle=12">
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

                            <div class="swiper-slide 3 pricing-item-order-2">
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
                                                Extremmer
                                            </div>
                                            <div class="price">
                                                <span>3.000.000 đ/</span>Tháng
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <ul class="pl-0">
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Tỷ lệ gửi mail vào inbox: </span><strong> 100
                                                    Mbps </strong></li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Dung lượng lưu trữ: </span><strong> 5
                                                    Mbps</strong></li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Địa chỉ email: </span><strong> Không giới
                                                    hạn</strong></li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Email forwarder: </span><strong> 1U</strong>
                                            </li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Danh sách email: </span><strong> 400W</strong>
                                            </li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Tên mienf email: </span><strong> Có
                                                </strong></li>
                                            <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> <span
                                                    class="package-title">Địa chỉ IP riêng: </span><strong> Có</strong>
                                            </li>

                                            <li class="promotion-pricing-table"><i class="fas fa-check-circle"
                                                    style="color: #4ABAB9;"></i>
                                                Tặng gói 200 hóa đơn điện tử</li>
                                        </ul>
                                    </div>
                                    <div class="link-add-cart add_to_cart that_data_service_1473">
                                        <a class="btn-add-cart btn-service cart add_service_to_cart add_service_colo"
                                            data-service_id="1473" data-service_name="Colo A - 500"
                                            href="https://nhanhoa.com/?site=cart&act=cart_add&id=1473&cycle=12">
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
                            </div> --}}

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
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
