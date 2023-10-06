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

    include("worldbase/wsp_WorldBase_V3.php");

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
    $product = "Worldbase Marketing Plus";
    $productType = "D";

    $orders = new Orders($userLanguage, $dunsNumber, $countryCode, "", $product, $productType, "", "", "", "", "");

    $mode = "DIRECT";
    $format = "XML";
    $immediateDelivery = new Immediate_Delivery($mode, $format, "", "", "", "", "");

    $investigationDelivery = new Immediate_Delivery("", "", "", "", "", "", "");
    $notificationDelivery = new NotificationDelivery("", "", "", "", "", "", "", "", "", "", "", "", "", "");
    $investigation = new Investigation($investigationDelivery, $notificationDelivery);

    $prodOrderRequest_2 = new prodOrderRequest_2($userId, $password, $TRNUID, $SRVRTID, $socCode, $orders, $immediateDelivery, $investigation, array());

    $wsWorldBase = new ws_WorldBase($prodOrderRequest_2);

    $client = new wsp_WorldBase_V3();
    $company = $client->ws_WorldBase($wsWorldBase);

    $company = $company->worldBaseResponse->DGX->CREDITMSGSRSV2->DATATRNRS;


    //var_dump($company);

    echo json_encode($company);

?>