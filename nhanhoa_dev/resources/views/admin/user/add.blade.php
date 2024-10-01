@extends('admin.layout.index')
@section('content')
<!-- Select2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

<!-- jQuery (nên thêm trước khi sử dụng Select2) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

    body {
        font-family: 'Roboto', sans-serif;
        background-color: #f4f6f9;
        margin: 0;
        padding: 0;
    }

    .icon-bell:before {
        content: "\f0f3";
        font-family: FontAwesome;
    }

    .card {
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        background-color: #fff;
        margin-bottom: 2rem;
    }

    .card-header {
        background: linear-gradient(135deg, #6f42c1, #007bff);
        color: white;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        padding: 1.5rem;
        text-align: center;
    }

    .card-title {
        font-size: 1.75rem;
        font-weight: 700;
        margin: 0;
    }

    .breadcrumbs {
        background: #fff;
        padding: 0.75rem;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .breadcrumbs a {
        color: #007bff;
        text-decoration: none;
        font-weight: 500;
    }

    .breadcrumbs i {
        color: #6c757d;
    }

    .form-label {
        font-weight: 500;
    }

    .form-control,
    .form-select {
        border-radius: 5px;
        box-shadow: none;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .add_product>div {
        margin-top: 20px;
    }

    .modal-footer {
        justify-content: center;
        border-top: none;
    }

    textarea.form-control {
        height: auto;
    }

    #description {
        border-radius: 5px;
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
                <a href="">Tài khoản</a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Thêm</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align: center; color:white">Thêm Tài khoản</h4>
                </div>
                <div class="card-body">
                    <div class="">
                        <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <form method="POST" enctype="multipart/form-data" id="addcloud"
                                action="{{ route('admin.user.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 add_product">
                                        <div>
                                            <label for="nameInput" class="form-label">Họ tên</label>
                                            <input type="text" class="form-control" name="name" id="name" required>
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="name_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" class="form-control" name="email" required id="email">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="email_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="phone" class="form-label">Điện thoại</label>
                                            <input type="text" class="form-control" name="phone" required id="phone">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="phone_error"></span>
                                            </div>
                                        </div>


                                        <div>
                                            <label for="password" class="form-label">Mật khẩu</label>
                                            <input type="password" class="form-control" name="password" id="password"
                                                required>
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="password_error"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 add_product">
                                        <div>
                                            <label for="address" class="form-label">Địa chỉ</label>
                                            <input type="text" class="form-control" name="address" id="address"
                                                required>
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="address_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="role_id" class="form-label">Quyền</label>
                                            <select class="form-select" name="role_id" id="role_id" required>
                                                <option value="">Chọn quyền</option>
                                                <option value="1">Admin</option>
                                                <option value="2">Nhân viên</option>

                                            </select>
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="role_id_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="is_active" class="form-label">Trạng thái</label>
                                            <select class="form-select" name="is_active" id="is_active" required>
                                                <option value="1">Hoạt động </option>
                                                <option value="0">Dừng hoạt động</option>

                                            </select>
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="is_active_error"></span>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="logo" class="form-label">Logo</label>
                                            <div class="custom-file">
                                                <input id="logo"
                                                    class="custom-file-input @error('logo') is-invalid @enderror" type="file"
                                                    name="avatar" accept="image/*">
                                                <label class="custom-file-label" for="logo">Chọn logo</label>
                                            </div>
                                            @error('logo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <img id="profileImagelogo" style="width:100px; height:auto"
                                                src="{{ asset('images/avatar2.jpg') }}"
                                                alt="image logo" class="logo">
                                        </div>


                                    </div>
                                </div>

                                <div class="modal-footer m-2">
                                    <button type="button" class="btn btn-primary w-md" onclick="submitadd(event)" >Xác nhận</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var $jq = jQuery.noConflict();
    $jq(document).ready(function() {
        $jq('#multiple-select').select2();
    });
</script>
<script>

        document.getElementById('logo').addEventListener('change', function(event) {
                    const input = event.target;
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        document.getElementById('profileImagelogo').src = e.target.result;
                    };

                    if (input.files && input.files[0]) {
                        reader.readAsDataURL(input.files[0]);
                    }
                });

</script>
@endsection
