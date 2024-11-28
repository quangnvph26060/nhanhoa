<div class="popup-re-call">
    <div class="content_popup">
        <a href="javascript:void(0)" class="re-close-popup close" data-dismiss="alert" title="close">×</a>
        <div class="input-content">
            <div class="input-content-intro">
                <div class="input-content-intro-icon">
                    <i class="fas fa-calendar-week" style="color: #4ABAB9;"></i>
                </div>
                <div class="input-content-intro-des">
                    <div class="text-hello"> Xin chào,</div>
                    <p class="conten-sub">Vui lòng nhập thông tin để chúng tôi liên hệ lại với bạn theo lịch hẹn.</p>
                </div>
            </div>
            <input class="request_phone form-control" type="text" name="request_phone" value=""
                placeholder="Số điện thoại liên hệ lại">
            <div class="phone_error alert-danger"></div>
            <textarea class="request_content form-control" name="request_content" placeholder="Nội dung thắc mắc?"></textarea>

            <!-- dieupt09112016 BEGIN -->
            <div>
                <p class="conten-sub">Bạn ở khu vực nào?</p>

                <input type="radio" id="loc_req_1" name="request_location" value="hn"
                    class="css-checkbox-x2 request_location" checked="checked">
                <label for="loc_req_1" class="css-label-x2">HN</label>

                <input type="radio" id="loc_req_2" name="request_location" value="hcm"
                    class="css-checkbox-x2 request_location">
                <label for="loc_req_2" class="css-label-x2">HCM</label>
            </div>
            <!-- dieupt09112016 END -->

            <div class="content_error alert-danger"></div>
            <div class="submit-content error_send" style="display:none;text-align: center;"></div>
            <div class="submit-content js_submit">
                <span class="send-go btn bg-gradient">Gửi Yêu Cầu</span>
                <div class="go-hotline"> Gọi hotline <span>091 140 8966</span> (24/7)</div>
            </div>
        </div>
        <div class="success-conten" style="display:none">
            <img src="https://nhanhoa.com/templates/images/success.png">
            <div class="text-hello"> Thành công,</div>
            <p class="conten-sub">Chúng tôi sẽ liên hệ lại với bạn trong thời gian sớm nhất.</p>
            <p class="conten-warning">Rất lấy làm xin lổi nếu như vấn đề này làm bạn khó chịu!</p>
            <div class="submit-content">
                <div class="go-hotline">Thông báo sẽ tự động tắt trong 5 giây</div>
            </div>
        </div>
    </div>
</div>
