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
    <link type="text/css" href="css/teLand_kr.css" rel="stylesheet">
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
                  <li class="breadcrumb-item">Fun With English</li>
                  <li class="breadcrumb-item">전화영어</li>
                </ol>
              </nav>
            </div>
          </div>
        </nav>
      </header>
      <div class="container container-main container-col-2">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3 sticky-top aside-lb">
            <div class="panel-heading bg-color-2 border-color-2 aside-close">
              <h3 class="panel-title">Fun With English</h3>
              <div class="aside-lb-close">x</div>
            </div><?php include "html_model/_fwe_kr/fwe-aside.html";?>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="layout-main"><?php include "html_model/uikit/aside-lb-open.html";?>
              <div class="sectionTitle text-center color-2 mt-0">
                <h2><span class="shape shape-left"></span><span>Telephone English 란?</span><span class="shape shape-right"></span></h2>
              </div>
              <div class="layout-content">
                <div class="hight-light">
                  <div class="height-light-box"><span class="first">“</span>										Telephone English는 DWE의 노래 및 책 등을 기반으로 WF클럽 원어민과 함께
                    										주1회 레슨을 받는 무료 전화 서비스입니다.<span class="second">”</span>
                  </div>
                </div>
                <ul class="tree">
                  <li class="tree-item is-left">
                    <div class="tree-center"><img class="tree-img" src="img/fwe/te1.jpg">
                      <div class="tree-intro">
                        <div class="tree-cell">원어민과 함께 노래 부르기</div>
                      </div>
                    </div>
                  </li>
                  <li class="tree-item is-right is-control">
                    <div class="tree-center"><img class="tree-img" src="img/fwe/te2.jpg">
                      <div class="tree-intro">
                        <div class="tree-cell">원어민과 함께 DWE 교재에 대해 이야기 하기</div>
                      </div>
                    </div>
                  </li>
                  <li class="tree-item is-left is-control">
                    <div class="tree-center"><img class="tree-img" src="img/fwe/te3.jpg">
                      <div class="tree-intro">
                        <div class="tree-cell">원어민과<br>												내가<br>												하고싶은 말 자유롭게 표현하기</div>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="hight-light">
                  <div class="height-light-box have-zippy"><span class="first">“</span><b>우리 아이가 어려서 아직 통화가 어려운가요? </b>										전화를 걸지 않고, 언제 어디서든 원어민이 불러주는 노래를 들을 수 있는
                    										화상 비디오 서비스 ‘Face Call’이 있습니다.  (*모든 회원이 이용할 수 있는 인기 많은 서비스입니다.)			<span class="second">”</span><img src="img/fwe/query.png">
                  </div>
                </div>
              </div>
            </div>
            <button class="btn layout-btn btn-block layout-btn-lg color-2" type="button">온라인 등록 TE</button>
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
        $(".art-list-f2-item").eq(0).find(".art-list-f2-link").addClass("now");
        // ^ 此 jq 為演示用，請參考 ^
        });
      </script>
    </div>
  </body>
</html>