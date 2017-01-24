<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package 3Q Digital
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="width=device-width, user-scalable=yes"> 
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta property="twitter:account_id" content="106331284" />

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
		<script src="https://apis.google.com/js/plusone.js"></script>
		<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script> --> <!-- Google Maps API -->

<!-- Google Analytics Verification -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-43522254-1', '3qdigital.com');
		  ga('send', 'pageview');
  		</script>
  		
  		<script type="text/javascript">
			  var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-43522254-1']);
			  _gaq.push(['_trackPageview']);
			
			  (function() {
			    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();
  		</script>
  		<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="fb-root"></div>
    <!-- Google Tag Manager -->
    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-NTNQSJ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NTNQSJ');
        </script>
    <!-- End Google Tag Manager -->
    
    <script>
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    
    <script type="text/javascript">
    	jQuery(document).ready(function() {
    		jQuery(".fancybox").fancybox();
    	});
    </script>

    <script type="text/javascript">
    	jQuery(document).ready(function() {
    		jQuery(".fancybox").fancybox();
    	});
    </script>

    <script>
        jQuery(document).ready(function() {
            if ( jQuery.cookie('3q_referrer') == null ) {
                jQuery.cookie('3q_referrer', document.referrer);
            }
            jQuery('#referrer__c').val(jQuery.cookie('3q_referrer'));
        });
    </script>

<div class="grid-container">
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="wrap">
			<div class="grid-20 mobile-100 grid-parent">
				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"></a></h1>
					<!--<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>-->
				</div>
				<?php if ( is_page( 'blog' ) || is_singular( 'post' ) || is_archive() ) { ?>
				<h1 class="menu-toggle">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="35px" height="35px" viewBox="0 0 35 35" enable-background="new 0 0 35 35" xml:space="preserve">
	 					<path fill-rule="evenodd" clip-rule="evenodd" fill="#4C4C4D" d="M17.5,0C7.835,0,0,7.835,0,17.5C0,27.165,7.835,35,17.5,35
	C27.165,35,35,27.165,35,17.5C35,7.835,27.165,0,17.5,0z M24.792,23.171H10.208v-1.62h14.583V23.171z M24.792,18.31H10.208v-1.62
	h14.583V18.31z M24.792,13.449H10.208v-1.62h14.583V13.449z"/>
					</svg>
				</h1>
				<?php } else { ?>
				<h1 class="menu-toggle">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="35px" height="35px" viewBox="0 0 35 35" enable-background="new 0 0 35 35" xml:space="preserve">
	 					<path fill-rule="evenodd" clip-rule="evenodd" fill="#F7BE16" d="M17.5,0C7.835,0,0,7.835,0,17.5C0,27.165,7.835,35,17.5,35
	C27.165,35,35,27.165,35,17.5C35,7.835,27.165,0,17.5,0z M24.792,23.171H10.208v-1.62h14.583V23.171z M24.792,18.31H10.208v-1.62
	h14.583V18.31z M24.792,13.449H10.208v-1.62h14.583V13.449z"/>
					</svg>
				</h1>
				<?php } ?>
			</div>
	
			<div class="grid-80 mobile-100 grid-parent">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<i class="icon-caret-up menu-arrow"></i>
					<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'three_q_digital' ); ?>"><?php _e( 'Skip to content', 'three_q_digital' ); ?></a></div>
		
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
		</div><!-- .wrap -->
	</header><!-- #masthead -->

	<div id="content" class="site-content"> 