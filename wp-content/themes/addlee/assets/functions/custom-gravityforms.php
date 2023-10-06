<?php
// Auto populate fields in feedback form   
 
function parameter_queryvars( $qvars ) {
    $qvars[] = 'jobnumber';
    return $qvars;
}
add_filter('query_vars', 'parameter_queryvars' );
function echo_jobnumber() {
    global $wp_query;
        if (isset($wp_query->query_vars['jobnumber']))
        {
            print $wp_query->query_vars['jobnumber'];
        }
}

function parameter_queryvars2( $qvars2 ) {
    $qvars2[] = 'name';
    return $qvars2;
}
add_filter('query_vars2', 'parameter_queryvars2' );
function echo_name() {
    global $wp_query;
        if (isset($wp_query->query_vars2['name']))
        {
            print $wp_query->query_vars2['name'];
        }
}



add_filter('gf_salesforce_lead_source', 'make_my_own_lead_source', 1, 3);
function make_my_own_lead_source($lead_source, $form_meta, $data) {
    // $lead_source - What was about to be used (normally Gravity Forms Form Title)
    // $form_meta - Gravity Forms form details
    // $data - The data passed to Salesforce
    return $lead_source; // Return something else if you want to.
}

add_filter( 'gform_validation_8', 'theme_t_wp_check_password_match' );
/* Makes sure the two fields we have for the password are the same*/
function theme_t_wp_check_password_match( $validation_result ){
  // this is making sure the passwords match
  if( $_POST['input_2'] != $_POST['input_4'] ) {
    // marking the whole form as not valid
    $validation_result['is_valid'] = false;
    // looping through our fields and marking the failed ones
    foreach( $validation_result['form']['fields'] as &$field ){
      // if 17 or 16 mark as not valid
      if( $field['id'] == '2' || $field['id'] == '4' ){
          $field['failed_validation'] = true;
          $field['validation_message'] = 'The passwords don\'t match';
      }
    }
  }
    return $validation_result;
} 

add_filter( 'gform_validation_13', 'theme_t_wp_check_password_match_2' );
/* Makes sure the two fields we have for the password are the same  */
function theme_t_wp_check_password_match_2( $validation_result ){
  // this is making sure the passwords match
  if( $_POST['input_13'] != $_POST['input_14'] ) {
    // marking the whole form as not valid
    $validation_result['is_valid'] = false;
    // looping through our fields and marking the failed ones
    foreach( $validation_result['form']['fields'] as &$field ){
      // if 17 or 16 mark as not valid
      if( $field['id'] == '13' || $field['id'] == '14' ){
          $field['failed_validation'] = true;
          $field['validation_message'] = 'The passwords don\'t match';
      }
    }
  }
    return $validation_result;
}

add_filter( 'gform_validation_33', 'theme_t_wp_check_password_match_3' );
/* Makes sure the two fields we have for the password are the same  */
function theme_t_wp_check_password_match_3( $validation_result ){
  // this is making sure the passwords match
  if( $_POST['input_3'] != $_POST['input_4'] ) {
    // marking the whole form as not valid
    $validation_result['is_valid'] = false;
    // looping through our fields and marking the failed ones
    foreach( $validation_result['form']['fields'] as &$field ){
      // if 17 or 16 mark as not valid
      if( $field['id'] == '3' || $field['id'] == '4' ){
          $field['failed_validation'] = true;
          $field['validation_message'] = 'The PINs don\'t match';
      }
    }
  }
    return $validation_result;
}

add_filter( 'gform_validation_38', 'theme_t_wp_check_password_match_4' );
/* Makes sure the two fields we have for the password are the same  */
function theme_t_wp_check_password_match_4( $validation_result ){
  // this is making sure the passwords match
  if( $_POST['input_3'] != $_POST['input_4'] ) {
    // marking the whole form as not valid
    $validation_result['is_valid'] = false;
    // looping through our fields and marking the failed ones
    foreach( $validation_result['form']['fields'] as &$field ){
      // if 17 or 16 mark as not valid
      if( $field['id'] == '3' || $field['id'] == '4' ){
          $field['failed_validation'] = true;
          $field['validation_message'] = 'The PINs don\'t match';
      }
    }
  }
    return $validation_result;
}


