/* -------------------------------
 * slider.js - controls the slider
 * -------------------------------
 */

var slider = {
	init: function() {
	
		this.currIndex = 0;
		this.allIndex  = photos.length; 
		
		$('#slider .photos > .n > div').first().show().addClass('curr');
		
		this.slideNext();		
	},
	
	addNew: function(ph) {
		var p_size = $(window).width() > 1440 ? 'max' : '1440'
		
		var tpl = '<div style="display: none; background-image: url(static/bg/' + ph[0] + '@' + p_size + '.' + photos_type + ')"></div>';
		$('#slider .photos > .n').append(tpl);
		
		var ph_n = (ph[1] != false) ? ph[1] : ph[0];
		var tpl = '<div style="display: none; background-image: url(static/bg/' + ph_n + '@' + p_size + '.' + photos_type + ')"></div>';
		$('#slider .photos > .b').append(tpl);	
	},
	
	slideNext: function() {
				
		window.snext = setInterval(function(){				
			slider.currIndex += 1;
			if(slider.currIndex > slider.allIndex - 1) slider.currIndex = 0;
			
			slider.addNew(photos[slider.currIndex]);
			
			// BLURED SLIDE
			var $photoBlured = $('#slider > .photos > .b > div:first');
			if($photoBlured.hasClass('showed') == true) {
				
				var $nextCurr = $photoBlured.next();
				var oldStyle  = $nextCurr.attr('style');
				
				$nextCurr.css({zIndex: 5}).show().animate({opacity: 1}, 700, function(){
					$(this).css({zIndex: 2}).addClass('showed')
						.prev().remove();
					$('#slider .photos > .n > div:first').remove();
				});
				
				return false;
			}
			
			// NORMAL SLIDE
			var $nextCurr = $('#slider .photos .curr').next();
			var oldStyle  = $nextCurr.attr('style');
			
			$nextCurr.css({
				position: 'absolute', 
				top: 0, 
				width: '100%', 
				opacity: 0,
				zIndex: 5
			}).show().animate({opacity: 1}, 700, function(){
				$(this).attr({style: oldStyle}).show().addClass('curr')
					.prev().remove();
				$('#slider .photos > .b > div').first().remove();
			});
			
		}, animInterval);
	},
	
	photoAlign: function() {		
		$('#slider').height(window.globHeight);
	}
}