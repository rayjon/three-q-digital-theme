<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package 3Q Digital
 */

get_header(); ?>
<div class="wrap">
	<div class="grid-60 suffix-5 grid-parent">
		<section id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				
			<?php if ( have_posts() ) : ?>
	
				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'three_q_digital' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->
	
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php get_template_part( 'content', 'search' ); ?>
	
				<?php endwhile; ?>
	
				<?php three_q_digital_content_nav( 'nav-below' ); ?>
	
			<?php else : ?>
	
				<?php get_template_part( 'no-results', 'search' ); ?>
	
			<?php endif; ?>
			</main><!-- #main -->
		</section><!-- #primary -->
	</div>

	<div class="grid-35 grid-parent">
		<div id="sidebar" class="sidebar">
			<?php dynamic_sidebar( 'blog-sidebar' ); ?>
		</div>
	</div>
</div><!-- .wrap -->

<?php get_footer(); ?>