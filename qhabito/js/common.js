/**
 * Common
 */
var QHABITO = window.QHABITO || {};

(function($) {
	"use strict";
	
	function Common() {
		QHABITO.common = {
			target : $('div.main'),
			getCookie: function(key) {
				var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
				return keyValue ? keyValue[2] : null;
			},
			setCookie: function(key, value) {
				var expires = new Date();
				expires.setTime(expires.getTime() + (360 * 24 * 60 * 60 * 1000));
				document.cookie = key + '=' + value + ';path=/;expires=' + expires.toUTCString();
			},
			init: function() {
				// Cookies
				var cookies = $('.cookies');
				var qh_cookies = QHABITO.common.getCookie('qh_cookies');
				if (!qh_cookies) {
					cookies.addClass('visible');
					$('.button', cookies).on('click', function() {
						$(this).blur();
						QHABITO.common.setCookie('qh_cookies', 'true');
						cookies.remove();
						return false;
					});
				} else {
					cookies.remove();
				}
				
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