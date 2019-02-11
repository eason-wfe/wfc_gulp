<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
	<?php include "html_model/head.html";?>
	<!-- CSS FRO THIS PAGE ONLY -->
	<link href="assets/plugins/selectbox/select_option1.css" rel="stylesheet">
	<link href="css/actSignUp.css" rel="stylesheet" type="text/css">
</head>

<body class="body-wrapper">
	<!--loaded-->
	<div class="main-wrapper">
		<!-- ====================================
		——— HEADER
		===================================== -->
		<header id="pageTop" class="header-wrapper">
			<?php include "html_model/header/header-1.html";?>
			<!-- NAVBAR -->
			<nav id="menuBar" class="navbar navbar-default lightHeader" role="navigation">
				<div class="container">
					<?php include "html_model/header/header-2.html";?>
				</div>
				<!-- ====================================
				——— BREAD CRUMB 
				===================================== -->
				<div class="layout-breadcrumb-box">
					<div class="container">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb text-truncate">
								<li class="breadcrumb-item">
									<a href="#">首頁</a>
								</li>
								<li class="breadcrumb-item">
									<a href="">xxxx</a>
								</li>
								<li class="breadcrumb-item">
									( 請依下方註解變化 )
								</li>
							</ol>
						</nav>
					</div>
				</div>
			</nav>
		</header>
		<!-- ====================================
		——— CONTAINER STEP-1
		===================================== -->
		<div class="container container-main container-col-1 act-step1">
			v step1 breadcrumb : 首頁 > 活動報名 > 青蛙與 Pompom 公主
			<div class="row">
				<div class="layout-col-12">
					<div class="layout-main layout-box-shadow">
						<?php include "html_model/activity/act-titlebox.html";?>
						<script>
							$('.act-state').removeClass('act-state-sm');
							// [^ 註 ^]
							// 針對以上 include 的 html 片段矯正
							// 實際作業請直接在該 tag 增減 class
						</script>
					</div>
					<div class="layout-main layout-box-shadow">
						<h3 class=" layout-title-level-3 mt-0 color-1">活動內容</h3>
						<div class="layout-content">
							生活中有那些不同的交通方式呢？我們可以開車四處走走，也可以搭火車到目的地，甚至還能搭飛機到各國旅遊呢！
							互動式的投影動畫，佐以美語叔叔阿姨專業的說故事技巧，讓孩子們不受空間限制，彷彿身在其中，跟著Froggy和Bunny一起體驗許多美好的事物！
						</div>
						<h3 class=" layout-title-level-3 color-1">活動費用</h3>
						<div class="layout-content">每位小孩NT$500元，父母免費，報名兩位小孩（含）以上者，第二位小孩一歲以下免費（仍須報名，以活動日期評定），活動適用CAP優惠專案。</div>
						<h3 class=" layout-title-level-3 color-1">攜帶教具</h3>
						<div class="layout-content">
							蘋果、蜜蜂、大免子、鳥、牛、狗、母子鴨、青蛙、青蛙毛巾、蟲
							<div class="act-toy">
								<img class="act-toy-img" src="img/activity/toy/toy-1.jpg">
								<img class="act-toy-img" src="img/activity/toy/toy-2.jpg">
								<img class="act-toy-img" src="img/activity/toy/toy-3.jpg">
								<img class="act-toy-img" src="img/activity/toy/toy-4.jpg">
								<img class="act-toy-img" src="img/activity/toy/toy-5.jpg">
								<img class="act-toy-img" src="img/activity/toy/toy-6.jpg">
								<img class="act-toy-img" src="img/activity/toy/toy-7.jpg">
								<img class="act-toy-img" src="img/activity/toy/toy-8.jpg">
								<img class="act-toy-img" src="img/activity/toy/toy-9.jpg">
								<img class="act-toy-img" src="img/activity/toy/toy-10.jpg">
							</div>
						</div>
						<div class="act-attention">
							<h3 class=" layout-title-level-3 color-1">注意事項</h3>
							<div class="act-attention-arrow"> </div>
						</div>
						<div class="act-attention-content">
							<?php include "html_model/activity/act-attention.html";?>
						</div>
					</div>
					<div class="layout-main layout-box-shadow">
						<div class="act-layout">
							<div class="act-layout-left">
								<h3 class=" layout-title-level-3 mt-0 color-1">Songs 歌曲</h3>
								<table class="table act-table-course">
									<tbody>
										<tr>
											<td>Baby's in the Bathtub</td>
											<td>PA1 #05</td>
										</tr>
										<tr>
											<td>Wiggly Worm </td>
											<td>PA2 #02</td>
										</tr>
										<tr>
											<td>I Like to Take a Bath</td>
											<td>PA2 #05</td>
										</tr>
										<tr>
											<td>Spread Your Arms </td>
											<td>PA2 #10 </td>
										</tr>
										<tr>
											<td>Scrub, Scrub, Scrub </td>
											<td>SA2 #27</td>
										</tr>
									</tbody>
								</table>
								<ul class="act-prepare-bookbox">
									<li class="act-prepare-bookitem">SA!-Sing Along! 歌唱教學系列</li>
									<li class="act-prepare-bookitem">PA!-Play Along! 跟著玩系列</li>
									<li class="act-prepare-bookitem">LA!-Listen Along! 系列</li>
									<li class="act-prepare-bookitem">L Set-Let’s Play 系列</li>
								</ul>
							</div>
							<div class="act-layout-right">
								<h3 class=" layout-title-level-3 color-1">Vocabulary 活動單字</h3>
								<ul class="act-prepare-sound">
									<li class="act-prepare-sound-item">
										<a class="act-prepare-sound-link" href="">car</a>
									</li>
									<li class="act-prepare-sound-item">
										<a class="act-prepare-sound-link" href="">train</a>
									</li>
									<li class="act-prepare-sound-item">
										<a class="act-prepare-sound-link" href="">airplane</a>
									</li>
									<li class="act-prepare-sound-item">
										<a class="act-prepare-sound-link" href="">boat</a>
									</li>
									<li class="act-prepare-sound-item">
										<a class="act-prepare-sound-link" href="">bus</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="layout-main layout-box-shadow">
						<h3 class=" layout-title-level-3 mt-0 color-1">活動地點</h3>
						<div class="layout-content act-areabox-adsbox">
							<div class="act-areabox-struc">台北_9樓大會議室</div>
							<div class="act-areabox-address">台北市松山區八德路3 段32號9樓</div>
							<a class="act-areabox-map" href="https://goo.gl/maps/xXiKnqG8Gy22" target="_blank"></a>
						</div>
						<h3 class=" layout-title-level-3 color-1">搭乘捷運</h3>
						<div class="layout-content">
							2號出口出站 - 直行右轉新光路 - 沿新光路，步行約8-10分鐘即可到達目的地。
						</div>
						<h3 class=" layout-title-level-3 color-1">搭乘公車</h3>
						<div class="layout-content">
							迄站 <大遠百百貨 / 捷運三多商圈站 / 85大樓> 12、100、70、83、紅16、紅18、紅21、三多幹線，抵達迄站後沿新光路，步行約8-10分鐘即可抵達目的地。
						</div>
						<h3 class=" layout-title-level-3 color-1">自行開車</h3>
						<div class="layout-content">
							經由國道一號 - 於高雄端出口下中正交流道 - 直走右轉三多一路，車程約15分鐘 - 左轉自強三路 - 右轉新光路即可抵達目的地。
						</div>
						<h3 class=" layout-title-level-3 color-1">停車資訊</h3>
						<div class="layout-content">
							高雄大遠百平面及地下停車場（每小時50元）約800個停車位。
						</div>
					</div>
					<div class="layout-main layout-box-shadow layout-section-first">
						<!--
						[^ 註 ^]
						規則: tag .layout-main + class .layout-first-section
						只用在第一組 .layout-main , 目的在加載 js 效果
						手機版預設第一組展開 , 非第一組預設收闔
						( 固非第一組不需要加此 class )
						-->
						<div class="act-section">
							<h3 class=" layout-title-level-3 mt-0 color-1">場次資訊</h3>
							<div class="dropGeneral roundTwo border-color-1 layout-drop-sm">
								<!--
								[^ 註 ^]
								規則：tag .dropGeneral 加 class .layout-drop-sm
								使下拉選單變成小號尺寸
								-->
								<select class="select-drop">
									<option value="0">全部地區</option>
									<option value="1">台北</option>
									<option value="2">新竹</option>
									<option value="3">高雄</option>
								</select>
							</div>
						</div>
						<?php include "html_model/activity/act-areabox.html";?>
					</div>
					<div class="layout-main layout-box-shadow">
						<?php include "html_model/activity/act-areabox.html";?>
					</div>
					<div class="layout-main layout-box-shadow">
						<?php include "html_model/activity/act-areabox.html";?>
					</div>
					<!-- <div class="layout-main layout-box-shadow"></div> -->
				</div>
			</div>
		</div>
		<!-- ====================================
		——— CONTAINER STEP-2
		===================================== -->
		<div class="container container-main container-col-1 act-step2">
			v step2 breadcrumb : 首頁 > 活動報名 > 青蛙與 Pompom 公主 > 報名活動 / 候補活動
			<div class="row">
				<div class="layout-col-12">
					<div class="layout-main layout-box-shadow">
						<?php include "html_model/activity/act-titlebox.html";?>
					</div>
					<div class="layout-main layout-box-shadow">
						<div class="act-layout">
							<div class="act-layout-left">
								<h3 class=" layout-title-level-3 mt-0 color-1">場次時間</h3>
								<div class="layout-content">2018/09/16(日)15:00~16:00</div>
								<!---->
								<h3 class=" layout-title-level-3 color-1">活動地點</h3>
								<div class="layout-content act-areabox-adsbox">
									<div class="act-areabox-struc">台北_9樓大會議室</div>
									<div class="act-areabox-address">台北市松山區八德路3 段32號9樓</div>
									<a class="act-areabox-map" href="https://goo.gl/maps/xXiKnqG8Gy22" target="_blank"></a>
								</div>
								<!---->
								<h3 class=" layout-title-level-3 color-1">每人費用</h3>
								<div class="layout-content">
									<table class="table act-price">
										<thead>
											<tr class="act-price-thead">
												<th class="act-price-col-1">
													<span class="act-price-mobi-br">每人</span>
													<span class="act-price-mobi-br">費用表</span>
												</th>
												<th class="act-price-col-2">費用</th>
												<th class="act-price-col-3">
													<span class="act-price-mobi-br">CAP</span>
													<span class="act-price-mobi-br">優惠價</span>
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th>會員</th>
												<td class="act-price-num">0</td>
												<td class="act-price-num">-</td>
											</tr>
											<tr>
												<th>第二位大人</th>
												<td class="act-price-num">(wfc未定)</td>
												<td class="act-price-num">(wfc未定)</td>
											</tr>
											<tr>
												<th>小孩</th>
												<td class="act-price-num">500</td>
												<td class="act-price-num">400</td>
											</tr>
											<tr>
												<th>
													<span class="act-price-mobi-br">第二位小孩</span>
													<span class="act-price-mobi-br">一歲以下</span>
												</th>
												<td class="act-price-num">免費</td>
												<td class="act-price-num">0</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!---->
								<h3 class=" layout-title-level-3 color-1">CAP 優惠價</h3>
								<div class="layout-content">符合</div>
							</div>
							<div class="act-layout-right">
								<h3 class=" layout-title-level-3 color-1">選擇大人人數</h3>
								<div class="layout-content act-parent">
									<div class="uikit-radio">
										<input type="radio" name="parent" class="uikit-radio-input" />
										<label class="uikit-radio-label">1 位大人 ( $500 )</label>
									</div>
									<div class="uikit-radio">
										<input type="radio" name="parent" class="uikit-radio-input" />
										<label class="uikit-radio-label">2 位大人 ( $1,000 )</label>
									</div>
								</div>
								<!---->
								<h3 class=" layout-title-level-3 color-1">選擇小孩</h3>
								<div class="layout-content">
									<div class="uikit-checkbox">
										<input type="checkbox" class="uikit-checkbox-input">
										<label class="uikit-checkbox-label">歐陽小明 ( 1 歲 )( $500 )</label>
									</div>
									<div class="uikit-checkbox">
										<input type="checkbox" class="uikit-checkbox-input">
										<label class="uikit-checkbox-label">歐陽小新 ( 3 歲 )( $500 )</label>
									</div>
									<div class="uikit-checkbox">
										<input type="checkbox" class="uikit-checkbox-input">
										<label class="uikit-checkbox-label">王大明 ( 11 個月 )( $0 )</label>
									</div>
								</div>
								<!---->
								<h3 class=" layout-title-level-3 color-1">選擇座位</h3><br />
								<button type="button" class="btn btn-sm layout-btn color-1">
									+ 座位查看／劃位
								</button>
								<div class="layout-content">
									<ul class="act-sets">
										<li class="act-sets-item">1樓A區2排2號</li>
										<li class="act-sets-item">1樓A區2排4號</li>
										<li class="act-sets-item">1樓A區2排6號</li>
										<li class="act-sets-item">1樓A區2排8號</li>
										<li class="act-sets-item">1樓A區2排10號</li>
									</ul>
								</div>
								<div class="layout-content">
									<div class="act-donebox act-donebox-strong">
										<p class="act-donebox-p">本次活動報名費用共計</p>
										<p class="act-donebox-p-dark">( CAP優惠價 ) NT $0</p>
										<p class="act-donebox-p">活動保留款餘額抵扣</p>
										<p class="act-donebox-p-dark">NT $0</p>
										<p class="act-donebox-p">尚須繳納的費用</p>
										<p class="act-donebox-p-dark">NT $0</p>
									</div>
									<div class="act-donebox">
										<!--p class="act-donebox-p">
										※若
										<span class="act-donebox-p-dark">本場次有名額釋出</span>或
										<span class="act-donebox-p-dark">本活動有加開場次</span>，將以簡訊通知。
										</p><br/>
										<p class="act-donebox-p">
										※請留意！收到簡訊不代表報名成功，確認報名，請來電客服中心，謝謝！
										</p-->
										<!-- 舊的候補文字 -->
										<p class="act-donebox-p">
											※ 若本場次有名額釋出或本活動有加開場次，將以APP
											<span class="act-donebox-p-dark">推播或簡訊</span>
											通知
										</p><br />
										<p class="act-donebox-p">
											※ 請留意！收到APP
											<span class="act-donebox-p-dark">推播或簡訊</span>
											，不代表報名成功，確認報名，請來電客服中心，謝謝！
										</p>
									</div>
								</div>
								<div class="layout-content">
									<div class="uikit-checkbox">
										<input type="checkbox" class="uikit-checkbox-input">
										<label class="uikit-checkbox-label">發票捐増喜憨兒基金會</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="layout-main layout-box-shadow">
						<div class="act-attention">
							<h3 class=" layout-title-level-3 mt-0 color-1">注意事項</h3>
							<div class="act-attention-arrow"></div>
						</div>
						<div class="act-attention-content">
							<?php include "html_model/activity/act-attention.html";?>
						</div>
					</div>
					<button type="button" class="btn btn-block layout-btn layout-btn-lg color-1">
						確定報名 / 確定候補
					</button>
				</div>
			</div>
		</div>

		<!-- ====================================
		——— CONTAINER STEP-3
		===================================== -->
		<div class="container container-main container-col-1 act-step3">
			v step3 breadcrumb : 首頁 > 活動報名 > 青蛙與 Pompom 公主 > 報名成功 / 候補成功
			<div class="row">
				<div class="layout-col-12">
					<div class="layout-main layout-box-shadow">
						<?php include "html_model/activity/act-titlebox.html";?>
						<script>
							$('.act-state').removeClass('act-state-sm');
							// [^ 註 ^]
							// 針對以上 include 的 html 片段矯正
							// 實際作業請直接在該 tag 增減 class
						</script>
					</div>
					<div class="layout-main layout-box-shadow">
						<div class="act-layout">
							<div class="act-layout-left">
								<h3 class=" layout-title-level-3 mt-0 color-1">場次時間</h3>
								<div class="layout-content">2018/09/16(日)15:00~16:00</div>
								<!---->
								<h3 class=" layout-title-level-3 color-1">活動地點</h3>
								<div class="layout-content act-areabox-adsbox">
									<div class="act-areabox-struc">台北_9樓大會議室</div>
									<div class="act-areabox-address">台北市松山區八德路3 段32號9樓</div>
									<a class="act-areabox-map" href="https://goo.gl/maps/xXiKnqG8Gy22" target="_blank"></a>
								</div>
							</div>
							<div class="act-layout-right">
								<h3 class=" layout-title-level-3 color-1">大人人數</h3>
								<div class="layout-content">2人 ( $1000 )</div>
								<!---->
								<h3 class=" layout-title-level-3 color-1">小孩人數</h3>
								<div class="layout-content">
									歐陽小明 ( 1 歲 ) ( $50 )<br />
									歐陽小新 ( 3 歲 ) ( $50 )
								</div>
								<!---->
								<h3 class=" layout-title-level-3 color-1">第二位小孩 1 歲以下</h3>
								<div class="layout-content">
									王大明 ( 11 個月 ) ( $0 )
								</div>
								<!---->
								<h3 class=" layout-title-level-3 color-1">座位表</h3>
								<div class="layout-content">
									<ul class="act-sets">
										<li class="act-sets-item">1樓A區2排2號</li>
										<li class="act-sets-item">1樓A區2排4號</li>
										<li class="act-sets-item">1樓A區2排6號</li>
										<li class="act-sets-item">1樓A區2排8號</li>
										<li class="act-sets-item">1樓A區2排10號</li>
									</ul>
								</div>
								<!---->
								<h3 class=" layout-title-level-3 color-1">應收 / 己收</h3>
								<div class="layout-content">
									800 / 0
								</div>
							</div>
						</div>
					</div>
					<button type="button" class="btn btn-block layout-btn layout-btn-lg color-1">
						繼續報名
					</button>
				</div>
			</div>
		</div>
		<?php include "html_model/footer.html";?>
		<?php include "html_model/floating-ui.html";?>
		<?php include "html_model/tabmenu.html";?>
	</div>
	<?php include "html_model/js-for-all.html";?>
	<!-- JS FOR THIS PAGE ONLY -->
	<script src="js/actSignUp.js" type="text/javascript"></script>
</body>

</html>