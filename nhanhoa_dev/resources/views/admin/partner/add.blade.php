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
        padding: 1.5rem;
        text-align: center;
    }

    .card-title {
        font-size: 1.75rem;
        font-weight: 700;
        margin: 0;
    }

    .form-label {
        font-weight: 500;
    }

    .form-control {
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

    .invalid-feedback {
        font-weight: 500;
        display: block;
    }

    .center-form {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        /* Căn giữa theo chiều dọc */
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
                <a href="{{ route('admin.partner.index') }}">Đối tác</a>
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
                    <h4 class="card-title">Thêm đối tác</h4>
                </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.partner.add') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-lg-6 add_product">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Tên công ty</label>
                                        <input type="text" class="form-control" name="name" id="name" required>
                                        <div class="invalid-feedback" id="name_error"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="contact_person" class="form-label">Người đại diện</label>
                                        <input type="text" class="form-control" name="contact_person" id="contact_person"required >
                                        <div class="invalid-feedback" id="contact_person_error"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="phone" required>
                                        <div class="invalid-feedback" id="phone_error"></div>
                                    </div>



                                </div>

                                <div class="col-lg-6 add_product">
                                    <div class="form-group">
                                        <label for="address" class="form-label">Địa chỉ</label>
                                        <input type="text" class="form-control" name="address" id="address" required>
                                        <div class="invalid-feedback" id="address_error"></div>
                                    </div>


                                    <div class="form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" required>
                                        <div class="invalid-feedback" id="email_error"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="logo" class="form-label">Logo</label>
                                        <div class="custom-file">
                                            <input id="logo" class="custom-file-input @error('logo') is-invalid @enderror" type="file" name="logo"
                                                accept="image/*" required>
                                            <label class="custom-file-label" for="logo">Chọn logo</label>
                                        </div>
                                        @error('logo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <img id="profileImagelogo" style="width:70px; height:auto"
                                            src="{{ isset($partner->logo) && !empty($partner->logo) ? asset($partner->logo) : asset('images/avatar2.jpg') }}"
                                            alt="image logo" class="logo">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group" style="text-align: center">
                                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                                </div>
                            </div>



                        </form>
                    </div>


            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#logo').on('change', function(event) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#profileImagelogo').attr('src', e.target.result);
            };
            if (event.target.files[0]) {
                reader.readAsDataURL(event.target.files[0]);
            }
        });
    });
</script>
@endsection
