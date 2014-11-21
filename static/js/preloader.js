/* -------------------------------------
 * preloader.js - controls loading theme
 * -------------------------------------
 */

// --- MAIN FUNCTION --- //
function preloaderInit() {	
	var p_size = $(window).width() > 1440 ? 'max' : '1440';
	
	// PRELOAD PHOTOS
	var tpl = '';
	var $d = $('<div/>').hide().appendTo('body');
	$.each(photos, function(k, ph) {
		tpl += '<div style="background-image: url(static/bg/' + ph[0] + '@' + p_size + '.' + photos_type + ')"></div>';
	});
	
	$d.append(tpl);

	$('body').preloaderJQ({
		onComplete: function() {
			$('#pre-loader').removeClass('not-ready')
				.find('.text').animate({opacity: 0}, 700);
				
			if(window.IE8 == true) $('#pre-loader .progress-bar').hide();
			
			slider.init();
			
			createBoxes();
			startAnim(function(){
				$('#pre-loader').remove();
			});	
		}
	});	
}

// --- CREATE BOXES --- //
function createBoxes() {
	
	var $preloader = $('#pre-loader');
	
	var winWidth = $(window).width();
	var winHeight = $(window).height();
	
	var box = {
		width: 150,
		height: 150
	}
	
	window.boxesWidth  = Math.ceil(winWidth/box.width) + 1;
	window.boxesHeight = Math.ceil(winHeight/box.height) + 1;
	
	var tpl = '';
		
	for(var i = boxesHeight; i > 0; i--) {
		tpl += '<ul>';
		for(var k = boxesWidth; k > 0; k--) tpl += '<li></li>';
		tpl += '</ul>';
	}
	
	$preloader
		.find('.squares')
			.empty()
			.html(tpl)
		.find('ul').height(box.height)
		.find('li').css({width: box.width, height: box.height});
}

function startAnim(callback) {
	var $uls = $('#pre-loader > .squares > ul');
	
	var delayStart = 0;
	var delayCurr  = 0;

	var speedStart = 800;
	var speedCurr  = 0;

	$uls.each(function(){
		
		delayCurr = delayStart;
		speedCurr = speedStart;
		
		$(this).find('li').each(function(){
			$(this).delay(delayCurr).animate({opacity: 0},  speedCurr);
			delayCurr += 80;
			speedCurr -= 10;
		});
		
		delayStart += 80;
		speedStart -= 10;
	});
	
	setTimeout(callback, delayCurr+speedCurr-400);
}