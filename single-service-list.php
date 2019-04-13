<?
/*
Template Name: service-list-town
*/
?>

<?php get_header(); ?>
	<div class="content__wraper">
		<div class="content__left">
      <? the_title('<h1>', '</h1>'); ?>
      <p>Наша компания оказывает услуги по независимой оценке во многих городах Москвы и московской области. Наши оценщики всегда стремятся выполнить свою работу не зависимо от расположения объекта оценки.</p>
      <div class="list-location">
      <?
      $parent_id = 22;
      # получаем дочерние рубрики
      $sub_cats = get_categories(array(
        'child_of' => $parent_id,
        'hide_empty' => 0
      ));
      if ($sub_cats) {
        foreach ($sub_cats as $cat) {
          ?>
					<a href="<?= get_category_link($cat->term_id); ?>" class="list-location__el"><?= $cat->name; ?></a>
          <?
        }
        wp_reset_postdata(); // сбрасываем глобальную переменную пост
      }
      ?>
			</div>
      <? include('include/call.php') ?>
		</div>
	</div>
<? include('include/positiv.php') ?>
<? include('include/review.php') ?>
<? include('include/form.php') ?>
<? include('include/allserviceList.php') ?>


<?php get_footer(); ?>
