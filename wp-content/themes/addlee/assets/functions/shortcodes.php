<?php
/*
	SHORTCODES
*/

// URLs
add_shortcode('bookingurl', 'BookingURL'); function BookingURL() { return 'https://book.addisonlee.com/'; }
add_shortcode('coachbookingurl', 'CoachBookingURL'); function CoachBookingURL() { return 'http://www.bookmycoach.co.uk/'; }
add_shortcode('courierbookingurl', 'CourierBookingURL'); function CourierBookingURL() { return 'https://book.addisonlee.com/'; }

// Telephone Numbers
add_shortcode('coachbookingnumber', 'CoachBookingNumber'); function CoachBookingNumber() { return '020 7691 3386'; }
add_shortcode('salesteamnumber', 'SalesTeamNumber'); function SalesTeamNumber() { return '020 3214 5167'; }
add_shortcode('accountsteamnumber', 'AccountsTeamNumber'); function AccountsTeamNumber() { return '020 3800 0365'; }
add_shortcode('globalbookingnumber', 'GlobalBookingNumber'); function GlobalBookingNumber() { return '020 3214 5177'; }
add_shortcode('pressnumber', 'PressNumber'); function PressNumber() { return '020 3214 5110'; }
add_shortcode('pressoutofhoursnumber', 'PressOutofHoursNumber'); function PressOutofHoursNumber() { return '07973 989 940'; }
add_shortcode('marketingofficenumber', 'MarketingOfficeNumber'); function MarketingOfficeNumber() { return '0207 391 3533'; }
add_shortcode('traveldeskbookingnumber', 'TravelDeskBookingNumber'); function TravelDeskBookingNumber() { return '+44 (0)20 3214 5177'; }
add_shortcode('addlibadvertisingnumber', 'AddLibAdvertisingNumber'); function AddLibAdvertisingNumber() { return '020 7255 4224'; }
add_shortcode('addlibeditorialnumber', 'AddLibEditorialNumber'); function AddLibEditorialNumber() { return '020 7255 4224'; }
add_shortcode('addlibdesignnumber', 'AddLibDesignNumber'); function AddLibDesignNumber() { return '020 7255 4224'; }

// Emails 
add_shortcode('globalemail', 'GlobalEmail'); function GlobalEmail() { return 'global@addisonlee.com'; }
add_shortcode('coachemail', 'CoachEmail'); function CoachEmail() { return 'coaches@addisonlee.com'; }
add_shortcode('traveldeskemail', 'TravelDeskEmail'); function TravelDeskEmail() { return 'traveldesk@addisonlee.com'; }
add_shortcode('pressemail', 'PressEmail'); function PressEmail() { return 'press@addisonlee.com'; }
add_shortcode('marketingemail', 'MarketingEmail'); function MarketingEmail() { return 'marketing@addisonlee.com'; }
add_shortcode('addlibadvertisingemail', 'AddLibAdvertisingEmail'); function AddLibAdvertisingEmail() { return 'ads@addlib.co.uk'; }
add_shortcode('addlibeditorialemail', 'AddLibEditorialEmail'); function AddLibEditorialEmail() { return 'content@addlib.co.uk'; }
add_shortcode('addlibdesignemail', 'AddLibDesignEmail'); function AddLibDesignEmail() { return 'design@addlib.co.uk'; }

// Buttons
add_shortcode('signinbtn', 'BookingURL'); function signInBTN() { return '<a class="cta" href="https://book.addisonlee.com">Sign in</a>'; }

// Add this
add_shortcode('addthis', 'addthisbuttons'); function addthisbuttons() { return '<div class="addthis_custom_sharing"></div>'; }


// download app button
function downloadAppBtn($atts) {  
    
    $customAppLink = get_field( "custom_app_sms_link" );
    
    if( is_front_page() ) : 
        return '<a href="" class="inverse cta-app app-link" data-appsmslink="'.($customAppLink ? $customAppLink : '').'"></a>';
    else :
        return '<a href="" class="cta-app app-link" data-appsmslink="'.($customAppLink ? $customAppLink : '').'"></a>';
    endif;
}
add_shortcode('downloadappbtn', 'downloadAppBtn'); 

function bookNowBtn() { 
  return '<a class="cta" href="https://book.addisonlee.com/">Book now</a>';
}
add_shortcode('booknowbtn', 'bookNowBtn'); 

// get FAQs by category

