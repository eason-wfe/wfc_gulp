<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <!-- owl-->
    <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/plugins/fancybox/jquery.fancybox.min.css" rel="stylesheet">
    <!-- wow-->
    <link href="assets/plugins/animate/animate.css" rel="stylesheet">
    <!-- IT-->
    <link rel="stylesheet" href="css/magazine.css">
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
                  <li class="breadcrumb-item">
                    <!-- <li class="breadcrumb-item text-truncate" style="width: 150px;">--><a href="">會員服務</a>
                  </li>
                  <li class="breadcrumb-item">寰宇家庭雜誌</li>
                </ol>
              </nav>
            </div>
          </div>
        </nav>
      </header>
      <div class="container container-main container-col-2">
        <div class="row">
          <div class="hidden-xs hidden-sm col-md-4 col-lg-3 sticky-top"><?php include "html_model/article/art-aside.html";?></div>
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
            <div class="layout-main">
              <div class="sectionTitle text-center color-4 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>寰宇家庭雜誌</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <div class="mgz-visionbox wow fadeInUp">
                <div class="mgz-cover"><img class="mgz-cover-img" src="img/magazine/cover/151.jpg"><img class="mgz-cover-img" src="img/magazine/cover/152.jpg"><img class="mgz-cover-img" src="img/magazine/cover/153.jpg"><img class="mgz-cover-img" src="img/magazine/cover/154.jpg"><img class="mgz-cover-img" src="img/magazine/cover/155.jpg"><img class="mgz-cover-img" src="img/magazine/cover/156.jpg">
                  <!--
                  [^ 註 ^]
                  雜誌排列順序為舊 -> 新，
                  新的在最下方
                  -->
                </div>
                <ul class="mgz-introduce">
                  <li>雙月刊．逢單月出刊</li>
                  <li>學習類文章（專家學者）</li>
                  <li>教育類文章（會員分享）</li>
                  <li>學習支援服務</li>
                  <li>寰宇家庭影音訊息</li>
                  <li>會員服務訊息</li>
                  <li>美語活動訊息</li>
                  <li>寶貝秀－可愛照片分享</li>
                </ul>
              </div>
            </div>
            <div class="layout-main">
              <h3 class="layout-title-level-3 color-4 mt-0 mb-2">豐富內容</h3>
              <div class="owl-carousel teamSlider wow fadeInUp">
                <div class="block">
                  <div class="thumbnail thumbnailContent"><img src="img/magazine/page/01.jpg"></div>
                </div>
                <div class="block">
                  <div class="thumbnail thumbnailContent"><img src="img/magazine/page/02.jpg"></div>
                </div>
                <div class="block">
                  <div class="thumbnail thumbnailContent"><img src="img/magazine/page/03.jpg"></div>
                </div>
                <div class="block">
                  <div class="thumbnail thumbnailContent"><img src="img/magazine/page/04.jpg"></div>
                </div>
                <div class="block">
                  <div class="thumbnail thumbnailContent"><img src="img/magazine/page/05.jpg"></div>
                </div>
              </div>
            </div>
            <div class="layout-main">
              <h3 class="layout-title-level-3 color-4 mt-0 mb-2">會員專屬雜誌</h3>
              <div class="layout-sharewidth item-3 item-re-lg-2 wow fadeInUp">
                <div class="layout-sharewidth-item"><img src="img/magazine/cover/156.jpg">
                  <div class="mgz-unit">第 156 期</div>
                </div>
                <div class="layout-sharewidth-item"><img src="img/magazine/cover/155.jpg">
                  <div class="mgz-unit">第 155 期</div>
                </div>
                <div class="layout-sharewidth-item"><img src="img/magazine/cover/154.jpg">
                  <div class="mgz-unit">第 154 期</div>
                </div>
                <div class="layout-sharewidth-item"><img src="img/magazine/cover/153.jpg">
                  <div class="mgz-unit">第 153 期</div>
                </div>
                <div class="layout-sharewidth-item"><img src="img/magazine/cover/152.jpg">
                  <div class="mgz-unit">第 152 期</div>
                </div>
                <div class="layout-sharewidth-item"><img src="img/magazine/cover/151.jpg">
                  <div class="mgz-unit">第 151 期</div>
                </div>
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
      <!-- owl-->
      <script src="assets/plugins/owl-carousel/owl.carousel.js"></script>
      <!-- wow-->
      <script src="assets/plugins/wow/wow.min.js"></script>
      <script src="js/magazine.js"></script>
    </div>
  </body>
</html>