add_filter( 'gform_validation_63', 'theme_t_wp_check_password_match_5' );
/* Makes sure the two fields we have for the password are the same  */
function theme_t_wp_check_password_match_5( $validation_result ){
  // this is making sure the passwords match
  if( $_POST['input_6'] != $_POST['input_7'] ) {
    // marking the whole form as not valid
    $validation_result['is_valid'] = false;
    // looping through our fields and marking the failed ones
    foreach( $validation_result['form']['fields'] as &$field ){
      // if 17 or 16 mark as not valid
      if( $field['id'] == '6' || $field['id'] == '7' ){
          $field['failed_validation'] = true;
          $field['validation_message'] = 'The PINs don\'t match';
      }
    }
  }
    return $validation_result;
}

add_filter( 'gform_validation_3', 'theme_t_wp_check_password_length_and_characters' );
/*
 * Makes sure the length of the password is appropriate
 *
 * @since 1.0
 *
 */
function theme_t_wp_check_password_length_and_characters( $validation_result ){
  // checking now to make sure the passwords match the requirements
  // for length and that we only have upper and lower case letters
  // and numbers
  if( !preg_match( "/^[a-zA-Z0-9]{4,16}$/", $_POST['input_2'] ) ){
    // marking the whole thing as not valid
    $validation_result['is_valid'] = false;
      // looping through our fields and marking the failed ones
      foreach( $validation_result['form']['fields'] as &$field ){
      // if 17 or 16 mark as not valid
      if( $field['id'] == '2' || $field['id'] == '4' ){
          $field['failed_validation'] = true;
          $field['validation_message'] = 'Your password needs to be between 4 and 16 characters and can only contain upper and lower case letters and numbers.';
      }
    }
  }
  return $validation_result;
}
// Salesforce testing environment
// dd_filter( 'gf_salesforce_service_is_sandbox', '__return_true' );

// CAPITALIZE FIELDS
add_action('gform_pre_submission_22', 'capitalize_fields');
function capitalize_fields($form){
        // add all the field IDs you want to capitalize, to this array
        $fields_to_cap = array(
                     'input_64'
                    );
        foreach ($fields_to_cap as $each) {
    

                // for each field, convert the submitted value to uppercase and assign back to the POST variable
                // the rgpost function strips slashes
                $_POST[$each] = strtoupper(str_replace(' ','',rgpost($each)));
                }
        // return the form, even though we did not modify it
        return $form;
} 

add_action('gform_pre_submission_24', 'remove_spaces');
function remove_spaces($form){
        $fields_to_cap = array(
                     'input_64'
            );
        foreach ($fields_to_cap as $each) {
    
                $_POST[$each] = strtoupper(str_replace(' ','',rgpost($each)));
                }
        return $form;
} 
 
// Added custom validation for maximum characters count
    add_filter("gform_field_validation_24_47", "validate_chars_count", 10, 4);
  
    function validate_chars_count($result, $value, $form, $field){
    $street = $value["47.1"];
    $city = $value["47.3"];
    $country = $value["47.6"];
    $zip = $value["47.5"];
    if (empty($street) && empty($city) && empty($country)){
            $result["is_valid"] = false;
              $result["message"] = "This field is required. Please enter your full address.";
          }
if (strlen($zip) > 20) { // Maximum number of characters
    $result["is_valid"] = false;
    $result["message"] = "Post Code must be no more than 20 characters.";
}
return $result;
}

// Append value 2 to Recommended decision field if weekend hours
add_action("gform_pre_submission_21", "pre_submission_handler_21");

