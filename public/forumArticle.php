<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link rel="stylesheet" href="css/forumArticle.css">
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
                  <li class="breadcrumb-item"><a href="">會員服務</a></li>
                  <li class="breadcrumb-item"><a href="">會員交流園地</a></li>
                  <li>由「學習超載世代」帶您了解，學生為什麼作弊</li>
                </ol>
              </nav>
            </div>
          </div>
        </nav>
      </header>
      <div class="container container-main container-col-1">
        <div class="row">
          <div class="layout-col-12">
            <div class="layout-main layout-main-pageback layout-main-pageback-color-4 layout-main-art"><?php include "html_model/uikit/page-back.html";?>
              <!-- TITLE-->
              <div class="forum-titlebox">
                <div class="forum-titlebox-record"><span>756</span>人說這篇文章讚</div>
                <h2 class="forum-titlebox-title">由「學習超載世代」帶您了解，學生為什麼作弊<a class="forum-titlebox-good" href="">覺得這文章很讚</a>
                  <!--
                  [^ 註 ^]
                  規則：點過讚的 .forum-titlebox-good 加 class active
                  點過不能收回
                  -->
                </h2>
              </div>
              <!-- FLOOR 1--><?php include "html_model/forum/forum-floor.html";?>
              <div class="layout-content">梅根就讀於某所對學業要求嚴格的教會學校，她成績優異，但感到沮喪。觸目所及，她的同班同學似乎都在作弊。他們互相抄襲報告，在鞋子上寫答案，還有人偽造請假單，以爭取更多準備考試的時間；有個學生甚至特製了一種水壺標籤，上面寫滿小抄。
                <div class="forum-img"><img src="img/forum/landscape.jpg"></div>
                <div class="forum-img"><img src="img/forum/pic1.jpg"></div>
                <div class="forum-img"><img src="img/forum/portrait.jpg"></div>
              </div>
              <!-- FLOOR 2--><?php include "html_model/forum/forum-floor.html";?>
              <div class="layout-content">
                <div class="forum-floor-editor">
                  <!--
                  [^ 註 ^]
                  當 click 文章或留言的「編輯」後，
                  將內文 & 圖片置入 tag .forum-floor-editor 中，使發文者可以編輯
                  -->
                  <textarea class="forum-floor-textarea" name="" id="">當按下「編輯」按鈕 , 不管是哪一樓層的留言 , 該樓層的「留言/文章內文」就會變成這範例一樣「以 textarea 包覆內文」的「可編輯」狀態</textarea>
                  <div class="forum-group forum-filebox">
                    <div>
                      <input class="forum-file" type="file">
                      <input class="forum-file" type="file">
                      <input class="forum-file" type="file">
                      <!--編輯狀態下應帶入/保留原圖片
                      -->
                    </div>
                  </div>
                  <button class="btn layout-btn layout-btn-md color-4" type="submit">編輯完成</button>
                </div>
                <!-- -->
                <div class="forum-floor-record"><span>5</span><span>人說這留言讚</span></div><a class="forum-titlebox-good" href="">覺得這留言很讚</a>
              </div>
              <!-- FLOOR 3--><?php include "html_model/forum/forum-floor.html";?>
              <div class="layout-content">梅根就讀於某所對學業要求嚴格的教會學校，她成績優異，但感到沮喪。觸目所及，她的同班同學似乎都在作弊。他們互相抄襲報告，在鞋子上寫答案，還有人偽造請假單，以爭取更多準備考試的時間；有個學生甚至特製了一種水壺標籤，上面寫滿小抄。
                <div class="forum-floor-record"><span>5</span><span>人說這留言讚</span></div><a class="forum-titlebox-good active" href="">覺得這留言很讚</a>
                <!--
                [^ 註 ^]
                規則：點過讚的 .forum-titlebox-goo 加 class active
                點過不能收回
                -->
              </div>
              <!-- FLOOR 4--><?php include "html_model/forum/forum-floor.html";?>
              <div class="layout-content">梅根就讀於某所對學業要求嚴格的教會學校，她成績優異，但感到沮喪。觸目所及，她的同班同學似乎都在作弊。他們互相抄襲報告，在鞋子上寫答案，還有人偽造請假單，以爭取更多準備考試的時間；有個學生甚至特製了一種水壺標籤，上面寫滿小抄。
                <div class="forum-floor-record"><span>5</span><span>人說這留言讚</span></div><a class="forum-titlebox-good" href="">覺得這留言很讚</a>
              </div>
              <!-- FLOOR 5--><?php include "html_model/forum/forum-floor.html";?>
              <div class="layout-content">梅根就讀於某所對學業要求嚴格的教會學校，她成績優異，但感到沮喪。觸目所及，她的同班同學似乎都在作弊。他們互相抄襲報告，在鞋子上寫答案，還有人偽造請假單，以爭取更多準備考試的時間；有個學生甚至特製了一種水壺標籤，上面寫滿小抄。
                <div class="forum-floor-record"><span>5</span><span>人說這留言讚</span></div><a class="forum-titlebox-good" href="">覺得這留言很讚</a>
              </div>
              <!-- FLOOR 6--><?php include "html_model/forum/forum-floor.html";?>
              <div class="layout-content">梅根就讀於某所對學業要求嚴格的教會學校，她成績優異，但感到沮喪。觸目所及，她的同班同學似乎都在作弊。他們互相抄襲報告，在鞋子上寫答案，還有人偽造請假單，以爭取更多準備考試的時間；有個學生甚至特製了一種水壺標籤，上面寫滿小抄。
                <div class="forum-floor-record"><span>5</span><span>人說這留言讚</span></div><a class="forum-titlebox-good" href="">覺得這留言很讚</a>
              </div>
              <!-- FLOOR 7--><?php include "html_model/forum/forum-floor.html";?>
              <div class="layout-content">梅根就讀於某所對學業要求嚴格的教會學校，她成績優異，但感到沮喪。觸目所及，她的同班同學似乎都在作弊。他們互相抄襲報告，在鞋子上寫答案，還有人偽造請假單，以爭取更多準備考試的時間；有個學生甚至特製了一種水壺標籤，上面寫滿小抄。
                <div class="forum-floor-record"><span>5</span><span>人說這留言讚</span></div><a class="forum-titlebox-good" href="">覺得這留言很讚</a>
              </div>
              <!-- FLOOR 8--><?php include "html_model/forum/forum-floor.html";?>
              <div class="layout-content">梅根就讀於某所對學業要求嚴格的教會學校，她成績優異，但感到沮喪。觸目所及，她的同班同學似乎都在作弊。他們互相抄襲報告，在鞋子上寫答案，還有人偽造請假單，以爭取更多準備考試的時間；有個學生甚至特製了一種水壺標籤，上面寫滿小抄。
                <div class="forum-floor-record"><span>5</span><span>人說這留言讚</span></div><a class="forum-titlebox-good" href="">覺得這留言很讚</a>
              </div>
              <!-- FLOOR 9--><?php include "html_model/forum/forum-floor.html";?>
              <div class="layout-content">梅根就讀於某所對學業要求嚴格的教會學校，她成績優異，但感到沮喪。觸目所及，她的同班同學似乎都在作弊。他們互相抄襲報告，在鞋子上寫答案，還有人偽造請假單，以爭取更多準備考試的時間；有個學生甚至特製了一種水壺標籤，上面寫滿小抄。
                <div class="forum-floor-record"><span>5</span><span>人說這留言讚</span></div><a class="forum-titlebox-good" href="">覺得這留言很讚</a>
              </div>
              <!-- FLOOR 10-->
              <!--每十則分一頁
              --><?php include "html_model/forum/forum-floor.html";?>
              <div class="layout-content">梅根就讀於某所對學業要求嚴格的教會學校，她成績優異，但感到沮喪。觸目所及，她的同班同學似乎都在作弊。他們互相抄襲報告，在鞋子上寫答案，還有人偽造請假單，以爭取更多準備考試的時間；有個學生甚至特製了一種水壺標籤，上面寫滿小抄。
                <div class="forum-floor-record"><span>5</span><span>人說這留言讚</span></div><a class="forum-titlebox-good" href="">覺得這留言很讚</a>
              </div>
              <!-- PAGER-->
              <div class="pagerArea text-center color-4"><?php include "html_model/uikit/pager-item.html";?></div>
            </div>
            <!-- FULL-->
            <div class="layout-main layout-main-full layout-main-post mb-0" id="articleReport">
              <div class="layout-main-full-bg layout-main-full-center"></div>
              <div class="layout-main-full-inbox">
                <div class="sectionTitle text-center color-4 mt-0">
                  <h2>
                    <!-- h2 only--><span class="shape shape-left"></span><span>發表留言</span><span class="shape shape-right"></span>
                  </h2>
                </div>
                <div class="forum-portrait">
                  <div class="forum-portrait-pic" style="background-image: url(img/no_picture.png);"></div>
                  <label class="forum-label">宜靜媽媽</label>
                </div>
                <div class="forum-group">
                  <textarea class="forum-control" placeholder="新留言內容"></textarea>
                </div>
                <div class="forum-group forum-filebox">
                  <div>
                    <input class="forum-file" type="file">
                    <input class="forum-file" type="file">
                    <input class="forum-file" type="file">
                  </div>
                </div>
                <div class="forum-submit"><a class="forum-submit-lightbox" href="#forum-modal" data-toggle="modal">※ 請務必閱讀發表文章/留言之注意事項</a>
                  <button class="btn layout-btn layout-btn-md btn-block color-4" type="submit">發表留言</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--
      ====================================
      ——— CTA & LIGHTBOX
      =====================================
      -->
      <div class="scrolling"><a class="forum-cta" href="#articleReport"></a></div><?php include "html_model/forum/lightbox-forum.html";?>
      <!--DIFFERENT--><?php include "html_model/footer.html";?>
      <?php include "html_model/tabmenu.html";?>
      <!--THE SAME--><?php include "html_model/floating-ui.html";?>
      <?php include "html_model/js-for-all.html";?>
      <html>
        <head></head>
        <body></body>
      </html>
      <!-- JS FOR THIS PAGE ONLY-->
      <script src="js/fullScreen.js"></script>
      <script src="js/forumArticle.js"></script>
    </div>
  </body>
</html>