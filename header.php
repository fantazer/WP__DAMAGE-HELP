<?php header("Last-Modified: " . get_the_modified_date('r'))?>
<!--Include style-->
<!DOCTYPE html>
<html lang="ru"
	<? if ( in_category(array('2','3','4','5','6','7','9')) && !is_home()) { ?>
		itemscope itemtype="http://schema.org/Product" 
		<? } ?> 
		
	>
	<head>
		<meta charset="UTF-8" />
		<title>Document</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="format-detection" content="telephone=no" />
		<meta meta="meta" name="theme-color" content="#383345" />
		<link defer type="image/x-icon" rel="icon" href="favicon-M.ico">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendor.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/add-style.css" />

		<!--  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic,cyrillic-ext" /> -->

	

		<script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
		<?php wp_head(); ?>
	</head>

<body >
	<div class="animsition">
	<!--Include header-->
	<!-- block main-section-->
	
	
	<?if( is_home() ){?>
		<div class="main-section">
			<!-- block header-->
			<!-- Header for main-page -->
			<div class="header header-main">
				<div class="main-cont">
					<div class="header-wraper">
						<a href="/" class="header__logo">
						</a>
						<div class="header-nav">
							<div class="header-nav-wraper">
								<div class="header__el">
									<a href="/">Главная</a>
								</div>
								<div class="header__el">
									<a href="/service.php">Услуги </a>
								</div>
								<div class="header__el">
									<a href="/price.php">Цены</a>
								</div>
								<div class="header__el">
									<a href="/contact_form.php">Контакты</a>
								</div>
							</div>
						</div>
						<div class="header__cont"><?php echo do_shortcode('[cvem_cv name="phone"]'); ?>
							<div class="header__toggle">
								<i class="icon-bars"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-baner">
				<div class="main-baner__img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/main-baner.png" alt="Независимая оценка" />
				</div>
				<div class="main-baner__info">
					<div class="main-baner__small">группа Компаний</div>
					<div class="main-baner__lg">"Центр оценки"</div>
				</div>
			</div>
		</div>
	<?}else{?>
	<!-- Header for page -->
	<div class="header">
		<div class="main-cont">
			<div class="header-wraper">
				<a href="/" class="header__logo">
				</a>
				<div class="header-nav">
					<div class="header-nav-wraper">
						<div class="header__el">
							<a href="/">Главная</a>
						</div>
						<div class="header__el">
							<a href="/service.php">Услуги </a>
						</div>
						<div class="header__el">
							<a href="/price.php">Цены</a>
						</div>
						<div class="header__el">
							<a href="/contact_form.php">Контакты</a>
						</div>
					</div>
				</div>
				<a href="/contact_form/" class="header-phone-link"><div class="header__cont"><?php echo do_shortcode('[cvem_cv name="phone"]'); ?></a>
					<div class="header__toggle">
						<i class="icon-bars"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<? } ?>

 