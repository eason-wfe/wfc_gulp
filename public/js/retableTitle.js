$(function () {
	function retableTitle() {
		var $retable = $(".retable"),
			 titleWidth = $retable.data("width");
		var $doubleContent = $(".retable-item-double .retable-content");
		$(".retable-title").css({ "width": titleWidth });
		if( $(window).width() >= 992 -17 ){ 
			// console.log("window => 992");
			$doubleContent.css({"width": $retable.width()/2 - titleWidth });
		}
	};
	retableTitle();
});