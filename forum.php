<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
	<?php include "html_model/head.html";?>
	<!-- CSS FRO THIS PAGE ONLY -->
	<link rel="stylesheet" href="css/forum.css">
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
									<a href="">會員服務</a>
								</li>
								<li class="breadcrumb-item">
									會員交流園地
								</li>
							</ol>
						</nav>
					</div>
				</div>
			</nav>
		</header>
		<div class="container container-main container-col-2">
			<div class="row">
				<div class="col-md-4 col-lg-3 sticky-top forum-filsort-ui">
					<?php include "html_model/forum/forum-aside.html";?>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
					<div class="layout-main layout-main-intro">
						<div class="sectionTitle text-center color-4 mt-0">
							<h2><!-- h2 only -->
								<span class="shape shape-left"></span>
								<span>會員交流園地</span>
								<span class="shape shape-right"></span>
							</h2>
						</div>
						<div class="layout-content">
							「會員交流園地」是寰宇家庭俱樂部會員專屬的社群網站。<br/>
							爸爸、媽媽可以透過發表或分享美語學習相關的各種訊息，如何使用寰宇家庭俱樂部的各種服務，使用DWE教材的經驗、煩惱、艱辛、快樂及美好的回憶，讓我們的美語學習的生活變得豐富有趣。<br/>
							<div class="mt-1">※ 未經許可，「會員交流園地」禁止發佈及轉發未經授權的複製、文字、圖像、影音等。</div>
						</div>
						<div class="forum-fil-day-hot">
							<div class="forum-fil-day-hot-radio">
								<div class="uikit-radio">
									<input type="radio" name="filter" class="uikit-radio-input" checked/>
									<label class="uikit-radio-label">日期排序</label>
								</div>
								<div class="uikit-radio">
									<input type="radio" name="filter" class="uikit-radio-input"/>
									<label class="uikit-radio-label">人氣排序</label>
								</div>
							</div>
							<div class="forum-fil-day-hot-info">
								<div class="forum-fil-day-hot-state">
									* 以下文章依<span class="forum-fil-day-hot-text">「親子學習計畫」</span>主題作分類，並依<span class="forum-fil-day-hot-text">「日期」</span>排序
								</div>
								<a href="" class="forum-filsort-open">
									重新設定文章分類條件 »
								</a>
							</div>
						</div>
					</div>
					<!-- FULL -->
					<div class="layout-main layout-main-full layout-main-card">
						<div class="layout-main-full-bg layout-main-full-right"></div>
						<div class="layout-main-full-inbox">
							<div class="forum-cardbox layout-sharewidth item-234">
								<?php include "html_model/forum/forum-cardbox-item.html";?>
								<?php include "html_model/forum/forum-cardbox-item.html";?>
								<?php include "html_model/forum/forum-cardbox-item.html";?>
								<?php include "html_model/forum/forum-cardbox-item.html";?>
								<?php include "html_model/forum/forum-cardbox-item.html";?>
								<?php include "html_model/forum/forum-cardbox-item.html";?>
								<?php include "html_model/forum/forum-cardbox-item.html";?>
								<?php include "html_model/forum/forum-cardbox-item.html";?>
								<?php include "html_model/forum/forum-cardbox-item.html";?>
								<?php include "html_model/forum/forum-cardbox-item.html";?>
								<?php include "html_model/forum/forum-cardbox-item.html";?>
								<?php include "html_model/forum/forum-cardbox-item.html";?>
							</div>
							<div class="pagerArea text-center color-4">
								<?php include "html_model/uikit/pager-item.html";?>
							</div>
						</div>
					</div>
					<!-- FULL -->
					<div class="layout-main layout-main-full layout-main-post mb-0" id="articleReport">
						<div class="layout-main-full-bg layout-main-full-right"></div>
						<div class="layout-main-full-inbox">
							<div class="sectionTitle text-center color-4 mt-0">
								<h2><!-- h2 only -->
									<span class="shape shape-left"></span>
									<span>發表新文章</span>
									<span class="shape shape-right"></span>
								</h2>
							</div>
							<div class="forum-portrait">
								<div class="forum-portrait-pic" style="background-image: url(img/no_picture.png);"></div>
								<!--
								[^ 註 ^]
								會員沒大頭照，預設圖為 " no_picture "
								-->
								<label class="forum-label">宜靜媽媽</label>
								<select class="forum-control name="" id=""">
									<option>選擇文章分類</option>
									<option disabled>-- 依「討論主題」--</option>
									<option value="">如何使用DWE</option>
									<option value="">電話美語</option>
									<option value="">親子學習計畫</option>
									<option value="">美語活動</option>
									<option value="">新手上路</option>
									<option value="">多媒體學習</option>
									<option value="">其他</option>
									<option disabled>-- 依「地區」 --</option>
									<option value="">台北</option>
									<option value="">桃園</option>
									<option value="">新竹</option>
									<option value="">台中</option>
									<option value="">彰化</option>
									<option value="">嘉義</option>
									<option value="">台南</option>
									<option value="">高雄</option>
									<option disabled>-- 依「年齡」 --</option>
									<option value="">0 ~ 1歲</option>
									<option value="">1 ~ 2歲</option>
									<option value="">2 ~ 4歲</option>
									<option value="">4 ~ 6歲</option>
									<option value="">小學生</option>
									<option value="">DWE Kids</option>
								</select>
							</div>
							<div class="forum-group">
								<label for="" class="forum-label">文章標題</label>
								<input type="text" class="forum-control" placeholder="新文章標題">
							</div>
							<div class="forum-group">
								<label for="" class="forum-label">文章內容</label>
								<textarea class="forum-control" placeholder="新文章內容"></textarea>
							</div>
							<div class="forum-group forum-filebox">
								<div class="">
									<p class="forum-alert-text">發表文章，須最少上傳一張圖片</p> 
									<input type="file" class="forum-file">
									<input type="file" class="forum-file">
									<input type="file" class="forum-file">
								</div>
							</div>
							<div class="forum-submit">
								<a href="#forum-modal" class="forum-submit-lightbox" data-toggle="modal">※ 請務必閱讀發表文章/留言之注意事項</a>
								<button type="submit" class="btn layout-btn layout-btn-md btn-block color-4">
									發表新文章
								</button>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include "html_model/footer.html";?>
		<?php include "html_model/floating-ui.html";?>
		<?php include "html_model/tabmenu.html";?>
		<!-- ====================================
		——— CTA & LIGHTBOX 
		===================================== -->
		<div class="scrolling"><a href="#articleReport" class="forum-cta"></a></div>
		<?php include "html_model/forum/lightbox-forum.html";?>
	</div>
	<?php include "html_model/js-for-all.html";?>
	<!-- JS FOR THIS PAGE ONLY -->
	<script src="js/fullScreen.js"></script>
	<script src="js/forum.js"></script>
</body>

</html>