<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->userAsset();

echo json_encode($response);
