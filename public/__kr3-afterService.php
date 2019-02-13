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
    <link type="text/css" href="assets/plugins/selectbox/select_option1.css" rel="stylesheet">
    <link type="text/css" href="css/afterService_kr.css" rel="stylesheet">
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
                  <li class="breadcrumb-item">회원보증제도</li>
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
                <h2><span class="shape shape-left"></span><span>회원보증제도</span><span class="shape shape-right"></span></h2>
              </div><img class="is-pc" src="img/parents/as_vision.jpg"><img class="is-mobi" src="img/parents/as_vision_mobi.jpg">
              <h3 class="layout-title-level-3 icon2 mt-3">정보 수신 :</h3>
              <div class="retable" data-width="100">
                <div class="retable-item-double">
                  <div class="retable-row">
                    <div class="retable-title">고객명</div>
                    <div class="retable-content">Member Name</div>
                  </div>
                  <div class="retable-row">
                    <div class="retable-title">고객전화번호</div>
                    <div class="retable-content">0988-888-888</div>
                  </div>
                </div>
                <div class="retable-item-double">
                  <div class="retable-row">
                    <div class="retable-title">계약일</div>
                    <div class="retable-content"></div>
                  </div>
                  <div class="retable-row">
                    <div class="retable-title">계약상품</div>
                    <div class="retable-content">
                      <div class="dropGeneral roundTwo layout-drop-sm" style="width: 137px">
                        <select class="select-drop">
                          <option value="0">DWE제품선택</option>
                          <option value="1">s1</option>
                          <option value="2">s2</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="retable-item">
                  <div class="retable-row">
                    <div class="retable-title">주소</div>
                    <div class="retable-content">06223 서울시 강남구 역삼동 2층(역삼동,케이큐브타워)</div>
                  </div>
                </div>
              </div>
              <h3 class="layout-title-level-3 icon3">교체 품목 정보 :</h3><?php include "html_model/_parents_kr/as-retable-item.html";?>
              <?php include "html_model/_parents_kr/as-retable-item.html";?>
              <?php include "html_model/_parents_kr/as-retable-item.html";?>
              <button class="btn layout-btn color-3" type="button">+ 추가하기</button>
              <div class="is-clear"></div>
              <div class="retable">
                <div class="retable-item">
                  <div class="retable-row">
                    <div class="retable-title">기타요청사항</div>
                    <div class="retable-content">
                      <textarea class="other-text"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="layout-main is-narrow">
              <h3 class="layout-title-level-3 icon4 mt-0">주의 사항 및 배송 요구 사항 :</h3>
              <div class="layout-collapse color-3">
                <h3 class="collapse-title">월드패밀리클럽 회원의 특별 보증</h3>
                <div class="layout-collapse-arrow"> </div>
              </div>
              <div class="layout-collapse-content"><?php include "html_model/_parents_kr/as-attention.html";?></div>
              <div class="rbox">
                <div class="uikit-radio">
                  <input class="uikit-radio-input" name="parent" type="radio">
                  <label class="uikit-radio-label">동의함</label>
                </div>
                <div class="uikit-radio">
                  <input class="uikit-radio-input" name="parent" type="radio">
                  <label class="uikit-radio-label">동의하지 않음</label>
                </div>
              </div>
              <div class="cbox"><img class="cbox-title" src="img/parents/as_m.png">							본사 또는 이벤트 현장에서 교환 제품 접수는 불가합니다. 회원님의 회원 번호를 꼭 기입하여 아래 주소로 보내주세요
                <div class="cbox-bar">월드 패밀리 코리아 ㈜ 교환 보증 센터</div>							서울 특별시 강남구 역삼로 25 길 35, 2 층 (역삼동, 케이 큐브 타워) 우트<br>							월드 패밀리 잉글리쉬 코리아 (주) 교환 보증 센터<br>							ㅂ다 반송시 발생되는 배송비는 고객 부담)
              </div>
            </div>
            <button class="btn layout-btn btn-block layout-btn-lg" type="button">신청하기</button>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <div class="layout-main">
              <div class="sectionTitle text-center color-3 mt-0">
                <h2><span class="shape shape-left"></span><span>회원보증제도</span><span class="shape shape-right"></span></h2>
              </div>
              <ul class="layout-card"><?php include "html_model/_mywfc_kr/as-card-item.html"?></ul>
              <div class="numbox">이번에 <span>3</span> 번 제출</div>
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
      <script src="js/retableTitle.js"></script>
      <script src="js/statePaddingShare.js"></script>
      <script>
        $(function(){
        $(".art-list-f2-item").eq(4).find(".art-list-f2-link").addClass("now");
        // ^ 此 jq 為演示用，請參考 ^
        // DROP
        $(".select-drop").selectbox();
        // COLLAPSE
        $(".layout-collapse").click(function(){
        $('.layout-collapse-content').slideToggle(300);
        $('.layout-collapse').toggleClass('open');
        });
        });
      </script>
    </div>
  </body>
</html>