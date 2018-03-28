/**
 * Rent
 */
var QHABITO = window.QHABITO || {};

(function($) {
	"use strict";
	
	function Rent() {
		QHABITO.rent = {
			target : $('div.main'),
			cloud : $('.mod-tags-cloud'),
			setCookies : function() {
				var qh_list = QHABITO.common.getCookie('qh_list');
				if (!qh_list) {
					QHABITO.common.setCookie('qh_list', 'false');
				}
				// Note: Maybe we should move this to common ...
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
			urlManager : function() {
				
			},
			updateUrl : function() {
				var cloud = QHABITO.rent.cloud;
				var uri = '';
				$('a.item', cloud).each(function() {
					uri += '_' + $(this).data('filter');
				});
				uri = '/qhabito/alquiler/' + uri.substring(1);
				uri = (uri.charAt(uri.length-1) === '/') ? uri.substr(0, uri.length - 1) : uri;
				if (QHABITO.common.utilHistory()) {
					window.history.replaceState({}, '' + document.title, '' + uri);
				} else {
					document.location.href = '' + uri;
				}
			},
			filters : function() {
				var cloud = QHABITO.rent.cloud;
				var cloud_wrapper = $('.wrapper', cloud);
				var grid_cloud = $('.mod-grid-tags-cloud');
				
				// Mod Tags Cloud
				cloud.on('add', function(event, item) {
					var self = item;
					var cloud_items = $('a.item[data-ref="' + self.data('ref') + '"]', cloud);
					if (self.data('filter') !== '') {
						var cloud_item = $('a.item[data-filter="' + self.data('filter') + '"]', cloud);
						var alt_value = self.data('value');
						if (alt_value) { } else { alt_value = self.text(); }
						if (!cloud_item.length) {
							if (self.data('ref') !== 'extra') {
								cloud_items.remove();
							}
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
					QHABITO.rent.updateUrl();
				});
				
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
						$('.mod-select[data-ref="' + self.data('ref') + '"]').each(function() {
							var mod = $(this);
							var mod_item = $('li:eq(1) > a', mod);
							var alt_value = mod_item.data('value');
							if (alt_value) { } else { alt_value = mod_item.text(); }
							$('li:eq(0) > a', mod).html('' + alt_value + '<span class="arrow">&nbsp;</span>');
						});
						$('.mod-select-grid[data-ref="' + self.data('ref') + '"]').each(function() {
							var mod = $(this);
							var mod_item = $('li:eq(1) > a', mod);
							var alt_value = mod_item.data('value');
							if (alt_value) { } else { alt_value = mod_item.text(); }
							$('li:eq(0) > a', mod).html('' + alt_value + '<span class="arrow">&nbsp;</span>');
						});
					}
					self.remove();
					QHABITO.rent.updateUrl();
					return false;
				});
				
				// Mod Grid Tags Cloud
				grid_cloud.on('click', 'a.item', function() {
					var self = $(this);
					self.blur();

					self.toggleClass('checked');
					if (self.hasClass('checked')) {
						if (!$('a.item[data-filter="' + self.data('filter') + '"]', cloud).length) {
							cloud.trigger('add', [self]);
						}
					} else {
						$('a.item[data-filter="' + self.data('filter') + '"]', cloud).trigger('click');
					}

					return false;
				});
				
				// Selects
				$('.mod-select li:not(:first-child) a').on('selected', function() {
					var self = $(this);
					cloud.trigger('add', [self]);
				});
				
				// Grid selects
				$('.mod-select-grid ul li a').on('selected', function() {
					var self = $(this);
					cloud.trigger('add', [self]);
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
				
				// URL Manager
				QHABITO.rent.urlManager();
			}
		};
		
		QHABITO.rent.init();
	}
	
	$(document).ready(function() {
		new Rent();
	});
	// Avoid caching
	$(window).on('pageshow', function(event) {
		if (event.originalEvent.persisted) {
			 window.location.reload();
		}
	});

})(jQuery);