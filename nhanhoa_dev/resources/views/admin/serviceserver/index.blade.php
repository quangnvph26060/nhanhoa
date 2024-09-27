@extends('admin.layout.index')

@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


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

    .form-check {
        display: flex;
        justify-content: end;
    }

    .form-check-label {
        margin-right: 10px;
    }
    label{
        font-weight: 600;
        font-size: 15px;
    }

    .form-check-input {
        width: auto;
    }

    .col-6 .row {
        margin: 0;
    }
    p{
        font-size: 13px;
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
                    <h4 class="card-title" style="text-align: center; color:white">Danh sách dịch vụ quản trị máy chủ</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="dataTables_length" id="basic-datatables_length">
                                        <a class="btn btn-primary" href="{{ route('admin.service.add') }}">Thêm
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
                                                <th>Tên gói</th>
                                                <th>Hạng mục thực hiện(thời gian)</th>
                                                <th>Chuyển dữ liệu website </th>
                                                <th>Giá/tháng</th>
                                                <th>Trạng thái</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ( $service as $key => $item )
                                            <tr>
                                                <td><a href="#" data-toggle="modal"
                                                        data-target="#productModal{{ $key }}">{{ $item->name }}</a></td>
                                                <td>{{ $item->category_implementation }}</td>

                                                <td>{{ $item->website_data_migration}} </td>
                                                <td>{{number_format($item->price) }} đ</td>
                                                <td>
                                                    <a class="btn btn-warning"
                                                        href="{{ route('admin.service.edit', ['id' => $item->id]) }}"><i
                                                            class="fas fa-edit"></i></a>
                                                    <button class="btn btn-danger btn-delete" data-id="{{ $item->id }}"
                                                        onclick="deleteConfirmation({{ $item->id }})"><i
                                                            class="fa-solid fa-trash"></i></button>

                                                    <form id="delete-form-{{ $item->id }}"
                                                        action="{{ route('admin.service.delete', ['id' => $item->id]) }}"
                                                        method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="productModal{{ $key }}" tabindex="-1"
                                            role="dialog" aria-labelledby="productModalLabel{{ $key }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content" style="width: 730px; padding: 10px">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="productModalLabel{{ $key }}">
                                                            Thông tin chi tiết</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Form chỉnh sửa dịch vụ -->

                                                            <div class="row g-4">
                                                                <!-- Các input text -->
                                                                <div class="col-5">
                                                                    <!-- Tên gói -->
                                                                    <div class="mb-3">
                                                                        <label for="name" class="form-label">Tên
                                                                            gói</label>
                                                                        <p>{{ $item->name }}</p>
                                                                        <span class="invalid-feedback d-block"
                                                                            id="name_error"></span>
                                                                    </div>

                                                                    <!-- Hạng mục thực hiện -->
                                                                    <div class="mb-3">
                                                                        <label for="category_implementation"
                                                                            class="form-label">Hạng mục thực
                                                                            hiện(thời gian)</label>
                                                                        <p>{{ $item->category_implementation }}</p>
                                                                        <span class="invalid-feedback d-block"
                                                                            id="category_implementation_error"></span>
                                                                    </div>

                                                                    <!-- Chuyển dữ liệu website -->
                                                                    <div class="mb-3">
                                                                        <label for="website_data_migration"
                                                                            class="form-label">Chuyển dữ liệu
                                                                            website</label>
                                                                       <p>{{ $item->website_data_migration }}</p>
                                                                        <span class="invalid-feedback d-block"
                                                                            id="website_data_migration_error"></span>
                                                                    </div>

                                                                    <!-- Đơn giá/tháng -->
                                                                    <div class="mb-3">
                                                                        <label for="price" class="form-label">Đơn
                                                                            giá/tháng</label>
                                                                        <p>{{ number_format($item->price) }}</p>
                                                                        <span class="invalid-feedback d-block"
                                                                            id="price_error"></span>
                                                                    </div>
                                                                </div>

                                                                <!-- Các checkbox -->
                                                                <div class="col-7">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <!-- Tối ưu server -->
                                                                            <div
                                                                                class="form-check form-switch mb-2">
                                                                                <label for="server_optimization"
                                                                                    class="form-check-label">Tối ưu
                                                                                    server</label>
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    name="server_optimization"
                                                                                    id="server_optimization"
                                                                                    value="1" {{
                                                                                    $item->server_optimization ==
                                                                                1 ? 'checked' : '' }} disabled>
                                                                                <span
                                                                                    class="invalid-feedback d-block"
                                                                                    id="server_optimization_error"></span>
                                                                            </div>

                                                                            <!-- Bảo mật server -->
                                                                            <div
                                                                                class="form-check form-switch mb-2">
                                                                                <label for="server_security"
                                                                                    class="form-check-label">Bảo mật
                                                                                    server</label>
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    name="server_security"
                                                                                    id="server_security" value="1"
                                                                                    {{ $item->server_security ==
                                                                                1 ? 'checked' : '' }} disabled>
                                                                                <span
                                                                                    class="invalid-feedback d-block"
                                                                                    id="server_security_error"></span>
                                                                            </div>

                                                                            <!-- Cấu hình Backup -->
                                                                            <div
                                                                                class="form-check form-switch mb-2">
                                                                                <label for="backup_configuration"
                                                                                    class="form-check-label">Cấu
                                                                                    hình Backup</label>
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    name="backup_configuration"
                                                                                    id="backup_configuration"
                                                                                    value="1" {{
                                                                                    $item->backup_configuration
                                                                                == 1 ? 'checked' : '' }} disabled>
                                                                                <span
                                                                                    class="invalid-feedback d-block"
                                                                                    id="backup_configuration_error"></span>
                                                                            </div>

                                                                            <!-- Giám sát cơ bản -->
                                                                            <div
                                                                                class="form-check form-switch mb-2">
                                                                                <label for="basic_monitoring"
                                                                                    class="form-check-label">Giám
                                                                                    sát cơ bản</label>
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    name="basic_monitoring"
                                                                                    id="basic_monitoring" value="1"
                                                                                    {{ $item->basic_monitoring ==
                                                                                1 ? 'checked' : '' }} disabled>
                                                                                <span
                                                                                    class="invalid-feedback d-block"
                                                                                    id="basic_monitoring_error"></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-6">
                                                                            <!-- Giám sát chuyên sâu -->
                                                                            <div
                                                                                class="form-check form-switch mb-2">
                                                                                <label for="advanced_monitoring"
                                                                                    class="form-check-label">Giám
                                                                                    sát sâu</label>
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    name="advanced_monitoring"
                                                                                    id="advanced_monitoring"
                                                                                    value="1" {{
                                                                                    $item->advanced_monitoring ==
                                                                                1 ? 'checked' : '' }} disabled>
                                                                                <span
                                                                                    class="invalid-feedback d-block"
                                                                                    id="advanced_monitoring_error"></span>
                                                                            </div>

                                                                            <!-- Báo cáo sự cố -->
                                                                            <div
                                                                                class="form-check form-switch mb-2">
                                                                                <label for="incident_reporting"
                                                                                    class="form-check-label">Báo cáo
                                                                                    sự cố</label>
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    name="incident_reporting"
                                                                                    id="incident_reporting"
                                                                                    value="1" {{
                                                                                    $item->incident_reporting ==
                                                                                1 ? 'checked' : '' }} disabled>
                                                                                <span
                                                                                    class="invalid-feedback d-block"
                                                                                    id="incident_reporting_error"></span>
                                                                            </div>

                                                                            <!-- Báo cáo định kỳ -->
                                                                            <div
                                                                                class="form-check form-switch mb-2">
                                                                                <label
                                                                                    for="periodic_reporting_by_email"
                                                                                    class="form-check-label">Báo cáo
                                                                                    định kỳ</label>
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    name="periodic_reporting_by_email"
                                                                                    id="periodic_reporting_by_email"
                                                                                    value="1" {{
                                                                                    $item->periodic_reporting_by_email
                                                                                == 1 ? 'checked' : '' }} disabled>
                                                                                <span
                                                                                    class="invalid-feedback d-block"
                                                                                    id="periodic_reporting_by_email_error"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Đóng</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            @empty
                                            <tr>
                                                <td colspan="5">Chưa có sản phảm nào</td>
                                            </tr>
                                            @endforelse


                                            <!-- Modal -->



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
                    title: 'Quản trị máy chủ',
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
