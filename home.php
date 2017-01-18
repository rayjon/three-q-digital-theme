<?php get_header(); ?>

<div class="blog-header">
	<div class="wrap">
		<div class="eix-icons">
			<i class="three-q-icon-EQ_Icon large-icon"></i>
			<i class="three-q-icon-IQ_Icon large-icon"></i>
			<i class="three-q-icon-XQ_Icon large-icon"></i>
		</div>
		<div class="about-blog">
			<h3><a href="http://3qdigital.dev/about-blog/" title="About the 3Q Blog">#supercharge</a> your digital marketing knowledge.</h3>
		</div>
		<div class="search-area">
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>	
		</div>
	</div>	
</div>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 10,
	'paged' => $paged
); 

$blog_posts = new WP_Query( $args ); 
?>

<div class="wrap">
	<div class="grid-60 grid-parent suffix-5">
		<div id="primary" class="content-area"> 
			<main id="main" class="site-main" role="main">
					
					<?php if ( $blog_posts->have_posts() ) : ?> 
					
						<?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?> 

							<div class="blog-post-summary">
								<h3 class="hide-on-mobile"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								
								<div class="grid-30 mobile-grid-25 hide-on-mobile">
    								<?php
    								if ( has_post_thumbnail() ) {
									    the_post_thumbnail( 'large-thumb' );
                                    }
                                    ?>
								</div>
								
								<div class="mobile-grid-100 grid-parent hide-on-desktop">
									<?php the_post_thumbnail( array(80,80)); ?>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<a href="<?php the_permalink(); ?>">Continue Reading >></a>
								</div>
								
								<div class="grid-70 hide-on-mobile">
									<?php the_excerpt(); ?>
								</div>
								
								<div class="clear"></div>
							
								<div class="entry-meta">
									<div class="post-meta">by <?php the_author_posts_link(); ?> on <?php echo get_the_date('M j, Y'); /*the_date( 'M. j, Y' );*/ ?></div>
										
									<!-- Google Plus Share Button -->
									<div class="sharing-buttons hide-on-mobile">
				                        <?php if ( function_exists( 'sharing_display' ) ) {
                                            sharing_display( '', true );
                                        } ?>
				                    </div><!-- end sharing buttons -->
								</div>							
							</div>

						<?php endwhile; 
			
						three_q_digital_content_nav( 'nav-below' );   
										
					
					 endif; ?> 
					
					<?php wp_pagenavi( array( 'query' => $blog_posts ) ); ?>
			</main>
		</div><!-- #primary -->
	</div><!-- .grid-66 -->

	<div class="grid-35 mobile-grid-100 grid-parent">
		<div class="mobile-grid-100 hide-on-desktop grid-parent mobile-search">
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>	
		</div>
		<div id="sidebar" class="sidebar"">
			<?php dynamic_sidebar( 'blog-sidebar' ); ?>
		</div>
	</div>
	
</div><!-- .wrap -->

<div class="clear"></div>

<?php echo do_shortcode("[fast-100-banner]"); ?>

<?php get_footer(); ?>