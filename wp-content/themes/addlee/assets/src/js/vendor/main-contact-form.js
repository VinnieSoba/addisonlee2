jQuery(document).ready(function ($) {
   
function gfValidator(Form){
     if (Form.input_5.value == ""){
        $('#field_58_5').append('<div class="gfield_description validation_message">Please enter your first name</div>');
        Form.input_5.focus();
        return false;
        }
    else if (Form.input_6.value == "") {
        $('#field_58_6').append('<div class="gfield_description validation_message">Please enter your last name</div>');
        Form.input_6.focus();
        return false;
    }
    else if (Form.input_7.value == "") {
        $('#field_58_7').append('<div class="gfield_description validation_message">Please enter your email</div>');
        Form.input_7.focus();
        return false;
    }
    else if (Form.input_8.value == "") {
        $('#field_58_8').append('<div class="gfield_description validation_message">Please enter your phone number</div>');
        Form.input_8.focus();
        return false;
    }
    else if (Form.input_11.value == "") {
        $('#field_58_11').append('<div class="gfield_description validation_message">Please enter subject</div>');
        Form.input_11.focus();
        return false;
    }
    else if (Form.input_12.value == "") {
        $('#field_58_12').append('<div class="gfield_description validation_message">Please enter your comments</div>');
        Form.input_12.focus();
        return false;
    }
    else {
        $("#gform_58").submit();
    }
    }   
     $("#gform_submit_button_58").click(function() {
         $('.validation_message').remove();
        return gfValidator(gform_58);

    });
    
});