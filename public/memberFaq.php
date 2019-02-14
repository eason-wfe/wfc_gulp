<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link rel="stylesheet" href="css/memberFaq.css">
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
                  <li class="breadcrumb-item">會員須知</li>
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
            <div class="layout-main layout-deco-title"><?php include "html_model/uikit/aside-lb-open.html";?>
              <!-- LEVEL 1-->
              <div class="sectionTitle text-center color-5 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>會員須知</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <ul class="faqbox">
                <li class="faqbox-item">
                  <div class="faqbox-que is-first">
                    <div class="faqbox-idx icon-1">Q 1</div>
                    <div class="faqbox-title">如何成為「寰宇家庭俱樂部會員」？</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">只要您在購買產品後一個月內辦妥自動轉帳授權支付會員的手續，便能成為「寰宇家庭俱樂部」會員，在會員期到期之前，寰宇家庭將發送簡訊及Email續約通知，提醒您有關會員續約的細節，請您務必詳讀。若有任何疑問，歡迎來電客服中心洽詢。以免影響您的權益。<br>★ 寰宇家庭俱樂部會員所想有的權益與服務，僅限會員家庭之基本成員使用。<br>★ 為確保會員與所有會員權益，寰宇家庭將保留對會員篩選之權利。<br><span class="is-hl-1">★ 會員資格(含一般續約、預付續約等之會員)不得私下轉讓。如有違反，本公司有權取消其會員資格，且概不退還任何費用。若因會員私下轉讓，供他人使用產品更換等會員權益，以致造成本公司之損失，本公司得要求該會員賠償。</span><br>★ 為提供更好的服務，寰宇家庭保有更新服務內容的權利。</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-2">Q 2</div>
                    <div class="faqbox-title">會員資料更新</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">為維護您的權益與確保您個人資料的完整性，如欲新增小朋友資料或變更地址、電話等基本資料時，請提供相關證明文件，切勿請他人代為處理。</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-3">Q 3</div>
                    <div class="faqbox-title">自動轉帳相關問題</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">為避免因為忘記繳交會員費而影響您的權益，使用「自動轉帳」是您最好的選擇，歡迎致電客服中心索取「自動轉帳授權書」。<br>★ 當您的信用卡到期或欲變更自動轉帳資料時，請至寰宇家庭網站中的「約定轉帳」更新信用卡資料。<br>★ 會員轉帳未能成功，且未接到您更新資料的訊息時，轉帳系統會中ˋ段您的會員資格。<br>★ 凡中斷寰宇家庭俱樂部會員資格者，如欲重新加入會員，須至少繳付一年會費，寰宇家庭同時保留修改之權利。</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-4">Q 4</div>
                    <div class="faqbox-title">電話美語服務</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con">「Face Call」與「電話美語」為二擇一服務，以家庭為單位，Face Call服務須為30天以上放可切換。<br>「Face Call」為不限時間，不限地點，不限次數的服務。<br>「電話美語」時段：<br>日間：星期三14:00~18:00，晚間：星期一至星期四18:00~21:00<br>(如遇國定假日或天災將暫停服務，不另行通知加補。)<br>預約報名時間：每週一~四，電話美語日，上午9:00，網站/APP開放預約，額滿為止。<br>即時報名時間：每週一、三，電話美語服務時間，至晚上20:45截止。</div>
                  </div>
                </li>
                <li class="faqbox-item">
                  <div class="faqbox-que">
                    <div class="faqbox-idx icon-5">Q 5</div>
                    <div class="faqbox-title">活動參加辦法</div>
                  </div>
                  <div class="faqbox-ans">
                    <div class="faqbox-con"><b>1.	ATM繳費方式：</b>請於報名後七日內（含假日），以ATM轉帳完成繳款。若逾期未繳者，系統將取消該筆資料。【銀行代號：807（永豐銀行）轉入帳號：8664-會員編號後六碼-0000】，範例：D123456，轉入帳號：8664-123456-0000（S編號不適用）。<br><b>2.	其他注意事項：</b>
                      <div class="layout-content ml-3">(1) 請攜帶會員卡及身分證件報到入場，不接受現場報名。<br>(2) 活動日期、時間及地點如與雜誌刊登不符，請以網路、APP報名系統為主。更多場次資訊請見俱樂部網站、APP。<br>(3) 請來電新增常用心相，活動預習單（含交通資訊）將於活動繳費成功後Email至您的信箱。<br>(4)	基於活動品質考量，寰宇家庭保有增刪活動之權利。<br>(5)	<span class="is-hl-1">為確保現場活動品質，活動開始前七日（不含當日），不接受取消報名；活動當日因故缺席者，視同放棄，不得延至其他場次或其他活動。</span><br>(6)	若您報名的活動適用CAP優惠專案，在活動日前成功繳交CAP作業，可享每位折抵NT100元的優惠。<br>● <span class="is-hl-1">美語嘉年華</span>演出前20分鐘，表演人員將與觀眾近距離互動及簽名拍照！會員可於表演進行中拍照，但以不使用閃光燈、不影響他人觀看為原則；表演結束後，歡迎至場外與Q版表演人員背板拍照留念！<span class="is-hl-1">為維護智慧財產權，全場禁止錄影。</span><br>(7)	本公司活動現場隨機進行拍攝的影音照片，因作業需求可能公開發表使用，會員如有疑慮，歡迎告知。</div>
                    </div>
                  </div>
                </li>
              </ul>
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
      <script src="js/faqbox.js" type="text/javascript"></script>
      <script>
        $(function(){
        	$(".art-list-f2-item").eq(4).find(".art-list-f2-link").addClass("now");
        	// ^ 演示用，請參考
        	setTimeout(function(){
        		$(".is-first").addClass("is-open").siblings().slideDown(200);
        	},300);
        });
      </script>
    </div>
  </body>
</html>