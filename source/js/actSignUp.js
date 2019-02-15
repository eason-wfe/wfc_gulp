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