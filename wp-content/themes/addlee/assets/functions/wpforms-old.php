<?php
/**
 * Skip empty page breaks if condition is not met
 *
 * @link https://wpforms.com/developers/how-to-disable-the-space-key-inside-a-form-field/
 */

function wpf_dev_extra_form_handlers() {
?>

<script type="text/javascript">

    jQuery(function($){

        // Initialize the empty action to track which button was clicked (prev/next)
        var action = "";

        // When next/prev button is clicked, store the action so we know which direction to skip
        $( document ).on( 'click', '.wpforms-page-button', function( event ) {
            action = $(this).data( 'action' );
        });

        // Check if the page is empty when the page changes
        $('.wpforms-form').on('wpformsBeforePageChange', function(event, pageNum, form){

            // setTimeout({}, 0) is used so it fires asynchronously. Without this it was happening too quickly
            setTimeout(function(){

                // Assume all pages are empty so we loop through all fields on the page except for the last field which are the page buttons
                var emptyPage = true;

                // Loop through all fields on the page
                $(`.wpforms-page-${pageNum} > div:not(:last)`).each(function(){

                    // Check if current field is visible and doesn't have style="display:none;"
                    if ($(this).is( ":visible" )) {

                        // Set emptyPage to false if any field is visible on the page
                        emptyPage = false;

                        // Allow scrolling for pages with fields
                        window.wpforms_pageScroll = true;

                        // Stop looping through fields if a field is visible
                        return false;
                    }
                })

                // Run the "click" action on prev or next button if all fields on the page are hidden.
                if (emptyPage) {

                    // Prevent any scrolling animation from happening on empty pages
                    window.wpforms_pageScroll = false;

                    // Perform the "click" on the appropriate button based off the saved action
                    $(`.wpforms-page-${pageNum} .wpforms-page-${action}`).click();
                }
            }, 0);
        });

        // Maybe disable some fields
		$( '.wpforms-field.disabled input, wpforms-field.disabled textarea' ).attr({
			readonly: "readonly",
			tabindex: "-1",
		});

		// Maybe default some checkboxes to true
		$( '.wpforms-field.wpforms-field-gdpr-checkbox.default-true ul li:first-child').addClass('wpforms-selected');
		$( '.wpforms-field.wpforms-field-gdpr-checkbox.default-true input' ).prop( 'checked', true ).attr( 'onclick', 'this.checked=!this.checked;');

		/*
		 * Temporary removal of custom registration error handler
		 * @TODO: Remove it when it's super clear the user registration mechanism won't be needed

 		// Error handling

		// Wait for the error container to exist
        function waitForElm( selector ) {
			return new Promise( resolve => {
				if ( document.querySelector( selector ) ) {
					return resolve( document.querySelector( selector ) );
				}

				const observer = new MutationObserver( mutations => {
					if ( document.querySelector( selector ) ) {
						resolve( document.querySelector( selector) );
						observer.disconnect();
					}
				});

				observer.observe( document.body, {
					childList: true,
					subtree: true
				});
			});
		}
		waitForElm( '.wpforms-error-container' ).then( ( elm ) => {
			if( 'A user with that username already exists.' === elm.textContent) {
				$( elm ).siblings( '.wpforms-field-container' ).hide();
				elm.textContent = 'A driver with that email address has already registered.';
			}
		});
    	*/

	});

</script>

<?php
}

add_action( 'wpforms_wp_footer_end', 'wpf_dev_extra_form_handlers', 30 );

/**
 * Register the Smart Tag so it will be available to select in the form builder.
 *
 * @link   https://wpforms.com/developers/how-to-create-a-custom-smart-tag/
 *
 */
function wpf_dev_register_smarttag( $tags ) {

    // Key is the tag, item is the tag name.
    $tags['site_url']  = 'Site URL';
	$tags['unique_id'] = 'Unique ID';
	$tags['activation_url']  = 'Activation URL';

    return $tags;
}
add_filter( 'wpforms_smart_tags', 'wpf_dev_register_smarttag' );

/**
 * Process the Smart Tag.
 *
 * @link   https://wpforms.com/developers/how-to-create-a-custom-smart-tag/
 *
 */
function wpf_dev_process_smarttag_siteurl( $content, $tag ) {


    // Only run if it is our desired tag.
    if ( 'site_url' === $tag ) {
        $link = get_site_url();
        // Replace the tag with our link.
        $content = str_replace( '{site_url}', $link, $content );
    }

    return $content;
}
add_filter( 'wpforms_smart_tag_process', 'wpf_dev_process_smarttag_siteurl', 10, 2 );

