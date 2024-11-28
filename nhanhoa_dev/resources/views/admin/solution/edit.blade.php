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

        .form-control {
            width: 100%;
        }

        input {
            width: 100%;
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
                    <a href="{{ route('admin.solution.index') }}">Thương hiệu</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Sửa</a>
                </li>
            </ul>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" style="text-align: center; color:#fff">Sửa giải pháp "{{ $solution->name }}"
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.solution.update', ['id' => $solution->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="new-solution-name">Tên:</label>
                                        <input value="{{ $solution->name }}" type="text" class="form-control"
                                            id="new-solution-name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="new-solution-fee">Phí:</label>
                                        <input value="{{ $solution !== null ? number_format($solution->fee) : 0 }}"
                                            type="text" class="form-control" id="new-solution-fee" name="fee">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="new-solution-initialization_fee">Phí khởi tạo:</label>
                                        <input value="{{ number_format($solution->initialization_fee) }}" type="text"
                                            class="form-control" id="new-solution-initialization_fee"
                                            name="initialization_fee" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="new-solution-branch">Nhánh:</label>
                                        <input value="{{ $solution->branch }}" type="number" class="form-control"
                                            id="new-solution-branch" name="branch" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="new-solution-record_capacity">Dung lượng ghi âm:</label>
                                        <input value="{{ $solution->record_capacity }}" type="text" class="form-control"
                                            id="new-solution-record_capacity" name="record_capacity" required>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" id="confirm-button" enabled>Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const nameInput = document.getElementById('new-solution-name');
            const feeInput = document.getElementById('new-solution-fee');
            const initializationFeeInput = document.getElementById('new-solution-initialization_fee');
            const branchInput = document.getElementById('new-solution-branch');
            const recordCapacityInput = document.getElementById('new-solution-record_capacity');
            const confirmButton = document.getElementById('confirm-button');

            function formatFee(input) {
                let value = input.value.replace(/[^0-9]/g, '');

                value = new Intl.NumberFormat('vi-VN').format(value);
                input.value = value;
            }

            document.getElementById('new-solution-initialization_fee').addEventListener('input', function() {
                formatFee(this);
                checkFormValidity();
            });

            document.getElementById('new-solution-fee').addEventListener('input', function() {
                formatFee(this);
            });

            nameInput.addEventListener('input', checkFormValidity);
            branchInput.addEventListener('input', checkFormValidity);
            recordCapacityInput.addEventListener('input', checkFormValidity);

            function checkFormValidity() {
                const isFormValid = initializationFeeInput.value !== '' &&
                    nameInput.value.trim() !== '' &&
                    branchInput.value !== '' &&
                    recordCapacityInput.value !== '';

                confirmButton.disabled = !isFormValid;
            }
        })
    </script>
@endsection
