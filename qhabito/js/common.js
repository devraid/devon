/**
 * Common
 */
var QHABITO = window.QHABITO || {};

(function($) {
	"use strict";
	
	function Common() {
		QHABITO.common = {
			target : $('div.main'),
			init: function() {
				console.log('hello');
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