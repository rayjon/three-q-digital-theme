<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package 3Q Digital
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    	<header class="mobile-header">
        	<div class="wrap">
        	    <h2>3Q DIGITAL OFFICES</h2>
        	</div>
    	</header>
		<div class="wrap">
			<!--<?php do_action( 'three_q_digital_credits' ); ?>-->
			<div class="grid-33 mobile-100 grid-parent">
				<h2>3Q DIGITAL OFFICES</h2>
				
				<div class="grid-50 grid-parent mobile-grid-50">
					<h3>SILICON VALLEY</h3>
					<p>155 Bovet Rd.<br/> 
					Suite 480<br/>
					San Mateo, CA 94402<br/>
					650 539-4124</p>
					
					<h3>CHICAGO</h3>
					<p>1 N. LaSalle St.<br/>
					Suite 2800<br/>
					Chicago, IL 60602-4025
					</p>
					
					<h3>BURLINGTON</h3>
					<p>47 Maple St.<br/>
					Suite 300<br/>
					Burlington, VT 05401
					</p>	
				</div>
				
				<div class="grid-50 mobile-grid-50">
					<h3>SAN FRANCISCO</h3>
					<p>75 Federal St.<br/>
					San Francisco, CA 94107
					</p>
					
					<h3>SAN DIEGO</h3>
					<p>624 Broadway<br/>
					Suite 504<br/>
					San Diego, CA 92101
					</p>
				</div>				
			</div>
				
				<div class="grid-33 mobile-100 grid-parent">
					<h2 class="hide-on-mobile">Newsletter Signup</h2>
                    <?php get_template_part( 'forms/form' , 'newsletter-subscription' ); ?>
				</div>
								
				<div class="grid-33 grid-parent mobile-100">
					<h2 class="hide-on-mobile">Connect With Us</h2>
					<a class="social-icon" href="https://twitter.com/3qdigital"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a class="social-icon" href="https://www.facebook.com/3qdigital"><i class="fa fa-facebook" aria-hidden="true"></i>
</a>
					<a class="social-icon" href="http://www.linkedin.com/company/264114?trk=tyah&trkInfo=tas%3A3q%2Cidx%3A1-2-2"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					<a class="social-icon" href="https://plus.google.com/101796185644140706588" rel="publisher"><i class="fa fa-google-plus" aria-hidden="true"></i>
</i></a>
				</div>
				
				<div class="clear"></div>
				
				<hr/>
		       
				<div class="grid-60 mobile-grid-100 grid-parent">
		       		<?php wp_nav_menu( array('menu' => 'Top-Level', 'depth' => 1 )); ?>
			   	</div>
		       
			   	<hr class="hide-on-desktop"/>
		       
			   	<div class="grid-40 mobile-grid-100 grid-parent">
			       <div class="copyright">
			       		COPYRIGHT 2008-2014 3Q DIGITAL.<br/> ALL RIGHTS RESERVED.
			       		<div class="clear"></div>
			       		<a href="<?php site_url( '/privacy-policy/'); ?>" title="View Our Privacy Policy">PRIVACY POLICY</a>
			       </div>
		       </div>
		</div>
	</footer>
</div>
</div>

<?php wp_footer(); ?>		
	</body>	
</html>