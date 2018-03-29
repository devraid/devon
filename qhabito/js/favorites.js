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
				$('.notes textarea').each(function() {
					var self = $(this);
					var save_button = $('.save-button', self.parent());
					var offset = this.offsetHeight - this.clientHeight;
					var resizeTextarea = function(el) {
						$(el).css('height', 'auto').css('height', el.scrollHeight + offset);
					};
					self.on('keyup input', function() {
						resizeTextarea(this);
						if(self.val().length > 0) {
							if (!save_button.hasClass('active')) {
								save_button.addClass('active');
							}
						} else {
							save_button.removeClass('active');
						}
					});
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