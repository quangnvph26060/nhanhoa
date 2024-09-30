<div class="section-we-hosting section-we-hosting-domain">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="content-img">
                        <h2 class="title-section text-left">Chúng tôi mang đến những dịch vụ khác dành cho bạn</h2>
                        <div class="slogan-section text-left">Hơn
                            @php
                            $count = $client;
                            if ($count < 10) {
                                $roundedNumber = $count;
                            } elseif ($count < 100) {
                                $roundedNumber = floor($count / 10) * 10;
                            } else {
                                $roundedNumber = floor($count / 100) * 100;
                            }
                        @endphp
                        +{{ $roundedNumber }}


                            khách hàng đã tin tưởng và sử dụng dịch vụ
                            của chúng tôi!</div>
                        <div class="img position-relative"><img class="rtbs nh-lazyload ls-is-cached lazyloaded"
                                src="https://nhanhoa.com/templates/images/v2/hosting/img_we.png"
                                data-src="https://nhanhoa.com/templates/images/v2/hosting/img_we.png"
                                alt="Hơn 500.000+ khách hàng đã tin tưởng và sử dụng dịch vụ của Nhân Hòa!"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="content-text">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="item">
                                    <div class="icon"><img
                                            src="https://nhanhoa.com/templates/images/v2/hosting/vps.png"
                                            alt="Dịch vụ SSL"></div>
                                    <div class="name"><a
                                            href="{{ route('page.ssl-comodo') }}"
                                            target="">SSL</a></div>
                                    <div class="price">Chỉ từ {{number_format($ssl->price,0, ',', '.')}}đ/năm</div>
                                    <div class="description">Tất cả các dữ liệu được truyền giữa các máy chủ web và các
                                        trình duyệt được bảo mật.</div>
                                    <div class="icon-link">
                                        <a href="{{ route('page.ssl-comodo') }}"
                                            target=""><i class="fas fa-arrow-circle-right"
                                                style="color: #4ABAB9;"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="item">
                                    <div class="icon"><img
                                            src="https://nhanhoa.com/templates/images/v2/hosting/domain.png"
                                            alt="Dịch vụ Máy chủ"></div>
                                    <div class="name"><a href="{{ route('page.cloud-server') }}"
                                            target="">Máy chủ</a></div>
                                            {{-- @dd($cloud); --}}
                                    <div class="price">Chỉ từ {{number_format($cloud->price,0, ',', '.')}}đ/tháng</div>
                                    <div class="description">Giải pháp máy chủ ảo trên nền điện toán đám mây (CLOUD
                                        VPS).</div>
                                    <div class="icon-link">
                                        <a href="{{ route('page.cloud-server') }}" target=""> <i
                                                class="fas fa-arrow-circle-right" style="color: #4ABAB9;"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="item">
                                    <div class="icon"><img
                                            src="https://nhanhoa.com/templates/images/v2/hosting/icon_email.png"
                                            alt="Dịch vụ Email doanh nghiệp"></div>
                                    <div class="name"><a href="{{ route('page.email-server') }}" target="">Email doanh
                                            nghiệp</a></div>
                                    <div class="price">Chỉ từ {{number_format($email->price,0, ',', '.')}}đ/tháng</div>
                                    <div class="description">Khẳng định thương hiệu với email theo tên miền riêng.
                                    </div>
                                    <div class="icon-link">
                                        <a href="{{ route('page.email-server') }}" target=""> <i class="fas fa-arrow-circle-right"
                                                style="color: #4ABAB9;"></i> </a>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-6 col-12">
                                <div class="item">
                                    <div class="icon"><img
                                            src="https://nhanhoa.com/templates/images/v2/hosting/icon_email.png"
                                            alt="Dịch vụ Website chuyên nghiệp"></div>
                                    <div class="name"><a href="https://web4s.vn/" target="_blank">Website chuyên
                                            nghiệp</a></div>
                                    <div class="price">Chỉ từ 9.000đ/ngày</div>
                                    <div class="description">Giải pháp thiết kế web chuyên nghiệp, trọn gói, phù hợp
                                        với từng lĩnh vực, ngành nghề kinh doanh.</div>
                                    <div class="icon-link">
                                        <a href="https://web4s.vn/" target="_blank"> <i
                                                class="fas fa-arrow-circle-right" style="color: #4ABAB9;"></i> </a>
                                    </div>
                                </div>
                            </div> --}}


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
