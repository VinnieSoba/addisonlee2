<?php
/**
 * Created by PhpStorm.
 * User: stanislav
 * Date: 5/14/14
 * Time: 11:49 AM
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

    $company = null;

    include("gdp/wsp_GDP_V4.php");

    // $post = json_decode($HTTP_RAW_POST_DATA); // "$HTTP_RAW_POST_DATA"  deprecated in PHP 7

    /**
     * PHP 7 equivalent of $HTTP_RAW_POST_DATA
     * See https://www.php.net/manual/en/reserved.variables.httprawpostdata.php
     */
    $http_raw_post_data = file_get_contents("php://input"); 
    $post = json_decode($http_raw_post_data); 

    $dunsNumber = $post->dunsNumber;


    $userId = "addleelive";
    $password = "addleelive1";

    $appId = "353";
    $appVer = "";

    $TRNUID = "";
    $SRVRTID = "";

    $socCode = new socCode($appId, $appVer);

    $userLanguage = "EN";
    $countryCode = "GB";
    $product = "GDM";
    $productType = "D";

    $orders = new Orders($userLanguage, $dunsNumber, $countryCode, "", $product, $productType, "", "", "", "", "");

    $mode = "DIRECT";
    $format = "XML";
    $immediateDelivery = new Immediate_Delivery($mode, $format, "", "", "", "", "");

    $investigationDelivery = new Immediate_Delivery("", "", "", "", "", "", "");
    $notificationDelivery = new NotificationDelivery("", "", "", "", "", "", "", "", "", "", "", "", "", "");
    $investigation = new Investigation($investigationDelivery, $notificationDelivery);

    $prodOrderRequest_3 = new prodOrderRequest_3($userId, $password, $TRNUID, $SRVRTID, $socCode, $orders, $immediateDelivery, $investigation, array());

    $wsOrderProducts = new ws_GDM($prodOrderRequest_3);

    $client = new wsp_GDP_V4();
    $company = $client->ws_GDM($wsOrderProducts);

    $company = $company->gdmResponse->DGX->CREDITMSGSRSV2->DATATRNRS;



    echo json_encode($company);

?>