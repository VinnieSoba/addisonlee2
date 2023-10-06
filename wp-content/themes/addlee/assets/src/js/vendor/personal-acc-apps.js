var ajax_call_made = 0;
jQuery(document).ready(function ($) {
    jQuery('.nomatch').hide();
    jQuery('#input_43_68').change();
    jQuery("#field_43_82").append("<a id='manual-address-entry' class='pull-right' href='javascript:manualAddressEntry();' style='font-size:10px;margin-bottom:20px;text-align:right'>Enter address manually</a>");
    jQuery("#field_43_47,#input_43_47_1_container").hide();
});
jQuery("#gform_43").on("submit", function () {
    if (ajax_call_made == 1) {
        return true;
    }
    var fieldSet = validateFields();
    if (fieldSet === false) {
        return false;
    }
    jQuery('#gform_submit_button_43').hide();
    jQuery(".gform_footer").append('<img id="footer_ajax" src="/img/ajax-loader-trans.gif" />').show();
    jQuery.ajax({
        url: "/wp-content/themes/addlee/assets/src/priority-account-apps/php/callreport.php",
        dataType: 'JSON',
        type: 'POST',
        data: JSON.stringify(fieldSet),
        success: onCallResponseSucess,
        error: onCallResponseError,
        contentType: 'application/json; charset=utf-8'
    });
    return false;
});

// toggle product type
jQuery('#input_43_38').change(function () {
    if (jQuery('#choice_43_38_0').is(":checked")) {
        jQuery("#choice_43_86_0").prop("checked", true);
    } else {
        jQuery("#choice_43_86_1").prop("checked", true);
    }
});


function manualAddressEntry() {
    jQuery("#field_43_47").toggle();
    if (jQuery('#field_43_47').css('display') == 'none') {
        jQuery('#manual-address-entry').html('Enter address manually');
        jQuery('#field_43_66').show();
        jQuery('#input_43_66').val('');
        jQuery('#input_43_47_1').val('');
        jQuery('#input_43_47_2').val('');
        jQuery('#input_43_47_3').val('');
        jQuery('#input_43_47_4').val('');
        jQuery('#input_43_47_5').val('');
        jQuery('#input_43_83').val('');
        jQuery('#input_43_81').val('');
    } else {
        jQuery('#manual-address-entry').html('Search for an address');
        jQuery('#field_43_66').hide();
        jQuery('#input_43_66').val(0);
        jQuery('#input_43_47_1').val('');
        jQuery('#input_43_47_2').val('');
        jQuery('#input_43_47_3').val('');
        jQuery('#input_43_47_4').val('');
        jQuery('#input_43_47_5').val('');
        jQuery('#input_43_83').val(0);
        jQuery('#input_43_81').val('');
    }
}
jQuery("#input_43_66").keypress(function (evt) {
    var charCode = evt.charCode || evt.keyCode;
    if (charCode == 13) {
        return false;
    }
});

function onCallResponseSucess(response) {
    jQuery('#seachbtn').hide();
    jQuery("#clientresult").empty();
    if (response !== "null" || response != null || response != {} || response != undefined || response !== "") {
        var individualResponse = response;
        if (!individualResponse) {
            onCallResponseError();
            return;
        }
        appendIndividualDetails(individualResponse);
        return;
    }
    onCallResponseError();
}

function onCallResponseError(response, error) {
    jQuery("#input_43_64").val(3);
    jQuery('#input_43_64').change();
    ajax_call_made = 1;
    jQuery("#gform_43")[0].submit();
    alert(error);
}

function appendIndividualDetails(individualResponse) {
    jQuery("#clientresult").hide();
    var creditscore = false;
    for (var i = 0; i < individualResponse.length; i++) {
        if (individualResponse[i].hasOwnProperty('value')) {
            if (individualResponse[i].tag == "SCORE") {
                jQuery("#input_43_71").val(individualResponse[i].value);
                if (individualResponse[i].value == 9999) {
                    jQuery("#input_43_64").val(3);
                    jQuery('#input_43_64').change();
                    jQuery('#seachbtn').hide();
                } else if (individualResponse[i].value > 549) {
                    jQuery("#input_43_64").val(1);
                    jQuery('#input_43_64').change();
                    jQuery('#seachbtn').hide();
                } else {
                    jQuery("#input_43_64").val(2);
                    jQuery('#input_43_64').change();
                    jQuery('#seachbtn').hide();
                }
                creditscore = false;
            }
        }
    }
    ajax_call_made = 1;
    jQuery("#gform_43")[0].submit();
}

