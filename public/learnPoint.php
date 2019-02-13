<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link href="assets/plugins/selectbox/select_option1.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/learnPoint.css">
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
                  <li class="breadcrumb-item"><a href="">我的專區</a></li>
                  <li class="breadcrumb-item">學習點數</li>
                </ol>
              </nav>
            </div>
          </div>
        </nav>
      </header>
      <!-- aside + main-->
      <div class="container container-main container-col-2">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3 sticky-top aside-lb">
            <div class="panel-heading bg-color-5 border-color-5">
              <h3 class="panel-title">我的專區</h3>
              <div class="aside-lb-close">x</div>
            </div><?php include "html_model/mypage/aside-file.html";?>
            <aside class="layout-sub px-4 py-4">
              <ul class="art-list-f2"><?php include "html_model/mypage/aside.html";?></ul>
            </aside>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="layout-main"><?php include "html_model/uikit/aside-lb-open.html";?>
              <div class="sectionTitle text-center color-5 mt-0">
                <h2><span class="shape shape-left"></span><span>學習點數</span><span class="shape shape-right"></span></h2>
              </div>
              <h3 class="layout-title-level-3 color-5">關於學習點數</h3>
              <div class="layout-content">為讓家長與小朋友在學習過程中，擁有更多的樂趣並有更大的學習動力，推出「學習點數」（紅利積點)，讓家長與小朋友可以獲得更多的成就感。</div>
              <h3 class="layout-title-level-3 color-5">集點方式</h3>
              <div class="layout-contetn">只要使用以下服務，就可以集到相關點數喔！</div><?php include "html_model/learn_point/tb1.html";?>
              <div class="layout-collapse color-5 mt-3">
                <h3 class="layout-title-level-3">學習點數累計規則</h3>
                <div class="layout-collapse-arrow"> </div>
              </div>
              <div class="layout-collapse-content"><?php include "html_model/learn_point/attention1.html";?></div>
            </div>
            <button class="btn layout-btn btn-block layout-btn-lg color-5" type="button">兌換專區</button>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <div class="layout-main mb-1"><?php include "html_model/uikit/aside-lb-open.html";?>
              <div class="sectionTitle text-center color-5 mt-0">
                <h2><span class="shape shape-left"></span><span>兌換專區</span><span class="shape shape-right"></span></h2>
              </div>
              <h3 class="layout-title-level-3 color-5">學習點數查詢</h3>
              <div class="layout-content">
                <ol class="pl-3">
                  <li>您於<span class="is-blue">寰宇家庭俱樂部</span>會員有效期到<span class="is-blue">2100/12/31</span></li>
                  <li>您目前有效的學習點數是<span class="is-blue"> 43 點</span>。</li>
                  <li>即將到期的學習點數：<span class="is-blue">2點</span>，請於<span class="is-blue">2020/03/31</span>前兌換完畢。</li>
                </ol>
              </div>
              <h3 class="layout-title-level-3 color-5">點數明細查詢</h3>
              <div class="slg-outer mt-1 mb-2">
                <div class="slg">
                  <div class="dropGeneral roundTwo layout-drop-sm is-year">
                    <select class="select-drop">
                      <option value="0">2019</option>
                      <option value="1">2018</option>
                      <option value="2">2017</option>
                    </select>
                  </div>
                  <div class="slg-w">年</div>
                  <div class="dropGeneral roundTwo layout-drop-sm is-day">
                    <select class="select-drop">
                      <option value="0">01</option>
                      <option value="1">02</option>
                      <option value="2">03</option>
                    </select>
                  </div>
                  <div class="slg-w">月</div>
                </div>
                <div class="slg-w">~</div>
                <div class="slg">
                  <div class="dropGeneral roundTwo layout-drop-sm is-year">
                    <select class="select-drop">
                      <option value="0">2019</option>
                      <option value="1">2018</option>
                      <option value="2">2017</option>
                    </select>
                  </div>
                  <div class="slg-w">年</div>
                  <div class="dropGeneral roundTwo layout-drop-sm is-day">
                    <select class="select-drop">
                      <option value="0">01</option>
                      <option value="1">02</option>
                      <option value="2">03</option>
                    </select>
                  </div>
                  <div class="slg-w">月</div>
                </div>
                <button class="btn layout-btn color-5 is-xxs" type="button">查尋</button>
              </div><?php include "html_model/learn_point/tb2.html";?>
              <div class="pagerArea text-center color-5"><?php include "html_model/uikit/pager-item.html";?></div>
            </div>
            <div class="layout-main">
              <h3 class="layout-title-level-3 color-5 mt-0 mb-1">兌換專區</h3>
              <div class="layout-contet mb-2">您目前剩餘可兌換點數有<span class="is-blue">43 點</span></div>
              <ul class="shop layout-sharewidth item-234">
                <?php include "html_model/learn_point/shop-item.html";?>
                <?php include "html_model/learn_point/shop-item.html";?>
                <?php include "html_model/learn_point/shop-item.html";?>
                <?php include "html_model/learn_point/shop-item.html";?>
                <?php include "html_model/learn_point/shop-item.html";?>
              </ul>
              <div class="pagerArea text-center color-5"><?php include "html_model/uikit/pager-item.html";?></div>
            </div>
            <button class="btn layout-btn btn-block layout-btn-lg color-5" type="button">確定兌換</button>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <div class="layout-main-card"><?php include "html_model/uikit/aside-lb-open.html";?>
              <div class="sectionTitle text-center color-5 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>兌換明細</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <ul class="layout-card">
                <?php include "html_model/learn_point/feedback-item.html";?>
                <?php include "html_model/learn_point/feedback-item.html";?>
              </ul>
              <div class="shop-total">總計消費點數 : 300 點</div>
            </div>
          </div>
        </div>
      </div><?php include "html_model/learn_point/lightbox.html";?>
      <!--DIFFERENT--><?php include "html_model/footer.html";?>
      <?php include "html_model/tabmenu.html";?>
      <!--THE SAME--><?php include "html_model/floating-ui.html";?>
      <?php include "html_model/js-for-all.html";?>
      <html>
        <head></head>
        <body></body>
      </html>
      <!-- JS FOR THIS PAGE ONLY-->
      <script src="js/tmpAsideLb.js"></script>
      <script>
        $(function(){
        	$(".art-list-f2-item").eq(3).find(".art-list-f2-link").addClass("now");
        		// ^ 演示用，請參考
        		// COLLAPSE
        		$(".layout-collapse").click(function(){
        		$(".layout-collapse-content").slideToggle(300);
        		$(".layout-collapse").toggleClass("open");
        	});
        	// DROP MENU
        	$(".select-drop").selectbox();
        	//
        	$(".shop-pic").click(function(){
        		$("#dweShop").removeAttr("style");
        	}).css({"height": $(".shop-pic").width() * 1 });
        	$(".shop .uikit-checkbox-input").click(function(){
        		var $parent = $(this).parent().parent();
        		if( $(this).is(":checked") ){
        			$parent.addClass("is-selected");
        		}else{
        			$parent.removeClass("is-selected");
        		}
        	});
        });
      </script>
    </div>
  </body>
</html>