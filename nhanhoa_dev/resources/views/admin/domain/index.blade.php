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
</style>

<div class="page-inner">
    <div class="page-header">
        <!-- Breadcrumbs here -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align: center; color:white">Danh sách tên miền</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="dataTables_length" id="basic-datatables_length">
                                        <a class="btn btn-primary" href="{{ route('admin.domain.addform') }}">Thêm
                                            mới</a>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-12" id="product-table">
                                    <table id="basic-datatables"
                                        class="display table table-striped table-hover dataTable" role="grid"
                                        aria-describedby="basic-datatables_info">
                                        <thead>
                                            <tr role="row">
                                                <th>Tên miền</th>
                                                <th>Loại tên miền</th>
                                                <th>Lệ phí đăng ký</th>
                                                <th>Phí duy trì</th>
                                                <th>Trạng thái</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($domains)
                                            @foreach($domains as $key => $item)
                                            <tr>
                                                <td><a href="#" data-toggle="modal"
                                                        data-target="#productModal{{ $key }}">{{ $item->name }}</a></td>
                                                <td>{{ $item->domaintype_id == 1 ? 'Tên miền quốc tế' : 'Tên miền quốc
                                                    gia' }}</td>
                                                <td>{{number_format($item->le_phi) }}</td>
                                                <td>{{ number_format($item->phiduytri) }} đ</td>
                                                <td align="center">
                                                    <a class="btn btn-warning"
                                                        href="{{ route('admin.domain.editform', ['id' => $item->id]) }}"><i
                                                            class="fas fa-edit"></i></a>
                                                    <button class="btn btn-danger btn-delete" data-id="{{ $item->id }}"
                                                        onclick="deleteConfirmation({{ $item->id }})"><i
                                                            class="fa-solid fa-trash"></i></button>

                                                    <form id="delete-form-{{ $item->id }}"
                                                        action="{{ route('admin.domain.delete', ['id' => $item->id]) }}"
                                                        method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="productModal{{ $key }}" tabindex="-1"
                                                role="dialog" aria-labelledby="productModalLabel{{ $key }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="productModalLabel{{ $key }}">
                                                                Thông tin chi tiết</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p><strong>Tên miền :</strong> {{ $item->name }}</p>
                                                            <p><strong>Loại:</strong> {{ $item->domaintype_id == 1 ?
                                                                'Tên miền quốc tế' : 'Tên miền quốc gia' }}</p>
                                                            <p><strong>Phí đăng ký :</strong> {{
                                                                number_format($item->le_phi) }} đ</p>
                                                            <p><strong>Phí duy trì:</strong> {{
                                                                number_format($item->phiduytri) }} đ</p>
                                                            <p><strong>Dịch vụ quản trị tên miền năm đầu:</strong> {{
                                                                number_format($item->dichvu) }} đ</p>
                                                            <p><strong>Dịch vụ quản trị tên miền năm tiếp theo:</strong>
                                                                {{ number_format($item->dicvunamsau) }} đ</p>
                                                            <p><strong>Tổng tiền năm đầu :</strong>
                                                                {{ number_format(($item->le_phi + $item->phiduytri +
                                                                $item->dichvu) + $item->dichvu * 10/100) }} đ</p>
                                                            <p><strong>Tổng tiền năm tiếp theo :</strong>
                                                                {{ number_format(($item->phiduytri + $item->dicvunamsau) + $item->dicvunamsau * 10/100) }} đ</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Đóng</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif


                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @if (session('success'))
    <script>
        $(document).ready(function() {
                $.notify({
                    icon: 'icon-bell',
                    title: 'Tên miền',
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

    <script type="text/javascript">
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
    </script>

    @endsection