function validateFields() {
    var dob = "";
    var mon = "";
    if (jQuery('#input_43_56_1').val() < 10) mon = "0" + jQuery('#input_43_56_1').val();
    else
        mon = jQuery('#input_43_56_1').val();
    if (jQuery('#input_43_56_2').val() < 10) dob = "0" + jQuery('#input_43_56_2').val();
    else
        dob = jQuery('#input_43_56_2').val();
    var fields = {
        "title": jQuery('#input_43_29').val(),
        "firstName": jQuery('#input_43_73').val(),
        "lastName": jQuery('#input_43_74').val(),
        "searchField": jQuery('#input_43_66').val(),
        "houseNumber": jQuery('#input_43_47_1').val(),
        "street": jQuery('#input_43_47_2').val(),
        "city": jQuery('#input_43_47_3').val(),
        "postCode": jQuery('#input_43_47_5').val(),
        "postCodeHidden": jQuery('#input_43_83').val(),
        "doby": jQuery('#input_43_56_3').val(),
        "dobm": jQuery('#input_43_56_1').val(),
        "dobd": jQuery('#input_43_56_2').val(),
        "mobile": jQuery('#input_43_14').val(),
        "email": jQuery('#input_43_12').val()
    };
    var error_found = false;
    if (!validateEmptyField(fields.title, 'Title', '#input_43_29')) {
        error_found = true;
    }
    if (!validateEmptyField(fields.firstName, 'First Name', '#input_43_73')) {
        error_found = true;
    }
    if (!validateEmptyField(fields.lastName, 'Last Name', '#input_43_74')) {
        error_found = true;
    }
    if (!validateEmptyField(fields.email, 'Email', '#input_43_12')) {
        error_found = true;
    }

    if (!validateEmptyField(fields.searchField, 'Search', '#input_43_66')) {
        error_found = true;
    }
    if (!validateEmptyField(fields.street, 'Street Address', '#input_43_47_2')) {
        error_found = true;
    }
    if (!validateEmptyField(fields.city, 'City', '#input_43_47_3')) {
        error_found = true;
    }
    if (!validateEmptyField(fields.postCode, 'Post Code', '#input_43_47_5')) {
        error_found = true;
    }
    if (!validateEmptyField(fields.postCodeHidden, 'Post Code Hidden', '#input_43_83')) {
        error_found = true;
    }

    $dob_error = false;
    if (!validateEmptyField(fields.doby, 'year', '#input_43_56_3')) {
        error_found = true;
        $dob_error = true;
    }
    if (!validateEmptyField(fields.dobm, 'month', '#input_43_56_1')) {
        error_found = true;
        $dob_error = true;
    }
    if (!validateEmptyField(fields.dobd, 'day', '#input_43_56_2')) {
        error_found = true;
        $dob_error = true;
    }


    if($dob_error == false) {

        jQuery("#input_43_56err").remove();

        $age_error = validateAge(fields.dobd, fields.dobm, fields.doby);

        if($age_error) {
            error_found = true;
        }
    }
    else {
        jQuery("#input_43_56").append('<div class="ginput_container" id="input_43_56_3err"><div class="gfield_description validation_message">Please enter your date of birth</div></div>');
    }

    if (!validateEmptyField(fields.mobile, 'Mobile', '#input_43_14')) {
        error_found = true;
    }
    var pay_method = jQuery("input:radio[name=input_38]:checked").val();
    if (pay_method == '' || typeof pay_method === 'undefined') {
        jQuery("#inp_43_38_err").remove();
        jQuery("#input_43_38").parent().append('<div id="inp_43_38_err" class="gfield_description validation_message">Please select a payment method.</div>');
        error_found = true;
    } else {
        jQuery("#inp_43_38_err").remove();
    }
    if (!jQuery('#choice_43_69_1').is(':checked')) {
        jQuery("#inp_43_69_err").remove();
        jQuery("#choice_43_69_1").parent().append('<div id="inp_43_69_err" class="gfield_description validation_message">Please check the box to accept the Terms and Conditions of Trading.</div>');
        error_found = true;
    } else {
        jQuery("#inp_43_69_err").remove();
    }
    if (jQuery("#input_43_47_5").val().length > 20) {
        jQuery("#input_43_47_5_err").remove();
        jQuery("#input_43_47_5").parent().append('<div id="input_43_47_5_err" class="gfield_description validation_message">No more than 20 characters.</div>');
        error_found = true;
    } else {
        jQuery("#input_43_47_5_err").remove();
    }
    if (jQuery("#input_43_14").val().length < 6) {
        jQuery("#input_43_14_err").remove();
        jQuery("#input_43_14").parent().append('<div id="input_43_47_5_err" class="gfield_description validation_message">Please enter a valid mobile number</div>');
        error_found = true;
    } else if (jQuery("#input_43_14").val().length > 20) {
        jQuery("#input_43_14_err").remove();
        jQuery("#input_43_14").parent().append('<div id="input_43_47_5_err" class="gfield_description validation_message">No more than 20 characters.</div>');
        error_found = true;
    } else {
        jQuery("#input_43_14_err").remove();
    }
    if (error_found) {
        window["gf_submitting_43"] = false;
        return false;
    }
    return fields;
}

