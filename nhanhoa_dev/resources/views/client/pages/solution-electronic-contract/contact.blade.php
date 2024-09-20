@extends('client/pages/solution-electronic-contract/master')

@section('content')
    <form action="/dang-ky-nhan-tu-van" id="formgr" method="post" role="form" novalidate="novalidate"><input
            name="__RequestVerificationToken" type="hidden"
            value="NUMaKGqaaTeXlPIFY1bx0z800qM_-pl1ZTXLvL7isHlKhOzpMvRPEzrOL9dxw2zlWWheIugYlYoXQfstyl45XwxOTLS-RlJbe-BUlmHKx9Y1">
        <div class="content">
            <div class="tracuu-bg"></div>
            <div class="container-xl">
                <div class="tracuu-content">
                    <div class="row row-cards row-deck">
                        <div class="col-lg-8">
                            <div class="card card-md shadow">
                                <div class="card-header bg-light">
                                    <div class="text-h2 font-weight-bold">Đăng ký nhận tư vấn</div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group mb-3 row">
                                        <label class="form-label col-md-3 col-form-label font-weight-normal required">Khu
                                            vực</label>
                                        <div class="col-md-9">
                                            <select class="form-control form-select" data-val="true"
                                                data-val-required="Không được trống" id="KhuVuc" name="KhuVuc">
                                                <option value="">-Chọn-</option>
                                                <option value="6jqmS1Mz7jI=">Miền Bắc</option>
                                                <option value="qquThyV4kAI=">Miền Trung</option>
                                                <option value="e4fO8-1tlVA=">Miền Nam</option>
                                            </select>
                                            <span class="field-validation-valid text-danger" data-valmsg-for="KhuVuc"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="form-label col-md-3 col-form-label font-weight-normal required">Họ và
                                            tên</label>
                                        <div class="col-md-9">
                                            <input class="form-control" data-val="true"
                                                data-val-maxlength="Không được vượt quá 100 ký tự"
                                                data-val-maxlength-max="100" data-val-required="Không được trống"
                                                id="HoVaTen" maxlength="100" name="HoVaTen" type="text" value="">
                                            <span class="field-validation-valid text-danger " data-valmsg-for="HoVaTen"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="form-label col-md-3 col-form-label font-weight-normal required">Số
                                            điện thoại</label>
                                        <div class="col-md-9">
                                            <input class="form-control" data-val="true"
                                                data-val-maxlength="Không được vượt quá 20 ký tự"
                                                data-val-maxlength-max="20"
                                                data-val-required="Vui lòng cung cấp số điện thoại" id="SoDienThoai"
                                                maxlength="20" name="SoDienThoai" type="text" value="">
                                            <span class="field-validation-valid text-danger " data-valmsg-for="SoDienThoai"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="form-label col-md-3 col-form-label font-weight-normal required">Địa
                                            chỉ email</label>
                                        <div class="col-md-9">
                                            <input class="form-control" data-val="true"
                                                data-val-maxlength="Không được vượt quá 255 ký tự"
                                                data-val-maxlength-max="255" data-val-regex="Email sai định dạng"
                                                data-val-regex-pattern="\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"
                                                data-val-required="Không được trống" id="Email" maxlength="255"
                                                name="Email" type="text" value="">
                                            <span class="field-validation-valid text-danger " data-valmsg-for="Email"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label
                                            class="form-label col-md-3 col-form-label font-weight-normal pt-0 required">Nội
                                            dung yêu cầu</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control autosize" cols="40" data-val="true"
                                                data-val-maxlength="Không được vượt quá 3000 ký tự" data-val-maxlength-max="3000"
                                                data-val-required="Không được trống" id="NoiDungYeuCau" maxlength="3000" name="NoiDungYeuCau" rows="5"></textarea>
                                            <span class="field-validation-valid text-danger "
                                                data-valmsg-for="NoiDungYeuCau" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>


                                    <div class="form-group row d-flex align-items-center">
                                        {{-- <div class="col-md-3">

                                        </div>
                                        <div class="col-sm-12 col-md-auto">
                                            <div id="dvCaptcha" class="mt-3 d-flex justify-content-center">
                                                <div style="width: 304px; height: 78px;">
                                                    <div><iframe title="reCAPTCHA" width="304" height="78"
                                                            role="presentation" name="a-utq271ym8y35" frameborder="0"
                                                            scrolling="no"
                                                            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                                            src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdfINInAAAAALwUWoGIvMPXD41bIP5V28ysGBxG&amp;co=aHR0cHM6Ly9lc29jLnZuOjQ0Mw..&amp;hl=vi&amp;v=EGbODne6buzpTnWrrBprcfAY&amp;size=normal&amp;cb=cm019r3cgpu8"></iframe>
                                                    </div>
                                                    <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"
                                                        style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                </div><iframe style="display: none;"></iframe>
                                            </div>
                                            <input type="hidden" id="hfCaptcha">
                                            <span id="rfvCaptcha" class="eror warning" style="display:none">Xác thực
                                                captcha.</span>
                                            <br>
                                        </div> --}}
                                        <div class="col-auto ms-auto">
                                            <button type="button" class="default-btn lineargradient-btn btn-valid">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <rect x="4" y="13" rx="2" width="4" height="6">
                                                    </rect>
                                                    <rect x="16" y="13" rx="2" width="4" height="6">
                                                    </rect>
                                                    <path d="M4 15v-3a8 8 0 0 1 16 0v3"></path>
                                                    <path d="M18 19a6 3 0 0 1 -6 3"></path>
                                                </svg>
                                                Gửi yêu cầu
                                            </button>
                                            <button type="submit" class="hidden" id="btn-submit">

                                            </button>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row row-cards">
                                <div class="col-12">
                                    <div class="card bg-transparent border-0 shadow-none">
                                        <div class="card-header text-white">
                                            <div class="text-h2 font-weight-bold">Thông tin hợp đồng điện tử</div>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" class="nav-link-search">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <circle cx="12" cy="12" r="4"></circle>
                                                </svg>
                                                Hợp đồng điện tử là gì?
                                            </a>
                                            <a href="#" class="nav-link-search">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <circle cx="12" cy="12" r="4"></circle>
                                                </svg>
                                                Các câu hỏi thường gặp
                                            </a>
                                            <a href="#" class="nav-link-search">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <circle cx="12" cy="12" r="4"></circle>
                                                </svg>
                                                Quy trình giao kết trên ESOC
                                            </a>
                                            <a href="/van-ban-hop-dong-dien-tu" class="nav-link-search">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <circle cx="12" cy="12" r="4"></circle>
                                                </svg>
                                                Văn bản pháp lý quy định
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-center mt-3">
                                        <img src="https://esoc.vn/Assets/Images/Index/lien_he.png" class="img-fluid"
                                            alt="Liên hệ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
