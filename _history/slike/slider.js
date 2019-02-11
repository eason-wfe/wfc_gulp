$(function() {
    var SIdx = 0,
        SCount = $(".slider-item").length,
        SMove = $(".slider").width();
    $(".slider-item").first().clone().appendTo($(".slider-box"));
    function run() {
        if (!$(".slider-box").is(":animated")) {
            $(".slider-box").stop(true,false).animate({left: "-="+SMove }, function() {
                if (SIdx >= SCount - 1) {
                    SIdx = -1;
                    $(this).css("left", 0);
                }
                SIdx++;
                dot();
            });
        }
    }
    var SSid = setInterval(run, 2000);
    $(".slider-box,.slider-nav,.slider-nex,.slider-pre").hover(function() {
        clearInterval(SSid);
    },function() {
        SSid = setInterval(run, 2000);
    });
    function dot() {
        $(".slider-nav>span.active").removeClass();
        $(".slider-nav>span").eq(SIdx).addClass("active");
    }
    function back() {
        if (!$(".slider-box").is(":animated")) {
            if (SIdx <= 0) {
                SIdx = SCount;
                $(".slider-box").css("left", SIdx * -SMove);
            }
            $(".slider-box").stop(true,false).animate({left: "+="+SMove}, function() {
                SIdx--;
                dot();
            });
        }
    }
    $(".slider-nex").click(run);
    $(".slider-pre").click(back);
    $(".slider-nav > span").click(function() {
        SIdx = $(this).index();
        $(".slider-box").stop(true,false).animate({left: SIdx * -SMove}, dot);
    });
});