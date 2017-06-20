$(window).scroll(function(){
	var scroll = $(window).scrollTop();
	
	if (scroll >= 470) {
		nav.addClass('effect');
	} else {
		nav.removeClass('effect');
	}
});

smoothScroll.init({
	speed: 700,
	easing:'easeInOutQuad',
	updateURL: false,
	offset: 0
});
