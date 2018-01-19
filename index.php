<?get_header();?>

<?
// Создаем массив
/*  $metroArray = array('Авиамоторная',
'Александровский сад',
'Алтуфьево',
'Арбатская',
'Автозаводская',
'Алексеевская',
'Аннино',
'Аэропорт',
'Академическая',
'Алма-Атинская',
'Арбатская',
'Бабушкинская',
'Бауманская',
'Белорусская',
'Библиотека имени Ленина',
'Боровицкая',
'Бульвар адмирала Ушакова',
'Бунинская',
'Выхино',
'Владыкино',
);
  foreach ($metroArray as $value) {
  	$title =  'Оценка залива метро ' .$value;
  	$content =   '<P>Для Оценки у метро'.$value.' нужно пройти по улице</P>';
  	 $post_data = array(
		 'post_title'    => $title,
		 'post_content'  => $content,
		 'post_status'   => 'publish',
		 'post_author'   => 1,
		 'post_category' => array(7)
	  );
	$post_id = wp_insert_post( wp_slash($post_data) );
 }*/
 

?>
<!-- block section-service-->
	<div class="section section-service">
		<div class="main-cont">
			<h1 class="type type--lg">Независимая оценка  Залива Пожара ДТП. </h1>
			<div class="service__wraper">
				
				 <?
					$args = array(
					'cat'=> 2,
					'posts_per_page' => 8,
					'tag'=> main
					);
					query_posts($args);
					while (have_posts()) : the_post(); 
					printf('
					<div class="service__el">
					<div style="background-image:url(%s);" class="service__img"></div>
					<div class="service__info">
						<a href="%s"><div class="type type--md">%s</div></a>
						<div class="service__text">%s</div>
						<div class="service__footer">
							<div class="service__price">от %s руб</div>
						</div>
					</div>
				</div>
					',CFS()->get('img')
				     ,get_permalink()
					 ,get_the_title()
					 ,wp_trim_words( get_the_content(), 12, ' ...' )
					 ,CFS()->get('price')
					 );
					 endwhile; 
					 wp_reset_query();
				 ?>
			</div>
		</div>
	</div>
	<!--block section-service end-->
	<!-- block section-company-->
	<div class="section section-company">
		<div class="section-company__image">
			<div class="filter"></div>
			<!--img(src="img/image-2.jpg", alt="")-->
		</div>
		<div class="section-company__info">
			<div class="company__md-title">Группа компаний</div>
			<div class="company__lg-title">Центр оценки</div>
			<p>Группа Компаний "Центр оценки", осуществляет свою деятельность в Москве и Московской области, а также в близлежащих районах, более 10 лет на рынке консалтинговых услуг. Наша компания- это команда настоящих профессионалов в сфере оценке которые занимаются по-настоящему любимым делом.</p>
			<p>Стаж наших оценщиков начинается от 5 лет, что свидетельствует об их большом опыте. Все наши оценщики и эксперты состоят в саморегулируемых обществах таких как: РОО, ДСО, СУДЭКС, СМАО,МСО и другие.</p>
			<p>Для нас очень важно доверие и мнение каждого клиента, поэтому о всех недостатках работы нашего бюро вы можете нам рассказать при помощи обратной связи Наши цены приятно удивят и порадуют Вас, так же у нас действует система скидок для постоянных клиентов и другие бонусные программы. За годы работы мы подготовили более 12000 отчет по оценке по которым выигрывались дела в суде и заключились сделки. Для нашего бюро это лишь начало пути, в дальнейшем нас ждет успех!</p>
		</div>
	</div>
	<!-- block section-work-->
	<div class="section section-work">
		<div class="type type--lg section-work__title">Как мы работаем</div>
		<p class="section-work__subtitle"> Вы можете позвонить и получить любую информацию бесплатно или оставить заявку на сайте. В этом случае менеджер немедленно перезвонит для уточнения интересующего вас вопроса. Согласовав удобное для заказчика время, оценщик выедет по указанному адресу.</p>
		<div class="main-cont">
			<div class="how-work">
				<div class="how-work__col">
					<div class="how-work__el">
						<div class="type type--sm">Получение заявки</div>
						<p>Позвонив, вы можете рассказать специалисту о своих пожеланиях, и он оформит заявку и направит к вам специалиста в удобное для клиента время.</p>
					</div>
					<div class="how-work__el">
						<div class="type type--sm">Обработка заявок на сайте.</div>
						<p>Зайдя на наш портал, можно оформить заявку и менеджер немедленно перезвонит заказчику для уточнения.</p>
					</div>
					<div class="how-work__el">
						<div class="type type--sm">Выезд специалиста.</div>
						<p> Согласовав с клиентом время, специалист выезжает по указанному адресу и производит необходимые для оценки действия.</p>
					</div>
				</div>
				<!--<div class="how-work__img">
					<img src="<?php /*echo get_template_directory_uri(); */?>/img/work-baner.png" alt="" />
				</div>-->
				<div class="how-work__col">
					<div class="how-work__el">
						<div class="type type--sm">Проведение оценки.</div>
						<p>Специалист на месте определяет степень изношенности оборудования, квартиры или других ценностей занос все параметры в специальный бланк.</p>
					</div>
					<div class="how-work__el">
						<div class="type type--sm">Подготовка оценочного акта.</div>
						<p>По приезду в офис специалист вносит полученные данные в документ и на основании его проводит оценку. Опираясь на существующие нормы и расценки.</p>
					</div>
					<div class="how-work__el">
						<div class="type type--sm">Передача клиенту документов.</div>
						<p>Готовый акт подписывает оценщик проводивший работу и руководитель предприятия, заверяющий печатью компании. Готовый документ передается заказчику или отсылается почтой.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- block section-get-->
	<div class="section section-get">
		<div class="filter filter--light"></div>
		<div class="section-get__content">
			<div class="type type--lg">Мы можем решить вашу проблему сегодня</div>
			<p class="section-get__subtitle">Если возникла необходимость получить независимую предпродажную оценку любого ценного имущества, не мешкайте. Простой звонок или заявка на сайте поможет избавиться от многих проблем. </p>
			<a href="service.php" class="btn btn--lg">получить</a>
		</div>
	</div>
	<!-- block section-number-->
	<div class="section-number">
		<div class="number__light">
			<div class="type type--md">мы провели более</div>
			<div class="type type--lg">9432 оценок</div>
			<p>Все наши клиенты полность довольны нашей работой. Так мы выполняем ее качественно и в срок.</p>
			<img src="<?php echo get_template_directory_uri(); ?>/img/firedef.png" alt="" class="number__img" />
			<a href="service.php" class="btn btn--lg">подробнее</a>
		</div>
		<div class="number__color">
			<div class="type type--md">мы подготовили более</div>
			<div class="type type--lg"> 9802 отчетов</div>
			<p>Мы следим за качеством наших отчетов и не допуспускаем ошибок.</p>
			<img src="<?php echo get_template_directory_uri(); ?>/img/documents.png" alt="" class="number__img" />
			<a href="service.php" class="btn btn--lg btn--active">подробнее</a>
		</div>
	</div>
	<!-- block section-client-->
	<!--<div class="section section-client">
		<div class="main-cont">
			<div class="type type--lg">Наши клиенты</div>
			<div class="client owl-carousel">
				<img src="<?php /*echo get_template_directory_uri(); */?>/img/clients/b-ico-1.png" alt="Наши клиент сбербанк " />
				<img src="<?php /*echo get_template_directory_uri(); */?>/img/clients/b-ico-2.png" alt="Наши клиенты Газпромбанк" />
				<img src="<?php /*echo get_template_directory_uri(); */?>/img/clients/b-ico-3.png" alt="Наши клиенты Уралсиб" />
				<img src="<?php /*echo get_template_directory_uri(); */?>/img/clients/b-ico-4.png" alt="Наши клиенты Банк зенит" />
				<img src="<?php /*echo get_template_directory_uri(); */?>/img/clients/b-ico-5.png" alt="Наши клиенты Траст" />
				<img src="<?php /*echo get_template_directory_uri(); */?>/img/clients/b-ico-6.png" alt="Наши клиенты МТС Банк" />
				<img src="<?php /*echo get_template_directory_uri(); */?>/img/clients/b-ico-7.png" alt="Наши клиенты Российский капитал" />
				<img src="<?php /*echo get_template_directory_uri(); */?>/img/clients/b-ico-8.png" alt="Наши клиенты Энерготранс" />
				<img src="<?php /*echo get_template_directory_uri(); */?>/img/clients/b-ico-9.png" alt="Наши клиенты СМП Банк " />
				<img src="<?php /*echo get_template_directory_uri(); */?>/img/clients/b-ico-10.png" alt="Наши клиенты Банк Европейский" />
				<img src="<?php /*echo get_template_directory_uri(); */?>/img/clients/b-ico-11.png" alt="Наши клиенты ВТБ" />
			</div>
		</div>
	</div>-->
	<!-- block section-contact-->
	<? include('include/form.php')?>
<?get_footer();?>