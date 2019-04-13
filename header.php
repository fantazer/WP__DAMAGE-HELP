<?php header("Last-Modified: " . get_the_modified_date('r'))?>
<!--Include style-->
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8" />
		<title>Document</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="format-detection" content="telephone=no" />
		<meta meta="meta" name="theme-color" content="#0063b0" />
		<link defer type="image/x-icon" rel="icon" href="favicon.ico">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendor.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/add-style.css" />
		<link rel="alternate" hreflang="ru" href="http://damage-help.ru/" />
		<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic,cyrillic-ext" />-->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800|PT+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
		<script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
		<?php wp_head(); ?>
	</head>

<body <? if ( in_category(array('2','3','4','5','6','7','9')) && !is_home()) { ?>
		itemscope itemtype="http://schema.org/Product"
		<? } ?> >

	<!--Include header-->
	<!-- block main-section-->

	<!-- Header for page -->
	<header class="header header--white">
		<div class="main-cont">
			<div class="header-wraper">

				<a href="/" class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo-blue.png" alt="">
				</a>
				<div class="header-nav">
					<nav class="header-nav-wraper">
						<ul>
							<li class="header__el">
								<a href="/">Главная</a>
							</li>
							<li class="header__el">
								<a href="/service">Услуги</a>
							</li>
							<li class="header__el">
								<a href="/price">Цены</a>
							</li>
							<li class="header__el">
								<a href="/contact_form">Контакты</a>
							</li>
						</ul>
					</nav>
				</div>
				<a href="/contact_form/" class="header-phone-link">
					<?php echo do_shortcode('[cvem_cv name="phone"]'); ?>
				</a>
					<div class="header__toggle">
						<i class="icon-bars"></i>
					</div>
				</div>
			</div>
		</header>
	<!--<div class="navigation">
		<div class="main-cont">
			<ul class="navigation-wrap">
				<li class="navigation-el">
					<a href="/">Главная</a>
				</li>
				<li>
					<a href="/">Услуги</a>
				</li>
				<li>
					<a href="/">Цены</a>
				</li>
				<li>
					<a href="/">Контакты</a>
				</li>
			</ul>
		</div>
	</div>-->

