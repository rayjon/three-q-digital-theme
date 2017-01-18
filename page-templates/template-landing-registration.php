<?php
/*
 * Template Name: Landing - Registration
 */ 

get_header(); ?>

<script type="text/javascript"> 
   var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www."); 
   document.write("<script src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'>" + "</sc" + "ript>"); 
</script> 

<script type="text/javascript">
    var pageTracker = _gat._getTracker("UA-1-1");
    pageTracker._trackPageview();
    
    function _uGC(l,n,s)
    {
    if (!l || l=="" || !n || n=="" || !s || s=="") return "-";
    var i,i2,i3,c="-";
    i=l.indexOf(n);
    i3=n.indexOf("=")+1;
    if (i > -1) {
    i2=l.indexOf(s,i); if (i2 < 0){ i2=l.length; }
    c=l.substring((i+i3),i2);
    }
    return c;
    }
    
    var z = _uGC(document.cookie, '__utmz=', ';');
    
    var source  = _uGC(z, 'utmcsr=', '|');
    var medium  = _uGC(z, 'utmcmd=', '|');
    var term    = _uGC(z, 'utmctr=', '|');
    var content = _uGC(z, 'utmcct=', '|');
    var campaign = _uGC(z, 'utmccn=', '|');
    var gclid   = _uGC(z, 'utmgclid=', '|');
    
    if (gclid !="-") {
     source = 'google';
     medium = 'cpc';
    }
    
    var csegment = _uGC(document.cookie, '__utmv=', ';');
    if (csegment != '-') {
     var csegmentex = /[1-9]*?\.(.*)/;
     csegment = csegment.match(csegmentex);
     csegment = csegment[1];
    
    } else {
     csegment = '(not set)';
    }
    
    var a = _uGC(document.cookie, '__utma=', ';');
    var aParts = a.split(".");
    var nVisits = aParts[5];
    
    function populateHiddenFields(f) { 
          f.source.value  = source; 
          f.medium.value  = medium; 
          f.term.value    = term; 
          f.content.value = content; 
          f.campaign.value = campaign; 
          f.segment.value = csegment; 
          f.numVisits.value = nVisits;
    
          alert('source='+f.source.value); 
          alert('medium='+f.medium.value); 
          alert('term='+f.term.value); 
          alert('content='+f.content.value); 
          alert('campaign='+f.campaign.value); 
          alert('custom segment='+f.segment.value); 
          alert('number of visits='+f.numVisits.value);
    
          return false; 
    }
</script>

<div class="landing-hero">
	<div class="wrap">
		<div class="grid-100 grid-parent">
			<h1><?php the_field('main_header'); ?></h1>
			<h2><?php the_field('sub_header'); ?></h2>
		</div>
	</div>
</div>

<div class="clear"></div>

<!-- /* Main Content */ -->
<div class="wrap">
	<div class="grid-60 mobile-grid-100 left-grid">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div>
	
	<!-- /* Sidebar */ -->
	<div class="grid-40 mobile-grid-100 right-grid">
		<div id="sidebar" class="sidebar">
			<div class="three-q-form">
				<script type="text/javascript">
						var aoProtocol = location.protocol;
						if ( aoProtocol.indexOf('http') < 0 ) aoProtocol = 'http:';
						var aoCAP = {
							aid: '8109',
							fid: '0002',
							did: 'd-0001',
							server: 'marketing.3qdigital.com',
							formName: 'whitepaper-download',
							protocol: aoProtocol
						};
						document.write( '<script type="text/javascript" src="'+aoCAP.protocol+'//'+aoCAP.server+'/acton/js/formcap.min.js"><'+'/script>' );
				</script>
							
				<title>Whitepaper Download Form</title>
				<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
			
				<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8"  id="idForm" method="post" name="whitepaper-download">
					<h3><?php the_field('form_header'); ?></h3>
					
					<input type="hidden" name="oid" value="00DU0000000IE43MAG" />					
					<input type="hidden" name="retURL" value="<?php the_field('thank_you_page_link'); ?>" />
					<input type="hidden" name="Campaign_ID" value="<?php the_field('sfdc_campaign_id'); ?>" />
					<input type="hidden" name="member_status" value="Responded">
					<input type="hidden" name="debugEmail" value="hillary@3qdigital.com" />
					<input type="hidden" name="debug" value="0" />
					<input type="hidden" id="external" name="external" value="1" />
					<input type="hidden" id="teravisiontech__Web_to_x_form_id__c" name="teravisiontech__Web_to_x_form_id__c" value="a07U000000R4nkZIAR"/>
					
					<!-- Hidden Fields for Daddy Analytics -->
					<input type=hidden id="Daddy_Analytics_Token" name="00NU00000046DWm">
					<input type=hidden id="Daddy_Analytics_WebForm_URL" name="00NU00000046DWs">
					
					<!-- Hidden Fields for Google Analytics -->
					<input type="hidden" name="medium" id="medium__c" value="" />
					<input type="hidden" name="source" id="source__c" value="" />
					<input type="hidden" name="campaign" id="campaign__c" value="" />
					<input type="hidden" name="term" id="term__c" value="" />
					<input type="hidden" name="content" id="content__c" value="" />
					<input type="hidden" name="segment" id="segment__c" value=""/>
					<input type="hidden" name="numVisits" id="numVisits__c" value=""/>
					
					<div class="grid-50 left-grid">
					<input id="first_name" name="first_name" type="text" placeholder="First Name" class="text" required>
					</div>
				
					<div class="grid-50 right-grid">
					<input id="last_name" name="last_name" type="text" placeholder="Last Name" class="text alignright" required>
					</div>
				
					<div class="clear"></div>
				
					<div class="grid-50 left-grid">
					<input id="email" name="email" type="text" placeholder="Email" class="text email" required>
					</div>
				
					<div class="grid-50 right-grid">
					<input id="company" name="company" type="text" placeholder="Company" class="text alignright">
					</div>
				
					<div class="clear"></div>
				
					<div class="grid-50 left-grid">
					<input id="phone" name="phone" type="text" placeholder="Phone" required>
					</div>
					
					<?php if( (get_field('3qd_landing_registration_form_customizations')) == 'Position Form' ) { ?>
    					<!-- Alternate Form Fields -->
    					<div class="clear"></div>
    					<div class="grid-100 grid-parent">
                            <label for="Position__c">Position:</label>
                			<select id="Position__c" name="Position__c" required>
                				<option value="">Choose Your Position</option>
                				<option value="C-Level">C-Level</option>
                				<option value="VP-Level">VP-Level</option>
                				<option value="Director-Level">Director-Level</option>
                				<option value="Manager-Level">Manager-Level</option>
                				<option value="Associate">Associate</option>
                			</select>
                		</div>
					<?php } else { ?>
                        <div class="grid-50 right-grid">
    					    <input id="Monthly_Marketing_Budget__c" name="Monthly_Marketing_Budget__c" type="text" placeholder="Monthly Ad Spend" class="text alignright" required>
    					</div> 
    				<?php } ?>
					
					<div class="clear"></div>
				
					<input id="whitepaper-submit" type="submit" value="Register" name="submit1"> 
				</form>
			</div><!-- .three-q-form -->
			<?php dynamic_sidebar( 'landing-sidebar' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>