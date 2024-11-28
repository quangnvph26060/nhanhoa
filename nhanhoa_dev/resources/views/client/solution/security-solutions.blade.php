@extends('client/solution/layouts/master')

@section('content')
    <!-- ***** TEAM ***** -->
    <section class="sec-normal sec-bg2">
        <div class="team">
            <div class="container">
                <div class="row">
                    <div id="content_detail" class="col-sm-12 col-md-12">
                        <p>1Sonline có đầy đủ các giải pháp cần thiết trên nền điện toán đám mây giúp cho khách hàng yên tâm
                            tập trung vào việc kinh doanh chính. Tối ưu hóa phần cứng, giảm thiểu rủi ro mất dữ liệu,
                            quản lý dễ dàng, chi phí xuống mức thấp nhất… là những gì chúng tôi làm được cho khách hàng của
                            mình.</p>
                        <p>Với các doanh nghiệp sở hữu các dữ liệu và tài nguyên yêu cầu được bảo vệ, việc giám sát tình
                            trạng sử dụng một cách chặt chẽ các dữ liệu và tài nguyên này là yêu cầu hàng đầu.</p>
                        <p>Khi mà hệ thống thông tin là nơi lưu trữ và xử lý các số liệu liên quan đến khách hàng và
                            của doanh nghiệp với giá trị rất lớn, thông qua các dữ liệu này, nguồn tài chính được luân
                            chuyển theo một trình tự và qui tắc chặt chẽ. Nếu các dữ liệu và các tiến trình này bị can thiệp
                            không hợp lệ, chắc chắn sẽ xảy ra sự rối loạn và thiệt hại không thể kể hết cho doanh nghiệp
                            cũng như mất mát uy tín của chính doanh nghiệp đó.</p>
                        <p>Bằng sự hợp tác chặt chẽ với các tổ chức hoạt động về lĩnh vực an ninh hệ thống nổi tiếng trên
                            thế giới, công ty chúng tôi luôn đảm bảo cung cấp cho khách hàng giải pháp về an ninh hệ thống
                            theo 06 cấp độ (tổ chức, pháp luật, điều hành, thương mại, tài chính và về con người) tuân thủ
                            tiêu chuẩn của ISO 27001: 2005 nhằm đảm bảo 3 thuộc tính của nó: Tính tin cậy (Confidentiality),
                            tính toàn vẹn (Integrity) và tính sẵn sàng(Availability).</p>
                        <p>Dựa trên tiêu chuẩn này, công ty chúng tôi luôn cung cấp các giải pháp về an ninh hệ thống tuỳ
                            theo cấp độ của từng doanh nghiệp với những thành phần tối thiểu như:</p>
                        <p><strong>GIẢI PHÁP BẢO VỆ ĐA CẤP VỀ PHẦN CỨNG</strong></p>
                        <figure class="expNoEdit"><img
                                src="../media.1sonline.vn/files/tranquyethang/2021/01/16/giai_phap_bao_ve_da_cap_ve_phan_cung-1-0053.jpg"
                                alt="giai_phap_bao_ve_da_cap_ve_phan_cung (1)" width="599" height="932" /></figure>
                        <p><strong> </strong></p>
                        <h3><strong>Lớp Firewall bên ngoài</strong></h3>
                        <p>Đây là lớp an ninh chủ lực chuyên dùng để chống lại các cuộc tấn công từ môi trường bên ngoài như
                            hacker, virus, spam….bảo vệ hệ thống giảm thiểu tối đa các ảnh hưởng xấu từ bên ngoài. Khi được
                            kết nối với môi trường bên ngoài. Trong thực tế: nguy cơ xâm nhập vào hệ thống nội bộ của doanh
                            nghiệp từ các đối tượng ngoại vi (như hacker, virus…), thông tin cung cấp tới người dùng/khách
                            hàng PHẢI được toàn vẹn và các người dùng được phép từ bên ngoài DỄ DÀNG  truy cập được.</p>
                        <figure class="expNoEdit"><img
                                src="../media.1sonline.vn/files/tranquyethang/2021/01/16/firewall_bao_ve_he_thong_may_chu-1-0054.jpg"
                                alt="Firewall_bao_ve_he_thong_may_chu (1)" width="494" height="252" /></figure>
                        <p> </p>
                        <h3><strong>Lớp an ninh trung gian</strong></h3>
                        <p>Lớp an ninh này chủ yếu dựa trên các tính năng an ninh cơ bản của thiết bị mạng, hệ điều hành,…
                            Ví dụ với thiết bị mạng cao cấp chúng ta có thể triển khai những tính năng an ninh mạng cơ bản
                            như:</p>
                        <ul>
                            <li>Access control list hạn chế truy cập của người dùng cuối qua những phần vùng, những ứng dụng
                                không thuộc phạm vi truy xuất của mình.</li>
                            <li>Thiết lập các quyền truy cập thông qua username, password</li>
                            <li>Hạn chế kết nối vào hệ thống (kết nối vật lý) tại những vị trí không được phép thông<br />
                                qua tính năng port security, VLAN access control list của thiết bị mạng.</li>
                            <li>Phân vùng VLAN hạn chế các dữ liệu vô ích (Broadcast, ARP signal…) tràn ngập từ khu vực này
                                qua khu vực khác, tận dụng tối đa băng thông cho thông tin có ích (traffic thực sự của người
                                dùng) của hệ thống. Ngăn chặn khuyếch tán Virus hay ảnh hưởng liên đới do trường hợp không
                                ổn định của hệ thống phần cứng từ vùng này qua vùng khác.</li>
                            <li>v.v.</li>
                        </ul>
                        <h3><strong>Firewall bảo vệ hệ thống máy chủ (serverfarm) – internal firewall</strong></h3>
                        <p>Phân hệ tường lửa nội bộ (internal firewall) đóng vai trò hết sức quan trọng là chốt chặn bảo mật
                            cuối cùng bảo vệ toàn bộ hệ thống dữ liệu của doanh nghiệp. Phân hệ này đồng thời là cửa ngõ
                            kiểm soát trước khi đi vào khu vực nhạy cảm nhất trong hệ thống, là khu vực các máy chủ trung
                            tâm. Điểm đặc biệt tại đây là ngoài việc ngăn chặn các tấn công từ môi trường bên ngoài xâm nhập
                            vào hệ thống, các thiết bị tường lửa còn phải phân tích các truy cập từ cả trong mạng LAN, lọc
                            và ngăn chặn được những tấn công xuất phát từ trong nội bộ. Hơn nữa do tầm quan trọng như vậy,
                            các thiết bị tường lửa tại phân hệ này phải là loại có công suất xử lý (throughput) cao và đặc
                            biệt là có khả năng hoạt động<br /> như là thiết bị ngăn chặn xâm nhập IPS (Intrusion Prevention
                            System).</p>
                        <p>Trung tâm dữ liệu là nơi chứa đựng tất cả tài sản vô giá của doanh nghiệp về mặt tài chính, thông
                            tin khách hàng… chính vì vậy tại khu vực có tầm quan trọng sống còn này của hệ thống chúng ta
                            cần có giải pháp bảo vệ an toàn cao nhất trong khả năng có thể của công nghệ. (xem sơ đồ minh
                            hoạ)</p>
                        <figure class="expNoEdit"><img
                                src="../media.1sonline.vn/files/tranquyethang/2021/01/16/lop_firewall_ben_ngoai-1-0054.jpg"
                                alt="lop_firewall_ben_ngoai (1)" width="549" height="294" /></figure>
                        <p>Với kinh nghiệm nhiều năm trong lĩnh vực an ninh mạng, công ty chúng tôi cam kết cung cấp đầy đủ
                            các giải pháp bảo mật toàn diện để giảm thiểu các rủi ro có thể xảy ra cho hệ thống mạng
                            máy tính của doanh nghiệp. Giải pháp được xây dựng với thiết bị của các hãng bảo mật hàng đầu
                            thế giới như Fortinet, Watchguard, Astaro … từ cơ bản đến tích hợp rất nhiều cấp độ bảo mật –
                            bao gồm hệ thống tường lửa, diệt virus, ngăn chặn xâm nhập, VPN, lọc nội dung web, ngăn chặn
                            spyware và chống spam – được thiết kế để giúp khách hàng bảo vệ chống lại các nguy cơ tiềm ẩn ở
                            cấp độ nội dung trên toàn bộ hệ thống của doanh nghiệp qui mô nhỏ cho đến lớn.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
