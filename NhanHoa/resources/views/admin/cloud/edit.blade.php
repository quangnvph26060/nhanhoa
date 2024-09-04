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
                        <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <form method="POST" enctype="multipart/form-data" id="addserver"
                                action="{{ route('admin.server.editsubmit', ['id'=> $server->id]) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 add_product">
                                        <!-- Existing fields -->
                                        <div>
                                            <label for="placeholderInput" class="form-label">Tên sản phẩm</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                value="{{ $server->name }}">
                                            <div class="col-lg-9"><span class="invalid-feedback d-block"
                                                    style="font-weight: 500" id="name_error"></span></div>
                                        </div>

                                        <div>
                                            <label for="priceInput" class="form-label">Giá nhập<span
                                                    class="text text-danger">*</span></label>
                                            <input min='1' required class="form-control" name="price"
                                                value="{{ $server->price }}" type="number" id="price">
                                            <div class="col-lg-9"><span class="invalid-feedback d-block"
                                                    style="font-weight: 500" id="price_error"></span></div>
                                        </div>
                                        <!-- New fields -->
                                        <div>
                                            <label for="cpuInput" class="form-label">CPU</label>
                                            <input type="text" class="form-control" name="cpu" id="cpu"
                                                value="{{ $server->cpu }}">
                                            <div class="col-lg-9"><span class="invalid-feedback d-block"
                                                    style="font-weight: 500" id="cpu_error"></span></div>
                                        </div>
                                        <div>
                                            <label for="ssdInput" class="form-label">SSD</label>
                                            <input type="text" class="form-control" name="ssd" id="ssd"
                                                value="{{ $server->ssd }}">
                                            <div class="col-lg-9"><span class="invalid-feedback d-block"
                                                    style="font-weight: 500" id="ssd_error"></span></div>
                                        </div>
                                        <div>
                                            <label for="ramInput" class="form-label">RAM</label>
                                            <input type="number" class="form-control" name="ram" id="ram"
                                                value="{{ $server->ram }}">
                                            <div class="col-lg-9"><span class="invalid-feedback d-block"
                                                    style="font-weight: 500" id="ram_error"></span></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 add_product">
                                        <!-- Existing fields -->
                                        <!-- New fields -->
                                        <div>
                                            <label for="dataInput" class="form-label">Data</label>
                                            <input type="text" class="form-control" name="data" id="data"
                                                value="{{ $server->data }}">
                                            <div class="col-lg-9"><span class="invalid-feedback d-block"
                                                    style="font-weight: 500" id="data_error"></span></div>
                                        </div>
                                        <div>
                                            <label for="ipInput" class="form-label">IP</label>
                                            <input type="text" class="form-control" name="ip" id="ip"
                                                value="{{ $server->ip }}">
                                            <div class="col-lg-9"><span class="invalid-feedback d-block"
                                                    style="font-weight: 500" id="ip_error"></span></div>
                                        </div>
                                        <div>
                                            <label for="domesticInput" class="form-label">Domestic</label>
                                            <input type="number" class="form-control" name="domestic" id="domestic"
                                                value="{{ $server->domestic }}">
                                            <div class="col-lg-9"><span class="invalid-feedback d-block"
                                                    style="font-weight: 500" id="domestic_error"></span></div>
                                        </div>
                                        <div>
                                            <label for="internationalInput" class="form-label">International</label>
                                            <input type="number" class="form-control" name="international"
                                                id="international" value="{{ $server->international }}">
                                            <div class="col-lg-9"><span class="invalid-feedback d-block"
                                                    style="font-weight: 500" id="international_error"></span></div>
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
                                    <button type="submit" class="btn btn-primary w-md">
                                        Xác nhận
                                    </button>
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
