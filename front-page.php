<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="home-main">
			<div class="wrap">
				<div class="promo-video">
    				<div class="video-container">
                        <a class="video" href="//player.vimeo.com/video/93603721?title=0&amp;byline=0&amp;portrait=0&amp;color=f9b800&amp;autoplay=1">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/3q-video-thumbnail.jpg">
                        </a>
    				</div>
				</div>
				<div class="mission-tagline">
				    <h1>We are the leading online growth partner for innovative companies.</h1>
				</div>
			</div>
		</section>
	
		<section class="home-call-to-action">
			<div class="wrap">
				<div class="grid-65 grid-parent">
					<h2>Contact us today to start realizing your potential.</h2>
				</div>
				
				<div class="grid-35 button-container grid-parent">
					<a class="button-slate" href="<?php site_url( '/contact/' ); ?>">SUPERCHARGE YOUR GROWTH</a>
				</div>
			</div>
		</section>
			
		<section class="home-services">
			<div class="wrap">
				<h2>Grow Today</h2>
				
				<?php
				$service_loop = new WP_Query( array( 
				    'post_type' => 'services', 
	                'post__in' => array( 983, 3015, 975, 971, 977 ) ) 
	            );
				while ( $service_loop->have_posts() ) : $service_loop->the_post(); 
				?>
					<div class="grid-20 mobile-grid-50">
						
						<a class="service-icon" href="<?php the_permalink(); ?>">
							<i class="<?php the_field('icon_class'); ?>"></i>
						</a>
						<h3>
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						
						<?php the_excerpt(); ?>
					</div>
					
				<?php		
				endwhile; 
				wp_reset_query();
				wp_reset_postdata();
				?>
			</div>
		</section>

		<div class="clear"></div>
	
		<section class="home-testimonial">
			<div class="wrap">
				<img src="<?php echo get_stylesheet_directory_uri();?>/images/white-quote.png">
				<blockquote>"I've worked with 3Q Digital at multiple companies because I really value their commitment to client service. They've been a great partner and a secret weapon for our marketing team."</blockquote>
				</blockquote>
				<cite>Loretta Jones, Insightly</cite>
				<a class="read-more" href="<?php echo site_url('/our-clients/');?>">Read More Testimonials</a>
			</div>
		</section>

		<section class="home-media">
			<div class="wrap">
				<div class="grid-50 grid-parent">
					<h2 class="blog-link">
						<a href="<?php echo site_url('/blog/');?>">
							BLOG
						</a>
					</h2>
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
						<a href="<?php echo site_url('/blog/');?>" class="view-all">VIEW ALL</a>				
					</div>
				</div>
				
				<div class="grid-45 prefix-5 grid-parent">
					<?php three_q_digital_whitepaper_form(); ?>
				</div>
			</div>
		</section>
	</main>
</div>

<?php get_footer(); ?>