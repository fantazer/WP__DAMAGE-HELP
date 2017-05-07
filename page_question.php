<?
/*
Template Name: question
*/
?>

<?php get_header(); ?>

<div class="content">

	<div class="main-cont">
		<div class="content__wraper">
		
			<!--block b-slider-->
			<? include('include/main-slider.php') ?>
			<!--block b-slider end-->

			<div class="content__info">
				<div class="content__left">

						<!--block panel-->
						<?php 
						$category = get_the_category();
						if (CFS()->get('price')!='' || $category[0]->term_id==7): ?>
							<? include('include/panel.php') ?>
						<?php endif ?>
						<div class="breadcrumbs">
							<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' > '); ?>
						</div>
						<!--block panel end-->
						
						<h1><? the_title(); ?></h1>
						<?
							while (have_posts()) : the_post(); 
							printf('<p>%s</p> ',the_content());

						   endwhile; 
						   wp_reset_query(); 
						?>
						
						

						<!--block b-call-->
						<? include('include/comments.php') ?>
						<!--block b-call end-->

						<!--block b-call-->
						<? include('include/call.php') ?>
						<!--block b-call end-->

						<!--block b-link-->
						<? include('include/links.php') ?>
						<!--block b-link end-->
					</div>
					<? include('include/right-part.php') ?>
				</div>
			</div>
		</div>
	</div>
</div>
<? include('include/positiv.php') ?>
<!-- block section-contact-->
<? include('include/form.php') ?>
<!-- block section-contact-end -->


<div class="main-cont">
<!--block b-news-->
<? include('include/news.php') ?>
<!--block b-news end-->

</div>


<!-- //////////////////////////////////// -->


<?php get_footer(); ?>