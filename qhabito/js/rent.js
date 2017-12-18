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
				// Top big slideshow
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
			}
		};
		
		QHABITO.rent.init();
	}
	
	$(document).ready(function() {
		new Rent();
	});

})(jQuery);