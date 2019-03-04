$(function(){
	var nua = navigator.userAgent;
	console.log(nua);
	if(/net/i.test(nua)){
		console.log('is ie');
	}else if(/edge/i.test(nua)){
		console.log('is edge');
	}else if( /chrome/i.test(nua) ){
		console.log('is chrome');
	}else if(/firefox/i.test(nua)){
		console.log('is firefox');
	}
});