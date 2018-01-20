<?
/*
Template Name: service
*/
?>

<?php get_header(); ?>


<div class="section section-service">
		<div class="main-cont">
			<h1 class="title--type title--mid">Независимая оценка Залива Пожара ДТП. </h1>
			<div class="b-service">
        <?
        //$listCat = array(13, 16, 12,11,10,15,17);
        $listCat = array(11,10,17,16,10,13,12,15);
        foreach ($listCat as $key => $value){
        ?>
          <div class="b-service__el">
						<div class="b-service__el-title"> <? echo get_cat_name($listCat[$key]); ?> </div>
						<ul>
							<?
			        $args = array(
			          'cat' => $listCat[$key]
			        );
			        ?>
			          <? query_posts($args); ?>
			          <? while (have_posts()) : the_post(); ?>
									<!-- can write -->
									<li class="b-service__el-text">
										<a href="	<?= get_permalink(); ?>"><?= get_the_title(); ?></a></li>
									<!-- can write -->
			          <? endwhile; ?>
			          <? wp_reset_query(); ?>
						</ul>
					</div>
      <? } ?>
				</div>
			</div>
	</div>

<!-- block section-contact-->
<? include('include/form.php') ?>




<?php get_footer(); ?>



<?php get_footer(); ?>
