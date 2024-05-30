<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->marginCapitalFlow(
    [
        'asset' => 'BNB',
        'symbol' => 'BNBUSDT',
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