function faqs_by_category_shortcode($atts){
$atts = shortcode_atts(
    array(
        'faqcategory' => ''
    ), $atts, 'faqs-by-category' );
     
 $q = new WP_Query(
   array( 'post_type' => 'faqs', 'taxonomy' => 'faq-categories',  'term' => $atts['faqcategory'], 'orderby' => 'date')
 );
$list = '';
while($q->have_posts()) : $q->the_post();
 $list .= '<h3 class="faq-question" onclick="dataLayer.push({"event": "Click", "eventCategory" : "FAQ", "eventAction" : "'.get_the_title().'" });">'.get_the_title().'</h3><div id="'.get_the_ID().'" class="faq-content">'. get_the_content(). '</div>';
endwhile;
wp_reset_query();
return $list;
}
add_shortcode('faqs-by-category', 'faqs_by_category_shortcode');

function smsAppLinkForm( $atts ){
   $sms_details="";
   // get attibutes and set defaults
    $atts = shortcode_atts(
		array(
			'smslink' => 'http://addl.ee/appsms'
		), $atts, 'smsapplinkform' );
	return '
<!-- Google Recaptcha -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!-- End --> 
<form id="send-app-by-sms">
<input id="smslink" name="smslink" class="text" type="hidden" value='.$atts['smslink'].' />
<h3>Download the app</h3>
<label for="mobile">We\'ll send an SMS to your device with a link to download the app</label></br>
<div class="row">
<div class="col-md-8"><input name="number" class="text" type="text" placeholder="Mobile number" id="mobile" />
<div class="g-recaptcha" name="captcha" data-callback="submitForm" data-sitekey="6LfrGX4kAAAAAN12N72elLL7NALLda6nUsLaiS3L" id="captcha"></div>
</div>
<div class="col-md-4"><input id="get-the-app-cta" class="cta inverse" type="submit" tabindex="8" value="Get the app"></div></div>
<div class="error"></div>
</form>
<script>

function disableBtn() {
    jQuery(document).ready(function( $ ){
    $("#get-the-app-cta").attr("disabled", "disabled");
    });
}

disableBtn();

function enableBtn() {
    jQuery(document).ready(function( $ ){
        $("#get-the-app-cta").removeAttr("disabled");
    });
}

function submitForm() {

    enableBtn();

jQuery(document).ready(function ($) {
     $("#send-app-by-sms").submit(function(e) {
        e.preventDefault();

        var form = $(this);
        form.find("div.validation_message").remove();

        $.ajax({
            type: "post",
            dataType: "json",
            url: scriptVars.ajaxurl,
            data: {
                action: "send_app_sms",
                security: scriptVars.ajax_nonce,
                number: $("#mobile").val(),
                captcha: $("#capctha").val()
            },
            success: function (response) {
                if (response.error == false) {
                    form.hide();
                    form.html(\'<div class="form-info-box form-info-box-confirm alert">Thank you, we have sent you an SMS containing your app link.</div>\').slideDown();
                } else {
                    $( ".error" ).prepend(\'<div class="validation_message">\' + response.errorMessage + \'</div>\');

                    form.show();
                }
            },
            error: function (response) {
                 $( ".error" ).prepend(\'<div class="validation_message">There has been an error please refresh the page try again.</div>\');
            },
        });
    });
});
}
</script>';
 return $sms_details;
}
add_shortcode('smsapplinkform', 'smsAppLinkForm'); 


// get booking number from array
function bookingnumber( $atts ){ 
    $bookingNumber = array(
        '001' => '0844 556 0707',
        '002' => '0203 772 7733',
        '003' => '0203 772 7734',
        '004' => '0203 772 7735',
        '005' => '0203 772 7736',
        '006' => '0203 772 7737',
        '007' => '0203 772 7740',
        '008' => '0203 772 7741',
        '009' => '0203 772 7742'
    );
    if (isset($_GET['bn'], $bookingNumber)) { 
        return $bookingNumber[$_GET['bn']];
    } else { 
        // show default number if bn param not present
        $variable = '020 7407 9000';
            return $variable;
        }
}

add_shortcode( 'bookingnumber', 'bookingnumber' );

// Get Promo code from URL params
function promo_code( $atts ){
  $promocode = $_GET['pc'];
  if($promocode)
      { 
       return $promocode;
      } 
}
add_shortcode( 'promocode', 'promo_code' );

// [get-page-content id="PAGE_ID" /]
function get_post_page_content( $atts ) {
      extract( shortcode_atts( array(
        'id' => null,
        'title' => false,
      ), $atts ) );

      $the_query = new WP_Query( 'page_id='.$id );
      while ( $the_query->have_posts() ) {
        $the_query->the_post();
              if($title == true){
              the_title();
              }
              the_content();
      }
      wp_reset_postdata();

    }
add_shortcode( 'get-page-content', 'get_post_page_content' );