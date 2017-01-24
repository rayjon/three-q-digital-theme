<?php get_header(); ?>

<section class="hero-banner who-we-are-hero">
	<div class="wrap">
		<div class="who-we-are-brand-icons">
			<div class="grid-55 left-grid">
				<h3>We are passionate about supercharging our clients' growth.</h3>
				
				<h3>We are best-practice-pioneering digital marketing geeks.</h3>
				
				<h3>We are relentless about rigor and process.</h3>
				
				<h3>We are 3Q.</h3>
			</div>
		
			<div class="grid-15 grid-parent hide-on-mobile">
				<a href="#EQ"><i class="three-q-icon-EQ_Icon large-icon gold"></i></a>
			
				<a href="#IQ"><i class="three-q-icon-IQ_Icon large-icon gold"></i></a>
		
				<a href="#XQ"><i class="three-q-icon-XQ_Icon large-icon gold"></i></a>
				
				<div class="bracket"></div>
			</div>		
		
			<div class="grid-30 hide-on-mobile right-grid">
				<div class="learn-about-our-philosophy">
					<a href="#our-philosophy"><i class="icon-plus-sign"></i>Learn about our superpowers.</a>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="wrap">
	<div class="hide-on-mobile">
    	<h2 class="subsection-title aligncenter">Executive Leadership</h2>
    	
    	<ul id="exec-staff-grid" class="exec-staff-grid center-grid">
    		<?php $exec_staff_args = array ( 
    			'post_type' => 'staff',
    			'department' => 'executive', 
    			'orderby' => 'menu_order',
    			'order' => 'ASC',
    			'nopaging' => 1
    		);
    		
    		$exec_staff = new WP_Query( $exec_staff_args );
    		rewind_posts(); 
    		if ( $exec_staff->have_posts() ) : while ( $exec_staff->have_posts() ) : $exec_staff->the_post(); ?>	
				<li>
					<a class="various" href="#inline_<?php the_ID(); ?>">
						<?php the_post_thumbnail( 'large-thumb' ); ?>
						<div class="staff-caption">
							<h3><?php the_title(); ?></h3>
							<span><?php the_field('job_title'); ?></span>
						</div>
					</a>
					
					<div id="inline_<?php the_ID(); ?>" class="staff-lightbox">
						<?php the_content(); ?>
					</div>
				</li>
            <?php endwhile; ?>
    		<?php endif; ?>
    		
    		<?php wp_reset_query(); ?>
    	</ul>
    	
    	<div class="clear"></div>
    	
    	<hr/>
    	
    	<h2 class="subsection-title aligncenter">Senior Management</h2>
    	
    	<ul id="exec-staff-grid" class="exec-staff-grid center-grid">
    		<?php 
    		$senior_staff_args = array( 
    			'post_type' => 'staff',
    			'department' => 'senior-management', 
    			'orderby' => 'menu_order',
    			'order' => 'ASC',
    			'nopaging' => 1
    		);
    		
    		$senior_staff = new WP_Query( $senior_staff_args );
    		rewind_posts(); 
    		if ( $senior_staff->have_posts() ) : while ( $senior_staff->have_posts() ) : $senior_staff->the_post(); ?>
    				<li>
    					<a class="various" href="#inline_<?php the_ID(); ?>">
    						<?php the_post_thumbnail( 'large-thumb' ); ?>
    					
    						<div class="staff-caption">
    							<h3><?php the_title(); ?></h3>
    							<span><?php the_field('job_title'); ?></span>
    						</div>
    					</a>
    					
    					<div id="inline_<?php the_ID(); ?>" class="staff-lightbox">
    						<?php the_content(); ?>
    					</div>
    					
    				</li>
    			<?php endwhile; ?>
    		<?php endif; ?>
    		<?php wp_reset_query(); ?>
    	</ul>
    	
    	<div class="clear"></div>
    	
    	<hr/>
    	
    	<h2 class="subsection-title aligncenter">Team</h2>
    	
    	<ul class="staff-grid">
    		<?php 
    		$args2 = array( 
    			'post_type' => 'staff',
    			'nopaging' => 1,
    			'tax_query' => array (
    				array (
    					'taxonomy' => 'department',
    					'field' => 'slug',
    					'terms' => array ( 
    					    'executive', 
    					    'senior-management', 
    					    'morale-associates' 
                        ),
    					'operator' => 'NOT IN'
    				)
    			)
    		);
    		
    		$norm_staff = new WP_Query( $args2 );
    		rewind_posts();
    		if ( $norm_staff->have_posts() ) : while ( $norm_staff->have_posts() ) : $norm_staff->the_post(); ?>
    			<li>
    				<?php the_post_thumbnail( 'thumbnail' ); ?>
    				<div class="staff-caption">
                        <h3><?php the_title(); ?></h3>
                        <span class="job-title"><?php the_field('job_title'); ?></span>
    				</div>
    			</li>
    		<?php endwhile; ?>
    		<?php endif; ?>
    		<?php wp_reset_query(); ?>
    	</ul>
    	<hr/>
    	    	
	</div><!--End Hide on Mobile -->
