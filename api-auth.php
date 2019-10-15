<?php

if (isset($_POST['change-valuta'])) {
  $valuta = $_POST['change-valuta'];
}elseif (isset($_GET['valutadett'])) {
  $valuta = $_GET['valutadett'];
}else {
  $valuta = "EUR";
}



$url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
$parameters = [
  'start' => '1',
  'limit' => '100',
  'convert' => $valuta
];

$headers = [
  'Accepts: application/json',
  'X-CMC_PRO_API_KEY: ************************'
];
$qs = http_build_query($parameters); // query string encode the parameters
$request = "{$url}?{$qs}"; // create the request URL


$curl = curl_init(); // Get cURL resource
// Set cURL options
curl_setopt_array($curl, array(
  CURLOPT_URL => $request,            // set the request URL
  CURLOPT_HTTPHEADER => $headers,     // set the headers 
  CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
));

$response = curl_exec($curl); // Send the request, save the response
// print_r(json_decode($response)); // print json decoded response

$obj = json_decode($response);
$values = $obj->data;


$allId = "";
foreach ($values as $value){
  $allId .= $value->id.",";
}


curl_close($curl); // Close request




$url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/info';
$parameters = [
  'id' => rtrim(strval($allId),',')
];

$headers = [
  'Accepts: application/json',
  'X-CMC_PRO_API_KEY: ************************'
];
$qs = http_build_query($parameters); // query string encode the parameters
$request = "{$url}?{$qs}"; // create the request URL


$curl = curl_init(); // Get cURL resource
// Set cURL options
curl_setopt_array($curl, array(
  CURLOPT_URL => $request,            // set the request URL
  CURLOPT_HTTPHEADER => $headers,     // set the headers 
  CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
));

$response = curl_exec($curl); // Send the request, save the response


$obj = json_decode($response);
$valuesInfo = $obj->data;



$allLogos = array();
foreach ($valuesInfo as $valueInfo){
 $allLogos[] = $valueInfo->logo;
}

// print_r($allLogos);

curl_close($curl); // Close request

?>