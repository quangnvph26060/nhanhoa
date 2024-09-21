@extends('admin.layout.index')

@section('content')
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

        .avatar, .icon {
            width: 75px !important;
            height: 75px !important;
            border-radius: 50% !important;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1) !important;
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
                        <h4 class="card-title text-center" style="color:white">Thông tin công ty</h4>
                    </div>
                    <div class="card-body">
                        <form
                            action="{{ route('admin.config.update') }}"
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
                                            <input id="logo"
                                                class="custom-file-input @error('logo') is-invalid @enderror" type="file"
                                                name="logo" accept="image/*">
                                            <label class="custom-file-label" for="logo">Chọn logo</label>
                                        </div>
                                        @error('logo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
                                            <input id="icon"
                                                class="custom-file-input @error('icon') is-invalid @enderror" type="file"
                                                name="icon" accept="image/*">
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

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    </script>
@endsection
