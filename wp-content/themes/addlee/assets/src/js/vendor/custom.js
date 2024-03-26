// privacy policy scrolling

jQuery(document).ready(function ($) {

    var link = document.getElementsByClassName('pp-links');
     
     $(link).click(function() {
        if(link){
            $(link).removeClass('active');
            $(this).addClass('active');
            
            if ($(this).hasClass("active")) {
                $(".accordion-section").css("display", "block");
                //scrollToAnchor("controllers-contact-information");
            } 
            
        } 
     });

     // notice disclaimer

     $("li#20001").click(function() {
        $("li#20001 a").removeClass("pp-links");
            $(".accordion-section").css("display", "none");
            $(".accordion-section.20001").css("display","block");
     });


     // controller contact information
     $("li#20003").click(function() {
        $("li#20003 a").removeClass("pp-links");
            $(".accordion-section").css("display", "none");
            // on dev site
            $(".accordion-section.20003").css("display","block");
     });

     // what types of information
     $("li#20004").click(function() {
        $("li#20004 a").removeClass("pp-links");
            $(".accordion-section").css("display", "none");
            $(".accordion-section.20004").css("display","block");
     });
     
     // the lawful basis we process
     $("li#20005").click(function() {
        $("li#20005 a").removeClass("pp-links");
            $(".accordion-section").css("display", "none");
            $(".accordion-section.20005").css("display","block");
     });

     // how we use and store
     $("li#20006").click(function() {
        $("li#20006 a").removeClass("pp-links");
            $(".accordion-section").css("display", "none");
            $(".accordion-section.20006").css("display","block");
     });
  
     // profiling
     $("li#20007").click(function() {
        $("li#20007 a").removeClass("pp-links");
            $(".accordion-section").css("display", "none");
            $(".accordion-section.20007").css("display","block");
     });
  
     // sharing your information
     $("li#20008").click(function() {
        $("li#20008 a").removeClass("pp-links");
            $(".accordion-section").css("display", "none");
            $(".accordion-section.20008").css("display","block");
     });

     // the security of your personal data
     $("li#20009").click(function() {
        $("li#20009 a").removeClass("pp-links");
            $(".accordion-section").css("display", "none");
            $(".accordion-section.20009").css("display","block");
     });
     
  
     // how long do we store your personal data
     $("li#20010").click(function() {
        $("li#20010 a").removeClass("pp-links");
            $(".accordion-section").css("display", "none");
            $(".accordion-section.20010").css("display","block");
     });
  
      // your rights as the data subject
      $("li#20011").click(function() {
        $("li#20011 a").removeClass("pp-links");
            $(".accordion-section").css("display", "none");
            $(".accordion-section.20011").css("display","block");
     });
  
       // cookies and marketing
       $("li#20012").click(function() {
        $("li#20012 a").removeClass("pp-links");
            $(".accordion-section").css("display", "none");
            $(".accordion-section.20012").css("display","block");
     });
  
      // complaints
      $("li#20013").click(function() {
        $("li#20013 a").removeClass("pp-links");
            $(".accordion-section").css("display", "none");
            $(".accordion-section.20013").css("display","block");
     });
  

    // changes to our privacy policy
    $("li#20014").click(function() {
        $("li#20014 a").removeClass("pp-links");
            $(".accordion-section").css("display", "none");
            $(".accordion-section.20014").css("display","block");
    });
  
        
  } );
  
  
  
// scroll to the top
var topbutton = document.getElementById('buttontop');
/*var links = document.getElementsByClassName('pp-links');

function scrollFunction() {
  if(links.clicked = 'true' ){
    topbutton.style.display = 'block';
  } else {
    topbutton.style.display = 'none';
  }
}

scrollFunction();


// on button click go back to top position
function topFunction() {
 document.body.scrollTop = 820;
 document.documentElement.scrollTop = 820;
}

*/
// click full policy 


jQuery(document).ready(function($){
    var showpolicy = $(".show-full-policy");
    var step1 = $(".wpforms-page-indicator-page-1");
    var active = $(".active");  
     $(showpolicy).click(function(){
        if(showpolicy){
            $(".accordion-section").css("display", "block");
            $("a.accordion-section-title").css("display", "block");
        } 

    });

    if(active) {
        $(".wpforms-page-indicator-page-1").after("<p style='text-transform: inherit'>Account Type</p>");
        $(".wpforms-page-indicator-page-2").after("<p style='text-transform: inherit'>Contact Details</p>");
        $(".wpforms-page-indicator-page-3").after("<p style='text-transform: inherit'>Company Details</p>");  
           
        
    }
    


});