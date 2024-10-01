<div class="row">
    <div class="col-lg-2 col-md-3 col_logo">
        <div class="logo">
            <a href="{{route('page.home')}}">
                <img class="img-fluid nh-lazyload ls-is-cached lazyloaded"
                    src="{{ asset($config->logo) }}"
                    data-src="https://nhanhoa.com/templates/images/v2/webp/home/logo.webp" alt="Logo Chúng Tôi">
            </a>
        </div>
    </div>
    <div class="col-lg-8 col-md-8">
        <div class="menu-icon-main" style="">
            <div class="menu-icon">
                <span class="title">
                    <img class="nh-lazyload lazyloaded" src="https://nhanhoa.com/templates/images/v2/menu/icon_menu.png"
                        data-src="https://nhanhoa.com/templates/images/v2/menu/icon_menu.png" alt="Menu">
                </span>
                <div class="dropdown-menu-service">
                    <ul class="list-menu-service">
                        <li>
                            <a class="menu-link" href="{{route('page.domain-registration')}}" title="">
                                <div class="item-menu">
                                    <div class="icon">
                                        <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_dktm.png"
                                            alt="Đăng ký tên miền">
                                    </div>
                                    <div class="name-description">
                                        <span class="name">
                                            Đăng ký tên miền
                                        </span>
                                        <span class="description">
                                            Tìm kiếm tên miền của bạn ngay tại đây.
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="menu-link" href="{{ route('page.email-server') }}"
                                title="Email Server">
                                <div class="item-menu">
                                    <div class="icon">
                                        <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_hosting_01.png"
                                            alt="Email Server">
                                    </div>
                                    <div class="name-description">
                                        <span class="name">
                                            Email Server
                                        </span>
                                        <span class="description">
                                            Toàn quyền quản trị hệ thống email mà không có sự can
                                            thiệp của bên
                                            nào khác.
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a class="menu-link" href="{{ route('page.cloud-international') }}" title="">
                                <div class="item-menu">
                                    <div class="icon">
                                        <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_may_chu_01.png"
                                            alt="">
                                    </div>
                                    <div class="name-description">
                                        <span class="name">
                                            Cloud VPS
                                        </span>
                                        <span class="description">
                                            Cấu hình đa dạng, hạ tầng ổn định, tối ưu chi phí cho
                                            doanh nghiệp.
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="menu-link" href="{{ route('page.google-workspace') }}" title="">
                                <div class="item-menu">
                                    <div class="icon">
                                        <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_email_02.png"
                                            alt="Google Workspace">
                                    </div>
                                    <div class="name-description">
                                        <span class="name">
                                            Google Workspace
                                        </span>
                                        <span class="description">
                                            Đối tác ủy quyền hàng đầu của Google tại Việt Nam.
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li>
                            <a class="menu-link" href="{{ route('page.ssl-comodo') }}"
                                title="Dịch vụ SSL">
                                <div class="item-menu">
                                    <div class="icon">
                                        <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_ssl_01.png"
                                            alt="Dịch vụ SSL">
                                    </div>
                                    <div class="name-description">
                                        <span class="name">
                                            Comodo SSL
                                        </span>
                                        <span class="description">
                                            Nhà cung cấp chứng chỉ số lớn nhất thế giới
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!--end menu icon -->
                </div>
            </div>

            <div class="main-menu navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a href="javascrip;" class="nav-link">
                            Tên Miền
                            <span class="sub"></span>
                        </a>
                        <ul class="entry-menu dropdown">
                            <li>
                                <a class="menu-link" href="{{route('page.domain-registration')}}" title="">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_dktm.png"
                                                alt="Đăng ký tên miền">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Đăng ký tên miền
                                            </span>
                                            <span class="description">
                                                Tìm kiếm tên miền của bạn ngay tại đây.
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            {{-- <li>
                                <a class="menu-link" href="https://nhanhoa.com/trang/ten-mien/bang-gia-ten-mien.html"
                                    title="">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_domain.png"
                                                alt="Whois Domain">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Bảng giá tên miền
                                            </span>
                                            <span class="description">
                                                Bảng giá tên miền tại Chúng Tôi
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="menu-link" href="https://nhanhoa.com/ten-mien/giu-cho-ten-mien-vn.html"
                                    title="">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_khoa_ten_mien.png"
                                                alt="Giữ chỗ tên miền">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Giữ chỗ tên miền
                                            </span>
                                            <span class="description">
                                                Giữ chỗ tên miền
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="menu-link"
                                    href="https://nhanhoa.com/trang/ten-mien/chuyen-nhuong-ten-mien.html" title="">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_domain.png"
                                                alt="Whois Domain">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Chuyển nhượng tên miền
                                            </span>
                                            <span class="description">
                                                Chuyển nhượng tên miền
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="menu-link"
                                    href="https://nhanhoa.com/trang/ten-mien/chuyen-doi-nha-cung-cap.html" title="">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_ten_mien.png"
                                                alt="Chuyển tên miền về Chúng Tôi">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Chuyển tên miền về Chúng Tôi
                                            </span>
                                            <span class="description">
                                                Chuyển đổi nhà cung cấp sang Chúng Tôi.
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="d-none">
                                <a class="menu-link" href="https://nhanhoa.com/ten-mien/khoa-ten-mien.html" title="">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_khoa_ten_mien.png"
                                                alt="Khóa tên miền">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Khóa tên miền
                                            </span>
                                            <span class="description">
                                                Loại bỏ 100% nguy cơ mất tên miền.
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li> --}}

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="javascript:;" title="">
                            Hosting
                            <span class="sub"></span>
                        </a>
                        <ul class="entry-menu dropdown">
                            <li>
                                <a class="menu-link" href="{{ route('page.linux-hosting') }}" title="">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_hosting_02.png"
                                                alt="Linux Hosting">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Linux Hosting
                                            </span>
                                            <span class="description">
                                                Tối ưu chi phí vận hành website.
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="menu-link" href="{{ route('page.windows-hosting') }}" title="">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_hosting_01.png"
                                                alt="Window Hosting">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Windows Hosting
                                            </span>
                                            <span class="description">
                                                Hosting giá rẻ dành cho cá nhân, doanh nghiệp vừa và
                                                nhỏ.
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>



                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:;" title="">
                            Cloud
                            <span class="sub"></span>
                        </a>
                        <ul class="entry-menu dropdown">
                            <li>
                                <a class="menu-link" href="{{route('page.cloud-server')}}" title="">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_may_chu_01.png"
                                                alt="Cloud VPS/ Cloud Server">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                SSD Cloud Server
                                            </span>
                                            <span class="description">
                                                Cấu hình đa dạng, hạ tầng ổn định, tối ưu chi phí
                                                cho doanh
                                                nghiệp.
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="menu-link" href="{{route('page.cloud-international')}}" title="">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_may_chu_02.png"
                                                alt="Dedicated Server">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Cloud VPS Quốc tế
                                            </span>
                                            <span class="description">
                                                Dịch vụ VPS Quốc tế hiệu suất cao của Chúng Tôi
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            {{-- <li>
                                <a class="menu-link" href="{{route('page.cloud-storage')}}" title="Cloud Storage">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_may_chu_01.png"
                                                alt="Cloud Storage">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Cloud Storage
                                            </span>
                                            <span class="description">
                                                Giải pháp lưu trữ dữ liệu hiệu quả
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li> --}}
                            <li>
                                <a class="menu-link" href="{{route('page.cloud-backup')}}" title="Cloud Backup">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_may_chu_02.png"
                                                alt="Cloud Backup">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Cloud Backup
                                            </span>
                                            <span class="description">
                                                Dành cho khách hàng mong muốn backup dữ liệu
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:;" title="Máy Chủ">
                            Máy Chủ
                            <span class="sub"></span>
                        </a>
                        <ul class="entry-menu dropdown">
                            <li>
                                <a class="menu-link" href="{{route('page.dedicated-server')}}" title="">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_may_chu_01.png"
                                                alt="Dedicated Server">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Thuê máy chủ riêng
                                            </span>
                                            <span class="description">
                                                Cấu hình đa dạng, hạ tầng ổn định, tối ưu chi phí
                                                cho doanh
                                                nghiệp.
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="menu-link" href="{{route('page.server-location')}}" title="">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_may_chu_02.png"
                                                alt="Thuê chỗ đặt máy chủ">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Chỗ đặt máy chủ
                                            </span>
                                            <span class="description">
                                                Dành cho khách hàng đã có máy chủ cần thuê chỗ đặt
                                                trong trung
                                                tâm dữ liệu.
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="menu-link" href="{{route('page.server-backup')}}" title="Backup365">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_may_chu_02.png"
                                                alt="Backup365">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Backup365
                                            </span>
                                            <span class="description">
                                                Dành cho khách hàng mong muốn backup dữ liệu
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="menu-link" href="{{route('page.server-administration')}}"
                                    title=" Quản trị máy chủ">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_may_chu_02.png"
                                                alt="Quản trị máy chủ">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Quản trị máy chủ
                                            </span>
                                            <span class="description">
                                                Dành cho khách hàng mong muốn chuyên gia quản trị
                                                máy chủ của
                                                mình
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" title="">
                            Email
                            <span class="sub"></span>
                        </a>
                        <ul class="entry-menu dropdown">


                            <li>
                                <a class="menu-link" href="{{route('page.google-workspace')}}" title="">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_email_02.png"
                                                alt="Google Workspace">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Google Workspace
                                            </span>
                                            <span class="description">
                                                Đối tác ủy quyền hàng đầu của Google tại Việt Nam.
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="menu-link" href="{{route('page.email-server')}}" title="">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_email_04.png"
                                                alt="Email Server riêng">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Email Server riêng
                                            </span>
                                            <span class="description">
                                                Toàn quyền quản trị hệ thống email mà không có sự
                                                can thiệp của
                                                bên nào khác.
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:;" title="">
                            SSL
                            <span class="sub"></span>
                        </a>
                        <ul class="entry-menu dropdown">
                            <li>
                                <a class="menu-link" href="{{route('page.ssl-comodo')}}" title="">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_ssl_01.png"
                                                alt="Comodo SSL">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Comodo SSL
                                            </span>
                                            <span class="description">
                                                Nhà cung cấp chứng chỉ số lớn nhất thế giới, với
                                                nhiều khách
                                                hàng và sản phẩm đa dạng
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="menu-link" href="{{route('page.ssl-geotrust')}}" title="">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_ssl_02.png"
                                                alt="Geotrust SSL">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Geotrust SSL
                                            </span>
                                            <span class="description">
                                                Nhà cung cấp chứng chỉ số uy tín và phổ biến, với
                                                nhiều năm kinh
                                                nghiệm và hỗ trợ tốt.
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="menu-link" href="{{route('page.ssl-symantec')}}" title="">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/icon_menu_ssl_03.png"
                                                alt="Digicert SSL">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Digicert SSL
                                            </span>
                                            <span class="description">
                                                Nhà cung cấp chứng chỉ số hàng đầu thế giới, với
                                                nhiều giải
                                                thưởng và công nhận về đổi mới và chất lượng.
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="javascript:;" title="">
                            Giải Pháp
                            <span class="sub"></span>
                        </a>

                        <ul class="entry-menu dropdown">

                            <li>
                                <a class="menu-link" href="{{route('page.solution-vfone')}}" title="Vfone"
                                    target="_blank">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/vfone.svg"
                                                alt="Vfone">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Tổng đài VFone
                                            </span>
                                            <span class="description">
                                                Giải pháp Tổng đài doanh nghiệp
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="menu-link" href="{{route('page.electronic-contract')}}"
                                    title="Hợp đồng điện tử" target="_blank">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/hopdongdientu.png"
                                                alt="Hợp đồng điện tử">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Hợp đồng điện tử
                                            </span>
                                            <span class="description">
                                                Giải pháp hợp đồng điện tử ESOC
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="menu-link" href="{{route('page.electronic-invoice')}}" title="Hóa đơn điện tử"
                                    target="_blank">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/hoadonbiz.png"
                                                alt="Hóa đơn điện tử">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Hóa đơn điện tử
                                            </span>
                                            <span class="description">
                                                Giải pháp hóa đơn điện tử HOADON.BIZ
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="menu-link" href="https://echungtu.com" title="Chứng từ điện tử"
                                    target="_blank">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/echungtu.png"
                                                alt="Chứng từ điện tử">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Chứng từ điện tử
                                            </span>
                                            <span class="description">
                                                Giải pháp Chứng từ điện tử
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a class="menu-link" href="https://esim.nhanhoa.com" title="Esim Data Travel"
                                    target="_blank">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/esimdulich.png"
                                                alt="Esim Data Travel">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Esim du lịch
                                            </span>
                                            <span class="description">
                                                Tiết kiệm 96% chi phí trong mỗi chuyến đi.
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="">
                                <a class="menu-link" href="https://nhanhoa.com/license/cpanel.html" title="Phần mềm">
                                    <div class="item-menu">
                                        <div class="icon">
                                            <img src="https://nhanhoa.com/templates/images/v2/menu/phan-mem.svg"
                                                alt="Phần mềm">
                                        </div>
                                        <div class="name-description">
                                            <span class="name">
                                                Phần mềm
                                            </span>
                                            <span class="description">
                                                Phần mềm bản quyền
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('page.giaiphap', ['slug' => $giaiphapheader->slug, 'id' => $giaiphapheader->id]) }}" title="">
                            Giải Pháp
                        </a>
                    </li>

                </ul>
            </div>

        </div>

    </div>
    <div class="col-lg-2 col-md-2">
        <div class="header-right">
            <div class="btn-action-header btn-promotion">
                <a href="{{route('page.news')}}" >
                    Sự kiện
                </a>
            </div>
            <!--Begin Member Info-->

            {{-- @if (isset($user) && $user)
            <div class="btn-action-header btn-login" id="member_details"  >
                <a  title="Tài khoản" style="border-radius: 50% ">
                    {{ $user->name[0] }}
                </a>

            </div>
            @else
            <div class="btn-action-header btn-login" id="member_details">
                <a href="{{ route('form_login') }}" title="Tài khoản">
                    Tài khoản
                </a>

            </div>
            @endif --}}
            {{-- <div class="btn-action-header btn-login" id="member_details">
                <a href="{{ route('form_login') }}" title="Tài khoản">
                    Tài khoản
                </a>

            </div> --}}

            <!--End Member Info-->
            {{-- <div class="btn-minicart">
                <a href="https://nhanhoa.com/?site=cart" title="Giỏ hàng ">
                    <img src="https://nhanhoa.com/templates/images/v2/home/icon_minicart.png" alt="Giỏ hàng">
                    <span class="cart_count cart_number">0</span>
                </a>
            </div> --}}
            <div class="btn-app">
                <span>
                    <img src="https://nhanhoa.com/templates/images/v2/home/download_app.png" alt="Download app">
                </span>
                <div class="content-app toggletag">
                    <p>
                        Quét mã QR để tải về ứng dụng
                    </p>
                    <div class="img">
                        <img src="https://nhanhoa.com/templates/images/v2/home/download-app.png" alt="QR code">
                    </div>
                    <div class="link">
                        <a href="https://nhanhoa.com/nhan-hoa-app.html" target="_blank">
                            Xem thêm
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
