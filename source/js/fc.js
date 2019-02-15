$(function () {
    // OWL-CAROUSEL
    var owl = $('.owl-carousel.teamSlider');
    owl.owlCarousel({
    loop: true,
    margin: 28,
    autoplay: false,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    nav: true,
    moveSlides: 4,
    dots: false,
    responsive: {
        320: {
        items: 1
        },
        768: {
        items: 2
        },
        1200: {
        items: 3
        }
    }
    });
    // COLLAPSE
        $(".layout-collapse").click(function(){
        $('.layout-collapse-content').slideToggle(300);
        $('.layout-collapse').toggleClass('open');
    });
});