<!DOCTYPE html>
<html lang="ko">

<head>
	<?php include "html_model/head.html";?>
	<!-- CSS FRO THIS PAGE ONLY -->
	<link rel="stylesheet" href="css/eventCoupon_kr.css">
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
					<?php include "html_model/header/header-2-kr.html";?>
				</div>
				<!-- ====================================
				——— BREAD CRUMB 
				===================================== -->
				<div class="layout-breadcrumb-box">
					<div class="container">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb text-truncate">
								<li class="breadcrumb-item">
									<a href="#">index</a>
								</li>
								<li class="breadcrumb-item">
									<a href="">My WFC</a>
								</li>
								<li class="breadcrumb-item">
									<a href="">My Page</a>
								</li>
								<li class="breadcrumb-item">
									Event Coupon detail
								</li>
							</ol>
						</nav>
					</div>
				</div>
			</nav>
		</header>
		<div class="container container-main container-col-2">
			<div class="row">
				<div class="col-xs-12 col-xs-12 col-md-3 sticky-top aside-lb">
					<div class="panel-heading bg-color-5 border-color-5">
						<h3 class="panel-title">My Page</h3>
						<div class="aside-lb-close">x</div>
					</div>
					<?php include "html_model/_mywfc_kr/mypage-aside.html";?>
					<script>
						// 此 js 為 demo 用，請刪除
						$(".art-list-f2").find(".art-list-f2-item").eq(5).find(".art-list-f2-link").addClass("now");
					</script>
				</div>
				<div class="col-xs-12 col-xs-12 col-md-9">
					<div class="layout-main-card">
					<?php include "html_model/uikit/aside-lb-open.html";?>
						<div class="sectionTitle text-center color-5 mt-0">
							<h2><!-- h2 only -->
								<span class="shape shape-left"></span>
								<span>Event Coupon detail</span>
								<span class="shape shape-right"></span>
							</h2>
						</div>
						<!--
						========================
						== LAYOUT CARD
						========================
						상태 : 가능
						01 주말클럽이벤트참석회쿠폰 x 6 장 / 무료이벤트참석 / 1부모 2자녀
						발행일자 : 2017.12.19
						사용가능기간 : 2018.03.28 ~ 2018.12.31
						=================================================
						狀態 : 可用
						01 憂患券名稱 x 6 張 / 獲得方式 / 可使用人次 
						券註冊日期 :
						券有效期限 :
						-->
						<ul class="layout-card">
							<?php include "html_model/_mywfc_kr/ec-card-item.html"?>
						</ul>
						<div class="pagerArea text-center color-5">
							<?php include "html_model/uikit/pager-item.html";?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include "html_model/footer-kr.html";?>
		<?php include "html_model/floating-ui.html";?>
		<?php include "html_model/tabmenu-kr.html";?>
	</div>
	<?php include "html_model/js-for-all.html";?>
	<!-- JS FOR THIS PAGE ONLY -->
	<script src="js/tmpAsideLb.js"></script>
	<script src="js/statePaddingShare.js"></script>
</body>

</html>