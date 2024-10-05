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
                <a href="">Google Workspace </a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Thêm mới</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align: center; color:white">Thêm Google Workspace <span
                            id="text-business" style="display: block">Business</span> <span id="text-education"
                            style="display: none">Education</span></h4>
                </div>
                <div style="padding: 10px">
                    <button id="business-btn" class="btn btn-success mr-5"
                        onclick="showSection('business-btn', 'business', 'text-business')">Business</button>
                    <button id="education-btn" class="btn btn-secondary"
                        onclick="showSection('education-btn', 'education', 'text-education')">Education</button>
                </div>
                <div class="card-body">
                    <div class="" id="business" style="display: block;">
                        <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <form method="POST" enctype="multipart/form-data" id="busniess"
                                action="{{ route('admin.googleworkspace.busniess.addsubmit') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 add_product">
                                        <div>
                                            <label for="name" class="form-label">Tên gói</label>
                                            <input type="text" class="form-control" name="name" id="name1" required>
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="name1_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="price_per_month" class="form-label">Chi phí (đ/tháng)<span
                                                    class="text text-danger"></span></label>
                                            <input type="number" class="form-control" name="price_per_month"
                                                id="price_per_month" required>
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="price_per_month_error"></span>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="storage_capacity" class="form-label">Dung lượng lưu trữ</label>
                                            <input type="text" class="form-control" name="storage_capacity"
                                                id="storage_capacity" required>
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="storage_capacity_error"></span>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="price_first_20_users" class="form-label">Giá cho 20 user đầu
                                                tiên</label>
                                            <input type="number" class="form-control" name="price_first_20_users"
                                                id="price_first_20_users">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="price_first_20_users_error"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 add_product">
                                        <div>
                                            <label for="price_after_20_users" class="form-label">Giá cho 21 user trở
                                                lên</label>
                                            <input type="number" class="form-control" name="price_after_20_users"
                                                id="price_after_20_users">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="price_after_20_users_error"></span>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="renewal_price" class="form-label">Phí gia hạn</label>
                                            <input type="number" class="form-control" name="renewal_price"
                                                id="renewal_price">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="renewal_price_error"></span>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="user_limit" class="form-label">Số bản sao lưu</label>
                                            <input type="text" class="form-control" name="user_limit" id="user_limit">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="user_limit_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="form-label">Khuyến mãi</label>
                                            <select id="multiple-select" class="form-control" name="promotion_id">
                                                <option value="">--- Chọn khuyến mãi ---</option>
                                                @forelse($promotion as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @empty

                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer m-2">
                                    <button type="button" class="btn btn-primary w-md"
                                        onclick="submitbusniess(event)">Xác nhận</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="" id="education" style="display: none;">
                        <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <form method="POST" enctype="multipart/form-data" id="education"
                                action="{{ route('admin.googleworkspace.education.addsubmit') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 add_product">

                                        <div>
                                            <label for="name" class="form-label">Tên gói</label>
                                            <input type="text" class="form-control" name="name" id="nameeducation" required>
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="nameeducation_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="describe" class="form-label">Mô tả</label>
                                            <textarea name="describe" class="form-control" id="describe"
                                                cols="20"></textarea>
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="describe_error"></span>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="col-lg-6 add_product">

                                        <div>
                                            <label for="price" class="form-label">Chi phí (đ/tháng)<span
                                                    class="text text-danger">*</span></label>
                                            <input type="number" class="form-control" name="price" id="price" required>
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="price_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="storage" class="form-label">Dung lượng lưu trữ</label>
                                            <textarea name="storage" class="form-control" id="storage"
                                                cols="20"></textarea>
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="storage_error"></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer m-2">
                                    <button type="button" class="btn btn-primary w-md"
                                        onclick="submiteducation(event)">Xác nhận</button>
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
    function showSection(buttonId, sectionId, sectionText) {
        // Ẩn tất cả các phần
        document.getElementById('business').style.display = 'none';
        document.getElementById('education').style.display = 'none';

        document.getElementById('text-business').style.display = 'none';
        document.getElementById('text-education').style.display = 'none';

        // Hiển thị phần tương ứng
        document.getElementById(sectionId).style.display = 'block';
        document.getElementById(sectionText).style.display = 'block';

        // Xóa màu của tất cả các nút
        document.getElementById('business-btn').classList.remove('btn-success');
        document.getElementById('business-btn').classList.add('btn-secondary');
        document.getElementById('education-btn').classList.remove('btn-success');
        document.getElementById('education-btn').classList.add('btn-secondary');

        // Thay đổi màu cho nút được nhấn
        document.getElementById(buttonId).classList.remove('btn-secondary');
        document.getElementById(buttonId).classList.add('btn-success');
    }
    var validatebusiness = {
            'name1': {
                'element': document.getElementById('name1'),
                'error': document.getElementById('name1_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0038')
                }, ]
            },
            'price_per_month': {
                'element': document.getElementById('price_per_month'),
                'error': document.getElementById('price_per_month_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0039')
                }, ]
            },
            'storage_capacity': {
                'element': document.getElementById('storage_capacity'),
                'error': document.getElementById('storage_capacity_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0040')
                }, ]
            },
            'price_first_20_users': {
                'element': document.getElementById('price_first_20_users'),
                'error': document.getElementById('price_first_20_users_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0041')
                }, ]
            },
            'price_after_20_users': {
                'element': document.getElementById('price_after_20_users'),
                'error': document.getElementById('price_after_20_users_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0042')
                }, ]
            },
            'renewal_price': {
                'element': document.getElementById('renewal_price'),
                'error': document.getElementById('renewal_price_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0043')
                }, ]
            },
            'user_limit': {
                'element': document.getElementById('user_limit'),
                'error': document.getElementById('user_limit_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0044')
                }, ]
            },

    }

    function submitbusniess(event) {
        event.preventDefault();
        if (validateAllFields(validatebusiness)) {
            document.getElementById('busniess').submit();
        }
    }

    var validateeducation = {
            'nameeducation': {
                'element': document.getElementById('nameeducation'),
                'error': document.getElementById('nameeducation_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0045')
                }, ]
            },
            'describe': {
                'element': document.getElementById('describe'),
                'error': document.getElementById('describe_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0046')
                }, ]
            },
            'price': {
                'element': document.getElementById('price'),
                'error': document.getElementById('price_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0047')
                }, ]
            },
            'storage': {
                'element': document.getElementById('storage'),
                'error': document.getElementById('storage_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0048')
                }, ]
            },
    }
    function submiteducation(event) {
        event.preventDefault();
        if (validateAllFields(validateeducation)) {
            document.getElementById('education').submit();
        }
    }

</script>
@endsection
