/**
 * Common
 */
var QHABITO = window.QHABITO || {};

(function($) {
	"use strict";
	
	function Common() {
		QHABITO.common = {
			target : $('div.main'),
			getCookie: function(key) {
				var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
				return keyValue ? keyValue[2] : null;
			},
			setCookie : function(key, value) {
				var expires = new Date();
				expires.setTime(expires.getTime() + (360 * 24 * 60 * 60 * 1000));
				document.cookie = key + '=' + value + ';path=/;expires=' + expires.toUTCString();
			},
			setCookies : function() {
				var cookies = $('.cookies');
				var qh_cookies = QHABITO.common.getCookie('qh_cookies');
				if (!qh_cookies) {
					cookies.addClass('visible');
					$('.button', cookies).on('click', function() {
						$(this).blur();
						QHABITO.common.setCookie('qh_cookies', 'true');
						cookies.remove();
						return false;
					});
				} else {
					cookies.remove();
				}
			},
			utilHistory : function() {
				return !!(window.history && window.history.replaceState);
			},
			modSelect : function() {
				$('.mod-select:not(.results)').each(function() {
					var select = $(this);
					var length = $('li', select).length;
					select.data('height', '' + (57+((length-1)*40))); // 57 is the first li. 40 are next ones
					$('li a', select).on('click', function() {
						var self = $(this);
						self.blur();
						var closest = self.closest('.mod-select');
						setTimeout(function() {
							$('.mod-select').not(closest).removeAttr('style');
							$('.mod-select-grid').not(closest).removeAttr('style');
							$('.mod-select').not(closest).removeClass('active');
							$('.mod-select-grid').not(closest).removeClass('active');
						}, 250);
						if (closest.attr('style')) {
							closest.removeAttr('style');
						} else {
							closest.css('height', closest.data('height') + 'px');
						}
						closest.toggleClass('active');
						
						if (self.data('ref')) {
							var has_changed = true;
							var alt_value = self.data('value');
							if (alt_value) { } else { alt_value = self.text(); }
							$('.mod-select[data-ref="' + self.data('ref') + '"]').each(function() {
								var item = $('li:eq(0) a', $(this));
								var new_value = '' + alt_value + '<span class="arrow">&nbsp;</span>';
								if(item.html() !== new_value) {
									item.html(new_value);
									if(has_changed === true) {
										has_changed = false;
										self.trigger('selected');
									}		
								}
							});
						}
						
						return false;
					});
				});
			},
			modSelectGrid : function() {
				$('.mod-select-grid').each(function() {
					var select = $(this);
					var length = Math.round($('ul li', select).length / 2);
					select.data('height', '' + (57+(length*40))); // 57 is the first li. 40 are next ones
					$('li a', select).on('click', function() {
						var self = $(this);
						self.blur();
						var closest = self.closest('.mod-select-grid');
						setTimeout(function() {
							$('.mod-select').not(closest).removeAttr('style');
							$('.mod-select-grid').not(closest).removeAttr('style');
							$('.mod-select').not(closest).removeClass('active');
							$('.mod-select-grid').not(closest).removeClass('active');
						}, 250);
						if (closest.attr('style')) {
							closest.removeAttr('style');
						} else {
							closest.css('height', closest.data('height') + 'px');
						}
						closest.toggleClass('active');
						
						if (self.data('ref')) {
							var has_changed = true;
							var alt_value = self.data('value');
							if (alt_value) { } else { alt_value = self.text(); }
							$('.mod-select-grid[data-ref="' + self.data('ref') + '"]').each(function() {
								var item = $('li:eq(0) > a', $(this));
								var new_value = '' + alt_value + '<span class="arrow">&nbsp;</span>';
								if(item.html() !== new_value) {
									item.html(new_value);
									if(has_changed === true) {
										has_changed = false;
										self.trigger('selected');
									}		
								}
							});
						}
						
						return false;
					});
				});
			},
			modSliderThumbs : function() {
				$('.mod-slider-thumbs .slider').slick({
					infinite : true,
					touchMove : true,
					draggable : true,
					swipe : true,
					slickSetOption : true,
					autoplay: false,
					slidesToShow: 1,
					dots : false,
					prevArrow : '<a class="button left" href="#" title=""><span>&nbsp;</span></a>',
					nextArrow : '<a class="button right" href="#" title=""><span>&nbsp;</span></a>'
				}).after(function() {
					// Slider
					var slider = $(this);
					// Thumbs
					var thumbs = $('ul.thumbs', slider.parent());
					var all_thumbs = $('li a:not(".view")', thumbs);
					all_thumbs.each(function() {
						var thumb = $(this);
						thumb.on('click', function() {
							var self = $(this);
							self.blur();
							if (!self.hasClass('selected')) {
								all_thumbs.removeClass('selected');
								self.addClass('selected');
								$('.slider', self.closest('.mod-slider-thumbs')).slick('slickGoTo', self.data('index'), false);
							}
							return false;
						});
					});
					// Arrows
					slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
						$('li:eq(' + nextSlide + ') a', thumbs).trigger('click');
					});
				});
			},
			modSearch : function() {
				var form = $('.search-form');
				var field = $('.search', form);
				var results = $('.results', form);
				var timeout;
				if (field.length) {
					field.blur(function() {
						if($('.mod-select', results).length) {
							setTimeout(function() {
								results.hide();
								form.removeClass('has-results');
							}, 250);
						}
					});
					field.focus(function() {
						if($('.mod-select', results).length) {
							if (!form.hasClass('has-results')) {
								form.addClass('has-results');
							}
							results.show();
						}
					});
					field.keyup(function() {
						if(timeout) {
							clearTimeout(timeout);
						}
						timeout = setTimeout(function() {
							var t = field.val();
							if(t.length >= 3) {
								$.ajax({
									type: 'GET',
									url: '/qhabito/search',
									data: 't=' + field.val(),
									beforeSend: function() {
										// TBD
									},
									success: function(response) {
										results.empty();
										form.removeClass('has-results');
										if(response.data.length > 0) {
											var tba = '<ul class="mod-select results" style="height: auto;"><li><!-- results --></li>';
											$.each(response.data, function(i, item) {
												tba += '<li><a href="/qhabito/alquiler/' + item.slug + '" title="">' + item.name + '</a></li>';
											});
											tba += '</ul>';
											results.append(tba);
											if (!form.hasClass('has-results')) {
												form.addClass('has-results');
											}
											results.show();
										}
									}
								});
							} else {
								results.empty();
								form.removeClass('has-results');
							}
						}, 500);
					});
				}
			},
			init : function() {
				// Cookies
				QHABITO.common.setCookies();
				
				// Module
				QHABITO.common.modSelect();
				
				// Module
				QHABITO.common.modSelectGrid();
				
				// Module
				QHABITO.common.modSliderThumbs();

				// Module
				QHABITO.common.modSearch();
				
				// Navigation
				/*QHABITO.common.target.on('scroll', function() {
					var self = $(this);
					if (self.scrollTop() >= 50) {
						if (!QHABITO.common.target.hasClass('scrolled')) {
							QHABITO.common.target.addClass('scrolled');
						}
					} else {
						QHABITO.common.target.removeClass('scrolled');
					}
				});*/
				
				// It's always good to focus on things :)
				$(window).focus();
			}
		};
		
		QHABITO.common.init();
	}
	
	$(document).ready(function() {
		new Common();
	});

})(jQuery);