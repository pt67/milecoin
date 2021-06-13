<?php
namespace milecoin;
include_once "vendor/autoload.php";

$request = new \Comodojo\Httprequest\Httprequest('https://rest.coinapi.io/v1/exchanges');
$request->setHttpMethod('GET');
$request->setHeader(array(
  'X-CoinAPI-Key' => '8C8FBC8A-786D-48B7-B728-342F5469B96F'
));

try {
  $response = $request->send();
  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}



?>

