<?
/*
Template Name: contact
*/
?>

<?php get_header(); ?>



<div class="main-cont">
	<h1 style="text-align:center;padding:40px 0;text-transform: uppercase;">Отлично, остался всего один шаг!</h1>
</div>


<!-- block section-contact-->
<? include('include/form.php') ?>

<div class="map">
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=Lms-0Es59W8iXgQWu8tnxWvf8BkzFdi9&amp;width=100%&amp;height=543&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=false"></script>
	</div>

<div class="main-cont">
	<!--block b-news-->
	<? include('include/news.php') ?>
	<!--block b-news end-->
	<!--block b-link-->
	<? include('include/links.php') ?>
	<!--block b-link end-->
</div>
<?php get_footer(); ?>
