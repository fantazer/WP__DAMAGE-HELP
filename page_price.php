
<?
// Создаем массив
 $metroArray = array(
"Пушкино",
"Пущино",
"Раменки",
"Раменское",
"Реутов",
"Ростокино",
"Рошаль",
"Руза",
"Рязанский",
"Савёлки",
"Савёловский",
"Свиблово",
"Северный",
"Сергиев",
"Серпухов",
"Силино",
"Сокол",
"Соколиная гора",
"Сокольники",
"Солнечногорск",
"Солнцево",
"Старое Крюково",
"Строгино",
"Ступино",
"Сходня",
"Таганский",
"Талдом",
"Тверской",
"Текстильщики",
"Тимирязевский",
"Троицк",
"Тропарёво-Никулино",
"Тушино Северное",
"Тушино Южное",
"Тёплый Стан",
"Фили-Давыдково",
"Филёвский парк",
"Фрязино",
"Хамовники",
"Химки",
"Ховрино",
"Хорошёво-Мневники",
"Хорошёвский",
"Хотьково",
"Царицыно",
"Черноголовка",
"Чертаново Северное",
"Чертаново Центральное",
"Чертаново Южное",
"Черёмушки",
"Чехов",
"Шатура",
"Щербинка",
"Щукино",
"Щёлково",
"Электрогорск",
"Электросталь",
"Электроугли",
"Юбилейный",
"Южнопортовый",
"Якиманка",
"Ярославский",
"Ясенево",
"Яхрома"
);
 
/*foreach ($metroArray as $value) {
  	$title =  'Независимая оценка в ' .$value;
  	$text = '[text_module id="953"]';
  	 $post_data = array(
		 'post_title'    => $title,
		 'post_content'  => $text,
		 'post_status'   => 'publish',
		 'post_author'   => 1,
		 'post_category' => array(9),
	  );
	$post_id = wp_insert_post( wp_slash($post_data) );
	add_post_meta($post_id, '_aioseop_description', "Независимая оценка после залива. Оценка повреждений ДТП в городе ".$value.". Подготовка отчетов  за один день Бесплатная доставка.");
	add_post_meta($post_id, '_aioseop_title','Независимая оценка Залива, ДТП в '.$value);
	add_post_meta($post_id, 'metro',$value);
	update_post_meta($post_id, 'ratings_average', 5);
	update_post_meta($post_id, 'ratings_score', 5);
	update_post_meta($post_id, 'ratings_users', 5);
 }*/
 

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
							<?php if (CFS()->get('price')!=''): ?>
								<? include('include/panel.php') ?>
							<?php endif ?>
							<!--block panel end-->

							<h1>Цены на наши услуги</h1>
							<?
								while (have_posts()) : the_post(); 
								printf('<p>%s</p> ',the_content());

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
											$post_not_view= array(51);
											$args = array(
											'cat'=> 2,
											'post__not_in'=>$post_not_view
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
											 ,get_the_title()
											 ,CFS()->get('price')
											 ,CFS()->get('time')
										     ,get_permalink()
										     );
											 endwhile; 
											 wp_reset_query();
									 	?>
								</tbody>
							</table>
							<div class="star__reting">
								<? if(function_exists('the_ratings')) { the_ratings(); }// Выводим рейтинг ?>
							</div>
							
							

							<div class="metro-wraper">
							<span class="span_h2">Оценка у метро</span>
							 <?
								$args = array(
								'cat'=> 7,
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