function pre_submission_handler_21($form){

    //changing post content
    $date = strtotime('today');
//echo date('Y-m-d H:i:s'); exit;
  $weekDay = date('w', mktime());
    if($weekDay == 0 || $weekDay == 6){
    $_POST['input_45'] = 2;
  }
  if($weekDay == 5){
    $nowtime = mktime();
    $fridaytime = strtotime(date('Y-m-d')." 15:30:00");
    if($nowtime > $fridaytime){
                    $_POST['input_45'] = 2;
    }
  }
  if($weekDay == 1){
    $nowtime = mktime();
    $fridaytime = strtotime(date('Y-m-d')." 09:00:00");
    if($nowtime < $fridaytime){
      $_POST['input_45'] = 2;
    }
  }
}

add_action("gform_pre_submission_24", "pre_submission_handler_24");

function pre_submission_handler_24($form){

    //changing post content
    $date = strtotime('today');
//echo date('Y-m-d H:i:s'); exit;
  $weekDay = date('w', mktime());
    if($weekDay == 0 || $weekDay == 6){
    $_POST['input_64'] = 2;
  }
  if($weekDay == 5){
    $nowtime = mktime();
    $fridaytime = strtotime(date('Y-m-d')." 15:30:00");
    if($nowtime > $fridaytime){
                    $_POST['input_64'] = 2;
    }
  }
  if($weekDay == 1){
    $nowtime = mktime();
    $fridaytime = strtotime(date('Y-m-d')." 09:00:00");
    if($nowtime < $fridaytime){
      $_POST['input_64'] = 2;
    }
  }
}

// add custom validation to the gravity forms plugin to validate "phone number" field
add_filter("gform_field_validation_10_23", "custom_validation", 10, 4);
add_filter("gform_field_validation_10_2", "custom_validation", 10, 4);
add_filter("gform_field_validation_24_31", "custom_validation", 10, 4);
add_filter("gform_field_validation_24_14", "custom_validation", 10, 4);

function custom_validation($result, $value, $form, $field){

    if(!preg_match('~^\d+$~', $value)){
        $result["is_valid"] = false;
        $result["message"] = "Please enter a valid telephone number";
    }

    return $result;
}

add_filter("gform_field_validation_28_2", "alpha_name_validation", 10, 4);

function alpha_name_validation($result, $value, $form, $field){

  $first = str_replace( "'", '', rgar( $value, '2.3' ) );
  $last  = str_replace( "'", '', rgar( $value, '2.6' ) );



  if ( ! empty( $first ) && ! empty( $last ) && (! ctype_alpha( $first ) || ! ctype_alpha( $last ) ) ) {
        $result["is_valid"] = false;
        $result["message"] = "Please use alphabetic characters only (a-z)";
    }

    return $result;
}

add_filter("gform_field_validation_28_6", "num_validation", 10, 4);
add_filter("gform_field_validation_28_7", "num_validation", 10, 4);

function num_validation($result, $value, $form, $field){

  if ( ! empty( $value ) && ! empty( $value ) && (! ctype_digit( $value ) || ! ctype_digit( $value ) ) ) {
        $result["is_valid"] = false;
        $result["message"] = "Please use numeric characters only (0-9)";
    }

    return $result;
}

/**
 * Gravity Wiz // Gravity Forms // Email Domain Validator
 *
 * This snippets allows you to exclude a list of invalid domains or include a list of valid domains for your Gravity Form Email fields.
 *
 * @version   1.0
 * @author    David Smith <david@gravitywiz.com>
 * @license   GPL-2.0+
 * @link      http://gravitywiz.com/banlimit-email-domains-for-gravity-form-email-fields/
 */
