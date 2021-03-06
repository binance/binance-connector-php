<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->marginRepay(
    'BTC',
    1.01,
    [
        'symbol' => 'BNBUSDT',
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
