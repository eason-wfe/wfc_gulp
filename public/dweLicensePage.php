<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link rel="stylesheet" href="css/dweLicense.css">
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
                  <li class="breadcrumb-item"><a href="">DWE 畢業</a></li>
                  <li class="breadcrumb-item"><a href="">美語檢定</a></li>
                  <li class="breadcrumb-item">KET 劍橋國際英語認證初級</li>
                </ol>
              </nav>
            </div>
          </div>
        </nav>
      </header>
      <!--
      ====================================
      ——— CONTAINER STR
      =====================================
      -->
      <!-- main only-->
      <div class="container container-main container-col-1">
        <div class="row">
          <div class="layout-col-12">
            <div class="layout-main layout-main-pageback layout-main-pageback-color-2 session-one"><?php include "html_model/uikit/page-back.html";?>
              <div class="sectionTitle text-center color-2 mt-0">
                <h2><span class="shape shape-left"></span><span>KET 劍橋國際英語認證初級</span><span class="shape shape-right"></span></h2>
              </div>
              <div class="layout-content">Main Suite 劍橋國際英語認證初級 KET 相當於 YLE 劍橋兒童英語認證的最高級認證 Flyers 的程度，也就是與 CEFR（歐洲語言學習、教學、評量共同參考架構）A2 級所代表的英語能力相對應。</div><?php include "html_model/dwe/dwel-list.html";?>
              <div class="pagerArea text-center color-2"><?php include "html_model/uikit/pager-item.html";?></div>
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
      <script src="js/dwe.js"></script>
    </div>
  </body>
</html>