<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link rel="stylesheet" href="css/library.css">
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
                  <li class="breadcrumb-item">多媒體學習</li>
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
            <div class="layout-main pt-5 pb-4 mb-1">
              <!-- LEVEL 1-->
              <div class="sectionTitle text-center color-3 my-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>多媒體學習</span><span class="shape shape-right"></span>
                </h2>
              </div>
            </div>
            <!-- 3.1-->
            <div class="layout-main">
              <h3 class="layout-title-level-3 color-3 mt-0">【 Super Fun ! 】</h3>
              <div class="layout-content">Super Fun是由美語叔叔、阿姨與Zippy家族人物，還有小朋友喜愛的Froggy、Bunny一起陪孩子唱唱、跳跳，玩美語唷！</div>
              <div class="layout-videobox layout-sharewidth item-2 mt-2 lib-sort-super"><?php include "html_model/library/lib-videobox-super.html";?></div>
              <button class="btn layout-btn color-3" type="button">看更多 »</button>
            </div>
            <!-- 3.2-->
            <div class="layout-main">
              <h3 class="layout-title-level-3 color-3 mt-0">【 歡樂TV 】</h3>
              <div class="layout-content">愛下廚的美語叔叔Chris是個烹飪高手呢！讓我們跟著Chris叔叔還有廚房小助手們一起來動手做做看，學習簡單又美味的餐點吧！</div>
              <div class="layout-videobox layout-sharewidth item-2 mt-2 lib-sort-funny"><?php include "html_model/library/lib-videobox-funny.html";?></div>
              <button class="btn layout-btn color-3" type="button">看更多 »</button>
            </div>
            <!-- 3.3-->
            <div class="layout-main">
              <h3 class="layout-title-level-3 color-3 mt-0">【 ABC Channel 】</h3>
              <div class="layout-content">多元化的美語學習，由美語叔叔、阿姨們帶領大家一起透過唱歌、跳舞、玩遊戲、製作點心、冒險探索來玩美語唷！</div>
              <div class="layout-videobox layout-sharewidth item-2 mt-2 lib-sort-abc"><?php include "html_model/library/lib-videobox-abc.html";?></div>
              <button class="btn layout-btn color-3" type="button">看更多 »</button>
            </div>
            <!-- 3.4 ( !注意! 此單元因 flash 限制，故手機版不提供使用 )-->
            <div class="layout-main layout-main-gbox">
              <h3 class="layout-title-level-3 color-3 mt-0">【 美語遊戲 】</h3>
              <div class="layout-content">透過遊戲提供給孩子們不同的衍生性美語學習體驗。</div>
              <div class="lib-gbox layout-sharewidth item-4 mt-2"><?php include "html_model/library/lib-gamebox.html";?></div>
              <button class="btn layout-btn color-3" type="button">看更多 »</button>
            </div>
            <!-- 3.5 ( !注意! 此單元因 flash 限制，故手機版不提供使用 )-->
            <div class="layout-main layout-main-gbox">
              <h3 class="layout-title-level-3 color-3 mt-0">【 美語故事 】</h3>
              <div class="layout-content">透過故事可以培養孩子們的觀察、認知、推理、聯想等各項能力。</div>
              <div class="lib-gbox layout-sharewidth item-4 mt-2"><?php include "html_model/library/lib-gamebox.html";?></div>
              <button class="btn layout-btn color-3" type="button">看更多 »</button>
            </div>
          </div>
        </div>
      </div>
      <!--DIFFERENT--><?php include "html_model/footer.html";?>
      <?php include "html_model/tabmenu.html";?>
      <!--THE SAME--><?php include "html_model/floating-ui.html";?>
      <?php include "html_model/js-for-all.html";?>
      <html>
        <head></head>
        <body></body>
      </html>
      <!-- JS FOR THIS PAGE ONLY-->
    </div>
  </body>
</html>