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
			filters : function() {
				var cloud = $('.mod-tags-cloud');
				var cloud_wrapper = $('.wrapper', cloud);
				var grid_cloud = $('.mod-grid-tags-cloud');
				
				// Mod Grid Tags Cloud
				grid_cloud.on('click', 'a.item', function() {
					var self = $(this);
					self.blur();

					self.toggleClass('checked');
					if (self.hasClass('checked')) {
						if (!$('a.item[data-filter="' + self.data('filter') + '"]', cloud).length) {
							cloud_wrapper.append(self.clone());
							if (!cloud.hasClass('active')) {
								cloud.addClass('active');
							}
						}
					} else {
						$('a.item[data-filter="' + self.data('filter') + '"]', cloud).trigger('click');
					}

					return false;
				});
				
				// Mod Tags Cloud
				cloud.on('click', 'a.item', function() {
					var self = $(this);
					self.blur();

					if ($('a.item', cloud).length === 1) {
						cloud.removeClass('active');
					}
					
					var item = $('a.item[data-filter="' + self.data('filter') + '"]');
					if (item.data('ref') === 'extra') {
						item.removeClass('checked');
					} else {
						$('.mod-select[data-ref="' + self.data('ref') + '"]').trigger('reset');
					}
					self.remove();

					return false;
				});
				
				// Selects
				$('.mod-select li:not(:first-child) a').on('click', function() {
					var self = $(this);
					var closest = self.closest('.mod-select');
					self.blur();
					
					var cloud_items = $('a.item[data-ref="' + self.data('ref') + '"]', cloud);
					var alt_value = self.data('value');
					if (alt_value) {
						//
					} else {
						alt_value = self.text();
					}
					if (self.data('filter') !== '') {
						 
						var cloud_item = $('a.item[data-filter="' + self.data('filter') + '"]', cloud);
							
						if (!cloud_item.length) {
							cloud_items.remove();
							cloud_wrapper.append(self.clone().after(function() {
								var item = $(this);
								item.attr('class', 'item');
								item.text(alt_value);
							}));

							if (!cloud.hasClass('active')) {
								cloud.addClass('active');
							}
						}
					} else {
						cloud_items.remove();
						if ($('a.item', cloud).length === 0) {
							cloud.removeClass('active');
						}
					}
					$('.mod-select[data-ref="' + self.data('ref') + '"]').each(function() {
						$('li:eq(0) a', $(this)).html('' + alt_value + '<span class="arrow">&nbsp;</span>');													   
					});
					
					closest.trigger('close');
					
					return false;
				});
				
				// Show/hide filters
				var filters_more = $('.filters.more');
				$('.filters').on('click', 'a.more-filters', function() {
					var self = $(this);
					self.blur();

					filters_more.css('max-height', ($('.wrapper', filters_more).height() + 24) + 'px'); // margin + border
					if (self.hasClass('selected')) {
						setTimeout(function() {
							filters_more.css('max-height', '0px');
						}, 250);
					}
					setTimeout(function() {
						filters_more.removeAttr('style');
					}, 500);
					setTimeout(function() {
						self.toggleClass('selected');
					}, 250);
					filters_more.toggleClass('active');

					return false;
				});
			},
			init : function() {
				// Cookies: Grid or list
				QHABITO.rent.setCookies();
				
				// Filters
				QHABITO.rent.filters();
			}
		};
		
		QHABITO.rent.init();
	}
	
	$(document).ready(function() {
		new Rent();
	});

})(jQuery);