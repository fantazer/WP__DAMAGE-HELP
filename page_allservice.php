<?
/*
Template Name: allService
*/
?>

<?php get_header(); ?>

<!-- main_content -->
<div class="main_content">	
<div class="container">
	<div class="row">
	<!-- левая колонка -->
		<div class="col-md-12 price_wraper">	
			<h1>Каталог всех услуг</h1>	
				<table>
				<?
					$args = array(
					'cat'=> 2,
					);
					query_posts('cat=2,3,6');
					while (have_posts()) : the_post(); 
					printf('<a href="%s">%s</a> <br>'
				     ,get_permalink()
					 ,get_the_title()
				     );
					 endwhile; 
					 wp_reset_query();
			 	?>
			 </table>
		</div>
		 
		<!-- левая колонка -->
	<img src="<?php echo get_template_directory_uri(); ?>/img/polosa-big-1000.png" alt="" class="center p40_0">
	</div>
	<? 
		include('include/contact.php'); 
	?>
</div>
</div>


<?php get_footer(); ?>
