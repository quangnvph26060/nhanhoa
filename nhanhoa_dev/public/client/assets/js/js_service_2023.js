var xhr = "";

var Service = {
    get_all_whois_params: function () {
        let queryString = window.location.search;
        let urlParams = new URLSearchParams(queryString);
        let domain_multi = urlParams.getAll("domain[]");
        let domain = urlParams.getAll("domain");
        // console.log(domain_multi, domain);
        if (domain_multi.length > 0) {
            try {
                if (check_domain(domain_multi[0]) === true) {
                    if (domain_multi[0]) {
                        setTimeout(function () {
                            $("#domain_input").val(domain_multi[0]);
                            $("#check_whois_2023").trigger("click");
                        }, 500);
                        urlStringDomain = domain_multi[0];
                    }
                } else {
                    console.log("Error domains");
                }
            } catch (err) {
                console.log(err);
            }
        } else if (domain.length > 0) {
            try {
                if (check_domain(domain[0]) === true) {
                    if (domain[0]) {
                        setTimeout(function () {
                            $("#domain_input").val(domain[0]);
                            $("#check_whois_2023").trigger("click");
                        }, 500);
                        urlStringDomain = domain[0];
                    }
                } else {
                    console.log("Error domain");
                }
            } catch (err) {}
        } else {
            try {
                let domain = window.location.pathname.split("&domain=");
                if (check_domain(domain[1])) {
                    setTimeout(function () {
                        $("#domain_input").val(domain[1]);
                        $("#check_whois_2023").trigger("click");
                    }, 500);
                    urlStringDomain = domain[1];
                }
            } catch (err) {}
        }
    },
    index: function () {
        $(document).ready(function () {
            $(document).on("click", ".close_alert", function () {
                $(this).parent().parent().parent().fadeOut();
            });
        });
    },
    locking_domain: function () {
        // Check domain is locking
        $(document).on("click", "#btn_check_locking", function () {
            $(".error_info").html("").hide();
            $(".result").hide();

            var domain = $("#domain").val();

            // Check input
            if (domain == "") {
                $(".error_info").html("Bạn chưa nhập tên miền").show();
                return false;
            }

            var name = domain.split(".");

            if (name.length == 1 || name.length > 3) {
                $(".error_info")
                    .html("Tên miền không đúng định dạng, vui lòng nhập lại")
                    .show();
                return false;
            }

            var check = check_input_domain(name[0]);

            if (check == false) {
                $(".error_info")
                    .html("Tên miền không đúng định dạng, vui lòng nhập lại")
                    .show();
                return false;
            }

            // Check again
            check = check_domain(domain);

            if (check == false) {
                $(".error_info")
                    .html("Tên miền không đúng định dạng, vui lòng nhập lại")
                    .show();
                return false;
            }

            // Check is tmtv
            var coDau = new Array(
                "à",
                "á",
                "ạ",
                "ả",
                "ã",
                "â",
                "ầ",
                "ấ",
                "ậ",
                "ẩ",
                "ẫ",
                "ă",
                "ằ",
                "ắ",
                "ặ",
                "ẳ",
                "ẵ",
                "è",
                "é",
                "ẹ",
                "ẻ",
                "ẽ",
                "ê",
                "ề",
                "ế",
                "ệ",
                "ể",
                "ễ",
                "ì",
                "í",
                "ị",
                "ỉ",
                "ĩ",
                "ò",
                "ó",
                "ọ",
                "ỏ",
                "õ",
                "ô",
                "ồ",
                "ố",
                "ộ",
                "ổ",
                "ỗ",
                "ơ",
                "ờ",
                "ớ",
                "ợ",
                "ở",
                "ỡ",
                "ù",
                "ú",
                "ụ",
                "ủ",
                "ũ",
                "ư",
                "ừ",
                "ứ",
                "ự",
                "ử",
                "ữ",
                "ỳ",
                "ý",
                "ỵ",
                "ỷ",
                "ỹ",
                "đ",
                "À",
                "Á",
                "Ạ",
                "Ả",
                "Ã",
                "Â",
                "Ầ",
                "Ấ",
                "Ậ",
                "Ẩ",
                "Ẫ",
                "Ă",
                "Ằ",
                "Ắ",
                "Ặ",
                "Ẳ",
                "Ẵ",
                "È",
                "É",
                "Ẹ",
                "Ẻ",
                "Ẽ",
                "Ê",
                "Ề",
                "Ế",
                "Ệ",
                "Ể",
                "Ễ",
                "Ì",
                "Í",
                "Ị",
                "Ỉ",
                "Ĩ",
                "Ò",
                "Ó",
                "Ọ",
                "Ỏ",
                "Õ",
                "Ô",
                "Ồ",
                "Ố",
                "Ộ",
                "Ổ",
                "Ỗ",
                "Ơ",
                "Ờ",
                "Ớ",
                "Ợ",
                "Ở",
                "Ỡ",
                "Ù",
                "Ú",
                "Ụ",
                "Ủ",
                "Ũ",
                "Ư",
                "Ừ",
                "Ứ",
                "Ự",
                "Ử",
                "Ữ",
                "Ỳ",
                "Ý",
                "Ỵ",
                "Ỷ",
                "Ỹ",
                "Đ",
                "ê",
                "ù",
                "à"
            );

            var is_in_array = 0;

            mainLoop: for (var j = 0; j < name[0].length; j++) {
                var dh = name[0].charAt(j);
                for (var n = 0; n < coDau.length; n++) {
                    if (dh == coDau[n]) {
                        is_in_array = 1;
                        break mainLoop;
                    }
                }
            }
            var is_domain_tmtv = is_in_array == 0 ? 0 : 1;
            var temp = domain.split(name[0]);
            var ext = temp[1];
            // Get whois
            $.ajax({
                type: "POST",
                url: `${site_root_domain}/?site=boards&view=check_domain`,
                data: {
                    domain: name[0],
                    ext: ext,
                    is_tmtv: is_domain_tmtv,
                },
                beforeSend: function (xhr) {
                    $("#btn_check_locking .icon-search-domain").hide();
                    $("#btn_check_locking .btn-loading-style").removeClass(
                        "d-none"
                    );
                },
                success: function (data) {
                    $("#btn_check_locking .icon-search-domain").show();
                    $("#btn_check_locking .btn-loading-style").addClass(
                        "d-none"
                    );
                    console.log(data);
                    $(".error_info").hide();
                    if (data["status"] == "error") {
                        $(".error_info")
                            .html(
                                "Tên miền không đúng định dạng, vui lòng nhập lại"
                            )
                            .show();
                        return false;
                    }
                    data = JSON.parse(data);
                    if (data["is_lock"] == 0) {
                        $("#result_name").html(
                            "Tên miền <strong>" +
                                data["domainName"] +
                                "</strong> chưa được khóa an toàn!"
                        );
                        $(".result_locking").show();
                    } else {
                        $(".result_locking").hide();
                        $(".info").html(
                            '<h4 style="color:green">Tên miền ' +
                                data["domainName"] +
                                " đã được khóa an toàn</h4><p>Thông tin tên miền:</p><p>Nhà quản lý: " +
                                data["registrarName"] +
                                "</p><p>Trạng thái: </p><p>" +
                                data["status"] +
                                "</p>"
                        );
                        $(".info").show();
                    }
                },
            });
        });
    },
    domain: function () {
        //[NEW] check transfer tên miền
        $(document).on("click", ".btn_transfer", function () {
            let _that = $(this);
            $(".search_domain").removeClass("error");
            $(".error_info").fadeOut();
            var domain = $("#transfer_domain").val();
            if (domain == "") {
                $(".search_domain").addClass("error");
                $(".error_info").fadeIn();
                $("#transfer_domain").focus();
                return false;
            }

            var check = check_domain(domain);
            if (check == true) {
                $.ajax({
                    type: "POST",
                    url: `${site_root_domain}/upgrade/check_domain/`,
                    data: {
                        domain: domain,
                    },
                    beforeSend: function (xhr) {
                        _that.find(".icon-search-domain").addClass("d-none");
                        _that.find(".btn-loading-style").removeClass("d-none");
                    },
                    success: function (resource) {
                        _that.find(".btn-loading-style").addClass("d-none");
                        _that.find(".icon-search-domain").removeClass("d-none");

                        if (resource == "nhanhoa" || resource == "nhanhoa vn") {
                            var msg =
                                '<i class="fa fa-info"></i>Thông tin tên miền: <strong>' +
                                domain +
                                "</strong> Thuộc quản lý của Nhanhoa.com";
                            new_notification(msg, "warning");
                        } else if (resource == "existed") {
                            var msg =
                                "Thông tin tên miền: <strong> " +
                                domain +
                                "</strong><br />Tên miền đã đăng ký dịch vụ.";
                            new_notification(msg, "warning");
                        } else if (resource == "other") {
                            if (is_login != 1) {
                                var msg =
                                    "Thông tin tên miền: <strong>" +
                                    domain +
                                    '</strong><br>Không thuộc quản lý của Nhanhoa.com. Bạn vui lòng <a href="javascript:;" class="btn_show_form_login">đăng nhập</a> để được đăng ký dịch vụ.</div>';
                                new_notification(msg, "success");
                            } else {
                                window.location.href =
                                    site_root_domain +
                                    "/dich-vu/chuyen-ten-mien.html";
                            }
                        }
                    },
                });
            } else {
                $(".search_domain").addClass("error");
                $(".error_info").fadeIn();
                $(".error_info").text(check);
                $("#transfer_domain").focus();
            }
            return false;
        });
        $(document).ready(function () {
            $(".get_focus_domain").click(function () {
                $("#domain_name").focus();
            });
            $(document).on("click", ".btn_show_form_login", function () {
                $("#alert-success").fadeOut();
                $("#show_login > a.dropdown-toggle").removeAttr("data-toggle");
                $("#show_login").addClass("open cancel");
                $("#input_username").focus();
            });
            //cart_number
            //            $(document).on('click', '#show_login.cancel', function () {
            //                $('#show_login > a.dropdown-toggle').attr('data-toggle', 'dropdown');
            //            });
            $(document).on("submit", "#form_check_domain", function () {
                $(".search_domain").removeClass("error");
                $(".error_info").hide();
                var domain = $(this).find("#domain_name").val();
                domain = $.trim(domain);
                if (domain == "") {
                    $("#domain_name").focus();
                    $(".search_domain").addClass("error");
                    $(".error_info").html("Bạn chưa nhập tên miền").fadeIn();
                    return false;
                }

                var name = domain.split(".");
                var check = check_input_domain(name[0]);
                if (name.length > 1 && check === true) {
                    var check = check_domain(domain);
                }

                // Check is tmtv
                var coDau = new Array(
                    "Â",
                    "Ã",
                    "È",
                    "É",
                    "Ê",
                    "Ì",
                    "Í",
                    "Ò",
                    "Ó",
                    "Ô",
                    "Õ",
                    "Ù",
                    "Ú",
                    "Ý",
                    "à",
                    "á",
                    "â",
                    "ã",
                    "è",
                    "é",
                    "ê",
                    "ì",
                    "í",
                    "ò",
                    "ó",
                    "ô",
                    "õ",
                    "ù",
                    "ú",
                    "ý",
                    "Ă",
                    "ă",
                    "Đ",
                    "đ",
                    "Ĩ",
                    "ĩ",
                    "Ũ",
                    "ũ",
                    "Ơ",
                    "ơ",
                    "Ư",
                    "ư",
                    "Ạ",
                    "ạ",
                    "Ả",
                    "ả",
                    "Ấ",
                    "ấ",
                    "Ầ",
                    "ầ",
                    "Ẩ",
                    "ẩ",
                    "Ẫ",
                    "ẫ",
                    "Ậ",
                    "ậ",
                    "Ắ",
                    "ắ",
                    "Ằ",
                    "ằ",
                    "Ẳ",
                    "ẳ",
                    "Ẵ",
                    "ẵ",
                    "Ặ",
                    "ặ",
                    "Ẹ",
                    "ẹ",
                    "Ẻ",
                    "ẻ",
                    "Ẽ",
                    "ẽ",
                    "Ế",
                    "ế",
                    "Ề",
                    "ề",
                    "Ể",
                    "ể",
                    "Ễ",
                    "ễ",
                    "Ệ",
                    "ệ",
                    "Ỉ",
                    "ỉ",
                    "Ị",
                    "ị",
                    "Ọ",
                    "ọ",
                    "Ỏ",
                    "ỏ",
                    "Ố",
                    "ố",
                    "Ồ",
                    "ồ",
                    "Ổ",
                    "ổ",
                    "Ỗ",
                    "ỗ",
                    "Ộ",
                    "ộ",
                    "Ớ",
                    "ớ",
                    "Ờ",
                    "ờ",
                    "Ở",
                    "ở",
                    "Ỡ",
                    "ỡ",
                    "Ợ",
                    "ợ",
                    "Ụ",
                    "ụ",
                    "Ủ",
                    "ủ",
                    "Ứ",
                    "ứ",
                    "Ừ",
                    "ừ",
                    "Ử",
                    "ử",
                    "Ữ",
                    "ữ",
                    "Ự",
                    "ự",
                    "Ỳ",
                    "ỳ",
                    "Ỵ",
                    "ỵ",
                    "Ỷ",
                    "ỷ",
                    "Ỹ",
                    "ỹ"
                );

                var is_in_array = 0;

                mainLoop: for (var j = 0; j < name[0].length; j++) {
                    var dh = name[0].charAt(j);
                    for (var n = 0; n < coDau.length; n++) {
                        if (dh == coDau[n]) {
                            is_in_array = 1;
                            break mainLoop;
                        }
                    }
                }

                if (is_in_array == 0) {
                    $("#is_domain_tmtv").val(0);
                } else {
                    $("#is_domain_tmtv").val(1);
                }

                if (check === true) {
                    return true;
                } else {
                    if (check !== false) {
                        var ms = check;
                    } else {
                        var ms = "Tên miền sai cú pháp mời nhập lại";
                    }
                    $("#domain_name").focus();
                    $(".search_domain").addClass("error");
                    $(".error_info").html(ms).fadeIn();
                    return false;
                }
                return false;
            });
            $(".custom_select_tab").change(function () {
                $(".tab-content .tab-pane")
                    .removeClass("active")
                    .removeClass("in");
                var tab = $(this).val();
                $("#" + tab)
                    .addClass("active")
                    .addClass("in");
            });
        });

        $(document).on("click", ".btn_transfer", function () {
            $(".search_domain").removeClass("error");
            $(".error_info").fadeOut();
            var domain = $("#transfer_domain").val();
            if (domain == "") {
                $(".search_domain").addClass("error");
                $(".error_info").fadeIn();
                $("#transfer_domain").focus();
                return false;
            }

            var check = check_domain(domain);
            if (check == true) {
                $.ajax({
                    type: "POST",
                    url: site_root_domain + "/upgrade/check_domain/",
                    data: {
                        domain: domain,
                    },
                    beforeSend: function (xhr) {
                        $("#loading_submit").fadeIn();
                    },
                    success: function (resource) {
                        $("#loading_submit").fadeOut();

                        if (resource == "nhanhoa" || resource == "nhanhoa vn") {
                            var msg =
                                '<i class="fa fa-info"></i>Thông tin tên miền: <strong>' +
                                domain +
                                "</strong> Thuộc quản lý của Nhanhoa.com";
                            $("#alert-danger").fadeIn();
                            $("#alert-danger strong").remove();
                            $("#alert-danger .alert-text").html(msg);
                        } else if (resource == "existed") {
                            var msg =
                                "Thông tin tên miền: <strong> " +
                                domain +
                                "</strong><br />Tên miền đã đăng ký dịch vụ.";
                            $("#alert-danger").fadeIn();
                            $("#alert-danger strong").remove();
                            $("#alert-danger .alert-text").html(msg);
                        } else if (resource == "other") {
                            if (is_login != 1) {
                                $("#alert-success").fadeIn();
                                $("#alert-success strong").remove();
                                $("#alert-success .alert-text").html(
                                    '<i class="fa fa-check"></i>Thông tin tên miền: <strong>' +
                                        domain +
                                        '</strong><br>Không thuộc quản lý của Nhanhoa.com. Bạn vui lòng <a href="javascript:;" class="btn_show_form_login">đăng nhập</a> để được đăng ký dịch vụ.</div>'
                                );
                            } else {
                                window.location.href =
                                    site_root_domain +
                                    "/dich-vu/chuyen-ten-mien.html";
                            }
                        }
                    },
                });
            } else {
                $(".search_domain").addClass("error");
                $(".error_info").fadeIn();
                $(".error_info").text(check);
                $("#transfer_domain").focus();
            }
            return false;
        });
    },
    multi_domain: function () {
        $(document).on("change", ".type_domain", function () {
            $(".domain-list label.css-label-checkbox").hide();
            var type = $(this).val();
            if (type == "pb") {
                var labels = $(
                    ".domain-list .css-label-checkbox[ext_popular = 1]"
                );
            } else if (type == "vn") {
                var labels = $(
                    ".domain-list .css-label-checkbox[ext_type = 1]"
                );
            } else if (type == "qt") {
                var labels = $(
                    ".domain-list .css-label-checkbox[ext_type = 2]"
                );
            } else if (type == "new") {
                var labels = $(".domain-list .css-label-checkbox[ext_new = 1]");
            } else if (type == "tmtv") {
                var labels = $(
                    ".domain-list .css-label-checkbox[ext_type = 4]"
                );
            } else {
                var labels = $(".domain-list label.css-label-checkbox");
            }
            labels.fadeIn();
        });
        $(document).on("click", "#display_more_domain", function () {
            $(".domain-list").toggleClass("overflow");
            if ($(".domain-list.overflow").length > 0) {
                $(this).html("XEM THEM TÊN MIỀN MỞ RỘNG");
                $("html, body").animate(
                    {
                        scrollTop: $("#registration-domain").offset().top,
                    },
                    1000
                );
                return false;
            } else {
                $(this).html("RÚT GỌN TÊN MIỀN MỞ RỘNG");
            }
        });
        $(document).on("click", "#display_more_domain_dghc", function () {
            $(".domain-list-dghc").toggleClass("hide");
            if ($(".domain-list-dghc.hide").length > 0) {
                $(this).html("XEM THEM TÊN ĐỊA GIỚI HÀNH CHÍNH");
                $("html, body").animate(
                    {
                        scrollTop: $("#registration-domain").offset().top,
                    },
                    1000
                );
                return false;
                $(".domain-list-dghc .css-checkbox").prop("checked", false);
            } else {
                $(this).html("RÚT GỌN TÊN ĐỊA GIỚI HÀNH CHÍNH");
            }
        });
        $(document).on("submit", "#whois_test", function () {
            var domain = $.trim($("#domain").val());
            var n = domain.split("\n").length;
            if (n > 5) {
                $("#alert-warning .alert-text").html(
                    "Bạn chỉ kiểm tra được 5 tên miền."
                );
                $("#alert-warning").fadeIn();
                setTimeout(function () {
                    $("#alert-warning").fadeOut();
                }, 3000);
                return false;
            }

            var domai = domain.split("\n");
            var check = true;
            $.each(domai, function (key, val) {
                var name = val.split(".");
                var check = check_input_domain(name[0]);

                if (name.length > 1 && check === true) {
                    var check = check_domain(domain);
                }

                if (check !== true) {
                    $("#alert-warning .alert-text").html(
                        "Tên miền nhập vào không đúng định dạng."
                    );
                    $("#alert-warning").fadeIn();
                    setTimeout(function () {
                        $("#alert-warning").fadeOut();
                    }, 3000);
                    return false;
                }

                windown.location;

                // Check is tmtv
                var coDau = new Array(
                    "à",
                    "á",
                    "ạ",
                    "ả",
                    "ã",
                    "â",
                    "ầ",
                    "ấ",
                    "ậ",
                    "ẩ",
                    "ẫ",
                    "ă",
                    "ằ",
                    "ắ",
                    "ặ",
                    "ẳ",
                    "ẵ",
                    "è",
                    "é",
                    "ẹ",
                    "ẻ",
                    "ẽ",
                    "ê",
                    "ề",
                    "ế",
                    "ệ",
                    "ể",
                    "ễ",
                    "ì",
                    "í",
                    "ị",
                    "ỉ",
                    "ĩ",
                    "ò",
                    "ó",
                    "ọ",
                    "ỏ",
                    "õ",
                    "ô",
                    "ồ",
                    "ố",
                    "ộ",
                    "ổ",
                    "ỗ",
                    "ơ",
                    "ờ",
                    "ớ",
                    "ợ",
                    "ở",
                    "ỡ",
                    "ù",
                    "ú",
                    "ụ",
                    "ủ",
                    "ũ",
                    "ư",
                    "ừ",
                    "ứ",
                    "ự",
                    "ử",
                    "ữ",
                    "ỳ",
                    "ý",
                    "ỵ",
                    "ỷ",
                    "ỹ",
                    "đ",
                    "À",
                    "Á",
                    "Ạ",
                    "Ả",
                    "Ã",
                    "Â",
                    "Ầ",
                    "Ấ",
                    "Ậ",
                    "Ẩ",
                    "Ẫ",
                    "Ă",
                    "Ằ",
                    "Ắ",
                    "Ặ",
                    "Ẳ",
                    "Ẵ",
                    "È",
                    "É",
                    "Ẹ",
                    "Ẻ",
                    "Ẽ",
                    "Ê",
                    "Ề",
                    "Ế",
                    "Ệ",
                    "Ể",
                    "Ễ",
                    "Ì",
                    "Í",
                    "Ị",
                    "Ỉ",
                    "Ĩ",
                    "Ò",
                    "Ó",
                    "Ọ",
                    "Ỏ",
                    "Õ",
                    "Ô",
                    "Ồ",
                    "Ố",
                    "Ộ",
                    "Ổ",
                    "Ỗ",
                    "Ơ",
                    "Ờ",
                    "Ớ",
                    "Ợ",
                    "Ở",
                    "Ỡ",
                    "Ù",
                    "Ú",
                    "Ụ",
                    "Ủ",
                    "Ũ",
                    "Ư",
                    "Ừ",
                    "Ứ",
                    "Ự",
                    "Ử",
                    "Ữ",
                    "Ỳ",
                    "Ý",
                    "Ỵ",
                    "Ỷ",
                    "Ỹ",
                    "Đ",
                    "ê",
                    "ù",
                    "à"
                );

                var is_in_array = 0;

                mainLoop: for (var j = 0; j < doma[0].length; j++) {
                    var dh = doma[0].charAt(j);
                    for (var n = 0; n < coDau.length; n++) {
                        if (dh == coDau[n]) {
                            is_in_array = 1;
                            break mainLoop;
                        }
                    }
                }

                alert(0);

                if (is_in_array == 0) {
                    $("#is_domain_tmtv").val(0);
                } else {
                    $("#is_domain_tmtv").val(1);
                }

                if (!check) {
                    //return true;
                }
            });

            if (check !== true) {
                $("#alert-warning .alert-text").html(
                    "Tên miền nhập vào không đúng định dạng."
                );
                $("#alert-warning").fadeIn();
                setTimeout(function () {
                    $("#alert-warning").fadeOut();
                }, 3000);
                return false;
            } else {
                return true;
            }
        });
    },
    _domain_whois: function () {
        // Check list domain, if none will return now - hvu 17/04/2017
        if ($(".domain_whois_status").length == "0") {
            $(".net_step_payment").click(function () {
                $("#form_add_domain").submit();
            });
            $(document).on("click", ".continue_to_checkout", function () {
                let _that = $(this);
                _that.find("span").addClass("d-none");
                _that.find(".nh-btn-loader").removeClass("d-none");
                $("#form_add_domain").submit();
            });
            var c_count = $(".cart_number").html();
            c_count = parseInt(c_count);
            if (c_count > 0) {
                //$('.net_step_payment').removeClass('disableddiv');
                $(".check_domain .net_step_payment").text(
                    "Tiếp tục thanh toán"
                );
            } else {
                $(".net_step_payment").addClass("disableddiv");
                $(".check_domain .net_step_payment").hide();
            }
        } else {
            var all_opject = [];
            Service.domain_whois(all_opject, 0);
            $(".net_step_payment").click(function () {
                $("#form_add_domain").submit();
            });
            $(document).on("click", ".continue_to_checkout", function () {
                let _that = $(this);
                _that.find("span").addClass("d-none");
                _that.find(".nh-btn-loader").removeClass("d-none");
                $("#form_add_domain").submit();
            });
            $(document).ajaxStop(function () {
                var c_count = $(".cart_number").html();
                c_count = parseInt(c_count);
                if (c_count > 0) {
                    //$('.net_step_payment').removeClass('disableddiv');
                    $(".check_domain .net_step_payment").text(
                        "Tiếp tục thanh toán"
                    );
                } else {
                    $(".net_step_payment").addClass("disableddiv");
                    $(".check_domain .net_step_payment").hide();
                }
            });
        }
    },
    domain_whois: function (all_opject, stt) {
        $(".domain_whois_status").each(function (index) {
            var _that = $(this);
            var price = _that.data("price");
            var domain = _that.data("domain");
            var ext = _that.data("ext");
            var is_tmtv = _that.data("is_tmtv");

            $.ajax({
                type: "POST",
                url: site_root_domain + "/service/",
                data: {
                    view: "check_whois",
                    site: "whois",
                    domain: domain,
                    ext: ext,
                    is_tmtv: is_tmtv,
                    is_get_premium_price: 1,
                },
                success: function (data) {
                    _that.find(".process").hide();
                    data = $.parseJSON(data);

                    if (data.status == "0") {
                        _that.find(".domain_add_cart").fadeIn("slow");
                        if (data.price) {
                            if (data.price_bk > price) {
                                // Check price premium
                                _that.find(".price .new").text(data.price);
                            }

                            _that.find(".price .old").hide();
                            _that.find(".domain_special").removeClass("hidden");
                        }
                    } else if (data.status == "1") {
                        _that.find(".view_whois").fadeIn("slow");
                        _that.find(".domain").addClass("text-decoration");
                    } else {
                        _that.parent().remove();
                    }
                },
            });
        });
    },
    domain_check: function () {
        $("document").ready(function ($) {
            var nav = $(".check_domain");
            $(window).scroll(function () {
                if ($(this).scrollTop() > 200) {
                    nav.addClass("fix_check_domain");
                } else {
                    nav.removeClass("fix_check_domain");
                }
            });

            $(document).on("submit", "#result_domain_check", function () {
                var _name = $("#domain_name_check").val();
                $("#result_domain_check .search_domain").removeClass(
                    "error_domain"
                );
                var domain = _name.split(",");
                var check = true;
                $.each(domain, function (key, val) {
                    var doma = val.split(".");
                    check = check_input_domain(doma[0]);

                    // Check is tmtv
                    var coDau = new Array(
                        "Â",
                        "Ã",
                        "È",
                        "É",
                        "Ê",
                        "Ì",
                        "Í",
                        "Ò",
                        "Ó",
                        "Ô",
                        "Õ",
                        "Ù",
                        "Ú",
                        "Ý",
                        "à",
                        "á",
                        "â",
                        "ã",
                        "è",
                        "é",
                        "ê",
                        "ì",
                        "í",
                        "ò",
                        "ó",
                        "ô",
                        "õ",
                        "ù",
                        "ú",
                        "ý",
                        "Ă",
                        "ă",
                        "Đ",
                        "đ",
                        "Ĩ",
                        "ĩ",
                        "Ũ",
                        "ũ",
                        "Ơ",
                        "ơ",
                        "Ư",
                        "ư",
                        "Ạ",
                        "ạ",
                        "Ả",
                        "ả",
                        "Ấ",
                        "ấ",
                        "Ầ",
                        "ầ",
                        "Ẩ",
                        "ẩ",
                        "Ẫ",
                        "ẫ",
                        "Ậ",
                        "ậ",
                        "Ắ",
                        "ắ",
                        "Ằ",
                        "ằ",
                        "Ẳ",
                        "ẳ",
                        "Ẵ",
                        "ẵ",
                        "Ặ",
                        "ặ",
                        "Ẹ",
                        "ẹ",
                        "Ẻ",
                        "ẻ",
                        "Ẽ",
                        "ẽ",
                        "Ế",
                        "ế",
                        "Ề",
                        "ề",
                        "Ể",
                        "ể",
                        "Ễ",
                        "ễ",
                        "Ệ",
                        "ệ",
                        "Ỉ",
                        "ỉ",
                        "Ị",
                        "ị",
                        "Ọ",
                        "ọ",
                        "Ỏ",
                        "ỏ",
                        "Ố",
                        "ố",
                        "Ồ",
                        "ồ",
                        "Ổ",
                        "ổ",
                        "Ỗ",
                        "ỗ",
                        "Ộ",
                        "ộ",
                        "Ớ",
                        "ớ",
                        "Ờ",
                        "ờ",
                        "Ở",
                        "ở",
                        "Ỡ",
                        "ỡ",
                        "Ợ",
                        "ợ",
                        "Ụ",
                        "ụ",
                        "Ủ",
                        "ủ",
                        "Ứ",
                        "ứ",
                        "Ừ",
                        "ừ",
                        "Ử",
                        "ử",
                        "Ữ",
                        "ữ",
                        "Ự",
                        "ự",
                        "Ỳ",
                        "ỳ",
                        "Ỵ",
                        "ỵ",
                        "Ỷ",
                        "ỷ",
                        "Ỹ",
                        "ỹ"
                    );

                    var is_in_array = 0;

                    mainLoop: for (var j = 0; j < doma[0].length; j++) {
                        var dh = doma[0].charAt(j);
                        for (var n = 0; n < coDau.length; n++) {
                            if (dh == coDau[n]) {
                                is_in_array = 1;
                                break mainLoop;
                            }
                        }
                    }

                    if (is_in_array == 0) {
                        $("#is_domain_tmtv").val(0);
                    } else {
                        $("#is_domain_tmtv").val(1);
                    }

                    if (!check) {
                        return true;
                    }
                });
                if (!check) {
                    $("#result_domain_check .search_domain").addClass(
                        "error_domain"
                    );
                    return false;
                } else {
                    return true;
                }
            });

            $(document).on("click", ".domain_add_cart", function () {
                var str_dsdomain = $("#dsdmain").val();
                var dsdomain = str_dsdomain.split(",");
                var _that = $(this).closest(".data_content");
                var domain = _that.data("domain");

                var service_id = _that.data("service_id");
                var ext = _that.data("ext");

                if (dsdomain.indexOf(domain + ext) >= 0) {
                    var msg =
                        "Tên miền này đã tồn tại trong giỏ hàng. Quý khách vui lòng đăng ký tên miền khác!";
                    $("#alert-danger strong").remove();
                    $("#alert-danger .alert-text").html(msg);
                    $("#alert-danger").fadeIn();
                    setTimeout(function () {
                        $("#alert-danger").fadeOut();
                    }, 4000);
                    return false;
                }

                var st = domain + "||" + ext + "||" + service_id;
                _that.find(".domain_name_add").val(st);
                _that.find(".domain_add_cart").hide();
                _that.find(".un_select").fadeIn("slow");
            });
            // $(document).on('click', '.domainvn_add_cart', function () {
            //     var str_dsdomain = $("#dsdmain").val();
            //     var dsdomain = str_dsdomain.split(",");
            //     var _that = $(this).closest('.data_content');
            //     var domain = _that.data('domain');

            //     var service_id = _that.data('service_id');
            //     var ext = _that.data('ext');

            //      if (dsdomain.indexOf(domain + ext) >= 0) {
            //         var msg = 'Tên miền này đã tồn tại trong giỏ hàng. Quý khách vui lòng đăng ký tên miền khác!';
            //         $("#alert-danger strong").remove();
            //         $("#alert-danger .alert-text").html(msg);
            //         $("#alert-danger").fadeIn();
            //         setTimeout(function () {
            //             $("#alert-danger").fadeOut();
            //         }, 4000);
            //         return false;
            //     }

            //     var st=domain+'||'+ext+'||'+service_id;
            //     _that.find('.domain_name_add').val(st);
            //     _that.find('.domain_add_cart').hide();
            //     _that.find('.un_select').fadeIn("slow");

            // });
            $(document).on(
                "click",
                ".submit_add_to_cart_domainvn",
                function () {
                    var c_count = $(".cart_number").html();
                    c_count = parseInt(c_count);
                    if (c_count > 0) {
                        console.log("trigger submit");
                        $(this).hide();
                        $(".btn_loading_submit").show();
                        $("#form_add_domain").submit();
                    }
                }
            );
            $(document).on("change", ".domainvn_custom_checkbox", function () {
                var c_count = $(".cart_number").html();
                c_count = parseInt(c_count);

                if ($(this).is(":checked")) {
                    var str_dsdomain = $("#dsdmain").val();
                    var dsdomain = str_dsdomain.split(",");
                    var _that = $(this).closest(".data_content");
                    var domain = _that.data("domain");
                    var service_id = _that.data("service_id");
                    var ext = _that.data("ext");

                    if (dsdomain.indexOf(domain + ext) >= 0) {
                        var msg =
                            "Tên miền này đã tồn tại trong giỏ hàng. Quý khách vui lòng đăng ký tên miền khác!";
                        $("#alert-danger strong").remove();
                        $("#alert-danger .alert-text").html(msg);
                        $("#alert-danger").fadeIn();
                        setTimeout(function () {
                            $("#alert-danger").fadeOut();
                        }, 4000);
                        console.log(msg);
                        return false;
                    }

                    var st = domain + "||" + ext + "||" + service_id;
                    _that.find(".domain_name_add").val(st);
                    _that.find(".domain_add_cart").hide();
                    _that.find(".un_select").fadeIn("slow");
                    c_count++;
                    $(".cart_number").html(c_count);
                    $(".submit_add_to_cart_domainvn").show();
                    $(".badge_count_domainvn").html(c_count);
                } else {
                    var _that = $(this).closest(".data_content");
                    _that.find(".domain_name_add").val("");
                    _that.find(".domain_add_cart").fadeIn("slow");
                    _that.find(".un_select").hide();
                    c_count--;
                    if (c_count < 0) {
                        c_count = 0;
                    }
                    $(".cart_number").html(c_count);
                    if (c_count == 0) {
                        $(".submit_add_to_cart_domainvn").hide();
                    }
                    $(".badge_count_domainvn").html(c_count);
                    return false;
                }
            });

            $(document).on("click", ".btn-remove-cart", function () {
                var _that = $(this).closest(".data_content");
                _that.find(".domain_name_add").val("");
                _that.find(".domain_add_cart").fadeIn("slow");
                _that.find(".un_select").hide();
                return false;
            });
            $(document).on("change", ".check_filter", function () {
                var filter_ext = [];
                $(".check_filter").each(function () {
                    if ($(this).is(":checked")) {
                        filter_ext.push($(this).val());
                    } else {
                        $("#check_all").prop("checked", false);
                    }
                });

                $("li>.domain_whois_status").each(function () {
                    var _that = $(this);
                    var ext = _that.data("ext");
                    if (filter_ext.indexOf(ext) < 0) {
                        _that.parent().hide();
                    } else {
                        _that.parent().fadeIn("slow");
                    }
                });
            });
            $(document).on("change", "#check_all", function () {
                var filter_ext = [];
                if ($(this).is(":checked")) {
                    $(".check_filter").each(function () {
                        filter_ext.push($(this).val());
                        $(this).closest("li").removeClass("hide");
                    });
                    $(".check_filter").prop("checked", true);
                } else {
                    $(".check_filter").prop("checked", false);
                }

                $("li>.domain_whois_status").each(function () {
                    var _that = $(this);
                    var ext = _that.data("ext");
                    if (filter_ext.indexOf(ext) < 0) {
                        _that.parent().hide();
                    } else {
                        _that.parent().fadeIn("slow");
                    }
                });
            });
            $(document).on("click", ".uncheck_all", function () {
                $(".check_filter").prop("checked", false);
                $("#check_all").prop("checked", false);
                $("li > .domain_whois_status").parent().fadeOut();
            });
            $(document).on("click", ".type_ext_checkbox", function () {
                var type_ext_arr = [];
                var filter_ext_new = [];
                //                 var price = parseInt($('.price_out').val());
                $(".type_ext_checkbox").each(function () {
                    if ($(this).is(":checked")) {
                        type_ext_arr.push($(this).val());
                    }
                });
                if (type_ext_arr.length == 0) {
                    $(".domain_list li").removeClass(".hide");
                    $(".domain_whois_status").closest("li").fadeIn();
                } else {
                    $(".check_filter").each(function () {
                        var ext_type = $(this).data("ext_type") + "";
                        if (type_ext_arr.indexOf(ext_type) >= 0) {
                            filter_ext_new.push($(this).val());
                            $(this).prop("checked", true);
                            $(this).closest("li").removeClass("hide");
                        } else {
                            $(this).prop("checked", false);
                            $("#check_all").prop("checked", false);
                            $(this).closest("li").addClass("hide");
                        }
                    });
                    $(".check_whois").each(function () {
                        var ext_type = $(this).data("ext_type") + "";
                        if (type_ext_arr.indexOf(ext_type) >= 0) {
                            //                            filter_ext_new.push($(this).val());
                            //                            $(this).prop( "checked", true);
                            $(this).closest("li").removeClass("hide");
                        } else {
                            //                            $(this).prop( "checked", false);
                            //                            $('#check_all').prop( "checked", false);
                            $(this).closest("li").addClass("hide");
                        }
                    });
                    $("li > .domain_whois_status").each(function () {
                        var _that = $(this);
                        var ext = _that.data("ext");
                        var this_price = parseInt(_that.data("price"));
                        if (filter_ext_new.indexOf(ext) >= 0) {
                            _that.parent().fadeIn("slow");
                        } else {
                            _that.parent().hide();
                        }
                    });
                }
            });

            $(document).on("change", ".check_whois", function () {
                if ($(this).is(":checked")) {
                    var domain_name = $("#domain_name_check").data("domain");
                    var ext = $(this).data("ext");
                    var _that = "";
                    $(".domain_un_whois").each(function () {
                        var _that = $(this);
                        var ext_fil = _that.data("ext");
                        if (ext_fil == ext) {
                            _that.parent().removeClass("hide").fadeIn("slow");
                            _that
                                .removeClass("domain_un_whois")
                                .addClass("domain_whois_status");
                            $.ajax({
                                type: "POST",
                                url: site_root_domain + "/service/",
                                data: {
                                    view: "check_whois",
                                    site: "whois",
                                    domain: domain_name,
                                    ext: ext,
                                },
                                success: function (data) {
                                    _that.find(".process").hide();
                                    if (data == "0") {
                                        _that
                                            .find(".domain_add_cart")
                                            .fadeIn("slow");
                                    } else if (data == "1") {
                                        _that
                                            .find(".view_whois")
                                            .fadeIn("slow");
                                    } else {
                                        _that.parent().remove();
                                    }
                                },
                            });
                        }
                    });

                    $(this).addClass("check_filter").removeClass("check_whois");
                } else {
                }

                $(".domain_whois_status12").each(function () {
                    var _that = $(this);
                    var ext = _that.data("ext");
                    if (filter_ext.indexOf(ext) < 0) {
                        _that.parent().hide();
                    } else {
                        _that.parent().fadeIn("slow");
                    }
                });
            });
            $(".price_out").keyup(function (e) {
                //                var code = (e.keyCode ? e.keyCode : e.which);
                var price = parseInt($(this).val());
                if (price >= 100000) {
                    $(".domain_whois_status").each(function () {
                        var _that = $(this);
                        var this_price = parseInt(_that.data("price"));
                        if (this_price <= price) {
                            _that.parent().fadeIn("slow");
                        } else {
                            _that.parent().hide();
                        }
                    });
                }
            });
            $(document).on("click", ".view_whois", function () {
                var element = $(this);
                var ext = $(this).data("ext");
                var name = $(this).data("domain");
                var is_tmtv = $(this).data("is_tmtv");
                var htmls = $("#loading_submit .loading_sub").html();
                console.log(site_root_domain, "view_whois");
                $.ajax({
                    type: "POST",
                    url: site_root_domain,
                    data: {
                        site: "service",
                        view: "get_whois",
                        domain: name,
                        ext: ext,
                        type: 1,
                        is_admin_module: 1,
                        is_tmtv: is_tmtv,
                    },
                    beforeSend: function (xhr) {
                        element
                            .find(".btn-loading-style")
                            .removeClass("d-none");
                        element.find(".btn_text").hide();
                        element.find(".nh-btn-loader").removeClass("d-none");
                    },
                    success: function (data) {
                        element.find(".btn_text").show();
                        element.find(".nh-btn-loader").addClass("d-none");
                        //console.log(data);
                        $("#alert-warning .alert_sub .alert").removeClass(
                            "alert-warning"
                        );
                        $("#alert-warning .alert_sub .alert-text").html(
                            '<div class="info_whois alert-content-sub">' +
                                data +
                                "</div>"
                        );
                        $("#alert-warning").show();
                        element.find(".btn-loading-style").addClass("d-none");
                    },
                });
            });
        });
    },
    service_plus: function () {
        $("document").ready(function () {
            $(".popup-with-move-anim").magnificPopup({
                type: "inline",
                fixedContentPos: true,
                fixedBgPos: true,
                overflowY: "auto",
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: "my-mfp-slide-bottom pupop_service_cycle",
                callbacks: {
                    open: function () {
                        var cur = this.st.el;
                        var svc_group = cur
                            .closest(".hosting_change")
                            .find(".svc_group")
                            .val();
                        var class_cart_id = cur.data("class");
                        $("#plus").attr("data-class", class_cart_id);
                        $(".service_group_hosting_popup").hide();

                        $(
                            ".service_group_hosting_popup.group_hosting_" +
                                svc_group
                        ).show();
                    },
                    close: function () {
                        $(".service_group_hosting_popup h2").removeClass(
                            "active"
                        );
                        $(".service_group_hosting_popup h2 .fa-check").remove();
                    },
                    // e.t.c.
                },
            });

            $(document).on("change", ".check_service", function () {
                if ($(this).is(":checked")) {
                    $(this).closest("li").find(".hosting_change").fadeIn();
                } else {
                    $(this).closest("li").find(".hosting_change").fadeOut();
                }
            });

            $(document).on("click", ".check__hosting", function () {
                $(this)
                    .closest(".service_group_hosting_popup")
                    .find("h2")
                    .removeClass("active");
                $(this)
                    .closest(".service_group_hosting_popup .box")
                    .removeClass("active");
                $(this)
                    .closest(".service_group_hosting_popup")
                    .find("h2 .fa-check")
                    .remove();
                var class_name = $(this).closest("#plus").attr("data-class");
                var service_id = $(this).data("service_id");
                $("." + class_name).val(service_id);
                var name_host = $(this).find("h2").html();
                var price = $(this).find(".price").text();
                //$('.'+class_name).closest('.hosting_change').find('.popup-with-move-anim').find('span').html(name_host+'<span style="color:red"> - '+price+'</span>');
                $("." + class_name)
                    .closest(".hosting_change")
                    .find(".popup-with-move-anim")
                    .find("span")
                    .html("<strong>Gói dịch vụ:</strong> " + name_host);
                $(this).find(".box").addClass("active");
                $(this)
                    .find("h2")
                    .addClass("active")
                    .append('<i class="fa fa-check"></i>');
                $.magnificPopup.close();
            });
            // $(document).on('click', 'a.this_click', function () {

            //     $('html, body').animate({
            //       scrollTop:  $('#this_click_add_cart').offset().top-200
            //     }, 1000);
            // });
            //[NEW] anhdq
            $(document).on("change", ".select__addon_item", function () {
                var service_id = $(this).val();
                var class_name = $(this).attr("data-class");
                console.log(class_name, service_id);
                if (service_id && class_name) {
                    $("." + class_name).val(service_id);
                }
            });
            $(document).on("click", "#this_click_add_cart", function () {
                var _that = $(this);
                _that.find(".nh-btn-loader").removeClass("d-none");
                _that.find(".btn_text").addClass("d-none");
            });
        });
    },
    service_email: function () {
        $("document").ready(function () {
            $(".popup-with-move-anim").magnificPopup({
                type: "inline",
                fixedContentPos: true,
                fixedBgPos: true,
                overflowY: "auto",
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: "my-mfp-slide-bottom pupop_service_cycle",
            });
            $(document).on("click", ".check_service_email_cycle", function () {
                $(this).closest(".row").find("h2").removeClass("active");
                $(this).closest(".row").find("h2 .fa-check").remove();
                var that_class = $(this).data("class");
                var cycle = $(this).data("cycle");
                var price = $(this).data("price");
                var name_service = $(this).find("h2").html();
                $("." + that_class)
                    .find(".popup-with-move-anim span")
                    .text(name_service + " | " + price);
                $("." + that_class)
                    .find(".price")
                    .val(price);
                $("." + that_class)
                    .find(".cycle")
                    .val(cycle);
                $(this)
                    .find("h2")
                    .addClass("active")
                    .append('<i class="fa fa-check"></i>');
                $.magnificPopup.close();
            });
            $(document).on("click", ".add_service_to_cart", function () {
                var _that = $(".popup-check-domain");
                var cycle = $(this)
                    .closest(".add_to_cart")
                    .find(".cycle")
                    .val();
                var service_id = $(this).data("service_id");
                var service_name = $(this).data("service_name");
                var order_id = $(this)
                    .closest(".cart_service_item_wrapper")
                    .attr("data-order_id");
                _that.find(".service_email_name").text(service_name);
                _that.find(".service_email_cycle").val(cycle);
                _that.find(".service_id").val(service_id);
                _that.find(".order_id").val(order_id);
                _that.fadeIn("slow");
                if (service_id) {
                    $(this).find(".nh-btn-loader").removeClass("d-none");
                    $(this).find(".btn_text").addClass("d-none");
                    window.location.href = `${site_root_domain}/?site=cart&act=cart_add&id=${service_id}&cycle=12`;
                }
            });

            //[NEW] add umail to cart
            $(document).on("click", ".add_cart_umail", function () {
                var _that = $(this);
                var cycle = _that.data("cycle");
                var account = $(this)
                    .closest(".item")
                    .find(".account_input")
                    .val();
                var package = $(this).data("service_id");
                if (!cycle || !package || !account) {
                    System_js.error_notify("Thông tin dịch vụ không hợp lệ #!");
                    return false;
                }
                $.ajax({
                    type: "POST",
                    url: site_root_domain,
                    data: {
                        site: "cart",
                        act: "cart_add_umail",
                        is_ajax: 1,
                        account: account,
                        cycle: cycle,
                        package: package,
                    },
                    beforeSend: function (xhr) {
                        _that.find(".nh-btn-loader").removeClass("d-none");
                        _that.find(".btn_text").hide();
                    },
                    success: function (result) {
                        console.log(result);
                        if (result.success) {
                            window.location.href =
                                site_root_domain + "/?site=cart";
                        } else {
                            _that.find(".nh-btn-loader").addClass("d-none");
                            _that.find(".btn_text").show();
                            System_js.warning_notify(result.message);
                        }
                    },
                });
            });
            //[NEW] add workspace to cart
            $(document).on("click", ".add_cart_workspace", function () {
                var _that = $(this);
                var cycle = _that.data("cycle");
                var account = $(this)
                    .closest(".item")
                    .find(".account_input")
                    .val();
                var package = $(this).data("service_id");
                if (!cycle || !package || !account) {
                    System_js.error_notify("Thông tin dịch vụ không hợp lệ #!");
                    return false;
                }
                $.ajax({
                    type: "POST",
                    url: site_root_domain,
                    data: {
                        site: "cart",
                        act: "cart_add_workspace",
                        is_ajax: 1,
                        account: account,
                        cycle: cycle,
                        package: package,
                    },
                    beforeSend: function (xhr) {
                        _that.find(".nh-btn-loader").removeClass("d-none");
                        _that.find(".btn_text").hide();
                    },
                    success: function (result) {
                        console.log(result);
                        if (result.success) {
                            window.location.href =
                                site_root_domain + "/?site=cart";
                        } else {
                            _that.find(".nh-btn-loader").addClass("d-none");
                            _that.find(".btn_text").show();
                            System_js.warning_notify(result.message);
                        }
                    },
                });
            });
            //[NEW] add workspace education to cart
            $(document).on(
                "click",
                ".add_cart_workspace_education",
                function () {
                    var _that = $(this);
                    var cycle = _that.data("cycle");
                    var account = $(this)
                        .closest(".item")
                        .find(".account_input")
                        .val();
                    var package = $(this).data("service_id");
                    if (!cycle || !package || !account) {
                        System_js.error_notify(
                            "Thông tin dịch vụ không hợp lệ #!"
                        );
                        return false;
                    }
                    $.ajax({
                        type: "POST",
                        url: site_root_domain,
                        data: {
                            site: "cart",
                            act: "cart_add_workspace_education",
                            is_ajax: 1,
                            account: account,
                            cycle: cycle,
                            package: package,
                        },
                        beforeSend: function (xhr) {
                            _that.find(".nh-btn-loader").removeClass("d-none");
                            _that.find(".btn_text").hide();
                        },
                        success: function (result) {
                            console.log(result);
                            if (result.success) {
                                window.location.href =
                                    site_root_domain + "/?site=cart";
                            } else {
                                _that.find(".nh-btn-loader").addClass("d-none");
                                _that.find(".btn_text").show();
                                System_js.warning_notify(result.message);
                            }
                        },
                    });
                }
            );
            $(document).on("click", ".domain-close-popup", function () {
                $(".popup-check-domain").fadeOut();
            });
            $(document).on(
                "click",
                ".popup-check-domain ul.block li",
                function () {
                    $(".popup-check-domain ul.block li").removeClass("active");
                    $(this).addClass("active");
                    var class_active = $(this).data("class");
                    if (class_active == "in_domain") {
                        $(".add_service_cart").fadeIn();
                        $(".input_in_domain").prop("checked", true);
                    } else {
                        $(".input_no_domain").prop("checked", true);
                        $(".add_service_cart").fadeOut();
                    }
                    $(".bloc_domain").hide();
                    $(".bloc_domain." + class_active).fadeIn();
                }
            );
            $(".email_domain").keyup(function (e) {
                var code = e.keyCode ? e.keyCode : e.which;
                if (code == 13) {
                    $(".btn_check_domain").trigger("click");
                }
                return false;
            });

            $(document).on("click", ".add_service_cart", function () {
                var _that = $(".email_domain");

                var domain = _that.val();
                var domain_ext = domain.split(".");
                var domain_name = domain_ext[0];
                var ext =
                    domain_ext.length == 2
                        ? "." + domain_ext[1]
                        : domain_ext.length == 3
                        ? "." + domain_ext[1] + "." + domain_ext[2]
                        : "";
                if (ext == "") {
                    $(".popup_info_alert")
                        .addClass("alert-danger")
                        .html("Tên miền không hợp lệ, mời nhập lại!")
                        .fadeIn();
                    _that.focus();
                    setTimeout(function () {
                        $(".popup_info_alert").fadeOut();
                    }, 3000);
                    return false;
                }
                if (check_input_domain(domain_name)) {
                    //console.log( $("#_form_add_cart").serialize()); return false;
                    $.ajax({
                        type: "POST",
                        url:
                            site_root_domain +
                            "/?site=cart&act=add_cart_service_email",
                        data: $("#_form_add_cart").serialize(),
                        beforeSend: function (xhr) {
                            $(".btn-loading-style").show();
                        },
                        success: function (data) {
                            location.reload();
                            //$('.cart_number').html(data);
                        },
                    });
                } else {
                    $(".popup_info_alert")
                        .addClass("alert-danger")
                        .html("Tên miền không hợp lệ, mời nhập lại!")
                        .fadeIn();
                    _that.focus();
                    setTimeout(function () {
                        $(".popup_info_alert").fadeOut();
                    }, 3000);
                    return false;
                }
            });
            $(document).on("click", ".cro_bw", function () {
                $("#alert-success").fadeOut();
                $("html, body").animate(
                    {
                        scrollTop:
                            $("#addon_upgrade_service").offset().top - 100,
                    },
                    1000
                );
            });
            $(document).on("click", ".close_sus", function () {
                $("#alert-success").fadeOut();
            });

            $(document).on("click", ".check_service_addon", function () {
                var service_id = $(this).data("id");
                var order_id = $(this).attr("data-order_id");
                console.log(order_id);
                if ($(this).is(":checked")) {
                    $("#div_bw_" + service_id + "_" + order_id).fadeIn();
                } else {
                    $("#div_bw_" + service_id + "_" + order_id).fadeOut();
                    $("#bw_" + service_id + "_" + order_id).val(1);
                }
                var price_total = 0;
                $(".check_service_addon:checked").each(function () {
                    var price = parseInt($(this).attr("price"));
                    var id = parseInt($(this).data("id"));
                    var number = $("#bw_" + id).val();
                    if (number == undefined || number == "") {
                        number = 1;
                    }
                    var number = parseInt(number);
                    price_total += number * price;
                });
                $(".total_addon").html(price_total.toLocaleString());
            });
            $(document).on("change", ".number_service", function () {
                var price_total = 0;
                $(".check_service_addon:checked").each(function () {
                    var price = parseInt($(this).attr("price"));
                    var id = parseInt($(this).data("id"));
                    var number = $("#bw_" + id).val();
                    if (number == undefined || number == "") {
                        number = 1;
                    }
                    var number = parseInt(number);
                    price_total += number * price;
                });
                $(".total_addon").html(price_total.toLocaleString());
            });
            $(document).on("click", ".addon_add_cart", function () {
                if ($(".check_service_addon:checked").length > 0) {
                    $("#addon_upgrade_service").submit();
                } else {
                    $("#alert-warning .alert-text").html(
                        "Bạn chưa chọn dịch vụ bổ sung"
                    );
                    $("#alert-warning").fadeIn();
                    setTimeout(function () {
                        $("#alert-warning").fadeOut();
                    }, 3000);
                }
            });
            $(document).on("click", ".note_plus_one,.click_ss_kt", function () {
                $("html, body").animate(
                    {
                        scrollTop: $("#one").offset().top,
                    },
                    1000
                );
            });
            $(document).on(
                "click",
                ".note_plus_two,.click_ss_email",
                function () {
                    $("html, body").animate(
                        {
                            scrollTop: $("#two").offset().top,
                        },
                        1000
                    );
                }
            );
            $(document).on("click", ".note_plus_three", function () {
                $("html, body").animate(
                    {
                        scrollTop: $("#three").offset().top,
                    },
                    1000
                );
            });
            $(document).on(
                "change",
                ".select_service_hosting,.select_email_server",
                function () {
                    var url = $(this).val();
                    window.location.href = url;
                }
            );
        });
    },
    hosting_duytry: function () {
        $(document).ready(function () {
            $(".get_focus_domain").click(function () {
                $("#domain_name").focus();
            });
            $(document).on("click", ".btn_show_form_login", function () {
                $("#alert-success").fadeOut();
                $("#show_login > a.dropdown-toggle").removeAttr("data-toggle");
                $("#show_login").addClass("open cancel");
                $("#input_username").focus();
            });
            //            $(document).on('click', '#show_login.cancel', function () {
            //                $('#show_login > a.dropdown-toggle').attr('data-toggle', 'dropdown');
            //            });
        });
        var e = jQuery.Event("keypress");
        e.which = 13; //choose the one you want
        $("#test")
            .keypress(function () {
                $(".btn_transfer").trigger("click");
            })
            .trigger(e);
        $(document).on("click", ".btn_transfer", function () {
            $(".search_domain").removeClass("error");
            $(".error_info").fadeOut();
            var url_ajax = $(this)
                .closest("form#form_check_order")
                .attr("action");
            var domain = $("#transfer_domain").val();
            if (domain == "") {
                $(".search_domain").addClass("error");
                $(".error_info").fadeIn();
                $("#transfer_domain").focus();
                return false;
            }
            if (is_login != "1") {
                $("#alert-success").fadeOut();
                $("#hide_bg").show();
                $("#show_login > a.dropdown-toggle").removeAttr("data-toggle");
                $("#show_login").addClass("open cancel");
                $("html, body").animate(
                    {
                        scrollTop: $("#show_login").offset().top,
                    },
                    1000
                );
                $("#input_username").focus();
            } else {
                var check = check_domain(domain);
                if (check == true) {
                    $.ajax({
                        type: "POST",
                        url: url_ajax,
                        data: {
                            name: domain,
                            ajax: 1,
                        },
                        beforeSend: function (xhr) {
                            $("#loading_submit .loading_sub div").remove();
                            $(".popup_info_alert")
                                .html($("#loading_submit .loading_sub").html())
                                .fadeIn();
                        },
                        success: function (data) {
                            if (data == "1") {
                                $("#form_check_order").submit();
                                return true;
                            } else {
                                $("#loading_submit").fadeOut();
                                $(".search_domain").addClass("error");
                                $(".error_info").fadeIn();
                                $(".error_info").text(
                                    "Hosting không tồn tại mời nhập lại"
                                );
                                $("#transfer_domain").focus();
                                return false;
                            }
                        },
                    });
                } else {
                    $(".search_domain").addClass("error");
                    $(".error_info").fadeIn();
                    $(".error_info").text(check);
                    $("#transfer_domain").focus();
                }
            }
            return false;
        });
    },
    hosting_nangcap: function () {
        $("#myTab li").click(function () {
            var id = $(this).attr("id");
            $(this).siblings().removeClass("active");
            $(this).addClass("active");
            $('[id^="oda_"]').hide();
            $("#oda_" + id).show();
        });

        $("#select_service").change(function () {
            var id = $(this).val();
            $('[id^="oda_"]').hide();
            $("#oda_" + id).show();
        });

        $(document).on("change", "#reload_cart_cycle", function () {
            var object = document.getElementById("reload_cart_cycle");
            var popt = document.getElementById("cart_cycle");
            for (var i = popt.length - 1; i >= 0; i--) {
                popt.remove(i);
            }
            var price = 0;
            var data =
                object.options[object.selectedIndex].getAttribute("title");

            data = data.split("||");
            var cycle = 1;
            for (var j = 0; j < data.length; j++) {
                if (data[j]) {
                    var opt = document.createElement("option");
                    var item = data[j].split("|");
                    opt.text = item[1];
                    opt.value = item[0];
                    opt.setAttribute("price", item[2]);
                    popt.options.add(opt);
                }
            }
        });
        $(document).on("change", "#oda_2 .css-checkbox", function () {
            var price = 0;
            var cycle = 1;
            $("#oda_2 .css-checkbox:checked").each(function () {
                var pri = parseInt($(this).attr("price"));
                var payment_type = parseInt($(this).attr("payment"));
                if (payment_type != 3) {
                    pri = pri * cycle;
                }
                price += pri;
            });
            $(".total_price")
                .attr("price", price)
                .html(price.toLocaleString() + " đ");
        });
        $(document).on("submit", "#select_service", function () {
            var service = $("#reload_cart_cycle").val();
            if (service == undefined || service == "") {
                $("#alert-danger strong").remove();
                $("#alert-danger .alert-text").html(
                    "Mời bạn chọn gói hosting cần nâng(hạ) cấp"
                );
                $("#alert-danger").fadeIn();
                setTimeout(function () {
                    $("#alert-danger").fadeOut();
                    $("#reload_cart_cycle").focus();
                }, 3000);
                return false;
            }
            return true;
        });
    },
    server_duytry: function () {
        $(document).ready(function () {
            $(".get_focus_domain").click(function () {
                $("#domain_name").focus();
            });
            $(document).on("click", ".btn_show_form_login", function () {
                $("#alert-success").fadeOut();
                $("#show_login > a.dropdown-toggle").removeAttr("data-toggle");
                $("#show_login").addClass("open cancel");
                $("#input_username").focus();
            });
            //            $(document).on('click', '#show_login.cancel', function () {
            //                $('#show_login > a.dropdown-toggle').attr('data-toggle', 'dropdown');
            //            });
        });
        var e = jQuery.Event("keypress");
        e.which = 13; //choose the one you want
        $("#test")
            .keypress(function () {
                $(".btn_transfer").trigger("click");
            })
            .trigger(e);
        $(document).on("click", ".btn_transfer", function () {
            $(".search_domain").removeClass("error");
            $(".error_info").fadeOut();
            var url = $("#form_check_order").attr("action");
            var domain = $("#transfer_domain").val();
            if (domain == "") {
                $(".search_domain").addClass("error");
                $(".error_info").fadeIn();
                $("#transfer_domain").focus();
                return false;
            }
            if (is_login != "1") {
                $("#alert-success").fadeOut();
                $("#hide_bg").show();
                $("#show_login > a.dropdown-toggle").removeAttr("data-toggle");
                $("#show_login").addClass("open cancel");
                $("html, body").animate(
                    {
                        scrollTop: $("#show_login").offset().top,
                    },
                    1000
                );
                $("#input_username").focus();
            } else {
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {
                        order_name: domain,
                        ajax: 1,
                    },
                    beforeSend: function (xhr) {
                        $("#loading_submit .loading_sub div").remove();
                        $(".popup_info_alert")
                            .html($("#loading_submit .loading_sub").html())
                            .fadeIn();
                    },
                    success: function (data) {
                        if (data == "1") {
                            $("#form_check_order").submit();
                            return true;
                        } else {
                            $("#loading_submit").fadeOut();
                            $(".search_domain").addClass("error");
                            $(".error_info").fadeIn();
                            $(".error_info").text(data);
                            $("#transfer_domain").focus();
                            return false;
                        }
                    },
                });
            }
            return false;
        });
    },
    server_nangcap: function () {
        $(document).on("change", "#reload_cart_cycle", function () {
            var object = document.getElementById("reload_cart_cycle");
            var popt = document.getElementById("cart_cycle");
            for (var i = popt.length - 1; i >= 0; i--) {
                popt.remove(i);
            }
            var price = 0;
            var data =
                object.options[object.selectedIndex].getAttribute("title");

            data = data.split("||");
            var cycle = 1;
            for (var j = 0; j < data.length; j++) {
                if (data[j]) {
                    var opt = document.createElement("option");
                    var item = data[j].split("|");
                    opt.text = item[1];
                    opt.value = item[0];
                    opt.setAttribute("price", item[2]);
                    popt.options.add(opt);
                }
            }
        });
        $("#myTab li").click(function () {
            var id = $(this).attr("id");
            $(this).siblings().removeClass("active");
            $(this).addClass("active");
            $('[id^="oda_"]').hide();
            $("#oda_" + id).show();
        });
        $(document).on("change", "#oda_2 .css-checkbox", function () {
            var price = 0;
            var cycle = 1;
            var scv = $(this).attr("svc_id");

            if (scv == 24) {
                $('#oda_2 .css-checkbox[svc_id="24"]:checked').each(
                    function () {
                        var pri = parseInt($(this).attr("price"));
                        var payment_type = parseInt($(this).attr("payment"));
                        if (payment_type != 3) {
                            pri = pri * cycle;
                        }
                        price += pri;
                    }
                );
                $("#total_24")
                    .attr("total", price)
                    .html(price.toLocaleString() + " đ");
            } else {
                price = parseInt($(this).attr("price"));
                $("#total_" + scv)
                    .attr("total", price)
                    .html(price.toLocaleString() + " đ");
            }
            var price_total = 0;
            $(".payment-info-upgrade > li > span.total_price").each(
                function () {
                    var price_t = parseInt($(this).attr("total"));
                    price_total += price_t;
                    $("#service_total")
                        .attr("total", price_total)
                        .html(price_total.toLocaleString() + " đ");
                }
            );
        });
        $("#form_upgrade_service").submit(function () {
            var to = $("#service_total").attr("total");
            if (to == "" || to == undefined) {
                $("#alert-danger strong").remove();
                $("#alert-danger .alert-text").html(
                    "Mời bạn chọn gói dịch vụ thêm"
                );
                $("#alert-danger").fadeIn();
                setTimeout(function () {
                    $("#alert-danger").fadeOut();
                    $("#reload_cart_cycle").focus();
                }, 3000);
                return false;
            }
        });
        $(document).on("submit", "#select_service", function () {
            var service = $("#reload_cart_cycle").val();
            if (service == undefined || service == "") {
                $("#alert-danger strong").remove();
                $("#alert-danger .alert-text").html(
                    "Mời bạn chọn gói server cần nâng(hạ) cấp"
                );
                $("#alert-danger").fadeIn();
                setTimeout(function () {
                    $("#alert-danger").fadeOut();
                    $("#reload_cart_cycle").focus();
                }, 3000);
                return false;
            }
            return true;
        });
    },
    domain_duytry: function () {
        $(document).ready(function () {
            $(".get_focus_domain").click(function () {
                $("#domain_name").focus();
            });
            $(document).on("click", ".btn_show_form_login", function () {
                $("#alert-success").fadeOut();
                $("#show_login > a.dropdown-toggle").removeAttr("data-toggle");
                $("#show_login").addClass("open cancel");
                $("#input_username").focus();
            });
            //            $(document).on('click', '#show_login.cancel', function () {
            //                $('#show_login > a.dropdown-toggle').attr('data-toggle', 'dropdown');
            //            });

            var e = jQuery.Event("keypress");
            e.which = 13; //choose the one you want
            $("#test")
                .keypress(function () {
                    $(".btn_transfer").trigger("click");
                })
                .trigger(e);
            $(document).on("click", ".btn_transfer", function () {
                $(".search_domain").removeClass("error");
                var url_ajax = $("#form_check_order").attr("action");
                $(".error_info").fadeOut();
                var domain = $("#transfer_domain").val();
                if (domain == "") {
                    $(".search_domain").addClass("error");
                    $(".error_info").fadeIn();
                    $("#transfer_domain").focus();
                    return false;
                }
                if (is_login != "1") {
                    $("#alert-success").fadeOut();
                    $("#hide_bg").show();
                    $("#show_login > a.dropdown-toggle").removeAttr(
                        "data-toggle"
                    );
                    $("#show_login").addClass("open cancel");
                    $("html, body").animate(
                        {
                            scrollTop: $("#show_login").offset().top,
                        },
                        1000
                    );
                    $("#input_username").focus();
                } else {
                    var check = check_domain(domain);
                    if (check == true) {
                        $.ajax({
                            type: "POST",
                            url: url_ajax,
                            data: {
                                name: domain,
                                ajax: 1,
                            },
                            beforeSend: function (xhr) {
                                $("#loading_submit .loading_sub div").remove();
                                $(".popup_info_alert")
                                    .html(
                                        $("#loading_submit .loading_sub").html()
                                    )
                                    .fadeIn();
                            },
                            success: function (data) {
                                if (data == "1") {
                                    $("#form_check_order").submit();
                                    return true;
                                } else {
                                    $("#loading_submit").fadeOut();
                                    $(".search_domain").addClass("error");
                                    $(".error_info").fadeIn();
                                    $(".error_info").text(
                                        "Tên miền này không tồn tại mời nhập lại"
                                    );
                                    $("#transfer_domain").focus();
                                    return false;
                                }
                            },
                        });
                    } else {
                        $(".search_domain").addClass("error");
                        $(".error_info").fadeIn();
                        $(".error_info").text(check);
                        $("#transfer_domain").focus();
                    }
                }
                return false;
            });
            $(".custom_select_tab").change(function () {
                $(".tab-content .tab-pane")
                    .removeClass("active")
                    .removeClass("in");
                var tab = $(this).val();
                $("#" + tab)
                    .addClass("active")
                    .addClass("in");
            });
        });
    },
    backorder: function () {
        $(document).on("click", ".btn-remove-cart-ajax", function () {
            var _that = $(this).closest(".data_content");
            _that.find(".domain_name_add").val("");
            _that.find(".domain_add_cart").fadeIn("slow");
            _that.find(".un_select").hide();
            var domain = _that.data("domain");
            var ext = _that.data("ext");

            $.ajax({
                type: "POST",
                url: site_root_domain + "/",
                data: {
                    site: "cart",
                    act: "cart_delete_domain",
                    domain: domain + ext,
                    type: 1,
                },
                beforeSend: function (xhr) {
                    _that.find(".process").show();
                    _that.find(".un_select").hide();
                },
                success: function (data) {
                    _that.find(".process").hide();
                    _that.find(".domain_add_cart").fadeIn("slow");
                },
            });
            return false;
        });
        $(document).ready(function () {
            var _n = $(".whois_domain_backorder").length;
            if (_n > 0) {
                $(".whois_domain_backorder").each(function () {
                    var _that = $(this);
                    var domain = _that.data("domain");
                    var ext = _that.data("ext");
                    $.ajax({
                        type: "POST",
                        url: `${site_root_domain}/service/`,
                        data: {
                            view: "check_whois",
                            site: "whois",
                            domain: domain,
                            ext: ext,
                        },
                        success: function (data) {
                            _that.find(".process").hide();
                            data = jQuery.parseJSON(data);
                            if (data.status == "0") {
                                console.log(1);
                                _that.find(".border_backorder").remove();
                                _that.find(".domain_add_cart").fadeIn("slow");
                                _that.attr("backorder", "0");
                            } else if (data.status == "1") {
                                console.log(2);
                                _that.addClass("domain_backorder");
                                _that
                                    .find(".fa")
                                    .removeClass("fa-check")
                                    .addClass("fa-info");
                                _that.find(".domain_add_cart").html("Giữ chỗ");
                                _that.find(".domain_add_cart").fadeIn("slow");
                                _that.attr("backorder", "1");
                            } else {
                                _that.remove();
                            }
                        },
                    });
                });
            }

            $(document).on("click", ".domain_add_cart", function () {
                var str_dsdomain = $("#dsdmain").val();
                var dsdomain = str_dsdomain.split(",");
                var _that = $(this).closest(".data_content");
                var domain = _that.data("domain");
                var service_id = _that.data("service_id");
                var ext = _that.data("ext");
                var price = _that.data("price");
                var backorder = _that.attr("backorder");

                if (dsdomain.indexOf(domain + ext) >= 0) {
                    var msg =
                        "Tên miền này đã tồn tại trong giỏ hàng. Quý khách vui lòng đăng ký tên miền khác!";
                    System_js.error_notify(msg);
                    return false;
                }

                $.ajax({
                    type: "POST",
                    url: site_root_domain,
                    data: {
                        site: "cart",
                        act: "add",
                        domain: domain + ext,
                        svc_id: service_id,
                        is_backorder: 1,
                        ajax: 1,
                    },
                    beforeSend: function (xhr) {
                        _that.find(".process").show();
                        _that.find(".domain_add_cart").hide();
                    },
                    success: function (data) {
                        _that.find(".process").hide();
                        if (data == 0) {
                            _that.find(".domain_add_cart").fadeIn("slow");
                            var msg =
                                "Tên miền đã được backorder tại Nhân Hòa.<br> Mời bạn chọn tên miền khác.";
                            System_js.error_notify(msg);
                        } else {
                            _that.find(".un_select").fadeIn("slow");
                            var msg = "Mua thành công!";
                            System_js.success_notify(msg);
                            $(".cart_number").html(data);
                        }
                        //                        setTimeout(function () {
                        //                            $("#alert-success").fadeOut();
                        //                        }, 10000);
                    },
                });
                return false;
            });

            $(document).on("click", ".close_sus", function () {
                $("#alert-success").fadeOut();
            });

            $(document).on("click", ".btn_show_form_login", function () {
                $("#alert-success").fadeOut();
                $("#show_login > a.dropdown-toggle").removeAttr("data-toggle");
                $("#show_login").addClass("open cancel");
                $("#input_username").focus();
            });
            //            $(document).on('click', '#show_login.cancel', function () {
            //                $('#show_login > a.dropdown-toggle').attr('data-toggle', 'dropdown');
            //            });

            $(document).on("submit", "#form_check_order", function () {
                $(".search_domain").removeClass("error");
                $(".error_info").fadeOut();
                var domain = $("#domain_input").val();
                if (domain == "") {
                    $(".search_domain").addClass("error");
                    $(".error_info").fadeIn();
                    $("#domain_input").focus();
                    return false;
                }
                //            if(is_login!="1"){
                //                $('#alert-success').fadeOut();
                //                $("#hide_bg").show();
                //                $('#show_login > a.dropdown-toggle').removeAttr('data-toggle');
                //                $('#show_login').addClass('open cancel');
                //                $('html, body').animate({
                //                      scrollTop: $('#show_login').offset().top
                //                    }, 1000);
                //                $('#input_username').focus();
                //            }else{
                var doma = domain.split(",");
                var str = "";
                $.each(doma, function (index, value) {
                    var ext = value.split(".");
                    var n = ext.length;
                    if (ext[n - 1] != "vn") {
                        str = "Dịch vụ chỉ áp dụng cho tên miền Việt Nam";
                        return false;
                    }
                    var check = check_domain(value);

                    if (check !== true) {
                        str = check;
                        return false;
                    }
                });
                if (str == "") {
                    return true;
                } else {
                    $(".search_domain").addClass("error");
                    $(".error_info").fadeIn();
                    $(".error_info").text(str);
                    $("#domain_input").focus();
                }
                return false;
            });
        });
    },
    software: function () {
        $(document).ready(function () {
            $(document).on("click", ".add_cart_service", function () {
                var setupfee = $(this).data("setupfee");
                var id = $(this).data("id");
                var cycle = $(this).data("cycle");
                var price = $(this).data("price");

                window.location.href =
                    site_root_domain +
                    "/?site=cart&act=cart_add_license&id=" +
                    id +
                    (setupfee ? "&setup_fee=" + setupfee : "") +
                    (cycle ? "&cycle=" + cycle : "");
            });
            $(document).on("change", ".select_software_even", function () {
                var service_name = $(this).val();
                window.location.href =
                    site_root_domain + "/license/" + service_name + ".html";
            });
        });
    },
    ssl_bk: function () {
        $(document).ready(function () {
            $(document).on("click", ".cart_add_block_ssl", function () {
                var setupfee = $(this).data("setupfee");
                var id = $(this).data("id");
                var cycle = $(this).data("cycle");
                window.location.href =
                    site_root_domain +
                    "/?site=cart&act=cart_add_ssl&id=" +
                    id +
                    (setupfee ? "&setup_fee=" + setupfee : "") +
                    (cycle ? "&cycle=" + cycle : "");
            });
            $(document).on("change", ".select_service_ssl", function () {
                var service_name = $(this).val();
                window.location.href = service_name;
            });
        });
    },
    ssl: function () {
        $("document").ready(function () {
            $(".popup-with-move-anim").magnificPopup({
                type: "inline",
                fixedContentPos: true,
                fixedBgPos: true,
                overflowY: "auto",
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: "my-mfp-slide-bottom pupop_service_cycle",
            });
            $(document).on("click", ".check_service_email_cycle", function () {
                $(this).closest(".row").find("h2").removeClass("active");
                $(this).closest(".row").find("h2 .fa-check").remove();
                var that_class = $(this).data("class");
                var cycle = $(this).data("cycle");
                var price = $(this).data("price");
                var name_service = $(this).find("h2").html();
                $("." + that_class)
                    .find(".popup-with-move-anim span")
                    .text(name_service + " | " + price);
                $("." + that_class)
                    .find(".price")
                    .val(price);
                $("." + that_class)
                    .find(".cycle")
                    .val(cycle);
                $(this)
                    .find("h2")
                    .addClass("active")
                    .append('<i class="fa fa-check"></i>');
                $.magnificPopup.close();
            });
            $(document).on("click", ".cart_add_block_ssl", function () {
                var _that = $(".popup-check-domain");
                var cycle = 1;
                var service_id = $(this).data("service_id");
                var setup_fee = $(this).data("setup_fee");
                var service_name = $(this).data("service_name");
                _that.find(".service_email_name").text(service_name);
                _that.find(".service_cycle").val(cycle);
                _that.find(".service_id").val(service_id);
                _that.find(".setup_fee").val(setup_fee);

                _that.fadeIn("slow");
            });
            $(document).on("click", ".domain-close-popup", function () {
                $(".popup-check-domain").fadeOut();
            });
            $(document).on(
                "click",
                ".popup-check-domain ul.block li",
                function () {
                    $(".popup-check-domain ul.block li").removeClass("active");
                    $(this).addClass("active");
                    var class_active = $(this).data("class");
                    if (class_active == "in_domain") {
                        $(".add_service_cart").fadeIn();
                        $(".input_in_domain").prop("checked", true);
                    } else {
                        $(".input_no_domain").prop("checked", true);
                        $(".add_service_cart").fadeOut();
                    }
                    $(".bloc_domain").hide();
                    $(".bloc_domain." + class_active).fadeIn();
                }
            );
            $(".email_domain").keyup(function (e) {
                var code = e.keyCode ? e.keyCode : e.which;
                if (code == 13) {
                    $(".btn_check_domain").trigger("click");
                }
                return false;
            });
            $(document).on("click", ".btn_check_domain", function () {
                var domain = $(".email_domain").val();
                var domain_ext = domain.split(".");
                var domain_name = domain_ext[0];
                var ext =
                    domain_ext.length == 2
                        ? "." + domain_ext[1]
                        : domain_ext.length == 3
                        ? "." + domain_ext[1] + "." + domain_ext[2]
                        : "";
                $(".add_service_cart").hide();
                $(".popup_info_alert")
                    .removeClass("alert-success")
                    .addClass("alert-danger");
                if (ext == "") {
                    $(".popup_info_alert")
                        .html("Tên miền không hợp lệ, mời nhập lại!")
                        .fadeIn();
                    $(".email_domain").focus();
                    //                    setTimeout(function () {
                    //                        $('.popup_info_alert').fadeOut();
                    //                    }, 7000);
                    return false;
                }
                if (check_input_domain(domain_name)) {
                    var st = check_domain(domain);
                    if (st != true) {
                        $(".popup_info_alert").html(st).fadeIn();
                        $(".email_domain").focus();
                        //                        setTimeout(function () {
                        //                            $('.popup_info_alert').fadeOut();
                        //                        }, 7000);
                        return false;
                    }

                    $.ajax({
                        type: "POST",
                        url: site_root_domain + "/service/",
                        data: {
                            view: "check_whois",
                            site: "whois",
                            domain: domain_name,
                            ext: ext,
                            is_get_premium_price: 1,
                        },
                        beforeSend: function (xhr) {
                            $("#loading_submit .loading_sub div").remove();
                            $(".popup_info_alert")
                                .html($("#loading_submit .loading_sub").html())
                                .fadeIn();
                        },
                        success: function (data) {
                            data = $.parseJSON(data);
                            if (data.status == "0") {
                                $(".popup_info_alert")
                                    .html(
                                        "Tên miền này chưa được đăng ký. Đăng ký mới tên miền này cùng SSL"
                                    )
                                    .fadeIn();
                                $(".is_register_domain").val("1");
                                var msg = "Đăng ký cả tên miền và SSL";
                                if (data.price) {
                                    var msg = "Đăng ký cả tên miền và SSL";
                                }
                                //                                 setTimeout(function () {
                                //                                    $('.popup_info_alert').fadeOut();
                                //                                }, 10000);
                            } else {
                                $(".popup_info_alert")
                                    .removeClass("alert-danger")
                                    .addClass("alert-success")
                                    .html(
                                        "Tên miền đã được đăng ký! Bạn có thể sử dụng tên miền này để đăng ký SSL"
                                    );
                                $(".is_register_domain").val("0");
                                $(".email_domain").focus();
                                //                                setTimeout(function () {
                                //                                    $('.popup_info_alert').fadeOut();
                                //                                }, 10000);
                                var msg = "Đăng ký SSL";
                                //                                return false;
                            }
                            $(".add_service_cart").text(msg).fadeIn();
                        },
                    });
                } else {
                    $(".popup_info_alert")
                        .html("Tên miền không hợp lệ, mời nhập lại!")
                        .fadeIn();
                    $(".email_domain").focus();
                    setTimeout(function () {
                        $(".popup_info_alert").fadeOut();
                    }, 3000);
                    return false;
                }
            });
            $(document).on("click", ".add_service_cart", function () {
                var service_id = $(this).attr("data-service_id");
                if (service_id) {
                    $(this).find(".nh-btn-loader").removeClass("d-none");
                    $(this).find(".btn_text").addClass("d-none");
                    window.location.href =
                        site_root_domain +
                        "/?site=cart&act=cart_add_ssl&id=" +
                        service_id;
                }
            });
            $(document).on("click", ".close_sus", function () {
                $("#alert-success").fadeOut();
            });
        });
    },
    vps: function () {
        $(document).ready(function () {
            /* SMOTH SCOLING */
            //   $('a[href*=#]:not([data-toggle="tab"])').click(function() {
            //   if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            //     var target = $(this.hash);
            //     target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            //     if (target.length) {
            //       $('html, body').animate({
            //         scrollTop: target.offset().top
            //       }, 1000);
            //       return false;
            //     }
            //   }
            // });
            $(".popup-with-move-anim").magnificPopup({
                type: "inline",
                fixedContentPos: true,
                fixedBgPos: true,
                overflowY: "auto",
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: "my-mfp-slide-bottom pupop_service_cycle",
            });

            $(document).on("click", ".check_service_email_cycle", function () {
                $(this).closest(".row").find("h2").removeClass("active");
                $(this).closest(".row").find("h2 .fa-check").remove();
                var that_class = $(this).data("class");
                var cycle = $(this).data("cycle");
                var price = $(this).data("price");
                var name_service = $(this).find("h2").html();
                $("." + that_class)
                    .find(".popup-with-move-anim span")
                    .text(name_service + " | " + price);
                $("." + that_class)
                    .find(".price")
                    .val(price);
                $("." + that_class)
                    .find(".cycle")
                    .val(cycle);
                $(this)
                    .find("h2")
                    .addClass("active")
                    .append('<i class="fa fa-check"></i>');
                $.magnificPopup.close();
            });
            $(document).on("click", ".add_service_vps_to_cart", function () {
                //[NEW] anhdq thêm dịch vụ vps vào giỏ hàng
                let _that = $(this);
                var cloud_virt = _that
                    .closest(".add_to_cart")
                    .find(".cloud_virt")
                    .val();
                cloud_virt = parseInt(cloud_virt);
                var os = 1;
                var service_id = _that.data("service_id");
                var cycle = 12;
                var tpl_id = 0;
                //return false;
                // window.location.href = site_root_domain + "/?site=cart&act=cart_add_serverpcs&id=" + service_id  + "&tpl_id="+tpl_id+"&server_os=" + os + (cycle ? "&cycle="+cycle : "") ;
                if (service_id) {
                    _that.find(".nh-btn-loader").removeClass("d-none");
                    _that.find(".btn_text").addClass("d-none");
                }
                if (cloud_virt) {
                    var cloud_region = _that
                        .closest(".add_to_cart")
                        .find(".cloud_region")
                        .val();
                    window.location.href =
                        site_root_domain +
                        "/?site=cart&act=cart_add_virt&id=" +
                        service_id +
                        "&cloud_region=" +
                        cloud_region +
                        "&tpl_id=" +
                        tpl_id +
                        "&server_os=" +
                        os +
                        (cycle ? "&cycle=" + cycle : "") +
                        "&cloud_virt=" +
                        cloud_virt +
                        "&cloud_region=" +
                        cloud_region;
                } else {
                    window.location.href =
                        site_root_domain +
                        "/?site=cart&act=cart_add_serverpcs&id=" +
                        service_id +
                        "&cloud_region=" +
                        cloud_region +
                        "&tpl_id=" +
                        tpl_id +
                        "&server_os=" +
                        os +
                        (cycle ? "&cycle=" + cycle : "");
                }
            });

            $(document).on("click", ".add_service_colo", function () {
                var service_id = $(this).attr("data-service_id");
                if (service_id) {
                    $(this).find(".nh-btn-loader").removeClass("d-none");
                    $(this).find(".btn_text").addClass("d-none");
                    //window.location.href = `${site_root_domain}/?site=cart&act=cart_add&id=${service_id}&cycle=12`;
                }
            });

            $(".custom_select_tab").change(function () {
                $(".tab-content .tab-pane")
                    .removeClass("active")
                    .removeClass("in");
                var tab = $(this).val();
                $("#" + tab)
                    .addClass("active")
                    .addClass("in");
            });
            $(document).on("click", ".vps_focus", function () {
                var calss_focus = $(this).attr("href");
                $("html, body").animate(
                    {
                        scrollTop: $("#" + calss_focus).offset().top,
                    },
                    1000
                );
                return false;
            });
            //vps mmo script
            $(document).on("click", ".region_filter", function () {
                var region_location = $(this).attr("data-region_location");
                console.log(region_location);
                $(this)
                    .closest(".cloud_region_popup")
                    .find(".region_filter")
                    .each(function () {
                        if ($(this).hasClass("active")) {
                            $(this).removeClass("active");
                        }
                    });

                if (region_location != "all") {
                    $(this).addClass("active");
                    $(this)
                        .closest(".cloud_region_popup")
                        .find(".region-data-list .check_cloud_mmo_region")
                        .each(function () {
                            var _that = $(this);
                            var _that_region_location = _that.attr(
                                "data-region_location"
                            );
                            console.log(_that_region_location);
                            if (_that_region_location != region_location) {
                                _that.addClass("hidden");
                            } else {
                                _that.removeClass("hidden");
                            }
                        });
                } else {
                    $(this).addClass("active");
                    $(this)
                        .closest(".cloud_region_popup")
                        .find(".region-data-list .check_cloud_mmo_region")
                        .each(function () {
                            var _that = $(this);
                            _that.removeClass("hidden");
                        });
                }
            });
            //check vps momo region
            $(document).on("click", ".check_cloud_mmo_region", function () {
                var region_id = $(this).attr("data-cloud_region_id");

                $(this)
                    .closest(".cloud_region_popup")
                    .find(".check_cloud_mmo_region")
                    .each(function () {
                        $(this).removeClass("active");
                    });
                //$(this).closest('.row').find('h2 .fa-check').remove();
                var that_class = $(this).attr("data-class");
                var region_country = $(this).attr("data-region_country");
                var region_name = $(this).attr("data-region_name");
                var region_flag = $(this).attr("data-region_flag");
                var region_code = $(this).attr("data-region_code");
                //console.log($('.' + that_class).html());
                $("." + that_class)
                    .find(".popup-with-move-anim")
                    .html(
                        `<label> Khu vực: ${region_name} | ${region_country} </label> <i class=" flag-icon flag-icon-${region_flag}"></i>`
                    );

                $("." + that_class)
                    .find(".cloud_region")
                    .val(region_code);
                $(this).addClass("active");
                $.magnificPopup.close();
            });
        });
    },
    fqa: function () {
        $(".service_fqa h5").click(function () {
            $(".service_fqa ul > li > p").hide();
            $(this).closest("li").find("p").fadeIn();
        });
    },
    pages: function () {
        $(document).ready(function () {
            $(".custom_select_tab").change(function () {
                $(".tab-content .tab-pane")
                    .removeClass("active")
                    .removeClass("in");
                var tab = $(this).val();
                $("#" + tab)
                    .addClass("active")
                    .addClass("in");
            });

            $(document).on("click", ".btn_register_reseler", function () {
                $("#show_login > a.dropdown-toggle").removeAttr("data-toggle");
                $("#hide_bg").show();
                $("#show_login").addClass("open cancel");

                $("#input_username").focus();
                $("html, body").animate(
                    {
                        scrollTop: $("#show_login").offset().top,
                    },
                    1000
                );
            });
            $(document).on("click", ".v_container", function () {
                $(".v_container .v_content").removeClass("active");
                $(this).find(".v_content").addClass("active");
                var values = $(this)
                    .find(".v_content .team_support")
                    .attr("data-value");
                $("#contact_category option[value=" + values + "]").prop(
                    "selected",
                    true
                );
            });
            $(document).on("submit", "#form_contact", function () {
                $(".im_not_robot .alert_tooltip_email").hide();
                var email = $(".contact_email").val();
                var title = $(".contact_title").val();
                var fullname = $(".contact_realname").val();
                var content = $(".contact_content").val();
                $(".alert_tooltip_email.alert_error").remove();
                if (fullname == "" || fullname == undefined) {
                    var msg = "Mời bạn nhập họ tên";
                    __get_forcus($("#form_contact .contact_realname"), msg);
                    return false;
                }
                if (email == "" || email == undefined) {
                    var msg = "Mời bạn nhập Email";
                    __get_forcus($("#form_contact .contact_email"), msg);
                    return false;
                }
                if (title == "" || title == undefined) {
                    var msg = "Mời bạn nhập tiêu đề!";
                    __get_forcus($("#form_contact .contact_title"), msg);
                    return false;
                }

                if (content == "" || content == undefined) {
                    var msg = "Mời bạn nhập nội dung";
                    __get_forcus($("#form_contact .contact_content"), msg);
                    return false;
                }

                if ($("#im_not_robot").is(":checked")) {
                    var url = $(this).attr("action");
                    $.ajax({
                        type: "POST",
                        url: url + "&ajax=1",
                        data: $("#form_contact").serialize(),
                        beforeSend: function (xhr) {
                            $("#loading_submit").fadeIn();
                        },
                        success: function (data) {
                            $("#loading_submit").hide();
                            if (data == 1) {
                                $("#alert-success .alert-text").html(
                                    "<h2>Gửi phản hồi thành công</h2><br>Cảm ơn bạn đã quan tâm và gửi phản hồi cho chúng tôi, Chúng tôi sẽ xem xét và trả lòi cho bạn sau"
                                );
                                $("#alert-success").fadeIn();
                                setTimeout(function () {
                                    $("#alert-success").fadeOut();
                                }, 3000);
                            } else {
                                $("#alert-danger .alert-text").html(data);
                                $("#alert-danger").fadeIn();
                                setTimeout(function () {
                                    $("#alert-danger").fadeOut();
                                }, 4000);
                            }
                        },
                    });
                    return false;
                } else {
                    $(".im_not_robot .alert_tooltip_email").fadeIn();
                    $("html, body").animate(
                        {
                            scrollTop: $("#form_contact").offset().top,
                        },
                        500
                    );
                    return false;
                }
                return false;
            });

            $(document).on("change", ".select_tab_page", function () {
                var url = $(this).val();
                window.location.href = url;
            });
            $(document).on("click", ".faq > ul > li", function () {
                $(".faq > ul > li p").hide();
                $(this).find("p").fadeIn();
            });
            $(document).on("submit", "#recui_form", function () {
                var _that = $(this);
                var name = _that.find(".recui_name").val();
                var bday = _that.find(".recui_bday").val();
                var bmonth = _that.find(".recui_bmonth").val();
                var byear = _that.find(".recui_byear").val();
                var address = _that.find(".recui_address").val();
                var email = _that.find(".recui_email").val();
                var phone = _that.find(".recui_phone").val();

                $(".alert_tooltip_email.alert_error").remove();
                if (name == "" || name == undefined) {
                    var msg = "Mời bạn nhập họ tên";
                    __get_forcus($("#recui_form .recui_name"), msg);
                    return false;
                }
                if (bday == "" || bday == undefined) {
                    var msg = "Mời bạn chọn ngày";
                    __get_forcus($("#recui_form .recui_bday"), msg);
                    return false;
                }
                if (bmonth == "" || bmonth == undefined) {
                    var msg = "Mời bạn chọn tháng!";
                    __get_forcus($("#recui_form .recui_bmonth"), msg);
                    return false;
                }

                if (byear == "" || byear == undefined) {
                    var msg = "Mời bạn chọn năm";
                    __get_forcus($("#recui_form .recui_byear"), msg);
                    return false;
                }
                if (address == "" || address == undefined) {
                    var msg = "Thông tin không được để trống";
                    __get_forcus($("#recui_form .recui_address"), msg);
                    return false;
                }

                if (email == "" || email == undefined) {
                    var msg = "Địa chỉ email không được để trống";
                    __get_forcus($("#recui_form .recui_email"), msg);
                    return false;
                }

                if (phone == "" || phone == undefined) {
                    var msg = "Số điện thoại không được để trống";
                    __get_forcus($("#recui_form .recui_phone"), msg);
                    return false;
                }

                return true;
            });
            $(document).on("click", ".payment_select", function () {
                var id = $(this).data("id");
                $(".tab_paymant li").removeClass("active");
                $(this).closest("li").addClass("activer");
                $("html, body").animate(
                    {
                        scrollTop: $("#" + id).offset().top,
                    },
                    1000
                );
            });
            $(document).on("change", ".payment_selected", function () {
                var id = $(this).val();
                $("html, body").animate(
                    {
                        scrollTop: $("#" + id).offset().top,
                    },
                    1000
                );
            });
        });
    },
    pages_v2: function () {
        $(document).ready(function () {
            $(document).on("click", ".btn_register_reseler", function () {
                $("#show_login > a.dropdown-toggle").removeAttr("data-toggle");
                $("#hide_bg").show();
                $("#show_login").addClass("open cancel");

                $("#input_username").focus();
                $("html, body").animate(
                    {
                        scrollTop: $("#show_login").offset().top,
                    },
                    1000
                );
            });

            //tuyen dung
            $(document).on("submit", "#recui_form", function () {
                var _that = $(this);
                var name = _that.find(".recui_name").val();
                var bday = _that.find(".recui_bday").val();
                var bmonth = _that.find(".recui_bmonth").val();
                var byear = _that.find(".recui_byear").val();
                var address = _that.find(".recui_address").val();
                var email = _that.find(".recui_email").val();
                var phone = _that.find(".recui_phone").val();

                $(".alert_tooltip_email.alert_error").remove();
                if (name == "" || name == undefined) {
                    var msg = "Mời bạn nhập họ tên";
                    __get_forcus($("#recui_form .recui_name"), msg);
                    return false;
                }
                if (bday == "" || bday == undefined) {
                    var msg = "Mời bạn chọn ngày";
                    __get_forcus($("#recui_form .recui_bday"), msg);
                    return false;
                }
                if (bmonth == "" || bmonth == undefined) {
                    var msg = "Mời bạn chọn tháng!";
                    __get_forcus($("#recui_form .recui_bmonth"), msg);
                    return false;
                }

                if (byear == "" || byear == undefined) {
                    var msg = "Mời bạn chọn năm";
                    __get_forcus($("#recui_form .recui_byear"), msg);
                    return false;
                }
                if (address == "" || address == undefined) {
                    var msg = "Thông tin không được để trống";
                    __get_forcus($("#recui_form .recui_address"), msg);
                    return false;
                }

                if (email == "" || email == undefined) {
                    var msg = "Địa chỉ email không được để trống";
                    __get_forcus($("#recui_form .recui_email"), msg);
                    return false;
                }

                if (phone == "" || phone == undefined) {
                    var msg = "Số điện thoại không được để trống";
                    __get_forcus($("#recui_form .recui_phone"), msg);
                    return false;
                }

                return true;
            });
            //form lien he
            $(document).on("click", "#submit_contact_form", function () {
                return validate_contact_form("#form_contact");
            });
            $(document).on("click", ".payment_select", function () {
                var id = $(this).data("id");
                $(".tab_paymant li").removeClass("active");
                $(this).closest("li").addClass("activer");
                $("html, body").animate(
                    {
                        scrollTop: $("#" + id).offset().top,
                    },
                    1000
                );
            });
        });
        $(document).on("click", "#tab_company_map li a", function () {
            let map = $(this).attr("href");

            if (map) {
                $(".company-map").hide();
                $(`${map}_map`).show();
            }
        });
        $(document).on("change", "input[name='room_contact']", function () {
            let contact_category = $(this).val();
            console.log(contact_category);
            if (contact_category) {
                $("#contact_category").val(contact_category);
            }
        });
    },
};

