<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
</head>
<body class="loader-active">

<!--== Preloader Area Start ==-->
<div class="preloader">
	<div class="preloader-spinner">
		<div class="loader-content">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/preloader.gif" alt="JSOFT">
		</div>
	</div>
</div>
<!--== Preloader Area End ==-->

<!--== Header Area Start ==-->
<header id="header-area" class="fixed-top">
	<!--== Header Top Start ==-->
	<div id="header-top" class="d-none d-xl-block">
		<div class="container">
			<div class="row">
				<!--== Single HeaderTop Start ==-->
				<div class="col-lg-3 text-left">
					<i class="fa fa-map-marker"></i> 802/2, Mirpur, Dhaka
				</div>
				<!--== Single HeaderTop End ==-->

				<!--== Single HeaderTop Start ==-->
				<div class="col-lg-3 text-center">
					<i class="fa fa-mobile"></i> +1 800 345 678
				</div>
				<!--== Single HeaderTop End ==-->

				<!--== Single HeaderTop Start ==-->
				<div class="col-lg-3 text-center">
					<i class="fa fa-clock-o"></i> Mon-Fri 09.00 - 17.00
				</div>
				<!--== Single HeaderTop End ==-->

				<!--== Social Icons Start ==-->
				<div class="col-lg-3 text-right">
					<div class="header-social-icons">
						<a href="#"><i class="fa fa-behance"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<!--== Social Icons End ==-->
			</div>
		</div>
	</div>
	<!--== Header Top End ==-->

	<!--== Header Bottom Start ==-->
	<div id="header-bottom">
		<div class="container">
			<div class="row">
				<!--== Logo Start ==-->
				<div class="col-lg-4">
					<a href="<?php echo site_url(); ?>" class="logo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="JSOFT">
					</a>
				</div>
				<!--== Logo End ==-->

				<!--== Main Menu Start ==-->
				<div class="col-lg-8 d-none d-xl-block">
					<nav class="mainmenu alignright">
						<?php wp_nav_menu([
								'theme_location'=>'header_menu',
								'container'=>false,
								'walker'=> new Main_New_Walker()
						]) ?>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>