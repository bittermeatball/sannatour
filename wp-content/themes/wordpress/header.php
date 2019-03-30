<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="apple-mobile-web-app-capable" content="yes" />
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
			<meta name="format-detection" content="telephone=no" />
				
			<link rel="shortcut icon" href="favicon.ico"/> 
			<?php wp_head() ?>
			<!-- <title>Sanna Tour JSC | Travel agency</title> -->
			<meta name="description" content=" Nhà tổ chức du lịch chuyên nghiệp tại miền Trung, chuyên tổ chức Tour, Team-building, dịch vụ xe, vé máy bay và các dịch vụ du lịch khác,... " />>
		</head>
	<body data-color="theme-7" >
		<div class="loading dr-blue-2">
			<div class="loading-center">
				<div class="loading-center-absolute">
					<div class="object object_four"></div>
					<div class="object object_three"></div>
					<div class="object object_two"></div>
					<div class="object object_one"></div>
				</div>
			</div>
		</div>
	<header class="color-1 hovered menu-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="nav"> 
					<a href="<?php get_site_url() ?>" class="logo">
						<img src="http://localhost:8000/sannatour/wp-content/uploads/2019/03/Logo-2-sm-300x45.png" alt="sanna tour logo" style="height: 40px; width: auto">
					</a>
					<div class="nav-menu-icon" style="position: relative; left: 100%; transform: translateX(-100%)">
						<a href="#"><i></i></a>
					</div>
					<?php wp_nav_menu( array(
						'menu' => 'testing-menu',
						'container' => 'nav',
						'container_class' => 'menu',
						'menu_class' => '',
					)) ?>
				</div>
			</div>
		</div>
	</div>

	</header>
