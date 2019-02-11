<!DOCTYPE html>
<html lang="ko">

<head>
	<?php include "html_model/head.html";?>
	<!-- CSS FRO THIS PAGE ONLY -->
	<link rel="stylesheet" href="assets/plugins/slick/slick.css">
	<link rel="stylesheet" href="assets/plugins/slick/slick-theme.css">
	<link rel="stylesheet" href="css/shop_kr.css">
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
									My Community
								</li>
								<li class="breadcrumb-itme">
									DWE 뽀개기
								</li>
							</ol>
						</nav>
					</div>
				</div>
			</nav>
		</header>
		<div class="container container-main container-col-2">
			<div class="row">
				<div class="col-xs-12 col-xs-12 col-md-3 aside-lb">
					<div class="panel-heading bg-color-4 border-color-4">
						<h3 class="panel-title">WFC Community</h3>
						<div class="aside-lb-close">x</div>
					</div>
					<?php include "html_model/_comm_kr/comm-aside.html";?>
				</div>
				<div class="col-xs-12 col-xs-12 col-md-9">
					<div class="layout-main">
						<?php include "html_model/uikit/aside-lb-open.html";?>
						<div class="sectionTitle text-center color-4 mt-0">
							<h2><!-- h2 only -->
								<span class="shape shape-left"></span>
								<span>
									DWE 뽀개기
								</span>
								<span class="shape shape-right"></span>
							</h2>
						</div>
						<h3 class="layout-title-level-3 icon4">구입 방법：</h3>
						<ol class="mt-2 ml-5">
							<li>원하시는 상품을 옆에 있는 네모 박스를 클릭합니다.</li>
							<li>order now 버튼을 클릭하면 결제창으로 이동합니다.</li>
							<li>물품과 금액을 확인하시고, 결제를 합니다.</li>
						</ol>
					</div>
					<div class="layout-main">
						<h3 class="layout-title-level-3 icon5 mt-0 mb-2">상품의 세부사항은 상품을 클릭하시면 확인 가능합니다 :</h3>
						<ul class="shop layout-sharewidth item-234">
							<?php include "html_model/_comm_kr/shop-item.html";?>
							<?php include "html_model/_comm_kr/shop-item.html";?>
							<?php include "html_model/_comm_kr/shop-item.html";?>
							<?php include "html_model/_comm_kr/shop-item.html";?>
							<?php include "html_model/_comm_kr/shop-item.html";?>
						</ul>
					</div>
					<button type="button" class="btn layout-btn btn-block layout-btn-lg color-4">
						지금 주문하세요
					</button>
					<hr>
					<hr>
					<hr>
					<hr>
					<hr>
					<hr>
					<hr>
					<hr>
					<hr>
					<hr>
					<div class="layout-main-card">
						<?php include "html_model/uikit/aside-lb-open.html";?>
						<div class="sectionTitle text-center color-4 mt-0">
							<h2><!-- h2 only -->
								<span class="shape shape-left"></span>
								<span>
									DWE 뽀개기
								</span>
								<span class="shape shape-right"></span>
							</h2>
						</div>
						<ul class="layout-card">
							<?php include "html_model/_mywfc_kr/sd-card-item.html"?>
						</ul>
						<div class="shop-total">
						합계 : ₩ 50,800
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include "html_model/_comm_kr/shop-lightbox.html";?>
		<?php include "html_model/footer-kr.html";?>
		<?php include "html_model/floating-ui.html";?>
		<?php include "html_model/tabmenu-kr.html";?>
	</div>
	<?php include "html_model/js-for-all.html";?>
	<!-- JS FOR THIS PAGE ONLY -->
	<script src="js/tmpAsideLb.js"></script>
	<script src="js/cloudzoom.js" type="text/javascript"></script>
	<script>
		$(function(){
			$(".art-list-f2-item").eq(4).find(".art-list-f2-link").addClass("now");
			// ^ 此 js 為演示用，請參考 ^
			$(".shop-pic").click(function(){
				$("#dweShop").removeAttr("style");
			}).css({"height": $(".shop-pic").width() * 1 });
			$(".shop .uikit-checkbox-input").click(function(){
				var $parent = $(this).parent().parent();
				if( $(this).is(":checked") ){
					$parent.addClass("is-selected");
				}else{
					$parent.removeClass("is-selected");
				}
			});
		});
	</script>
</body>

</html>