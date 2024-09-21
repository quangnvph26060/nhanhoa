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

        .avatar {
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
                        <h4 class="card-title text-center" style="color:white">Thông tin Email</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.config.update.email') }}" method="POST">
                            @csrf
                            {{-- <div class="form-group">
                                <label for="mail_host">Mail Host</label>
                                <input type="text" class="form-control" name="mail_host" value="{{ old('mail_host', $emailSetting->mail_host ?? '') }}" required>
                            </div> --}}

                            <div class="form-group">
                                <label for="mail_username">Email</label>
                                <input type="text" class="form-control" name="mail_username" value="{{ old('mail_username', $emailSetting->mail_username ?? '') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="mail_password">Mật khẩu ứng dụng</label>
                                <input type="text" class="form-control" name="mail_password" value="{{ old('mail_password', $emailSetting->mail_password ?? '') }}" required>
                            </div>
                            {{-- <div class="form-group">
                                <label for="mail_encryption">Mail Encryption</label>
                                <input type="text" class="form-control" name="mail_encryption" value="{{ old('mail_encryption', $emailSetting->mail_encryption ?? '') }}" required>
                            </div> --}}
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
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

@endsection
