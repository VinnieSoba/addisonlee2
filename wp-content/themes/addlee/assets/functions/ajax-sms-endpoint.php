<?php
add_action('wp_ajax_send_app_sms', 'al_send_app_sms');
add_action('wp_ajax_nopriv_send_app_sms', 'al_send_app_sms');

function al_send_app_sms() {
    check_ajax_referer('al_nonce', 'security');

    $response = array();
    $error = false;

    $link = 'https://addisonlee.app.link/R3bcbcBd2F';
    $number = $_POST['number'];


    if (is_numeric($number)) {

        $client_ip = al_get_client_ip();

        if($client_ip != 'UNKNOWN') {

            al_log_action_request($client_ip, 'download_app_sms');

            if(al_action_ip_check($client_ip, 'download_app_sms')) {
                $url = urlencode($link);
                $body = "Get the Addison Lee app at {$url}";

                $data = "EsendexUsername=sms_web@addisonlee.com&EsendexPassword=D2zud7#tamut&EsendexAccount=447800140060&" .
                    "EsendexRecipient={$number}&EsendexBody={$body}&PlainText=true";

                $curl_handle = curl_init();
                $url = "https://www.esendex.com/secure/messenger/formpost/SendSMS.aspx";
                curl_setopt($curl_handle, CURLOPT_URL, $url);
                curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data);
                curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, false);  //so we can post to https
                $result = curl_exec($curl_handle);
                $response['result'] = $result;
                curl_close($curl_handle);
            }
            else {
                $response['errorMessage'] = "Your IP has reached the daily SMS limit.";
                $error = true;
            }

        }
        else {
            $response['errorMessage'] = "Error sending SMS please try again.";
            $error = true;
        }

    }
    else {
            $response['errorMessage'] = "Please provide your mobile number.";
            $error = true;
    }


    $response['error'] = $error;

    echo json_encode($response);
    exit;
}
?>