var check = true;
function whois_submit_multi() {
    var domain = $.trim($("#domain").val());
    var n = domain.split("\n").length;
    if (n > 5) {
        $("#alert-warning .alert-text").html(
            "Bạn chỉ kiểm tra được 5 tên miền."
        );
        $("#alert-warning").fadeIn();
        setTimeout(function () {
            $("#alert-warning").fadeOut();
        }, 3000);
        return false;
    }

    var domai = domain.split("\n");

    $.each(domai, function (key, val) {
        var doma = val.split(".");
        check = check_input_domain(doma[0]);

        if (doma.length > 1 && check === true) {
            check = check_domain(val);
        }

        console.log(check);

        // Check is tmtv
        var coDau = new Array(
            "à",
            "á",
            "ạ",
            "ả",
            "ã",
            "â",
            "ầ",
            "ấ",
            "ậ",
            "ẩ",
            "ẫ",
            "ă",
            "ằ",
            "ắ",
            "ặ",
            "ẳ",
            "ẵ",
            "è",
            "é",
            "ẹ",
            "ẻ",
            "ẽ",
            "ê",
            "ề",
            "ế",
            "ệ",
            "ể",
            "ễ",
            "ì",
            "í",
            "ị",
            "ỉ",
            "ĩ",
            "ò",
            "ó",
            "ọ",
            "ỏ",
            "õ",
            "ô",
            "ồ",
            "ố",
            "ộ",
            "ổ",
            "ỗ",
            "ơ",
            "ờ",
            "ớ",
            "ợ",
            "ở",
            "ỡ",
            "ù",
            "ú",
            "ụ",
            "ủ",
            "ũ",
            "ư",
            "ừ",
            "ứ",
            "ự",
            "ử",
            "ữ",
            "ỳ",
            "ý",
            "ỵ",
            "ỷ",
            "ỹ",
            "đ",
            "À",
            "Á",
            "Ạ",
            "Ả",
            "Ã",
            "Â",
            "Ầ",
            "Ấ",
            "Ậ",
            "Ẩ",
            "Ẫ",
            "Ă",
            "Ằ",
            "Ắ",
            "Ặ",
            "Ẳ",
            "Ẵ",
            "È",
            "É",
            "Ẹ",
            "Ẻ",
            "Ẽ",
            "Ê",
            "Ề",
            "Ế",
            "Ệ",
            "Ể",
            "Ễ",
            "Ì",
            "Í",
            "Ị",
            "Ỉ",
            "Ĩ",
            "Ò",
            "Ó",
            "Ọ",
            "Ỏ",
            "Õ",
            "Ô",
            "Ồ",
            "Ố",
            "Ộ",
            "Ổ",
            "Ỗ",
            "Ơ",
            "Ờ",
            "Ớ",
            "Ợ",
            "Ở",
            "Ỡ",
            "Ù",
            "Ú",
            "Ụ",
            "Ủ",
            "Ũ",
            "Ư",
            "Ừ",
            "Ứ",
            "Ự",
            "Ử",
            "Ữ",
            "Ỳ",
            "Ý",
            "Ỵ",
            "Ỷ",
            "Ỹ",
            "Đ",
            "ê",
            "ù",
            "à"
        );

        var is_in_array = 0;

        mainLoop: for (var j = 0; j < doma[0].length; j++) {
            var dh = doma[0].charAt(j);
            for (var n = 0; n < coDau.length; n++) {
                if (dh == coDau[n]) {
                    is_in_array = 1;
                    break mainLoop;
                }
            }
        }

        if (is_in_array == 0) {
            $("#is_domain_tmtv").val(0);
        } else {
            $("#is_domain_tmtv").val(1);
        }
    });

    if (check !== true) {
        $("#alert-warning .alert-text").html(
            "Tên miền nhập vào không đúng định dạng."
        );
        $("#alert-warning").fadeIn();
        setTimeout(function () {
            $("#alert-warning").fadeOut();
        }, 3000);
        return false;
    } else {
        $("#whois").submit();
    }
}

