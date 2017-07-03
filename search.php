<?php get_header(); ?>

<!-- //////////////////////////////////// -->

<div>

    <div class="main-cont">
        <div class="content__wraper">

            <!--block b-slider-->
            <? //include('include/main-slider.php') ?>
            <!--block b-slider end-->

            <div class="content__info">
                <div class="content__left">

                    <!--block panel-->
                    <?php
                    $category = get_the_category();
                    if (CFS()->get('price') != '' || $category[0]->term_id == 7 || $category[0]->term_id == 9): ?>
                        <? include('include/panel.php') ?>
                    <?php endif ?>
                    <div class="breadcrumbs">
                        <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(' > '); ?>
                    </div>
                    <!--block panel end-->

                    <? if (have_posts()) : ?>
                        <h1><? printf(__('Результаты поиска: %s'), '<span>' . get_search_query() . '</span>'); ?></h1>
                        <ol class="find">
                            <? while (have_posts()) : the_post(); ?>
                                <a href="<? the_permalink() ?>" rel="bookmark"
                                   title="<? the_title_attribute() ?>" class="item-found">
                                    <li>
                                    <h2><? the_title() ?></h2>
                                        <p><? echo(get_the_excerpt()) ?></p></li>
                                </a>
                            <? endwhile; ?>
                        </ol>
                    <? else : ?>
                        <h1>Ничего не найдено</h1>
                        <p>Ничего не найдено, попробуйте еще раз.</p>
                        <br/>
                        <? get_search_form(); ?>
                    <? endif; ?>


                    <div class="star__reting">
                        <? if (function_exists('the_ratings')) {
                            add_filter('wp_postratings_site_logo', 'wp_postratings_site_logo');
                            function wp_postratings_site_logo($url)
                            {
                                return 'http://damage-help.ru/wp-content/themes/DAMAGE/img/logo-dark.png';
                            }

                            the_ratings();
                        }// Выводим рейтинг ?>

                    </div>


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

    <!--block b-link-->
    <? include('include/links-advant.php') ?>
    <!--block b-link end-->

</div>


<!-- //////////////////////////////////// -->


<?php get_footer(); ?>
