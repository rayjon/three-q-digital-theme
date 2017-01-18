<?php get_header(); ?>


	<div class="hero-banner clients-hero">
		<div class="wrap">
			<div class="grid-55 mobile-grid-100 left-grid">
				<h3>We've supercharged growth for all types of partners: eCommerce, B2B, lead gen, EDU, private sale, and more. We like big ideas as much as&nbsp;we like big brands (though we&rsquo;ve helped many of the former grow into the latter).</h3>
				<h3>Here are some of the companies we&rsquo;re proud to call clients.</h3>
				<a class="button-jade hide-on-desktop" href="http://3qdigital.raymondcmjohnson.com/contact/">Become a Client</a>
			</div>
			<div class="grid-45 right-grid hide-on-mobile">
				<blockquote>"I've worked with 3Q Digital at multiple companies because I really value their commitment to client service. They've been a great partner and a secret weapon for our marketing team."<br/>- Loretta Jones, Insightly
				</blockquote>
				<a href="#testimonials" class="alignright">READ MORE TESTIMONIALS</a>
			</div>
		</div>
	</div>

	<?php echo do_shortcode ('[fast-100-banner]'); ?>

	<div class="page-seperator">
		<div class="wrap">
			<div class="grid-66 grid-parent">
				<i class="three-q-icon-IA_Icon"></i>
				<h2>Select Client List</h2>
			</div>
	        <div class="grid-33 right-grid">
				<a class="button-slate hide-on-mobile" href="http://3qdigital.com/contact/">Press to #supercharge.</a>
			</div>
		</div>
	</div>

	<div class="client-grid">
		<div class="wrap">
			<?php
			$client_args = array( 'post_type' => 'client', 'nopaging' => true);
			$client_loop = new WP_Query( $client_args );
			$clear_counter = 1;
			while ( $client_loop->have_posts() ) : $client_loop->the_post(); 
				if ( !(get_field( 'alumni_display' ) ) ) {
				?>
					<div class="grid-20 mobile-grid-50">
						<a href="<?php the_field( 'client_website' ) ?>"><?php the_post_thumbnail( 'full' ) ?></a>
					</div>
					
					<?php 
					if ( ($clear_counter % 5) == 0 ) { 
						$clear_counter++;
					?>
						<div class="clear hide-on-mobile"></div>
					<?php
					} else {
						$clear_counter++;
					}							
				}
			endwhile; 
			wp_reset_query();
			?>
		</div>
	</div>
	
	<div class="clear"></div>
	
	<div class="page-seperator">
		<div class="wrap">
			<div class="grid-66 grid-parent">
				<img class="alignleft" src="http://3qdigital.com/wp-content/themes/three-q-digital/images/mortarboard-icon-400px.png">
				<h2>Client Alumni</h2>
			</div>
	        <div class="grid-33 right-grid">
				<!-- <a class="button-slate hide-on-mobile" href="http://3qdigital.com/contact/">Become a Client</a> -->
			</div>
		</div>
	</div>
	
	<div class="client-grid">
		<div class="wrap">
			
			<?php
			/* The variables from the previous query are being used as loop argruments*/
			$clear_counter = 1;
			while ( $client_loop->have_posts() ) : $client_loop->the_post(); 
				if ( get_field( 'alumni_display' )  ) {
				?>
					<div class="grid-20 mobile-grid-50">
						<a href="<?php the_field( 'client_website' ) ?>"><?php the_post_thumbnail( 'full' ) ?></a>
					</div>					
				
					<?php 
					if ( ($clear_counter % 5) == 0 ) { 
						$clear_counter++;
					?>
						<div class="clear hide-on-mobile"></div>
					<?php
					} else {
						$clear_counter++;
					}	
				}	
			endwhile; 
			wp_reset_query();
			?>
		</div>
	</div>

	
	
	
	
	
	<div id="testimonials" class="page-seperator">
		<div class="wrap">
			<i class="three-q-icon-SMM_Icon"></i>
			<h2>CLIENT TESTIMONIALS</h2>
		</div>
	</div><!-- end page seperator -->
	<div class="wrap">
	<div class="grid-50 left-grid">
		<div class="testimonial">
			<blockquote>
				<p>Working with 3Q Digital is like having your own in-house online marketing operation, without the extra desks. David and his team are knowledgeable, trustworthy, and very responsive. Driving GoPro's online strategy and campaign execution requires extreme iterative collaboration between client and agency, and 3Q Digital provides us with full transparency, daily communication, and the tireless work ethic needed to be successful in this game.</p>
			</blockquote>
			<h3>Lee Topar &mdash; Director of Marketing, <a href="http://gopro.com" target="_blank">GoPro</a></h3>
		</div>
		<div class="testimonial">
			<blockquote>
				<p>3Q Digital is the secret sauce behind the acquisition programs of an impressive roster of innovative companies both large and small. I first met David (the CEO/founder) in 2009 to help me build a customer acquisition strategy with the dual challenges of a tight budget and a very competitive landscape. The 3Q team delivered meaningful, data-driven results quickly, allowing the company to compete successfully and drive user acquisition at scale. I have been leveraging his team and experience to deliver ROI-focused results ever since.</p>
			</blockquote>
			<h3>Amy McDowell &mdash; VP of Digital Marketing, <a href="http://www.baublebar.com" target="_blank">BaubleBar</a></h3>
		</div>
		<div class="testimonial">
			<blockquote>
				<p>Nice to have experts focused on this full-time. No way we could do as good of a job on our own.</p>
			</blockquote>
			<h3>Dana Kraft &mdash; Director of Marketing, <a href="http://www.businessuites.com/" target="_blank">BusinesSuites</a></h3>
		</div>
		<div class="testimonial">
			<blockquote>
				<p>Our team at 3Q Digital lived and breathed paid search. They were innovative and smart but most importantly they delivered results. 3Q Digital was a true strategic partner and extension of our marketing team.</p>	
			</blockquote>
			<h3>Jeff Herbst &mdash; CMO, <a href="http://www.noodle.com/" target="_blank">Noodle</a></h3>
		</div>
	</div><!--end grid-50 -->
	
	<div class="grid-50 right-grid">
	
		<div class="testimonial">
			<blockquote>
				<p>3Q Digital manages all our paid search and social efforts, and strategically we couldn't ask for a better partner. They have helped us grow our business while also reducing our customer acquisition costs. In addition to maintaining and optimizing our accounts, they proactively suggest new marketing tactics and messaging, always keeping our business goals and budgets in mind. On a day-to-day basis we are constantly impressed with how professional the client services team at 3Q Digital is as well.  Status calls are always extremely organized and questions are answered in a timely manner.  Thanks 3Q Digital!</p>
			</blockquote>	
			<h3>Daisy Downs &mdash; Co-Founder, <a href="https://www.urbansitter.com/" target="_blank">UrbanSitter</a></h3>
		</div>
		
		<div class="testimonial">
			<blockquote>
				<p>I've worked with 3Q Digital at multiple companies because I really value their commitment to client service. They've been a great partner and a secret weapon for our marketing team.</p>
			</blockquote>	
			<h3>Loretta Jones &mdash; VP of Marketing, <a href="http://insightly.com/" target="_blank">Insightly</a></h3>
		</div>
		<div class="testimonial">
			<blockquote>
				<p>3Q Digital has done an amazing job, and I really enjoy working with their team.</p>
			</blockquote>	
			<h3>Ron Schneidermann &mdash; Co-Founder and CMO, <a href="http://www.liftopia.com/" target="_blank">Liftopia</a></h3>
		</div>
		
		<div class="testimonial">
			<blockquote>
				<p>3Q Digital is the first company in 20 months to beat our own internal management of the PPC account. I just wanted to say, "Thanks!" I know you have put a lot of effort into our account beyond what you were collecting for on the other end, and I think that says a great deal about your character.</p>
			</blockquote>	
			<h3>Dave Middleton &mdash; Digital Marketing Manager, <a href="http://aftermathinc.com" target="_blank">Aftermath</a></h3>
		</div>
	
	</div><!--end grid-50 -->	
</div>

<?php get_footer(); ?>




