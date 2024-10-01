
<header id="header">
    <div class="sec-bg3 p-2 pr-3 infonews">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 news">
                    <h6 class="m-0">
                        <div class="badge feat bg-pink mr-2 left">HOT</div>
                        <small class="text-light">{{ $config->store_name }}
                            <a class="c-yellow opa-8" href="https://support.1sonline.vn/">{{ $config->email }}
                                <i class="fas fa-arrow-circle-right"></i></a></small>
                    </h6>
                </div>
                <div class="col-md-6 link">
                    <li class="infonews-nav float-right">
                        <a href="tel:02466711411"><b>{{ $config->phone }}</b></a>
                    </li>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** NAV MENU ****** -->
    <div class="menu-wrap">
        <div class="nav-menu">
            <div class="container">
                <div class="row">
                    <div class="col-2 col-md-2">
                        <a href="{{ route('page.home') }}" class="image-overlay">
                            <img class="logo-menu"
                                src="{{ asset($config->logo) }}"
                                alt="logo Antler" />
                                <div class="overlay"></div>
                        </a>
                    </div>
                    <nav id="menu" class="col-10 col-md-10">
                        <div class="navigation float-right">
                            <button class="menu-toggle">
                                <span class="icon"></span>
                                <span class="icon"></span>
                                <span class="icon"></span>
                            </button>
                            <ul class="main-menu nav navbar-nav navbar-right">
                                @forelse ($giaiphapall as $item )
                                <li class="menu-item">
                                    <a class="pr-1 v-stroke" href="{{ route('page.giaiphap', ['slug' => $item->slug, 'id' => $item->id]) }}"> {{ $item->title }}</a>
                                </li>
                                @empty

                                @endforelse
                                {{-- <li class="menu-item">
                                    <a class="pr-1 v-stroke" href="{{ route('page.security-solutions') }}"> Bảo mật</a>
                                </li>
                                <li class="menu-item">
                                    <a class="pr-1 v-stroke" href="{{ route('page.load-balancing') }}"> Cân bằng tải hệ
                                        thống</a>
                                </li>
                                <li class="menu-item">
                                    <a class="pr-1 v-stroke" href="{{ route('page.ddos-protection') }}"> Chống DDOS</a>
                                </li>
                                <li class="menu-item">
                                    <a class="pr-1 v-stroke" href="{{ route('page.network-consulting') }}"> Thiết kế hệ thống
                                        mạng</a>
                                </li> --}}
                                {{-- <li class="menu-item menu-item-has-children">
                                    <a class="v-stroke" href="#"> GIẢI PHÁP</a>
                                    <div class="sub-menu menu-large">
                                        <div class="service-list">
                                            <div class="service">
                                                <img class="svg"
                                                    src="{{ asset('client/solution/themes/fonts/svg/dedicated.svg') }}"
                                                    alt="Dedicated Server" />
                                                <div class="media-body">
                                                    <a class="menu-item" href="xay-dung-cum-server-rieng-page3.html">
                                                        Xây dựng cụm server riêng</a>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="service">
                                                <img class="svg"
                                                    src="{{ asset('client/solution/themes/fonts/svg/security.svg') }}"
                                                    alt="Dedicated Server" />
                                                <div class="media-body">
                                                    <a class="menu-item" href="giai-phap-bao-mat-page4.html">
                                                        Bảo mật</a>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="service">
                                                <img class="svg"
                                                    src="{{ asset('client/solution/themes/fonts/svg/compare.svg') }}"
                                                    alt="Dedicated Server" />
                                                <div class="media-body">
                                                    <a class="menu-item" href="can-bang-tai-he-thong-page5.html">
                                                        Cân bằng tải hệ thống</a>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="service">
                                                <img class="svg"
                                                    src="{{ asset('client/solution/themes/fonts/svg/protected.svg') }}"
                                                    alt="Dedicated Server" />
                                                <div class="media-body">
                                                    <a class="menu-item" href="chong-ddos.html">
                                                        Chống DDOS</a>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="service">
                                                <img class="svg"
                                                    src="{{ asset('client/solution/themes/fonts/svg/network.svg') }}"
                                                    alt="Dedicated Server" />
                                                <div class="media-body">
                                                    <a class="menu-item"
                                                        href="tu-van-thiet-ke-he-thong-mang-page6.html">
                                                        Thiết kế hệ thống mạng</a>
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}


                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** NAV MENU MOBILE ****** -->
    <div class="menu-wrap mobile">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a href="index.html"><img class="logo-menu"
                            src="{{ asset('client/solution/themes/img/1sonline-logo-light.png') }}"
                            alt="logo 1sonline" /></a>
                </div>
                <div class="col-6">
                    <nav class="nav-menu">
                        <button id="nav-toggle" class="menu-toggle">
                            <span class="icon"></span>
                            <span class="icon"></span>
                            <span class="icon"></span>
                        </button>
                        <div class="main-menu">
                            <div class="menu-item">
                                <a href="index.html" data-toggle="dropdown">Trang chủ</a>
                            </div>
                            <div class="menu-item">
                                <a href="#" data-toggle="dropdown">CLOUD VPS</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item menu-item" href="vps-cloud.html">Bảng giá VPS
                                        Cloud</a>
                                    <a class="dropdown-item menu-item" href="dich-vu-bo-sung.html">Dịch vụ bổ
                                        sung</a>
                                </div>
                            </div>
                            <div class="menu-item">
                                <a href="#" data-toggle="dropdown">Smart Server</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item menu-item" href="smart-server.html">Bảng giá Smart
                                        Server</a>
                                    <a class="dropdown-item menu-item" href="dich-vu-bo-sung-smart-server.html">Dịch
                                        vụ bổ sung Smart Server</a>
                                </div>
                            </div>
                            <div class="menu-item">
                                <a href="#" data-toggle="dropdown">THUÊ MÁY CHỦ</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item menu-item" href="cho-thue-may-chu-supermicro.html">Máy
                                        chủ Supermicro</a>
                                    <a class="dropdown-item menu-item" href="cho-thue-may-chu-ibm.html">Máy chủ
                                        IBM</a>
                                    <a class="dropdown-item menu-item" href="dich-vu-bo-sung-thue-may-chu.html">Dịch
                                        vụ bổ sung</a>
                                </div>
                            </div>
                            <div class="menu-item">
                                <a href="#" data-toggle="dropdown">CHỖ ĐẶT SERVER</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item menu-item" href="cho-dat-may-chu-vnpt.html">Bảng giá
                                        chỗ đặt VNPT Data</a>
                                    <a class="dropdown-item menu-item" href="cho-dat-may-chu-fpt.html">Bảng giá
                                        chỗ đặt Data FPT</a>
                                    <a class="dropdown-item menu-item" href="dich-vu-bo-sung-cho-dat.html">Dịch vụ
                                        bổ sung</a>
                                </div>
                            </div>
                            <div class="menu-item">
                                <a href="#" data-toggle="dropdown">GIẢI PHÁP</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item menu-item" href="xay-dung-cum-server-rieng-page3.html">Xây
                                        dựng cụm server riêng</a>
                                    <a class="dropdown-item menu-item" href="giai-phap-bao-mat-page4.html">Bảo
                                        mật</a>
                                    <a class="dropdown-item menu-item" href="can-bang-tai-he-thong-page5.html">Cân
                                        bằng tải hệ thống</a>
                                    <a class="dropdown-item menu-item" href="chong-ddos.html">Chống DDOS</a>
                                    <a class="dropdown-item menu-item"
                                        href="tu-van-thiet-ke-he-thong-mang-page6.html">Thiết kế hệ thống mạng</a>
                                </div>
                            </div>
                            <div class="menu-item">
                                <a href="gio-hang.html">THANH TOÁN</a>
                            </div>
                            <div class="menu-item menu-last">
                                <a href="lien-he.html">LIÊN HỆ</a>
                            </div>
                            <div class="float-left w-100 mt-3">
                                <p class="c-grey"><small> Phone: 02466.711.411</small></p>
                                <p class="c-grey">
                                    <small>Email: support@1sonline.vn</small>
                                </p>
                            </div>
                            <div>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>
<!-- ***** UPLOADED MENU FROM HEADER.HTML ***** -->
<header id="header"></header>
