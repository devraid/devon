/**
 * Rent
 */
var QHABITO = window.QHABITO || {};

(function($) {
	"use strict";
	
	function Rent() {
		QHABITO.rent = {
			target : $('div.main'),
			init: function() {
				// Item slider
				$('.mod-grid .slider', QHABITO.rent.target).slick({
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
					var _this = $(this);
					var _thumbs = $('.thumbs', _this);
					var _index = 0;
					$('.slick-list li[id]', _this).each(function() {
						_index++;
					});
				});
				
				// Cookies: Grid or list
				var qh_list = QHABITO.common.getCookie('qh_list');
				if (!qh_list) {
					QHABITO.common.setCookie('qh_list', 'false');
				}
				$('.filters .list-type a:eq(0)', QHABITO.rent.target).on('click', function() {
					var _this = $(this);
					_this.blur();
					$('.filters .list-type a', QHABITO.rent.target).removeClass('selected');
					_this.addClass('selected');
					QHABITO.common.setCookie('qh_list', 'false');
					$('.mod-grid', QHABITO.rent.target).removeClass('list');
					return false;
				});
				$('.filters .list-type a:eq(1)', QHABITO.rent.target).on('click', function() {
					var _this = $(this);
					_this.blur();
					$('.filters .list-type a', QHABITO.rent.target).removeClass('selected');
					_this.addClass('selected');
					if (!$('.mod-grid', QHABITO.rent.target).hasClass('list')) {
						$('.mod-grid', QHABITO.rent.target).addClass('list');
					}
					QHABITO.common.setCookie('qh_list', 'true');
					return false;
				});
			}
		};
		
		QHABITO.rent.init();
	}
	
	$(document).ready(function() {
		new Rent();
	});

})(jQuery);