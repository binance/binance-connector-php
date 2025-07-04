<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->subAccountUniversalTransfer(
    'SPOT',
    'COIN_FUTURE',
    'BTC',
    1.01,
    [
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
