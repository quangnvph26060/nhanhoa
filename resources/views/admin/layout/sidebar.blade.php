<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img src="{{ asset('assets/img/kaiadmin/logo_light.svg') }}" alt="navbar brand" class="navbar-brand"
                    height="20" />
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
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>Máy chủ</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
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
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-th-list"></i>
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
                        <i class="fas fa-pen-square"></i>
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
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Cloud</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="maps">
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
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#promotion">
                        <i class="fas fa-pen-square"></i>
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
                    <a href="{{ route('admin.config.detail') }}">
                        <i class="fas fa-file"></i>
                        <p>Cấu hình</p>
                        <span class="badge badge-secondary">1</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
