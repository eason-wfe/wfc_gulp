<!DOCTYPE html>
<!--
KOREA
1. @import "te/te/aside-kr";
2. css link css/te_kr
== usual ==
1. css/layout_kr.css ( in head.html )
2. html_model/header-2-kr.html
3. html_model/tabmenu-kr.html
4. html_model/footer-kr.html
-->
<html lang="zh-Hant-TW">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/te.css">
    <!-- <link rel="stylesheet" href="css/te_kr.css">-->
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
          <div class="container">
            <?php include "html_model/header/header-2.html";?>
            <?php //include "html_model/header/header-2-kr.html";?>
          </div>
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
                  <li class="breadcrumb-item"><a href="">美語學習</a></li>
                  <li class="breadcrumb-item">電話美語</li>
                </ol>
              </nav>
            </div>
          </div>
        </nav>
      </header>
      <!--
      ====================================
      ——— CONTAINER STR
      =====================================
      -->
      <!-- main + aside-->
      <div class="container container-main container-col-2">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
            <div class="layout-main layout-main-vision"><img class="layout-main-vision-img" src="img/te/vision2.jpg"></div>
            <div class="layout-main">
              <div class="sectionTitle text-center color-2 mt-0">
                <h2><span class="shape shape-left"></span><span>電話美語</span><span class="shape shape-right"></span></h2>
              </div>
              <div class="layout-content">孩子藉由Telephone English (TE)與寰宇家庭俱樂部的美語叔叔、阿姨用美語溝通享受樂趣，配合孩子的成長腳步、興趣、產品進度，自由選擇美語練習的輔助系統。讓孩子配合學習進度進行不同的美語練習得以感受到「我能跟叔叔、阿姨一起唱歌了！」「我會說美語了！」「好開心！」等成就感的喜悅。為了避免孩子因挫折感而排斥TE美語練習，請觀察孩子的表現並搭配使用俱樂部APP的Face Call類視訊服務。</div>
            </div>
            <div class="layout-main">
              <div class="sectionTitle text-center color-2 mt-0 title-deco">
                <h2><span class="shape shape-left"></span><span class="main">電話美語分為歌曲練習、課程練習、對錯練習、朗讀練習、自由對談</span><span class="shape shape-right"></span></h2>
              </div>
              <!-- 1-->
              <h3 class="layout-title-level-2 is-song mt-0 is-color-block"><img src="img/te/te_song.png">							Song Lessons（歌唱練習）</h3>
              <div class="layout-content pl-3 is-text-song">跟著美語叔叔、阿姨一起唱TE Book中登錄的精選歌曲與內容。為鼓勵孩子開口及強化不同聲音的刺激，無法指定叔叔、阿姨喔！一次最多兩首歌曲。</div>
              <!-- 2-->
              <h3 class="layout-title-level-2 is-book is-color-block"><img src="img/te/te_book.png">							Book Lessons（課程練習）</h3>
              <div class="layout-content pl-3 is-text-book">針對已經使用Step by Step進行DWE課程的孩子所設計，其主要運用於複習DWE課程，一次一課，請協助孩子先行預習。</div>
              <!-- 3-->
              <h3 class="layout-title-level-2 is-right is-color-block"><img src="img/te/te_right.png">							Right Light Lessons（對錯練習）</h3>
              <div class="layout-content pl-3 is-text-right">針對已經完成各色DWE課程和電話美語Book Lessons的孩子所設計，一次一課，此課程以DWE Book的各課最後之Right Light Check內容為基礎，透過此一練習可確認孩子是否已經確實理解課程內容。</div>
              <!-- 4-->
              <h3 class="layout-title-level-2 is-reading is-color-block"><img src="img/te/te_reading.png">							Reading Lessons（閱讀練習）</h3>
              <div class="layout-content pl-3 is-text-reading">當孩子完成所有的Right Lessons時，意味著已經準備好了畢業申請；Reading Lessons是為孩子做畢業申請(Graduation Application)預習的，透過閱讀練習，一次一課，孩子可以更了解Book 11 及Book 12的內容，同時讓美語口說能力更流利，更容易通過畢業申請。</div>
              <!-- 5-->
              <h3 class="layout-title-level-2 is-fc is-color-block"><img src="img/te/te_fc.png">							Free Conversation（自由對談）</h3>
              <div class="layout-content pl-3 is-text-fc">針對已經完成Book 1至 12所有課程，並可理解美語叔叔、阿姨提問後用簡短完整句子正確解答的孩子所設計。可以自選主題跟叔叔、阿姨做自由會話的練習。</div>
              <!-- 6-->
              <h3 class="layout-title-level-2 is-cap is-color-block"><img src="img/te/te_cap.png">							CAP Lessons （CAP 練習）</h3>
              <div class="layout-content pl-3 is-text-cap">在使用DWE產品過程中，家長使用CAP 親子學習計畫循序漸進，一步一腳印的陪著孩子一起學習，繳交各項作業，除了錄音作業，也要挑戰電話美語的CAP作業喔。</div>
            </div>
            <div class="layout-main">
              <div class="sectionTitle text-center color-2 mt-0">
                <h2><span class="shape shape-left"></span><span>電話美語事前準備</span><span class="shape shape-right"></span></h2>
              </div>
              <div class="layout-content">「電話美語」是寰宇家庭俱樂部提供給會員最方便、最不受地域限制的多項美語服務之一。您只需要在電話美語開放預約報名時間內報名成功，就能讓孩子每週一次透過電話與電話美語叔叔、阿姨們，以自然的對話方式練習產品中的歌曲或課程。</div>
              <h3 class="layout-title-level-3 color-2">「第一次使用」</h3>
              <div class="layout-content">孩子第一次使用「電話美語」或個性比較害羞時，建議您務必事前先給孩子充分的心理建設，並適時給予鼓勵與讚美。</div>
              <h3 class="layout-title-level-3 color-2">「事前預習」</h3>
              <div class="layout-content">
                <ol>
                  <li>先跟孩子一起決定想要進行的課程並先行練習。</li>
                  <li>請確認孩子可以做課程練習的時間。</li>
                  <li>請準備好一個愉悅的心情，沒有干擾的環境以及會需要使用的課本。</li>
                </ol>
              </div>
              <h3 class="layout-title-level-3 color-2">用陪伴代替教導</h3>
              <div class="layout-content">進行「電話美語」時，請在一旁陪伴孩子，盡可能降低環境的干擾，保持但不需要教導孩子如何 回答問題，電話美語叔叔、阿姨們會引導他愉快進行練習。</div>
              <h3 class="layout-title-level-3 color-2">注意事項</h3>
              <div class="layout-content">
                <ol>
                  <li>每位孩子每週一次使用機會，無法暫停、不可累計。每次報名，每位孩子可選擇兩首歌曲或一課課文。家裡有一位以上的小朋友，請個別報名。</li>
                  <li>電話美語分為「歌曲練習」、「課程練習」、「對錯練習」、「朗讀練習」、「自由對談」皆為獨立報名項目，無法一起報名，例：已報名歌曲練習，無法同時報名課程練習；報名CAP練習，則無法同時報名其他練習。</li>
                  <li>練習內容已購買產品為主，為提升孩子學習樂趣，歌曲限「精選歌曲」為主。為了讓孩子適應不同的口音，故無法指定叔叔、阿姨喔！請您依照孩子的年齡或興趣選擇歌曲或課程來練習。</li>
                </ol>
              </div>
            </div>
            <!-- FULL-->
            <div class="layout-main layout-main-full">
              <div class="layout-main-full-bg layout-main-full-left"></div>
              <div class="layout-main-full-inbox te-zippy">
                <div class="sectionTitle text-center color-2 mt-0">
                  <h2><span class="shape shape-left"></span><span>電話美語報名資訊</span><span class="shape shape-right"></span></h2>
                </div>
                <div class="te-zippy-box"><img class="te-zippy-img" src="img/te/zippy.png"></div>
                <h3 class="layout-title-level-2 color-2 mt-0"><img class="layout-title-level-2-str" src="img/title_star.png">電話美語服務時間</h3>
                <div class="layout-content">日間：星期三 14:00~18:00<br>								晚間：星期一至星期四 18:00~21:00<br>								※如遇國定假日或天災將暫停服務，不另行通知或加補。</div>
                <h3 class="layout-title-level-2 color-2"><img class="layout-title-level-2-str" src="img/title_star.png">預約開放時間</h3>
                <div class="layout-content">電話美語日，當日早上9:00開放預約，額滿為止。</div>
                <h3 class="layout-title-level-2 color-2"><img class="layout-title-level-2-str" src="img/title_star.png">即時報名時間</h3>
                <div class="layout-content">每週一、三電話美語服務進行時間~20:45</div>
                <h3 class="layout-title-level-2 color-2"><img class="layout-title-level-2-str" src="img/title_star.png">報名方式</h3>
                <div class="layout-content">
                  <ol>
                    <li>【APP報名】請至Google Play或APP Store下載「寰宇家庭俱樂部」APP。</li>
                    <li>【網路報名】輸入www.worldfamilyclub.com.tw至「寰宇家庭俱樂部網站」，輸入會員編號及密碼登入後，點擊「電話美語報名」即可進行報名。</li>
                    <li> 若遇不可抗力之因素需取消預約，請於預約時段前30分鐘取消，以免影響您的權益。</li>
                  </ol>
                </div>
                <h3 class="layout-title-level-2 color-2"><img class="layout-title-level-2-str" src="img/title_star.png">見證影片</h3>
                <div class="layout-videobox layout-sharewidth item-2 mb-0">
                  <div class="layout-videobox-item layout-sharewidth-item">
                    <div class="layout-video-fluid">
                      <!---->
                      <!--player.vimeo.com/video/282959510-->
                      <!--player.vimeo.com/video/282962867-->
                      <!--player.vimeo.com/video/282963531--><iframe src="//player.vimeo.com/video/282963531" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                      <iframe src="//player.vimeo.com/video/314664467" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                      <!--
                      in library
                      <iframe src="//player.vimeo.com/video/282963531" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                      in viemo idx demo video
                      <iframe src="https://player.vimeo.com/video/243244233" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                      -->
                      <!-- <iframe src="https://www.youtube.com/embed/fCpQcrLvhh4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
                  </div>
                  <div class="layout-videobox-item layout-sharewidth-item">
                    <div class="layout-video-fluid">
                      <iframe src="//player.vimeo.com/video/314664575" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                      <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/J3BEQ_DwPTk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="layout-main">
              <!-- QA-->
              <div class="layout-collapse color-2">
                <h3 class="layout-title-level-3 mt-0">電話美語 Q&A</h3>
                <div class="layout-collapse-arrow"> </div>
              </div>
              <div class="layout-collapse-content"><?php include "html_model/te/te-qa.html";?></div>
            </div>
            <div class="layout-main">
              <div class="sectionTitle text-center color-2 mt-0">
                <h2><span class="shape shape-left"></span><span>家長見證</span><span class="shape shape-right"></span></h2>
              </div>
              <div class="owl-carousel owl-carousel-type-1 teamSlider"><?php include "html_model/te/te-carousel-item.html";?></div>
            </div>
          </div><?php include "html_model/te/te-aside.html";?>
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
      <script src="assets/plugins/owl-carousel/owl.carousel.js"></script>
      <script src="js/fullScreen.js"></script>
      <script src="js/te.js"></script>
    </div>
  </body>
</html>