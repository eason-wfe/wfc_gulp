<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link rel="stylesheet" href="css/mypage.css">
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
                  <li class="breadcrumb-item">我的專區</li>
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
            </div>
            <aside class="layout-sub px-4 py-4">
              <ul class="art-list-f2"><?php include "html_model/mypage/aside.html";?></ul>
            </aside>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-9">
            <!-- v UNIT STARTING v-->
            <div class="layout-main layout-deco-title pb-4"><?php include "html_model/uikit/aside-lb-open.html";?>
              <div class="sectionTitle text-center color-5 mt-0">
                <h2><span class="shape shape-left"></span><span>我的專區</span><span class="shape shape-right"></span></h2>
              </div>
              <h3 class="layout-title-level-3 icon1">會員資料 </h3>
              <div class="profile">
                <div class="profile-img" style="background-image: url(img/mypage/portrait.jpg);"></div>
                <ul class="profile-box">
                  <li class="profile-item">
                    <div class="profile-title">會員編號：</div>
                    <div class="profile-content">S516888</div>
                  </li>
                  <li class="profile-item">
                    <div class="profile-title">會員真實姓名：</div>
                    <div class="profile-content">史塔克</div>
                  </li>
                  <li class="profile-item">
                    <div class="profile-title">會員匿稱：</div>
                    <div class="profile-content">鐵腕 老爸</div>
                  </li>
                  <li class="profile-item">
                    <div class="profile-title">俱樂部會員到期日：</div>
                    <div class="profile-content">2100/12/31</div>
                  </li>
                  <li class="profile-item">
                    <div class="profile-title">CAP優惠到期日：</div>
                    <div class="profile-content">2019/05/01</div>
                  </li>
                  <li class="profile-item">
                    <div class="profile-title">您的活動餘額：</div>
                    <div class="profile-content">$ 0</div>
                  </li>
                  <li class="profile-item">
                    <div class="profile-title">有效學習點數：</div>
                    <div class="profile-content">165 點</div>
                  </li>
                  <li class="profile-item">
                    <div class="profile-title">即將到期學習點數：</div>
                    <div class="profile-content is-point">6 點 ( 請於 2018/11/30 前兌換完畢 )</div>
                  </li>
                </ul>
                <button class="btn layout-btn profile-btn" type="button">修改個人資料</button>
              </div>
              <ul class="linkBox share5 mt-5">
                <li><a class="link1" href="#target1">最新消息</a></li>
                <li><a class="link2" href="#target2">我的個人訊息</a></li>
                <li><a class="link3" href="#target3">我的最新留言通知</a></li>
                <li><a class="link4" href="#target4">我的文章</a></li>
                <li><a class="link5" href="#target5">我追蹤的文章</a></li>
              </ul>
            </div>
            <!-- v UNIT v-->
            <div class="layout-main collapse-first" id="target1">
              <div class="layout-collapse color-1">
                <h3 class="layout-title-level-3 icon1 mt-0">最新消息</h3>
                <div class="layout-collapse-arrow"> </div>
              </div>
              <div class="layout-collapse-content">
                <div class="innerbox inner-1">
                  <ul class="layout-card mt-0 has-sign">
                    <!--
                    [^ 註 ^]
                    此單元有 icon，用來提示是否看過
                    --><?php include "html_model/mypage/card-item-news.html";?>
                    <?php include "html_model/mypage/card-item-news.html";?>
                  </ul>
                  <div class="pagerArea text-center color-1"><?php include "html_model/uikit/pager-item.html";?></div>
                </div>
              </div>
            </div>
            <!-- v UNIT v-->
            <div class="layout-main" id="target2">
              <div class="layout-collapse color-2">
                <h3 class="layout-title-level-3 icon3 mt-0">我的個人訊息</h3>
                <div class="layout-collapse-arrow"> </div>
              </div>
              <div class="layout-collapse-content">
                <div class="innerbox inner-2">
                  <ul class="layout-card mt-0 has-sign">
                    <!--[^ 註 ^]此單元有 icon 提示是否看過
                    --><?php include "html_model/mypage/card-item-myevent.html";?>
                    <?php include "html_model/mypage/card-item-myevent.html";?>
                  </ul>
                  <div class="pagerArea text-center color-2"><?php include "html_model/uikit/pager-item.html";?></div>
                </div>
              </div>
            </div>
            <!-- v UNIT v-->
            <div class="layout-main" id="target3">
              <div class="layout-collapse color-3">
                <h3 class="layout-title-level-3 icon4 mt-0">我的最新留言通知</h3>
                <div class="layout-collapse-arrow"> </div>
              </div>
              <div class="layout-collapse-content">
                <div class="innerbox inner-3">
                  <ul class="layout-card mt-0 has-sign">
                    <!--[^ 註 ^]此單元有 icon 提示是否看過
                    --><?php include "html_model/mypage/card-item-mymsg.html";?>
                    <?php include "html_model/mypage/card-item-mymsg.html";?>
                  </ul>
                  <div class="pagerArea text-center color-3"><?php include "html_model/uikit/pager-item.html";?></div>
                </div>
              </div>
            </div>
            <!-- v UNIT v-->
            <div class="layout-main" id="target4">
              <div class="layout-collapse color-4">
                <h3 class="layout-title-level-3 icon2 mt-0">我的文章</h3>
                <div class="layout-collapse-arrow"> </div>
              </div>
              <div class="layout-collapse-content">
                <div class="innerbox inner-4">
                  <ul class="layout-card mt-0">
                    <?php include "html_model/mypage/card-item-myarticle.html";?>
                    <?php include "html_model/mypage/card-item-myarticle.html";?>
                  </ul>
                  <div class="pagerArea text-center color-4"><?php include "html_model/uikit/pager-item.html";?></div>
                </div>
              </div>
            </div>
            <!-- v UNIT v-->
            <div class="layout-main" id="target5">
              <div class="layout-collapse color-5">
                <h3 class="layout-title-level-3 icon6 mt-0">我追蹤的文章</h3>
                <div class="layout-collapse-arrow"> </div>
              </div>
              <div class="layout-collapse-content">
                <div class="innerbox inner-5">
                  <ul class="layout-card mt-0">
                    <?php include "html_model/mypage/card-item-myarticle.html";?>
                    <?php include "html_model/mypage/card-item-myarticle.html";?>
                  </ul>
                  <div class="pagerArea text-center color-5"><?php include "html_model/uikit/pager-item.html";?></div>
                </div>
              </div>
            </div>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <div class="layout-main layout-deco-title"><?php include "html_model/uikit/aside-lb-open.html";?>
              <!-- LEVEL 1-->
              <div class="sectionTitle text-center color-5 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>修改個人資料</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <div class="profile is-setting">
                <div class="profile-img" style="background-image: url(img/mypage/portrait.jpg);"></div>
                <ul class="profile-box">
                  <li class="profile-item">
                    <div class="profile-title">修改匿稱：</div>
                    <div class="profile-content">
                      <input type="text" placeholder="請輸入新匿稱">
                    </div>
                  </li>
                  <li class="profile-item">
                    <div class="profile-title">修改密碼：</div>
                    <div class="profile-content">
                      <input type="password" placeholder="輸入新密碼">
                    </div>
                  </li>
                  <li class="profile-item">
                    <div class="profile-title">再次確認：</div>
                    <div class="profile-content">
                      <input type="password" placeholder="確認新密碼">
                    </div>
                  </li>
                </ul>
                <button class="btn layout-btn profile-btn is-giveup" type="button">放棄修改</button>
                <button class="btn layout-btn profile-btn" type="button">確定修改</button>
                <button class="btn layout-btn profile-btn is-pic" type="button">修改大頭照</button>
              </div>
            </div>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <h3>最新消息內文頁</h3>
            <div class="layout-main layout-deco-title"><?php include "html_model/uikit/aside-lb-open.html";?>
              <div class="sectionTitle text-center color-5 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>最新消息</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <div class="post-titlebox">
                <p class="post-titlebox-p">【新活動開放報名】</p>
              </div>
              <div class="post-time">2019-01-26 01:23</div>
              <div class="post-contbox">今日台南、高雄、嘉義 「看！我是馬戲團小明星」、「馬戲團出遊趣」<img src="img/community/ad.jpg"></div>
              <div class="post-btnbox">
                <button class="btn layout-btn layout-btn-sm is-left" type="button">返回例表</button>
                <button class="btn layout-btn layout-btn-sm is-border is-right" type="button">上一篇</button>
                <button class="btn layout-btn layout-btn-sm is-border is-right" type="button">下一篇</button>
              </div>
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
      <script src="js/mypage.js"></script>
      <script>
        $(function(){
        $(".art-list-f2-item").eq(0).find(".art-list-f2-link").addClass("now");
        // ^ 演示用，請參考
        });
      </script>
    </div>
  </body>
</html>