// Page email server
$(".more-info").css("display", "none");

$(".more-info-btn").click(function () {
    var key = $(".more-info-btn").attr("key");

    if (key == 0) {
        $(".more-info-btn").html("[Thu gọn tính năng]");
        $(".more-info-btn").attr("key", 1);
        $(".more-info").fadeIn();
    } else {
        $(".more-info-btn").html("[Xem thêm tính năng]");
        $(".more-info-btn").attr("key", 0);
        $(".more-info").fadeOut();
    }
});

$(".desc-detail").css("display", "none");
$(".more-desc-btn").click(function () {
    var key = $(".more-desc-btn").attr("key");

    if (key == 0) {
        $(".more-desc-btn").html("[Thu gọn]");
        $(".more-desc-btn").attr("key", 1);
        $(".desc-detail").fadeIn();
    } else {
        $(".more-desc-btn").html("[Xem thêm]");
        $(".more-desc-btn").attr("key", 0);
        $(".desc-detail").fadeOut();
    }
});

$(document).ready(function () {
    $("#tab_w").click(function () {
        $("#li_l").attr("class", "");
        $("#li_w").attr("class", "active");
        $(".tl").hide();
        $(".tw").show();
    });

    $("#tab_l").click(function () {
        $("#li_l").attr("class", "active");
        $("#li_w").attr("class", "");
        $(".tl").show();
        $(".tw").hide();
    });
});
function validate_contact_form(form_id) {
    $(form_id).validate({
        rules: {
            contact_email: {
                required: true,
                email: true,
            },
            contact_realname: {
                required: true,
                minlength: 3,
                maxlength: 30,
            },
            contact_title: {
                required: true,
                minlength: 5,
                maxlength: 200,
            },
            contact_content: {
                required: true,
                minlength: 20,
                maxlength: 1200,
            },
        },
        messages: {
            contact_email: {
                required: id_email_null,
                email: id_email_invalid,
            },
            contact_realname: {
                required: "Vui lòng nhập họ tên của bạn",
                minlength: "Họ và tên quá ngắn",
                maxlength: "Họ và tên quá dài",
            },
            contact_title: {
                required: "Vui lòng nhập Tiêu đề",
                minlength: "Tiêu đề quá ngắn",
                maxlength: "Tiêu đề quá dài",
            },
            contact_content: {
                required: "Vui lòng nhập Nội dung",
                minlength: "Nội dung quá ngắn",
                maxlength: "Nội dung quá dài",
            },
        },
        errorElement: "div",
        errorClass: "text-danger error-msg",
        focusInvalid: true,
        ignore: "",
        highlight: function (e) {
            $(e)
                .closest(".form-group")
                .removeClass("is-valid")
                .addClass("is-invalid");
        },
        success: function (e) {
            $(e)
                .closest(".form-group")
                .removeClass("is-invalid")
                .addClass("is-valid");
        },
        submitHandler: function (form) {
            $("#submit_contact_form .nh-btn-loader").removeClass("d-none");
            $("#submit_contact_form .btn_text").addClass("d-none");
            form.submit();
        },
        invalidHandler: function (form, validator) {
            var errors = validator.numberOfInvalids();
        },
    });
}

