<!DOCTYPE html>
<!--
KOREA
1. css/layout_kr.css ( in head.html )
2. html_model/header-2-kr.html
3. html_model/tabmenu-kr.html
4. html_model/footer-kr.html
//
TW (x back-prefix -tw x)
1. css/layout.css ( in head.html )
2. html_model/header-2.html
3. html_model/tabmenu.html
4. html_model/footer.html
-->
<html lang="ko">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FOR THIS PAGE ONLY-->
    <link type="text/css" href="css/parentsGuide_kr.css" rel="stylesheet">
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
                  <li class="breadcrumb-item"><a href="">WFC EVENT</a></li>
                  <li class="breadcrumb-item"><a href="">Froggy&Bunny Show</a></li>
                  <li class="breadcrumb-item">parents guide</li>
                </ol>
              </nav>
            </div>
          </div>
        </nav>
      </header>
      <!-- main only-->
      <div class="container container-main container-col-1">
        <div class="row">
          <div class="layout-col-12">
            <div class="layout-main">
              <!-- LEVEL 1-->
              <div class="sectionTitle text-center color-1 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>Froggy&Bunny Show</span><span class="shape shape-right"></span>
                </h2>
              </div><img class="layout-main-vision-img" src="img/event/1.jpg">
              <h3 class="layout-title-level-3 icon1">참가비용</h3>
              <div class="layout-content">방과후, 비키네 집에 모인 프로기, 버니가 무언가를 하고 있네요? 아~ 숫자 놀이를 즐기고 있군요. 비키, 조사야, 프로기 그리고 버니와 숫자를 세며 즐겁게 놀아 봐요. 오리, 개구리, 새, 구름, 벌, 징글 블록 그리고 더 많은 것들을 세어 볼 수 있어요!</div>
              <div class="hight-light">
                <div class="height-light-box"><span class="first">“</span>								이번 쇼의<b>미리 듣고 오세요!</b><span class="second">”</span></div>
              </div>
              <div class="act-layout mt-5">
                <div class="act-layout-left">
                  <h3 class="layout-title-level-3 icon3 mt-0">Songs List</h3>
                  <table class="table act-table-course">
                    <tbody>
                      <tr>
                        <td>Baby's in the Bathtub</td>
                        <td>Play Along 1 #05</td>
                      </tr>
                      <tr>
                        <td>Wiggly Worm </td>
                        <td>Play Along 2 #02</td>
                      </tr>
                      <tr>
                        <td>I Like to Take a Bath</td>
                        <td>Play Along 2 #05</td>
                      </tr>
                      <tr>
                        <td>Spread Your Arms </td>
                        <td>Play Along 2 #10 </td>
                      </tr>
                      <tr>
                        <td>Scrub, Scrub, Scrub </td>
                        <td>Sing Along 2 #27</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="act-layout-right">
                  <h3 class="layout-title-level-3 icon4">Word List</h3>
                  <table class="table act-table-sound">
                    <tbody>
                      <tr>
                        <td>#13 Chair</td>
                        <td>#23 Duck</td>
                      </tr>
                      <tr>
                        <td>#24 Dog</td>
                        <td>#27 Table</td>
                      </tr>
                      <tr>
                        <td>#38 Green / Yellow</td>
                        <td>#39 Yes / No</td>
                      </tr>
                      <tr>
                        <td>#13 Chair</td>
                        <td>#23 Duck</td>
                      </tr>
                      <tr>
                        <td>#24 Dog</td>
                        <td>#27 Table</td>
                      </tr>
                      <tr>
                        <td>#38 Green / Yellow</td>
                        <td>#39 Yes / No</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <button class="btn layout-btn btn-block layout-btn-lg color-1" type="button">Event apply</button>
          </div>
        </div>
      </div><?php include "html_model/_event_kr/lightbox-apply.html";?>
      <!-- DIFFERENT--><?php include "html_model/footer-kr.html";?>
      <?php include "html_model/tabmenu-kr.html";?>
      <!-- THE SAME--><?php include "html_model/floating-ui.html";?>
      <?php include "html_model/js-for-all.html";?>
      <!-- JS FOR THIS PAGE ONLY-->
      <script src="js/fullScreen.js"></script>
    </div>
  </body>
</html>