$(function(){
	// Mobi pic
	$(".post-contbox img").click(function(){
		var nua = navigator.userAgent;
		if( /iphone/i.test(nua) || /android/i.test(nua) ){
			window.open('img/community/ad.jpg', 'img');
		};
	});
	// collapse - default
	setTimeout(function(){
		$('.collapse-first').find('.layout-collapse-content').slideDown(300);
		$('.collapse-first').find('.layout-collapse').addClass('open');
	},600);
	// collapse - action
	$('.layout-collapse').click(function(){
		$('.layout-collapse-content').slideUp(200);
		if( !$(this).hasClass('open')){
			$('.layout-collapse').removeClass('open');
			$(this).siblings().slideToggle(300);
			$(this).addClass('open');			
		}else{
			$('.layout-collapse').removeClass('open');
		}
	});

	// anchor
	$('.linkBox a[href*="#"]').on('click', function (e) {
		e.preventDefault();
		e.stopPropagation();
		var target = $(this).attr('href'),
			offset;
		if( $(window).width() >= 768 ){
			offset = -135;
		}else{
			offset = -101;
		}
		setTimeout(function(){
			$(target).velocity('scroll', {
				duration: 1200,// speed
				offset: offset,
				easing: 'easeOutExpo',
				mobileHA: false
			});
		},310);
	});

	// link box
	$('.link1').click(function(){
		if( !$('#target1').find('.layout-collapse').hasClass('open') ){
			$("#target1").find(".layout-collapse").click();
		}
	});
	$('.link2').click(function(){
		if( !$('#target2').find('.layout-collapse').hasClass('open') ){
			$("#target2").find(".layout-collapse").click();
		}
	});
	$('.link3').click(function(){
		if( !$('#target3').find('.layout-collapse').hasClass('open') ){
			$("#target3").find(".layout-collapse").click();
		}
	});
	$('.link4').click(function(){
		if( !$('#target4').find('.layout-collapse').hasClass('open') ){
			$("#target4").find(".layout-collapse").click();
		}
	});
	$('.link5').click(function(){
		if( !$('#target5').find('.layout-collapse').hasClass('open') ){
			$("#target5").find(".layout-collapse").click();
		}
	});
});
