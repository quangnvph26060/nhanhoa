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
                <a href="">Cloud Backup</a>
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
                    <h4 class="card-title" style="text-align: center; color:white">Sửa Backup365</h4>
                </div>
                <div class="card-body">
                    <div class="">
                        <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <form method="POST" enctype="multipart/form-data" id="editcloudbackup"
                                action="{{ route('admin.backup365.editsubmit', ['id' => $backup->id]) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 add_product">
                                        <div>
                                            <label for="name" class="form-label">Tên gó<img src="" alt="" srcset=""></label>
                                            <input type="text" class="form-control" name="name" id="name" required value="{{ $backup->name }}">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="name_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="price" class="form-label">Giá<span
                                                    class="text text-danger">*</span></label>
                                            <input type="number" class="form-control" name="price" id="price" required value="{{ $backup->price }}">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="price_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="storage" class="form-label">Dung lượng</label>
                                            <input type="number" class="form-control" name="storage" id="storage" required value="{{ $backup->storage }}">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="storage_error"></span>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="agent" class="form-label">Agent(Server/VPS)</label>
                                            <input type="text" class="form-control" name="agent" id="agent" required value="{{ $backup->agent }}">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="agent"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 add_product">
                                        <div>
                                            <label for="data_encryption" class="form-label">Mã hóa dữ liệu</label>
                                            <input type="text" class="form-control" name="data_encryption" id="data_encryption" required value="{{ $backup->data_encryption }}">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="data_encryption_error"></span>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="data_compression" class="form-label">Nén dữ liệu </label>
                                            <select class="form-select" name="data_compression" id="data_compression" required>
                                                <option value="">--- Chọn ---</option>
                                                <option {{ $backup->data_compression == 'Có' ? 'selected' : '' }} value="Có">Có </option>
                                                <option {{ $backup->data_compression == 'Không' ? 'selected' : '' }}  value="Không">Không </option>
                                            </select>
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="data_compression_error"></span>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="schedule_backup" class="form-label">Chủ động thiết lập linh cho sao lưu </label>
                                            <select class="form-select" name="schedule_backup" id="schedule_backup" required>
                                                <option value="">--- Chọn ---</option>
                                                <option {{ $backup->schedule_backup == 'Có' ? 'selected' : '' }} value="Có">Có </option>
                                                <option {{ $backup->schedule_backup == 'Không' ? 'selected' : '' }}  value="Không">Không </option>
                                            </select>
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="schedule_backup_error"></span>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="auto_backup" class="form-label">Sao lưu tự động </label>
                                            <select class="form-select" name="auto_backup" id="auto_backup" required>
                                                <option value="">--- Chọn ---</option>
                                                <option {{ $backup->auto_backup == 'Có' ? 'selected' : '' }} value="Có">Có </option>
                                                <option {{ $backup->auto_backup == 'Không' ? 'selected' : '' }}  value="Không">Không </option>
                                            </select>
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="auto_backup_error"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer m-2">
                                    <button type="submit" class="btn btn-primary w-md" >Xác nhận</button>
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
    var validateorder = {
           'name': {
               'element': document.getElementById('name'),
               'error': document.getElementById('name_error'),
               'validations': [{
                   'func': function(value) {
                       return checkRequired(value);
                   },
                   'message': generateErrorMessage('E006')
               }, ]
           },
           'price': {
               'element': document.getElementById('price'),
               'error': document.getElementById('price_error'),
               'validations': [{
                   'func': function(value) {
                       return checkRequired(value);
                   },
                   'message': generateErrorMessage('E007')
               }, ]
           },
           'backuptype': {
               'element': document.getElementById('backuptype'),
               'error': document.getElementById('backuptype_error'),
               'validations': [{
                   'func': function(value) {
                       return checkRequired(value);
                   },
                   'message': generateErrorMessage('E008')
               }, ]
           },
           'package_applied': {
               'element': document.getElementById('package_applied'),
               'error': document.getElementById('package_applied_error'),
               'validations': [{
                   'func': function(value) {
                       return checkRequired(value);
                   },
                   'message': generateErrorMessage('E009')
               }, ]
           },
           'max_storage': {
               'element': document.getElementById('max_storage'),
               'error': document.getElementById('max_storage_error'),
               'validations': [{
                   'func': function(value) {
                       return checkRequired(value);
                   },
                   'message': generateErrorMessage('E0010')
               }, ]
           },
           'backup_time': {
               'element': document.getElementById('backup_time'),
               'error': document.getElementById('backup_time_error'),
               'validations': [{
                   'func': function(value) {
                       return checkRequired(value);
                   },
                   'message': generateErrorMessage('E0011')
               }, ]
           },
           'backup_count': {
               'element': document.getElementById('backup_count'),
               'error': document.getElementById('backup_count_error'),
               'validations': [{
                   'func': function(value) {
                       return checkRequired(value);
                   },
                   'message': generateErrorMessage('E0012')
               }, ]
           },

       }

       function submitedit(event) {
           event.preventDefault();
           if (validateAllFields(validateorder)) {
               document.getElementById('editcloudbackup').submit();
           }
       }
</script>
@endsection