Service.vps();
Board.index();
System_js.init();
$(document).on("click", ".btn_show_popup", function () {
    let title = $(this).data("title");
    if (typeof title != "undefined") {
        $(".popup-re-call textarea[name='request_content']").val(title);
    }
    $(".re-send-call").trigger("click");
});
$(document).on("click", ".link-tu-van .btn_show_popup", function () {
    $("#msg-item-1").trigger("click");
});
$(document).on("click", ".link-dktv-price a", function () {
    $("#msg-item-1").trigger("click");
});

$(document).on("click", ".btn_call_vfone", function () {
    $("#msg-item-8").trigger("click");
});

$(window).on("load", function () {
    "use strict";
    /* ========================================================== */
    /*   Navigation fixed                                         */
    /* ========================================================== */
    // $(window).on("scroll", function () {
    //     if ($(this).scrollTop() > $("header .header-top").height()) {
    //         $("header .header-top").addClass("fix_nav");
    //     } else {
    //         $("header .header-top").removeClass("fix_nav");
    //     }
    // });
    const myTimeout = setTimeout(function () {
        $("section").removeClass("loading-skeleton");
        $("body").removeClass("loading-skeleton");
        $("div").removeClass("loading-skeleton");
    }, 300);
    $("#main_menu_mobile").removeClass("d-none");
});

