/** The theme settings **/

/* --- The countdown settings --- */

	// Formate of date: MOUNTH DAY, YEAR HOURS:MINUTES:SECONDS
	// date/time to count down to
	var end_date = 'October, 15 2014 14:59:26';
	
	// The timezone (hours or minutes from GMT) for the target times, 
	// or null for client local 
	// E.G. Target time in Moscow, Russia (GMT +4:00)
	var tm_zone = +0; 
	
	// A URL to load upon expiry, replacing the current page
	// [url OR null] e.g. "http://google.com";
	var expiry_goto = null;
	
	// Invert countdown: clockwise [false] or anticlockwise [true]
	// [true OR false]
	var countdownInvert = true;
	
/* --- The slider settings --- */
	
	var sliderEnable = true;
	
	// The list names of photos from folder "/static/bg/"
	// ['NAME OF BACKGROUND', 'NAME OF BLURED BACKGROUND']
	var photos = [
		['slider-bg-4', false],
		['slider-bg-3', false],
		['slider-bg-2', false],
		['slider-bg-1', false]
	];
	
	var photos_type = 'jpg';
	
	// The speed of changing photos in the slider
	var animInterval = 30000;
	
	
// Color scheme
var color = {
	// color of countdown
	countdown:  'rgba(255, 255, 255, 1.0)',
	
	// color of links
	links: 		'rgba(240, 0, 0, 0.6)',
	
	// color of hovered links
	linksHover:	'rgba(200, 0, 0, 1)'
}
