<?php
/**
 *
 * Populate the referrer field on the "Sign up to become a private hire driver" form with "Referral"
 * if there's a `'referral_code" quesry string paramter in $_GET
 *
 * @param $value
 * @param $field
 * @param $name
 *
 * @return mixed|string
 */
function populate_referrer( $value, $field, $name ) {

	// Only if the query string has a `referral_code` Parameter.
	if ( isset( $_GET['referral_code'] ) ) {
		$value = 'referral';
	}
	return $value;
}

add_filter( 'gform_field_value_referrer', 'populate_referrer', 10, 3 );
