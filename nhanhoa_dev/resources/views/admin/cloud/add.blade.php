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
                <a href="">Cloud</a>
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
                            <form method="POST" enctype="multipart/form-data" id="addcloud"
                                action="{{ route('admin.cloud.addsubmit') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 add_product">
                                        <!-- Existing fields -->
                                        <div>
                                            <label for="name" class="form-label">Tên sản phẩm</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="VD: Sinh viên +">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="name_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="price" class="form-label">Giá nhập<span
                                                    class="text text-danger">*</span></label>
                                            <input  min='1' required class="form-control" name="price" placeholder="VD: 1000000"
                                                type="number" id="price">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="price_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="cloudtypes_id" class="form-label">Loại Cloud </label>
                                            <select class="form-select" name="cloudtypes_id" id="cloudtypes_id">
                                                <option value="">--- Chọn loại Hosting ---</option>
                                                <option value="1">SSD Cloud Server </option>
                                                <option value="2">Cloud VPS Quốc Tế</option>
                                            </select>
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="cloudtypes_id_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="cpu" class="form-label">CPU</label>
                                            <input type="text" class="form-control" name="cpu" id="cpu" placeholder="VD: Intel® Xeon® E5-26xx V1-8 cores, 16 Threads">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="cpu_error"></span>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="core" class="form-label">Core</label>
                                            <input type="text" class="form-control" name="core" id="core" placeholder="VD: 6 Cores">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="core_error"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 add_product">
                                        <div>
                                            <label for="ssd" class="form-label">SSD</label>
                                            <input type="text" class="form-control" name="ssd" id="ssd" placeholder="VD: 33GB">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="ssd_error"></span>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="ram" class="form-label">RAM</label>
                                            <input type="text" class="form-control" name="ram" id="ram" placeholder="VD: 33GB">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="ram_error"></span>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="ip" class="form-label">IP</label>
                                            <input type="text" class="form-control" name="ip" id="ip" placeholder="VD: 01">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="ip_error"></span>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="bandwidth" class="form-label">Bandwidth</label>
                                            <input type="text" class="form-control" name="bandwidth" id="bandwidth" placeholder="VD: 33, Unlimited">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="bandwidth_error"></span>
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
                                                src="{{ asset('images/avatar2.jpg') }}"
                                                alt="image logo" class="logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mt-3 add_product">
                                        <label class="form-label">Khuyến mãi</label>
                                        <select id="multiple-select" class="form-control" name="promotion[]" multiple>
                                            @forelse($promotion as $key => $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @empty
                                            <!-- Không có dữ liệu để hiển thị -->
                                            @endforelse
                                        </select>
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
    var validateorder = {
           'name': {
               'element': document.getElementById('name'),
               'error': document.getElementById('name_error'),
               'validations': [{
                   'func': function(value) {
                       return checkRequired(value);
                   },
                   'message': generateErrorMessage('E0013')
               }, ]
           },
           'price': {
               'element': document.getElementById('price'),
               'error': document.getElementById('price_error'),
               'validations': [{
                   'func': function(value) {
                       return checkRequired(value);
                   },
                   'message': generateErrorMessage('E0014')
               }, ]
           },
           'cloudtypes_id': {
               'element': document.getElementById('cloudtypes_id'),
               'error': document.getElementById('cloudtypes_id_error'),
               'validations': [{
                   'func': function(value) {
                       return checkRequired(value);
                   },
                   'message': generateErrorMessage('E0015')
               }, ]
           },
           'cpu': {
               'element': document.getElementById('cpu'),
               'error': document.getElementById('cpu_error'),
               'validations': [{
                   'func': function(value) {
                       return checkRequired(value);
                   },
                   'message': generateErrorMessage('E0016')
               }, ]
           },
           'core': {
               'element': document.getElementById('core'),
               'error': document.getElementById('core_error'),
               'validations': [{
                   'func': function(value) {
                       return checkRequired(value);
                   },
                   'message': generateErrorMessage('E0017')
               }, ]
           },
           'ssd': {
               'element': document.getElementById('ssd'),
               'error': document.getElementById('ssd_error'),
               'validations': [{
                   'func': function(value) {
                       return checkRequired(value);
                   },
                   'message': generateErrorMessage('E0019')
               }, ]
           },
           'ram': {
               'element': document.getElementById('ram'),
               'error': document.getElementById('ram_error'),
               'validations': [{
                   'func': function(value) {
                       return checkRequired(value);
                   },
                   'message': generateErrorMessage('E0019')
               }, ]
           },
           'ip': {
               'element': document.getElementById('ip'),
               'error': document.getElementById('ip_error'),
               'validations': [{
                   'func': function(value) {
                       return checkRequired(value);
                   },
                   'message': generateErrorMessage('E0020')
               }, ]
           },
           'bandwidth': {
               'element': document.getElementById('bandwidth'),
               'error': document.getElementById('bandwidth_error'),
               'validations': [{
                   'func': function(value) {
                       return checkRequired(value);
                   },
                   'message': generateErrorMessage('E0021')
               }, ]
           },

       }

       function submitadd(event) {
           event.preventDefault();
           if (validateAllFields(validateorder)) {
               document.getElementById('addcloud').submit();
           }
       }

</script>
@endsection
