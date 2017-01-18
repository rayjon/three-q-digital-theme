<?php get_header(); ?>

<div class="entry-content">
    <div class="wrap">
    	<h1 class="entry-title">Marketing Partners</h1>
    	
    	<div class="grid-65 grid-parent left-grid">
    		<div id="primary" class="content-area">
    			<main id="main" class="site-main" role="main">
    				<?php
    				$client_args = array( 'post_type' => '3Q_partners', 'nopaging' => true);
    				$client_loop = new WP_Query( $client_args );
    				while ( $client_loop->have_posts() ) : $client_loop->the_post(); 
    				?>
    					<div class="marketing-partner">
    						<div class="grid-25 left-grid">
    							<a href="<?php the_field('partner_website')?>"><?php the_post_thumbnail( 'full' ); ?></a>
    						</div>
    						<div class="grid-75 right-grid">
    							<?php the_content(); ?>
    						</div>
    						<div class="clear"></div>
    					</div>
    				<?php
    				endwhile;
    				 
    				wp_reset_query();
    				?>
    			</main>
    		</div>
    	</div>
    	
    	<div class="grid-35 grid-parent right-grid">
    		<div id="sidebar">
        		<?php get_template_part( 'forms/form' , 'contact' ); ?>
            </div>
    	</div>
    	<div class="clear"></div>
    </div> <!-- wrap -->
</div> <!-- entry-content -->

<?php get_footer(); ?>