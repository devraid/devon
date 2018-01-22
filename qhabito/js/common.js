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
			modSelect : function() {
				$('.mod-select li:eq(0) a').on('click', function() {
					var self = $(this);
					self.blur();
					self.closest('.mod-select').toggleClass('active');
					return false;
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
			init : function() {
				// Cookies
				QHABITO.common.setCookies();
				
				// Module select
				QHABITO.common.modSelect();
				
				// Module slider and thumbs
				QHABITO.common.modSliderThumbs();
				
				// Navigation
				QHABITO.common.target.on('scroll', function() {
					var self = $(this);
					if (self.scrollTop() >= 50) {
						if (!QHABITO.common.target.hasClass('scrolled')) {
							QHABITO.common.target.addClass('scrolled');
						}
					} else {
						QHABITO.common.target.removeClass('scrolled');
					}
				});
				
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