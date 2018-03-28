/**
 * Favorites
 */
var QHABITO = window.QHABITO || {};

(function($) {
	"use strict";
	
	function Favorites() {
		QHABITO.favorites = {
			target : $('div.main'),
			notes : function() {
				$('.notes').each(function() {
					console.log('a');
					var self = $(this);
					var offset = this.offsetHeight - this.clientHeight;
					var resizeTextarea = function(el) {
						$(el).css('height', 'auto').css('height', el.scrollHeight + offset);
					};
					self.on('keyup input', function() { resizeTextarea(this); }).removeAttr('data-autoresize');
				});
			},
			init : function() {
				QHABITO.favorites.notes();
			}
		};
		
		QHABITO.favorites.init();
	}
	
	$(document).ready(function() {
		new Favorites();
	});

})(jQuery);