/**
 * Process the Smart Tag.
 *
 * @param string $content
 * @param string $tag
 * @param object $form_data
 * @param array $fields
 * @param int $entry_id
 * @return void
 */
function wpf_dev_process_smarttag_uniqueid( $content, $tag, $form_data, $fields, $entry_id ) {

	// Only run if it is our desired tag and there's no live entry.
    if ( 'unique_id' === $tag && !$entry_id ) {

		// generate a unique string and reduce to 14 characters and then add a unix timestamp
		$uniqid = substr( uniqid( 'wpf-', true ), 0, 14) . '-' . strval( time() );

        // Replace the tag with unique id.
		$content = str_replace( '{unique_id}', $uniqid, $content );

    }

    return $content;
}
add_filter( 'wpforms_smart_tag_process', 'wpf_dev_process_smarttag_uniqueid', 10, 5 );

/**
 * Process the Activation URL Smart Tag.
 *
 * @param string $content
 * @param string $tag
 * @param object $form_data
 * @param array $fields
 * @param int $entry_id
 * @return void
 */
function wpf_dev_process_smarttag_activation_url( $content, $tag, $form_data, $fields, $entry_id ) {

	// Mapping
	/*

	/* Local
	$pfFormID = '19174';
	$activation_uri = 'driver-onboarding-details/';
	*/
	/* Staging
	$pfFormID = '19474';
	$activation_uri = 'driver-onboarding-details/';
	*/
	// Live UAT
	$pfFormID = '19631';
	$activation_uri = 'become-an-addison-lee-driver/details/';
	$pfFields = array(
		array (
			'name' => 'First Name',
			'regID' => 74,
			'subID' => 'first',
			'detID' => '81|First'
		),
		array (
			'name' => 'Last Name',
			'regID' => 74,
			'subID' => 'last',
			'detID' => '81|Last'
		),
		array(
			'name' => 'Email',
			'regID' => 7,
			'detID' => 71
		),
		array(
			'name' => 'Mobile phone number',
			'regID' => 8,
			'detID' => 75
		),
		array(
			'name' => 'Date of birth',
			'regID' => 9,
			'detID' => '76_date'
		),
		array(
			'name' => 'Have you driven for Addison Lee before?',
			'regID' => 11,
			'detID' => 77
		),
		array(
			'name' => 'Driver PL number',
			'regID' => 12,
			'detID' => 78
		),
		array(
			'name' => 'Do you own a vehicle or are you looking to rent a vehicle',
			'regID' => 79,
			'detID' => 1
		),
		array(
			'name' => 'What kind of vehicle are you wanting to rent?',
			'regID' => 80,
			'detID' => 2
		),
		array(
			'name' => 'What kind of vehicle do you own?',
			'regID' => 81,
			'detID' => 3
		),
		array(
			'name' => 'GDPR Agreement',
			'regID' => 71,
			'detID' => 80
		),
		array(
			'name' => 'Transaction ID',
			'regID' => 76,
			'detID' => 82
		),
	);

	// Only run if it is our desired tag.
	if ( 'activation_url' === $tag && ! $entry_id ) {

		// No live entry
		$activation_url = rtrim( get_site_url(), '/' ) . '/' . $activation_uri;
		$content = str_replace( '{activation_url}', $activation_url, $content );

	} elseif ( 'activation_url' === $tag && $entry_id ) {

		// Build the activation URL
		$ii = 0;
		$query_string = '';
		foreach ( $pfFields as $pfField ) {
			$query_string .= 0 === $ii++ ? '?' : '&';
			$query_string .= 'wpf' . $pfFormID . '_' . $pfField[ 'detID' ] . '=';

			if( ! isset( $pfField[ 'subID' ] ) ) {
				$query_string .= esc_attr( $fields[ $pfField[ 'regID' ] ][ 'value' ] );
			} else {
				$query_string .= esc_attr( $fields[ $pfField[ 'regID' ] ][ $pfField[ 'subID' ] ] );
			}
		}

		$activation_url = esc_url( rtrim( get_site_url(), '/' ) . '/' . $activation_uri . $query_string );

		$content = str_replace( '{activation_url}', $activation_url, $content );
	}

	return $content;
}
add_filter( 'wpforms_smart_tag_process', 'wpf_dev_process_smarttag_activation_url', 10, 5 );

