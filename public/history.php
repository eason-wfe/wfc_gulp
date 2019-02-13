<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link href="assets/plugins/selectbox/select_option1.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/history.css">
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
                  <li class="breadcrumb-item">活動學習紀錄</li>
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
                  <!-- h2 only--><span class="shape shape-left"></span><span>活動學習紀錄</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <h3 class="layout-title-level-3 color-5">請選擇小朋友名字切換記錄</h3>
              <div class="dropGeneral roundTwo layout-drop-sm">
                <select class="select-drop">
                  <option value="0">Family</option>
                  <option value="1">child 1</option>
                  <option value="2">child 2</option>
                </select>
              </div>
            </div>
            <!-- CARNIVAL HISTORY-->
            <div class="layout-main-card">
              <h3 class="layout-title-level-3 color-5">美語活動</h3>
              <div class="layout-card has-cancel">
                <!--
                [^ 註 ^]
                has-cancel 只在「能 cancel 活動」的單元才用
                --><?php include "html_model/history/item-carnival.html";?>
                <?php include "html_model/history/item-carnival.html";?>
              </div>
              <div class="pagerArea text-center color-5"><?php include "html_model/uikit/pager-item.html";?></div>
            </div>
            <!-- TE HISTORY-->
            <div class="layout-main-card">
              <h3 class="layout-title-level-3 color-5">電話美語</h3>
              <div class="layout-card has-cancel"><?php include "html_model/history/item-te.html";?></div>
              <div class="pagerArea text-center color-5"><?php include "html_model/uikit/pager-item.html";?></div>
            </div>
            <!-- CAP HISTORY-->
            <div class="layout-main-card">
              <h3 class="layout-title-level-3 color-5">CAP 親子學習計畫</h3>
              <div class="layout-card">
                <?php include "html_model/history/item-cap.html";?>
                <?php include "html_model/history/item-cap.html";?>
              </div>
              <div class="pagerArea text-center color-5"><?php include "html_model/uikit/pager-item.html";?></div>
            </div>
            <!-- FACE CALL HISTORY-->
            <div class="layout-main">
              <h3 class="layout-title-level-3 color-5 ml-0 mt-0 mb-3">Face Call 觀看記錄</h3>
              <ul class="fc-box mb-2">
                <?php include "html_model/history/item-facecall.html";?>
                <?php include "html_model/history/item-facecall.html";?>
              </ul>
              <div class="pagerArea text-center color-5"><?php include "html_model/uikit/pager-item.html";?></div>
            </div>
          </div>
        </div>
      </div>
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
      <script src="js/history.js"></script>
      <script>
        $(function(){
        $(".art-list-f2-item").eq(2).find(".art-list-f2-link").addClass("now");
        // ^ 演示用，請參考
        });
      </script>
    </div>
  </body>
</html>