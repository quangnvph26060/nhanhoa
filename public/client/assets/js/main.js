'use strict';

var nhMain = {
	dataInit: [],
	lang: null,
	csrfToken: null,
	isMobile: false,
	fullUrl: null,
	hostName: null,
	protocol: null,
	fullPath: null,
	cdnUrl: null,
	initLibrary: function(wrap = null) {
		var self = this;

		// check mobile
		self.isMobile = typeof(self.dataInit.device) != _UNDEFINED && self.dataInit.device == 1 ? true : false;
		$('body').toggleClass('is-mobile', self.isMobile);

		var wrapElement = $(document);
		if(wrap != null && wrap != _UNDEFINED && wrap.length > 0){
			wrapElement = wrap;
		}

		// init light gallery
		wrapElement.find('div[nh-light-gallery]').each(function(index) {
			var config = self.utilities.parseJsonToObject($(this).attr('nh-light-gallery'));
		  	$(this).lightGallery(config);
		});

		// init swiper
		wrapElement.find('div[nh-swiper][loaded!="1"]').each(function(index) {
			var config = self.utilities.parseJsonToObject($(this).attr('nh-swiper'));
			var swiper = new Swiper(this, config);
		});

		wrapElement.find('div[nh-swiper-thumb][loaded!="1"]').each(function(index) {
			var swiperThumbsElement = $(this).find('[nh-swiper-thumbs]');
			var swiperLargeElement = $(this).find('[nh-swiper-large]');

			if (swiperThumbsElement.length == 0 || swiperThumbsElement.length == 0) return;

			var configThumbs = nhMain.utilities.parseJsonToObject(swiperThumbsElement.attr('nh-swiper-thumbs'));
			const swiperThumbs = new Swiper(swiperThumbsElement[0], configThumbs);

			var configLarge = nhMain.utilities.parseJsonToObject(swiperLargeElement.attr('nh-swiper-large'));
			configLarge = {...configLarge, ...{thumbs: {swiper: swiperThumbs}} };
			const swiperLarge = new Swiper(swiperLargeElement[0], configLarge);

			$(document).on('click', '[nh-attribute-option]', function(e){
				if($(this).attr('data-trigger') != _UNDEFINED){
					const ariaLabel = $('[nh-slider-thumbs]').find('img[src="'+ $(this).attr('data-trigger') +'"]').closest('.swiper-slide').attr('aria-label');
					if(ariaLabel != null && ariaLabel != _UNDEFINED && ariaLabel.length > 0){
						const swiperIndex = $.trim(ariaLabel.split('/')[0]) - 1;
						swiperThumbs.slideTo(swiperIndex, 1000, false);
						swiperLarge.slideTo(swiperIndex, 1000, false);
					}
				}
			});
			const wrpExpand = $('[nh-expand-light-gallery]');
			if(self.utilities.notEmpty(wrpExpand)) {
				wrpExpand.on('click', '[nh-btn-action="expand"]', function(e){
					const dataImg = $('[nh-swiper-large]').find('.swiper-slide.swiper-slide-active img').attr('src');
					wrpExpand.find('div[data-src="'+ dataImg +'"]').trigger("click");
				});
			}

		});

		if(wrapElement.find('.selectpicker').length > 0){
			wrapElement.find('.selectpicker').selectpicker();
		}

		if(wrapElement.find('[nh-date]').length > 0){
			wrapElement.find('[nh-date]').datepicker({
				language: self.lang,
				todayHighlight: true
			});
		}

		if(wrapElement.find('[nh-countdown]').length > 0){
			wrapElement.find('[nh-countdown]').each(function() {
				nhMain.coundown.init($(this));
			});
		}

		wrapElement.find('.number-input').each(function() {
			nhMain.input.inputMask.init($(this), 'number');
		});

		wrapElement.on('show.bs.modal', function () {
		    $(this).find('[nh-lazy]').each(function(){
		        var imgLazy = $(this);
		        imgLazy.attr('src', imgLazy.data('src'));
		    });
		});

		wrapElement.on('show.bs.dropdown', function () {
		    $(this).find('[nh-lazy]').each(function(){
		        var imgLazy = $(this);
		        imgLazy.attr('src', imgLazy.data('src'));
		    });
		});

		wrapElement.on('show.bs.collapse', function () {
		    $(this).find('[nh-lazy]').each(function(){
		        var imgLazy = $(this);
		        imgLazy.attr('src', imgLazy.data('src'));
		    });
		});

		if(wrapElement.find('[nh-embed]').length > 0){
			wrapElement.find('[nh-embed]').each(function() {
				self.embedCode.loadEmbedAttribute($(this));
			});
		}

		// wrap == null -> page first load
		if(wrap == null){

			// show config block
			var template = typeof(self.dataInit.template) != _UNDEFINED ? self.dataInit.template : {};
			if(self.utilities.getParamInUrl('nh-config-block') > 0 && typeof(template.url) != _UNDEFINED){
				var cssUrl = template.url + 'assets/lib/nh-config-block/block.css';
				var jsUrl = template.url + 'assets/lib/nh-config-block/block.js';

				$('<link/>', {rel: 'stylesheet', type: 'text/css', href: cssUrl}).appendTo('body');
				$.getScript(jsUrl);
			}

			// load embed
			self.embedCode.init();

			// load sdk of social
			self.social.init();

			// recaptcha
			self.reCaptcha.init();
		}
	},
	initEvent: function(){
		var self = this;

		// active link
		if(($('a[href="'+ self.fullPath +'"]').length > 0 || $('a[nh-link-redirect="'+ self.fullPath +'"]').length > 0)){
			$('a[href="'+ self.fullPath +'"]').each(function( index ){
				$(this).addClass('active');
			});

			$('a[nh-link-redirect="'+ self.fullPath +'"]').each(function( index ){
				$(this).addClass('active');
			});
		}

		$(document).on('click', 'a[nh-link-redirect]', function(e) {
		    e.preventDefault();
            if(!nhMain.utilities.notEmpty($(this))) return false;
            var redirectHref = $(this).attr('nh-link-redirect');
            var attrBlank = $(this).attr('nh-link-redirect-blank');
            var linkToggle = $(this).attr('nh-link-toggle');

            if(nhMain.utilities.notEmpty(linkToggle) && $(this).hasClass('active')) {
            	window.location = linkToggle;
            	return false;
            }

            if(typeof attrBlank !== _UNDEFINED && attrBlank !== false) {
            	window.open(redirectHref);
            	return false;
            }
            window.location = redirectHref;
        });

		// active language
		$(document).on('click', '[nh-active-language]', function(e) {
			self.showLoading.page();

			var lang = $(this).attr('nh-active-language');
			nhMain.callAjax({
				url: '/language/active',
				data: {
					lang: lang
				},
			}).done(function(response) {
				var data = typeof(response.data) != _UNDEFINED ? response.data : {};
				if(!nhMain.utilities.notEmpty(data.url_redirect)) {
					location.reload();
					return false;
				};
				document.location.href = data.url_redirect;
			});
		});

		// active currency
		$(document).on('click', '[nh-active-currency]', function(e) {
			self.showLoading.page();

			var currency = $(this).attr('nh-active-currency');
			nhMain.callAjax({
				url: '/currency/active',
				data: {
					currency: currency
				},
			}).done(function(response) {
				location.reload();
			});
		});

		$(document).on('click', '[nh-toggle]', function(e) {
			$(this).toggleClass('open');
			var key = $(this).attr('nh-toggle');
			var element = $('[nh-toggle-element="' + key + '"]');

			if(element.length > 0){
				element.toggle();
			}
		});

		$(document).on('click', 'a[nh-to-anchor]', function(e) {
			e.preventDefault();

			var anchor = $("[nh-anchor='"+ $(this).attr('nh-to-anchor') +"']");
			if(anchor.length) {
			    $('html,body').animate({scrollTop: anchor.offset().top - 100}, 'slow');
			}
		});

		$(document).on('click', '[nh-show-password]', function(e) {
			e.preventDefault();

			var inputPassword = $(this).closest('.form-group').find('input[name="password"]');
			var attrType = inputPassword.attr('type') == 'password' ? 'text' : 'password';
			inputPassword.attr('type', attrType);
		});
	},
	initForBlock: function(){
		var self = this;

		// load block by ajax
		$('div[nh-block][type-load="document-ready"]').each(function(index) {
			var blockCode = $(this).attr('nh-block')
			self.ajaxLoadBlock(blockCode);
		});

		// active block
		$(document).on('click', '[nh-active-block]', function(e) {
			var blockCode = $(this).attr('nh-active-block');
			var wrapBlock = $('div[nh-block="'+ blockCode +'"][type-load="active"]');

			if(wrapBlock.length > 0 && wrapBlock.attr('loaded') != 1){
				self.ajaxLoadBlock(blockCode);
			}
		});

		// active block
		$(document).on('click', '[nh-active-tab]', function(e) {
			var blockCode = $(this).closest('[nh-block]').attr('nh-block');
			var tabIndex = $(this).attr('nh-active-tab');
			var wrapBlock = $(this).closest('[nh-block]').find('div[nh-tab-content="'+ tabIndex +'"]');

			if(wrapBlock.length > 0 && wrapBlock.attr('loaded') != 1){
				self.ajaxLoadBlockTab(blockCode, tabIndex);
			}
		});

		// pagination block
		$(document).on('click', '[nh-pagination="ajax"] [nh-page]', function(e) {
			var page =  self.utilities.parseInt($(this).attr('nh-page'));
			var blockCode = $(this).closest('[nh-block]').attr('nh-block');

			if(page > 0 && blockCode != _UNDEFINED && blockCode.length > 0){
				var params = nhMain.utilities.getUrlVars();
				$.extend(params, {page: page});
				self.ajaxLoadBlock(blockCode, params);
			}
		});

		$(document).on('click', '[nh-pagination="load_more"] [nh-page]', function(e) {
			var page =  self.utilities.parseInt($(this).attr('nh-page'));
			var wrapBlock = $(this).closest('[nh-block]');
			var blockCode = wrapBlock.attr('nh-block');

			if(page > 0 && blockCode != _UNDEFINED && blockCode.length > 0){
				self.showLoading.block(wrapBlock);

				self.callAjax({
					url: '/block/ajax-load-content/' + blockCode,
					dataType: _HTML,
					data: {
						page: page
					}
				}).done(function(response) {
					wrapBlock.attr('loaded', '1').append(response);
					wrapBlock.find('[nh-pagination="load_more"]').first().remove();

					self.initLibrary(wrapBlock);
					if(typeof(nhLazy) != _UNDEFINED){
						nhLazy.init();
					}
					self.showLoading.remove(wrapBlock);
				});
			}
		});
	},
	ajaxLoadBlock: function(blockCode = null, params = {}, callback = null){
		var self = this;
		if(typeof(blockCode) == _UNDEFINED || blockCode == null || blockCode.length == 0) return;

		if (typeof(callback) != 'function') {
	        callback = function () {};
	    }

		var wrapBlock = $('div[nh-block="'+ blockCode +'"]');
		self.showLoading.block(wrapBlock);

		self.callAjax({
			url: '/block/ajax-load-content/' + blockCode,
			dataType: _HTML,
			data: params
		}).done(function(response) {
			wrapBlock.attr('loaded', '1').html(response);

			self.initLibrary(wrapBlock);
			if(typeof(nhLazy) != _UNDEFINED){
				nhLazy.init();
			}
			callback();
			self.showLoading.remove(wrapBlock)
		});
	},
	ajaxLoadBlockTab: function(blockCode = null, tabIndex = null){
		var self = this;
		if(typeof(blockCode) == _UNDEFINED || blockCode == null || blockCode.length == 0) return;

		var wrapBlock = $('div[nh-block="'+ blockCode +'"]');
		var tabContentElement = wrapBlock.find('[nh-tab-content="'+ tabIndex +'"]');
		if(tabContentElement.length == 0) return;

		self.showLoading.block(wrapBlock);

		self.callAjax({
			url: '/block/ajax-load-content/' + blockCode,
			data: {
				'tab_index': typeof(tabIndex) != _UNDEFINED ? tabIndex : '',
			},
			dataType: _HTML,
		}).done(function(response) {
			tabContentElement.attr('loaded', '1').html(response);
			self.initLibrary(wrapBlock);
			if(typeof(nhLazy) != _UNDEFINED){
				nhLazy.init();
			}
			self.showLoading.remove(wrapBlock);
		});
	},
	callAjax: function(params = {}){
		var self = this;

		var options = {
			headers: {
		        'X-CSRF-Token': self.csrfToken
		    },
	        async: typeof(params.async) != _UNDEFINED ? params.async : true,
	        url: typeof(params.url) != _UNDEFINED ? params.url : '',
	        type: typeof(params.type) != _UNDEFINED ? params.type : 'POST',
	        dataType: typeof(params.dataType) != _UNDEFINED ? params.dataType : 'json',
	        data: typeof(params.data) != _UNDEFINED ? params.data : {},
	        cache: typeof(params.cache) != _UNDEFINED ? params.cache : false
	    };

	    if(typeof(params.processData) != _UNDEFINED){
	    	options.processData = params.processData;
	    }

	    if(typeof(params.contentType) != _UNDEFINED){
	    	options.contentType = params.contentType;
	    }

		var ajax = $.ajax(options).fail(function(jqXHR, textStatus, errorThrown){
	    	if(typeof(params.not_show_error) == _UNDEFINED){
	    		self.showLog(errorThrown);
	    	}
		});
	    return ajax;
	},
	getLabel: function(key = null){
		if(typeof(locales[key]) == _UNDEFINED){
			return key;
		}
		return locales[key];
	},
	showLog: function(message = null){
		if(message == null || message.length == 0) return false;
		console.log('%cWeb4s: ' + message, 'color: #fd397a; font-size: 12px');
	},
	utilities: {
		notEmpty: function(value = null){
			if(typeof(value) == _UNDEFINED){
				return false;
			}

			if(value == null){
				return false;
			}

			if(value.length == 0){
				return false;
			}

			return true;
		},
		parseNumberToTextMoney: function(number = null){
			if (typeof(number) != 'number' || isNaN(number) || typeof(number) == _UNDEFINED) {
		        return 0;
		    }
	    	return number.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
		},
		parseTextMoneyToNumber: function(text_number = null){
			if (typeof(text_number) == _UNDEFINED) {
		        return 0;
		    }

			var number = parseFloat(text_number.toString().replace(/,/g, ''));
			if(isNaN(number)) number = 0;

			return number;
		},
		parseFloat: function(number = null){
			if (isNaN(number) || typeof(number) == _UNDEFINED || number == null) {
		        return 0;
		    }

			number = parseFloat(number);
			if (isNaN(number)) {
		        return 0;
		    }
		    return number;
		},
		parseInt: function(number = null){
			if (isNaN(number) || typeof(number) == _UNDEFINED || number == null) {
		        return 0;
		    }

			number = parseInt(number);
			if (isNaN(number)) {
		        return 0;
		    }
		    return number;
		},
		parseIntToDateString: function(number = null){
			var self = this;
			var date_string = '';
			var int_number = nhMain.utilities.parseInt(number);
			if(int_number > 0){
				var date = new Date(int_number * 1000);
				date_string = date.getDate() + '/' + (date.getMonth()+1) + '/' + date.getFullYear();
			}
			return date_string;
		},
		parseIntToDateTimeString: function(number = null){
			var self = this;
			var date_string = '';
			var int_number = nhMain.utilities.parseInt(number);
			if(int_number > 0){
				var date = new Date(int_number * 1000);
				var minutes = date.getMinutes();
				if(minutes < 10){
					minutes = '0' + minutes;
				}

				var hours = date.getHours();
				if(hours < 10){
					hours = '0' + hours;
				}

				date_string = hours + ':' + minutes + ' - ' +  date.getDate() + '/' + (date.getMonth()+1) + '/' + date.getFullYear();
			}
			return date_string;
		},
		parseJsonToObject: function(json_string = null){
			var result = {};
			try {
		        result = JSON.parse(json_string);
		    } catch (e) {
		        return {};
		    }
		    return result;
		},
		replaceUrlParam: function(url = null, param = null, value = null){
			if (url == null || typeof(url) == _UNDEFINED || url.length == 0) {
		        return '';
		    }

		    if (param == null || typeof(param) == _UNDEFINED || param.length == 0) {
		        return url;
		    }

			if (value == null || typeof(param) == _UNDEFINED) {
		        value = '';
		    }

		    var pattern = new RegExp('\\b('+ param +'=).*?(&|#|$)');
		    if (url.search(pattern)>=0) {
		        return url.replace(pattern, '$1' + value + '$2');
		    }
		    url = url.replace(/[?#]$/, '');

		    return url + (url.indexOf('?')>0 ? '&' : '?') + param + '=' + value;
		},
		getParamInUrl: function(param_name = null, url = null){
			var self = this;

			if(!self.notEmpty(param_name)) return null;
			if(!self.notEmpty(url)) {
				url = nhMain.fullUrl
			}

			param_name = param_name.replace(/[\[\]]/g, "\\$&");
		    var regex = new RegExp("[?&]" + param_name + "(=([^&#]*)|&|#|$)");
		    var results = regex.exec(url);

		    if (!results) return null;
		    if (!results[2]) return '';

		    return decodeURIComponent(results[2].replace(/\+/g, " "));
		},
		getUrlVars: function () {
            var vars = {}, hash;
            var url_decode = decodeURIComponent(window.location.href);
            if (url_decode.indexOf('?') > 0) {
                var hashes = url_decode.slice(url_decode.indexOf('?') + 1).split('&');
                for (var i = 0; i < hashes.length; i++) {
                    hash = hashes[i].split('=');
                    vars[hash[0]] = hash[1];
                }
            }
            return vars;
        },
		noUnicode: function(text){
			var self = this;

			if(!self.notEmpty(text)) return '';

			text = text.replace(/Ă |Ă¡|áº¡|áº£|Ă£|Ă¢|áº§|áº¥|áº­|áº©|áº©|Äƒ|áº±|áº¯|áº³|áº·|áºµ/g, 'a');
		    text = text.replace(/Ă€|Ă|áº |áº¢|Ăƒ|Ă‚|áº¦|áº¤|áº¬|áº¨|Ä‚|áº°|áº®|áº¶|áº´|áºµ/g, 'a');
		    text = text.replace(/Ă¨|Ă©|áº¹|áº»|áº½|Ăª|á»|áº¿|á»‡|á»ƒ|á»…+/g, 'e');
		    text = text.replace(/Ăˆ|Ă‰|áº¸|áºº|áº¼|Ă|á»€|áº¾|á»†|á»‚|á»„+/g, 'e');
		    text = text.replace(/Ă¬|Ă­|á»‹|á»‰|Ä©/g,'i');
		    text = text.replace(/ĂŒ|Ă|á»|á»ˆ|Ä¨/g, 'i');
		    text = text.replace(/Ă²|Ă³|á»|á»|Ăµ|Ă´|á»“|á»‘|á»™|á»•|á»—|Æ¡|á»|á»›|á»£|á»Ÿ|á»¡+/g, 'o');
		    text = text.replace(/Ă’|Ă“|á»Œ|á»|Ă•|Ă”|á»’|á»|á»˜|á»”|á»–|Æ |á»œ|á»|á»¢|á»|á» +/g, 'o');
		    text = text.replace(/Ă¹|Ăº|á»¥|á»§|Å©|Æ°|á»«|á»©|á»±|á»­|á»¯/g, 'u');
		    text = text.replace(/Ă™|Ă|á»¤|á»¦|Å¨|Æ¯|á»ª|á»¨|á»°|á»¬|á»®/g, 'u');
		    text = text.replace(/á»³|Ă½|á»µ|á»·|á»¹/g, 'y');
		    text = text.replace(/á»²|Ă|á»´|á»¶|á»¸/g, 'y');
		    text = text.replace(/Ä‘/g, 'd');
		    text = text.replace(/Ä/g, 'd');

		    return text.toLowerCase().trim();
		},
		getThumbImage: function(url = null, size = 150){
			var self = this;

			if(!self.notEmpty(url)) return '';
			if($.inArray(size, [50, 150, 250, 350]) == -1) size = 150;

			var urlSplit = url.split('/');
			urlSplit[1] = 'thumbs';

			var fileName = self.getFileName(url);
			var ext = fileName.split('.').pop();

			if(!self.notEmpty(ext)) return '';

			var newFile = fileName.replace('.' + ext, '');
			newFile += '_thumb_' + size + '.' + ext;

			urlSplit[urlSplit.length - 1] = newFile;

			return urlSplit.join('/');
		},
		getFileName: function(path = null){
			var self = this;
			path = path.substring(path.lastIndexOf('/')+ 1);
    		return (path.match(/[^.]+(\.[^?#]+)?/) || [])[0];
		}
	},
	location: {
		idWrap: null,
		init: function(params = {}){
			var self = this;

			self.idWrap = typeof(params.idWrap) != _UNDEFINED ? params.idWrap : [];

			$.each(self.idWrap, function(index, idWrap) {
				$(document).on('change', idWrap + ' #city_id', function(e) {
					//clear ward select
					var wardSelect = $(idWrap + ' #ward_id');
					wardSelect.find('option:not([value=""])').remove();
					wardSelect.selectpicker('refresh');

					// clear district select
					var districtSelect = $(idWrap + ' #district_id');
					districtSelect.find('option:not([value=""])').remove();
					districtSelect.selectpicker('refresh');

					// load option district select
					var city_id = $(this).val();
					if(city_id > 0){
						var _data = {};
						_data[_PAGINATION] = {};
						_data[_PAGINATION][_PERPAGE] = 200;

						nhMain.callAjax({
				    		async: false,
							url: '/location/district/json/' + city_id,
							data: _data,
						}).done(function(response) {
							var code = typeof(response.code) != _UNDEFINED ? response.code : _ERROR;
				        	var message = typeof(response.message) != _UNDEFINED ? response.message : '';
				        	var data = typeof(response.data) != _UNDEFINED ? response.data : {};
				        	if (code == _SUCCESS) {
			                    if (!$.isEmptyObject(data)) {
			                    	var listOption = '';
							        $.each(data, function (key, item) {
							            listOption += '<option value="' + item.id + '">' + item.name + '</option>';
							        });
							        districtSelect.append(listOption);
							        districtSelect.selectpicker('refresh');
			                    }
				            } else {
				            	nhMain.showLog(message);
				            }
						});
					}
				});

				$(document).on('change', idWrap + ' #district_id', function(e) {
					//clear ward select
					var wardSelect = $(idWrap + ' #ward_id');
					wardSelect.find('option:not([value=""])').remove();
					wardSelect.selectpicker('refresh');

					// load option ward select
					var district_id = $(this).val();
					if(district_id > 0){
						var _data = {};
						_data[_PAGINATION] = {};
						_data[_PAGINATION][_PERPAGE] = 200;

						nhMain.callAjax({
				    		async: false,
							url: '/location/ward/json/' + district_id,
							data: _data,
						}).done(function(response) {
							var code = typeof(response.code) != _UNDEFINED ? response.code : _ERROR;
				        	var message = typeof(response.message) != _UNDEFINED ? response.message : '';
				        	var data = typeof(response.data) != _UNDEFINED ? response.data : {};
				        	if (code == _SUCCESS) {
				            	// append option
			                    if (!$.isEmptyObject(data)) {
			                    	var listOption = '';
							        $.each(data, function (key, item) {
							            listOption += '<option value="' + item.id + '">' + item.name + '</option>';
							        });
							        wardSelect.append(listOption);
							        wardSelect.selectpicker('refresh');
			                    }
				            } else {
				            	nhMain.showLog(message);
				            }
						});
					}
				});
			});
		}
	},
	showAlert: function(type = null, message = '', params = {}, callback = null ) {
		var self = this;

		if (typeof(callback) != 'function') {
	        callback = function () {};
	    }

		if(type == null && $.inArray(type, [_ERROR, _WARNING, _SUCCESS, _INFO]) == -1){
			type = _ERROR;
		}

		var background = '';
		var button = '';
		var htmlTemplate = '';

		var optionToast = {
			delay: nhMain.utilities.notEmpty(params.delay) ? params.delay : 3000,
			animation: nhMain.utilities.notEmpty(params.animation) ? params.animation : true,
			autohide: nhMain.utilities.notEmpty(params.autohide) ? params.autohide : true,
		}

		var callbackElement = typeof(params.callback_element) != _UNDEFINED ? params.callback_element : null;

		switch(type) {
			case _ERROR:
				background = 'bg-danger';
			break;

			case _SUCCESS:
				background = 'bg-success';
			break;

			case _WARNING:
				background = 'bg-warning';
				button = `
					<div class="pt-2">
					    <button nh-btn-action="confirm" type="button" class="btn btn-success btn-sm">${nhMain.getLabel('dong_y')}</button>
					    <button nh-btn-action="close" type="button" class="btn btn-danger btn-sm" data-dismiss="toast">${nhMain.getLabel('khong')}</button>
					</div>
				`;
				optionToast.autohide = false;
			break;

			case _INFO:
				background = 'bg-info';
			break;
		}

		var htmlTemplate = `
			<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
				<div class="toast-body text-white ${background} p-4">
					${message} ${button}
				</div>
			</div>
		`;

		var toastElement = $(htmlTemplate);
		$('#toasts').html(toastElement);

		toastElement.toast(optionToast);
		toastElement.toast('show');

		toastElement.on('hide.bs.toast', function () {
			toastElement.remove();
		});

		toastElement.on('click', '[nh-btn-action="confirm"]', function(e) {
			e.stopPropagation();
			toastElement.toast('hide');
			callback(callbackElement);
		});

		if(type != _WARNING) {
			callback(callbackElement);
		}
	},
	showLoading: {
		htmlTemplate: '\
			<div class="bg-overlay"></div>\
			<div class="sk-flow">\
				<div class="sk-flow-dot"></div>\
				<div class="sk-flow-dot"></div>\
				<div class="sk-flow-dot"></div>\
			</div>',
		block: function(element = null) {
			var self = this;
			if(element == null || typeof(element) == _UNDEFINED || element.length == 0){
				nhMain.showLog(nhMain.getLabel('doi_tuong_hien_thi_loading_khong_ton_tai'));
				return false;
			}
			var htmlLoading = $('<div nh-loading class="loading-block">').append(self.htmlTemplate)
			element.append(htmlLoading);
		},
		page: function(){
			var self = this;
			var htmlLoading = $('<div nh-loading class="loading-page">').append(self.htmlTemplate);
			$('body').append(htmlLoading);
		},
		remove: function(element = null){
			var wrapElement = $(document);
			if(element != null && element != _UNDEFINED && element.length > 0){
				wrapElement = element;
			}
			wrapElement.find('div[nh-loading]').each(function( index ) {
			  	$(this).remove();
			});
		}
	},
	validation: {
		error: {
			show: function(input = null, message = null, callback){
				if(input.length > 0 && message.length > 0){
					input.next('div.error').remove();
					if (typeof(callback) != 'function') {
				        callback = function () {};
				    }

				    input.closest('.form-group').addClass('is-invalid');
					var name = typeof(input.attr('name')) != _UNDEFINED ? input.attr('name') + '-error' : '';
					var error = '<div id="' + name + '" class="error invalid-feedback">' + message + '</label>';
					input.after(error).focus();
					callback();
				}
			},
			clear: function(wrapForm = null){
				if(wrapForm.length > 0){
					wrapForm.find('.form-group').removeClass('is-invalid');
					wrapForm.find('div.error').remove();
				}
			}
		},
		isEmail: function(email = null){
			var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	  		return regex.test(email);
		},
		isPhone: function(phone = null){
			var regex = /[0-9]{10,11}/;
	  		return regex.test(phone);
		},
		phoneVn: function(){
			$.validator.addMethod('phoneVN', function(phone_number, element) {
				phone_number = phone_number.replace( /\(|\)|\s+|-/g, '');
				return this.optional(element) || phone_number.length > 9 && phone_number.match( /^(01|02|03|04|05|06|07|08|09)+([0-9]{8,9})\b$/ );
			}, nhMain.getLabel('so_dien_thoai_chua_dung_dinh_dang'));
		}
	},
	reCaptcha: {
		config: {},
		init: function(){
			var self = this;

			self.config = typeof(nhMain.dataInit.recaptcha) != _UNDEFINED && nhMain.dataInit.recaptcha != null ? nhMain.dataInit.recaptcha : {};
			if(typeof(self.config.use_recaptcha) != _UNDEFINED && Boolean(self.config.use_recaptcha)){
				$('<script />', { type : 'text/javascript', src : 'https://www.google.com/recaptcha/api.js?render=' + self.config.site_key}).appendTo('head');
			}
		},
		check: function(callback = null){
			var self = this;

			if (typeof(callback) != 'function') {
		        callback = function () {};
		    }

  			if(Boolean(self.config.use_recaptcha) && grecaptcha != _UNDEFINED){
  				grecaptcha.ready(function() {
		          	grecaptcha.execute(self.config.site_key, {action: 'submit'}).then(function(token) {
		          		callback(token);
		          	});
		        });
			}else{
				callback(null);
			}
		}
	},
	embedCode: {
		init: function(){
			var self = this;

			var embed = typeof(nhMain.dataInit.embed_code) != _UNDEFINED && nhMain.dataInit.embed_code != null ? nhMain.dataInit.embed_code : {};
			var timeDelay = typeof(embed.time_delay) != _UNDEFINED ? nhMain.utilities.parseInt(embed.time_delay) : 0;

			if(timeDelay > 0){
				setTimeout(function(){
					self.loadEmbedDelay();
				}, timeDelay);
			}
		},
		loadEmbedDelay: function(){

			// load embed head
			nhMain.callAjax({
	    		async: false,
				url: '/embed/load-content',
			}).done(function(response) {
				var code = typeof(response.code) != _UNDEFINED ? response.code : _ERROR;
	        	var data = typeof(response.data) != _UNDEFINED ? response.data : {};

	        	if (code == _SUCCESS) {
	        		var head = nhMain.utilities.notEmpty(data.head) ? data.head : '';
	        		var top_body = nhMain.utilities.notEmpty(data.top_body) ? data.top_body : '';
	        		var bottom_body = nhMain.utilities.notEmpty(data.bottom_body) ? data.bottom_body : '';
	        		if(head.length > 0){
		            	$('head').append(head);
		            }

		            if(top_body.length > 0){
		            	$('head').prepend(top_body);
		            }

		            if(bottom_body.length > 0){
		            	$('body').append(bottom_body);
		            }
	            }
			});
		},
		loadEmbedAttribute: function(embedElement = null){
			var self = this;
			var embed = embedElement.attr('nh-embed');
			var pageType = embedElement.attr('nh-page-type');
			var recordId = embedElement.attr('nh-record-id');

			if(embedElement.length == 0) return;
			if(embed == _UNDEFINED || embed.length == 0) return;
			if(pageType == _UNDEFINED || pageType.length == 0) return;
			if(recordId == _UNDEFINED || recordId.length == 0) return;

			nhMain.callAjax({
	    		async: false,
				url: '/embed/load-embed-attribute',
				dataType: _HTML,
				data: {
					embed: embed,
					page_type: pageType,
					record_id: recordId
				}
			}).done(function(response) {
				embedElement.html(response);
				nhMain.initLibrary(embedElement);
				if(typeof(nhLazy) != _UNDEFINED){
					nhLazy.init();
				}
			});

		}
	},
	social: {
		init: function(){
			var self = this;

			var social = typeof(nhMain.dataInit.social) != _UNDEFINED && nhMain.dataInit.social != null ? nhMain.dataInit.social : {};

			// load sdk and function init of facebook
			var loadSkdFacebook = typeof(social.facebook_load_sdk) != _UNDEFINED ? nhMain.utilities.parseInt(social.facebook_load_sdk) : 0;
			var facebookSdkDelay = typeof(social.facebook_sdk_delay) != _UNDEFINED ? nhMain.utilities.parseInt(social.facebook_sdk_delay) : 0;

			if(loadSkdFacebook > 0 && facebookSdkDelay > 0){
				setTimeout(function(){
					self.loadSdkDelay('facebook');
				}, facebookSdkDelay);
			}

			// load sdk and function init of google
			var loadSkdGoogle = typeof(social.google_load_sdk) != _UNDEFINED ? nhMain.utilities.parseInt(social.google_load_sdk) : 0;
			var googleSdkDelay = typeof(social.google_sdk_delay) != _UNDEFINED ? nhMain.utilities.parseInt(social.google_sdk_delay) : 0;

			if(loadSkdGoogle > 0 && googleSdkDelay > 0){
				setTimeout(function(){
					self.loadSdkDelay('google');
				}, facebookSdkDelay);
			}
		},
		loadSdkDelay: function(type = null){
			var self = this;

			if(!nhMain.utilities.notEmpty(type)) return false;

			// load embed content
			nhMain.callAjax({
	    		async: false,
	    		dataType: 'html',
				url: '/social/load-sdk/' + type,
			}).done(function(response) {
				$('body').append(response);
			});
		}
	},
	input: {
		inputMask:{
			init: function(el, type = null){
				var self = this;
				var options = {};
				switch(type){
					case 'email':
						options = self.options.email;
						el.inputmask(options);
					break;

					case 'number':
						options = self.options.number;
						el.inputmask('decimal', options);

						el.focus(function() {
						 	$(this).select();
						});
					break;

					default:
					break;
				}
			},
			options: {
				number: {
					integerDigits: 13,
					autoGroup: true,
					groupSeparator: ',',
					groupSize: 3,
					rightAlign: false,
					allowPlus: false,
    				allowMinus: false,
    				placeholder: ''
		        },
		        email: {
		            mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
		            greedy: false,
		            onBeforePaste: function (pastedValue, opts) {
		                pastedValue = pastedValue.toLowerCase();
		                return pastedValue.replace("mailto:", "");
		            },
		            definitions: {
		                '*': {
		                    validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~\-]",
		                    cardinality: 1,
		                    casing: "lower"
		                }
		            }
		        }
			}
		}
	},
	coundown: {
		init: function(element = null){
			var self = this;

			if(element.attr('nh-countdown') == _UNDEFINED) return;

			var countDownTime = parseInt(element.attr('nh-countdown'));
			if(countDownTime <= 0) return;

			var x = setInterval(function() {
			  	var now = new Date().getTime();
			  	now = parseInt(now/1000);

			  	var distance = countDownTime - now;

			  	var days = Math.floor(distance / (60 * 60 * 24)).toString().padStart(2,'0');
			  	var hours = Math.floor((distance % (60 * 60 * 24)) / (60 * 60)).toString().padStart(2,'0');
			  	var minutes = Math.floor((distance % (60 * 60)) / (60)).toString().padStart(2,'0');
			  	var seconds = Math.floor((distance % (60))).toString().padStart(2,'0');

			  	element.find('[nh-count-down-item="day"]').html(days > 0 ? days : '00');

			  	element.find('[nh-count-down-item="hour"]').html(hours > 0 ? hours : '00');
			  	element.find('[nh-count-down-item="minute"]').html(minutes > 0 ? minutes : '00');
			  	element.find('[nh-count-down-item="second"]').html(seconds > 0 ? seconds : '00');

			  	if (distance < 0) {
			    	clearInterval(x);

			    	element.find('[nh-count-down-item="day"]').html('|');
				  	element.find('[nh-count-down-item="hour"]').html('|');
				  	element.find('[nh-count-down-item="minute"]').html('|');
				  	element.find('[nh-count-down-item="second"]').html('|');
			  	}
			}, 1000);
		}
	}
}

nhMain.init();
