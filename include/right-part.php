<section class="content__right">

    <? get_search_form(); ?>
	<!--block b-list-service-->
	<div class="list-service">
		<div class="block-header  block-header--toggle"> Наши услуги
			<i class="icon-bars"></i>
		</div>
		<nav class="block-content list-service__content">
			<ul>
			 <?
				$args = array(
				'cat'=> 2,
				);
				$current_post = get_the_ID();
				query_posts($args);
				while (have_posts()) : the_post();
				if(get_the_ID() != $current_post){
					printf('
						<li>
							<a href="%s" class="list-service__el">%s</a>
						</li>
					',get_permalink(),get_the_title());
				}
				 endwhile; 
				 wp_reset_query();
			 ?>
			 </ul>
		</nav>
	</div>
	<!--block b-list-service end-->

	<!--block b-adv-->
	<div class="advant">
		<div class="block-header">Нас выбирают</div>
		<div class="adv__el">
			<i class="flaticon-group"></i>
			<div class="adv__number">9432</div>
			<div class="adv__info">выполненно оценок</div>
		</div>
		<div class="adv__el">
			<i class="flaticon-group-1"></i>
			<div class="adv__number">9802</div>
			<div class="adv__info">Подготовленно документов</div>
		</div>
		<div class="adv__el">
			<i class="flaticon-presentation"></i>
			<div class="adv__number">8102</div>
			<div class="adv__info">Счастливых клиентов</div>
		</div>
		<div class="adv__el">
			<i class="flaticon-promotion"></i>
			<div class="adv__number">4378</div>
			<div class="adv__info">Выигранных дел</div>
		</div>
	</div>
	<!--block b-adv end-->

	<!-- <script type="text/javascript" src="//vk.com/js/api/openapi.js?126"></script>
	
	
	<div id="vk_groups"></div>
	<script type="text/javascript">
	VK.Widgets.Group("vk_groups", {redesign: 0, mode: 0, width: "auto", height: "400", color1: 'FFFFFF', color2: '000000', color3: '5E81A8'}, 124541695);
	</script>
	
	<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
	<script src="//yastatic.net/share2/share.js"></script>
	<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus,twitter,blogger,whatsapp" data-counter=""></div>-->
	<div class="awards-wrap">
		<div class="awards" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/awards.png')">
		</div>
		<div class="awards" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/awards-1.png')">
		</div>
	</div>
</section>