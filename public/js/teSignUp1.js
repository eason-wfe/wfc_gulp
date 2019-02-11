$(function(){
    // COLLAPSE
    $(".layout-collapse").click(function(){
        $('.layout-collapse-content').slideToggle(300);
        $('.layout-collapse').toggleClass('open');
    });
});