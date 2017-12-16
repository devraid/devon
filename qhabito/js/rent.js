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
				
			}
		};
		
		QHABITO.rent.init();
	}
	
	$(document).ready(function() {
		new Rent();
	});

})(jQuery);