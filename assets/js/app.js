$(document).ready(function() {
	$('.banner-slider').slick({
	    autoplay: true,
		centerMode: true,
		arrows: false,
		slidesToShow: 1,
	    centerPadding: '0',
	    slidesToScroll: 1,
	    autoplaySpeed: 5000,
	    speed: 1000,
	    dots: false,
		fade: true,
		cssEase: 'linear',
	    accessibility: false,
	  	
	});

	$('.hamburger-menu').click(function(){
		$('.main-menu').toggleClass('toggle-open');
	});
});
