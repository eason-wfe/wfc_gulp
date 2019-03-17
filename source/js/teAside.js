$(function(){
	if($(window).width() <= 767){
		var $doc = $(document).height(),
			$win = $(window).height(),
			$cr = $('.copyRight').outerHeight(),
			$tm = $('.tabmenu').outerHeight(),
			$target = $('.te-ctabox');
		$(window).scroll(function(){
			var wst = $(window).scrollTop(),
				topEnd = $doc - $win - $tm;
			if( wst >= topEnd){
				$target.css({'bottom': $cr});
			}else{
				$target.removeAttr('style');
			}
		});		
	}
});