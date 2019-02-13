<!DOCTYPE html>
<html lang="ko">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link href="assets/plugins/selectbox/select_option1.css" rel="stylesheet">
    <link href="css/notic_kr.css" rel="stylesheet">
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
                  <li class="breadcrumb-item">My Community</li>
                  <li class="breadcrumb-item">공지사항</li>
                </ol>
              </nav>
            </div>
          </div>
        </nav>
      </header>
      <div class="container container-main container-col-2">
        <div class="row">
          <div class="col-xs-12 col-xs-12 col-md-3 aside-lb">
            <div class="panel-heading bg-color-4 border-color-4">
              <h3 class="panel-title">WFC Community</h3>
              <div class="aside-lb-close">x</div>
            </div><?php include "html_model/_comm_kr/comm-aside.html";?>
            <script>
              // 此 js 為 demo 用，請刪除
              $(".art-list-f2").find(".art-list-f2-item").eq(0).find(".art-list-f2-link").addClass("now");
              // $(".art-list-f2").find(".art-list-f2-item").eq(1).find(".art-list-f3-item").eq(0).find(".art-list-f3-link").addClass("now");
            </script>
          </div>
          <div class="col-xs-12 col-xs-12 col-md-9">
            <div class="layout-main-card"><?php include "html_model/uikit/aside-lb-open.html";?>
              <div class="sectionTitle text-center color-4 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>공지사항</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <div class="mypage-switchbox"><?php include "html_model/_comm_kr/comm-article-search.html";?></div>
              <ul class="layout-card"><?php include "html_model/_comm_kr/notic-card-item.html";?></ul>
              <div class="pagerArea text-center color-4"><?php include "html_model/uikit/pager-item.html";?></div>
              <div class="cd-btnbox">
                <button class="btn layout-btn layout-btn-sm color-4" type="button">글쓰기</button>
                <div class="cd-btnbox-icon"></div>
              </div>
            </div>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <h3>公告內文</h3>
            <div class="layout-main">
              <!--
              [ ^ 注意 ^ ]
              到 post 功能頁，用的是 .layout-main，不是 .layout-main-card
              --><?php include "html_model/uikit/aside-lb-open.html";?>
              <div class="sectionTitle text-center color-4 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>공지사항</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <div class="post-titlebox">
                <p class="post-titlebox-p">2018년 12월 일산 크리스마스쇼 출연진 관련 공지</p>
              </div>
              <div class="post-time">2019-01-26 01:23</div>
              <div class="post-contbox">클럽은 풍부한 학습 지원 서비스를 제공합니다.예를 들어, 미국 언어 활동, 전화 에세이 등은 아이들이 제품 컨텐츠를 쉽게 배울 수 있도록합니다.부모와 아빠는 자녀가 다시 재검토하는 것을 돕기 위해 "학습 지원 서비스"를 어떻게 사용합니까?<img src="img/community/ad.jpg"></div>
              <div class="post-btnbox">
                <button class="btn layout-btn layout-btn-sm is-left" type="button">목록보기</button>
                <button class="btn layout-btn layout-btn-sm is-border is-right" type="button">이전글</button>
                <button class="btn layout-btn layout-btn-sm is-border is-right" type="button">다음글</button>
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
      <script src="js/statePaddingShare.js"></script>
      <script>
        $(function(){
        // Mobi pic
        $(".post-contbox img").click(function(){
        var nua = navigator.userAgent;
        if( /iphone/i.test(nua) || /android/i.test(nua) ){
        window.open('img/community/ad.jpg', 'img');
        };
        });
        // Drop down
        $('.select-drop').selectbox();
        });
      </script>
    </div>
  </body>
</html>