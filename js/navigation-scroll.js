jQuery(document).ready(function(){       
	var scroll_pos = 0;
    jQuery(".entry-content").css('margin', '0');
    jQuery("#masthead").css({ "background-color" : "transparent" });
    
    jQuery(document).scroll (
    	function() { 
        	scroll_pos = jQuery(this).scrollTop();
        	
        	// make background solid after scrolling
			if( scroll_pos > 0) {
            	jQuery("#masthead").css({ "background-color" : "#28464A" , "position" : "fixed" , "padding" : "20px 0"});
			} else {
            	jQuery("#masthead").css({ "background-color" : "transparent" , "position" : "absolute", "padding" : "20px 0"});
			}
			
		}
    );
});