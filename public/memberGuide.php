<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link rel="stylesheet" href="css/memberGuide.css">
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
                  <li class="breadcrumb-item">常見問題</li>
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
            <!-- unit 1-->
            <div class="layout-main layout-deco-title"><?php include "html_model/uikit/aside-lb-open.html";?>
              <!-- LEVEL 1-->
              <div class="sectionTitle text-center color-5 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>常見問題</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <h3 class="layout-title-level-3 icon1">美語活動</h3>
              <ul class="faqbox">
                <li class="faqbox-item">
                  <div class="faqbox-que is-first">
                    <div class="faqbox-idx icon-1">Q 1</div>
                    <div class="faqbox-title">title 1</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-2">Q 2</div>
                    <div class="faqbox-title">title 2</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-3">Q 3</div>
                    <div class="faqbox-title">title 3</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-4">Q 4</div>
                    <div class="faqbox-title">title 4</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-5">Q 5</div>
                    <div class="faqbox-title">title 5</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
              </ul>
            </div>
            <!-- unit 2-->
            <div class="layout-main">
              <h3 class="layout-title-level-3 mt-0 icon2">CAP</h3>
              <ul class="faqbox">
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-1">Q 1</div>
                    <div class="faqbox-title">title 1</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-2">Q 2</div>
                    <div class="faqbox-title">title 2</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-3">Q 3</div>
                    <div class="faqbox-title">title 3</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-4">Q 4</div>
                    <div class="faqbox-title">title 4</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-5">Q 5</div>
                    <div class="faqbox-title">title 5</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
              </ul>
            </div>
            <!-- unit 3-->
            <div class="layout-main">
              <h3 class="layout-title-level-3 mt-0 icon3">Face Call</h3>
              <ul class="faqbox">
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-1">Q 1</div>
                    <div class="faqbox-title">title 1</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-2">Q 2</div>
                    <div class="faqbox-title">title 2</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-3">Q 3</div>
                    <div class="faqbox-title">title 3</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-4">Q 4</div>
                    <div class="faqbox-title">title 4</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-5">Q 5</div>
                    <div class="faqbox-title">title 5</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
              </ul>
            </div>
            <!-- unit 4-->
            <div class="layout-main">
              <h3 class="layout-title-level-3 mt-0 icon4">電話美語</h3>
              <ul class="faqbox">
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-1">Q 1</div>
                    <div class="faqbox-title">title 1</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-2">Q 2</div>
                    <div class="faqbox-title">title 2</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-3">Q 3</div>
                    <div class="faqbox-title">title 3</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-4">Q 4</div>
                    <div class="faqbox-title">title 4</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-5">Q 5</div>
                    <div class="faqbox-title">title 5</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
              </ul>
            </div>
            <!-- unit 5-->
            <div class="layout-main">
              <h3 class="layout-title-level-3 mt-0 icon5">畢業</h3>
              <ul class="faqbox">
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-1">Q 1</div>
                    <div class="faqbox-title">title 1</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-2">Q 2</div>
                    <div class="faqbox-title">title 2</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-3">Q 3</div>
                    <div class="faqbox-title">title 3</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-4">Q 4</div>
                    <div class="faqbox-title">title 4</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-5">Q 5</div>
                    <div class="faqbox-title">title 5</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
              </ul>
            </div>
            <!-- unit 6-->
            <div class="layout-main">
              <h3 class="layout-title-level-3 mt-0 icon6">學習 Q & A</h3>
              <ul class="faqbox">
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-1">Q 1</div>
                    <div class="faqbox-title">title 1</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-2">Q 2</div>
                    <div class="faqbox-title">title 2</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-3">Q 3</div>
                    <div class="faqbox-title">title 3</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-4">Q 4</div>
                    <div class="faqbox-title">title 4</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-5">Q 5</div>
                    <div class="faqbox-title">title 5</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
              </ul>
            </div>
            <!-- unit 7-->
            <div class="layout-main">
              <h3 class="layout-title-level-3 mt-0 icon1">WFC 相關網站</h3>
              <ul class="faqbox">
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-1">Q 1</div>
                    <div class="faqbox-title">title 1</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-2">Q 2</div>
                    <div class="faqbox-title">title 2</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-3">Q 3</div>
                    <div class="faqbox-title">title 3</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-4">Q 4</div>
                    <div class="faqbox-title">title 4</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-5">Q 5</div>
                    <div class="faqbox-title">title 5</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
              </ul>
            </div>
            <!-- unit 8-->
            <div class="layout-main">
              <h3 class="layout-title-level-3 icon2">WFC 會員服務</h3>
              <ul class="faqbox">
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-1">Q 1</div>
                    <div class="faqbox-title">title 1</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-2">Q 2</div>
                    <div class="faqbox-title">title 2</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-3">Q 3</div>
                    <div class="faqbox-title">title 3</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-4">Q 4</div>
                    <div class="faqbox-title">title 4</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-5">Q 5</div>
                    <div class="faqbox-title">title 5</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">content</div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--DIFFERENT--><?php include "html_model/footer.html";?>
      <?php include "html_model/tabmenu.html";?>
      <!--THE SAME--><?php include "html_model/floating-ui.html";?>
      <?php include "html_model/js-for-all.html";?>
      <!-- JS FOR THIS PAGE ONLY-->
      <script src="js/tmpAsideLb.js"></script>
      <script src="js/faqbox.js" type="text/javascript"></script>
      <script>
        $(function(){
        $(".art-list-f2-item").eq(5).find(".art-list-f2-link").addClass("now");
        // ^ 演示用，請參考
        setTimeout(function(){
        $(".is-first").addClass("is-open").siblings().slideDown(200);
        },300);
        });
      </script>
    </div>
  </body>
</html>