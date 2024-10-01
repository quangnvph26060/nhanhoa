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
                <a href="">Server Location</a>
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
                    <h4 class="card-title" style="text-align: center; color:white">Sửa Server Location</h4>
                </div>
                <div class="card-body">
                    <form method="POST" id="serverlocation" action="{{ route('admin.server.editsubmitlocation', ['id' => $serverlocation->id]) }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 add_product">
                                <div>
                                    <label for="name" class="form-label">Tên gói</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $serverlocation->name }}"
                                        required>
                                    <div class="col-lg-9">
                                        <span class="invalid-feedback d-block" style="font-weight: 500"
                                            id="name_error"></span>
                                    </div>
                                </div>

                                <div>
                                    <label for="price" class="form-label">Giá</label>
                                    <input type="text" class="form-control" name="price" value="{{ $serverlocation->price }}"
                                        id="price" required>
                                    <div class="col-lg-9">
                                        <span class="invalid-feedback d-block" style="font-weight: 500"
                                            id="price_error"></span>
                                    </div>
                                </div>
                                <div>
                                    <label for="bw_in_country" class="form-label">Băng thông trong nước</label>
                                    <input type="text" class="form-control" name="bw_in_country" id="bw_in_country" value="{{ $serverlocation->bw_in_country }}"
                                        required>
                                    <div class="col-lg-9">
                                        <span class="invalid-feedback d-block" style="font-weight: 500"
                                            id="bw_in_country_error"></span>
                                    </div>
                                </div>

                                <div>
                                    <label for="bw_international" class="form-label">Băng thông quốc tế</label>
                                    <input type="text" class="form-control" name="bw_international" value="{{ $serverlocation->bw_international }}"
                                        id="bw_international" required>
                                    <div class="col-lg-9">
                                        <span class="invalid-feedback d-block" style="font-weight: 500"
                                            id="bw_international_error"></span>
                                    </div>
                                </div>
                                <div>
                                    <label for="data_transfer" class="form-label">Dữ liệu truyền</label>
                                    <input type="text" class="form-control" name="data_transfer" id="data_transfer" value="{{ $serverlocation->data_transfer }}">
                                    <div class="col-lg-9">
                                        <span class="invalid-feedback d-block" style="font-weight: 500"
                                            id="data_transfer_error"></span>
                                    </div>
                                </div>
                                <div>
                                    <label for="rack_space" class="form-label">Không gian rack</label>
                                    <input type="text" class="form-control" name="rack_space" id="rack_space" value="{{ $serverlocation->rack_space }}">
                                    <div class="col-lg-9">
                                        <span class="invalid-feedback d-block" style="font-weight: 500"
                                            id="rack_space_error"></span>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-6 add_product">
                                <div>
                                    <label for="power_capacity" class="form-label">Công suất nguồn</label>
                                    <input type="text" class="form-control" name="power_capacity" id="power_capacity" value="{{ $serverlocation->power_capacity }}">
                                    <div class="col-lg-9">
                                        <span class="invalid-feedback d-block" style="font-weight: 500"
                                            id="power_capacity_error"></span>
                                    </div>
                                </div>
                                <div>
                                    <label for="ups_backup" class="form-label">UPS/Máy điện dự phòng</label>
                                    <select class="form-select" name="ups_backup" id="ups_backup" value="{{ $serverlocation->ups_backup }}">
                                        <option value="">--- Chọn ---</option>
                                        <option {{ $serverlocation->ups_backup == "Có" ? 'selected' : '' }} value="Có">Có</option>
                                        <option {{ $serverlocation->ups_backup ==  'Không' ? 'selected' : '' }} value="Không">Không</option>
                                    </select>
                                    <div class="col-lg-9">
                                        <span class="invalid-feedback d-block" style="font-weight: 500"
                                            id="ups_backup_error"></span>
                                    </div>
                                </div>
                                <div>
                                    <label for="air_conditioning" class="form-label">Điều hoà nhiệt độ</label>
                                    <select class="form-select" name="air_conditioning" id="air_conditioning" value="{{ $serverlocation->air_conditioning }}">
                                        <option value="">--- Chọn ---</option>
                                        <option {{ $serverlocation->air_conditioning == "Có" ? 'selected' : '' }} value="Có">Có</option>
                                        <option {{ $serverlocation->air_conditioning == "Không" ? 'selected' : '' }} value="Không">Không</option>
                                    </select>
                                    <div class="col-lg-9">
                                        <span class="invalid-feedback d-block" style="font-weight: 500"
                                            id="air_conditioning_error"></span>
                                    </div>
                                </div>
                                <div>
                                    <label for="network_socket" class="form-label">Ổ cắm mạng</label>
                                    <input type="text" class="form-control" name="network_socket" id="network_socket" value="{{ $serverlocation->network_socket }}">
                                    <div class="col-lg-9">
                                        <span class="invalid-feedback d-block" style="font-weight: 500"
                                            id="network_socket_error"></span>
                                    </div>
                                </div>
                                <div>
                                    <label for="ip_address" class="form-label">Địa chỉ IP</label>
                                    <input type="number" class="form-control" name="ip_address" id="ip_address" value="{{ $serverlocation->ip_address }}">
                                    <div class="col-lg-9">
                                        <span class="invalid-feedback d-block" style="font-weight: 500"
                                            id="ip_address_error"></span>
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label">
                                        Khuyễn mãi
                                        <input id="my-input" style="display:none;" />
                                    </label>
                                    <select id="multiple-select" class="form-control" name="promotion_id" >
                                        <option value="">--- Chọn khuyễn mãi ---</option>
                                        @foreach($promotion as $key => $item)
                                            <option  {{ $serverlocation->promotion_id == $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer m-2">
                            <button type="button" class="btn btn-primary w-md" onclick="submitlocation(event)">Xác nhận</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var validateServerLocation = {
    'name': {
        'element': document.getElementById('name'),
        'error': document.getElementById('name_error'),
        'validations': [{
            'func': function(value) {
                return checkRequired(value);
            },
            'message': generateErrorMessage('E0071')
        }]
    },
    'price': {
        'element': document.getElementById('price'),
        'error': document.getElementById('price_error'),
        'validations': [{
            'func': function(value) {
                return checkRequired(value);
            },
            'message': generateErrorMessage('E0072')
        }]
    },
    'bw_in_country': {
        'element': document.getElementById('bw_in_country'),
        'error': document.getElementById('bw_in_country_error'),
        'validations': [{
            'func': function(value) {
                return checkRequired(value);
            },
            'message': generateErrorMessage('E0073')
        }]
    },
    'bw_international': {
        'element': document.getElementById('bw_international'),
        'error': document.getElementById('bw_international_error'),
        'validations': [{
            'func': function(value) {
                return checkRequired(value);
            },
            'message': generateErrorMessage('E0074')
        }]
    },
    'data_transfer': {
        'element': document.getElementById('data_transfer'),
        'error': document.getElementById('data_transfer_error'),
        'validations': [{
            'func': function(value) {
                return checkRequired(value);
            },
            'message': generateErrorMessage('E0075')
        }]
    },
    'rack_space': {
        'element': document.getElementById('rack_space'),
        'error': document.getElementById('rack_space_error'),
        'validations': [{
            'func': function(value) {
                return checkRequired(value);
            },
            'message': generateErrorMessage('E0076')
        }]
    },
    'power_capacity': {
        'element': document.getElementById('power_capacity'),
        'error': document.getElementById('power_capacity_error'),
        'validations': [{
            'func': function(value) {
                return checkRequired(value);
            },
            'message': generateErrorMessage('E0077')
        }]
    },
    'ups_backup': {
        'element': document.getElementById('ups_backup'),
        'error': document.getElementById('ups_backup_error'),
        'validations': [{
            'func': function(value) {
                return checkRequired(value);
            },
            'message': generateErrorMessage('E0078')
        }]
    },
    'air_conditioning': {
        'element': document.getElementById('air_conditioning'),
        'error': document.getElementById('air_conditioning_error'),
        'validations': [{
            'func': function(value) {
                return checkRequired(value);
            },
            'message': generateErrorMessage('E0079')
        }]
    },
    'network_socket': {
        'element': document.getElementById('network_socket'),
        'error': document.getElementById('network_socket_error'),
        'validations': [{
            'func': function(value) {
                return checkRequired(value);
            },
            'message': generateErrorMessage('E0080')
        }]
    },
    'ip_address': {
        'element': document.getElementById('ip_address'),
        'error': document.getElementById('ip_address_error'),
        'validations': [{
            'func': function(value) {
                return checkRequired(value);
            },
            'message': generateErrorMessage('E0081')
        }]
    }
};

function submitlocation(event) {
    event.preventDefault();
    if (validateAllFields(validateServerLocation)) {
        document.getElementById('serverlocation').submit();
    }
}
</script>

@endsection
