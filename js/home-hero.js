jQuery(document).ready(
	function() {       
			var scroll_pos = 0;
			
			jQuery( ".home-main a.interactive-logo, .home-main h3.desktop a" ).hover(
				function() {
					jQuery( ".home-main a.interactive-logo, .home-main h3.desktop a" ).addClass( "hover" );
				}, 
				function() {
					jQuery( ".home-main a.interactive-logo, .home-main h3.desktop a" ).removeClass( "hover" );
				}
			);
			
			jQuery( ".home-main a.interactive-logo, .home-main h3.desktop a").click (
				function () {
					jQuery( ".home-main a.interactive-logo" ).css( {"margin":"0 2rem 0 0"});
	    			jQuery( ".home-main h2" ).hide(600);
	    			jQuery( ".home-main h3.desktop a" ).hide(600);
	    			jQuery( ".tab-wrap" ).delay(600).fadeIn(1100);
	    			/* jQuery( ".tabs" ).css ( { "display" : "inline-block" } ); */
	    			/* jQuery( ".tabs li" ).css ( { "opacity" : "1" } ); */
	    			jQuery( ".tabs li:nth-child(1)" ).delay(600).fadeIn(500);
	    			jQuery( ".tabs li:nth-child(2)" ).delay(600).fadeIn(700);
	    			jQuery( ".tabs li:nth-child(3)" ).delay(600).fadeIn(900);
	    		}
			);  
	}
);

jQuery('ul.tabs').each(function(){
  // For each set of tabs, we want to keep track of
  // which tab is active and it's associated content
  var jQueryactive, jQuerycontent, jQuerylinks = jQuery(this).find('a');

  // If the location.hash matches one of the links, use that as the active tab.
  // If no match is found, use the first link as the initial active tab.
  jQueryactive = jQuery(jQuerylinks.filter('[href="'+location.hash+'"]')[0] || jQuerylinks[0]);
  jQueryactive.addClass('active');
  jQuerycontent = jQuery(jQueryactive.attr('href'));

  // Hide the remaining content
  jQuerylinks.not(jQueryactive).each(function () {
    jQuery(jQuery(this).attr('href')).hide();
  });

  // Bind the click event handler
  jQuery(this).on('click', 'a', function(e){
    // Make the old tab inactive.
    jQueryactive.removeClass('active');
    jQuerycontent.hide();

    // Update the variables with the new link and content
    jQueryactive = jQuery(this);
    jQuerycontent = jQuery(jQuery(this).attr('href'));

    // Make the tab active.
    jQueryactive.addClass('active');
    jQuerycontent.show();

    // Prevent the anchor's default click action
    e.preventDefault();
  });
});