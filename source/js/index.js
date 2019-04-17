// 1070823
// FOR INDEX ONLY
$(function () {
    // 首頁 SLIDE SHOW 文字垂直向座標
    // .rs-caption-1 為小標，-2為大標
    var headerArea = $('.header-wrapper');
    // org
    if (headerArea.width() < 750) {
        // mobi
        $('.rs-caption-1').attr('data-y', '410');//410
        $('.rs-caption-2').attr('data-y', '480');//480
    } else {
        // pc
        $('.rs-caption-1').attr('data-y', '300');// 300
        $('.rs-caption-2').attr('data-y', '350');// 350
    };

    // IG
    var igItemWidth = $('.ig-grid-item').width();
    $('.ig-grid-img').css({ 'height': igItemWidth });

    // WATERFULL
    $('.ig-grid').masonry({
        selectorItem: '.ig-grid-item',
        columnWidth: '.ig-grid-sizer',
        gutter: '.ig-gutter-sizer',
        percentPosition: true
    });


    // FROM TEMPLATE js/app.js
    /*======== 3. SELECT BOX ========*/
    $('.select-drop').selectbox();

    //6. RS-SLIDER
    var nua = navigator.userAgent;
    if (nua.match(/(iPhone|iPod|Android)/)) {
        $('.bannercontainerV1 .fullscreenbanner').revolution({
            delay: 5000,
            startwidth: 1170,
            startheight: 560,
            fullWidth: 'on',
            fullScreen: 'on',// different
            hideCaptionAtLimit: '',
            dottedOverlay: 'twoxtwo',
            navigationStyle: 'preview4',
            fullScreenOffsetContainer: '',
            hideTimerBar: 'on'
        });
    } else {
        $('.bannercontainerV1 .fullscreenbanner').revolution({
            delay: 5000,
            startwidth: 1170,
            startheight: 560,
            fullWidth: 'on',
            fullScreen: 'off',// different
            hideCaptionAtLimit: '',
            dottedOverlay: 'twoxtwo',
            navigationStyle: 'preview4',
            fullScreenOffsetContainer: '',
            hideTimerBar: 'on'
        });
    };

    /*======== 7. OWL-CAROUSEL ========*/
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
                items: 3
            },
            992: {
                items: 4
            }
        }
    });

    /*======== 16. WOW JS ========*/
    var $wow = new WOW().init();
});