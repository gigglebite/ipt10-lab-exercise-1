<?php
include "vendor/autoload.php";
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

$client = new Client();
define('TOKEN', 'p5SOuJaP0VFN5fTsSfEdaeI0Ncbyez2d');
define('MANTISHUB_URL', 'https://ipt10-2022.mantishub.io/');

$headers = [
  'Authorization' => 'p5SOuJaP0VFN5fTsSfEdaeI0Ncbyez2d',
  'Content-Type' => 'application/json'
];
$body = '{
  "username": "gigolbyte",
  "password": "hoho1434!",
  "real_name": "Aleeya Jenzen M. Candelaria",
  "email": "candelaria.aleeyajenzen@auf.edu.ph",
  "access_level": {
    "name": "updater"
  },
  "enabled": false,
  "protected": false
}';
$request = new Request('POST', 'https://ipt10-2022.mantishub.io/api/rest/users/', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
