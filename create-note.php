<?php
include "vendor/autoload.php";
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
$client = new Client();
$headers = [
  'Authorization' => 'p5SOuJaP0VFN5fTsSfEdaeI0Ncbyez2d',
  'Content-Type' => 'application/json'
];
$body = '{
  "text": "candelaria.aleeyajenzen@auf.edu.ph",
  "view_state": {
    "name": "public"
  }
}';
$request = new Request('POST', 'https://ipt10-2022.mantishub.io/api/rest/issues/7/notes', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
