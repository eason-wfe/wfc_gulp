$(function(){
	// unit status & content , inline width share width
	if( $(window).width() > 991 + 17 ){
		function historyShare(){
			var paddingWidth = 18;
			var $carnival = $('.carnival-state'),
				cWidth = $carnival.data('width');
			$carnival.css({'width':cWidth});
			$('.carnival-box').css({'paddingLeft': cWidth + paddingWidth});
			//
			var $te = $('.te-state'),
				tWidth = $te.data('width');
			$te.css({'width':tWidth});
			$('.te-box').css({'paddingLeft': tWidth + paddingWidth});
			//
			var $cap = $('.cap-state'),
				capWidth = $cap.data('width');
			$cap.css({'width':capWidth});
			$('.cap-box').css({'paddingLeft': capWidth + paddingWidth});
		}
		historyShare();
	}
	
	// dorp down menu
	$(".select-drop").selectbox();
});
