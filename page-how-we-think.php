<?php
/*
 * Template Name: How We Think Page
 */ 

get_header(); ?>

<div class="hero-banner media-hero">
	<div class="wrap">
	
		<h3>We #supercharge digital marketing thought leadership. Browse our webinars, whitepapers, case studies, blogs and plug in.</h3>
	
		<div class="grid-60 grid-parent hide-on-mobile">	
			<ul class="how-we-think-nav">
				<li>
					<a href="#whitepapers"><i class="three-q-icon-WP_Icon"></i></a>
					<h4><a href="#whitepapers">KNOWLEDGE</a></h4>
				</li>
			
				<li>
					<a href="#press"><i class="three-q-icon-SMM_Icon"></i></a>
					<h4><a href="#press">PRESS</a></h4>
				</li>
			</ul>
		</div>
		
		<div class="grid-40 mobile-grid-100 mobile-grid-parent">		
			<div id="mc_embed_signup">
				<form action="http://ppcassociates.us6.list-manage.com/subscribe/post?u=21f8e350649bc68ca203523f3&amp;id=4e9d0502bb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<p>#supercharge your daily thought leadership intake. Sign up for email updates from our blog.</p>
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email" required>
					<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
				</form>
			</div><!-- #mc_embed_signup -->
		</div><!-- .grid-40 -->
			
	</div><!-- .wrap -->
</div><!-- .hero-banner -->

<?php echo do_shortcode("[fast-100-banner]"); ?>	

<div id="primary" class="content-area"> 
	<main id="main" class="site-main" role="main">
	    <?php the_content()?>
		<div class="page-seperator">
			<div class="wrap">
			    <span id="whitepapers" class="anchor"></span>
				<i class="three-q-icon-WP_Icon alignleft"></i>
				<h2>KNOWLEDGE</h2>
			</div>
		</div>
				
		<div class="wrap">
			<div class="grid-50 left-grid">
				<?php the_field('3q_how_we_think_whitepapers'); ?>															
			</div>
			
			<div class="grid-50 right-grid">
				<?php three_q_digital_whitepaper_form() ?>
				
				<hr />
				
				<?php the_field('3q_how_we_think_infographics'); ?>
									
			</div>
			
			<hr/>
			
			<div class="clear"></div>
			
			<div class="grid-100 grid-parent">
				<?php the_field('3q_how_we_think_webinars'); ?>
			</div><!-- .grid-100 Webinars -->
			
			<hr/>
			
			<div class="grid-100 grid-parent">
				<?php the_field('3q_how_we_think_case_studies')?>
			</div><!-- .grid-100 Case Studies -->
		</div>
				
        <div class="clear"></div>
		
		<div class="page-seperator" style="margin-top: 3rem;">
			<div class="wrap">
				<span id="press" class="anchor"></span>
				<i class="three-q-icon-DA_Icon alignleft"></i>
				<h2>PRESS</h2>
			</div>
		</div>
		
		<div class="wrap">	
			<div class="grid-50 left-grid">
				<?php the_field('3q_how_we_think_awards') ?>
							
				<hr>
				
				<?php the_field('3q_how_we_think_guest_blogs') ?>
								
			</div><!-- grid-50 -->
			
			<hr class="hide-on-desktop">
			
			<div class="grid-50 right-grid">
    			
    			<?php the_field('3q_how_we_think_press') ?>
    							
				<hr>
				
				<?php the_field('3q_how_we_think_speakings') ?>

			</div><!-- grid-50 -->
		</div><!-- wrap -->				
	</main>
</div><!-- #primary -->

<div class="clear"></div>

<?php get_footer(); ?>