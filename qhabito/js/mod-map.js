/**
 * ModMap
 */
var QHABITO = window.QHABITO || {};

(function($) {
	"use strict";
	
	function ModMap() {
		QHABITO.modmap = {
			target : $('div.main'),
			test : function() {
				
			},
			init : function() {
				QHABITO.modmap.test();
			}
		};
		
		QHABITO.modmap.init();
	}
	
	$(document).ready(function() {
		new ModMap();
	});

})(jQuery);