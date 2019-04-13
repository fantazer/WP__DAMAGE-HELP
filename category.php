<?php get_header(); ?>
<div class="content__wraper">
	<div class="content__left">
		<div class="breadcrumbs">
      <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(' > '); ?>
		</div>
		<h1><?= single_cat_title(); ?></h1>
    <?
    $categories = get_the_category();
    $category_id_first = $categories[0]->cat_ID;
    $category_id_second = $categories[1]->cat_ID;
    if ($category_id_first == 22) {
      $currentCat = $category_id_second;
    } else {
      $currentCat = $category_id_first;
    }
    $args = array(
      'cat' => $currentCat,
      'order' => 'DESC',
      'posts_per_page' => 2000,
    );
    ?>
		<ul class="list-items">
      <? query_posts($args); ?>
      <? while (have_posts()) : the_post(); ?>
				<!-- can write -->
				<a href="<?= get_permalink(); ?>">
					<li>
            <?
            $result = explode(' в ', get_the_title(), 2);
            echo ltrim($result[0]);

            ?>
					</li>
				</a>
      <? endwhile; ?>
      <? wp_reset_query(); ?></ul>

    <? include('include/call.php') ?>
	</div>
</div>
<? include('include/positiv.php') ?>
<? include('include/review.php') ?>
<? include('include/form.php') ?>
<? include('include/allserviceList.php') ?>

<?php get_footer(); ?>
