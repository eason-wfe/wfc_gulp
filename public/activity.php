<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link rel="stylesheet" href="css/activity.css">
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
                  <li class="breadcrumb-item">活動報名</li>
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
      <div class="container container-main container-col-1">
        <div class="row">
          <div class="layout-col-12">
            <?php include "html_model/activity/act-sortbox.html";?>
            <?php include "html_model/activity/act-sortbox.html";?>
            <?php include "html_model/activity/act-sortbox.html";?>
            <!--DIFFERENT--><?php include "html_model/footer.html";?>
            <?php include "html_model/tabmenu.html";?>
            <!--THE SAME--><?php include "html_model/floating-ui.html";?>
            <?php include "html_model/js-for-all.html";?>
            <!-- JS FOR THIS PAGE ONLY-->
          </div>
        </div>
      </div>
    </div>
  </body>
</html>