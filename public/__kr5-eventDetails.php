<!DOCTYPE html>
<html lang="ko">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link href="css/eventDetails_kr.css" rel="stylesheet">
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
                  <li class="breadcrumb-item">Event application details</li>
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
              $(".art-list-f2").find(".art-list-f2-item").eq(1).find(".art-list-f2-link").addClass("now");
            </script>
          </div>
          <div class="col-xs-12 col-xs-12 col-md-9">
            <div class="layout-main-card"><?php include "html_model/uikit/aside-lb-open.html";?>
              <div class="sectionTitle text-center color-5 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>Event application details</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <div class="ed-radiobox">
                <div class="uikit-radio is-1st">
                  <input class="uikit-radio-input" name="type" type="radio" checked="">
                  <label class="uikit-radio-label">Activity</label>
                </div>
                <div class="uikit-radio is-2nd">
                  <input class="uikit-radio-input" name="type" type="radio">
                  <label class="uikit-radio-label">Show</label>
                </div>
                <div class="uikit-radio is-3rd">
                  <input class="uikit-radio-input" name="type" type="radio">
                  <label class="uikit-radio-label">Carnival</label>
                </div>
              </div>
              <!--
              Cristmas Show (전연령) 수훤 2018-11-25 16:00 / <a href="" class="icon-address"></a> | <br/>
              1부모 2자녀，단내형、진호재、호명성 | <br/>
              신용카드<span class="is-date">2018-11-25 16:00</span>27,000 [수소버튼] <span class="is-date">2018-11-25 16:00</span>
              -->
              <ul class="layout-card">
                <?php include "html_model/_mywfc_kr/ed-card-item.html";?>
                <?php include "html_model/_mywfc_kr/ed-card-item.html";?>
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
      <script src="js/statePaddingShare.js"></script>
    </div>
  </body>
</html>