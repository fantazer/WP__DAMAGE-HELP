<div class="links">
	   <?
	 	$args = array(
	 	'cat'=> 3
	 	);
	 	$current_link = get_the_ID();
	 	query_posts($args);
	 	while (have_posts()) : the_post(); 
		 	if(get_the_ID() != $current_link){
			printf('
			<div class="links__el">
				<a href="%s">%s</a>
			</div>
			',get_permalink(),get_the_title());
		}
		 endwhile; 
		 wp_reset_query();
	 	 
	 ?>
</div>