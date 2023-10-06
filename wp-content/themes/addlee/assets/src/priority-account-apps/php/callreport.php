<?php
/**
 * Created by PhpStorm.
 * User: stanislav
 * Date: 6/3/14
 * Time: 6:35 PM
 */

ini_set('display_errors', 1);
error_reporting(E_ERROR);


include_once "callreport/Services_CallReport_70.php";

$company = '965322967';
$userName = 'Michael Galvin';
$password = 'WJ8K7EN%b';

// $post = json_decode($HTTP_RAW_POST_DATA); // "$HTTP_RAW_POST_DATA"  deprecated in PHP 7

/**
 * PHP 7 equivalent of $HTTP_RAW_POST_DATA
 * See https://www.php.net/manual/en/reserved.variables.httprawpostdata.php
 */
$http_raw_post_data = file_get_contents("php://input"); 
$post = json_decode($http_raw_post_data); 


//$post = json_decode('{"title":"Mr.","firstName":"Matty","lastName":"Catherham","houseNumber":"25-35","street":"TOP GEAR LANE","city":"TEST TOWN","postCode":"X9 9LF","doby":"1996","dobm":"6","dobd":"6","phone":"447824997214"}');

$service = new Services_CallReport_70;

$service->setHeader($company, $userName, $password);

$service->setClient();

$title =  $post->title;
$forename = $post->firstName;
$othernames = '';
$surname = $post->lastName;
$service->setApplicantName('title', $title);
$service->setApplicantName('forename', $forename);
$service->setApplicantName('surname', $surname);

if ($post->dobm < 10) $post->dobm = '0' . $post->dobm;
if ($post->dobd < 10) $post->dobd = '0' . $post->dobd;
$dob = $post->doby.'-'.$post->dobm.'-'.$post->dobd;


$service->setApplicant('dob', $dob);
$service->setApplicant('applicantdemographics', "");

$buildingno = $post->houseNumber;
$postcode = $post->postCode;
$service->setApplicantAddress('abodeno', '');
$service->setApplicantAddress('buildingno', $buildingno);
$service->setApplicantAddress('buildingname', '');
$service->setApplicantAddress('street1', '');
$service->setApplicantAddress('street2', '');
$service->setApplicantAddress('sublocality', '');
$service->setApplicantAddress('locality', '');
$service->setApplicantAddress('posttown', '');
$service->setApplicantAddress('postcode', $postcode);

$response = $service->cr70Search();

if ( $response == "match") {
    $xmlParser = xml_parser_create();
    $result = null;
    xml_parse_into_struct($xmlParser, $service->getXMLResult(), $result);
    echo json_encode($result);
	//$fl = fopen("log/log.txt", "w");
	//fwrite($fl, print_r($result, 1));
	//fclose($fl);
}
