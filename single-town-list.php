<div class="content__wraper">
	<div class="content__left">
	<!--block panel-->
	<div class="panel" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
		<div class="panel__el">
			<div class="panel__title"> Время</div>
			<div class="panel__info">
				<?=CFS()->get('time');?>
				<span>дня</span>
			</div>
		</div>
		<div class="panel__el">
			<div class="panel__title">Доставка</div>
			<div class="panel__info">Есть</div>
		</div>
		<div class="panel__el panel__ready">
			<div class="panel__title">Оценщик</div>
			<div class="panel__info">готов</div>
		</div>
		<div class="panel__el panel__price get-modal">
			<div class="panel__title"> Цена</div>
			<div class="panel__info"> <span>от</span>
				<?=CFS()->get('price');?>
	   			 <meta itemprop="name" content="<? the_title();?>">
	   			 <meta itemprop="priceCurrency" content="RUB">
	   			 <link itemprop="availability" href="http://schema.org/InStock">
				<span>руб</span>
			</div>
		</div>
		<div class="panel__el panel__get get-modal" onclick="yaCounter22674784.reachGoal('GET-ORDER'); return true;">Заказать</div>
	</div>

		<div class="breadcrumbs">
      <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(' > '); ?>
		</div>
		<!--block panel end-->

		<h1 itemprop="name"><? the_title(); ?></h1>
    <?
    while (have_posts()) : the_post();
      printf('<p>%s</p> ', the_content());

    endwhile;
    wp_reset_query();
    ?>

		<ul class="list-location">
		<?
			$categories = get_the_category();
			$category_id = $categories[0]->cat_ID;
			porstAfter($category_id,true);
		?>
		</ul>

		<div itemscope itemtype="http://schema.org/Article" class="hidden">
			<meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage"
			      itemid="<?php the_permalink() ?>  " content="<?php the_title(); ?>"/>
			<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
				<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
					<img itemprop="url image" src="http://damage-help.ru/wp-content/themes/DAMAGE/img/logo-dark.png"
					     style="display:none;"/>
					<meta itemprop="width" content="287">
					<meta itemprop="height" content="70">
				</div>
				<meta itemprop="name" content="независимая оценка">
				<meta itemprop="telephone" content="8(499)391-84-10">
				<meta itemprop="address" content="Москва, гжельский пер. д.13а стр.5">
			</div>
			<meta itemprop="dateModified" content="<?php the_modified_time('Y-m-d') ?>"/>
			<span itemprop="headline"><?php the_title(); ?></span>
			<span itemprop="datePublished"> <?php the_time('Y-m-d') ?></span>
			<span itemprop="author">автор: Damage-help</span>
			<div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
				<img itemprop="url" src="http://damage-help.ru/wp-content/themes/DAMAGE/img/logo-dark.png"
				     alt="независимая оценка" width="287" height="70"/>
				<meta itemprop="width" content="287">
				<meta itemprop="height" content="70">
			</div>
		</div>

		<!--block b-call-->
    <? include('include/call.php') ?>
		<!--block b-call end-->

		<!--block b-link-->
    <? //include('include/links.php') ?>
		<!--block b-link end-->
	</div>
</div>
