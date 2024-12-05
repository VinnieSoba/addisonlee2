function utmTracking(){
    var urlParams = new URLSearchParams(window.location.search);
    const utm_source = urlParams.get("utm_source") || null;
    const utm_campaign = urlParams.get("utm_campaign") || null;
    const utm_medium = urlParams.get("utm_medium") || null;
    if (utm_source) {
      console.log("set utm_source :", utm_source);
      localStorage.setItem("utm_source", utm_source);
    }
    if (utm_campaign) {
      console.log("set utm_campaign :", utm_campaign);
      localStorage.setItem("utm_campaign", utm_campaign);
    }
    if (utm_medium) {
      console.log("set utm_medium :", utm_medium);
      localStorage.setItem("utm_medium", utm_medium);
    }

}

utmTracking();

jQuery(document).ready(function($){
    var sendbtn = $('a.sendutm');
    $(sendbtn).click(function(){
           $.ajax({ 
            success: function(){
                const a = localStorage.getItem('utm_source');
                const b = localStorage.getItem('utm_medium');
                const c = localStorage.getItem('utm_campaign');

            window.location.href = 'https://book.addisonlee.com/al/booking/new/airport_pickup?utm_source=' + a + '&utm_medium=' + b + '&utm_campaign='+ c +'';
            console.log('send to booking site', utmSource);
            console.log('send to booking', utmCampaign);
            console.log('sendto booking site', utmMedium);
            }
        });
    });
});