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
                    <h4 class="card-title" style="text-align: center; color:white">Thêm gói hosting</h4>
                </div>
                <div class="card-body">
                    <div class="">
                        <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <form method="POST" enctype="multipart/form-data" id="addserver"
                                action="{{ route('admin.hosting.editsubmit', ['id' => $hosting->id]) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 add_product">
                                        <div>
                                            <label for="nameInput" class="form-label">Tên gói</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                value="{{ $hosting->name }}">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="name_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="priceInput" class="form-label">Giá gói</label>
                                            <input type="number" step="0.01" class="form-control" name="price"
                                                value="{{ $hosting->price }}" id="price">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="price_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="hostingtypeSelect" class="form-label">Hosting Type ID</label>
                                            <select class="form-select" name="hostingtype_id" id="hostingtype_id">
                                                <option value="0">Chọn loại Hosting</option>
                                                <option {{ $hosting->hostingtype_id == 1 ? 'selected' : '' }}
                                                    value="1">Windows Hosting </option>
                                                <option {{ $hosting->hostingtype_id == 2 ? 'selected' : '' }}
                                                    value="2">Linux Hosting</option>

                                            </select>
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="hostingtype_id_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="storageInput" class="form-label">Dung lượng lưu trữ</label>
                                            <input type="text" class="form-control" name="storage" id="storage"
                                                value="{{ $hosting->storage }}">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="storage_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="bandwidthInput" class="form-label">Băng thông/tháng</label>
                                            <input type="text" class="form-control" name="bandwidth" id="bandwidth"
                                                value="{{ $hosting->bandwidth }}">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="bandwidth_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="cpuInput" class="form-label">CPU</label>
                                            <input type="number" class="form-control" name="cpu" id="cpu"
                                                value="{{ $hosting->cpu }}">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="cpu_error"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 add_product">
                                        <div>
                                            <label for="ramInput" class="form-label">RAM</label>
                                            <input type="number" class="form-control" name="ram" id="ram"
                                                value="{{ $hosting->ram }}">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="ram_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="mysqlInput" class="form-label">MySQL/MariaDB</label>
                                            <input type="number" class="form-control" name="mysql" id="mysql"
                                                value="{{ $hosting->mysql }}">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="mysql_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="ftpAccountInput" class="form-label">Tài khoản FTP</label>
                                            <input type="text" class="form-control" name="ftp_account" id="ftp_account"
                                                value="{{ $hosting->ftp_account }}">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="ftp_account_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="subdomainInput" class="form-label">Subdomain</label>
                                            <input type="text" class="form-control" name="subdomain" id="subdomain"
                                                value="{{ $hosting->subdomain }}">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="subdomain_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="aliasParkedDomainInput" class="form-label">Alias/Parked
                                                Domain</label>
                                            <input type="text" class="form-control" name="alias_parked_domain"
                                                value="{{ $hosting->alias_parked_domain }}" id="alias_parked_domain">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="alias_parked_domain_error"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="emailAccountInput" class="form-label">Email Account</label>
                                            <input type="number" class="form-control" name="email_account"
                                                value="{{ $hosting->email_account }}" id="email_account">
                                            <div class="col-lg-9">
                                                <span class="invalid-feedback d-block" style="font-weight: 500"
                                                    id="email_account_error"></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mt-3 add_product">
                                        <label class="form-label">
                                            Khuyễn mãi
                                            <input id="my-input" style="display:none;" />
                                        </label>
                                        <select id="multiple-select" class="form-control" name="promotion[]" multiple>
                                            @foreach($promotion as $key => $item)
                                            <option  {{ in_array($item->id, $promotionselect) ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
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
</script>

@endsection