$(".re-send-call").trigger("click");
$(document).ready(function () {
    //show hide promotion icon
    show_promotion_icon();

    var c_count = $(".cart_number").html();
    c_count = parseInt(c_count);
    $(document).on("click", ".domain_add_cart", function () {
        // c_count++;
        $(".cart_number").html(c_count);
        // $('.net_step_payment').removeClass('disableddiv');
        // $('.check_domain .net_step_payment').show();
        // $('.check_domain .net_step_payment').text('Tiếp tục thanh toán');
    });
    $(document).on("click", ".btn-remove-cart", function () {
        // c_count--;
        if (c_count < 0) {
            c_count = 0;
        }
        $(".cart_number").html(c_count);
        if (c_count == 0) {
            $(".net_step_payment").addClass("disableddiv");
            //$('.check_domain .net_step_payment').text('Vui lòng chờ trong giây lát');
            //$('.check_domain .net_step_payment').hide();
        }
    });
    if (c_count > 0) {
        // $('.net_step_payment').removeClass('disableddiv');
        // $('.check_domain .net_step_payment').show();
        // $('.check_domain .net_step_payment').text('Tiếp tục thanh toán');
    }
});

var continue_check_login = false;

function hide_qr_notice() {
    setTimeout(function () {
        $("#qrlogin_error").addClass("hidden");
        $("#qrlogin_error_top").addClass("hidden");
        continue_check_login = true;
        check_qr_login();
    }, 3000);
}
$(document).on("click", ".shake_img_close", function () {
    $("#click_download_app").hide();
    $(this).hide();
    toggle_promotion_icon();
});

