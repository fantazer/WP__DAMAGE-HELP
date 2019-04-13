<?php get_header(); ?>

<!-- //////////////////////////////////// -->

<?
if(in_category(array(22))) { //ID категории
		include('single-town-list.php');
	} else{
?>
  <div class="content__wraper">
      <div class="content__left">
        <!--block panel-->
        <?php
        $category = get_the_category();
        if (CFS()->get('price') != '' || $category[0]->term_id == 7 || $category[0]->term_id == 9 || $category[0]->term_id == 21): ?>
          <? include('include/panel.php') ?>
        <?php endif ?>
        <div class="breadcrumbs">
          <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(' > '); ?>
        </div>
        <!--block panel end-->
        <?
        $categories = get_the_category();
        $category_id = $categories[0]->cat_ID;
        if ($category_id == 11) { } ?>
        
        <h1 itemprop="name"><? the_title(); ?></h1>
        <?
        while (have_posts()) : the_post();
          printf('<p>%s</p> ', the_content());

        endwhile;
        wp_reset_query();
        ?>
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

        <? if (in_category(7)) { ?>
          <div class="metro-wraper">
            <span class="span_h2">Оценка у метро</span>
            <?
            $idPost = get_the_id();
            $PostArray = array();
            $args = array(
              'cat' => 7,
              'posts_per_page' => 400
            );
            query_posts($args);
            while (have_posts()) : the_post();
              $name = get_the_id();
              array_push($PostArray, $name);
            endwhile;
            wp_reset_query();

            $key = array_search($idPost, $PostArray);
            $output = array_slice($PostArray, $key + 1, 5);
            $LastPost = array_pop($PostArray);

            $arg = array('include' => $output, 'post__not_in' => $LastPost);

            $myposts = get_posts($arg);
            foreach ($myposts as $post) {
              setup_postdata($post);
              ?>
              <div class="metro-el"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <?
            }
            wp_reset_postdata();

            ?>
          </div>
        <? } ?>

        <? if (in_category(9)) { ?>
          <div class="metro-wraper">
            <span class="span_h2">Оценка в городе</span>
            <?
            $idPost = get_the_id();
            $PostArray = array();
            $args = array(
              'cat' => 9,
              'posts_per_page' => 400
            );
            query_posts($args);
            while (have_posts()) : the_post();
              $name = get_the_id();
              array_push($PostArray, $name);
            endwhile;
            wp_reset_query();

            $key = array_search($idPost, $PostArray);
            $output = array_slice($PostArray, $key + 1, 5);
            $LastPost = array_pop($PostArray);

            $arg = array('include' => $output, 'post__not_in' => $LastPost);

            $myposts = get_posts($arg);
            foreach ($myposts as $post) {
              setup_postdata($post);
              ?>
              <div class="metro-el"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <?
            }
            wp_reset_postdata();

            ?>
          </div>
        <? } ?>

        <? if (in_category(21)) { ?>
          <div class="metro-wraper">
            <div class="span_h2">Оценка в городе</div>
            <?
            $idPost = get_the_id();
            $PostArray = array();
            $args = array(
              'cat' => 21,
              'posts_per_page' => 400
            );
            query_posts($args);
            while (have_posts()) : the_post();
              $name = get_the_id();
              array_push($PostArray, $name);
            endwhile;
            wp_reset_query();

            $key = array_search($idPost, $PostArray);
            $output = array_slice($PostArray, $key + 1, 5);
            $LastPost = array_pop($PostArray);

            $arg = array('include' => $output, 'post__not_in' => $LastPost);

            $myposts = get_posts($arg);
            foreach ($myposts as $post) {
              setup_postdata($post);
              ?>
              <div class="metro-el"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <?
            }
            wp_reset_postdata();

            ?>
          </div>
        <? } ?>

        <!--block b-call-->
        <? include('include/call.php') ?>
        <!--block b-call end-->

        <!--block b-link-->
        <? //include('include/links.php') ?>
        <!--block b-link end-->
      </div>
      <? include('include/right-part.php') ?>
    </div>
<? } ?>
<? include('include/positiv.php') ?>
<? include('include/review.php') ?>
<? include('include/form.php') ?>
<? include('include/allserviceList.php') ?>

<?php get_footer(); ?>
