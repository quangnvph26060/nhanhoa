<div class="section-footer-top">
    <div class="container">
        <div class="item-list-footer item-list-footer-one d-none d-md-block d-lg-block">
            <div class="row">
                {{-- <div class="col-lg-3 col-md-4 col-6">
                    <div class="item-menu-footer">
                        <div class="title-footer">
                            Công ty
                        </div>
                        <ul>
                            <li>
                                <a href="https://nhanhoa.com/gioi-thieu.html">
                                    Giới thiệu về Công ty
                                </a>
                            </li>
                           <li>
                                <a href="https://nhanhoa.com/tuyen-dung.html">
                                    Tuyển dụng
                                </a>
                            </li>
                            <li>
                                <a href="https://nhanhoa.com/lien-he.html">
                                    Liên hệ
                                </a>
                            </li>

                            <li>
                                <a href="https://nhanhoa.com/trang/chinh-sach-dai-ly.html">
                                    Chính sách Đại lý
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="item-menu-footer">
                        <div class="title-footer">
                            Tin tức
                        </div>
                        <ul>
                            <li>
                                <a href="https://nhanhoa.com/uu-dai-nhan-hoa.html">
                                    Chương trình ưu đãi
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://wiki.nhanhoa.com/">
                                    Tin công nghệ
                                </a>
                            </li>
                            <li>
                                <a href="https://nhanhoa.com/tin-tuc.html">
                                    Tin tức
                                </a>
                            </li>


                        </ul>
                    </div>
                </div> --}}
                @forelse ($footers as $item )
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="item-menu-footer">
                        <div class="title-footer">
                            {{ $item->title }}
                        </div>
                        <ul>
                            @forelse ($item->new as $new )

                            <li>
                                <a  href="{{ route('page.news-detail', ['slug'=>$new->new->slug, 'id'=>$new->new->id]) }}"
                                    title=""><span> {{ $new->new->title }}</span></a>
                            </li>
                            @empty

                            @endforelse
                            {{-- <li>
                                <a href="https://nhanhoa.com/tin-tuc/huong-dan-thu-tuc-bo-sung-ban-khai-dang-ky-ten-mien-qua-ho-so-dien-tu.html"
                                    title=""><span>Hướng dẫn hoàn thiện hồ sơ tên miền
                                        .VN</span></a>
                            </li>
                            <li>
                                <a href="https://nhanhoa.com/tin-tuc/quy-trinh-giai-quyet-khieu-nai-khach-hang.html"
                                    title=""><span>Quy trình giải quyết khiếu nại</span></a>
                            </li> --}}
                            <!--li>
                        <a href="https://nhanhoa.com/trang/download-van-ban.html" title=""><span>Download văn bản</span></a>
                    </li -->




                        </ul>
                    </div>
                </div>
                @empty

                @endforelse

                {{-- <div class="col-lg-3 col-md-4 col-6">
                    <div class="item-menu-footer">
                        <div class="title-footer">
                            Quy định &amp; Chính sách
                        </div>
                        <ul>

                            <li>
                                <a href="https://nhanhoa.com/tin-tuc/quy-dinh-su-dung-dich-vu.html"
                                    title=""><span>Quy định sử dụng dịch vụ</span></a>
                            </li>
                            <li>
                                <a href="https://nhanhoa.com/tin-tuc/quy-dinh-su-dung-ten-mien.html"
                                    title=""><span>Quy định sử dụng tên miền</span></a>
                            </li>
                            <li>
                                <a href="https://nhanhoa.com/tin-tuc/quy-dinh-doi-tra-va-hoan-tien.html"
                                    title=""><span>Quy định đổi trả &amp; hoàn trả tiền</span></a>
                            </li>


                            <li>
                                <a href="https://nhanhoa.com/tin-tuc/chinh-sach-bao-mat-thong-tin-information-privacy-policy.html"
                                    title=""><span>Chính sách bảo mật thông tin</span></a>
                            </li>
                            <li>
                                <a href="https://nhanhoa.com/tin-tuc/legal-agreements.html"
                                    title=""><span>Legal
                                        Agreements</span></a>
                            </li>



                        </ul>
                    </div>

                </div>

                <div class="col-lg-3 col-md-4 col-6">

                    <div class="item-menu-footer">
                        <div class="title-footer">
                            Ứng dụng
                        </div>
                        <ul class="logo-app-footer">
                            <li>
                                <a target="_blank" href="https://nhanhoa.com/nhan-hoa-app.html">
                                    Giới thiệu Chúng Tôi App
                                </a>
                            </li>
                            <li>
                                <a href="https://apps.apple.com/vn/app/nh%C3%A2n-ho%C3%A0/id1469246570"
                                    target="_blank">
                                    <img src="https://nhanhoa.com/templates/images/v2/app_store.png">
                                </a>
                            </li>
                            <li>
                                <a href="https://play.google.com/store/apps/details?id=com.nh.domain&amp;hl=vi"
                                    target="_blank">
                                    <img src="https://nhanhoa.com/templates/images/v2/google_play.png">
                                </a>
                            </li>
                        </ul>
                        <ul class="logo-app-footer">
                            <li>
                                <a target="_blank" href="https://muabandomain.com/">
                                    Giới thiệu Sàn tên miền
                                </a>
                            </li>
                            <li>
                                <a href="https://apps.apple.com/vn/app/s%C3%A0n-domain/id6446716327"
                                    target="_blank">
                                    <img src="https://nhanhoa.com/templates/images/v2/app_store.png">
                                </a>
                            </li>
                            <li>
                                <a href="https://play.google.com/store/apps/details?id=com.nhanhoa.muabandomain"
                                    target="_blank">
                                    <img src="https://nhanhoa.com/templates/images/v2/google_play.png">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="item-list-footer mb-0">
            <div class="row">

                <div class="col-lg-12">
                    <div class="item-menu-footer">

                        {{-- <div class="footer-inline-icon">
                            <span>Kết nối mạng xã hội cùng Chúng Tôi</span>
                            <ul class="list-img-fanpage">
                                <li>
                                    <a href="https://www.facebook.com/nhanhoacom" target="_blank">
                                        <img src="https://nhanhoa.com/templates/images/v2/footer/icon_facebook.png"
                                            alt="facebook">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/nhanhoagroup" target="_blank">
                                        <img src="https://nhanhoa.com/templates/images/v2/footer/icon_twitter.png"
                                            alt="twitter">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCB_gZGsKMNdPCkDyu-mEsAQ"
                                        target="_blank">
                                        <img src="https://nhanhoa.com/templates/images/v2/footer/icon_youtube.png"
                                            alt="Youtube">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/nhan-hoa-software-company"
                                        target="_blank">
                                        <img src="https://nhanhoa.com/templates/images/v2/footer/icon_in.png"
                                            alt="In">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://zalo.me/220654257120240702" target="_blank">
                                        <img src="https://nhanhoa.com/templates/images/v2/footer/icon_zalo.png"
                                            alt="zalo">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://t.me/nhanhoacom" target="_blank">
                                        <img src="https://nhanhoa.com/templates/images/v2/footer/icon_telegram.png"
                                            alt="telegram">
                                    </a>
                                </li>
                                <li class="d-none">
                                    <a href="/" target="_blank">
                                        <img src="https://nhanhoa.com/templates/images/v2/footer/icon_skype.png"
                                            alt="skype">
                                    </a>
                                </li>
                                <li class="d-none">
                                    <a href="https://www.instagram.com/nhanhoa.official/" target="_blank">
                                        <img src="https://nhanhoa.com/templates/images/v2/footer/icon_instagram.png"
                                            alt="instagram">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.tiktok.com/@nhanhoa_official" target="_blank">
                                        <img src="https://nhanhoa.com/templates/images/v2/footer/icon_tiktok.png"
                                            alt="tiktok">
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
