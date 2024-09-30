<style>
    .nav-collapse {
        margin-bottom: 0px;
    }
</style>
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="{{ route('admin.dashboard') }}" class="logo">
                <img src="{{ asset($config->logo) }}" alt="navbar brand" class="navbar-brand"
                    height="50" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">

                <li class="nav-item active">
                    <a href="{{ route('admin.dashboard') }}" class="collapsed">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>

                    </a>
                </li>
                @if(auth()->user()->role_id == 1)
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#cauhinh">
                        <i class="fas fa-users"></i>
                        <p>Cấu hính</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="cauhinh">
                        <ul class="nav nav-collapse" style="margin-bottom: 0px">
                            <li>
                                <a href="{{ route('admin.config.detail') }}">
                                    <span class="sub-item">Thông tin</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.config.config.email') }}">
                                    <span class="sub-item">Email</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a data-bs-toggle="collapse" href="#footer">
                                    <i class="fas fa-users"></i>
                                    <p>Footer</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="footer">
                                    <ul class="nav nav-collapse" style="margin-bottom: 0px">
                                        <li>
                                            <a href="{{ route('admin.config.footer.add') }}">
                                                <span class="sub-item">Thêm</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.config.footer.index') }}">
                                                <span class="sub-item">Danh sách</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif

                <li class="nav-item">
                    <a href="{{ route('admin.client.index') }}">
                        <i class="fas fa-users"></i>
                        <p>Khách hàng</p>
                        {{-- <span class="caret"></span> --}}
                    </a>

                </li>
                @if(auth()->user()->role_id == 1)
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#user">
                        <i class="fas fa-user"></i>
                        <p>Tài khoản</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="user">
                        <ul class="nav nav-collapse" style="margin-bottom: 0px">
                            <li>
                                <a href="{{ route('admin.user.add') }}">
                                    <span class="sub-item">Thêm</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.user.index') }}">
                                    <span class="sub-item">Danh sách</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#partner">
                        <i class="fas fa-handshake"></i>
                        <p>Đối tác</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="partner">
                        <ul class="nav nav-collapse" style="margin-bottom: 0px">
                            <li>
                                <a href="{{ route('admin.partner.add') }}">
                                    <span class="sub-item">Thêm</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.partner.index') }}">
                                    <span class="sub-item">Danh sách</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#review">
                        <i class="fas fa-file-alt"></i> <!-- Icon for domain -->
                        <p>Đánh giá</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="review">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.reviews.add') }}">
                                    <span class="sub-item">Thêm</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.reviews.index') }}">
                                    <span class="sub-item">Danh sách</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-server"></i> <!-- Icon for server -->
                        <p>Máy chủ</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse" style="margin-bottom: 0px; margin-left: 20px">
                            <li>
                                <a href="{{ route('admin.server.addform') }}">
                                    <span class="sub-item">Thêm</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.server.index') }}">
                                    <span class="sub-item">Danh sách</span>
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="collapse" href="#location">
                                    <i class="fas fa-map-marker-alt"></i> <!-- Icon for server location -->
                                    <p>Vị trí server</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="location">
                                    <ul class="nav nav-collapse" style="margin-left: 20px; margin-bottom: 0px">
                                        <li>
                                            <a href="{{ route('admin.server.addformlocation') }}">
                                                <span class="sub-item">Thêm</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.server.indexlocation') }}">
                                                <span class="sub-item">Danh sách</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" href="#serviceserver">
                                    <i class="fas fa-map-marker-alt"></i> <!-- Icon for server location -->
                                    <p>Quản trị máy chủ</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="serviceserver">
                                    <ul class="nav nav-collapse" style="margin-left: 20px; margin-bottom: 0px">
                                        <li>
                                            <a href="{{ route('admin.service.add') }}">
                                                <span class="sub-item">Thêm</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.service.index') }}">
                                                <span class="sub-item">Danh sách</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-globe"></i> <!-- Icon for domain -->
                        <p>Tên miền</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.domain.addform') }}">
                                    <span class="sub-item">Thêm</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.domain.index') }}">
                                    <span class="sub-item">Danh sách</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#forms">
                        <i class="fas fa-hdd"></i> <!-- Icon for hosting -->
                        <p>Hosting</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.hosting.addform') }}">
                                    <span class="sub-item">Thêm</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.hosting.index') }}">
                                    <span class="sub-item">Danh sách</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#maps">
                        <i class="fas fa-cloud"></i> <!-- Icon for Cloud -->
                        <p>Cloud</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="maps">
                        <ul class="nav nav-collapse" style="margin-left: 25px">
                            <li>
                                <a data-bs-toggle="collapse" href="#cloud">
                                    <p>SSD Cloud</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="cloud">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="{{ route('admin.cloud.addform') }}">
                                                <span class="sub-item">Thêm</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.cloud.index') }}">
                                                <span class="sub-item">Danh sách</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a data-bs-toggle="collapse" href="#cloudssd">
                                    <p> Cloud BackUp</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="cloudssd">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="{{ route('admin.cloudbackup.addform') }}">
                                                <span class="sub-item">Thêm</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.cloudbackup.index') }}">
                                                <span class="sub-item">Danh sách</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#email">
                        <i class="fas fa-envelope"></i> <!-- Icon for Email -->
                        <p>Email</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="email">
                        <ul class="nav nav-collapse" style="margin-left: 25px; margin-bottom: 0px">
                            <li>
                                <a data-bs-toggle="collapse" href="#emailserver">
                                    <p>Email Server</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="emailserver">
                                    <ul class="nav nav-collapse" style="margin-bottom: 0">
                                        <li>
                                            <a href="{{ route('admin.email.addform') }}">
                                                <span class="sub-item">Thêm</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.email.index') }}">
                                                <span class="sub-item">Danh sách</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a data-bs-toggle="collapse" href="#google">
                                    <p>Google Workspace</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="google">
                                    <ul class="nav nav-collapse" style="margin-bottom: 0">
                                        <li>
                                            <a href="{{ route('admin.googleworkspace.addform') }}">
                                                <span class="sub-item">Thêm</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.googleworkspace.index') }}">
                                                <span class="sub-item">Danh sách</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#ssl">
                        <i class="fas fa-shield-alt"></i> <!-- Icon for SSL -->
                        <p>SSL</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="ssl">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.ssl.addform') }}">
                                    <span class="sub-item">Thêm</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.ssl.index') }}">
                                    <span class="sub-item">Danh sách</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#promotion">
                        <i class="fas fa-tags"></i> <!-- Icon for Promotion -->
                        <p>Khuyến mãi</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="promotion">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.promotion.addform') }}">
                                    <span class="sub-item">Thêm</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.promotion.index') }}">
                                    <span class="sub-item">Danh sách</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#news">
                        <i class="fas fa-newspaper"></i>
                        <p>Tin tức</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="news">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.new.add') }}">
                                    <span class="sub-item">Thêm</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.new.index') }}">
                                    <span class="sub-item">Danh sách</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif

                {{-- <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#giaiphap">
                        <i class="fas fa-flag"></i>
                        <p>Giải pháp</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="giaiphap">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.giaiphap.contractesoc.index') }}">
                                    <span class="sub-item">Hợp đồng ESOC</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.report.serverlocation.index') }}">
                                    <span class="sub-item">Server Location</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.report.hosting.index') }}">
                                    <span class="sub-item">Hosting</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.report.google.index') }}">
                                    <span class="sub-item">Google Workspace</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.report.email.index') }}">
                                    <span class="sub-item">Email Server</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.report.cloud.index') }}">
                                    <span class="sub-item">cloud</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.report.cloudbackup.index') }}">
                                    <span class="sub-item">Cloud backup</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.report.cloudbackup365.index') }}">
                                    <span class="sub-item">Backup 365</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li> --}}
                {{-- <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#baocao">
                        <i class="fas fa-flag"></i>
                        <p>Danh sách liên hệ</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="baocao">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.report.serverlocation.index') }}">
                                    <span class="sub-item">Server</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.report.serverlocation.index') }}">
                                    <span class="sub-item">Server Location</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.report.hosting.index') }}">
                                    <span class="sub-item">Hosting</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.report.google.index') }}">
                                    <span class="sub-item">Google Workspace</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.report.email.index') }}">
                                    <span class="sub-item">Email Server</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.report.cloud.index') }}">
                                    <span class="sub-item">cloud</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.report.cloudbackup.index') }}">
                                    <span class="sub-item">Cloud backup</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.report.cloudbackup365.index') }}">
                                    <span class="sub-item">Backup 365</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li> --}}
                {{-- <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#giaiphap">
                        <i class="fas fa-solid fa-lightbulb"></i> <!-- Icon for Promotion -->
                        <p>Giải pháp</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="giaiphap">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.solution.add') }}">
                                    <span class="sub-item">Thêm</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.solution.index') }}">
                                    <span class="sub-item">Danh sách</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

            </ul>
        </div>
    </div>
</div>
