<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link href="css/sitemap.css" rel="stylesheet" text="text/css">
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
                  <li class="breadcrumb-item">網站地圖</li>
                </ol>
              </nav>
            </div>
          </div>
        </nav>
      </header>
      <div class="container container-main container-col-1">
        <div class="row">
          <div class="layout-col-12">
            <div class="layout-main">
              <div class="sectionTitle text-center color-1 mt-0">
                <h2><span class="shape shape-left"></span><span>網站地圖</span><span class="shape shape-right"></span></h2>
              </div>
              <div class="layout-sharewidth item-234">
                <div class="card layout-sharewidth-item">1
                  <div class="mapicon mapicon-1"></div>
                </div>
                <div class="card layout-sharewidth-item">2
                  <div class="mapicon mapicon-2"></div>
                </div>
                <div class="card layout-sharewidth-item">3
                  <div class="mapicon mapicon-3"></div>
                </div>
                <div class="card layout-sharewidth-item">4
                  <div class="mapicon mapicon-4"></div>
                </div>
                <div class="card layout-sharewidth-item">5
                  <div class="mapicon mapicon-5"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--DIFFERENT--><?php include "html_model/footer.html";?>
      <?php include "html_model/tabmenu.html";?>
      <!--THE SAME--><?php include "html_model/floating-ui.html";?>
      <?php include "html_model/js-for-all.html";?>
      <!-- JS FOR THIS PAGE ONLY-->
    </div>
  </body>
</html>