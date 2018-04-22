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
				var map = $('.mod-map svg');
				var map_w = map.attr('width');
				var map_h = map.attr('height');
				var map_cx = map_w/2;
				var map_cy = map_h/2;
				var map_rx = map.width()/map_w;
				var map_ry = map.height()/map_h;
				var scale = 5;
				var paths = $('path', map);
				paths.on('click', function() {
					var self = $(this);
					paths.not(self).each(function() {
						var path = $(this);
						if (!path.hasClass('inactive')) {
							path.addClass('inactive');
						}
					});
					if (!self.hasClass('active')) {
						self.addClass('active');
					}
					if (!map.hasClass('zoomed')) {
						setTimeout(function() {
							map.addClass('zoomed');
						}, 500);
					}
					var e = self[0];
					var bbox = e.getBBox();
					map.css({
						'transform' : 'scale3d(' + scale + ', ' + scale + ', ' + scale + ') translate3d(' + ((map_cx - bbox.x - bbox.width/2)*map_rx) + 'px, ' + ((map_cy - bbox.y - bbox.height/2)*map_ry) + 'px, 0)'
					});
				});
				map.on('click', function() {
					if (map.hasClass('zoomed')) {
						map.removeClass('zoomed');
						map.css({
							'transform' : 'scale3d(1, 1, 1) translate3d(0, 0, 0)'
						});
						paths.each(function() {
							var path = $(this);
							path.removeClass('inactive');
							path.removeClass('active');
						});
					}
				});
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