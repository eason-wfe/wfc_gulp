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
    <link type="text/css" href="css/wfcLibrary_kr.css" rel="stylesheet">
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
                  <li class="breadcrumb-item">WFC Library</li>
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
                <h2><span class="shape shape-left"></span><span>WFC Library</span><span class="shape shape-right"></span></h2>
              </div><img src="img/fwe/library.jpg">
              <h3 class="layout-title-level-3 icon1 mt-0">WFC Library 란 ?</h3>
              <div class="layout-content mb-4">WF Club Library 들어「World Family Club」미국과「Highlights 출판사」협력적인 서비스。Highlights 출판사 1946 년에 설립 된이 회사는 미국의 전문 아동 도서 출판사로 교육자들로부터 높은 평가를 받고 있으며 부모와 자녀의 사랑으로 깊이 신뢰 받고 있으며 70 세 이상되었습니다。「Highlights 출판사」미국에서 가장 친숙한 어린이 게시자입니다。WF Club Library 에서，「World Family Club」수석 외국어 학자에 의해 수집「Highlights 출판사」언제든지 볼 수있는 eBook을 선택할 수 있습니다。</div>
              <hr>
              <hr>
              <hr>
              <hr>
              <hr>
              <h3>v 年資己達標顯示此 v</h3>
              <h3 class="layout-title-level-3 icon2 mt-0">독점적 인 컬렉션 데이터베이스：</h3>
              <div class="hight-light">
                <div class="height-light-box"><span class="first">“</span>									각 어린이는 전용 수집 데이터베이스를 가지고 있습니다。 자녀의 이름을 먼저 선택하고 WF Club Library 를 입력하십시오。				<span class="second">”</span></div>
              </div>
              <div class="layout-content">
                <ol>
                  <li>특정 회원 기간 동안 또는 그 이상으로 클럽에 가입 한 사람들은 기본적인 미국 언어를 가진 어린이들에게 연장 학습 서비스를 제공하십시오。이 서비스는 연간 어린이 날과 크리스마스 선물을 대신합니다。 도서관의 모든 책은 두 번째 외국어를 배우는 어린이의 요구에 따라 우주 가족에 의해 다시 기록되며 독서를보다 재미있게 만들기 위해 다양한 속도 선택을 제공합니다。</li>
                  <li>매월 첫 번째 금요일은 시스템 유지 보수 시간으로 4:00 ~ 7:30 이며 일시 중지됩니다。</li>
                </ol>
              </div>
              <div class="wfcl-login">
                <div class="dropGeneral roundTwo layout-drop-sm">
                  <select class="select-drop">
                    <option value="0">박소윤</option>
                    <option value="1">박녀인</option>
                  </select>
                </div>
                <button class="btn layout-btn btn-block color-2" type="button">로그인 WF Club Library</button>
              </div>
              <div class="wfcl-clear"></div>
              <h3 class="layout-title-level-3 icon4">기타 로그인 방법：</h3>
              <div class="layout-content">귀하의 장치에 대한 링크를 클릭하여 WF Club Library APP를 다운로드하십시오 :
                <div class="wfcl-btn"><a class="wfcl-link" href=""><img src="img/fwe/btn_android.png"></a><a class="wfcl-link" href=""><img src="img/fwe/btn_ios.png"></a></div>
              </div>
              <hr>
              <hr>
              <hr>
              <hr>
              <hr>
              <h3>v 年資未達標顯示此 v</h3>
              <div class="hight-light">
                <div class="height-light-box"><span class="first">“</span>									죄송합니다，회원 기간이이 서비스에 액세스하는 표준에 도달하지 않았습니다，사전에 비용을 지불하고 사전에이 서비스를 이용할 수도 있습니다。 자세한 정보는 온라인 고객 서비스에 문의하거나 고객 서비스 센터에 문의하십시오，가능한 한 빨리 질문에 답변 해 드리겠습니다。			<span class="second">”</span></div>
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
        $(".art-list-f2-item").eq(1).find(".art-list-f2-link").addClass("now");
        // ^ 此 jq 為演示用，請參考 ^
        // drop down
        $(".select-drop").selectbox();
        });
      </script>
    </div>
  </body>
</html>