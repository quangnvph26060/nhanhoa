<div nh-row="pvm08s7" class="bg-light-nh pt-50 pb-50">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 col-12">
                <div nh-block="uz0jn93" nh-block-cache="true" class="">
                    <div id="bang-gia" class="section-table-price">
                        <h3 class="title-section text-center">GIẢI PHÁP HIỆU QUẢ CHO VIỆC BẢO VỆ DỮ LIỆU</h3>
                        <p class="slogan-section text-center mb-5">Chúng tôi có nhiều gói giải pháp để mang tới sự
                            tiện lợi nhất cho nhu cầu sử dung của khách hàng</p>
                        <div class="swiper-solution content-table-price swiper">
                            <div class="list-price swiper-wrapper">
                                @forelse ($backupservers as $item)
                                <div class="swiper-slide">
                                    <div class="item-price">
                                        <div class="title">{{ $item->name }}</div>
                                        <div class="gb">{{ $item->storage }} GB</div>
                                        <div class="price"><span class="new"><strong> {{ number_format($item->price, 0,
                                                    ',', '.') }} đ</strong>/tháng</span></div>
                                        <div class="info">
                                            <p class="item_pricing_desc">Agent(Server/VPS): {{ $item->agent }}</p>
                                            <p class="item_pricing_desc">Mã hóa dữ liệu: {{ $item->data_encryption }}
                                            </p>
                                            <p class="item_pricing_desc">Nén dữ liệu: {{ $item->data_compression }}</p>
                                            <p class="item_pricing_desc">Chủ động thiết lập lịch sao lưu: {{
                                                $item->schedule_backup }}</p>
                                            <p class="item_pricing_desc">Sao lưu tự động: {{ $item->auto_backup }}</p>
                                        </div>
                                        <div class="link-register">
                                            <a class="btn-add-cart btn-service add_service_cart"
                                            onclick="openPopup({{ $item->id }}, '{{ $item->name }}')">ĐĂNG KÝ NGAY</a>
                                        </div>
                                    </div>
                                </div>
                                @empty

                                @endforelse
                                {{-- <div class="swiper-slide">
                                    <div class="item-price">
                                        <div class="title">Server Pro 4</div>
                                        <div class="gb">150 GB</div>
                                        <div class="price"><span class="new"><strong> 589.000
                                                    đ</strong>/tháng</span></div>
                                        <div class="info">
                                            <p class="item_pricing_desc">Agent(Server/VPS): 1</p>
                                            <p class="item_pricing_desc">Mã hóa dữ liệu: 256bit-AES</p>
                                            <p class="item_pricing_desc">Nén dữ liệu: Có</p>
                                            <p class="item_pricing_desc">Chủ động thiết lập lịch sao lưu: Có</p>
                                            <p class="item_pricing_desc">Sao lưu tự động: Có</p>
                                        </div>
                                        <div class="link-register"><a class="btn-register"
                                                href="https://nhanhoa.com/?site=cart&act=cart_add_serverpcs&id=2048">ĐĂNG
                                                KÝ NGAY</a></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item-price">
                                        <div class="title">Server Pro 5</div>
                                        <div class="gb">200 GB</div>
                                        <div class="price"><span class="new"><strong> 649.000
                                                    đ</strong>/tháng</span></div>
                                        <div class="info">
                                            <p class="item_pricing_desc">Agent(Server/VPS): 1</p>
                                            <p class="item_pricing_desc">Mã hóa dữ liệu: 256bit-AES</p>
                                            <p class="item_pricing_desc">Nén dữ liệu: Có</p>
                                            <p class="item_pricing_desc">Chủ động thiết lập lịch sao lưu: Có</p>
                                            <p class="item_pricing_desc">Sao lưu tự động: Có</p>
                                        </div>
                                        <div class="link-register"><a class="btn-register"
                                                href="https://nhanhoa.com/?site=cart&act=cart_add_serverpcs&id=2049">ĐĂNG
                                                KÝ NGAY</a></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item-price">
                                        <div class="title">Server Pro 6</div>
                                        <div class="gb">300 GB</div>
                                        <div class="price"><span class="new"><strong> 899.000
                                                    đ</strong>/tháng</span></div>
                                        <div class="info">
                                            <p class="item_pricing_desc">Agent(Server/VPS): 1</p>
                                            <p class="item_pricing_desc">Mã hóa dữ liệu: 256bit-AES</p>
                                            <p class="item_pricing_desc">Nén dữ liệu: Có</p>
                                            <p class="item_pricing_desc">Chủ động thiết lập lịch sao lưu: Có</p>
                                            <p class="item_pricing_desc">Sao lưu tự động: Có</p>
                                        </div>
                                        <div class="link-register"><a class="btn-register"
                                                href="https://nhanhoa.com/?site=cart&act=cart_add_serverpcs&id=2050">ĐĂNG
                                                KÝ NGAY</a></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item-price">
                                        <div class="title">Server Pro 7</div>
                                        <div class="gb">400 GB</div>
                                        <div class="price"><span class="new"><strong> 1.099.000
                                                    đ</strong>/tháng</span></div>
                                        <div class="info">
                                            <p class="item_pricing_desc">Agent(Server/VPS): 1</p>
                                            <p class="item_pricing_desc">Mã hóa dữ liệu: 256bit-AES</p>
                                            <p class="item_pricing_desc">Nén dữ liệu: Có</p>
                                            <p class="item_pricing_desc">Chủ động thiết lập lịch sao lưu: Có</p>
                                            <p class="item_pricing_desc">Sao lưu tự động: Có</p>
                                        </div>
                                        <div class="link-register"><a class="btn-register"
                                                href="https://nhanhoa.com/?site=cart&act=cart_add_serverpcs&id=2977">ĐĂNG
                                                KÝ NGAY</a></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item-price">
                                        <div class="title">Server Pro 8</div>
                                        <div class="gb">500 GB</div>
                                        <div class="price"><span class="new"><strong> 1.299.000
                                                    đ</strong>/tháng</span></div>
                                        <div class="info">
                                            <p class="item_pricing_desc">Agent(Server/VPS): 1</p>
                                            <p class="item_pricing_desc">Mã hóa dữ liệu: 256bit-AES</p>
                                            <p class="item_pricing_desc">Nén dữ liệu: Có</p>
                                            <p class="item_pricing_desc">Chủ động thiết lập lịch sao lưu: Có</p>
                                            <p class="item_pricing_desc">Sao lưu tự động: Có</p>
                                        </div>
                                        <div class="link-register"><a class="btn-register"
                                                href="https://nhanhoa.com/?site=cart&act=cart_add_serverpcs&id=2975">ĐĂNG
                                                KÝ NGAY</a></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item-price">
                                        <div class="title">Server Pro 9</div>
                                        <div class="gb">600 GB</div>
                                        <div class="price"><span class="new"><strong> 1.399.000
                                                    đ</strong>/tháng</span></div>
                                        <div class="info">
                                            <p class="item_pricing_desc">Agent(Server/VPS): 1</p>
                                            <p class="item_pricing_desc">Mã hóa dữ liệu: 256bit-AES</p>
                                            <p class="item_pricing_desc">Nén dữ liệu: Có</p>
                                            <p class="item_pricing_desc">Chủ động thiết lập lịch sao lưu: Có</p>
                                            <p class="item_pricing_desc">Sao lưu tự động: Có</p>
                                        </div>
                                        <div class="link-register"><a class="btn-register"
                                                href="https://nhanhoa.com/?site=cart&act=cart_add_serverpcs&id=3115">ĐĂNG
                                                KÝ NGAY</a></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item-price">
                                        <div class="title">Server Pro 10</div>
                                        <div class="gb">800 GB</div>
                                        <div class="price"><span class="new"><strong> 1.599.000
                                                    đ</strong>/tháng</span></div>
                                        <div class="info">
                                            <p class="item_pricing_desc">Agent(Server/VPS): 1</p>
                                            <p class="item_pricing_desc">Mã hóa dữ liệu: 256bit-AES</p>
                                            <p class="item_pricing_desc">Nén dữ liệu: Có</p>
                                            <p class="item_pricing_desc">Chủ động thiết lập lịch sao lưu: Có</p>
                                            <p class="item_pricing_desc">Sao lưu tự động: Có</p>
                                        </div>
                                        <div class="link-register"><a class="btn-register"
                                                href="https://nhanhoa.com/?site=cart&act=cart_add_serverpcs&id=3117">ĐĂNG
                                                KÝ NGAY</a></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item-price">
                                        <div class="title">Server Pro 11</div>
                                        <div class="gb">1000 GB</div>
                                        <div class="price"><span class="new"><strong> 1.899.000
                                                    đ</strong>/tháng</span></div>
                                        <div class="info">
                                            <p class="item_pricing_desc">Agent(Server/VPS): 1</p>
                                            <p class="item_pricing_desc">Mã hóa dữ liệu: 256bit-AES</p>
                                            <p class="item_pricing_desc">Nén dữ liệu: Có</p>
                                            <p class="item_pricing_desc">Chủ động thiết lập lịch sao lưu: Có</p>
                                            <p class="item_pricing_desc">Sao lưu tự động: Có</p>
                                        </div>
                                        <div class="link-register"><a class="btn-register"
                                                href="https://nhanhoa.com/?site=cart&act=cart_add_serverpcs&id=3119">ĐĂNG
                                                KÝ NGAY</a></div>
                                    </div>
                                </div> --}}
                            </div><!-- If we need navigation buttons -->
                            <div class="swiper-button-next"><i class="fas fa-angle-right fa-xs"></i></div>
                            <div class="swiper-button-prev"><i class="fas fa-angle-left fa-xs"></i></div>
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
                                            <p class="conten-sub">Vui lòng nhập thông tin để chúng tôi liên hệ lại với
                                                bạn.</p>
                                        </div>
                                    </div>
                                    <form action="{{ route('page.serverlocation.pay') }}" method="POST">
                                        @csrf
                                        <input type="hidden" id="cloud_id_input" name="serverlocation_id">
                                        <input class="form-control" type="text" placeholder="Họ và tên" name="name">
                                        <input class="form-control" type="text" placeholder="Số điện thoại"
                                            name="phone">
                                        <input class="form-control" type="text" placeholder="Email" name="email">
                                        <div class="product-info">
                                            <p>Gói Server Backup365 : </p>
                                            <span class="product-name">
                                                <span id="product_name"></span>
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
