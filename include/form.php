<div class="section section__contact">
	<div class="main-cont">
			<div class="contact__consult">Консультация бесплатно</div>
		<div class="contact">
			<div class="contact__form">
			<div class="contact__time">Ответим вам черз 3 минуты</div> 
				<div class="type type--lg">Свяжитесь с нами</div>
				<?php echo do_shortcode('[contact-form-7 id="5" title="main-form"]'); ?>
			</div>
			<div class="contact__info">
				<div class="contact__text">
					<a href="tel:<?php echo do_shortcode('[cvem_cv name="phone"]'); ?>"><div class="contact__phone type type--md"><?php echo do_shortcode('[cvem_cv name="phone"]'); ?></div></a>
					<div class="contact__adress type type--md"><?php echo do_shortcode('[cvem_cv name="adres"]'); ?></div>
					<div class="contact__email type type--md"><?php echo do_shortcode('[cvem_cv name="mail"]'); ?></div>
					<!--<p>Наименование: OOO "Юрь Интелис" ОГРН 1067746235160 </p>-->
					<p>Вы получите точное представление о рыночной стоимости земельного участка, дома, квартиры, автомобиля или другого ценного имущества. Мы рады помочь своим клиентам. Наша оценка всегда достоверна и максимально отражает текущую стоимость продаваемого имущества.</p>
					
				</div>
				<?php if (is_page(108)): ?>
					<!-- <div class="map">
						<script type="text/javascript" charset="utf-8" async="async" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=keg_j_EiUvA25nYfDuyrp8l-mZZO1Ook&amp;width=100%&amp;height=290&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
					</div> -->
					<div class="awards"> <img src="http://damage-help.ru/wp-content/themes/DAMAGE/img/awards.png" alt=""></div>
				<?php endif ?>
			</div>
		</div>
	</div>
</div>