</div>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>
		
        	<div class="hide-on-desktop">
            	<hr />
            	<h2 class="subsection-title">Executive Leadership</h2>
            	<hr />
            	<ul id="mobile-exec-staff-grid" class="mobile-exec-staff-grid">
        		    <?php             		
        		    rewind_posts(); 
                    if ( $exec_staff->have_posts() ) : while ( $exec_staff->have_posts() ) : $exec_staff->the_post();
            		?>	
            			<li>
            				<?php the_post_thumbnail( array(80,80 )); ?>
            				<h3><span><?php the_title(); ?></span><br><?php the_field('job_title'); ?></h3>
            				<i class="icon-plus-sign staff-toggle"></i>
            				<div class="clear"></div>
            				<div class="staff-content">
            					<?php the_content(); ?>	
            				</div>
            				<hr />			
            			</li>	
                    <?php 
                    endwhile;
                    endif;
                    wp_reset_query();
                    ?>
            	</ul>
            	
            	<h2 class="subsection-title">Senior Management</h2>
            	<hr />
            	
            	<ul id="mobile-exec-staff-grid" class="mobile-exec-staff-grid">
            		<?php            		
            		rewind_posts(); 
            		if ( $senior_staff->have_posts() ) : while ( $senior_staff->have_posts() ) : $senior_staff->the_post(); ?>	
            			<li>
            				<?php the_post_thumbnail( array(80,80 )); ?>
            				<h3><span><?php the_title(); ?></span><br><?php the_field('job_title'); ?></h3>
            				<i class="icon-plus-sign staff-toggle"></i>
            				<div class="clear"></div>
            				<div class="staff-content">
            				<?php the_content(); ?>	
            				</div>
            				<hr/>			
            			</li>		
            		<?php 
                    endwhile;
                    endif;
                    wp_reset_query();
                    ?>
            	</ul>
            	
            	<h2 class="subsection-title">Team</h2>
            	<hr />
            	
            	<ul class="staff-grid">
            		<?php $mobile_staff_args = array( 
            			'post_type' => 'staff',
            			'nopaging' => 1,
            			'tax_query' => array(
            				array (
            					'taxonomy' => 'department',
            					'field' => 'slug',
            					'terms' => array('executive','senior-management'),
            					'operator' => 'NOT IN'
            				)
            			)
            		);
            		
            		$mobile_staff = new WP_Query( $mobile_staff_args );
            		rewind_posts();
            		if ( $mobile_staff->have_posts() ) : while ( $mobile_staff->have_posts() ) : $mobile_staff->the_post(); ?>
            			
            			<li><?php the_post_thumbnail( array (60,60) ); ?></li>
            		<?php 
                    endwhile;
                    endif;
                    wp_reset_query();
                    ?>
            	</ul>
        	</div><!--End Hide on Desktop -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<div class="footer-call-to-action hide-on-mobile">
	<div class="wrap">
		<div class="grid-65 grid-parent">
			<h2>Contact us today to start realizing your potential.</h2>
		</div>
		
		<div class="grid-35 grid-parent">
			<a class="button-jade alignright" href="<?php echo site_url('/contact/'); ?>">SUPERCHARGE YOUR GROWTH</a>
		</div>
	</div>
</div>
		
<?php get_footer(); ?>
