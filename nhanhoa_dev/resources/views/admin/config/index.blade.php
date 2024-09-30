@extends('admin.layout.index')

@section('content')
<!-- Thêm Selectize.js -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.default.min.css" rel="stylesheet">
<style>
    /* Add your styles here */
    .breadcrumbs {
        background: #fff;
        padding: 0.75rem;
        border-radius: 10px;
        box-shadow: 0 2px 4pax rgba(0, 0, 0, 0.1);
    }

    .breadcrumbs a {
        color: #007bff;
        text-decoration: none;
        font-weight: 500;
    }

    .breadcrumbs i {
        color: #6c757d;
    }

    .card {
        border-radius: 15px;
        overflow: hidden;
    }

    .card-header {
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        background: linear-gradient(135deg, #6f42c1, #007bff);
    }

    .card-body {
        padding: 2rem;
        background-color: #f8f9fa;
    }

    .table th,
    .table td {
        vertical-align: middle;
        padding: 1rem;
        font-size: 1rem;
    }

    .table th {
        background-color: #e9ecef;
        font-weight: bold;
        color: #495057;
    }

    .table-hover tbody tr:hover {
        background-color: #dee2e6;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
        transform: translateY(-2px);
    }

    .text-primary {
        color: #007bff !important;
    }

    .nowrap {
        white-space: nowrap;
        display: flex;
        justify-content: space-between;
    }


    .form-group {
        position: relative !important;
        margin-bottom: 1.5rem !important;
    }

    .form-control {
        border-radius: 10px !important;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1) !important;
        padding: 10px 15px !important;
        transition: all 0.3s ease-in-out !important;
    }

    .form-control:focus {
        box-shadow: 0 0 5px rgba(81, 203, 238, 1) !important;
        border-color: rgba(81, 203, 238, 1) !important;
    }

    .form-label {
        font-weight: bold !important;
        color: #333 !important;
        margin-bottom: 0.5rem !important;
    }

    .custom-file-input {
        display: none !important;
    }

    .custom-file-label {
        border-radius: 10px !important;
        background: #f8f9fa !important;
        padding: 10px 15px !important;
        cursor: pointer !important;
        transition: all 0.3s ease-in-out !important;
    }

    .custom-file-label:hover {
        background: #e2e6ea !important;
    }

    .btn-primary {
        background-color: #007bff !important;
        border-color: #007bff !important;
        border-radius: 10px !important;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1) !important;
        transition: all 0.3s ease-in-out !important;
    }

    .btn-primary:hover {
        background-color: #0056b3 !important;
        border-color: #004085 !important;
        transform: translateY(-2px) !important;
    }

    .avatar,
    .icon {
        width: 100px !important;
        height: 75px !important;
        /* border-radius: 50% !important;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1) !important; */
    }

    /* Custom styles for modals */
    .modal-content {
        border-radius: 15px !important;
        overflow: hidden !important;
    }

    .modal-header {
        background-color: #007bff !important;
        color: white !important;
    }

    .modal-header .btn-close {
        color: white !important;
    }

    .modal-body {
        padding: 2rem !important;
    }

    /* Success and error message styling */
    .alert {
        transition: all 0.3s ease-in-out !important;
        margin-top: 1rem !important;
    }

    .btn-active {
        background-color: #007bff;
        color: white;
    }

    .btn-default {
        background-color: #e9ecef;
        color: #000;
    }

    button{
        color: white !important;
    }

