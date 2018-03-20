/**
 * Rent
 */
var QHABITO = window.QHABITO || {};

(function($) {
	"use strict";
	
	function Rent() {
		QHABITO.rent = {
			target : $('div.main'),
			setCookies : function() {
				var qh_list = QHABITO.common.getCookie('qh_list');
				if (!qh_list) {
					QHABITO.common.setCookie('qh_list', 'false');
				}
				$('.filters .list-type a:eq(0)').on('click', function() {
					var self = $(this);
					self.blur();
					$('.filters .list-type a').removeClass('selected');
					self.addClass('selected');
					QHABITO.common.setCookie('qh_list', 'false');
					$('.mod-grid').removeClass('list');
					return false;
				});
				$('.filters .list-type a:eq(1)').on('click', function() {
					var self = $(this);
					self.blur();
					$('.filters .list-type a').removeClass('selected');
					self.addClass('selected');
					if (!$('.mod-grid').hasClass('list')) {
						$('.mod-grid').addClass('list');
					}
					QHABITO.common.setCookie('qh_list', 'true');
					return false;
				});
			},
			modGridTagsCloud : function() {
				var cloud = $('.mod-tags-cloud .wrapper');
				QHABITO.rent.target.on('click', '.mod-grid-tags-cloud a.item', function() {
					var self = $(this);
					self.blur();

					self.toggleClass('checked');
					if (self.hasClass('checked')) {
						if (!$('a.item[data-ref="' + self.data('ref') + '"]', cloud).length) {
							cloud.append(self.clone().attr('class', 'item extra'));
							if (!cloud.parent().hasClass('active')) {
								cloud.parent().addClass('active');
							}
						}
					} else {
						$('a.item[data-ref="' + self.data('ref') + '"]', cloud).trigger('click');
					}

					return false;
				});
			},
			modTagsCloud : function() {
				var grid_cloud = $('.mod-grid-tags-cloud');
				QHABITO.rent.target.on('click', '.mod-tags-cloud a.item', function() {
					var self = $(this);
					self.blur();

					var closest = self.closest('.mod-tags-cloud');
					if ($('a.item', closest).length === 1) {
						closest.removeClass('active');
					}
					$('a.item[data-ref="' + self.data('ref') + '"]', grid_cloud).removeClass('checked');
					self.remove();

					return false;
				});
			},
			init : function() {
				// Cookies: Grid or list
				QHABITO.rent.setCookies();
				
				// Module
				QHABITO.rent.modTagsCloud();
				
				// Module
				QHABITO.rent.modGridTagsCloud();
			}
		};
		
		QHABITO.rent.init();
	}
	
	$(document).ready(function() {
		new Rent();
	});

})(jQuery);