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
<html lang="zh-Hant-TW">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FOR INDEX ONLY-->
    <!-- slide show-->
    <link href="assets/plugins/rs-plugin/css/settings.css" rel="stylesheet">
    <link href="assets/plugins/selectbox/select_option1.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/plugins/fancybox/jquery.fancybox.min.css" rel="stylesheet">
    <!-- section rise animate-->
    <link href="assets/plugins/animate/animate.css" rel="stylesheet">
    <!-- IT-->
    <link href="css/index.css" rel="stylesheet">
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
        </nav>
      </header>
      <!--
      ====================================
      ——— SLIDE SHOW
      =====================================
      -->
      <section class="bannercontainer bannercontainerV1">
        <div class="fullscreenbanner-container">
          <div class="fullscreenbanner">
            <ul>
              <!-- ONE-->
              <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2"><img src="img/index/slide1.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                <div class="slider-caption container">
                  <div class="tp-caption rs-caption-1 sft start" data-hoffset="0" data-speed="800" data-start="1000" data-easing="Back.easeInOut" data-endspeed="300">近距離美語互動</div>
                  <div class="tp-caption rs-caption-2 sft" data-hoffset="0" data-speed="1000" data-start="1500" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off">讓孩子與美語叔叔、阿姨在活動中歡笑聲不斷，開心說美語！</div>
                </div>
              </li>
              <!-- TWO-->
              <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2"><img src="img/index/slide2.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                <div class="slider-caption container">
                  <div class="tp-caption rs-caption-1 sft start text-center" data-hoffset="0" data-x="center" data-speed="800" data-start="1000" data-easing="Back.easeInOut" data-endspeed="300">全台最大規模</div>
                  <div class="tp-caption rs-caption-2 sft text-center" data-hoffset="0" data-x="center" data-speed="1000" data-start="1500" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off">一年舉辦1200場以上充滿歡樂的全美語活動！</div>
                </div>
              </li>
              <!-- THREE-->
              <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2"><img src="img/index/slide3.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                <div class="slider-caption container">
                  <div class="tp-caption rs-caption-1 sft start text-right" data-hoffset="0" data-x="right" data-speed="800" data-start="1000" data-easing="Back.easeInOut" data-endspeed="300">完善會員服務</div>
                  <div class="tp-caption rs-caption-2 sft text-right" data-hoffset="0" data-x="right" data-speed="1000" data-start="1500" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off">提供完善的會員服務，讓孩子的學習沒有後顧之憂！</div>
                </div>
              </li>
              <!-- FOUR-->
              <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2"><img src="img/index/slide4.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                <div class="slider-caption container">
                  <div class="tp-caption rs-caption-1 sft start" data-hoffset="0" data-speed="800" data-start="1000" data-easing="Back.easeInOut" data-endspeed="300">社群交流平台</div>
                  <div class="tp-caption rs-caption-2 sft" data-hoffset="0" data-speed="1000" data-start="1500" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off">藉由寰宇家庭俱樂部的社群平台，互相交流分享，讓親子共學共玩的路上不孤單！</div>
                </div>
              </li>
              <!-- FIVE-->
              <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2"><img src="img/index/slide5.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                <div class="slider-caption container">
                  <div class="tp-caption rs-caption-1 sft start text-center" data-hoffset="0" data-x="center" data-speed="800" data-start="1000" data-easing="Back.easeInOut" data-endspeed="300">多元美語學習</div>
                  <div class="tp-caption rs-caption-2 sft text-center" data-hoffset="0" data-x="center" data-speed="1000" data-start="1500" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off">配合孩子的年齡與學習的進度，選擇合適自己的美語學習方式。</div>
                </div>
              </li>
              <!-- SIX-->
              <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2"><img src="img/index/slide6.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                <div class="slider-caption container">
                  <div class="tp-caption rs-caption-1 sft start text-right" data-hoffset="0" data-x="right" data-speed="800" data-start="1000" data-easing="Back.easeInOut" data-endspeed="300">特別保證制度</div>
                  <div class="tp-caption rs-caption-2 sft text-right" data-hoffset="0" data-x="right" data-speed="1000" data-start="1500" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off">可大膽讓寶貝們使用，提供產品保固制度，享受令人安心的服務。</div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!--
      ====================================
      ——— SECTION LINK
      =====================================
      -->
      <section class="clearfix linkSection">
        <div class="sectionLinkArea scrolling">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="scrolling-icon scrolling-icon-1"></div><a class="sectionLink bg-color-1" href="#englishEvent"><span class="linkText">美語</span><span class="linkText">活動</span><i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i></a>
              </div>
              <div class="col-sm-3">
                <div class="scrolling-icon scrolling-icon-2"></div><a class="sectionLink bg-color-2" href="#englishLearning"><span class="linkText">美語</span><span class="linkText">學習</span><i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i></a>
              </div>
              <div class="col-sm-3">
                <div class="scrolling-icon scrolling-icon-6"></div><a class="sectionLink bg-color-6" href="#wfcService"><span class="linkText">焦點</span><span class="linkText">服務</span><i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i></a>
              </div>
              <div class="col-sm-3">
                <div class="scrolling-icon scrolling-icon-4"></div><a class="sectionLink bg-color-5" href="#wfcIG"><span class="linkText">俱樂部</span><span class="linkText">歡樂時光</span><i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--
      ====================================
      ——— ENGLISH EVENT
      =====================================
      -->
      <section class="whiteSection full-width clearfix coursesSection section-event" id="englishEvent">
        <div class="container">
          <div class="sectionTitle text-center color-1">
            <h2 class="wow fadeInUp"><span class="shape shape-left"></span><span>美語活動</span><span class="shape shape-right"></span></h2>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="owl-carousel teamSlider">
                <!-- v container v-->
                <div class="block">
                  <div class="thumbnail thumbnailContent wow fadeInUp"><a href=""><img class="img-responsive" src="img/index/event1.jpg"></a>
                    <!-- <div class="sticker bg-color-2">B</div>-->
                    <div class="caption border-color-1">
                      <h3><a class="color-1" href="">美語嘉年華</a></h3>
                      <p>全美語大型兒童舞台劇，由專業美語演員及Zippy家族人偶同台演出，以台上台下互動方式，帶領觀眾唱歌舞動身體，呈現豐富具教育性的表演。</p>
                      <ul class="list-inline btn-green">
                        <li><a class="btn btn-link" href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>繼續閱讀</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="block">
                  <div class="thumbnail thumbnailContent wow fadeInUp"><a href=""><img class="img-responsive" src="img/index/event2.jpg"></a>
                    <!-- <div class="sticker bg-color-3">M</div>-->
                    <div class="caption border-color-1">
                      <h3><a class="color-1" href="">周末活動</a></h3>
                      <p>以經典故事主題結合DWE歌曲、產品及教具進行的美語活動，透過Zippy家族布偶及人偶近距離接觸，以互動激發創意，也增進親子關係！</p>
                      <ul class="list-inline btn-green">
                        <li><a class="btn btn-link" href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>繼續閱讀</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="block">
                  <div class="thumbnail thumbnailContent wow fadeInUp"><a href=""><img class="img-responsive" src="img/index/event3.jpg"></a>
                    <!-- <div class="sticker bg-color-4">A</div>-->
                    <div class="caption border-color-1">
                      <h3><a class="color-1" href="">迷你活動</a></h3>
                      <p>專為大、小孩子設計的分齡活動，搭配教具加強感覺統合的刺激，讓孩子將美語應用在多元主題中，活潑有趣的遊戲體驗，感受歡樂無限！</p>
                      <ul class="list-inline btn-green">
                        <li><a class="btn btn-link" href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>繼續閱讀</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="block">
                  <div class="thumbnail thumbnailContent wow fadeInUp"><a href=""><img class="img-responsive" src="img/index/event4.jpg"></a>
                    <!-- <div class="sticker bg-color-5">P</div>-->
                    <div class="caption border-color-1">
                      <h3><a class="color-1" href="">美語夏令營</a></h3>
                      <p>沉浸在大自然的洗禮，三天兩夜全程美語充滿樂趣，透過主題式的生活體驗和活動探險，讓孩子說出一口好美語！</p>
                      <ul class="list-inline btn-green">
                        <li><a class="btn btn-link" href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>繼續閱讀</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- ^ container ^-->
              </div>
            </div>
          </div>
        </div>
        <div class="btnArea"><a class="btn bg-color-1" href="">更多美語活動</a></div>
      </section>
      <!--
      -====================================
      ——— ENGLISH LEARN
      =====================================
      -->
      <section class="lightSection full-width clearfix teamSection section-learn" id="englishLearning">
        <div class="container">
          <div class="sectionTitle text-center alt color-2">
            <h2 class="wow fadeInUp"><span class="shape shape-left"></span><span class="txcolor">美語學習</span><span class="shape shape-right"></span></h2>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="owl-carousel teamSlider">
                <!-- v container v-->
                <div class="block">
                  <div class="thumbnail thumbnailContent wow fadeInUp"><a href=""><img class="img-responsive" src="img/index/learn1.jpg"></a>
                    <!-- <div class="sticker bg-color-2">M</div>-->
                    <div class="caption border-color-2">
                      <h3><a class="color-2" href="">Face Call</a></h3>
                      <p>漸進式的美語學習，降低孩子使用電話的緊張情緒，Face Call是孩子正式進入使用「電話美語」前或遇到停滯期的好選擇。</p>
                      <ul class="list-inline btn-green">
                        <li><a class="btn btn-link" href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>繼續閱讀</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="block">
                  <div class="thumbnail thumbnailContent wow fadeInUp"><a href=""><img class="img-responsive" src="img/index/learn2.jpg"></a>
                    <!-- <div class="sticker bg-color-2">M</div>-->
                    <div class="caption border-color-2">
                      <h3><a class="color-2" href="">電話美語</a></h3>
                      <p>真人電話美語服務，在家就可輕鬆練習。搭配分齡機制，可依孩子的程度，與美語叔叔、阿姨一起唱美語、說美語，訓練孩子聽力與會話能力！</p>
                      <ul class="list-inline btn-green">
                        <li><a class="btn btn-link" href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>繼續閱讀</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="block">
                  <div class="thumbnail thumbnailContent wow fadeInUp"><a href=""><img class="img-responsive" src="img/index/learn3.jpg"></a>
                    <!-- <div class="sticker bg-color-2">M</div>-->
                    <div class="caption border-color-2">
                      <h3><a class="color-2" href="">CAP親子學習計畫</a></h3>
                      <p>用來激勵小朋友的學習計畫。依照DWE的顏色而逐漸加深難易度，能幫助小朋友保持學習的動力、引起興趣並建立信心，持之以恆的使用產品。</p>
                      <ul class="list-inline btn-green">
                        <li><a class="btn btn-link" href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>繼續閱讀</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="block">
                  <div class="thumbnail thumbnailContent wow fadeInUp"><a href=""><img class="img-responsive" src="img/index/learn4.jpg"></a>
                    <!-- <div class="sticker bg-color-2">M</div>-->
                    <div class="caption border-color-2">
                      <h3><a class="color-2" href="">DWE畢業</a></h3>
                      <p>寰宇家庭為孩子們提供一項美語挑戰「畢業申請」；只要孩子年滿4歲則可申請，它是學習的里程碑，通過可獲得專屬證書和米奇獎盃。</p>
                      <ul class="list-inline btn-green">
                        <li><a class="btn btn-link" href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>繼續閱讀</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- ^ container ^-->
              </div>
            </div>
          </div>
        </div>
        <div class="btnArea"><a class="btn bg-color-2" href="blog-grid.html">更多學習資訊</a></div>
      </section>
      <!--
      -====================================
      ——— SERVICE
      =====================================
      -->
      <section class="colorSection full-width clearfix teamSection section-service" id="wfcService">
        <div class="container">
          <div class="sectionTitle text-center alt color-6">
            <h2 class="wow fadeInUp"><span class="shape shape-left"></span><span class="txcolor">焦點服務</span><span class="shape shape-right"></span></h2>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="owl-carousel teamSlider">
                <!-- v container v-->
                <div class="block">
                  <div class="thumbnail thumbnailContent wow fadeInUp"><a href=""><img class="img-responsive" src="img/index/services1.jpg"></a>
                    <!-- <div class="sticker bg-color-4">M</div>-->
                    <div class="caption border-color-6">
                      <h3><a class="color-6" href="">新手上路</a></h3>
                      <p>提供會員充滿創意且多元化的服務與活動，希望為所有的爸爸、媽媽與小朋友營造一個充滿歡樂的美語學習環境！</p>
                      <ul class="list-inline btn-green">
                        <li><a class="btn btn-link" href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>繼續閱讀</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="block wfc-services">
                  <div class="thumbnail thumbnailContent wow fadeInUp"><a href=""><img class="img-responsive" src="img/index/services2.jpg"></a>
                    <!-- <div class="sticker bg-color-4">M</div>-->
                    <div class="caption border-color-6">
                      <h3><a class="color-6" href="">我的專區</a></h3>
                      <p>提供學習支援服務的各項紀錄，透過記錄可以知道如何陪伴孩子輕鬆並開心使用ＤＷＥ產品！</p>
                      <ul class="list-inline btn-green">
                        <li><a class="btn btn-link" href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>繼續閱讀</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="block wfc-services">
                  <div class="thumbnail thumbnailContent wow fadeInUp"><a href=""><img class="img-responsive" src="img/index/services3.jpg"></a>
                    <!-- <div class="sticker bg-color-4">M</div>-->
                    <div class="caption border-color-6">
                      <h3><a class="color-6" href="">家長講座</a></h3>
                      <p>陪伴孩子學習的七大竅門，不管學習任何事物，孩子們最需要的其實就是家長們的陪伴；產品好多，不知如何上手，來成功的第一步就對了！</p>
                      <ul class="list-inline btn-green">
                        <li><a class="btn btn-link" href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>繼續閱讀</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="block wfc-services">
                  <div class="thumbnail thumbnailContent wow fadeInUp"><a href=""><img class="img-responsive" src="img/index/services4.jpg"></a>
                    <!-- <div class="sticker bg-color-4">M</div>-->
                    <div class="caption border-color-6">
                      <h3><a class="color-6" href="">多媒體學習</a></h3>
                      <p>透過多元化的美語學習方式，家長陪伴孩子一同快樂玩英文，培養孩子創意與想像力，並達到最好的親子互動！</p>
                      <ul class="list-inline btn-green">
                        <li><a class="btn btn-link" href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>繼續閱讀</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- ^ container ^-->
                <!--
                <div class="btnArea">
                <a href="blog-grid.html" class="btn bg-color-4">更多網站服務</a>
                </div>
                -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--
      ====================================
      ——— INSTERGRAN
      =====================================
      --><?php include "html_model/idx/idx-ig.html";?>
      <!--DIFFERENT--><?php include "html_model/footer.html";?>
      <?php include "html_model/tabmenu.html";?>
      <!--THE SAME--><?php include "html_model/floating-ui.html";?>
      <?php include "html_model/js-for-all.html";?>
      <html>
        <head></head>
        <body></body>
      </html>
      <!-- JS FOR INDEX ONLY-->
      <!-- slide show-->
      <script src="assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
      <script src="assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
      <script src="assets/plugins/owl-carousel/owl.carousel.js"></script>
      <!-- slide show words animate-->
      <script src="assets/plugins/wow/wow.min.js"></script>
      <!-- waterfall-->
      <script src="assets/plugins/waterfall/masonry.js"></script>
      <!-- UI controler from IT-->
      <script src="js/index.js"></script>
    </div>
  </body>
</html>