@extends('admin.layout.index')
@section('content')



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
                <a href="#">Thêm</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align: center; color:white">Thêm sản phẩm</h4>
                </div>
                <div class="card-body">
                    <div class="">
                        <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <form method="POST" enctype="multipart/form-data" id="add"
                                action="{{ route('admin.email.addsubmit') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 add_product">
                                        <!-- Tên dịch vụ -->
                                        <div>
                                            <label for="name" class="form-label">Tên gói dịch vụ</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="VD : Mini">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="name_error"></span>
                                            </div>
                                        </div>

                                        <!-- Giá -->
                                        <div>
                                            <label for="price" class="form-label">Giá</label>
                                            <input type="number" class="form-control" name="price" id="price" min="0" placeholder="VD : 100000">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="price_error"></span>
                                            </div>
                                        </div>

                                        <!-- Tỷ lệ gửi mail vào inbox -->
                                        <div>
                                            <label for="inbox_rate" class="form-label">Tỷ lệ gửi mail vào inbox (%)</label>
                                            <input type="number" class="form-control" name="inbox_rate" id="inbox_rate" max="100">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="inbox_rate_error"></span>
                                            </div>                                        </div>

                                        <!-- Dung lượng lưu trữ -->
                                        <div>
                                            <label for="storage_capacity" class="form-label">Dung lượng lưu trữ</label>
                                            <input type="text" class="form-control" name="storage_capacity" placeholder="VD : 120GB"
                                                id="storage_capacity">
                                                <div class="col-lg-9">
                                                    <span class="invalid-feedback d-block" style="font-weight: 500"
                                                        id="storage_capacity_error"></span>
                                                </div>
                                        </div>

                                        <div>
                                            <label for="unlimited_email_addresses" class="form-label">Địa chỉ email
                                                </label>
                                            <input type="text" class="form-control" name="unlimited_email_addresses" placeholder="VD : Không giới hạn"
                                                id="unlimited_email_addresses">
                                                <div class="col-lg-9">
                                                    <span class="invalid-feedback d-block" style="font-weight: 500"
                                                        id="unlimited_email_addresses_error"></span>
                                                </div>
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
                                                src="{{ isset($email->logo) && !empty($email->logo) ? asset($email->logo) : asset('images/avatar2.jpg') }}"
                                                alt="image logo" class="logo">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 add_product">

                                        <!-- Email forwarder không giới hạn -->
                                        <div>
                                            <label for="unlimited_email_forwarder" class="form-label">Email forwarder
                                               </label>
                                            <input type="text" class="form-control" name="unlimited_email_forwarder" placeholder="VD : Không giới hạn"
                                                id="unlimited_email_forwarder">
                                                <div class="col-lg-9">
                                                    <span class="invalid-feedback d-block" style="font-weight: 500"
                                                        id="unlimited_email_forwarder_error"></span>
                                                </div>
                                        </div>

                                        <!-- Danh sách email không giới hạn -->
                                        <div>
                                            <label for="unlimited_email_list" class="form-label">Danh sách email </label>
                                            <input type="text" class="form-control" name="unlimited_email_list" placeholder="VD : Không giới hạn"
                                                id="unlimited_email_list">
                                                <div class="col-lg-9">
                                                    <span class="invalid-feedback d-block" style="font-weight: 500"
                                                        id="unlimited_email_list_error"></span>
                                                </div>
                                        </div>

                                        <!-- Tên miền email không giới hạn -->
                                        <div>
                                            <label for="unlimited_email_domain" class="form-label">Tên miền email</label>
                                            <input type="text" class="form-control" name="unlimited_email_domain" placeholder="VD : Không giới hạn"
                                                id="unlimited_email_domain">
                                                <div class="col-lg-9">
                                                    <span class="invalid-feedback d-block" style="font-weight: 500"
                                                        id="unlimited_email_domain_error"></span>
                                                </div>
                                        </div>

                                        <!-- Địa chỉ IP -->
                                        <div>
                                            <label for="ip_address" class="form-label">Địa chỉ IP</label>
                                            <input type="text" class="form-control" name="ip_address" id="ip_address" placeholder="VD : 1">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="ip_address_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="form-label">Khuyến mãi</label>
                                            <select id="multiple-select" class="form-control" name="promotion_id">
                                                <option value="}">--- Chọn khuyến mãi --- </option>
                                                @forelse($promotion as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @empty
                                                <!-- Không có dữ liệu để hiển thị -->
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                </div>



                                <div class="modal-footer m-2">
                                    <button type="button" class="btn btn-primary w-md" onclick="submitadd(event)">Xác nhận</button>
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
    var validateorder = {
            'name': {
                'element': document.getElementById('name'),
                'error': document.getElementById('name_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0029')
                }, ]
            },
            'price': {
                'element': document.getElementById('price'),
                'error': document.getElementById('price_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0030')
                }, ]
            },
            'inbox_rate': {
                'element': document.getElementById('inbox_rate'),
                'error': document.getElementById('inbox_rate_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0031')
                }, ]
            },
            'storage_capacity': {
                'element': document.getElementById('storage_capacity'),
                'error': document.getElementById('storage_capacity_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0032')
                }, ]
            },
            'unlimited_email_addresses': {
                'element': document.getElementById('unlimited_email_addresses'),
                'error': document.getElementById('unlimited_email_addresses_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0037')
                }, ]
            },
            'unlimited_email_forwarder': {
                'element': document.getElementById('unlimited_email_forwarder'),
                'error': document.getElementById('unlimited_email_forwarder_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0033')
                }, ]
            },
            'unlimited_email_list': {
                'element': document.getElementById('unlimited_email_list'),
                'error': document.getElementById('unlimited_email_list_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0034')
                }, ]
            },
            'unlimited_email_domain': {
                'element': document.getElementById('unlimited_email_domain'),
                'error': document.getElementById('unlimited_email_domain_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0035')
                }, ]
            },
            'ip_address': {
                'element': document.getElementById('ip_address'),
                'error': document.getElementById('ip_address_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0036')
                }, ]
            },

        }

        function submitadd(event) {
            event.preventDefault();
            if (validateAllFields(validateorder)) {
                document.getElementById('add').submit();
            }
        }



</script>
@endsection
