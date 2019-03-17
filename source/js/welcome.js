// $(function () {
// $(function(){
$(function(){
	$(".art-list-f2-item").eq(1).find(".art-list-f2-link").addClass("now");
	// ^ 演示用，請參考

	//// .VBOX-LIST WIDTH
	var perWidth = 265,
			perGutter = 8,
			move = ( perWidth + perGutter ) * 2,
			vWidth = $('.vbox').width();
			
	function vboxListWidth(target) {
		target.find(".vbox-item").css({ "width": perWidth, "marginRight": perGutter });
		//
		var count = target.find(".vbox-item").length,
			width = (perWidth + perGutter) * count - perGutter;
		target.find('.vbox-list').css({ "width": width });
		//
		target.find('.vbox').css({'height': target.find('.vbox-list').height()});
	}
	vboxListWidth($('.target1'));
	vboxListWidth($('.target2'));
	vboxListWidth($('.target3'));


	//// ADD IS-PC
	var nua = navigator.userAgent;
	// console.log(nua);
	if (!/iphone/i.test(nua) && !/ipad/i.test(nua) && !/android/i.test(nua)) {
		// console.log('is pc');
		var $target = $('.vbox-outer');
		$target.addClass('is-pc');
	}


	// NEX
	function pn(target){

		var listWidth = target.find('.vbox-list').width(),
			maxMove = listWidth - vWidth,
			position = 0,
			allPosi;

		// NEX
		target.find('.vbox-nex').click(function(e){
			target.find('.vbox-pre').removeClass('is-end');
			position = position + move;
			if(position>=maxMove){
				position=maxMove;
				$(this).addClass('is-end');
			}
			target.find('.vbox-list').animate({'left': -position},500,function(){
				console.log('left is '+target.find('.vbox-list').position().left);
			});
			allPosi = position;
			e.preventDefault();
		});

		// PRE
		target.find('.vbox-pre').click(function(e){
			console.log('===========================');
			console.log('all position is'+allPosi);
			var start = target.find('.vbox-list').position().left;
			var position = parseInt(start + move);
			console.log('move is '+move);
			console.log('start is '+start);
			console.log('position is '+position);
			console.log('===========================');
			target.find('.vbox-nex').removeClass('is-end');
			if(position<=0){
				console.log('position <= 0');
				position=0;
				$(this).addClass('is-end');
			}else{
				console.log('position >= 0');
			}
			target.find('.vbox-list').animate({'left': position},500);
			e.preventDefault();
		})
	};
	pn($('.target1'));
	pn($('.target2'));
	pn($('.target3'));
})
// })
// });
