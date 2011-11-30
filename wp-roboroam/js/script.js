/* GLOBAL INFO AND SETTINGS ============================================================================================= *
 * == note that everything in this file depends on jQuery, and many also require parts of jQuery UI                    == *
 * ====================================================================================================================== */
var debugmode = false; //debugging


/* Author: ZURB Playground (http://zurb.com/playground/) ================================================================ */

	/* --- Reveal Modal (jquery.reveal.js) ------------------------------------------------------------------------------ */
	// This function is called by an event watching the HTML5 data tag
	
	/* --- Orbit Slider (jquery.orbit-1.2.3.js) ------------------------------------------------------------------------- */
	$('#orbit').orbit({
		 animation: 'horizontal-push',		// fade, horizontal-slide, vertical-slide, horizontal-push
		 animationSpeed: 800,				// how fast animtions are
		 timer: true,						// true or false to have the timer
		 advanceSpeed: 4000,				// if timer is enabled, time between transitions 
		 pauseOnHover: false,				// if you hover pauses the slider
		 startClockOnMouseOut: false,		// if clock should start on MouseOut
		 startClockOnMouseOutAfter: 1000,	// how long after MouseOut should the timer start again
		 directionalNav: true,				// manual advancing directional navs
		 captions: true,					// do you want captions?
		 captionAnimation: 'fade',			// fade, slideOpen, none
		 captionAnimationSpeed: 800,		// if so how quickly should they animate in
		 bullets: false,					// true or false to activate the bullet navigation
		 bulletThumbs: false,				// thumbnails for the bullets
		 //bulletThumbLocation: '',			// location from this file where thumbs will be
		 //afterSlideChange: function(){}		// empty function 
	});


/* Author: Theo Pak (http://theopak.com) ================================================================================ */

function prepareSubpage(){

	// only call this function if the document/window is ready
	if(debugmode == true) { alert("function prepareSubpage(); called"); }

	/* --- pad content block images so that they're consistenly sized --------------------------------------------------- */
	$('section .third').wrap(
		"<span style=\"width: 100%; height: 130px; margin: 0 auto; background-color: #E4E4E4; border: 1px solid #CCC; \" />"
	);

}

$(document).ready(function(){

	if(debugmode == true) { alert("document ready, main script.js loop started"); }

	/* --- page load animation for top level ---------------------------------------------------------------------------- */
	$('header nav ul li.page_item a').click(function(){
		$('#main').addClass('animate-fadeout');
	});

	/* --- animated PJAX load for #main>#content (https://github.com/defunkt/jquery-pjax) ------------------------------- */
	$('#main nav a').pjax('#main #content');
	$('#main #content').bind('pjax:start',	function(){
		$('#content-wrapper').hide('fade',500);
		//var nowLoading = "<img class=\"loading\" src=\"img/loading.gif\" alt=\"loading...\" />";
		//$('#content').html(nowLoading);
	}).bind('pjax:end',	function(){
		$('#content-wrapper').show('drop',{direction:'right'},500)
	});
	$('#main nav a').click(function(){
		$('#main nav a.current').removeClass('current');
		$(this).addClass('current');
	});

	prepareSubpage(); //call this function initially and after AJAX loads

});
