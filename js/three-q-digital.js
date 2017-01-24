/* HTML5 Javascript Geolocation */
/* Attempts to retrive lattitude and longitude of the visitor and stores the informatino in hidden fields to be submitted in Lead Forms */

/* HTML5 Javascript Geolocation */
// function reverseGeolocation() {
//     if ( navigator.geolocation ) {
//         var myLocation;
//         function getLocation( position ) {
//             myLocation = {
//             "lat": position.coords.latitude, 
//             "lng": position.coords.longitude
//             }
//             codeLatLng( myLocation.lat, myLocation.lng );
//             document.getElementById('Latitude__c').value = position.coords.latitude; 
//             document.getElementById('Longitude__c').value = position.coords.longitude;
//         };
//         navigator.geolocation.getCurrentPosition(getLocation);
//     } else {
//         return;
//     }
// }

// function codeLatLng( lattitude, longitude ) {
//     var geocoder = new google.maps.Geocoder();
//     var latlng = new google.maps.LatLng( lattitude, longitude );
//     geocoder.geocode({'latLng': latlng}, function(results, status) {
//         if (status == google.maps.GeocoderStatus.OK) {
//             if (results[0]) {
//                 document.getElementById('Geolocated_Address__c').value = results[0].formatted_address;
//                 return;
//             } else {
//                 return;
//             }
//         }
//     });
// }

/* jQuery( document ).ready( reverseGeolocation ); */

/*********************************************************** 
*  Save Data Function
*  Called on form submits to save submission date into local
*  storage for later access.
*  - R. Johnson, 7/25/15
***********************************************************/

// function save_data() {
//     localStorage.firstname = document.getElementById('first_name').value;
//     localStorage.lastname = document.getElementById('last_name').value;
//     localStorage.email = document.getElementById('email').value;
//     localStorage.company = document.getElementById('company').value;
//     localStorage.phone = document.getElementById('phone').value;
//     localStorage.Monthly_Marketing_Budget__c = document.getElementById('Monthly_Marketing_Budget__c').value;
//     localStorage.Position__c = document.getElementById("Position__c").value;
//     localStorage.industry = document.getElementById("industry").value;
//     localStorage.Business_Model__c = document.getElementById("Business_Model__c").value;
//     localStorage.SS_SEM__c = document.getElementById("SS_SEM__c").checked;
//     localStorage.SS_SEO__c = document.getElementById("SS_SEO__c").checked;
//     localStorage.SS_Paid_Social__c = document.getElementById("SS_Paid_Social__c").checked;
//     localStorage.SS_Display__c = document.getElementById("SS_Display__c").checked;
//     localStorage.SS_Analytics__c = document.getElementById("SS_Analytics__c").checked;
//     localStorage.SS_Mobile__c = document.getElementById("SS_Mobile__c").checked;
//     localStorage.SS_LPO__c = document.getElementById("SS_LPO__c").checked;
//     localStorage.SS_Creative__c = document.getElementById("SS_Creative__c").checked;
//     return;
// }

// function populate_saved_data() {
//     document.getElementById( 'first_name' ).value = localStorage.firstname;
//     document.getElementById( 'last_name' ).value = localStorage.lastname;
//     document.getElementById( 'email' ).value = localStorage.email;  
//     document.getElementById( 'company' ).value = localStorage.company;
//     document.getElementById( 'phone' ).value = localStorage.phone;  
//     document.getElementById( 'Monthly_Marketing_Budget__c' ).value = localStorage.Monthly_Marketing_Budget__c;
//     document.getElementById( 'Position__c').value = localStorage.Position__c;
//     position_c_selectize.setValue(localStorage.Position__c);
//     document.getElementById( 'industry').value = localStorage.industry;
//     position_c_selectize.setValue(localStorage.industry);
//     document.getElementById( 'Business_Model__c').value = localStorage.Business_Model__c;
//     position_c_selectize.setValue(localStorage.Business_Model__c); 
    
//     if ( localStorage.SS_SEM__c == "true" ) {
//         document.getElementById( 'SS_SEM__c' ).checked = localStorage.SS_SEM__c;
//         delete localStorage.SS_SEM__c;
//     }
//     if ( localStorage.SS_SEO__c == "true" ) {
//         document.getElementById( 'SS_SEO__c' ).checked = localStorage.SS_SEO__c;
//         delete localStorage.SS_SEO__c;
//     }
//     if ( localStorage.SS_Paid_Social__c == "true" ) {
//         document.getElementById( 'SS_Paid_Social__c' ).checked = localStorage.SS_Paid_Social__c;
//         delete localStorage.SS_Paid_Social__c;
//     }
//     if ( localStorage.SS_Display__c == "true" ) {
//         document.getElementById( 'SS_Display__c' ).checked = localStorage.SS_Display__c;
//         delete localStorage.SS_Display__c;
//     }
//     if ( localStorage.SS_Analytics__c == "true" ) { 
//         document.getElementById( 'SS_Analytics__c' ).checked = localStorage.SS_Analytics__c;
//         delete localStorage.SS_Analytics__c;
//     }
//     if ( localStorage.SS_Mobile__c == "true" ) { 
//         document.getElementById( 'SS_Mobile__c' ).checked = localStorage.SS_Mobile__c;
//         delete localStorage.SS_Mobile__c;
//     }
//     if ( localStorage.SS_LPO__c == "true" ) { 
//         document.getElementById( 'SS_LPO__c' ).checked = localStorage.SS_LPO__c;
//         delete localStorage.SS_LPO__c;
//     }
//     if ( localStorage.SS_Creative__c == "true" ) { 
//         document.getElementById( 'SS_Creative__c' ).checked = localStorage.SS_Creative__c;
//         delete localStorage.SS_Creative__c;
//     }
// }

