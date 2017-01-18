<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package 3Q Digital
 */

get_header(); 
?>

<div class="entry-content">
	<div class="wrap">
		<?php 
		if ( !(get_field('remove_default_title') ) ) {
			echo '<h1 class="entry-title">' . get_the_title() . '</h1>'; }
		else {
			echo '<h1 class="entry-title">' . get_field('custom_title') . '</h1>';
		}
		?>
		
		<div class="grid-60 mobile-100 grid-parent suffix-5">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<?php 
					while ( have_posts() ) : the_post(); 
						get_template_part( 'content', 'page' ); 						
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() )
							comments_template();
					endwhile; 
					?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .grid-66 -->
		<div class="grid-35 mobile-100 grid-parent">
			<div id="sidebar" class="sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div><!-- .wrap -->
</div><!-- .entry-content -->

<?php 
get_footer(); 
?>
