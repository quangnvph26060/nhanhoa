@extends('admin.layout.index')
@section('content')
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                <a href="">Tên miền</a>
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
                    <h4 class="card-title" style="text-align: center; color:white">Thay đổi tên miền</h4>
                </div>
                <div class="card-body">
                    <div class="">
                        <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <form method="POST" enctype="multipart/form-data" id="edit"
                                action="{{ route('admin.domain.editsubmit', ['id' => $domain->id]) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 add_product">
                                        <div>
                                            <label for="name" class="form-label">Tên miền</label>
                                            <input placeholder=".net.vn/ .com.vn/ .com" type="text" class="form-control"
                                                name="name" id="name1" value="{{ $domain->name }}">
                                                <div class="col-lg-9">
                                                    <span class="invalid-feedback d-block" style="font-weight: 500"
                                                        id="name1_error"></span>
                                                </div>
                                        </div>


                                        <div>
                                            <label for="domaintype_id" class="form-label">Loại tên miền</label>
                                            <select name="domaintype_id" class="form-control" id="domaintype_id">
                                                <option value="">Chọn loại tên miền</option>
                                                <option value="1" {{ $domain->domaintype_id == 1 ? 'selected' : ''
                                                    }}>Tên miền quốc tế</option>
                                                <option value="2" {{ $domain->domaintype_id == 2 ? 'selected' : ''
                                                    }}>Tên miền quốc gia</option>
                                            </select>
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="domaintype_id_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="le_phi" class="form-label">Lệ Phí</label>
                                            <input type="number" class="form-control" name="le_phi" id="le_phi"
                                                value="{{ $domain->le_phi }}">
                                                <div class="col-lg-9">
                                                    <span class="invalid-feedback d-block" style="font-weight: 500"
                                                        id="le_phi_error"></span>
                                                </div>
                                        </div>

                                        <div>
                                            <label for="phiduytri" class="form-label">Phí Duy Trì</label>
                                            <input type="number" class="form-control" name="phiduytri" id="phiduytri"
                                                value="{{ $domain->phiduytri }}">
                                                <div class="col-lg-9">
                                                    <span class="invalid-feedback d-block" style="font-weight: 500"
                                                        id="phiduytri_error"></span>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 add_product">
                                        <div>
                                            <label for="dichvu" class="form-label">Dịch Vụ</label>
                                            <input type="number" class="form-control" name="dichvu" id="dichvu"
                                                value="{{ $domain->dichvu }}">
                                                <div class="col-lg-9">
                                                    <span class="invalid-feedback d-block" style="font-weight: 500"
                                                        id="dichvu_error"></span>
                                                </div>
                                        </div>

                                        <div>
                                            <label for="dicvunamsau" class="form-label">Dịch Vụ Năm Sau</label>
                                            <input type="number" class="form-control" name="dicvunamsau"
                                                value="{{ $domain->dicvunamsau }}" id="dicvunamsau">
                                                <div class="col-lg-9">
                                                    <span class="invalid-feedback d-block" style="font-weight: 500"
                                                        id="dicvunamsau_error"></span>
                                                </div>
                                        </div>
                                        <div>
                                            <label for="logo" class="form-label">Logo </label>
                                            <div class="custom-file">
                                                <input id="logo"
                                                    class="custom-file-input @error('logo') is-invalid @enderror"
                                                    type="file" name="logo" accept="image/*">
                                                <label class="custom-file-label" for="logo">Chọn logo</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="logo_error"></span>
                                            </div>
                                            <img id="profileImage" style="width: 100px; height: auto;"
                                                src="{{ asset($domain->logo) }}" alt="image" class="avatar mt-3">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer m-2">
                                    <button type="button" class="btn btn-primary w-md" onclick="submitedit(event)">Xác nhận</button>
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
            document.getElementById('profileImage').src = e.target.result;
        };

        if (input.files && input.files[0]) {
            reader.readAsDataURL(input.files[0]);
        }
    });

    function formatNumber(input) {
        let value = input.value.replace(/\D/g, '');
        value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        input.value = value;
    }

    var validateorder = {
            'name1': {
                'element': document.getElementById('name1'),
                'error': document.getElementById('name1_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0022')
                }, ]
            },
            'domaintype_id': {
                'element': document.getElementById('domaintype_id'),
                'error': document.getElementById('domaintype_id_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0023')
                }, ]
            },
            'le_phi': {
                'element': document.getElementById('le_phi'),
                'error': document.getElementById('le_phi_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0024')
                }, ]
            },
            'phiduytri': {
                'element': document.getElementById('phiduytri'),
                'error': document.getElementById('phiduytri_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0025')
                }, ]
            },
            'dichvu': {
                'element': document.getElementById('dichvu'),
                'error': document.getElementById('dichvu_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0026')
                }, ]
            },
            'dicvunamsau': {
                'element': document.getElementById('dicvunamsau'),
                'error': document.getElementById('dicvunamsau_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0027')
                }, ]
            },
            // 'logo': {
            //     'element': document.getElementById('logo'),
            //     'error': document.getElementById('logo_error'),
            //     'validations': [{
            //         'func': function(value) {
            //             return checkRequired(value);
            //         },
            //         'message': generateErrorMessage('E0028')
            //     }, ]
            // },

        }

        function submitedit(event) {
            event.preventDefault();
            if (validateAllFields(validateorder)) {
                document.getElementById('edit').submit();
            }
        }


</script>
@endsection
