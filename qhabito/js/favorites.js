/**
 * Favorites
 */
var QHABITO = window.QHABITO || {};

(function($) {
	"use strict";
	
	function Favorites() {
		QHABITO.favorites = {
			target : $('div.main'),
			init : function() {
				// TBD
			}
		};
		
		QHABITO.favorites.init();
	}
	
	$(document).ready(function() {
		new Favorites();
	});

})(jQuery);