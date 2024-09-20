"use strict";

var nhSearch = {
    autoSuggest: {
        keyword: "",
        inputObject: null,
        form: null,
        wrapSuggestionObject: null,
        numberItem: 0,
        startLength: 2,
        init: function () {
            var self = this;

            if ($("input[nh-auto-suggest]").length == 0) {
                return false;
            }

            $(document).on("keyup", "input[nh-auto-suggest]", function (e) {
                e.preventDefault();

                self.inputObject = $(this);
                self.form = self.inputObject.closest("form");
                if (self.form.length == 0) return false;

                var keyCode = e.keyCode;

                switch (keyCode) {
                    // press key arrow down
                    case 40:
                        self.activeItem("down");
                        break;

                    // press key arrow up
                    case 38:
                        self.activeItem("up");
                        break;

                    // press key enter
                    case 13:
                        var indexActive = self.getIndexItemActive();
                        if (indexActive > -1) {
                            self.redirectActiveItem(indexActive);
                        } else {
                            self.form.submit();
                        }
                        break;

                    default:
                        if (self.keyword == $.trim(self.inputObject.val()))
                            return false;

                        self.keyword = $.trim(self.inputObject.val());
                        self.type = self.inputObject.attr("nh-auto-suggest");

                        if (self.keyword.length >= self.startLength) {
                            self.suggestion();
                        } else {
                            self.removeSuggestion();
                        }

                        break;
                }
            });

            $(document).on("click", "button[nh-btn-submit]", function (e) {
                self.inputObject = $(this);
                self.form = self.inputObject.closest("form");
                self.form.submit();
            });
        },
        getIndexItemActive: function () {
            var self = this;
            if (!self.validateItem()) return false;

            var index = -1;
            var listItem = self.wrapSuggestionObject.find("li");
            $.each(listItem, function (indexItem, itemObject) {
                if ($(itemObject).hasClass("active")) {
                    index = indexItem;
                }
            });
            return index;
        },
        activeItem: function (type = "down") {
            var self = this;
            if (!self.validateItem()) return false;

            var indexCurrent = self.getIndexItemActive();
            self.removeItemActive();

            var index = 0;
            if (indexCurrent != -1) {
                if (type == "down") {
                    index = indexCurrent + 1;
                } else {
                    index = indexCurrent - 1;
                }
            }

            if (index < 0) index = 0;
            if (index >= self.numberItem) index = self.numberItem - 1;

            self.wrapSuggestionObject
                .find("li:eq(" + index + ")")
                .addClass("active");
        },
        redirectActiveItem: function (index) {
            var self = this;

            if (
                !nhMain.utilities.notEmpty(self.wrapSuggestionObject) ||
                self.wrapSuggestionObject.find("li:eq(" + index + ") a")
                    .length == 0
            )
                return false;
            var urlRedirect = self.wrapSuggestionObject
                .find("li:eq(" + index + ") a")
                .attr("href");

            if (!nhMain.utilities.notEmpty(urlRedirect)) return false;
            document.location.href = urlRedirect;
        },
        removeItemActive: function () {
            var self = this;
            if (!self.validateItem()) return false;

            self.wrapSuggestionObject.find("li").removeClass("active");
        },
        validateItem: function () {
            var self = this;

            if (!nhMain.utilities.notEmpty(self.wrapSuggestionObject))
                return false;
            if (!self.wrapSuggestionObject.find("li").length > 0) return false;

            return true;
        },
        suggestion: function () {
            var self = this;

            if (!nhMain.utilities.notEmpty(self.inputObject)) return false;
            nhMain
                .callAjax({
                    async: true,
                    url: "/search/suggest",
                    data: {
                        keyword: self.keyword,
                        type: self.type,
                    },
                    dataType: _HTML,
                })
                .done(function (response) {
                    self.form.find(".wrap-suggestion").remove();
                    self.form.append(response);

                    self.wrapSuggestionObject =
                        self.form.find(".wrap-suggestion");
                    self.numberItem =
                        self.wrapSuggestionObject.find("li").length;
                });
        },
        removeSuggestion: function () {
            var self = this;
            if (
                !nhMain.utilities.notEmpty(self.form) ||
                !nhMain.utilities.notEmpty(self.form.find(".wrap-suggestion"))
            )
                return false;
            self.form.find(".wrap-suggestion").remove();
        },
    },
};

nhSearch.autoSuggest.init();

("use strict");

