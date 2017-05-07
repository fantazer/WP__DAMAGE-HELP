<div class="links">
	<?
		$args = array(
		'cat'=> array(3,4)
		);
		query_posts($args);
		while (have_posts()) : the_post(); 
		printf('
		<div class="links__el">
			<a href="%s">%s</a>
		</div>
		',get_permalink(),get_the_title());
		 endwhile; 
		 wp_reset_query();
	 ?>
</div>