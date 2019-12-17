jQuery(document).ready(function() {
	burger();
	justATouch();

	document.documentElement.classList.add('can-touch')
	jQuery(window).resize(function() {


	});

});


function burger() {
	jQuery('#hamburger').click(function() {
		if (jQuery('#hamburger').hasClass('hamburger-active')) {
			jQuery('#hamburger').removeClass('hamburger-active');
			jQuery('.menu-holder').removeClass('active');
			jQuery('header').removeClass('active-fixed');
			jQuery('.header').removeClass('active-fixed');
			jQuery('#hamburger').removeClass('active-fixed');
		} else {
			jQuery('#hamburger').addClass('hamburger-active');
			jQuery('.menu-holder').addClass('active');
			jQuery('header').addClass('active-fixed');
			jQuery('.header').addClass('active-fixed');
			jQuery('#hamburger').addClass('active-fixed');
		}
	});
}

function justATouch() {
	jQuery('.item a').on('touchstart touchend', function(e) {
		jQuery(this).toggleClass('over');
	});
}
