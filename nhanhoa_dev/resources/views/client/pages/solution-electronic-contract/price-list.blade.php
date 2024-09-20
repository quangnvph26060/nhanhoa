@extends('client/pages/solution-electronic-contract/master')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Bảng giá</h2>
                <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Bảng giá</a></li>
                </ol>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-xl">
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h1 class="text-h1">Bảng giá hợp đồng điện tử ESOC</h1>
                    <p>Hãy chọn gói dịch vụ phù hợp với doanh nghiệp của bạn</p>
                    <div class="text-center btn-dkynhantuvan my-4">
                        <a href="/dang-ky-nhan-tu-van" class="default-btn bg-firstColor py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="13" rx="2" width="4" height="6"></rect><rect x="16" y="13" rx="2" width="4" height="6"></rect><path d="M4 15v-3a8 8 0 0 1 16 0v3"></path><path d="M18 19a6 3 0 0 1 -6 3"></path></svg>
                            Đăng ký nhận tư vấn
                        </a>
                    </div>
                </div>
            </div>
            <div class="row row-cards row-deck">
               @forelse ($esocs as $item )
                <div class="col-sm-4 p-3">
                    <div class="card secondColor shadow">
                        <div class="card-body py-3 px-3">
                            <div class="row align-items-center border-bottom mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold">
                                        ESOC-{{ $item->contract_number }}
                                    </div>
                                    <div class="text-muted mb-1">
                                        Gói {{ $item->contract_number }} hợp đồng
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold" style="font-size:1.85em">
                                        {{ number_format($item->price, 0, ',', '.') }}
                                    </div>
                                    <div class="text-muted">
                                        VNĐ/Gói
                                    </div>
                                </div>
                            </div>
                            <fieldset class="form-fieldset">
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><rect x="8" y="15" width="2" height="2"></rect></svg>
                                    </div>
                                    <div class="col">
                                        Thời gian lưu trữ: {{ $item->storage_duration }} năm
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><polyline points="12 7 12 12 15 15"></polyline></svg>
                                    </div>
                                    <div class="col">
                                        Thời gian sử dụng: {{  $item->usage_duration  }}
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 11 12 14 20 6"></polyline><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path></svg>
                                    </div>
                                    <div class="col">
                                        Đáp ứng tiêu chuẩn pháp lý
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7"></path><path d="M11 15v.01m0 3v.01m0 3v.01m4 -4v.01m0 3v.01"></path></svg>
                                    </div>
                                    <div class="col">
                                        Không gian lưu trữ: {{ $item->storage_type }}
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><ellipse cx="12" cy="6" rx="8" ry="3"></ellipse><path d="M4 6v6a8 3 0 0 0 16 0v-6"></path><path d="M4 12v6a8 3 0 0 0 16 0v-6"></path></svg>
                                    </div>
                                    <div class="col">
                                        Hệ thống ổ đĩa truy xuất: {{ $item->storage_system }}
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="6 21 21 6 18 3 3 18 6 21"></polyline><line x1="15" y1="6" x2="18" y2="9"></line><path d="M9 3a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2"></path><path d="M19 13a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2"></path></svg>
                                    </div>
                                    <div class="col">
                                        Chi phí khởi tạo: Miễn phí 100%
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="9" r="6"></circle><polyline points="9 14.2 9 21 12 19 15 21 15 14.2" transform="rotate(-30 12 9)"></polyline><polyline points="9 14.2 9 21 12 19 15 21 15 14.2" transform="rotate(30 12 9)"></polyline></svg>
                                    </div>
                                    <div class="col">
                                        Bảo trì, Bản quyền: {{ number_format($item->maintenance_fee, 0, ',', '.') }} VNĐ/năm
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="13" rx="2" width="4" height="6"></rect><rect x="16" y="13" rx="2" width="4" height="6"></rect><path d="M4 15v-3a8 8 0 0 1 16 0v3"></path><path d="M18 19a6 3 0 0 1 -6 3"></path></svg>
                                    </div>
                                    <div class="col">
                                        Hỗ trợ kỹ thuật 24/7/365
                                    </div>
                                </div>
                            </fieldset>
                            <a href="dang-ky-nhan-tu-van" class="default-btn lineargradient-btn w-100 d-block text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="7 10 12 4 17 10"></polyline><path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path><circle cx="12" cy="15" r="2"></circle></svg>
                                Đăng ký sử dụng
                            </a>
                        </div>
                    </div>
                </div>
               @empty

               @endforelse
                {{-- <div class="col-sm-4 p-3">
                    <div class="card shadow" style="border: 1px solid #e52e56; color: #e52e56; background: rgb(229 46 86 / 8%); ">
                        <div class="card-body py-3 px-3">
                            <div class="row align-items-center border-bottom mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold" style="color: #e52e56;">
                                        ESOC-500
                                    </div>
                                    <div class="text-muted mb-1">
                                        Gói 500 hợp đồng
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold" style="font-size:1.85em">
                                        4.300.000
                                    </div>
                                    <div class="text-muted">
                                        VNĐ/Gói
                                    </div>
                                </div>
                            </div>
                            <fieldset class="form-fieldset">
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><rect x="8" y="15" width="2" height="2"></rect></svg>
                                    </div>
                                    <div class="col">
                                        Thời gian lưu trữ: 10 năm
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><polyline points="12 7 12 12 15 15"></polyline></svg>
                                    </div>
                                    <div class="col">
                                        Thời gian sử dụng: Không giới hạn
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 11 12 14 20 6"></polyline><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path></svg>
                                    </div>
                                    <div class="col">
                                        Đáp ứng tiêu chuẩn pháp lý
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7"></path><path d="M11 15v.01m0 3v.01m0 3v.01m4 -4v.01m0 3v.01"></path></svg>
                                    </div>
                                    <div class="col">
                                        Không gian lưu trữ: Đám mây
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><ellipse cx="12" cy="6" rx="8" ry="3"></ellipse><path d="M4 6v6a8 3 0 0 0 16 0v-6"></path><path d="M4 12v6a8 3 0 0 0 16 0v-6"></path></svg>
                                    </div>
                                    <div class="col">
                                        Hệ thống ổ đĩa truy xuất: SSD
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="6 21 21 6 18 3 3 18 6 21"></polyline><line x1="15" y1="6" x2="18" y2="9"></line><path d="M9 3a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2"></path><path d="M19 13a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2"></path></svg>
                                    </div>
                                    <div class="col">
                                        Chi phí khởi tạo: Miễn phí 100%
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="9" r="6"></circle><polyline points="9 14.2 9 21 12 19 15 21 15 14.2" transform="rotate(-30 12 9)"></polyline><polyline points="9 14.2 9 21 12 19 15 21 15 14.2" transform="rotate(30 12 9)"></polyline></svg>
                                    </div>
                                    <div class="col">
                                        Bảo trì, Bản quyền: 500.000 VNĐ/năm
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="13" rx="2" width="4" height="6"></rect><rect x="16" y="13" rx="2" width="4" height="6"></rect><path d="M4 15v-3a8 8 0 0 1 16 0v3"></path><path d="M18 19a6 3 0 0 1 -6 3"></path></svg>
                                    </div>
                                    <div class="col">
                                        Hỗ trợ kỹ thuật 24/7/365
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <strong>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"></path>
                                            </svg>
                                        </strong>

                                    </div>
                                    <div class="col">
                                        <strong>Miễn phí 6 tháng sử dụng</strong>
                                    </div>
                                </div>
                            </fieldset>

                            <a href="dang-ky-nhan-tu-van" class="default-btn w-100 d-block text-center" style="background-color: #e52e56;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="7 10 12 4 17 10"></polyline><path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path><circle cx="12" cy="15" r="2"></circle></svg>
                                Đăng ký sử dụng
                            </a>
                        </div>
                        <div class="ribbon" style="background: #e52e56; border-color: #e52e56;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path><path d="M9 17v1a3 3 0 0 0 6 0v-1"></path><path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727"></path><path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727"></path></svg>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-3">
                    <div class="card secondColor shadow">
                        <div class="card-body py-3 px-3">
                            <div class="row align-items-center border-bottom mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold">
                                        ESOC-1.000
                                    </div>
                                    <div class="text-muted mb-1">
                                        Gói 1.000 hợp đồng
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold" style="font-size:1.85em">
                                        6.800.000
                                    </div>
                                    <div class="text-muted">
                                        VNĐ/Gói
                                    </div>
                                </div>
                            </div>
                            <fieldset class="form-fieldset">
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><rect x="8" y="15" width="2" height="2"></rect></svg>
                                    </div>
                                    <div class="col">
                                        Thời gian lưu trữ: 10 năm
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><polyline points="12 7 12 12 15 15"></polyline></svg>
                                    </div>
                                    <div class="col">
                                        Thời gian sử dụng: Không giới hạn
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 11 12 14 20 6"></polyline><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path></svg>
                                    </div>
                                    <div class="col">
                                        Đáp ứng tiêu chuẩn pháp lý
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7"></path><path d="M11 15v.01m0 3v.01m0 3v.01m4 -4v.01m0 3v.01"></path></svg>
                                    </div>
                                    <div class="col">
                                        Không gian lưu trữ: Đám mây
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><ellipse cx="12" cy="6" rx="8" ry="3"></ellipse><path d="M4 6v6a8 3 0 0 0 16 0v-6"></path><path d="M4 12v6a8 3 0 0 0 16 0v-6"></path></svg>
                                    </div>
                                    <div class="col">
                                        Hệ thống ổ đĩa truy xuất: SSD
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="6 21 21 6 18 3 3 18 6 21"></polyline><line x1="15" y1="6" x2="18" y2="9"></line><path d="M9 3a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2"></path><path d="M19 13a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2"></path></svg>
                                    </div>
                                    <div class="col">
                                        Chi phí khởi tạo: Miễn phí 100%
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="9" r="6"></circle><polyline points="9 14.2 9 21 12 19 15 21 15 14.2" transform="rotate(-30 12 9)"></polyline><polyline points="9 14.2 9 21 12 19 15 21 15 14.2" transform="rotate(30 12 9)"></polyline></svg>
                                    </div>
                                    <div class="col">
                                        Bảo trì, Bản quyền: 500.000 VNĐ/năm
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="13" rx="2" width="4" height="6"></rect><rect x="16" y="13" rx="2" width="4" height="6"></rect><path d="M4 15v-3a8 8 0 0 1 16 0v3"></path><path d="M18 19a6 3 0 0 1 -6 3"></path></svg>
                                    </div>
                                    <div class="col">
                                        Hỗ trợ kỹ thuật 24/7/365
                                    </div>
                                </div>
                            </fieldset>

                            <a href="dang-ky-nhan-tu-van" class="default-btn lineargradient-btn w-100 d-block text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="7 10 12 4 17 10"></polyline><path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path><circle cx="12" cy="15" r="2"></circle></svg>
                                Đăng ký sử dụng
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-3">
                    <div class="card secondColor shadow">
                        <div class="card-body py-3 px-3">
                            <div class="row align-items-center border-bottom mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold">
                                        ESOC-2.000
                                    </div>
                                    <div class="text-muted mb-1">
                                        Gói 2.000 hợp đồng
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold" style="font-size:1.85em">
                                        11.200.000
                                    </div>
                                    <div class="text-muted">
                                        VNĐ/Gói
                                    </div>
                                </div>
                            </div>
                            <fieldset class="form-fieldset">
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><rect x="8" y="15" width="2" height="2"></rect></svg>
                                    </div>
                                    <div class="col">
                                        Thời gian lưu trữ: 10 năm
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><polyline points="12 7 12 12 15 15"></polyline></svg>
                                    </div>
                                    <div class="col">
                                        Thời gian sử dụng: Không giới hạn
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 11 12 14 20 6"></polyline><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path></svg>
                                    </div>
                                    <div class="col">
                                        Đáp ứng tiêu chuẩn pháp lý
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7"></path><path d="M11 15v.01m0 3v.01m0 3v.01m4 -4v.01m0 3v.01"></path></svg>
                                    </div>
                                    <div class="col">
                                        Không gian lưu trữ: Đám mây
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><ellipse cx="12" cy="6" rx="8" ry="3"></ellipse><path d="M4 6v6a8 3 0 0 0 16 0v-6"></path><path d="M4 12v6a8 3 0 0 0 16 0v-6"></path></svg>
                                    </div>
                                    <div class="col">
                                        Hệ thống ổ đĩa truy xuất: SSD
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="6 21 21 6 18 3 3 18 6 21"></polyline><line x1="15" y1="6" x2="18" y2="9"></line><path d="M9 3a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2"></path><path d="M19 13a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2"></path></svg>
                                    </div>
                                    <div class="col">
                                        Chi phí khởi tạo: Miễn phí 100%
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="9" r="6"></circle><polyline points="9 14.2 9 21 12 19 15 21 15 14.2" transform="rotate(-30 12 9)"></polyline><polyline points="9 14.2 9 21 12 19 15 21 15 14.2" transform="rotate(30 12 9)"></polyline></svg>
                                    </div>
                                    <div class="col">
                                        Bảo trì, Bản quyền: 500.000 VNĐ/năm
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="13" rx="2" width="4" height="6"></rect><rect x="16" y="13" rx="2" width="4" height="6"></rect><path d="M4 15v-3a8 8 0 0 1 16 0v3"></path><path d="M18 19a6 3 0 0 1 -6 3"></path></svg>
                                    </div>
                                    <div class="col">
                                        Hỗ trợ kỹ thuật 24/7/365
                                    </div>
                                </div>
                            </fieldset>

                            <a href="dang-ky-nhan-tu-van" class="default-btn lineargradient-btn w-100 d-block text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="7 10 12 4 17 10"></polyline><path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path><circle cx="12" cy="15" r="2"></circle></svg>
                                Đăng ký sử dụng
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-3">
                    <div class="card secondColor shadow">
                        <div class="card-body py-3 px-3">
                            <div class="row align-items-center border-bottom mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold">
                                        ESOC-5.000
                                    </div>
                                    <div class="text-muted mb-1">
                                        Gói 5.000 hợp đồng
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold" style="font-size:1.85em">
                                        19.000.000
                                    </div>
                                    <div class="text-muted">
                                        VNĐ/Gói
                                    </div>
                                </div>
                            </div>
                            <fieldset class="form-fieldset">
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><rect x="8" y="15" width="2" height="2"></rect></svg>
                                    </div>
                                    <div class="col">
                                        Thời gian lưu trữ: 10 năm
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><polyline points="12 7 12 12 15 15"></polyline></svg>
                                    </div>
                                    <div class="col">
                                        Thời gian sử dụng: Không giới hạn
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 11 12 14 20 6"></polyline><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path></svg>
                                    </div>
                                    <div class="col">
                                        Đáp ứng tiêu chuẩn pháp lý
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7"></path><path d="M11 15v.01m0 3v.01m0 3v.01m4 -4v.01m0 3v.01"></path></svg>
                                    </div>
                                    <div class="col">
                                        Không gian lưu trữ: Đám mây
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><ellipse cx="12" cy="6" rx="8" ry="3"></ellipse><path d="M4 6v6a8 3 0 0 0 16 0v-6"></path><path d="M4 12v6a8 3 0 0 0 16 0v-6"></path></svg>
                                    </div>
                                    <div class="col">
                                        Hệ thống ổ đĩa truy xuất: SSD
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="6 21 21 6 18 3 3 18 6 21"></polyline><line x1="15" y1="6" x2="18" y2="9"></line><path d="M9 3a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2"></path><path d="M19 13a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2"></path></svg>
                                    </div>
                                    <div class="col">
                                        Chi phí khởi tạo: Miễn phí 100%
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="9" r="6"></circle><polyline points="9 14.2 9 21 12 19 15 21 15 14.2" transform="rotate(-30 12 9)"></polyline><polyline points="9 14.2 9 21 12 19 15 21 15 14.2" transform="rotate(30 12 9)"></polyline></svg>
                                    </div>
                                    <div class="col">
                                        Bảo trì, Bản quyền: 500.000 VNĐ/năm
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="13" rx="2" width="4" height="6"></rect><rect x="16" y="13" rx="2" width="4" height="6"></rect><path d="M4 15v-3a8 8 0 0 1 16 0v3"></path><path d="M18 19a6 3 0 0 1 -6 3"></path></svg>
                                    </div>
                                    <div class="col">
                                        Hỗ trợ kỹ thuật 24/7/365
                                    </div>
                                </div>
                            </fieldset>

                            <a href="dang-ky-nhan-tu-van" class="default-btn lineargradient-btn w-100 d-block text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="7 10 12 4 17 10"></polyline><path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path><circle cx="12" cy="15" r="2"></circle></svg>
                                Đăng ký sử dụng
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-3">
                    <div class="card secondColor shadow">
                        <div class="card-body py-3 px-3">
                            <div class="row align-items-center border-bottom mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold">
                                        ESOC-10.000
                                    </div>
                                    <div class="text-muted mb-1">
                                        Gói 10.000 hợp đồng
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold" style="font-size:1.85em">
                                        Liên hệ
                                    </div>
                                    <div class="text-muted">
                                        VNĐ/Gói
                                    </div>
                                </div>
                            </div>
                            <fieldset class="form-fieldset">
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><rect x="8" y="15" width="2" height="2"></rect></svg>
                                    </div>
                                    <div class="col">
                                        Thời gian lưu trữ: 10 năm
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><polyline points="12 7 12 12 15 15"></polyline></svg>
                                    </div>
                                    <div class="col">
                                        Thời gian sử dụng: Không giới hạn
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 11 12 14 20 6"></polyline><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path></svg>
                                    </div>
                                    <div class="col">
                                        Đáp ứng tiêu chuẩn pháp lý
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7"></path><path d="M11 15v.01m0 3v.01m0 3v.01m4 -4v.01m0 3v.01"></path></svg>
                                    </div>
                                    <div class="col">
                                        Không gian lưu trữ: Đám mây
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><ellipse cx="12" cy="6" rx="8" ry="3"></ellipse><path d="M4 6v6a8 3 0 0 0 16 0v-6"></path><path d="M4 12v6a8 3 0 0 0 16 0v-6"></path></svg>
                                    </div>
                                    <div class="col">
                                        Hệ thống ổ đĩa truy xuất: SSD
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="6 21 21 6 18 3 3 18 6 21"></polyline><line x1="15" y1="6" x2="18" y2="9"></line><path d="M9 3a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2"></path><path d="M19 13a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2"></path></svg>
                                    </div>
                                    <div class="col">
                                        Chi phí khởi tạo: Miễn phí 100%
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="9" r="6"></circle><polyline points="9 14.2 9 21 12 19 15 21 15 14.2" transform="rotate(-30 12 9)"></polyline><polyline points="9 14.2 9 21 12 19 15 21 15 14.2" transform="rotate(30 12 9)"></polyline></svg>
                                    </div>
                                    <div class="col">
                                        Bảo trì, Bản quyền: 500.000 VNĐ/năm
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="13" rx="2" width="4" height="6"></rect><rect x="16" y="13" rx="2" width="4" height="6"></rect><path d="M4 15v-3a8 8 0 0 1 16 0v3"></path><path d="M18 19a6 3 0 0 1 -6 3"></path></svg>
                                    </div>
                                    <div class="col">
                                        Hỗ trợ kỹ thuật 24/7/365
                                    </div>
                                </div>
                            </fieldset>

                            <a href="dang-ky-nhan-tu-van" class="default-btn lineargradient-btn w-100 d-block text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="7 10 12 4 17 10"></polyline><path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path><circle cx="12" cy="15" r="2"></circle></svg>
                                Đăng ký sử dụng
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <section id="cta" class="cta">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-lg">
                    <h3 class="text-h1">ESOC giúp doanh nghiệp chuyển đổi số thành công</h3>
                    <p class="mb-3">Nền tảng giúp Doanh nghiệp số hóa quy trình quản lý và ký kết tài liệu thay thế cho phương pháp truyền thống.<br>Tính năng dễ sử dụng, ký hợp đồng từ xa, mọi lúc, mọi nơi</p>
                </div>
                <div class="col-lg-auto align-self-center btn-dkynhantuvan">
                    <a href="/dang-ky-nhan-tu-van" class="default-btn bg-firstColor py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="13" rx="2" width="4" height="6"></rect><rect x="16" y="13" rx="2" width="4" height="6"></rect><path d="M4 15v-3a8 8 0 0 1 16 0v3"></path><path d="M18 19a6 3 0 0 1 -6 3"></path></svg>
                        Đăng ký nhận tư vấn
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content">
        <div class="container-xl">
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h1 class="text-h1">Bảng giá chữ ký số USB Token</h1>
                    <p>Hãy chọn gói dịch vụ phù hợp với doanh nghiệp của bạn</p>
                </div>
            </div>
            <div class="row row-cards row-deck">
                @forelse ($usbtoken as $item)
                <div class="col-sm-4 p-3">
                    <div class="card secondColor shadow">
                        <div class="card-body py-3 px-3">
                            <div class="row align-items-center border-bottom mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold mb-2">
                                        {{ $item->package_name }}
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold" style="font-size:1.85em">
                                        {{ number_format($item->package_price, 0, ',', '.') }}
                                    </div>
                                    <div class="text-muted">
                                        VNĐ/Gói
                                    </div>
                                </div>
                            </div>
                            <fieldset class="form-fieldset">
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><rect x="8" y="15" width="2" height="2"></rect></svg>
                                    </div>
                                    <div class="col">
                                        Thời hạn: {{ $item->package_price }} tháng
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><polyline points="12 7 12 12 15 15"></polyline></svg>
                                    </div>
                                    <div class="col">
                                        Phí dịch vụ: {{ number_format($item->service_fee, 0, ',', '.') }}VNĐ
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 11 12 14 20 6"></polyline><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path></svg>
                                    </div>
                                    <div class="col">
                                        USB Token: {{ $item->usb_token_price > 0 ? number_format($item->service_fee, 0, ',', '.') : 'Miễn phí' }}VNĐ
                                    </div>
                                </div>
                            </fieldset>
                            <a href="dang-ky-nhan-tu-van" class="default-btn lineargradient-btn w-100 d-block text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="7 10 12 4 17 10"></polyline><path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path><circle cx="12" cy="15" r="2"></circle></svg>
                                Đăng ký sử dụng
                            </a>
                        </div>
                    </div>
                </div>
                @empty

                @endforelse
                {{-- <div class="col-sm-4 p-3">
                    <div class="card shadow bg-teal-lt" style="border: 1px solid #0ca678">
                        <div class="card-body py-3 px-3">
                            <div class="row align-items-center border-bottom mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold mb-2">
                                        DOANH NGHIỆP 2
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold" style="font-size:1.85em">
                                        2.480.000
                                    </div>
                                    <div class="text-muted">
                                        VNĐ/Gói
                                    </div>
                                </div>
                            </div>
                            <fieldset class="form-fieldset">
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><rect x="8" y="15" width="2" height="2"></rect></svg>
                                    </div>
                                    <div class="col">
                                        Thời hạn: 24 tháng
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><polyline points="12 7 12 12 15 15"></polyline></svg>
                                    </div>
                                    <div class="col">
                                        Phí dịch vụ: 1.980.000VNĐ
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 11 12 14 20 6"></polyline><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path></svg>
                                    </div>
                                    <div class="col">
                                        USB Token: 500.000VNĐ
                                    </div>
                                </div>
                            </fieldset>
                            <a href="dang-ky-nhan-tu-van" class="btn btn-teal w-100 d-block text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="7 10 12 4 17 10"></polyline><path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path><circle cx="12" cy="15" r="2"></circle></svg>
                                Đăng ký sử dụng
                            </a>
                        </div>
                        <div class="ribbon bg-teal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path><path d="M9 17v1a3 3 0 0 0 6 0v-1"></path><path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727"></path><path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727"></path></svg>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-3">
                    <div class="card secondColor shadow">
                        <div class="card-body py-3 px-3">
                            <div class="row align-items-center border-bottom mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold mb-2">
                                        DOANH NGHIỆP 3
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold" style="font-size:1.85em">
                                        2.800.000
                                    </div>
                                    <div class="text-muted">
                                        VNĐ/Gói
                                    </div>
                                </div>
                            </div>
                            <fieldset class="form-fieldset">
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><rect x="8" y="15" width="2" height="2"></rect></svg>
                                    </div>
                                    <div class="col">
                                        Thời hạn: 36 tháng
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><polyline points="12 7 12 12 15 15"></polyline></svg>
                                    </div>
                                    <div class="col">
                                        Phí dịch vụ: 2.800.000VNĐ
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 11 12 14 20 6"></polyline><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path></svg>
                                    </div>
                                    <div class="col">
                                        USB Token: Miễn phí
                                    </div>
                                </div>
                            </fieldset>
                            <a href="dang-ky-nhan-tu-van" class="default-btn lineargradient-btn w-100 d-block text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="7 10 12 4 17 10"></polyline><path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path><circle cx="12" cy="15" r="2"></circle></svg>
                                Đăng ký sử dụng
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>


    <div class="content">
        <div class="container-xl">
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h1 class="text-h1">Bảng giá Chứng thư số giành cho máy chủ và HSM</h1>
                    <p>Hãy chọn gói dịch vụ phù hợp với doanh nghiệp của bạn</p>
                </div>
            </div>
            <div class="row row-cards row-deck">
                @forelse ($certificate as $item)
                <div class="col-sm-4 p-3">
                    <div class="card secondColor shadow">
                        <div class="card-body py-3 px-3">
                            <div class="row align-items-center border-bottom mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold mb-2">
                                       {{ $item->package_name }}
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold" style="font-size:1.85em">
                                        {{ number_format($item->package_price, 0, ',', '.') }}
                                    </div>
                                    <div class="text-muted">
                                        VNĐ/Gói
                                    </div>
                                </div>
                            </div>
                            <fieldset class="form-fieldset">
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><rect x="8" y="15" width="2" height="2"></rect></svg>
                                    </div>
                                    <div class="col">
                                        Thời hạn: {{ $item->duration }} tháng
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><polyline points="12 7 12 12 15 15"></polyline></svg>
                                    </div>
                                    <div class="col">
                                        Phí dịch vụ:  {{ number_format($item->service_fee, 0, ',', '.') }}VNĐ
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 11 12 14 20 6"></polyline><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path></svg>
                                    </div>
                                    <div class="col">
                                        10% vat: {{ number_format($item->service_fee*10/100, 0, ',', '.') }}VNĐ
                                    </div>
                                </div>
                            </fieldset>
                            <a href="dang-ky-nhan-tu-van" class="default-btn lineargradient-btn w-100 d-block text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="7 10 12 4 17 10"></polyline><path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path><circle cx="12" cy="15" r="2"></circle></svg>
                                Đăng ký sử dụng
                            </a>
                        </div>
                    </div>
                </div>
                @empty

                @endforelse

                {{-- <div class="col-sm-4 p-3">
                    <div class="card shadow bg-teal-lt" style="border: 1px solid #0ca678">
                        <div class="card-body py-3 px-3">
                            <div class="row align-items-center border-bottom mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold mb-2">
                                        GÓI CƯỚC 2
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold" style="font-size:1.85em">
                                        7.590.000
                                    </div>
                                    <div class="text-muted">
                                        VNĐ/Gói
                                    </div>
                                </div>
                            </div>
                            <fieldset class="form-fieldset">
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><rect x="8" y="15" width="2" height="2"></rect></svg>
                                    </div>
                                    <div class="col">
                                        Thời hạn: 24 tháng
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><polyline points="12 7 12 12 15 15"></polyline></svg>
                                    </div>
                                    <div class="col">
                                        Phí dịch vụ: 6.900.000VNĐ
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 11 12 14 20 6"></polyline><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path></svg>
                                    </div>
                                    <div class="col">
                                        10% VAT: 690.000VNĐ
                                    </div>
                                </div>
                            </fieldset>
                            <a href="dang-ky-nhan-tu-van" class="btn btn-teal w-100 d-block text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="7 10 12 4 17 10"></polyline><path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path><circle cx="12" cy="15" r="2"></circle></svg>
                                Đăng ký sử dụng
                            </a>
                        </div>
                        <div class="ribbon bg-teal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path><path d="M9 17v1a3 3 0 0 0 6 0v-1"></path><path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727"></path><path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727"></path></svg>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-3">
                    <div class="card secondColor shadow">
                        <div class="card-body py-3 px-3">
                            <div class="row align-items-center border-bottom mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold mb-2">
                                        GÓI CƯỚC 3
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col-12 text-center">
                                    <div class="font-weight-bold" style="font-size:1.85em">
                                        9.790.000
                                    </div>
                                    <div class="text-muted">
                                        VNĐ/Gói
                                    </div>
                                </div>
                            </div>
                            <fieldset class="form-fieldset">
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><rect x="8" y="15" width="2" height="2"></rect></svg>
                                    </div>
                                    <div class="col">
                                        Thời hạn: 36 tháng
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><polyline points="12 7 12 12 15 15"></polyline></svg>
                                    </div>
                                    <div class="col">
                                        Phí dịch vụ: 8.900.000VNĐ
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 11 12 14 20 6"></polyline><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path></svg>
                                    </div>
                                    <div class="col">
                                        10% VAT: 890.000VNĐ
                                    </div>
                                </div>
                            </fieldset>
                            <a href="dang-ky-nhan-tu-van" class="default-btn lineargradient-btn w-100 d-block text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="7 10 12 4 17 10"></polyline><path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path><circle cx="12" cy="15" r="2"></circle></svg>
                                Đăng ký sử dụng
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="content section-top-border bg-light">
        <div class="container-xl">
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h2 class="text-h1">Lợi ích khi sử dụng phần mềm ESOC</h2>
                    <p>Cùng ESOC thay đổi phương thức ký kết truyền thống, xây dựng doanh nghiệp chuyển đổi số không giấy tờ</p>
                </div>
                <div class="col-12 text-center">
                    <img src="https://esoc.vn/Assets/Images/Index/loi_ich.png" class="img-fluid" style="width:45%;" alt="Lợi ích">
                </div>
            </div>
            <div class="row row-cards">
                <div class="col-sm-6">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <span class="bg-firstColor avatar avatar-rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><polyline points="12 7 12 12 15 15"></polyline></svg>
                            </span>
                        </div>
                        <div class="col">
                            <h3 class="text-h2 mb-1">
                                Tối ưu thời gian triển khai phần mềm
                            </h3>
                            <p>
                                ESOC giúp Doanh nghiệp tiếp cận, vận hành chuyển đổi số một cách dễ dàng và nhanh chóng. Ngoài ra doanh nghiệp được tư vấn, xây dựng giải pháp phù hợp, tiết kiệm thời gian triển khai
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <span class="bg-firstColor avatar avatar-rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="3" y1="21" x2="21" y2="21"></line><path d="M5 21v-14l8 -4v18"></path><path d="M19 21v-10l-6 -4"></path><line x1="9" y1="9" x2="9" y2="9.01"></line><line x1="9" y1="12" x2="9" y2="12.01"></line><line x1="9" y1="15" x2="9" y2="15.01"></line><line x1="9" y1="18" x2="9" y2="18.01"></line></svg>
                            </span>
                        </div>
                        <div class="col">
                            <h3 class="text-h2 mb-1">
                                Phù hợp với mọi loại hình doanh nghiệp
                            </h3>
                            <p>
                                Phần mềm ESOC quản lý theo mô hình tập trung hoặc phân tán phù hợp với đa dạng mô hình doanh nghiệp tại Việt Nam: Doanh nghiệp SME, FDI, Doanh nghiệp có nhiều chi nhánh
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <span class="bg-firstColor avatar avatar-rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"></polyline><line x1="12" y1="12" x2="20" y2="7.5"></line><line x1="12" y1="12" x2="12" y2="21"></line><line x1="12" y1="12" x2="4" y2="7.5"></line><line x1="16" y1="5.25" x2="8" y2="9.75"></line></svg>
                            </span>
                        </div>
                        <div class="col">
                            <h3 class="text-h2 mb-1">
                                Dễ dàng tích hợp với các phần mềm có sẵn
                            </h3>
                            <p>
                                Hỗ trợ tích hợp truyền nhận dữ liệu từ các hệ thống SAP, ERP, CRM, HR, phần mềm kế toán, ...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <span class="bg-firstColor avatar avatar-rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2"></path><path d="M12 3v3m0 12v3"></path></svg>
                            </span>
                        </div>
                        <div class="col">
                            <h3 class="text-h2 mb-1">
                                Tiết kiệm chi phí tối đa
                            </h3>
                            <p>
                                ESOC giúp doanh nghiệp: Không chi phí in ấn, lưu trữ; Không cần đầu tư phần cứng, phần mềm; Tiện lợi quản lý, lưu trữ và tìm kiếm; Vượt trội so với đối thủ cạnh tranh, nâng cao sự chuyên nghiệp với khách hàng.
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <span class="bg-firstColor avatar avatar-rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="15" cy="15" r="3"></circle><path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path><path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path><line x1="6" y1="9" x2="18" y2="9"></line><line x1="6" y1="12" x2="9" y2="12"></line><line x1="6" y1="15" x2="8" y2="15"></line></svg>
                            </span>
                        </div>
                        <div class="col">
                            <h3 class="text-h2 mb-1">
                                Tuân thủ Pháp lý, Bảo mật và an toàn
                            </h3>
                            <p>
                                Đáp ứng đầy đủ tính pháp lý về giao dịch điện tử xác thực điện tử. Áp dụng công nghệ Blockchain nâng cao bảo mật chống làm giả hợp đồng, đáp ứng mọi thiết bị USB Token
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <span class="bg-firstColor avatar avatar-rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="13" rx="2" width="4" height="6"></rect><rect x="16" y="13" rx="2" width="4" height="6"></rect><path d="M4 15v-3a8 8 0 0 1 16 0v3"></path><path d="M18 19a6 3 0 0 1 -6 3"></path></svg>
                            </span>
                        </div>
                        <div class="col">
                            <h3 class="text-h2 mb-1">
                                Hỗ trợ chuyên nghiệp, tận tình 24/7/365
                            </h3>
                            <p>
                                Với đội ngũ chuyên gia giàu kinh nghiệm, sẵn sàng tư vấn, hỗ trợ doanh nghiệp 24/7/365 trong quá trình triển khai chuyển đổi số
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row row-cards">
                <div class="col-lg-9 text-left">
                    <h3 class="text-h1">Pháp lý hợp đồng điện tử</h3>
                    <div class="row mb-2">
                        <div class="col-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-helpdesk text-blue" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><path d="M9 12l2 2l4 -4"></path></svg>
                        </div>
                        <div class="col">
                            Luật giao dịch điện tử số 51/2005/QH11 ngày 29/11/2005 quy định về giao dịch điện tử trong lĩnh vực dân sự, kinh doanh, thương mại và các lĩnh vực khác.
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-helpdesk text-blue" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><path d="M9 12l2 2l4 -4"></path></svg>
                        </div>
                        <div class="col">
                            Bộ Luật Lao động 2019 ghi nhận hình thức hợp đồng lao động điện tử
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-helpdesk text-blue" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><path d="M9 12l2 2l4 -4"></path></svg>
                        </div>
                        <div class="col">
                            Đáp ứng mọi thiết bị USB Token
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <img src="https://esoc.vn/Assets/Images/Index/co-so-phap-ly.png" class="w-100" alt="Pháp lý hợp đồng điện tử">
                </div>
            </div>

        </div>
    </section>
@endsection
