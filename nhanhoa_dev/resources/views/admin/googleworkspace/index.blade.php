@extends('admin.layout.index')

@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- SweetAlert2 JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    /* Your existing styles */
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

    .table-responsive {
        margin-top: 1rem;
    }

    .table {
        margin-bottom: 0;
    }

    .table th,
    .table td {
        padding: 1rem;
        vertical-align: middle;
    }

    .table th {
        background-color: #f8f9fa;
        border-bottom: 2px solid #dee2e6;
    }

    .btn-warning,
    .btn-danger {
        border-radius: 20px;
        padding: 5px 15px;
        font-size: 14px;
        font-weight: bold;
        transition: background 0.3s ease, transform 0.3s ease;
    }

    .btn-warning:hover,
    .btn-danger:hover {
        transform: scale(1.05);
    }

    .page-header {
        margin-bottom: 2rem;
    }

    .table-hover tbody tr:hover {
        background-color: #e9ecef;
    }

    .dataTables_info,
    .dataTables_paginate {
        margin-top: 1rem;
    }

    .pagination .page-link {
        color: #007bff;
    }

    .pagination .page-item.active .page-link {
        background-color: #007bff;
        border-color: #007bff;
    }

    .pagination .page-item:hover .page-link {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .pagination .page-item.active .page-link,
    .pagination .page-item .page-link {
        transition: all 0.3s ease;
    }

    #category_kho {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    #category_kho h2 {
        color: #343a40;
        margin-bottom: 20px;
        font-weight: bold;
    }

    #category_kho label {
        padding: 0px 25px;
    }

    #category_kho .form-control {
        border-radius: 20px;
        padding: 10px 20px;
        font-size: 1.1em;
    }

    #category_kho .form-check-input {
        margin-top: 6px;
    }

    #category_kho .form-check-label {
        font-size: 1.1em;
    }

    #category_kho .form-check {
        margin-bottom: 10px;
    }

    .page-inner {
        min-height: 850px
    }

    .table-responsive {
        margin: 0px !important;
    }
