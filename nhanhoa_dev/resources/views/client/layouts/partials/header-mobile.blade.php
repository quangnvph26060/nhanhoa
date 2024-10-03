<div class="row">
    <div class="col-6">
        <div class="logo">
            <a href="{{ route('page.home') }}" title="trang chủ">
                <img style="{{ request()->routeIs('page.domain-registration') ? 'filter: none' : '' }}" class="img-fluid nh-lazyload lazyloaded"
                    src="{{ asset($config->logo) }}"
                    data-src="https://nhanhoa.com/templates/images/v2/webp/home/logo.webp" alt="Logo Chúng Tôi ">
            </a>
        </div>
    </div>
    <div class="col-6">
        <div class="mobile-top-header">
            {{-- <div class="top-header-cart">
                <div class="btn-minicart">
                    <a style="background: transparent;" href="https://nhanhoa.com/?site=cart" title="Giỏ hàng ">
                        <img style="{{ request()->routeIs('page.domain-registration') ? 'filter: none' : '' }}" src="https://nhanhoa.com/templates/images/v2/webp/home/icon_minicart.webp" alt="Giỏ hàng">
                        <span class="cart_count cart_number">0</span>
                    </a>
                </div>
            </div> --}}
            <div class="menu-container">
                <a class="btn-menu-mobile active" nh-menu="btn-open" menu-type="main" href="javascript:;">
                    <img style="{{ request()->routeIs('page.domain-registration') ? 'filter: none' : '' }}"
                        src="https://nhanhoa.com/templates/images/v2/webp/mobile/menu.webp" alt="Menu"
                        class="img-fluid">
                </a>
                <div class="back-drop"></div>
                <nav id="main_menu_mobile" class="menu-section active" nh-menu="sidebar" menu-type="main">
                    <div class="menu-info">
                        <div class="menu-top">
                            <div class="btn-close-menu">
                                <a href="javascript:;" nh-menu="btn-close"
                                    class="close-sidebar effect-rotate icon-close active">
                                    <i class="far fa-times-circle"></i>
                                </a>
                            </div>
                            {{-- <ul class="menu-login">
                                <li>
                                    <a class="login" href="https://nhanhoa.com/login.html">
                                        Đăng nhập
                                    </a>
                                </li>
                                <li>
                                    <a class="register" href="https://nhanhoa.com/register.html">
                                        Đăng ký
                                    </a>
                                </li>
                            </ul> --}}

                        </div>
                        <div class="content-menu">
                            <ul>
                                <li class="position-relative has-child" nh-toggle="tenmien">
                                    <a href="">
                                        Tên miền
                                    </a>
                                    <i class="fas fa-sort-up fa-rotate-180 grower"></i>

                                    <ul nh-toggle-element="tenmien" class="entry-menu dropdown">
                                        <li class="">
                                            <a class="menu-link" href="{{ route('page.domain-registration') }}"
                                                title="">
                                                Đăng ký tên miền
                                            </a>
                                        </li>

                                        {{-- <li class=" ">
                                            <a class="menu-link"
                                                href="https://nhanhoa.com/trang/ten-mien/chuyen-doi-nha-cung-cap.html"
                                                title="">
                                                Chuyển tên miền về Chúng Tôi
                                            </a>
                                        </li>

                                        <li class=" ">
                                            <a class="menu-link"
                                                href="https://nhanhoa.com/ten-mien/giu-cho-ten-mien-vn.html"
                                                title="">
                                                Giữ chỗ tên miền
                                            </a>
                                        </li>

                                        <li class=" ">
                                            <a class="menu-link"
                                                href="https://nhanhoa.com/trang/ten-mien/bang-gia-ten-mien.html"
                                                title="">
                                                Bảng giá tên miền
                                            </a>
                                        </li> --}}
                                    </ul>
                                </li>

                                <li class="position-relative has-child" nh-toggle="hosting">
                                    <a href="javascript:void(0)">
                                        Hosting
                                    </a>
                                    <i class="fas fa-sort-up fa-rotate-180 grower"></i>
                                    <ul nh-toggle-element="hosting" class="entry-menu dropdown">
                                        <li class="">
                                            <a class="menu-link" href=""
                                                title="">
                                                Windows Hosting
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a class="menu-link" href="{{route('page.linux-hosting')}}"
                                                title="">
                                                Linux Hosting
                                            </a>
                                        </li>



                                    </ul>
                                </li>
                                <li class="position-relative has-child" nh-toggle="cloud">
                                    <a href="javascript:void(0)">
                                        Cloud
                                    </a>
                                    <i class="fas fa-sort-up fa-rotate-180 grower"></i>
                                    <ul nh-toggle-element="cloud" class="entry-menu dropdown">
                                        <li class="">
                                            <a class="menu-link" href="{{route('page.cloud-server')}}"
                                                title="">
                                                Cloud VPS/ Cloud Server
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="menu-link" href="{{route('page.cloud-international')}}"
                                                title="VPS Quốc tế">
                                                VPS Quốc tế
                                            </a>
                                        </li>

                                        {{-- <li class=" ">
                                            <a class="menu-link" href="{{route('page.cloud-storage')}}"
                                                title="Cloud Storage">
                                                Cloud Storage
                                            </a>
                                        </li> --}}
                                        <li class=" ">
                                            <a class="menu-link" href="{{route('page.cloud-backup')}}"
                                                title="Cloud Storage">
                                                Cloud Backup
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="position-relative has-child" nh-toggle="maychu">
                                    <a href="javascript:void(0)">
                                        Máy chủ
                                    </a>
                                    <i class="fas fa-sort-up fa-rotate-180 grower"></i>
                                    <ul nh-toggle-element="maychu" class="entry-menu dropdown">
                                        <li class="">
                                            <a class="menu-link" href="{{route('page.dedicated-server')}}"
                                                title=" Thuê máy chủ">
                                               Thuê máy chủ
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="menu-link" href="{{route('page.server-location')}}"
                                                title=" Chỗ đặt máy chủ">
                                                Chỗ đặt máy chủ
                                            </a>
                                        </li>

                                        <li class=" ">
                                            <a class="menu-link" href="{{route('page.server-backup')}}"
                                                title="Backup365">
                                                Backup365
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a class="menu-link" href="{{route('page.server-administration')}}"
                                                title="Quản trị máy chủ">
                                                Quản trị máy chủ
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="position-relative has-child" nh-toggle="email">
                                    <a href="javascript:void(0)">
                                        Email
                                    </a>
                                    <i class="fas fa-sort-up fa-rotate-180 grower"></i>
                                    <ul nh-toggle-element="email" class="entry-menu dropdown">

                                        <li class="">
                                            <a class="menu-link" href="{{ route('page.email-server') }}"
                                                title="">
                                                Email Server riêng
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="menu-link" href="{{ route('page.google-workspace') }}"
                                                title="">
                                                Google Workspace
                                            </a>
                                        </li>



                                    </ul>
                                </li>

                                <li class="position-relative has-child" nh-toggle="ssl">
                                    <a href="javascript:void(0)">
                                        SSL
                                    </a>
                                    <i class="fas fa-sort-up fa-rotate-180 grower"></i>
                                    <ul nh-toggle-element="ssl" class="entry-menu dropdown">
                                        <li class=" ">
                                            <a class="menu-link"
                                                href="{{ route('page.ssl-comodo') }}"
                                                title="">
                                                Comodo SSL
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a class="menu-link"
                                                href="{{ route('page.ssl-geotrust') }}"
                                                title="">
                                                Geotrust SSL
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a class="menu-link"
                                                href="{{ route('page.ssl-symantec') }}"
                                                title="">
                                                Digicert SSL
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="position-relative has-child" nh-toggle="giaiphap">
                                    <a href="javascript:void(0)">
                                        Giải pháp
                                    </a>
                                    <i class="fas fa-sort-up fa-rotate-180 grower"></i>
                                    <ul nh-toggle-element="giaiphap" class="entry-menu dropdown">
                                        @forelse ($giaiphapall as $item )
                                        <li class=" ">
                                            <a class="menu-link"
                                                href="{{ route('page.giaiphap',['slug' => $item->slug, 'id'=> $item->id]) }}"
                                                title="">
                                               {{ $item->title }}
                                            </a>
                                        </li>
                                        @empty

                                        @endforelse

                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="download">
                        <a href="{{ route('page.call.phone', ['phone' => $config->phone]) }}" title="" >
                            <i class="fas fa-phone fa-sm me-2" style="color: #74C0FC;"></i>
                            Hotline
                        </a>
                    </div>
                </nav>
            </div><!-- end menu container -->
        </div>
    </div>
</div>
