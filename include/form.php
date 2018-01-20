<div class="section section-get">
	<div class="section-get__content">
		<div class="type type--lg">Мы можем решить вашу проблему сегодня</div>
		<p class="section-get__subtitle">Если возникла необходимость получить независимую предпродажную оценку любого
			ценного имущества, не мешкайте. Простой звонок или заявка на сайте поможет избавиться от многих проблем. </p>
		<div class="btn btn--lg  get-modal" onclick="yaCounter22674784.reachGoal('GET-ORDER'); return true;">получить</div>
	</div>
</div>

<div class="section section__contact">
	<div class="main-cont">
		<!--<div class="contact__consult">Консультация бесплатно</div>-->
		<div class="contact">
			<div class="contact__form">

				<div class="type type--lg">Свяжитесь с нами</div>
				<form action="javascript:void(null);" class="validate-form validate-form--contact">
					<input type="text" name="name" placeholder="Ваше имя" id="name_form"/>
					<input type="text" name="phone" placeholder="Ваш телефон" id="phone_form"/>
					<input type="text" name="mail" placeholder="Ваша почта" id="email_form"/>
					<textarea name="" cols="30" rows="10" placeholder="Ваше сообщение" id="text"></textarea>
					<button class="btn btn--lg">Отправить</button>
				</form>
        <?php //echo do_shortcode('[contact-form-7 id="5" title="main-form"]'); ?>
			</div>
			<div class="contact__info">
				<div class="b-contact-img"></div>
				<div class="contact__text">
					<a href="tel:<?php echo do_shortcode('[cvem_cv name="phone"]'); ?>">
						<div class="contact__phone type type--md"><?php echo do_shortcode('[cvem_cv name="phone"]'); ?></div>
					</a>
					<div class="contact__adress type type--md"><?php echo do_shortcode('[cvem_cv name="adres"]'); ?></div>
					<div class="contact__email type type--md"><?php echo do_shortcode('[cvem_cv name="mail"]'); ?></div>
					<!--<p>Наименование: OOO "Юрь Интелис" ОГРН 1067746235160 </p>-->
					<p>Вы получите точное представление о рыночной стоимости земельного участка, дома, квартиры, автомобиля или
						другого ценного имущества. Мы рады помочь своим клиентам. Наша оценка всегда достоверна и максимально
						отражает текущую стоимость продаваемого имущества.</p>

				</div>
        <?php if (is_page(108)): ?>
					<!-- <div class="map">
						<script type="text/javascript" charset="utf-8" async="async" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=keg_j_EiUvA25nYfDuyrp8l-mZZO1Ook&amp;width=100%&amp;height=290&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
					</div> -->

        <?php endif ?>
			</div>
		</div>
	</div>
</div>