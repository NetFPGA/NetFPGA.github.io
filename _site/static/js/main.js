/* ----------------------------------
 * main.js - main script of the theme
 * ----------------------------------
 */

$(window).on({
	load: Init,
	resize: changeAll
});

$(function(){ preInit() });

// DOM COMPLETE
function preInit() {
	
	// RESIZE
	changeAll();
	
	var sliderInit = function(){};
	
	// LOAD PHOTOS [SLIDER]
	if(sliderEnable == true) {
		
		slider.addNew(photos[0]);
		
		var sliderInit = function() {
			slider.init();
		};
	}
	
	// preloader
	preloaderInit(sliderInit);
	if(window.IE8 != true) { countdown.init(); } else { countdownIE.init() };
	
	menu.bind();
	captcha.init();
}

// LOAD COMPLETE
function Init() {
	
	// SOME BIDS
	$('.page form span, .page form input').hover(function(){
		var $parent = $(this).parent();
		
		$parent.find('span, input')
			.toggleClass('hover');
	});
	
	$('.page form span').on({ click: function() { $(this).next().focus() }});
	
		$('#feedback form span, #feedback form input').hover(function(){
			var $parent = $(this).parents('.code');
			
			$parent.find('span, input')
				.toggleClass('hover');
		});
		
		$('#feedback form span').on({ click: function() { $(this).parents('.code').find('input').focus() }});
	
	// SUBSCRIBE FORM
	$('#newsletter form').on({
		submit: function() {
			
			var $this = $(this);
			$('#newsletter-response').removeAttr('class').show().animate({opacity: 1})
				.find('.resp').empty().hide()
			.end().find('.loader').show().css({opacity: 1});
			
			$this.animate({opacity: 0});
				
			$.ajax({
				type: 'POST',
				dataType: 'json',

				url: $(this).attr('action'),
				data: $(this).serialize(),

				success: function(d) {
					
					var text = (d.status == 1) ? 'You were subscribed successfully' : d.data;
					var className = (d.status == 1) ? '' : 'error';
					
					$('#newsletter-response > .loader').animate({opacity: 0}, function() {
						$(this).hide().parent()
							.addClass(className)
							.find('.resp')
								.html(text)
								.css({opacity: 0})
								.show()
								.animate({opacity: 1});
						if(d.status != 1) {
							setTimeout(function(){
								$('#newsletter-response').animate({opacity: 0}, function(){
									$(this).hide();
									$this.animate({opacity: 1});
								})
							}, 2500);
						}
					});

					if(d.status == 1) $this.off();
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log('SUBSCRIBE FORM ERROR: ' + textStatus, jqXHR, errorThrown);
				}
			});
			
			return false;	
		}
	});
	
	// FEEDBACK FORM
	$('#feedback form').on({
		submit: function() {
			
			var $this = $(this);
			$('#feedback-response').removeAttr('class').show().animate({opacity: 1})
				.find('.resp').empty().hide()
			.end().find('.loader').show().css({opacity: 1});
			
			$this.animate({opacity: 0});
			
			$.ajax({
				type: 'POST',
				dataType: 'json',

				url: $(this).attr('action'),
				data: $(this).serialize(),

				success: function(d) {
					
					var text = (d.status == 1) ? 'Your message was successfully sent' : d.data;
					var className = (d.status == 1) ? '' : 'error';
					
					$('#feedback-response > .loader').animate({opacity: 0}, function() {
						$(this).hide().parent()
							.addClass(className)
							.find('.resp')
								.html(text)
								.css({opacity: 0})
								.show()
								.animate({opacity: 1});
								
						setTimeout(function(){

							if(d.status == 1) $this[0].reset();
							$('#feedback .code img').trigger('click');
							
							$('#feedback-response').animate({opacity: 0}, function(){
								$(this).hide();
								$this.animate({opacity: 1});
							})
						}, 2500);
					});

					//if(d.status == 1) $this.off();
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log('FEEDBACK FORM ERROR: ' + textStatus, jqXHR, errorThrown);
				}
			});
			
			return false;
		}
	});
}

function changeAll() {
	
	window.globWidth = $(window).width();
	window.globHeight = $(window).height();
	
	// Change countdown
	var bodySize = (window.globWidth < 1024) ? 'small' : 'big';
	
	if($('body').data('size') != bodySize) {
		if(window.IE8 != true) { countdown.init(); } else { countdownIE.init(); }
		$('body').data('size', bodySize);
	}
	
	slider.photoAlign();
}

var captcha = {
	init: function() {
		this.randSet();
		
		$(document).on('click', '#feedback .code img', captcha.randSet);
	},
	
	randSet: function() {		
		$.ajax({
			url: 'engine/captcha-random.php',
			success: function() { captcha.imageUp() }
		});
	},
	
	imageUp: function() {
		var hash = Math.random() * 1000000;
		var $feedbackCode = $('#feedback .code');	
			$feedbackCode.find('img').remove();
			$feedbackCode.find('div > div').html('<img src="engine/captcha-image.php?hash=' + hash + '">');
	}
};