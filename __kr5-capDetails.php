<!DOCTYPE html>
<html lang="ko">

<head>
	<?php include "html_model/head.html";?>
	<!-- CSS FRO THIS PAGE ONLY -->
	<link rel="stylesheet" href="assets/plugins/selectbox/select_option1.css">
	<link rel="stylesheet" href="css/capDetails_kr.css">
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
									Cap application details
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
						$(".art-list-f2").find(".art-list-f2-item").eq(3).find(".art-list-f2-link").addClass("now");
					</script>
				</div>
				<div class="col-xs-12 col-xs-12 col-md-9">
					<div class="layout-main-card">
						<?php include "html_model/uikit/aside-lb-open.html";?>
						<div class="sectionTitle text-center color-5 mt-0">
							<h2><!-- h2 only -->
								<span class="shape shape-left"></span>
								<span>Cap application details</span>
								<span class="shape shape-right"></span>
							</h2>
						</div>
						<div class="mypage-switchbox">
							<div class="uikit-radio is-1st">
								<input type="radio" name="type" class="uikit-radio-input" checked/>
								<label class="uikit-radio-label">All</label>
							</div>
							<div class="uikit-radio is-2nd">
								<input type="radio" name="type" class="uikit-radio-input" checked/>
								<label class="uikit-radio-label">REPORT CAP</label>
							</div>
							<div class="uikit-radio is-3rd">
								<input type="radio" name="type" class="uikit-radio-input"/>
								<label class="uikit-radio-label">AUDIO CAP</label>
							</div>
							<div class="dropGeneral roundTwo layout-drop-sm">
								<select class="select-drop">
									<option value="0">Family </option>
									<option value="1">진호재</option>
									<option value="2">호명성</option>
								</select>
							</div>
							<a class="cd-history" href="#cdModal" data-toggle="modal">History</a>
						</div>
						<!--
						단내형 2018/10/24
						검토중
						Play Along ! 3-C :  What Can You Do With a Ball ?  | Jingle , Jingle , Jingle | Just Like Me

						호명성 2018/10/24
						합격
						Sing Along ! Blue-C :  Mickey and His Friends
						-->
						<ul class="layout-card">
							<?php include "html_model/_mywfc_kr/cd-card-item.html"?>
						</ul>
						<div class="pagerArea text-center color-5">
							<?php include "html_model/uikit/pager-item.html";?>
						</div>
						<div class="cd-btnbox">
							<button type="button" class="btn layout-btn layout-btn-sm color-5">
								CAP 리포트 확인 »
							</button>
							<div class="cd-btnbox-icon"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include "html_model/footer-kr.html";?>
		<?php include "html_model/floating-ui.html";?>
		<?php include "html_model/tabmenu-kr.html";?>
		<!-- ====================================
		——— LIGHT BOX MODAL
		===================================== -->
		<?php include "html_model/_mywfc_kr/lightbox-mypage-cap-details.html";?>
	</div>
	<?php include "html_model/js-for-all.html";?>
	<!-- JS FOR THIS PAGE ONLY -->
	<script src="js/tmpAsideLb.js"></script>
	<script src="js/statePaddingShare.js"></script>
	<script>
		$('.select-drop').selectbox();
	</script>
</body>

</html>