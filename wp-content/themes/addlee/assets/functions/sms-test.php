<?php function respond($response)
{
	echo json_encode($response);
	exit;
}

if($_REQUEST['test'] == 'AL2017') {
    $link = 'https://addisonlee.app.link/R3bcbcBd2F';
    $number = '07902 355450';

    if (is_numeric($number)) {
        $url = urlencode($link);
        $body = "Get the Addison Lee app at {$url}";

        $data = "EsendexUsername=sms_web@addisonlee.com&EsendexPassword=D2zud7#tamut&EsendexAccount=EX0060682&" .
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

    respond($response);
}
else {
    echo 'Go away';
}
?>