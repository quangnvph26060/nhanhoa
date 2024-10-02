<div class="section-footer-bottom">
    <div class="container">
        <div class="item">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="info-contact-website">
                        <div class="logo-footer">
                            <a href="{{ route('page.home') }}">
                                <img class="nh-lazyload ls-is-cached lazyloaded"
                                    src="{{ asset($config->logo) }}"
                                    data-src="{{ asset($config->logo) }}"
                                    alt="{{ $config->store_name }}">
                            </a>
                        </div>
                        <div class="info">
                            <p>
                                {{ $config->footer }}
                            </p>
                            <p class="d-none d-md-block">
                               {{ $config->store_name }}. Đại diện: {{ $config->receiver }}
                            </p>
                            <p class="d-none d-md-block">
                                {{ $config->giayphep }}
                            </p>
                            <p style="margin: 0;">
                                <a href="javascript:;" class="">
                                    <img alt="ICANN" src="https://nhanhoa.com/public/icann-logo-2.png"
                                        style="max-width: 55px;">
                                </a>
                                <a href="javascript:;" class="">
                                    <img alt="VNNIC" src="https://nhanhoa.com/public/vnnic-logo.svg"
                                        style="max-width: 90px;">
                                </a>
                                <a class=""
                                    href="https://cloud.withgoogle.com/partners/detail/?id=nhan-hoa-software-company-ltd&amp;hl=vi"
                                    target="_blank">
                                    <img alt="google-cloud-partner"
                                        src="https://nhanhoa.com/public/google-cloud-partner.jpg"
                                        style="max-width: 100px;">
                                </a>
                                <a href="http://online.gov.vn/Home/WebDetails/7714" target="_blank">
                                    <img alt="Bộ công thương" src="https://nhanhoa.com/public/logoSaleNoti.png"
                                        style="max-width: 100px;">
                                </a>

                            </p>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-5 col-md-5 col-12">
                    <div class="nhanhoa_group">
                        <a class="group_name group-logo-home-nh" href="javascript:void(0);">
                            <img class="logo_name_1 nh-lazyload ls-is-cached lazyloaded"
                                src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/nhanhoa-group-white.webp"
                                data-src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/nhanhoa-group-white.webp">
                            <img class="logo_name_2 nh-lazyload ls-is-cached lazyloaded"
                                src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/nhanhoa-group.webp"
                                data-src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/nhanhoa-group.webp">
                        </a>
                        <a class="group_child group-logo-home-nh" href="javascript:void(0);" target="">
                            <img class="logo_name_1 nh-lazyload ls-is-cached lazyloaded"
                                src="https://nhanhoa.com/templates/images/v2/webp/home/logo.webp"
                                data-src="https://nhanhoa.com/templates/images/v2/webp/home/logo.webp">
                            <img class="logo_name_2 nh-lazyload ls-is-cached lazyloaded"
                                src="https://nhanhoa.com/templates/images/v2/webp/home/logo.webp"
                                data-src="https://nhanhoa.com/templates/images/v2/webp/home/logo.webp">
                        </a> <a class="group_child " href="https://web4s.vn/" target="_blank">
                            <img class="logo_name_1 nh-lazyload ls-is-cached lazyloaded"
                                src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/web4s-white.webp"
                                data-src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/web4s-white.webp">
                            <img class="logo_name_2 nh-lazyload ls-is-cached lazyloaded"
                                src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/web4s.webp"
                                data-src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/web4s.webp">
                        </a> <a class="group_child " href="https://vfone.vn/" target="_blank">
                            <img class="logo_name_1 nh-lazyload ls-is-cached lazyloaded"
                                src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/vfone-white.webp"
                                data-src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/vfone-white.webp">
                            <img class="logo_name_2 nh-lazyload ls-is-cached lazyloaded"
                                src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/vfone.webp"
                                data-src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/vfone.webp">
                        </a> <a class="group_child " href="https://esoc.vn/" target="_blank">
                            <img class="logo_name_1 nh-lazyload ls-is-cached lazyloaded"
                                src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/esoc-white.webp"
                                data-src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/esoc-white.webp">
                            <img class="logo_name_2 nh-lazyload ls-is-cached lazyloaded"
                                src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/esoc.webp"
                                data-src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/esoc.webp">
                        </a> <a class="group_child " href="https://cloud365.vn/" target="_blank">
                            <img class="logo_name_1 nh-lazyload ls-is-cached lazyloaded"
                                src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/cloud365-white.webp"
                                data-src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/cloud365-white.webp">
                            <img class="logo_name_2 nh-lazyload ls-is-cached lazyloaded"
                                src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/cloud365.webp"
                                data-src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/cloud365.webp">
                        </a> <a class="group_child " href="https://hoadon.biz/" target="_blank">
                            <img class="logo_name_1 nh-lazyload ls-is-cached lazyloaded"
                                src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/hoadon-white.webp"
                                data-src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/hoadon-white.webp">
                            <img class="logo_name_2 nh-lazyload ls-is-cached lazyloaded"
                                src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/hoadon.webp"
                                data-src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/hoadon.webp">
                        </a> <a class="group_child " href="https://echungtu.com/" target="_blank">
                            <img class="logo_name_1 nh-lazyload ls-is-cached lazyloaded"
                                src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/echungtu-white.webp"
                                data-src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/echungtu-white.webp">
                            <img class="logo_name_2 nh-lazyload ls-is-cached lazyloaded"
                                src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/echungtu.webp"
                                data-src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/echungtu.webp">
                        </a> <a class="group_child " href="https://umail.vn/" target="_blank">
                            <img class="logo_name_1 nh-lazyload ls-is-cached lazyloaded"
                                src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/umail-white.webp"
                                data-src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/umail-white.webp">
                            <img class="logo_name_2 nh-lazyload ls-is-cached lazyloaded"
                                src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/umail.webp"
                                data-src="https://nhanhoa.com/templates/images/v2/webp/footer-logo/umail.webp">
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
