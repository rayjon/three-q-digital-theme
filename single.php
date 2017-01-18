<?php
/**
 * The Template for displaying all single posts.
 *
 * @package 3Q Digital
 */

get_header();

$category = get_the_category();
$cat_ID = get_cat_ID( $category[0]->cat_name);

if ( get_field( '3qd_header_bar_text', 'category_' . $cat_ID ) ) { ?>
    <section class="category-banner">
        <div class="wrap">
            <div class="message">
                <h1><?php the_field( '3qd_header_bar_text', 'category_' . $cat_ID ) ?></h1>
            </div>
            <div class="link">
                <a class="button-category-header" href="<?php the_field( '3qd_header_bar_button_link', 'category_' . $cat_ID ) ?>">
                    <?php the_field( '3qd_header_bar_button_text', 'category_' . $cat_ID ) ?>
                </a>
            </div>
        </div>
    </section>
<?php } ?>

<div class="wrap">
	<h1 class="entry-title"><?php echo get_the_title(); ?></h1>
	<div class="grid-60 grid-parent suffix-5">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
		
					<?php get_template_part( 'content', 'single' ); ?>
		
					<?php three_q_digital_content_nav( 'nav-below' ); ?>
		
					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() )
							comments_template();
					?>
		
				<?php endwhile; // end of the loop. ?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .grid-66 -->
	
	<div class="grid-35 grid-parent mobile-100">
		<div id="sidebar" class="sidebar">
			<?php dynamic_sidebar( 'blog-sidebar' ); ?>
		</div>
	</div><!-- .grid-33 -->
	
</div>

<?php get_footer(); ?>