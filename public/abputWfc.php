<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head>
     <?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link href="css/aboutWfc.css" rel="stylesheet" text="text/css">
  </head>
  <body class="body-wrapper">
    <!-- loaded-->
    <div class="main-wrapper">
      <!--
      ====================================
      ——— HEADER
      =====================================
      -->
      <header class="header-wrapper" id="pageTop">
         <?php include "html_model/header/header-1.html";?>
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
                  <li class="breadcrumb-item">關於寰宇家庭俱樂部</li>
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
                <h2><span class="shape shape-left"></span><span>關於寰宇家庭俱樂部</span><span class="shape shape-right"></span></h2>
              </div>
              <div class="layout-content">寰宇家庭俱樂部是提供將「迪士尼美語世界」以「寰宇家庭教育方式」提供各項學習支援的服務。藉由這樣的服務，為家長和孩子們架構出充滿樂趣的美語學習環境。<br><br>學習美語，要掌握In put ( 播放、聆聽、閱讀、遊戲）和Out put（對話、互動、遊戲）是重要的，透過In-put和Out put的相乘效應，掌握自然而然學習美語。<br><br>寰宇家庭俱樂部，提供「迪士尼的英語系統(DWE)」以In put的方式，讓孩子可以有Out put的機會，有效的教材，支持支撐孩子的英語學習的父母「會員制的俱樂部」。<br><br>美語學習是沒有盡頭的，寰宇家庭俱樂部提供這些服務，會員的家族鼓勵互相，孩子把「自立的學習者」旁邊，全球的被活躍作為目標。</div>
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