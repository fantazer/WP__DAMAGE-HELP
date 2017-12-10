<?php get_header(); ?>

<!-- //////////////////////////////////// -->

<div >

	<div class="main-cont">
		<div class="content__wraper">
		
			<!--block b-slider-->
			<? //include('include/main-slider.php') ?>
			<!--block b-slider end-->

			<div class="content__info">
				<div class="content__left">

						<!--block panel-->
						<?php 
						$category = get_the_category();
						if (CFS()->get('price')!='' || $category[0]->term_id==7 || $category[0]->term_id==9): ?>
							<? include('include/panel.php') ?>
						<?php endif ?>


						<div class="breadcrumbs">
							<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' > '); ?>
						</div>
						<!--block panel end-->

						<div class="sale-banner">
							<a href="/ocenka_posle_zaliva.php">
								<img src="<?php echo get_template_directory_uri(); ?>/img/zaliv-baner.png" alt="">
							</a>
						</div>
						<h1 itemprop="name"><? the_title(); ?></h1>
						<?
							while (have_posts()) : the_post(); 
							printf('<p>%s</p> ',the_content());

						   endwhile; 
						   wp_reset_query(); 
						?>


						

						<div class="star__reting">
							<? if(function_exists('the_ratings')) { 
								add_filter( 'wp_postratings_site_logo', 'wp_postratings_site_logo' );  
								function wp_postratings_site_logo( $url ) {  
								    return 'http://damage-help.ru/wp-content/themes/DAMAGE/img/logo-dark.png';  
								}  
							
								the_ratings();
								 }// Выводим рейтинг ?>
							
						</div>
						
					<div itemscope itemtype="http://schema.org/Article" class="hidden">
						<meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="<?php the_permalink() ?>	" content="<?php the_title(); ?>"/>
						<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
							<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
								<img itemprop="url image" src="http://damage-help.ru/wp-content/themes/DAMAGE/img/logo-dark.png" style="display:none;"/>					
								<meta itemprop="width" content="287">					
								<meta itemprop="height" content="70"></div>
							<meta itemprop="name" content="независимая оценка">					
							<meta itemprop="telephone" content="8(499)391-84-10">					
							<meta itemprop="address" content="Москва, гжельский пер. д.13а стр.5">
						</div>
						<meta itemprop="dateModified" content="<?php the_modified_time('Y-m-d')?>"/>
						<span itemprop="headline"><?php the_title(); ?></span>
						<span itemprop="datePublished">	<?php the_time('Y-m-d') ?></span>
						<span itemprop="author">автор: Damage-help</span>
					<div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
						<img itemprop="url" src="http://damage-help.ru/wp-content/themes/DAMAGE/img/logo-dark.png" alt="независимая оценка" width="287" height="70"/>				
						<meta itemprop="width" content="287">
						<meta itemprop="height" content="70">
					</div>
				</div>
						
						<?if( in_category(7) ){	?>
							<div class="metro-wraper">
							<span class="span_h2">Оценка у метро</span>
			       			<?
									$idPost = get_the_id();
									$PostArray = array();
									$args = array(
									'cat'=> 7,
									'posts_per_page' => 400
									);
									query_posts($args);
									while (have_posts()) : the_post(); 
										$name = get_the_id();
										array_push($PostArray, $name);
								  endwhile; 
								  wp_reset_query();
								  
								  $key = array_search($idPost, $PostArray);
								  $output = array_slice($PostArray, $key+1,4);
								  $LastPost = array_pop($PostArray);

								  $arg = array( 'include' =>$output,'post__not_in'=>$LastPost );

									$myposts = get_posts( $arg );
									foreach( $myposts as $post ){ 
										setup_postdata($post);
										?>
										<div class="metro-el"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
										<?
									}
									wp_reset_postdata();
								
							?>
							</div>
						<? } ?>

						<?if( in_category(9) ){	?>
							<div class="metro-wraper">
							<span class="span_h2">Оценка в городе</span>
			       			<?
									$idPost = get_the_id();
									$PostArray = array();
									$args = array(
									'cat'=> 9,
									'posts_per_page' => 400
									);
									query_posts($args);
									while (have_posts()) : the_post(); 
										$name = get_the_id();
										array_push($PostArray, $name);
								  endwhile; 
								  wp_reset_query();
								  
								  $key = array_search($idPost, $PostArray);
								  $output = array_slice($PostArray, $key+1,4);
								  $LastPost = array_pop($PostArray);

								  $arg = array( 'include' =>$output,'post__not_in'=>$LastPost );

									$myposts = get_posts( $arg );
									foreach( $myposts as $post ){ 
										setup_postdata($post);
										?>
										<div class="metro-el"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
										<?
									}
									wp_reset_postdata();
								
							?>
							</div>
						<? } ?>

						<!--block b-call-->
						<? include('include/call.php') ?>
						<!--block b-call end-->
						
						<!--block b-link-->
						<? //include('include/links.php') ?>
						<!--block b-link end-->
					</div>
					<? include('include/right-part.php') ?>
				</div>
			</div>
            <? include('include/review.php') ?>
		</div>
	</div>
</div>


<script type="application/ld+json">
{ "@context": "http://schema.org",
  "@type": "Product",
  "name": "Invisalign",
  "aggregateRating":
    {"@type": "AggregateRating",
     "ratingValue": "4.9",
     "reviewCount": "7"
    }
}
</script>


<? include('include/positiv.php') ?>
<!-- block section-contact-->
<? include('include/form.php') ?>
<!-- block section-contact-end -->


<div class="main-cont">
<!--block b-news-->
<? //include('include/news.php') ?>
<!--block b-news end-->

<!--block b-link-->
<? //include('include/links-advant.php') ?>
<!--block b-link end-->

</div>


<!-- //////////////////////////////////// -->



<?php get_footer(); ?>
