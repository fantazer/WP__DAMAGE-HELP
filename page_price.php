<?
// Создаем массив
$metroArray = array(
  'Новокосино',
  'Марьино',
  'Очаково-Матвеевское',
  'Москворечье-Сабурово',
  'Ногинск',
  'Матушкино',
  'Павловский',
  'Мытищи',
  'Обручевский',
  'Раменки',
  'Раменское',
  'Реутов',
  'Ростокино',
  'Рошаль',
  'Руза',
  'Рязанский',
  'Савёлки',
  'Пушкино',
  'Пущино',
  'Ступино',
  'Тёплый Стан',
  'Сергиев',
  'Сходня',
  'Фили-Давыдково',
  'Серпухов',
  'Таганский',
  'Филёвский парк',
  'Силино',
  'Талдом',
  'Фрязино',
  'Сокол',
  'Тверской',
  'Хамовники',
  'Соколиная гора',
  'Текстильщики',
  'Химки',
  'Сокольники',
  'Тимирязевский',
  'Ховрино',
  'Солнечногорск',
  'Троицк',
  'Хорошёво-Мневники',
  'Солнцево',
  'Тропарёво-Никулино',
  'Савёловский',
  'Хорошёвский',
  'Старое Крюково',
  'Тушино Северное',
  'Свиблово',
  'Строгино',
  'Тушино Южное',
  'Северный',
  'Электрогорск',
  'Черноголовка',
  'Электросталь',
  'Чертаново Северное',
  'Электроугли',
  'Чертаново Центральное',
  'Юбилейный',
  'Чертаново Южное',
  'Южнопортовый',
  'Черёмушки',
  'Якиманка',
  'Чехов',
  'Ярославский',
  'Шатура',
  'Ясенево',
  'Щербинка',
  'Яхрома',
  'Щукино',
  'Хотьково',
  'Щёлково',
  'Царицыно'
);
/*
foreach ($metroArray as $value) {
  	$title =  'Независимая оценка для нотариуса в ' .$value;
  	$text = '[text_module id="1710"]';
  	 $post_data = array(
		 'post_title'    => $title,
		 'post_content'  => $text,
		 'post_status'   => 'publish',
		 'post_author'   => 1,
		 'post_category' => array(21),
	  );
	$post_id = wp_insert_post( wp_slash($post_data) );
	add_post_meta($post_id, '_aioseop_description', "Оценка квартиры, машины, оружия и акций для вступления в наследство  в городе ".$value);
	add_post_meta($post_id, '_aioseop_title','Оценка для нотариуса в городе '.$value);
	add_post_meta($post_id, 'metro',$value);
	update_post_meta($post_id, 'ratings_average', 5);
	update_post_meta($post_id, 'ratings_score', 5);
	update_post_meta($post_id, 'ratings_users', 5);
 }
*/

?>

<?
/*
Template Name: price
*/
?>

<?php get_header(); ?>

<div class="content">
	<div class="main-cont">
		<div class="content__wraper">
			<!--block b-slider-->
      <? /*include('include/main-slider.php')*/ ?>
			<!--block b-slider end-->
			<div class="content__info">
				<div class="content__left">

					<!--block panel-->
          <?php if (CFS()->get('price') != ''): ?>
            <? include('include/panel.php') ?>
          <?php endif ?>
					<!--block panel end-->

					<h1>Цены на наши услуги</h1>
          <?
          while (have_posts()) : the_post();
            printf('<p>%s</p> ', the_content());

          endwhile;
          wp_reset_query();
          ?>
					<table class="table_price stacktable large-only">
						<tbody>
						<tr>
							<td>
								<p>
									<strong>Вид оказываемых услуг</strong>
								</p>
							</td>
							<td>
								<p>
									<strong>Цена услуги</strong>
								</p>
							</td>
							<td>
								<p>
									<strong>Сроки исполнения</strong>
								</p>
							</td>
							<td>
								<p>
									<strong> Получить</strong>
								</p>
							</td>
						</tr>

            <?
            $post_not_view = array(51);
            $args = array(
              'cat' => 2,
              'post__not_in' => $post_not_view
            );
            query_posts($args);
            while (have_posts()) : the_post();
              printf('
												<tr>
													<td>
														<p>%s</p>
													</td>
													<td>
														<p>от %s руб</p>
													</td>
													<td>
														<p>%s дня</p>
													</td>
													<td>
														<a href="%s" class="table__link">подбронее</a>
													</td>
												</tr>
											'
                , get_the_title()
                , CFS()->get('price')
                , CFS()->get('time')
                , get_permalink()
              );
            endwhile;
            wp_reset_query();
            ?>
						</tbody>
					</table>
					<div class="star__reting">
            <? if (function_exists('the_ratings')) {
              the_ratings();
            }// Выводим рейтинг ?>
					</div>


					<div class="metro-wraper">
						<span class="span_h2">Оценка у метро</span>
            <?
            $args = array(
              'cat' => 7,
              'order' => 'ASC',
              'posts_per_page' => 300
            );
            query_posts($args);
            while (have_posts()) : the_post();
              printf('
								<div class="metro-el"><a href="%s">%s</a></div>
								', get_permalink()
                , get_post_meta($post->ID, 'metro', true)
              );
            endwhile;
            wp_reset_query();
            ?>
					</div>


					<div class="metro-wraper">
						<span class="span_h2">Оценка в городах</span>
            <?
            $args = array(
              'cat' => 9,
              'order' => 'ASC',
              'posts_per_page' => 300
            );
            query_posts($args);
            while (have_posts()) : the_post();
              printf('
							 	<div class="metro-el"><a href="%s">%s</a></div>
							 	', get_permalink()
                , get_post_meta($post->ID, 'metro', true)
              );
            endwhile;
            wp_reset_query();
            ?>
					</div>
					<!--block b-news-->
          <? include('include/news.php') ?>
					<!--block b-news end-->
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
<!-- block section-contact-->
<? include('include/form.php') ?>




<?php get_footer(); ?>