</style>
<div class="page-inner">
    <div class="page-header">
        <ul class="breadcrumbs mb-3">
            <li class="nav-home">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="icon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.config.detail') }}">Cấu hình</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 id="mainTitle" class="card-title text-center main-title-default" style="color:white">Thông tin
                        công ty</h4>

                </div>
                <div>
                    <button class="btn btn-primary p-3 m-3" style="padding: 15px 20px !important" onclick="showSection('congty')">Công ty</button>
                    <button class="btn btn-primary p-3 m-3" onclick="showSection('trangchu')">Trang chủ</button>
                    <button class="btn btn-primary p-3 m-3" style="padding: 15px 30px !important" onclick="showSection('sale')">SEO</button>
                </div>
                <div class="card-body">
                    <form id="congty" class="card-body section" action="{{ route('admin.config.update') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- First Column -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="store_name" class="form-label">Tên công ty</label>
                                    <input id="store_name"
                                        class="form-control @error('store_name') is-invalid @enderror" name="store_name"
                                        type="text"
                                        value="{{ old('store_name', isset($config) ? $config->store_name : '') }}">
                                    @error('store_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="form-label">Số điện thoại</label>
                                    <input id="phone" class="form-control @error('phone') is-invalid @enderror"
                                        name="phone" type="text"
                                        value="{{ old('phone', isset($config) ? $config->phone : '') }}">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input id="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" type="email"
                                        value="{{ old('email', isset($config) ? $config->email : '') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="logo" class="form-label">Logo công ty</label>
                                    <div class="custom-file">
                                        <input id="logo" class="custom-file-input" type="file" name="logo"
                                            accept="image/*">
                                        <label class="custom-file-label" for="logo">Chọn logo</label>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <img id="profileImage"
                                        src="{{ isset($config->logo) && !empty($config->logo) ? asset($config->logo) : asset('images/avatar2.jpg') }}"
                                        alt="image profile" class="avatar">
                                </div>
                            </div>
                            <!-- Second Column -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="receiver" class="form-label">Người đại diện pháp lý</label>
                                    <input id="receiver" class="form-control @error('receiver') is-invalid @enderror"
                                        name="receiver" type="text"
                                        value="{{ old('receiver', isset($config) ? $config->receiver : '') }}">
                                    @error('receiver')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="bank_account" class="form-label">Số tài khoản</label>
                                    <input id="bank_account"
                                        class="form-control @error('bank_account') is-invalid @enderror"
                                        name="bank_account" type="text"
                                        value="{{ old('bank_account', isset($config) ? $config->bank_account : '') }}">
                                    @error('bank_account')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="bank_name" class="form-label">Ngân hàng</label>
                                    <select name="bank" id="bank" class="form-control">
                                        <option value="">-------- Chọn ngân hàng --------</option>
                                        @foreach ($bank as $item)
                                        <option @if (isset($config) && $config->bank_id == $item->id) selected @endif
                                            value="{{ $item->id }}">
                                            {{ $item->shortName . ' - ' . $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="form-label">Địa chỉ</label>
                                    <input id="address" class="form-control @error('address') is-invalid @enderror"
                                        name="address" type="text"
                                        value="{{ old('address', isset($config) ? $config->address : '') }}">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="icon" class="form-label">Icon</label>
                                    <div class="custom-file">
                                        <input id="icon" class="custom-file-input @error('icon') is-invalid @enderror"
                                            type="file" name="icon" accept="image/*">
                                        <label class="custom-file-label" for="icon">Chọn Icon</label>
                                    </div>
                                    @error('icon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <img id="profileImageIcon"
                                        src="{{ isset($config->icon) && !empty($config->icon) ? asset($config->icon) : asset('images/avatar2.jpg') }}"
                                        alt="image icon" class="icon">
                                </div>
                            </div>
                        </div>
                        <!-- Buttons Row -->
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-between">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">
                                        <i class="fas fa-check-circle"></i> Xác nhận
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <form action="{{ route('admin.config.updatehome') }}" method="POST" id="trangchu"
                        class="card-body section" style="display: none;">
                        @csrf
                        <div class="section-content">
                            <h3 class="section-title">Section 1</h3>
                            <div class="form-group">
                                <label for="section1Title" class="form-label">Tiêu đề:</label>
                                <input type="text" class="form-control" name="section1_title" id="section1Title"
                                    value="{{ old('section1_title', isset($home) ? $home->section1_title : '') }}"
                                    placeholder="Enter title for section 1">
                            </div>
                            <div class="form-group">
                                <label for="section1Content" class="form-label">Nội dung:</label>
                                <textarea class="form-control" id="section1Content" name="section1_content"
                                style="resize: vertical"  rows="5"
                                    placeholder="Enter content for section 1">{{ old('section1_content', isset($home) ? $home->section1_content : '') }}</textarea>
                            </div>
                        </div>

                        <!-- Section 2 -->
                        <div class="section-content">
                            <h3 class="section-title">Tên miền</h3>
                            <div class="form-group">
                                <label for="section2Title" class="form-label">Tiêu đề :</label>
                                <input type="text" class="form-control" name="section2_title" id="section2Title"
                                    value="{{ old('section2_title', isset($home) ? $home->section2_title : '') }}"
                                    placeholder="Enter title for section 2">
                            </div>
                            <div class="form-group">
                                <label for="section2Content" class="form-label">Nội dung:</label>
                                <textarea class="form-control" id="section2Content" name="section2_content" rows="5"
                                    placeholder="Enter content for section 2">{{ old('section2_content', isset($home) ? $home->section2_content : '') }}</textarea>
                            </div>
                        </div>

                        <!-- Section 3 -->
                        <div class="section-content">
                            <h3 class="section-title" class="form-label"> Cloud VPS</h3>
                            <div class="form-group">
                                <label for="section3Title" class="form-label">Tiêu đề:</label>
                                <input type="text" class="form-control" name="section3_title" id="section3Title"
                                    value="{{ old('section3_title', isset($home) ? $home->section3_title : '') }}"
                                    placeholder="Enter title for section 3">
                            </div>
                            <div class="form-group">
                                <label for="section3Content" class="form-label">Nội dung:</label>
                                <textarea class="form-control" id="section3Content" name="section3_content" rows="5"
                                    placeholder="Enter content for section 3">{{ old('section3_content', isset($home) ? $home->section3_content : '') }}</textarea>
                            </div>
                        </div>

                        <div class="section-content">
                            <h3 class="section-title" class="form-label">Hosting</h3>
                            <div class="form-group">
                                <label for="section3Title" class="form-label">Tiêu đề:</label>
                                <input type="text" class="form-control" name="section4_title" id="section4Title"
                                    value="{{ old('section4_title', isset($home) ? $home->section4_title : '') }}"
                                    placeholder="Enter title for section 3">
                            </div>
                            <div class="form-group">
                                <label for="section3Content" class="form-label">Nội dung:</label>
                                <textarea class="form-control" id="section3Content" name="section4_content" rows="5"
                                    placeholder="Enter content for section 3">{{ old('section4_content', isset($home) ? $home->section4_content : '') }}</textarea>
                            </div>
                        </div>

                        <div class="section-content">
                            <h3 class="section-title" class="form-label">Email</h3>
                            <div class="form-group">
                                <label for="section3Title" class="form-label">Tiêu đề:</label>
                                <input type="text" class="form-control" name="section5_title" id="section5Title"
                                    value="{{ old('section5_title', isset($home) ? $home->section5_title : '') }}"
                                    placeholder="Enter title for section 3">
                            </div>
                            <div class="form-group">
                                <label for="section3Content" class="form-label">Nội dung:</label>
                                <textarea class="form-control" id="section3Content" name="section5_content" rows="5"
                                    placeholder="Enter content for section 3">{{ old('section5_content', isset($home) ? $home->section5_content : '') }}</textarea>
                            </div>
                        </div>

                        <div class="section-content">
                            <h3 class="section-title" class="form-label">SSL</h3>
                            <div class="form-group">
                                <label for="section3Title" class="form-label">Tiêu đề:</label>
                                <input type="text" class="form-control" name="section6_title" id="section6Title"
                                    value="{{ old('section6_title', isset($home) ? $home->section6_title : '') }}"
                                    placeholder="Enter title for section 3">
                            </div>
                            <div class="form-group">
                                <label for="section3Content" class="form-label">Nội dung:</label>

                                <textarea class="form-control" id="section3Content" name="section6_content" rows="5"
                                    placeholder="Enter content for section 3">{{ old('section6_content', isset($home) ? $home->section6_content : '') }}</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-between">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">
                                        <i class="fas fa-check-circle"></i> Xác nhận
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <form id="sale" action="{{ route('admin.config.updatesale') }}" method="POST"  class="card-body section" style="display: none;">
                        @csrf
                        <div class="row">
                            <!-- First Column -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="title" class="form-label">Title</label>
                                    <input id="title" class="form-control @error('title') is-invalid @enderror"
                                        name="title" type="text"
                                        value="{{ old('title', isset($sale) ? $sale->title : '') }}" />
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="describe" class="form-label">Từ khóa</label>
                                    <input id="describe" class="form-control " name="describe" type="text"
                                        value="{{ old('describe', isset($sale) ? $sale->describe : '') }}" >
                                    @error('describe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="content" class="form-label">Nội dung:</label>
                                    <textarea class="form-control" id="content" name="content" rows="5"
                                        placeholder="Mô tả SEO">{{ old('content', isset($sale) ? $sale->content : '') }}</textarea>
                                </div>

                            </div>
                            <!-- Second Column -->

                        </div>
                        <!-- Buttons Row -->
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-between">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">
                                        <i class="fas fa-check-circle"></i> Xác nhận
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include jQuery -->
<!-- jQuery -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script>
<script>

        document.getElementById('logo').addEventListener('change', function(event) {
            const input = event.target;
            const reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('profileImage').src = e.target.result;
            };

            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        });

        document.getElementById('icon').addEventListener('change', function(event) {
            const input = event.target;
            const reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('profileImageIcon').src = e.target.result;
            };

            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        });

        function showSection(sectionId) {
        // Ẩn tất cả các phần
        var sections = document.querySelectorAll('.section');
        sections.forEach(function(section) {
            section.style.display = 'none';
        });

        // Hiển thị phần được chọn
        var selectedSection = document.getElementById(sectionId);
        if (selectedSection) {
            selectedSection.style.display = 'block';
        }

        // Xóa lớp btn-active từ tất cả các nút
        document.querySelectorAll('.btn').forEach(function(button) {
            button.classList.remove('btn-active');
            button.classList.add('btn-default');
        });

        // Thêm lớp btn-active vào nút được chọn
        var activeButton = document.getElementById(`btn${capitalizeFirstLetter(sectionId)}`);
        if (activeButton) {
            activeButton.classList.add('btn-active');
            activeButton.classList.remove('btn-default');
        }

        // Cập nhật màu sắc của tiêu đề ngoài cùng
        var mainTitle = document.getElementById('mainTitle');
        if (mainTitle) {
            mainTitle.classList.remove('main-title-default');
            mainTitle.classList.add('main-title-active');
            mainTitle.textContent = getSectionTitle(sectionId);
        }
        }

        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }

        function getSectionTitle(sectionId) {
            switch (sectionId) {
                case 'congty':
                    return 'Thông tin công ty';
                case 'trangchu':
                    return 'Nội dung trang chủ';
                case 'sale':
                    return 'Thông tin sale';
                default:
                    return 'Thông tin công ty';
            }
        }

        // Hiển thị phần mặc định là 'congty'
        document.addEventListener('DOMContentLoaded', function() {
            showSection('congty');
        });
</script>

<script>
    // Giải phóng ký hiệu $ để tránh xung đột
    var $jq = jQuery.noConflict();

    // Sử dụng $jq thay vì $ trong mã của bạn
    $jq(document).ready(function() {
        $jq('#describe').selectize({
            delimiter: ',',
            persist: false,
            create: function(input) {
                return {
                    value: input,
                    text: input
                };
            },
            plugins: ['remove_button'],
            onKeyDown: function(e) {
                if (e.key === ' ') {
                    e.preventDefault();
                    var value = this.$control_input.val().trim();
                    if (value) {
                        this.addItem(value);
                        this.$control_input.val('');
                    }
                }
            }
        });
    });
</script>
@if (session('success'))
    <script>
        $(document).ready(function() {
                $.notify({
                    icon: 'icon-bell',
                    title: 'Cấu hình',
                    message: '{{ session('success') }}',
                }, {
                    type: 'secondary',
                    placement: {
                        from: "bottom",
                        align: "right"
                    },
                    time: 1000,
                });
            });
    </script>
    @endif

@endsection
