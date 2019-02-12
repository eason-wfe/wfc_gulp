<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head><?php include "html_model/head.html";?>
    <!-- CSS FRO THIS PAGE ONLY-->
    <link rel="stylesheet" href="css/teSignUp.css">
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
                  <li class="breadcrumb-item"><a href="#">美語學習</a></li>
                  <li class="breadcrumb-item"><a href="">電話美語</a></li>
                  <li class="breadcrumb-item">電話美語報名</li>
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
            <div class="layout-main">
              <!-- LEVEL 1-->
              <div class="sectionTitle text-center color-2 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>電話美語報名</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <div class="uikit-checkbox half-width-pc">
                <input class="uikit-checkbox-input" type="checkbox">
                <label class="uikit-checkbox-label">我已詳讀並同意遵守以上注意事項及規則。(請勾選)</label>
              </div>
              <!-- QA-->
              <div class="layout-collapse color-2">
                <h3 class="layout-title-level-3">電話美語報名注意事項及規則</h3>
                <div class="layout-collapse-arrow"> </div>
              </div>
              <div class="layout-collapse-content"><?php include "html_model/te/te-attention.html";?></div>
            </div>
            <div class="layout-main">
              <h3 class="layout-title-level-3 color-te mt-0">現在進行報名的是...</h3>
              <div class="layout-content">
                <div class="uikit-radio signed">
                  <input class="uikit-radio-input" type="radio" name="child">
                  <label class="uikit-radio-label">歐陽O明 English 歐陽O明 English 歐陽O明 English 歐陽O明 English 歐陽O明 English</label>
                </div>
                <div class="uikit-radio">
                  <input class="uikit-radio-input" type="radio" name="child">
                  <label class="uikit-radio-label">歐陽O新 Oyan</label>
                </div>
                <div class="uikit-radio">
                  <input class="uikit-radio-input" type="radio" name="child">
                  <label class="uikit-radio-label">王O明 DarMin</label>
                </div>
              </div>
              <!-- -->
              <h3 class="layout-title-level-3 color-te">請選擇時段</h3>
              <div class="layout-content">
                <div class="uikit-radio">
                  <input class="uikit-radio-input" type="radio" name="time">
                  <label class="uikit-radio-label">預約下午 6:00~6:30</label>
                </div>
                <div class="uikit-radio">
                  <input class="uikit-radio-input" type="radio" name="time">
                  <label class="uikit-radio-label">預約下午 6:30~7:00</label>
                </div>
                <div class="uikit-radio">
                  <input class="uikit-radio-input" type="radio" name="time">
                  <label class="uikit-radio-label">預約下午 7:00~7:30</label>
                </div>
                <div class="uikit-radio">
                  <input class="uikit-radio-input" type="radio" name="time">
                  <label class="uikit-radio-label">預約下午 7:30~8:00</label>
                </div>
                <div class="uikit-radio">
                  <input class="uikit-radio-input" type="radio" name="time">
                  <label class="uikit-radio-label">預約下午 8:00~8:30 (額滿)</label>
                </div>
                <div class="uikit-radio">
                  <input class="uikit-radio-input" type="radio" name="time">
                  <label class="uikit-radio-label">預約下午 8:30~9:00 (額滿)</label>
                </div>
              </div>
              <!-- -->
              <h3 class="layout-title-level-3 color-te">請選擇回電電話</h3>
              <div class="layout-content">
                <div class="uikit-radio">
                  <input class="uikit-radio-input" type="radio" name="tel">
                  <label class="uikit-radio-label">聯絡電話:02-26921073</label>
                </div>
                <div class="uikit-radio">
                  <input class="uikit-radio-input" type="radio" name="tel">
                  <label class="uikit-radio-label">住家電話:02-26921073</label>
                </div>
                <div class="uikit-radio">
                  <input class="uikit-radio-input" type="radio" name="tel">
                  <label class="uikit-radio-label">手機號碼:0922580086</label>
                </div>
                <div class="uikit-radio">
                  <input class="uikit-radio-input" type="radio" name="tel">
                  <label class="uikit-radio-label">其他電話
                    <!-- <input type="phone" class="radio-input">-->
                  </label>
                </div>
              </div>
              <h3 class="layout-title-level-3 color-2 mt-1 te-tel-other-p">若勾選「其它電話」，請於輸入框內填入您的聯絡資訊：</h3>
              <input class="te-tel-other-num" type="text" placeholder="其它電話">
            </div>
            <button class="btn layout-btn btn-block layout-btn-lg color-2 half-width-pc" type="button">下一步</button>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <div class="layout-main">
              <!-- LEVEL 1-->
              <div class="sectionTitle text-center color-2 mt-0">
                <h2>
                  <!-- h2 only--><span class="shape shape-left"></span><span>電話美語報名</span><span class="shape shape-right"></span>
                </h2>
              </div>
              <!-- LEVEL 2-->
              <h3 class="layout-title-level-3 color-2 mt-0">現在進行報名的是...</h3>
              <div class="layout-content"><span class="te-name-ch">歐O小明</span><span class="te-name-en">EnglishName</span></div>
              <!-- LEVEL 2-->
              <h3 class="layout-title-level-3 color-2">您選擇的課程</h3>
              <table class="table te-selected">
                <tbody>
                  <tr class="te-selected-song">
                    <td>
                      <div class="te-selected-icon"></div>
                    </td>
                    <td>【歌曲練習】</td>
                    <td>Baby's in the Bathtub</td>
                    <td>PA1 #05</td>
                    <td>
                      <button class="btn btn-sm layout-btn" type="button">取消</button>
                    </td>
                  </tr>
                  <tr class="te-selected-book">
                    <td>
                      <div class="te-selected-icon"></div>
                    </td>
                    <td>【課程練習】</td>
                    <td>Baby's in the Bathtub</td>
                    <td>PA1 #05</td>
                    <td>
                      <button class="btn btn-sm layout-btn" type="button">取消</button>
                    </td>
                  </tr>
                  <tr class="te-selected-right">
                    <td>
                      <div class="te-selected-icon"></div>
                    </td>
                    <td>【對錯練習】</td>
                    <td>Baby's in the Bathtub</td>
                    <td>PA1 #05</td>
                    <td>
                      <button class="btn btn-sm layout-btn" type="button">取消</button>
                    </td>
                  </tr>
                  <tr class="te-selected-reading">
                    <td>
                      <div class="te-selected-icon"></div>
                    </td>
                    <td>【朗讀練習】</td>
                    <td>Wiggly Worm </td>
                    <td>PA2 #02</td>
                    <td>
                      <button class="btn btn-sm layout-btn" type="button">取消</button>
                    </td>
                  </tr>
                  <tr class="te-selected-fc">
                    <td>
                      <div class="te-selected-icon"></div>
                    </td>
                    <td>【自由對話】</td>
                    <td>I Like to Take a Bath</td>
                    <td>PA2 #05</td>
                    <td>
                      <button class="btn btn-sm layout-btn" type="button">取消</button>
                    </td>
                  </tr>
                  <tr class="te-selected-cap">
                    <!--
                    [^ 註 ^]
                    規則：在 tr tag 加 不同 class 來改變不同 te 選項的視覺
                    .te-selected-song
                    .te-selected-book
                    .te-selected-right
                    .te-selected-reading
                    .te-selected-fc
                    .te-selected-cap
                    -->
                    <td>
                      <div class="te-selected-icon"></div>
                    </td>
                    <td>【CAP 練習】</td>
                    <td>I Like to Take a Bath</td>
                    <td>PA2 #05</td>
                    <td>
                      <button class="btn btn-sm layout-btn" type="button">取消</button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <button class="btn layout-btn btn-block layout-btn-lg color-2" type="button">確定</button>
            </div>
            <div class="layout-main">
              <h3 class="layout-title-level-3 color-2 mt-0 mb-2">選擇您的練習課程</h3>
              <div class="tstab">
                <div class="uikit-radio is-song">
                  <input class="uikit-radio-input" type="radio" name="tab" checked="">
                  <label class="uikit-radio-label"><img src="img/te/te_song.png">Song Lessons 歌曲練習</label>
                </div>
                <div class="uikit-radio is-book">
                  <input class="uikit-radio-input" type="radio" name="tab">
                  <label class="uikit-radio-label"><img src="img/te/te_book.png">Book Lessons 課程練習</label>
                </div>
                <div class="uikit-radio is-right">
                  <input class="uikit-radio-input" type="radio" name="tab">
                  <label class="uikit-radio-label"><img src="img/te/te_right.png">Right Light Lessons 對錯練習</label>
                </div>
                <div class="uikit-radio is-reading">
                  <input class="uikit-radio-input" type="radio" name="tab">
                  <label class="uikit-radio-label"><img src="img/te/te_reading.png">Reading Lessons 朗讀練習</label>
                </div>
                <div class="uikit-radio is-fc">
                  <input class="uikit-radio-input" type="radio" name="tab">
                  <label class="uikit-radio-label"><img src="img/te/te_fc.png">Free Conversation 自由對話</label>
                </div>
                <div class="uikit-radio is-cap">
                  <input class="uikit-radio-input" type="radio" name="tab">
                  <label class="uikit-radio-label"><img src="img/te/te_cap.png">CAP Lessons CAP 練習</label>
                </div>
              </div>
              <div class="te-section-box te-section-box-song">
                <!--
                [^ 註 ^]
                依上方 tab 的點擊，換成以下 class
                .te-section-box-song
                .te-section-box-book
                .te-section-box-right
                .te-section-box-reading
                .te-section-box-fc
                .te-section-box-cap
                -->
                <div class="te-search">
                  <input class="te-search-input" type="text" placeholder="關鍵字搜尋">
                </div>
                <table class="table te-section">
                  <thead>
                    <tr>
                      <th>選取</th>
                      <th colspan="2">課程及內容</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="is-cap-1">
                      <!--
                      [^ 註 ^]
                      用顏色分類該列所屬不同 CAP 書本
                      is-cap-1 ~ 5
                      -->
                      <td>
                        <button class="btn btn-sm layout-btn" type="button">選取</button>
                      </td>
                      <td>【歌曲練習】Scrub, Scrub, Scrub </td>
                      <td>SA2 #27</td>
                    </tr>
                    <tr class="is-cap-2">
                      <td>
                        <button class="btn btn-sm layout-btn" type="button">選取</button>
                      </td>
                      <td>【歌曲練習】Baby's in the Bathtub</td>
                      <td>PA1 #05</td>
                    </tr>
                    <tr class="is-cap-3">
                      <td>
                        <button class="btn btn-sm layout-btn" type="button">選取</button>
                      </td>
                      <td>【歌曲練習】Wiggly Worm </td>
                      <td>PA2 #02</td>
                    </tr>
                    <tr class="is-cap-4">
                      <td>
                        <button class="btn btn-sm layout-btn" type="button">選取</button>
                      </td>
                      <td>【歌曲練習】I Like to Take a Bath</td>
                      <td>PA2 #05</td>
                    </tr>
                    <tr class="is-cap-5">
                      <td>
                        <button class="btn btn-sm layout-btn" type="button">選取</button>
                      </td>
                      <td>【歌曲練習】Spread Your Arms </td>
                      <td>PA2 #10 </td>
                    </tr>
                  </tbody>
                </table>
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
      <script src="js/teSignUp1.js"></script>
    </div>
  </body>
</html>