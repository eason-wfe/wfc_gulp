<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link href="css/online.css" rel="stylesheet" text="text/css">
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
                  <li class="breadcrumb-item">線上客服</li>
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
              <div class="sectionTitle text-center color-1 mt-0 mb-5">
                <h2><span class="shape shape-left"></span><span>線上客服</span><span class="shape shape-right"></span></h2>
              </div>
              <div class="on-text">
                <h3 class="layout-title-level-3 color-1 mt-0">會員編號 :</h3>
                <input type="text">
              </div>
              <div class="on-text">
                <h3 class="layout-title-level-3 color-1 mt-0">姓　　名 :</h3>
                <input type="text">
              </div>
              <div class="on-text">
                <h3 class="layout-title-level-3 color-1 mt-0">聯絡電話 :</h3>
                <input type="text">
              </div>
              <div class="on-text">
                <h3 class="layout-title-level-3 color-1 mt-0">電子郵件 :</h3>
                <input type="text">
              </div>
              <div class="on-check">
                <input id="checkMem" type="checkbox" name="checkMem">
                <label for="checkMem">尚未成為會員</label>
              </div>
              <h3 class="layout-title-level-3 color-1">我要諮詢 :</h3>
              <div class="on-radio on-radio-0">
                <input id="options1" type="radio" name="options" checked="">
                <label for="options1">「迪士尼美語世界」產品使用</label>
              </div>
              <div class="on-radio on-radio-1">
                <input id="options2" type="radio" name="options">
                <label for="options2">「CAP 親子學習計畫」</label>
              </div>
              <div class="on-radio on-radio-2">
                <input id="options3" type="radio" name="options">
                <label for="options3">「迪士尼美語世界」畢業申請（劍橋兒童英檢獎助學金申請)</label>
              </div>
              <div class="on-radio on-radio-3">
                <input id="options4" type="radio" name="options">
                <label for="options4">「電話美語」使用</label>
              </div>
              <div class="on-radio on-radio-4">
                <input id="options5" type="radio" name="options">
                <label for="options5">「寰宇家庭會刊」、「Kids' World 兒童世界」或「Zippy 妙妙筆」使用</label>
              </div>
              <div class="on-radio on-radio-5">
                <input id="options6" type="radio" name="options">
                <label for="options6">活動相關問題</label>
              </div>
              <div class="on-radio on-radio-6">
                <input id="options7" type="radio" name="options">
                <label for="options7">網站建議及使用</label>
              </div>
              <div class="on-radio on-radio-7">
                <input id="options8" type="radio" name="options">
                <label for="options8">客服中心</label>
              </div>
              <div class="on-radio on-radio-8">
                <input id="options9" type="radio" name="options">
                <label for="options9">其他問題</label>
              </div>
              <textarea></textarea>
              <button class="btn layout-btn color-1 mt-3" type="button">送出</button>
            </div>
          </div>
        </div>
      </div>
      <!--DIFFERENT--><?php include "html_model/footer.html";?>
      <?php include "html_model/tabmenu.html";?>
      <!--THE SAME--><?php include "html_model/floating-ui.html";?>
      <?php include "html_model/js-for-all.html";?>
      <!-- JS FOR THIS PAGE ONLY-->
      <script>
        for( var a=0,max=$(".on-radio").length;a<max;a ++ ){
        var $target = $(".on-radio-" + a + " label");
        if( /「/i.test( $target.html() ) ){
        $target.css({"textIndent":-5});
        }
        }
      </script>
    </div>
  </body>
</html>