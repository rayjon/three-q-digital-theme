<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package 3Q Digital
 */

get_header();

$queried_object = get_queried_object(); 
$category = $queried_object->category;
$cat_id = $queried_object->term_id;  

if ( is_category() && get_field('3qd_header_bar_text', $queried_object ) ) { ?>
    <section class="category-banner">
        <div class="wrap">
            <div class="message">
                <h1><?php the_field('3qd_header_bar_text', $queried_object ); ?></h1>
            </div>
            <div class="link">
                <a class="button-category-header" href="<?php the_field('3qd_header_bar_button_link', $queried_object ); ?>">
                    <?php the_field('3qd_header_bar_button_text', $queried_object ); ?>
                </a>
            </div>
        </div>
    </section>
<?php } ?>

<div class="wrap">
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="archive-page-header">
				YOU ARE NOW VIEWING ARTICLES RELATED TO: 
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							*/
							the_post();
							printf( __( 'Author: %s', 'three_q_digital' ), '<span class="vcard">' . get_the_author() . '</span>' );
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'three_q_digital' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'three_q_digital' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'three_q_digital' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'three_q_digital' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'three_q_digital');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'three_q_digital' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'three_q_digital' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'three_q_digital' );

						else :
							_e( 'Archives', 'three_q_digital' );

						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
				
				<?php three_q_digital_content_nav( 'nav-below' ); ?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="blog-post-summary">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								
								<div class="grid-30">
								    <?php
    								if ( has_post_thumbnail() ) {
									    the_post_thumbnail( 'large-thumb' );
                                    }
                                    ?>
								</div>
								
								<div class="grid-70">
									<?php the_excerpt(); ?>
								</div>
								
								<div class="clear"></div>
							
								<div class="entry-meta">
									<div class="post-meta">by <?php the_author_posts_link(); ?> on <?php the_date(); ?></div>
                                    <div class="sharing-buttons">
									    <?php if ( function_exists( 'sharing_display' ) ) {
                                            sharing_display( '', true );
                                        } ?>
                                    </div><!-- sharing-buttons -->
										
									<!-- Google Plus Share Button -->
<!--
									
									<div class="g-plus">
										<div class="g-plusone" data-size="medium" data-annotation="none" href="<?php the_permalink(); ?>">
										</div>
									</div>
-->
									<!-- Place this tag after the last +1 button tag. -->
<!--
									<script type="text/javascript">
										(function() {
									    	var po = document.createElement('script'); 
											po.type = 'text/javascript'; 
											po.async = true;
											po.src = 'https://apis.google.com/js/plusone.js';
											var s = document.getElementsByTagName('script')[0]; 
											s.parentNode.insertBefore(po, s);
										})();
									</script>
-->
									<!-- end: Google Plus Share Button -->	
	
									<!-- LinkedIn Share Button -->
<!--
									<script src="//platform.linkedin.com/in.js" type="text/javascript">
									lang: en_US
									</script>
									<script type="IN/Share" data-counter="right" data-url="<?php the_permalink(); ?>">
									</script>
-->
								
									<!-- Facebook Share Button -->
<!--
									<div class="fb-like" data-layout="button_count" data-href="<?php the_permalink(); ?>" data-send="false" data-width="100" data-show-faces="false">
									</div>
-->
									
									<!-- Twitter Share Button -->
<!--
                                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>">Tweet</a>
									<script>
										!function(d,s,id){
											var js,fjs=d.getElementsByTagName(s)[0],
											p=/^http:/.test(d.location)?'http':'https';
											if(!d.getElementById(id)){
												js=d.createElement(s);
												js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
												fjs.parentNode.insertBefore(js,fjs);
											}
										}
										(document, 'script', 'twitter-wjs');
									</script>
									</div>
--><!-- end sharing buttons -->
								</div>							
							</div>


			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; ?>
		
		<?php wp_pagenavi(); ?>

		</main><!-- #main -->
	</section><!-- #primary -->

	<div id="sidebar" class="sidebar">
		<?php dynamic_sidebar( 'blog-sidebar' ); ?>
	</div>
</div><!-- .wrap -->

<?php get_footer(); ?>
