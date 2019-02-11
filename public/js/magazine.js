$(function(){
	/*======== 7. OWL-CAROUSEL ========*/
	var owl = $('.owl-carousel.teamSlider');
	owl.owlCarousel({
		loop: true,// btn of y-scroll function property
		margin: 28,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		nav: true,
		moveSlides: 4,
		dots: false,
		responsive: {// breakpoint / items numbers
			320: {
				items: 1
			}
		}
	});
	//
	$('.art-list-f2-item:last-child').find('a').addClass('now');
	var $wow = new WOW().init();	
});