/**
 * Display an error if the date doesn't fall within the guidelines.
 *
 * @link  https://wpforms.com/developers/how-to-provide-an-age-restriction-on-the-datepicker-form-field/
 */

function wpf_dev_check_dates() {
    ?>
    <script>
        jQuery(function($) {

        	/*
			Date of Birth
			*/
        	// Find the form and field using a custom CSS class
			sfDob = $( '.sfdob' );
			if( 0 < sfDob.length ) {
				// Determine the form and field IDs
				const sfDobFormID = sfDob.parents( '.wpforms-form' )[0].dataset.formid;
				const sfDobFieldID = sfDob[0].dataset.fieldId;
				if( sfDobFormID && sfDobFieldID ) {
					// Build the object name
					const sfDobObject = `wpforms_${sfDobFormID}_${sfDobFieldID}`;

					// DOB validation
					window[ sfDobObject ] = window[ sfDobObject ] || {};
					window[ sfDobObject ].datepicker = {
						mode: "single",
						onClose: function( selectedDates, dateStr, instance ) {
							const oldest = new Date().getFullYear() - 75;
							const youngest = new Date().getFullYear() - 23;
							var year = selectedDates[0].getFullYear();
							if ( year > youngest || year < oldest ) {
								// Inject the error
								if( 0 === $(sfDob[0]).find( 'label.wpforms-error' ).length ) {
									sfDob.append( '<label id="wpforms-' + sfDobFormID + '-field_' + sfDobFieldID + '-error" class="wpforms-error" for="wpforms-' + sfDobFormID + '-field_' + sfDobFieldID + '">Age must be between 23 and 75.</label>' );
								}
								this.clear();
							}
							else {
								// Remove the error
								if( 0 < $(sfDob[0]).find( 'label.wpforms-error' ).length ) {
									$(sfDob[0]).find( 'label.wpforms-error' ).remove();
								}
							}
						}
					}
				}
			}

			/*
			Driving licence pass date
			*/
			// Find the form and field using a custom CSS class
			sfDldPass = $( '.sfDldPass' );
			if( 0 < sfDldPass.length ) {
				// Determine the form and field IDs
				const sfDldPassFormID = sfDldPass.parents( '.wpforms-form' )[0].dataset.formid;
				const sfDldPassFieldID = sfDldPass[0].dataset.fieldId;
				if( sfDldPassFormID && sfDldPassFieldID ) {
					// Build the object name
					const sfDldPassObject = `wpforms_${sfDldPassFormID}_${sfDldPassFieldID}`;

					// DOB validation
					window[ sfDldPassObject ] = window[ sfDldPassObject ] || {};
					window[ sfDldPassObject ].datepicker = {
						mode: "single",
						onClose: function( selectedDates, dateStr, instance ) {
							const today = new Date().toISOString().substring( 0, 10 );
							if ( selectedDates[0].toISOString().substring( 0, 10 ) > today ) {
								// Inject the error
								if( 0 === $(sfDldPass[0]).find( 'label.wpforms-error' ).length ) {
									sfDldPass.append( '<label id="wpforms-' + sfDldPassFormID + '-field_' + sfDldPassFieldID + '-error" class="wpforms-error" for="wpforms-' + sfDldPassFormID + '-field_' + sfDldPassFieldID + '">Driving licence pass dates must be in the past.</label>' );
								}
								this.clear();
							}
							else {
								// Remove the error
								if( 0 < $(sfDldPass[0]).find( 'label.wpforms-error' ).length ) {
									$(sfDldPass[0]).find( 'label.wpforms-error' ).remove();
								}
							}
						}
					}
				}
			}
		});
    </script>
    <?php
}
add_action( 'wpforms_wp_footer', 'wpf_dev_check_dates', 10 );

// Change Reply-to Address for Save and Resume email
add_filter( 'wpforms_emails_mailer_get_reply_to_address', function( $reply_to, $email ) {

	if ( $email->template instanceof WPFormsSaveResume\Email\Templates\SaveResume ) {
		$reply_to = 'driver.registration@addisonlee.com'; // Change reply-to address
	}

	return $reply_to;

}, 10, 2);

// Change From Address for Save and Resume email
add_filter('wpforms_emails_mailer_get_from_address', function($from_address, $email){

	if ( $email->template instanceof WPFormsSaveResume\Email\Templates\SaveResume ) {
		$from_address = 'driver.registration@addisonlee.com'; // Change from address
	}

	return $from_address;

}, 10, 2);
