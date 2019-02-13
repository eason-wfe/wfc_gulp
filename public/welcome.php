<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link rel="stylesheet" href="css/welcome.css">
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
          <div class="container"><?php include "html_model/header/header-2.html";?></div>
          <!--
          ====================================
          ——— BREAD CRUMB
          =====================================
          -->
          <div class="layout-breadcrumb-box">
            <div class="container">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-truncate">
                  <li class="breadcrumb-item"><a href="#">首頁</a></li>
                  <li class="breadcrumb-item"><a href="">我的專區</a></li>
                  <li class="breadcrumb-item">新手上路</li>
                </ol>
              </nav>
            </div>
          </div>
        </nav>
      </header>
      <!-- aside + main-->
      <div class="container container-main container-col-2">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3 sticky-top aside-lb">
            <div class="panel-heading bg-color-5 border-color-5">
              <h3 class="panel-title">我的專區</h3>
              <div class="aside-lb-close">x</div>
            </div><?php include "html_model/mypage/aside-file.html";?>
            <aside class="layout-sub px-4 py-4">
              <ul class="art-list-f2"><?php include "html_model/mypage/aside.html";?></ul>
            </aside>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="layout-main layout-deco-title"><?php include "html_model/uikit/aside-lb-open.html";?>
              <!-- LEVEL 1-->
              <div class="sectionTitle text-center color-5 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>新手上路</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <div class="layout-video-fluid">
                <iframe src="https://player.vimeo.com/video/243244233" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
              </div>
              <h3 class="layout-title-level-3 color-5">新手會員加油站</h3>
              <div class="vbox mb-5">
                <ul class="vbox-list target1">
                  <?php include "html_model/welcome/item.html";?>
                  <?php include "html_model/welcome/item.html";?>
                  <?php include "html_model/welcome/item.html";?>
                  <?php include "html_model/welcome/item.html";?>
                  <?php include "html_model/welcome/item.html";?>
                  <?php include "html_model/welcome/item.html";?>
                </ul>
              </div>
              <h3 class="layout-title-level-3 color-5">迪士尼美語世界</h3>
              <div class="vbox mb-5">
                <ul class="vbox-list target2">
                  <?php include "html_model/welcome/item.html";?>
                  <?php include "html_model/welcome/item.html";?>
                  <?php include "html_model/welcome/item.html";?>
                  <?php include "html_model/welcome/item.html";?>
                </ul>
              </div>
              <h3 class="layout-title-level-3 color-5">家庭寰宇俱樂部 World Family Club</h3>
              <div class="vbox mb-5">
                <ul class="vbox-list target3">
                  <?php include "html_model/welcome/item.html";?>
                  <?php include "html_model/welcome/item.html";?>
                  <?php include "html_model/welcome/item.html";?>
                  <?php include "html_model/welcome/item.html";?>
                  <?php include "html_model/welcome/item.html";?>
                  <?php include "html_model/welcome/item.html";?>
                  <?php include "html_model/welcome/item.html";?>
                  <?php include "html_model/welcome/item.html";?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div><?php include "html_model/welcome/lightbox.html";?>
      <!--DIFFERENT--><?php include "html_model/footer.html";?>
      <?php include "html_model/tabmenu.html";?>
      <!--THE SAME--><?php include "html_model/floating-ui.html";?>
      <?php include "html_model/js-for-all.html";?>
      <html>
        <head></head>
        <body></body>
      </html>
      <!-- JS FOR THIS PAGE ONLY-->
      <script src="js/tmpAsideLb.js"></script>
      <script>
        $(function(){
        $(".art-list-f2-item").eq(1).find(".art-list-f2-link").addClass("now");
        // ^ 演示用，請參考
        function vboxListWidth(){
        var perWidth = 175,
        perGutter = 8;
        $(".vbox-item").css({"width": perWidth,"marginRight": perGutter});
        // 1
        var n1 = $(".target1").find(".vbox-item").length,
        width1 = ( perWidth + perGutter ) * n1 - perGutter;
        $(".target1").css({"width": width1});
        // 2
        var n2 = $(".target2").find(".vbox-item").length,
        width2 = ( perWidth + perGutter ) * n2 - perGutter;
        $(".target2").css({"width": width2});
        // 3
        var n3 = $(".target3").find(".vbox-item").length,
        width3 = ( perWidth + perGutter ) * n3 - perGutter;
        $(".target3").css({"width": width3});
        }
        vboxListWidth();
        });
      </script>
    </div>
  </body>
</html>