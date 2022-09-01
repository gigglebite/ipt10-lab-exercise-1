<!DOCTYPE HTML>
<html lang="en">
<?php
include "vendor/autoload.php";
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

define('TOKEN', '[p5SOuJaP0VFN5fTsSfEdaeI0Ncbyez2d]');
define('MANTISHUB_URL', 'https://ipt10-2022.mantishub.io/');

$client = new Client();
$headers = [
  'Authorization' => 'p5SOuJaP0VFN5fTsSfEdaeI0Ncbyez2d'
];
$request = new Request('GET', 'https://ipt10-2022.mantishub.io/api/rest/issues?page_size=10&page=1', $headers);
$res = $client->sendAsync($request)->wait();
$bugs = $res->getBody()->getContents();
$bugs_list = json_decode($bugs);

?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
  <h1> IPT10 Bugs List </h1>
  <a><h3>CANDELARIA ALEEYA JENZEN M.</h3></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Summary</th>
      <th scope="col">Severity</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
<?php
foreach ($bugs_list->issues as $bug)
{
	echo '<tr>'. '<th scope="row">' . $bug->id . '</th>' . '<td>' .
$bug->summary . '</td>' . '<td>' .
$bug->severity->name . '</td>' . '<td>' .
$bug->status->name . '</td>' . '</tr>';
}
?>
<!--
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> !-->
  </tbody>
</table>
</body>
</html>
