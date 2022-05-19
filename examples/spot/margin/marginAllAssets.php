<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';

$client = new \Binance\Spot([
    'key'  => $key
]);

$response = $client->marginAllAssets();

echo json_encode($response);
