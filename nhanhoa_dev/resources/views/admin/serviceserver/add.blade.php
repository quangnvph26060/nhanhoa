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

    .add_product>div {
        margin-top: 20px;
    }

    .tags-input .tag {
        display: inline-block;
        background-color: #007bff;
        color: white;
        padding: 0.5rem;
        border-radius: 3px;
        margin-right: 0.5rem;
        margin-bottom: 0.5rem;
        position: relative;
    }

    .tags-input .tag button {
        background: none;
        border: none;
        color: white;
        font-weight: bold;
        margin-left: 0.5rem;
        cursor: pointer;
        padding: 0;
    }

    .input-container input {
        width: 100%;
        padding: 0.5rem;
        margin-top: 1rem;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .form-check {
        display: flex;
        justify-content: end;
    }

    .form-check-label {
        margin-right: 10px;
    }

    .form-check-input {
        width: auto;
    }

    .col-6 .row {
        margin: 0;
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
                <a href="">Dịch vụ quản trị máy chủ</a>
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
                    <h4 class="card-title" style="text-align: center; color:white">Thêm gói dịch vụ quản trị máy chủ
                    </h4>
                </div>
                <div class="card-body">
                    <div class="">
                        <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <form method="POST" id="service"  action="{{ route('admin.service.addsubmit') }}">
                                @csrf
                                <div class="row g-4">
                                    <!-- Các input text -->
                                    <div class="col-6">
                                        <!-- Tên gói -->
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Tên gói</label>
                                            <input type="text" class="form-control border border-primary" name="name" id="name1" placeholder="VD: QUẢN TRỊ CƠ BẢN" required>
                                            <span class="invalid-feedback d-block" id="name1_error"></span>
                                        </div>

                                        <!-- Hạng mục thực hiện -->
                                        <div class="mb-3">
                                            <label for="category_implementation" class="form-label">Hạng mục thực hiện</label>
                                            <input type="text" class="form-control border border-primary" name="category_implementation" id="category_implementation" placeholder=" VD: 15 phút" required>
                                            <span class="invalid-feedback d-block" id="category_implementation_error"></span>
                                        </div>

                                        <!-- Chuyển dữ liệu website -->
                                        <div class="mb-3">
                                            <label for="website_data_migration" class="form-label">Chuyển dữ liệu website</label>
                                            <input type="text" class="form-control border border-primary" name="website_data_migration" id="website_data_migration" placeholder="VD: Tối đa 10 website hoặc 50GB/tháng" required>
                                            <span class="invalid-feedback d-block" id="website_data_migration_error"></span>
                                        </div>

                                        <!-- Đơn giá/tháng -->
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Đơn giá/tháng</label>
                                            <input type="number" class="form-control border border-success" name="price" id="price"  placeholder="VD: Nhập giá" required>
                                            <span class="invalid-feedback d-block" id="price_error"></span>
                                        </div>
                                    </div>

                                    <!-- Các checkbox -->
                                    <div class="col-6">
                                        <div class="row">
                                            <!-- Cột 1 (col-6) -->
                                            <div class="col-6">
                                                <!-- Tối ưu server -->
                                                <div class="form-check form-switch mb-2">
                                                    <label for="server_optimization" class="form-check-label">Tối ưu server</label>
                                                    <input type="checkbox" class="form-check-input" name="server_optimization" id="server_optimization" value="1">
                                                    <span class="invalid-feedback d-block" id="server_optimization_error"></span>
                                                </div>

                                                <!-- Bảo mật server -->
                                                <div class="form-check form-switch mb-2">
                                                    <label for="server_security" class="form-check-label">Bảo mật server</label>
                                                    <input type="checkbox" class="form-check-input" name="server_security" id="server_security" value="1">
                                                    <span class="invalid-feedback d-block" id="server_security_error"></span>
                                                </div>

                                                <!-- Cấu hình Backup -->
                                                <div class="form-check form-switch mb-2">
                                                    <label for="backup_configuration" class="form-check-label">Cấu hình Backup</label>
                                                    <input type="checkbox" class="form-check-input" name="backup_configuration" id="backup_configuration" value="1">
                                                    <span class="invalid-feedback d-block" id="backup_configuration_error"></span>
                                                </div>

                                                <!-- Giám sát cơ bản -->
                                                <div class="form-check form-switch mb-2">
                                                    <label for="basic_monitoring" class="form-check-label">Giám sát cơ bản</label>
                                                    <input type="checkbox" class="form-check-input" name="basic_monitoring" id="basic_monitoring" value="1">
                                                    <span class="invalid-feedback d-block" id="basic_monitoring_error"></span>
                                                </div>

                                                 <!-- Giám sát chuyên sâu -->
                                                 <div class="form-check form-switch mb-2">
                                                    <label for="advanced_monitoring" class="form-check-label">Giám sát chuyên sâu</label>
                                                    <input type="checkbox" class="form-check-input" name="advanced_monitoring" id="advanced_monitoring" value="1">
                                                    <span class="invalid-feedback d-block" id="advanced_monitoring_error"></span>
                                                </div>
                                            </div>

                                            <!-- Cột 2 (col-6) -->
                                            <div class="col-6">


                                                <!-- Báo cáo sự cố -->
                                                <div class="form-check form-switch mb-2">
                                                    <label for="incident_reporting" class="form-check-label">Báo cáo sự cố</label>
                                                    <input type="checkbox" class="form-check-input" name="incident_reporting" id="incident_reporting" value="1">
                                                    <span class="invalid-feedback d-block" id="incident_reporting_error"></span>
                                                </div>

                                                <!-- Báo cáo định kỳ -->
                                                <div class="form-check form-switch mb-2">
                                                    <label for="periodic_reporting_by_email" class="form-check-label">Báo cáo định kỳ</label>
                                                    <input type="checkbox" class="form-check-input" name="periodic_reporting_by_email" id="periodic_reporting_by_email" value="1">
                                                    <span class="invalid-feedback d-block" id="periodic_reporting_by_email_error"></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="modal-footer mt-4">
                                    <button type="button" class="btn btn-primary px-5" onclick="submitservice(event)">Xác nhận</button>
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

    var validate = {
            'name1': {
                'element': document.getElementById('name1'),
                'error': document.getElementById('name1_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0081')
                }, ]
            },
            'category_implementation': {
                'element': document.getElementById('category_implementation'),
                'error': document.getElementById('category_implementation_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0082')
                }, ]
            },
            'website_data_migration': {
                'element': document.getElementById('website_data_migration'),
                'error': document.getElementById('website_data_migration_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0083')
                }, ]
            },
            'price': {
                'element': document.getElementById('price'),
                'error': document.getElementById('price_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0084')
                }, ]
            },
        }

        function submitservice(event) {
            event.preventDefault();
            if (validateAllFields(validate)) {
                document.getElementById('service').submit();
            }
        }

</script>


@endsection
