/*
// Sources
// http://www.e-nor.com/blog/google-analytics/integrate-salesforce-and-google-analytics
// http://cutroni.com/blog/2009/03/18/updated-integrating-google-analytics-with-a-crm/
*/

function ga_sfdc_connect() {
    // This is a function that I "borrowed" from the urchin.js file.
    // It parses a string and returns a value.  I used it to get
    // data from the __utmz cookie
    
    function _uGC(l,n,s) {
        if (!l || l=="" || !n || n=="" || !s || s=="") return "-";
        
        var i, i2, i3, c = "-";
        
        i = l.indexOf(n);
        i3 = n.indexOf("=")+1;
        
        if (i > -1) {
            i2=l.indexOf(s,i); if (i2 < 0){ i2=l.length; }
            c=l.substring((i+i3),i2);
        }
        return c;
    }
    
    // 
    // Get the __utmz cookie value. This is the cookies that 
    // stores all campaign information. 
    //
        
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
    
    // Populate Hidden Fields
    
    document.getElementById("medium__c").value = medium; 
    document.getElementById("source__c").value = source; 
    document.getElementById("campaign__c").value = campaign; 
    document.getElementById("term__c").value = term;
    document.getElementById("content__c").value = content; 
    
    return false;
}