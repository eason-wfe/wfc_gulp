<!DOCTYPE html>
<html lang="ko">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link href="assets/plugins/selectbox/select_option1.css" rel="stylesheet">
    <link href="css/board_kr.css" rel="stylesheet">
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
                  <li class="breadcrumb-item"><a href="">My WFC</a></li>
                  <li class="breadcrumb-item"><a href="">My Page</a></li>
                  <li class="breadcrumb-item">After service application</li>
                </ol>
              </nav>
            </div>
          </div>
        </nav>
      </header>
      <div class="container container-main container-col-2">
        <div class="row">
          <div class="col-xs-12 col-xs-12 col-md-3 sticky-top aside-lb">
            <div class="panel-heading bg-color-5 border-color-5">
              <h3 class="panel-title">My Page</h3>
              <div class="aside-lb-close">x</div>
            </div><?php include "html_model/_mywfc_kr/mypage-aside.html";?>
            <script>
              // 此 js 為 demo 用，請刪除
              $(".art-list-f2").find(".art-list-f2-item").eq(5).find(".art-list-f2-link").addClass("now");
            </script>
          </div>
          <div class="col-xs-12 col-xs-12 col-md-9">
            <div class="layout-main"><?php include "html_model/uikit/aside-lb-open.html";?>
              <div class="sectionTitle text-center color-5 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>After service application</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <!--
              신청일​ : 2018-03-28
              신청품목 : 함께노래하기! DVD 7
              늘량유무 : 정상적인손실
              배송일  2018-5-28
              tracking code : A12345689
              배송현황조회 : 배송완료
              --------------------------------------
              申請日期 : 2018-03-28
              申請項目 : 一起唱歌! DVD 7
              檢測結果 : 正常損耗
              交貨日期 : 2018-5-28
              追緃碼 : A12345689
              查看送貨狀態 : 發貨完成
              -->
              <ul class="layout-card"><?php include "html_model/_mywfc_kr/as-card-item.html";?></ul>
              <div class="pagerArea text-center color-5"><?php include "html_model/uikit/pager-item.html";?></div>
            </div>
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
    <script src="js/statePaddingShare.js"></script>
  </body>
</html>