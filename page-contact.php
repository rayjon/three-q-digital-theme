<?php get_header(); ?>

<div class="wrap">
	<h1 class="entry-title">
		<img class="align-left contact-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-icon.png">Contact Us
	</h1>

	<div class="grid-50 grid-parent">
		<div class="leading-text">
			<p>Interested in learning how we can #supercharge your growth? Drop us a line.</p>
		</div>
		
		<div class="three-q-location">
			<img class="alignleft" alt="3Q Digital - Silicon Valley" src="<?php echo get_stylesheet_directory_uri(); ?>/images/silicon-valley.jpg" />
			<div class="alignleft">
				<h3>3Q DIGITAL<br/>SILICON VALLEY</h3>
				<p>155 Bovet Rd.<br/>
				Suite 480<br/>
				San Mateo, CA 94402<br/>
				650 539-4124
				</p>
			</div>
		</div>
		
		<div class="clear"></div>
		
		<div class="three-q-location">
			<img class="alignleft" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/chicago.jpg" />
			<div class="alignleft">
				<h3>3Q DIGITAL CHICAGO</h3>
				<p>1 N. LaSalle St.<br />
					Suite 2800<br/>Chicago, IL 60602-4025<br />
				</p>
			</div>
		</div>
		
		<div class="clear"></div>

		<div class="three-q-location">
			<img class="alignleft" alt="3Q Digital San Diego" src="<?php echo get_stylesheet_directory_uri(); ?>/images/san-diego.jpg" />
			<div class="alignleft">
				<h3>3Q DIGITAL<br/>SAN DIEGO</h3>
				<p>624 Broadway<br />
					Suite 504<br />
					San Diego, CA 92101<br />
				</p>
			</div>
		</div>
		
		<div class="clear"></div>

		<div class="three-q-location">
			<img class="alignleft" alt="3Q Digital San Francisco" src="<?php echo get_stylesheet_directory_uri(); ?>/images/san-francisco.jpg" />
			<div class="alignleft">
				<h3>3Q DIGITAL<br/>SAN FRANCISCO</h3>
					<p>75 Federal St.<br/ >
                        San Francisco, CA 94107<br/ >
					</p>
            </div>
        </div>
			
		<div class="clear"></div>
		
		<div class="three-q-location">
			<img class="alignleft" alt="3Q Digital Burlington" src="<?php echo get_stylesheet_directory_uri(); ?>/images/hogback-mountain-vermont.jpg" />
			<div class="alignleft">
				<h3>3Q DIGITAL<br/>
					BURLINGTON</h3>
					<p>47 Maple St.<br/ >
						Suite 300<br />
						Burlington, VT 05401<br/ >
					</p>
				</div>
			</div>

		<div class="clear"></div>
		
		<br/>
	</div>

	<div class="grid-45 mobile-100 prefix-5">
    	<p>Want to partner with us or looking for a vendor opportunity? Contact us <a href="<?php echo site_url('/partners/'); ?>">here.</a><p>
		<?php get_template_part( 'forms/form' , 'contact' ); ?>	
	</div>
</div>

<?php get_footer(); ?>