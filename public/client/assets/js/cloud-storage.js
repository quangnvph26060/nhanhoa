(function (w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
        "gtm.start": new Date().getTime(),
        event: "gtm.js",
    });
    var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != "dataLayer" ? "&l=" + l : "";
    j.async = true;
    j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, "script", "dataLayer", "GTM-MVD34V");

//Ä‘iá»n appid cá»§a báº¡n táº¡i Ä‘Ă¢y
var appid_vf = "TUwHgRg6pDZH";
(function (d, t, s) {
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



$(document).ready(function(){
    $(".btn_show_popup").on("click", function () {
        let form_title = $(this).attr("data-title");
        console.log(form_title);
        if(form_title != '' && form_title != undefined){
            $("#request_callback_title").val(form_title);
        }
        else{
            $("#request_callback_title").val('');
        }
        $("#msg-item-1").trigger("click");
    });
    $("#HEADLINE15").click(function(){
         $('html, body').animate({
                scrollTop: ($("#VFONE").offset().top-100)
            }, 1000);
    });
    $("#HEADLINE_VFONE").click(function(){
         $('html, body').animate({
                scrollTop: ($("#SECTION1").offset().top-100)
            }, 1000);
    });
    let scroll_param = get_params("params");
    switch(scroll_param){

        // case "domain":
        //     $('html, body').animate({
        //         scrollTop: ($("#UUDAITENMIEN").offset().top - 50)
        //     }, 1000);
        // break;
        // case "nvme":
        //     $('html, body').animate({
        //         scrollTop: ($("#UUDAINVME").offset().top - 50)
        //     }, 1000);
        //     break;
        // case "wordpress":
        //     $('html, body').animate({
        //         scrollTop: ($("#UUDAIHOSTING").offset().top - 50)
        //     }, 1000);
        // break;
        // case "umail":
        //     $('html, body').animate({
        //         scrollTop: ($("#UUDAIUMAIL").offset().top - 50)
        //     }, 1000);
        //     break;
        // case "dedicate":
        //     $('html, body').animate({
        //         scrollTop: ($("#SECTION401").offset().top-100)
        //     }, 1000);
        // break;
        // case "vps":
        //     $('html, body').animate({
        //         scrollTop: ($("#UUDAIVPS").offset().top - 50)
        //     }, 1000);
        // break;
        // case "gmail":
        //     $('html, body').animate({
        //         scrollTop: ($("#UUDAIGGWP").offset().top - 50)
        //     }, 1000);
        // break;
        // case "email-server":
        //     $('html, body').animate({
        //         scrollTop: ($("#UUDAIEMAILSERVER").offset().top - 50)
        //     }, 1000);
        // break;
        // case "giahan":
        //     $('html, body').animate({
        //         scrollTop: ($("#UUDAIGIAHAN").offset().top - 50)
        //     }, 1000);
        // break;
        // case "vfone":
        //     $('html, body').animate({
        //         scrollTop: ($("#VFONE").offset().top - 50)
        //     }, 1000);
        // break;
        // case "tongdai":
        //     $('html, body').animate({
        //         scrollTop: ($("#VFONE").offset().top - 50)
        //     }, 1000);
        // break;
        default:
            break;
    }
});
$(document).on("click", ".re-send-call",function () {
    $('.popup-re-call').show();
});
// $(document).on("click", "#GROUP45",function () {
//     init_copy('KM1223', "#GROUP45");
// });
// $(document).on("click", "#GROUP41",function () {
//     init_copy('KM1223', "#GROUP41");
// });
// $(document).on("click", "#GROUP32",function () {
//     init_copy('KM1223', "#GROUP32");
// });
// $(document).on("click", "#GROUP45",function () {
//     init_copy('KM1223', "#GROUP45");
// });
// $(document).on("click", "#GROUP106",function () {
//     init_copy('KM1223', "#GROUP106");
// });

$(document).on("click", "#GROUP327",function () {
    init_copy('GG0323', "#GROUP327");
});
$(document).on("click", "#GROUP330",function () {
    init_copy('GG0323', "#GROUP330");
});

$(document).on("click", "#GROUP55",function () {
    //location.href = "https://nhanhoa.com";
    window.open(`https://nhanhoa.com/`, '_blank');
});
$(document).on("click", "#BUTTON_TEXT10",function () {
    //location.href = "https://nhanhoa.com/ssl-bao-mat/bang-gia-comodo-ssl.html";
    //window.open(`https://nhanhoa.com/ssl-bao-mat/bang-gia-comodo-ssl.html`, '_blank');
});
//click báº£ng giĂ¡
$(document).on("click", "#BUTTON_TEXT11",function () {
    //location.href = "https://nhanhoa.com/ten-mien/dang-ky-moi-ten-mien.html";
    //window.open(`https://nhanhoa.com/ten-mien/dang-ky-moi-ten-mien.html`, '_blank');
});
$(document).on("click", "#BUTTON_TEXT20",function () {
    //location.href = "https://umail.vn";
    //window.open(`https://umail.vn`, '_blank');
});
$(document).on("click", "#BUTTON_TEXT21",function () {
    //location.href = "https://umail.vn";
    window.open(`https://nhanhoa.com/may-chu/may-chu.html`, '_blank');
});

$(document).on("click", "#BUTTON_TEXT14",function () {
    //location.href = "https://nhanhoa.com/hosting/wordpress-hosting.html";
    //window.open(`https://nhanhoa.com/hosting/wordpress-hosting.html`, '_blank');
});
$(document).on("click", "#BUTTON_TEXT16",function () {
    //location.href = "https://nhanhoa.com/may-chu/may-chu-ao-vps.html";
    //window.open(`https://nhanhoa.com/may-chu/may-chu-ao-vps.html`, '_blank');
});
$(document).on("click", "#BUTTON_TEXT22",function () {
    //location.href = "https://nhanhoa.com/google-workspace.html";
    //window.open(`https://nhanhoa.com/google-workspace.html`, '_blank');
});
$(document).on("click", "#BUTTON_TEXT18",function () {
    //location.href = "https://nhanhoa.com/email/email-server.html";
    //window.open(`https://nhanhoa.com/email/email-server.html`, '_blank');
});
//scroll

$(document).on("click", ".coupon_code",function () {
    // var copyText = $("#code_km");
    //     copyText.select();
    //     document.execCommand("copy");
        let code = $(this).html();
        setClipboard(code);
        var tooltip = $(this).tooltip({
          trigger: 'manual',
          title: 'ÄĂ£ copy mĂ£ Æ°u Ä‘Ă£i!',
          placement: 'top'
        });
        tooltip.tooltip('show');
        setTimeout(function() {
          tooltip.tooltip('hide');
        }, 1000);
});
function init_copy(code, group){
    setClipboard(code);
    // var tooltip = $(group).tooltip({
    //   trigger: 'manual',
    //   title: 'ÄĂ£ copy mĂ£ Æ°u Ä‘Ă£i!',
    //   placement: 'top'
    // });
    // tooltip.tooltip('show');
    // setTimeout(function() {
    //   tooltip.tooltip('hide');
    // }, 1000);
    $.alert({
        type: 'blue',
        title: 'ThĂ´ng bĂ¡o!',
        content: `ÄĂ£ copy mĂ£ Æ°u Ä‘Ă£i: <strong style="font-weight:bold;">${code}</strong>`,
        boxWidth: '400px',
        useBootstrap: false,
    });
}
function setClipboard(value) {
    var tempInput = document.createElement("input");
    tempInput.style = "position: absolute; left: -1000px; top: -1000px";
    tempInput.value = value;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
}
function get_params(params){
    let urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(params);
}
$(".re-close-popup").click(function () {
    $('.popup-re-call').hide();
    $('.input-content').show();
    $('.success-conten').hide();

    $('.request_phone').val('');
    $('.request_content').val('');
    $('.request_fullnamex').val('');
    $('.request_emailx').val('');

    $('.request_phone').css('background', 'none');
    $('.request_content').css('background', 'none');
    $('.phone_error').hide().html('');
    $('.content_error').hide().html('');

    $('.request_fullnamex').css('background', 'none');
    $('.request_emailx').css('background', 'none');
    $('.fullnamex_error').hide().html('');
    $('.emailx_error').hide().html('');
    $("#request_callback_title").val('');
});

$(".re-close").click(function () {
    $('.cus-re-call').hide();
});
  // gá»­i yĂªu cáº§u liĂªn há»‡
$("#callback").click(function () {
    var request_phone = $('#request_phonex').val();
    var request_content = $('#request_contentx').val();
    var request_fullname = $('#request_fullnamex').val();
    var request_email = $('#request_emailx').val();
    var request_callback_form = $("#request_callback_title").val();
    //dieupt09112016
    var request_location = $("input:radio[name ='request_locationx']:checked").val();
    //
    $('.request_phone').css('background', 'none');
    $('.request_content').css('background', 'none');
    $('.request_emailx').css('background', 'none');
    $('.request_fullnamex').css('background', 'none');
    $('.phone_error').hide().html('');
    $('.content_error').hide().html('');
    $('.fullnamex_error').hide().html('');
    $('.emailx_error').hide().html('');

    if (request_fullname == '' || request_fullname == undefined) {
        $('#request_fullnamex').focus();
        $('#request_fullnamex').css('background', '#eeccce');
        $('.fullnamex_error').show().html('Má»i nháº­p há» vĂ  tĂªn.');
        return false;
    }

    if (request_phone == '' || request_phone == undefined) {
        $('.request_phone').focus();
        $('.request_phone').css('background', '#eeccce');
        $('.phone_error').show().html('Má»i nháº­p sá»‘ Ä‘iá»‡n thoáº¡i.');
        return false;
    }
    if (!check_phone(request_phone)) {
        $('.request_phone').focus();
        $('.request_phone').css('background', '#eeccce');
        $('.phone_error').show().html('Sá»‘ Ä‘iá»‡n thoáº¡i nháº­p vĂ o khĂ´ng há»£p lá»‡.');
        return false;
    }
    if (request_email == '' || request_email == undefined) {
        $('.request_emailx').focus();
        $('.request_emailx').css('background', '#eeccce');
        $('.emailx_error').show().html('Má»i nháº­p email.');
        return false;
    }
    if (!check_email(request_email)) {
        $('.request_emailx').focus();
        $('.request_emailx').css('background', '#eeccce');
        $('.emailx_error').show().html('Email nháº­p vĂ o khĂ´ng há»£p lá»‡.');
        return false;
    }
    if (request_content == '' || request_content == undefined) {
        $('.request_content').focus();
        $('.request_content').css('background', '#eeccce');
        $('.content_error').show().html('Má»i nháº­p ná»™i dung mĂ  báº¡n cáº§n tÆ° váº¥n.');
        return false;
    }

    var tenct = "LANDING CLOUD STORAGE, " + request_callback_form;
    var request_content = tenct + " Há» tĂªn:" + request_fullname + " Email: " + request_email + " Ná»™i dung tÆ° váº¥n: "+ request_content;
    console.log(request_content);
    //return false;

    // console.log(request_location);
    $.ajax({
        type: "POST",
        url: `https://nhanhoa.com/?site=board&view=add_request`,
        data: {
            phone: request_phone,
            content: request_content,
            req_location: request_location,
            traffic_source: trff,

        },

        beforeSend: function (xhr) {
            $('.error_send').show().html('<img src="https://nhanhoa.com/templates/images/icon/icon-loading-bar1.gif"/>');
            $('.js_submit').hide();
        },
        success: function (resource)
        {
            if (resource == 1) {
                $('.input-content').hide();
                $('.success-conten').show();
                $('.error_send').hide();
                $('.js_submit').show();
                setTimeout(function () {
                    $('.re-close-popup').trigger('click');
                }, 5000);

            } else {
                $('.error_send').show().html('<span style="color:red">Gá»­i yĂªu cáº§u tháº¥t báº¡i vui lĂ²ng thá»­ láº¡i!</span>');
                $('.js_submit').show();
                setTimeout(function () {
                    $('.error_send').hide();
                }, 3000);

            }
        }
    });
});
//form submit
$(document).on("click", "#register_form_submit", function(){
    console.log("register_form_submit");
    var phone = $('#phone').val();
    var fullname = $('#fullname').val();
    var email = $('#email').val();
    var location = $('#location_1x').val();
    var content_x = $('#form_message').val();
    content_x = content_x ? content_x : "N/A";
    var tenct = "LANDING CLOUD STORAGE ";
    //
    $('#phone').css('background', 'none');
    $('#company_name').css('background', 'none');
    $('#fullname').css('background', 'none');
    $('#email').css('background', 'none');
    $('#location_1x').css('background', 'none');

    $('.phone_error').hide().html('');
    $('.fullname_error').hide().html('');
    $('.email_error').hide().html('');
    $('.location_1x_error').hide().html('');


    if (fullname == '' || fullname == undefined) {
        $('.fullname').focus();
        // $('.fullname').css('background', '#eeccce');
        // $('.fullname_error').show().html('Má»i nháº­p há» tĂªn ngÆ°á»i Ä‘Äƒng kĂ½');
        alert_form_submit('Má»i nháº­p há» tĂªn ngÆ°á»i Ä‘Äƒng kĂ½', 'red');
        return false;
    }


    if (phone == '' || phone == undefined) {
        $('.phone').focus();
        // $('.phone').css('background', '#eeccce');
        // $('.phone_error').show().html('Má»i nháº­p sá»‘ Ä‘iá»‡n thoáº¡i.');
        alert_form_submit('Má»i nháº­p sá»‘ Ä‘iá»‡n thoáº¡i.', 'red');
        return false;
    }
    if (!check_phone(phone)) {
        $('.phone').focus();
        // $('.phone').css('background', '#eeccce');
        // $('.phone_error').show().html('Sá»‘ Ä‘iá»‡n thoáº¡i nháº­p vĂ o khĂ´ng há»£p lá»‡.');
        alert_form_submit('Sá»‘ Ä‘iá»‡n thoáº¡i nháº­p vĂ o khĂ´ng há»£p lá»‡.', 'red');
        return false;
    }

    if (email == '' || email == undefined) {
        $('.email').focus();
        // $('.email').css('background', '#eeccce');
        // $('.email_error').show().html('Má»i nháº­p Email.');
        alert_form_submit('Má»i nháº­p Email.', 'red');
        return false;
    }

    if (!check_email(email)) {
        $('.email').focus();
        // $('.email').css('background', '#eeccce');
        // $('.email_error').show().html('Email nháº­p vĂ o khĂ´ng há»£p lá»‡.');
        alert_form_submit('Email nháº­p vĂ o khĂ´ng há»£p lá»‡.', 'red');
        return false;
    }
    if (location == '' || location == undefined) {
        $('.location_1x').focus();
        // $('.location_1x').css('background', '#eeccce');
        // $('.location_1x_error').show().html('Vui lĂ²ng chá»n khu vá»±c cá»§a báº¡n');
        alert_form_submit('Vui lĂ²ng chá»n khu vá»±c cá»§a báº¡n', 'red');
        return false;
    }
    var request_content = tenct + "TĂN NGÆ¯á»œI ÄÄ‚NG KĂ:" + fullname + " EMAIL: " + email + " Ná»˜I DUNG TÆ¯ Váº¤N: "+ content_x;
    console.log(request_content);

    $('.error_send').show().html('<img src="https://nhanhoa.com/templates/images/icon/icon-loading-bar1.gif"/>');
    $('#BUTTON_TEXT65 p').html("Äang xá»­ lĂ½...");

    $.ajax({
        type: "POST",
        url: "https://nhanhoa.com/?site=board&view=add_request",
        data: {
            phone: phone,
            content: request_content,
            traffic_source: trff,
            req_location: location,

        },
        beforeSend: function (xhr) {
            $('.error_send').show().html('<img src="https://nhanhoa.com/templates/images/icon/icon-loading-bar1.gif"/>');
            $('#BUTTON_TEXT65 p').html("Äang xá»­ lĂ½...");
        },
        success: function (resource) {
            //console.log(resource);
            if (resource==1) {
                // $.confirm({
                //     title: 'Gá»­i yĂªu cáº§u thĂ nh cĂ´ng',
                //     content: ,
                //     type: 'green',
                //     typeAnimated: true,
                //     autoClose: 'close|5000',
                //     buttons: {
                //         close: function () {
                //             text: 'ÄĂ³ng'
                //         }
                //     }
                // });
                alert_form_submit('Cáº£m Æ¡n báº¡n Ä‘Ă£ Ä‘Äƒng kĂ½ thĂ´ng tin! ChĂºng tĂ´i sáº½ liĂªn há»‡ láº¡i vá»›i báº¡n trong thá»i gian sá»›m nháº¥t!');

                $('.error_send').hide();
                $('#form_register_1')[0].reset();
                $('#BUTTON_TEXT65 p').html("ÄÄ‚NG KĂ NHáº¬N NGAY MĂƒ Æ¯U ÄĂƒI");

            } else {
                $('#form_register_1')[0].reset();
                $('.error_send').hide();
                $('#BUTTON_TEXT65 p').html("ÄÄ‚NG KĂ NHáº¬N NGAY MĂƒ Æ¯U ÄĂƒI");
                // $.confirm({
                //     title: 'Gá»­i yĂªu cáº§u tháº¥t báº¡i',
                //     content: 'Ráº¥t láº¥y lĂ m xin lá»—i yĂªu cáº§u cá»§a báº¡n tháº¥t báº¡i. Vui lĂ²ng nháº¥n F5 vĂ  thá»­ láº¡i!',
                //     type: 'red',
                //     typeAnimated: true,
                //     autoClose: 'close|5000',
                //     buttons: {
                //         close: function () {
                //             text: 'ÄĂ³ng'
                //         }
                //     }
                // });
                alert_form_submit('Ráº¥t láº¥y lĂ m xin lá»—i yĂªu cáº§u cá»§a báº¡n tháº¥t báº¡i. Vui lĂ²ng nháº¥n F5 vĂ  thá»­ láº¡i!', 'red');

            }
        }
    });
});
function alert_form_submit(text, type="green"){
    $.confirm({
        boxWidth: '350px',
        useBootstrap: false,
        title: 'ThĂ´ng bĂ¡o',
        content: text,
        type: type,
        typeAnimated: true,
        buttons: {
            close: function () {
                text: 'ÄĂ³ng'
            }
        }
    });
}
// Validate
function check_phone(str) {
    var error = "";
    var stripped = str.replace(/[\(\)\.\-\ ]/g, '');

    if (str == "") {
        return false;
    } else if (str.length < 10) {
        return false;
    } else if (isNaN(stripped) == true) {
        return false;
    } else if (stripped.length > 12 && stripped.substr(0, 1) != "+") {
        return false;
    } else if (stripped.length > 13 && stripped.substr(0, 1) == "+") {
        return false;
    }

    return true;
}


function check_email(str) {
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,32}$/;
    return emailPattern.test(str);
}


var arCuMessages = [
	"Nhân Hóa xin chào!"
];
var arCuLoop = false;
var arCuCloseLastMessage = false;
var arCuPromptClosed = false;
var _arCuTimeOut = null;
var arCuDelayFirst = 2000;
var arCuTypingTime = 2000;
var arCuMessageTime = 4000;
var arCuClosedCookie = 0;
var arcItems = [];
window.addEventListener('load',
function() {
	arCuClosedCookie = arCuGetCookie('arcu-closed');
jQuery('#arcontactus').on('arcontactus.init',
	function() {
		if (arCuClosedCookie) {
			return false;
		}arCuShowMessages();
	});
jQuery('#arcontactus').on('arcontactus.openMenu',
	function() {
		clearTimeout(_arCuTimeOut);
arCuPromptClosed = true;
jQuery('#contact').contactUs('hidePrompt');
arCuCreateCookie('arcu-closed',
		1,
		30);
	});
jQuery('#arcontactus').on('arcontactus.hidePrompt',
	function() {
		clearTimeout(_arCuTimeOut);
arCuPromptClosed = true;
arCuCreateCookie('arcu-closed',
		1,
		30);
	});
    var arcItem = {};
    arcItem.id = 'msg-item-1';
    arcItem.class = 'msg-item-facebook-messenger ';
    arcItem.title = 'Yêu cầu gọi lại';
    arcItem.icon = '<i class="fas fa-envelope"></i>';
    arcItem.href = 'javascript:void(0)';
    arcItem.color = '#0674e8';
    arcItem.target = '_self';
    arcItem.onClick= function(e){
        // you can write custom click handle here
        e.preventDefault();
        // call closeMenu method
        $(".re-send-call").trigger("click");

    }

    arcItems.push(arcItem);
    var arcItem = {};
    arcItem.id = 'msg-item-2';
    arcItem.class = 'msg-item-zalo';
    arcItem.title = 'Tư vấn trực tuyến';
    arcItem.icon = '<i class="fas fa-comments"></i>';
    arcItem.href = 'javascript:void(0)';
    arcItem.color = '#0674e8';
    arcItem.target = '_self';
    arcItem.onClick = function(e){
        e.preventDefault();

        var liveAgentId = $('[id^="b_fe7bdba0_"]');
        console.log(liveAgentId);
        if(liveAgentId.length){

            $(liveAgentId).trigger("click");
        }
    }

    arcItems.push(arcItem);
    var arcItem = {};
    arcItem.id = 'msg-item-2';
    arcItem.class = 'msg-item-zalo';
    arcItem.title = 'Zalo Chat';
    arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.1 436.6"><path fill="currentColor" class="st0" d="M82.6 380.9c-1.8-.8-3.1-1.7-1-3.5 1.3-1 2.7-1.9 4.1-2.8 13.1-8.5 25.4-17.8 33.5-31.5 6.8-11.4 5.7-18.1-2.8-26.5C69 269.2 48.2 212.5 58.6 145.5 64.5 107.7 81.8 75 107 46.6c15.2-17.2 33.3-31.1 53.1-42.7 1.2-.7 2.9-.9 3.1-2.7-.4-1-1.1-.7-1.7-.7-33.7 0-67.4-.7-101 .2C28.3 1.7.5 26.6.6 62.3c.2 104.3 0 208.6 0 313 0 32.4 24.7 59.5 57 60.7 27.3 1.1 54.6.2 82 .1 2 .1 4 .2 6 .2H290c36 0 72 .2 108 0 33.4 0 60.5-27 60.5-60.3v-.6-58.5c0-1.4.5-2.9-.4-4.4-1.8.1-2.5 1.6-3.5 2.6-19.4 19.5-42.3 35.2-67.4 46.3-61.5 27.1-124.1 29-187.6 7.2-5.5-2-11.5-2.2-17.2-.8-8.4 2.1-16.7 4.6-25 7.1-24.4 7.6-49.3 11-74.8 6zm72.5-168.5c1.7-2.2 2.6-3.5 3.6-4.8 13.1-16.6 26.2-33.2 39.3-49.9 3.8-4.8 7.6-9.7 10-15.5 2.8-6.6-.2-12.8-7-15.2-3-.9-6.2-1.3-9.4-1.1-17.8-.1-35.7-.1-53.5 0-2.5 0-5 .3-7.4.9-5.6 1.4-9 7.1-7.6 12.8 1 3.8 4 6.8 7.8 7.7 2.4.6 4.9.9 7.4.8 10.8.1 21.7 0 32.5.1 1.2 0 2.7-.8 3.6 1-.9 1.2-1.8 2.4-2.7 3.5-15.5 19.6-30.9 39.3-46.4 58.9-3.8 4.9-5.8 10.3-3 16.3s8.5 7.1 14.3 7.5c4.6.3 9.3.1 14 .1 16.2 0 32.3.1 48.5-.1 8.6-.1 13.2-5.3 12.3-13.3-.7-6.3-5-9.6-13-9.7-14.1-.1-28.2 0-43.3 0zm116-52.6c-12.5-10.9-26.3-11.6-39.8-3.6-16.4 9.6-22.4 25.3-20.4 43.5 1.9 17 9.3 30.9 27.1 36.6 11.1 3.6 21.4 2.3 30.5-5.1 2.4-1.9 3.1-1.5 4.8.6 3.3 4.2 9 5.8 14 3.9 5-1.5 8.3-6.1 8.3-11.3.1-20 .2-40 0-60-.1-8-7.6-13.1-15.4-11.5-4.3.9-6.7 3.8-9.1 6.9zm69.3 37.1c-.4 25 20.3 43.9 46.3 41.3 23.9-2.4 39.4-20.3 38.6-45.6-.8-25-19.4-42.1-44.9-41.3-23.9.7-40.8 19.9-40 45.6zm-8.8-19.9c0-15.7.1-31.3 0-47 0-8-5.1-13-12.7-12.9-7.4.1-12.3 5.1-12.4 12.8-.1 4.7 0 9.3 0 14v79.5c0 6.2 3.8 11.6 8.8 12.9 6.9 1.9 14-2.2 15.8-9.1.3-1.2.5-2.4.4-3.7.2-15.5.1-31 .1-46.5z"></path></svg>';
    arcItem.href = 'https://zalo.me/220654257120240702';
    arcItem.color = '#2EA8FF';
    arcItems.push(arcItem);
    var arcItem = {};
    arcItem.id = 'msg-item-8';
    arcItem.class = 'msg-item-phone';
    arcItem.title = 'Gọi miễn phí';
    arcItem.href = 'javascript:void(0)';
    arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';
    arcItem.color = '#ff882a';
    arcItem.target = '_self';

    arcItems.push(arcItem);

    jQuery('#arcontactus').contactUs({
            items: arcItems
        });
    });


function arCuGetCookie(t){
	return document.cookie.length>0&&(c_start=document.cookie.indexOf(t+"="),
	-1!=c_start)?(c_start=c_start+t.length+1,
	c_end=document.cookie.indexOf(";",
	c_start),
	-1==c_end&&(c_end=document.cookie.length),
	unescape(document.cookie.substring(c_start,
	c_end))):0
}function arCuCreateCookie(t,
e,
s){
	var n;if(s){
		var i=new Date;i.setTime(i.getTime()+24*s*60*60*1e3),
		n="; expires="+i.toGMTString()
	}else n="";document.cookie=t+"="+e+n+"; path=/"
}function arCuShowMessage(t){
	if(arCuPromptClosed)return!1;void 0!==arCuMessages[
		t
	]?(jQuery("#arcontactus").contactUs("showPromptTyping"),
	_arCuTimeOut=setTimeout(function(){
		if(arCuPromptClosed)return!1;jQuery("#arcontactus").contactUs("showPrompt",
		{
			content:arCuMessages[
				t
			]
		}),
		t++,
		_arCuTimeOut=setTimeout(function(){
			if(arCuPromptClosed)return!1;arCuShowMessage(t)
		},
		arCuMessageTime)
	},
	arCuTypingTime)):(arCuCloseLastMessage&&jQuery("#arcontactus").contactUs("hidePrompt"),
	arCuLoop&&arCuShowMessage(0))
}function arCuShowMessages(){
	setTimeout(function(){
		clearTimeout(_arCuTimeOut),
		arCuShowMessage(0)
	},
	arCuDelayFirst)
}!function(t){
	function e(s,
	n){
		this._initialized=!1,
		this.settings=null,
		this.options=t.extend({},
		e.Defaults,
		n),
		this.$element=t(s),
		this.init(),
		this.x=0,
		this.y=0,
		this._interval,
		this._menuOpened=!1,
		this._callbackOpened=!1,
		this.countdown=null
	}e.Defaults={
		align:"right",
		countdown:0,
		drag:!1,
		buttonText:"Liên hệ",
		buttonSize:"large",
		menuSize:"normal",
		items:[],
		iconsAnimationSpeed:1200,
		theme:"#f35704",
		buttonIcon:'<svg width="20" height="20" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Canvas" transform="translate(-825 -308)"><g id="Vector"><use xlink:href="#path0_fill0123" transform="translate(825 308)" fill="#FFFFFF"/></g></g><defs><path id="path0_fill0123" d="M 19 4L 17 4L 17 13L 4 13L 4 15C 4 15.55 4.45 16 5 16L 16 16L 20 20L 20 5C 20 4.45 19.55 4 19 4ZM 15 10L 15 1C 15 0.45 14.55 0 14 0L 1 0C 0.45 0 0 0.45 0 1L 0 15L 4 11L 14 11C 14.55 11 15 10.55 15 10Z"/></defs></svg>',
		closeIcon:'<svg width="12" height="13" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Canvas" transform="translate(-4087 108)"><g id="Vector"><use xlink:href="#path0_fill" transform="translate(4087 -108)" fill="currentColor"></use></g></g><defs><path id="path0_fill" d="M 14 1.41L 12.59 0L 7 5.59L 1.41 0L 0 1.41L 5.59 7L 0 12.59L 1.41 14L 7 8.41L 12.59 14L 14 12.59L 8.41 7L 14 1.41Z"></path></defs></svg>'
	},
	e.prototype.init=function(){
		this.destroy(),
		this.settings=t.extend({},
		this.options),
		this.$element.addClass("arcontactus-widget").addClass("arcontactus-message"),
		"left"===this.settings.align?this.$element.addClass("left"):this.$element.addClass("right"),
		this.settings.items.length?(this._initCallbackBlock(),
		this._initMessengersBlock(),
		this._initMessageButton(),
		this._initPrompt(),
		this._initEvents(),
		this.startAnimation(),
		this.$element.addClass("active")):console.info("jquery.contactus:no items"),
		this._initialized=!0,
		this.$element.trigger("arcontactus.init")
	},
	e.prototype.destroy=function(){
		if(!this._initialized)return!1;this.$element.html(""),
		this._initialized=!1,
		this.$element.trigger("arcontactus.destroy")
	},
	e.prototype._initCallbackBlock=function(){},
	e.prototype._initMessengersBlock=function(){
		var e=t("<div>",
		{
			class:"messangers-block"
		});"normal"!==this.settings.menuSize&&"large"!==this.settings.menuSize||e.addClass("lg"),
		"small"===this.settings.menuSize&&e.addClass("sm"),
		this._appendMessengerIcons(e),
		this.$element.append(e)
	},
	e.prototype._appendMessengerIcons=function(e){
		t.each(this.settings.items,
		function(s){
			if("callback"==this.href)var n=t("<div>",
			{
				class:"messanger call-back "+(this.class?this.class:"")
			});else if(n=t("<a>",
			{
				class:"messanger "+(this.class?this.class:""),
				id:this.id?this.id:null,
				href:this.href,
				target:this.target?this.target:"_blank"
			}),
			this.onClick){
				var i=this;n.on("click", function(t){
					i.onClick(t);
				})
			}var a=t("<span>",
			{
				style:this.color?"background-color:"+this.color:null
			});a.append(this.icon),
			n.append(a),
			n.append("<p>"+this.title+"</p>"),
			e.append(n)
		})
	},
	e.prototype._initMessageButton=function(){
		var e=this,
		s=t("<div>",
		{
			class:"arcontactus-message-button",
			style:this._backgroundStyle()
		});"large"===this.settings.buttonSize&&this.$element.addClass("lg"),
		"medium"===this.settings.buttonSize&&this.$element.addClass("md"),
		"small"===this.settings.buttonSize&&this.$element.addClass("sm");var n=t("<div>",
		{
			class:"static"
		});n.append(this.settings.buttonIcon),
		!1!==this.settings.buttonText?n.append("<p>"+this.settings.buttonText+"</p>"):s.addClass("no-text");var i=t("<div>",
		{
			class:"callback-state",
			style:e._colorStyle()
		});i.append(this.settings.callbackStateIcon);var a=t("<div>",
		{
			class:"icons hide"
		}),
		o=t("<div>",
		{
			class:"icons-line"
		});t.each(this.settings.items,
		function(s){
			var n=t("<span>",
			{
				style:e._colorStyle()
			});n.append(this.icon),
			o.append(n)
		}),
		a.append(o);var r=t("<div>",
		{
			class:"arcontactus-close"
		});r.append(this.settings.closeIcon);var c=t("<div>",
		{
			class:"pulsation",
			style:e._backgroundStyle()
		}),
		l=t("<div>",
		{
			class:"pulsation",
			style:e._backgroundStyle()
		});s.append(n).append(i).append(a).append(r).append(c).append(l),
		this.$element.append(s)
	},
	e.prototype._initPrompt=function(){
		var e=t("<div>",
		{
			class:"arcontactus-prompt"
		}),
		s=t("<div>",
		{
			class:"arcontactus-prompt-close",
			style:this._colorStyle()
		});s.append(this.settings.closeIcon);var n=t("<div>",
		{
			class:"arcontactus-prompt-inner"
		});e.append(s).append(n),
		this.$element.append(e)
	},
	e.prototype._initEvents=function(){
		var e=this.$element,
		s=this;e.find(".arcontactus-message-button").on("mousedown",
		function(t){
			s.x=t.pageX,
			s.y=t.pageY
		}).on("mouseup",
		function(t){
			t.pageX===s.x&&t.pageY===s.y&&(s.toggleMenu(),
			t.preventDefault())
		}),
		this.settings.drag&&(e.draggable(),
		e.get(0).addEventListener("touchmove",
		function(t){
			var s=t.targetTouches[
				0
			];e.get(0).style.left=s.pageX-25+"px",
			e.get(0).style.top=s.pageY-25+"px",
			t.preventDefault()
		},
		!1)),
		t(document).on("click", function(t){
			s.closeMenu()
		}),
		e.find(".call-back").on("click", function(){
			s.openCallbackPopup()
		}),
		e.find(".callback-countdown-block-close").on("click", function(){
			null!=s.countdown&&(clearInterval(s.countdown),
			s.countdown=null),
			s.closeCallbackPopup()
		}),
		e.find(".arcontactus-prompt-close").on("click", function(){
			s.hidePrompt()
		}),
		// silv custom: thÄ‚Âªm callback Ă„â€˜Ă¡ÂºÂ¿n vphone
		e.find("#msg-item-8").on("click", function(){
			$('.vf-btn-call').trigger('click');
		}),
		e.on("click", function(t){
            t.stopPropagation();
		})
	},
	e.prototype.show=function(){
		this.$element.addClass("active"),
		this.$element.trigger("arcontactus.show")
	},
	e.prototype.hide=function(){
		this.$element.removeClass("active"),
		this.$element.trigger("arcontactus.hide")
	},
	e.prototype.openMenu=function(){
		var t=this.$element;t.find(".messangers-block").hasClass("show-messageners-block")||(this.stopAnimation(),
		t.find(".messangers-block, .arcontactus-close").addClass("show-messageners-block"),
		t.find(".icons, .static").addClass("hide"),
		t.find(".pulsation").addClass("stop"),
		this._menuOpened=!0,
		this.$element.trigger("arcontactus.openMenu"))
	},
	e.prototype.closeMenu=function(){
		var t=this.$element;t.find(".messangers-block").hasClass("show-messageners-block")&&(t.find(".messangers-block, .arcontactus-close").removeClass("show-messageners-block"),
		t.find(".icons, .static").removeClass("hide"),
		t.find(".pulsation").removeClass("stop"),
		this.startAnimation(),
		this._menuOpened=!1,
		this.$element.trigger("arcontactus.closeMenu"))
	},
	e.prototype.toggleMenu=function(){
		var t=this.$element;if(this.hidePrompt(),
		t.find(".callback-countdown-block").hasClass("display-flex"))return!1;t.find(".messangers-block").hasClass("show-messageners-block")?this.closeMenu():this.openMenu(),
		this.$element.trigger("arcontactus.toggleMenu")
	},
	e.prototype.openCallbackPopup=function(){
		var t=this.$element;t.addClass("opened"),
		this.closeMenu(),
		this.stopAnimation(),
		t.find(".icons, .static").addClass("hide"),
		t.find(".pulsation").addClass("stop"),
		t.find(".callback-countdown-block").addClass("display-flex"),
		this._callbackOpened=!0,
		this.$element.trigger("arcontactus.openCallbackPopup")
	},
	e.prototype.closeCallbackPopup=function(){
		var t=this.$element;t.removeClass("opened"),
		t.find(".messangers-block").removeClass("show-messageners-block"),
		t.find(".arcontactus-close").removeClass("show-messageners-block"),
		t.find(".icons, .static").removeClass("hide"),
		this.startAnimation(),
		this._callbackOpened=!1,
		this.$element.trigger("arcontactus.closeCallbackPopup")
	},
	e.prototype.startAnimation=function(){
		var t=this.$element,
		e=t.find(".icons-line"),
		s=t.find(".static"),
		n=t.find(".icons-line>span:first-child").width()+40;if("large"===this.settings.buttonSize)var i=2,
		a=0;"medium"===this.settings.buttonSize&&(i=4,
		a=-2),
		"small"===this.settings.buttonSize&&(i=4,
		a=-2);var o=t.find(".icons-line>span").length,
		r=0;if(this.stopAnimation(),
		0===this.settings.iconsAnimationSpeed)return!1;this._interval=setInterval(function(){
			0===r&&(e.parent().removeClass("hide"),
			s.addClass("hide"));var t="translate("+-(n*r+i)+"px, "+a+"px)";e.css({
				"-webkit-transform":t,
				"-ms-transform":t,
				transform:t
			}),
			++r>o&&(r>o+1&&(r=0),
			e.parent().addClass("hide"),
			s.removeClass("hide"),
			t="translate("+-i+"px, "+a+"px)",
			e.css({
				"-webkit-transform":t,
				"-ms-transform":t,
				transform:t
			}))
		},
		this.settings.iconsAnimationSpeed)
	},
	e.prototype.stopAnimation=function(){
		clearInterval(this._interval);var t=this.$element,
		e=t.find(".icons-line"),
		s=t.find(".static");e.parent().addClass("hide"),
		s.removeClass("hide");var n="translate(-2px, 0px)";e.css({
			"-webkit-transform":n,
			"-ms-transform":n,
			transform:n
		})
	},
	e.prototype.showPrompt=function(t){
		var e=this.$element.find(".arcontactus-prompt");t&&t.content&&e.find(".arcontactus-prompt-inner").html(t.content),
		e.addClass("active"),
		this.$element.trigger("arcontactus.showPrompt")
	},
	e.prototype.hidePrompt=function(){
		this.$element.find(".arcontactus-prompt").removeClass("active"),
		this.$element.trigger("arcontactus.hidePrompt")
	},
	e.prototype.showPromptTyping=function(){
		this.$element.find(".arcontactus-prompt").find(".arcontactus-prompt-inner").html(""),
		this._insertPromptTyping(),
		this.showPrompt({}),
		this.$element.trigger("arcontactus.showPromptTyping")
	},
	e.prototype._insertPromptTyping=function(){
		var e=this.$element.find(".arcontactus-prompt-inner"),
		s=t("<div>",
		{
			class:"arcontactus-prompt-typing"
		}),
		n=t("<div>");s.append(n),
		s.append(n.clone()),
		s.append(n.clone()),
		e.append(s)
	},
	e.prototype.hidePromptTyping=function(){
		this.$element.find(".arcontactus-prompt").removeClass("active"),
		this.$element.trigger("arcontactus.hidePromptTyping")
	},
	e.prototype._backgroundStyle=function(){
		return"background-color: "+this.settings.theme
	},
	e.prototype._colorStyle=function(){
		return"color: "+this.settings.theme
	},
	t.fn.contactUs=function(s){
		var n=Array.prototype.slice.call(arguments,
		1);return this.each(function(){
			var i=t(this),
			a=i.data("ar.contactus");a||(a=new e(this,
			"object"==typeof s&&s),
			i.data("ar.contactus",
			a)),
			"string"==typeof s&&"_"!==s.charAt(0)&&a[
				s
			].apply(a,
			n)
		})
	},
	t.fn.contactUs.Constructor=e
}(jQuery);

$(document).on("click", ".open-modal-register", function(){
    let package = $(this).data("service");
    let title = $(this).data("title");
    var _that = $(this);
    console.log(title, package);

    $.confirm({
        boxWidth: '350px',
        useBootstrap: false,
        title: `QuĂ½ khĂ¡ch Ä‘ang chá»n gĂ³i dá»‹ch vá»¥ <b>${title}</b>` ,
        type: "green",
        typeAnimated: true,
        titleClass: 'popup-price-title',
        content: `
            <form action="" class="form-price">
                <div class="form-group">
                    <label>Nháº­p sá»‘ lÆ°á»£ng: </label>
                    <input type="number" value="1" placeholder="Nháº­p sá»‘ lÆ°á»£ng" class="quantity form-control" required />
                </div>
                <div class="form-group">
                    <label>Chá»n thá»i gian: </label>
                    <select class="price_period">
                        <option value="1">1 ThĂ¡ng</option>
                        <option value="3">3 ThĂ¡ng</option>
                        <option value="6">6 ThĂ¡ng</option>
                        <option value="12">12 ThĂ¡ng</option>
                        <option value="24">24 ThĂ¡ng</option>
                        <option value="36">36 ThĂ¡ng</option>
                        <option value="48">48 ThĂ¡ng</option>
                        <option value="60">60 ThĂ¡ng</option>
                    </select>
                </div>
            </form>

        `,
        buttons: {
            formSubmit: {
                text: 'Äáº·t hĂ ng',
                btnClass: 'btn-blue',
                action: function () {
                    var quantity = this.$content.find('.quantity').val();
                    var price_period = this.$content.find('.price_period').val();
                    if(!quantity) {
                        alert_form_submit('Vui lĂ²ng nháº­p vĂ o sá»‘ lÆ°á»£ng gĂ³i!', "red");
                        return false;
                    }
                    if(!price_period) {
                        alert_form_submit('Vui lĂ²ng chá»n gĂ³i thá»i gian!', "red");
                        return false;
                    }

                    _that.find("form input[name='account']").val(quantity);
                    _that.find("form input[name='cycle']").val(price_period);

                    alert_form_submit('Äang chuyá»ƒn hÆ°á»›ng Ä‘áº¿n giá» hĂ ng vui lĂ²ng chá» trong giĂ¢y lĂ¡t!');
                    $(`#form_`+package).submit();
                }
            },

            close: function () {
                text: 'ÄĂ³ng'
            }

        },
        onContentReady: function () {
            var jc = this;
            this.$content.find('form').on('submit', function (e) {
                e.preventDefault();
                jc.$$formSubmit.trigger('click'); // reference the button and click it
            });
        }
    });

});


 window.ladi_viewport = function(b) {
            var a = document;
            b = b ? b : "innerWidth";
            var c = window[b];
            var d = c < 768;
            if (typeof window.ladi_is_desktop == "undefined" || window.ladi_is_desktop == undefined) {
                window.ladi_is_desktop = !d;
            }
            var e = 960;
            var f = 420;
            var g = "";
            if (!d) {
                g = "width=" + e + ",user-scalable=no,initial-scale=1.0";
            } else {
                var h = 1;
                var i = f;
                if (i != c) {
                    h = c / i;
                }
                g = "width=" + i + ",user-scalable=no,initial-scale=" + h + ",minimum-scale=" + h + ",maximum-scale=" +
                    h;
            }
            var j = a.getElementById("viewport");
            if (!j) {
                j = a.createElement("meta");
                j.id = "viewport";
                j.name = "viewport";
                a.head.appendChild(j);
            }
            j.setAttribute("content", g);
        };
        window.ladi_viewport();
        window.ladi_fbq_data = [];
        window.ladi_fbq = function() {
            window.ladi_fbq_data.push(arguments);
        };
        window.ladi_ttq_data = [];
        window.ladi_ttq = function() {
            window.ladi_ttq_data.push(arguments);
        };

           window.lazyload_run = function(dom, is_first, check_dom_rect) {
            if (check_dom_rect && (document.body.clientWidth <= 0 || document.body.clientheight <= 0)) {
                return setTimeout(function() {
                    window.lazyload_run(dom, is_first, check_dom_rect);
                }, 1);
            }
            var style_lazyload = document.getElementById("style_lazyload");
            var list_element_lazyload = dom.querySelectorAll(
                "body.lazyload .ladi-overlay, body.lazyload .ladi-box, body.lazyload .ladi-button-background, body.lazyload .ladi-collection-item, body.lazyload .ladi-countdown-background, body.lazyload .ladi-form-item-background, body.lazyload .ladi-form-label-container .ladi-form-label-item.image, body.lazyload .ladi-frame-background, body.lazyload .ladi-gallery-view-item, body.lazyload .ladi-gallery-control-item, body.lazyload .ladi-headline, body.lazyload .ladi-image-background, body.lazyload .ladi-image-compare, body.lazyload .ladi-list-paragraph ul li, body.lazyload .ladi-section-background, body.lazyload .ladi-survey-option-background, body.lazyload .ladi-survey-option-image, body.lazyload .ladi-tabs-background, body.lazyload .ladi-video-background, body.lazyload .ladi-banner, body.lazyload .ladi-spin-lucky-screen, body.lazyload .ladi-spin-lucky-start"
            );
            var docEventScroll = window;
            for (var i = 0; i < list_element_lazyload.length; i++) {
                var rect = list_element_lazyload[i].getBoundingClientRect();
                if (rect.x == "undefined" || rect.x == undefined || rect.y == "undefined" || rect.y == undefined) {
                    rect.x = rect.left;
                    rect.y = rect.top;
                }
                var offset_top = rect.y + window.scrollY;
                if (offset_top >= window.scrollY + window.innerHeight || window.scrollY >= offset_top +
                    list_element_lazyload[i].offsetHeight) {
                    list_element_lazyload[i].classList.add("ladi-lazyload");
                }
            }
            if (typeof style_lazyload != "undefined" && style_lazyload != undefined) {
                style_lazyload.parentElement.removeChild(style_lazyload);
            }
            document.body.classList.remove("lazyload");
            var currentScrollY = window.scrollY;
            var stopLazyload = function(event) {
                if (event.type == "scroll" && window.scrollY == currentScrollY) {
                    currentScrollY = -1;
                    return;
                }
                docEventScroll.removeEventListener("scroll", stopLazyload);
                list_element_lazyload = document.getElementsByClassName("ladi-lazyload");
                while (list_element_lazyload.length > 0) {
                    list_element_lazyload[0].classList.remove("ladi-lazyload");
                }
            };
            if (is_first) {
                var scrollEventPassive = null;
                try {
                    var opts = Object.defineProperty({}, "passive", {
                        get: function() {
                            scrollEventPassive = {
                                passive: true
                            };
                        },
                    });
                    window.addEventListener("testPassive", null, opts);
                    window.removeEventListener("testPassive", null, opts);
                } catch (e) {}
                docEventScroll.addEventListener("scroll", stopLazyload, scrollEventPassive);
            }
            return dom;
        };
        window.lazyload_run(document, true, true);
