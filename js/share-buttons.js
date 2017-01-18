/**
 * Javascripts for Sharing Buttons on Blog Posts
 *
 * 
 */

( function( $ ) {
	/* Twitter JS */
	<script>
		!function(d,s,id) {
			var js,fjs=d.getElementsByTagName(s)[0],
			p=/^http:/.test(d.location)?'http':'https';
			if(!d.getElementById(id)){
				js=d.createElement(s);
				js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
				fjs.parentNode.insertBefore(js,fjs);
			}
		}
		(document, 'script', 'twitter-wjs');
	</script>
	
	/* Linked In */
	<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US </script>
	
	/* Place this tag after the last +1 button tag. */
	<script type="text/javascript">
	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/plusone.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>
	
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
			
} )( jQuery );
