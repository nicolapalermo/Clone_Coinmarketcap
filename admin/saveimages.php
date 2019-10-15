<?php

if (isset($_POST['limit'])) {
  $limit = $_POST['limit'];
}else {
  header('Location: index.php?error=selectalimit');
}

$url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
$parameters = [
  'start' => '1',
  'limit' => $limit,
  'convert' => 'USD'
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


foreach ($valuesInfo as $valueInfo){
$context = stream_context_create(array(
    'http' => array(
        'ignore_errors' => true,
        'header' => "User-Agent:MyAgent/1.0\r\n"
     )
));

$url = $valueInfo->logo;
preg_match("/[^\/]+$/", $url, $matches);
$imageName = $matches[0];
$img = '../images/loghi/'.$imageName;
file_put_contents($img, file_get_contents($url, FALSE, $context)); 
}


curl_close($curl); // Close request
header('Location: index.php?error=noerror');
?>