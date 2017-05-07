<?
/*
Template Name: service
*/
?>

<?php get_header(); ?>


<div class="content">
	<div class="main-cont">
		<div class="content__wraper">
			<!--block b-slider-->
			<? //include('include/main-slider.php') ?>
			<!--block b-slider end-->
			<div class="content__info">

						<h1><? the_title(); ?></h1>
						<div class="service__wraper">
							
							 <?
								$args = array(
								'cat'=> 2
							
								);
								query_posts($args);
								while (have_posts()) : the_post(); 
								printf('
								<div class="service__el">
								<div style="background-image:url(%s);" class="service__img"></div>
								<div class="service__info">
									<div class="type type--md">%s</div>
									<div class="service__text">%s</div>
									<div class="service__footer">
										<div class="service__price">%s руб</div>
										<a href="%s" class="service__link btn btn--sm">Подробнее</a>
									</div>
								</div>
							</div>
								',CFS()->get('img')
								 ,get_the_title()
								 ,wp_trim_words( get_the_content(), 12, ' ...' )
								 ,CFS()->get('price')
							     ,get_permalink()
								 );
								 endwhile; 
								 wp_reset_query();
							 ?>
							 <div class="metro-wraper">
							 <span class="span_h2">Оценка в городах</span>
							  <?
							 	$args = array(
							 	'cat'=> 9,
							 	'order' => 'ASC',
							 	 'posts_per_page' => 300
							 	);
							 	query_posts($args);
							 	while (have_posts()) : the_post(); 
							 	printf('
							 	<div class="metro-el"><a href="%s">%s</a></div>
							 	',get_permalink()
							 	,get_post_meta($post->ID,'metro',true)
							 	);
							 	 endwhile; 
							 	 wp_reset_query();
							  ?>
							 </div>
						</div>

						<!--block b-news-->
						<? include('include/news.php') ?>
						<!--block b-news end-->
			</div>
					
			<!--block b-link-->
			<? include('include/links.php') ?>
			<!--block b-link end-->

		</div>
	</div>
</div>

<!-- block section-contact-->
<? include('include/form.php') ?>




<?php get_footer(); ?>



<?php get_footer(); ?>
