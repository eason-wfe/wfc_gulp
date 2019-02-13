<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link rel="stylesheet" href="css/libraryLearning.css">
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
                  <li class="breadcrumb-item"><a href="">多媒體學習</a></li>
                  <li class="breadcrumb-item">Super Fun ! / 歡樂TV / ABC Channel / 美語遊戲 / 美語故事</li>
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
            <!--
            ====================================
            ——— 3.1
            ——— 依 excel 名單，此單元全部影片僅 7 則，直接全列
            =====================================
            -->
            <div class="layout-main layout-main-pageback layout-main-pageback-color-3"><?php include "html_model/uikit/page-back.html";?>
              <!-- LEVEL 1-->
              <div class="sectionTitle text-center color-3 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>Super Fun !</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <div class="layout-content">Super Fun是由美語叔叔、阿姨與Zippy家族人物，還有小朋友喜愛的Froggy、Bunny一起陪孩子唱唱、跳跳，玩美語唷！</div>
              <div class="layout-videobox layout-sharewidth item-2 mt-2 lib-sort-super">
                <?php include "html_model/library/lib-videobox-super.html";?>
                <?php include "html_model/library/lib-videobox-super.html";?>
                <?php include "html_model/library/lib-videobox-super.html";?>
                <?php include "html_model/library/lib-videobox-super.html";?>
              </div>
            </div>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <!--
            ====================================
            ——— 3.2
            ——— 依 excel 名單，此單元全部影片僅 12 則，直接全列
            =====================================
            -->
            <div class="layout-main layout-main-pageback layout-main-pageback-color-3"><?php include "html_model/uikit/page-back.html";?>
              <!-- LEVEL 1-->
              <div class="sectionTitle text-center color-3 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>歡樂TV</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <div class="layout-content">愛下廚的美語叔叔Chris是個烹飪高手呢！讓我們跟著Chris叔叔還有廚房小助手們一起來動手做做看，學習簡單又美味的餐點吧！</div>
              <div class="layout-videobox layout-sharewidth item-2 mt-2 lib-sort-funny">
                <?php include "html_model/library/lib-videobox-funny.html";?>
                <?php include "html_model/library/lib-videobox-funny.html";?>
                <?php include "html_model/library/lib-videobox-funny.html";?>
                <?php include "html_model/library/lib-videobox-funny.html";?>
                <?php include "html_model/library/lib-videobox-funny.html";?>
                <?php include "html_model/library/lib-videobox-funny.html";?>
              </div>
            </div>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <!--
            ====================================
            ——— 3.3
            ——— 依 excel 名單，此單元又支分五個小類，每分類各自顯示 4 則
            ——— 更新規則：每月更新，依 excel 所列順序案月輪撥
            =====================================
            -->
            <div class="layout-main layout-main-pageback layout-main-pageback-color-3 pb-4 mb-1"><?php include "html_model/uikit/page-back.html";?>
              <!-- LEVEL 1-->
              <div class="sectionTitle text-center color-3 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>ABC Channel</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <div class="layout-content">多元化的美語學習，由美語叔叔、阿姨們帶領大家一起透過唱歌、跳舞、玩遊戲、製作點心、冒險探索來玩美語唷！</div>
            </div>
            <!-- 3.3 A-->
            <div class="layout-main">
              <h3 class="layout-title-level-3 color-3 mt-0">【 Abby's Amazing Cakes 】</h3>
              <div class="layout-content">Abby阿姨很喜歡作可愛又有趣的點心，像是色彩鮮豔，可愛的蛋糕、像章魚燒的蛋糕，還會作出各種造型的杯子蛋糕呢！快來跟著一起做吧！</div>
              <div class="layout-videobox layout-sharewidth item-2 mt-2 lib-sort-abc">
                <?php include "html_model/library/lib-videobox-abc.html";?>
                <?php include "html_model/library/lib-videobox-abc.html";?>
              </div>
            </div>
            <!-- 3.3 B-->
            <div class="layout-main">
              <h3 class="layout-title-level-3 color-3 mt-0">【 Adventures in Happy Town 】</h3>
              <div class="layout-content">歡樂城堡邀請大家一起跟著去探險，看看城堡裡發生了哪些精采有趣的刺激故事！</div>
              <div class="layout-videobox layout-sharewidth item-2 mt-2 lib-sort-abc">
                <?php include "html_model/library/lib-videobox-abc.html";?>
                <?php include "html_model/library/lib-videobox-abc.html";?>
              </div>
            </div>
            <!-- 3.3 C-->
            <div class="layout-main">
              <h3 class="layout-title-level-3 color-3 mt-0">【 Fun and Friends 】</h3>
              <div class="layout-content">Abby阿姨和Brandon叔叔要帶大家一起進入Zippy World，並和我們一起認識在公園裡散步、遊玩或清掃時可以用的一些短句喔！</div>
              <div class="layout-videobox layout-sharewidth item-2 mt-2 lib-sort-abc">
                <?php include "html_model/library/lib-videobox-abc.html";?>
                <?php include "html_model/library/lib-videobox-abc.html";?>
              </div>
            </div>
            <!-- 3.3 D-->
            <div class="layout-main">
              <h3 class="layout-title-level-3 color-3 mt-0">【 Happy House 】</h3>
              <div class="layout-content">Happy House裡有白熊、南瓜、叉子、湯匙…等各種好朋友，它們會和我們在各種店裡玩捉迷藏，玩魔法氣球，還會一起唱歌跳舞，趕快看看它們都玩了哪些遊戲喔！</div>
              <div class="layout-videobox layout-sharewidth item-2 mt-2 lib-sort-abc">
                <?php include "html_model/library/lib-videobox-abc.html";?>
                <?php include "html_model/library/lib-videobox-abc.html";?>
              </div>
            </div>
            <!-- 3.3 E-->
            <div class="layout-main">
              <h3 class="layout-title-level-3 color-3 mt-0">【 Pirate Detectives 】</h3>
              <div class="layout-content">這是Andrew船長和船員航行期間的一個故事。他們幫助沉船，也找到迷路的螃蟹，還幫忙找到一頂被偷走的假髮…等等，你們也一起來加入船長和船員們，和他們一起去冒險吧！</div>
              <div class="layout-videobox layout-sharewidth item-2 mt-2 lib-sort-abc">
                <?php include "html_model/library/lib-videobox-abc.html";?>
                <?php include "html_model/library/lib-videobox-abc.html";?>
              </div>
            </div>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <!--
            ====================================
            ——— 3.4 ( !注意! 此單元因 flash 限制，故手機版不提供使用 )
            ——— 依現有資料庫名單，wfc 人員一次提供 8 則顯示
            ——— 更新規則：每月更新，wfc 人員會案月選出輪撥名單
            =====================================
            -->
            <div class="layout-main layout-main-pageback layout-main-pageback-color-3 layout-main-gbox"><?php include "html_model/uikit/page-back.html";?>
              <!-- LEVEL 1-->
              <div class="sectionTitle text-center color-3 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>美語遊戲</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <div class="layout-content">透過遊戲提供給孩子們不同的衍生性美語學習體驗。</div>
              <div class="lib-gbox layout-sharewidth item-4 mt-2">
                <?php include "html_model/library/lib-gamebox.html";?>
                <?php include "html_model/library/lib-gamebox.html";?>
              </div>
            </div>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <!--
            ====================================
            ——— 3.5 ( !注意! 此單元因 flash 限制，故手機版不提供使用 )
            ——— 同 3.4
            =====================================
            -->
            <div class="layout-main layout-main-pageback layout-main-pageback-color-3 layout-main-gbox"><?php include "html_model/uikit/page-back.html";?>
              <!-- LEVEL 1-->
              <div class="sectionTitle text-center color-3 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>美語故事</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <div class="layout-content">透過故事可以培養孩子們的觀察、認知、推理、聯想等各項能力。</div>
              <div class="lib-gbox layout-sharewidth item-4 mt-2">
                <?php include "html_model/library/lib-gamebox.html";?>
                <?php include "html_model/library/lib-gamebox.html";?>
              </div>
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