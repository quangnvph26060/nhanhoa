<table class="table table-hover">
    <thead>
        <tr>
            <th>STT</th>
            <th data-priority = '2'>Giải pháp</th>
            <th>Phí</th>
            <th>Phí khởi tạo</th>
            <th>Số nhánh</th>
            <th>Dung lượng ghi âm</th>
            <th style="text-align: center">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @php
            $start = ($solutions->currentPage() - 1) * $solutions->perPage() + 1;
        @endphp
        @forelse ($solutions as $key => $item)
            <tr>
                <td>{{ $key + $start }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->fee === null ? 'Liên hệ' : number_format($item->fee) }}</td>
                <td>{{ number_format($item->initialization_fee) }}</td>
                <td>{{ $item->branch }}</td>
                <td>{{ $item->record_capacity }}</td>
                <td style="text-align: center">
                    <a href="{{ route('admin.solution.edit', ['id' => $item->id]) }}" class="btn btn-warning">Sửa</a>
                    <a href="#" data-url="{{ route('admin.solution.delete', ['id' => $item->id]) }}"
                        class="btn btn-danger btn-delete">Xóa</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" class="text-center">Không có dữ liệu</td>
            </tr>
        @endforelse
    </tbody>
</table>
