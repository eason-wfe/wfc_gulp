<!DOCTYPE html>
<html lang="ko">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link href="css/wfcFriends_kr.css" rel="stylesheet">
  </head>
  <body class="body-wrapper">
    <!-- loaded-->
    <div class="main-wrapper">
      <!--
      ====================================
      ——— HEADER
      =====================================
      -->
      <header class="header-wrapper" id="pageTop"><?php include "html_model/header/header-1.html";?>
        <!-- NAVBAR-->
        <nav class="navbar navbar-default lightHeader" id="menuBar" role="navigation">
          <div class="container"><?php include "html_model/header/header-2-kr.html";?></div>
          <!--
          ====================================
          ——— BREAD CRUMB
          =====================================
          -->
          <div class="layout-breadcrumb-box">
            <div class="container">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-truncate">
                  <li class="breadcrumb-item"><a href="#">index</a></li>
                  <li class="breadcrumb-item">My Community</li>
                  <li class="breadcrumb-item">WFC 프랜즈</li>
                  <li class="breadcrumb-itme">WFC Friends</li>
                </ol>
              </nav>
            </div>
          </div>
        </nav>
      </header>
      <div class="container container-main container-col-2">
        <div class="row">
          <div class="col-xs-12 col-xs-12 col-md-3 aside-lb">
            <div class="panel-heading bg-color-4 border-color-4">
              <h3 class="panel-title">WFC Community</h3>
              <div class="aside-lb-close">x</div>
            </div><?php include "html_model/_comm_kr/comm-aside.html";?>
          </div>
          <div class="col-xs-12 col-xs-12 col-md-9">
            <div class="layout-main"><?php include "html_model/uikit/aside-lb-open.html";?>
              <div class="sectionTitle text-center color-4 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>All Friends</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <div class="friends-view" style="background-image: url(img/wfcfriends/all.jpg);"></div>
              <ul class="friends">
                <li class="friends-item"><a class="friends-link" href="">
                    <div class="friends-img" style="background-image: url(img/wfcfriends/1.jpg);"></div>
                    <p class="friends-name">Jimmy Jimmy Jimmy</p></a></li>
                <li class="friends-item"><a class="friends-link" href=""><img class="friends-img" src="img/wfcfriends/2.jpg">
                    <p class="friends-name">Jimmy Jimmy Jimmy</p></a></li>
                <li class="friends-item"><a class="friends-link" href="">
                    <div class="friends-img" style="background-image: url(img/wfcfriends/3.jpg);"></div>
                    <p class="friends-name">Jimmy Jimmy Jimmy</p></a></li>
                <li class="friends-item"><a class="friends-link" href="">
                    <div class="friends-img" style="background-image: url(img/wfcfriends/4.jpg);"></div>
                    <p class="friends-name">Jimmy Jimmy Jimmy</p></a></li>
                <li class="friends-item"><a class="friends-link" href="">
                    <div class="friends-img" style="background-image: url(img/wfcfriends/5.jpg);"></div>
                    <p class="friends-name">Jimmy Jimmy Jimmy</p></a></li>
                <li class="friends-item"><a class="friends-link" href="">
                    <div class="friends-img" style="background-image: url(img/wfcfriends/6.jpg);"></div>
                    <p class="friends-name">Jimmy Jimmy Jimmy</p></a></li>
                <li class="friends-item"><a class="friends-link" href="">
                    <div class="friends-img" style="background-image: url(img/wfcfriends/7.jpg);"></div>
                    <p class="friends-name">Jimmy Jimmy Jimmy</p></a></li>
              </ul>
            </div>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <h3>叔叔/阿姨介紹內頁</h3>
            <div class="layout-main clearfix"><?php include "html_model/uikit/aside-lb-open.html";?>
              <div class="sectionTitle text-center color-4 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>Jimmy</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <div class="friends-view" style="background-image: url(img/wfcfriends/2.jpg);"></div>
              <div class="friend-intro">
                <div class="friend-from">來自美國</div>							來者不拒的Jimmy叔叔有一個關不起來的話閘子，他喜歡觀察、創意無限，透過穿著、表情，然後就會開始和小朋友天南地北地聊天喔！
              </div>
              <button class="btn layout-btn" type="button">목록보기</button>
            </div>
          </div>
        </div>
      </div>
      <!-- DIFFERENT--><?php include "html_model/footer-kr.html";?>
      <?php include "html_model/tabmenu-kr.html";?>
      <!-- THE SAME--><?php include "html_model/floating-ui.html";?>
      <?php include "html_model/js-for-all.html";?>
      <!-- JS FOR THIS PAGE ONLY-->
      <script src="js/tmpAsideLb.js"></script>
      <script>
        $(function(){
        // console.log(   );
        $(".friends-view").css({"height": $(".friends-view").width() * 0.5046 })
        $(".friends-img").css({"height": $(".friends-img").width() * 0.7467 })
        });
      </script>
      <script>
        $(function(){
        // 此 js 為演示用，請參考
        var $target = $(".art-list-f2-item").eq(1);
        $target.find(".art-list-f3").addClass("is-open");
        $target.find(".art-list-f3-item").eq(0).find(".art-list-f3-link").addClass("now");
        $target.find(".art-list-f3-item").eq(6).find(".art-list-f3-link").addClass("now");
        });
      </script>
    </div>
  </body>
</html>