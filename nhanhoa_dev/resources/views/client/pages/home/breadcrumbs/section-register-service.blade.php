<div class="section-register-service d-none d-md-block d-lg-block">
    <div class="container">
        <div class="content-register-service">
            <h2 class="title-section">
               {{ $home->section1_title }}
            </h2>
            <div class="slogan-section text-thin" style="color:rgb(29, 29, 29);">
                {{ $home->section1_content }}
            </div>
            <div class="info--register-service">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="domain-tab" data-toggle="tab" href="#domain" role="tab"
                            aria-controls="domain" aria-selected="true">
                            <img src="https://nhanhoa.com/templates/images/v2/home/icon_domain.svg" alt="">
                            <span>
                                Tên Miền
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="cloud-tab" data-toggle="tab" href="#cloud" role="tab"
                            aria-controls="cloud" aria-selected="false">
                            <img src="https://nhanhoa.com/templates/images/v2/home/icon_cloud.svg" alt="">
                            <span>
                                Cloud VPS
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="hosting-tab" data-toggle="tab" href="#hosting" role="tab"
                            aria-controls="hosting" aria-selected="false">
                            <img src="https://nhanhoa.com/templates/images/v2/home/icon_hosting.svg" alt="">
                            <span>
                                Hosting
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="email-tab" data-toggle="tab" href="#email" role="tab"
                            aria-controls="email" aria-selected="false">
                            <img src="https://nhanhoa.com/templates/images/v2/home/icon_email.svg" alt="">
                            <span>
                                Email
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="ssl-tab" data-toggle="tab" href="#ssl" role="tab" aria-controls="ssl"
                            aria-selected="false">
                            <img src="https://nhanhoa.com/templates/images/v2/home/icon_ssl.svg" alt="">
                            <span>
                                SSL
                            </span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="domain" role="tabpanel" aria-labelledby="domain-tab">
                        <div class="content-info-service">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="content-left">
                                        <div class="info-top">
                                            <div class="title"> {{ $home->section2_title }}</div>
                                            <div class="description"> {{ $home->section2_content }}</div>
                                        </div>
                                        <div class="info-bottom">
                                            <div class="title">Lưu ý quan trọng khi đăng ký tên miền
                                            </div>
                                            <div class="list-description">
                                                <ul>
                                                    <li> <img alt="icon"
                                                            src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                                        Đặt tên ngắn </li>
                                                    <li> <img alt="icon"
                                                            src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                                        Kiểm tra domain </li>
                                                    <li> <img alt="icon"
                                                            src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                                        Đơn giản là tốt nhất </li>
                                                    <li> <img alt="icon"
                                                            src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                                        Hành động nhanh </li>
                                                    <li> <img alt="icon"
                                                            src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                                        Bao gồm thương hiệu </li>
                                                    <li> <img alt="icon"
                                                            src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                                        Đăng ký bao vây</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="section-img-register-service">
                                        <div
                                            class="swiper swiper_register_service swiper-coverflow swiper-3d swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress">
                                            <div class="swiper-wrapper" id="swiper-wrapper-4d4818bdfed8e529"
                                                aria-live="polite">

                                                @forelse ($domainqg as $index => $item )
                                                @if ($index <=3 ) <div class="swiper-slide swiper-slide--one"
                                                    style="width: 335px; transition-duration: 0ms; transform: translate3d(0px, 0px, -2100px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -20;">
                                                    <div class="item-service">
                                                        <div class="img position-relative">
                                                            <img class="rtbs nh-lazyload lazyloaded"
                                                                src="{{ asset($item->logo) }}"
                                                                data-src="{{ asset($item->logo) }}"
                                                                alt=" tên miền quốc gia .vn">
                                                        </div>
                                                        <div class="inner-content">
                                                            <div class="name">
                                                                tên miền quốc gia {{ $item->name }}
                                                            </div>
                                                            <div class="description">

                                                            </div>
                                                            <div class="price-section">
                                                                &nbsp;
                                                            </div>
                                                            <div class="link-service">
                                                                <a class="bg-gradient" href="{{ route('page.domain-registration') }}"
                                                                    title=" tên miền quốc gia {{ $item->name }}">
                                                                    Đăng ký tên miền
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                            </div>
                                            @endif

                                            @empty


                                            @endforelse
                                            @forelse ($domainqt as $index => $item )
                                            @if ($index <=3) <div class="swiper-slide swiper-slide--one"
                                                style="width: 335px; transition-duration: 0ms; transform: translate3d(0px, 0px, -1200px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -11;">
                                                <div class="item-service">
                                                    <div class="img position-relative">
                                                        <img class="rtbs nh-lazyload ls-is-cached lazyloaded"
                                                            src="{{ asset($item->logo) }}"
                                                            data-src="{{ asset($item->logo) }}"
                                                            alt=" tên miền quốc tế {{ $item->name }}">
                                                    </div>
                                                    <div class="inner-content">
                                                        <div class="name">
                                                            tên miền quốc tế {{ $item->name }}
                                                        </div>
                                                        <div class="description">

                                                        </div>
                                                        <div class="price-section">
                                                            &nbsp;
                                                        </div>
                                                        <div class="link-service">
                                                            <a class="bg-gradient " title=" tên miền quốc tế .org">
                                                                Đăng ký tên miền
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>
                                        @endif

                                        @empty

                                        @endforelse

                                    </div>
                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                                        aria-controls="swiper-wrapper-10a777ad2f7349fde"></div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="cloud" role="tabpanel" aria-labelledby="domain-tab">
                <div class="content-info-service">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="content-left">
                                <div class="info-top">
                                    <div class="title">{{ $home->section3_title }}</div>
                                    <div class="description">{{ $home->section3_content }}</div>
                                </div>
                                <div class="info-bottom">
                                    <div class="title">Lưu ý quan trọng khi đăng ký tên miền
                                    </div>
                                    <div class="list-description">
                                        <ul>
                                            <li> <img alt="icon"
                                                    src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                                Đặt tên ngắn </li>
                                            <li> <img alt="icon"
                                                    src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                                Kiểm tra domain </li>
                                            <li> <img alt="icon"
                                                    src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                                Đơn giản là tốt nhất </li>
                                            <li> <img alt="icon"
                                                    src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                                Hành động nhanh </li>
                                            <li> <img alt="icon"
                                                    src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                                Bao gồm thương hiệu </li>
                                            <li> <img alt="icon"
                                                    src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                                Đăng ký bao vây</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="section-img-register-service">
                                <div
                                    class="swiper swiper_register_service swiper-coverflow swiper-3d swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress">
                                    <div class="swiper-wrapper" id="swiper-wrapper-4d4818bdfed8e529" aria-live="polite">
                                        @forelse ($cloud as $index => $item)
                                        @if ($index <=3) <div class="swiper-slide swiper-slide--one"
                                            style="width: 335px; transition-duration: 0ms; transform: translate3d(0px, 0px, -2400px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -23;">
                                            <div class="item-service">
                                                <div class="img position-relative">
                                                    <img class="rtbs nh-lazyload lazyloaded"
                                                        src="{{ asset($item->logo) }}"
                                                        data-src="{{ asset($item->logo) }}"
                                                        alt="">
                                                </div>
                                                <div class="inner-content">
                                                    <div class="name">
                                                        {{ $item->name }}
                                                    </div>
                                                    <div class="description">
                                                        <p><img alt="icon"
                                                                src="https://nhanhoa.com/templates/images/v2/home/Icon_feather-check.png">
                                                            CPU : <b> {{ $item->cpu }}</b></p>
                                                        <p><img alt="icon"
                                                                src="https://nhanhoa.com/templates/images/v2/home/Icon_feather-check.png">
                                                            CORE : <b> {{ $item->core }}</b></p>
                                                        <p><img alt="icon"
                                                                src="https://nhanhoa.com/templates/images/v2/home/Icon_feather-check.png">
                                                            SSD : <b> {{ $item->ssd }}</b></p>
                                                        <p><img alt="icon"
                                                                src="https://nhanhoa.com/templates/images/v2/home/Icon_feather-check.png">
                                                            RAM : <b> {{ $item->ram }}</b></p>
                                                    </div>
                                                    <div class="price-section">
                                                        <div class="price b" data-price="849.000 đ">
                                                            <span class="new hevb"> <strong>
                                                                    {{ number_format($item->price, 0, '', '.') }}
                                                                    đ</strong></span>/Tháng
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                    <div class="link-service">
                                                        <a class="bg-gradient btn-add-cart-direct"
                                                            data-service_id="1961" href="{{ route('page.cloud-server') }}"
                                                            title="ssd cloud vps e">
                                                            <div
                                                                class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                                <div class="rect1"></div>
                                                                <div class="rect2"></div>
                                                                <div class="rect3"></div>
                                                                <div class="rect4"></div>
                                                                <div class="rect5"></div>
                                                            </div>
                                                            <span class="btn_text">Đăng ký cloud</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                    </div>
                                    @endif

                                    @empty

                                    @endforelse

                                </div>
                                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                                    aria-controls="swiper-wrapper-10a777ad2f7349fde"></div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="hosting" role="tabpanel" aria-labelledby="domain-tab">
            <div class="content-info-service">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="content-left">
                            <div class="info-top">
                                <div class="title">{{ $home->section4_title }}
                                </div>
                                <div class="description">{{ $home->section4_content }}</div>
                            </div>
                            <div class="info-bottom">
                                <div class="title">Mua hosting tốt nhất
                                </div>
                                <div class="list-description">
                                    <ul>
                                        <li> <img alt="icon"
                                                src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                            Tốc độ truy cập cao </li>
                                        <li> <img alt="icon"
                                                src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                            Cpanel quản trị tốt nhất </li>
                                        <li> <img alt="icon"
                                                src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                            Sao lưu hàng ngày</li>
                                        <li> <img alt="icon"
                                                src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                            100% ổ cứng NVME </li>
                                        <li> <img alt="icon"
                                                src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                            Bảo mật dữ liệu</li>
                                        <li> <img alt="icon"
                                                src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                            Hỗ trợ 24/7</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="section-img-register-service">
                            <div
                                class="swiper swiper_register_service swiper-coverflow swiper-3d swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress">
                                <div class="swiper-wrapper" id="swiper-wrapper-4d4818bdfed8e529" aria-live="polite">
                                    @forelse ($hosting as $index => $item)
                                    @if ($index <= 5) <div class="swiper-slide swiper-slide--one"
                                        style="width: 335px; transition-duration: 0ms; transform: translate3d(0px, 0px, -2400px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -23;">
                                        <div class="item-service">
                                            <div class="img position-relative">
                                                <img class="rtbs nh-lazyload lazyloaded"
                                                    src="{{ asset($item->logo) }}"
                                                    data-src="{{ asset($item->logo) }}"
                                                    alt=" tên miền quốc tế .com">
                                            </div>
                                            <div class="inner-content">
                                                <div class="name">
                                                    Hosting {{ $item->name }}
                                                </div>
                                                <div class="description">
                                                    <p><img alt="icon"
                                                            src="https://nhanhoa.com/templates/images/v2/home/Icon_feather-check.png">
                                                        DUng lượng NVMe : <b> {{ $item->storage }} </b></p>
                                                    <p><img alt="icon"
                                                            src="https://nhanhoa.com/templates/images/v2/home/Icon_feather-check.png">
                                                        Băng thông : <b> {{ $item->bandwidth }}</b></p>
                                                    <p><img alt="icon"
                                                            src="https://nhanhoa.com/templates/images/v2/home/Icon_feather-check.png">
                                                        FTP Account : <b> {{ $item->ftp_account }}</b></p>
                                                    <p><img alt="icon"
                                                            src="https://nhanhoa.com/templates/images/v2/home/Icon_feather-check.png">
                                                        CPU : <b> {{ $item->cpu }}</b></p>
                                                </div>
                                                <div class="price-section">
                                                    <div class="price b" data-price="849.000 đ">
                                                        <span class="new hevb"> <strong>
                                                                {{ number_format($item->price, 0, ',', '.') }}
                                                                đ</strong></span>/Tháng
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="link-service">
                                                    <a class="bg-gradient btn-add-cart-direct" data-service_id="1961"
                                                        href="{{ route('page.linux-hosting') }}" title="ssd cloud vps e">
                                                        <div
                                                            class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                            <div class="rect1"></div>
                                                            <div class="rect2"></div>
                                                            <div class="rect3"></div>
                                                            <div class="rect4"></div>
                                                            <div class="rect5"></div>
                                                        </div>
                                                        <span class="btn_text">Đăng ký Hosting</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                                @endif
                                @empty

                                @endforelse
                            </div>
                            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                                aria-controls="swiper-wrapper-10a777ad2f7349fde"></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane" id="email" role="tabpanel" aria-labelledby="domain-tab">
        <div class="content-info-service">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="content-left">
                        <div class="info-top">
                            <div class="title"> {{ $home->section5_title }}</div>
                            <div class="description">{{ $home->section5_content }}</div>
                        </div>
                        <div class="info-bottom">
                            <div class="title">Điểm nổi bật của Email doanh nghiệp tại Chúng Tôi?
                            </div>
                            <div class="list-description">
                                <ul>
                                    <li> <img alt="icon"
                                            src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                        Tỷ lệ inbox tới 99%</li>
                                    <li> <img alt="icon"
                                            src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                        Giao diện thân thiện</li>
                                    <li> <img alt="icon"
                                            src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                        Tương thích mọi thiết bị </li>
                                    <li> <img alt="icon"
                                            src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                        Đáp ứng mọi nhu cầu</li>
                                    <li> <img alt="icon"
                                            src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                        An toàn, bảo mật </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-img-register-service">
                        <div
                            class="swiper swiper_register_service swiper-coverflow swiper-3d swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress">
                            <div class="swiper-wrapper" id="swiper-wrapper-4d4818bdfed8e529" aria-live="polite">
                                @forelse ($email as $index => $item)
                                <div class="swiper-slide swiper-slide--one"
                                    style="width: 335px; transition-duration: 0ms; transform: translate3d(0px, 0px, -2400px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -23;">
                                    <div class="item-service">
                                        <div class="img position-relative">
                                            <img class="rtbs nh-lazyload lazyloaded"
                                                src="{{ asset($item->logo) }}"
                                                data-src="{{ asset($item->logo) }}"
                                                alt=" ">
                                        </div>
                                        <div class="inner-content">
                                            <div class="name">
                                                {{ $item->name }}
                                            </div>
                                            <div class="description">
                                                <p><img alt="icon"
                                                        src="https://nhanhoa.com/templates/images/v2/home/Icon_feather-check.png">
                                                    Dung lượng lưu trữ : <b> {{ $item->storage_capacity }}</b></p>
                                                <p><img alt="icon"
                                                        src="https://nhanhoa.com/templates/images/v2/home/Icon_feather-check.png">
                                                    Địa chỉ Email: <b> {{ $item->unlimited_email_addresses }}</b></p>
                                                <p><img alt="icon"
                                                        src="https://nhanhoa.com/templates/images/v2/home/Icon_feather-check.png">
                                                    Tên miền Email : <b> {{ $item->unlimited_email_domain }}</b></p>

                                            </div>
                                            <div class="price-section">
                                                <div class="price b" data-price="849.000 đ">
                                                    <span class="new hevb"> <strong>
                                                            {{ number_format($item->price, 0, ',', '.') }}
                                                            đ</strong></span>/Tháng
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="link-service">
                                                <a class="bg-gradient btn-add-cart-direct" data-service_id="1961"
                                                    href="{{ route('page.email-server') }}" title="ssd cloud vps e">
                                                    <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                        <div class="rect1"></div>
                                                        <div class="rect2"></div>
                                                        <div class="rect3"></div>
                                                        <div class="rect4"></div>
                                                        <div class="rect5"></div>
                                                    </div>
                                                    <span class="btn_text">Đăng ký Email</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                @empty

                                @endforelse
                            </div>
                            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                                aria-controls="swiper-wrapper-10a777ad2f7349fde"></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane" id="ssl" role="tabpanel" aria-labelledby="domain-tab">
        <div class="content-info-service">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="content-left">
                        <div class="info-top">
                            <div class="title"> {{ $home->section6_title }}</div>
                            <div class="description">{{ $home->section6_content }}</div>
                        </div>
                        <div class="info-bottom">
                            <div class="title">Lưu ý quan trọng khi đăng ký tên miền
                            </div>
                            <div class="list-description">
                                <ul>
                                    <li> <img alt="icon"
                                            src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                            Tiết kiệm chi phí </li>
                                    <li> <img alt="icon"
                                            src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                            Lựa chọn phong phú </li>
                                    <li> <img alt="icon"
                                            src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                            Hỗ trợ từ chuyên gia </li>
                                    <li> <img alt="icon"
                                            src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                            Cài đặt nhanh chóng </li>
                                    <li> <img alt="icon"
                                            src="https://nhanhoa.com/uploads/attach/1702005614_icon_check_service.png">
                                            Hỗ trợ 24/7 </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-img-register-service">
                        <div
                            class="swiper swiper_register_service swiper-coverflow swiper-3d swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress">
                            <div class="swiper-wrapper" id="swiper-wrapper-4d4818bdfed8e529" aria-live="polite">
                                @forelse ($ssl as $index => $item)
                                @if ($index <= 5) <div class="swiper-slide swiper-slide--one"
                                    style="width: 335px; transition-duration: 0ms; transform: translate3d(0px, 0px, -2400px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -23;">
                                    <div class="item-service">
                                        <div class="img position-relative">
                                            <img class="rtbs nh-lazyload lazyloaded"
                                                src="{{ asset($item->logo) }}"
                                                data-src="{{ asset($item->logo) }}"
                                                alt="ssl">
                                        </div>
                                        <div class="inner-content">
                                            <div class="name">
                                                SSL {{ $item->name }}
                                            </div>
                                            <div class="description">
                                                <p><img alt="icon"
                                                        src="https://nhanhoa.com/templates/images/v2/home/Icon_feather-check.png">
                                                    Phí cài đặt : <b>Miễn phí </b></p>
                                                <p><img alt="icon"
                                                        src="https://nhanhoa.com/templates/images/v2/home/Icon_feather-check.png">
                                                    Chứng thực : <b> {{ $item->certification }}</b></p>
                                                <p><img alt="icon"
                                                        src="https://nhanhoa.com/templates/images/v2/home/Icon_feather-check.png">
                                                    Số domain được bảo mật : <b> {{ $item->numberdomain }}</b></p>
                                                <p><img alt="icon"
                                                        src="https://nhanhoa.com/templates/images/v2/home/Icon_feather-check.png">
                                                    Hỗ trợ SAN : <b> {{ $item->sansupport }}</b></p>
                                            </div>
                                            <div class="price-section">
                                                <div class="price b" data-price="849.000 đ">
                                                    <span class="new hevb"> <strong>
                                                            {{ number_format($item->price, 0, ',', '.') }}
                                                            đ</strong></span>/Tháng
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="link-service">
                                                <a class="bg-gradient btn-add-cart-direct" data-service_id="1961"
                                                    href="{{ route('page.ssl-comodo') }}" title="ssd cloud vps e">
                                                    <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                        <div class="rect1"></div>
                                                        <div class="rect2"></div>
                                                        <div class="rect3"></div>
                                                        <div class="rect4"></div>
                                                        <div class="rect5"></div>
                                                    </div>
                                                    <span class="btn_text">Đăng ký SSL</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            @endif
                            @empty

                            @endforelse

                        </div>
                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                            aria-controls="swiper-wrapper-10a777ad2f7349fde"></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


</div>
</div>
</div>
