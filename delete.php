<?php

include('vendor/autoload.php');
use GuzzleHttp\Client;

define('MONGODB_API_BASE_URL', 'https://data.mongodb-api.com/app/data-miegi/endpoint/data/v1/');
define('API_KEY', 'nAWyd6Dl4TkWVGC8f9OFaSIZ3ygk0U3JXXF8WLmbNmSakcVNXiRqbFKqbLTMx6Dh');

$client = new Client([
    'base_uri' => MONGODB_API_BASE_URL,
    'headers' => [
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
        'api-key' => API_KEY
    ]
]);

$registration_endpoint = 'action/deleteOne';

$data = $client->post($registration_endpoint, [
        'json' => [
        'dataSource' => 'Cluster0',
        'database' => 'quiz',
        'collection' =>'sample',
        'filter' => ['name' => 'Aaron']
        ]
     
]);

var_dump($data);


?>