function toggle_promotion_icon() {
    let manual_hide_promotion_icon = localStorage.getItem(
        "manual_hide_promotion_icon"
    );
    if (manual_hide_promotion_icon == null) {
        let expirationDate = new Date();
        expirationDate.setHours(expirationDate.getHours() + 4);
        localStorage.setItem(
            "manual_hide_promotion_icon",
            expirationDate.getTime()
        );
        $("#click_download_app").hide();
        $(".shake_img_close").hide();
    } else {
        manual_hide_promotion_icon = parseInt(manual_hide_promotion_icon);
        let currentTime = new Date();
        currentTime.setHours(currentTime.getHours() + 4);
        localStorage.setItem(
            "manual_hide_promotion_icon",
            currentTime.getTime()
        );
        $("#click_download_app").hide();
        $(".shake_img_close").hide();
    }
}

function show_promotion_icon() {
    let manual_hide_promotion_icon = localStorage.getItem(
        "manual_hide_promotion_icon"
    );
    manual_hide_promotion_icon = parseInt(manual_hide_promotion_icon);

    if (isNaN(manual_hide_promotion_icon)) {
        $("#click_download_app").show();
        $(".shake_img_close").show();
    } else {
        let currentTime = new Date();

        if (currentTime.getTime() > manual_hide_promotion_icon) {
            $("#click_download_app").show();
            $(".shake_img_close").show();
            console.log(1);
        } else {
            $("#click_download_app").hide();
            $(".shake_img_close").hide();
            console.log(2);
        }
    }
}
