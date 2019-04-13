<div class="section section-service">
  <div class="main-cont">
    <h3 class="section-title section-title--mid">Все виды оценок </h3>
    <div class="b-service">
      <?
      //$listCat = array(13, 16, 12,11,10,15,17);
      $listCat = array(11, 13, 17, 15, 10, 12, 16);
      foreach ($listCat as $key => $value) {
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
                <a href=" <?= get_permalink(); ?>"><?= get_the_title(); ?></a></li>
              <!-- can write -->
            <? endwhile; ?>
            <? wp_reset_query(); ?>
          </ul>
        </div>
      <? } ?>
    </div>
  </div>
</div>