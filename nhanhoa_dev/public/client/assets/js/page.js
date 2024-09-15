$(document).ready(function(){
    $(window).scroll(function() {
       var scroll = $(window).scrollTop();
       if (scroll > 100) {
            $(".header-top").addClass("fix");
       } else {
          $(".header-top").removeClass("fix");
       }
    });
});




var x, i, j, l, ll, selElmnt, a, b, c;
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;

  x[i].appendChild(a);
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {

        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
document.addEventListener("click", closeAllSelect);


$(document).on('click', '[nh-show-password]', function(e) {
    e.preventDefault();

    var inputPassword = $(this).closest('.form-group').find('input[name="password"]');
    var attrType = inputPassword.attr('type') == 'password' ? 'text' : 'password';
    inputPassword.attr('type', attrType);
  });

$(document).ready(function() {
    if($('#select-drop').length > 0){
        const optionMenu = document.querySelector(".select-menu"),
          selectBtn = optionMenu.querySelector(".select-btn"),
          options = optionMenu.querySelectorAll(".option"),
          sBtn_text = optionMenu.querySelector(".sBtn-text");

        selectBtn.addEventListener("click", () =>
          optionMenu.classList.toggle("active")
        );


        options.forEach((option) => {
          option.addEventListener("click", () => {

            let selectedOption = option.querySelector(".option-text").innerHTML;

            sBtn_text.innerHTML = selectedOption;
             console.log(sBtn_text.innerHTML);
            optionMenu.classList.remove("active");
          });
        });
    }
});

$(document).on('click', '[nh-time-domain]', function(e) {
  $('#price-service').modal('hide')
});

$(document).on('click', '[nh-toggle]', function(e) {
    $(this).toggleClass('open');
    var key = $(this).attr('nh-toggle');
    var element = $('[nh-toggle-element="' + key + '"]');

    if(element.length > 0){
      element.toggle();
    }
});

$(document).on('click', '.btn-menu-article', function(e) {
    $(this).toggleClass('open');
    var element = $('.info-menu-article');
    if(element.length > 0){
      element.toggleClass('open');
    }
  });

$(document).on('click', '.icon-close-download', function(e) {
  $('.dowload-app').addClass('d-none');
});

//action click
// gửi yêu cầu liên hệ
$("#callback").click(function () {
    console.log(111);
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
        $('.fullnamex_error').show().html('Mời nhập họ và tên.');
        return false;
    }

    if (request_phone == '' || request_phone == undefined) {
        $('.request_phone').focus();
        $('.request_phone').css('background', '#eeccce');
        $('.phone_error').show().html('Mời nhập số điện thoại.');
        return false;
    }
    if (!check_phone(request_phone)) {
        $('.request_phone').focus();
        $('.request_phone').css('background', '#eeccce');
        $('.phone_error').show().html('Số điện thoại nhập vào không hợp lệ.');
        return false;
    }
    if (request_email == '' || request_email == undefined) {
        $('.request_emailx').focus();
        $('.request_emailx').css('background', '#eeccce');
        $('.emailx_error').show().html('Mời nhập email.');
        return false;
    }
    if (!check_email(request_email)) {
        $('.request_emailx').focus();
        $('.request_emailx').css('background', '#eeccce');
        $('.emailx_error').show().html('Email nhập vào không hợp lệ.');
        return false;
    }
    if (request_content == '' || request_content == undefined) {
        $('.request_content').focus();
        $('.request_content').css('background', '#eeccce');
        $('.content_error').show().html('Mời nhập nội dung mà bạn cần tư vấn.');
        return false;
    }

    var tenct = "LANDING QUẢN TRỊ MÁY CHỦ, " + request_callback_form;
    var request_content = tenct + " Họ tên:" + request_fullname + " Email: " + request_email + " Nội dung tư vấn: "+ request_content;
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
                $('.error_send').show().html('<span style="color:red">Gửi yêu cầu thất bại vui lòng thử lại!</span>');
                $('.js_submit').show();
                setTimeout(function () {
                    $('.error_send').hide();
                }, 3000);

            }
        }
    });
});
$(document).on("click", ".re-send-call",function () {
    $('.popup-re-call').show();
});
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

