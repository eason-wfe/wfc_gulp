<!DOCTYPE html>
<html lang="ko">

<head>
	<?php include "html_model/head.html";?>
	<!-- CSS FRO THIS PAGE ONLY -->
	<link href="assets/plugins/selectbox/select_option1.css" rel="stylesheet" type="text/css">
	<link href="css/teDetails_kr.css" rel="stylesheet">
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
									TE details
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
						$(".art-list-f2").find(".art-list-f2-item").eq(2).find(".art-list-f2-link").addClass("now");
					</script>
				</div>
				<div class="col-xs-12 col-xs-12 col-md-9">
					<div class="layout-main-card">
						<?php include "html_model/uikit/aside-lb-open.html";?>
						<div class="sectionTitle text-center color-5 mt-0">
							<h2><!-- h2 only -->
								<span class="shape shape-left"></span>
								<span>
									TE details
								</span>
								<span class="shape shape-right"></span>
							</h2>
						</div>
						<div class="te-dropbox">
							<div class="dropGeneral roundTwo layout-drop-sm is-child">
								<select class="select-drop">
									<option value="0">Family </option>
									<option value="1">단내형</option>
									<option value="2">호명성</option>
								</select>
							</div>
							<div class="dropGeneral roundTwo layout-drop-sm is-type">
								<select class="select-drop">
									<option value="0">Lession</option>
									<option value="1">Song</option>
									<option value="2">CAP</option>
									<option value="3">Free Talk</option>
									<option value="4">Mommy and Daddy</option>
								</select>
							</div>	
						</div>
						<ul class="layout-card">
							<?php include "html_model/_mywfc_kr/td-card-item.html"?>
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
	<script>
		$('.select-drop').selectbox();
	</script>
</body>

</html>