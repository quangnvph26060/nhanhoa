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
                <a href="">ESOC</a>
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
                    <h4 class="card-title" style="text-align: center; color:white">Thêm gói hợp đồng ESOC</h4>
                </div>
                <div class="card-body">

                    <div class="">
                        <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <form method="POST" action="{{ route('admin.giaiphap.contractesoc.addsubmit') }}">
                                @csrf
                                <div class="row">
                                    <!-- Cột thứ nhất -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="contract_number">Số hợp đồng</label>
                                            <input type="number" class="form-control" name="contract_number"
                                                id="contract_number" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="price">Giá tiền (VNĐ)</label>
                                            <input type="number" class="form-control" name="price" id="price"
                                                 required>
                                        </div>

                                        <div class="form-group">
                                            <label for="storage_duration">Thời gian lưu trữ</label>
                                            <div class="d-flex align-items-center">
                                                <input type="text" class="form-control" name="storage_duration"
                                                    id="storage_duration" value="10" required />
                                                <select class="form-control ml-2" name="storage_duration_unit"
                                                    id="storage_duration_unit" required>
                                                    <option value="tháng">Tháng</option>
                                                    <option value="năm">Năm</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="usage_duration">Thời gian sử dụng</label>
                                            <input type="text" class="form-control" name="usage_duration"
                                                id="usage_duration" required>
                                        </div>
                                    </div>

                                    <!-- Cột thứ hai -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="storage_type">Loại lưu trữ</label>
                                            <input type="text" class="form-control" name="storage_type"
                                                id="storage_type" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="storage_system">Hệ thống lưu trữ</label>
                                            <select class="form-control" name="storage_system" id="storage_system"
                                                required>
                                                <option value="HDD">HDD</option>
                                                <option value="SSD">SSD</option>
                                                <option value="NVMe">NVMe</option>
                                                <option value="SATA SSD">SATA SSD</option>
                                                <option value="SSHD">SSHD</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="maintenance_fee">Chi phí bảo trì (VNĐ/năm)</label>
                                            <input type="number" class="form-control" name="maintenance_fee"
                                                id="maintenance_fee"  required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
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
    var validateorder = {
            'name': {
                'element': document.getElementById('name'),
                'error': document.getElementById('name_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0049')
                }, ]
            },
            'price': {
                'element': document.getElementById('price'),
                'error': document.getElementById('price_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0050')
                }, ]
            },
            'hostingtype_id': {
                'element': document.getElementById('hostingtype_id'),
                'error': document.getElementById('hostingtype_id_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0051')
                }, ]
            },
            'storage': {
                'element': document.getElementById('storage'),
                'error': document.getElementById('storage_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0052')
                }, ]
            },
            'bandwidth': {
                'element': document.getElementById('bandwidth'),
                'error': document.getElementById('bandwidth_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0053')
                }, ]
            },
            'cpu': {
                'element': document.getElementById('cpu'),
                'error': document.getElementById('cpu_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0054')
                }, ]
            },
            'ram': {
                'element': document.getElementById('ram'),
                'error': document.getElementById('ram_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0055')
                }, ]
            },
            'mysql': {
                'element': document.getElementById('mysql'),
                'error': document.getElementById('mysql_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0056')
                }, ]
            },
            'ftp_account': {
                'element': document.getElementById('ftp_account'),
                'error': document.getElementById('ftp_account_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0057')
                }, ]
            },
            'domain': {
                'element': document.getElementById('domain'),
                'error': document.getElementById('domain_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0058')
                }, ]
            },
            'subdomain': {
                'element': document.getElementById('subdomain'),
                'error': document.getElementById('subdomain_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0059')
                }, ]
            },
            'alias_parked_domain': {
                'element': document.getElementById('alias_parked_domain'),
                'error': document.getElementById('alias_parked_domain_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0060')
                }, ]
            },
            'email_account': {
                'element': document.getElementById('email_account'),
                'error': document.getElementById('email_account_error'),
                'validations': [{
                    'func': function(value) {
                        return checkRequired(value);
                    },
                    'message': generateErrorMessage('E0061')
                }, ]
            },

        }

        function submithosting(event) {
            event.preventDefault();
            if (validateAllFields(validateorder)) {
                document.getElementById('hosting').submit();
            }
        }



</script>

@endsection