function validateAge($dobd, $dobm, $doby) {
    var today = new Date();

    //var dob = dateString.split("/");
   // var birthDate = new Date(dob[2], dob[1] - 1, dob[0]);

    var birthDate = new Date($doby, $dobm - 1, $dobd);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }

    if(age < 18) {
        jQuery("#input_43_56").append('<div class="ginput_container" id="input_43_56_3err"><div class="gfield_description validation_message">Sorry, you must be over 18 years old to apply for a personal account</div></div>');
        return true;
    }
    else {
        jQuery("#input_43_56err").remove();
        return false;
    }

}

function validateEmptyField($fieldValue, $field, id) {
    if ($fieldValue === "") {
        jQuery(id + "err").remove();
        if ($field == 'Title') {
            jQuery("#input_43_29").parent().parent().append('<div id="' + id.replace('#', '') + 'err" class="gfield_description validation_message" style="width:50%">Please enter your title</div>');
            address_error = true;
            error = true;
        }
        if ($field == 'First Name') {
            jQuery("#input_43_73").parent().append('<div id="' + id.replace('#', '') + 'err" class="gfield_description validation_message">Please enter your first name</div>');
            address_error = true;
            error = true;
        }
        if ($field == 'Last Name') {
            jQuery("#input_43_74").parent().append('<div id="' + id.replace('#', '') + 'err" class="gfield_description validation_message">Please enter your last name</div>');
            address_error = true;
            error = true;
        }
        if ($field == 'Email') {
            jQuery("#input_43_12").parent().append('<div id="' + id.replace('#', '') + 'err" class="gfield_description validation_message">Please enter your email</div>');
            address_error = true;
            error = true;
        }
        if ($field == 'Street Address') {
            jQuery("#input_43_47_2").parent().append('<div id="' + id.replace('#', '') + 'err" class="gfield_description validation_message">Please enter street address</div>');
            address_error = true;
            error = true;
        }
        if ($field == 'City') {
            jQuery("#input_43_47_3").parent().append('<div id="' + id.replace('#', '') + 'err" class="gfield_description validation_message">Please enter city</div>');
            address_error = true;
            error = true;
        }
        if ($field == 'Post Code') {
            jQuery("#input_43_47_5").parent().append('<div id="' + id.replace('#', '') + 'err" class="gfield_description validation_message">Please enter postcode</div>');
            address_error = true;
            error = true;
        }
        if ($field == 'Post Code Hidden') {
            jQuery("#input_43_66").parent().append('<div id="' + id.replace('#', '') + 'err" class="gfield_description validation_message">Please enter your postcode and select an option from the list</div>');
            address_error = true;
            error = true;
        }
        jQuery(id).focus();
        return false;
    } else {
        jQuery(id + "err").remove();
    }
    return true;
}

function validateNumericField($fieldValue, $field) {
    if (!parseInt($fieldValue)) {
        alert('Field "' + $field + '" should be a number');
        return false;
    }
    return true;
}
