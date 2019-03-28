nua = navigator.userAgent;
// time
// if(nua.match(/(iPhone|iPod|Android)/)){ //1070910 AWD bug 
    // default
    $('.act-areabox-box').css({display:'none'});
    $('.layout-section-first').find('.act-areabox-box').css({display:'block'});
    $('.layout-section-first').find('.act-areabox').addClass('open');
    // action
    $('.act-areabox-switch').click(function(){
        $(this).siblings().slideToggle(300);
        $(this).parent().toggleClass('open');
    });
// }; //1070910 AWD bug

// attention
$(".act-attention").click(function(){
    $(this).toggleClass('open');
    $(this).siblings().slideToggle(300);
    // $('.act-attention-content').slideToggle(300);
    // $('.act-attention')
});
// check
$(".attention-check label").click(function(){
    var target = $(".attention-check input");
    if( !target.is(":checked") ){
        target.prop("checked", true);
    }else{
        target.prop("checked", false);
    }
});



/*======== 3. SELECT BOX ========*/
$('.select-drop').selectbox();


// HIDDEN TIME



$('.is-capstr').click(function(){
    var $eq2 = $(this).next(),
        $eq3 = $(this).next().next(),
        $eq4 = $(this).next().next().next(),
        $strVal = $(this).find('.act-timebox-time').html(),
        $eq2Val = $eq2.find('.act-timebox-time').html(),
        $eq3Val = $eq3.find('.act-timebox-time').html(),
        $eq4Val = $eq4.find('.act-timebox-time').html();
    // console.log($(this));
    console.log($strVal);
    console.log($eq2Val);
    console.log($eq3Val);
    console.log($eq4Val);

    switch(true){
        case $eq2Val == $strVal && $eq3Val == $strVal && $eq4Val == $strVal:
            console.log('4')
            $eq4.find('.act-timebox-time').css({ 'color': '#fff' });
            $eq3.find('.act-timebox-time').css({ 'color': '#fff' });
            $eq2.find('.act-timebox-time').css({ 'color': '#fff' });
            break;
        case $eq2Val == $strVal && $eq3Val == $strVal:
            console.log('3');
            $eq3.find('.act-timebox-time').css({ 'color': '#fff' });
            $eq2.find('.act-timebox-time').css({ 'color': '#fff' });
            break;    
        case $eq2Val == $strVal:
            console.log('2');
            $eq2.find('.act-timebox-time').css({ 'color': '#fff' });
            break;
        default:
            console.log('false');
    }

}).click();

// console.log($('.is-capstr') );


