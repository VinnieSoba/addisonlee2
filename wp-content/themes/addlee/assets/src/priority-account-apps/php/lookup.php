<?php
/**
 * Created by PhpStorm.
 * User: stanislav
 * Date: 5/14/14
 * Time: 11:44 AM
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

    include("lookup/wsp_LookUp_V1.php");

    // $post = json_decode($HTTP_RAW_POST_DATA); // "$HTTP_RAW_POST_DATA"  deprecated in PHP 7

    /**
     * PHP 7 equivalent of $HTTP_RAW_POST_DATA
     * See https://www.php.net/manual/en/reserved.variables.httprawpostdata.php
     */
    $http_raw_post_data = file_get_contents("php://input"); 
    $post = json_decode($http_raw_post_data); 

    $companyName = "";
    $businessNumber = "";

    if ($post->companyName != "") {
        $companyName = $post->companyName;
    }

    if ($post->businessNumber != "") {
        $businessNumber = $post->businessNumber;
    }

    $streetAddress = "";

    if ($post->streetAddress != "") {
    //    $streetAddress = $post->streetAddress;
    }

    $town = "";

    if ($post->town != "") {
    //    $town = $post->town;
    }

    $postalCode = "";

    if ($post->postalCode != "") {
    //    $postalCode = $post->postalCode;
    }


    $userId = "addleelive";
    $password = "addleelive1";

    $appId = "353";
    $appVer = "";

    $TRNUID = "";

    $socCode = new socCode($appId, $appVer);

    $country_Code = "GB";
    $lookUpInput = new lookUpInput($companyName, $streetAddress, $town, "", $postalCode, "", "", $country_Code, $businessNumber, "", "", "", "", "", "");

    $lookUpInput->Name = $companyName;

    $lookUpRequest = new lookUpRequest($userId, $password, $TRNUID, $socCode, $lookUpInput);
    $wsLookUpRequest = new ws_LookUp($lookUpRequest);

    $client = new wsp_LookUp_V1();

    $lookUpResponse = $client->ws_LookUp($wsLookUpRequest);

    $companies = array();

    if ($lookUpResponse->lookupResponse->DGX->CREDITMSGSRSV2->LOOKUPTRNRS->STATUS->CODE == 0) {
        $companies = $lookUpResponse->lookupResponse->DGX->CREDITMSGSRSV2->LOOKUPTRNRS->LOOKUPRS->LOOKUPRSCOMPANY->ArrayOfLOOKUPRSCOMPANYItem;
    }

	//if (trim($postalCode)){
	if (false){	
		$newcompanies = array();
		foreach( $companies as $company ){
			if ( preg_match( "/" . $postalCode . "/i", $company->POST_CODE ) ){
				$newcompanies[] = $company;
			}
		}
		echo json_encode($newcompanies);
	} else {
		echo json_encode($companies);
	}
?>