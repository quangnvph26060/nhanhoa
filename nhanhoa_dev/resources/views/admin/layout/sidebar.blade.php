<style>
    .nav-collapse{
        margin-bottom: 0px;
    }
</style>
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="{{ route('admin.dashboard') }}" class="logo">
                <img src="{{ asset('assets/img/kaiadmin/logo_light.svg') }}" alt="navbar brand" class="navbar-brand" height="20" />
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
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#client">
                        <i class="fas fa-users"></i>
                        <p>Khách hàng</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="client">
                        <ul class="nav nav-collapse" style="margin-bottom: 0px">
                            <li>
                                <a href="{{ route('admin.client.index') }}">
                                    <span class="sub-item">Thêm</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.client.index') }}">
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
                        <ul class="nav nav-collapse" style="margin-bottom: 0px">
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
                    <a data-bs-toggle="collapse" href="#baocao">
                        <i class="fas fa-tags"></i> <!-- Icon for Promotion -->
                        <p>Báo cáo</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="baocao">
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
            </ul>
        </div>
    </div>
</div>

