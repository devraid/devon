/**
 * Rent
 */
var QHABITO = window.QHABITO || {};

(function($) {
	"use strict";
	
	function Rent() {
		QHABITO.rent = {
			target : $('div.main'),
			setCookies : function() {
				var qh_list = QHABITO.common.getCookie('qh_list');
				if (!qh_list) {
					QHABITO.common.setCookie('qh_list', 'false');
				}
				$('.filters .list-type a:eq(0)').on('click', function() {
					var self = $(this);
					self.blur();
					$('.filters .list-type a').removeClass('selected');
					self.addClass('selected');
					QHABITO.common.setCookie('qh_list', 'false');
					$('.mod-grid').removeClass('list');
					return false;
				});
				$('.filters .list-type a:eq(1)').on('click', function() {
					var self = $(this);
					self.blur();
					$('.filters .list-type a').removeClass('selected');
					self.addClass('selected');
					if (!$('.mod-grid').hasClass('list')) {
						$('.mod-grid').addClass('list');
					}
					QHABITO.common.setCookie('qh_list', 'true');
					return false;
				});
			},
			itemSlider : function() {
				$('.mod-grid .slider').slick({
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
								$('.slider', self.closest('.slider-thumbs')).slick('slickGoTo', self.data('index'), false);
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
				// Item slider
				QHABITO.rent.itemSlider();
				
				// Cookies: Grid or list
				QHABITO.rent.setCookies();
			}
		};
		
		QHABITO.rent.init();
	}
	
	$(document).ready(function() {
		new Rent();
	});

})(jQuery);