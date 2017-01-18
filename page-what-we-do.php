<?php get_header(); ?>

<div class="hero-banner services-hero">
	<div class="wrap">
		<h3>We apply advanced ROI-focused digital marketing techniques across the channels that matter for each client.</h3>
	
		<div class="grid-25 left-grid grid-parent mobile-grid-50 services-icon">	
			<a href="http://3qdigital.com/services/sem/">
				<i class="three-q-icon-SEM_Icon"></i>
			</a>
			<h4><a href="http://3qdigital.com/services/sem/">SEM</a></h4>
			<p>Best-in-class, ROI-driven SEM for Google, Bing, and Yahoo.</p>
		</div>			
		
		<div class="grid-25 grid-parent mobile-grid-50 services-icon">
			<a href="http://3qdigital.com/services/social-media-advertising/">
				<i class="three-q-icon-SMM_Icon"></i>
			</a>
			<h4><a href=" http://3qdigital.com/services/social-media-advertising/">SOCIAL</a></h4>
			<p>Build awareness and control the conversation with Facebook, Twitter, and more.</p>
		</div>
		
		<div class="grid-25 grid-parent mobile-grid-50 services-icon">
			<a href="http://3qdigital.com/services/display-advertising/">
				<i class="three-q-icon-DA_Icon"></i>
			</a>	
			<h4><a href="http://3qdigital.com/services/display-advertising/">DISPLAY</a></h4>
			<p>Display ad creation, optimization, and media buying.</p>
		</div>
		<div class="grid-25 right-grid grid-parent mobile-grid-50 services-icon">
			<a href="http://3qdigital.com/services/seo/">
				<i class="three-q-icon-SEO_Icon"></i>
			</a>	
			<h4><a href="http://3qdigital.com/services/seo/">SEO</a></h4>
			<p>Cutting-edge white hat techniques to build organic traffic and brand profiles.</p>
		</div>		
	</div><!-- .wrap -->
</div><!-- .hero-banner -->

<?php echo do_shortcode("[fast-100-banner]"); ?>
	
<div class="wrap">
		<div id="primary" class="content-area"> 
			<main id="main" class="site-main" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
<!-- 					<h1 class="entry-title"><?php the_title(); ?></h1> -->					
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
			
				<div class="grid-50 left-grid">
					<h2 class="subsection-title">Digital marketing, supercharged.</h2>

						<p>What that encapsulates is different for every client, but we find and integrate the right mix of channels including SEM, SEO, social, display, video, and mobile. We use advanced attribution techniques and our own proprietary methods of process, strategy, and execution across channels.</p>

						<p>Oh, and we optimize for our clients’ preferred metrics – never our clients’ spend.</p>

						<div class="button-container">
							<a class="button-slate" href="http://3qdigital.com/contact/">SUPERCHARGE YOUR GROWTH</a>
					</div>
					
					<!--
<hr />
					<h2 class="subsection-title">Other Services</h2>
					<div class="secondary-services">
					
						<div class="grid-50 mobile-grid-50">
							<a href="http://3qdigital.com/services/mobile-advertising/">
								<i class="three-q-icon-MB_IconOnly"></i>
							</a>
							<h3><a href="http://3qdigital.com/services/mobile-advertising/">Mobile</a></h3>
							<p>Mobile-optimized campaign management for Google, Facebook, and more.</p>
						</div>
						
						<div class="grid-50 mobile-grid-50">
							<a href="http://3qdigital.com/services/international-advertising/">
								<i class="three-q-icon-IA_IconOnly"></i>
							</a>
							<h3><a href="http://3qdigital.com/services/international-advertising/">International Advertising</a></h3>
							<p>Campaign management in native Spanish, Chinese, French, German, and more.</p>
						</div>
						
						<div class="grid-50 mobile-grid-50">
							<a href="http://3qdigital.com/services/youtube-advertising/">
								<i class="three-q-icon-VA_IconOnly"></i>
							</a>	
							<h3><a href="http://3qdigital.com/services/youtube-advertising/">Video Advertising</a></h3>
							<p>Integrated, optimized YouTube campaigns to build dynamic brand awareness.</p>
						</div>
						
						<div class="grid-50 mobile-grid-50">
							<a href="http://3qdigital.com/services/design/">
								<i class="three-q-icon-DSN_IconOnly"></i>
							</a>	
							<h3><a href="http://3qdigital.com/services/design/">Design</a></h3>
							<p>Landing page optimization, banner ad creation, and more – included.</p>
						</div>
						
					</div>
--><!-- .secondary-services -->
				</div>
	
				<div class="grid-50 right-grid">
					<?php three_q_digital_whitepaper_form() ?>		
				</div>
				
				<div class="grid-100 grid-parent">
				<hr />
				<h2 class="subsection-title">Other Services</h2>
					<div class="secondary-services">
					
						<div class="grid-25 mobile-grid-50 left-grid">
							<a href="http://3qdigital.com/services/mobile-advertising/">
								<i class="three-q-icon-MB_IconOnly"></i>
							</a>
							<h3><a href="http://3qdigital.com/services/mobile-advertising/">Mobile</a></h3>
							<p>Mobile-optimized campaign management for Google, Facebook, and more.</p>
						</div>
						
						<div class="grid-25 mobile-grid-50">
							<a href="http://3qdigital.com/services/international-advertising/">
								<i class="three-q-icon-IA_IconOnly"></i>
							</a>
							<h3><a href="http://3qdigital.com/services/international-advertising/">INTERNATIONAL</a></h3>
							<p>Campaign management in native Spanish, Chinese, French, German, and more.</p>
						</div>
						
						<div class="grid-25 mobile-grid-50">
							<a href="http://3qdigital.com/services/youtube-advertising/">
								<i class="three-q-icon-VA_IconOnly"></i>
							</a>	
							<h3><a href="http://3qdigital.com/services/youtube-advertising/">VIDEO</a></h3>
							<p>Integrated, optimized YouTube campaigns to build dynamic brand awareness.</p>
						</div>
						
						<div class="grid-25 right-grid mobile-grid-50">
							<a href="http://3qdigital.com/services/design/">
								<i class="three-q-icon-DSN_IconOnly"></i>
							</a>	
							<h3><a href="http://3qdigital.com/services/design/">DESIGN</a></h3>
							<p>Landing page optimization, banner ad creation, and more – included.</p>
						</div>
						
					</div><!-- .secondary-services -->
				</div> <!-- grid-100 -->
				
			</main>
		</div><!-- #primary -->
</div><!-- .wrap -->

<div class="clear"></div>

<?php get_footer(); ?>

