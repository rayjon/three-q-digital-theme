<?php
/*
 * Template Name: Landing - Single Whitepaper
 * Author: Raymond Johnson
 * Date Published: August 1, 2014
 */ 

get_header(); 

$field = get_field_object('whitepaper');
$value = get_field('whitepaper');
$label = $field['choices'][ $value ]; ?>

<div class="landing-hero">
	<div class="wrap">
		<div class="grid-100 grid-parent">
			<h1><?php echo $label; ?></h1>
			<h2><?php the_field('sub_header'); ?></h2>
		</div>
	</div>
</div>

<div class="clear"></div>

<!-- /* Main Content */ -->
<div class="wrap">
	<div class="grid-60 mobile-grid-100 left-grid">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div>
	
	<!-- /* Sidebar */ -->
	<div class="grid-40 mobile-grid-100 right-grid">
		<div id="sidebar">
		
			<?php get_template_part( 'form' , 'single-whitepaper' ); ?>
			
			<?php dynamic_sidebar( 'landing-sidebar' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>