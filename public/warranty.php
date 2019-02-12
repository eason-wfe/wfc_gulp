<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link rel="stylesheet" href="css/warranty.css">
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
                  <li class="breadcrumb-item">特別保證</li>
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
            <div class="layout-main layout-deco-title pb-0 mb-0"><?php include "html_model/uikit/aside-lb-open.html";?>
              <div class="sectionTitle text-center color-5 mt-0 mb-0">
                <h2><span class="shape shape-left"></span><span>特別保證</span><span class="shape shape-right"></span></h2>
              </div>
            </div>
            <div class="wbox">
              <div class="wbox-t"></div>
              <div class="wbox-m">
                <div class="wbox-tbox"><img class="wbox-tmobi" src="img/warranty/t_mobi.jpg"><img class="wbox-tpc" src="img/warranty/t_pc.jpg">
                  <div class="wbox-title">會員專屬保證制度</div><img class="wbox-tpc is-t-right" src="img/warranty/t_pc.jpg">
                </div>
                <div class="layout-content mb-3 mt-3">歡迎您成為「World Family Club」寰宇家庭俱樂部的一員。在孩子美語學習的路途上，只要持續是俱樂部會員就能夠在有效會員期內，得到俱樂部的支持，享有此一專屬保固服務。</div>
                <ul class="layout-content">
                  <li class="mb-2"><b>● 對象與版本：</b>
                    <div class="layout-content ml-2">僅提供給俱樂部有效會員。非有效會員及積欠款項之客戶，將無法適用此一會員專屬保證制度。</div>
                  </li>
                  <li class="mb-2"><b>● 保證範圍：</b>
                    <div class="layout-content ml-2">須為直接向本公司購買之「Disney World of English 迪士尼美語世界」產品，並特別包含俱樂部專屬學習商品「跟著玩系列」CD/BD在內。為響應環保愛護地球，欲更換之產品以不堪使用以致影響學習為更換原則。公司換出的產品則以可使用為標準。若產品停產或更新版本，本公司將不保證可提供換貨或維修服務。寰宇家庭俱樂部保留更換與否的最終權利。</div>
                  </li>
                  <li class="mb-2"><b>● 除外範圍：</b>
                    <div class="layout-content ml-2">贈品、指導手冊Guidebook及消耗品不列入保證範圍內。</div>
                    <ul class="ml-5">
                      <li class="mb-2">* 贈品：不得享有會員免費更換或維修之服務。</li>
                      <li class="mb-2">* 消耗品：虎克船長百寶箱及桑普兔子活動盒內的物品、貼紙、外接麥克風、多媒體晶片、米奇魔幻遊戲箱及箱內的物品、兒童遙控器、米奇/米妮互動學習筆及探索活動盒內的貼紙、拼圖、啟動卡等。</li>
                      <li class="mb-2">* 「米奇/米妮互動學習筆」，正常使用下保固一年。使用不當、損壞或保固期滿後，將酌收維修費用或可選擇換購新的學習筆一支。</li>
                    </ul>
                  </li>
                  <li class="mb-2"><b>● 除外責任:</b>
                    <div class="layout-content ml-2">以下情形，本公司恕不負更換之責。</div>
                    <ul class="ml-5">
                      <li class="mb-2">(1)遺失、被竊或天災(如地震、火災、水災等大自然所造成之損害)。</li>
                      <li class="mb-2">(2)不當使用、人為破壞、自行修理不當或改造等原因而造成故障損壞。</li>
                    </ul>
                  </li>
                  <li class="mb-2"><b>● 申請方式：</b>
                    <div class="layout-content ml-2">產品損壞更換細則及說明，請參閱WFC網站上最新更換維修表單。</div>
                  </li>
                  <li class="mb-2"><b> ●郵資與費用 : </b>
                    <div class="layout-content ml-2">因郵寄損壞產品所產生之費用，須由會員自行負擔。</div>
                  </li>
                </ul><img class="wbox-wfc" src="img/warranty/wfc_g.jpg">
              </div>
              <div class="wbox-b"></div>
            </div>
          </div>
        </div>
      </div>
      <!--DIFFERENT--><?php include "html_model/footer.html";?>
      <?php include "html_model/tabmenu.html";?>
      <!--THE SAME--><?php include "html_model/floating-ui.html";?>
      <?php include "html_model/js-for-all.html";?>
      <!-- JS FOR THIS PAGE ONLY-->
      <script src="js/tmpAsideLb.js"></script>
      <script>
        $(function(){
        $(".art-list-f2-item").eq(6).find(".art-list-f2-link").addClass("now");
        // ^ 演示用，請參考
        });
      </script>
    </div>
  </body>
</html>