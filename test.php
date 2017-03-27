<?php
/**
 * Created by PhpStorm.
 * User: ritesh
 * Date: 27/03/17
 * Time: 10:39 AM
 */

require_once 'src/PdfClient.php';

$userId = "<your-user-id>";
$apiKey = "<your-api-key>";


// make some dummy data in order to call pdf api
$data = array(

    'date' => 10,
    'month' => 12,
    'year' => 1993,
    'hour' => 1,
    'minute' => 25,
    'latitude' => 19,
    'longitude' => 72,
    'timezone' => 5.5,
);



// instantiate PdfClient class
$pdfClient = new PdfClient($userId, $apiKey);

//set the language here
$pdfClient->setLanguage('hi');



//*****************PDF call****************//
$pdfResponse = $pdfClient->call($data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']);


// get JSON response of Pdf Client
echo $pdfResponse;
echo "\n";