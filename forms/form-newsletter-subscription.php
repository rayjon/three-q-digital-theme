<div class="newsletter-subscription-form">	
    <title>Blog Subscription Form</title>
	<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
	<form data-parsley-validate enctype="multipart/form-data" action="http://marketing.3qdigital.com/acton/eform/8109/0005/d-ext-0001" id="newsletter-subscription-form" onsubmit="save_data()" autocomplete="on" method="post" name="newsletter-subscription-form" accept-charset="UTF-8">
        <!--         Scripts -->
        <script type="text/javascript" src="http://marketing.3qdigital.com/acton/form/8109/0005/form.js"></script>
        <script type="text/javascript">
            function doSubmit(form)
        			{
        			try {
        				if (typeof(customSubmitProcessing) === "function")
        					customSubmitProcessing();
        				}
        			catch (err) { }
        			// Enable the form handler
        			document.getElementById('ao_bot').value = 'nope';
                    try{
                    // Save the parent href if the form is in an iframe
                    document.getElementById('ao_iframe').value = window.parent ? window.parent.location.href : "";
                    }catch(xxx){}
        			// Submit
        			form.submit();
        			}
        </script>
    
        <!--     Hidden Fields -->
		<input type="hidden" name="retURL" value="<?php echo get_site_url(); ?>/newsletter-subscription-thank-you/" >
        <!-- Act-On Hidden Fields -->
		<input type="hidden" name="ao_a" value="8109">
        <input type="hidden" name="ao_f" value="0005">
        <input type="hidden" name="ao_d"	value="0005:d-0001">
        <input type="hidden" name="ao_jstzo"	id="ao_jstzo" value="">
        <input type="hidden" name="ao_cuid" value="">
        <input type="hidden" name="ao_srcid"	value="">
        <input type="hidden" name="ao_bot"	id="ao_bot"	value="yes">
        <input type="hidden" name="ao_camp"	value="">
        <input type="hidden" name="ao_iframe" id="ao_iframe" value=""                  >
		<input type="hidden" id="form_0005_fld_1" name="Lead Source" value="Newsletter Signup">
		<input type="hidden" id="" name="status" value="open">
		<input type="hidden" id="" name="company" value="">
       
        <header>
		    <h1>#SUPERCHARGE your daily thought leadership intake. Sign up for email updates from our blog.</h1>  
		</header>
				
		<label for="first_name">First Name</label>			
        <input id="first_name" name="First Name" type="text" placeholder="First Name" class="required text" required>
	
        <label for="last_name">Last Name</label>
        <input id="last_name" name="Last Name" type="text" placeholder="Last Name" class="text" required>
		
		<label for="email">Email</label>
        <input id="email" name="Email" type="email" placeholder="Email" class="text email" required>
			
		<input type="button" onClick="doSubmit(document.getElementById('newsletter-subscription-form'))" id="subscription-submit" name="subscription-submit" value="Subscribe" name="subscription-submit">
	</form>
</div><!-- .blog-subscription-form -->