<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->convertPlaceLimitOrder(
    'BNB',
    'BTC',
    1.01,
    'BUY',
    'SPOT',
    [
        'baseAsset' => 'BNB',
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
