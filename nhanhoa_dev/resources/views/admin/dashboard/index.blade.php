@extends('admin.layout.index')

@section('content')

    <div class="page-inner">
      <div
        class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
      >
        <div>
          <h3 class="fw-bold mb-3">Bảng điều khiển</h3>
        </div>
        {{-- <div class="ms-md-auto py-2 py-md-0">
          <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
          <a href="#" class="btn btn-primary btn-round">Add Customer</a>
        </div> --}}
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="card card-stats card-round">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-icon">
                  <div
                    class="icon-big text-center icon-primary bubble-shadow-small"
                  >
                    <i class="fas fa-users"></i>
                  </div>
                </div>
                <div class="col col-stats ms-3 ms-sm-0">
                  <div class="numbers">
                    <p class="card-category">Khách hàng</p>
                    <h4 class="card-title">{{ $clients->count() }}</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="card card-stats card-round">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-icon">
                  <div
                    class="icon-big text-center icon-info bubble-shadow-small">
                    <i class="fas fa-user-check"></i>
                  </div>
                </div>
                <div class="col col-stats ms-3 ms-sm-0">
                  <div class="numbers">
                    <p class="card-category">Lượt truy cập</p>
                    <h4 class="card-title">{{ $home->views }}</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="col-sm-6 col-md-3">
          <div class="card card-stats card-round">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-icon">
                  <div
                    class="icon-big text-center icon-success bubble-shadow-small"
                  >
                    <i class="fas fa-luggage-cart"></i>
                  </div>
                </div>
                <div class="col col-stats ms-3 ms-sm-0">
                  <div class="numbers">
                    <p class="card-category">Sales</p>
                    <h4 class="card-title">$ 1,345</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="card card-stats card-round">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-icon">
                  <div
                    class="icon-big text-center icon-secondary bubble-shadow-small"
                  >
                    <i class="far fa-check-circle"></i>
                  </div>
                </div>
                <div class="col col-stats ms-3 ms-sm-0">
                  <div class="numbers">
                    <p class="card-category">Order</p>
                    <h4 class="card-title">576</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>

      <div class="row">
        {{-- <div class="col-md-4">
          <div class="card card-round">
            <div class="card-body">
              <div class="card-head-row card-tools-still-right">
                <div class="card-title">Khách hàng mới</div>

              </div>
              <div class="card-list py-4">
               @forelse ($clients as $index =>  $item)
                    @if ($index <= 6)
                    <div class="item-list">
                        <div class="avatar">
                          <span
                            class="avatar-title rounded-circle border border-white"
                            >{{ $item->name[0] }}</span
                          >
                        </div>
                        <div class="info-user ms-3">
                          <div class="username">{{ $item->name }}</div>
                          <div class="status">{{ $item->phone }}</div>
                        </div>
                        <button class="btn btn-icon btn-link op-8 me-1">
                          <i class="far fa-envelope"></i>
                        </button>
                        <button class="btn btn-icon btn-link btn-danger op-8">
                          <i class="fas fa-ban"></i>
                        </button>
                      </div>
                    @endif
               @empty

               @endforelse
              </div>
            </div>
          </div>
        </div> --}}
        <div class="col-md-12">
          <div class="card card-round">
            <div class="card-header">
              <div class="card-head-row card-tools-still-right">
                <div class="card-title">Lịch sử đơn hàng</div>
                {{-- <div class="card-tools">
                  <div class="dropdown">
                    <button
                      class="btn btn-icon btn-clean me-0"
                      type="button"
                      id="dropdownMenuButton"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="fas fa-ellipsis-h"></i>
                    </button>

                  </div>
                </div> --}}
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center mb-0">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Khách hàng</th>
                      <th scope="col" class="text-end">Ngày tạo</th>
                      <th scope="col" class="text-end">Tên gói</th>
                      <th scope="col" class="text-end" style="width: 140px;"  >Trạng thái</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($clients as $index =>  $item)
                    @if ($index <= 5)
                    <tr>
                        <th scope="row">
                            {{ $item->name }}
                        </th>
                        <td class="text-end">{{ $item->created_at->format('d-m-Y H:i:s') }}
                        </td>
                        <td class="text-end">{{ $item->package_name }}</td>
                        <td class="text-end">
                          <span class="badge badge-success">Completed</span>
                        </td>
                      </tr>
                    @endif
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


@endsection
