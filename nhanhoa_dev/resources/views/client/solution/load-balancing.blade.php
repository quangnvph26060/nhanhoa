@extends('client/solution/layouts/master')

@section('content')
    <!-- ***** TEAM ***** -->
    <section class="sec-normal sec-bg2">
        <div class="team">
            <div class="container">
                <div class="row">
                    <div id="content_detail" class="col-sm-12 col-md-12">
                        <p><strong>I. Giới thiệu chung:</strong><br /> Mục đích :<br /> − Tổng hợp các sức mạnh đơn lẻ thành
                            một<br /> − Tăng cường khả năng chịu lỗi<br /> Về kỹ thuật :  hệ thống sẽ bao gồm các hệ thống
                            con:</p>
                        <p><strong>1. Web server</strong><br /> − Đây là hệ thống public, phục vụ cho mục đích marketing,
                            quảng bá đưa hình ảnh hoạt động, sản phẩm của công ty đến với mọi người.<br /> − Hệ thống này,
                            về kỹ thuật, cho phép tất cả người dùng Internet đều có thể tìm kiếm thông tin, trao đổi thông
                            tin với website của bạn. Do vậy, cần phải đảm bảo về tốc độ truy cập, tính ổn định.</p>
                        <p><strong>2. Database Server</strong><br /> − Hệ thống Database chung để Web server access vào lấy
                            dữ liệu và hiển thị nội dung trên website.<br /> − Đây là hệ thống chứa mọi thông tin cho hoạt
                            động cả Public &amp; nội bộ công ty.<br /> − Do vậy, hệ thống DB phải đủ mạnh, ổn định &amp; an
                            toàn dữ liệu.</p>
                        <p><strong>3. Proxy server (Load Balancing)</strong><br /> − Đây là hệ thống chuyển tiếp thông tin
                            và kiểm soát thông tin, tạo sự an toàn cho server web, database server.<br /> − Chức năng Load
                            Balancing (LB) cho các web server sẽ được cài đặt trên máy chủ Proxy này.<br /> <strong>II. Mô
                                hình kết nối:</strong><a
                                href="https://gdata.com.vn/giai-phap-can-bang-tai-he-thong.html"><br /></a></p>
                        <p> </p>
                        <figure class="expNoEdit"><img
                                src="../media.1sonline.vn/files/tranquyethang/2021/01/16/mc3b4_hc3acnh_ke1babft_ne1bb91i-1-0103.jpg"
                                alt="mC3B4_hC3ACnh_kE1BABFt_nE1BB91i (1)" width="612" height="519" /></figure>
                        <p style="text-align: center;"><em>Mô hình giải pháp high availability và load balancing cho
                                website</em></p>
                        <p><strong>III. Thiết bị và các yêu cầu khác:</strong><br /> − 3 IP PUBLIC  :<br /> • IP WAN 1 : Sẽ
                            được gán cho LB1<br /> • IP WAN 2 : Gán cho LB2<br /> • IP WAN 3 : Sử dụng cho Virtual IP  (
                            Người dùng sẽ truy cập đến các Webserver thông qua địa chỉ này )</p>
                        <p>− Cần 4 Server :</p>
                        <p>• 2 Server đóng vai trò control việc load balancing  :<br /> + Mỗi Server cần có 2 Interface .
                        </p>
                        <p>+ Vì là nơi chuyển traffic chính nên yêu cầu throughput cho network traffic cao.Khả năng
                            throughput này dựa trên CPU và RAM .<br /> • 2 Server đóng vai trò Website<br /> +  Lưu trữ
                            thông tin website trên đây .</p>
                        <p>+ Trên 2 Server ta có có thể setup phù hợp để làm database server.</p>
                        <p>+ Để  đảm việc đồng bộ giữa 2 database trên 2 server này luôn giống nhau , ta có thể thiết lập
                            giải pháp replicate database</p>
                        <p><strong>IV. Cách thức hoạt động:</strong><strong> </strong></p>
                        <p>− Ta sẽ có 2 Server đảm nhận vai trò là LoadBalancer và Firewall .</p>
                        <p>− Load Balancer :</p>
                        <p>• 1 Server đóng vai trò là active. ( ở đây là LB1)<br /> • Server còn lại giữ vai trò standby. (
                            LB2 )<br /> • Khi bên ngoài truy cập đến website thông qua địa chỉ : IP WAN3 . sẽ được redirect
                            theo đường dẫn (mũi tên màu đen) đến server LB1 (Active ). LB1 sẽ tự động thực hiện nắm giữ việc
                            load balancing tới 2 Web Server<br /> • Khi Server LB1 không còn khả năng phục vụ , lúc này
                            server LB2 sẽ được tự động chuyển lên Active tiếp tục nắm giữ việc load balancing đến 2 Web
                            Server , đảm bảo cho việc truy cập đến website liên tục đối với người dùng internet  ( đường dẫn
                            mũi tên màu đỏ )<br /> • Khi Server LB1 up lên lại , vai trò sẽ được tự động chuyển lại cho LB1
                            .<br /> • Bằng cách này ta có thể đảm bảo độ sẵn sàng cao và cân bằng tải cho website .<br /> −
                            Firewall :</p>
                        <p>• Các Web Server sẽ được đặt trong vùng DMZ được bảo vệ bởi LoadBalancer ( Nhờ vào Firewall được
                            cài đặt trên Load Balancer )</p>
                        <p><strong>− Mô hình 1:\</strong></p>
                        <figure class="expNoEdit"><img
                                src="../media.1sonline.vn/files/tranquyethang/2021/01/16/server_-_loadbalancing-1-0102.jpg"
                                alt="Empty" width="640" height="519" /></figure>
                        <p><a href="https://gdata.com.vn/giai-phap-can-bang-tai-he-thong.html"> </a></p>
                        <p>– Mô hình này thích hợp cho trường hợp :<br /> . Dữ liệu trong database lớn và yêu cầu bảo mật
                            cao<br /> . Web Server thực thi Read và Write liên tục đến Database.<br /> – Với mô hình trên
                            :<br /> . Web Server và Database chạy độc lập trên mỗi Server vật lý .<br /> . Có thể triển khai
                            cấu hình phần cứng thích hợp cho Web Server và Database Server .<br /> . Đảm bảo Secure . Trường
                            hợp Hacker tấn công nắm quyền kiểm soát trên Web Server =&gt;Vẫn còn phải thao tac kết nối đến
                            Database Server<br /> – Việc Replicate giữa 2 Database Server sẽ không ảnh hưởng nhiều đến khả
                            năng hoạt động của Web Server ( Do chạy độc lập ) .<br /> – Tăng khả năng chịu tải của Web
                            Server ( Do không phải share resource với database )<br /> – Việc truy xuất dữ liệu chỉ trong
                            mạng LAN và không ảnh hưởng đến 2 Load Balancer .<br /> <strong>– Mô hình 2:</strong><a
                                href="https://gdata.com.vn/giai-phap-can-bang-tai-he-thong.html"><br /></a></p>
                        <figure class="expNoEdit"><img
                                src="../media.1sonline.vn/files/tranquyethang/2021/01/16/firewall-1-0101.jpg" alt="Empty"
                                width="640" height="519" /></figure>
                        <p>– Mô hình này ta đặt Database và Web trên đồng thời mỗi Server .<br /> – Mô hình này áp dụng
                            trong trường hợp dữ liệu database thuộc vào dạng ít hoặc trung bình. Nhưng đòi hỏi truy cập vào
                            web nhanh và luôn sẵn sàng (số lượng Web Server lên đến 4)<br /> – Với mô hình trên , lượng
                            request từ Internet sẽ được phân tải đến 4 Server.<br /> – Database trên mỗi Server sẽ đồng bộ
                            với nhau . ( Lên đến 4 )<br /> – Lúc này , do  Load Balancer phải chịu tải lên đến 4 Server
                            =&gt; Yêu cầu cấu hình mạnh cho 2 máy LoadBalancer</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
