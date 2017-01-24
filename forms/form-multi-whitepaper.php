<div class="whitepaper-download-form">	
    <title>Whitepaper Download Form</title>
	<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">

	<form data-parsley-validate action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8"  id="idForm" onsubmit="save_data()" autocomplete="on" method="post" name="whitepaper-download">
        <header>
		    <h3>Download Our Whitepapers<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/whitepaper-icon.png"></h3>  
		</header> 
		<input type="hidden" name="retURL" value="<?php echo get_site_url(); ?>/whitepaper-download-thank-you" />
		<input type="hidden" name="oid" value="00DU0000000IE43MAG" />
		<input type="hidden" id="teravisiontech__Web_to_x_form_id__c" name="teravisiontech__Web_to_x_form_id__c" value="a07U000000R4nkZIAR"/>
		<input type="hidden" name="debugEmail" value="hillary@3qdigital.com" />
		<input type="hidden" name="debug" value="0" />
		<input type="hidden" id="external" name="external" value="1" />
		<input type="hidden" name="member_status" value="Responded">
		<input type="hidden" name="medium__c" id="medium__c" value="" />
		<input type="hidden" name="source__c" id="source__c" value="" />
		<input type="hidden" name="campaign__c" id="campaign__c" value="" />
		<input type="hidden" name="term__c" id="term__c" value="" />
		<input type="hidden" name="content__c" id="content__c" value="" />
		<input type="hidden" name="numVisits__c" id="numVisits__c" value="" />
		<input type="hidden" name="pageviews__c" id="pageviews__c" value="" />
		<input id="referrer__c" name="referrer__c" type="hidden" class="text " value="" />
		<input id="Latitude__c" name="Latitude__c" class="text" type="hidden" value="" />
        <input id="Longitude__c" name="Longitude__c" class="text" type="hidden" value="" />
        <input id="Geolocated_Address__c" name="Geolocated_Address__c" class="text" type="hidden" value="" />
        <input id="Visitor_ID__c" name="Visitor_ID__c" type="hidden" value="" />

        <!-- ActOn Form Capture - Sends form data to ActOn -->
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
		
		<?php
		/* Check for Blog Pages */ 
		if( is_singular('services') ) {
    		echo '<input type="hidden" id="lead_source" name="lead_source" value="Whitepaper download (Service URL)" />';
        } else if( is_page( 'blog' ) || is_single() ) { 
            echo '<input type="hidden" id="lead_source" name="lead_source" value="Blog subscription" />';
        } else {
            echo '<input type="hidden" id="lead_source" name="lead_source" value="Whitepaper download" />';
        }
    		
		/* Check for Mobile Devices */
		if( wp_is_mobile() == TRUE ) {
            echo '<input type="hidden" name="Mobile_Site_Download__c" id="Mobile_Site_Download__c" value="1">';
		} else {
            echo '<input type="hidden" name="Desktop_Download__c" id="Desktop_Download__c" value="1">';
		}
		?>
			
		<select id="Campaign_ID" name="Campaign_ID" placeholder="Choose a Whitepaper" required>
            <option value="" default selected>Choose a Whitepaper</option>
            <option value="701U0000000CL5g">Use Google Analytics to Attract and Retain Customers</option>
            <option value="701U0000000CKai">The Complete Guide to Manual Bidding in SEM</option>
            <option value="701U00000007rYu">A Complete Guide to App Store Optimization</option>
            <option value="701U00000007me3">Optimize Mobile Design by Reflecting User Intent</option>
            <option value="701U00000007kfR">Before and After the Click: the Ideal User Experience</option>
			<option value="701U00000007g4l">Should Your SEM Agency Manage Your Google Shopping Campaigns</option>
			<option value="701U00000006tmr">Solve Retail's Digital Marketing Dilemma</option>
			<option value="701U00000006tkb">Beginner's Guide to Attribution</option>
			<option value="701U00000006tkR">Alpha Beta Account Structure Guide</option>
			<option value="701U00000006tlU">Landing Page Best Practices</option>
			<option value="701U00000006tn1">The 7 Habits of Highly Effective SEM</option>
			<option value="701U00000006tna">The Lin-Rodnitzky Ratio</option>
			<option value="701U00000006tkM">A Guide to Removing Toxic Links</option>
			<option value="701U00000006tn6">The Complete Guide to AdWords Retargeting</option>
			<option value="701U00000006tnB">The Definitive Guide to SEO Site Audits</option>
			<option value="701U00000006tnV">The Hows and Whys of Display Advertising</option>
			<option value="701U00000006tkg">Google Shopping Campaigns: A Complete Guide</option>
			<option value="701U00000006tmm">Should One Agency Manage Your Multi-Channel Campaigns?</option>
			<option value="701U00000006tkq">Guide to the Google Display Network: Strategies and Best Practices</option>
			<option value="701U00000006tmh">Mobile Lead Gen Campaigns on AdWords: A Quick-Start Guide</option>
			<option value="701U00000006uAa">How to Optimize Content for Panda 4.0</option>
			<option value="701U00000006tYt">5 Trends Today's CMOs Must Recognize</option>
			<option value="701U00000006ykB">3 Types of Data Every CMO Should Leverage</option>
			<option value="701U00000007Qrk">Why 1st-Party Data is Marketing's Hottest Asset</option>
			<option value="701U00000007U0F">Improve Mobile eCommerce with Lead Gen Tactics</option>
		</select>
				
		<div class="clear"></div>
		
		<div class="grid-50 left-grid">
		    <input id="first_name" name="first_name" type="text" placeholder="First Name" class="required text" required>
		</div>
	
		<div class="grid-50 right-grid">
		    <input id="last_name" name="last_name" type="text" placeholder="Last Name" class="text" required>
		</div>
	
		<div class="clear"></div>
	
		<div class="grid-50 left-grid">
		    <input id="email" name="email" type="email" placeholder="Email" class="text email" required>
		</div>
	
		<div class="grid-50 right-grid">
		    <input id="company" name="company" type="text" placeholder="Company" class="text">
		</div>
	
		<div class="clear"></div>
	
		<div class="grid-50 left-grid">
		    <input id="phone" name="phone" type="tel" placeholder="Phone" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" class="text" required>
		</div>
	
		<div class="grid-50 right-grid">
		    <input id="Monthly_Marketing_Budget__c" name="Monthly_Marketing_Budget__c" type="text" placeholder="Monthly Ad Spend" class="text" required>
		</div>
				
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
		
		<div class="grid-100 grid-parent">
            <label for="industry">Industry:</label>
    		<select id="industry" name="industry" required>
                <option value="">Choose an Industry</option>
                <option value="Apparel">Apparel</option>
                <option value="Biotechnology">Biotechnology</option>
                <option value="Consumer Packages Goods">Consumer Packages Goods</option>
                <option value="Education">Education</option>
                <option value="Energy">Energy</option>
                <option value="Engineering">Engineering</option>
                <option value="Entertainment">Entertainment</option>
                <option value="Environmental">Environmental</option>
                <option value="Finance">Finance</option>
                <option value="Food & Beverage">Food & Beverage</option>
                <option value="Government">Government</option>
                <option value="Healthcare">Healthcare</option>
                <option value="High Tech">High Tech</option>
                <option value="Insurance">Insurance</option>
                <option value="Internet">Internet</option>
                <option value="Manufacturing">Manufacturing</option>
                <option value="Marketing">Marketing</option>
                <option value="Not For Profit">Not For Profit</option>
                <option value="Oil & Gas">Oil & Gas</option>
                <option value="Platforms / Technology Providers">Platforms / Technology Providers</option>
                <option value="Real Estate">Real Estate</option>
                <option value="Retail">Retail</option>
                <option value="Staffing and Recruiting">Staffing and Recruiting</option>
                <option value="Technology">Technology</option>
                <option value="Telecommunications">Telecommunications</option>
                <option value="Utilities">Utilities</option>
                <option value="Other">Other</option>
            </select>
		</div>
		
		<div class="clear"></div>

		<div class="grid-100 grid-parent">
            <label for="Business_Model__c">Business Model:</label>		
    		<select id="Business_Model__c" name="Business_Model__c" required>
                <option value="">Choose a Business Model</option>
                <option value="Business-to-Business">Business-to-Business</option>
                <option value="Business-to-Consumer">Business-to-Consumer</option>
                <option value="Business-to-Government">Business-to-Government</option>
                <option value="E-commerce">E-commerce</option>
    		</select>
		</div>
					
		<div class="clear"></div>
		
		<p>Please Select any Services that Interest You:</p>
		
		<div class="grid-50 left-grid">
			<input id="SS_SEM__c" name="SS_SEM__c" type="checkbox" value="1">
			<label for="SS_SEM__c">SEM</label>
			<div class="clear"></div>
			<input id="SS_SEO__c" name="SS_SEO__c" type="checkbox" value="1">
			<label for="SS_SEO__c">SEO</label>
			<div class="clear"></div>
			<input id="SS_Paid_Social__c" name="SS_Paid_Social__c" type="checkbox" value="1">
			<label for="SS_Paid_Social__c">Paid Social</label>
			<div class="clear"></div>
			<input id="SS_Display__c" name="SS_Display__c" type="checkbox" value="1">
			<label for="SS_Display__c">Display</label>
		</div>
		
		<div class="grid-50 right-grid">
			<input id="SS_Analytics__c" name="SS_Analytics__c" type="checkbox" value="1">
			<label for="SS_Analytics__c">Analytics</label>
			<div class="clear"></div>
			<input id="SS_Mobile__c" name="SS_Mobile__c" type="checkbox" value="1">
			<label for="SS_Mobile__c">Mobile</label>
			<div class="clear"></div>
			<input id="SS_LPO__c" name="SS_LPO__c" type="checkbox" value="1">
			<label for="SS_LPO__c">LPO</label>
			<div class="clear"></div>
			<input id="SS_Creative__c" name="SS_Creative__c" type="checkbox" value="1">
			<label for="SS_Creative__c">Creative</label>
		</div>
		
		<input id="whitepaper-submit" type="submit" value="Get It Now" name="whitepaper-submit"> 
	</form>
</div><!-- .whitepaper-download-form -->