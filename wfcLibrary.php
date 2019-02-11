<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
	<?php include "html_model/head.html";?>
	<!-- CSS FRO THIS PAGE ONLY -->
	<link href="assets/plugins/selectbox/select_option1.css" rel="stylesheet" type="text/css">
	<link href="css/wfcLibrary.css" rel="stylesheet">
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
									WF Club Library
								</li>
							</ol>
						</nav>
					</div>
				</div>
			</nav>
		</header>
		<!-- ====================================
		——— CONTAINER STR
		===================================== -->
		<div class="container container-main container-col-1">
			<div class="row">
				<div class="layout-col-12">
					<div class="layout-main">
						<div class="sectionTitle text-center color-2 mt-0">
							<h2>
								<span class="shape shape-left"></span>
								<span>WF Club Library</span>
								<span class="shape shape-right"></span>
							</h2>
						</div>
						<img src="img/wfclibrary/library.jpg">
						<h3 class="layout-title-level-3 icon1 mt-0">WF Club Library 是什麼?</h3>
						<div class="layout-content mb-4">
							WF Club Library為「寰宇家庭俱樂部」與美國「Highlights出版社」合作的服務。Highlights出版社創於 1946 年，是美國專業益智類童書出版社，產品被教育工作者所推崇，也深受家長們的信任，以及孩子們的喜愛，迄今已有70多年的歷史。「Highlights出版社」是美國兒童最熟悉的出版商。 在WF Club Library中，「寰宇家庭俱樂部」收藏了經由資深第二外語學者專家從「Highlights出版社」精選出的電子書，提供給您隨時觀看使用。
						</div>
						<hr>
						<hr>
						<hr>
						<hr>
						<hr>
						<h3>v 年資己達標顯示此 v</h3>
						<h3 class="layout-title-level-3 icon2 mt-0">專屬館藏資料庫：</h3>
						<div class="hight-light">
							<div class="height-light-box">
								<span class="first">“</span>
									每位孩子都有一個專屬館藏資料庫。 請先選擇孩子的名字後，進入WF Club Library。
								<span class="second">”</span>	
							</div>
						</div>
						<div class="layout-content">
							<ol>
								<li>針對加入俱樂部一定會員期以上的家庭，提供已有美語基礎的孩子延伸學習的服務。此服務將取代每年的兒童節禮及聖誕節禮物。書庫中所有藏書，皆經由寰宇家庭根據孩童學習第二外語之需求重新錄音，並提供不同的速度選擇，讓閱讀更有趣。</li>
								<li>每月第一個星期五4:00-7:30為系統維護時間，將暫停服務。</li>
							</ol>	
						</div>
						<div class="wfcl-login">
							<div class="dropGeneral roundTwo layout-drop-sm">
								<select class="select-drop">
									<option value="0">歐陽大明</option>
									<option value="1">歐陽曉英</option>
								</select>
							</div>
							<button type="button" class="btn layout-btn btn-block color-2">
								登入 WF Club Library
							</button>	
						</div>
						<div class="wfcl-clear"></div>
						<h3 class="layout-title-level-3 icon4">其它登入方式：</h3>
						<div class="layout-content">
							請點選適合您裝置的連結下載WF Club Library APP :
							<div class="wfcl-btn">
								<a href="" class="wfcl-link"><img src="img/wfclibrary/btn_android.png"></a>
								<a href="" class="wfcl-link"><img src="img/wfclibrary/btn_ios.png"></a>
							</div>
						</div>
						<hr>
						<hr>
						<hr>
						<hr>
						<hr>
						<h3>v 年資未達標顯示此 v</h3>
						<div class="hight-light">
							<div class="height-light-box">
								<span class="first">“</span>
									很抱歉，您的會員期尚未達到可以使用此服務的標準。您也可選擇另行付費，提早使用此服務，欲知詳情請線上客服留言或洽客服中心，我們將盡速為您解答。
								<span class="second">”</span>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include "html_model/footer.html";?>
		<?php include "html_model/floating-ui.html";?>
		<?php include "html_model/tabmenu.html";?>
	</div>

	<?php include "html_model/js-for-all.html";?>
	<!-- JS FOR THIS PAGE ONLY -->
	<script>
		$(function(){
			$(".select-drop").selectbox();
		});
	</script>
</body>

</html>