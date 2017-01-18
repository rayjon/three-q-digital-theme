jQuery( document ).ready( function() {
    /*  Connects Google Analytics Information to Salesforce
        http://www.e-nor.com/blog/google-analytics/the-ultimate-guide-to-universal-analytics-integration-with-salesforce
    /*
    
    /*******************  Google Analytics Legacy Tracking Code  *******************/
    
    // List all top-level domains that are belong to your organization for cross domain tracking
    var domains = ["3qdigital.com", "3qdigital.crisaba.com", "3qdigital.dev"]; 
    var source, medium, term, content,campaign, session_count, pageview_count;
    
    var hostname = document.location.hostname;
    hostname = hostname.match( /(([^.\/]+\.[^.\/]{2,3}\.[^.\/]{2})|(([^.\/]+\.)[^.\/]{2,4}))(\/.*)?$/ )[1];
    hostname = hostname.toLowerCase();
    
    // The globally visible function which is used to generate
    // UUID that are unique for the remainder of the page session.
        
    if ( localStorage.getItem("customUserId") === null ) {
        localStorage.customUserId = randomHex(4) + "-" + randomHex(4) + "-" + randomHex(4) + "-" +  randomHex(4);
    }
    
    console.log( localStorage.customUserId );
    ga('create', 'UA-43522254-1', {'userId': localStorage.customUserId});   // If "User ID" feature is available
    ga('require', 'displayfeatures');
    ga('set', 'dimension1', localStorage.customUserId);                   // Set a `customUserId` dimension at page level
    ga('send', 'pageview');
                     
    // Used to generate a hex number which is padded by zeros to
    // display the specified amount of digits.  The param passed
    // probably shouldn't be more than 8.
    function randomHex(len) {
        return (new Array(len).join(0) + parseInt(Math.pow(2, len * 4) * Math.random()).toString(16)).slice(-len);
    }
    
    if(document.getElementById('Visitor_ID__c')) {
        document.getElementById('Visitor_ID__c').value = localStorage.customUserId;
    }
    
    var _gaq = _gaq || [];
    // DON'T UPDATE THE GA ACCOUNT ID - Your site should be tracked using Universal Analytics outside this JavaScript code
    _gaq.push( ['sfga._setAccount', 'UA-43522254-1'] );
    _gaq.push( ['sfga._setDomainName', hostname] );
    _gaq.push( ['sfga._setAllowLinker', true] );
    _gaq.push( ['sfga._trackPageview'] );
    _gaq.push( function() { get_campaign_info(); } );
    
    // If variable is not set then don't run the function.
    if(document.getElementById('Visitor_ID__c')) {
        get_campaign_info();
    }
    
    /*******************  Set Up Cross Domain Tracking  *******************/
    
    var arr = document.getElementsByTagName("a");
    
    for( i=0; i < arr.length; i++ ) {
        var tmp = arr[i].getAttribute("onclick");
        var doname ="";
        try {
      		doname = arr[i].hostname.match(/(([^.\/]+\.[^.\/]{2,3}\.[^.\/]{2})|(([^.\/]+\.)[^.\/]{2,4}))(\/.*)?$/)[1];
    		doname = doname.toLowerCase();
        } catch(err) {
    	 	doname = arr[i].href;
        }
    	if (tmp != null) {
        	tmp = String(tmp);
            if (tmp.indexOf('_gasf.push') > -1) 
                continue;
        } 
        for (var j = 0; j < domains.length; j++) {
            //Auto-Linker
            if ( doname != hostname && doname.indexOf(domains[j]) != -1 && doname.indexOf("mailto:") == -1) {
                arr[i].setAttribute("onclick",""+((tmp != null) ? tmp + '; ' : '')+"_gaq.push(['sfga._link', '"+arr[i].href+"']); return false;");
            }
        }
    }
     
    //This function extracts the "_utma", "_utmb", "_utmc" and "_utmz" strings from the cookies set by Google Analytics
    //This function was originally written by the Google Analytics team (urchin.js)
    
    function get_campaign_info() {
    	var utma = get_utm_value(document.cookie, '__utma=', ';');
    	var utmb = get_utm_value(document.cookie, '__utmb=', ';');
    	var utmc = get_utm_value(document.cookie, '__utmc=', ';');
    	var utmz = get_utm_value(document.cookie, '__utmz=', ';');
    	
    	medium = get_utm_value(utmz, 'utmcmd=', '|');
    	document.getElementById('medium__c').value = medium;
    
    	source = get_utm_value(utmz, 'utmcsr=', '|');
    	document.getElementById('source__c').value = source;
    	
    	campaign = get_utm_value(utmz, 'utmccn=', '|');
    	document.getElementById('campaign__c').value = campaign;
    		
    	term = get_utm_value(utmz, 'utmctr=', '|');
    	document.getElementById('term__c').value = term;
    	
    	content = get_utm_value(utmz, 'utmcct=', '|');
    	document.getElementById('content__c').value = content;
    	
        session_count = get_session_count(utma);
        document.getElementById('numVisits__c').value = session_count;
    	
    	pageview_count = get_pageview_count(utmb, utmc);
    	document.getElementById('pageviews__c').value = pageview_count;
    	
    	gclid = get_utm_value(utmz, 'utmgclid=', '|');
    			
    	if (gclid !="-") {
            source = 'google';
            medium = 'cpc';
    	}
    }
    
    function get_utm_value(l,n,s) {
        /* Return dash for empty values */
        if ( !l || l == "" || !n || n == "" || !s || s == "") return "-";
        var i, j, k, utm = "-";
        i = l.indexOf( n );
        k = n.indexOf( "=" ) + 1;
    
        if ( i > -1 ) {
            j = l.indexOf( s,i );
            if ( j < 0 ) {
                j=l.length;
            }
            utm = l.substring( ( i + k ), j );
        }
        return utm;
    }
    
    //This function extracts the "Count of Sessions" value from the _utma cookie
    function get_session_count( str ) {
        var i, vc = '-';
        if ( str != '-' ) {
    		i = str.lastIndexOf( "." );
    		i++;
    		vc = str.substring( i );
        }
        return vc;
    }
    
    //This function extracts the "Count of Pageviews" value from the _utmb cookie
    function get_pageview_count( utmb, utmc ) {
        var i, j, pc = '-'; 
        	if( utmb != '-' && utmc != '-' ) {
        		utmc = utmc + '.';
        		i = utmc.length;
        		j = utmb.indexOf( ".", i );
        		pc = utmb.substring( i, j );
        	}
        return pc;
    }
});