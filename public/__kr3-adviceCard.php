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
    <!-- CSS FRO THIS PAGE ONLY-->
    <link type="text/css" href="css/adviceCard_kr.css" rel="stylesheet">
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
                  <li class="breadcrumb-item">Parents Support</li>
                  <li class="breadcrumb-item">Advice Card</li>
                </ol>
              </nav>
            </div>
          </div>
        </nav>
      </header>
      <div class="container container-main container-col-2">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3 sticky-top aside-lb">
            <div class="panel-heading bg-color-3 border-color-3 aside-close">
              <h3 class="panel-title">Parents Support</h3>
              <div class="aside-lb-close">x</div>
            </div><?php include "html_model/_parents_kr/parents-aside.html";?>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="layout-main"><?php include "html_model/uikit/aside-lb-open.html";?>
              <div class="sectionTitle text-center color-3 mt-0">
                <h2><span class="shape shape-left"></span><span>WF Method Advice Card</span><span class="shape shape-right"></span></h2>
              </div>
              <h3 class="layout-title-level-3 icon2 mt-0">WF Method Advice Cards 란?</h3>
              <div class="hight-light">
                <div class="height-light-box"><span class="first">“</span>								WF Method Advice Cards 는 회원님의 시작시기에 맞춰 DWE와 Club Service에 대한 활용법 안내 드리는 카드 발송 서비스입니다.<br>								구입 후, 2개월 / 7개월 / 12개월 차에 집으로 발송 됩니다.<span class="second">”</span></div>
              </div>
              <div class="ac">
                <div class="ac-item is-1st">
                  <div class="ac-cir">
                    <div class="ac-step">Step 1</div>
                    <div class="ac-con">교재와 WF클럽의 서비스를 즐겁게 시작하기 위한 포인트 소개</div>
                  </div><img class="ac-img" src="img/parents/advice1.jpg">
                </div>
                <div class="ac-item is-2nd">
                  <div class="ac-cir">
                    <div class="ac-step">Step 2</div>
                    <div class="ac-con">아이의 성장에 맞는 구체적인 활용법과 WF클럽 서비스를 소개</div>
                  </div><img class="ac-img" src="img/parents/advice2.jpg">
                </div>
                <div class="ac-item is-3rd">
                  <div class="ac-cir">
                    <div class="ac-step">Step 3</div>
                    <div class="ac-con">1년간 즐겁게 가지고 논 교재를 더욱 활용하여 OUTPUT으로 이어지는 요령을 소개</div>
                  </div><img class="ac-img" src="img/parents/advice3.jpg">
                </div>
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
      <script>
        $(function(){
        $(".art-list-f2-item").eq(3).find(".art-list-f2-link").addClass("now");
        // ^ 此 jq 為演示用，請參考 ^
        });
      </script>
    </div>
  </body>
</html>