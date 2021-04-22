/* -------------------------------------
 * countdown.js - controls the countdown
 * -------------------------------------
 */

var elm = [];
var canvs = [];

var countdown = cd = {
	end: new Date(end_date),
	init: function() {
		
		var wh = ($(window).width() < 1024) ? {width: 180, height: 180} : {width: 230, height: 230};
			
			$('#countdown canvas').attr(wh);
			$('#countdown > .body > div').css(wh);
		
		this.circ_size = Math.floor(wh.width/2);
		
		this.circ = Math.PI * 2;
		this.quart = Math.PI / 2;
		
		$('#countdown canvas').each(function(){ 
			var $thisParent = $(this).parent();
			
			$thisParent.data('value', -1);
			elm.push($thisParent.attr('id'));
			
		});
		
		this.drawCountdown(true);
				
		/** Initialization **/
		$("#ct").countdown({
			until: new Date(cd.end), 
			compact: true,
			onTick: cd.drawLine,
			timezone: tm_zone,
			expiryUrl: expiry_goto
		});	
	},
	
	drawCountdown: function(all, el) {
			
		if(all) {
			$.each(elm, function(k, val){ cd.drawCountdown(false, val) });
			return;
		}
		
		//var $el = document.getElementById(el);
		//var ctx = $el.getContext("2d");
				
		var $el = $('#'+el);	
		var ctx = $el.find('canvas')[0].getContext("2d");
			
		canvs.push(ctx);
		
		// Canvas	
		with(ctx) {			
			var backsize = ($.support.opacity) ? (cd.circ) - cd.quart : 2*cd.quart+1.57;
			
			// Draw back-circle
			beginPath();
				fillStyle = 'rgba(0,0,0,0.22)';
				
				arc(cd.circ_size, cd.circ_size, 72, -(cd.quart), backsize, false);
			fill();
		
			// Draw back-line
			beginPath();
				strokeStyle = 'rgba(255,255,255,0.3)';
				
				lineCap = 'butt';
				lineWidth = 3.0;
				arc(cd.circ_size, cd.circ_size, 75, -(cd.quart), backsize, false);
			stroke();
		}
	},
	
	drawLine: function(nums) {
		nums.splice(0, 3);
		
		$.each(nums, function(k, num){
			var ctx = canvs[k];
			var del = (k == 0) ? 365 : (k == 1) ? 24 : 60;
			
			var $parent = $(ctx.canvas.parentNode);
			var val = $parent.data('value');
			
			if((num/del).toFixed(2) == val) return;
			$parent.data('value', (num/del).toFixed(2));
			
			$parent.find('.info > .num').text(num)
			
			
			with(ctx) {		
				// Store the current transformation matrix
				save();
				
				// Use the identity matrix while clearing the canvas
				setTransform(1, 0, 0, 1, 0, 0);
				clearRect(0, 0, canvas.width, canvas.height);
				
				// Restore the transform
				restore();
				
				// Re-draw back
				cd.drawCountdown(false, elm[k]);
				
				// Count new position
				var n = (countdownInvert) ? num/del : (del - num) / del;
				var newPos = (countdownInvert && -num == 0) ? -(cd.quart) : n * cd.circ - (cd.quart);
				
				
				// Draw front-line
				beginPath();
					strokeStyle = color.countdown;
					
					lineCap = 'butt';
					lineWidth = 3.0;
		
				arc(cd.circ_size, cd.circ_size, 75, -(cd.quart), newPos, false);
				stroke();	
			}
		});
	}
};

var countdownIE = {
	end: new Date(end_date),
	init: function() {
		var wh = ($(window).width() < 1024) ? {width: 180, height: 180} : {width: 230, height: 230};
		
		$('#countdown > .body .info').css(wh);
		
		/** Initialization **/
		$("#ct").countdown({
			until: new Date(cd.end), 
			compact: true,
			onTick: countdownIE.tick,
			timezone: tm_zone,
			expiryUrl: expiry_goto
		});
	},
	
	tick: function(nums) {
		nums.splice(0, 3);
		$.each(nums, function(k, num){
			$('#countdown > .body .info > .num').eq(k).text(num);
		});
	}
}
