// FOR UI:
// 1.HEADER
// 2.FOOTER
// 3.TABBAR
$(function () {
	// FOR DEMO ONLY MOBILE
	var logInM = $('.logbar-m-in');
	var logOutM = $('.logbar-m-out');
	$('.logbar-m-link').click(function (e) {
		e.preventdefault();
	});
	logInM.click(function () {
		$(this).css({ display: "none" });
		logOutM.css({ display: "inline-block" });
	});
	logOutM.click(function () {
		$(this).css({ display: "none" });
		logInM.css({ display: "inline-block" });
	});

	// FOR DEMO ONLY PC
	var logInPC = $('.logbar-pc-in');
	var logOutPC = $('.logbar-pc-out');
	$('.logbar-pc-link').click(function (e) {
		e.preventdefault();
	});
	logInPC.click(function () {
		$(this).css({ display: "none" });
		logOutPC.css({ display: "inline-block" });
	});
	logOutPC.click(function () {
		$(this).css({ display: "none" });
		logInPC.css({ display: "inline-block" });
	});

	// FOOTER RISE
	var preScrollY = 0;
	$(window).scroll(function () {
		var newScrollY = $(window).scrollTop()
		if (newScrollY < preScrollY) {
			$('.main-wrapper').addClass('footer-rise');
		} else {
			$('.main-wrapper').removeClass('footer-rise');
		};
		preScrollY = newScrollY;
	});

	// TEMP PLUGIN USE (from app.js)
	/*======== 2. MENU SCROLL ========*/
	// 卷軸非置頂時的主 menu 控制
	$(window).load(function () {
		$('.body-wrapper').each(function () {
			var header_area = $('.header-wrapper');
			var main_area = header_area.children('.navbar');

			var logo = main_area.find('.navbar-header');
			var navigation = main_area.find('.navbar-collapse');
			var original = {
				nav_top: navigation.css('margin-top')
			};

			$(window).scroll(function () {
				if (main_area.hasClass('bb-fixed-header') && ($(this).scrollTop() === 0 || $(this).width() < 750)) {
					main_area.removeClass('bb-fixed-header').appendTo(header_area);
					navigation.animate({ 'margin-top': original.nav_top }, {
						duration: 300, queue: false, complete: function () {
							header_area.css('height', 'auto');
						}
					});
				} else if (!main_area.hasClass('bb-fixed-header') && $(this).width() > 750 &&
					$(this).scrollTop() > header_area.offset().top + header_area.height() - parseInt($('html').css('margin-top'))) {

					header_area.css('height', header_area.height());
					main_area.css({ 'opacity': '0' }).addClass('bb-fixed-header');
					main_area.appendTo($('body')).animate({ 'opacity': 1 });

					navigation.css({ 'margin-top': '0px' });
				}
			});
		});

		$(window).trigger('resize');
		$(window).trigger('scroll');
	});

	/*======== 4. MENU DROPDOWN ON HOVER ========*/
	var header_area = $('.header-wrapper');
	if (header_area.width() > 750) {
		$('.nav .dropdown').hover(function () {
			$(this).addClass('open');
		},
			function () {
				$(this).removeClass('open');
			}
		);
	}

	/*======== 9. BACK TO TOP ========*/
	$(document).ready(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#backToTop').css('opacity', 1);
			} else {
				$('#backToTop').css('opacity', 0);
			}
		});
	});

	/*======== 10. SMOOTH SCROLLING TO SECTION ========*/
	// 以動畫方式快速前往各錨點
	// 包跨 back to top
	$(document).ready(function () {
		$('.scrolling  a[href*="#"]').on('click', function (e) {
			e.preventDefault();
			e.stopPropagation();
			var target = $(this).attr('href');
			$(target).velocity('scroll', {
				duration: 800,// speed
				offset: -90,
				easing: 'easeOutExpo',
				mobileHA: false
			});
		});
	});
	/*========== IE aside (not Edge) ============*/
	if(/net/i.test(navigator.userAgent)){
		var $target = $('.sticky-top');
		$(window).scroll(function(){
			// console.log($(window).scrollTop());
			$target.css({'top':0})
			if( $(window).scrollTop() >= 226 ){
				console.log('>=226')
				$target.css({'position':'fixed','top':'500'})
			}else{
				$target.removeAttr('style');
			}		
		}).scroll();

		
		$('.row').find('.sticky-top').css({"background":"#f00;"});
			
		// if( !$('.row').has('.sticky-top') ){
		// 	console.log('no aside');
		// }
		
	}
});