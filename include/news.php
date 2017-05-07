<div class="news">
<? 
	$args = array(
	'cat'=> 5
	);
	$current_news = get_the_ID();
	query_posts($args);
	while (have_posts()) : the_post(); 
	if(get_the_ID() != $current_news){
		printf('
			<div class="news__el">
				<div class="news__img">
					<img src="%s" alt="Независимая оценка новости" />
				</div>
				<div class="news__content">
					<div class="news__title">%s</div>
					<div class="news__text">%s</div>
					<br>
					<a href="%s" class="link-more">Подробнее</a>
				</div>
			</div>
		
		 ',CFS()->get('img')				
		 ,get_the_title()
		 ,wp_trim_words( get_the_content(), 65, ' ...' )
		,get_permalink()
		 );
	}
	 endwhile; 
	 wp_reset_query();
?>
</div>