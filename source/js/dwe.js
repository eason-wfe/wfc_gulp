$(document).ready(function(){
	function getHeight(){
		var dweg = $(".dweg-img"),
				dwegw = dweg.width(),
				dwel = $(".dwel-license"),
				dwelw = dwel.width();
		dweg.css({"height": dwegw * 1.33 });
		dwel.css({"height": dwelw * 1.42 });
	}
	$(window).on("load , resize",getHeight);
});