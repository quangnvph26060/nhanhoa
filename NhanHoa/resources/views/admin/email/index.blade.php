@extends('admin.layout.index')

@section('content')
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align: center; color:white">Danh sách Email</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display table table-striped table-hover dataTable">
                            <thead>
                                <tr>
                                    <th>Tên Email</th>
                                    <th>Giá (đ/Tháng)</th>
                                    <th>Tỷ lệ gửi mail</th>
                                    <th>Dung lượng lưu trữ</th>
                                    <th>IP</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ( $email as $key => $item )
                                <tr>
                                    <td><a href="#" data-toggle="modal"
                                            data-target="#productModal{{ $key }}">{{ $item->name }}</a></td>
                                    <td>{{ number_format($item->price) }} </td>
                                    <td>{{ $item->inbox_rate }}</td>
                                    <td>{{ $item->storage_capacity }}</td>
                                    <td>{{ $item->ip_address }}</td>
                                    <td align="center">
                                        <a class="btn btn-warning" href="{{ route('admin.cloud.editform', ['id' => $item->id]) }}"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-delete" data-id="{{ $item->id }}"
                                            onclick="deleteConfirmation({{ $item->id }})"><i class="fa-solid fa-trash"></i></button>

                                        <form id="delete-form-{{ $item->id }}" action="{{ route('admin.cloud.delete', ['id' => $item->id]) }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </td>
                                </tr>

                                <!-- Modal hiển thị thông tin chi tiết -->
                                <div class="modal fade" id="productModal{{ $key }}" tabindex="-1"
                                    role="dialog" aria-labelledby="productModalLabel{{ $key }}"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="productModalLabel{{ $key }}">Thông tin chi tiết</h5>
                                            </div>
                                            <div class="modal-body">
                                                <p><strong>Tên: </strong> {{ $item->name }}</p>
                                                <p><strong>Giá: </strong> {{ number_format($item->price) }} đ/Tháng</p>
                                                <p><strong>Tỷ lệ gửi mail vào inbox: </strong> {{ $item->inbox_rate }}</p>
                                                <p><strong>Dung lượng lưu trữ: </strong> {{ $item->storage_capacity }}</p>
                                                <p><strong>Địa chỉ email: </strong> {{ $item->unlimited_email_addresses }}</p>
                                                <p><strong>Email forwarder: </strong> {{ $item->unlimited_email_forwarder }}</p>
                                                <p><strong>Danh sách email: </strong> {{ $item->unlimited_email_list }}</p>
                                                <p><strong>Tên miền email: </strong> {{ $item->unlimited_email_domain }}</p>
                                                <p><strong>Địa chỉ IP riêng : </strong> {{ $item->ip_address }}</p>
                                                <p><strong>Khuyến mãi:</strong> {{ $item->promotion ? $item->promotion->name : '-' }}</p>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
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
</script>
@endsection
