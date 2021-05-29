$(window).scroll(function(){
	if(window.scrollY >= 100){
		$('header').addClass('showHeaderScroll');
	} else {
		$('header').removeClass('showHeaderScroll');
	}
});