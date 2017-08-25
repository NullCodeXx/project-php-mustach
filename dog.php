<?php
/* 
    1. Librairie HTTP COMPOSER: http://requests.ryanmccue.info/
    2. install : https://github.com/rmccue/Requests
    3. Doc 100% request : http://requests.ryanmccue.info/api/
*/
/*
    1. Faire une page dog.php
    2. Faire une requête HTTP via GUZZLE sur DOGCEO
*/
require('vendor/autoload.php'); //Toujours en haut de tout mes fichiés.
$c = new \GuzzleHttp\Client();
//Crée une requête
$res = $c->request(
    'GET', 
    'https://dog.ceo/api/breeds/list/all'
);

echo $res->getStatusCode();
echo $res->getBody();
echo '\n';


$obj = json_decode($res->getBody());
var_dump($obj->message->wolfhound);
echo '\n';
?>