@extends('client/pages/solution-vivre/master')

@section('content')
    <div class="blockFulldichvutongdai">
        <div class="container padding0">
            <div class="titlePage wow fadeInUp animated" data-wow-delay="0.2s"
                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <span>Bảng giá dịch vụ tổng đài VFONE</span>
            </div>

            <div class="timepay wow fadeInUp  animated" data-wow-delay="0.2s"
                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="col-md-3 col-sm-12 col-xsm-12 col-xs-12  padding0">

                    <span class="nameViewYearpay">Thời gian thanh toán</span>
                </div>
                <div class="col-md-9 col-sm-12 col-xsm-12 col-xs-12 padding0">
                    <ul class="listYear">
                        <li data-index="3" class="activeyear"> <b></b><span>3 Năm</span></li>
                        <li data-index="2"> <b></b><span>2 Năm</span></li>
                        <li data-index="1"><b></b><span>1 Năm</span></li>
                    </ul>
                </div>

            </div>

            <div class="contentPagelistPrice linefixrow">


                <div>
                    <div class="item col-md-3 col-sm-6 col-xsm-6 col-xs-12 wow fadeInUp animated" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="blockConentPricey ">
                            <h3 class="nameB">BASIC</h3>
                            <ul class="optionPrice">
                                <li class=" liprice  priceOldY1"><strong></strong></li>
                                <li class=" liprice  priceOldY2"><strong></strong></li>
                                <li class=" liprice activeprice priceOldY3"><strong></strong></li>
                                <li class=" liprice   price1y1"><b>350,000<span> đ/ tháng</span> </b></li>
                                <li class=" liprice   price1y2"><b>350,000<span> đ/ tháng</span> </b></li>
                                <li class=" liprice  activeprice price1y3"><b>350,000<span> đ/ tháng</span> </b></li>
                            </ul>
                            <a href="#dangkygoidichvu" class="fancybox btnViewopop" title="">
                                <div data-textid="BASIC" class="btnLinereegister">
                                    <span><b>Đăng ký ngay</b></span>
                                </div>
                            </a>


                            <div class="cotentOptionserviceY">
                                <ul>
                                    <li>Phí khởi tạo: <span style="color:#eb4762;"><strong>500.000đ</strong></span></li>
                                    <li><strong style="color: rgb(235, 71, 98);">10</strong> máy nhánh</li>
                                    <li>Không giới hạn cuộc gọi đồng thời</li>
                                    <li>Kết nối 2 đầu số&nbsp;</li>
                                    <li><strong style="color: rgb(235, 71, 98);">10GB</strong> dung lượng ghi âm</li>
                                    <li>Ứng dụng trên iOS/ Android</li>
                                    <li>Thống kê lịch sử cuộc gọi</li>
                                    <li>Trang quản trị chuyên nghiệp</li>
                                </ul>
                            </div>


                        </div>
                    </div>
                    <div class="item col-md-3 col-sm-6 col-xsm-6 col-xs-12 wow fadeInUp animated" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="blockConentPricey  activeContent">
                            <h3 class="nameB">PRO</h3>
                            <ul class="optionPrice">
                                <li class=" liprice  priceOldY1"><strong></strong></li>
                                <li class=" liprice  priceOldY2"><strong></strong></li>
                                <li class=" liprice activeprice priceOldY3"><strong></strong></li>
                                <li class=" liprice   price1y1"><b>500,000<span> đ/ tháng</span> </b></li>
                                <li class=" liprice   price1y2"><b>500,000<span> đ/ tháng</span> </b></li>
                                <li class=" liprice  activeprice price1y3"><b>500,000<span> đ/ tháng</span> </b></li>
                            </ul>
                            <a href="#dangkygoidichvu" class="fancybox " title="">
                                <div data-textid="PRO" class="btnLinereegister">
                                    <span><b>Đăng ký ngay</b></span>
                                </div>
                            </a>


                            <div class="cotentOptionserviceY">
                                <ul>
                                    <li>Phí khởi tạo: <strong>500.000đ</strong></li>
                                    <li><strong>25</strong> máy nhánh</li>
                                    <li>Không giới hạn cuộc gọi đồng thời</li>
                                    <li>Không giới hạn kết nối đầu số</li>
                                    <li><strong>20GB</strong> dung lượng ghi âm</li>
                                    <li>Ứng dụng trên iOS/ Android</li>
                                    <li>Thống kê lịch sử cuộc gọi</li>
                                    <li>Trang quản trị chuyên nghiệp</li>
                                </ul>
                            </div>


                        </div>
                    </div>
                    <div class="item col-md-3 col-sm-6 col-xsm-6 col-xs-12 wow fadeInUp animated" data-wow-delay="0.6s"
                        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                        <div class="blockConentPricey ">
                            <h3 class="nameB">VIP</h3>
                            <ul class="optionPrice">
                                <li class=" liprice  priceOldY1"><strong></strong></li>
                                <li class=" liprice  priceOldY2"><strong></strong></li>
                                <li class=" liprice activeprice priceOldY3"><strong></strong></li>
                                <li class=" liprice   price1y1"><b>650,000<span> đ/ tháng</span> </b></li>
                                <li class=" liprice   price1y2"><b>650,000<span> đ/ tháng</span> </b></li>
                                <li class=" liprice  activeprice price1y3"><b>650,000<span> đ/ tháng</span> </b></li>
                            </ul>
                            <a href="#dangkygoidichvu" class="fancybox " title="">
                                <div data-textid="VIP" class="btnLinereegister">
                                    <span><b>Đăng ký ngay</b></span>
                                </div>
                            </a>


                            <div class="cotentOptionserviceY">
                                <ul>
                                    <li>Phí khởi tạo: <span style="color:#eb4762;"><strong>500.000đ</strong></span></li>
                                    <li><span style="color:#eb4762;"><strong>50</strong></span> máy nhánh</li>
                                    <li>Không giới hạn cuộc gọi đồng thời</li>
                                    <li>Không giới hạn kết nối đầu số</li>
                                    <li><span style="color:#eb4762;"><strong>30GB</strong></span> dung lượng ghi âm</li>
                                    <li>Ứng dụng trên iOS/ Android</li>
                                    <li>Thống kê lịch sử cuộc gọi</li>
                                    <li>Trang quản trị chuyên nghiệp</li>
                                </ul>
                            </div>


                        </div>
                    </div>
                    <div class="item col-md-3 col-sm-6 col-xsm-6 col-xs-12 wow fadeInUp animated" data-wow-delay="0.8s"
                        style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                        <div class="blockConentPricey ">
                            <h3 class="nameB">ENTERPRISE</h3>
                            <ul class="optionPrice">
                                <li class=" liprice  priceOldY1"><strong></strong></li>
                                <li class=" liprice  priceOldY2"><strong></strong></li>
                                <li class=" liprice activeprice priceOldY3"><strong></strong></li>
                                <li class=" liprice   price1y1"><b>Liên hệ </b></li>
                                <li class=" liprice   price1y2"><b>Liên hệ </b></li>
                                <li class=" liprice  activeprice price1y3"><b>Liên hệ </b></li>
                            </ul>
                            <a href="#dangkygoidichvu" class="fancybox " title="">
                                <div data-textid="ENTERPRISE" class="btnLinereegister">
                                    <span><b>Đăng ký ngay</b></span>
                                </div>
                            </a>


                            <div class="cotentOptionserviceY">
                                <ul>
                                    <li>Phí khởi tạo: <span style="color:#eb4762;"><strong>500.000đ</strong></span></li>
                                    <li><span style="color:#eb4762;"><strong>&gt;50</strong></span> máy nhánh</li>
                                    <li>Không giới hạn cuộc gọi đồng thời</li>
                                    <li>Không giới hạn kết nối đầu số</li>
                                    <li><span style="color:#eb4762;"><strong>&gt;30GB</strong></span> dung lượng ghi âm</li>
                                    <li>Ứng dụng trên iOS/ Android</li>
                                    <li>Thống kê lịch sử cuộc gọi</li>
                                    <li>Trang quản trị chuyên nghiệp</li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>

            </div>


            <h3 class="titlePage wow fadeInUp" data-wow-delay="0.2s"
                style="visibility: hidden; animation-delay: 0.2s; animation-name: none;"> <span>TIỆN ÍCH BỔ SUNG</span>
            </h3>

            <div class="clear"></div>
            <ul class="listTienichbosung1">
                <li class="wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                    <img class="hoverngbs" src="thumb/120x100/2/upload/baiviet/banggia105339-1-811679394468.png">
                    <img src="thumb/120x100/2/upload/baiviet/banggia105339-1-81.png">
                    <div class="contnetItemnews">
                        <h3>Dung Lượng Ghi Âm</h3>
                        <span>100k/ tháng
                            cho 05Gb mở rộng</span>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="0.6s"
                    style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                    <img class="hoverngbs" src="thumb/120x100/2/upload/baiviet/banggia072928-46061679394515.png">
                    <img src="thumb/120x100/2/upload/baiviet/banggia072928-4606.png">
                    <div class="contnetItemnews">
                        <h3>Số Máy Nhánh</h3>
                        <span>100k/ tháng
                            cho 05 máy nhánh cộng thêm</span>
                    </div>
                </li>


            </ul>


        </div>
    </div>

    <div class="container padding0">
        <h3 class="titlePage  wow fadeInUp animated" data-wow-delay="0.2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"> <span>BẢNG SO SÁNH CÁC GÓI DỊCH
                VỤ</span></h3>
    </div>

    <ul class="listCompaerService ">

        <li id="liheaeder1" class="liheaeder">
            <div class="container padding0">
                <div class="nameS"><span class="hotline_table">Hotline tư vấn <strong>1900 6680</strong></span>&nbsp;
                </div>
                <div class="textoption"><span class="checked "><strong>BASIC</strong> <a href="#dangkygoidichvu"
                            data-id="BASIC" class="btnregistersv fancybox">Đăng ký</a></span></div>
                <div class="textoption activerow"><span class="checked "><strong> PRO </strong> <a
                            href="#dangkygoidichvu" data-id="PRO" class="btnregistersv fancybox"> Đăng ký</a></span>
                </div>
                <div class="textoption"><span class="checked "><strong> VIP </strong> <a href="#dangkygoidichvu"
                            data-id="VIP" class="btnregistersv fancybox"> Đăng ký</a> </span></div>
            </div>

        </li>




        <li>
            <div class="container padding0">
                <div class="nameS"> Trang giám sát tất cả trạng thái Gọi vào / Gọi ra theo thời gian thực</div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Tự động phân bổ cuộc Gọi vào theo nhiều tình huống</div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Danh sách số nội bộ / Nhóm nội bộ</div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Thêm/xoá file ghi âm/ Nghe lại ghi âm</div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Lời chào hướng dẫn tự động </div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Phát nhạc chờ, thay đổi nhạc chờ</div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Đàm thoại tay 3</div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Chuyển cuộc gọi</div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Hỗ trợ phần mềm trên PC</div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Gọi vào / Gọi ra</div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Gọi nội bộ miễn phí không giới hạn địa lý</div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Cuộc gọi theo thời gian / trạng thái</div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Điều hướng cuộc gọi ra di động</div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Xem/chặn cuộc cuộc Gọi vào không hợp lệ</div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Thống kê hiển thị chi tiết lịch sử cuộc gọi</div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Trang quản trị bằng Tiếng Việt</div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Hiển thị tên người gọi</div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Hỗ trợ gọi ra/vào mọi thời điểm &amp; trạng thái qua ứng dụng di động trên IOS &amp;
                    Android</div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS"> Đăng nhập nhanh số máy nhánh: Gọi vào / Gọi ra trực tiếp từ trình duyệt Web</div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Cài đặt máy nhánh đơn giản bằng mã QR Code trên di động IOS &amp; Android.</div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Tích hợp API Click gọi miễn phí từ website</div>
                <div class="textoption"><span class="checked "><b class=""></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Chặn số gọi vào/ra</div>
                <div class="textoption"><span class="checked "><b class=""></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Gọi vào/ra theo danh sách chỉ định</div>
                <div class="textoption"><span class="checked "><b class=""></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Phân quyền rước cuộc gọi / nghe xen/ nói xen</div>
                <div class="textoption"><span class="checked "><b class=""></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class=""></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Ghi nhớ cuộc gọi đến thẳng máy nhánh</div>
                <div class="textoption"><span class="checked "><b class=""></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class=""></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Kết nối không giới hạn đầu số 1900/1800 và số cố định</div>
                <div class="textoption"><span class="checked "><b class=""></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class="active"></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



        <li>
            <div class="container padding0">
                <div class="nameS">Tự động ghi nhớ cuộc gọi thất bại</div>
                <div class="textoption"><span class="checked "><b class=""></b></span></div>
                <div class="textoption activerow"><span class="checked "><b class=""></b></span></div>
                <div class="textoption"><span class="checked "><b class="active"></b></span></div>
            </div>

        </li>



    </ul>

    <div class="clear"></div>

    <div class="blockFulldichvutongdai tienichbosung">

        <div class="container padding0">
            <h3 class="titlePage  wow fadeInUp animated" data-wow-delay="0.2s"
                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"> <span>TIỆN ÍCH</span></h3>

            <ul class="listoptionN">

                <li class="wow fadeInUp animated" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <img class="hoverng" src="thumb/100x60/2/upload/baiviet/218936-25141679392354.png">
                    <img src="thumb/100x60/2/upload/baiviet/218936-2514.png">
                    <div class="contnetItemnews">
                        <h3>Gọi miễn phí trên Website</h3>
                        <span>Click gọi miễn phí trực tiếp từ Website, giúp cả khách hàng và doanh nghiệp không tốn
                            phí</span>
                    </div>
                </li>
                <li class="wow fadeInUp animated" data-wow-delay="0.6s"
                    style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                    <img class="hoverng" src="thumb/100x60/2/upload/baiviet/202958-2921679392372.png">
                    <img src="thumb/100x60/2/upload/baiviet/202958-292.png">
                    <div class="contnetItemnews">
                        <h3>Giám sát máy nhánh thời gian thực</h3>
                        <span>Người quản lý có thể giám sát tình trạng hoạt động của tất cả máy nhánh theo thời gian
                            thực</span>
                    </div>
                </li>
                <li class="wow fadeInUp animated" data-wow-delay="0.9s"
                    style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
                    <img class="hoverng" src="thumb/100x60/2/upload/baiviet/193463-98791679392384.png">
                    <img src="thumb/100x60/2/upload/baiviet/193463-9879.png">
                    <div class="contnetItemnews">
                        <h3>Kết nối không giới hạn</h3>
                        <span>Kết nối không giới hạn các đầu số cố định, đầu số 1900/ 1800</span>
                    </div>
                </li>
                <li class="wow fadeInUp animated" data-wow-delay="0.12s"
                    style="visibility: visible; animation-delay: 0.12s; animation-name: fadeInUp;">
                    <img class="hoverng" src="thumb/100x60/2/upload/baiviet/16696-49181679392404.png">
                    <img src="thumb/100x60/2/upload/baiviet/16696-4918.png">
                    <div class="contnetItemnews">
                        <h3>Ghi nhớ số máy nhánh</h3>
                        <span>Tự động chuyển hướng cuộc gọi của khách hàng đến đúng nhân viên đã tư vấn trước đó</span>
                    </div>
                </li>
                <li class="wow fadeInUp animated" data-wow-delay="0.15s"
                    style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                    <img class="hoverng" src="thumb/100x60/2/upload/baiviet/178818-51141679392420.png">
                    <img src="thumb/100x60/2/upload/baiviet/178818-5114.png">
                    <div class="contnetItemnews">
                        <h3>Gọi trực tiếp từ trình duyệt Web</h3>
                        <span>Dễ dàng thực hiện gọi ra/vào từ trình duyệt Web, không cần điện thoại bàn</span>
                    </div>
                </li>
                <li class="wow fadeInUp animated" data-wow-delay="0.18s"
                    style="visibility: visible; animation-delay: 0.18s; animation-name: fadeInUp;">
                    <img class="hoverng" src="thumb/100x60/2/upload/baiviet/189066-34141679392438.png">
                    <img src="thumb/100x60/2/upload/baiviet/189066-3414.png">
                    <div class="contnetItemnews">
                        <h3>Dễ dàng cài đặt máy nhánh</h3>
                        <span>Cài đặt số máy nhánh đơn giản, nhanh chóng với mã QR Code sẵn có</span>
                    </div>
                </li>
                <li class="wow fadeInUp animated" data-wow-delay="0.21s"
                    style="visibility: visible; animation-delay: 0.21s; animation-name: fadeInUp;">
                    <img class="hoverng" src="thumb/100x60/2/upload/baiviet/15304-76151679392632.png">
                    <img src="thumb/100x60/2/upload/baiviet/15304-7615.png">
                    <div class="contnetItemnews">
                        <h3>Không giới hạn số máy nhánh</h3>
                        <span>Doanh nghiệp sử dụng VFone có thể mở rộng bao nhiêu máy nhánh tùy thích</span>
                    </div>
                </li>
                <li class="wow fadeInUp animated" data-wow-delay="0.24s"
                    style="visibility: visible; animation-delay: 0.24s; animation-name: fadeInUp;">
                    <img class="hoverng" src="thumb/100x60/2/upload/baiviet/147756-76221679392643.png">
                    <img src="thumb/100x60/2/upload/baiviet/147756-7622.png">
                    <div class="contnetItemnews">
                        <h3>Không giới hạn cuộc gọi đồng thời</h3>
                        <span>Doanh nghiệp có thể tiếp nhận cùng lúc nhiều cuộc gọi ra/ vào, không lo bận máy</span>
                    </div>
                </li>
                <li class="wow fadeInUp animated" data-wow-delay="0.27s"
                    style="visibility: visible; animation-delay: 0.27s; animation-name: fadeInUp;">
                    <img class="hoverng" src="thumb/100x60/2/upload/baiviet/135921-17361679392654.png">
                    <img src="thumb/100x60/2/upload/baiviet/135921-1736.png">
                    <div class="contnetItemnews">
                        <h3>Lời chào hướng dẫn tự động</h3>
                        <span>Tự động hướng dẫn/ tương tác với khách hàng thông qua bàn phím điện thoại</span>
                    </div>
                </li>
                <li class="wow fadeInUp animated" data-wow-delay="0.30s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <img class="hoverng" src="thumb/100x60/2/upload/baiviet/106632-7281679392671.png">
                    <img src="thumb/100x60/2/upload/baiviet/106632-728.png">
                    <div class="contnetItemnews">
                        <h3>Ghi âm cuộc gọi</h3>
                        <span>Ghi âm các cuộc gọi ra/ vào giúp quản lý dễ dàng, nâng cao hiệu quả công việc</span>
                    </div>
                </li>
                <li class="wow fadeInUp animated" data-wow-delay="0.33s"
                    style="visibility: visible; animation-delay: 0.33s; animation-name: fadeInUp;">
                    <img class="hoverng" src="thumb/100x60/2/upload/baiviet/113063-95171679392684.png">
                    <img src="thumb/100x60/2/upload/baiviet/113063-9517.png">
                    <div class="contnetItemnews">
                        <h3>Đàm thoại nhiều bên</h3>
                        <span>Thực hiện cuộc gọi với nhiều người cùng tham gia trò chuyện</span>
                    </div>
                </li>
                <li class="wow fadeInUp animated" data-wow-delay="0.36s"
                    style="visibility: visible; animation-delay: 0.36s; animation-name: fadeInUp;">
                    <img class="hoverng" src="thumb/100x60/2/upload/baiviet/126618-33091679392697.png">
                    <img src="thumb/100x60/2/upload/baiviet/126618-3309.png">
                    <div class="contnetItemnews">
                        <h3>Chuyển tiếp cuộc gọi</h3>
                        <span>Tự động chuyển cuộc gọi sang máy nhánh khác hoặc điện thoại di động</span>
                    </div>
                </li>
                <li class="wow fadeInUp animated" data-wow-delay="0.39s"
                    style="visibility: visible; animation-delay: 0.39s; animation-name: fadeInUp;">
                    <img class="hoverng" src="thumb/100x60/2/upload/baiviet/92814-471679392712.png">
                    <img src="thumb/100x60/2/upload/baiviet/92814-47.png">
                    <div class="contnetItemnews">
                        <h3>Gọi tự động CSKH/ Telesale</h3>
                        <span>Tự động gọi đến một danh sách khách hàng với mục đích thông báo/ nhắc nhở/ quảng cáo…</span>
                    </div>
                </li>
                <li class="wow fadeInUp animated" data-wow-delay="0.42s"
                    style="visibility: visible; animation-delay: 0.42s; animation-name: fadeInUp;">
                    <img class="hoverng" src="thumb/100x60/2/upload/baiviet/icon1-11541679392733.png">
                    <img src="thumb/100x60/2/upload/baiviet/icon1-1154.png">
                    <div class="contnetItemnews">
                        <h3>Gọi nội bộ miễn phí</h3>
                        <span>Các số/ nhóm nội bộ gọi với nhau hoàn toàn miễn phí, bất kể vùng miền/ địa lý</span>
                    </div>
                </li>
                <li class="wow fadeInUp animated" data-wow-delay="0.45s"
                    style="visibility: visible; animation-delay: 0.45s; animation-name: fadeInUp;">
                    <img class="hoverng" src="thumb/100x60/2/upload/baiviet/57268-20111679392777.png">
                    <img src="thumb/100x60/2/upload/baiviet/57268-2011.png">
                    <div class="contnetItemnews">
                        <h3>Chặn cuộc gọi</h3>
                        <span>Xem và chặn những cuộc gọi rác, cuộc gọi ra/ vào không hợp lệ</span>
                    </div>
                </li>
                <li class="wow fadeInUp animated" data-wow-delay="0.48s"
                    style="visibility: visible; animation-delay: 0.48s; animation-name: fadeInUp;">
                    <img class="hoverng" src="thumb/100x60/2/upload/baiviet/26219-45311679392821.png">
                    <img src="thumb/100x60/2/upload/baiviet/26219-4531.png">
                    <div class="contnetItemnews">
                        <h3>Hiển thị tên khách hàng</h3>
                        <span>Hiển thị tên khách hàng liên hệ và xem thống kê chi tiết lịch sử cuộc gọi</span>
                    </div>
                </li>
                <li class="wow fadeInUp animated" data-wow-delay="0.51s"
                    style="visibility: visible; animation-delay: 0.51s; animation-name: fadeInUp;">
                    <img class="hoverng" src="thumb/100x60/2/upload/baiviet/37679-60261679392844.png">
                    <img src="thumb/100x60/2/upload/baiviet/37679-6026.png">
                    <div class="contnetItemnews">
                        <h3>Gọi ra/ vào chỉ định</h3>
                        <span>Từng máy nhánh có thể gọi vào/ ra theo danh sách chỉ định</span>
                    </div>
                </li>
                <li class="wow fadeInUp animated" data-wow-delay="0.54s"
                    style="visibility: visible; animation-delay: 0.54s; animation-name: fadeInUp;">
                    <img class="hoverng" src="thumb/100x60/2/upload/baiviet/42733-77181679392865.png">
                    <img src="thumb/100x60/2/upload/baiviet/42733-7718.png">
                    <div class="contnetItemnews">
                        <h3>Tích hợp CRM</h3>
                        <span>Tích hợp các phần mềm quản lý doanh nghiệp để nhận biết thông tin/ lịch sử giao dịch khách
                            hàng</span>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="0.57s"
                    style="visibility: hidden; animation-delay: 0.57s; animation-name: none;">
                    <img class="hoverng" src="thumb/100x60/2/upload/baiviet/85766-53781679392942.png">
                    <img src="thumb/100x60/2/upload/baiviet/85766-5378.png">
                    <div class="contnetItemnews">
                        <h3>Ứng dụng di động</h3>
                        <span>Ứng dụng "VFone" trên 2 hệ điều hành iOS/ Android giúp sẵn sàng thoại bất kỳ nơi đâu</span>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="0.60s"
                    style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                    <img class="hoverng" src="thumb/100x60/2/upload/baiviet/73668-35411679392957.png">
                    <img src="thumb/100x60/2/upload/baiviet/73668-3541.png">
                    <div class="contnetItemnews">
                        <h3>Trang quản trị tiếng Việt</h3>
                        <span>Trang quản trị tổng đài với giao diện đơn giản, tiếng Việt dễ hiểu, không cần chuyên IT vẫn có
                            thể quản lý</span>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="0.63s"
                    style="visibility: hidden; animation-delay: 0.63s; animation-name: none;">
                    <img class="hoverng" src="thumb/100x60/2/upload/baiviet/18498-50121679392976.png">
                    <img src="thumb/100x60/2/upload/baiviet/18498-5012.png">
                    <div class="contnetItemnews">
                        <h3>Một máy nhánh cho nhiều thiết bị</h3>
                        <span>Một máy nhánh có thể được sử dụng đồng thời trên 2 thiết bị: điện thoại bàn Internet, PC,
                            Smart phone, Tablet</span>
                    </div>
                </li>


            </ul>
        </div>

    </div>

    <script>
        $().ready(function() {
            $('.btnBanggia span').click(function() {
                $('.listCompaerService').css({
                    height: 'auto'

                });
                $(this).parent().remove();
            })

            $(window).scroll(function() {
                var aTop1 = $('.linefixrow').offset().top - 100
                var aTopr1 = $('.listTienichbosung1').offset().top - 300
                var aTop2 = $('.listCompaerService').offset().top

                var aTop3 = $('.tienichbosung').offset().top

                if ($('body').width() < 1000) {
                    if ($(this).scrollTop() >= aTop1) {
                        $('.timepay').addClass('titlepayfix');
                    } else {
                        $('.timepay').removeClass('titlepayfix');
                    }

                    //listTienichbosung1
                    if ($(this).scrollTop() >= aTopr1) {
                        $('.timepay').removeClass('titlepayfix');
                    } //listTienichbosung1
                }

                if ($(this).scrollTop() >= aTop2) {
                    $('.liheaeder').addClass('lineFixprice');
                }
                if ($(this).scrollTop() < aTop2) {

                    $('#liheaeder1').removeClass('lineFixprice');
                }

                if ($(this).scrollTop() >= aTop3) {
                    $('#liheaeder1').removeClass('lineFixprice');
                }

            })

            $('.btnLinereegister').click(function() {

                id = $(this).attr('data-textid');

                $('.sldichvu').val(id);
                $('.goidichvu').trigger('change');
                // $('.btnfancybox').trigger('click');
            })
            $('.btnregistersv').click(function() {

                id = $(this).attr('data-id');

                $('.sldichvu').val(id);
                $('.btnfancybox').trigger('click');
            })

        })
    </script>
@endsection
