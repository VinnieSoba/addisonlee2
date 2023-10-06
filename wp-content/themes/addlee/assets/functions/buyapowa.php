<?php

function decrypt_buyapowa_url() {
                        
    // Get Buyapowa params
    if(isset($_GET['bp_e'])) {
        $str = $_GET['bp_e'];
    } else {
        $str = "";
    }

    $base64decode = base64_decode($str);

    $method = "AES-256-ECB";
    $key = "40c6bace-719a-45d3-944a-05c7a5a8";
    $iv = "";
    $decrypted = openssl_decrypt($base64decode, $method, $key, OPENSSL_RAW_DATA, $iv);

    $data = json_decode($decrypted);
    // var_dump($data);
    return $data;

}

function buyapowa_app_link(){
    if(isset($_GET['bp_e'])) { 
        $buyapowa_data = decrypt_buyapowa_url();
        $branch_url = 'https://api.branch.io/v1/url';
        $voucher_code = $buyapowa_data->voucher_code;
        // echo $voucher_code;
        $data = array(
            'branch_key' => 'key_live_jpf7Vbk1fh3MXu2O1bYwDgefFwgKvuJo', 
            'branch_secret' => 'secret_live_DxVnf7gpaVD4sCtYBSgvaVVlvKPicQ8m',
            "data" => array(
                'promo' => $voucher_code ? $voucher_code : ''
            )
        );    

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = json_decode(file_get_contents($branch_url, false, $context));
        $branch_link = $result->url;
        
        if ($result === FALSE) { 
            return 'There\'s been an error, please refresh the page and try again';
        }
        if ($branch_link) {
//            return '
//            <a href="'.$branch_link.'" class="cta" id="branch-link">Download the app</a>
//            <script language="javascript" type="text/javascript">
//                jQuery(document).ready(function ($) {
//                    setTimeout(function() {
//                      window.location = "'.$branch_link.'"
//                    }, 2000);
//                });
//            </script>';
//            return '';
            // wp_redirect( $branch_link );
            header( 'HTTP/1.1 301 Moved Permanently' );
            header('Location: '. $branch_link);
            exit;
        } else {
            return 'Invalid promo code';
        }
    } else {
        return 'Invalid referral.';
    }

}
add_shortcode( 'buyapowaapplink', 'buyapowa_app_link' );

?>