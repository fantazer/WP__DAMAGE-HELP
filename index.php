<? get_header(); ?>

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

	<div class="section section-company">
		<div class="section-company__image">
			<div class="filter"></div>
			<!--img(src="img/image-2.jpg", alt="")-->
		</div>
		<div class="section-company__info">
			<div class="company__md-title">Группа компаний</div>
			<div class="company__lg-title">Центр оценки</div>
			<p>Группа Компаний "Центр оценки", осуществляет свою деятельность в Москве и Московской области, а также в
				близлежащих районах, более 10 лет на рынке консалтинговых услуг. Наша компания- это команда настоящих
				профессионалов в сфере оценке которые занимаются по-настоящему любимым делом.</p>
			<p>Стаж наших оценщиков начинается от 5 лет, что свидетельствует об их большом опыте. Все наши оценщики и эксперты
				состоят в саморегулируемых обществах таких как: РОО, ДСО, СУДЭКС, СМАО,МСО и другие.</p>
			<p>Для нас очень важно доверие и мнение каждого клиента, поэтому о всех недостатках работы нашего бюро вы можете
				нам рассказать при помощи обратной связи Наши цены приятно удивят и порадуют Вас, так же у нас действует система
				скидок для постоянных клиентов и другие бонусные программы. За годы работы мы подготовили более 12000 отчет по
				оценке по которым выигрывались дела в суде и заключились сделки. Для нашего бюро это лишь начало пути, в
				дальнейшем нас ждет успех!</p>
		</div>
	</div>
	<!-- block section-work-->
	<div class="section section-work">
		<div class="title--type title--mid">Как мы работаем</div>

		<div class="main-cont">
			<div class="how-work">
				<div class="how-work__el">
					<div class="how-work__el-numb">1</div>
					<div class="how-work__el-info">
						<div class="how-work__el-title">Получение заявки</div>
						<p>Позвонив, вы можете рассказать специалисту о своих пожеланиях, и он оформит заявку и направит к вам
							специалиста в удобное для клиента время.</p>
					</div>
				</div>
				<div class="how-work__el">
					<div class="how-work__el-numb">2</div>
					<div class="how-work__el-info">
						<div class="how-work__el-title">Обработка заявок на сайте.</div>
						<p>Зайдя на наш портал, можно оформить заявку и менеджер немедленно перезвонит заказчику для уточнения.</p>
					</div>
				</div>
				<div class="how-work__el">
					<div class="how-work__el-numb">3</div>
					<div class="how-work__el-info">
						<div class="how-work__el-title">Выезд специалиста.</div>
						<p> Согласовав с клиентом время, специалист выезжает по указанному адресу и производит необходимые для
							оценки действия.</p>
					</div>
				</div>

				<div class="how-work__el">
					<div class="how-work__el-numb">4</div>
					<div class="how-work__el-info">
						<div class="how-work__el-title">Проведение оценки.</div>
						<p>Специалист на месте определяет степень изношенности оборудования, квартиры или других ценностей занос все
							параметры в специальный бланк.</p>
					</div>
				</div>
				<div class="how-work__el">
					<div class="how-work__el-numb">5</div>
					<div class="how-work__el-info">
						<div class="how-work__el-title">Подготовка оценочного акта.</div>
						<p>По приезду в офис специалист вносит полученные данные в документ и на основании его проводит оценку.
							Опираясь на существующие нормы и расценки.</p>
					</div>
				</div>
				<div class="how-work__el">
					<div class="how-work__el-numb">6</div>
					<div class="how-work__el-info">
						<div class="how-work__el-title">Передача клиенту документов.</div>
						<p>Готовый акт подписывает оценщик проводивший работу и руководитель предприятия, заверяющий печатью
							компании. Готовый документ передается заказчику или отсылается почтой.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- block section-get-->


<? include('include/form.php') ?>
<? get_footer(); ?>