$(function(){
	var $target = $('.sub');
	console.log( $(document).height() );
		
	$(window).scroll(function(){
		var wst = $(window).scrollTop(),
			breakpoint = $('.main').height() - $target.height();
		$('.wst').text(wst);
		if(wst >= breakpoint ){
			$target.css({'top': breakpoint });
		}else if(wst < breakpoint ){
			$target.css({ 'top': wst });	
		}
	}).scroll();
});