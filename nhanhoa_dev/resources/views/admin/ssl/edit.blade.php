@extends('admin.layout.index')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
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
                <a href="">Sản phẩm</a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Sửa</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align: center; color:white">Sửa sản phẩm </h4>
                </div>
                <div class="card-body">
                    <div class="">
                        <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"
                            style="">
                            <form method="POST" enctype="multipart/form-data" id="addssl"
                                action="{{ route('admin.ssl.editsubmit', ['id' => $ssl->id]) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 add_product">
                                        <!-- Các trường bên trái -->
                                        <div>
                                            <label for="name" class="form-label">Tên sản phẩm</label>
                                            <input type="text" class="form-control" name="name" id="name" value="{{ $ssl->name }}">
                                            <span class="invalid-feedback d-block" style="font-weight: 500"
                                                id="name_error"></span>
                                        </div>
                                        <div>
                                            <label for="price" class="form-label">Giá sản phẩm</label>
                                            <input type="number" class="form-control" name="price" id="price" value="{{ $ssl->price }}">
                                            <span class="invalid-feedback d-block" style="font-weight: 500"
                                                id="price_error"></span>
                                        </div>
                                        <div>
                                            <label for="ssltype" class="form-label">Loại SSL</label>
                                            <select class="form-select" name="ssltype" id="ssltype">
                                                <option value="">--- Chọn loại SSL ---</option>
                                                <option {{ $ssl->ssltype == 1 ? 'selected' : '' }} value="1">Comodo SSL </option>
                                                <option {{ $ssl->ssltype == 2 ? 'selected' : '' }} value="2">Geotrust SSL</option>
                                                <option {{ $ssl->ssltype == 3 ? 'selected' : '' }} value="3">Digicert</option>
                                            </select>
                                            <span class="invalid-feedback d-block" style="font-weight: 500"
                                                id="ssltype_error"></span>
                                        </div>
                                        <div>
                                            <label for="maintainfee" class="form-label">Phí duy trì</label>
                                            <input type="text" class="form-control" name="maintainfee" id="maintainfee" value="{{ $ssl->maintainfee }}">
                                            <span class="invalid-feedback d-block" style="font-weight: 500"
                                                id="maintainfee_error"></span>
                                        </div>
                                        <div>
                                            <label for="encoding" class="form-label">Mã hóa</label>
                                            <input type="text" class="form-control" name="encoding" id="encoding" value="{{ $ssl->encoding }}">
                                            <span class="invalid-feedback d-block" style="font-weight: 500"
                                                id="encoding_error"></span>
                                        </div>
                                        <div>
                                            <label for="certification" class="form-label">Chứng nhận</label>
                                            <input type="text" class="form-control" name="certification"
                                                id="certification" value="{{ $ssl->certification }}">
                                            <span class="invalid-feedback d-block" style="font-weight: 500"
                                                id="certification_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 add_product">
                                        <!-- Các trường bên phải -->
                                        <div>
                                            <label for="numberdomain" class="form-label">Số lượng tên miền</label>
                                            <input type="text" class="form-control" name="numberdomain"
                                                id="numberdomain" value="{{ $ssl->numberdomain }}">
                                            <span class="invalid-feedback d-block" style="font-weight: 500"
                                                id="numberdomain_error"></span>
                                        </div>
                                        <div>
                                            <label for="sansupport" class="form-label">Hỗ trợ SAN</label>
                                            <input type="text" class="form-control" name="sansupport" id="sansupport" value="{{ $ssl->sansupport }}">
                                            <span class="invalid-feedback d-block" style="font-weight: 500"
                                                id="sansupport_error"></span>
                                        </div>
                                        <div>
                                            <label for="addressbar" class="form-label">Hiển thị trên thanh địa
                                                chỉ</label>
                                            <input type="text" class="form-control" name="addressbar" id="addressbar" value="{{ $ssl->addressbar }}">
                                            <span class="invalid-feedback d-block" style="font-weight: 500"
                                                id="addressbar_error"></span>
                                        </div>
                                        <div>
                                            <label for="insurance" class="form-label">Bảo hiểm</label>
                                            <input type="text" class="form-control" name="insurance" id="insurance" value="{{ $ssl->insurance }}">
                                            <span class="invalid-feedback d-block" style="font-weight: 500"
                                                id="insurance_error"></span>
                                        </div>
                                        <div>
                                            <label for="level" class="form-label">Level </label>
                                            <select class="form-select" name="level" id="level">
                                                <option value="">--- Chọn level ---</option>
                                                <option  {{ $ssl->level == 'High' ? 'selected' : '' }} value="High">Hight </option>
                                                <option  {{ $ssl->level == 'Highest' ? 'selected' : '' }} value="Highest">Highest</option>
                                                <option  {{ $ssl->level == 'Standard' ? 'selected' : '' }} value="Standard">Standard</option>
                                            </select>
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="level_error"></span>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="time" class="form-label">Thời gian đăng ký</label>
                                            <input type="number" class="form-control" name="time" id="time" value="{{ $ssl->time }}">
                                            <span class="invalid-feedback d-block" style="font-weight: 500"
                                                id="time_error"></span>
                                        </div>

                                        <div class="form-group">
                                            <label for="logo" class="form-label">Logo</label>
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
                                            <img id="profileImagelogo" style="width:100px; height:auto"
                                                src="{{ isset($ssl->logo) && !empty($ssl->logo) ? asset($ssl->logo) : asset('images/avatar2.jpg') }}"
                                                alt="image logo" class="logo">
                                        </div>



                                    </div>
                                </div>

                                <div class="modal-footer m-2">
                                    <button type="submit" class="btn btn-primary w-md">Xác nhận</button>
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
