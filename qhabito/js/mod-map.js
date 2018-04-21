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
				/*var a = document.getElementById("country");
				a.addEventListener("load",function() {
					var svgDoc = a.getSVGDocument();
					$("path", svgDoc).on('mouseenter', function() {
						$(this).css('fill', 'black');
					});
				});*/
				
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