// function local_storage_check(){
//     var test = 'test';
//     try {
//         localStorage.setItem(test, test);
//         localStorage.removeItem(test);
//         return true;
//     } catch(e) {
//         return false;
//     }
// }

// function hide_filled_data() { 
//     if (local_storage_check() == true ) {
//         document.getElementById('first_name').style.display = 'none';
//         document.getElementById('last_name').style.display = 'none';
//         document.getElementById('email').style.display = 'none';
//         document.getElementById('company').style.display = 'none';
//         document.getElementById('phone').style.display = 'none';
//         document.getElementById('Monthly_Marketing_Budget__c').style.display = 'none';
//         document.getElementById('position-field').style.display = 'none';
//         document.getElementById('industry-field').style.display = 'none';
//         document.getElementById('business-model-field').style.display = 'none';
//         document.getElementById('service-field').style.display = 'none'; 
//     } else {
//         return;
//     }
// }

/* Google Analytics Tracking Events */
// var selectedWhitepaper = jQuery("select#Whitepaper__c").val();

// jQuery('#mc-embedded-newsletter-subscribe').on('click', function() {
// 	ga('send', 'event', 'signup', 'newsletter');
// });

// jQuery('#mc-embedded-blog-subscribe').on('click', function() {
// 	ga('send', 'event', 'signup', 'blog');
// });

// jQuery('#contact-submit').on('click', function() {
// 	ga('send', 'event', 'signup', 'contact us');
// });

// jQuery('#whitepaper-submit').on('click', function() {
// 	ga('send', 'event', 'download', 'whitepaper', selectedWhitepaper);
// });

// jQuery('#whitepaper-submit').on('click', function() {
// 	dataLayer.push({'whitepaper': selectedWhitepaper});
// });

/* Set all external links to open in new window */
 /* jQuery("a[href^='http:'], a[href^='https:']").not("[href*='3qdigital.com']").attr('target','_blank'); */

/* Various Fancy Box and Lightbox initializations */
jQuery(document).ready(function() {
	jQuery(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 500,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: true,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
	
	/* Settings for Home Page Video */
	jQuery(".video").fancybox({
		aspectRatio	: true,
		openEffect  : 'none',
		scrolling	: 'no',
		closeEffect : 'none',
		width		: 800,
		height		: 450,
		type		: 'iframe'
	});
	
	jQuery(".lightbox").fancybox({
		margin		: 100,
		width		: '50%',
		height		: '50%',
		closeClick	: false,
	});
});

/* Initialize galleries for Landing Pages and Banner ads for the Design Service Page */
jQuery(document).ready(function() {	
    jQuery("#landing-page-gallery").click(function() {
    	jQuery.fancybox.open([
    		{	'href'	:	'http://3qdigital.com/wp-content/uploads/2013/12/23andme-design-example.jpg',
    			'title'	:	'23andMe'
    		},
    		{	'href'	:	'http://3qdigital.com/wp-content/uploads/2013/12/businesssuites-design-example.jpg',
    			'title'	:	'BusinessSuites'
    		},
    		{	'href'	: 	'http://3qdigital.com/wp-content/uploads/2013/12/yogaworks-design-example.jpg',
    			'title'	: 	'YogaWorks'
    		},
    		{	'href'	: 	'http://3qdigital.com/wp-content/uploads/2013/12/hightail-design-example.jpg',
    			'title'	: 	'Hightail'
    		}
    	], {
    			margin		: 100,
    			width		: '50%',
    			height		: '50%',
    			closeClick	: false,
    	});
    });
});

jQuery(document).ready(function() {	
    jQuery('#banner-gallery').click(function() {
    	jQuery.fancybox.open([
    		{	'href' : 'http://3qdigital.com/wp-content/uploads/2013/12/bonfaire-design-example.jpg',
    			'title'	: 'Bonfaire'
    		},
    		{	'href' : 'http://3qdigital.com/wp-content/uploads/2013/12/wepay-design-example.jpg',
    			'title'	: 'WePay'
    		},
    		{	'href' : 'http://3qdigital.com/wp-content/uploads/2013/12/thegrommet-design-example.jpg',
    			'title'	: 'The Grommet'
    		},
    		{	'href' : 'http://3qdigital.com/wp-content/uploads/2013/12/pinterest-design-example.jpg',
    			'title'	: 'Pinterest'
    		}
    	], {
			margin		: 100,
			width		: '50%',
			height		: '50%',
			closeClick	: false,
	    });
    });
});

/* Staff Toggle - Mobile 
   Set up content toggling for staff members on mobile devices. */
jQuery(document).ready( function() {
	jQuery( ".staff-toggle" ).click( function() {
			jQuery(this).toggleClass( 'icon-remove-sign' );
			jQuery(this).parent().find( ".staff-content" ).toggle('500');
    });
});

// Track Audio Plays
// jQuery(document).ready( function() {
//     jQuery("audio").bind("play", function(){
//         ga('send', 'event', 'Audio', "play", jQuery(this).attr('src')); 
//     });
// });
