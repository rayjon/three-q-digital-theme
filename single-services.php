<?php
/**
 * The Template for displaying all single posts.
 *
 * @package 3Q Digital
 */

get_header(); ?>

<section class="title-banner">
	<div class="wrap">
    	<?php
        if ( is_single('lpo') ) { ?>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-lpo.svg">
        <?php } else { ?>
            <i class="<?php the_field('icon_class'); ?> alignleft"></i>
        <?php } ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</div>
</section>

<div class="wrap">
	<div class="grid-60 grid-parent suffix-5">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<?php 
				while ( have_posts() ) : the_post();
					the_content();
				endwhile; 
				?>
			</main>
		</div>
	</div>
	
	<div class="grid-35 grid-parent mobile-grid-100">
		<div id="sidebar" class="hide-on-mobile sidebar">
			<?php dynamic_sidebar( 'services-sidebar' ); ?>
		</div>
		
		<div class="hide-on-desktop">
			<h2 class="blog-link"><a href="<?php echo site_url('/blog/'); ?>">BLOG</a></h2>
			
			<div class="blog-posts">
				<?php
				$args = array( 'post_type' => 'post', 'posts_per_page' => '5');
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); 
				?>
					<h3><a href="<?php the_permalink() ?>"> <?php the_title() ?></a></h3>						
				<?php	
				endwhile; 
				wp_reset_query();
				?>
				<a href="<?php echo site_url('/blog/'); ?>" class="view-all">VIEW ALL</a>				
			</div>
		</div>
	</div>	
</div>

<section class="footer-call-to-action hide-on-mobile">
	<div class="wrap">
		<div class="grid-60 grid-parent">
			<h2>Contact us today to start realizing your potential.</h2>
		</div>
		
		<div class="grid-40 grid-parent">
			<a class="button-jade alignright" href="<?php echo site_url('/contact'); ?>">SUPERCHARGE YOUR GROWTH</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>