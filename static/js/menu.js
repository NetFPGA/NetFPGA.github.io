/* ---------------------------------
 * menu.js - controls the navigation
 * ---------------------------------
 */

// MENU
var menu = {
	bind: function() {
		$('#menu > ul > li').on({
			mouseenter: function() {
				var text = $(this).data('desc');
				$('#menu > .desc').text(text).css({opacity: 1});
				
			},
			mouseleave: function() {
				$('#menu > .desc').css({opacity: 0});
			},
			click: function() {
				if($(this).hasClass('curr')) return;
				
				var id = $(this).data('id');
				
				var offsetTop = $(id).offset().top;
				$('html, body').animate({scrollTop: offsetTop}, 900, 'easeInOutCubic');
			}
		});
	},
	
	changeCurr: function(el) {
		$('#menu > ul > li').removeClass('curr');
		$(el).addClass('curr');
		
		if($(el).data('id') == '#mid-header') {
				$sliderPhotos = $('#slider > .photos');
				$sliderPhotos.find('div').stop(true, true);
				$sliderPhotos.find('.n > div:first').css({opacity: 1}).show().addClass('curr');	
				$sliderPhotos.find('.b > div:first').removeClass('showed').animate({opacity: 0}, 600);
		}
	}
};
