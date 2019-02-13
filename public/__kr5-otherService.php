<!DOCTYPE html>
<html lang="ko">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link type="text/css" href="assets/plugins/selectbox/select_option1.css" rel="stylesheet">
    <link href="css/otherService_kr.css" rel="stylesheet">
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
                  <li class="breadcrumb-item">other club service</li>
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
              // 此 js 為演示用，請參考
              $(".art-list-f2").find(".art-list-f2-item").eq(7).find(".art-list-f2-link").addClass("now");
            </script>
          </div>
          <div class="col-xs-12 col-xs-12 col-md-9">
            <div class="layout-main-card"><?php include "html_model/uikit/aside-lb-open.html";?>
              <div class="sectionTitle text-center color-5 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>other club service</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <div class="os-select">
                <!-- pc-->
                <div class="uikit-radio is-sta">
                  <input class="uikit-radio-input" name="type" type="radio" checked="">
                  <label class="uikit-radio-label">Birthday Card</label>
                </div>
                <div class="uikit-radio is-mid">
                  <input class="uikit-radio-input" name="type" type="radio">
                  <label class="uikit-radio-label">Advice Card</label>
                </div>
                <div class="uikit-radio is-mid">
                  <input class="uikit-radio-input" name="type" type="radio">
                  <label class="uikit-radio-label">Magazine</label>
                </div>
                <div class="uikit-radio is-end">
                  <input class="uikit-radio-input" name="type" type="radio">
                  <label class="uikit-radio-label">Children's day present</label>
                </div>
                <!-- mobi-->
                <div class="dropGeneral roundTwo layout-drop-sm is-type">
                  <select class="select-drop">
                    <option value="">Birthday Card</option>
                    <option value="">Advice Card</option>
                    <option value="">Magazine</option>
                    <option value="">Children's day present</option>
                  </select>
                </div>
                <!-- child-->
                <div class="dropGeneral roundTwo layout-drop-sm is-type child-name">
                  <select class="select-drop">
                    <option value="">child 1</option>
                    <option value="">child 2</option>
                  </select>
                </div>
              </div>
              <ul class="layout-card">
                <?php include "html_model/_mywfc_kr/os-card-item.html";?>
                <?php include "html_model/_mywfc_kr/os-card-item.html";?>
              </ul>
              <div class="pagerArea text-center color-5"><?php include "html_model/uikit/pager-item.html";?></div>
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
      <script>$('.select-drop').selectbox();</script>
    </div>
  </body>
</html>