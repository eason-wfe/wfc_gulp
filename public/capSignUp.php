<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link href="assets/plugins/selectbox/select_option1.css" rel="stylesheet">
    <link rel="stylesheet" href="css/capSignUp.css">
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
                  <li class="breadcrumb-item"><a href="#">美語學習</a></li>
                  <li class="breadcrumb-item"><a href="">CAP親子學習計畫 </a></li>
                  <li class="breadcrumb-item">繳交作業</li>
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
      <!-- article only-->
      <div class="container container-main container-col-1">
        <div class="row">
          <div class="layout-col-12">
            <div class="layout-main cap-section-title">
              <div class="sectionTitle text-center color-2 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>CAP 繳交作業</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <div class="dropGeneral roundTwo layout-drop-sm bg-color-2">
                <select class="select-drop">
                  <option value="0" style="display: none;">請選擇小朋友</option>
                  <option value="1">歐O大明</option>
                  <option value="2">歐O小明</option>
                  <option value="3">王O斵</option>
                </select>
              </div>
              <div class="cap-layout-main pt-0"></div><?php include "html_model/cap/cap-bookbox.html";?>
              <div class="cap-layout-main"></div><?php include "html_model/cap/cap-bookbox.html";?>
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
      </html><?php include "html_model/cap/lightbox-cap.html";?>
      <!-- JS FOR THIS PAGE ONLY-->
      <script src="js/capSignUp.js" type="text/javascript"></script>
    </div>
  </body>
</html>