var nhContact = {
    init: function () {
        var self = this;

        // validate element
        if ($("form[nh-form-contact]").length == 0) {
            return false;
        }
        nhMain.validation.phoneVn();
        $.each($("form[nh-form-contact]"), function (index, contact) {
            var formElement = $(contact);
            var formCode = formElement.attr("nh-form-contact");
            if (formCode.length == 0) {
                return false;
            }

            var validator = formElement.validate({
                ignore: ":hidden",
                errorPlacement: function (error, element) {
                    var messageRequired = element.attr("message-required");
                    if (
                        typeof messageRequired != _UNDEFINED &&
                        messageRequired.length > 0
                    ) {
                        error.text(messageRequired);
                    }
                    error.addClass("invalid-feedback");

                    var group = element.closest(".input-group");
                    if (group.length) {
                        group.after(error);
                    } else if (element.hasClass("select2-hidden-accessible")) {
                        element.closest(".form-group").append(error);
                    } else {
                        element.after(error);
                    }
                },
                invalidHandler: function (event, validator) {
                    validator.errorList[0].element.focus();
                },
            });

            formElement.on("keydown", "input, textarea", function (e) {
                if (e.keyCode == 13) {
                    formElement
                        .find('[nh-btn-action="submit"]')
                        .trigger("click");
                    return false;
                }
            });

            formElement.on("click", '[nh-btn-action="submit"]', function (e) {
                e.preventDefault();

                if (validator.form()) {
                    nhMain.showLoading.page();

                    nhMain.reCaptcha.check(function (token) {
                        var formData =
                            formElement.serialize() + "&form_code=" + formCode;
                        if (token != null) {
                            formData =
                                formData + "&" + _TOKEN_RECAPTCHA + "=" + token;
                        }
                        nhMain
                            .callAjax({
                                url: formElement.attr("action"),
                                data: formData,
                            })
                            .done(function (response) {
                                nhMain.showLoading.remove();

                                var code =
                                    typeof response.code != _UNDEFINED
                                        ? response.code
                                        : _ERROR;
                                var message =
                                    typeof response.message != _UNDEFINED
                                        ? response.message
                                        : "";
                                var status =
                                    typeof response.status != _UNDEFINED
                                        ? response.status
                                        : {};
                                if (code == _SUCCESS) {
                                    nhMain.showAlert(_SUCCESS, message);
                                    location.reload();
                                } else {
                                    nhMain.showAlert(_ERROR, message);
                                }
                            });
                    });
                }
            });
        });
    },
};

nhContact.init();

$(document).ready(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 100) {
            $(".header-menu").addClass("fix");
        } else {
            $(".header-menu").removeClass("fix");
        }
    });

    $(".title-footer").click(function () {
        var wrapElement = $(this).closest(".menu-footer");
        wrapElement.find("ul").toggleClass("transform-active");
    });
});

("use strict");

var nhMenu = {
    init: function () {
        var self = this;
        self.mainMenu.init();

        // active menu use nh-toggle
        if (
            $('[nh-menu] a[href="' + nhMain.pathname + '"]').length > 0 &&
            !nhMain.isMobile
        ) {
            $('[nh-menu] a[href="' + nhMain.pathname + '"]').each(function (
                index
            ) {
                $(this).addClass("active");

                var toggleElement = $(this).parents(
                    '[nh-toggle-element]:not(".menu-vertical--content")'
                );
                if (toggleElement.length == 0) return;

                toggleElement.each(function (index) {
                    $(this).addClass("active").css({ display: "block" });

                    var key = $(this).attr("nh-toggle-element");
                    $('[nh-toggle="' + key + '"]').addClass("open");
                });
            });
        }
    },
    mainMenu: {
        wrapElement: null,
        menuSider: null,
        menuVerticalSider: null,
        init: function () {
            var self = this;

            self.eventSidebarMain();
            self.eventSidebarVertical();

            $(document).on("click", '[nh-menu="btn-close"]', function (e) {
                self.toggleMenu(false);
            });

            $(document).on("click", ".back-drop", function (e) {
                if (
                    $(e.target).is('[nh-menu="close"]') ||
                    $(e.target).is(".back-drop.open")
                ) {
                    self.toggleMenu(false);
                }
            });
        },
        eventSidebarMain: function () {
            var self = this;

            self.menuSiderMain = $('[nh-menu="sidebar"][menu-type="main"]');
            if (
                self.menuSiderMain == null ||
                self.menuSiderMain == _UNDEFINED ||
                self.menuSiderMain.length == 0
            ) {
                return false;
            }

            $(document).on(
                "click",
                '[nh-menu="btn-open"][menu-type="main"]',
                function (e) {
                    self.wrapElement =
                        self.menuSiderMain.closest(".menu-container");
                    self.toggleMenu(!self.menuSiderMain.hasClass("open"));
                }
            );
        },
        eventSidebarVertical: function () {
            var self = this;
            self.menuSiderVertical = $(
                '[nh-menu="sidebar"][menu-type="vertical"]'
            );
            if (
                self.menuSiderVertical == null ||
                self.menuSiderVertical == _UNDEFINED ||
                self.menuSiderVertical.length == 0
            ) {
                return false;
            }

            $(document).on(
                "click",
                '[nh-menu="btn-open"][menu-type="vertical"]',
                function (e) {
                    self.wrapElement =
                        self.menuSiderVertical.closest(".menu-container");
                    self.toggleMenu(!self.menuSiderVertical.hasClass("open"));
                }
            );
        },
        toggleMenu: function (open = true) {
            var self = this;
            if (
                self.wrapElement == null ||
                self.wrapElement == _UNDEFINED ||
                self.wrapElement.length == 0
            ) {
                return false;
            }
            self.wrapElement
                .find('[nh-menu="sidebar"]')
                .toggleClass("open", open);
            self.wrapElement.find(".back-drop").toggleClass("open", open);
        },
    },
};

nhMenu.init();


