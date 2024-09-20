<section class="price_domain_table">
    <div class="banggia-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="img_center mb30 page-title-domain">Bảng giá tên miền tại Nhân Hòa</h1>
                    <figure class="html_tab clearfix">
                        <ul class="nav nav-tabs hidden-sm hidden-xs" id="myTab">
                            <li class="active">
                                <a class="tab1 active show" data-toggle="tab" href="#tab-one">Tên miền Việt Nam</a>
                            </li>
                            <li>
                                <a class="tab2" data-toggle="tab" href="#tab-two">Tên miền Quốc tế</a>
                            </li>
                            <li>
                                <a class="tab4" data-toggle="tab" href="#tab-four">Dịch vụ đi kèm</a>
                            </li>
                        </ul>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Begin content bảng giá -->
                <section class="html_content">
                    <figure class="tab-content" id="myTabContent">
                        <article id="tab-one" class="tab-pane in area_tab_content active show">
                            <figure class="des">
                                <img src="https://nhanhoa.com/templates/images/vnic-120x88.png"
                                    alt="Nhân Hòa - Bảng giá Tên miền Domain Quốc Gia &amp; Quốc Tế">
                                <div>
                                    <h2 class="font18 mb10">Nhà đăng ký tên miền Quốc gia .VN của VNNIC</h2>
                                    <p class="font15 hevr mb5">Nhân Hòa là nhà đăng ký Tên miền Quốc gia .VN chính thức
                                        của Trung Tâm Internet Việt Nam (VNNIC) - trực thuộc Bộ Thông Tin Truyền Thông.
                                    </p>
                                    <p><a
                                            href="http://www.vnnic.vn/tintuc/nh%C3%A2n-h%C3%B2-ch%C3%ADnh-th%E1%BB%A9c-tr%E1%BB%9F-th%C3%A0nh-nh%C3%A0-%C4%91%C4%83ng-k%C3%BD-t%C3%AAn-mi%E1%BB%81n-qu%E1%BB%91c-gia-%E2%80%9Dvn%E2%80%9D-17-06-2013">Xem
                                            thông tin tại đây</a></p>
                                </div>
                            </figure>


                            <figure class="table-responsive">
                                <table class="specifications table-price-nvme table  list_pirce">
                                    <thead>
                                        <tr class="tr-tab">
                                            <th class="header-tb " tb-width="" rowspan="2">Tên miền Việt Nam</th>
                                            <th class="header-tb">Lệ phí đăng ký<sup
                                                    style="font-size: 11px;">(1)</sup><br><i>(không chịu thuế)</i></th>
                                            <th class="header-tb">Phí duy trì<sup
                                                    style="font-size: 11px;">(2)</sup><br><i>(không chịu thuế)</i></th>
                                            <th class="header-tb tb-width">Dịch vụ tài khoản quản trị tên miền năm
                                                đầu<br><i>(chưa bao gồm thuế VAT)</i></th>
                                            <th class="header-tb tb-width">Dịch vụ tài khoản quản trị tên miền năm tiếp
                                                theo<br><i>(chưa bao gồm thuế VAT)</i></th>
                                            <th class="header-tb" style="background:#FF882A">Tổng tiền năm đầu<br><i>(đã
                                                    bao gồm 10% VAT)</i></th>
                                            <th class="header-tb" style="background:#FF882A">Tổng tiền năm tiếp
                                                theo<br><i>(đã bao gồm 10% VAT)</i></th>
                                        </tr>
                                        <tr class="tr-tab">
                                            <th class="header-tb">(1)</th>
                                            <th class="header-tb">(2)</th>
                                            <th class="header-tb">(3)</th>
                                            <th class="header-tb">(4)</th>
                                            <th class="header-tb" style="background:#FF882A">(1+2+3)+(3)*10%</th>
                                            <th class="header-tb" style="background:#FF882A">(2+4)+(4)*10%</th>
                                            <!--<th class="header-tb">Phí duy trì<br/>(không chịu thuế)</th>
                                                <th class="header-tb tb-width">Dịch vụ tài khoản quản trị tên miền năm tiếp theo<br/>(chưa bao gồm thuế VAT)</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($doaminvn as $item)
                                        <tr class="tr-body">
                                            <td class="td-left">{{ $item->name }}</td>
                                            <td>{{ number_format($item->le_phi, 0, '', '.') }} đ</td>
                                            <td>{{ number_format($item->phiduytri, 0, '', '.') }} đ</td>
                                            <td>
                                                <del>{{ number_format($item->dichvu, 0, '', '.') }} đ</del> <br>
                                                <span style="color: red;">0đ</span>
                                            </td>
                                            <td>{{ number_format($item->dicvunamsau, 0, '', '.') }} đ</td>
                                            <td>
                                                <del>{{ number_format($item->le_phi + $item->phiduytri  + $item->dichvu + $item->dichvu * 10/100 , 0, '', '.') }} đ</del> <br>
                                                <span style="color: red;">{{ number_format($item->le_phi + $item->phiduytri  + 0 + 0 * 10/100 , 0, '', '.') }} đ</span>
                                            </td>
                                            <td>{{ number_format($item->phiduytri  + $item->dicvunamsau + $item->dicvunamsau * 10/100 , 0, '', '.') }} đ</td>
                                        </tr>
                                        @empty

                                        @endforelse


                                        <!--tr class="tr-body">
                                                <td class="td-left">Tên miền 1 ký tự .VN </td>
                                                <td>Miễn phí</td>
                                                <td>40.000.000 đ</td>
                                                <td>100.000 đ</td>
                                                <td>40.110.000 đ</td>

                                            </tr>
                                            <tr style="border-bottom:1px solid #eee"  class="tr-body">
                                                <td class="td-left">Tên miền 2 ký tự .VN </td>
                                                <td>Miễn phí</td>
                                                <td>10.000.000 đ</td>
                                                <td>100.000 đ</td>
                                                <td>10.110.000 đ</td>

                                            </tr-->
                                    </tbody>
                                </table>
                            </figure>

                            <!--<a href="https://nhanhoa.com/landingpage-ten-mien-quoc-te-moi-mo-rong.html" title="" class="dk img_center mt15">Xem bảng giá tên miền mở rộng</a>-->
                            <figure class="note" style="margin:15px 0">
                                <p class="font14 hevr" style="font-size:13.5px!important">Ghi chú: (1), (2): Biểu mức
                                    thu phí, lệ phí tên miền quốc gia “.vn” tại Thông tư số 208/2016/TT-BTC do nhà nước
                                    quy định, là khoản phải thu nộp ngân sách nhà nước, không chịu thuế.</p>

                            </figure>
                            <img src="https://nhanhoa.com/templates/images/domain/1409805426_rocket.jpg"
                                alt="" class="img_center d-none">
                            <h3 class=" d-none blue mb10 img_center mtb20">NHÂN HÒA luôn cùng bạn bảo vệ và phát triển
                                thương hiệu của mình trên Internet</h3>
                            <p class="font15 hevr img_center mb30">Nhân Hòa đã có uy tín lâu năm trong việc cung cấp
                                dịch vụ đăng ký tên miền cho hơn 50.000 khách hàng, bạn hoàn toàn có thể tin tưởng để
                                bắt đầu đăng ký tên miền tại công ty chúng tôi với dịch vụ chuyên nghiệp nhất.</p>
                            <section class="form_dk d-none">
                                <article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-dk">
                                    <h2 class="img_center mb15">Mẫu bản khai đăng ký dành cho tên miền Việt Nam</h2>
                                    <figure class="dk">
                                        <figure class="line">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb15">
                                                    <div class="title">
                                                        <h3 class="hevr">Bản khai đăng ký tên miền VN cho cá nhân
                                                        </h3>
                                                        <span class="pull-right"> <a
                                                                href="https://nhanhoa.com/uploads/attach/1400299334_canhan_dangkymoi.doc">
                                                                <i class="fa fa-download"> </i>Tải về</a></span>
                                                    </div>
                                                    <div class="content_dk">
                                                        <p><i class="fa fa-arrow-circle-o-right"></i> Cá nhân cần có
                                                            bản khai đăng ký (3 bản) và Bản photo CMT (hoặc hộ chiếu)
                                                        </p>
                                                        <p><i class="fa fa-arrow-circle-o-right"></i> Cá nhân không
                                                            đăng ký được các tên miền .org.vn và .gov.vn</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb15">
                                                    <div class="title">
                                                        <h3 class="hevr">Bản khai đăng ký tên miền VN cho công ty -
                                                            tổ chức</h3>
                                                        <span class="pull-right"> <a
                                                                href="https://nhanhoa.com/uploads/attach/1447817643_ban_khai_dang_ky_ten_mien_to_chuc.doc">
                                                                <i class="fa fa-download"></i>Tải về </a> </span>
                                                    </div>
                                                    <div class="content_dk">
                                                        <p><i class="fa fa-arrow-circle-o-right"></i> Công ty, tổ chức
                                                            cần có bản khai đăng ký (3 bản) có dấu và chữ ký của người
                                                            đại diện (bản khai không được gạch bỏ hoặc tẩy xóa, nếu có 2
                                                            tờ cần có dấu giáp lai).</p>
                                                        <p><i class="fa fa-arrow-circle-o-right"></i> Tên miền .gov.vn
                                                            chỉ dành cho các cơ quan, tổ chức nhà nước ở trung ương và
                                                            địa phương.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figure>
                                        <table class="specifications table-price-nvme table  list_pirce mb20" style="background:#fff">
                                            <thead>
                                                <tr>
                                                    <th width="25%" colspan="3">Dịch vụ đi kèm</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td width="25%">Managed DNS</td>
                                                    <td>Cho phép thay đổi địa chỉ IP của tên miền thông qua Control
                                                        Panel</td>
                                                    <td width="25%" style="color: red;">Miễn phí</td>
                                                </tr>
                                                <tr>
                                                    <td>Domain forwarding</td>
                                                    <td>Cho phép liên kết tên miền của bạn đến một địa chỉ Web đã có sẵn
                                                    </td>
                                                    <td style="color: red;">Miễn phí</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--<p class="font14 hevr">(Dịch vụ liên quan đến tên miền Việt Nam không chịu thuế VAT)</p>-->
                                        <!--p class="font14 hevr"><span class="hevb">Chú ý:</span> Trung tâm internet Việt Nam (VNNIC) bắt đầu cho phép các tổ chức và cá nhân đăng ký tên miền 1 &amp; 2 ký tự từ ngày 10/1/2011. Quý khách có thể liên hệ với Nhân Hòa ngay từ bây giờ để đăng ký cho mình những tên miền tốt nhất.</p-->
                                        <a href="https://nhanhoa.com/tin-tuc/quy-dinh-moi-cua-vnnic-ve-ten-mien-viet-nam.html"
                                            title="" class="dk img_center mt15">QUY ĐỊNH MỚI CỦA VNNIC VỀ TÊN
                                            MIỀN VIỆT NAM</a>
                                    </figure>
                                </article>
                            </section>
                        </article>
                        <article id="tab-two" class="tab-pane in area_tab_content">
                            <figure class="des">
                                <img src="https://nhanhoa.com/templates/images/domain/icann.jpg"
                                    alt="Nhân Hòa - Bảng giá Tên miền Domain Quốc Gia &amp; Quốc Tế">
                                <div>
                                    <h2 class="font18 mb10">Nhà đăng ký tên miền của ICANN</h2>
                                    <p class="font15 hevr mb5">Nhân Hòa là nhà đăng ký tên miền chính thức (Registrar)
                                        của Tổ chức Quản lý Tên miền Quốc tế (ICANN) và là 1 trong 3 nhà đăng ký duy
                                        nhất của ICANN tại Việt Nam.</p>
                                    <p><a href="" title="" class="hevb">Xem danh sách các nhà đăng ký
                                            tên miền của ICANN</a></p>
                                </div>
                            </figure>

                            <figure class="table-responsive">
                                <table class="specifications table-price-nvme table  list_pirce">
                                    <thead>
                                        <tr>
                                            <th style="width:25%">Tên miền</th>
                                            <th>Phí cài đặt</th>
                                            <th>Phí đăng ký năm đầu</th>
                                            <th>Phí duy trì mỗi năm</th>
                                            <th>Chuyển về (Phí duy trì năm đầu)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($doaminqt as $item )
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td><span style="color:red">Miễn phí</span></td>
                                            <td>
                                                <font style="text-decoration:line-through;">{{ number_format($item->phiduytri, 0, '', '.') }} đ</font>&nbsp;<font
                                                    color="red">{{ number_format($item->le_phi, 0, '', '.') }} đ</font><br><small class="hidden">(Áp dụng
                                                    năm đầu tiên)</small>
                                            </td>
                                            <td>{{ number_format($item->dicvunamsau, 0, '', '.') }} đ</td>
                                            <td>{{ number_format($item->le_phi, 0, '', '.') }} đ</td>
                                        </tr>
                                        @empty

                                        @endforelse

                                    </tbody>
                                </table>
                            </figure>
                        </article>
                        <article id="tab-three" class="tab-pane  in area_tab_content">
                            <section class="price_domain_table">
                                <div class="container">
                                    <section class="html_content">
                                        <h2 class=" img_center mt15">Tên miền địa giới hành chính</h2>
                                        <figure class="des"> <img
                                                alt="Nhân Hòa - Bảng giá Tên miền Domain Quốc Gia &amp; Quốc Tế"
                                                src="https://nhanhoa.com/templates/images/domain/diagioihc.jpg">
                                            <p class="font15 hevr mb5">Theo Thông tư số 189/2010/TT-BTC ngày 24/11/2010
                                                của Bộ Tài chính ban hành, tên miền quốc gia Việt Nam “.vn” hiện tại
                                                khách hàng đã có thể đăng ký tên miền quốc gia Việt Nam cấp 3 dưới tên
                                                miền cấp 2 theo địa giới hành chính (63 tỉnh, thành phố) tại Nhân Hòa
                                                Khách hàng có thể tra cứu sự tồn tại của các tên miền cấp 3 dưới tên
                                                miền cấp 2 theo địa giới hành chính (VD: tenmien.hanoi.vn;…) để thuận
                                                tiện cho việc đăng ký và sử dụng.</p>
                                        </figure>
                                        <figure class="table-responsive">
                                            <table class="specifications table-price-nvme table  list_pirce">
                                                <thead>
                                                    <tr>
                                                        <th width="100%" colspan="4">DANH SÁCH CÁC ĐUÔI TÊN MIỀN
                                                            CẤP 3 DƯỚI TÊN MIỀN CẤP 2 THEO ĐỊA GIỚI HÀNH CHÍNH:</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>.angiang.vn</td>
                                                        <td>.danang.vn</td>
                                                        <td>.kontum.vn</td>
                                                        <td>.quangtri.vn</td>
                                                    </tr>
                                                    <tr>
                                                        <td>.bacgian.vn</td>
                                                        <td>.dienbien.vn</td>
                                                        <td>.laichau.vn</td>
                                                        <td>.soctrang.vn</td>
                                                    </tr>
                                                    <tr>
                                                        <td>.backan.vn</td>
                                                        <td>.dongnai.vn</td>
                                                        <td>.lamdong.vn</td>
                                                        <td>.sonla.vn</td>
                                                    </tr>
                                                    <tr>
                                                        <td>.baclieu.vn</td>
                                                        <td>.dongthap.vn</td>
                                                        <td>.langson.vn</td>
                                                        <td>.tayninh.vn</td>
                                                    </tr>
                                                    <tr>
                                                        <td>.bacninh.vn</td>
                                                        <td>.gialai.vn</td>
                                                        <td>.laocai.vn</td>
                                                        <td>.thaibinh.vn</td>
                                                    </tr>
                                                    <tr>
                                                        <td>.baria-vungtau.vn</td>
                                                        <td>.hagiang.vn</td>
                                                        <td>.longan.vn</td>
                                                        <td>.thainguyen.vn</td>
                                                    </tr>
                                                    <tr>
                                                        <td>.bentre.vn</td>
                                                        <td>.haiduong.vn</td>
                                                        <td>.namdinh.vn</td>
                                                        <td>.thanhhoa.vn</td>
                                                    </tr>
                                                    <tr>
                                                        <td>.binhdinh.vn</td>
                                                        <td>.haiphong.vn</td>
                                                        <td>.nghean.vn</td>
                                                        <td>.thanhphochiminh.vn</td>
                                                    </tr>
                                                    <tr>
                                                        <td>.binhduong.vn</td>
                                                        <td>.hanam.vn</td>
                                                        <td>.ninhbinh.vn</td>
                                                        <td>.thuathienhue.vn</td>
                                                    </tr>
                                                    <tr>
                                                        <td>.binhphuoc.vn</td>
                                                        <td>.hanoi.vn</td>
                                                        <td>.ninhthuan.vn</td>
                                                        <td>.tiengiang.vn</td>
                                                    </tr>
                                                    <tr>
                                                        <td>.binhthuan.vn</td>
                                                        <td>.hatinh.vn</td>
                                                        <td>.phutho.vn</td>
                                                        <td>.travinh.vn</td>
                                                    </tr>
                                                    <tr>
                                                        <td>.camau.vn</td>
                                                        <td>.haugiang.vn</td>
                                                        <td>.phuyen.vn</td>
                                                        <td>.tuyenquang.vn</td>
                                                    </tr>
                                                    <tr>
                                                        <td>.cantho.vn</td>
                                                        <td>.hoabinh.vn</td>
                                                        <td>.quangbinh.vn</td>
                                                        <td>.vinhlong.vn</td>
                                                    </tr>
                                                    <tr>
                                                        <td>.caobang.vn</td>
                                                        <td>.hungyen.vn</td>
                                                        <td>.quangnam.vn</td>
                                                        <td>.vinhphuc.vn</td>
                                                    </tr>
                                                    <tr>
                                                        <td>.daklac.vn</td>
                                                        <td>.khanhhoa.vn</td>
                                                        <td>.quangngai.vn</td>
                                                        <td>.yenbai.vn</td>
                                                    </tr>
                                                    <tr>
                                                        <td>.daknong.vn</td>
                                                        <td>.kiengiang.vn</td>
                                                        <td>.quangninh.vn</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </figure>
                                    </section>
                                </div>
                            </section>
                        </article>
                        <article id="tab-four" class="tab-pane in area_tab_content">
                            <figure class="custom_domain">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="block_custom_domain">
                                            <h3><a target="_blank" href="https://zonedns.vn/faq.html">Managed DNS miễn
                                                    phí</a></h3>
                                            <p>Managed DNS là dịch vụ quản lý các bản ghi cho tên miền của bạn. Bạn cần
                                                truy nhập vào <a href="https://zonedns.vn"
                                                    target="_blank">zonedns.vn</a> để sử dụng dịch vụ.</p>
                                            <br>
                                            <p>Đối với <a>tên miền Quốc tế</a>, bạn cần trỏ các thông số sau:</p>
                                            <ul>
                                                <li>ns1.zonedns.vn – IP: 103.28.36.30</li>
                                                <li>ns2.zonedns.vn - IP: 123.30.50.41</li>
                                                <li>ns3.zonedns.vn - IP: 203.162.79.157</li>
                                                <li>ns4.zonedns.vn - IP: 125.221.225.141</li>
                                            </ul>
                                            <p>Đối với <a>tên miền Việt Nam</a> bạn cần trỏ các thông số sau:</p>
                                            <br>
                                            <p><span class="hevb">Thủ tục:</span> Bạn liên hệ với bộ phận kinh doanh
                                                của Nhân Hòa để làm hợp đồng dịch vụ, thanh toán phí và cung cấp thông
                                                tin tên miền để Nhân Hòa tiến hành chuyển đổi cho bạn.</p>
                                            <ul>
                                                <li>ns1.zonedns.vn – IP: 103.28.36.30</li>
                                                <li>ns2.zonedns.vn&nbsp;- IP: 123.30.50.41</li>
                                                <li>ns3.zonedns.vn&nbsp;- IP: 203.162.79.157</li>
                                                <li>ns4.zonedns.vn&nbsp;- IP: 125.221.225.141</li>
                                            </ul>
                                            <p><span class="hevb">Lưu ý:</span> Khi khách hàng đăng ký <a
                                                    href="#">tên miền quốc tế</a>, Nhân Hòa sẽ lock (khóa) tên
                                                miền lại để bảo mật cho khách hàng trong quá trình sử dụng tên miền.</p>
                                            <br>
                                            <p>Quý khách cần hỗ trợ về dịch vụ này vui lòng liên hệ với chúng tôi.
                                                Hotline: 19006680 (24/7)</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="block_custom_domain">
                                            <h3>Domain Forwarding</h3>
                                            <p>Domain Forwarding được sử dụng khi bạn muốn link một tên miền đến một đỉa
                                                chỉ URL nào đó (mà bạn muốn người truy cập sử dụng một tên miền dễ nhớ).
                                            </p>
                                            <br>
                                            <p><span class="hevb">Vi dụ:</span> Địa chỉ một <a
                                                    href="#">website</a> của bạn khi chưa sử dụng domain
                                                forwarding là: https://123.123.123.123/sites/index.html</p>
                                            <p>Một địa chỉ như vậy thật khó nhớ, khi sử dụng <a
                                                    href="#">Domain</a> Forwarding, người truy cập chỉ việc gõ
                                                địa chỉ: https://www.mydomain.com là có thể vào được website của bạn.
                                            </p>
                                            <p>Bạn có thể sử dụng dịch vụ này miễn phí tại Nhân Hòa.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="block_custom_domain">
                                            <h3>Email Forwarding</h3>
                                            <p>Email forwarding được sử dụng trong trường hợp bạn có một tên miền nhưng
                                                bạn muốn bất kỳ ai gửi email đến các địa chỉ liên quan đến tên miền đó
                                                (chẳng hạn: contact@mydomain.com, sales@mydomain.com) thì đều được
                                                forward (chuyển tiếp) đến một địa chỉ email mà bạn muốn (ví dụ:
                                                myemail@gmail.com, contact@other_domain.com...).</p>
                                            <br>
                                            <p>Dịch vụ này tiện lợi ở chỗ bạn không cần có gói dịch vụ hosting nhưng vẫn
                                                sử dụng được email theo tên miền riêng.</p>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </figure>
                </section>
                <!-- End content bảng giá -->
            </div>
        </div>

    </div>
</section>