/*
class GW_Email_Domain_Validator {

    private $_args;

    function __construct($args) {

        $this->_args = wp_parse_args( $args, array(
            'form_id' => false,
            'field_id' => false,
            'domains' => false,
            'validation_message' => __( 'Sorry, <strong>%s</strong> email accounts are not eligible for this form.' ),
            'mode' => 'ban' // also accepts "limit"
        ) );

        // convert field ID to an array for consistency, it can be passed as an array or a single ID
        if($this->_args['field_id'] && !is_array($this->_args['field_id']))
            $this->_args['field_id'] = array($this->_args['field_id']);

        $form_filter = $this->_args['form_id'] ? "_{$this->_args['form_id']}" : '';

        add_filter("gform_validation{$form_filter}", array($this, 'validate'));

    }

    function validate($validation_result) {

        $form = $validation_result['form'];

        foreach($form['fields'] as &$field) {

            // if this is not an email field, skip
            if(RGFormsModel::get_input_type($field) != 'email')
                continue;

            // if field ID was passed and current field is not in that array, skip
            if($this->_args['field_id'] && !in_array($field['id'], $this->_args['field_id']))
                continue;

            $domain = $this->get_email_domain($field);

            // if domain is valid OR if the email field is empty, skip
            if($this->is_domain_valid($domain) || empty($domain))
                continue;

            $validation_result['is_valid'] = false;
            $field['failed_validation'] = true;
            $field['validation_message'] = sprintf($this->_args['validation_message'], $domain);

        }

        $validation_result['form'] = $form;
        return $validation_result;
    }

    function get_email_domain( $field ) {
        $email = explode('@', rgpost("input_{$field['id']}"));
        return rgar($email, 1);
    }

    function is_domain_valid($domain) {

        $mode = $this->_args['mode'];

        foreach( $this->_args['domains'] as $_domain ) {

            $full_match   = $domain == $_domain;
            $suffix_match = strpos( $domain, '.' ) === 0 && $this->str_ends_with( $domain, $_domain );
            $has_match    = $full_match || $suffix_match;

            if( $mode == 'ban' && $has_match ) {
                return false;
            } else if( $mode == 'limit' && $has_match ) {
                return true;
            }

        }

        return $mode == 'limit' ? false : true;
    }

    function str_ends_with( $string, $text ) {

        $length      = strlen( $string );
        $text_length = strlen( $text );

        if( $text_length > $length ) {
            return false;
        }

        return substr_compare( $string, $text, $length - $text_length, $text_length ) === 0;
    }

}


class GWEmailDomainControl extends GW_Email_Domain_Validator { }

# Configuration

new GW_Email_Domain_Validator( array(
    'form_id' => 36,
    'field_id' => 12,
    'domains' => array( 'gmail.com', 'hotmail.com', 'outlook.com', 'zoho.com', 'mail.com', 'thunderbird.com', 'plus.net', 'orange.', 'yahoo.com', 'o2.', 'live.', 'aol.', 'btinternet.', 'icloud.', 'virginmedia.', 'ntlworld.', 'talktalk.', 'googleapps.', 'fastmail.', 'skymail.', 'office.', 'hushmail.', 'lycos..', 'mailcom.', 'myway.', 'ymail.', 'bt.', 'blueyonder.', 'freenet.', 'googlemail.', 'tiscali.', 'rocketmail.', ),
    'validation_message' => __( 'Sorry, <strong>%s</strong> email accounts are not eligible for this form. Please enter your business email address.' ),
    'mode' => 'ban'
) );
*/

add_filter("gform_field_validation_37_47", "validate_postcode", 10, 4);
function validate_postcode($result, $value, $form, $field){

    $zip = $value["47.5"];
    
if (strlen($zip) > 20) { // Maximum number of characters
    $result["is_valid"] = false;
    $result["message"] = "Post Code must be no more than 20 characters.";
}
return $result;

}

add_filter("gform_address_zip_43", "change_address_zip", 10, 2);
function change_address_zip($label, $form_id){
    return "Postcode";
}


add_filter("gform_address_street_43", "change_address_street", 10, 2);
function change_address_street($label, $form_id){
    return "House name/number";
}

