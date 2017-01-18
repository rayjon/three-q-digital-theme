<?php
/*
 * Template Name: Landing - Whitepaper
 */ 

get_header(); ?>

<script type="text/javascript"> 
   var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www."); 
   document.write("<script src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'>" + "</sc" + "ript>"); 
</script> 

<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-1-1");
pageTracker._trackPageview();

function _uGC(l,n,s) {
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
		<div id="sidebar">
			<div class="three-q-form">
				<script type="text/javascript">
					function validations(){
						var a=true;var b='';
						var c=document.getElementsByTagName('input');
						
						for(var i=0;i<c.length;i++) {
							if(c.item(i).className.indexOf('required')>=0&&c.item(i).value==''){var d=c.item(i).id;var e=document.getElementsByTagName('label');for(var j=0;j<e.length;j++){if(e.item(j).getAttribute('for')==d){var f=e.item(j).innerHTML;b+='The field '+f.substring(0,f.indexOf('<span'))+' is required.\n';break}}a=false}}if(b!=''){alert(b)}return a}
				</script>
				
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
			
				<script type="text/javascript">
			
					function validateNumbers() {
						var form = document.getElementById('idForm');
						var expInt = /^\d+$/;
						for(var i = 0; i < form.elements.length; i++) {
							var node = form.elements[i];
							if (node.nodeName.toLowerCase() == 'select') {
								var id = node .getAttribute('id');
								if (id.indexOf('teravisiontech_codes_') != -1) {
								IDphoneNumber = id.substring('teravisiontech_codes_'.length,id.length);
								phoneNumber   = document.getElementById(IDphoneNumber).value;
								if (!phoneNumber.match(expInt))
								return false;
								}
							}
						}
						return true;
					}
					
					function concatCodes() {
						var form = document.getElementById('idForm');
						if (validateNumbers()) {
							for(var i = 0; i < form.elements.length; i++){
								var node = form.elements[i];
								if (node.nodeName.toLowerCase() == 'select') {
									var id = node .getAttribute('id');
									if (id.indexOf('teravisiontech_codes_') != -1) {
										IDphoneNumber = id.substring('teravisiontech_codes_'.length,id.length);
										phoneNumber   = document.getElementById(IDphoneNumber).value;
										document.getElementById(IDphoneNumber).value  = document.getElementById(id).value + document.getElementById(IDphoneNumber).value;
									if (document.getElementById(IDphoneNumber + '_ext').value != '')
										document.getElementById(IDphoneNumber).value = document.getElementById(IDphoneNumber).value + 'x' + document.getElementById(IDphoneNumber 					+ '_ext').value;				}
									}
							}
								return true;
						}
						alert('The phone number must only contain numbers');
						return false;
					}
			
					function copyCode(sCodes){
						document.getElementById(sCodes.id + '_input').value = sCodes.value;
					}
			
				</script>
			
				<title>Whitepaper Download Form</title>
				<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
			
				<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8"  id="idForm" onsubmit="return validations();" method="post" name="whitepaper-download">
					<h3><?php the_field('form_header'); ?> <img src="http://3qdigital.raymondcmjohnson.com/wp-content/themes/three_q_digital/images/whitepaper-icon.png"></h3>
					
					<input type="hidden" name="oid" value="00DU0000000IE43MAG" />					
					<input type="hidden" name="retURL" value="<?php the_field('thank_you_page_link'); ?>" />
					<input type="hidden" name="Campaign_ID" value="<?php the_field('sfdc_campaign_id'); ?>" />
					<input type="hidden" name="debugEmail" value="hillary@3qdigital.com" />
					<input type="hidden" name="debug" value="0" />
					<input type="hidden" id="external" name="external" value="1" />
					<input type="hidden" id="teravisiontech__Web_to_x_form_id__c" name="teravisiontech__Web_to_x_form_id__c" value="a07U000000R4nkZIAR"/>
					
					<!-- Hidden Fields for Google Analytics -->
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
					
					<select id="Whitepaper__c" name="Whitepaper__c">
						<i class="icon-caret-down"></i>
						<option value="">Choose a Whitepaper</option>
						<option value="Solve Retail's Digital Marketing Dilemma">Solve Retail's Digital Marketing Dilemma</option>
						<option value="Beginner's Guide to Attribution">Beginner's Guide to Attribution</option>
						<option value="A Guide to Facebook Advertising">A Guide to Facebook Advertising</option>
						<option value="Alpha Beta Account Structure Guide">Alpha Beta Account Structure Guide</option>
						<option value="Introducing the Wide Tail">Introducing the Wide Tail</option>
						<option value="Landing Page Best Practices">Landing Page Best Practices</option>
						<option value="Marketer's Guide to YouTube Ads">Marketer's Guide to YouTube Ads</option>
						<option value="The 7 Habits of Highly Effective SEM">The 7 Habits of Highly Effective SEM</option>
						<option value="The Lin-Rodnitzky Ratio">The Lin-Rodnitzky Ratio</option>
						<option value="A Guide to Optimizing Enhanced Campaigns">A Guide to Optimizing Enhanced Campaigns</option>
						<option value="A Guide to Removing Toxic Links">A Guide to Removing Toxic Links</option>
						<option value="The Complete Guide to AdWords Retargeting">The Complete Guide to AdWords Retargeting</option>
						<option value="The Definitive Guide to SEO Site Audits">The Definitive Guide to SEO Site Audits</option>
						<option value="The Hows and Whys of Display Advertising">The Hows and Whys of Display Advertising</option>
						<option value="Google Shopping Campaigns: A Complete Guide">Google Shopping Campaigns: A Complete Guide</option>
						<option value="LinkedIn Advertising: A Start-to-Finish Guide">LinkedIn Advertising: A Start-to-Finish Guide</option>
						<option value="Should One Agency Manage Your Multi-Channel Campaigns?">Should One Agency Manage Your Multi-Channel Campaigns?</option>
						<option value="Twitter Advertising: A Quick-Start Guide to Success">Twitter Advertising: A Quick-Start Guide to Success</option>
						<option value="Guide to the Google Display Network: Strategies and Best Practices">Guide to the Google Display Network: Strategies and Best Practices</option>
						<option value="Mobile Lead Gen Campaigns on AdWords: A Quick-Start Guide">Mobile Lead Gen Campaigns on AdWords: A Quick-Start Guide</option>
						<option value="How to Optimize Content for Panda 4.0">How to Optimize Content for Panda 4.0</option>
						<option value="5 Trends Today's CMOs Must Recognize">5 Trends Today's CMOs Must Recognize</option>
					</select>
					
					<div class="grid-50 grid-parent">
					<input id="first_name" name="first_name" type="text" placeholder="First Name" class="text" required>
					</div>
				
					<div class="grid-50 grid-parent">
					<input id="last_name" name="last_name" type="text" placeholder="Last Name" class="text alignright" required>
					</div>
				
					<div class="clear"></div>
				
					<div class="grid-50 grid-parent">
					<input id="email" name="email" type="text" placeholder="Email" class="text email" required>
					</div>
				
					<div class="grid-50 grid-parent">
					<input id="company" name="company" type="text" placeholder="Company" class="text alignright">
					</div>
				
					<div class="clear"></div>
				
					<div class="grid-50 grid-parent">
					<input id="phone" name="phone" type="text" placeholder="Phone" required>
					</div>
				
					<div class="grid-50 grid-parent">
					<input id="Monthly_Marketing_Budget__c" name="Monthly_Marketing_Budget__c" type="text" placeholder="Monthly Ad Spend" class="text alignright" required>
					</div>
				
					<div class="clear"></div>
				
					<input id="whitepaper-submit" type="submit" value="Get It Now" name="submit1"> 
				</form>
			</div><!-- .three-q-form -->
			<?php dynamic_sidebar( 'landing-sidebar' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>