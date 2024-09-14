<link href="{{ asset('client/assets/css/contactus.css') }}" rel="stylesheet">

<script src="{{ asset('client/assets/js/contactus.js') }}"></script>

<script src="https://nhanhoa.com/khuyenmai/backup365/js/main.js?v=1.0.0"></script>
<div id='arcontactus'></div>
<div id='laPlaceholder'></div>

<div id="vfone_call">
    <div class="vf-btn-wrap">
        <div class="vf-btn-call">
            <div class="vf-btn-text">Gọi miễn phí</div>
            <div class="vf-btn-text-one">Gọi miễn phí</div>
        </div>
    </div>
</div>

<!-- Resend call bottom -->

<a id="re-send-call" class="re-send-call" style="display: none;">re-send-call</a>
<div class="popup-re-call" id="popup-re-call" style="display: none ; padding-top: 10px !important">
    <div class="content_popup">
        <a href="javascript:void(0)" class="re-close-popup close" data-dismiss="alert" title="close">×</a>
        <div class="input-content">
            <img src="https://nhanhoa.com/templates/images/calendar.png">

            <div class="text-hello"> Xin chào,</div>

            <p class="conten-sub">Vui lòng nhập thông tin để chúng tôi liên hệ lại với bạn theo lịch hẹn.</p>
            <input class="request_fullnamex form-control" style="margin-bottom: 0.5rem;" type="text"
                name="request_fullname" id="request_fullnamex" value="" placeholder="Họ và tên">
            <div class="fullnamex_error alert-danger"></div>
            <input class="request_phone form-control" style="margin-bottom: 0.5rem;" type="text" name="request_phone"
                id="request_phonex" value="" placeholder="Số điện thoại">
            <div class="phone_error alert-danger"></div>
            <input class="request_emailx form-control" type="text" name="request_email" id="request_emailx"
                value="" placeholder="Email">
            <div class="emailx_error alert-danger"></div>
            <textarea class="request_content form-control" rows="5" name="request_content" style="margin-top: 0.5rem;" id="request_contentx"
                placeholder="Nội dung tư vấn"></textarea>
            <div class="content_error alert-danger"></div>
            <input type="hidden" id="request_callback_title" value="">
            <div>
                <p class="conten-sub">Bạn Ở Khu Vực Nào?</p>

                <input type="radio" name="request_locationx" id="request_location1" value="hn"
                    class="css-checkbox-x2 request_location" checked="checked">
                <label for="request_location1" class="css-label-x2">HN</label>

                <input type="radio" name="request_locationx" id="request_location2" value="hcm"
                    class="css-checkbox-x2 request_location">
                <label for="request_location2" class="css-label-x2">HCM</label>
            </div>


            <div class="submit-content error_send" style="display:none;text-align: center;"></div>
            <div class="submit-content js_submit">
                <span id="callback" class="send-go btn">Gửi Đi</span>
                <div class="go-hotline"> Gọi hotline <span>(024) 7308 6680</span> (24/7)</div>
            </div>
        </div>
        <div class="success-conten" style="display:none">
            <img src="https://nhanhoa.com/templates/images/success.png">
            <div class="text-hello"> Thành công,</div>
            <p class="conten-sub">Cảm ơn bạn đã đăng ký thông tin! Chúng tôi sẽ liên hệ lại với bạn trong thời
                gian sớm nhất.</p>
            <p class="conten-warning">Rất lấy làm xin lỗi nếu như vấn đề này làm bạn khó chịu!</p>
            <div class="submit-content">
                <div class="go-hotline">Thông báo sẽ tự động tắt trong 5 giây</div>
            </div>
        </div>
    </div>
</div>
<!-- Resend call bottom -->


<script>
    (function(d, t) {
        var script = d.createElement(t);
        script.id = "la_x2s6df8d";
        script.async = true;
        script.src = "https://liveonline.nhanhoa.com/scripts/track.js";
        var image = d.createElement("img");
        script.async = true;
        image.src = "https://liveonline.nhanhoa.com/scripts/pix.gif";
        script.onload = script.onreadystatechange = function() {
            var rs = this.readyState;
            if (rs && rs != "complete" && rs != "loaded") return;
            LiveAgentTracker.createButton("fe7bdba0", this);
        };
        var placeholder = document.getElementById("laPlaceholder");
        placeholder.parentNode.insertBefore(script, placeholder);
        placeholder.parentNode.insertBefore(image, placeholder);
        placeholder.parentNode.removeChild(placeholder);
    })(document, "script");

    //điền appid của bạn tại đây
    var appid_vf = "gwgoDyFnYdk3";
    (function(d, t, s) {
        var script = d.createElement(t);
        script.id = "ht_8918121995";
        script.async = true;
        var link = d.createElement(s);
        link.id = "ht_8918121995";
        link.rel = "stylesheet";
        link.href = "https://ctynhanhoa.vfone.vn/public/css/vfone-call.css";
        script.src = "https://ctynhanhoa.vfone.vn/public/js/vfone-call.js";
        var placeholder = document.getElementById("arcontactus");
        placeholder.parentNode.insertBefore(script, placeholder);
        placeholder.parentNode.insertBefore(link, placeholder);
    })(document, "script", "link");
    const swiperFaq = new Swiper(".swiper-faq", {
        slidesPerView: 1,
        spaceBetween: 25,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: {
                slidesPerView: 4,
            },
        },
    });

    const swiper = new Swiper(".swiper-solution", {
        slidesPerView: 2,
        spaceBetween: 25,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: {
                slidesPerView: 3,
            },
        },
    });
</script>
