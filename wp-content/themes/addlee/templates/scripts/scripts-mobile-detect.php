<script>
    //console.log('User Agent: '+navigator.userAgent);
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry|BB10/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };
    
    // get URL params
    function getURLParameter(sParam) {
        var sPageURL = window.location.search.substring(1);
        var sURLVariables = sPageURL.split('&');
        for (var i = 0; i < sURLVariables.length; i++) 
        {
            var sParameterName = sURLVariables[i].split('=');
            if (sParameterName[0] == sParam) 
            {
                return sParameterName[1];
            }
        }
    };
    
    // save UTM params as variables
    var currentURLPath = window.location.pathname;
    
    var utmSource = getURLParameter('utm_source');
    var utmCampaign = getURLParameter('utm_campaign');
    var campaignValue, sourceValue, appLink, osName;
    
    // check if utm_campaign param exists
    
    if (utmCampaign) {
        campaignValue = utmCampaign;
    } else {
        campaignValue = currentURLPath;
    }
   
    // define app links
        
    
    if(isMobile.Windows()) {
        osName = "Windows Phone";
        appLink = "https://www.microsoft.com/en-gb/store/p/addison-lee/9nblggh08wgf";
        appLinkClass = osName;
        appLinkText = "Open the "+osName+" app";
    }

    else if(isMobile.Android()) {
        osName = "Android";
        appLink = "https://189138.tlnk.io/serve?action=click&publisher_id=178118&site_id=105966&invoke_id=152440&my_campaign="+campaignValue+"&my_site=www.addisonlee.com";
        appLinkClass = osName;
        appLinkText = "Open the "+osName+" app";
    }

    else if(isMobile.BlackBerry()) {
        osName = "BlackBerry";
        appLink = "https://appworld.blackberry.com/webstore/content/59987937/?lang=en&countrycode=GB";
        appLinkClass = osName;
        appLinkText = "Open the "+osName+" app";
    }

    else if(isMobile.iOS()) {
        osName = "iPhone";
        appLink = "https://189138.tlnk.io/serve?action=click&publisher_id=178118&site_id=107028&invoke_id=123992&my_campaign="+campaignValue+"&my_site=www.addisonlee.com";
        appLinkClass = osName;
        appLinkText = "Open the "+osName+" app";
    }
    else {
        osName = "";
        appLink ="/apps/sms";
        appLinkClass = "ajax-page-content";
        appLinkText = "Get the app now";
    }
    jQuery(document).ready(function ($) {
        // append app link to element 
        
        $('.app-link').attr('href', appLink).addClass('cta '+appLinkClass);
        $('.cta-app').html(appLinkText);
        $('.os-name').html(osName);
        
    });
        
</script>