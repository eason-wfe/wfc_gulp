<!DOCTYPE html>
<html lang="ko">

<head>
	<?php include "html_model/head.html";?>
	<!-- CSS FRO THIS PAGE ONLY -->
	<link rel="stylesheet" href="css/download_kr.css">
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
								<li class="breadcrumb-item">
									온라인샵
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
					<script>
						// 此 js 為演示用，請參考
						$(".art-list-f2").find(".art-list-f2-item").eq(3).find(".art-list-f2-link").addClass("now");
					</script>
				</div>
				<div class="col-xs-12 col-xs-12 col-md-9">
					<div class="layout-main-card">
						<?php include "html_model/uikit/aside-lb-open.html";?>
						<div class="sectionTitle text-center color-4 mt-0">
							<h2><!-- h2 only -->
								<span class="shape shape-left"></span>
								<span>
									온라인샵
								</span>
								<span class="shape shape-right"></span>
							</h2>
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
</body>

</html>