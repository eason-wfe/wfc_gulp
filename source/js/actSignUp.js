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


// delete time
// var $str = $('.act-timebox-item'),
//     $nex = $str.next(),
//     valStr = $str.find('.act-timebox-time').html(),
//     valNex = $nex.find('.act-timebox-time').html();

// console.log($str.length);
// var $str = $('.act-timebox-cap img');
// if( /c05.png/i.test( $str.attr('src') ) ){}

// 3
var $target = $('.act-timebox .act-timebox-item'),
    $nex = $target.next(),
    repeat = $target.length;

var i = 1;

while ( i <= 10 ){
    console.log( i );
    i++;
}

for(var i=0;i<repeat;i++){
    console.log(i)
    // console.log($target.eq[i].find('.act-timebox-cap img').attr('src'))
}
// console.log( $target );
// console.log( $nex.find('.act-timebox-cap img').attr('src') );
// if( /c05/.test( $target.find('.act-timebox-cap img').attr('src') ) ){
//     console.log('got');
// }