</style>
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align: center; color : white;">Danh sách Google Workspace </h4>
                </div>

                <div style="padding: 10px; text-align: center;">
                    <!-- Business Button -->
                    <button id="business-btn"
                        class="btn
                            {{ session('displaybusiness') == 'block' ? 'btn-success' : (session('displayeducation') != 'block' ? 'btn-success' : 'btn-secondary') }} mr-5"
                        onclick="showSection('business-btn', 'business')">Business</button>

                    <!-- Education Button -->
                    <button id="education-btn"
                        class="btn {{ session('displayeducation') == 'block' ? 'btn-success' : 'btn-secondary' }}"
                        onclick="showSection('education-btn', 'education')">Education</button>
                </div>


                <div class="card-body" id="business" style="display: {{ session('displaybusiness', 'block') }};">
                    <div class="table-responsive">
                        <table class="display table table-striped table-hover dataTable">
                            <thead>
                                <tr>
                                    <th>Tên gói</th>
                                    <th>Giá (đ/Tháng)</th>
                                    <th>Gia hạn</th>
                                    <th>Dung lượng lưu trữ</th>
                                    <th>Số lượng user giới hạn</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ( $business as $key => $item )
                                <tr>
                                    <td><a href="#" data-toggle="modal" data-target="#productModal{{ $key }}">{{
                                            $item->name }}</a></td>
                                    <td>{{ number_format($item->price_per_month) }} </td>
                                    <td>{{ number_format($item->renewal_price) }}</td>
                                    <td>{{ $item->storage_capacity }}</td>
                                    <td>{{ $item->user_limit }}</td>
                                    <td align="center">
                                        <a class="btn btn-warning"
                                            href="{{ route('admin.googleworkspace.busniess.editform', ['id' => $item->id]) }}"><i
                                                class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-delete" data-id="{{ $item->id }}"
                                            onclick="deleteConfirmation({{ $item->id }})"><i
                                                class="fa-solid fa-trash"></i></button>

                                        <form id="delete-form-{{ $item->id }}"
                                            action="{{ route('admin.googleworkspace.busniess.delete', ['id' => $item->id]) }}"
                                            method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </td>
                                </tr>

                                <!-- Modal hiển thị thông tin chi tiết -->
                                <div class="modal fade" id="productModal{{ $key }}" tabindex="-1" role="dialog"
                                    aria-labelledby="productModalLabel{{ $key }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="productModalLabel{{ $key }}">Thông tin chi
                                                    tiết</h5>
                                            </div>
                                            <div class="modal-body">
                                                <p><strong>Tên gói Business: </strong> {{ $item->name }}</p>
                                                <p><strong>Giá: </strong> {{ number_format($item->price_per_month) }} đ/Tháng</p>
                                                <p><strong>Dung lượng lưu trữ: </strong> {{ $item->storage_capacity }}
                                                </p>
                                                <p><strong>Giá cho 20 user đầu tiên: </strong> {{
                                                    number_format($item->price_first_20_users) }}</p>
                                                <p><strong>Giá cho 21 user trở lên: </strong> {{
                                                    number_format($item->price_after_20_users) }}</p>
                                                <p><strong>Giá gia hạn: </strong> {{ number_format($item->renewal_price)
                                                    }}/user/tháng</p>
                                                <p><strong>Giới hạn số lượng user: </strong> {{ $item->user_limit }}</p>
                                                <p><strong>Khuyến mãi:</strong> {{ $item->promotion ?
                                                    $item->promotion->name : '-' }}</p>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Đóng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty

                                @endforelse


                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-body" id="education" style="display: {{ session('displayeducation', 'none') }};">
                    <div class="table-responsive">
                        <table class="display table table-striped table-hover dataTable">
                            <thead>
                                <tr>
                                    <th>Tên gói</th>
                                    <th>Giá (đ/Tháng)</th>
                                    <th>Mô tả</th>
                                    <th>Dung lượng </th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ( $educations as $key => $item )
                                <tr>
                                    <td><a href="#" data-toggle="modal" data-target="#productModal1{{ $key }}">{{
                                            $item->name }}</a></td>
                                    <td>{{ number_format($item->price) }} </td>
                                    <td>{{ $item->describe }}</td>
                                    <td>{{ $item->storage }}</td>

                                    <td align="center">
                                        <a class="btn btn-warning"
                                            href="{{ route('admin.googleworkspace.education.editform', ['id' => $item->id]) }}"><i
                                                class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-delete" data-id="{{ $item->id }}"
                                            onclick="deleteConfirmation({{ $item->id }})"><i
                                                class="fa-solid fa-trash"></i></button>

                                        <form id="delete-form-{{ $item->id }}"
                                            action="{{ route('admin.googleworkspace.education.delete', ['id' => $item->id]) }}"
                                            method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </td>
                                </tr>

                                <!-- Modal hiển thị thông tin chi tiết -->
                                <div class="modal fade" id="productModal1{{ $key }}" tabindex="-1" role="dialog"
                                    aria-labelledby="productModalLabel{{ $key }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="productModalLabel{{ $key }}">Thông tin chi
                                                    tiết</h5>
                                            </div>
                                            <div class="modal-body">
                                                <p><strong>Tên gói Education: </strong> {{ $item->name }}</p>
                                                <p><strong>Giá: </strong> {{ number_format($item->price) }} đ/Tháng</p>
                                                <p><strong>Mô tả: </strong> {{ $item->describe }}</p>
                                                <p><strong>Dung lượng lưu trữ: </strong> {{ $item->storage }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Đóng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty

                                @endforelse


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if (session('success'))
<script>
    $(document).ready(function() {
            $.notify({
                icon: 'icon-bell',
                title: 'Email',
                message: '{{ session('success') }}',
            }, {
                type: 'secondary',
                placement: {
                    from: "bottom",
                    align: "right"
                },
                time: 1000,
            });
        });
</script>
@endif
<script>
    function deleteConfirmation(id) {
        Swal.fire({
            title: 'Bạn có chắc chắn muốn xóa?',
            text: "Bạn sẽ không thể khôi phục lại dữ liệu này!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Xóa!',
            cancelButtonText: 'Hủy'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(`delete-form-${id}`).submit();
            }
        })
    }

    function showSection(buttonId, sectionId) {
        document.getElementById('business').style.display = 'none';
        document.getElementById('education').style.display = 'none';

        // Hiển thị phần tương ứng
        document.getElementById(sectionId).style.display = 'block';

        // Cập nhật màu sắc nút
        document.getElementById('business-btn').classList.remove('btn-success');
        document.getElementById('business-btn').classList.add('btn-secondary');
        document.getElementById('education-btn').classList.remove('btn-success');
        document.getElementById('education-btn').classList.add('btn-secondary');

        // Đổi màu nút được nhấn
        document.getElementById(buttonId).classList.remove('btn-secondary');
        document.getElementById(buttonId).classList.add('btn-success');
    }

</script>



@endsection