add_filter("gform_address_street2_43", "change_address_street2", 10, 2);
function change_address_street2($label, $form_id){
    return "Street Address";
}


// Assignment rules for main contact form

add_action( 'gform_pre_submission_58', 'pre_submission_handler_form58' );
function pre_submission_handler_form58( $form ) {
    add_action('gf_salesforce_connection', 'gf_salesforce_set_default_assignement_rule');
}

function gf_salesforce_set_default_assignement_rule($client) {
  // Two Options for Setting Assignment Rule
  // 1. Pass in AssignmentRule ID and "false" to use a specific assignment rule.
  // 2. Pass in null and true to trigger the DEFAULT AssignementRule
  $header = new \AssignmentRuleHeader(null, true);

  $client->setAssignmentRuleHeader($header);

  return $client;
}


/*add_action('init', 'sc_setcookie');

// populate sales campaign field with string/cookie
function sc_setcookie(){
  setcookie('SalesCampaign', $_GET['sc'], time()+86400); //For 1 day
}
add_filter( 'gform_field_value_sc', 'capture_134_cookie' );
function capture_134_cookie( $value ){
   return $_COOKIE['SalesCampaign'];
}*/


// Prevent Gravity Form entries being added to the database

// driver reg
add_action( 'gform_after_submission_26', 'remove_Gform_entry' );
// payment type - account form
add_action( 'gform_after_submission_57', 'remove_Gform_entry' );
// contact form
add_action( 'gform_after_submission_58', 'remove_Gform_entry' );

function remove_Gform_entry( $entry ) {
    GFAPI::delete_entry( $entry['id'] );
}

add_filter("gform_confirmation_anchor_66", function() {
    return 20;
});

function al_fix_case_type( $merge_vars, $form, $entry, $feed, $api ) {

    $record_type_ids = array (
      'Journey Feedback' => '012b0000000kIDWAA2',
      'Booking Support' => '012b0000000kIDVAA2',
      'Account Support' =>  '012b0000000kIDUAA2',
      'Make a Specialised Booking' => '012b0000000kIDXAA2'
    );

    if($form['title'] == 'Quick Contact Form' || $form['title'] == 'Main Contact Form') {

        if(strlen($merge_vars["Record_Type_Picklist__c"]) > 0) {
            if(array_key_exists ($merge_vars["Record_Type_Picklist__c"], $record_type_ids)) {
                $merge_vars["RecordTypeId"]  = $record_type_ids[$merge_vars["Record_Type_Picklist__c"]];
                $merge_vars["Record_Type_Picklist__c"] = '';
            }
        }

        if($merge_vars["Type"] == '- Select One -') {
            $merge_vars["Type"] = '';
        }

    }

    if($form['title'] == 'Global PA') {
        $merge_vars["RecordTypeId"]  = '012b0000000kHweAAE';
    }

    if($form['title'] == 'Driver Registration Form - New') {

        $location_selected = $entry[8];
        if($location_selected == 'North West') {
            $has_license = false;

            if($entry[27] == 'yes') {
                $has_license = true;
            }

            if($has_license){
                if($entry[25] == 'Other') {
                    $merge_vars["Licence_Held_With__c"]  = $entry[30];
                }
                else {
                    $merge_vars["Licence_Held_With__c"]  = $entry[25];
                }

                if(empty($entry[29]) == false) {
                    $merge_vars["Current_Work__c"] = $entry[29];
                }
            }
            else {
                if($entry[28] == 'yes') {
                    $merge_vars["License_Application_With_Other_Councils__c"]  = true;
                }
                else {
                    $merge_vars["License_Application_With_Other_Councils__c"] = false;
                }
            }

            $merge_vars["Private_Hire_License__c"] = $has_license;

        }
    }

    return $merge_vars;
}
add_filter( 'gf_salesforce_create_data', 'al_fix_case_type', 99, 5 );