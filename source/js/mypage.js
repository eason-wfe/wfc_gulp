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
	function myPageCollapse(btn,target){
		btn.click(function(){
			if( !target.find('.layout-collapse').hasClass('open') ){
				target.find(".layout-collapse").click();
			}
		});		
	}
	for(var i=1;i<=5;i++){
		myPageCollapse(
			$('.link'+i),$('#target'+i)
		);		
	}
});