//form submit
$(document).on("click", "#register_form_submit", function(){
    console.log("register_form_submit");
    var phone = $('#phone').val();
    var fullname = $('#fullname').val();
    var email = $('#email').val();
    var location = $('#location_1x').val();
    var content_x = $('#form_message').val();
    content_x = content_x ? content_x : "N/A";
    var tenct = "LANDING QUẢN TRỊ MÁY CHỦ, ";
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
        // $('.fullname_error').show().html('Mời nhập họ tên người đăng ký');
        alert_form_submit('Mời nhập họ tên người đăng ký', 'red');
        return false;
    }


    if (phone == '' || phone == undefined) {
        $('.phone').focus();
        // $('.phone').css('background', '#eeccce');
        // $('.phone_error').show().html('Mời nhập số điện thoại.');
        alert_form_submit('Mời nhập số điện thoại.', 'red');
        return false;
    }
    if (!check_phone(phone)) {
        $('.phone').focus();
        // $('.phone').css('background', '#eeccce');
        // $('.phone_error').show().html('Số điện thoại nhập vào không hợp lệ.');
        alert_form_submit('Số điện thoại nhập vào không hợp lệ.', 'red');
        return false;
    }

    if (email == '' || email == undefined) {
        $('.email').focus();
        // $('.email').css('background', '#eeccce');
        // $('.email_error').show().html('Mời nhập Email.');
        alert_form_submit('Mời nhập Email.', 'red');
        return false;
    }

    if (!check_email(email)) {
        $('.email').focus();
        // $('.email').css('background', '#eeccce');
        // $('.email_error').show().html('Email nhập vào không hợp lệ.');
        alert_form_submit('Email nhập vào không hợp lệ.', 'red');
        return false;
    }
    if (location == '' || location == undefined) {
        $('.location_1x').focus();
        // $('.location_1x').css('background', '#eeccce');
        // $('.location_1x_error').show().html('Vui lòng chọn khu vực của bạn');
        alert_form_submit('Vui lòng chọn khu vực của bạn', 'red');
        return false;
    }
    var request_content = tenct + "TÊN NGƯỜI ĐĂNG KÝ:" + fullname + " EMAIL: " + email + " NỘI DUNG TƯ VẤN: "+ content_x;
    console.log(request_content);

    $('.error_send').show().html('<img src="https://nhanhoa.com/templates/images/icon/icon-loading-bar1.gif"/>');
    $('#BUTTON_TEXT65 p').html("Đang xử lý...");

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
            $('#BUTTON_TEXT65 p').html("Đang xử lý...");
        },
        success: function (resource) {
            //console.log(resource);
            if (resource==1) {
                // $.confirm({
                //     title: 'Gửi yêu cầu thành công',
                //     content: ,
                //     type: 'green',
                //     typeAnimated: true,
                //     autoClose: 'close|5000',
                //     buttons: {
                //         close: function () {
                //             text: 'Đóng'
                //         }
                //     }
                // });
                alert_form_submit('Cảm ơn bạn đã đăng ký thông tin! Chúng tôi sẽ liên hệ lại với bạn trong thời gian sớm nhất!');

                $('.error_send').hide();
                $('#form_register_1')[0].reset();
                $('#BUTTON_TEXT65 p').html("ĐĂNG KÝ NHẬN NGAY MÃ ƯU ĐÃI");

            } else {
                $('#form_register_1')[0].reset();
                $('.error_send').hide();
                $('#BUTTON_TEXT65 p').html("ĐĂNG KÝ NHẬN NGAY MÃ ƯU ĐÃI");
                // $.confirm({
                //     title: 'Gửi yêu cầu thất bại',
                //     content: 'Rất lấy làm xin lỗi yêu cầu của bạn thất bại. Vui lòng nhấn F5 và thử lại!',
                //     type: 'red',
                //     typeAnimated: true,
                //     autoClose: 'close|5000',
                //     buttons: {
                //         close: function () {
                //             text: 'Đóng'
                //         }
                //     }
                // });
                alert_form_submit('Rất lấy làm xin lỗi yêu cầu của bạn thất bại. Vui lòng nhấn F5 và thử lại!', 'red');

            }
        }
    });
});
function alert_form_submit(text, type="green"){
    $.confirm({
        boxWidth: '400px',
        useBootstrap: false,
        title: 'Thông báo',
        content: text,
        type: type,
        typeAnimated: true,
        buttons: {
            close: function () {
                text: 'Đóng'
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
$(".btn_show_popup").on("click", function (e) {
    e.preventDefault();
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
